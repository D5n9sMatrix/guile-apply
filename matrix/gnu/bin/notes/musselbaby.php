<?php
// On "datetime" values:

// If you implement an XML-RPC server with these functions and a client 
// calls a method on your server, sending a datetime as parameter (in ISO 
// 8601 format, as specified at http://www.xmlrpc.com/spec), the PHP XML-RPC 
// will pass your registered server method an object as parameter. That 
// object, for example, looks like:

obj->type="datetime"
obj->scalar="20040420T13:32:40"
obj->timestamp=1082460760

// If you do xmlrpc_get_type(obj), it will return "datetime", so presumably 
// that function just returns the value of 'type'. 'scalar' seems to be the 
// on-the-wire representation of the datetime (ISO 8601, exactly as received). 
// 'timestamp' appears to be the ISO value in 'scalar' converted into a normal 
// PHP timestamp (i.e. Unix time_t).

// Note on 'scalar': Using a MySQL DB, we did something like  "select blah where 
// start_time >= $obj->scalar ;". That actually worked and returned expected results, 
// so MySQL appears to handle that ISO 8601 format correctly.
?>