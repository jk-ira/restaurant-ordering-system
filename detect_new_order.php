<?php
include("init.php");

// getting number of orders on 'info' table
$queryInfo = "SELECT * FROM info";
$resultInfo = mysqli_query($conn, $queryInfo);
if (mysqli_num_rows($resultInfo) > 0) {
	while ($row = mysqli_fetch_assoc($resultInfo)) {
		$numOfOrders = $row['number_of_orders'];
	}

	//counting number of orders on 'orders' table
	$queryOrders = "SELECT * FROM orders";
	$resultOrders = mysqli_query($conn, $queryOrders);
	$countRows = mysqli_num_rows($resultOrders);


	//compairing number of orders from 'info' table to row numbers of 'orders' table

	if ($numOfOrders < $countRows) {
		//if numOfOrders is smaller, than a new order was inserted
		//the rington must play, show the ring div, update the number of orders on 'info' table

		echo '	<script>
					var ring = document.getElementById("ring");
					ring.classList.remove("hidden");
					var ringtone = new Audio("audio/order_ring.mp3");
					ringtone.play();
				</script>';

		//update the number of orders in info table
		$queryUpdate = "UPDATE info SET number_of_orders = '$countRows' WHERE id = 1";
		$resultUpdate = mysqli_query($conn,$queryUpdate);
	}

	// echo "number of orders: ".$numOfOrders." | number of rows: ".$countRows;

}
else{
	echo mysqli_error($conn);
}

?>