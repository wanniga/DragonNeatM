<?php

$client = new http\Client;
$request = new http\Client\Request;

$body = new http\Message\Body;
$body->append(new http\QueryString(array(
  'message' => 'บอสสโลกเกิดแล้วจ้าาาาา'
)));

$request->setRequestUrl('https://notify-api.line.me/api/notify');
$request->setRequestMethod('POST');
$request->setBody($body);

$request->setHeaders(array(
  'Postman-Token' => 'e41aa915-3645-4eee-a93f-7c0b85abb934',
  'Cache-Control' => 'no-cache',
  'Content-Type' => 'application/x-www-form-urlencoded',
  'authorization' => 'Bearer X29UjrXRORRYtNK1x6DdXqOEUE1bPXN92K4kjIVKLPZ'
));

$client->enqueue($request)->send();
$response = $client->getResponse();

echo $response->getBody();
