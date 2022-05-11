
<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>pagination</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>
<div class="container my-5">
<table class="table">
  <thead class="bg-dark text-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">email</th>
	  <th scope="col">password</th>
    </tr>
  </thead>
  <tbody>
	  <?php
	  $sql="select * from  `crud operation 1` ";
    $result=mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
    $numberpages=8;
    $totalpages=$num/ $numberpages;
    //echo $totalpages;
//pagination buttons
for($btn=1;$btn<=$totalpages;$btn++)
{
  echo '<button class="btn btn-dark mx-1 my-3"><a href="pagination.php?page='.$btn.'"class="text-light">'.$btn.'</a></button>';
}

if(isset($_GET['page'])){

  $page=$_GET['page'];
  //echo $page;
}else{
$page=1;
}
$startinglimit=($page-1)*$numberpages;
$sql="select * from  `crud operation 1` limit " .$startinglimit.','.$numberpages;
$result=mysqli_query($con,$sql);


    //echo $num;

 
    while($row=mysqli_fetch_assoc($result)){
      echo '<tr>
      <th scope="row">'.$row['ID'].'</th>
      <td>'.$row['fname'].'</td>
      <td>'.$row['lname'].'</td>
      <td>'.$row['email'].'</td>
      <td>'.$row['password'].'</td>
    </tr>';
    }
	  ?>
    
   

  </tbody>
</table>

</div>	
</body>
</html>