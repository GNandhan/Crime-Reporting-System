<?php
 include './connect.php';
 error_reporting(0);
 session_start();
 if($_SESSION["email"]=="")
 {
    header('location:staff-login.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff-staff</title>
  <link rel="stylesheet" href="../static/staff.css">
  <link rel="icon" href="../static/logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <!-- Dashboard body -->
  <div id="wrapper">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <h2><div class="fs-3 fw-semibold">Crime Reporting</div></h2>
      </div>
      <ul class="sidebar-nav">
        <li><a href="./staff-home.php"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="./staff-complaint.php"><i class="fa fa-plug"></i>Complaints</a></li>
        <li><a href="./staff-user.php"><i class="fa fa-user"></i>Users</a></li>
        <li class="active"><a href="./staff-staff.php"><i class="fa fa-user"></i>Staff</a></li>
      </ul>
    </aside>
    <div id="navbar-wrapper">
      <nav class="navbar navbar-inverse">
        <div class="container-fluid justify-content-between">
          <div class="navbar-header position-absolute top-0">
            <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
          </div>
          <div class="d-flex align-items-center position-absolute end-0">
            <button class="btn rounded-circle border-0"  data-bs-toggle="dropdown" aria-expanded="false">
              <img src="../static/user.png" alt="" width="40">
            </button>
            <ul class="dropdown-menu" style="margin-right:20px;">
                <li><a class="dropdown-item" href="staff-login.php">Log out</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <section id="content-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="content-title display-4 fw-semibold border-start px-3 border-4 border-dark">Staff List</h2>
          <div class="container">
            <div class="row my-5">
<?php  
$sql=mysqli_query($conn,"SELECT * FROM staff ORDER BY staff_id ");
$serialNo = 1;
while($row=mysqli_fetch_assoc($sql))
{
    $staff_id=$row['staff_id'];
    $staff_name=$row['staff_name'];
    $crime_name=$row['crime_name'];
    $fir_id=$row['fir_id'];
    $staff_img=$row['staff_img'];
    $staff_date=$row['staff_date'];
    $staff_location=$row['staff_location'];
    $staff_catid=$row['catering_id'];
?>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-3">
                <div class="card text-decoration-none h-100 rounded-5 p-3 border-3 border-warning-subtle border-top-0 shadow-lg">
                  <!-- <img src="../../Catering/static/staff/<?php echo $staff_img; ?>" class="card-img-top rounded-top-4 mx-auto" alt="..." style="width:150px;"> -->
                  <img src="../static/profile.png" class="card-img-top rounded-top-4 mx-auto" alt="..." style="width:150px;">
                  <div class="card-body">
                    <div class="card-title fs-2 fw-bold"><?php echo $staff_name; ?></div>
                    <p class="card-text text-secondary"><?php echo $crime_name; ?></p>
                    <p class="card-text text-secondary"><?php echo $fir_id; ?></p>
                    <p class="card-text text-secondary"><?php echo $us_mail; ?></p>
                    <p class="card-text text-secondary"><?php echo $staff_location; ?></p>
                    <p class="card-text text-dark"><?php echo $staff_date; ?></p>
                  </div>
                </div>
              </div>
<?php
}
?>             
            </div>
          </div>
        </div>
      </div>
      <!-- Section 8 -->
      <div class="row">
        <div class="container">
          <footer class="d-flex flex-wrap justify-content-between align-items-center py-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
              <span class="mb-3 mb-md-0 text-dark">&copy; 2025 Crime Reporting, Inc</span>
            </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
              <li class="ms-3"><a class=" text-dark" href="#"><i class="bi bi-facebook" width="24" height="24"></i></a></li>
              <li class="ms-3"><a class=" text-dark" href="#"><i class="bi bi-instagram" width="24" height="24"></i></a></li>
              <li class="ms-3"><a class=" text-dark" href="#"><i class="bi bi-twitter-x" width="24" height="24"></i></a></li>
            </ul>
          </footer>
        </div>
      </div>
      <!-- Section 8 closed -->
    </section>
  </div>
  <!-- Dashboard body -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script>
    const $button = document.querySelector('#sidebar-toggle');
    const $wrapper = document.querySelector('#wrapper');
    $button.addEventListener('click', (e) => {
      e.preventDefault();
      $wrapper.classList.toggle('toggled');
    });
  </script>
</body>
</html>