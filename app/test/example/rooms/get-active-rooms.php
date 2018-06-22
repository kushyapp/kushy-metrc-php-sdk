<?php

/**
 * Rooms API
 * 
 * Access the Metrc Rooms API and request the latest data
 * 
 * @category GET
 * @source /rooms/v1/active
 * @see https://api-ca.metrc.com/Documentation/#Facilities.get_facilities_v1
 * 
 */

namespace Kushy\Tests;

require_once '../../../vendor/autoload.php';

/**
 * Import API Client
 */
use Kushy\Metrc\Routes\Rooms;

$licenseNumber = 'CML17-0000001';

$metrc = new Rooms;
$rooms = $metrc->getActive($licenseNumber);

print "<pre>";
print_r($rooms);
print "</pre>";
