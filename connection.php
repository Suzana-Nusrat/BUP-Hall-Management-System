<?php

  $con = mysqli_connect("localhost","root","","hall_management_system");

  if(mysqli_connect_error()){
    echo"<script>alert('cannot connect to the database');</script>";
    exit();
  }

?>