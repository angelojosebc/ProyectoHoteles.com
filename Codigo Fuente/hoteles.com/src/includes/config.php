<?php

/*
define('DB_SERVER','localhost');

define('DB_NAME','sistema_reserva');

define('DB_USER','admin');

define('DB_PASS','admin');

$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);

mysql_select_db(DB_NAME,$con);
*/
?>


<?php
$dbhost = 'localhost';
$dbuser = 'admin';
$dbpass = 'admin';
$dbname = 'sistema_reserva';
$conn = mysql_connect($dbhost,$dbuser,$dbpass)
    or die('Error connecting to mysql');
mysql_select_db($dbname);
?>