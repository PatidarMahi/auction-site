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
    }
  </style>
</head>

<body>
  <div id="templatemo_left_section" style="color: white;">
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
            <a class="nav-link" href="User_Login_MERA.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.php">Admin Login</a>
          </li>
        </ul>
      </div>
    </nav>
    </section>

    <div id="templatemo_left_content">
      <h1>MEMBER SIGN UP </h1>
      <form id="form3" name="form3" method="post" action="user_register_code.php">
        <table width="100%" border="0" cellspacing="5">
          <tr>
            <td width="24%">NAME</td>
            <td width="7%">:</td>
            <td colspan="3"><label for="name"></label>
              <input name="name" type="text" id="f_name" size="30" required required pattern="[a-zA-Z ]+" />
            </td>
          </tr>
          <tr>
            <td>E-MAIL ID</td>
            <td>:</td>
            <td colspan="3"><input name="mail" type="text" id="mail" size="30" required required pattern=".+@nitc\.ac\.in" /></td>
          </tr>
          <tr>
            <td>PASSWORD</td>
            <td>:</td>
            <td colspan="3"><input name="pwd" type="password" id="pwd" size="30" required  /></td>
          </tr>
          <tr>
            <td>DATE OF BIRTH</td>
            <td>:</td>
            <td colspan="3"><input name="dob" type="date" id="dob" size="30" required /></td>
          </tr>
          <tr>
            <td>GENDER</td>
            <td>:</td>
            <td colspan="3"><input type="radio" name="gen" required id="radio" value="male" />
              <label for="gen">MALE
                <input type="radio" name="gen" required id="radio2" value="female" />
                FEMALE
                <input type="radio" name="gen" required id="radio3" value="other" />
                OTHER
              </label>
            </td>
          </tr>
          <tr>
            <td>ADDRESS</td>
            <td>:</td>
            <td colspan="3"><label for="add"></label>
              <textarea name="add" id="add" cols="24" rows="4" required ></textarea>
            </td>
          </tr>
          <tr>
            <td>PHONE NO</td>
            <td>:</td>
            <td colspan="3"><input name="ph" type="text" id="ph" size="10" required pattern="[7-9]{1}[0-9]{9}" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td width="9%">&nbsp;</td>
            <td width="36%"><input type="submit" name="button" id="button" value="Submit" />
              <input type="reset" name="button2" id="button2" value="Reset" />
            </td>
            <td width="24%">&nbsp;</td>
          </tr>
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