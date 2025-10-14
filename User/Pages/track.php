<?php
 include './connect.php';
//  error_reporting(0);
 session_start();
 if($_SESSION["email"]=="")
 {
    header('location:signin.php');
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Page</title>
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
                            <a class="nav-link text-white" href="./signin.php">Login</a>
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
                            <a class="text-dark text-decoration-none h4" href="../../index.html">अपराध रिपोर्टिंग पोर्टल</a>
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
    <div class="container-fluid p-3 border-bottom">
        <div class="row">
            <div class="col">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a class="text-dark text-decoration-none" href="../../index.html">Home</a> > Track your
                            Complaint
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <!-- Tracking Form -->
<!-- OTP + Captcha Form -->
<div class="container">
    <div class="row">
        <div class="col-lg col-md col-sm col">
            <div class="card rounded-4 m-5 p-4">
                <h6 class="border-bottom pb-2">Track your Complaint Status</h6>

                <!-- Acknowledgement No + OTP -->
                <div class="row align-items-center mb-3">
                    <label class="col-sm-4 fw-bold">Acknowledgement No. <span class="text-danger">*</span>:</label>
                    <div class="col-sm d-flex gap-2">
                        <input type="text" id="ackNo" class="form-control rounded-3" placeholder="Enter Acknowledgement No.">
                        <button class="btn btn-warning px-5 rounded-3" id="getOtpBtn" type="button">Get OTP</button>
                    </div>
                </div>
                
                <!-- OTP Input -->
                <div class="row align-items-center mb-3">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-8">
                        <input type="text" id="otpField" class="form-control rounded-3" placeholder="Enter OTP here...">
                    </div>
                </div>

                <!-- Captcha -->
                <div class="row align-items-center mb-3">
                    <label class="col-sm-4 fw-bold">Enter Captcha:</label>
                    <div class="col-sm-8 d-flex gap-2 align-items-center">
                        <input type="text" class="form-control rounded-3" placeholder="Enter Captcha">
                        <img src="../Images/" alt="captcha" style="height:40px; border:1px solid #ccc;">
                        <button class="btn btn-light" type="button">&#x21bb;</button>
                    </div>
                </div>

                <!-- Submit -->
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-8">
                        <button class="btn btn-success rounded-3">Submit</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Tracking form closed -->


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
    <!-- Footer Closed -->

    <!-- Script for OTP functionality -->
<script>
  document.getElementById("getOtpBtn").addEventListener("click", function() {
    // Generate random 4-digit OTP
    const otp = Math.floor(1000 + Math.random() * 9000);
    
    // Display popup
    alert("OTP SENT SUCCESSFULLY");

    // Set OTP in input field
    document.getElementById("otpField").value = otp;
  });
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>