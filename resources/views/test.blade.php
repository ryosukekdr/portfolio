<?php

$client = new http\Client;
$request = new http\Client\Request;

$request->setRequestUrl('https://greatcirclemapper.p.rapidapi.com/aircraft/read/A388');
$request->setRequestMethod('GET');
$request->setHeaders([
	'X-RapidAPI-Key' => 'SIGN-UP-FOR-KEY',
	'X-RapidAPI-Host' => 'greatcirclemapper.p.rapidapi.com'
]);

$client->enqueue($request)->send();
$response = $client->getResponse();

echo $response->getBody();