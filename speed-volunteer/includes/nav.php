<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container-fluid d-flex">

    <div class="logo mr-auto">
      <h1 class="text-light"><a href="<?php echo BASEURL;?>"><span>Speed</span> Volunteer</a></h1>
    </div>

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li><a href="<?php echo BASEURL;?>/index.php/">Home</a></li>
        <li><a href="<?php echo BASEURL;?>/about-us/">About Us</a></li>
        <li class="drop-down"><a href="<?php echo BASEURL;?>/new-services-and-courses/">New Services & Courses</a>
          <ul>
            <li><a href="<?php echo BASEURL;?>/elderly-caring/">Elderly caring</a></li>
            <li><a href="<?php echo BASEURL;?>/mental-health-caring-license/">Mental health caring license</a></li>
            <li><a href="<?php echo BASEURL;?>/campus-disinfection/">Campus disinfection</a></li>
          </ul>
        </li>
        <li class="drop-down"><a href="<?php echo BASEURL;?>/youth-services/">Youth Services</a>
          <ul>
            <li><a href="<?php echo BASEURL;?>/kids-training/">Kids training</a></li>
            <li><a href="<?php echo BASEURL;?>/teens-training/">Teens training</a></li>
            <li><a href="<?php echo BASEURL;?>/volunteer-training/">Volunteer training</a></li>
          </ul>
        </li>
        <li class="drop-down"><a href="<?php echo BASEURL;?>/welling-for-youths/">Welling for Youths</a>
          <ul>
            <li><a href="<?php echo BASEURL;?>/joyful-tutors-training-courses/">Joyful Tutors training courses</a></li>
              <li><a href="<?php echo BASEURL;?>/life-education/">Life education</a></li>
              <li><a href="<?php echo BASEURL;?>/what-is-dementia/">What is dementia</a></li>
          </ul>
        </li>
        <li class="drop-down"><a href="<?php echo BASEURL;?>/welling-and-activities-for-elders/">Welling & Activities for Elders</a>
          <ul>

              <li><a href="<?php echo BASEURL;?>/elderly-thought/">Elderly thought</a></li>

            <li><a href="<?php echo BASEURL;?>/elderly-boxing-class/">Elderly boxing class</a></li>
          </ul>
        </li>
        <li><a href="<?php echo BASEURL;?>/contact-us/">Contact / Support us</a></li>


          <li><a href="<?php echo BASEURL;?>/register/">Application</a></li>

          <?php

          if(empty($_SESSION['adminStatus']))
              echo "
          <li><a href=\"http://localhost/webproject/speed-volunteer/login/\">Login</a></li>
          ";
          else



          if(isset($_SESSION['adminStatus']))
          {
              if($_SESSION['adminStatus']===false){
                  echo "
          <li><a href=\"http://localhost/webproject/speed-volunteer/login/\">Login</a></li>
          ";
              }

              if ($_SESSION['adminStatus']===true) {

                  echo "
          <li><a href=\"../logout.php\" tite=\"Logout\">LoginOut</a></li>
          ";
                  echo "
                 <li><a href=\"http://localhost/webproject/speed-volunteer/admin/\">Admin</a></li>
          ";
              }
          }


//      if ((empty($_SESSION['adminStatus']))  ){
//              echo "
//          <li><a href=\"http://localhost/webproject/speed-volunteer/login/\">Login</a></li>
//          ";
//      }
//     else{
//
//          echo "
//          <li><a href=\"http://localhost/webproject/speed-volunteer/\">LoginOut</a></li>
//          ";
//      }



          ?>


             
  





      </ul>
    </nav><!-- .nav-menu -->

  </div>
</header><!-- End Header -->

