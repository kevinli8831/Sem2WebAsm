<?php
  // include header
    include_once 'includes/header.php';
?>

<title>Campus disinfection | <?php echo SITE_TITLE;?></title>
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <?php
    // include menu bar
      include_once 'includes/nav.php';
  ?>

  <main id="main">

    <div id="about" class="about-area page-header">
      <div class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
               <h2>Campus disinfection</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container">

          <div class="row">
            <div class="col-sm-7 col-xs-12">

              <h3 class="text-orange">City of combating the disease Professional Disinfection</h3>
              <p>Service content: disinfection of all indoor places</p>
              <p>Staff: 2-3 people<br>
              Cost: $4800</p>
              <p>Contact number:<br>
              Whatapps: +123 456 789<br>
              Website: www.speedvolunteer.com<br>
              Email: info@speedvolunteer.com</p>

              <video width="100%" controls="true" src="<?php echo BASEURL;?>/assets/img/video.mp4"></video>

            </div>

            <div class="col-sm-5">
              <img src="<?php echo BASEURL;?>/assets/img/campus.png">
            </div>
          </div>

          <div class="row" style="margin-top: 50px;">
            <div class="col-sm-4 col-xs-12">
              <img src="<?php echo BASEURL;?>/assets/img/campus-1.png">
            </div>
            <div class="col-sm-4 col-xs-12">
              <img src="<?php echo BASEURL;?>/assets/img/campus-2.png">
            </div>
            <div class="col-sm-4 col-xs-12">
              <img src="<?php echo BASEURL;?>/assets/img/campus-3.png">
            </div>
          </div>

        </div>
      </div>
    </div>

  </main>
   
  <?php
    // include footer
      include_once 'includes/footer.php';
  ?>

</body>

</html>