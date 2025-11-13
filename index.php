<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> I Benedettini - Ristorante</title>
  <link rel="icon" type="image/png" href="immagini/logo.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <div id="language-selector" class="language-selector">
    <button type="button" class="language-button active" data-lang="it" aria-label="Italiano">
      <img src="immagini/italia.png" alt="Italiano" />
    </button>
    <button type="button" class="language-button" data-lang="en" aria-label="English">
      <img src="immagini/inglese.png" alt="English" />
    </button>
    <button type="button" class="language-button" data-lang="fr" aria-label="Français">
      <img src="immagini/francia.png" alt="Français" />
    </button>
  </div>

  <button type="button" id="language-toggle" class="language-toggle" aria-label="Seleziona lingua" aria-controls="language-selector" aria-expanded="false">
    <span aria-hidden="true">▼</span>
  </button>

  <header class="hero" id="index">
    <div class="hero__logo-badge">
      <img src="immagini/scritta.png" alt="I Benedettini" class="hero__logo" />
      <p class="hero__subtitle" data-translate="subtitle2">Un progetto non convenzionale...</p>
    </div>
  </header>

  <main class="page-content">
    <section class="cta-grid" aria-label="Sezioni principali">
      <a class="cta-card theme-project" href="#progetto">
        <h3 data-translate="progetto_title">Cooperativa Sociale?</h3>
        <p data-translate="progetto_text">Scopri il nostro progetto sociale.</p>
      </a>
      <a class="cta-card theme-menu" href="#menu">
        <h3 data-translate="menu_title">Risto-Pizzeria?</h3>
        <p data-translate="menu_text">Guarda i nostri piatti e specialità.</p>
      </a>
      <a class="cta-card theme-catalog" href="#catalogo">
        <h3 data-translate="catalogo_title">Enogastronomia Pugliese?</h3>
        <p data-translate="catalogo_text">Scopri il nostro catalogo di prodotti tipici.</p>
      </a>
      <!-- <a class="cta-card theme-shop" href="shop.html">
        <h3 data-translate="shop_title">Il Nostro Negozio</h3>
        <p data-translate="shop_text">Acquista i nostri prodotti online.</p>
      </a> -->
      <a class="cta-card theme-contact" href="#contatti">
        <h3 data-translate="contatti_title">Dove siamo?</h3>
        <p data-translate="contatti_text">Scopri la storia del nostro ristorante e dove trovarci.</p>
      </a>
    </section>  

    <section id="puglia" class="story-block" data-translate="puglia_text"></section>

    <section id="progetto" class="content-section theme-project">
      <h2 data-translate="section_project_title">Progetto sociale</h2>
      <div class="section-project" data-translate="section_project_text"></div>
    </section>

    <section id="menu" class="content-section theme-menu">
      <h2 data-translate="section_menu_title">I Benedettini Ristorante</h2>
      <div class="resource-grid">
        <article class="resource-card">
          <img src="https://sabalippolis.altervista.org/menu.png" alt="Menu Ristorante" class="resource-image" />
          <div class="resource-copy">
            <h3 data-translate="menu_restaurant">Menu</h3>
            <p data-translate="menu_text">Guarda i nostri piatti e specialità.</p>
            <a href="pdf/menu_luglio_25.pdf" class="menu-btn" target="_blank" rel="noopener" data-translate="open_menu_btn">Apri Menu</a>
          </div>
        </article>
      </div>
    </section>

    <section id="catalogo" class="content-section theme-catalog">
      <h2 data-translate="section_catalog_title">Pigliati un po' di Puglia</h2>
      <p class="section-intro" data-translate="section_catalog_text">Scopri i nostri prodotti enogastronomici pugliesi.</p>
      <div class="resource-grid">
        <article class="resource-card">
          <img src="https://sabalippolis.altervista.org/PAG0.jpg" alt="Catalogo prodotti" class="resource-image" />
          <div class="resource-copy">
            <h3 data-translate="catalogo_title">Enogastronomia Pugliese?</h3>
            <p data-translate="catalogo_text">Scopri il nostro catalogo di prodotti tipici.</p>
            <a href="pdf/catalogo.pdf" class="menu-btn" target="_blank" rel="noopener" data-translate="open_catalog_btn">Apri Catalogo</a>
          </div>
        </article>
      </div>
    </section>

    <section id="contatti" class="content-section theme-contact">
      <h2 data-translate="section_contact_title">Contatti</h2>
      <p class="contact-text" data-translate="section_contact_text">📍 Indirizzo: <a href="https://maps.app.goo.gl/F7ADMcHoG4n49CC58" target="_blank" rel="noopener">V. San Vito 225 - San Vito di Polignano (Ba)</a><br>📲 Whatsapp: <a href="https://wa.me/393771541524" target="_blank" rel="noopener">377-1541524</a> 📞 Telefono: <a href="tel:+390804247219">0804247219</a><br>📥 Mail: sole-blu@tiscali.it</p>
      <div class="social-media">
        <a href="https://www.facebook.com/LocandadeiBenedettini" target="_blank" rel="noopener" aria-label="Facebook">
          <img src="https://creative-assets.mailinblue.com/editor/social-icons/rounded_colored/facebook_32px.png" alt="Facebook" />
        </a>
        <a href="https://www.instagram.com/i_benedettini/" target="_blank" rel="noopener" aria-label="Instagram">
          <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram" />
        </a>
        <a href="https://www.tiktok.com/@ibenedettini" target="_blank" rel="noopener" aria-label="TikTok">
          <img src="https://cdn-icons-png.flaticon.com/512/3046/3046122.png" alt="TikTok" />
        </a>
      </div>
      <div class="opening-hours">
        <h3 data-translate="section_hours_title">Orari di Apertura</h3>
        <ul id="hours-list"></ul>
      </div>
    </section>

    <section class="newsletter content-section">
      <h2 data-translate="newsletter_title">Unisciti alla nostra newsletter</h2>
      <p class="section-intro" data-translate="newsletter_text">Ricevi novità, storie e inviti speciali direttamente dalla nostra cooperativa.</p>
      <div class="newsletter-container">
        <iframe src="https://40c10baa.sibforms.com/serve/MUIFAOthqmBvrZ0sPe8BslF93dyRtsT7Y3noxkfS8nkBb1vXMGjkH6yxkLJR38YXdCKfMNZNY6gj6mpjzZrMOeg2jOb4kd2g1BAYrMt7tP3ZDPNdKacXIElkfi4cS6gBdt9MW0oEdC46UgjsS8b1w78Lwk89Cf831BmM6GEKdbe8EHQpb_YWNCGhgYOjxWKpwfo2UiOPYB1COg15Ag=="
          frameborder="0" scrolling="no" allowfullscreen>
        </iframe>
      </div>
    </section>

    <a href="#index" class="back-to-top" data-translate="back_to_top">Torna su</a>
  </main>

  <div id="privacy-banner" class="privacy-banner">
    <p>
      <span data-translate="privacy_message">Questo sito utilizza cookie e raccoglie dati per migliorare l’esperienza di navigazione.</span>
      <a href="#" id="privacy-link" data-translate="privacy_link">Leggi la Privacy Policy</a>
    </p>
    <button type="button" id="accept-privacy" data-translate="privacy_accept">Accetto</button>
  </div>

  <div id="privacy-modal">
    <div id="privacy-content">
      <span id="close-privacy">&times;</span>
      <h2>Privacy Policy</h2>
      <p>
        Ai sensi del Regolamento UE 2016/679 (GDPR), informiamo che i dati personali forniti volontariamente dagli
        utenti — in particolare l’indirizzo email — vengono utilizzati esclusivamente per l’invio di comunicazioni
        informative e promozionali relative alle attività della nostra organizzazione.
      </p>
      <p>
        I dati non vengono ceduti a terzi e sono trattati con strumenti informatici nel pieno rispetto della normativa
        sulla privacy.
      </p>
      <p>
        In qualunque momento l’utente può richiedere la cancellazione o la modifica dei propri dati scrivendo a:
        <a href="mailto:sole-blu@tiscali.it">sole-blu@tiscali.it</a>.
      </p>
      <p>
        Procedendo con la navigazione o iscrivendosi alla nostra newsletter, l’utente dichiara di aver letto e accettato
        questa informativa sulla privacy.
      </p>
    </div>
  </div>

  <footer>
    <p>&copy; 2008-<?php echo date('Y'); ?> I Benedettini</p>
  </footer>

  <script>
    const translations = {
      it: {
        title: "I Benedettini",
        subtitle2: "Un progetto non convenzionale...",
        progetto_title: "Cooperativa Sociale? ",
        progetto_text: "Scopri il nostro progetto sociale.",
        menu_title: "Risto-Pizzeria?",
        menu_text: "Guarda i nostri piatti e specialità.",
        catalogo_title: "Enogastronomia Pugliese?",
        catalogo_text: "Scopri il nostro catalogo di prodotti tipici.",
        contatti_title: "Dove siamo?",
        contatti_text: "Scopri la storia del nostro ristorante e dove trovarci.",
        puglia_text: `
      <h2>Come spiegare la Puglia a chi non ci è mai stato?</h2>
      <p>
        Qui ci si alza la mattina e appena usciti, che sia estate o inverno, trovi il sole anche nell'ombra...
        un Sole che scaffa l'anima... Qui viene naturale sorridere anche se qualcosa non va.
        Poi scendi in strada, trovi quello che vende la frutta sulla sedia, la verdura, il 'nocellaro' con i taralli
        e l'olio EVO... mentre in lontananza scoppietta una Apecar (u trerot).
      </p>
      <p>
        Stanno pesche e i fichi di tutti i tipi, l'anguria 'alla prova'... tutto profuma di colori.
        Attraversi la via e vedi uliveti centenari e... il mare...
        <em>Ecchecooosa!</em> Troppo tutto assieme!
      </p>
      <p>
        Il mare, il suono delle onde è una dolce ninna nanna...
        Ti fermi, chiudi gli occhi, fai un respiro e un senso di pace ti pervade.
        Riprendi il cammino, arrivi al bar e trovi persone che fanno a gara per pagarti il caffè e si offendono
        se non lo accetti... "Vieni qui, prendi quello che vuoi", come se il bar te lo dovessero comprare e intestare.
      </p>
      <div class="puglia-image">
        <img src="immagini/ulivo.jpg" alt="Ulivo pugliese" />
      </div>
      <p>
        Si respira umanità lungo tutto il 'tacco'.
        Forse in Puglia mancano un po' di cose... sembra tutto più lento, ma
        se rallenti e osservi con attenzione ti accorgi che le cose davvero importanti... ci sono tutte!
      </p>
      <p class="puglia-quote">
        Se vuoi spiegare la Puglia a chi non la conosce, digli solo:<br>
        <strong>"Vieni e innamorati."</strong>
      </p>
    `,
        section_project_title: "Progetto Sociale",
        section_project_text: `
  <div class="section-project">
    <h3>"Il LAVORO come strumento e non fine"</h3>
    <p>
      Nel mondo del lavoro sempre più razionale, omologato e disumanizzato, 
      noi abbiamo scelto di andare… <em>controcorrente</em>!
    </p>
    <p>
      Crediamo in un sistema di lavoro dove ogni persona, con le proprie 
      autentiche unicità e potenzialità, trova il giusto spazio.
      Un luogo dove le regole di mercato si adattano alle persone, non viceversa.
    </p>
    <div class="progetto-foto">
      <img src="immagini/progetto.jpg" alt="Il nostro progetto sociale">
    </div>
    <p>
      Il nostro progetto sociale è nato per costruire un’alternativa: 
      un’esperienza umana nel mondo del lavoro.
      Ritmi umani, empatia, collaborazione, umanità e professionalità: 
      la dimostrazione di come si può fare impresa con <strong>Anima</strong>.
    </p>
    <p>
      Pur consapevoli dei costi e delle tasse necessari al nostro sostentamento, 
      come ogni attività commerciale, il nostro obiettivo non è il profitto, 
      ma la creazione di opportunità di lavoro e di inclusione sociale.
    </p>
    <p>
      Valorizziamo l’autenticità di ogni individuo, non la perfezione.  
      Siamo grati a chiunque, incuriosito dalla nostra realtà, si affacci al nostro mondo.
      E se inizialmente può sembrare… strano (e possiamo garantirlo 😄), 
      si rimane “incastrati” in un’esperienza che va oltre la semplice interazione: 
      un’immersione in un mondo pieno di valori.
    </p>
  </div>
`,
        section_menu_title: "I Benedettini Ristorante",
        menu_restaurant: "Menu",
        open_menu_btn: "Apri Menu",
        section_catalog_title: "Pigliati un po' di Puglia",
        section_catalog_text: "Scopri i nostri prodotti enogastronomici pugliesi.",
        open_catalog_btn: "Apri Catalogo",
        shop_title: "Il Nostro Negozio",
        shop_text: "Acquista i nostri prodotti online.",
        section_contact_title: "Contatti",
        section_contact_text:
          "📍 Indirizzo: <a href=\"https://maps.app.goo.gl/F7ADMcHoG4n49CC58\" target=\"_blank\" rel=\"noopener\">V. San Vito 225 - San Vito di Polignano (Ba)</a><br>📲 Whatsapp: <a href=\"https://wa.me/393771541524\" target=\"_blank\" rel=\"noopener\">377-1541524</a> <br>📞 Telefono: <a href=\"tel:+390804247219\"> 0804247219 </a><br>📥 Mail: sole-blu@tiscali.it",
        section_hours_title: "Orari di Apertura",
        newsletter_title: "Unisciti alla nostra newsletter",
        newsletter_text: "Ricevi novità, storie e inviti speciali direttamente dalla nostra cooperativa.",
        back_to_top: "Torna su",
        privacy_message: "Questo sito utilizza cookie e raccoglie dati per migliorare l’esperienza di navigazione.",
        privacy_link: "Leggi la Privacy Policy",
        privacy_accept: "Accetto"
      },

      en: {
        title: "The Benedettini",
        subtitle2: "An unconventional project...",
        progetto_title: "Social Cooperative?",
        progetto_text: "Discover our social project.",
        menu_title: "Pizza Restaurant?",
        menu_text: "See our dishes and specialties.",
        catalogo_title: "Apulian Food & Wine?",
        catalogo_text: "Discover our catalog of typical products.",
        contatti_title: "Where we are?",
        contatti_text: "Find our restaurant's story and location.",
        puglia_text: `
      <h2>How can you explain Puglia to someone who has never been there?</h2>
      <p>
        Here, when you wake up in the morning — summer or winter — the sun finds you even in the shade...
        a sun that warms your soul. Here, smiling comes naturally, even when things don’t go right.
        Then you walk outside, find the man selling fruit from his chair, the one with vegetables,
        the “nocellaro” offering taralli and extra-virgin olive oil… while in the distance, an Apecar rattles by.
      </p>
      <p>
        There are peaches and all kinds of figs, the “watermelon test”… everything smells like color.
        You cross the street and see centuries-old olive trees and... the sea.
        <em>What a feeling!</em> Everything, all at once!
      </p>
      <p>
        The sea — the sound of the waves is a gentle lullaby.
        You stop, close your eyes, breathe... and a sense of peace fills you.
        You reach a café, where people compete to pay for your coffee and get offended if you refuse.
        “Come, take what you want” — as if they wanted to buy you the café itself.
      </p>

      <div class="puglia-image">
        <img src="immagini/ulivo.jpg" alt="Apulian olive tree" />
      </div>

      <p>
        Humanity flows through every corner of this land.
        Maybe Puglia lacks a few things, life seems slower, but
        if you slow down and look closely, you’ll realize the truly important things... are all here.
      </p>
      <p class="puglia-quote">
        To explain Puglia to someone who doesn’t know it, just say:<br>
        <strong>"Come and fall in love."</strong>
      </p>
    `,
        section_project_title: "Social Project",
        section_project_text: `
  <div class="section-project">
    <h3>"WORK as a means, not an end"</h3>
    <p>
      In a work world that is increasingly rational, standardized, and dehumanized, 
      we chose to go <em>against the current</em>.
    </p>
    <p>
      We believe in a system where every person, with their authentic uniqueness and potential, 
      finds their rightful place — a place where market rules adapt to people, not the other way around.
    </p>
    <div class="progetto-foto">
      <img src="immagini/progetto.jpg" alt="Our social project">
    </div>
    <p>
      Our social project was born to create an alternative: 
      a human-centered experience in the world of work.
      Human pace, empathy, collaboration, humanity and professionalism — 
      proof that a business can have a <strong>Soul</strong>.
    </p>
    <p>
      Aware of the costs and taxes needed to sustain ourselves, like any business, 
      our goal is not profit, but the creation of job opportunities and social inclusion.
    </p>
    <p>
      We value authenticity, not perfection.  
      We are grateful to all who, intrigued by our reality, approach our world.  
      And even if at first it may seem… unusual (and it truly is 😄), 
      one becomes “captivated” by an experience that goes beyond interaction, 
      entering a world full of genuine human values.
    </p>
  </div>
`,
        section_menu_title: "I Benedettini Restaurant",
        menu_restaurant: "Menu",
        open_menu_btn: "Open Menu",
        section_catalog_title: "Taste a bit of Puglia",
        section_catalog_text: "Discover our authentic Apulian food and wine products.",
        open_catalog_btn: "Open Catalog",
        shop_title: "Our Shop",
        shop_text: "Buy our products online.",
        section_contact_title: "Contacts",
        section_contact_text:
          "📍 Address: <a href=\"https://maps.app.goo.gl/F7ADMcHoG4n49CC58\" target=\"_blank\" rel=\"noopener\">V. San Vito 225 - San Vito di Polignano (Ba)</a><br>📲 Whatsapp: <a href=\"https://wa.me/393771541524\" target=\"_blank\" rel=\"noopener\">+39 377-1541524</a> <br>📞 Phone: <a href=\"tel:+390804247219\">0804247219</a><br>📥 Email: sole-blu@tiscali.it",
        section_hours_title: "Opening Hours",
        newsletter_title: "Join our newsletter",
        newsletter_text: "Receive updates, stories, and special invitations from our cooperative.",
        back_to_top: "Back to top",
        privacy_message: "This site uses cookies and collects data to improve your browsing experience.",
        privacy_link: "Read the Privacy Policy",
        privacy_accept: "I agree"
      },

      fr: {
        title: "Les Bénédictins",
        subtitle2: "Un projet peu conventionnel...",
        progetto_title: "Coopérative Sociale ?",
        progetto_text: "Découvrez notre projet social.",
        menu_title: "Resto-Pizzeria ?",
        menu_text: "Découvrez nos plats et spécialités.",
        catalogo_title: "Gastronomie des Pouilles ?",
        catalogo_text: "Découvrez notre catalogue de produits typiques.",
        contatti_title: "Où sommes-nous ?",
        contatti_text: "Découvrez l'histoire de notre restaurant et où nous trouver.",
        puglia_text: `
      <h2>Comment expliquer les Pouilles à quelqu’un qui n’y est jamais allé ?</h2>
      <p>
        Ici, on se lève le matin et, été comme hiver, le soleil est là, même à l’ombre...
        un soleil qui réchauffe l’âme. Ici, on sourit naturellement, même quand tout ne va pas bien.
        On descend dans la rue et on trouve celui qui vend les fruits sur une chaise, les légumes,
        le "nocellaro" avec ses taralli et son huile d’olive… pendant qu’au loin, une Apecar grésille.
      </p>
      <p>
        Il y a des pêches et des figues de toutes sortes, la pastèque “à l’essai”… tout sent les couleurs.
        Tu traverses la rue, tu vois des oliviers centenaires et... la mer.
        <em>Quelle émotion !</em> Tout en même temps !
      </p>
      <p>
        La mer, le son des vagues, c’est une douce berceuse.
        Tu t’arrêtes, fermes les yeux, respires… un sentiment de paix t’envahit.
        Tu continues, arrives au bar où les gens se disputent pour t’offrir le café et se vexent si tu refuses.
        “Viens, prends ce que tu veux”, comme s’ils voulaient t’offrir le bar lui-même.
      </p>
      <div class="puglia-image">
        <img src="immagini/ulivo.jpg" alt="Olivier des Pouilles" />
      </div>
      <p>
        On respire l’humanité tout au long du “talon”.
        Peut-être que les Pouilles manquent de certaines choses, tout semble plus lent,
        mais si tu ralentis et observes bien, tu te rends compte que les choses vraiment importantes... sont toutes là.
      </p>
      <p class="puglia-quote">
        Pour expliquer les Pouilles à quelqu’un qui ne les connaît pas, dis-lui simplement :<br>
        <strong>"Viens et tombe amoureux."</strong>
      </p>
    `,
        section_project_title: "Projet social",
        section_project_text: `
  <div class="section-project">
    <h3>"Le TRAVAIL comme outil et non comme fin"</h3>
    <p>
      Dans un monde du travail de plus en plus rationnel, standardisé et déshumanisé, 
      nous avons choisi d’aller <em>à contre-courant</em> !
    </p>
    <p>
      Nous croyons en un système où chaque personne, avec son authenticité et son potentiel uniques, 
      trouve sa juste place — un lieu où les règles du marché s’adaptent aux personnes, et non l’inverse.
    </p>
    <div class="progetto-foto">
      <img src="immagini/progetto.jpg" alt="Notre projet social">
    </div>
    <p>
      Notre projet social est né pour construire une alternative : 
      une expérience humaine dans le monde du travail.
      Rythmes humains, empathie, collaboration, humanité et professionnalisme : 
      la preuve qu’on peut faire de l’entreprise avec une <strong>Âme</strong>.
    </p>
    <p>
      Conscients des coûts et des taxes nécessaires à notre subsistance, comme toute activité commerciale, 
      notre objectif n’est pas le profit, mais la création d’opportunités de travail et d’inclusion sociale.
    </p>
    <p>
      Nous valorisons l’authenticité de chaque individu, pas la perfection.  
      Nous remercions tous ceux qui, curieux de notre réalité, s’en approchent.  
      Et même si cela peut sembler étrange au début (et c’est un peu le cas 😄), 
      on reste “captivé” par une expérience qui dépasse la simple interaction : 
      une immersion dans un monde plein de valeurs humaines.
    </p>
  </div>
`,
        section_menu_title: "Restaurant I Benedettini",
        menu_restaurant: "Menu",
        open_menu_btn: "Ouvrir le Menu",
        section_catalog_title: "Goûtez un peu des Pouilles",
        section_catalog_text: "Découvrez nos produits gastronomiques et œnologiques typiques.",
        open_catalog_btn: "Ouvrir le Catalogue",
        shop_title: "Notre Boutique",
        shop_text: "Achetez nos produits en ligne.",
        section_contact_title: "Contacts",
        section_contact_text:
          "📍 Adresse : <a href=\"https://maps.app.goo.gl/F7ADMcHoG4n49CC58\" target=\"_blank\" rel=\"noopener\">V. San Vito 225 - San Vito di Polignano (Ba)</a><br>📲 Whatsapp : <a href=\"https://wa.me/393771541524\" target=\"_blank\" rel=\"noopener\">+39 377-1541524</a> <br>📞 Téléphone : <a href=\"tel:+390804247219\">0804247219</a><br>📥 E-mail : sole-blu@tiscali.it",
        section_hours_title: "Horaires d'Ouverture",
        newsletter_title: "Rejoignez notre newsletter",
        newsletter_text: "Recevez des nouvelles, des histoires et des invitations spéciales de notre coopérative.",
        back_to_top: "Retour en haut",
        privacy_message: "Ce site utilise des cookies et collecte des données pour améliorer votre expérience de navigation.",
        privacy_link: "Lire la politique de confidentialité",
        privacy_accept: "J'accepte"
      }
    };

    let languageButtons = [];

    function applyLanguage(lang) {
      const dictionary = translations[lang];
      if (!dictionary) {
        return;
      }

      document.documentElement.setAttribute("lang", lang);

      document.querySelectorAll("[data-translate]").forEach(el => {
        const key = el.getAttribute("data-translate");
        const value = dictionary[key];
        if (value === undefined) {
          return;
        }
        el.innerHTML = value;
      });

      languageButtons.forEach(button => {
        const isActive = button.dataset.lang === lang;
        button.classList.toggle("active", isActive);
        button.setAttribute("aria-pressed", String(isActive));
      });

      localStorage.setItem("lang", lang);
    }

    document.addEventListener("DOMContentLoaded", () => {
      const langSelector = document.getElementById("language-selector");
      const langToggle = document.getElementById("language-toggle");

      languageButtons = Array.from(document.querySelectorAll("[data-lang]"));
      languageButtons.forEach(button => {
        button.addEventListener("click", () => {
          applyLanguage(button.dataset.lang);
          if (langSelector && langToggle) {
            langSelector.classList.remove("open");
            langToggle.setAttribute("aria-expanded", "false");
            langToggle.classList.remove("active");
          }
        });
      });

      const storedLang = localStorage.getItem("lang");
      const initialLang = translations[storedLang] ? storedLang : "it";
      applyLanguage(initialLang);

      if (langToggle && langSelector) {
        langToggle.addEventListener("click", () => {
          const expanded = langToggle.getAttribute("aria-expanded") === "true";
          const next = !expanded;
          langToggle.setAttribute("aria-expanded", String(next));
          langToggle.classList.toggle("active", next);
          langSelector.classList.toggle("open", next);
        });
      }

      const banner = document.getElementById("privacy-banner");
      const acceptBtn = document.getElementById("accept-privacy");
      const privacyLink = document.getElementById("privacy-link");
      const modal = document.getElementById("privacy-modal");
      const closeModal = document.getElementById("close-privacy");
      const accepted = localStorage.getItem("privacyAccepted") === "true";

      if (banner) {
        banner.style.display = accepted ? "none" : "flex";
        if (langSelector) {
          langSelector.classList.toggle("lifted", !accepted);
        }
      }

      if (acceptBtn) {
        acceptBtn.addEventListener("click", () => {
          localStorage.setItem("privacyAccepted", "true");
          if (banner) {
            banner.style.display = "none";
          }
          if (langSelector) {
            langSelector.classList.remove("lifted");
          }
        });
      }

      if (privacyLink && modal) {
        privacyLink.addEventListener("click", event => {
          event.preventDefault();
          modal.style.display = "flex";
          document.body.classList.add("modal-open");
        });
      }

      if (closeModal && modal) {
        closeModal.addEventListener("click", () => {
          modal.style.display = "none";
          document.body.classList.remove("modal-open");
        });
      }

      if (modal) {
        modal.addEventListener("click", event => {
          if (event.target === modal) {
            modal.style.display = "none";
            document.body.classList.remove("modal-open");
          }
        });
      }
    });

    fetch('data/hours.json')
      .then(response => response.json())
      .then(data => {
        const hoursList = document.getElementById('hours-list');
        if (hoursList) {
          hoursList.innerHTML = data.hours
            .map(h => `<li>${h.day}: ${h.open} - ${h.close}</li>`)
            .join('');
        }
      })
      .catch(error => console.error('Error loading hours:', error));
  </script>
</body>

</html>
