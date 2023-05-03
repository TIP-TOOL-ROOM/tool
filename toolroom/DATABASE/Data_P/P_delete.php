<?php

include_once("P_Connect.php");

$id_num = $_GET['id_num'];

$result = mysqli_query($mysqli, "DELETE FROM users WHERE id_num=$id_num");

header("Location:index.php");
?>