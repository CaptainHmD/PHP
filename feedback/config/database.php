<?php

define('DB_HOST','localhost');
define('DB_USER','hamad');
define('DB_PASS','1234');
define('DB_NAME','php_dev');

//! create connection

$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);


//check conn
if($conn->connect_error){
    die('Connection failed');
    echo "field";
}else{
    echo "connected";
}

?>