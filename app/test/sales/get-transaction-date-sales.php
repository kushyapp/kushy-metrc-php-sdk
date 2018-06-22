<?php

/**
 * Sales API
 * 
 * Access the Metrc Sales API and request the latest data
 * 
 * @category GET
 * @source /sales/v1/transactions
 * @see https://api-ca.metrc.com/Documentation/#Plants.get_plants_v1_flowering
 * 
 */

namespace Kushy\Tests;

require_once '../../../vendor/autoload.php';

/**
 * Import API Client
 */
use Kushy\Metrc\Routes\Sales;

$licenseNumber = 'CML17-0000001';
$userDate = '2018-2-2';
$date = date('Y-m-d', $userDate);

$metrc = new Sales;
$transactions = $metrc->getTransactions($licenseNumber, $date);

print "<pre>";
print_r($transactions);
print "</pre>";
