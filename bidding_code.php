<?php
include 'database.php';
$b_date=$_POST['date'];
$p_name=$_POST['p_name'];
$cart=$_POST['catry'];
$price=$_POST['price'];
$bid_prc=$_POST['bid_price'];
$name=$_POST['name'];
$mail=$_POST['mail'];
$addrs=$_POST['add'];
$phn=$_POST['ph'];

$old_prc=$_POST['price1'];
if($bid_prc<$old_prc)
{
	?>
	<script>
	  alert("ERROR!..Enter higher bid price");
	  window.location="user_profile.php";
	</script>
	<?php
}
else{
$ins="insert into bidding values ('','".$b_date."','".$p_name."','".$cart."','".$price."','".$bid_prc."','".$name."','".$mail."','".$addrs."','".$phn."')";
$rel=mysqli_query($con,$ins)or die(mysqli_error($con));
if($rel)
{
	//echo "ok";
	header("Location:user_profile.php");
}
else
{
	echo "Fail";
}
}
?>