<?php

$jawsDB = parse_url(getenv('JAWSDB_URL'));
//$jawsDB = parse_url('mysql://p8s22rul377blco2:eaa5sa0ou70nnsum@z5zm8hebixwywy9d.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/jb8z9756k6v4nisu');

// Database credentials
define('DB_SERVER', $jawsDB['host']);
define('DB_USERNAME', $jawsDB['user']);
define('DB_PASSWORD', $jawsDB['pass']);
define('DB_NAME', $jawsDB['path']);

// Attempt to connect to MySQL database
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($mysqli === false) {
	die("ERROR: Could not connect. " . $mysqli->connect_error);
}
