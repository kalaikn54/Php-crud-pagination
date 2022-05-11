<!DOCTYPE html>

<?php
include 'connection.php';
$ID=$_GET['updateId'];
$sql="select * from `crud operation 1` where ID=$ID";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$fname=$row['fname'];
$lname=$row['lname'];
 $email=$row['email'];
 $password=$row['password'];


if(isset($_POST['submit'])){
    
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];

$password=$_POST['password'];

$sql="update `crud operation 1` set id=$ID,fname='$fname',lname='$lname',email='$email',password='$password' where ID='$ID'";

$result=mysqli_query($con,$sql);
if($result){
  


  echo ("<script LANGUAGE='JavaScript'>
  window.alert('ssuccessfully updated');
  window.location.href='display.php';
  </script>");

}
else{
  die(mysqli_error($con));
}
}
?>






<html lang="en">
<head>
 
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container my-5">
<h1><b>Update Page</b></h1>
<form method="post">
  <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control"  placeholder="Enter first  name" name="fname" autocomplete="off" value=<?php echo $fname;?>>
  </div>

  <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control"  placeholder="Enter Enter last name" name="lname" autocomplete="off" value=<?php echo $fname;?> >
  </div>


  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"  placeholder="Enter Your Email" name="email"  autocomplete="off" value=<?php echo $email;?> >
  </div>


  <div class="form-group">
    <label>password</label>
    <input type="text" class="form-control"  placeholder="Enter Your password" name="password"  autocomplete="off" value=<?php echo $password;?>>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">update</button> 
</form>



</div>
</body>
</html>