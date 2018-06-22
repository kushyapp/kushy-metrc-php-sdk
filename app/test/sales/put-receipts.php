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
use Kushy\Metrc\Routes\Sales;

/**
 * Test data
 */
$sampleData = '
[
  {
    "Id": 141,
    "SalesDateTime": "2018-3-1T16:44:53.000",
    "SalesCustomerType": "Consumer",
    "PatientLicenseNumber": null,
    "CaregiverLicenseNumber": null,
    "Transactions": [
      {
        "PackageLabel": "1A4FF0300000029000000200",
        "Quantity": 2.0,
        "UnitOfMeasure": "Each",
        "TotalAmount": 9.99
      },
      {
        "PackageLabel": "1A4FF0300000029000000200",
        "Quantity": 1.0,
        "UnitOfMeasure": "Each",
        "TotalAmount": 9.99
      }
    ]
  }
]';
$sampleData = json_decode($sampleData);

$licenseNumber = 'A12-0000015-LIC';

$metrc = new Sales;
$results = $metrc->updateReceipts($licenseNumber, $sampleData);

print_r($results);

