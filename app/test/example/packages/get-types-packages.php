<?php

/**
 * Packages API
 * 
 * Access the Metrc Packages API and request the latest data
 * 
 * @category GET
 * @source /packages/v1/types
 * @see https://api-ca.metrc.com/Documentation/#Plants.get_plants_v1_flowering
 * 
 */

namespace Kushy\Tests;

require_once '../../../vendor/autoload.php';

/**
 * Example Response
 * 
 *  Array
 *  (
 *      [0] => Product
 *      [1] => ImmaturePlant
 *      [2] => VegetativePlant
 *  )
 */


/**
 * Import API Client
 */
use Kushy\Metrc\Routes\Packages;

$metrc = new Packages;
$types = $metrc->getTypes();

print "<pre>";
print_r($types);
print "</pre>";
