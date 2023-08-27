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

    #templatemo_left_content {
      color: white;
      /* text-align: center; */
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

  <div id="templatemo_left_section">

    <div id="templatemo_left_content">

      <h1>ADD PRODUCT</h1>

      <form action="add_product_code.php" method="post" enctype="multipart/form-data" name="form3" id="form3">
        <table width="100%" border="0">
          <tr>
            <td>USERNAME</td>
            <td>:</td>
            <td><input name="p_name2" type="text" id="p_name2" size="30" required/></td>
          </tr>
          <tr>
            <td width="26%">PRODUCT NAME</td>
            <td width="7%">:</td>
            <td width="67%"><label for="p_name"></label>
              <input name="p_name" type="text" id="p_name" size="30" required/>
            </td>
          </tr>
          <tr>
            <td>CATEGORIES</td>
            <td>:</td>
            <td><input name="catry" type="text" id="catry" size="30" required/></td>
          </tr>
          <tr>
            <td>PRICE</td>
            <td>:</td>
            <td><input name="price" type="number" id="price" size="30" required/></td>
          </tr>
          <tr>
            <td>Start Bidding Date</td>
            <td>:</td>
            <td><input name="start_d" type="date" id="demo" required/></td>
          </tr>
          <tr>
            <td>End Bidding Date</td>
            <td>:</td>
            <td><input name="end_d" type="date" id="demo1" required/></td>
          </tr>
          <tr>
            <td>UPLOAD IMAGE</td>
            <td>:</td>
            <td><label for="file"></label>
              <input type="file" name="file" id="file" required/>
            </td>
          </tr>
          <tr>
            <td>DESCRIPTION</td>
            <td>:</td>
            <td><label for="desp"></label>
              <textarea name="desp" id="desp" cols="24" rows="4" required></textarea>
            </td>
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
        </table>
      </form>
      <p>&nbsp;</p>
    </div>

  </div>
  <footer id="footer">

    <p>© NITJSR Auction Online Site. All Rights Reserved</p>

  </footer>
  <script>
      var todayDate = new Date();
      var month = todayDate.getMonth()+1; 
      var year = todayDate.getUTCFullYear() - 0; 
      var tdate = todayDate.getDate(); 
      if(month < 10){
        month = "0" + month 
      }
      if(tdate < 10){
        tdate = "0" + tdate;
      }
      var maxDate = year + "-" + month + "-" + tdate;
      document.getElementById("demo").setAttribute("min", maxDate);
      console.log(maxDate);
    </script>
    <script>
      var todayDate = new Date();
      var month = todayDate.getMonth()+1; 
      var year = todayDate.getUTCFullYear() - 0; 
      var tdate = todayDate.getDate()+1; 
      if(month < 10){
        month = "0" + month 
      }
      if(tdate < 10){
        tdate = "0" + tdate;
      }
      var maxDate = year + "-" + month + "-" + tdate;
      document.getElementById("demo1").setAttribute("min", maxDate);
      console.log(maxDate);
    </script>
</body>

</html>