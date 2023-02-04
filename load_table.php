<?php
include("init.php");
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
	echo "No orders yet!";
}

?>