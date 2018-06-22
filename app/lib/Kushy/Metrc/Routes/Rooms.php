<?php
/**
 * Metrc API SDK for Kushy
 * Rooms class extends API Client
 * 
 * Access the Metrc Rooms API and perform CRUD actions
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
class Rooms extends Metrc
{

     /**
     * Request active rooms
     * 
     * @category GET
     * @source /rooms/v1/active
     * @see https://api-ca.metrc.com/Documentation/#Rooms.get_rooms_v1_active
     * 
     * @param string $licenseNumber     License # of facility to access
     * @return array                    JSON decoded API Response
     * 
     */

     function getActive($licenseNumber) {

        $url = "rooms/v1/active?licenseNumber=$licenseNumber";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     /**
     * Request a specific room
     * 
     * @category GET
     * @source /rooms/v1/{id}
     * @see https://api-ca.metrc.com/Documentation/#Rooms.get_rooms_v1_{id}
     * 
     * @param integer $id   Room ID
     * @return array        JSON decoded API Response
     * 
     */

     function getBatch($id) {

        $url = "rooms/v1/$id";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     
     /**
     * POST array of rooms
     * 
     * @category POST
     * @source /rooms/v1/create
     * @see https://api-ca.metrc.com/Documentation/#Rooms.post_rooms_v1_create
     * 
     * @param string $licenseNumber     License # of facility to access
     * @param array $rooms              Array of objects with room data
     * @return integer                  Status code of POST request
     * 
     */

     function createRooms($licenseNumber, $rooms) {

        $url = "/rooms/v1/create?licenseNumber=$licenseNumber";
        $response = $this->client->request('POST', $url, ['json' => $rooms]);
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
     * POST array of rooms
     * 
     * @category POST
     * @source /rooms/v1/update
     * @see https://api-ca.metrc.com/Documentation/#Rooms.post_rooms_v1_create
     * 
     * @param string $licenseNumber     License # of facility to access
     * @param array $rooms              Array of objects with room data
     * @return integer                  Status code of POST request
     * 
     */

     function updateRooms($licenseNumber, $rooms) {

        $url = "/rooms/v1/update?licenseNumber=$licenseNumber";
        $response = $this->client->request('POST', $url, ['json' => $rooms]);
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
     * POST plant growth changes
     * 
     * @category POST
     * @source /plantbatches/v1/changegrowthphase
     * @see https://api-ca.metrc.com/Documentation/#PlantBatches.post_plantbatches_v1_changegrowthphase
     * 
     * @param array $licenseNumber      License # of facility to access
     * @param array $plants             Array of objects with plant data
     * @return integer                  Status code of POST request
     * 
     */

     function changeGrowth($licenseNumber, $plants) {

        $url = "/strains/v1/update?licenseNumber=$licenseNumber";
        $response = $this->client->request('POST', $url, ['json' => $plants]);
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