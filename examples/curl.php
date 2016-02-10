<?php

require __DIR__ . '/../vendor/autoload.php';

$config = parse_ini_file(__DIR__ . "/config.ini");
$baseUrl = $config['base_path'] . '/' . $config['service_path'];

$header = [];
$header[] = 'Content-type: application/json';
$header[] = 'Authorization: ' . $config['apes_Auth_HeaderToken']['key'];

function execute($url, $header, $method = 'GET', $params = [])
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_VERBOSE, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    if ($method == 'POST') {
        curl_setopt($curl, CURLOPT_POST, true);
    } elseif ($method == 'GET') {
        // Nothing to do here!
    } else {
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    }
    if (in_array($method, ['POST', 'PUT'])) {
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
    }
    $result = curl_exec($curl);
    curl_close($curl);
    return json_decode($result, true);
}

include_once __DIR__ . "/templates/base.php";
echo pageHeader("Silverback API demo using cURL");

//Insert a new location
$locationId = 'location' . time();
$locationIn = [
    'externalId' => $locationId,
    'name' => 'New location',
    'type' => 'A'
];
$location = execute($baseUrl . 'location', $header, 'POST', $locationIn);
echo "Location " . $location["id"] . " inserted successfully!<br/><br/>";


//Destination location
$destinationId = 'destination' . time();
$destinationIn = [
    'externalId' => $destinationId,
    'name' => 'Destination location',
    'type' => 'WAREHOUSE'
];
$destination = execute($baseUrl . 'location', $header, 'POST', $destinationIn);

//List all locations
echo "<h3>Location List</h3>";
$locations = execute($baseUrl . 'location', $header);

foreach ($locations['items'] as $location) {
    echo $location['name'] . "<br/>";
}
echo "<br/>";

//Update location
$locationIn = ['name' => 'Other name', 'type' => 'B'];

$location = execute($baseUrl . 'location/' . $locationId, $header, 'PUT', $locationIn);

echo "Location " . $location['id'] . " updated successfully!<br/><br/>";

//Insert SKU
$skuId = mt_rand(0, 999999);
$attributeColor = ['name' => 'color', 'value' => 'verde'];
$skuIn = [
    'sku' => $skuId,
    'name' => 'MySKU',
    'companyPrefix' => 195175,
    'imageUrl' => 'http://test.co/i.png',
    'attributes' => [$attributeColor]
];

$sku = execute($baseUrl . 'sku', $header, 'POST', $skuIn);

echo "SKU " . $sku['name'] . " inserted successfully!<br/><br/>";

//List SKUs
echo "<h3>SKU List</h3>";
$skus = execute($baseUrl . 'sku', $header);
foreach ($skus['items'] as $sku) {
    echo $sku['sku'] . " - " . $sku['name'] . "<br/>";
}
echo "<br/>";

//Update SKU
$skuIn = [
    'name' => 'OtherSKU',
    'companyPrefix' => 195175,
    'imageUrl' => 'http://test.co/j.png',
    'attributes' => [$attributeColor]
];

$sku = execute($baseUrl . 'sku/' . $skuId, $header, 'PUT', $skuIn);

echo "SKU " . $sku['name'] . " updated successfully!<br/><br/>";

//Insert purchase order
$purchaseOrderId = 'purchaseOrder' . time();
$skuAmount = ['amount' => 5, 'sku' => $skuId];
$purchaseOrderIn = [
    'externalId' => $purchaseOrderId,
    'arrivalDate' => '2015-08-11',
    'locationExternalId' => $locationId,
    'supplier' => 'Supplier1',
    'skusAmount' => $skuAmount
];

$purchaseOrder = execute($baseUrl . 'purchaseOrder', $header, 'POST', $purchaseOrderIn);

echo "Purchase order # " . $purchaseOrder['externalId'] . " arriving to " . $purchaseOrder['locationExternalId'] . " inserted successfully!<br/><br/>";

//List purchase order
echo "<h3>Purchase Order List</h3>";

$purchaseOrders = execute($baseUrl . 'purchaseOrder', $header);
foreach($purchaseOrders['items'] as $purchaseOrder){
    echo "ID: " . $purchaseOrder['externalId'] . " arriving to " . $purchaseOrder['locationExternalId'] . " <br/>";
}
echo "<br/>";

//Update purchase order
$purchaseOrderIn = [
    'arrivalDate' => '2015-08-15',
    'supplier' => 'Supplier2'
];

$purchaseOrder = execute($baseUrl . 'purchaseOrder/' . $purchaseOrderId, $header, 'PUT', $purchaseOrderIn);

echo "Purchase order # " . $purchaseOrder['externalId'] . " updated successfully!<br/><br/>";

//Sale report
$saleId = 'sale' . time();
$skuAmount = ['sku' => $skuId, 'amount' => 2];
$saleIn = [
    'externalId' => $saleId,
    'locationExternalId' => $locationId,
    'startDate' => '2015-08-10',
    'endDate' => '2015-08-11',
    'soldSkus' => $skuAmount
];

$report = execute($baseUrl . 'sale/report', $header, 'POST', $saleIn);

echo "Sale report # " . $report['externalId'] . " inserted successfully!<br/><br/>";


//Insert dispatch
$dispatchID = 'dispatch' . time();
$skuAmount = ['sku' => $skuId, 'amount' => 3];
$dispatchIn = [
    'externalId' => $dispatchID,
    'sourceExternalId' => $locationId,
    'destinationExternalId' => $destinationId,
    'skusAmount' => $skuAmount
];

$dispatch = execute($baseUrl . 'dispatch', $header, 'POST', $dispatchIn);

echo "Dispatch # " . $dispatch['externalId'] . "  leaving " . $dispatch['sourceExternalId'] . " arriving to " . $dispatch['destinationExternalId'] . "  inserted successfully!<br/><br/>";

//List dispatch
echo "<h3>Dispatch List</h3>";

$dispatches = execute($baseUrl . 'dispatch', $header);
foreach($dispatches['items'] as $dispatch){
    echo "ID: " . $dispatch['externalId'] . " from " . $dispatch['sourceExternalId'] . " to " . $dispatch['destinationExternalId'] . "<br/>";
}
echo "<br/>";

//Update dispatch
$dispatchIn = [
    'sourceExternalId' => $destinationId,
    'destinationExternalId' =>$locationId,
];

$dispatch = execute($baseUrl . 'dispatch/' . $dispatchID, $header, 'PUT', $dispatchIn);
echo "Dispatch # " . $dispatch['externalId'] . " updated successfully!<br/><br/>";

//Delete Dispatch
$dispatch = execute($baseUrl . 'dispatch/' . $dispatchID, $header, 'DELETE');

echo "Dispatch # " . $dispatch['id'] . " deleted successfully!<br/><br/>";

//Delete Purchase Order
$purchaseOrder = execute($baseUrl . 'purchaseOrder/' . $purchaseOrderId, $header, 'DELETE');
echo "Purchase order # " . $purchaseOrder['id'] . " deleted successfully!<br/><br/>";

//Delete SKU
$sku = execute($baseUrl . 'sku/' . $skuId, $header, 'DELETE');
echo "SKU " . $sku['name'] . " deleted successfully!<br/><br/>";

//Delete locations
$location = execute($baseUrl . 'location/' . $locationId, $header, 'DELETE');
echo "Location " . $location['id'] . " deleted successfully!<br/><br/>";
$location = execute($baseUrl . 'location/' . $destinationId, $header, 'DELETE');
echo "Location " . $location['id'] . " deleted successfully!<br/><br/>";


echo pageFooter(__FILE__);