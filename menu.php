<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="menu.css">
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
          <li><a href="index.php">Home</a></li>
          <li><a href="menu.php">Menu</a></li>
          <li><a href="mealrequest.php">Meal Entry</a></li>
          <li><a href="bill_stu.php">Bill & Payment</a></li>
          <li><a href="notice_stu.php">Notice</a></li>
          <li><a href="remarks_stu.php">Remarks</a></li>
        </ul>
      </div>
      <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <hr class="line">
  

  <div id="main-content">
    <h2>Today's Menu</h2>
    <?php
    include 'connection.php';
        $id= 'CURDATE()';
    $sql = "SELECT * FROM updatemenu WHERE Dates= CURDATE()";
    $result = mysqli_query($con, $sql) or die("Query failed");
    if (mysqli_num_rows($result) > 0) {
    ?>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Meal Type</th>
            <th scope="col">Meal Item</th>
            <th scope="col">Price(Tk.)</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <tr class="table-striped">
              <!-- <td><?php echo $row['Dates']; ?></td> -->
              <!-- <td><?php echo $row['Day']; ?></td> -->
              <td><?php echo $row['Mealtype']; ?></td>
              <td><?php echo $row['Mealitem']; ?></td>
              <td><?php echo $row['Price']; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    <?php   } ?>
  </div>
</body>

</html>