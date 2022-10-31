<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="add_data.css">
</head>

<body>
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
    <div id="main-content">
        <h2>Add New Record</h2>
        <?php
        $con = mysqli_connect("localhost", "root", "", "hall_management_system") or die("Connection failed");

        $sql = "SELECT * FROM updatemenu";
        $result = mysqli_query($con, $sql) or die("Query failed");

        ?>

        <form action="save_data.php" method="post">
            <table class="table">
                <tr>
                    <td>Day</td>
                    <td><input type="text" name="Day" /></td>
                </tr>
                <tr>
                    <td>Meal Type</td>
                    <td><input type="text" name="Mealtype" /></td>
                </tr>
                <tr>
                    <td>Meal Item</td>
                    <td><input type="text" name="Mealitem" /></td>
                </tr>
                <tr>
                    <td>Price(Tk.)</td>
                    <td><input type="text" name="Price" /></td>
                </tr>

            </table>

            <input class="submit" type="submit" value="Save" />

        </form>
    </div>
</body>

</html>

</body>

</html>