<?php
require 'connection.php';
$id=$_POST['fullname'];
$result = mysqli_query($mysqli, "DELETE FROM donation_data WHERE fullname=$id");
header("Location:people_data.php");
?>