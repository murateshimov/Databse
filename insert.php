<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "college" ; 


$conn = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['submit']))
{
	if(!empty($_POST['ID']) && !empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['groups']))
	{
		$ID = $_POST['ID'];
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$groups = $_POST['groups'];

		$query = "insert data into form(ID, name, surname, groups) values('$ID', '$name', '$surname', '$groups')";

		$run = mysqli_query($conn, $query) or die (mysqli_error());

 
		if($run)
		{
			echo "Great Success:)";
		}
		else
		{
			echo "Oops, something went wrong:(";
		}
	}
	else 
	{
		echo "all fields required";
	}
}
?>