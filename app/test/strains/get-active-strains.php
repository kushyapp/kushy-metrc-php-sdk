<?php

/**
 * Strains API
 * 
 * Access the Metrc Strains API and request the latest data
 * 
 * @category GET
 * @source /strains/v1/
 * @see https://api-ca.metrc.com/Documentation/#Facilities.get_facilities_v1
 * 
 */

namespace Kushy\Tests;

require_once '../../../vendor/autoload.php';

/**
 * Import API Client
 */
use Kushy\Metrc\Routes\Strains;

$licenseNumber = 'CML17-0000001';

$metrc = new Strains;
$strains = $metrc->getStrains($licenseNumber);

print "<pre>";
print_r($strains);
print "</pre>";
