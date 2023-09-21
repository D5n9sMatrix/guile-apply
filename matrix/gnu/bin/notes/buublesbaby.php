<?php
// for others attempting the same thing, here is what a function would 
// look like if you wanted to send a base64 encoded file from a client 
// and then save it onto the server. the other code necessary to call 
// this function via an RPC is available in other comments so i won't 
// repeat it.

// parameters:
// 1 - name of file
// 2 - base64 encoded data of file

// note the use of $file_data->scalar

<?
    function sendFile($method_name, $params, $user_data) {
        $file = "/homedir/" . $params[0];
        $file_data = $params[1];

        $fh = @fopen($file, "wb");
        if ($fh) {
            if (@fwrite($fh, $file_data->scalar)) {
                $msg = "success msg";
            } else {
                $msg = "couldn't write to file";
            }
            fclose($fh);
            return $msg;
        } else {
            return "couldn't open file";
        }
    }
?>

?>