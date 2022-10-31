<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="notice_ad.css" />
    <title>Notices</title>
  </head>
  <body>
    <img src="images/bupim.png">
<section>
<span><label class="bup">Bangladesh University of Professionals</label>
    <a href="logout.php" class="logoutStyle">Logout</a>
</span>
    
<section class="header"> 
    <nav>
      <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
          <li><a href="index1.php">Home</a></li>
          <li><a href="menu1.php">Menu</a></li>
          <li><a href="mealreq_ad.php">Meal Entry</a></li>
          <li><a href="bill_ad.php">Bill & Payment</a></li>
          <li><a href="notice_ad.php">Notice</a></li>
          <li><a href="remarks_ad.php">Remarks</a></li>
        </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <hr class="line">

    <?php
  include('connection.php');
  if (isset($_POST['date']) && isset($_POST['title']) && isset($_POST['post'])) {
    $date = $_POST['date'];
    $title = $_POST['title'];
    $post = $_POST['post'];
    $sql = "INSERT INTO notice (Date, title, post)   VALUES ('$date' , '$title' , '$post') ";
    if (mysqli_query($con, $sql)) {
      echo '<script>alert("Submitted Successfully")</script>';
    } else {
      echo '<script>alert("Error")</script>';
    }
  }
  ?>
  <div class="container">
    <form action="notice_ad.php" method="POST">
      <p id="form_head">Add Notice</p>
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
          <label for="building">Title</label>
        </div>
        <div class="col-75">
          <input type="text" id="building" name="title" placeholder="Enter the Title" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="comment">Comment</label>
        </div>
        <div class="col-75">
          <textarea id="comment" name="post" placeholder="Your comments will be annonymous" style="height:200px"></textarea>
        </div>
      </div>
      <div class="row">
        <input type="submit" value="Post" name="submit">
      </div>
    </form>
  </div>
</body>
</html>