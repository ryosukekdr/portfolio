<?php
//use NNV\RestCountries;

//$restCountries = new RestCountries;
//$restCountries->byName("viet");


$request->setRequestUrl('https://ajayakv-rest-countries-v1.p.rapidapi.com/rest/v1/all');
$request->setRequestMethod('GET');
$request->setHeaders([
  'x-rapidapi-host' => 'ajayakv-rest-countries-v1.p.rapidapi.com',
  'x-rapidapi-key' => 'cJvLRNK0GfdM9WSMbQe3inU7REn8JVy5'
]);
$client->enqueue($request)->send();
$response = $client->getResponse();
echo $response->getBody();