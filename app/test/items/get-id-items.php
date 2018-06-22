<?php

/**
 * Items API
 * 
 * Access the Metrc Items API and request the latest data
 * 
 * @category GET
 * @source /items/v1/{id}
 * @see https://api-ca.metrc.com/Documentation/#Items.get_items_v1_{id}
 * 
 */

namespace Kushy\Tests;

require_once '../../../vendor/autoload.php';

/**
 * Import API Client
 */
use Kushy\Metrc\Routes\Items;

$id = '2805';

$metrc = new Items;
$item = $metrc->getItem($id);

print "<pre>";
print_r($item);
print "</pre>";
