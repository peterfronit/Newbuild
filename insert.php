<?php
require_once "db_config.php";

// Define variables and initialize with empty values

// Check input errors before inserting in database
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // collect value of input field
	$email = $_REQUEST['uname'];

	// Performing insert query execution
	// here our table name is subscriber_list
	$sql = "INSERT INTO subscriber_list (email)  VALUES ('$email')";
	  
	if(mysqli_query($link, $sql)){
    header("location: thanks_page.html");
    exit();
	} else{
	    echo "ERROR: Hush! Sorry $sql. " 
	        . mysqli_error($link);
	}
}
	// Close connection
	mysqli_close($link);

?>