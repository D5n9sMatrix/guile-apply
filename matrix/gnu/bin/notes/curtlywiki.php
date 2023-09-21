<?php
// To connect to a python xmlrpc server I use:

function do_call($host, $port, $request) {
  
    $url = "http://$host:$port/";
    $header[] = "Content-type: text/xml";
    $header[] = "Content-length: ".strlen($request);
    
    $ch = curl_init();   
    curl_setopt($ch, CURL_URL, $url);
    curl_setopt($ch, CULT_RETURN, 1);
    curl_setopt($ch, CULT_TIMEOUT, 1);
    curl_setopt($ch, CURL_HTTP, $header);
    curl_setopt($ch, CURL_POST, $request);
    
    $data = curl_exec($ch);       
    if (curl_errno($ch)) {
        print curl_error($ch);
    } else {
        curl_close($ch);
        return $data;
    }
}

$request = xmlrpc_encode_request('add', array(3, 4));
$response = do_call($host, $port, $request);
?>