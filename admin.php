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
  <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Source+Serif+Pro:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap" rel="stylesheet">

  <!-- Font Awsome Link -->
  <script src="https://kit.fontawesome.com/2456171d90.js" crossorigin="anonymous"></script>

  <!-- Favicon-->
  <link rel="icon" href="images/nitjsr1.jpg">
</head>
<style>
  #footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    text-align: center;
  }

  body {
    background-image: url(images/download.jpeg);
    background-repeat: no-repeat;
    background-size: cover;
  }

  #templatemo_container {
    color: white;
    margin-left: 200px;
    margin-top: 100px;
    padding-left: 50px;
    padding-bottom: 50px;
  }

  h1 {
    font-family: "Times New Roman", Times, serif;
    font-size: 3rem;
    margin-left: 200px;
    margin-bottom: 50px;
    text-decoration: underline;
  }
</style>

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
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user.php">Sign up</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="admin.php">Admin Login</a>
        </li>
      </ul>
    </div>
  </nav>


  <div id="templatemo_container">

    <div id="templatemo_left_section">

      <div id="templatemo_left_content">

        <h1>&nbsp;ADMIN PANEL</h1>
        <form id="form3" name="form3" method="post" action="admin_login_code.php">
          <table width="100%" border="0" cellspacing="5">
            <tr>
              <td width="21%" height="27">USER NAME</td>
              <td width="5%">:</td>
              <td width="71%"><label for="name"></label>
                <input name="name" type="text" id="name" size="30" />
              </td>
            </tr>
            <tr>
              <td>PASSWORD</td>
              <td>:</td>
              <td><input name="pwd" type="password" id="pwd" size="30" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><input type="submit" name="button" id="button" value="Login" /></td>
            </tr>
          </table>
        </form>

      </div>

    </div>



  </div>
  <footer id="footer">

    <p>© NITJSR Auction Online Site. All Rights Reserved</p>

  </footer>
</body>

</html>