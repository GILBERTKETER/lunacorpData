<?php
// session_start();
// include './db_conn.php'; 
// $email = '';

// if (isset($_SESSION['LOGGED_IN_EMAIL'])) {
//     $email = $_SESSION['LOGGED_IN_EMAIL'];
//     exit();
// }

// $sql = "SELECT user_type FROM lunacorp_students WHERE Email_Address = ?";
// $stmt = $mysqli->prepare($sql);
// $stmt->bind_param("s", $email);
// $stmt->execute();
// $stmt->bind_result($user_type);
// $stmt->fetch();
// $stmt->close();
// $mysqli->close();

// $is_admin = ($user_type === 'administrator');
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
    content="width=device-width, initial-scale=1, shrink-to-fit=no" />

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
    rel="stylesheet" />

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
            points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
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
                <i class="fa fa-envelope"></i><a href="mailto:support@yourmail.com">info@lunacorpdata.co.ke</a>
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
                      <a href="#">Home <i class="icofont-rounded-down"></i></a>
                      <ul class="dropdown">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="/about.php">About Us</a></li>
                      </ul>
                    </li>
                    <li><a href="/resources.php">Resources </a></li>
                    <li><a href="/courses.php">Courses</a></li>
                    <li>
                      <a href="#">Blogs <i class="icofont-rounded-down"></i></a>
                      <ul class="dropdown">
                        <li><a href="blog-single.php">Blog Details</a></li>
                      </ul>
                    </li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <!-- <?php //if ($is_admin): 
                          ?>
    <li><a href="admin.php">Admin</a></li>
<?php //endif; 
?> -->
                  </ul>
                </nav>
              </div>
              <!--/ End Main Menu -->
            </div>
            <div class="col-lg-2 col-12">
              <div class="get-quote">
              <a href="https://wa.me/254708487969" target="_blank" class="btn"><i class="fa fa-whatsapp" aria-hidden="true"></i>
              </i>Enroll with us</a>              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ End Header Inner -->
  </header>
  <!-- End Header Area -->

  <!-- Slider Area -->
  <section class="slider">
    <div class="hero-slider">
      <!-- Start Single Slider -->
      <div
        class="single-slider"
        style="background-image: url('img/slider2.jpg')">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="text">
                <h1>
                  We Provide <span>Data Science</span> Training That You Can
                  <span>Excel In!</span>
                </h1>
                <p style="color:#2196F3;">
                  Discover our comprehensive data science courses designed to
                  help you master SQL, Excel, Tableau, and more. Gain
                  practical skills and insights to advance your career in data
                  analysis.
                  Unleash the power of data with our cutting-edge curriculum. From Excel mastery to AI implementation, we transform novices into industry-ready data titans. Don't just learn tools - master the art of turning raw data into business gold. Your future in data science starts here - are you ready to disrupt the status quo?
                </p>

                <div class="button">
                  <a href="/courses.php" class="btn">Enroll on a course</a>
                  <a href="/courses.php" class="btn primary">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Single Slider -->
      <!-- Start Single Slider -->
      <div
        class="single-slider"
        style="background-image: url('img/slider1.jpg')">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="text">
                <h1>
                  Unlock Your <span>Data Science</span> Potential with
                  <span>Expert Training!</span>
                </h1>
                <p>
                  Elevate your skills with our expert-led courses in data
                  science. Learn SQL, Excel, Tableau, and other essential
                  tools to turn data into actionable insights and drive
                  success.
                  Stuck in a dead-end job? Harness the data revolution and catapult your career into overdrive. Our elite training turns data novices into in-demand professionals. Change your career now, secure your future, and join the ranks of data heroes shaping tomorrow's business landscape.
                </p>

                <div class="button">
                  <a href="#" class="btn">Enroll Now</a>
                  <a href="#" class="btn primary">About Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Start End Slider -->
      <!-- Start Single Slider -->
      <div
        class="single-slider"
        style="background-image: url('img/slider3.jpg')">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="text">
                <h1>
                  Earn <span>$100,000+</span> with Our
                  <span>Tailored Courses!</span>
                </h1>
                <p>
                  Data Mastery Countdown: Your Future Starts Now!
                  No coding experience? No problem! Our proven step-by-step approach ensures a smooth start for beginners.
                  Our proprietary RAPID Learning System: Real-world Applications, Personalized Instruction, and Data Immersion
                </p>

                <div class="button">
                  <a href="/courses.php" class="btn">Enroll Now</a>
                  <a href="/courses.php" class="btn primary">Conatct Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Single Slider -->
    </div>
  </section>
  <!--/ End Slider Area -->

  <!-- Start Schedule Area -->
  <section class="schedule">
    <div class="container">
      <div class="schedule-inner">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <!-- single-schedule -->
            <div class="single-schedule first">
              <div class="inner">
                <div class="icon">
                  <i class="icofont-file-code"></i>
                </div>
                <div class="single-content">
                  <span>Data Insights</span>
                  <h4>Real-Time Analysis</h4>
                  <p>
                    Stay ahead with real-time data analysis and actionable
                    insights. Our training ensures you can effectively
                    interpret and utilize data for informed decision-making.
                  </p>

                  <a href="/courses.php">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <!-- single-schedule -->
            <div class="single-schedule middle">
              <div class="inner">
                <div class="icon">
                  <i class="icofont-database"></i>
                </div>
                <div class="single-content">
                  <span>Expert Guidance</span>
                  <h4>Comprehensive Learning</h4>
                  <p>
                    Our courses provide expert guidance in data science, from
                    SQL to Tableau. Gain a thorough understanding of data
                    analysis techniques and tools to excel in your field.
                  </p>

                  <a href="/courses.php">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-12">
            <!-- single-schedule -->
            <div class="single-schedule last">
              <div class="inner">
                <div class="icon">
                  <i class="icofont-ui-clock"></i>
                </div>
                <div class="single-content">
                  <span>Our Schedule</span>
                  <h4>Course Availability</h4>
                  <ul class="time-sidual">
                    <li class="day">
                      Monday - Friday <span>9.00-18.00</span>
                    </li>
                    <li class="day">Saturday <span>10.00-16.00</span></li>
                    <li class="day">Sunday <span>Closed</span></li>
                  </ul>

                  <a href="/courses.php">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/End Start schedule Area -->

  <!-- Start Feautures -->
  <section class="Feautes section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <h2>
            New to Data World? Here Is the Chance
            Data Industry Waits on No One. Start Your Journey Today</h2>
            <img src="img/data1.png" alt="#" />
            
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-12">
          <!-- Start Single features -->
          <div class="single-features">
            <div class="signle-icon">
              <i class="icofont icofont-chart-line"></i>
            </div>
            <h3>Expert Guidance</h3>
            <p>
              Receive personalized instruction from industry experts in data
              science and science.
            </p>
          </div>
          <!-- End Single features -->
        </div>
        <div class="col-lg-4 col-12">
          <!-- Start Single features -->
          <div class="single-features">
            <div class="signle-icon">
              <i class="icofont icofont-database"></i>
            </div>
            <h3>Hands-On Projects</h3>
            <p>
              Engage in real-world projects to apply your knowledge and gain
              practical experience.
            </p>
          </div>
          <!-- End Single features -->
        </div>
        <div class="col-lg-4 col-12">
          <!-- Start Single features -->
          <div class="single-features last">
            <div class="signle-icon">
              <i class="icofont icofont-tools"></i>
            </div>
            <h3>Advanced Tools</h3>
            <p>
              Master essential data analysis tools such as SQL, Excel, and
              Tableau through comprehensive training.
            </p>
          </div>
          <!-- End Single features -->
        </div>
      </div>
    </div>
  </section>

  <!--/ End Feautes -->

  <!-- Start Fun-facts -->
  <div id="fun-facts" class="fun-facts section overlay">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Fun -->
          <div class="single-fun">
            <i class="icofont icofont-graduation"></i>
            <div class="content">
              <span class="counter">1200</span>
              <p>Courses Completed</p>
            </div>
          </div>
          <!-- End Single Fun -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Fun -->
          <div class="single-fun">
            <i class="icofont icofont-users-alt-2"></i>
            <div class="content">
              <span class="counter">3000</span>
              <p>Students Enrolled</p>
            </div>
          </div>
          <!-- End Single Fun -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Fun -->
          <div class="single-fun">
            <i class="icofont icofont-star"></i>
            <div class="content">
              <span class="counter">1500</span>
              <p>Positive Reviews</p>
            </div>
          </div>
          <!-- End Single Fun -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Fun -->
          <div class="single-fun">
            <i class="icofont icofont-clock-time"></i>
            <div class="content">
              <span class="counter">10</span>
              <p>Years of Experience</p>
            </div>
          </div>
          <!-- End Single Fun -->
        </div>
      </div>
    </div>
  </div>

  <!--/ End Fun-facts -->

  <!-- Start Why choose -->
  <section class="why-choose section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <h2>Why Choose LunaCorp Data for Your Data Training Needs</h2>
            <img src="img/section-img.png" alt="#" />
            <p>
              At LunaCorp Data, we provide top-notch data science and
              science education, tailored to help you excel in the
              data-driven world. Our courses are designed to meet industry
              standards and offer hands-on experience with essential tools.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-12">
          <!-- Start Choose Left -->
          
          <div class="choose-left">
          <div class="row">
              <div class="col-lg-6">
                <ul class="list">
                  <li>
                    <i class="fa fa-caret-right"></i>Expert-led courses with
                    real-world projects.
                  </li>
                  <li>
                    <i class="fa fa-caret-right"></i>Access to cutting-edge
                    tools and technologies.
                  </li>
                  <li>
                    <i class="fa fa-caret-right"></i>Flexible learning options
                    to suit your schedule.
                  </li>
                  <li>
                    <i class="fa fa-caret-right"></i>Foundations of Machine Learning.
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list">
                  <li>
                    <i class="fa fa-caret-right"></i>Comprehensive curriculum
                    covering essential data tools.
                  </li>
                  <li>
                    <i class="fa fa-caret-right"></i>Hands-on experience with
                    real datasets.
                  </li>
                  <li>
                    <i class="fa fa-caret-right"></i>Supportive community and
                    career guidance.
                  </li>
                  <li>
                    <i class="fa fa-caret-right"></i>Generative AI
                  </li>

                </ul>
              </div>
            </div>
            </div>
          <!-- End Choose Left -->
        </div>
        <div class="col-lg-6 col-12">
          <!-- Start Choose Rights -->
          <div class="choose-right">
            <div class="video-image">
              <!-- Video Animation -->
              <div class="promo-video">
                <div class="waves-block">
                  <div class="waves wave-1"></div>
                  <div class="waves wave-2"></div>
                  <div class="waves wave-3"></div>
                </div>
              </div>
              <!--/ End Video Animation -->
              <a
                href="https://www.youtube.com/watch?v=RFVXy6CRVR4"
                class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
            </div>
          </div>
          <!-- End Choose Rights -->
        </div>
      </div>
      <div class="choose-left">
            <h3>Why We Stand Out</h3>
            <p>
              1. <span style="font-weight: bold;">Real-World Impact: Our alumni don't just analyze data;</span> they transform industries. From predicting market trends to optimizing supply chains, our graduates are the silent forces driving global business decisions.

            </p>
            <p>
              2. <span style="font-weight: bold;">Cutting-Edge Curriculum:</span> We don't follow the tech curve; we create it. Our programs integrate the latest in AI, machine learning, and predictive analytics before they become industry buzzwords.
            </p>
            <p>
              3. <span style="font-weight: bold;">Unparalleled Expertise:</span> Our instructors aren't just teachers; they're industry titans. With decades of combined experience at tech giants and innovative startups, they bring the battlefield of big data into the classroom.

            </p>
            <p>
            <span style="font-weight: bold;">Business-Centric Approach:</span> Data science isn't just about numbers; it's about driving business value. We equip our students with the acumen to translate data insights into strategic gold.

            </p>
            <p>
              5. <span style="font-weight: bold;">Breeding Ground for Innovators and Entrepreneurs:</span> We don't just create employees; we cultivate the next generation of data visionaries. Our program has spawned numerous successful data-driven startups and fostered a culture of innovation that's reshaping the tech landscape.


            </p>
            <div class="row">
              Our Track Record Speaks Volumes:
              - 95% of our graduates secure top-tier positions within 3 months
              - Our alumni network spans 50+ countries and includes CTOs, CDOs, and data science leaders
              - We've contributed to groundbreaking research in AI ethics and data governance
              - Over 30 data-centric startups founded by our alumni in the last 3 years.

              <p>The Future is Data-Driven, and We're at the Wheel:
              Join an institution that doesn't just predict the future of data science—we create it. With our legacy of innovation and our finger on the pulse of industry trends, we're uniquely positioned to launch your career into the stratosphere of data excellence.</p>

              <p>Don't just learn data science. Master it. Transform it. Redefine it. Your journey to data mastery starts here. The next evolution in your career is just one decision away. <a style="color: blue;" href="/courses.php">[Apply Now]</a> – Limited spots available for our next cohort of future data leaders.
              </p>
              <p>Remember, in the world of data, timing is everything. Don't let this opportunity slip through your fingers.</p>
            </div>
           
          </div>
    </div>
  </section>

  <!--/ End Why choose -->

  <!-- Start Call to action -->
  <section class="call-action overlay" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
          <div class="content">
            <h2>Ready to Enhance Your Data Skills? Join Us Today!</h2>
            <p>
              Discover comprehensive courses and hands-on training in data
              science and science. Take the next step in your career with
              LunaCorp Data.
            </p>
            <div class="button">
              <a href="/signin.php" class="btn">Get Started</a>
              <a href="/courses.php" class="btn second">Explore Courses<i class="fa fa-long-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--/ End Call to action -->

  <!-- Start portfolio -->
  <section class="portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <h2>Explore Our Latest Data Projects</h2>
            <img src="img/section-img.png" alt="Portfolio Section Image" />
            <p>
              Discover how LunaCorp Data has successfully tackled various data
              challenges and projects.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-12">
          <div class="owl-carousel portfolio-slider">
            <div class="single-pf">
              <img src="img/data1.png" alt="Project 1" />
              <a href="/courses.php" class="btn">View Details</a>
            </div>
            <div class="single-pf">
              <img src="img/sql1.png" alt="Project 2" />
              <a href="/courses.php" class="btn">View Details</a>
            </div>
            <div class="single-pf">
              <img src="img/db1.png" alt="Project 3" />
              <a href="/courses.php" class="btn">View Details</a>
            </div>
            <div class="single-pf">
              <img src="img/sql2.png" alt="Project 4" />
              <a href="/courses.php" class="btn">View Details</a>
            </div>
            <!-- Additional Projects -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--/ End portfolio -->

  <!-- Start service -->
  <section class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <h2>Our Data Solutions and Services</h2>
            <img src="img/section-img.png" alt="Services Section Image" />
            <p>
              LunaCorp Data offers a variety of services to help you optimize
              and leverage your data effectively.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Start Single Service -->
          <div class="single-service">
            <i class="icofont icofont-chart"></i>
            <h4><a href="/signin.php">Data science</a></h4>
            <p>
              Comprehensive analysis to drive business insights and decisions.
            </p>
          </div>
          <!-- End Single Service -->
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Start Single Service -->
          <div class="single-service">
            <i class="icofont icofont-data"></i>
            <h4><a href="/signin.php">Data Management</a></h4>
            <p>Efficiently manage and maintain your data infrastructure.</p>
          </div>
          <!-- End Single Service -->
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Start Single Service -->
          <div class="single-service">
            <i class="icofont icofont-analysis"></i>
            <h4><a href="/signin.php">Predictive science</a></h4>
            <p>
              Utilize advanced techniques to forecast future trends and
              behaviors.
            </p>
          </div>
          <!-- End Single Service -->
        </div>
        <!-- Additional Services -->
      </div>
    </div>
  </section>

  <!--/ End service -->

  <!-- Pricing Table -->
  <section class="pricing-table section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <h2>Affordable Pricing for Data Services</h2>
            <img
              src="img/section-img.png"
              alt="Pricing Table Section Image" />
            <p>
              We offer competitive prices for high-quality data solutions.
              Choose the plan that fits your needs.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Single Table -->
        <div class="col-lg-4 col-md-12 col-12">
          <div class="single-table">
            <!-- Table Head -->
            <div class="table-head">
              <div class="icon">
                <i class="icofont icofont-science"></i>
              </div>
              <h4 class="title">Free: "Data Career Readiness Quiz"         </h4>
              <div class="price">
                <p class="amount">Free<span></span></p>
              </div>
            </div>
            <!-- Table List -->
            <ul class="table-list">
              <li>
                <i class="icofont icofont-ui-check"></i> Introduction to Data Science
              </li>
              <li>
                <i class="icofont icofont-ui-check"></i> Data Analytics Fundamentals
              </li>
              <li class="">
                <i class="icofont icofont-ui-check"></i> Career Pathways in Data Science
              </li>
              <li class="">
                <i class="icofont icofont-ui-check"></i> Quiz Results and Recommendations
              </li>
            </ul>
            <!-- <div class="table-bottom">
              <a class="btn" href="/courses.php">Select Plan</a>
            </div> -->
          </div>
        </div>
        <!-- End Single Table-->
        <!-- Single Table -->
        <div class="col-lg-4 col-md-12 col-12">
          <div class="single-table">
            <!-- Table Head -->
            <div class="table-head">
              <div class="icon">
                <i class="icofont icofont-chart-bar"></i>
              </div>
              <h4 class="title">Low-ticket: "5-Day Data Fundamentals Challenge - Intensive Data Science Interview Prep"
              </h4>
              <div class="price">
                <p class="amount">$ 40<span>/ Per Month</span></p>
              </div>
            </div>
            <!-- Table List -->
            <ul class="table-list">
              <li>
                <i class="icofont icofont-ui-check"></i> Data Analysis Techniques
              </li>
              <li>
                <i class="icofont icofont-ui-check"></i> Data Visualization Tools
              </li>
              <li>
                <i class="icofont icofont-ui-check"></i> Statistical Methods
              </li>
              <li class="">
                <i class="icofont icofont-ui-check"></i> Mock Interviews and Q&A
              </li>
            </ul>
            <!-- <div class="table-bottom">
              <a class="btn" href="/courses.php">Select Plan</a>
            </div> -->
          </div>
        </div>
        <!-- Single Table -->
        <div class="col-lg-4 col-md-12 col-12">
          <div class="single-table">
            <!-- Table Head -->
            <div class="table-head">
              <div class="icon">
                <i class="icofont icofont-chart-bar"></i>
              </div>
              <h4 class="title">Core offer: "15-Week Data Scientist Bootcamp"
              </h4>
              <div class="price">
                <p class="amount">$ 1,999<span>/ 15 weeks</span></p>
              </div>
            </div>
            <!-- Table List -->
            <ul class="table-list">
              <li>
                <i class="icofont icofont-ui-check"></i> Data Science Fundamentals
              </li>
              <li>
                <i class="icofont icofont-ui-check"></i> Advanced Data Analysis
              </li>
              <li>
                <i class="icofont icofont-ui-check"></i> Machine Learning and AI
              </li>
              <li class="">
                <i class="icofont icofont-ui-check"></i> Real-World Projects and Case Studies
              </li>
            </ul>
            <!-- <div class="table-bottom">
              <a class="btn" href="/courses.php">Select Plan</a>
            </div> -->
          </div>
        </div>
        <!-- End Single Table-->
        <!-- Single Table -->
        <div class="col-lg-4 col-md-12 col-12">
          <div class="single-table">
            <!-- Table Head -->
            <div class="table-head">
              <div class="icon">
                <i class="icofont icofont-data"></i>
              </div>
              <h4 class="title">High-ticket: "1-Year Data Analyst Career Accelerator"              </h4>
              <div class="price">
                <p class="amount">$2, 499<span>/ Per Year</span></p>
              </div>
            </div>
            <!-- Table List -->
            <ul class="table-list">
              <li>
                <i class="icofont icofont-ui-check"></i> Advanced Data Science
              </li>
              <li>
                <i class="icofont icofont-ui-check"></i> Data Management and Engineering
              </li>
              <li>
                <i class="icofont icofont-ui-check"></i> Business Intelligence and Strategy
              </li>
              <li>
                <i class="icofont icofont-ui-check"></i> Capstone Project and Career Coaching
              </li>
            </ul>
            <!-- <div class="table-bottom">
              <a class="btn" href="/courses.php">Select Plan</a>
            </div> -->
          </div>
        </div>
        <!-- End Single Table-->
      </div>
    </div>
  </section>

  <!--/ End Pricing Table -->

  <!-- Start Blog Area -->
  <section class="blog section" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <h2>Stay Updated with the Latest in Data Science</h2>
            <img src="img/section-img.png" alt="Blog Section Image" />
            <p>
              Keep up with our latest articles and insights on data science
              and science.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Single Blog -->
          <div class="single-news">
            <div class="news-head">
              <img src="img/data3.png" alt="Blog Post 1" />
            </div>
            <div class="news-body">
              <div class="news-content">
                <div class="date">22 Aug, 2024</div>
                <h4>
                  <a href="blog-details.php">Understanding Big Data Trends</a>
                </h4>
                <p>
                  Dive deep into the latest trends and technologies shaping
                  the future of big data.
                </p>
              </div>
            </div>
          </div>
          <!-- End Single Blog -->
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Single Blog -->
          <div class="single-news">
            <div class="news-head">
              <img src="img/data1.png" alt="Blog Post 2" />
            </div>
            <div class="news-body">
              <div class="news-content">
                <div class="date">15 Aug, 2024</div>
                <h4>
                  <a href="blog-details.php">Data Visualization Best Practices</a>
                </h4>
                <p>
                  Learn the best practices for effective data visualization
                  and communication.
                </p>
              </div>
            </div>
          </div>
          <!-- End Single Blog -->
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Single Blog -->
          <div class="single-news">
            <div class="news-head">
              <img src="img/sql2.png" alt="Blog Post 3" />
            </div>
            <div class="news-body">
              <div class="news-content">
                <div class="date">10 Aug, 2024</div>
                <h4>
                  <a href="blog-details.php">The Role of AI in Data science</a>
                </h4>
                <p>
                  Explore how artificial intelligence is revolutionizing data
                  science.
                </p>
              </div>
            </div>
          </div>
          <!-- End Single Blog -->
        </div>
      </div>
    </div>
  </section>

  <!-- End Blog Area -->


  <!-- Start Appointment -->
  <section class="appointment">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <h2>
              New to the data world? Here is the chance! The data industry waits on no one. Start your journey today.</h2>
            <img src="img/section-img.png" alt="#" />
            <p>
              At LunaCorp Data, we're committed to helping you make the most
              of your data. Whether you need a consultation or have specific
              data challenges, our team is here to assist. Reach out to book
              an appointment and take the first step towards optimizing your
              data solutions.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-12 col-12">
          <form class="form" action="#">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <input name="name" type="text" placeholder="Name" />
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <input name="email" type="email" placeholder="Email" />
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <input name="phone" type="text" placeholder="Phone" />
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <div class="nice-select form-control wide" tabindex="0">
                    <span class="current">Department</span>
                    <ul class="list">
                      <li data-value="1" class="option selected">
                        Data science
                      </li>
                      <li data-value="2" class="option">Python for Data</li>
                      <li data-value="3" class="option">SQL Ninjas</li>
                      <li data-value="4" class="option">Advanced Excel</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <div class="nice-select form-control wide" tabindex="0">
                    <span class="current">Instructors</span>
                    <ul class="list">
                      <li data-value="2" class="option" selected>
                        Dev Sydney Ochieng
                      </li>
                      <li data-value="3" class="option">Dev Keter</li>
                      <li data-value="4" class="option">Developer Brian</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <input type="text" placeholder="Date" id="datepicker" />
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-12">
                <div class="form-group">
                  <textarea
                    name="message"
                    placeholder="Write Your Message Here....."></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-5 col-md-4 col-12">
                <div class="form-group">
                  <div class="button">
                    <button type="submit" class="btn">
                      Book An Appointment
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-8 col-12">
                <p>We will confirm your appointment via text message.</p>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="appointment-image">
            <img src="img/contact-img.png" alt="#" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Appointment -->

  <!-- Start Newsletter Area -->
  <section class="newsletter section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12">
          <!-- Start Newsletter Form -->
          <div class="subscribe-text">
            <h6>Sign Up for Our Newsletter</h6>
            <p>
              Stay updated with the latest news, offers, and updates by
              subscribing to our newsletter. Don't miss out on important
              information and exclusive content!
            </p>
          </div>
          <!-- End Newsletter Form -->
        </div>
        <div class="col-lg-6 col-12">
          <!-- Start Newsletter Form -->
          <div class="subscribe-form">
            <form
              action="mail/mail.php"
              method="get"
              target="_blank"
              class="newsletter-inner">
              <input
                name="EMAIL"
                placeholder="Your email address"
                class="common-input"
                onfocus="this.placeholder = ''"
                onblur="this.placeholder = 'Your email address'"
                required=""
                type="email" />
              <button class="btn">Subscribe</button>
            </form>
          </div>
          <!-- End Newsletter Form -->
        </div>
      </div>
    </div>
  </section>
  <!-- /End Newsletter Area -->

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
              <form
                action="mail/mail.php"
                method="get"
                target="_blank"
                class="newsletter-inner">
                <input
                  name="email"
                  placeholder="Email Address"
                  class="common-input"
                  onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Your email address'"
                  required=""
                  type="email" />
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