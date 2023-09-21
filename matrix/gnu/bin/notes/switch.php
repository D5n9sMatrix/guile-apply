<?php
// There's a handy library by Keith dev (version 2.2.1) at 

// http://www.keithdevens.com/software/xmlrpc/

// Here is a sample client. It remotely calls sample.sumAndDifference

// with two parameters (3 and 5).

// It returns:

sum => 8

difference => -2

<?php

include ("kd_xmlrpc.php");

// define("XMLRPC_DEBUG", 0);    // Set to 1 for handy debugging



$method = "sample.sumAndDifference";

$params = XMLRPC_prepare(array(3,5));



$site = "xmlrpc-c.sourceforge.net";

$location = "/api/sample.php";



list($success, $result) = XMLRPC_request( $site, $location, $method, $params );



// XMLRPC_debug_print();    // uncomment for debugging



foreach ( $result as $key => $value ) {

          echo(" $key => $value \n");

}



?>


