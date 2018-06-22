<?php
/**
 * Metrc API SDK for Kushy
 * Plants class extends API Client
 * 
 * Access the Metrc Plants API and perform CRUD actions
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
class Plants extends Metrc
{

     /**
     * Request vegetative plants from a licensed producer
     * 
     * @category GET
     * @source /plants/v1/vegetative
     * @see https://api-ca.metrc.com/Documentation/#Plants.get_plants_v1_vegetative
     * 
     * @param string $licenseNumber     License # of facility to access
     * @param date $startDate           First date (and time optionally)
     * @param date $endDate             End date (and time optionally)
     * @return array                    JSON decoded API Response
     * 
     */

     function getVegetative($licenseNumber, $startDate, $endDate) {

        $lastModifiedStart = date('c', strtotime($startDate));
        $lastModifiedEnd = date('c', strtotime($endDate));

        $url = "plants/v1/vegetative?licenseNumber=$licenseNumber&lastModifiedStart=$lastModifiedStart&lastModifiedEnd=$lastModifiedEnd";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     /**
     * Request flowering plants from a licensed producer
     * 
     * @category GET
     * @source /plants/v1/flowering
     * @see https://api-ca.metrc.com/Documentation/#Plants.get_plants_v1_flowering
     * 
     * @param string $licenseNumber     License # of facility to access
     * @param date $startDate           First date (and time optionally)
     * @param date $endDate             End date (and time optionally)
     * @return array                    JSON decoded API Response
     * 
     */

     function getFlowering($licenseNumber, $startDate, $endDate) {

        $lastModifiedStart = date('c', strtotime($startDate));
        $lastModifiedEnd = date('c', strtotime($endDate));

        $url = "plants/v1/flowering?licenseNumber=$licenseNumber&lastModifiedStart=$lastModifiedStart&lastModifiedEnd=$lastModifiedEnd";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     /**
     * Request onhold plants from a licensed producer
     * 
     * @category GET
     * @source /plants/v1/flowering
     * @see https://api-ca.metrc.com/Documentation/#Plants.get_plants_v1_onhold
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

        $url = "plants/v1/onhold?licenseNumber=$licenseNumber&lastModifiedStart=$lastModifiedStart&lastModifiedEnd=$lastModifiedEnd";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     /**
     * Request inactive plants from a licensed producer
     * 
     * @category GET
     * @source /plants/v1/inactive
     * @see https://api-ca.metrc.com/Documentation/#Plants.get_plants_v1_inactive
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

        $url = "plants/v1/inactive?licenseNumber=$licenseNumber&lastModifiedStart=$lastModifiedStart&lastModifiedEnd=$lastModifiedEnd";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     /**
     * Request a specific plant
     * 
     * @category GET
     * @source /plants/v1/{id}
     * @see https://api-ca.metrc.com/Documentation/#Plants.get_plants_v1_{id}
     * 
     * @param integer $id   Plant ID or Tracking Label
     * @return array        JSON decoded API Response
     * 
     */

     function getPlant($id) {

        $url = "plants/v1/$id";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     
     /**
     * POST array of plantings
     * 
     * @category POST
     * @source /plants/v1/create/plantings
     * @see https://api-ca.metrc.com/Documentation/#PlantBatches.post_plantbatches_v1_createplantings
     * 
     * @param array $licenseNumber      License # of facility to access
     * @param array $plants    Array of objects with plants data
     * @return integer          Status code of POST request
     * 
     */

     function createPlantings($licenseNumber, $plants) {

        $url = "/plants/v1/create/plantings?licenseNumber=$licenseNumber";
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

        $url = "/plants/v1/changegrowthphases?licenseNumber=$licenseNumber";
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
     * POST new manicured plants
     * 
     * @category POST
     * @source /plants/v1/manicureplants
     * @see https://api-ca.metrc.com/Documentation/#PlantBatches.post_plantbatches_v1_changegrowthphase
     * 
     * @param array $licenseNumber      License # of facility to access
     * @param array $plants             Array of objects with plant data
     * @return integer                  Status code of POST request
     * 
     */

     function manicure($licenseNumber, $plants) {

        $url = "/plants/v1/manicureplants?licenseNumber=$licenseNumber";
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
     * POST move plants
     * 
     * @category POST
     * @source /plants/v1/moveplants
     * @see https://api-ca.metrc.com/Documentation/#Plants.post_plants_v1_moveplants
     * 
     * @param array $licenseNumber      License # of facility to access
     * @param array $plants             Array of objects with plant data
     * @return integer                  Status code of POST request
     * 
     */

     function move($licenseNumber, $plants) {

        $url = "/plants/v1/moveplants?licenseNumber=$licenseNumber";
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
     * POST destroy plants
     * 
     * @category POST
     * @source /plants/v1/destroyplants
     * @see https://api-ca.metrc.com/Documentation/#Plants.post_plants_v1_destroyplants
     * 
     * @param array $licenseNumber      License # of facility to access
     * @param array $plants             Array of objects with plant data
     * @return integer                  Status code of POST request
     * 
     */

     function destroy($licenseNumber, $plants) {

        $url = "/plants/v1/destroyplants?licenseNumber=$licenseNumber";
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
     * POST destroy plants
     * 
     * @category POST
     * @source /plants/v1/harvestplants
     * @see https://api-ca.metrc.com/Documentation/#Plants.post_plants_v1_harvestplants
     * 
     * @param array $licenseNumber      License # of facility to access
     * @param array $plants             Array of objects with plant data
     * @return integer                  Status code of POST request
     * 
     */

     function harvest($licenseNumber, $plants) {

        $url = "/plants/v1/harvestplants?licenseNumber=$licenseNumber";
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