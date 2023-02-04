<?php
include("init.php");

if (isset($_POST["submit"])) {
	$name = $_POST['name'];
	$order_item = $_POST['order-item'];
	$order_type = $_POST['order-type'];

	//query to add a new order on orders table
	$query = "INSERT INTO orders (customer_name, my_order, type) VALUES ('$name', '$order_item','$order_type')";

	$result = mysqli_query($conn, $query);

	if ($result) {
		echo ('<script>alert("order placed ")</script>');
	}else{
		echo mysqli_error($conn);
	}

}


?>
<DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Order</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1>Client Side</h1>
	<form method="post">
		<input type="text" name="name" placeholder="What's your name...">
		<input type="text" name="order-item" placeholder="What's your order...">
		<select name="order-type">
			<option name="eat-in" value="Eat in">Eat in</option>
			<option name="Take away" value="Take away">Take away</option>
			<option name="delivery" value="Delivery">Delivery</option>
		</select>
		<button name="submit">Place Order</button>
	</form>

	<a href="admin.php" target="-blank"><p>Open the admin dashboard</p></a>

</body>
</html>