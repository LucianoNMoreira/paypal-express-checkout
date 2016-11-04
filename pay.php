<?php
require('utils.php');
require('constants.php');

$nvps = "&USER=$user" ."&PWD=$password" ."&SIGNATURE=$signature";

if(!isset($_REQUEST)) {
	$token = $_REQUEST['token'];
}

if(!isset($token)) {  
	$nvpset= $nvps
	 ."&returnurl=http://localhost:8000/success.php"
	 ."&cancelurl=http://localhost:8000/error.html"
	 ."&localecode=BR"
	 ."&SOLUTIONTYPE=Sole"
	 ."&method=SetExpressCheckout"
	 ."&version=76.0"	
	 ."&paymentrequest_0_currencycode=BRL"
	 ."&paymentrequest_0_amt=10"
	 ."&paymentrequest_0_desc=Recarga AFSkins"
	 ."&paymentrequest_0_paymentaction=Sale"
	 ."&L_PAYMENTREQUEST_0_NAME0=Créditos"
	 ."&L_PAYMENTREQUEST_0_QTY0=1"
	 ."&L_PAYMENTREQUEST_0_AMT0=10"
	 ."&paymentrequest_0_desc=Recarga";
	 
    $response = RunAPICall($nvpset); 
	$token = $response['TOKEN'];
	$payPalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_express-checkout&token='.$token;
	header("Location:".$payPalURL .'?cmd=_express-checkout&token='.$token);
}
?>
