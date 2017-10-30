<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);

// Start the session
session_name("user-registration");
session_start();

require 'connection/connection.php';

$sql = "SELECT * FROM USERS ORDER BY userRegister_date";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<?php include'menu.php';?>
	<div id="container-div-wide"> 
	<h2>User List</h2>
		<table width="100%" cellpadding="5" cellspacing="1">
			<tr class="table-labels">
				<th>First Name</th>
				<th>Last Name</th>
				<th>Address1</th>
				<th>Address2</th>
				<th>City</th>
				<th>State</th>
				<th>Zip</th>
				<th>Country</th>
				<th>Date</th>
			</tr>	
			<?php $i = 0; ?>		
			<?php 
			if ($result->num_rows > 0) {
		    // output data of each row
			    while($row = $result->fetch_assoc()) 
			    {
		        ?>
		        
		        <!-- Changes the color of the rows on the user list -->
		        <?php $i++;
					if ($i % 2 == 1) 
					{
						$row_color = "row_one";	
					}
					else
					{
						$row_color = "row_two";
					}
				?>
					
					<tr class="<?php echo $row_color; ?>">
						<td>
							<?php echo $row["userFirstName"]; ?>
						</td>
						<td>
							<?php echo $row["userLastName"]; ?>
						</td>
						<td>
							<?php echo $row["userAddress1"]; ?>
						</td>
						<td>
							<?php echo $row["userAddress2"]; ?>
						</td>
						<td>
							<?php echo $row["userCity"]; ?>
						</td>
						<td>
							<?php echo $row["userState"]; ?>
						</td>
						<td>
							<?php echo $row["userZip"]; ?>
						</td>
						<td>
							<?php echo $row["userCountry"]; ?>
						</td>
						<td>
							<?php echo $row["userRegister_date"]; ?>
						</td>
					</tr>
		        <?php
		    	}
			} 
			
			else 
			{
	    		echo "0 results";
			}
			
			$conn->close();
			?>
		</table>
	</div>
</body>
</html>

