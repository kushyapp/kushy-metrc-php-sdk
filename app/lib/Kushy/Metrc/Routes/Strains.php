<?php
/**
 * Metrc API SDK for Kushy
 * Strain class extends API Client
 * 
 * Access the Metrc Strains API and perform CRUD actions
 *  
 * @package Kushy
 * @subpackage Metrc SDK
 * @since 0.0.1
 */

namespace Kushy\Metrc\Routes;

use Kushy\Metrc\Metrc;

/**
 * A client to access the Metrc API
 */
class Strains extends Metrc
{

     /**
     * Access the Metrc Strains API and request a specific strain
     * 
     * @category GET
     * @source /strains/v1/active
     * @see https://api-ca.metrc.com/Documentation/#Strains.get_strains_v1_active
     * 
     * @param string $licenseNumber     License # of facility to access
     * @return array                    JSON decoded API Response
     * 
     */

     function getStrains($licenseNumber) {

        $url = "strains/v1/active?licenseNumber=$licenseNumber";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     /**
     * Access the Metrc Strains API and request a specific strain
     * 
     * @category GET
     * @source /strains/v1/{id}
     * @see https://api-ca.metrc.com/Documentation/#Strains.get_strains_v1_{id}
     * 
     * @param integer $id   Strain ID
     * @return array        JSON decoded API Response
     * 
     */

     function getStrain($id) {

        $url = "strains/v1/$id";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     
     /**
     * Access the Metrc Strains API and POST a strain
     * 
     * @category POST
     * @source /strains/v1/create
     * @see https://api-ca.metrc.com/Documentation/#Strains.post_strains_v1_create
     * 
     * @param array $strains    Array of objects with strain data
     * @return integer          Status code of POST request
     * 
     */

     function createStrains($licenseNumber, $strains) {

        $url = "/strains/v1/create?licenseNumber=$licenseNumber";
        $response = $this->client->request('POST', $url, ['json' => $strains]);
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
     * Access the Metrc Strains API and POST strain updates
     * 
     * @category POST
     * @source /strains/v1/update
     * @see https://api-ca.metrc.com/Documentation/#Strains.post_strains_v1_create
     * 
     * @param array $licenseNumber      License # of facility to access
     * @param array $strains            Array of objects with strain data
     * @return integer                  Status code of POST request
     * 
     */

     function updateStrains($licenseNumber, $strains) {

        $url = "/strains/v1/update?licenseNumber=$licenseNumber";
        $response = $this->client->request('POST', $url, ['json' => $strains]);
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