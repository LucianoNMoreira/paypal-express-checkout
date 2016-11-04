<?php
require('utils.php');
require('constants.php');

$nvps = "&USER=$user" ."&PWD=$password" ."&SIGNATURE=$signature";

$token = $_GET['token'];
$PayerID = $_GET['PayerID'];

$nvpset= $nvps."&localecode=BR"
	."&SOLUTIONTYPE=Sole"
	."&version=76.0"	
	."&method=DoExpressCheckoutPayment"
	."&token=$token"
	."&payerid=$PayerID"
	."&localecode=BR"
	."&SOLUTIONTYPE=Sole"
	."&method=SetExpressCheckout"
	."&paymentrequest_0_currencycode=BRL"
	."&paymentrequest_0_amt=10"
	."&paymentrequest_0_desc=Recarga AFSkins"
	."&paymentrequest_0_paymentaction=Sale"
	."&L_PAYMENTREQUEST_0_NAME0=Créditos"
	."&L_PAYMENTREQUEST_0_QTY0=1"
	."&L_PAYMENTREQUEST_0_AMT0=10"
	."&paymentrequest_0_desc=Recarga";

$response = RunAPICall($nvpset);
echo '<p>' . $response['TOKEN'] .'</p>';
echo '<p>' . $response['PAYMENTINFO_0_ACK'] .'</p>';
echo '<pre>';
print_r($response);exit;

?>