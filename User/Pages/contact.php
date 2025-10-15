<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Crime Reporting Portal</title>
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

        .contact-section .h4 {
            color: #0d6efd;
            font-weight: 600;
        }

        .contact-section p {
            font-size: 16px;
            line-height: 1.6;
        }

        .contact-form label {
            font-weight: 500;
        }

        .contact-form button {
            background-color: #0d6efd;
            color: #fff;
            border: none;
        }

        .contact-form button:hover {
            background-color: #084298;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
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
                            <a class="text-dark text-decoration-none h4" href="../../index.html">CRIME REPORTING PORTAL</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="container-fluid p-3 border-bottom">
        <div class="row">
            <div class="col">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a class="text-dark text-decoration-none fnt" href="../../index.html">Home</a> > Contact
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Content -->
    <div class="container contact-section">
        <div class="row py-4 border-bottom">
            <div class="col">
                <div class="h4">Contact Us</div>
                <p>We’re here to help. If you have witnessed or experienced any suspicious activity, criminal behavior, or emergency situation, please don’t hesitate to reach out. Your report could help prevent crime and ensure justice is served.</p>
            </div>
        </div>

        <div class="row py-4 border-bottom">
            <div class="col">
                <div class="h4">📞 Emergency Helpline</div>
                <p>If this is an emergency or someone’s life is in immediate danger, please contact your nearest police station or dial <strong>100</strong> right away.</p>
            </div>
        </div>

        <div class="row py-4 border-bottom">
            <div class="col">
                <div class="h4">📬 Report or Enquiry</div>
                <p>For non-emergency reports, technical issues, or general queries, you can reach us through the following channels:</p>
                <p><strong>Email:</strong> support@crimereport.gov.in<br>
                    <strong>Phone:</strong> +91 1800 123 4567<br>
                    <strong>Address:</strong> Crime Reporting & Safety Department,<br>
                    Public Safety Office, Main Road, Ernakulam, Kerala – 682001
                </p>
            </div>
        </div>

        <div class="row py-4 border-bottom">
            <div class="col">
                <div class="h4">🕓 Working Hours</div>
                <p>Monday – Saturday: 9:00 AM – 6:00 PM<br>Sunday: Closed</p>
            </div>
        </div>

        <div class="row py-4">
            <div class="col">
                <div class="h4">🔒 Confidentiality Notice</div>
                <p>We value your privacy. All communications with our team are <strong>strictly confidential</strong>. Your identity will not be shared without your consent unless required by law.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1" aria-label="Bootstrap">
                    <svg class="bi" width="30" height="24" aria-hidden="true">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="mb-3 mb-md-0 text-body-secondary">© 2025 Crime Reporting Portal</span>
            </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3 bi bi-instagram">
                    <a class="text-body-secondary" href="https://www.instagram.com/" aria-label="Instagram">
                        <svg class="bi" width="24" height="24" aria-hidden="true">
                            <use xlink:href="#instagram"></use>
                        </svg>
                    </a>
                </li>
                <li class="ms-3 bi bi-facebook">
                    <a class="text-body-secondary" href="https://www.facebook.com/" aria-label="Facebook">
                        <svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </footer>
    </div>
    <!-- Footer Closed -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
