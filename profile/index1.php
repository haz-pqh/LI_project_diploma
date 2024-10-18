<?php
    include("../connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - iPortfolio Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main1.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
      <img src="../assets/img/staff/1.png" alt="" class="img-fluid rounded-circle" style="background-color: rgba(255, 255, 255, 0.663);">
    </div>

    <a class="logo d-flex align-items-center justify-content-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <?php

        if ((isset ($_GET['username'])))
        {
            $username = $_GET['username'];
          }
          else if ((isset ($_POST['username'])))
          {
              $username = $_POST['username'];
          }
          else
          {
            echo '<p class ="error">This page has been accessed in error.</p>';
            exit();
        }

      $a = "SELECT * FROM contact INNER JOIN staff ON contact.user_name = staff.user_name WHERE id='$username'";

      $result = @mysqli_query ($db, $a);

      if($result)
      {
        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
          echo"
              <h1 class='sitename' style='text-align: center;'>".$row['name']."</h1>";
        }
      }

      ?>

    </a>

    <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="../index.html#hero">Home<br></a></li>
          <li><a href="../index.html#services">Programs</a></li>
          <li><a href="../about/about.html">About</a></li>
          <!-- <li><a href="#portfolio">Portfolio</a></li> -->
          <li class="dropdown"><a href="#"><span>Manangements</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="../profile/index1.php?username=1" class="active">Dean</a></li>
              <li><a href="../profile/index2.php?username=2">Deputy Dean</a></li>
              <li><a href="../profile/index4.php">Professor Adjunct</a></li>
              <li><a href="../profile/index3.php?username=45">Executive Officer</a></li>
              <li><a href="../staff.php">Staff</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Activities</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="../activities/index1.html">Student Activities</a></li>
              <li><a href="../activities/index.html">Faculty Activities</a></li>
              <li><a href="../programs/index6.php">Research and Inovation</a></li>
            </ul>
          </li>
          <li><a href="../index.html#contact">Contact</a></li>
          <li><a href="../update_profile/login_page.php?id=1">Update Profile</a></li>
          <br>
          <br>

          <?php

            $a = "SELECT * FROM contact INNER JOIN staff ON contact.user_name = staff.user_name WHERE id='$username'";
                  
            $result = @mysqli_query ($db, $a);

            if($result)
            {
              while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
              {
                echo '
                <div id="alert_message"></div>
                <li><a id="displayWidthBtn" style="cursor: pointer;">Download CV PDF</a></li>
                              <script>
                                document.getElementById("displayWidthBtn").addEventListener("click", function() {
                                    // Get the width of the page
                                    var pageWidth = window.innerWidth;

                                    // Display the width in the paragraph
                                    if(pageWidth < 1090){
                                        document.getElementById("alert_message").innerHTML = `<div class="alert alert-danger" role="alert">
                                                                                                Only can download on desktop!!
                                                                                              </div>`;
                                    }else{
                                        window.location.href = "../resume.php?username='.$row['user_name'].'";
                                    }
                                });

                              </script>';
              }
            }
          ?>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

  </header>

  <main class="main">
    <!-- Hero Section -->
    <section id="" class="hero section dark-background">

      <img src="assets/img/wall3.png" alt="" data-aos="fade-in" class="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

      <?php

        $a = "SELECT * FROM contact INNER JOIN staff ON contact.user_name = staff.user_name WHERE id='$username'";

        $result = @mysqli_query ($db, $a);

        if($result)
        {
          while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
          {
            echo"
                <h2>".$row['name']."</h2>
                <p>I'm <span class='typed' data-typed-items='".$row['position']."'>".$row['position']."</span><span class='typed-cursor typed-cursor--blink' aria-hidden='true'></span></p>
                ";
          }
        }

      ?>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Profile</h2>
        <p>-</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/DEAN.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">

          <?php

            $a = "SELECT * FROM contact INNER JOIN staff ON contact.user_name = staff.user_name WHERE id='$username'";

            $result = @mysqli_query ($db, $a);

            if($result)
            {
              while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
              {
                echo"<h2>".$row['name']."</h2>
                    <p class='fst-italic py-3'>
                    ".$row['position']." of FCOM at Universiti Poly-Tech Malaysia.
                    </p>";
              }
            }

          ?>
            
            <section id="" class="contact section" style="margin-top: -40px;">

              <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                  <div class="col-lg-7">

                    <div class="info-wrap">

                    <?php

                      $a = "SELECT * FROM staff WHERE staff_id='$username'";

                      $result = @mysqli_query ($db, $a);

                      if($result)
                      {
                        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                        {
                          echo"<div class='info-item d-flex' data-aos='fade-up' data-aos-delay='300'>
                                <i class='bi bi-telephone flex-shrink-0'></i>
                                <div>
                                  <h3>Call Me</h3>
                                  <p>".$row['staff_tel']."</p>
                                </div>
                              </div><!-- End Info Item -->

                              <div class='info-item d-flex' data-aos='fade-up' data-aos-delay='400'>
                                <i class='bi bi-envelope flex-shrink-0'></i>
                                <div>
                                  <h3>Email Me</h3>
                                  <p>".$row['staff_email']."</p>
                                </div>
                              </div><!-- End Info Item -->";
                        }
                      }

                    ?>
                      
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- /Contact Section -->
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <h3 class="resume-title">Education</h3>

            <?php
            
            $a = "SELECT * FROM aca_qualification INNER JOIN users ON aca_qualification.user_name = users.user_name WHERE users.id = $username ORDER BY year DESC LIMIT 3";

            $result = @mysqli_query($db, $a);
    
            if($result)
            {
                while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                {
                
                echo '
                    <div class="resume-item">
                      <h4>'.$row['kelulusan'].'</h4>
                      <h5>'.$row['year'].'</h5>
                      <p><em>'.$row['ipt_name'].'</em></p>
                    </div><!-- Edn Resume Item -->';
                }
    
            }
            ?>

          </div>

          
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <?php

            
              echo '<h3 class="resume-title">Publication and Journals</h3>';

              $a = "SELECT * FROM kerja_penerbitan INNER JOIN users ON kerja_penerbitan.user_name = users.user_name WHERE users.id = $username ORDER BY tahun_terbit DESC LIMIT 3";

              $result = @mysqli_query($db, $a);

              if($result)
              {
                  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                  {
                  
                  echo '
                      <div class="resume-item">
                        <h4>'.$row['tajuk_terbit'].'</h4>
                        <h5>'.$row['penerbit'].'</h5>
                        <p><em>'.$row['tahun_terbit'].'</em></p>
                      </div><!-- Edn Resume Item -->';
                  }

              }

            ?>      

          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">FCOM</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://www.instagram.com/mrhaz_/">Haxel</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
