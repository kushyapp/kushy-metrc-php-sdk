<?php

/**
 * Harvests API - Request Single Harvest by ID
 * 
 * Access the Metrc Facilities API and request a single harvest by it's ID
 * 
 * @category GET
 * @source /harvests/v1/{id}
 * @see https://api-ca.metrc.com/Documentation/#Harvests.get_harvests_v1_{id}
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
$sampleData = '{
  "Id": 1,
  "Name": "2014-11-19-Harvest Room-M",
  "HarvestType": "Product",
  "DryingRoomId": 1,
  "DryingRoomName": "Harvest Room",
  "CurrentWeight": 0.0,
  "TotalWasteWeight": 0.0,
  "PlantCount": 70,
  "TotalWetWeight": 40.0,
  "PackageCount": 5,
  "TotalPackagedWeight": 0.0,
  "UnitOfWeightName": "Ounces",
  "LabTestingState": null,
  "LabTestingStateDate": null,
  "IsOnHold": false,
  "HarvestStartDate": "2014-11-19",
  "FinishedDate": null,
  "ArchivedDate": null,
  "LastModified": "0001-01-01T00:00:00+00:00",
  "Strains": []
}';
$sample = json_decode($sampleData);

/**
 * Send API Request
 */
//$id = 1;
//$url = "/harvests/v1/$id";
//$response = $client->request('GET', $url);

/**
 * Grab the body (results/JSON) and status code
 */
//$code = $response->getStatusCode(); // 200
//$body = $response->getBody();

// Echo/print the body if you need to see it quickly
//echo $body;

/**
 * Decode the API response from JSON to PHP object
 */
//$json = json_decode($response->getBody());

/**
 * All the response object variables for quick copy/paste
 * 
 * $sample->Id
 * $sample->Name
 * $sample->HarvestType
 * $sample->DryingRoomId
 * $sample->DryingRoomName
 * $sample->CurrentWeight
 * $sample->TotalWasteWeight
 * $sample->PlantCount
 * $sample->TotalWetWeight
 * $sample->PackageCount
 * $sample->TotalPackagedWeight
 * $sample->UnitOfWeightName
 * $sample->LabTestingState
 * $sample->LabTestingStateDate
 * $sample->IsOnHold
 * $sample->HarvestStartDate
 * $sample->FinishedDate
 * $sample->ArchivedDate
 * $sample->LastModified
 * $sample->Strains
 * 
 */

/**
 * Return object data
 */

echo "Id: {$sample->Id} <br />";
echo "Name: {$sample->Name} <br />";
echo "HarvestType: {$sample->HarvestType} <br />";
echo "DryingRoomId: {$sample->DryingRoomId} <br />";
echo "DryingRoomName: {$sample->DryingRoomName} <br />";
echo "CurrentWeight: {$sample->CurrentWeight} <br />";
echo "TotalWasteWeight: {$sample->TotalWasteWeight} <br />";
echo "PlantCount: {$sample->PlantCount} <br />";
echo "TotalWetWeight: {$sample->TotalWetWeight} <br />";
echo "PackageCount: {$sample->PackageCount} <br />";
echo "TotalPackagedWeight: {$sample->TotalPackagedWeight} <br />";
echo "UnitOfWeightName: {$sample->UnitOfWeightName} <br />";
echo "LabTestingState: {$sample->LabTestingState} <br />";
echo "LabTestingStateDate: {$sample->LabTestingStateDate} <br />";
echo "IsOnHold: {$sample->IsOnHold} <br />";
echo "HarvestStartDate: {$sample->HarvestStartDate} <br />";
echo "FinishedDate: {$sample->FinishedDate} <br />";
echo "ArchivedDate: {$sample->ArchivedDate} <br />";
echo "LastModified: {$sample->LastModified} <br />";
echo "<strong>Strains</strong>: <br />";
foreach($sample->Strains as $strain) {
    echo "Strain Name: $strain";
}
