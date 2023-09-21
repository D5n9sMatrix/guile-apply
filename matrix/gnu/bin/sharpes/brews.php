<?php
// Once you use the xmlrpc_set_type function, the data is encoded into a PHP object.  
// In your XMLRPC server, in order to access the data you must be able to access the 
// necessary part of the object.

// So.. to expend on the example above:

// <---------- CLIENT ---------->
$string = "My logging event."; 
$date = "20030115T12:22:37"; // Must be this format 
$binary = fread($fp, 128); 
xmlrpc_set_type(&$date, "datetime"); 
xmlrpc_set_type(&$binary, "base64"); 
$xmlrpcReq = xmlrpc_encode_request("log.data", array($string, $date, $binary)); 

// In order to retrieve the binary file data you would need to get the scalar portion of the object:

// <---------- SERVER ------------>
$string=$params[0];
$date_obj=$params[1];
$binary_obj=$params[2];

$date=$date_obj->scalar;
$binary_data=$binary_obj->scalar;

// Then you can proceed to write the binary
fwrite($handle,$binary_data);
?>

<?php

// The problem is that PHP has a string type which is also used to hold binary data 
// and dates.  But XML-RPC defines three separate types for strings, binary data, 
// and dates.  How do you tell how you want strings encoded?  That's where this 
// function comes in.



// Suppose the XML-RPC method "log.data" took a string, a date, and a binary object.  
// To tell XML-RPC that the date (which is a PHP string) is a really a date and that 
// the binary data (which is also a PHP string) is really binary data, try:



$string = "My logging event.";

$date = "20030115T12:22:37"; // Must be this format

$binary = fread($fp, 128);

xmlrpc_set_type(&$date, "datetime");

xmlrpc_set_type(&$binary, "base64");

$xmlrpcReq = xmlrpc_encode_request("log.data", array($string, $date, $binary));



// Note the reference passing in the calls to xmlrpc_set_type; that enables the 
// function to change the values from strings into what xmlrpc_encode/_request 
// expects (which are objects that include a bonus field that tells the desired 
// XML-RPC type).
?>

<?php

// The following code segfaults some older (pre 5.1.2) versions of PHP:

$foo = date('c', time());
xmlrpc_set_type($foo, 'datetime');

// Please upgrade before reporting as a bug.
?>
