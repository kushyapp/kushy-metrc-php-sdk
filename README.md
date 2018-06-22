# Metrc API SDK

## Dependencies

* [Guzzle](http://docs.guzzlephp.org/en/stable/quickstart.html)

## Development

### Quick Start Guide + API Keys

1. Install the METRC package with Composer: `composer require 'kushy/metrc-php-sdk'`
2. Require whichever route class you need in your application - in this case we want to access the `/harvests/` endpoint (*assuming you're using PSR-4*):
```php
require_once '../../../vendor/autoload.php';

use Kushy\Metrc\Routes\Harvests;
```
3. Create a new instance of the route class (`Harvests`) and pass through your state's abbreviated name (in this case `ca` for California) and Vendor + User API keys:
```php
$harvests = new Harvests('ca', $vendorApiKey, $userApiKey);
```
4. Use one of the class methods to query the API - this example grabs the active harvests:
```php
$harvests = $metrc->getActive($licenseNumber, $startDate, $endDate);
```

### Tips

**General**
* [General API Tips](https://api-ca.metrc.com/Documentation/#getting_started_working_with_the_api)
* All API requests (POST/PUT) must be sent in JSON format ([see Guzzle on JSON](http://docs.guzzlephp.org/en/stable/request-options.html#json))
* All dates are ISO 8601 format. See below for time conversion snippets.

**Dates are ISO format**
Sending dates to API? Use ISO 8601 formatted date: `0001-01-01T00:00:00+00:00`

```php
$lastModifiedStart = date('c', strtotime($startDate));
```

**Quickly get object keys**
Copy API response/sample data and do this:

```php
/**
 * REGEX for
 * (["'])(?:(?=(\\?))\2.)*?\1:
 * ALT+ENTER to select all found objects
 * Paste
 * Find and replace ": with nothing
 * Find and replace " with $sample->
**/

  "Id": 1,
  "Name": "2014-11-19-Harvest Room-M",
  "HarvestType": "Product",
  "DryingRoomId": 1,
  "DryingRoomName": "Harvest Room",
  "CurrentWeight": 0.0,
  "TotalWasteWeight": 0.0,
  "PlantCount": 70,
  "TotalWetWeight": 40.0,
  "PackageCount": 5,
  "TotalPackagedWeight": 0.0,
  "UnitOfWeightName": "Ounces",
  "LabTestingState": null,
  "LabTestingStateDate": null,
  "IsOnHold": false,
  "HarvestStartDate": "2014-11-19",
  "FinishedDate": null,
  "ArchivedDate": null,
  "LastModified": "0001-01-01T00:00:00+00:00",
  "Strains": []
```

## Testing

Example files are provided in the package for each endpoint and method (GET, POST, PUT, DELETE) to easily test each endpoint manually with properly formed sample data. 

> For example, to see a list of all active harvests, copy the code from `test/example/harvests/get-active-harvest.php`.

*I'm looking to implement unit testing soon to ensure package integrity.*

