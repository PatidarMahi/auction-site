<?php
session_start();
include('database.php');
$ses = $_SESSION['name'];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NITJSR Online Auction Site</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- CSS Link -->
  <link rel="stylesheet" href="CSS/styles.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=MonteCarlo&display=swap" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Source+Serif+Pro:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap" rel="stylesheet">

  <!-- Font Awsome Link -->
  <script src="https://kit.fontawesome.com/2456171d90.js" crossorigin="anonymous"></script>

  <!-- Favicon-->
  <link rel="icon" href="images/nitjsr1.jpg">
  <style>
    body {
      background-image: url(images/download.jpeg);
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
</head>

<body>
  <!-- Nav Bar -->
  <section>
    <nav class="navbar bg-dark navbar-expand-lg navbar-dark bg-transparent">
      <a class="navbar-brand" href="#"><img class="logo" src="images/nitjsr.png" alt="Logo">&nbsp NIT JAMSHEDPUR</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="user_profile.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add_product.php">Add Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="my_bid.php">My Bidding</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  </section>

  <div style="color:white;">
    <h1>BIDDING DETAILS</h1>
    <form id="form3" name="form3" method="post" action="">
      <table width="100%" border="0" cellspacing="5">
        <tr>
      </table>
    </form>
    <table width="90%" border="0">
      <tr>
        <td width="15%" height="23">PRODUCT NAME</td>
        <td width="15%">BIDDER NAME</td>
        <td width="15%">BASE PRICE</td>
        <td width="15%">MY BIDDING PRICE</td>
        <td width="20%">CURRENT BIDDING PRICE</td>
        <td width="35%">E-MAIL</td>
        <td width="25%">CURRENT WINNER</td>
      </tr>
      <?php
      include('database.php');
      $s = mysqli_query($con, "select * from bidding where email='$ses'");
      while ($row = mysqli_fetch_assoc($s)) {
      ?>
        <tr>
          <td><?php echo $row['p_name']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['price']; ?></td>
          <td><?php echo $row['bid_prc']; ?></td>
          <td><?php echo $row['bid_prc']; ?></td>
          <td><?php echo $row['email']; ?></td>
        </tr>
      <?php
      }
      ?>
    </table>
    <p>&nbsp;</p>
  </div>
  <footer id="footer">
    <p>© NITJSR Auction Online Site. All Rights Reserved</p>
  </footer>
</body>

</html>