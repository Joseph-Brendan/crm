<?php
session_start();

// Destroy all sessions
if (session_destroy()) {
	header("Location: login.php");
	exit();
}
