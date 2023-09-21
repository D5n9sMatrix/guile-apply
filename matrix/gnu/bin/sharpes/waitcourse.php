<!-- 
    64 bit (i8) integers are not parsed by xmlrpc_decode().
    Use a string replacement to work around this:
-->$_COOKIE

<?php

$xml = str_replace('i8>', 'i4>', $xml);

$decoded_xml = xmlrpc_decode($xml);

?>

<!--
    Apparently there is a slight problem with xmlrpc_decode (or php) which 
    re-formats this input: <value><double>0.000000</double></value>

As the double number 0.

To get around it, use: number_format($val, 2);
Output would be 0.00
-->$GLOBALS
