<?php

/**
 * Sales API
 * 
 * Access the Metrc Sales API and request the latest data
 * 
 * @category GET
 * @source /sales/v1/receipts
 * @see https://api-ca.metrc.com/Documentation/#Plants.get_plants_v1_flowering
 * 
 */

namespace Kushy\Tests;

require_once '../../../vendor/autoload.php';

/**
 * Import API Client
 */
use Kushy\Metrc\Routes\Sales;

$licenseNumber = 'A12-0000015-LIC';

$startDate = date('Y-m-d');
$yesterday = new \DateTime();
$yesterday->add(\DateInterval::createFromDateString('yesterday'));
$endDate = $yesterday->format('F j, Y') . "\n";

$metrc = new Sales;
$receipts = $metrc->getReceipts($licenseNumber, $startDate, $endDate);

print "<pre>";
print_r($receipts);
print "</pre>";
