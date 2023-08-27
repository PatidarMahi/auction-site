<! DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>NITJSR Online Auction Site</title>
    <!-- Font Awsome Link -->
    <script src="https://kit.fontawesome.com/2456171d90.js" crossorigin="anonymous"></script>

    <!-- Favicon-->
    <link rel="icon" href="images/nitjsr1.jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  </head>
  <style>
    body {
      /* font-family: 'Muli', sans-serif; */
      background-image: url('images/back2.jpg');
    }

    a {
      color: #333;
    }

    a:hover {
      color: #E8D426;
      text-decoration: none;
    }

    .form-control:focus {
      color: #000;
      background-color: #fff;
      border: 2px solid #E8D426;
      outline: 0;
      box-shadow: none;
    }

    .btn {
      background: #28a745;
      border: #E8D426;
    }

    .btn:hover {
      background: #a77428;
      border: #E8D426;
    }

    h2 {
      font-size: 2.5rem;
      /* padding-top: 50px; */
      /* padding-left: 380px; */
      /* margin-left: 550px; */
      /* padding-bottom: 2px; */
      margin-bottom: 0px;
      color: aqua;
      margin-top: 50px;
      font-family: 'Times New Roman', Times, serif;
      color: aqua;
    }

    hr {
      border-top: 1px solid red;
      width: 200px;
    }
  </style>

  <body>
    <div class="pt-5">
      <h2 class="text-center">User Login</h2>
      <hr><br>
      <div class="container">
        <div class="row">
          <div class="col-md-5 mx-auto">
            <div class="card card-body">
              <form id="submitForm" action="user_login_code.php" method="post" data-parsley-validate="" data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1">
                <input type="hidden" name="_csrf" value="7635eb83-1f95-4b32-8788-abec2724a9a4">
                <div class="form-group required">
                  <lSabel for="username"> Enter your Email </lSabel>
                  <input type="text" class="form-control text-lowercase" id="username" required="" name="email" value="">
                </div>
                <div class="form-group required">
                  <label class="d-flex flex-row align-items-center" for="password"> Enter your Password
                    <a class="ml-auto border-link small-xl" href="#"></a> </label>
                  <input type="password" class="form-control" required="" id="password" name="pass" value="">
                </div>
                <div class="form-group pt-1">
                  <button class="btn btn-primary btn-block" type="submit"> Login </button>
                </div>
              </form>
              <p class="small-xl pt-3 text-center">
                <!-- <span class="text-muted"> Not a member? </span>   -->
                <i>Don't have a account?</i><a href="user.php"> <strong style="color: rgb(35,35,255);">Sign up/Register</strong> </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  </html>