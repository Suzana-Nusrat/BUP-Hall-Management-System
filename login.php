<?php   
  require('connection.php');
  session_start();
  
  #for login
    
    if($_SERVER["REQUEST_METHOD"] =="POST"){

      $name= $_POST["userid"];
      $pass= $_POST["password"];

      $sql= "select * from login where userid='".$name."'  AND password='".$pass."' " ;

      $result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

      $row = mysqli_fetch_assoc($result);

      if ($row["usertype"] == "student") {
        
        header("Location: index.php");
      }

      elseif($row["usertype"] == "admin") {
        
        header("Location: index1.php");
      }

      else{
        echo "Incorrect userid or password";
      }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" type="text/css" href="fontawsome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>Login</title>
</head>
<body>
    <h1>
        BUP Student Hall Management System
    </h1>

    <div class="container">
        <div class="header">
            <p><b>BANGLADESH UNIVERSITY OF PROFESSIONALS</b></p>
            <img src="images/bupim.png">
            <h5>Enter your BUP ID and Password </h5>
        </div>
        <div class="main">
            <form action="login.php" method="post">
                <span>
                    <i class="fa-solid fa-user" ></i>
                <input type="text" placeholder="username" name="userid" required>
                </span><br>
                <span>
                    <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="password" name="password" id="password" required>
                </span><br>
                    <p><a href=""><b>Forgot password?</b></a></p><br>
                <button type="submit">Login</button><br>
            </form>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>