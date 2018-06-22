<?php

/**
 * Facilities API
 * 
 * Access the Metrc Facilities API and request the latest data
 * 
 * @category GET
 * @source /facilities/v1/
 * @see https://api-ca.metrc.com/Documentation/#Facilities.get_facilities_v1
 * 
 * @package Kushy Metrc SDK
 * @subpackage Facilities
 * @since 0.0.1
 */

/**
 * Import API
 */
require '../config/api.php';

/**
 * Sample Data to mock API response
 */
// $sampleData = '[
//   {
//     "HireDate": "0001-01-01",
//     "HomePage": "Plants",
//     "IsOwner": false,
//     "IsManager": true,
//     "Occupations": [],
//     "Name": "MMC CO LLC",
//     "Alias": "MMC CO LLC",
//     "DisplayName": "MMC CO LLC",
//     "SupportActivationDate": null,
//     "SupportExpirationDate": null,
//     "SupportLastPaidDate": null,
//     "FacilityType": null,
//     "License": {
//       "Number": "403-X0001",
//       "StartDate": "2013-06-28",
//       "EndDate": "2015-12-28",
//       "LicenseType": "OPC"
//     }
//   },
//   {
//     "HireDate": "0001-01-01",
//     "HomePage": "Default",
//     "IsOwner": false,
//     "IsManager": true,
//     "Occupations": [],
//     "Name": "MMC CO LLC",
//     "Alias": "MMC CO OPC B",
//     "DisplayName": "MMC CO OPC B",
//     "SupportActivationDate": null,
//     "SupportExpirationDate": null,
//     "SupportLastPaidDate": null,
//     "FacilityType": null,
//     "License": {
//       "Number": "403-X0002",
//       "StartDate": "2012-08-15",
//       "EndDate": "2015-11-15",
//       "LicenseType": "OPC"
//     }
//   }
// ]';
// $sampleData = json_decode($sampleData);

/**
 * Send API Request
 */
// $id = 1;
$url = "facilities/v1/";
$response = $client->request('GET', $url);

/**
 * Grab the body (results/JSON) and status code
 */
$code = $response->getStatusCode(); // 200
$body = $response->getBody();

// Echo/print the body if you need to see it quickly
echo $body;

/**
 * Decode the API response from JSON to PHP object
 */
$json = json_decode($response->getBody());

/**
 * All the response object variables for quick copy/paste
 * 
 * $sample->HireDate
 * $sample->HomePage
 * $sample->IsOwner
 * $sample->IsManager
 * $sample->Occupations
 * $sample->Name
 * $sample->Alias
 * $sample->DisplayName
 * $sample->SupportActivationDate
 * $sample->SupportExpirationDate
 * $sample->SupportLastPaidDate
 * $sample->FacilityType
 * $sample->License
 * $sample->License->Number
 * $sample->License->StartDate
 * $sample->License->EndDate
 * $sample->License->OPC
 * 
 */

/**
 * Request is array of objects (facilities) - so lets loop
 */
foreach($json as $sample) {
    echo '<div style="margin-top:1em;">';

    echo "HireDate: ".  $sample->HireDate . "<br />";
    echo "HomePage: ".  $sample->HomePage . "<br />";

    echo "IsOwner: ";
    if($sample->IsOwner == true) { echo "True"; } else { echo "False"; }
    echo "<br />";
    
    echo "IsManager: ";
    if($sample->IsManager == true) { echo "True"; } else { echo "False"; }
    echo "<br />";

    foreach($sample->Occupations as $occupationKey => $occupationValue) {
        echo "$occupationKey: $occupationValue <br />";
    }
    echo "Name: {$sample->Name} <br />";
    echo "Alias: {$sample->Alias} <br />";
    echo "DisplayName: {$sample->DisplayName} <br />";
    echo "SupportActivationDate: {$sample->SupportActivationDate} <br />";
    echo "SupportExpirationDate: {$sample->SupportExpirationDate} <br />";
    echo "SupportLastPaidDate: {$sample->SupportLastPaidDate} <br />";
    echo "<strong>FacilityType</strong><br />";
    foreach($sample->FacilityType as $facilityKey => $facilityValue) {
        echo "$facilityKey: ";
        if($facilityValue == true) { echo "True"; } else { echo "False"; }
        echo "<br />";
    }
    echo "<strong>License</strong> <br />";
    echo "License Number: {$sample->License->Number} <br />";
    echo "License StartDate: {$sample->License->StartDate} <br />";
    echo "License EndDate: {$sample->License->EndDate} <br />";
    echo "License OPC: {$sample->License->LicenseType} <br />";

    echo "</div>";
}
