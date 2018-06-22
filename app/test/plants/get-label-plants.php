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

$id = '1A4FF0000000022000000164';

$metrc = new Plants;
$plant = $metrc->getPlant($id);

print "<pre>";
print_r($plant);
print "</pre>";
