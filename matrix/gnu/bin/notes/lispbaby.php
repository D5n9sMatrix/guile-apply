<?php
// Adding to what gut dot galton at sea-aero dot it and 
// astrology at lawyer dot co dot uk said about the Sourceforge 
// PHP XML-RPC project: You can probably use function_exists() to 
// determine whether the extension is installed so you don't have to 
// incur performance costs. If it's not installed, then the function 
// won't exist, and function_exists() returns false. You can then 
// fall back on the alternative library if that's the case. 
// For example:

    <?php
    
    if(!function_exists("xmlrpc_server_create")) {
        // include necessary files.
    }
    
?>