<?php

include('connection.php');
$query = "select * from notice";
$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Remarks - Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="remarks_ad.css">

	<style>
		table,
		td,
		th {
			border: 1px solid;
		}


		table {
			font-size: 20px;
			border-collapse: collapse;
			margin: 2px auto;
			color: #000;

		}

		td {
			padding: 10px;
		}

		th {
			padding: 15px;

		}
	</style>

</head>

<body>
	<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> -->

	<img src="images/bupim.png">
	<section>
		<span><label class="bup">Bangladesh University of Professionals</label>
			<a href="logout.php" class="logoutStyle">Logout</a>
		</span>
	</section>

	<section class="header">
		<nav>
			<div class="nav-links" id="navLinks">
				<!-- <i class="fa fa-times" onclick="hideMenu()"></i> -->
				<ul>
					<li><a href="./index.php">Home</a></li>
					<li><a href="./menu.php">Menu</a></li>
					<li><a href="./mealrequest.php" class="active">Meal Entry</a></li>
					<li><a href="./bill_stu.php">Bill & Payment</a></li>
					<li><a href="./notice_stu.php">Notice</a></li>
					<li><a href="./remarks_stu.php">Remarks</a></li>
				</ul>
			</div>

		</nav>
		<hr class="line">
	</section>

	<div class="container">

		<table>
			<tr>
				<th>Date</th>
				<th>Title</th>
				<th>Post</th>
			</tr>

			<?php

			while ($rows = mysqli_fetch_assoc($result)) {

			?>

				<tr>

					<td><?php echo  $rows['Date'] ?></td>
					<td><?php echo  $rows['title'] ?></td>
					<td><?php echo  $rows['post'] ?></td>
				</tr>



			<?php

			}

			?>

		</table>
	</div>
</body>

</html>