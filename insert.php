<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff


		
		$conn = mysqli_connect("localhost", "root", "root1234", "cakeshop");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$date = $_POST['date'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$flavour = $_POST['flavour'];
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO cakeshop VALUES ('$first_name',
			'$last_name','$date', '$address','$email', '$flavour')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Thankyou for your order. Data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$first_name\n $last_name\n "
				. " \n$date\n $address\n $email\n  $flavour");
 
				
			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>

		<div>
			<a href="./index.html">Click here</a>
		</div>
	</center>
</body>

</html>

