<?php

/**
 * Strains API
 * 
 * Access the Metrc Strains API and update strains via POST
 * 
 * @category POST
 * @source /strains/v1/update
 * @see https://api-ca.metrc.com/Documentation/#Strains.post_strains_v1_update
 * 
 */

namespace Kushy\Tests;

require_once '../../../vendor/autoload.php';

/**
 * Import API Client
 */
use Kushy\Metrc\Routes\Strains;

/**
 * Test data
 */
$sampleData = '
[
  {
    "Id": 1308,
    "Name": "Spring Hill Kush",
    "TestingStatus": "None",
    "ThcLevel": 420,
    "CbdLevel": 710,
    "IndicaPercentage": 25.0,
    "SativaPercentage": 75.0
  }
]';
$sampleData = json_decode($sampleData);

$licenseNumber = 'CML17-0000001';

$metrc = new Strains;
$strains = $metrc->updateStrains($licenseNumber, $sampleData);

print_r($strains);

