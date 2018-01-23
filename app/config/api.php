<?php

require_once '../../vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'http://localhost/weedporndaily-api/api/1.1/',
    // You can set any number of default request options.
    'timeout'  => 2.0,
]);

?>