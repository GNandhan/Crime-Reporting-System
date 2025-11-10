<?php
include './connect.php';
session_start();
if ($_SESSION["email"] == "") {
  header('location:admin-login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin-Home</title>
  <link rel="stylesheet" href="../static/admin.css">
  <link rel="icon" href="../static/logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <!-- Dashboard body -->
  <div id="wrapper">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <h2>
          <div class="fs-3 fw-semibold">Crime Reporting</div>
        </h2>
      </div>
      <ul class="sidebar-nav">
        <li><a href="./admin-home.php"><i class="fa fa-home"></i>Home</a></li>
        <li class="active"><a href="./admin-complaint.php"><i class="fa fa-plug"></i>Complaints</a></li>
        <li><a href="./admin-user.php"><i class="fa fa-user"></i>Users</a></li>
        <li><a href="./admin-staff.php"><i class="fa fa-user"></i>Staff</a></li>
      </ul>
    </aside>

    <div id="navbar-wrapper">
      <nav class="navbar navbar-inverse">
        <div class="container-fluid justify-content-between">
          <div class="navbar-header position-absolute top-0">
            <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
          </div>
          <div class="d-flex align-items-center position-absolute end-0">
            <button class="btn rounded-circle border-0" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="../static/user.png" alt="" width="40">
            </button>
            <ul class="dropdown-menu" style="margin-right:20px;">
              <li><a class="dropdown-item" href="admin-login.php">Log out</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <section id="content-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="content-title display-4 fw-semibold border-start px-3 border-4 border-dark">COMPLAINTS</h2>
          <div class="container my-5">
            <div class="table-responsive shadow-sm rounded-2">
              <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Complaint</th>
                    <!-- <th>Image</th> -->
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = mysqli_query($conn, "SELECT * FROM complaint ORDER BY com_id");
                  $serialNo = 1;
                  while ($row = mysqli_fetch_assoc($sql)) {
                    $com_id = $row['com_id'];
                    $com_name = $row['com_name'];
                    $com_address = $row['com_address'];
                    $com_contact = $row['com_contact'];
                    $com_email = $row['com_email'];
                    $com_complaint = $row['com_complaint'];
                    $com_status = $row['com_status'];
                    $com_img = $row['com_img'];
                  ?>
                    <tr>
                      <th scope="row"><?php echo $serialNo++; ?></th>
                      <td><?php echo $com_name; ?></td>
                      <td><?php echo $com_address; ?></td>
                      <td><?php echo $com_contact; ?></td>
                      <td><?php echo $com_email; ?></td>
                      <td><?php echo substr($com_complaint, 0, 40) . '...'; ?></td>
                      <td><?php echo $com_status; ?></td>

                      <!-- <td>
                        <?php if (!empty($com_img)) { ?>
                          <img src="../../User/Images/complaint/<?php echo $com_img; ?>" width="60" height="60" class="rounded" style="object-fit:cover;">
                        <?php } else { ?>
                          <img src="../static/no-image.png" width="60" height="60" class="rounded">
                        <?php } ?>
                      </td> -->
                      <td>
                        <button class="btn btn-sm btn-warning fw-semibold" data-bs-toggle="modal" data-bs-target="#detailsModal<?php echo $com_id; ?>">
                          Show Details
                        </button>
                      </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="detailsModal<?php echo $com_id; ?>" tabindex="-1" aria-labelledby="detailsModalLabel<?php echo $com_id; ?>" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content rounded-4">

                          <div class="modal-header bg-dark text-white">
                            <h5 class="modal-title" id="detailsModalLabel<?php echo $com_id; ?>">Complaint Details</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>

                          <div class="modal-body">
                            <p><strong>Name:</strong> <?php echo $com_name; ?></p>
                            <p><strong>Address:</strong> <?php echo $com_address; ?></p>
                            <p><strong>Contact:</strong> <?php echo $com_contact; ?></p>
                            <p><strong>Email:</strong> <?php echo $com_email; ?></p>
                            <p><strong>Complaint:</strong><br><?php echo $com_complaint; ?></p>
                            <p><strong>Evidence Image:</strong></p>
                            <img src="../../User/Images/complaint/<?php echo $com_img; ?>"
                              class="img-fluid rounded-4 shadow-sm mb-3"
                              style="max-height: 300px; object-fit: contain;">
                          </div>

                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>

                        </div>
                      </div>
                    </div>

                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <div class="container-fluid">
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
    </section>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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