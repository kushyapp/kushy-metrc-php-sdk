<?php

/**
 * Plant Batches API
 * 
 * Access the Metrc Plant Batches API and request the latest data
 * 
 * @category POST
 * @source /packages/v1/adjust
 * @see https://api-ca.metrc.com/Documentation/#Packages.post_packages_v1_adjust
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
    "Label": "1A4FF0100000022000000249",
    "Quantity": -14.0,
    "UnitOfMeasure": "Kilograms",
    "AdjustmentReason": "Scale Variance",
    "AdjustmentDate": "2018-3-1",
    "ReasonNote": "Kushy was here"
  }
]';
$sampleData = json_decode($sampleData);

$licenseNumber = 'CML17-0000001';

$metrc = new Packages;
$results = $metrc->adjust($licenseNumber, $sampleData);

print_r($results);

