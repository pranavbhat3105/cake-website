<!DOCTYPE html>
<html lang="en">

<head>
	<title>GFG- Store Data</title>
</head>

<body>
	<center>
		<h1>Storing Form data in Database</h1>

		<form action="insert.php" method="post">
			
			
<p>
				<label for="firstName">First Name:</label>
				<input type="text" name="first_name" id="first_name">
			</p>



			
			
<p>
				<label for="lastName">Last Name:</label>
				<input type="text" name="last_name" id="last_name">
			</p>


			
<p>
				<label for="Date">Date:</label>
				<input type="date" name="date" id="date">
			</p>


			
			
			
<p>
				<label for="Address">Address:</label>
				<input type="text" name="address" id="address">
			</p>


			<label for="flavour">Cake Flavour:</label>
			<select name="flavour" id="flavour" class="form-control">
                                            <option value="Black Forest">Black Forest</option>
                                            <option value="Yellow Butter Cake">Yellow Butter Cake</option>
                                            <option value="Pound Cake">Pound Cake</option>
                                            <option value="Red Velvet Cake">Red Velvet Cake</option>
                                            <option value="Carrot Cake">Carrot Cake</option>
                                            <option value="Sponge Cake">Sponge Cake</option>
                                            <option value="Genoise Cake">Genoise Cake</option>
                                            <option value="Chiffon Cake">Chiffon Cake</option>
                                        </select>
			
			
<p>
				<label for="emailAddress">Email Address:</label>
				<input type="text" name="email" id="email">
			</p>


			
			<input type="submit" value="Submit">
		</form>
	</center>
</body>

</html>
