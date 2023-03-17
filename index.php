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
	</center>
</body>
</html>
