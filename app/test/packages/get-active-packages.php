<?php

/**
 * Packages API
 * 
 * Access the Metrc Packages API and request the latest data
 * 
 * @category GET
 * @source /packages/v1/active
 * @see https://api-ca.metrc.com/Documentation/#Plants.get_plants_v1_flowering
 * 
 */

namespace Kushy\Tests;

require_once '../../../vendor/autoload.php';

/**
 * Import API Client
 */
use Kushy\Metrc\Routes\Packages;

$licenseNumber = 'CML17-0000001';

$startDate = date('Y-m-d');
$yesterday = new \DateTime();
$yesterday->add(\DateInterval::createFromDateString('yesterday'));
$endDate = $yesterday->format('F j, Y') . "\n";

$metrc = new Packages;
$packages = $metrc->getActive($licenseNumber, $startDate, $endDate);

print "<pre>";
print_r($packages);
print "</pre>";
