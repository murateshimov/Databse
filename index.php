<!DOCTYPE html>
<html>
<head>
	<title>Database Registration</title>
</head>
<body>
	<center>
		<h2>Database Registration</h2>
		<form action="insert.php" method="post">
			<label>ID:</label><input type="number" name="ID"><br>

			<label>Name:</label><input type="text" name="name"><br>

			<label>Surname:</label><input type="text" name="surname"><br>

			<label>Groups:</label><input type="text" name="groups"><br>

			<button type="submit" name="submit">Submit</button>
			<button type="reset" name="reset">Reset</button>
		</form>
	</center>
</body>
</html>