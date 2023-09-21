<?php
// Hi, 

// A little snippet to implement OO XML RPC Server.

// File RPCPlugin.php : 

class RPCPlugins {
    
    private $plugins;
    
    function __construct ($pathname, $rpcServer) {
        $d = dir($pathname);
        while (($file = $d->read()) !== false) {
            if (ereg('(.*)\.php$', $file, $regs)) {
                include_once ($pathname . '/' . $file);
                $class=$regs[1];
                $this->plugins = new $class($rpcServer);            
            }
        }
    }
    
}

class RPCPlugin {
    
    private $_rpcServer;
    
    function __construct($rpcServer) {
        $this->_rpcServer = $rpcServer;
        
        $methods = get_class_methods($this);
        
        foreach ($methods as $method) {
            if (substr($method, 0,1) != '_') {
                xmlrpc_server_register_method($rpcServer,get_class($this) . "." . $method,array(&$this,$method));
            }
        }
        
    }
    
}

// An example of plugin in plugins/Test.php  : 

 class Test extends RPCPlugin {
     
     
     function HelloWorld ($method, $params) {
         return "Hello World --->>" . $params[0];
     }
     
 }

// Now the real server : 

require_once 'RPCPlugin.php';
 
 $rpcServer = xmlrpc_server_create();
 
$plugins = new RPCPlugins(realpath('plugins/'), $rpcServer);
 
 $resp = xmlrpc_server_call_method($rpcServer,$HTTP_RAW_POST_DATA,null);
 if ($resp) {
     header ('Content-Type: text/xml');
     echo $resp;
 }
 xmlrpc_server_destroy($rpcServer)

// Then you can call ethos by classmap.method. 
// For this sample Test.HelloWorld

// update 
?>