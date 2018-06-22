<?php

/**
 * Strains API
 * 
 * Access the Metrc Strains API and request the latest data
 * 
 * @category POST
 * @source /strains/v1/create
 * @see https://api-ca.metrc.com/Documentation/#Strains.post_strains_v1_create
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
    "Name": "Spring Hill Kush",
    "TestingStatus": "None",
    "ThcLevel": 0.1865,
    "CbdLevel": 0.1075,
    "IndicaPercentage": 25.0,
    "SativaPercentage": 75.0
  },
  {
    "Name": "TN Orange Dream",
    "TestingStatus": "None",
    "ThcLevel": 0.075,
    "CbdLevel": 0.14,
    "IndicaPercentage": 25.0,
    "SativaPercentage": 75.0
  }
]';
$sampleData = json_decode($sampleData);

$licenseNumber = 'CML17-0000001';

$metrc = new Strains;
$strains = $metrc->createStrains($licenseNumber, $sampleData);

print_r($strains);

