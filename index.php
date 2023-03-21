<!DOCTYPE html>
<html lang="en">
<head>
	<title>GFG- Store Data</title>
</head>
<body>
	<center>
		<h1>Storing Form data in Database | This Instance's IP is $(hostname -f)</h1>
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
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$first_name\n $last_name\n "
				. "");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>
</html>
