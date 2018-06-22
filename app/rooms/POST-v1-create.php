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
 * @source /rooms/v1/create
 * @see https://api-ca.metrc.com/Documentation/#Rooms.post_rooms_v1_create
 * 
 * @param string $licenseNumber
 * @return null
 * 
 * @package Kushy Metrc SDK
 * @subpackage Rooms
 * @since 0.0.2
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
    "Name": "Harvest Room"
  },
  {
    "Name": "Plants Room"
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
$licenseNumber = '123-ABC';
$url = "/rooms/v1/create?licenseNumber=$licenseNumber";
$response = $client->request('POST', $url, ['json' => $sampleData]);

/**
 * Grab the status code (since POST has no response)
 */
$code = $response->getStatusCode(); // Good to go = 200
echo $code;