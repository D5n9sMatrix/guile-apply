<?php
// Just a quick addition to my previous xmlrpc_client class: 
// since you cannot use remote methods containing capital 
// letters or methods from sub (like 'system.listMethods()'), 
// I added a 'call(...)' method to the class. 

<?
    // this method should be copy/pasted in the 
    // xmlrpc_client class

    function call($function)
    {
        $return = NULL;
        $argv = func_get_args();
        array_shift($argv); // remove function argument
        $this->__call($function, $argv, &$return);
        return $return;
    }

    // now, you can also do
    $result = $client->call('system.listMethods');
    $sum = client->call('add', '1', '2');
?>
?>