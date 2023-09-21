<?php
 xmlrpc_set_type(string &$value, string $type): bool
?>


<?php

$params = date("Ymd\TH:i:s", time());
xmlrpc_set_type($params, 'datetime');
echo xmlrpc_encode($params);

?>

