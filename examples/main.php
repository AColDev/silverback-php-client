<?php

require __DIR__ . '/../vendor/autoload.php';

//FIXME: Use composer autoload instead
require_once __DIR__ . '/../src/apes/Service/SilverbackCustomersAPI.php';
require_once __DIR__ . '/../src/apes/Auth/HeaderToken.php';

$config = new Google_Config(__DIR__ . "/config.ini");

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
echo "Location $location->name inserted successfully!<br/><br/>";

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

echo "Location $location->name updated successfully!<br/><br/>";

//Insert SKU
$skuId = (string) time();
$skuIn = new apes_Service_SilverbackCustomersAPI_SKUInsertIn();
$skuIn->setSku($skuId);
$skuIn->setName('MySKU');
$skuIn->setCompanyPrefix('0195175');
$skuIn->setImageUrl('http://test.co/i.png');
$attributeColor = new apes_Service_SilverbackCustomersAPI_KeyValue();
$attributeColor->setName('color');
$attributeColor->setValue('verde');
$skuIn->setAttributes([$attributeColor]);
$sku = $service->sku->insert($skuIn);

echo "SKU $sku->name inserted successfully!<br/><br/>";

//List SKUs
echo "<h3>SKU List</h3>";

foreach($service->sku->listSku()->getItems() as $sku){
    echo $sku->sku . " - " . $sku->name . "<br/>";
}
echo "<br/>";

//Update SKU
$skuIn = new apes_Service_SilverbackCustomersAPI_SKUUpdateIn();
$skuIn->setName('OtherSKU');
$skuIn->setImageUrl('http://test.co/j.png');
$service->sku->update($skuId, $skuIn);
echo "SKU $sku->name updated successfully!<br/><br/>";

//Insert purchase order
$purchaseOrderId = 'purchaseOrder' . time();
$purchaseOrderIn = new apes_Service_SilverbackCustomersAPI_PurchaseOrderInsertIn();
$purchaseOrderIn->setArrivalDate('2015-08-11');
$purchaseOrderIn->setLocationExternalId($locationId);
$purchaseOrderIn->setExternalId($purchaseOrderId);
$purchaseOrderIn->setSupplier('Supplier1');
$skuAmount = new apes_Service_SilverbackCustomersAPI_BackendModelsSKUAmountIn();
$skuAmount->setAmount(5);
$skuAmount->setSku($skuId);
$purchaseOrderIn->setSkusAmount($skuAmount);
$purchaseOrder = $service->purchaseOrder->insert($purchaseOrderIn);
echo "Purchase order # $purchaseOrder->externalId arriving to $purchaseOrder->locationExternalId inserted successfully!<br/><br/>";

//List purchase order
echo "<h3>Purchase Order List</h3>";

foreach($service->purchaseOrder->listPurchaseOrder()->getItems() as $purchaseOrder){
    echo "ID: $purchaseOrder->externalId arriving to $purchaseOrder->locationExternalId <br/>";
}

//Update purchase order
$purchaseOrderIn = new apes_Service_SilverbackCustomersAPI_PurchaseOrderUpdateIn();
$purchaseOrderIn->setArrivalDate('2015-08-15');
$purchaseOrderIn->setSupplier('Supplier2');
$purchaseOrder = $service->purchaseOrder->update($purchaseOrderId, $purchaseOrderIn);
echo "Purchase order # $purchaseOrder->externalId updated successfully!<br/><br/>";

//Sale report
$saleId = 'sale' . time();
$saleIn = new apes_Service_SilverbackCustomersAPI_SaleReportIn();
$saleIn->setLocationExternalId($locationId);
$saleIn->setStartDate('2015-08-10');
$saleIn->setEndDate('2015-08-11');
$saleIn->setExternalId($saleId);
$skuAmount = new apes_Service_SilverbackCustomersAPI_BackendModelsSKUAmountIn();
$skuAmount->setAmount(2);
$skuAmount->setSku($skuId);
$saleIn->setSoldSkus($skuAmount);
$report = $service->sale->report($saleIn);
echo "Sale report # $report->externalId inserted successfully!<br/><br/>";

//Destination location
$destinationId = 'destination' . time();
$destinationIn = new apes_Service_SilverbackCustomersAPI_LocationIn();
$destinationIn->setExternalId($destinationId);
$destinationIn->setName('Destination location');
$destinationIn->setType('WAREHOUSE');
$location = $service->location->insert($destinationIn);

//Insert dispatch
$dispatchID = 'dispatch' . time();
$dispatchIn = new apes_Service_SilverbackCustomersAPI_DispatchInsertIn();
$dispatchIn->setSourceExternalId($locationId);
$dispatchIn->setDestinationExternalId($destinationId);
$dispatchIn->setExternalId($dispatchID);
$skuAmount = new apes_Service_SilverbackCustomersAPI_BackendModelsSKUAmountIn();
$skuAmount->setAmount(3);
$skuAmount->setSku($skuId);
$dispatchIn->setSkusAmount($skuAmount);
$dispatch = $service->dispatch->insert($dispatchIn);
echo "Dispatch # $dispatch->externalId leaving $dispatch->sourceExternalId arriving to $dispatch->destinationExternalId inserted successfully!<br/><br/>";

//List dispatch
echo "<h3>Dispatch List</h3>";

foreach($service->dispatch->listDispatch()->getItems() as $dispatch){
    echo "ID: $dispatch->externalId from $dispatch->sourceExternalId to $dispatch->destinationExternalId<br/>";
}

//Update dispatch
$dispatchIn = new apes_Service_SilverbackCustomersAPI_DispatchUpdateIn();
$dispatchIn->setSourceExternalId($destinationId);
$dispatchIn->setDestinationExternalId($locationId);
$dispatch = $service->dispatch->update($dispatchID, $dispatchIn);
echo "Dispatch # $dispatch->externalId updated successfully!<br/><br/>";

//Delete Dispatch
$dispatch = $service->dispatch->delete($dispatchID);
echo "Dispatch # $dispatch->externalId deleted successfully!<br/><br/>";

//Delete Purchase Order
$purchaseOrder = $service->purchaseOrder->delete($purchaseOrderId);
echo "Purchase order # $purchaseOrder->externalId deleted successfully!<br/><br/>";

//Delete SKU
$sku = $service->sku->delete($skuId);
echo "SKU $sku->name deleted successfully!<br/><br/>";

//Delete locations
$location = $service->location->delete($locationId);
echo "Location $location->name deleted successfully!<br/><br/>";
$location = $service->location->delete($destinationId);
echo "Location $location->name deleted successfully!<br/><br/>";

echo pageFooter(__FILE__);


