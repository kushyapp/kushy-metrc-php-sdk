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
    "Harvest": 3802,
    "Room": null,
    "Item": "00 Aa GeoShepard Plethora of Plants",
    "Weight": 100.23,
    "UnitOfWeight": "Grams",
    "Tag": "1A4FF0100000022000000247",
    "IsProductionBatch": false,
    "ProductionBatchNumber": null,
    "ProductRequiresRemediation": false,
    "RemediateProduct": false,
    "RemediationMethodId": null,
    "RemediationDate": null,
    "RemediationSteps": null,
    "ActualDate": "2018-3-1"
  }
]';
$sampleData = json_decode($sampleData);

$licenseNumber = 'CML17-0000001';

$metrc = new Harvests;
$results = $metrc->createPackages($licenseNumber, $sampleData);

print_r($results);

