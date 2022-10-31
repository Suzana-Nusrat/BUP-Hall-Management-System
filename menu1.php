<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="menu1.css">
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
    
    </nav>
    <hr class="line">

    <div id="main-content">
      <h2>All Records</h2>
      <?php
      $con = mysqli_connect("localhost", "root", "", "hall_management_system") or die("Connection Failed");
      $sql = "SELECT * FROM updatemenu";
      $result = mysqli_query($con, $sql) or die("Query failed");

      if (mysqli_num_rows($result) > 0) {

      ?>
        <a href="add_data.php"><input type="submit" value="Add Item" class="add"></a>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Date</th>
              <th scope="col">Day</th>
              <th scope="col">Meal Type</th>
              <th scope="col">Meal Item</th>
              <th scope="col">Price(Tk.)</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {

            ?>
              <tr class="table-striped">
                <td><?php echo $row['Dates']; ?></td>
                <td><?php echo $row['Day']; ?></td>
                <td><?php echo $row['Mealtype']; ?></td>
                <td><?php echo $row['Mealitem']; ?></td>
                <td><?php echo $row['Price']; ?></td>
                <td>
                  <!-- <a href="edit_data.php?sl=
                "><input type="submit" value="Edit" class="edit"></a> -->
                  <a href="delete.php?sl=<?php echo $row['SL']; ?>"><input type="submit" value="Delete" class="delete"></a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      <?php   } ?>
    </div>

</body>

</html>