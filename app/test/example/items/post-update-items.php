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
use Kushy\Metrc\Routes\Items;

/**
 * Test data
 */
$sampleData = '
[
  {
    "Id": 5801,
    "Name": "Kushy Brownies",
    "ItemCategory": "Edible",
    "UnitOfMeasure": "Grams",
    "Strain": "Spring Hill Kush",
    "UnitThcContent": null,
    "UnitThcContentUnitOfMeasure": null,
    "UnitVolume": null,
    "UnitVolumeUnitOfMeasure": null,
    "UnitWeight": null,
    "UnitWeightUnitOfMeasure": null
  }
]';
$sampleData = json_decode($sampleData);

$licenseNumber = 'CML17-0000001';

$metrc = new Items;
$results = $metrc->update($licenseNumber, $sampleData);

print_r($results);

