<?php

include_once 'connect.php';
include_once 'db_class.php';

$db = new db();
$db = $db->get_connection();

$items = new db_test($db);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the form
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $phoneNumber = $_POST["phoneNumber"];

    // Attempt to add the user
    if ($items->addUser($firstname, $lastname, $gender, $age, $address, $phoneNumber)) {
        // Redirect to read_api.php after adding the user
        header("Location: read_api.php");
        exit;
    } else {
        echo "Failed to add user";
    }
}
?>
<?php

include_once 'connect.php';
include_once 'db_class.php';

$db = new db();
$db = $db->get_connection();

$items = new db_test($db);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the form
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $phoneNumber = $_POST["phoneNumber"];

    // Attempt to add the user
    if ($items->addUser($firstname, $lastname, $gender, $age, $address, $phoneNumber)) {
        // Redirect to read_api.php after adding the user
        header("Location: read_api.php");
        exit;
    } else {
        echo "Failed to add user";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <title>API TESTING</title>
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
        <link href="assets/css/style.css" rel="stylesheet">
    
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
              <li class="dropdown"><a href="#null"><span>Phonebook</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="phonebook.php" class="link active">PHONEBOOK.MP4</a></li>
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
              <li>API.MP4</li>
            </ol>
            <h2>API | Add New User </h2>
    
          </div>
        </section>
    
        <section class="inner-page">
          <div class="container">
        <form action="add_user.php" method="post">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" required><br>
    
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" required><br>
    
            <label for="gender">Gender:</label>
            <input type="text" name="gender" required><br>
    
            <label for="age">Age:</label>
            <input type="text" name="age" required><br>
    
            <label for="address">Address:</label>
            <input type="text" name="address" required><br>
    
            <label for="phoneNumber">Phone Number:</label>
            <input type="text" name="phoneNumber" required><br>
    
            <input type="submit" value="Add User">
        </form>
          </div>
        </section>
    
      </main>
    
      <footer id="footer">
    
        <div class="footer-newsletter">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <h4>Sign up to my website</h4>
                <p>Register here :</p>
                <form action="" method="post">
                  <input type="email" name="email"><input type="submit" value="Signup">
                </form>
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
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
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
      <script src="assets/js/main.js"></script>

</body>

</html>