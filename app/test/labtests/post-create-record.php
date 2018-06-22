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
use Kushy\Metrc\Routes\LabTests;

/**
 * Test data
 */
$sampleData = '
[
  {
    "Label": "1A4FF0300000026000000007",
    "ResultDate": "2015-12-15T00:00:00Z",
    "Results": [
      {
        "LabTestTypeName": "THC (percent)",
        "Quantity": 1,
        "Passed": true,
        "Notes": ""
      }
    ]
  }
]';
$sampleData = json_decode($sampleData);

$licenseNumber = '008-0000010-LIC';

$metrc = new LabTests;
$results = $metrc->createRecord($licenseNumber, $sampleData);

print_r($results);

