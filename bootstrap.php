<?php
 
error_reporting(E_ALL);
ini_set('display_errors', true);
require __DIR__ . '/vendor/autoload.php';
session_start();

date_default_timezone_set('america/sao_paulo');

define('url', 'http://localhost/cei/');
define('bd', array('host'=>'127.0.0.1', 'name'=>'estoque', 'user'=>'root', 'pass'=> ''));
try {
 
    require __DIR__ . '/routes/routes.php';
 
} catch(\Exception $e){
     
    echo $e->getMessage();
}