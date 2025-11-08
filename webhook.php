<?php
// === CONFIG ===
$secret = 'Ppag0000'; // stesso di GitHub Webhook
$repo_path = '/var/www/html'; // percorso dove hai il sito
$log_file = '/var/log/webhook.log'; // dove salvare i log

// === Verifica SECRET ===
$headers = getallheaders();
$signature = $headers['X-Hub-Signature-256'] ?? '';

$payload = file_get_contents('php://input');
$expected = 'sha256=' . hash_hmac('sha256', $payload, $secret);

if (!hash_equals($expected, $signature)) {
    http_response_code(403);
    file_put_contents($log_file, date('[Y-m-d H:i:s] ') . "Signature mismatch\n", FILE_APPEND);
    exit('Invalid signature');
}

// === Esegui aggiornamento ===
file_put_contents($log_file, date('[Y-m-d H:i:s] ') . "Webhook triggered\n", FILE_APPEND);

chdir($repo_path);
$output = shell_exec('git pull 2>&1');
file_put_contents($log_file, date('[Y-m-d H:i:s] ') . "Git output:\n$output\n", FILE_APPEND);

echo "OK";
?>
