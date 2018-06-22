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
    "Id": null,
    "Label": "1A4FF0000000022000000246",
    "NewTag": "1A4FF0000000022000000270",
    "GrowthPhase": "Flowering",
    "NewRoom": "00 A GeoShepard Flower Rm",
    "GrowthDate": "2018-3-1"
  },
  {
    "Id": null,
    "Label": "1A4FF0000000022000000245",
    "NewTag": "1A4FF0000000022000000271",
    "GrowthPhase": "Flowering",
    "NewRoom": "00 A GeoShepard Flower Rm",
    "GrowthDate": "2018-3-1"
  }
]
';
$sampleData = json_decode($sampleData);

$licenseNumber = 'CML17-0000001';

$metrc = new Plants;
$results = $metrc->changeGrowth($licenseNumber, $sampleData);

print_r($results);

