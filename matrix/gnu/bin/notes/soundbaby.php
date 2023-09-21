<?php
// It took me a while to get a client together without external libraries.  
// This very basic client/server pair works on my home set-up - hopefully 
// it will save the next xml-rpc virgin some grief.



/* clients.php */

<?php

function do_call($host, $port, $request) {

    

    $fp = fsockopen($host, $port, $errno, $errstr);

    $query = "POST /home/servers.php HTTP/1.0\nUser_Agent: My Egg Client\nHost: ".$host."\nContent-Type: text/xml\nContent-Length: ".strlen($request)."\n\n".$request."\n";



    if (!fputs($fp, $query, strlen($query))) {

        $errstr = "Write error";

        return 0;

    }



    $contents = '';

    while (!feof($fp)) {

        $contents .= fgets($fp);

    }



    fclose($fp);

    return $contents;

}



$host = 'localhost';

$port = 80;

$request = xmlrpc_encode_request('cycle', 'egg');

$response = do_call($host, $port, $request);

/* do something with $response, e.g. print it */

?>



/* servertest.php */

<?php

function lifecycle($method, $params) {

/* $method = 'cycle', $params = (array of) request parameter(s); $data is also passed from xmlrpc_server_call_method, if we had any data to pass */

    switch($params[0]) {

        case 'egg':

            $reply = 'All eggs will be birds one day.';

        break;

        default:

            $reply = 'That must have been an otheregg';

    }

    return $reply;

}



$server = xmlrpc_server_create();



/* register the 'external' name and then the 'internal' name */

xmlrpc_server_register_method($server, "cycle", "lifecycle");



$request = $HTTP_RAW_POST_DATA; // no you don't need 'always on', and no $_POST doesn't work.



/* the parameters here are 'server, xml-string and user data'.  There's supposed to be an optional 'output options' array too, but I can't get it working :( hence header() call */

$response = xmlrpc_server_call_method($server, $request, null);

header('Content-Type: text/xml');

print $response;



xmlrpc_server_destroy($server);

?>
