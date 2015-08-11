<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for SilverbackCustomersAPI (v1).
 *
 * <p>
 * Backend API for customers integrating to Silverback</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="http://kanzi.technoapes.co/api" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class apes_Service_SilverbackCustomersAPI extends Google_Service
{
  /** View your email address. */
  const USERINFO_EMAIL =
      "https://www.googleapis.com/auth/userinfo.email";

  public $dispatch;
  public $location;
  public $purchaseOrder;
  public $sale;
  public $sku;
  public $skuAttribute;
  

  /**
   * Constructs the internal representation of the SilverbackCustomersAPI
   * service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://apes-silver-back.appspot.com/_ah/api/';
    $this->servicePath = 'silverbackCustomers/v1/';
    $this->version = 'v1';
    $this->serviceName = 'silverbackCustomers';

    $this->dispatch = new apes_Service_SilverbackCustomersAPI_Dispatch_Resource(
        $this,
        $this->serviceName,
        'dispatch',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'dispatch/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'dispatch/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'dispatch',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'dispatch',
              'httpMethod' => 'GET',
              'parameters' => array(
                'limit' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'dispatch/{id}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'dispatch/{id}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->location = new apes_Service_SilverbackCustomersAPI_Location_Resource(
        $this,
        $this->serviceName,
        'location',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'location/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'location',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'location',
              'httpMethod' => 'GET',
              'parameters' => array(
                'limit' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'location/{id}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->purchaseOrder = new apes_Service_SilverbackCustomersAPI_PurchaseOrder_Resource(
        $this,
        $this->serviceName,
        'purchaseOrder',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'purchaseOrder/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'purchaseOrder/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'purchaseOrder',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'purchaseOrder',
              'httpMethod' => 'GET',
              'parameters' => array(
                'limit' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'purchaseOrder/{id}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'purchaseOrder/{id}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->sale = new apes_Service_SilverbackCustomersAPI_Sale_Resource(
        $this,
        $this->serviceName,
        'sale',
        array(
          'methods' => array(
            'report' => array(
              'path' => 'sale/report',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->sku = new apes_Service_SilverbackCustomersAPI_Sku_Resource(
        $this,
        $this->serviceName,
        'sku',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'sku/{sku}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'sku' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'sku/{sku}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'sku' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'sku',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'sku',
              'httpMethod' => 'GET',
              'parameters' => array(
                'limit' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'sku/{sku}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'sku' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'sku/{sku}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'sku' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->skuAttribute = new apes_Service_SilverbackCustomersAPI_SkuAttribute_Resource(
        $this,
        $this->serviceName,
        'skuAttribute',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'skuAttribute/{name}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'skuAttribute',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'skuAttribute',
              'httpMethod' => 'GET',
              'parameters' => array(
                'limit' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "dispatch" collection of methods.
 * Typical usage is:
 *  <code>
 *   $silverbackCustomersService = new apes_Service_SilverbackCustomersAPI(...);
 *   $dispatch = $silverbackCustomersService->dispatch;
 *  </code>
 */
class apes_Service_SilverbackCustomersAPI_Dispatch_Resource extends Google_Service_Resource
{

  /**
   * Deletes a given dispatch (dispatch.delete)
   *
   * @param string $id
   * @param array $optParams Optional parameters.
   * @return apes_Service_SilverbackCustomersAPI_Dispatch
   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "apes_Service_SilverbackCustomersAPI_Dispatch");
  }

  /**
   * Retrieve the data for a given dispatch transfer (dispatch.get)
   *
   * @param string $id
   * @param array $optParams Optional parameters.
   * @return apes_Service_SilverbackCustomersAPI_Dispatch
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "apes_Service_SilverbackCustomersAPI_Dispatch");
  }

  /**
   * Adds a new transfer (dispatch.insert)
   *
   * @param apes_DispatchInsertIn $postBody
   * @param array $optParams Optional parameters.
   * @return apes_Service_SilverbackCustomersAPI_Dispatch
   */
  public function insert(apes_Service_SilverbackCustomersAPI_DispatchInsertIn $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "apes_Service_SilverbackCustomersAPI_Dispatch");
  }

  /**
   * Lists all the available dispatches (dispatch.listDispatch)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string limit
   * @opt_param string pageToken
   * @return apes_Service_SilverbackCustomersAPI_DispatchListCollection
   */
  public function listDispatch($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "apes_Service_SilverbackCustomersAPI_DispatchListCollection");
  }

  /**
   * Updates the data for a given dispatch . This method supports patch semantics.
   * (dispatch.patch)
   *
   * @param string $id
   * @param apes_DispatchUpdateIn $postBody
   * @param array $optParams Optional parameters.
   * @return apes_Service_SilverbackCustomersAPI_Dispatch
   */
  public function patch($id, apes_Service_SilverbackCustomersAPI_DispatchUpdateIn $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "apes_Service_SilverbackCustomersAPI_Dispatch");
  }

  /**
   * Updates the data for a given dispatch (dispatch.update)
   *
   * @param string $id
   * @param apes_DispatchUpdateIn $postBody
   * @param array $optParams Optional parameters.
   * @return apes_Service_SilverbackCustomersAPI_Dispatch
   */
  public function update($id, apes_Service_SilverbackCustomersAPI_DispatchUpdateIn $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "apes_Service_SilverbackCustomersAPI_Dispatch");
  }
}

/**
 * The "location" collection of methods.
 * Typical usage is:
 *  <code>
 *   $silverbackCustomersService = new apes_Service_SilverbackCustomersAPI(...);
 *   $location = $silverbackCustomersService->location;
 *  </code>
 */
class apes_Service_SilverbackCustomersAPI_Location_Resource extends Google_Service_Resource
{

  /**
   * Deletes a given location (location.delete)
   *
   * @param string $id
   * @param array $optParams Optional parameters.
   * @return apes_Service_SilverbackCustomersAPI_Location
   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "apes_Service_SilverbackCustomersAPI_Location");
  }

  /**
   * Adds a new location (location.insert)
   *
   * @param apes_LocationIn $postBody
   * @param array $optParams Optional parameters.
   * @return apes_Service_SilverbackCustomersAPI_Location
   */
  public function insert(apes_Service_SilverbackCustomersAPI_LocationIn $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "apes_Service_SilverbackCustomersAPI_Location");
  }

  /**
   * Lists all the available locations (location.listLocation)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string limit
   * @opt_param string pageToken
   * @return apes_Service_SilverbackCustomersAPI_LocationCollection
   */
  public function listLocation($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "apes_Service_SilverbackCustomersAPI_LocationCollection");
  }

  /**
   * Updates the data for a given location (location.update)
   *
   * @param string $id
   * @param apes_LocationIn $postBody
   * @param array $optParams Optional parameters.
   * @return apes_Service_SilverbackCustomersAPI_Location
   */
  public function update($id, apes_Service_SilverbackCustomersAPI_LocationIn $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "apes_Service_SilverbackCustomersAPI_Location");
  }
}

/**
 * The "purchaseOrder" collection of methods.
 * Typical usage is:
 *  <code>
 *   $silverbackCustomersService = new apes_Service_SilverbackCustomersAPI(...);
 *   $purchaseOrder = $silverbackCustomersService->purchaseOrder;
 *  </code>
 */
class apes_Service_SilverbackCustomersAPI_PurchaseOrder_Resource extends Google_Service_Resource
{

  /**
   * Deletes a given purchase order (purchaseOrder.delete)
   *
   * @param string $id
   * @param array $optParams Optional parameters.
   * @return apes_Service_SilverbackCustomersAPI_PurchaseOrder
   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "apes_Service_SilverbackCustomersAPI_PurchaseOrder");
  }

  /**
   * Retrieve the data for a given purchase order (purchaseOrder.get)
   *
   * @param string $id
   * @param array $optParams Optional parameters.
   * @return apes_Service_SilverbackCustomersAPI_PurchaseOrder
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "apes_Service_SilverbackCustomersAPI_PurchaseOrder");
  }

  /**
   * Adds a new purchase order (purchaseOrder.insert)
   *
   * @param apes_PurchaseOrderInsertIn $postBody
   * @param array $optParams Optional parameters.
   * @return apes_Service_SilverbackCustomersAPI_PurchaseOrder
   */
  public function insert(apes_Service_SilverbackCustomersAPI_PurchaseOrderInsertIn $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "apes_Service_SilverbackCustomersAPI_PurchaseOrder");
  }

  /**
   * Lists all the available purchase orders (purchaseOrder.listPurchaseOrder)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string limit
   * @opt_param string pageToken
   * @return apes_Service_SilverbackCustomersAPI_PurchaseOrderListCollection
   */
  public function listPurchaseOrder($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "apes_Service_SilverbackCustomersAPI_PurchaseOrderListCollection");
  }

  /**
   * Updates the data for a given purchase order . This method supports patch
   * semantics. (purchaseOrder.patch)
   *
   * @param string $id
   * @param apes_PurchaseOrderUpdateIn $postBody
   * @param array $optParams Optional parameters.
   * @return apes_Service_SilverbackCustomersAPI_PurchaseOrder
   */
  public function patch($id, apes_Service_SilverbackCustomersAPI_PurchaseOrderUpdateIn $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "apes_Service_SilverbackCustomersAPI_PurchaseOrder");
  }

  /**
   * Updates the data for a given purchase order (purchaseOrder.update)
   *
   * @param string $id
   * @param apes_PurchaseOrderUpdateIn $postBody
   * @param array $optParams Optional parameters.
   * @return apes_Service_SilverbackCustomersAPI_PurchaseOrder
   */
  public function update($id, apes_Service_SilverbackCustomersAPI_PurchaseOrderUpdateIn $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "apes_Service_SilverbackCustomersAPI_PurchaseOrder");
  }
}

/**
 * The "sale" collection of methods.
 * Typical usage is:
 *  <code>
 *   $silverbackCustomersService = new apes_Service_SilverbackCustomersAPI(...);
 *   $sale = $silverbackCustomersService->sale;
 *  </code>
 */
class apes_Service_SilverbackCustomersAPI_Sale_Resource extends Google_Service_Resource
{

  /**
   * Report sales, matching sold item with reading references (sale.report)
   *
   * @param apes_SaleReportIn $postBody
   * @param array $optParams Optional parameters.
   * @return apes_Service_SilverbackCustomersAPI_SaleReport
   */
  public function report(apes_Service_SilverbackCustomersAPI_SaleReportIn $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('report', array($params), "apes_Service_SilverbackCustomersAPI_SaleReport");
  }
}

/**
 * The "sku" collection of methods.
 * Typical usage is:
 *  <code>
 *   $silverbackCustomersService = new apes_Service_SilverbackCustomersAPI(...);
 *   $sku = $silverbackCustomersService->sku;
 *  </code>
 */
class apes_Service_SilverbackCustomersAPI_Sku_Resource extends Google_Service_Resource
{

  /**
   * Deletes a given SKU (sku.delete)
   *
   * @param string $sku
   * @param array $optParams Optional parameters.
   * @return apes_Service_SilverbackCustomersAPI_SKU
   */
  public function delete($sku, $optParams = array())
  {
    $params = array('sku' => $sku);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "apes_Service_SilverbackCustomersAPI_SKU");
  }

  /**
   * Retrieve the data for a given SKU (sku.get)
   *
   * @param string $sku
   * @param array $optParams Optional parameters.
   * @return apes_Service_SilverbackCustomersAPI_SKU
   */
  public function get($sku, $optParams = array())
  {
    $params = array('sku' => $sku);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "apes_Service_SilverbackCustomersAPI_SKU");
  }

  /**
   * Adds a new SKU (sku.insert)
   *
   * @param apes_SKUInsertIn $postBody
   * @param array $optParams Optional parameters.
   * @return apes_Service_SilverbackCustomersAPI_SKU
   */
  public function insert(apes_Service_SilverbackCustomersAPI_SKUInsertIn $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "apes_Service_SilverbackCustomersAPI_SKU");
  }

  /**
   * Lists all the available SKUs (sku.listSku)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string limit
   * @opt_param string pageToken
   * @return apes_Service_SilverbackCustomersAPI_SKUCollection
   */
  public function listSku($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "apes_Service_SilverbackCustomersAPI_SKUCollection");
  }

  /**
   * Updates the data for a given SKU . This method supports patch semantics.
   * (sku.patch)
   *
   * @param string $sku
   * @param apes_SKUUpdateIn $postBody
   * @param array $optParams Optional parameters.
   * @return apes_Service_SilverbackCustomersAPI_SKU
   */
  public function patch($sku, apes_Service_SilverbackCustomersAPI_SKUUpdateIn $postBody, $optParams = array())
  {
    $params = array('sku' => $sku, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "apes_Service_SilverbackCustomersAPI_SKU");
  }

  /**
   * Updates the data for a given SKU (sku.update)
   *
   * @param string $sku
   * @param apes_SKUUpdateIn $postBody
   * @param array $optParams Optional parameters.
   * @return apes_Service_SilverbackCustomersAPI_SKU
   */
  public function update($sku, apes_Service_SilverbackCustomersAPI_SKUUpdateIn $postBody, $optParams = array())
  {
    $params = array('sku' => $sku, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "apes_Service_SilverbackCustomersAPI_SKU");
  }
}

/**
 * The "skuAttribute" collection of methods.
 * Typical usage is:
 *  <code>
 *   $silverbackCustomersService = new apes_Service_SilverbackCustomersAPI(...);
 *   $skuAttribute = $silverbackCustomersService->skuAttribute;
 *  </code>
 */
class apes_Service_SilverbackCustomersAPI_SkuAttribute_Resource extends Google_Service_Resource
{

  /**
   * Deletes a given SKU attribute. Existing SKU with that attribute are not
   * modified (skuAttribute.delete)
   *
   * @param string $name
   * @param array $optParams Optional parameters.
   * @return apes_Service_SilverbackCustomersAPI_SKUAttribute
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "apes_Service_SilverbackCustomersAPI_SKUAttribute");
  }

  /**
   * Adds a new SKU attribute (skuAttribute.insert)
   *
   * @param apes_SKUAttributeIn $postBody
   * @param array $optParams Optional parameters.
   * @return apes_Service_SilverbackCustomersAPI_SKUAttribute
   */
  public function insert(apes_Service_SilverbackCustomersAPI_SKUAttributeIn $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "apes_Service_SilverbackCustomersAPI_SKUAttribute");
  }

  /**
   * Lists all the available SKU attribute (skuAttribute.listSkuAttribute)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string limit
   * @opt_param string pageToken
   * @return apes_Service_SilverbackCustomersAPI_SKUAttributeCollection
   */
  public function listSkuAttribute($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "apes_Service_SilverbackCustomersAPI_SKUAttributeCollection");
  }
}




class apes_Service_SilverbackCustomersAPI_BackendModelsSKUAmountIn extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $amount;
  public $sku;


  public function setAmount($amount)
  {
    $this->amount = $amount;
  }
  public function getAmount()
  {
    return $this->amount;
  }
  public function setSku($sku)
  {
    $this->sku = $sku;
  }
  public function getSku()
  {
    return $this->sku;
  }
}

class apes_Service_SilverbackCustomersAPI_Dispatch extends Google_Collection
{
  protected $collection_key = 'skus';
  protected $internal_gapi_mappings = array(
  );
  public $destinationExternalId;
  public $destinationId;
  public $expectedShipmentDate;
  public $externalId;
  public $id;
  protected $skusType = 'Apes_Service_SilverbackCustomersAPI_SKUDispatch';
  protected $skusDataType = 'array';
  public $sourceExternalId;
  public $sourceId;
  public $state;


  public function setDestinationExternalId($destinationExternalId)
  {
    $this->destinationExternalId = $destinationExternalId;
  }
  public function getDestinationExternalId()
  {
    return $this->destinationExternalId;
  }
  public function setDestinationId($destinationId)
  {
    $this->destinationId = $destinationId;
  }
  public function getDestinationId()
  {
    return $this->destinationId;
  }
  public function setExpectedShipmentDate($expectedShipmentDate)
  {
    $this->expectedShipmentDate = $expectedShipmentDate;
  }
  public function getExpectedShipmentDate()
  {
    return $this->expectedShipmentDate;
  }
  public function setExternalId($externalId)
  {
    $this->externalId = $externalId;
  }
  public function getExternalId()
  {
    return $this->externalId;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setSkus($skus)
  {
    $this->skus = $skus;
  }
  public function getSkus()
  {
    return $this->skus;
  }
  public function setSourceExternalId($sourceExternalId)
  {
    $this->sourceExternalId = $sourceExternalId;
  }
  public function getSourceExternalId()
  {
    return $this->sourceExternalId;
  }
  public function setSourceId($sourceId)
  {
    $this->sourceId = $sourceId;
  }
  public function getSourceId()
  {
    return $this->sourceId;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
}

class apes_Service_SilverbackCustomersAPI_DispatchInsertIn extends Google_Collection
{
  protected $collection_key = 'skusAmount';
  protected $internal_gapi_mappings = array(
  );
  public $destinationExternalId;
  public $externalId;
  protected $skusAmountType = 'Apes_Service_SilverbackCustomersAPI_BackendModelsSKUAmountIn';
  protected $skusAmountDataType = 'array';
  public $sourceExternalId;


  public function setDestinationExternalId($destinationExternalId)
  {
    $this->destinationExternalId = $destinationExternalId;
  }
  public function getDestinationExternalId()
  {
    return $this->destinationExternalId;
  }
  public function setExternalId($externalId)
  {
    $this->externalId = $externalId;
  }
  public function getExternalId()
  {
    return $this->externalId;
  }
  public function setSkusAmount($skusAmount)
  {
    $this->skusAmount = $skusAmount;
  }
  public function getSkusAmount()
  {
    return $this->skusAmount;
  }
  public function setSourceExternalId($sourceExternalId)
  {
    $this->sourceExternalId = $sourceExternalId;
  }
  public function getSourceExternalId()
  {
    return $this->sourceExternalId;
  }
}

class apes_Service_SilverbackCustomersAPI_DispatchList extends Google_Collection
{
  protected $collection_key = 'skus';
  protected $internal_gapi_mappings = array(
  );
  public $arrivalDate;
  public $destinationExternalId;
  public $destinationId;
  public $externalId;
  public $id;
  protected $skusType = 'Apes_Service_SilverbackCustomersAPI_SKUDispatch';
  protected $skusDataType = 'array';
  public $sourceExternalId;
  public $sourceId;
  public $state;


  public function setArrivalDate($arrivalDate)
  {
    $this->arrivalDate = $arrivalDate;
  }
  public function getArrivalDate()
  {
    return $this->arrivalDate;
  }
  public function setDestinationExternalId($destinationExternalId)
  {
    $this->destinationExternalId = $destinationExternalId;
  }
  public function getDestinationExternalId()
  {
    return $this->destinationExternalId;
  }
  public function setDestinationId($destinationId)
  {
    $this->destinationId = $destinationId;
  }
  public function getDestinationId()
  {
    return $this->destinationId;
  }
  public function setExternalId($externalId)
  {
    $this->externalId = $externalId;
  }
  public function getExternalId()
  {
    return $this->externalId;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setSkus($skus)
  {
    $this->skus = $skus;
  }
  public function getSkus()
  {
    return $this->skus;
  }
  public function setSourceExternalId($sourceExternalId)
  {
    $this->sourceExternalId = $sourceExternalId;
  }
  public function getSourceExternalId()
  {
    return $this->sourceExternalId;
  }
  public function setSourceId($sourceId)
  {
    $this->sourceId = $sourceId;
  }
  public function getSourceId()
  {
    return $this->sourceId;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
}

class apes_Service_SilverbackCustomersAPI_DispatchListCollection extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Apes_Service_SilverbackCustomersAPI_DispatchList';
  protected $itemsDataType = 'array';
  public $nextPageToken;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class apes_Service_SilverbackCustomersAPI_DispatchUpdateIn extends Google_Collection
{
  protected $collection_key = 'skusAmount';
  protected $internal_gapi_mappings = array(
  );
  public $destinationExternalId;
  public $externalId;
  protected $skusAmountType = 'Apes_Service_SilverbackCustomersAPI_BackendModelsSKUAmountIn';
  protected $skusAmountDataType = 'array';
  public $sourceExternalId;
  public $state;


  public function setDestinationExternalId($destinationExternalId)
  {
    $this->destinationExternalId = $destinationExternalId;
  }
  public function getDestinationExternalId()
  {
    return $this->destinationExternalId;
  }
  public function setExternalId($externalId)
  {
    $this->externalId = $externalId;
  }
  public function getExternalId()
  {
    return $this->externalId;
  }
  public function setSkusAmount($skusAmount)
  {
    $this->skusAmount = $skusAmount;
  }
  public function getSkusAmount()
  {
    return $this->skusAmount;
  }
  public function setSourceExternalId($sourceExternalId)
  {
    $this->sourceExternalId = $sourceExternalId;
  }
  public function getSourceExternalId()
  {
    return $this->sourceExternalId;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
}

class apes_Service_SilverbackCustomersAPI_GeoPtMessage extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $lat;
  public $lon;


  public function setLat($lat)
  {
    $this->lat = $lat;
  }
  public function getLat()
  {
    return $this->lat;
  }
  public function setLon($lon)
  {
    $this->lon = $lon;
  }
  public function getLon()
  {
    return $this->lon;
  }
}

class apes_Service_SilverbackCustomersAPI_KeyValue extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $name;
  public $value;


  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class apes_Service_SilverbackCustomersAPI_Location extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $address;
  protected $coordinatesType = 'Apes_Service_SilverbackCustomersAPI_GeoPtMessage';
  protected $coordinatesDataType = '';
  public $description;
  public $externalId;
  public $id;
  public $name;
  public $parentExternalId;
  public $parentId;
  public $type;


  public function setAddress($address)
  {
    $this->address = $address;
  }
  public function getAddress()
  {
    return $this->address;
  }
  public function setCoordinates(Apes_Service_SilverbackCustomersAPI_GeoPtMessage $coordinates)
  {
    $this->coordinates = $coordinates;
  }
  public function getCoordinates()
  {
    return $this->coordinates;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setExternalId($externalId)
  {
    $this->externalId = $externalId;
  }
  public function getExternalId()
  {
    return $this->externalId;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setParentExternalId($parentExternalId)
  {
    $this->parentExternalId = $parentExternalId;
  }
  public function getParentExternalId()
  {
    return $this->parentExternalId;
  }
  public function setParentId($parentId)
  {
    $this->parentId = $parentId;
  }
  public function getParentId()
  {
    return $this->parentId;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}

class apes_Service_SilverbackCustomersAPI_LocationCollection extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Apes_Service_SilverbackCustomersAPI_Location';
  protected $itemsDataType = 'array';
  public $nextPageToken;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class apes_Service_SilverbackCustomersAPI_LocationIn extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $address;
  protected $coordinatesType = 'Apes_Service_SilverbackCustomersAPI_GeoPtMessage';
  protected $coordinatesDataType = '';
  public $description;
  public $externalId;
  public $name;
  public $parentExternalId;
  public $type;


  public function setAddress($address)
  {
    $this->address = $address;
  }
  public function getAddress()
  {
    return $this->address;
  }
  public function setCoordinates(Apes_Service_SilverbackCustomersAPI_GeoPtMessage $coordinates)
  {
    $this->coordinates = $coordinates;
  }
  public function getCoordinates()
  {
    return $this->coordinates;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setExternalId($externalId)
  {
    $this->externalId = $externalId;
  }
  public function getExternalId()
  {
    return $this->externalId;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setParentExternalId($parentExternalId)
  {
    $this->parentExternalId = $parentExternalId;
  }
  public function getParentExternalId()
  {
    return $this->parentExternalId;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}

class apes_Service_SilverbackCustomersAPI_PurchaseOrder extends Google_Collection
{
  protected $collection_key = 'skus';
  protected $internal_gapi_mappings = array(
  );
  public $arrivalDate;
  public $encodedBy;
  public $encodedWithId;
  public $encodingDevice;
  public $encodingSku;
  public $externalId;
  public $id;
  public $isEncoding;
  public $locationExternalId;
  public $locationId;
  protected $skusType = 'Apes_Service_SilverbackCustomersAPI_SKUPurchaseOrder';
  protected $skusDataType = 'array';
  public $state;
  public $supplier;


  public function setArrivalDate($arrivalDate)
  {
    $this->arrivalDate = $arrivalDate;
  }
  public function getArrivalDate()
  {
    return $this->arrivalDate;
  }
  public function setEncodedBy($encodedBy)
  {
    $this->encodedBy = $encodedBy;
  }
  public function getEncodedBy()
  {
    return $this->encodedBy;
  }
  public function setEncodedWithId($encodedWithId)
  {
    $this->encodedWithId = $encodedWithId;
  }
  public function getEncodedWithId()
  {
    return $this->encodedWithId;
  }
  public function setEncodingDevice($encodingDevice)
  {
    $this->encodingDevice = $encodingDevice;
  }
  public function getEncodingDevice()
  {
    return $this->encodingDevice;
  }
  public function setEncodingSku($encodingSku)
  {
    $this->encodingSku = $encodingSku;
  }
  public function getEncodingSku()
  {
    return $this->encodingSku;
  }
  public function setExternalId($externalId)
  {
    $this->externalId = $externalId;
  }
  public function getExternalId()
  {
    return $this->externalId;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setIsEncoding($isEncoding)
  {
    $this->isEncoding = $isEncoding;
  }
  public function getIsEncoding()
  {
    return $this->isEncoding;
  }
  public function setLocationExternalId($locationExternalId)
  {
    $this->locationExternalId = $locationExternalId;
  }
  public function getLocationExternalId()
  {
    return $this->locationExternalId;
  }
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  public function getLocationId()
  {
    return $this->locationId;
  }
  public function setSkus($skus)
  {
    $this->skus = $skus;
  }
  public function getSkus()
  {
    return $this->skus;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setSupplier($supplier)
  {
    $this->supplier = $supplier;
  }
  public function getSupplier()
  {
    return $this->supplier;
  }
}

class apes_Service_SilverbackCustomersAPI_PurchaseOrderInsertIn extends Google_Collection
{
  protected $collection_key = 'skusAmount';
  protected $internal_gapi_mappings = array(
  );
  public $arrivalDate;
  public $externalId;
  public $locationExternalId;
  protected $skusAmountType = 'Apes_Service_SilverbackCustomersAPI_BackendModelsSKUAmountIn';
  protected $skusAmountDataType = 'array';
  public $supplier;


  public function setArrivalDate($arrivalDate)
  {
    $this->arrivalDate = $arrivalDate;
  }
  public function getArrivalDate()
  {
    return $this->arrivalDate;
  }
  public function setExternalId($externalId)
  {
    $this->externalId = $externalId;
  }
  public function getExternalId()
  {
    return $this->externalId;
  }
  public function setLocationExternalId($locationExternalId)
  {
    $this->locationExternalId = $locationExternalId;
  }
  public function getLocationExternalId()
  {
    return $this->locationExternalId;
  }
  public function setSkusAmount($skusAmount)
  {
    $this->skusAmount = $skusAmount;
  }
  public function getSkusAmount()
  {
    return $this->skusAmount;
  }
  public function setSupplier($supplier)
  {
    $this->supplier = $supplier;
  }
  public function getSupplier()
  {
    return $this->supplier;
  }
}

class apes_Service_SilverbackCustomersAPI_PurchaseOrderList extends Google_Collection
{
  protected $collection_key = 'skus';
  protected $internal_gapi_mappings = array(
  );
  public $arrivalDate;
  public $encodedBy;
  public $encodedWithId;
  public $externalId;
  public $id;
  public $locationExternalId;
  public $locationId;
  protected $skusType = 'Apes_Service_SilverbackCustomersAPI_SKUPurchaseOrder';
  protected $skusDataType = 'array';
  public $state;
  public $supplier;


  public function setArrivalDate($arrivalDate)
  {
    $this->arrivalDate = $arrivalDate;
  }
  public function getArrivalDate()
  {
    return $this->arrivalDate;
  }
  public function setEncodedBy($encodedBy)
  {
    $this->encodedBy = $encodedBy;
  }
  public function getEncodedBy()
  {
    return $this->encodedBy;
  }
  public function setEncodedWithId($encodedWithId)
  {
    $this->encodedWithId = $encodedWithId;
  }
  public function getEncodedWithId()
  {
    return $this->encodedWithId;
  }
  public function setExternalId($externalId)
  {
    $this->externalId = $externalId;
  }
  public function getExternalId()
  {
    return $this->externalId;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setLocationExternalId($locationExternalId)
  {
    $this->locationExternalId = $locationExternalId;
  }
  public function getLocationExternalId()
  {
    return $this->locationExternalId;
  }
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  public function getLocationId()
  {
    return $this->locationId;
  }
  public function setSkus($skus)
  {
    $this->skus = $skus;
  }
  public function getSkus()
  {
    return $this->skus;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setSupplier($supplier)
  {
    $this->supplier = $supplier;
  }
  public function getSupplier()
  {
    return $this->supplier;
  }
}

class apes_Service_SilverbackCustomersAPI_PurchaseOrderListCollection extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Apes_Service_SilverbackCustomersAPI_PurchaseOrderList';
  protected $itemsDataType = 'array';
  public $nextPageToken;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class apes_Service_SilverbackCustomersAPI_PurchaseOrderUpdateIn extends Google_Collection
{
  protected $collection_key = 'skusAmount';
  protected $internal_gapi_mappings = array(
  );
  public $arrivalDate;
  public $externalId;
  public $id;
  public $locationExternalId;
  protected $skusAmountType = 'Apes_Service_SilverbackCustomersAPI_BackendModelsSKUAmountIn';
  protected $skusAmountDataType = 'array';
  public $supplier;


  public function setArrivalDate($arrivalDate)
  {
    $this->arrivalDate = $arrivalDate;
  }
  public function getArrivalDate()
  {
    return $this->arrivalDate;
  }
  public function setExternalId($externalId)
  {
    $this->externalId = $externalId;
  }
  public function getExternalId()
  {
    return $this->externalId;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setLocationExternalId($locationExternalId)
  {
    $this->locationExternalId = $locationExternalId;
  }
  public function getLocationExternalId()
  {
    return $this->locationExternalId;
  }
  public function setSkusAmount($skusAmount)
  {
    $this->skusAmount = $skusAmount;
  }
  public function getSkusAmount()
  {
    return $this->skusAmount;
  }
  public function setSupplier($supplier)
  {
    $this->supplier = $supplier;
  }
  public function getSupplier()
  {
    return $this->supplier;
  }
}

class apes_Service_SilverbackCustomersAPI_SKU extends Google_Collection
{
  protected $collection_key = 'attributes';
  protected $internal_gapi_mappings = array(
  );
  protected $attributesType = 'Apes_Service_SilverbackCustomersAPI_KeyValue';
  protected $attributesDataType = 'array';
  public $companyPrefix;
  public $ean;
  public $imageUrl;
  public $name;
  public $sku;


  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  public function getAttributes()
  {
    return $this->attributes;
  }
  public function setCompanyPrefix($companyPrefix)
  {
    $this->companyPrefix = $companyPrefix;
  }
  public function getCompanyPrefix()
  {
    return $this->companyPrefix;
  }
  public function setEan($ean)
  {
    $this->ean = $ean;
  }
  public function getEan()
  {
    return $this->ean;
  }
  public function setImageUrl($imageUrl)
  {
    $this->imageUrl = $imageUrl;
  }
  public function getImageUrl()
  {
    return $this->imageUrl;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setSku($sku)
  {
    $this->sku = $sku;
  }
  public function getSku()
  {
    return $this->sku;
  }
}

class apes_Service_SilverbackCustomersAPI_SKUAttribute extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $dataType;
  public $name;
  public $required;


  public function setDataType($dataType)
  {
    $this->dataType = $dataType;
  }
  public function getDataType()
  {
    return $this->dataType;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setRequired($required)
  {
    $this->required = $required;
  }
  public function getRequired()
  {
    return $this->required;
  }
}

class apes_Service_SilverbackCustomersAPI_SKUAttributeCollection extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Apes_Service_SilverbackCustomersAPI_SKUAttribute';
  protected $itemsDataType = 'array';
  public $nextPageToken;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class apes_Service_SilverbackCustomersAPI_SKUAttributeIn extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $dataType;
  public $name;
  public $required;


  public function setDataType($dataType)
  {
    $this->dataType = $dataType;
  }
  public function getDataType()
  {
    return $this->dataType;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setRequired($required)
  {
    $this->required = $required;
  }
  public function getRequired()
  {
    return $this->required;
  }
}

class apes_Service_SilverbackCustomersAPI_SKUCollection extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Apes_Service_SilverbackCustomersAPI_SKU';
  protected $itemsDataType = 'array';
  public $nextPageToken;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class apes_Service_SilverbackCustomersAPI_SKUDispatch extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $amount;
  protected $referenceType = 'Apes_Service_SilverbackCustomersAPI_SKU';
  protected $referenceDataType = '';
  public $sku;
  public $state;


  public function setAmount($amount)
  {
    $this->amount = $amount;
  }
  public function getAmount()
  {
    return $this->amount;
  }
  public function setReference(Apes_Service_SilverbackCustomersAPI_SKU $reference)
  {
    $this->reference = $reference;
  }
  public function getReference()
  {
    return $this->reference;
  }
  public function setSku($sku)
  {
    $this->sku = $sku;
  }
  public function getSku()
  {
    return $this->sku;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
}

class apes_Service_SilverbackCustomersAPI_SKUInsertIn extends Google_Collection
{
  protected $collection_key = 'attributes';
  protected $internal_gapi_mappings = array(
  );
  protected $attributesType = 'Apes_Service_SilverbackCustomersAPI_KeyValue';
  protected $attributesDataType = 'array';
  public $companyPrefix;
  public $ean;
  public $imageUrl;
  public $name;
  public $sku;


  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  public function getAttributes()
  {
    return $this->attributes;
  }
  public function setCompanyPrefix($companyPrefix)
  {
    $this->companyPrefix = $companyPrefix;
  }
  public function getCompanyPrefix()
  {
    return $this->companyPrefix;
  }
  public function setEan($ean)
  {
    $this->ean = $ean;
  }
  public function getEan()
  {
    return $this->ean;
  }
  public function setImageUrl($imageUrl)
  {
    $this->imageUrl = $imageUrl;
  }
  public function getImageUrl()
  {
    return $this->imageUrl;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setSku($sku)
  {
    $this->sku = $sku;
  }
  public function getSku()
  {
    return $this->sku;
  }
}

class apes_Service_SilverbackCustomersAPI_SKUPurchaseOrder extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $amount;
  public $isEncoding;
  public $readCount;
  protected $referenceType = 'Apes_Service_SilverbackCustomersAPI_SKU';
  protected $referenceDataType = '';
  public $sku;
  public $transferId;
  public $writeCount;


  public function setAmount($amount)
  {
    $this->amount = $amount;
  }
  public function getAmount()
  {
    return $this->amount;
  }
  public function setIsEncoding($isEncoding)
  {
    $this->isEncoding = $isEncoding;
  }
  public function getIsEncoding()
  {
    return $this->isEncoding;
  }
  public function setReadCount($readCount)
  {
    $this->readCount = $readCount;
  }
  public function getReadCount()
  {
    return $this->readCount;
  }
  public function setReference(Apes_Service_SilverbackCustomersAPI_SKU $reference)
  {
    $this->reference = $reference;
  }
  public function getReference()
  {
    return $this->reference;
  }
  public function setSku($sku)
  {
    $this->sku = $sku;
  }
  public function getSku()
  {
    return $this->sku;
  }
  public function setTransferId($transferId)
  {
    $this->transferId = $transferId;
  }
  public function getTransferId()
  {
    return $this->transferId;
  }
  public function setWriteCount($writeCount)
  {
    $this->writeCount = $writeCount;
  }
  public function getWriteCount()
  {
    return $this->writeCount;
  }
}

class apes_Service_SilverbackCustomersAPI_SKUSaleReport extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $amount;
  public $delta;
  public $sku;
  public $state;


  public function setAmount($amount)
  {
    $this->amount = $amount;
  }
  public function getAmount()
  {
    return $this->amount;
  }
  public function setDelta($delta)
  {
    $this->delta = $delta;
  }
  public function getDelta()
  {
    return $this->delta;
  }
  public function setSku($sku)
  {
    $this->sku = $sku;
  }
  public function getSku()
  {
    return $this->sku;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
}

class apes_Service_SilverbackCustomersAPI_SKUUpdateIn extends Google_Collection
{
  protected $collection_key = 'attributes';
  protected $internal_gapi_mappings = array(
  );
  protected $attributesType = 'Apes_Service_SilverbackCustomersAPI_KeyValue';
  protected $attributesDataType = 'array';
  public $companyPrefix;
  public $ean;
  public $imageUrl;
  public $name;


  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  public function getAttributes()
  {
    return $this->attributes;
  }
  public function setCompanyPrefix($companyPrefix)
  {
    $this->companyPrefix = $companyPrefix;
  }
  public function getCompanyPrefix()
  {
    return $this->companyPrefix;
  }
  public function setEan($ean)
  {
    $this->ean = $ean;
  }
  public function getEan()
  {
    return $this->ean;
  }
  public function setImageUrl($imageUrl)
  {
    $this->imageUrl = $imageUrl;
  }
  public function getImageUrl()
  {
    return $this->imageUrl;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}

class apes_Service_SilverbackCustomersAPI_SaleReport extends Google_Collection
{
  protected $collection_key = 'skus';
  protected $internal_gapi_mappings = array(
  );
  public $endDate;
  public $externalId;
  public $id;
  public $locationExternalId;
  public $locationId;
  protected $skusType = 'Apes_Service_SilverbackCustomersAPI_SKUSaleReport';
  protected $skusDataType = 'array';
  public $startDate;


  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }
  public function getEndDate()
  {
    return $this->endDate;
  }
  public function setExternalId($externalId)
  {
    $this->externalId = $externalId;
  }
  public function getExternalId()
  {
    return $this->externalId;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setLocationExternalId($locationExternalId)
  {
    $this->locationExternalId = $locationExternalId;
  }
  public function getLocationExternalId()
  {
    return $this->locationExternalId;
  }
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  public function getLocationId()
  {
    return $this->locationId;
  }
  public function setSkus($skus)
  {
    $this->skus = $skus;
  }
  public function getSkus()
  {
    return $this->skus;
  }
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }
  public function getStartDate()
  {
    return $this->startDate;
  }
}

class apes_Service_SilverbackCustomersAPI_SaleReportIn extends Google_Collection
{
  protected $collection_key = 'soldSkus';
  protected $internal_gapi_mappings = array(
  );
  public $endDate;
  public $externalId;
  public $locationExternalId;
  protected $soldSkusType = 'Apes_Service_SilverbackCustomersAPI_BackendModelsSKUAmountIn';
  protected $soldSkusDataType = 'array';
  public $startDate;


  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }
  public function getEndDate()
  {
    return $this->endDate;
  }
  public function setExternalId($externalId)
  {
    $this->externalId = $externalId;
  }
  public function getExternalId()
  {
    return $this->externalId;
  }
  public function setLocationExternalId($locationExternalId)
  {
    $this->locationExternalId = $locationExternalId;
  }
  public function getLocationExternalId()
  {
    return $this->locationExternalId;
  }
  public function setSoldSkus($soldSkus)
  {
    $this->soldSkus = $soldSkus;
  }
  public function getSoldSkus()
  {
    return $this->soldSkus;
  }
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }
  public function getStartDate()
  {
    return $this->startDate;
  }
}
