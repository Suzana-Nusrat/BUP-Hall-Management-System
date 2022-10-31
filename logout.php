
<?php

  include 'connection.php';

  session_start();

  session_unset();

  session_destroy();

  header("Location: http://localhost/hall_management_system/login.php")

?>