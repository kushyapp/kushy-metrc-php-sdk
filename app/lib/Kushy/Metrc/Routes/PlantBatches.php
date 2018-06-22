<?php
/**
 * Metrc API SDK for Kushy
 * Plant Batches class extends API Client
 * 
 * Access the Metrc Plant Batches API and perform CRUD actions
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
class PlantBatches extends Metrc
{

     /**
     * Request a specific batch
     * 
     * @category GET
     * @source /plantbatches/v1/active
     * @see https://api-ca.metrc.com/Documentation/#PlantBatches.get_plantbatches_v1_active
     * 
     * @param string $licenseNumber     License # of facility to access
     * @return array                    JSON decoded API Response
     * 
     */

     function getActive($licenseNumber, $startDate, $endDate) {

        $lastModifiedStart = date('c', strtotime($startDate));
        $lastModifiedEnd = date('c', strtotime($endDate));

        $url = "plantbatches/v1/active?licenseNumber=$licenseNumber&lastModifiedStart=$lastModifiedStart&lastModifiedEnd=$lastModifiedEnd";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     /**
     * Request a specific strain
     * 
     * @category GET
     * @source /strains/v1/{id}
     * @see https://api-ca.metrc.com/Documentation/#Strains.get_strains_v1_{id}
     * 
     * @param integer $id   Strain ID
     * @return array        JSON decoded API Response
     * 
     */

     function getBatch($id) {

        $url = "strains/v1/$id";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     
     /**
     * POST array of plantings
     * 
     * @category POST
     * @source /plantbatches/v1/createplantings
     * @see https://api-ca.metrc.com/Documentation/#PlantBatches.post_plantbatches_v1_createplantings
     * 
     * @param array $strains    Array of objects with strain data
     * @return integer          Status code of POST request
     * 
     */

     function createPlantings($licenseNumber, $strains) {

        $url = "/plantbatches/v1/createplantings?licenseNumber=$licenseNumber";
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

        $url = "/plantbatches/v1/changegrowthphase?licenseNumber=$licenseNumber";
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
     
     /**
     * POST destroy a plant batch
     * 
     * @category POST
     * @source /plantbatches/v1/destroy
     * @see https://api-ca.metrc.com/Documentation/#PlantBatches.post_plantbatches_v1_destroy
     * 
     * @param array $licenseNumber      License # of facility to access
     * @param array $plants             Array of objects with plant data
     * @return integer                  Status code of POST request
     * 
     */

     function destroy($licenseNumber, $plants) {

        $url = "/plantbatches/v1/destroy?licenseNumber=$licenseNumber";
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