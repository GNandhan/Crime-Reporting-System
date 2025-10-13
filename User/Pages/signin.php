<?php
 include './connect.php';
//  error_reporting(0);
 session_start();
//  $_SESSION["email"]='';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin Page</title>
    <link rel="icon" href="../Images/logo.png">
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <style>
        .navbar-nav {
            margin: auto;
        }

        .navbar-toggler {
            margin-right: 0;
        }

        @import url('https://fonts.googleapis.com/css2?family=Carattere&display=swap');

        .fnt {
            font-family: 'Roboto Condensed', sans-serif;
        }

        /* Set a fixed height for the card bodies */
        .card-body1 {
            height: 50px;
            /* Adjust the height as needed */
            overflow: hidden;
            /* Hide overflowing content */
        }
    </style>
</head>

<body>
    <!-- Navbar. -->
    <nav class="navbar navbar-expand-lg fnt" style="background-color: #0d6efd;">
        <div class="container-fluid mx-auto">
            <a class="navbar-brand" href="#">
                <img src="../Images/logo.png" alt="" width="100%" height="30px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../../index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="./complaint.php">Register a Complaint</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="./track.php">Track your Complaint</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="./contact.php">Contact</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../Pages/signin.php">Login</a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>

    <!-- Navbar closed -->
    <!-- Header -->
    <div class="container-fluid p-3 border-bottom">
        <div class="row">
            <div class="col">
                <div class="container border-start">
                    <div class="row">
                        <div class="col">
                            <a class="text-dark text-decoration-none h4" href="../../index.html">अपराध रिपोर्टिंग
                                पोर्टल</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class="text-dark text-decoration-none h4" href="../../index.html">CRIME REPORTING
                                PORTAL</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header closed -->
    <div class="container-fluid p-3 ">
        <div class="row">
            <div class="col">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a class="text-dark text-decoration-none" href="../../index.html">Home</a> > Signin
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="modal modal-sheet position-static d-block p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2">Sign In</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-5 pt-0">
        <form method="post">
          <!-- User ID -->
          <div class="form-floating mb-3">
            <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" name="email" required>
            <label for="floatingInput">Email Id</label>
          </div>

          <!-- Password with eye icon -->
          <div class="input-group mb-3">
            <div class="form-floating flex-grow-1">
              <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" name="pass" required>
              <label for="floatingPassword">Password</label>
            </div>
            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
              <i class="bi bi-eye" id="eyeIcon"></i>
            </button>
          </div>

          <!-- Submit -->
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="usrlog">Sign in</button>
          <small class="text-body-secondary">By clicking Sign in, you agree to the terms of use.</small>

          <hr class="my-4">

          <!-- Register Link -->
          <div class="text-center">
            <div>or</div>
            <a href="./signup.php" class="h6 text-decoration-none">Register now</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- PHP CODE FOR CHECKING THE INSERTED FORM IS CORRECT OR NOT THEN LOGGED IN -->
<?php
if(isset($_POST["usrlog"]))
{
  $email=$_POST["email"];
  $password=$_POST["pass"];
  
  $sq=mysqli_query($conn,"SELECT * FROM user WHERE user_email='$email' and user_password='$password'");
  $check=mysqli_num_rows($sq);
  
if($check > 0) {
  $_SESSION["email"] = $email;
  $_SESSION["password"] = $password;
  echo '<script>window.location.href = "complaint.php";</script>';
}

else
{
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "Wrong Password" . $conn->error."');</script>";
}
}
?>
    <!-- Footer -->
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1"
                    aria-label="Bootstrap">
                    <svg class="bi" width="30" height="24" aria-hidden="true">
                        <use xlink:href="#bootstrap"></use>
                    </svg> </a> <span class="mb-3 mb-md-0 text-body-secondary">© 2025 Company, Inc</span>
            </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3 bi bi-instagram"><a class="text-body-secondary" href="https://www.instagram.com/"
                        aria-label="Instagram"><svg class="bi" width="24" height="24" aria-hidden="true">
                            <use xlink:href="#instagram"></use>
                        </svg></a></li>
                <li class="ms-3 bi bi-facebook"><a class="text-body-secondary" href="https://www.facebook.com/"
                        aria-label="Facebook"><svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li>
            </ul>
        </footer>
    </div>

<script>
  const togglePassword = document.querySelector("#togglePassword");
  const password = document.querySelector("#floatingPassword");
  const eyeIcon = document.querySelector("#eyeIcon");

  togglePassword.addEventListener("click", function () {
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);

    // toggle eye / eye-slash
    if (type === "password") {
      eyeIcon.classList.remove("bi-eye-slash");
      eyeIcon.classList.add("bi-eye");
    } else {
      eyeIcon.classList.remove("bi-eye");
      eyeIcon.classList.add("bi-eye-slash");
    }
  });
</script>
<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Footer Closed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>