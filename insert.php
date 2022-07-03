<?php
include 'function.php';
include 'header.php';
if (isset($_POST['submit'])){


$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];

$obj= new Shuvo;

$columns=['name','phone','email','address'];

$values = array($name,$phone,$email,$address);


$obj->insert($columns,$values,'users');

header('location: index.php');

}
?>
<form action="" style="text-align: center;" method="post">
	<h3>Customer Information</h3>
	<div>
		<label>Name</label><br>
		<input type="text" name="name">
	</div>
	<div>
		<label>Phone</label><br>
		<input type="text" name="phone">
	</div>
	<div>
		<label>Email</label><br>
		<input type="text" name="email">
	</div>
	<div>
		<label>Address</label><br>
		<input type="text" name="address">
	</div><br>
	<button type="submit" name="submit" class="btn btn-success">Submit</button>
	<a href="index.php" class="btn btn-success">Home</a>
</form>