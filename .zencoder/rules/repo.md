---
description: Repository Information Overview
alwaysApply: true
---

# sito-locanda Information

## Summary
I Benedettini is a static multilingual restaurant website distributed as plain HTML, CSS, and vanilla JavaScript. The landing page delivers multi-language content (Italian, English, French) with client-side language switching, a privacy consent banner compliant with European requirements, and dynamic background transitions. Supporting assets include localized imagery, downloadable menus/catalogs in PDF, and a lightweight PHP webhook that automates redeployment by updating the live clone via Git pull when GitHub sends signed notifications.

## Structure
- **index.html**: Single-page application shell containing markup, inline scripts for language toggling, privacy consent state, and background transition logic.
- **style.css**: Core stylesheet defining the responsive layout, hero sections, and CTA cards; complements inline `<style>` overrides housed in the HTML head.
- **immagini/**: Media library of hero photography, language flags, and project illustrations referenced throughout the HTML interface.
- **pdf/**: Downloadable restaurant catalog and menu PDFs linked from call-to-action tiles.
- **webhook.php**: Server-side automation endpoint validating GitHub HMAC signatures and executing `git pull` inside the deployment directory for continuous delivery.
- **README.md**: Minimal placeholder file repeating the repository name.

## Language & Runtime
**Language**: HTML5, CSS3, JavaScript (ES6+), PHP
**Version**: No explicit version pins; JavaScript uses features available in evergreen browsers (e.g., `const`, template literals, `localStorage`), while PHP relies on built-ins (`hash_hmac`, `hash_equals`, `getallheaders`) available since PHP 7.0+
**Build System**: None; files are served directly by the web server
**Package Manager**: None; all dependencies are vendored or use browser-native APIs

## Dependencies
**Main Dependencies**:
- **Browser Platform**: Requires modern browser with DOM APIs, `localStorage`, `querySelectorAll`, and CSS grid support for layout responsiveness.
- **PHP Standard Library**: Depends on extensions that expose `hash_hmac`, `hash_equals`, and `getallheaders` for verifying webhook payload integrity.
- **Git**: The webhook expects `git` CLI availability on the deployment host to execute `git pull`.
- **Web Server with PHP Handler**: Apache, Nginx + PHP-FPM, or similar environment to serve static assets and run `webhook.php`.
**Development Dependencies**:
- None declared; authoring performed with plain files and browser inspection tools.

## Build & Installation
```bash
# 1. Prepare web root (Linux example)
sudo mkdir -p /var/www/html && sudo chown $USER /var/www/html

# 2. Deploy static assets
git clone https://<your-repo-host>/sito-locanda.git /var/www/html
# or copy updated workspace files if already cloned
rsync -av --delete index.html style.css immagini/ pdf/ /var/www/html/

# 3. Configure deployment automation
cp webhook.php /var/www/html/
# Within webhook.php, set $secret to match GitHub webhook secret
```
Deployments are achieved by mirroring repository files into the web server document root. Because there is no bundler or asset pipeline, the server can deliver resources directly without preprocessing. Owners can either manually synchronize changes via `rsync`/`scp` or rely on the webhook to pull updates when GitHub triggers repository events.

## Main Entry Points & Application Structure
- **HTML Structure**: `index.html` organizes sections for hero CTAs, cultural storytelling, social project, and contact information; each section uses `data-translate` attributes enabling language-specific content injection by JavaScript functions (`translations` and `setLanguage`).
- **Styling Layers**: Global aesthetics originate in `style.css`, while the inline `<style>` block inside `index.html` refines behavior for the dynamic background, language selector positioning, and privacy banner animation.
- **JavaScript Logic**: Inline script at the bottom of `index.html` handles translation switching, persistence of user language via `localStorage`, privacy consent display toggling, modal interactions, and DOM-driven background slideshow initialization.
- **Server Automation**: `webhook.php` is the sole executable entry point, invoked over HTTP POST by GitHub webhooks. It validates the HMAC signature using the shared secret, records events to `/var/log/webhook.log`, and triggers `git pull` inside `/var/www/html` to update site assets.

## Usage & Operations
1. **Local Preview**: Open `index.html` directly in a browser; no HTTP server is necessary for previewing static behavior, though language persistence and privacy banner rely on browser local storage.
2. **Content Editing**: Modify text inside the `translations` object for each language, ensuring keys align with `data-translate` attributes. Update CTAs or section markup directly in the HTML.
3. **Asset Updates**: Add new imagery to `immagini/` and reference them through relative paths. Replace menu/catalog PDFs inside `pdf/` to refresh downloads.
4. **Privacy Compliance**: The banner and modal copy live near the bottom of `translations`. When adding languages, replicate banner text to maintain compliance messaging in each locale.
5. **Automation Maintenance**: Keep `$secret`, `$repo_path`, and `$log_file` in `webhook.php` synchronized with server configuration. Ensure web server user has write permissions to the log file and repository directory.

## Assets & Resources
- **Hero & Background Images**: Files like `immagini/foto1.jpg` and `immagini/progetto.jpg` drive background transitions and illustrated sections; maintain consistent resolution to avoid layout shifts.
- **Flag Icons**: `immagini/italia.png`, `inglese.png`, and `francia.png` supply the floating language switcher UI. Additional languages need corresponding flag assets for visual parity.
- **Downloadable Documents**: `pdf/catalogo.pdf` and `pdf/menu_luglio_25.pdf` provide offline resources linked via CTA buttons. Update filenames and links simultaneously to prevent 404 errors.

## Configuration & Localization
- **Language Data Model**: The `translations` object in `index.html` maps ISO-like language codes (`it`, `en`, `fr`) to content dictionaries. Each dictionary must include keys matching all `data-translate` elements, plus template literal strings that embed HTML for rich formatting.
- **Persistence**: Selected language is persisted using `localStorage.setItem("lang", lang)`, ensuring the site loads in the visitor's preferred language on subsequent visits.
- **Privacy Acceptance**: Banner visibility toggles based on `localStorage` key `privacyAccepted`. Acceptance updates UI state, hides the banner, and removes the `lifted` class from the language selector to return it to its default position.

## Security & Deployment Automation
- **Webhook Secret Validation**: `webhook.php` reconstructs the expected signature using `hash_hmac('sha256', $payload, $secret)` and compares it via `hash_equals` against the `X-Hub-Signature-256` header, mitigating timing attacks.
- **Logging**: Each webhook event appends timestamped entries to `/var/log/webhook.log`, documenting triggers and the outcome of `git pull`. Rotate logs regularly to avoid unbounded growth.
- **Repository Synchronization**: Successful signature validation leads to `chdir($repo_path)` and execution of `git pull`, ensuring production content mirrors the repository. Configure the web server user with SSH deploy keys or HTTPS credentials to permit pulls without manual intervention.
- **Hardening Recommendations**: Restrict webhook endpoint access via network controls or GitHub's IP allowlist, secure the log file with appropriate permissions, and avoid exposing secrets within version control by setting `$secret` through environment-aware configuration if possible.
