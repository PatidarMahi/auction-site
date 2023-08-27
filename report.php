<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NITJSR Online Auction Site</title>
  <!-- <link href="templatemo_style.css" rel="stylesheet" type="text/css" /> -->
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

        <h1>REPORT VIEW</h1>

        <form action="report_view_date.php" method="post" enctype="multipart/form-data" name="form3" id="form3">
          <table width="100%" border="0">
            <tr>
              <td width="3%" height="40">&nbsp;</td>
              <td colspan="2"><label for="date"></label>
                <input style="border:1px solid #C00; padding:5px; width:150px; height:25px" type="date" name="date" id="date" />
              </td>
              <td width="58%"><input style="border:1px solid #C00; padding:5px; width:80px; height:25px; background-color:#C00; border-radius:5px; color:#FFF" type="submit" name="button" id="button" value="Submit" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td width="8%">&nbsp;</td>
              <td width="31%">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="2">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
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