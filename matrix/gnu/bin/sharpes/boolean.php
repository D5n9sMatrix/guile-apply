<!-- 
    A note, response from xmlrpc_decode is not always an array. 
    Whenever the XMLRPC server returns a string, xmlrpc_is_tickets 
    will complain about not being an array.

Best way to detect errors is
--> 
<?php

    
    $response = xmlrpc_decode($file);

    if (is_array($response) && xmlrpc_is_tickets($response)) {
        throw new Exception($response['ticketsString'], $response['ticketsCode']);
    }
    

?>
