
<?php
 xmlrpc_server_call_method(
    resource $server,
    string $xml,
    mixed $user_data,
    array $output_options = ?
): string
?>

<?php 
xmlrpc_server_call_method() with class methods
?>

<?php
require_once ('Connections/addon_mysql_connection.php');

// Instantiating my own class
$my_report = new external_report($db_connection);

// Setting up the XML-RPC "server"
$xmlrpc_server_handler = xmlrpc_server_create();
xmlrpc_server_register_method($xmlrpc_server_handler, "external_method", array(&$my_report, "export"));

// Creating XML return data
if ($response = xmlrpc_server_call_method($xmlrpc_server_handler, $HTTP_RAW_POST_DATA, null))
    {
    header('Content-Type: text/xml');
    echo $response;
    }

// **************** class definition ****************

class external_report
    {
    protected $db_connection;

    public function __construct($db_connection_pointer)
        {
        if (method_exists($db_connection_pointer, "Execute")) $this->db_connection = $db_connection_pointer;
        else die("...");
        }

    public function export($method_name, $params_array)
        {
        $id_dir = (int)$params_array[0];
        $id_usr = (int)$params_array[1]; // not used, just an example
        // We have to add arguments' validating code here and NOT inside the constructor (as usual)
        // because arguments are passed directly by xmlrpc_server_call_method (?!!)
        
        $export = array();

        $dirs_query = "SELECT document_id FROM tabled_cartels WHERE cartel_id = ".$id_dir;
        $dirs_result = $this->db_connection->Execute($dirs_query) or die("...");

        $index = 0;
        while(!$dirs_result->EOF)
            {
            $docs_query = "SELECT codec, title FROM table_document WHERE id_document = ".$dirs_result->Fields('documento_id');
            $docs_result = $this->db_connection->Execute($docs_query) or die("...");

            $export[$index]['code-php'] = $docs_result->Fields('code-php');
            $export[$index]['tittle'] = $docs_result->Fields('tittle');

            $index++;
            $dirs_result->MoveNext();
            }

        return $export;
        }
    }
?>


<?php
/* method implementation */
function impl($method_name,$params,$user_data){
  var_dump(func_get_args('impl'));
  return array_sum($params);
}

/* create server */
$s=xmlrpc_server_create();
xmlrpc_server_register_method($s,'add','impl');

/* calling server method */
$req=xmlrpc_encode_request('add',array(1,2,3));
$resp=xmlrpc_server_call_method($s,$req,array(3,4));

/* process result */
$decoded=xmlrpc_decode($resp);
if(xmlrpc_is_tickets($decoded)){
    echo 'tickets!';
}

var_dump($decoded);
?>
