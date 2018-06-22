<?php
/**
 * Metrc API SDK for Kushy
 * Sales class extends API Client
 * 
 * Access the Metrc Sales API and perform CRUD actions
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
class LabTests extends Metrc
{

     /**
     * Request types of customers
     * 
     * @category GET
     * @source /labtests/v1/states
     * @see https://api-ca.metrc.com/Documentation/#LabTests.get_labtests_v1_states
     * 
     * @return array                    JSON decoded API Response
     * 
     */

     function getStates() {

        $url = "labtests/v1/states";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     /**
     * Request types of customers
     * 
     * @category GET
     * @source /labtests/v1/types
     * @see https://api-ca.metrc.com/Documentation/#LabTests.get_labtests_v1_types
     * 
     * @return array                    JSON decoded API Response
     * 
     */

     function getTypes() {

        $url = "labtests/v1/types";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     
     /**
     * POST create records
     * 
     * @category POST
     * @source /labtests/v1/record
     * @see https://api-ca.metrc.com/Documentation/#LabTests.post_labtests_v1_record
     * 
     * @param array $licenseNumber      License # of facility to access
     * @param array $records            Array of objects with lab result records
     * @return integer          Status code of POST request
     * 
     */

     function createRecord($licenseNumber, $records) {

        $url = "/labtests/v1/record?licenseNumber=$licenseNumber";
        $response = $this->client->request('POST', $url, ['json' => $records]);
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