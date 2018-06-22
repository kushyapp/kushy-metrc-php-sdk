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
    "Plant": "1A4FF0000000022000000156",
    "Weight": 100.23,
    "UnitOfWeight": "Grams",
    "DryingRoom": "00 A GeoShepard Dry Room",
    "HarvestName": null,
    "ActualDate": "2018-3-1"
  }
]
';
$sampleData = json_decode($sampleData);

$licenseNumber = 'CML17-0000001';

$metrc = new Plants;
$results = $metrc->manicure($licenseNumber, $sampleData);

print_r($results);

