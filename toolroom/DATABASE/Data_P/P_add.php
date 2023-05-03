<?php

	if(isset($_POST['Submit'])) {
		$id_num = $_POST['id_num'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$age = $_POST['age'];
		$email = $_POST['email'];
		
		include_once("P_Connect.php");
				
		$result = mysqli_query($mysqli, "INSERT INTO users(id_num,name,address,age,email) 
		VALUES('$id_num','$name','$address','$age','$email')");

		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
?>