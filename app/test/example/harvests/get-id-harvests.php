<?php

/**
 * Plants API
 * 
 * Access the Metrc Plants API and request the latest data
 * 
 * @category GET
 * @source /harvests/v1/{id}
 * @see https://api-ca.metrc.com/Documentation/#Harvests.get_harvests_v1_{id}
 * 
 */

namespace Kushy\Tests;

require_once '../../../vendor/autoload.php';

/**
 * Import API Client
 */
use Kushy\Metrc\Routes\Harvests;

$id = '2201';

$metrc = new Harvests;
$harvest = $metrc->getHarvest($id);

print "<pre>";
print_r($harvest);
print "</pre>";
