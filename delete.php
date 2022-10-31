<?php

include 'connection.php';

if (isset($_GET['sl'])){
    $sl= $_GET['sl'];
    $sql = "DELETE FROM updatemenu WHERE  SL = $sl" ;
    $con-> query($sql);
}

header("Location: http://localhost/hall_management_system/menu1.php");

mysqli_close($con);
?>