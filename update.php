<?php
include 'function.php';
include 'header.php';

$obj=new Shuvo;
if(isset($_GET['id'])){
$id=$_GET['id'];
$row=$obj->profile($id,'users');
}

if(isset($_POST['submit'])){

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];


$columns=['name','phone','email','address'];
$values=array($name,$phone,$email,$address);

$obj->insert($columns,$values,'users');

header('location: index.php');



}


?>

<form action=""  style="text-align: center;" method="post">

          <h3>Update Usre Information</h3>
        <div class="form-group">
            <label for="text" class=" ">Name:</label><br>
            <input type="text" class=" " name="name" value="<?php  echo $row['name'];?>" id="name">
          </div>
          <div class="form-group">
            <label for="text" class=" ">Phone:</label><br>
            <input type="text" class=" " name="phone" value="<?php  echo $row['phone'];?>" id="phone">
          </div>
          <div class="form-group">
            <label for="text" class=" ">Email:</label><br>
            <input type="text" class=" " name="email" value="<?php  echo $row['email'];?>" id="email">
          </div>
<div class="form-group">
            <label for="text" class=" ">Address:</label><br>
            <input type="text" class=" " name="address" value="<?php  echo $row['address'];?>" id="address">
          </div>
          
      <div class="">
        <button type="submit" name="submit" value="Submit" class="btn btn-success">Submit</button> 
        <a href="index.php" class="btn btn-success">Back</a>
     
      </div>
    </form>