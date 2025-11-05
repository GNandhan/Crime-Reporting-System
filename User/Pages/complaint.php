<?php
include './connect.php';
//  error_reporting(0);
session_start();
if ($_SESSION["email"] == "") {
    header('location:signin.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Page</title>
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
                        <a class="nav-link text-white" href="./index.php">Home</a>
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
                            <a class="nav-link text-white" href="./signin.php">Logout</a>
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
                            <a class="text-dark text-decoration-none h4" href="./index.php">अपराध रिपोर्टिंग पोर्टल</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class="text-dark text-decoration-none h4" href="./index.php">CRIME REPORTING
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
                            <a class="text-dark text-decoration-none" href="./index.php">Home</a> > Register a complaint
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-sheet position-static d-block p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h1 class="fw-bold mb-0 fs-2">Complaint Form</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5 pt-0">
                    <form method="post" enctype="multipart/form-data">
                        <!-- Name & Phone (same row) -->
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control rounded-3" id="floatingName" placeholder="Your Name" name="comname" required>
                                    <label for="floatingName">Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control rounded-3" id="floatingPhone" placeholder="9876543210" pattern="[0-9]{10}" name="commob" required>
                                    <label for="floatingPhone">Phone Number</label>
                                </div>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="form-floating my-3">
                            <textarea class="form-control rounded-3" id="floatingAddress" placeholder="Your Address" style="height: 100px;" name="comaddress" required></textarea>
                            <label for="floatingAddress">Address</label>
                        </div>

                        <!-- Email & Password (same row) -->
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control rounded-3" id="floatingEmail" placeholder="name@example.com" name="comemail" required>
                                    <label for="floatingEmail">Email Id</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" name="compass" required>
                                    <label for="floatingPassword">Password</label>
                                </div>
                            </div>
                        </div>

                        <!-- Complaint -->
                        <div class="form-floating my-3">
                            <textarea class="form-control rounded-3" id="floatingComplaint" placeholder="Write your complaint here..." style="height: 120px;" name="comcompl" required></textarea>
                            <label for="floatingComplaint">Complaint</label>
                        </div>

                        <!-- Uploads -->
                        <div id="uploadsContainer" class="mb-3">
                            <label class="form-label">Upload Images</label>
                            <div class="input-group mb-2 file-row">
                                <input type="file" class="form-control file-input" name="uploadImage[]" accept="image/*" required>
                                <button type="button" class="btn btn-outline-secondary remove-file-btn" style="display:none;">Remove</button>
                            </div>
                            <button id="addFileBtn" type="button" class="btn btn-sm btn-secondary">+ Add more</button>
                            <small class="form-text">Allowed: images only. Max size per file: 2MB (example).</small>
                        </div>

                        <!-- Preview Section -->
                        <div id="previewContainer" class="mb-3 d-flex flex-wrap gap-2 border rounded p-2"
                            style="min-height:60px; background-color:#f8f9fa;">
                            <p class="text-muted m-0">Image previews will appear here...</p>
                        </div>

                        <!-- Submit -->
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="comsubmit">Submit</button>
                        <small class="text-body-secondary">By clicking Submit, you agree to the terms of use.</small>
                        <hr class="my-4">


                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- PHP CODE FOR INSERTING THE DATA -->
<?php
if (isset($_POST["comsubmit"])) {

    // Collect form data safely
    $comname    = mysqli_real_escape_string($conn, $_POST["comname"]);
    $commob     = mysqli_real_escape_string($conn, $_POST["commob"]);
    $comaddress = mysqli_real_escape_string($conn, $_POST["comaddress"]);
    $commail    = mysqli_real_escape_string($conn, $_POST["comemail"]);
    $compass    = mysqli_real_escape_string($conn, $_POST["compass"]);
    $comcompl   = mysqli_real_escape_string($conn, $_POST["comcompl"]);

    // MULTIPLE FILE UPLOAD HANDLING
    $uploadedImages = []; // store filenames

    if (!empty($_FILES['uploadImage']['name'][0])) {
        foreach ($_FILES['uploadImage']['name'] as $key => $name) {

            $filename = time() . "_" . basename($name);
            $tempPath = $_FILES['uploadImage']['tmp_name'][$key];
            $folder = "../Images/complaint/" . $filename;

            // Upload only if file type is image
            $fileType = mime_content_type($tempPath);
            if (strpos($fileType, 'image') !== false) {

                if (move_uploaded_file($tempPath, $folder)) {
                    $uploadedImages[] = $filename;
                }
            }
        }
    }

    // Convert image list for DB storage
    $imageString = implode(",", $uploadedImages);

    // INSERT QUERY
    $sql = mysqli_query($conn, "INSERT INTO complaint 
        (com_name, com_address, com_contact, com_email, com_password, com_complaint, com_img) 
        VALUES ('$comname','$comaddress','$commob','$commail','$compass','$comcompl','$imageString')");

    if ($sql) {
        echo "<script>alert('Complaint Submitted Successfully'); window.location.href='track.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
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
    <!-- Footer Closed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('addFileBtn').addEventListener('click', function() {
            const container = document.getElementById('uploadsContainer');
            const row = document.createElement('div');
            row.className = 'input-group mb-2 file-row';
            row.innerHTML = `
        <input type="file" class="form-control file-input" name="uploadImage[]" accept="image/*">
        <button type="button" class="btn btn-outline-secondary remove-file-btn">Remove</button>
    `;
            container.insertBefore(row, this);
        });

        // Remove file input
        document.getElementById('uploadsContainer').addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('remove-file-btn')) {
                const row = e.target.closest('.file-row');
                if (row) {
                    row.remove();
                    updatePreview();
                }
            }
        });

        // Show preview of uploaded images
        document.getElementById('uploadsContainer').addEventListener('change', function(e) {
            if (e.target && e.target.classList.contains('file-input')) {
                updatePreview();
            }
        });

        function updatePreview() {
            const previewContainer = document.getElementById('previewContainer');
            previewContainer.innerHTML = ''; // clear previous previews

            const fileInputs = document.querySelectorAll('.file-input');
            let hasFiles = false;

            fileInputs.forEach(input => {
                Array.from(input.files).forEach(file => {
                    if (file && file.type.startsWith('image/')) {
                        hasFiles = true;
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const img = document.createElement('img');
                            img.src = e.target.result;
                            img.className = 'rounded border';
                            img.style.width = '100px';
                            img.style.height = '100px';
                            img.style.objectFit = 'cover';
                            previewContainer.appendChild(img);
                        };
                        reader.readAsDataURL(file);
                    }
                });
            });

            if (!hasFiles) {
                previewContainer.innerHTML = '<p class="text-muted m-0">Image previews will appear here...</p>';
            }
        }
    </script>

</body>

</html>