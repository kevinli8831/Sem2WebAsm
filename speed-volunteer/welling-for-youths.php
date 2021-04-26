<?php
  // include header
session_start();
    include_once 'includes/header.php';
?>

<title>Welling for youths | <?php echo SITE_TITLE;?></title>
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
               <h2>Welling for youths</h2>
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

              <h3 class="text-orange">Lohas Youth</h3>
              <p>After landing in life, the most important thing is to live happily and do what you want to do. But sometimes I want to do something, but there is no one to accompany me, so I was forced to shelve or cancel the plan. It is also possible or want to find a fresh combination, so that ordinary things can sparkle and leave better memories.</p>

              <p>Just to make everyone’s life more exciting, just do it if you want. Now we are happy to arrange for you, accompany you, and be your good helper in finding the most satisfying life.</p>

              <p>As landers, there are different code names. Some people say it is the third age, while others say it is "Senior" Ying. We believe that today's landers are also young people, and they can also make use of their strengths and make their lives happy and happy to become Lohas youths</p>
            </div>

            <div class="col-sm-5" style="margin-top: 50px;">
              <img src="<?php echo BASEURL;?>/assets/img/welling.png">
            </div>
          </div>

          <div class="row" style="margin-top: 50px;">
            <div class="col-sm-4 col-xs-12">
              <img src="<?php echo BASEURL;?>/assets/img/welling-1.png">
            </div>
            <div class="col-sm-4 col-xs-12">
              <img src="<?php echo BASEURL;?>/assets/img/welling-2.png">
            </div>
            <div class="col-sm-4 col-xs-12">
              <img src="<?php echo BASEURL;?>/assets/img/welling-3.png">
            </div>
          </div>
          <div class="row" style="margin-top: 30px;">
            <div class="col-sm-4 col-xs-12">
              <img src="<?php echo BASEURL;?>/assets/img/welling-4.png">
            </div>
            <div class="col-sm-4 col-xs-12">
              <img src="<?php echo BASEURL;?>/assets/img/welling-5.png">
            </div>
            <div class="col-sm-4 col-xs-12">
              <img src="<?php echo BASEURL;?>/assets/img/welling-6.png">
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