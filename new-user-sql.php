<?php
ob_start();
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);

// Start the session
session_name("user-registration");
session_start();

require 'connection/connection.php';

?>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$fName    = htmlspecialchars($_POST["fName"]);
	$lName    = htmlspecialchars($_POST["lName"]);
	$address1 = htmlspecialchars($_POST["address1"]);
	$address2 = htmlspecialchars($_POST["address2"]);
	$city     = htmlspecialchars($_POST["city"]);
	$state    = htmlspecialchars($_POST["state"]);
	$zip      = htmlspecialchars($_POST["zip"]);
	$country  = htmlspecialchars($_POST["country"]);

	date_default_timezone_set('America/New_York');
	$date     = date('Y-m-d h:i:s');


	$sql = "INSERT INTO USERS (userFirstName, userLastName, userAddress1, userAddress2, userCity, userState, userZip, userCountry, userRegister_date)
	VALUES ('$fName', '$lName', '$address1', '$address2', '$city', '$state', '$zip', '$country', '$date')";

	if ($conn->query($sql) === TRUE) 
	{	
		echo "New record added.";
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

	$userName = $fName . " " . $lName;

	header("Location: thank-you.php?fName=$fName&lName=$lName");
	die();
}
?>