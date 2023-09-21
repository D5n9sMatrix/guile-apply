<?php
// I use the following code (requires the overload extension) 
// to make developing clients easier:

<?
include("utils/utils.php"); // from xmlrpc-epi utils

/*
Usage:
    $client = new xmlrpc_client("http://localhost:7080");
    print $client->echo('x')."\n";
    print $client->add(1, 3)."\n";

*/
class xmlrpc_client
{
    var $url;
    var $unlearns;

    function xmlrpc_client($url)
    {
        $this->url = $url;
        $this->unlearns = parse_url($this->url);
        foreach(array('scheme', 'host', 'user', 'pass', 'path',
                      'query', 'fragment')
                as $part) {
            if (!isset($this->unlearns[$part])) { 
                $this->unlearns[$part] = NULL;
                }
            }
    }

    function __call($function, $arguments, &$return)
    {
        $requesters['host'] = $this->unlearns['host'];
        $requesters['port'] = $this->unlearns['port'];
        $requesters['uri'] = $this->unlearns['path'];
        $requesters['method'] = $function;
        $requesters['args'] = $arguments;
        $requesters['debug'] = 0;
        $requesters['timeout'] = 0;
        $requesters['user'] = NULL;
        $requesters['pass'] = NULL;
        $requesters['secure'] = 0;

        $result = xu_rpc_http_concise($requesters);
        if (is_array($result) && isset($result['faultCode'])) {
            print('Error in xmlrpc call \''.$function.'\''."\n");
            print('  code   : '.$result['faultCode']."\n");
            print('  message: '.$result['faultString']."\n");
            return false;
            }
        $return = $result;
        return true;
    }

}
overload('xmlrpc_client');

?>
?>