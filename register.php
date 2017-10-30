<!DOCTYPE html>
<html>
<head>
	<title>Please Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include'menu.php';?>
<div id="container-div">
	<h2>Please Register</h2>
	<form id="registerform" action="new-user-sql.php" method="POST">
		<table width="100%">
			<tr>
				<td style="width: 150px;">First Name</td>
				<td><input type="text" id="fname" name="fName" class="required"></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" id="lname" name="lName" class="required"></td>
			</tr>
			<tr>
				<td>Address1</td>
				<td><input type="text" id="address1" name="address1" class="required"></td>
			</tr>
			<tr>
				<td>Address2</td>
				<td><input type="text" name="address2"></td>
			</tr>
			<tr>
				<td>City</td>
				<td><input type="text" id="city" name="city" class="required"></td>
			</tr>
			<tr>
				<td>State</td>
				<td><input type="text" id="state" name="state" class="required"></td>
			</tr>
			<tr>
				<td>Zip</td>
				<td><input type="text" id="zip" name="zip" class="required"></td>
			</tr>
			<tr>
				<td>Country</td>
				<td>
					<select id="country" name="country" class="required">
						<option value="" selected>Select</option>
						<option value="US">US</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;"><input class="btn" type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>



</div>
<script src="js/jquery.js"></script>
	<script src="js/jquery.validate.js"></script>
	<script>
	

	$().ready(function() {
		// validate the registration form when it is submitted
		$("#registerform").validate();

	});

	
	</script>

</body>
</html>