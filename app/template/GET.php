<?php

/**
 * Facilities API
 * 
 * Access the Metrc Facilities API and request the latest data
 * 
 * @category GET
 * @source /facilities/v1/
 * 
 */

// Import API
require '../config/api.php';

$url = 'tables/youtube/rows/?limit=5';

// Send a request to https://foo.com/api/test
$response = $client->request('GET', $url);
$code = $response->getStatusCode(); // 200

$body = $response->getBody();
// Implicitly cast the body to a string and echo it
//echo $body;

$json = json_decode($response->getBody());

foreach($json->data);
