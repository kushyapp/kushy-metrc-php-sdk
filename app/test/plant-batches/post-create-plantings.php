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
    "Name": "B. Kush 5-4200",
    "Type": "Clone",
    "Count": 25,
    "Strain": "Spring Hill Kush",
    "ActualDate": "2015-12-15"
  },
  {
    "Name": "B. Kush 5-4201",
    "Type": "Seed",
    "Count": 50,
    "Strain": "Spring Hill Kush",
    "ActualDate": "2015-12-15"
  },
  {
    "Name": "B. Kush 5-4202",
    "Type": "Clone",
    "Count": 710,
    "Strain": "OG Smush",
    "ActualDate": "2017-12-15"
  }
]';
$sampleData = json_decode($sampleData);

$licenseNumber = 'CML17-0000001';

$metrc = new PlantBatches;
$results = $metrc->createPlantings($licenseNumber, $sampleData);

print_r($results);

