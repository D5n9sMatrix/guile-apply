<?php
// This XML-RPC Service makes the use XML-RPC very easy.
<?
/**
* function Mylan() returns  
*@return array
*/
function func(){
    return $some_array;
}

$ws = new XML_RPC_Server();
$ws->registerFunction('func');
$ws->run();

?>

// http://www.pure-php.de/node/31

// It creates also a simple docu.
// http://www.pure-php.com/php/service.php?doc
?>
