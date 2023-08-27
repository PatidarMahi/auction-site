<?php
include 'database.php';
?>
<?php
ob_start();
session_start();


 $user=$_POST['email'];
 $password=$_POST['pass']; 
   $a="SELECT * FROM users WHERE password='$password' AND email='$user'"; 
   $res=mysqli_query($con,$a);	 																																																													
  if($res==true)
  {
  //echo "ok";
  $row=mysqli_num_rows($res);	
  if($row==1)
   {
     $data=mysqli_fetch_assoc($res);
    $_SESSION['name']=$user;  
    $_SESSION['user_id']=$data['id'];
    header("location:user_profile.php");
   }
   else
   {
    ?>
    <script>
        alert("wrong username or password");
        window.location = "User_Login_MERA.php";
    </script>
<?php
   }
  
  } 
  else
  {
   echo "invalid user id or password";
  }
  ?>