# Metrc API SDK

## Dependencies

* [Guzzle](http://docs.guzzlephp.org/en/stable/quickstart.html)

## Development

**General**
* [General API Tips](https://api-ca.metrc.com/Documentation/#getting_started_working_with_the_api)
* All API requests (POST/PUT) must be sent in JSON format ([see Guzzle on JSON](http://docs.guzzlephp.org/en/stable/request-options.html#json))
* All dates are ISO 8601 format. See below for time conversion snippets.
* 

### Tips

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

## Process

Create a config file with API key data - temporarily use Directus API info. Make folders for each section and example scripts for each route in a separate file to organize easier.