<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title><?= $pageTitle ?? '' ?> - <?= APP_NAME ?></title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?= ROOT ?>/assets/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?= ROOT ?>/assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?= ROOT ?>/assets/css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="<?= ROOT ?>/pages/index">
            <span>
              <?= APP_NAME ?>
            </span>
          </a>
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item <?php if($pageTitle == 'Homepage') {echo'active';}else{echo'';}?>">
                  <a class="nav-link" href="<?= ROOT ?>/pages/index">Home <span class="sr-only">(current)</span></a>
                </li>
                <?php if (!Auth::logged_in()) : ?>
                  <li class="nav-item <?php if($pageTitle == 'About page') {echo'active';}else{echo'';}?>">
                    <a class="nav-link" href="<?= ROOT ?>/pages/about"> About </a>
                  </li>
                  <li class="nav-item <?php if($pageTitle == 'Service page') {echo'active';}else{echo'';}?>">
                    <a class="nav-link" href="<?= ROOT ?>/pages/service"> Services </a>
                  </li>
                  <li class="nav-item <?php if($pageTitle == 'Contact page') {echo'active';}else{echo'';}?>">
                    <a class="nav-link" href="<?= ROOT ?>/pages/contact">Contact us</a>
                  </li>

                  <li class="nav-item <?php if($pageTitle == 'Login page') {echo'active';}else{echo'';}?>">
                    <a class="btn btn-outline-danger ml-2" href="<?= ROOT ?>/users/login">Login</a>
                  </li>
                  <li class="nav-item <?php if($pageTitle == 'Signup page') {echo'active';}else{echo'';}?>">
                    <a class="btn btn-outline-success ml-2" href="<?= ROOT ?>/users/register">Signup</a>
                  </li>
                <?php else : ?>
                  
                  <li class="nav-item <?php if($pageTitle == 'About page') {echo'active';}else{echo'';}?>">
                    <a class="nav-link" href="<?= ROOT ?>/users/jobs">Jobs</a>
                  </li>
                  <li class="nav-item <?php if($pageTitle == 'About page') {echo'active';}else{echo'';}?>">
                    <a class="nav-link" href="<?= ROOT ?>/users/profile">Profile</a>
                  </li>
                  <li class="nav-item <?php if($pageTitle == 'About page') {echo'active';}else{echo'';}?>">
                    <a class="nav-link" href="<?= ROOT ?>/users/profile/<?=Auth::getId()?>">Hi, <?=Auth::getFirstname()?></a>
                  </li>
                  <li class="nav-item">
                    <a class="btn btn-outline-success" href="<?= ROOT ?>/users/logout">Logout</a>
                  </li>
                <?php endif; ?>
              </ul>
            </div>
          </div>
          <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
          </form>
        </nav>
      </div>
    </header>
    <!-- end header section -->


    <?php require("../app/views/" . $view . ".php"); ?>



    <!-- info section -->
    <section class="info_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="info-logo">
              <h2>
                Heustonn
              </h2>
              <p>
                It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of
              </p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info-nav">
              <h4>
                Navigation
              </h4>
              <ul>
                <li>
                  <a href="index.html">
                    Home
                  </a>
                </li>
                <li>
                  <a href="about.html">
                    About
                  </a>
                </li>
                <li>
                  <a href="service.html">
                    Services
                  </a>
                </li>
                <li>
                  <a href="contact.html">
                    Contact Us
                  </a>
                </li>
                <li>
                  <a href="#">
                    Login
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info-contact">
              <h4>
                Contact Info
              </h4>
              <div class="location">
                <h6>
                  Corporate Office Address:
                </h6>
                <a href="">
                  <img src="images/location.png" alt="">
                  <span>
                    Loram ipusm New York, NY 36524
                  </span>
                </a>
              </div>
              <div class="call">
                <h6>
                  Customer Service:
                </h6>
                <a href="">
                  <img src="images/telephone.png" alt="">
                  <span>
                    ( +01 1234567890 )
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="discover">
              <h4>
                Discover
              </h4>
              <ul>
                <li>
                  <a href="">
                    Help
                  </a>
                </li>
                <li>
                  <a href="">
                    How It Works

                  </a>
                </li>
                <li>
                  <a href="">
                    subscribe
                  </a>
                </li>
                <li>
                  <a href="contact.html">
                    Contact Us
                  </a>
                </li>
              </ul>
              <div class="social-box">
                <a href="">
                  <img src="images/facebook.png" alt="">
                </a>
                <a href="">
                  <img src="images/twitter.png" alt="">
                </a>
                <a href="">
                  <img src="images/google-plus.png" alt="">
                </a>
                <a href="">
                  <img src="images/linkedin.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end info_section -->



    <!-- footer section -->
    <section class="container-fluid footer_section">
      <p>
        Copyright &copy; 2019 All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="<?= ROOT ?>/assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?= ROOT ?>/assets/js/bootstrap.js"></script>
</body>

</html>