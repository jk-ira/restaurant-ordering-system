<?php
include("init.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery-3.6.3.min.js"></script>
	<script >
		$(document).ready(function(){
			//hide the ring div
			var ring = document.getElementById("ring");
			ring.classList.toggle("hidden");

			//load new table content every 5 sec
			setInterval(function(){
				$("#my-table").load("load_table.php");
			},5000);

			//detect new order every 5 sec
			setInterval(function(){
				$("#test").load("detect_new_order.php");
			},5000);

			//hide the #ring div on button click
			var viewOrder = document.getElementById("view-order");
			viewOrder.onclick = function(){
				
				ring.classList.toggle("hidden");
			}



		});


	</script>
</head>
<body>
	<div id="top-part">
		<h1>Admin side</h1>
		<br>
		<table id="my-table">

			<?php

				echo "<tr>
							<th>order number</td>
							<th>Customer name</td>
							<th>Customer Order</td>
							<th>Order Type</td>
						</tr>";

			$query = "SELECT * FROM orders";
			$result = mysqli_query($conn, $query);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {


					echo "<tr>";

					echo "<td>";
					echo $row['id'];
					echo "</td>";

					echo "<td>";
					echo $row['customer_name'];
					echo "</td>";

					echo "<td>";
					echo $row['my_order'];
					echo "</td>";

					echo "<td>";
					echo $row['type'];
					echo "</td>";

					echo "</tr>";
				}
			}
			else{

			}
			?>

		</table>
	</div>
	<div id="test"></div>
	<div id='ring'>
		<button id="view-order">View New Order</button>
	</div>


</body>
</html>