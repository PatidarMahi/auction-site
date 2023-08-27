<?php
session_start();
if(!isset($_SESSION['name']))
{
  header("Location:User_login_MERA.php");
}
   $ses = $_SESSION['name'];
error_reporting(0);
?>

<!DOCTYPE html>

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

    #templatemo_left_content {
      color: white;
      text-align: center;
    }
  </style>
</head>

<body>
  <!-- Nav Bar -->
  <nav class="navbar bg-dark navbar-expand-lg navbar-dark bg-transparent">
    <a class="navbar-brand" href="#"><img class="logo" src="images/nitjsr.png" alt="Logo">&nbsp NIT CALICUT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div style="color:white;"><label for="html"><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ses";?></label></div>
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
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <div id="templatemo_container">

    <div id="templatemo_left_section">

      <div id="templatemo_left_content">

        <h1>SELECT YOUR PRODUCTS TO BIDDING</h1>
        <hr>

        <form id="form3" name="form3" method="post" action="">
          <table width="100%" border="0" cellspacing="5">
            <tr>
              <?php
              include('database.php');
              $res = mysqli_query($con, "select * from add_products ");
              while ($row = mysqli_fetch_assoc($res)) {
              ?>

<td width="20%" height="151" rowspan="2"><img src="data:photo/jpg;charset=utf8;base64,<?php echo base64_encode($row['photo']); ?>" alt="" width="130" height="121" /></td>
               

                <!-- <td width="20%" height="151" rowspan="2"><img src="upload/<?php echo $row['photo']; ?>" alt="" width="130" height="121" /></td> -->
                <td width="24%" height="58">
                  <h3><?php echo $row['productd_name']; ?></h3><?php echo "Price: ". $row['price']; ?><br><?php echo $row['start_d']; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['end_d']; ?>
                <br>
                <?php
                      $date=date("Y-m-d");
                      if($date>=$row['end_d'])
                      {
                        echo 'Product selled';
                        echo "</br>";
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
                        echo "Winning price:&nbsp;&nbsp;".$row1['bid_prc'];
                        echo "</br>";
                        echo "Winner Name:&nbsp;&nbsp;".$row1['name'];
                      }
                      elseif($date<$row['start_d'])
                      {
                        
                          echo 'Bidding not yet start';
                      }
                      else{
                        ?>
                        
                        <a href="bidding.php?id=<?php echo $row['id']; ?>">Click here to Bidding</a>
                      
                        <?php
                        // echo 'Bidding is available';
                      }
                  
                  
                  ?>
                </td>
            </tr>
            <tr>
              <!-- <td height="58"><a href="bidding.php?id=<?php echo $row['id']; ?>">Click here to Bidding</a></td> -->
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