<?php
/**
 * Metrc API SDK for Kushy
 * Harvests class extends API Client
 * 
 * Access the Metrc Harvests API and perform CRUD actions
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
class Harvests extends Metrc
{

     /**
     * Request active harvests from a licensed producer
     * 
     * @category GET
     * @source /harvests/v1/active
     * @see https://api-ca.metrc.com/Documentation/#Harvests.get_harvests_v1_active
     * 
     * @param string $licenseNumber     License # of facility to access
     * @param date $startDate           First date (and time optionally)
     * @param date $endDate             End date (and time optionally)
     * @return array                    JSON decoded API Response
     * 
     */

     function getActive($licenseNumber, $startDate, $endDate) {

        $lastModifiedStart = date('c', strtotime($startDate));
        $lastModifiedEnd = date('c', strtotime($endDate));

        $url = "harvests/v1/active?licenseNumber=$licenseNumber&lastModifiedStart=$lastModifiedStart&lastModifiedEnd=$lastModifiedEnd";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     /**
     * Request onhold harvests from a licensed producer
     * 
     * @category GET
     * @source /harvests/v1/flowering
     * @see https://api-ca.metrc.com/Documentation/#harvests.get_harvests_v1_onhold
     * 
     * @param string $licenseNumber     License # of facility to access
     * @param date $startDate           First date (and time optionally)
     * @param date $endDate             End date (and time optionally)
     * @return array                    JSON decoded API Response
     * 
     */

     function getOnHold($licenseNumber, $startDate, $endDate) {

        $lastModifiedStart = date('c', strtotime($startDate));
        $lastModifiedEnd = date('c', strtotime($endDate));

        $url = "harvests/v1/onhold?licenseNumber=$licenseNumber&lastModifiedStart=$lastModifiedStart&lastModifiedEnd=$lastModifiedEnd";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     /**
     * Request inactive harvests from a licensed producer
     * 
     * @category GET
     * @source /harvests/v1/inactive
     * @see https://api-ca.metrc.com/Documentation/#harvests.get_harvests_v1_inactive
     * 
     * @param string $licenseNumber     License # of facility to access
     * @param date $startDate           First date (and time optionally)
     * @param date $endDate             End date (and time optionally)
     * @return array                    JSON decoded API Response
     * 
     */

     function getInActive($licenseNumber, $startDate, $endDate) {

        $lastModifiedStart = date('c', strtotime($startDate));
        $lastModifiedEnd = date('c', strtotime($endDate));

        $url = "harvests/v1/inactive?licenseNumber=$licenseNumber&lastModifiedStart=$lastModifiedStart&lastModifiedEnd=$lastModifiedEnd";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     /**
     * Request a specific harvest
     * 
     * @category GET
     * @source /harvests/v1/{id}
     * @see https://api-ca.metrc.com/Documentation/#Harvests.get_harvests_v1_{id}
     * 
     * @param integer $id   Harvest ID
     * @return array        JSON decoded API Response
     * 
     */

     function getHarvest($id) {

        $url = "harvests/v1/$id";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     
     /**
     * POST create packages from harvests
     * 
     * @category POST
     * @source /harvests/v1/removewaste
     * @see https://api-ca.metrc.com/Documentation/#Harvests.post_harvests_v1_removewaste
     * 
     * @param array $licenseNumber      License # of facility to access
     * @param array $harvests           Array of objects with plant data
     * @return integer                  Status code of POST request
     * 
     */

     function removeWaste($licenseNumber, $harvests) {

        $url = "/harvests/v1/removewaste?licenseNumber=$licenseNumber";
        $response = $this->client->request('POST', $url, ['json' => $harvests]);
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
     * POST create packages from harvests
     * 
     * @category POST
     * @source /harvests/v1/createpackages
     * @see https://api-ca.metrc.com/Documentation/#Harvests.post_harvests_v1_createpackages
     * 
     * @param array $licenseNumber      License # of facility to access
     * @param array $harvests           Array of objects with plant data
     * @return integer                  Status code of POST request
     * 
     */

     function createPackages($licenseNumber, $harvests) {

        $url = "/harvests/v1/createpackages?licenseNumber=$licenseNumber";
        $response = $this->client->request('POST', $url, ['json' => $harvests]);
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
     * POST create packages from harvests
     * 
     * @category POST
     * @source /harvests/v1/finish
     * @see https://api-ca.metrc.com/Documentation/#Harvests.post_harvests_v1_createpackages
     * 
     * @param array $licenseNumber      License # of facility to access
     * @param array $harvests           Array of objects with plant data
     * @return integer                  Status code of POST request
     * 
     */

     function finish($licenseNumber, $harvests) {

        $url = "/harvests/v1/finish?licenseNumber=$licenseNumber";
        $response = $this->client->request('POST', $url, ['json' => $harvests]);
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
     * POST create packages from harvests
     * 
     * @category POST
     * @source /harvests/v1/unfinish
     * @see https://api-ca.metrc.com/Documentation/#Harvests.post_harvests_v1_createpackages
     * 
     * @param array $licenseNumber      License # of facility to access
     * @param array $harvests           Array of objects with plant data
     * @return integer                  Status code of POST request
     * 
     */

     function unfinish($licenseNumber, $harvests) {

        $url = "/harvests/v1/unfinish?licenseNumber=$licenseNumber";
        $response = $this->client->request('POST', $url, ['json' => $harvests]);
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