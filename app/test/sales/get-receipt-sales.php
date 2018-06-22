<?php

/**
 * Sales API
 * 
 * Access the Metrc Sales API and request the latest data
 * 
 * @category GET
 * @source /sales/v1/receipts/{id}
 * @see https://api-ca.metrc.com/Documentation/#Plants.get_plants_v1_flowering
 * 
 */

namespace Kushy\Tests;

require_once '../../../vendor/autoload.php';

/**
 * Import API Client
 */
use Kushy\Metrc\Routes\Sales;

$id = '';

$metrc = new Sales;
$receipt = $metrc->getReceipt($id);

print "<pre>";
print_r($receipt);
print "</pre>";
