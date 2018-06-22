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
use Kushy\Metrc\Routes\Harvests;

/**
 * Test data
 */
$sampleData = '
[
  {
    "Id": 3802,
    "UnitOfWeight": "Grams",
    "WasteWeight": 10.05,
    "ActualDate": "2018-3-1"
  }
]';
$sampleData = json_decode($sampleData);

$licenseNumber = 'CML17-0000001';

$metrc = new Harvests;
$results = $metrc->removeWaste($licenseNumber, $sampleData);

print_r($results);

