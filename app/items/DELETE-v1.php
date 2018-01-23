<?php

/**
 * Items API - Delete item by ID
 * 
 * Access the Metrc Facilities API and delete an item
 * by it's corresponding ID and license #
 * 
 * Permissions Required:
 *  -Manage Items
 * 
 * @category DELETE
 * @source /items/v1/{id}
 * @see https://api-ca.metrc.com/Documentation/#Items.delete_items_v1_{id}
 * 
 * @param int $id
 * @param string $licenseNumber
 * @return null
 * 
 * @package Kushy Metrc SDK
 * @subpackage Items
 * @since 0.0.1
 */

/**
 * Import API
 */
require '../config/api.php';
require '../config/globals.php';


/**
 * Use API client to delete by ID and license #
 */
$id = 1;
$licenseNumber = '123-ABC';
$url = API_URL . "/items/v1/$id?licenseNumber=$licenseNumber";

$response = $client->delete($url);