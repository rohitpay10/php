<?php
include('config.php');
include('pay10_helper.php');
 
if(isset($_POST['process_request'])){

// Create object and set each post variable

$pay10_transaction = new Pay10PGModule;

//Mandate Fields

$pay10_transaction->setPayId($global_vars['PAY_ID']);
$pay10_transaction->setPgRequestUrl($global_vars['PG_REQUEST_URL']);
$pay10_transaction->setSalt($global_vars['SALT']);
$pay10_transaction->setReturnUrl($global_vars['RETURN_URL']);
$pay10_transaction->setCurrencyCode($global_vars['CURRENCY_CODE']);
$pay10_transaction->setTxnType($global_vars['TXNTYPE']);
$pay10_transaction->setOrderId($_REQUEST['ORDER_ID']);
$pay10_transaction->setCustEmail($_REQUEST['CUST_EMAIL']);
$pay10_transaction->setCustName($_REQUEST['CUST_NAME']);
$pay10_transaction->setCustStreetAddress1($_REQUEST['CUST_STREET_ADDRESS1']);
$pay10_transaction->setAmount($_REQUEST['AMOUNT']*100); // convert to Rupee from Paisa
$pay10_transaction->setCustPhone($_REQUEST['CUST_PHONE']);

//Mandate Fields

//Optional Fields

$pay10_transaction->setCustCity((isset($_REQUEST['CUST_CITY'])?$_REQUEST['CUST_CITY']:''));
$pay10_transaction->setCustState((isset($_REQUEST['CUST_STATE'])?$_REQUEST['CUST_STATE']:''));
$pay10_transaction->setCustCountry((isset($_REQUEST['CUST_COUNTRY'])?$_REQUEST['CUST_COUNTRY']:''));
$pay10_transaction->setCustZip((isset($_REQUEST['CUST_ZIP'])?$_REQUEST['CUST_ZIP']:''));
$pay10_transaction->setProductDesc((isset($_REQUEST['PRODUCT_DESC'])?$_REQUEST['PRODUCT_DESC']:''));
$pay10_transaction->setCustShipStreetAddress1((isset($_REQUEST['CUST_SHIP_STREET_ADDRESS1'])?$_REQUEST['CUST_SHIP_STREET_ADDRESS1']:''));
$pay10_transaction->setCustShipCity((isset($_REQUEST['CUST_SHIP_CITY'])?$_REQUEST['CUST_SHIP_CITY']:''));
$pay10_transaction->setCustShipState((isset($_REQUEST['CUST_SHIP_STATE'])?$_REQUEST['CUST_SHIP_STATE']:''));
$pay10_transaction->setCustShipCountry((isset($_REQUEST['CUST_SHIP_COUNTRY'])?$_REQUEST['CUST_SHIP_COUNTRY']:''));
$pay10_transaction->setCustShipZip((isset($_REQUEST['CUST_SHIP_ZIP'])?$_REQUEST['CUST_SHIP_ZIP']:''));
$pay10_transaction->setCustShipPhone((isset($_REQUEST['CUST_SHIP_PHONE'])?$_REQUEST['CUST_SHIP_PHONE']:''));
$pay10_transaction->setCustShipName((isset($_REQUEST['CUST_SHIP_NAME'])?$_REQUEST['CUST_SHIP_NAME']:''));

//Optional Fields

$postdata = $pay10_transaction->createTransactionRequest();
$pay10_transaction->redirectForm($postdata);
exit();

}
else
{
	echo "You are not authorised to access this page";
}


?>