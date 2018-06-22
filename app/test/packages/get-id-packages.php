<?php

/**
 * Packages API
 * 
 * Access the Metrc Packages API and request the latest data
 * 
 * @category GET
 * @source /packages/v1/{id}
 * @see https://api-ca.metrc.com/Documentation/#Plants.get_plants_v1_flowering
 * 
 */

namespace Kushy\Tests;

require_once '../../../vendor/autoload.php';

/**
 * Import API Client
 */
use Kushy\Metrc\Routes\Packages;

$id = '4505';

$metrc = new Packages;
$item = $metrc->getPackage($id);

print "<pre>";
print_r($item);
print "</pre>";
