<?php
/**
 * Metrc API SDK for Kushy
 * 
 * Base class that all the other route classes extend from to access API client.
 * A Guzzle client is created with the provided API keys
 * and extended classes access the client via `$this->client()`
 *  
 * @package Kushy
 * @subpackage Metrc SDK
 * @since 0.0.1
 */

namespace Kushy\Metrc;

require_once '../../../vendor/autoload.php';

use GuzzleHttp\Client;

/**
 * A client to access the Metrc API
 */
class Metrc
{

    protected $apiVendorKey;
    protected $apiUserKey;
    protected $baseUrl;
    protected $version;
    protected $client;

    /**
     * Create a new METRC API Client with provided API keys
     * and state abbreviation
     *
     * @param string $stateAbbreviation
     * @param string $apiVendorKey
     * @param string $apiUserKey
     */
    public function __construct($stateAbbreviation, $apiVendorKey, $apiUserKey, $environment = 'production')
    {
        $this->stateAbbreviation = $stateAbbreviation;
        $this->version = $version;
        $this->apiVendorKey = $apiVendorKey;
        $this->apiUserKey = $apiUserKey;

        /**
         * Set the base URL according to production or sandbox parameter
         * If the user doesn't set one, we assume it's production
         */
        switch($environment)
        {
            case 'production':
                $this->production();
                break;
            case 'sandbox':
                $this->sandbox();
                break;
            default:
                $this->production();
                break;
        }

        /**
         * Create a new Guzzle client with constructed vars
         * Separated in case we need to reset client 
         * (like switching from Sandbox to Production)
         */
        $this->newClient();
    }

    /**
     * Create a new Guzzle client using class' variables
     *
     * @return void
     */
    protected function newClient()
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => $this->baseUrl,
            'auth' => [$this->apiVendorKey, $this->apiUserKey],
        ]);
    }

    /**
     * Changes the base URL to the METRC API sandbox URL
     * and creates a new client
     *
     * @return void
     */
    public function sandbox()
    {
        $this->baseUrl = "https://sandbox-api-". $this->stateAbbreviation .".metrc.com/";
        $this->newClient();
    }

    /**
     * Changes the base URL to the METRC API production URL
     *
     * @return void
     */
    public function production()
    {
        $this->baseUrl = "https://api-". $this->stateAbbreviation .".metrc.com/";
        $this->newClient();
    }
}