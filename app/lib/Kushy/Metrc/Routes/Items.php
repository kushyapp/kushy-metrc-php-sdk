<?php
/**
 * Metrc API SDK for Kushy
 * Items class extends API Client
 * 
 * Access the Metrc Items API and perform CRUD actions
 *  
 * @package Kushy
 * @subpackage Metrc SDK
 * @since 0.0.1
 */

namespace Kushy\Metrc\Routes;

require_once '../../../vendor/autoload.php';

use Kushy\Metrc\Metrc;

/**
 * A client to access the Metrc API
 */
class Items extends Metrc
{

     /**
     * Request active items from a licensed producer
     * 
     * @category GET
     * @source /items/v1/active
     * @see https://api-ca.metrc.com/Documentation/#Items.get_items_v1_active
     * 
     * @param string $licenseNumber     License # of facility to access
     * @return array                    JSON decoded API Response
     * 
     */

     function getActive($licenseNumber) {

        $url = "items/v1/active?licenseNumber=$licenseNumber";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     /**
     * Request all the item categories
     * 
     * @category GET
     * @source /items/v1/categories
     * @see https://api-ca.metrc.com/Documentation/#Items.get_items_v1_categories
     * 
     * @return array                    JSON decoded API Response
     * 
     */

     function getCategories() {

        $url = "items/v1/categories";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     /**
     * Request a specific item
     * 
     * @category GET
     * @source /items/v1/{id}
     * @see https://api-ca.metrc.com/Documentation/#Items.get_items_v1_{id}
     * 
     * @param integer $id   Plant ID or Tracking Label
     * @return array        JSON decoded API Response
     * 
     */

     function getItem($id) {

        $url = "items/v1/$id";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     
     /**
     * POST create new items
     * 
     * @category POST
     * @source /items/v1/create
     * @see https://api-ca.metrc.com/Documentation/#Items.post_items_v1_create
     * 
     * @param array $licenseNumber      License # of facility to access
     * @param array $items             Array of objects with plant data
     * @return integer          Status code of POST request
     * 
     */

     function create($licenseNumber, $items) {

        $url = "/items/v1/create?licenseNumber=$licenseNumber";
        $response = $this->client->request('POST', $url, ['json' => $items]);
        $body = $response->getBody();

        /**
         * Grab the status code (since POST has no response)
         *      200 = success
         *      401 = Unauthorized
         *      404 = Not Found
         */
        $code = $response->getStatusCode();

        return $code;
     }

     
     /**
     * POST update items with new data
     * 
     * @category POST
     * @source /items/v1/update
     * @see https://api-ca.metrc.com/Documentation/#Items.post_items_v1_update
     * 
     * @param array $licenseNumber      License # of facility to access
     * @param array $items             Array of objects with plant data
     * @return integer          Status code of POST request
     * 
     */

     function update($licenseNumber, $items) {

        $url = "/items/v1/update?licenseNumber=$licenseNumber";
        $response = $this->client->request('POST', $url, ['json' => $items]);
        $body = $response->getBody();

        /**
         * Grab the status code (since POST has no response)
         *      200 = success
         *      401 = Unauthorized
         *      404 = Not Found
         */
        $code = $response->getStatusCode();

        return $code;
     }
}