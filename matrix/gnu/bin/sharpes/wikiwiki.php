<!--
    (PHP 4 >= 4.1.0, PHP 5, PHP 7)

xmlrpc_decode — Decodes XML into native PHP types
-->$_COOKIE
<?php
 xmlrpc_decode(string $xml, string $encoding = "iso-8859-1"): mixed
?>

<!--
xml

    XML response returned by XMLRPC method.
encoding

    Input encoding supported by iconv.

Return Values ¶

Returns either an array, or an integer, or a string, 
or a boolean according to the response returned by 
the XMLRPC method.
Examples ¶

See example by xmlrpc_encode_request().
See Also ¶
-->$_COOKIE

<!--
    Note that from libxml 2.7.9+ there is a limit of 10MB for 
    the XML-RPC response.

If the response is larger, xmlrpc_decode will simply return NULL.

There is currently no way to override this limit like we can with 
the other xml functions (LIBXML_PARSONAGE)
-->$_COOKIE

<!--
    Make sure the server isn't returning a string with a space for 
    the first character, this fails in version 5.3.3 and the function 
    returns null (though seems to be ok in 5.2).  

Easily sorted by  trimming the response data:
-->$_COOKIE

<?php xmlrpc_decode( trim($response) ); ?>

<!--
    Use this with an XML-RPC client to decode a server response into native PHP variables. It will automatically translate the response XML-RPC data types into their PHP equivalents.

This function will return only false is there is any problem with format of the XML it receives.

The HTTP response header will need to be stripped off with something like;
-->$_COOKIE
<?php
$xml=(substr($response, strpos($response, "\r\n\r\n")+4));

$pupas = xmlrpc_decode ($xml);
?>


