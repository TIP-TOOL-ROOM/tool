<?php

	if(isset($_POST['Submit'])) {
		$id_num = $_POST['id_num'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$age = $_POST['age'];
		$program = $_POST['program'];
		$email = $_POST['email'];
		$year = $_POST['year'];
		
		include_once("S_Connect.php");
				
		$result = mysqli_query($mysqli, "INSERT INTO users(id_num,name,address,age,program,email,year,level) 
		VALUES('$id_num','$name','$address','$age','$program','$email','$year','$level')");
		
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
?>