<?php
include './connect.php';
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Crime: Staff-Register</title>
  <link rel="stylesheet" href="User/static/home.css">
  <link rel="icon" href="../static/logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap');
    body { font-family: "DM Sans"; }
    .nav-link { position: relative; text-decoration: none; }
    .nav-link::after { content: ''; position: absolute; left: 0; bottom: -2px; width: 100%; height: 2px; background-color: transparent; transition: background-color 0.3s ease; }
    .nav-link:hover::after { background-color: #FFC107; }
    .form-icon { font-size: 1.2rem; }
    .footer-container { position: fixed; bottom: 0; background-color: white; width:100%; }
  </style>
</head>
<body>
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="../../index.html" class="d-inline-flex link-body-emphasis text-decoration-none fw-bold">
          <div class="fs-3 fw-semibold">Crime Reporting</div>
        </a>
      </div>
    </header>
  </div>

  <section class="container my-4">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-lg-6 col-xl-6">
        <div class="fs-2 fw-semibold text-secondary border-start border-3 px-3 mb-4">Staff Registration</div>
        <div class="card text-black shadow-lg border-0" style="border-radius: 25px;">
          <div class="card-body py-md-1">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-8 col-xl-10">
                <p class="text-center h2 fw-bold mb-4 mx-1 mx-md-4 mt-4">Create Account</p>

                <!-- Registration Form -->
                <form class="mx-1 mx-md-4" method="post" onsubmit="return validatePasswords();">
                  <!-- Name -->
                  <div class="d-flex flex-row align-items-center mb-3">
                    <i class="bi bi-person me-3 form-icon"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="name" class="form-control rounded-4 border-0 p-3 shadow-sm" placeholder="Full Name" required />
                    </div>
                  </div>

                  <!-- Email -->
                  <div class="d-flex flex-row align-items-center mb-3">
                    <i class="bi bi-envelope me-3 form-icon"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" name="email" class="form-control rounded-4 border-0 p-3 shadow-sm" placeholder="Email Address" required />
                    </div>
                  </div>

                  <!-- Password -->
                  <div class="d-flex flex-row align-items-center mb-3">
                    <i class="bi bi-shield-lock me-3 form-icon"></i>
                    <div class="form-outline flex-fill position-relative mb-0">
                      <div class="input-group shadow-sm rounded-4">
                        <input id="pass" type="password" name="pass" class="form-control rounded-4 border-0 p-3 shadow-none" placeholder="Password (min 6 chars)" minlength="6" required />
                        <button class="btn border border-0 rounded-end-4" type="button" id="showPasswordBtn"><i id="showIcon" class="bi bi-eye"></i></button>
                      </div>
                    </div>
                  </div>

                  <!-- Confirm Password -->
                  <div class="d-flex flex-row align-items-center mb-3">
                    <i class="bi bi-shield-lock-fill me-3 form-icon"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input id="confirm_pass" type="password" name="confirm_pass" class="form-control rounded-4 border-0 p-3 shadow-sm" placeholder="Confirm Password" minlength="6" required />
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="register" class="btn btn-primary rounded-pill px-5 btn-lg">Register</button>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <span>Already have an account?</span>
                    <a href="./staff-login.php" class="text-decoration-none px-1">Sign in <i class="fw-bold bi-arrow-up-right-circle"></i></a>
                  </div>
                </form>

                <!-- PHP: Registration -->
                <?php
                if (isset($_POST['register'])) {
                  $name = trim($_POST['name']);
                  $email = trim($_POST['email']);
                  $pass = $_POST['pass'];
                  $confirm = $_POST['confirm_pass'];

                  if ($pass !== $confirm) {
                    echo "<div class='alert alert-danger'>Passwords do not match.</div>";
                  } else if (strlen($pass) < 6) {
                    echo "<div class='alert alert-danger'>Password must be at least 6 characters long.</div>";
                  } else {
                    // Check if email already exists
                    $stmt = $conn->prepare("SELECT staff_id FROM staff WHERE staff_email = ?");
                    if ($stmt) {
                      $stmt->bind_param("s", $email);
                      $stmt->execute();
                      $stmt->store_result();
                      if ($stmt->num_rows > 0) {
                        echo "<div class='alert alert-warning'>This email is already registered. Try logging in.</div>";
                      } else {
                        $stmt->close();

                        // Insert without password hashing
                        $ins = $conn->prepare("INSERT INTO staff (staff_name, staff_email, staff_pass) VALUES (?, ?, ?)");
                        if ($ins) {
                          $ins->bind_param("sss", $name, $email, $pass);
                          if ($ins->execute()) {
                            echo "<div class='alert alert-success'>Registration successful! Redirecting to login...</div>";
                            echo "<script>setTimeout(function(){ window.location.href = 'staff-login.php'; }, 1300);</script>";
                          } else {
                            echo "<div class='alert alert-danger'>Registration failed. Please try again later.</div>";
                          }
                          $ins->close();
                        } else {
                          echo "<div class='alert alert-danger'>Database error: Could not prepare insert.</div>";
                        }
                      }
                    } else {
                      echo "<div class='alert alert-danger'>Database error: Could not prepare query.</div>";
                    }
                  }
                }
                ?>
                <!-- End PHP -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="footer-container container fixed-bottom">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <span class="mb-3 mb-md-0 text-dark">&copy; 2025 Crime Reporting, Inc</span>
      </div>
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-dark" href="#"><i class="bi bi-facebook"></i></a></li>
        <li class="ms-3"><a class="text-dark" href="#"><i class="bi bi-instagram"></i></a></li>
        <li class="ms-3"><a class="text-dark" href="#"><i class="bi bi-twitter-x"></i></a></li>
      </ul>
    </footer>
  </div>

  <script>
    // Toggle password visibility
    document.getElementById("showPasswordBtn").addEventListener("click", function () {
      const p = document.getElementById("pass");
      const cp = document.getElementById("confirm_pass");
      const icon = document.getElementById("showIcon");
      if (p.type === "password") {
        p.type = "text";
        cp.type = "text";
        icon.className = "bi bi-eye-slash";
      } else {
        p.type = "password";
        cp.type = "password";
        icon.className = "bi bi-eye";
      }
    });

    function validatePasswords() {
      const p = document.getElementById("pass").value;
      const cp = document.getElementById("confirm_pass").value;
      if (p !== cp) {
        alert("Passwords do not match.");
        return false;
      }
      return true;
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
