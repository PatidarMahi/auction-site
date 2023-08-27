<?php
session_start();
$ses = $_SESSION['name'];
include("database.php");
$id = $_GET['id'];
error_reporting(0);
?>

<!DOCTYPE html>

<html>

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NITJSR Online Auction Site</title>
  <!-- <link href="templatemo_style.css" rel="stylesheet" type="text/css" /> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


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

    #templatemo_left_section {
      color: white;
    }
  </style>
</head>

<body>
  <!-- Nav Bar -->
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
          <a class="nav-link" href="add_product.php">Add Products</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="index.html">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div id="templatemo_left_section">

    <div id="templatemo_left_content">

      <h1>BIDDING FOR YOUR PRODUCT</h1>

      <form action="bidding_code.php" method="post" enctype="multipart/form-data" name="form3" id="form3">
        <table width="100%" border="0">
          <?php
          $s = mysqli_query($con, "select * from add_products where id=$id ");
          while ($row = mysqli_fetch_assoc($s)) {
            $p_name=$row['productd_name'];
            //echo $p_name;
            $sql2="SELECT * FROM bidding WHERE p_name='$p_name' ORDER BY bid_prc DESC LIMIT 1";
            $res2=mysqli_query($con,$sql2);
            if($res2==true)
            {
              $row1=mysqli_fetch_assoc($res2);
              $bid_prc=$row1['bid_prc'];
              //echo $row1['bid_prc'];
            }
            else
            {
              $bid_prc=$row1['price'];
              echo "NO Bidding";
            }
          ?>
            <tr>
              <td>IMAGE</td>
              <td>:</td>
              <!-- <td><img name="file" src="upload/<?php echo $row['photo']; ?>" alt="" width="130" height="121" /></td> -->
              <td><img src="data:photo/jpg;charset=utf8;base64,<?php echo base64_encode($row['photo']); ?>" alt="" width="130" height="121" /></td>
              
            </tr>
            <tr>
              <td>BIDDING DATE</td>
              <td>:</td>
              <td><label for="textfield"></label>
                <input type="" name="date" id="date" value="<?php echo date("Y-m-d");?>" readonly/>
              </td>
            </tr>
            <tr>
              <td width="26%">PRODUCT NAME</td>
              <td width="7%">:</td>
              <td width="67%"><label for="p_name"></label>
                <input name="p_name" type="text" id="p_name" value="<?php echo $row['productd_name']; ?>" size="30" readonly="readonly" />
              </td>
            </tr>
            <tr>
              <td>CATEGORIES</td>
              <td>:</td>
              <td><input name="catry" type="text" id="catry" value="<?php echo $row['category']; ?>" size="30" readonly="readonly" /></td>
            </tr>
            <tr>
              <td>PRICE</td>
              <td>:</td>
              <td><input name="price" type="text" id="price" value="<?php echo $row['price']; ?>" size="30" readonly="readonly" /></td>
            </tr>
            <tr>
              <td>CURRENT BIDDING PRICE</td>
              <td>:</td>
              <td><input name="price1" type="text" id="price" value="<?php echo $bid_prc; ?>" size="30" readonly="readonly" /></td>
            </tr>
            <!-- <tr>
              <td>CURRENT BIDDING PRICE</td>
              <td>:</td>
              <td><input name="price" type="text" id="price" value="<?php echo $row['price']; ?>" size="30" readonly="readonly" /></td>
            </tr> -->
            <tr>
              <td>BIDDING COST</td>
              <td>:</td>
              <td><input name="bid_price" type="number" id="bid_price" size="30" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3">
                <h1>Personal Info</h1>
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <?php
             if(isset($_SESSION['user_id']))
             {
               $user_id=$_SESSION['user_id'];
              $sql="SELECT * FROM users WHERE id='$user_id'";
              $res1=mysqli_query($con,$sql);
              if($res1)
              {
                $row=mysqli_fetch_assoc($res1);
                $username=$row['name'];
                $email=$row['email'];
                $phn=$row['contact'];
              }
             }
            ?>
            <tr>
              <td>NAME</td>
              <td>:</td>
              <td><input name="name" type="text" id="name" size="30" value="<?php echo $username;?>" readonly/></td>
            </tr>
            <tr>
              <td>E-MAIL</td>
              <td>:</td>
              <td><input name="mail" type="text" id="mail" size="30" value="<?php echo $email;?>" readonly/></td>
            </tr>
            <tr>
              <td>ADDRESS</td>
              <td>:</td>
              <td><label for="add"></label>
                <textarea name="add" id="add" cols="24" rows="3" required></textarea>
              </td>
            </tr>
            <tr>
              <td>PHONE NO</td>
              <td>:</td>
              <td><input name="ph" type="number" id="ph" size="10" value="<?php echo $phn;?>" readonly/></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><input type="submit" name="button" id="button" value="Submit" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>

          <?php
          }
          ?>
        </table>
      </form>
      <p>&nbsp;</p>
    </div>

  </div>


  <footer id="footer">

    <p>© NITJSR Auction Online Site. All Rights Reserved</p>

  </footer>
</body>

</html>