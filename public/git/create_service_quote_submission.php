<?php

	function redirect_to($new_location) {
		header("Location: " . "$new_location");
		
	}
?>
<?php require_once("../../includes/session.php"); ?>
<?php require_once("../../includes/db_connection.php"); ?>
<?php require_once("../../includes/functions.php"); ?>
<?php require_once("../../includes/validation_functions.php"); ?>
<?php
if (isset($_POST['submit'])) {
	// Process the form
	
	$first_name = mysql_prep($_POST["first_name"]);
	$last_name = mysql_prep($_POST["last_name"]);
	$car_make = mysql_prep($_POST["car_make"]);
	$car_model = mysql_prep($_POST["car_model"]);
	$phone = mysql_prep($_POST["phone"]);
	$email = mysql_prep($_POST["email"]);
	$situation_comment = mysql_prep($_POST["situation_comment"]);


	
	// validations
	$required_fields = array("first_name", "last_name");
	validate_presences($required_fields);
	
	if (!empty($errors)) {
		$_SESSION["errors"] = $errors;
		redirect_to("index.php");
	}
	
	$query  = "INSERT INTO quote_form (";
	$query .= "  first_name, last_name, car_make, car_model, phone, email, situation_comment";
	$query .= ") VALUES (";
	$query .= "  '{$first_name}', '{$last_name}', '{$car_make}', '{$car_model}', '{$phone}', '{$email}', '{$situation_comment}'";
	$query .= ")";
	$result = mysqli_query($connection, $query);

	if ($result) {
		// Success
		$_SESSION["message"] = "Subject created.";
		redirect_to("index.php");
	} else {
		// Failure
		$_SESSION["message"] = "Subject creation failed.";
		redirect_to("index.php");
	}
	
} else {
	// This is probably a GET request
	redirect_to("index.php");
}

?>


<?php
	if (isset($connection)) { mysqli_close($connection); }
?>
