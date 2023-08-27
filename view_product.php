<!DOCTYPE html>

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

    h1 {
      font-family: "Times New Roman", Times, serif;
      font-size: 3rem;
      text-decoration: underline;
    }

    #templatemo_container {
      color: white;
      margin-left: 50px;
      margin-top: 50px;
    }

    #footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      text-align: center;
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
          <a class="nav-link" href="admin_profile.php">Members</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="view_product.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bidding_details.php">Bidding Details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="report.php">Reports</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.html">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <div id="templatemo_container">

    <div id="templatemo_left_section">

      <div id="templatemo_left_content">

        <h1>PRODUCT LIST</h1>

        <form action="add_product_code.php" method="post" enctype="multipart/form-data" name="form3" id="form3">
          <table width="100%" border="0">
            <tr>
              <td width="109"><u><b>IMAGE</b></u></td>
              <td width="107"><u><b>PRODUCT NAME</b></u></td>
              <td width="88"><u><b>CATEGORIES</b></u></td>
              <td width="50"><u><b>PRICE</b></u></td>
              <td width="50"><u><b>WINNER</b></u></td>
              <td width="50"><u><b>WINNING PRICE</b></u></td>
              <td width="50"><u><b>DELETE</b></u></td>

            </tr>
            <?php
            include 'database.php';
            error_reporting(0);

            $ress = "select * from add_products";
            $ret = mysqli_query($con, $ress) or die(mysqli_connect_error());
            $i = 0;
            $x = mysqli_num_rows($ret);

            while ($row = mysqli_fetch_array($ret)) {
              $id = $row["id"];
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
              <td><img src="data:photo/jpg;charset=utf8;base64,<?php echo base64_encode($row['photo']); ?>" alt="" width="130" height="121" /></td>
                <td><?php echo $row['productd_name']; ?></td>
                <td><?php echo $row['category']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row1['name']; ?></td>
                <td><?php echo $bid_prc; ?></td>
                <td><a href="product_delete.php?id=<?php echo $row["id"];?>">DELETE</a></td>
              </tr>
            <?php
              $i++;
            }
            ?>
          </table>
        </form>
        <p>&nbsp;</p>
      </div>

    </div>
  </div>
  <footer id="footer">
    <p>© NITJSR Auction Online Site. All Rights Reserved</p>
  </footer>
</body>

</html>