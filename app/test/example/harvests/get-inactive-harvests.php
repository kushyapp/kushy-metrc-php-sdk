<?php

/**
 * Plants API
 * 
 * Access the Metrc Plants API and request the latest data
 * 
 * @category GET
 * @source /harvests/v1/inactive
 * @see https://api-ca.metrc.com/Documentation/#Plants.get_plants_v1_flowering
 * 
 */

namespace Kushy\Tests;

require_once '../../../vendor/autoload.php';

/**
 * Import API Client
 */
use Kushy\Metrc\Routes\Harvests;

$licenseNumber = 'CML17-0000001';

$startDate = date('Y-m-d');
$yesterday = new \DateTime();
$yesterday->add(\DateInterval::createFromDateString('yesterday'));
$endDate = $yesterday->format('F j, Y') . "\n";

$metrc = new Harvests;
$harvests = $metrc->getInActive($licenseNumber, $startDate, $endDate);

print "<pre>";
print_r($harvests);
print "</pre>";
