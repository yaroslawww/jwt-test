<?php


use \Firebase\JWT\JWT;


$privateKey = file_get_contents($storageFolder . '/jwt-keys/jwtRS256.key');

$publicKey = file_get_contents($storageFolder . '/jwt-keys/jwtRS256.key.pub');

$payload = [
    "iss" => "example.org",
    "aud" => "example.com",
    "iat" => 1356999524,
    "nbf" => 1357000000,
    "role" => 'asd',
    "permissions" => [
        'tester',
        'reader',
    ],
];

$jwt = JWT::encode($payload, $privateKey, 'RS256');
echo "Encode:\n" . print_r($jwt, true) . "\n";

$decoded = (array)JWT::decode($jwt, $publicKey, ['RS256']);


echo "Decode:\n" . print_r($decoded, true) . "\n";

