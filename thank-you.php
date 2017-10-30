<?php 

	$fName    = htmlspecialchars($_GET["fName"]);
	$lName    = htmlspecialchars($_GET["lName"]);

	$userName = $fName . " " . $lName;

	date_default_timezone_set('America/New_York');
	$date     = date('Y-m-d h:i:s');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome <?php echo $userName; ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include'menu.php';?>
<div id="container-div">
	
	<h2><?php include 'time-of-day.php'; ?></h2> <!-- Displays a greeting based on the time of day -->
	<p>Thank You <span class="blue bold"><?php echo $userName; ?></span> for registering and welcome to my world&#46;</p>
</div>
</body>
</html>