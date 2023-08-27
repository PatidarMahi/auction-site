<?php

include 'database.php';

 $admin=$_POST['name'];
 $password=$_POST['pwd']; 
 

  $a="SELECT * FROM admin WHERE  email ='$admin' and password='$password'"; 
  $res=mysqli_num_rows(mysqli_query($con,$a));		 																																																													
  if($res)
  {
  //echo "ok";
    $_SESSION['admin_name']=$admin;
  header("location:admin_profile.php");
  } 
  
  else
  {
  echo "invalid user id and password";
  }
