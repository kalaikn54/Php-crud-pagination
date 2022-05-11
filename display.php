<!DOCTYPE html>

<?php
include 'connection.php';
?>
<html lang="en">
<head>
  
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>


    <div class="container my-5">

    <button class="btn btn-primary"><a href="user.php" class="text-light">Create User</button>
    <button class="btn btn-primary"><a href="pagination.php" class="text-light">pagination</button>
    <div>


    <table class="table">
  <thead>
    <tr>
      <th scope="col">sl nO</th>

      <th scope="col">first name</th>
      <th scope="col">last name</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>


  <?php

  $sql="select * from `crud operation 1`";
  $result=mysqli_query($con,$sql);
  if($result){
     while ($row=mysqli_fetch_assoc($result)){

        $ID=$row['ID'];
        $fname=$row['fname'];
        $lname=$row['lname'];
        $email=$row['email'];
       
        $password=$row['password'];
    echo '<tr>
    <th scope="row">'.$ID.'</th>
    <td> '.$fname.' </td>
    <td> '.$lname.'</td>
    <td> '.$email.'</td>
    
    <td> '.$password.'</td>
    <td>
    <button class="btn btn-primary" ><a href="update.php? updateId='.$ID.'"class="text-light">Update</button>
    <button class="btn btn-danger"><a href="delete.php? deleteID='.$ID.'">Delete</button>
    </td>
  </tr>';
     
     }
  }
  ?>

  </tbody>
</table>




</body>
</html>