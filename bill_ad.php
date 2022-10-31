<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bill & Payment Portal</title>
  <link rel="stylesheet" href="bill_admin.css">


  <style>
     .head {
    text-align: center;
    margin: 15px;
    font-size: 20px;
  }



  </style>
</head>

<body >


  <!-- ************new************ -->

  <img src="images/bupim.png">
    <section>
        <div><label class="bup">Bangladesh University of Professionals</label></div> 
        <div class="loginstatus">
            <div style="visibility:hidden;">
                <div>
                    <label class="semesterstatus">Current</label>
                    <div>
                        <a id="ctl00_lblLogout" class="logoutStyle" href="javascript:__doPostBack('ctl00$lblLogout','')">Logout</a>
                        <div class="AvatarStatusPanel">
                            <img id="ctl00_imgAvatar" src="" style="border-width:1px;border-style:solid;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="header"> 
        <nav>
          <div class="nav-links" id="navLinks">
            <!-- <i class="fa fa-times" onclick="hideMenu()"></i> -->
            <ul>
                <li><a href="./index.html">Home</a></li>
                <li><a href="./menu.html">Menu</a></li>
                <li><a href="./mealrequest.php" class="active">Meal Entry</a></li>
                <li><a href="./bill_stu.html">Bill & Payment</a></li>
                <li><a href="./notice_stu.html">Notice</a></li>
                <li><a href="./remarks-stu.php">Remarks</a></li>
            </ul>
            </div>
            <!-- <i class="fa fa-bars" onclick="showMenu()"></i> -->
        </nav>
        <hr class="line">
    </section>


    

    <?php

    include('connection.php') ;

 

      if(isset($_POST['date']) &&  isset($_POST['month']) &&  isset($_POST['name']) && isset($_POST['sid'])  && isset($_POST['dept']) && isset($_POST['building'])){

      $date =  $_POST['date'];
      $month = $_POST['month'];
      $name = $_POST['name'] ;
      $sid = $_POST['sid'] ;
      $dept = $_POST['dept'] ;
      $building = $_POST['building'] ;

      $sql ="INSERT INTO bill_ad (Date, Month, Name, ID, Department, Building)   VALUES ( '$date ' , '$month',  '$name ' , '$sid' , '$dept' , '$building ' ) " ;



      
      if(mysqli_query($conn,$sql) ){
        
        echo '<script>alert("Submitted Successfully")</script>';
      }

      else{

        echo '<script>alert("Error")</script>';

    

      }

    }

 

    ?>



  <div class="container">
    <form action="bill_ad.php.php" method="POST" onsubmit="return Validation()">

      <p class= "head">Bill History</p>

     
      <div class="row">
      <div class="col-25">
          <label for="date">Date </label>
        </div>
        <div class="col-75">
          <input type="date" id="date" name="date" placeholder="Enter Date" >
        </div>
      </div>

      <div class="row">
      <div class="col-25">
          <label for="month">Month </label>
        </div>
        <div class="col-75">
          <input type="month" id="month" name="month" placeholder="Enter Month" >
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="name">Name </label>
        </div>
        <div class="col-75">
          <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="sid">Student ID </label>
        </div>
        <div class="col-75">
          <input type="text" id="sid" name="sid" placeholder="Enter your Id" required>
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="dept">Department </label>
        </div>
        <div class="col-75">
          <input type="text" id="dept" name="dept" placeholder="Enter your department" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="building">Building </label>
        </div>
        <div class="col-75">
          <input type="text" id="building" name="building" placeholder="Enter your building number" required>
        </div>
      </div>




      <div class="row">
        <input type="submit" value="submit">
      </div>
    </form>
  </div>





</body>

</html>