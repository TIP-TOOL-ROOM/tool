<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id_num = $_POST['id_num'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$age = $_POST['age'];
		$program = $_POST['program'];
		$email = $_POST['email'];
		$year = $_POST['year'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(id_num,name,address,age,program,email,year) 
		VALUES('$id_num','$name','$address','$age','$program','$email','$year')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
?>