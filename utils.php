<?php 
    //Make API call
    function RunAPICall($nvps){
        global $url;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_TIMEOUT, 45);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$nvps);
        
        $result = curl_exec($ch);
            $httpResponseAr = explode("&", strtoupper($result));
            $httpParsedResponseAr = array();
            foreach ($httpResponseAr as $value) {
                $tmpAr = explode("=", $value);
                if(sizeof($tmpAr) > 1) {
                    $httpParsedResponseAr[$tmpAr[0]] = urldecode($tmpAr[1]);
                }
            }

        curl_close ($ch); 
        return $httpParsedResponseAr;
    }
?>