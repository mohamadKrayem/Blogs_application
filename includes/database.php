<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'moham');
define('DB_PASS', '1244');
define('DB_NAME', 'blogs');

$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($con->connect_error) {
  die('Connection Failed' . $con->connect_error);
}
