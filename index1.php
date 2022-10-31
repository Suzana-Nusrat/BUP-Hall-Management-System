<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>BUP Hall Management System</title>
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
        </section>
</body>

</html>