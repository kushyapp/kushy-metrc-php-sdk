<?php

/**
 * Plants API
 * 
 * Access the Metrc Plants API and request the latest data
 * 
 * @category GET
 * @source /items/v1/active
 * @see https://api-ca.metrc.com/Documentation/#Plants.get_plants_v1_flowering
 * 
 */

namespace Kushy\Tests;

require_once '../../../vendor/autoload.php';

/**
 * Import API Client
 */
use Kushy\Metrc\Routes\LabTests;

$licenseNumber = '008-0000010-LIC';

$metrc = new LabTests;
$items = $metrc->getTypes($licenseNumber);

print "<pre>";
print_r($items);
print "</pre>";
