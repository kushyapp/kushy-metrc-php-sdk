<?php

/**
 * Facilities API
 * 
 * Access the Metrc Facilities API and request the latest data
 * 
 * @category GET
 * @source /facilities/v1/
 * @see https://api-ca.metrc.com/Documentation/#Facilities.get_facilities_v1
 * 
 */

namespace Kushy\Tests;

require_once '../../../vendor/autoload.php';

/**
 * Import API Client
 */
use Kushy\Metrc\Metrc;

$metrc = new Metrc;
$facilities = $metrc->getFacilities();

print "<pre>";
print_r($facilities);
print "</pre>";
