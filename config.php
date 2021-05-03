<?php

define('DB_SERVER', 'wheatley.cs.up.ac.za');
define('DB_USERNAME', 'u17016534');
define('DB_PASSWORD', 'Vashti02*');
define('DB_NAME', 'u17016534_cos216lpgin');
 

$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 

if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>