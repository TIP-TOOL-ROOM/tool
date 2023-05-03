<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id_num = $_POST['id_num'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$age = $_POST['age'];
		$email = $_POST['email'];
		
		// include database connection file
		include_once("P_Connect.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(id_num,name,address,age,email) 
		VALUES('$id_num','$name','$address','$age','$email')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
?>