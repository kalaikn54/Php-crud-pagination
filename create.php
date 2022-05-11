
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
  window.alert('successfully data inserted');
  window.location.href='display.php';
  </script>");
}
else{
  die("Connection failed: " . mysqli_connect_error());
}

}
?>



<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}


.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}


.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}


.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;

}


.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}


.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}


.form-container .cancel {
  background-color: red;
}


.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>
<p><b>Click on the button at the bottom of this page to open the login form.<b></p>
<p>Note that the button and the form is fixed - they will always be positioned to the bottom of the browser window.</p>



<button class="open-button" onclick="openForm()">Open Form</button>

<div class= "form-popup" id="myForm">
  <form  method="post" class="form-container">
    <h1>Login</h1>
    <label><b>Name</b></label>
    <input type="text" placeholder="Enter first  Name" autocomplete="off" name="fname" required >

    <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control"  placeholder="Enter last name"  autocomplete="off" name="lname" required >
  </div>

    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" autocomplete="off"  name="email" required>



    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" autocomplete="off"  name="password" required>

    <button type="submit" name="submit" class="btn">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
