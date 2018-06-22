<?php

/**
 * Sales API
 * 
 * Access the Metrc Sales API and request the latest data
 * 
 * @category GET
 * @source /sales/v1/customertypes
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
use Kushy\Metrc\Routes\Sales;

$metrc = new Sales;
$types = $metrc->getCustomerTypes();

print "<pre>";
print_r($types);
print "</pre>";
