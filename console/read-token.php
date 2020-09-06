<?php


use \Firebase\JWT\JWT;

$jwt = $argv[0];

try {
    $publicKey = file_get_contents($storageFolder . '/jwt-keys/jwtRS256-2.key.pub');

    $decoded = (array)JWT::decode($jwt, $publicKey, ['RS256']);

    echo "Decoded:\n" . print_r($decoded, true) . "\n";
} catch (\Firebase\JWT\SignatureInvalidException $e) {
    echo('=============================' . "\n");
    echo('>>>>>> Token not valid <<<<<<' . "\n");
    echo('=============================' . "\n");
}

