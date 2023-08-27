<?php
ob_start();
include 'database.php';

$user_name = $_POST['p_name2'];
$productd_name = $_POST['p_name'];
$category = $_POST['catry'];
$price = $_POST['price'];
$sdate = $_POST['start_d'];
$edate = $_POST['end_d'];
$photo = $_FILES["file"]["name"];
$despt = $_POST['desp'];

if($sdate>$edate)
{
     ?>
      <script>
        alert("ERROR!..Enter end date greater than start date");
        window.location="add_product.php";
      </script>
      <?php
}
else{
if (!empty($photo)) {
  //Get file info
  $filename = basename($photo);
  $filetype = pathinfo($filename, PATHINFO_EXTENSION);

  //Allow certain file formats
  $allowtypes = array('jpg', 'png', 'jpeg', 'gif');
  if (in_array($filetype, $allowtypes)) {
    $image = $_FILES['file']['tmp_name'];
    $imgcontent = addslashes(file_get_contents($image));

    // Insert image content into database
    $i = "insert into add_products values('','$user_name','$productd_name','$category','$price','$sdate','$edate','$imgcontent','$despt')";
    $vv = mysqli_query($con, $i) or die("error" . mysqli_connect_error());

    if ($vv) {
      ?>
      <script>
        alert("Product Added Successfully");
        window.location="add_product.php";
      </script>
      <?php
      // header("location:add_product.php");
    } else {
      ?>
      <script>
        alert("ERROR!..Product Not Added");
        window.location="add_product.php";
      </script>
      <?php
      // echo ("Not registed");
    }
  } else {
    $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
    echo $statusMsg;
  }
}
}
?>