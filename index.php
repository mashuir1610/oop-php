<?php
include 'function.php';
include 'header.php';
 
$obj= new Shuvo;

?>
<table class="table table-hovered">
	<thead>
	<tr>
		<th>#</th>
		<th>Id</th>
		<th>Name</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Address</th>
	</tr>
	</thead>
	<tbody>

<?php
$rows = $obj->show("users");

foreach ($rows as $key => $row){
?>
<tr>
		<td><?php echo $key+1?></td>
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['name']?></td>
		<td><?php echo $row['phone']?></td>
		<td><?php echo $row['email']?></td>
		<td><?php echo $row['address']?></td>
		<td><a href="view.php?id=<?= $row['id']?>" class="btn btn-primary">View</a>

			<a href="update.php?id=<?= $row['id']?>" class="btn btn-success">Edit</a>
			
			<a href="delete.php?id=<?= $row['id']?>" class="btn btn-danger">Delete</a></td>
	</tr>
	<?php
}
?>
</table>
</tbody>
	<a href="insert.php" class=" btn btn-success">Insert</a>
