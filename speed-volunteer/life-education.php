<?php
  // include header
session_start();
    include_once 'includes/header.php';
?>

<title>Life education | <?php echo SITE_TITLE;?></title>
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
               <h2>Life education</h2>
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

              <h3 class="text-orange">Life and death education</h3>
              <p>Birth, old age, sickness, and death are the necessary stages of life. Death seems to be the end of the journey of life, but it can also be regarded as the graduation ceremony of life. If the elders can actively face the final stages of their lives, arrange a plan for the elders in advance so that the elders and their families can be relieved and feel complete when facing the end of their lives.</p>

              <p class="text-orange">​Our services:</p>

              <p>- Organize life and death education seminars (e.g. introducing different funerals, organ and body donations, advance wills, advance medical instructions and enduring power of attorneys, etc.) in Hong Kong<br>
                - Organizing trips (such as visiting the Heheshi Cemetery, sea burial, Changsheng shop, cremation ground, etc.)<br>
                - Referral service (only applicable to the elderly who have no relatives)</p>

              <p>All the above activities and contacts are planned and executed by registered social workers who have taken courses related to supporting dementia.</p>

              <p>All the above activities and contacts are planned and executed by senior registered social workers.</p>
            </div>

            <div class="col-sm-5" style="margin-top: 50px;">
              <img src="<?php echo BASEURL;?>/assets/img/life.png">
            </div>
          </div>

          <div class="row" style="margin-top: 50px;">
            <div class="col-sm-4 col-xs-12">
              <img src="<?php echo BASEURL;?>/assets/img/life-1.png">
            </div>
            <div class="col-sm-4 col-xs-12">
              <img src="<?php echo BASEURL;?>/assets/img/life-2.png">
            </div>
            <div class="col-sm-4 col-xs-12">
              <img src="<?php echo BASEURL;?>/assets/img/life-3.png">
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