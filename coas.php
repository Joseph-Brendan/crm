<?php
session_start();

if (isset($_SESSION['na-user'])) {
	header('Location: dashboard.php');
	exit();
}

require('config/database.php');

// Initialize with empty values
$email = $password = '';
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	include 'helpers/helpers.php';

	// Check if email is empty
	if (empty(trim($_POST["email"]))) {
		$error['email'] = "Please enter an email address";
	} else {
		$email = htmlentities(trim($_POST["email"]));
	}

	// Check if password is empty
	if (empty(trim($_POST["password"]))) {
		$error['password'] = "Please enter your password";
	} else {
		$password = htmlentities(trim($_POST["password"]));
	}

	$errors = loginUser($mysqli, $email, $password);
}

require_once('lib/PageTemplate.php');

if (!isset($tpl)) {
	$tpl = new PageTemplate();
	$tpl->PageTitle = 'Login';
	$tpl->ContentHead = 'contents/content-head.php';
	$tpl->ContentBody = 'contents/auth/coas.php';
	$tpl->ContentFooter = 'contents/content-footer.php';

	if (count($errors)) {
		$tpl->ContentData = [
			"errors" => $errors
		];
	}

	include "layouts/layout.php";
}
?>
