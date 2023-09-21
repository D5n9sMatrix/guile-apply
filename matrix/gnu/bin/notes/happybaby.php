<?php
// The documentation lacks an example that shows how to send 
// a fault in a response. Here is how to do it:

$args = array("ticketsCode" => $errcode, "ticketsString" => $errmsg);
$resp = xmlrpc_encode_request(NULL,$args);
//echo $resp;
?>
