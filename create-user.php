<?php
include "vendor/autoload.php";
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

$client = new Client();
$headers = [
  'Authorization' => 'wmOvTFYWzS-4A7JiiEZ2gg8fVVjh6D42',
  'Content-Type' => 'application/json'
];
$body = '{
  "username": "David",
  "password": "samplepass",
  "real_name": "David Aaron Echon",
  "email": "echon.davidaaron@auf.edu.ph",
  "access_level": {
    "name": "updater"
  },
  "enabled": false,
  "protected": false
}';
$request = new Request('POST', 'https://ipt10-2022.mantishub.io/api/rest/users/', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
