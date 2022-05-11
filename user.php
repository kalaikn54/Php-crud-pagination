<!DOCTYPE html>

<?php
include 'connection.php';
if(isset($_POST['submit'])){

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="insert into `crud operation 1`(fname,lname,email,password)values('$fname','$lname','$email','$password')";

$result=mysqli_query($con,$sql);
if($result){
 
  echo ("<script LANGUAGE='JavaScript'>
  window.alert('Succesfully  created');
  window.location.href='display.php';
  </script>");

}
else{
  die("Connection failed: " . mysqli_connect_error());
}

}
?>






<html lang="en">
<head>
 
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>

<div class="container my-5">
<h1><b>CREATE PAGE<b></h1>
<form method="post">
  <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control"  placeholder="Enter Your first name" name="fname" autocomplete="off">
  </div>

  <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control"  placeholder="Enter Enter last name" name="lname" autocomplete="off" >
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"  placeholder="Enter Your Email" name="email"  autocomplete="off">
  </div>

  


  <div class="form-group">
    <label>password</label>
    <input type="text" class="form-control"  placeholder="Enter Your password" name="password"  autocomplete="off">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button> 
</form>



</div>

</body>
</html>