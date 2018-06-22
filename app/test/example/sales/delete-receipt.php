<?php

/**
 * Plants API
 * 
 * Access the Metrc Plants API and request the latest data
 * 
 * @category GET
 * @source /plants/v1/flowering
 * @see https://api-ca.metrc.com/Documentation/#Plants.get_plants_v1_flowering
 * 
 */

namespace Kushy\Tests;

require_once '../../../vendor/autoload.php';

/**
 * Import API Client
 */
use Kushy\Metrc\Routes\Sales;

/**
 * Add ?id={your_id} to the URL to change up plant
 */
if($_GET['id']) {
    $id = $_GET['id'];
    $licenseNumber = 'A12-0000015-LIC';

$metrc = new Sales;
$plant = $metrc->deleteReceipt($licenseNumber, $id);

print "<pre>";
print_r($plant);
print "</pre>";

} else {
    echo 'Please provide an ID by adding ?id=YOUR_ID_HERE to the URL';
}