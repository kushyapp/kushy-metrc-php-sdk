<?php

/**
 * Rooms API
 * 
 * Access the Metrc Rooms API and request the latest data
 * 
 * @category POST
 * @source /rooms/v1/update
 * @see https://api-ca.metrc.com/Documentation/#Facilities.get_facilities_v1
 * 
 */

namespace Kushy\Tests;

require_once '../../../vendor/autoload.php';

/**
 * Import API Client
 */
use Kushy\Metrc\Routes\Rooms;

/**
 * Test data
 */
$sampleData = '
[
  {
    "Id": 1102,
    "Name": "Edited Name Room"
  }
]';
$sampleData = json_decode($sampleData);

$licenseNumber = 'CML17-0000001';

$metrc = new Rooms;
$rooms = $metrc->updateRooms($licenseNumber, $sampleData);

print "<pre>";
print_r($rooms);
print "</pre>";
