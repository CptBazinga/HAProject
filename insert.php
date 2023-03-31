<!DOCTYPE html>
<html lang="en">
<head>
	<title>GFG- Store Data</title>
</head>
<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("database-1.cixaez8np9ic.eu-central-1.rds.amazonaws.com", "admin", "12345678", "myTable");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO myTable VALUES ('$first_name',
			'$last_name')";
		
		// if(mysqli_query($conn, $sql)){
		// 	echo "<h3>data stored in a database successfully."
		// 		. " Please browse your localhost php my admin"
		// 		. " to view the updated data</h3>";

		// 	echo nl2br("\n$first_name\n $last_name\n "
		// 		. "");
		// } else{
		// 	echo "ERROR: Hush! Sorry $sql. "
		// 		. mysqli_error($conn);
		// }
		
		// Close connection
		mysqli_close($conn);
		?>
		<h1>Mohammed Waleed Eleraky \n Cloud Infrastructure As a Code IaC \n Bachelor Project</h1>
		<h2>Storing Form data in Database</h2>
		<form action="index.php" method="post">
			
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
$database = 'TestDB';

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
