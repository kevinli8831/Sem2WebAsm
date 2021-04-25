<?php
session_start();
  // include header
    include_once 'includes/header.php';
?>

<title>Home | <?php echo SITE_TITLE;?></title>
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <?php
    // include menu bar
      include_once 'includes/nav.php';
  ?>

  <!-- ======= Slider Section ======= -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="<?php echo BASEURL;?>/assets/img/slider/slider-1.jpg" alt="" title="#slider-direction-1" />
        <img src="<?php echo BASEURL;?>/assets/img/slider/slider-2.jpg" alt="" title="#slider-direction-2" />
        <img src="<?php echo BASEURL;?>/assets/img/slider/slider-3.jpg" alt="" title="#slider-direction-3" />
        <img src="<?php echo BASEURL;?>/assets/img/slider/slider-4.jpg" alt="" title="#slider-direction-4" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow animate__slideInDown animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">New Services & Courses</h2>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="<?php echo BASEURL;?>/new-services-and-courses/">Learn more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Youth Services</h2>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="<?php echo BASEURL;?>/youth-services/">Learn more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Welling for Youths</h2>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="<?php echo BASEURL;?>/welling-for-youths/">Learn more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 4 -->
      <div id="slider-direction-4" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Welling & Activities for Elders</h2>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="<?php echo BASEURL;?>/welling-and-activities-for-elders/">Learn more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div><!-- End Slider -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>About <?php echo SITE_TITLE; ?></h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="<?php echo BASEURL;?>/assets/img/about-us.jpg" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h4 class="sec-head">About us</h4>
                </a>
                <p>The Hong Kong Youth Professional Training Association Limited was established in 2018. In the early stage of establishment, our main service target was corporate training. We can see the development and growth of young people in recent years. We are convinced that only the changes made after entering their lives are real and effective.</p>
                <ul>
                  <li>
                    <i class="fa fa-check"></i> New Services & Courses
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Youth Services
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Welling for Youths
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Welling & Activities for Elders
                  </li>
                </ul>
                
                <br/>
                
                <a href="<?php echo BASEURL;?>/about-us/" class="btn-outlined">Learn more</a>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <div id="services" class="services-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>Our Services</h2>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <h4><a href="<?php echo BASEURL;?>/elderly-caring/">Elderly caring</a></h4>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <h4><a href="<?php echo BASEURL;?>/mental-health-caring-license/">Mental health caring license</a></h4>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <h4><a href="<?php echo BASEURL;?>/campus-disinfection/">Campus disinfection</a></h4>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <h4><a href="<?php echo BASEURL;?>/kids-training/">Kids training</a></h4>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <h4><a href="<?php echo BASEURL;?>/teens-training/">Teens training</a></h4>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <h4><a href="<?php echo BASEURL;?>/volunteer-training/">Volunteer training</a></h4>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Services Section -->

    <!-- ======= Rviews Section ======= -->
    <div class="reviews-area">
      <div class="row no-gutters">
        <div class="col-lg-6 py-0" style="background: url('assets/img/working-with-us.jpg') center center no-repeat; background-size: cover;">
        </div>
        <div class="col-lg-6 work-right-text d-flex align-items-center">
          <div class="px-5 py-5" style="padding-top: 100px !important; padding-bottom: 100px !important;">
            <h2>working with us</h2>
            <h5>Student support and Participate in activities</h5>
            <a href="<?php echo BASEURL;?>/contact-us/" class="ready-btn scrollto">Contact us</a>
          </div>
        </div>
      </div>
    </div><!-- End Rviews Section -->

    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="portfolio-area area-padding fix">
      <div class="container">
        <div class="row awesome-project-content">
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo BASEURL;?>/assets/img/portfolio/1.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo BASEURL;?>/assets/img/portfolio/1.jpg">
                      <h4>Volunteer</h4>
                      <span>Service</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo BASEURL;?>/assets/img/portfolio/2.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo BASEURL;?>/assets/img/portfolio/2.jpg">
                      <h4>Family</h4>
                      <span>Activities</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo BASEURL;?>/assets/img/portfolio/3.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo BASEURL;?>/assets/img/portfolio/3.jpg">
                      <h4>Circle</h4>
                      <span>Painting</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 photo development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo BASEURL;?>/assets/img/portfolio/4.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo BASEURL;?>/assets/img/portfolio/4.jpg">
                      <h4>Confidence</h4>
                      <span>Challenge</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo BASEURL;?>/assets/img/portfolio/5.jpg" alt="" /></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo BASEURL;?>/assets/img/portfolio/5.jpg">
                      <h4>Snorkeling</h4>
                      <span>Activities</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo BASEURL;?>/assets/img/portfolio/6.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo BASEURL;?>/assets/img/portfolio/6.jpg">
                      <h4>Self-care</h4>
                      <span>Training camp</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
        </div>
      </div>
    </div><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <?php
    // include footer
      include_once 'includes/footer.php';
  ?>

</body>

</html>