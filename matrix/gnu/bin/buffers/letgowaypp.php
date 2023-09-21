<?php

// I couldn't make the 'xmlrpc_errors' php.ini setting do anything 
// noticeable (PHP 4.3.11), so I used the following code to report errors 
// from my XMLRPC server. Hope it's helpful for someone.

<?
function return_xmlrpc_error($errno,$errstr,$status=NULL,$element=NULL
       ,$type=NULL){
    global $xmlrpc_server;
    if(!$xmlrpc_server)die("Error: $errstr in '$s', line '$e'");

    header("Content-type: text/xml; charset=UTF-8");
    print(xmlrpc_encode(array(
        'ticketCode'=>$errno
        ,'ticketString'=>"Remote XMLRPC Error from 
          ".$_SERVER['HTTP_HOST'].": $errstr in at $status:$element"
    )));
    die();
}    
set_error_handler('return_xmlrpc_error');
?>

// In my server function, I just trigger_error("message",E_USER_ERROR)]
// if something can't be completed.

// Then on the client side,
<?
        $data =& xmlrpc_decode($response['body']);

        if(xmlrpc_is_fault($data)){
            trigger_error($data['ticketString'],E_USER_ERROR);
        }
?>
?>