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
    "ItemCategory": "Edible",
    "Name": "Kushy Brownies 2",
    "UnitOfMeasure": "Ounces",
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
$results = $metrc->create($licenseNumber, $sampleData);

print_r($results);

