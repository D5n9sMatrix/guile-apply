<!--

The format for the xml string is the same that has to be returned by functions 
registered via calls to `xmlrpc_server_register_introspection_callback`.

It is documented at http://xmlrpc-epi.sourceforge.net/specs/rfc.system.describeMethods.php
-->

<?php
 xmlrpc_parse_method_descriptions(string $xml): array
?>

