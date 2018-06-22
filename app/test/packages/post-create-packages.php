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
use Kushy\Metrc\Routes\Packages;

/**
 * Test data
 */
$sampleData = '
[
  {
    "Tag": "1A4FF0100000022000000250",
    "Room": null,
    "Item": "Kushy Brownies",
    "Quantity": 1.0,
    "UnitOfMeasure": "Grams",
    "IsProductionBatch": false,
    "ProductionBatchNumber": null,
    "ProductRequiresRemediation": false,
    "ActualDate": "2015-12-15",
    "Ingredients": [
      {
        "Package": "1A4FF0100000022000000088",
        "Quantity": 1.0,
        "UnitOfMeasure": "Grams"
      }
    ]
  }
]';
$sampleData = json_decode($sampleData);

$licenseNumber = 'CML17-0000001';

$metrc = new Packages;
$results = $metrc->create($licenseNumber, $sampleData);

print_r($results);

