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
class Sales extends Metrc
{

     /**
     * Request types of customers
     * 
     * @category GET
     * @source /sales/v1/customertypes
     * @see https://api-ca.metrc.com/Documentation/#Sales.get_sales_v1_customertypes
     * 
     * @return array                    JSON decoded API Response
     * 
     */

     function getCustomerTypes() {

        $url = "sales/v1/customertypes";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     /**
     * Request reciepts from a licensed producer
     * 
     * @category GET
     * @source /sales/v1/receipts
     * @see https://api-ca.metrc.com/Documentation/#Sales.get_sales_v1_receipts
     * 
     * @param string $licenseNumber     License # of facility to access
     * @param date $startDate           First date (and time optionally)
     * @param date $endDate             End date (and time optionally)
     * @return array                    JSON decoded API Response
     * 
     */

     function getReceipts($licenseNumber, $startDate, $endDate) {

        $lastModifiedStart = date('c', strtotime($startDate));
        $lastModifiedEnd = date('c', strtotime($endDate));

        $url = "sales/v1/receipts?licenseNumber=$licenseNumber&lastModifiedStart=$lastModifiedStart&lastModifiedEnd=$lastModifiedEnd";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     /**
     * Request a specific reciept
     * 
     * @category GET
     * @source /sales/v1/receipts/{id}
     * @see https://api-ca.metrc.com/Documentation/#sales.get_sales_v1_inactive
     * 
     * @param integer $id               ID of receipt 
     * @return array                    JSON decoded API Response
     * 
     */

     function getReceipt($id) {

        $url = "sales/v1/receipts/$id";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     /**
     * Request transactions from a licensed producer
     * 
     * @category GET
     * @source /sales/v1/transactions
     * @see https://api-ca.metrc.com/Documentation/#Sales.get_sales_v1_transactions
     * 
     * @param string $licenseNumber     License # of facility to access
     * @return array                    JSON decoded API Response
     * 
     */

     function getTransactions($licenseNumber) {

        $url = "sales/v1/transactions?licenseNumber=$licenseNumber";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     /**
     * Request transactions by date from a licensed producer
     * 
     * @category GET
     * @source /sales/v1/transactions/{date}
     * @see https://api-ca.metrc.com/Documentation/#Sales.get_sales_v1_transactions_{date}
     * 
     * @param string $licenseNumber     License # of facility to access
     * @param date   $date              Date in the Y-m-d format (e.g. 2015-04-20)
     * @return array                    JSON decoded API Response
     * 
     */

     function getTransactionsByDate($licenseNumber, $date) {

        $url = "sales/v1/transactions?licenseNumber=$licenseNumber";
        $response = $this->client->request('GET', $url);
        $body = $response->getBody();

        return json_decode($body);
     }

     
     /**
     * POST create receipts
     * 
     * @category POST
     * @source /sales/v1/receipts
     * @see https://api-ca.metrc.com/Documentation/#Sales.post_sales_v1_receipts
     * 
     * @param array $licenseNumber      License # of facility to access
     * @param array $receipts             Array of objects with plant data
     * @return integer          Status code of POST request
     * 
     */

     function createReceipts($licenseNumber, $receipts) {

        $url = "/sales/v1/receipts?licenseNumber=$licenseNumber";
        $response = $this->client->request('POST', $url, ['json' => $receipts]);
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
     * PUT update receipts
     * 
     * @category PUT
     * @source /sales/v1/receipts
     * @see https://api-ca.metrc.com/Documentation/#Sales.put_sales_v1_receipts
     * 
     * @param array $licenseNumber      License # of facility to access
     * @param array $receipts             Array of objects with plant data
     * @return integer          Status code of POST request
     * 
     */

     function updateReceipts($licenseNumber, $receipts) {

        $url = "/sales/v1/receipts?licenseNumber=$licenseNumber";
        $response = $this->client->request('PUT', $url, ['json' => $receipts]);
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
     * PUT update receipts
     * 
     * @category PUT
     * @source /sales/v1/receipts
     * @see https://api-ca.metrc.com/Documentation/#Sales.put_sales_v1_receipts
     * 
     * @param array $licenseNumber      License # of facility to access
     * @param array $receipts             Array of objects with plant data
     * @return integer          Status code of POST request
     * 
     */

     function deleteReceipt($licenseNumber, $id) {

        $url = "/sales/v1/receipts/$id?licenseNumber=$licenseNumber";
        $response = $this->client->delete($url);
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