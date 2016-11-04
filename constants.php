<?php

	$SANDBOX_ENVIRONMENT = true;

	$url = "https://api-3t.paypal.com/nvp";
	$payPalURL = 'https://www.paypal.com/cgi-bin/webscr';

	if($SANDBOX_ENVIRONMENT){
		$url = "https://api-3t.sandbox.paypal.com/nvp";
		$payPalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
	}

	$user = "lucianonobremoreira_api1.gmail.com";
	$password = "XD3EYFJAU52JTWTG";
	$signature = "AFcWxV21C7fd0v3bYYYRCpSSRl31AMlW2veBMoaxrudaNELTIGm-MLJa";
