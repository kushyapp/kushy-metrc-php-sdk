<?php

/**
 * Items API - Update or create transactions by date
 * and license #
 * 
 * Access the Metrc Facilities API and create/update a
 * transaction by date and license #
 * 
 * Permissions Required:
 *  -Sales
 * 
 * @category PUT
 * @source /sales/v1/transactions/{date}
 * @see https://api-ca.metrc.com/Documentation/#Sales.put_sales_v1_transactions_{date}
 * 
 * @param date $date
 * @param string $licenseNumber
 * @return null
 * 
 * @package Kushy Metrc SDK
 * @subpackage Transactions
 * @since 0.0.1
 */

/**
 * Import API
 */
require '../config/api.php';
require '../config/globals.php';

/**
 * Sample Data
 */ 
$sampleData = '[
  {
    "PackageLabel": "ABCDEF012345670000010331",
    "Quantity": 1.0,
    "UnitOfMeasure": "Ounces",
    "TotalAmount": 9.99
  },
  {
    "PackageLabel": "ABCDEF012345670000010332",
    "Quantity": 1.0,
    "UnitOfMeasure": "Ounces",
    "TotalAmount": 9.99
  }
]';
$sampleData = json_decode($sampleData);

/**
 * Use API client to delete by ID and license #
 */
$date = date('c', strtotime(date('Y-m-d')));
$licenseNumber = '123-ABC';
$url = API_URL . "/sales/v1/transactions/$date?licenseNumber=$licenseNumber";

$response = $client->request('PUT', $url, [
    'json' => $sampleData
]);