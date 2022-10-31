<?php

$day=$_POST['Day'];
$mealtype=$_POST['Mealtype'];
$mealitem=$_POST['Mealitem'];
$price= $_POST['Price'];

$con = mysqli_connect("localhost", "root", "", "hall_management_system") or die("Connection Failed");

$sql = "INSERT INTO updatemenu (`Dates`,`Day`,Mealtype, Mealitem, Price) 
        VALUES (CURDATE(),'{$day}', '{$mealtype}','{$mealitem}','{$price}')";

$result = mysqli_query($con, $sql) or die("Query Unsuccessful.");


header("Location: http://localhost/hall_management_system/menu1.php");

mysqli_close($con);

?>