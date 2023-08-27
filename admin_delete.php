<?php
include 'database.php';
$ur_id = $_GET['id'];

$a = "DELETE FROM users where id='$ur_id'";
$res = mysqlI_query($con, $a);

if ($res == 1) {
  //echo ("file delete")
  ?>
  <script>
  alert("data deletion success");
  window.location = "admin_profile.php";
</script>
<?php
}

if ($res == 0) {
  ?>
  <script>
  alert("data deletion failed");
  window.location = "admin_profile.php";
</script>
<?php
}
?>

<!-- <script>
  alert("data deletion success");
  window.location = "admin_profile.php";
</script> -->

<!-- <script>
  alert("data deletion failed");
  window.location = "admin_profile.php";
</script> -->