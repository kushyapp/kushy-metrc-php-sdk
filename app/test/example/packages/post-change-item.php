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
    "Label": "1A4FF0100000022000000250",
    "Item": "Kushy Brownies 2"
  }
]';
$sampleData = json_decode($sampleData);

$licenseNumber = 'CML17-0000001';

$metrc = new Packages;
$results = $metrc->changeItem($licenseNumber, $sampleData);

print_r($results);

