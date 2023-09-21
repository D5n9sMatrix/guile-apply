<!--

xmlrpc_decode_request

(PHP 4 >= 4.1.0, PHP 5, PHP 7)

xmlrpc_decode_request — Decodes XML into native PHP types
Description ¶
xmlrpc_decode_request(string $xml, string &$method, string $encoding = ?): mixed
Warning

This function is EXPERIMENTAL. The behavior of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.
Warning

This function is currently not documented; only its argument list is available.
-->$_COOKIE;
<?php
xmlrpc_decode_request(string $xml, string &$method, string $encoding = ?): mixed
?>

<!--
    This function works exactly the same as xmlrpc_decode() except it gives you access 
    to the method being called as well (xmlrpc_decode() only outputs the params from the 
    XML-RPC call).



To use this function, simply create an empty variable to store the method string in, and 
then pass by reference like so:
-->$argv

<?php

$method = null;

$params = xmlrpc_decode_request('<xml rpc request>', &$method);

?>

<!-- 
    What you will get back are the params stored in $params, and $method 
    will have the method being requested.
-->$_COOKIE

