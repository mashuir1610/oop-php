<?php
include 'function.php';
include 'header.php';
?>

<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
<tbody>

<?php
$id= $_GET['id'];

$obj= new Shuvo;

$row = $obj->profile($id,'users');

?>

<tr>
    <th>ID</th>
    <td><?php  echo $row['id'];?></td>
  </tr>
  <tr>
    <th>Name</th>
    <td><?php  echo $row['name'];?></td>
  </tr>
  <tr>
    <th>Phone</th>
    <td><?php  echo $row['phone'];?></td>
  </tr>
  <tr>
    <th>Email</th>
    <td><?php  echo $row['email'];?></td>
  </tr>
  <tr>
    <th>Address</th>
    <td><?php  echo $row['address'];?></td>
  </tr>
                 
</tbody>
</table>

<form action="index.php">
    <input type="submit" class="btn btn-success" value="Home" />
</form>