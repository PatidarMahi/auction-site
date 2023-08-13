<?php
ob_start();
include 'database.php';

$name = $_POST['name'];
$email = $_POST['mail'];
$pass = $_POST['pwd'];
$dob = $_POST['dob'];
$gender = $_POST['gen'];
$address = $_POST['add'];
$phne = $_POST['ph'];

$verify="SELECT * FROM users where email='$email'";
$res1=mysqli_query($con,$verify);
if($res1==true)
{
    $count=mysqli_num_rows($res1);
    if($count>=1)
    {
        ?>
         <script>
        alert("Email already exist!!");
        window.location = "user.php";
         </script>
        <?php
        
    }
}
$i = "insert into users values('','" . $name . "','" . $pass . "','" . $email . "','" . $phne . "','" . $address . "','" . $gender . "','" . $dob . "')";

$vv = mysqli_query($con, $i) or die("error" . mysqli_error($con));

if ($vv == true) {
?>
    <script>
        alert("Registered successfully! WELCOME TO NITJSR AUCTION SITE!...");
        window.location = "User_Login_MERA.php";
    </script>
<?php
    // header("location:user.php");
} else {
?>
    <script>
        alert("Sorry...! Not Registered.. ");
        window.location = "user.php";
    </script>
<?php

    // echo ("Not registered");
}
?>