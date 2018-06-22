<?php

/**
 * Plant Batches API
 * 
 * Access the Metrc Plant Batches API and request the latest data
 * 
 * @category POST
 * @source /plantbatches/v1/createplantings
 * @see https://api-ca.metrc.com/Documentation/#PlantBatches.post_plantbatches_v1_createplantings
 * 
 */

namespace Kushy\Tests;

require_once '../../../vendor/autoload.php';

/**
 * Import API Client
 */
use Kushy\Metrc\Routes\Plants;

/**
 * Test data
 */
$sampleData = '
[
  {
    "Id": 13935,
    "Label": null,
    "Room": "00 A GeoShepard Flower Rm",
    "ActualDate": "2018-3-1"
  }
]
';
$sampleData = json_decode($sampleData);

$licenseNumber = 'CML17-0000001';

$metrc = new Plants;
$results = $metrc->move($licenseNumber, $sampleData);

print_r($results);

