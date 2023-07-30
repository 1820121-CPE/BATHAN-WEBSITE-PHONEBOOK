<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Welcome To My Website | PHONEBOOK</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/img/MiracleX.png" rel="icon">
    <link href="assets/img/MiracleX.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="assets/css/style.css" rel="stylesheet">
    
  <style>
    /* Custom CSS */
    .contact-table {
      border: 1px solid #ddd;
      border-radius: 0.25rem;
      padding: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .contact-table thead th {
      border-right: 1px solid #ddd;
      background-color: #15dbd0;;
      color: #fff;
      padding: 10px;
    }

    .contact-table tbody td {
      border-right: 1px solid #ddd;
      padding: 10px;
    }

    .contact-table tbody tr {
      border-bottom: 1px solid #ddd;
    }

    .contact-table thead th:last-child,
    .contact-table tbody td:last-child {
      border-right: none;
    }

    .form-control {
    margin: 2%;
    }
  </style>

</head>

<body>

  <header id="header" class="fixed-top header-inner-pages">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="home.php">M I R A C L E X</a></h1>

        <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="home.php">Home</a></li>
          <li><a class="nav-link scrollto" href="home.php">About</a></li>
          <li><a class="nav-link scrollto" href="home.php">My Skill</a></li>
          <li class="dropdown"><a href="#null"><span>API Testing</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="add_user.php" class="link active">API.MP4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="home.php">Contact</a></li>
          <li><a class="nav-link scrollto" href="home.php">Back</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>


    </div>
  </header>

  <main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="home.php">Home</a></li>
          <li>PHONEBOOK</li>
        </ol>
        <h2>PHONEBOOK</h2>

      </div>
    </section>

    <section class="inner-page">
      <div class="container">
        <p>
        <b style="color: red;">Please Complete the information needed!!</b>
        </p>
            <div class="row">
      <div class="col-md-6">
        <form id="contactForm">
          <input type="hidden" id="contactId">
          <div class="form-group" style = "width: 300px;">
            <label for="firstName">First Name:</label>
            <input type="text" class="form-control" id="firstName" placeholder="Enter first name">
          </div>
          <div class="form-group" style = "width: 300px;>
            <label for="lastName">Last Name:</label>
            <input type="text" class="form-control" id="lastName" placeholder="Enter last name">
          </div>
          <div class="form-group" style = "width: 300px;>
            <label for="middleName">Middle Name:</label>
            <input type="text" class="form-control" id="middleName" placeholder="Enter middle name">
          </div>
          <div class="form-group" style = "width: 300px;>
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter address">
          </div>
          <div class="form-group" style = "width: 300px;>
            <label for="phoneNumber">Phone Number:</label>
            <input type="text" class="form-control" id="phoneNumber" placeholder="Enter phone number">
          </div>
          <div class="form-group" style = "width: 300px;>
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email">
          </div>
          <div class="form-group" style = "width: 300px;>
            <label for="notes">Notes:</label>
            <textarea class="form-control" id="notes" placeholder="Enter notes"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
      <div class="col-md-6">
        <h2 class="text-center" style="display: flex; align-items: center;">&nbsp;Contact List</h2> 
        <p><i style="font-weight: lighter; color: red;">&nbsp;&nbsp; Make sure all the information is correct!!!</i></p>
        <h3 style="display: flex; align-items: center;">
        <input type="text" class="form-control" id="searchInput" placeholder="Search">
             <a href="phonebook.php" class="btn btn-primary" type="button">Refresh</a>
            </h3><br>
        <ul id="contactList" class="list-group" style="display: -ms-flexbox;
        
        display: flex;
        -ms-flex-direction: column;
        flex-direction: row-reverse;
        padding-left: 0;
        margin-bottom: 0;
        border-radius: 0.25rem;
        flex-wrap: nowrap;
        justify-content: center; margin-right: 69px;"></ul>
      </div>
    </div>
      </div>
    </section>

  </main>

  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Thank You!!</h4>
            <p><i>"The greatest glory in living lies not in never falling, but in rising every time we fall."</i></p>
          </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>MircleX</h3>
            <p>
              Brgy. Sampaguita <br>
              Lipa City, Batangas<br>
              Philippines <br><br>
              <strong>Phone:</strong> +639980705093<br>
              <strong>Email:</strong> 1820121@ub.edu.ph<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="home.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="home.php">About me</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="home.php">Skills</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/404/404.php">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/404/404.php">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>My Social Networks</h4>
            <p>PLEASE FOLLOW ME!!!!!!!!</p>
            <div class="social-links mt-3">
              <a href="https://www.tiktok.com/@miraclex._?lang=en" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/M1racleX" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>MIRA</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://www.facebook.com/M1racleX">MircleX</a>
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>