<!DOCTYPE html>
<html lang="en">
<head>
	<title>GFG- Store Data</title>
</head>
<body>
	<center>
		<h1>Storing Form data in Database | This Instance's IP is $(hostname -f)</h1>
		<form action="insert.php" method="post">
			
<p>
			<label for="firstName">Name:</label>
			<input type="text" name="first_name" id="firstName">
			</p>

			
<p>
			<label for="lastName">Comment:</label>
			<input type="text" name="last_name" id="lastName">
			</p>

			<input type="submit" value="Submit">
		</form>
		<?php

// Username is root
$user = 'admin';
$password = '12345678';

// Database name is geeksforgeeks
$database = 'TestRDS';

// Server is localhost with
// port number 3306
$servername='database-1.cixaez8np9ic.eu-central-1.rds.amazonaws.com';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM myTable ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
	</center>
	
	<section>
		<h1>HAProject</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>Name</th>
				<th>Comment</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['name'];?></td>
				<td><?php echo $rows['comment'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>
</html>
