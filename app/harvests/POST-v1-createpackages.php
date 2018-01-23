<?php

/**
 * Harvests API - Create new package with license #
 * 
 * Access the Metrc Facilities API and create a new package
 * of harvest material using license #
 * 
 * Permissions Required:
 *  -View Harvests
 *  -Manage Harvests
 *  -View Packages
 *  -Create/Submit/Discontinue Packages
 * 
 * @category POST
 * @source /harvests/v1/createpackages
 * @see https://api-ca.metrc.com/Documentation/#Harvests.post_harvests_v1_createpackages
 * 
 * @param string $licenseNumber
 * @return null
 * 
 * @package Kushy Metrc SDK
 * @subpackage Harvests
 * @since 0.0.1
 */

/**
 * Import API
 */
require '../config/api.php';

/**
 * Sample Data to mock API response
 */
$sampleData = '[
  {
    "Harvest": 2,
    "Item": "Buds",
    "Weight": 100.23,
    "UnitOfWeight": "Grams",
    "Tag": "ABCDEF012345670000020201",
    "IsProductionBatch": false,
    "ProductionBatchNumber": null,
    "ProductRequiresRemediation": false,
    "RemediateProduct": false,
    "RemediationMethodId": null,
    "RemediationDate": null,
    "RemediationSteps": null,
    "ActualDate": "2015-12-15"
  },
  {
    "Harvest": 1,
    "Item": "Shake",
    "Weight": 25.1,
    "UnitOfWeight": "Grams",
    "Tag": "ABCDEF012345670000020202",
    "IsProductionBatch": true,
    "ProductionBatchNumber": "PB-2015-12-15",
    "ProductRequiresRemediation": false,
    "RemediateProduct": false,
    "RemediationMethodId": null,
    "RemediationDate": null,
    "RemediationSteps": null,
    "ActualDate": "2015-12-15"
  }
]';
$sampleData = json_decode($sampleData);


/**
 * Create POST array to send to API
 * 
 * Ideally you would have a properly structuered objects
 * with harvest info to add to array.
 * 
 * If not, create objects with harvest info and
 * add to array.
 * 
 * Harvest Parameters:
 * $newHarvest->Harvest
 * $newHarvest->Item
 * $newHarvest->Weight
 * $newHarvest->UnitOfWeight
 * $newHarvest->Tag
 * $newHarvest->IsProductionBatch
 * $newHarvest->ProductionBatchNumber
 * $newHarvest->ProductRequiresRemediation
 * $newHarvest->RemediateProduct
 * $newHarvest->RemediationMethodId
 * $newHarvest->RemediationDate
 * $newHarvest->RemediationSteps
 * $newHarvest->ActualDate
 * 
 */
// $newPackage = [];
// foreach($harvests as $harvest) {
//   $newHarvest = new \stdClass;
//   $newHarvest->Harvest = 
//   $newHarvest->Item
//   $newHarvest->Weight
//   $newHarvest->UnitOfWeight
//   $newHarvest->Tag
//   $newHarvest->IsProductionBatch
//   $newHarvest->ProductionBatchNumber
//   $newHarvest->ProductRequiresRemediation
//   $newHarvest->RemediateProduct
//   $newHarvest->RemediationMethodId
//   $newHarvest->RemediationDate
//   $newHarvest->RemediationSteps
//   $newHarvest->ActualDate
//   $newPackage[] = $newHarvest;
// }


/**
 * Send API Request
 */
// $licenseNumber = '123-ABC';
// $url = "/harvests/v1/createpackages?licenseNumber=$licenseNumber";
// $response = $client->request('POST', $url, ['json' => $sampleData]);

/**
 * Grab the status code (since POST has no response)
 */
//$code = $response->getStatusCode(); // Good to go = 200