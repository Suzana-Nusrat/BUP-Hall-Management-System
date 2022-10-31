<?php

include('connection.php') ;
$query = "select * from remarks" ;
$result = mysqli_query($conn, $query) ;

?>
	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>Remarks - Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="remarks-admin.css">

	<style>
		table, td, th {
       border: 1px solid;
       }


		table {
			font-size:20px;
			border-collapse: collapse;
			margin: 2px auto;
			color: #000;
		
		}

		td{
			padding: 10px;
		}

		th{
			padding: 15px;

		}
	</style>
	
</head>
<body>
<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> -->



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
                <li><a href="./remarks-admin.php">Remarks</a></li>
            </ul>
            </div>
            <!-- <i class="fa fa-bars" onclick="showMenu()"></i> -->
        </nav>
        <hr class="line">
    </section>

	
<div class="container">

<table>
	<tr>
		<th >Date</th>
		<th>Building</th>
		<th>Comment</th>
	</tr>

	<?php

while($rows=mysqli_fetch_assoc($result)){



?>

<tr >

	<td><?php    echo  $rows['Date'] ?></td>
	<td><?php    echo  $rows['Building'] ?></td>
	<td><?php    echo  $rows['Comment'] ?></td>
</tr>



<?php

}



?>



</table>



</div>




</body>
</html>