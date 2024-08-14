<?php
session_start();
require './db_conn.php';

if (!isset($_SESSION['LOGGED_IN_EMAIL'])) {
    header("Location: signin.php");
    exit();
}
$error_message = '';
$email = $_SESSION['LOGGED_IN_EMAIL'];

$sqll = "SELECT confirmed FROM enrollments WHERE Email_Address = ?";
$stmt1 = $mysqli->prepare($sqll); 
$stmt1->bind_param('s', $email);
$stmt1->execute();

$result = $stmt1->get_result()->fetch_assoc(); 
$hasAccess = false;

if ($result && $result['confirmed'] == 0) {
    $hasAccess = true;
} else {
    echo $error_message;
}


if (!isset($_SESSION['LOGGED_IN_EMAIL'])) {
    header('Location: signin.php');
    exit();
}


$sql = "SELECT user_type FROM lunacorp_students WHERE Email_Address = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($user_type);
$stmt->fetch();
$stmt->close();
$mysqli->close();

$is_admin = ($user_type === 'administrator');
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="keywords" content="Site keywords here" />
  <meta name="description" content="" />
  <meta name="copyright" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Title -->
  <title>
    LunaCorp Data - Comprehensive Data Science Training
    Platform.
  </title>

  <!-- Favicon -->
  <link rel="icon" href="img/favicon.png" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- Nice Select CSS -->
  <link rel="stylesheet" href="css/nice-select.css" />
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <!-- icofont CSS -->
  <link rel="stylesheet" href="css/icofont.css" />
  <!-- Slicknav -->
  <link rel="stylesheet" href="css/slicknav.min.css" />
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="css/owl-carousel.css" />
  <!-- Datepicker CSS -->
  <link rel="stylesheet" href="css/datepicker.css" />
  <!-- Animate CSS -->
  <link rel="stylesheet" href="css/animate.min.css" />
  <!-- Magnific Popup CSS -->
  <link rel="stylesheet" href="css/magnific-popup.css" />

  <!-- Medipro CSS -->
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="css/responsive.css" />

  <style>
    @media screen and (max-width:994px) {
      .container {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
      }
    }
  </style>
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <div class="loader">
      <div class="loader-outter"></div>
      <div class="loader-inner"></div>

      <div class="indicator">
        <svg width="16px" height="12px">
          <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
          <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
        </svg>
      </div>
    </div>
  </div>
  <!-- End Preloader -->

  <!-- Get Pro Button -->
  <ul class="pro-features">
    <a class="get-pro">Enroll Now</a>
    <li class="big-title">Chat with us Directly</li>
    <li class="title">Get to know more</li>
    <li>New to the data world? Here is the chance! The data industry waits on no one. Start your journey today.
    </li>
    
    <li>Hack Your Way to Data Science Interview Success
    Intensive Prep Session @ $19
    </li>
    <li>Lets get in touch below.</li>
    <div class="button">
      <a href="/courses.php" target="_blank" class="btn">Course Preview</a>
      <a href="https://wa.me/254708487969" target="_blank" class="btn"><i class="fa fa-whatsapp" aria-hidden="true"></i>
      </i>Whatsapp</a>
    </div>
  </ul>
  <!-- Header Area -->
  <header class="header">
      <!-- Topbar -->
      <div class="topbar">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-5 col-12">
              <!-- Contact -->
              <ul class="top-link">
                <li><a href="/about.php">About Us</a></li>
                <li><a href="/courses.php">Courses</a></li>
                <li><a href="/resources.php">Resources</a></li>
                <li><a href="/blog-single.php">Blog</a></li>
                <li><a href="/contact.php">Contact</a></li>
                <!-- <li><a href="#">Community</a></li> -->
              </ul>

              <!-- End Contact -->
            </div>
            <div class="col-lg-6 col-md-7 col-12">
              <!-- Top Contact -->
              <ul class="top-contact">
                <li><i class="fa fa-phone"></i>+254 708 487969</li>
                <li>
                  <i class="fa fa-envelope"></i
                  ><a href="mailto:support@yourmail.com"
                    >info@lunacorpdata.co.ke</a
                  >
                </li>
              </ul>
              <!-- End Top Contact -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Topbar -->
      <!-- Header Inner -->
      <div class="header-inner">
        <div class="container">
          <div class="inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-12">
                <!-- Start Logo -->
                <div class="logo">
                  <a href="index.php"><img class="logo-img" src="img/logo.png" alt="#" /></a>
                </div>
                <!-- End Logo -->
                <!-- Mobile Nav -->
                <div class="mobile-nav"></div>
                <!-- End Mobile Nav -->
              </div>
              <div class="col-lg-7 col-md-9 col-12">
                <!-- Main Menu -->
                <div class="main-menu">
                  <nav class="navigation">
                    <ul class="nav menu">
                      <li class="active">
                        <a href="#"
                          >Home <i class="icofont-rounded-down"></i
                        ></a>
                        <ul class="dropdown">
                          <li><a href="index.php">Home</a></li>
                          <li><a href="/about.php">About Us</a></li>
                        </ul>
                      </li>
                      <li><a href="/resources.php">Resources </a></li>
                      <li><a href="/courses.php">Courses</a></li>
                      <li>
                        <a href="#"
                          >Blogs <i class="icofont-rounded-down"></i
                        ></a>
                        <ul class="dropdown">
                          <li><a href="blog-single.php">Blog Details</a></li>
                        </ul>
                      </li>
                      <li><a href="contact.php">Contact Us</a></li>
                      <?php if ($is_admin): ?>
    <li><a href="admin.php">Admin</a></li>
<?php endif; ?>
                    </ul>
                  </nav>
                </div>
                <!--/ End Main Menu -->
              </div>
              <div class="col-lg-2 col-12">
                <div class="get-quote">
                <a href="https://wa.me/254708487969" target="_blank" class="btn"><i class="fa fa-whatsapp" aria-hidden="true"></i>
                </i>Enroll with us</a>                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ End Header Inner -->
    </header>
  <!-- End Header Area -->

  <!-- Breadcrumbs -->
  <div class="breadcrumbs overlay">
    <div class="container">
      <div class="bread-inner">
        <div class="row">
          <div class="col-12">
            <h2>Tutorials</h2>
            <ul class="bread-list">
              <li><a href="index.php">Home</a></li>
              <li><i class="icofont-simple-right"></i></li>
              <li class="active">Resources</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumbs -->

  <!-- Start Portfolio Details Area -->
  <section class="pf-details p-details section">
    <div class="container d-flex align-items-start justify-content-center">
      <div class="row course-cont">
        <!-- Course 1 -->
        <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
          <div class="course-container card h-100">
            <div class="card-body">
              <h5 class="card-title">Introduction to Data science</h5>
              <div class="course-content">
                <p class="card-text">
                  Discover the fundamental concepts of data science in this introductory video. Learn about key techniques for data collection, cleaning, and initial analysis.
                </p>
              </div>
              <div style="width: 100%" class="form-group login-btn">
                <?php if ($hasAccess) : ?>
                  <a style="color:white; width:100%" href="https://docs.google.com/presentation/d/1OLTmK_TsxiTxHJ7tqK1wAdy7iD_fO6RovcxVmF3Gyj0/edit?usp=drive_link" class="btn" style="width: 100%" download>Download Now</a>

                <?php else : ?>
                  <p class="text-danger">Access denied. <?= htmlspecialchars($error_message) ?></p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <!-- Course 2 -->
        <div class="col-md-6 col-lg-6 mb-4">
          <div class="course-container card h-100">
            <div class="card-body">
              <h5 class="card-title">Machine Learning in Business</h5>
              <div class="course-content">
                <p class="card-text">
                  Explore practical applications of machine learning in business settings. This video covers real-world use cases and the impact of machine learning on decision-making processes.
                </p>
              </div>
              <div style="width: 100%" class="form-group login-btn">
                <?php if ($hasAccess) : ?>
                  <a style="color:white; width:100%" href="https://docs.google.com/presentation/d/1OLTmK_TsxiTxHJ7tqK1wAdy7iD_fO6RovcxVmF3Gyj0/edit?usp=drive_link" class="btn" style="width: 100%" download>Download Now</a>
                <?php else : ?>
                  <p class="text-danger">Access denied. <?= htmlspecialchars($error_message) ?></p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <!-- Add more courses as needed -->
      </div>
      <div class="col-lg-4 col-12">
        <div class="main-sidebar">
          <div class="single-widget recent-post">
            <h3 class="title">Documents</h3>
            <!-- Document 1 -->
            <div class="single-post d-flex align-items-center justify-content-start">
            <p>Download</p>
              <div class="content">
                <?php if ($hasAccess) : ?>
                  <h5><a href="https://docs.google.com/presentation/d/1OLTmK_TsxiTxHJ7tqK1wAdy7iD_fO6RovcxVmF3Gyj0/edit?usp=drive_link" download>machine-learning.pdf</a></h5>
                <?php else : ?>
                  <p class="text-danger">Access denied. <?= htmlspecialchars($error_message) ?></p>
                <?php endif; ?>
              </div>
            </div>
            <!-- Document 2 -->
            <div class="single-post d-flex align-items-center justify-content-start">
              <p>Download</p>
              <div class="content">
                <?php if ($hasAccess) : ?>
                  <h5><a href="https://docs.google.com/presentation/d/1OLTmK_TsxiTxHJ7tqK1wAdy7iD_fO6RovcxVmF3Gyj0/edit?usp=drive_link" download>learn-data.pdf</a></h5>
                <?php else : ?>
                  <p class="text-danger">Access denied. <?= htmlspecialchars($error_message) ?></p>
                <?php endif; ?>
              </div>
            </div>
            <!-- Document 3 -->
            <div class="single-post d-flex align-items-center justify-content-start">
            <p>Download</p>
              <div class="content">
                <?php if ($hasAccess) : ?>
                  <h5><a href="https://docs.google.com/presentation/d/1OLTmK_TsxiTxHJ7tqK1wAdy7iD_fO6RovcxVmF3Gyj0/edit?usp=drive_link" download>AI.pdf</a></h5>
                <?php else : ?>
                  <p class="text-danger">Access denied. <?= htmlspecialchars($error_message) ?></p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End Portfolio Details Area -->

  <!-- Footer Area -->
  <footer id="footer" class="footer">
    <!-- Footer Top -->
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-12">
            <div class="single-footer">
              <h2>About Us</h2>
              <p>
                Discover who we are and what drives us. We are committed to
                delivering excellence and ensuring the highest standards in
                everything we do. Our team is dedicated to providing
                exceptional service and making a positive impact.
              </p>

              <!-- Social -->
              <ul class="social">
                <li>
                  <a href="facebook.com"><i class="icofont-facebook"></i></a>
                </li>
                <li>
                  <a href="google.com"><i class="icofont-google-plus"></i></a>
                </li>
                <li>
                  <a href="twitter.com"><i class="icofont-twitter"></i></a>
                </li>
                <li>
                  <a href="vimeo.com"><i class="icofont-vimeo"></i></a>
                </li>
                <li>
                  <a href="pinterest.com"><i class="icofont-pinterest"></i></a>
                </li>
              </ul>
              <!-- End Social -->
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="single-footer f-link">
              <h2>Quick Links</h2>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <ul>
                    <li>
                      <a href="index.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a>
                    </li>
                    <li>
                      <a href="about.php"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a>
                    </li>
                    <li>
                      <a href="/resources.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Resources</a>
                    </li>
                    <li>
                      <a href="/courses.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Our Courses</a>
                    </li>
                    <li>
                      <a href="/signup.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Sign up</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Consultation</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Finance</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Testimonials</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a>
                    </li>
                    <li>
                      <a href="/contact.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="single-footer">
              <h2>Open Hours</h2>
              <p>
                Our facilities are open during the following hours to provide
                you with the best service possible. Feel free to visit us or
                get in touch during these times.
              </p>
              <ul class="time-sidual">
                <li class="day">
                  Monday - Friday <span>8:00 AM - 8:00 PM</span>
                </li>
                <li class="day">Saturday <span>9:00 AM - 6:30 PM</span></li>
                <li class="day">Sunday <span>9:00 AM - 3:00 PM</span></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="single-footer">
              <h2>Sign up for our Newsletter</h2>
              <p>
                Stay updated with the latest news, offers, and updates by
                subscribing to our newsletter. Don't miss out on important
                information and exclusive content!
              </p>
              <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                <input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'" required="" type="email" />
                <button class="button">
                  <i class="icofont icofont-paper-plane"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ End Footer Top -->
    <!-- Copyright -->
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            <div class="copyright-content">
              <p>
                © Copyright 2024 | All Rights Reserved by
                <a href="#" target="_blank">Lunacorpdata</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ End Copyright -->
  </footer>
  <!--/ End Footer Area -->

  <!-- jquery Min JS -->
  <script src="js/jquery.min.js"></script>
  <!-- jquery Migrate JS -->
  <script src="js/jquery-migrate-3.0.0.js"></script>
  <!-- jquery Ui JS -->
  <script src="js/jquery-ui.min.js"></script>
  <!-- Easing JS -->
  <script src="js/easing.js"></script>
  <!-- Color JS -->
  <script src="js/colors.js"></script>
  <!-- Popper JS -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap Datepicker JS -->
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- Jquery Nav JS -->
  <script src="js/jquery.nav.js"></script>
  <!-- Slicknav JS -->
  <script src="js/slicknav.min.js"></script>
  <!-- ScrollUp JS -->
  <script src="js/jquery.scrollUp.min.js"></script>
  <!-- Niceselect JS -->
  <script src="js/niceselect.js"></script>
  <!-- Tilt Jquery JS -->
  <script src="js/tilt.jquery.min.js"></script>
  <!-- Owl Carousel JS -->
  <script src="js/owl-carousel.js"></script>
  <!-- counterup JS -->
  <script src="js/jquery.counterup.min.js"></script>
  <!-- Steller JS -->
  <script src="js/steller.js"></script>
  <!-- Wow JS -->
  <script src="js/wow.min.js"></script>
  <!-- Magnific Popup JS -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <!-- Counter Up CDN JS -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Main JS -->
  <script src="js/main.js"></script>
</body>

</html>