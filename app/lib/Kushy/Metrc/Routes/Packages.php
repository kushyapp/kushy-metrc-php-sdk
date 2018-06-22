<?php
/**
 * Metrc API SDK for Kushy
 * Packages class extends API Client
 * 
 * Access the Metrc Packages API and perform CRUD actions
 *  
 * @package Kushy
 * @subpackage Metrc SDK
 * @since 0.0.1
 */

namespace Kushy\Metrc\Routes;

require_once '../../../vendor/autoload.php';

use Kushy\Metrc\Metrc;
use GuzzleHttp\Exception\ClientException;

/**
 * A client to access the Metrc API
 */
class Packages extends Metrc
{

     /**
     * Request active packages from a licensed producer
     * 
     * @category GET
     * @source /packages/v1/active
     * @see https://api-ca.metrc.com/Documentation/#Packages.get_packages_v1_active
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

        $url = "packages/v1/active?licenseNumber=$licenseNumber&lastModifiedStart=$lastModifiedStart&lastModifiedEnd=$lastModifiedEnd";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     /**
     * Request onhold packages from a licensed producer
     * 
     * @category GET
     * @source /packages/v1/onhold
     * @see https://api-ca.metrc.com/Documentation/#packages.get_packages_v1_onhold
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

        $url = "packages/v1/onhold?licenseNumber=$licenseNumber&lastModifiedStart=$lastModifiedStart&lastModifiedEnd=$lastModifiedEnd";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     /**
     * Request inactive packages from a licensed producer
     * 
     * @category GET
     * @source /packages/v1/inactive
     * @see https://api-ca.metrc.com/Documentation/#packages.get_packages_v1_inactive
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

        $url = "packages/v1/inactive?licenseNumber=$licenseNumber&lastModifiedStart=$lastModifiedStart&lastModifiedEnd=$lastModifiedEnd";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     /**
     * Request a specific package
     * 
     * @category GET
     * @source /packages/v1/{id}
     * @see https://api-ca.metrc.com/Documentation/#Packages.get_packages_v1_{id}
     * 
     * @param integer $id   Package ID or Tracking Label
     * @return array        JSON decoded API Response
     * 
     */

     function getPackage($id) {

        $url = "packages/v1/$id";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     /**
     * Request package types
     * 
     * @category GET
     * @source /packages/v1/types
     * @see https://api-ca.metrc.com/Documentation/#Packages.get_packages_v1_types
     * 
     * @return array        JSON decoded API Response
     * 
     */

     function getTypes() {

        $url = "packages/v1/types";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     /**
     * Request adjust reasons for packages
     * 
     * @category GET
     * @source /packages/v1/adjust/reasons
     * @see https://api-ca.metrc.com/Documentation/#Packages.get_packages_v1_adjust_reasons
     * 
     * @return array        JSON decoded API Response
     * 
     */

     function getAdjustReasons() {

        $url = "packages/v1/adjust/reasons";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     
     /**
     * POST create new packages
     * 
     * @category POST
     * @source /packages/v1/create
     * @see https://api-ca.metrc.com/Documentation/#Packages.post_packages_v1_create
     * 
     * @param array $licenseNumber      License # of facility to access
     * @param array $packages             Array of objects with plant data
     * @return integer          Status code of POST request
     * 
     */

     function create($licenseNumber, $packages) {

        $url = "/packages/v1/create?licenseNumber=$licenseNumber";
        $response = $this->client->request('POST', $url, ['json' => $packages]);
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
     * POST adjust packages
     * 
     * @category POST
     * @source /packages/v1/adjust
     * @see https://api-ca.metrc.com/Documentation/#Packages.post_packages_v1_adjust
     * 
     * @param array $licenseNumber      License # of facility to access
     * @param array $packages             Array of objects with plant data
     * @return integer          Status code of POST request
     * 
     */

     function adjust($licenseNumber, $packages) {

        $url = "/packages/v1/adjust?licenseNumber=$licenseNumber";
        $response = $this->client->request('POST', $url, ['json' => $packages]);
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
     * POST finish packages
     * 
     * @category POST
     * @source /packages/v1/finish
     * @see https://api-ca.metrc.com/Documentation/#Packages.post_packages_v1_finish
     * 
     * @param array $licenseNumber      License # of facility to access
     * @param array $packages             Array of objects with plant data
     * @return integer          Status code of POST request
     * 
     */

     function finish($licenseNumber, $packages) {

        $url = "/packages/v1/finish?licenseNumber=$licenseNumber";
        $response = $this->client->request('POST', $url, ['json' => $packages]);
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
     * POST unfinish packages
     * 
     * @category POST
     * @source /packages/v1/unfinish
     * @see https://api-ca.metrc.com/Documentation/#Packages.post_packages_v1_unfinish
     * 
     * @param array $licenseNumber      License # of facility to access
     * @param array $packages             Array of objects with plant data
     * @return integer          Status code of POST request
     * 
     */

     function unfinish($licenseNumber, $packages) {

        $url = "/packages/v1/unfinish?licenseNumber=$licenseNumber";
        $response = $this->client->request('POST', $url, ['json' => $packages]);
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
     * POST change item in package
     * 
     * @category POST
     * @source /packages/v1/change/item
     * @see https://api-ca.metrc.com/Documentation/#Packages.post_packages_v1_change_item
     * 
     * @param array $licenseNumber      License # of facility to access
     * @param array $packages             Array of objects with plant data
     * @return integer                  Status code of POST request
     * 
     */

     function changeItem($licenseNumber, $packages) {

        $url = "/packages/v1/change/item?licenseNumber=$licenseNumber";
        try {
            $response = $this->client->request('POST', $url, ['json' => $packages]);
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
        catch (ClientException $e) {
            $response = $e->getResponse();
            $request = $e->getRequest();
            $body = $response->getBody()->getContents();

            return '<pre>'.print_r($e, true).'</pre>';
        }
     }
}