<?php

/**
 * Plants API
 * 
 * Access the Metrc Plants API and request the latest data
 * 
 * @category GET
 * @source /plants/v1/flowering
 * @see https://api-ca.metrc.com/Documentation/#Plants.get_plants_v1_flowering
 * 
 */

namespace Kushy\Tests;

require_once '../../../vendor/autoload.php';

/**
 * Import API Client
 */
use Kushy\Metrc\Routes\Plants;

/**
 * Add ?id={your_id} to the URL to change up plant
 */
if($_GET['id']) {
    $id = $_GET['id'];
} else {
    $id = '8714';
}

$metrc = new Plants;
$plant = $metrc->getPlant($id);

print "<pre>";
print_r($plant);
print "</pre>";
