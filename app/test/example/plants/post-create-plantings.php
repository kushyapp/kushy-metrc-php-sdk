<?php

/**
 * Plants API
 * 
 * Access the Metrc Plants API and request the latest data
 * 
 * @category POST
 * @source /plants/v1/create/plantings
 * @see https://api-ca.metrc.com/Documentation/#Plants.get_plants_v1_flowering
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
    "PlantLabel": "1A4FF0000000022000000310",
    "PlantBatchName": "Kushy #1",
    "PlantBatchType": "Clone",
    "PlantCount": 3,
    "StrainName": "Spring Hill Kush",
    "ActualDate": "2016-10-18T13:11:03Z"
  },
  {
    "PlantLabel": "1A4FF0000000022000000311",
    "PlantBatchName": "Kushy #2",
    "PlantBatchType": "Clone",
    "PlantCount": 2,
    "StrainName": "Spring Hill Kush",
    "ActualDate": "2016-10-18T13:11:03Z"
  },
  {
    "PlantLabel": "1A4FF0000000022000000313",
    "PlantBatchName": "Kushy #3",
    "PlantBatchType": "Clone",
    "PlantCount": 4,
    "StrainName": "Spring Hill Kush",
    "ActualDate": "2016-10-18T13:11:03Z"
  }
]
';
$sampleData = json_decode($sampleData);

$licenseNumber = 'CML17-0000001';

$metrc = new Plants;
$plants = $metrc->createPlantings($licenseNumber, $sampleData);

print "<pre>";
print_r($plants);
print "</pre>";
