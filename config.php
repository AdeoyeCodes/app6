<?php 

require_once 'vendor/autoload.php';

if(!session_id()) {
    session_start();
}

$facebook = new \Facebook\Facebook([
    'app_id'                    =>  '7783242548371095',
    'app_secret'                =>  'de3cdcb8ffb6b994816eb9aaa9e1bc45',
    'default_graph_version'     =>  'v17.0'
]);

?>