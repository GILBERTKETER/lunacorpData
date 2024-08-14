<?php
session_start();
include './db_conn.php'; 
if (!isset($_SESSION['LOGGED_IN_EMAIL'])) {
    header('Location: signin.php');
    exit();
}

$email = $_SESSION['LOGGED_IN_EMAIL'];

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
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Title -->
    <title>
      LunaCorp Data - Comprehensive Data Science Training
      Platform.
    </title>
    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
      rel="stylesheet"
    />

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
            <polyline
              id="front"
              points="1 6 4 6 6 11 10 1 12 6 15 6"
            ></polyline>
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
              <h2>Blogs</h2>
              <ul class="bread-list">
                <li><a href="index.php">Home</a></li>
                <li><i class="icofont-simple-right"></i></li>
                <li class="active">Blogs</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Single News -->
    <section class="news-single section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-12">
            <div class="row">
              <div class="col-12">
                <div class="single-main">
                  <!-- News Head -->
                  <div class="news-head">
                    <img src="img/blog1.jpg" alt="#" />
                  </div>
                  <!-- News Title -->
                  <h1 class="news-title">
                    <a href="news-single.php"
                      >The Power of Data science in Modern Business.</a
                    >
                  </h1>
                  <!-- Meta -->
                  <div class="meta">
                    <div class="meta-left">
                      <span class="author"
                        ><a href="#"
                          ><img src="img/author1.jpg" alt="#" />Sarah Johnson</a
                        ></span
                      >
                      <span class="date"
                        ><i class="fa fa-clock-o"></i>August 4, 2024</span
                      >
                    </div>
                    <div class="meta-right">
                      <span class="comments"
                        ><a href="#"
                          ><i class="fa fa-comments"></i>10 Comments</a
                        ></span
                      >
                      <span class="views"
                        ><i class="fa fa-eye"></i>5K Views</span
                      >
                    </div>
                  </div>
                  <!-- News Text -->
                  <div class="news-text">
                    <p>
                      Data science has become a cornerstone of modern business
                      strategy. Companies are leveraging data to gain insights
                      into customer behavior, optimize operations, and drive
                      innovation. By analyzing large datasets, businesses can
                      make more informed decisions, predict market trends, and
                      enhance their competitive edge.
                    </p>
                    <p>
                      The rise of big data and advanced science tools has
                      transformed how businesses operate. From identifying new
                      market opportunities to improving customer experiences,
                      data science provides actionable insights that drive
                      growth and efficiency. Companies that embrace data-driven
                      decision-making are better positioned to succeed in a
                      rapidly evolving marketplace.
                    </p>
                    <div class="image-gallery">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                          <div class="single-image">
                            <img src="img/blog2.jpg" alt="#" />
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                          <div class="single-image">
                            <img src="img/blog3.jpg" alt="#" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <p>
                      A key advantage of data science is its ability to
                      uncover hidden patterns and correlations within data. This
                      can lead to more accurate forecasting, personalized
                      marketing strategies, and improved product development. By
                      utilizing data science, businesses can stay ahead of the
                      curve and adapt to changing market conditions.
                    </p>
                    <blockquote class="overlay">
                      <p>
                        "Data science is not just a trend; it's a fundamental
                        shift in how businesses operate. Embracing data-driven
                        strategies can lead to significant improvements in
                        performance and profitability."
                      </p>
                    </blockquote>
                    <p>
                      As data science continues to evolve, it is essential for
                      businesses to stay informed about emerging trends and
                      technologies. Machine learning, artificial intelligence,
                      and real-time science are shaping the future of
                      data-driven decision-making. Companies that invest in
                      these innovations will be well-equipped to navigate the
                      complexities of the digital age.
                    </p>
                    <p>
                      Data science empowers businesses to not only understand
                      past performance but also anticipate future trends with
                      remarkable accuracy. By leveraging historical data,
                      companies can build predictive models that forecast sales,
                      customer behavior, and market shifts. This foresight
                      enables organizations to proactively address potential
                      challenges and seize opportunities before they arise. For
                      example, retailers can optimize inventory levels by
                      predicting demand patterns, while financial institutions
                      can detect fraud by analyzing transaction anomalies. The
                      ability to make data-driven predictions transforms
                      uncertainty into actionable insights, driving strategic
                      decision-making and enhancing overall business resilience.
                    </p>
                  </div>
                  <div class="blog-bottom">
                    <!-- Social Share -->
                    <ul class="social-share">
                      <li class="facebook">
                        <a href="#"
                          ><i class="fa fa-facebook"></i
                          ><span>Facebook</span></a
                        >
                      </li>
                      <li class="twitter">
                        <a href="#"
                          ><i class="fa fa-twitter"></i><span>Twitter</span></a
                        >
                      </li>
                      <li class="google-plus">
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </li>
                      <li class="linkedin">
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                      </li>
                      <li class="pinterest">
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                      </li>
                    </ul>
                    <!-- Next Prev -->
                    <ul class="prev-next">
                      <li class="prev">
                        <a href="#"><i class="fa fa-angle-double-left"></i></a>
                      </li>
                      <li class="next">
                        <a href="#"><i class="fa fa-angle-double-right"></i></a>
                      </li>
                    </ul>
                    <!--/ End Next Prev -->
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="blog-comments">
                  <h2>All Comments</h2>
                  <div class="comments-body">
                    <!-- Single Comments -->
                    <div class="single-comments">
                      <div class="main">
                        <div class="head">
                          <img src="img/author1.jpg" alt="#" />
                        </div>
                        <div class="body">
                          <h4>Alex Johnson</h4>
                          <div class="comment-meta">
                            <span class="meta"
                              ><i class="fa fa-calendar"></i>August 05,
                              2024</span
                            ><span class="meta"
                              ><i class="fa fa-clock-o"></i>09:12 AM</span
                            >
                          </div>
                          <p>
                            This blog perfectly captures the transformative
                            power of data. It's incredible to see how
                            data-driven insights can drive decision-making and
                            uncover hidden patterns. Looking forward to more
                            articles on this topic!
                          </p>
                          <a href="#"><i class="fa fa-reply"></i>reply</a>
                        </div>
                      </div>
                    </div>
                    <!--/ End Single Comments -->
                    <!-- Single Comments -->
                    <div class="single-comments left">
                      <div class="main">
                        <div class="head">
                          <img src="img/author2.jpg" alt="#" />
                        </div>
                        <div class="body">
                          <h4>Maria Gonzalez</h4>
                          <div class="comment-meta">
                            <span class="meta"
                              ><i class="fa fa-calendar"></i>September 25,
                              2024</span
                            ><span class="meta"
                              ><i class="fa fa-clock-o"></i>10:25 AM</span
                            >
                          </div>
                          <p>
                            The examples provided in this article are very
                            insightful. Data science has truly revolutionized
                            industries by offering actionable insights that were
                            previously inaccessible.
                          </p>
                          <a href="#"><i class="fa fa-reply"></i>reply</a>
                        </div>
                      </div>
                    </div>
                    <!--/ End Single Comments -->
                    <!-- Single Comments -->
                    <div class="single-comments">
                      <div class="main">
                        <div class="head">
                          <img src="img/author3.jpg" alt="#" />
                        </div>
                        <div class="body">
                          <h4>Suriya Molharta</h4>
                          <div class="comment-meta">
                            <span class="meta"
                              ><i class="fa fa-calendar"></i>August 05,
                              2024</span
                            ><span class="meta"
                              ><i class="fa fa-clock-o"></i>11:38 AM</span
                            >
                          </div>
                          <p>
                            I appreciate the depth of analysis in this post. It
                            highlights the immense value that accurate data can
                            bring to strategic planning and operational
                            efficiency. Great read!
                          </p>
                          <a href="#"><i class="fa fa-reply"></i>replay</a>
                        </div>
                      </div>
                    </div>
                    <!--/ End Single Comments -->
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="comments-form">
                  <h2>Leave Comments</h2>
                  <!-- Contact Form -->
                  <form class="form" method="post" action="mail/mail.php">
                    <div class="row">
                      <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                          <i class="fa fa-user"></i>
                          <input
                            type="text"
                            name="first-name"
                            placeholder="First name"
                            required="required"
                          />
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                          <i class="fa fa-envelope"></i>
                          <input
                            type="text"
                            name="last-name"
                            placeholder="Last name"
                            required="required"
                          />
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                          <i class="fa fa-envelope"></i>
                          <input
                            type="email"
                            name="email"
                            placeholder="Your Email"
                            required="required"
                          />
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group message">
                          <i class="fa fa-pencil"></i>
                          <textarea
                            name="message"
                            rows="7"
                            placeholder="Type Your Message Here"
                          ></textarea>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group button">
                          <button type="submit" class="btn primary">
                            <i class="fa fa-send"></i>Submit Comment
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                  <!--/ End Contact Form -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <div class="main-sidebar">
              <!-- Single Widget -->
              <div class="single-widget search">
                <div class="form">
                  <input type="email" placeholder="Search Here..." />
                  <a class="button" href="#"><i class="fa fa-search"></i></a>
                </div>
              </div>
              <!--/ End Single Widget -->
              <!-- Single Widget -->
              <div class="single-widget category">
                <h3 class="title">Blog Categories</h3>
                <ul class="categor-list">
                  <li><a href="#">Innovative Software Solutions</a></li>
                  <li><a href="#">Cutting-edge Web Apps</a></li>
                  <li><a href="#">AI & Machine Learning Tools</a></li>
                  <li><a href="#">Development Frameworks</a></li>
                  <li><a href="#">Tech Gadgets & Accessories</a></li>
                </ul>
              </div>
              <!--/ End Single Widget -->
              <!-- Single Widget -->
              <div class="single-widget recent-post">
                <h3 class="title">Recent post</h3>
                <!-- Single Post -->
                <div class="single-post">
                  <div class="image">
                    <img src="img/blog-sidebar1.jpg" alt="#" />
                  </div>
                  <div class="content">
                    <h5><a href="#">We have annnocuced our new product.</a></h5>
                    <ul class="comment">
                      <li>
                        <i class="fa fa-calendar" aria-hidden="true"></i>Jan 11,
                        2024
                      </li>
                      <li>
                        <i class="fa fa-commenting-o" aria-hidden="true"></i>35
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- End Single Post -->
                <!-- Single Post -->
                <div class="single-post">
                  <div class="image">
                    <img src="img/blog-sidebar2.jpg" alt="#" />
                  </div>
                  <div class="content">
                    <h5>
                      <a href="#"
                        >Top five way for solving software vulnarabilities.</a
                      >
                    </h5>
                    <ul class="comment">
                      <li>
                        <i class="fa fa-calendar" aria-hidden="true"></i>Mar 05,
                        2024
                      </li>
                      <li>
                        <i class="fa fa-commenting-o" aria-hidden="true"></i>59
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- End Single Post -->
                <!-- Single Post -->
                <div class="single-post">
                  <div class="image">
                    <img src="img/blog-sidebar3.jpg" alt="#" />
                  </div>
                  <div class="content">
                    <h5>
                      <a href="#">We provide highly business soliutions.</a>
                    </h5>
                    <ul class="comment">
                      <li>
                        <i class="fa fa-calendar" aria-hidden="true"></i>June
                        09, 2024
                      </li>
                      <li>
                        <i class="fa fa-commenting-o" aria-hidden="true"></i>44
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- End Single Post -->
              </div>
              <!--/ End Single Widget -->
              <!-- Single Widget -->
              <!--/ End Single Widget -->
              <!-- Single Widget -->
              <div class="single-widget side-tags">
                <h3 class="title">Tags</h3>
                <ul class="tag">
                  <li><a href="#">business</a></li>
                  <li><a href="#">wordpress</a></li>
                  <li><a href="#">React</a></li>
                  <li><a href="#">multipurpose</a></li>
                  <li><a href="#">education</a></li>
                  <li><a href="#">Django</a></li>
                  <li><a href="#">Ecommerce</a></li>
                </ul>
              </div>
              <!--/ End Single Widget -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ End Single News -->

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
                        <a href="index.php"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Home</a
                        >
                      </li>
                      <li>
                        <a href="about.php"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >About Us</a
                        >
                      </li>
                      <li>
                        <a href="/resources.php"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Resources</a
                        >
                      </li>
                      <li>
                        <a href="/courses.php"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Our Courses</a
                        >
                      </li>
                      <li>
                        <a href="/signup.php"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Sign up</a
                        >
                      </li>
                    </ul>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                    <ul>
                      <li>
                        <a href="#"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Consultation</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Finance</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Testimonials</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >FAQ</a
                        >
                      </li>
                      <li>
                        <a href="/contact.php"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Contact Us</a
                        >
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
                <form
                  action="mail/mail.php"
                  method="get"
                  target="_blank"
                  class="newsletter-inner"
                >
                  <input
                    name="email"
                    placeholder="Email Address"
                    class="common-input"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Your email address'"
                    required=""
                    type="email"
                  />
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
