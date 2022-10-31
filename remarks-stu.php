<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Remarks</title>
<link rel="stylesheet" href="./remarks-stu.css">
</head>
<body>


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

    if(isset($_POST['date']) && isset($_POST['building']) && isset($_POST['comment']) ){

      $date = $_POST['date'] ;
      $building = $_POST['building'] ;
      $comment = $_POST['comment'] ;

      $sql ="INSERT INTO remarks (Date, Building, Comment)   VALUES ('$date' , '$building ' , '$comment') " ;

      if(mysqli_query($conn,$sql) ){
        
        echo '<script>alert("Submitted Successfully")</script>';
      }

      else{

        echo '<script>alert("Error")</script>';

    

      }

    }

 


    ?>

<div class="container">
  <form action="remarks-stu.php"  method="POST">



    <p id="form_head">Contact Us</p>

    <div class="row">
      <div class="col-25">
        <label for="date">Date </label>
      </div>
      <div class="col-75">
        <input type="date" id="date" name="date" required>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="building">Building  </label>
      </div>
      <div class="col-75">
        <input type="text" id="building" name="building" placeholder="Enter Your Building Number" required>
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label for="comment">Comment</label>
      </div>
      <div class="col-75">
        <textarea id="comment" name="comment" placeholder="Your comments will be annonymous" style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="submit" name="submit">
    </div>
  </form>
</div>









</body>
</html>