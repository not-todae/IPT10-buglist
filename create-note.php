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
  "text": "echon.davidaaron@auf.edu.ph",
  "view_state": {
    "name": "public"
  }
}';
$request = new Request('POST', 'https://ipt10-2022.mantishub.io/api/rest/issues/39/notes', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();