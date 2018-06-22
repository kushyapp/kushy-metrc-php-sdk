<?php

/**
 * Plant Batches API
 * 
 * Access the Metrc Plant Batches API and request the latest data
 * 
 * @category GET
 * @source /plantbatches/v1/active
 * @see https://api-ca.metrc.com/Documentation/#PlantBatches.get_plantbatches_v1_active
 * 
 */

namespace Kushy\Tests;

require_once '../../../vendor/autoload.php';

/**
 * Import API Client
 */
use Kushy\Metrc\Routes\PlantBatches;

$licenseNumber = 'CML17-0000001';

$startDate = date('Y-m-d', strtotime('1/2/2018'));
$yesterday = new \DateTime();
$yesterday->add(\DateInterval::createFromDateString('1/2/2018 - 1 day'));
$endDate = $yesterday->format('F j, Y') . "\n";

$metrc = new PlantBatches;
$batches = $metrc->getActive($licenseNumber, $startDate, $endDate);

print "<pre>";
print_r($batches);
print "</pre>";
