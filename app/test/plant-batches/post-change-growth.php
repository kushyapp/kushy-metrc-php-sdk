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
use Kushy\Metrc\Routes\PlantBatches;

/**
 * Test data
 */
$sampleData = '
[
  {
    "Id": 2304,
    "Count": 200,
    "StartingTag": "",
    "GrowthPhase": "Flowering",
    "NewRoom": "Harvest Room East",
    "GrowthDate": "2017-12-15"
  },
  {
    "Id": 2305,
    "Count": 1302,
    "StartingTag": "",
    "GrowthPhase": "Flowering",
    "NewRoom": "Harvest Room East",
    "GrowthDate": "2017-12-15"
  }
]
';
$sampleData = json_decode($sampleData);

$licenseNumber = 'CML17-0000001';

$metrc = new PlantBatches;
$results = $metrc->changeGrowth($licenseNumber, $sampleData);

print_r($results);

