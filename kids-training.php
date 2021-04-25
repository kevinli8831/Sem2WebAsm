<?php
  // include header
    include_once 'includes/header.php';
?>

<title>Kids training | <?php echo SITE_TITLE;?></title>
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
               <h2>Kids training</h2>
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

              <h3 class="text-orange">Children's training activities</h3>
              <p>All activities are planned and executed by registered adventure instructors and registered social workers</p>

              <p>The activities are designed to cater for the elements needed by children's growth.</p>

              <p>Through different adventure activities to enhance the self-confidence of participants and the spirit of teamwork.</p>

              <p>Activities can include water activities, camp activities, orienteering activities.</p>
            </div>

            <div class="col-sm-5" style="margin-top: 50px;">
              <img src="<?php echo BASEURL;?>/assets/img/kids.png">
            </div>
          </div>

          <div class="row" style="margin-top: 50px;">
            <div class="col-sm-6 col-xs-12">
             <p>+ Self-care camp activities<br>
              + Independent camp activities<br>
              + Positive experience camp<br>
              + Parent-child day camp<br>
              + Two days and one night camp training camp<br>
              + Three days and two nights training camp<br>
              + Parent-child camping activities<br>
              + STEM experience camp</p>
            </div>
            <div class="col-sm-6 col-xs-12">
              <img src="<?php echo BASEURL;?>/assets/img/kids-1.png">
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