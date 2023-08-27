<?php
session_start();
if(isset($_SESSION['name']))
{
    session_destroy();
    header("Location:index.html");
}
else{
    // include('databse.php');
    session_destroy();
    header("Location:index.html");
}
  
?>