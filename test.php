<?php

$client = new http\Client;
$request = new http\Client\Request;

$body = new http\Message\Body;
$body->append(new http\QueryString(array(
  'datetime' => '2018-07-18T23:41',
  'message' => 'บอสสโลกเกิดแล้วจ้าาาาา',
  'type' => 'sticker',
  'stickerPackageId' => '1',
  'stickerId' => '5'
)));

$request->setRequestUrl('https://notify-api.line.me/api/notify');
$request->setRequestMethod('POST');
$request->setBody($body);

$request->setHeaders(array(
  'Postman-Token' => 'c8950332-f769-4427-8499-fe8140b040e8',
  'Cache-Control' => 'no-cache',
  'Content-Type' => 'application/x-www-form-urlencoded',
  'authorization' => 'Bearer X29UjrXRORRYtNK1x6DdXqOEUE1bPXN92K4kjIVKLPZ'
));

$client->enqueue($request)->send();
$response = $client->getResponse();

echo $response->getBody();
