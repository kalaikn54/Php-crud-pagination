<?php
include 'connection.php';
if(isset($_GET['deleteID'])){
    $ID=$_GET['deleteID'];
    $sql="delete from `crud operation 1` where id=$ID";
    $result=mysqli_query($con,$sql);
    if($result){
       

        
  echo ("<script LANGUAGE='JavaScript'>
  window.alert('ssuccessfully deleted');
  window.location.href='display.php';
  </script>");
    }
    else{
        die("Connection failed: " . mysqli_connect_error());   
    }

}
?>