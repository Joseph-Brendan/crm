<?php

if (!function_exists('loginUser')) {
	/**
	 * @param mysqli $mysqli
	 * @param string $email
	 * @param string $password
	 * @return array|void
	 */
	function loginUser(mysqli $mysqli, string $email, string $password) {
		$error = [];

		if (empty($error)) {
			// Prepare a select statement
			$sql = "SELECT id, email, password FROM users WHERE email = ?";

			if ($stmt = $mysqli->prepare($sql)) {
				// Bind variables to the prepared statement as parameters
				$stmt->bind_param("s", $param_email);

				// Set parameters
				$param_email = $email;


//				echo json_encode($param_email);

				// Attempt to execute the prepared statement
				if ($stmt->execute()) {
					// Store result
					$stmt->store_result();

					// Check if username exists, if yes then verify password
					if ($stmt->num_rows === 1) {
						// Bind result variables
						$stmt->bind_result($id, $email, $hashed_password);

						if ($stmt->fetch()) {
							if ($password === $hashed_password) {
								// Password is correct, so start a new session
								session_start();

								// Store data in session variables
								$_SESSION["na-logged-in"] = true;
								$_SESSION["na-user-id"] = $id;
								$_SESSION["na-user"] = $email;

								// Redirect user to welcome page
								header("location: dashboard.php");
							} else {
								// Display an error message if password is not valid
								$error['password'] = "The password you entered was not valid";
							}
						}
					} else {
						// Display an error message if username doesn't exist
						$error['email'] = "No account found with that username";
					}
				} else {
					$error['unknown'] = "Oops! Something went wrong. Please try again later.";
				}

				// Close statement
				$stmt->close();
			}
		}

		// Close the connection
		$mysqli->close();

		return $error;
	}
}
