<?php

require __DIR__ . '/../vendor/autoload.php';

//FIXME: Use composer autoload instead
require_once __DIR__ . '/../src/apes/Service/SilverbackCustomersAPI.php';
require_once __DIR__ . '/../src/apes/Auth/HeaderToken.php';

$config = new Google_Config(__DIR__ . "/../data/config.ini");

$client = new Google_Client($config);

//Add authentication header
$client->setAuth(new apes_Auth_HeaderToken($client));

$service = new apes_Service_SilverbackCustomersAPI($client);

include_once __DIR__ . "/templates/base.php";
echo pageHeader("Silverback API demo");

//Insert a new location
$locationId = 'location' . time();
$locationIn = new apes_Service_SilverbackCustomersAPI_LocationIn();
$locationIn->setExternalId($locationId);
$locationIn->setName('New location');
$locationIn->setType('CONTAINER');
$location = $service->location->insert($locationIn);
echo "Location " . $location->name . " inserted successfully!<br/><br/>";

//List locations
echo "<h3>Location List</h3>";

foreach($service->location->listLocation()->getItems() as $location){
    echo $location->name . "<br/>";
}
echo "<br/>";

//Update location
$locationIn = new apes_Service_SilverbackCustomersAPI_LocationIn();
$locationIn->setName('Other name');
$locationIn->setType('POS');
$location = $service->location->update($locationId, $locationIn);

echo "Location " . $location->name . " updated successfully!<br/><br/>";

//Insert SKU
$skuId = (string) time();
$skuIn = new apes_Service_SilverbackCustomersAPI_SKU();
$skuIn->setSku($skuId);
$skuIn->setName('MySKU');
$skuIn->setCompanyPrefix('0195175');
$skuIn->setImageUrl('http://test.co/i.png');
$attributeColor = new apes_Service_SilverbackCustomersAPI_KeyValue();
$attributeColor->setName('color');
$attributeColor->setValue('verde');
$skuIn->setAttributes([$attributeColor]);
$sku = $service->sku->insert($skuIn);

echo "SKU " . $sku->name . " inserted successfully!<br/><br/>";

//List SKUs
echo "<h3>SKU List</h3>";

foreach($service->sku->listSku()->getItems() as $sku){
    echo $sku->sku . " - " . $sku->name . "<br/>";
}
echo "<br/>";

//Update SKU
$skuIn = new apes_Service_SilverbackCustomersAPI_SKU();
$skuIn->setImageUrl('http://test.co/j.png');
$service->sku->update($skuId, $skuIn);

//Insert dispatch
$dispatchIn = new apes_Service_SilverbackCustomersAPI_DispatchInsertIn();
$dispatchIn->setSourceExternalId('123');
$dispatchIn->setDestinationExternalId('123');
$dispatchIn->setExternalId('8888');
$skuAmount = new apes_Service_SilverbackCustomersAPI_BackendModelsSKUAmountIn();
$skuAmount->setAmount(3);
$skuAmount->setSku('1212');
$dispatchIn->setSkusAmount($skuAmount);

//List dispatch
echo "<h3>Dispatch List</h3>";

foreach($service->dispatch->listDispatch()->getItems() as $dispatch){
    echo "ID: " . $dispatch->externalId . " from " . $dispatch->sourceExternalId . " to " . $dispatch->destinationExternalId . "<br/>";
}

//Delete SKU
$sku = $service->sku->delete($skuId);
echo "SKU " . $sku->name . " deleted successfully!<br/><br/>";

//Delete location
$location = $service->location->delete($locationId);
echo "Location " . $location->name . " deleted successfully!<br/><br/>";

echo pageFooter(__FILE__);


