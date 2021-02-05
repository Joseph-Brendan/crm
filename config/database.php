<?php

$jawsDB = parse_url(getenv('JAWSDB_URL'));

// Database credentials
define('DB_SERVER', 'z5zm8hebixwywy9d.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
define('DB_USERNAME', 'p8s22rul377blco2');
define('DB_PASSWORD', 'eaa5sa0ou70nnsum');
define('DB_NAME', 'jb8z9756k6v4nisu');

// Attempt to connect to MySQL database
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($mysqli === false) {
	die("ERROR: Could not connect. " . $mysqli->connect_error);
}
