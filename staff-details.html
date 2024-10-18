<?php
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Service Details - Gp Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/fcom_logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="service-details-page">

  <header id="header" class="header d-flex align-items-center position-relative">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="assets/img/Logo FCOM Official 2020 copy-02 - Copy.png">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html#hero">Home<br></a></li>
          <li><a href="index.html#services">Programs</a></li>
          <li><a href="about/about.html">About</a></li>
          <!-- <li><a href="#portfolio">Portfolio</a></li> -->
          <li class="dropdown"><a href="#" class="active"><span>Manangements</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="profile/index1.php?username=1" class="active">Dean</a></li>
              <li><a href="profile/index2.php?username=2">Deputy Dean</a></li>
              <li><a href="profile/index4.php">Professor Adjunct</a></li>
              <li><a href="profile/index3.php?username=45">Junior Executive</a></li>
              <li><a href="staff.php">Staff</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Activities</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="activities/index1.html">Student Activities</a></li>
              <li><a href="activities/index.html">Faculty Activities</a></li>
              <li><a href="programs/index6.php">Research and Inovation</a></li>
            </ul>
          </li>
          <li><a href="index.html#contact">Contact</a></li>
          <li><a class="edit" href="uptm-web/index.php">Edit Staff</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
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

              $a = "SELECT * FROM users WHERE id='$username'";

              $result = @mysqli_query ($db, $a);

              if($result)
              {
                  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                  {
                    echo '<img src="assets/img/'.$row["id"].'.png" alt="">

                            <div class="service-box">
                              <h4>Download Catalog</h4>
                              <div class="download-catalog">
                              <div id="alert_message"></div>
                              <a id="displayWidthBtn" style="cursor: pointer;"><i class="bi bi-filetype-pdf"></i><span>Download CV PDF</span></a>
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
                                        window.location.href = "resume.php?username='.$row["user_name"].'";
                                    }
                                });

                              </script>
                            <a href="update_profile/login_page.php?id='.$row["id"].'"><i class="bi bi-pencil-square"></i><span>Update Profile</span></a>
                          </div>
                        </div><!-- End Services List -->';
                        
                  }

                  mysqli_free_result ($result);

              }
              else
              {
                  echo '<p class ="error"> The current data could not be retrieved.
                  We apologize for any inconvenience.</p>';
                  
                  echo '<p>'.mysqli_error ($db).'<br><br/>Query:'.$a.'</p>'; 
              }

              $a = "SELECT * FROM staff WHERE staff_id='$username'";

              $result = @mysqli_query ($db, $a);

              if($result)
              {
                  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                  {
                  
                        echo'

                        <div class="help-box d-flex flex-column justify-content-center align-items-center">
                          <i class="bi bi-headset help-icon"></i>
                          <h4>Have a Question?</h4>
                          <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>'.$row["staff_tel"].'</span></p>
                          <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="mailto:'.$row["staff_email"].'">'.$row["staff_email"].'</a></p>
                        </div>

                      </div>';
                      
                  }

                  mysqli_free_result ($result);

              }
              else
              {
                  echo '<p class ="error"> The current data could not be retrieved.
                  We apologize for any inconvenience.</p>';
                  
                  echo '<p>'.mysqli_error ($db).'<br><br/>Query:'.$a.'</p>'; 
              }

              $a = "SELECT * FROM staff WHERE staff_id='$username'";

              $result = @mysqli_query ($db, $a);

              if($result)
              {
                  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                  {
                      
                      echo'

                      <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <h3>'.$row["staff_name"].'<span>';
                        
                  }

                  mysqli_free_result ($result);

              }
              else
              {
                  echo '<p class ="error"> The current data could not be retrieved.
                  We apologize for any inconvenience.</p>';
                  
                  echo '<p>'.mysqli_error ($db).'<br><br/>Query:'.$a.'</p>'; 
              }

              $a = "SELECT * FROM staff WHERE staff_id='$username'";

              $result = @mysqli_query ($db, $a);

              if($result)
              {
                  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                  {
                        
                        echo' - '.$row["staff_field"].'</span></h3>
                    ';
                  }

                  mysqli_free_result ($result);

              }
              else
              {
                  echo '<p class ="error"> The current data could not be retrieved.
                  We apologize for any inconvenience.</p>';
                  
                  echo '<p>'.mysqli_error ($db).'<br><br/>Query:'.$a.'</p>'; 
              }

              $a = "SELECT * FROM contact INNER JOIN users ON contact.user_name = users.user_name WHERE users.id='$username'";

              $result = @mysqli_query ($db, $a);

              if($result)
              {
                  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                  {
                        
                        echo'
                        <p>
                          '.$row["position"].'
                        </p>
                        <br>';
                  }

                  mysqli_free_result ($result);

              }
              else
              {
                  echo '<p class ="error"> The current data could not be retrieved.
                  We apologize for any inconvenience.</p>';
                  
                  echo '<p>'.mysqli_error ($db).'<br><br/>Query:'.$a.'</p>'; 
              }

              $a = "SELECT * FROM aca_qualification INNER JOIN users ON aca_qualification.user_name = users.user_name WHERE users.id='$username' ORDER BY year DESC LIMIT 1";

              $result = @mysqli_query ($db, $a);

              if($result)
              {
                  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                  {

                        echo'
                        <h4 style="font-weight: bold; ">
                          Higher Education : 
                        </h4>
                        <ul>
                          <li><i class="bi bi-check-circle"></i> <span>'.$row["kelulusan"].'</span></li>
                        </ul>
                    ';
                  }

                  mysqli_free_result ($result);

              }
              else
              {
                  echo '<p class ="error"> The current data could not be retrieved.
                  We apologize for any inconvenience.</p>';
                  
                  echo '<p>'.mysqli_error ($db).'<br><br/>Query:'.$a.'</p>'; 
              }


              $b = "SELECT * FROM kerja_penerbitan INNER JOIN users ON kerja_penerbitan.user_name = users.user_name WHERE users.id='$username' ORDER BY tahun_terbit DESC";

              $result1 = @mysqli_query ($db, $b);

              if($result1)
              {
                echo '<br>
                        <h4 style="font-weight: bold;">
                          PUBLICATIONS : 
                        </h4>';

                  while($row1=mysqli_fetch_array($result1, MYSQLI_ASSOC))
                  {
                    
                    echo '<div style="border-bottom: 1px solid black; padding: 15px 0;">
                        <ul>
                          <li><span style="font-weight: bold;">'.$row1["jenis_terbit"].'&nbsp;&nbsp;:&nbsp;&nbsp;'.$row1["penerbit"].'</span></li>
                          <li><i class="bi bi-check-circle"></i><span>'.$row1["tajuk_terbit"].' - <span style="font-weight: bold;">'.$row1["tahun_terbit"].'</span></span></li>
                        </ul>
                        </div>';
                  }

                  mysqli_free_result ($result1);

              }
              else
              {
                  echo '<p class ="error"> The current data could not be retrieved.
                  We apologize for any inconvenience.</p>';
                  
                  echo '<p>'.mysqli_error ($db).'<br><br/>Query:'.$b.'</p>'; 
              }

              // $c = "SELECT * FROM aca_qualification WHERE id='$username'";

              // $result2 = @mysqli_query ($db, $c);

              // if($result2)
              // {
              //   echo '<br>
              //           <p style="font-weight: bold;">
              //             EDUCATIONs : 
              //           </p>';

              //     while($row2=mysqli_fetch_array($result2, MYSQLI_ASSOC))
              //     {
                    
              //       echo '
              //           <ul>
              //             <li><span style="font-weight: bold;">'.$row2["ipt_name"].'</span>&nbsp;&nbsp;:&nbsp;&nbsp;<span>'.$row2["year"].'</span></li>
              //             <li><i class="bi bi-check-circle"></i> <span>'.$row2["kelulusan"].'</span></li>
              //           </ul>';
              //     }

              //     mysqli_free_result ($result2);

              // }
              // else
              // {
              //     echo '<p class ="error"> The current data could not be retrieved.
              //     We apologize for any inconvenience.</p>';
                  
              //     echo '<p>'.mysqli_error ($db).'<br><br/>Query:'.$b.'</p>'; 
              // }
                  
              mysqli_close($db);

            ?>
            
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logoUptm.png">
            </a>
            <div class="footer-contact pt-3">
              <p>Jalan 6/91, Taman Shamelin Perkasa,</p>
              <p>56100 Cheras, Kuala Lumpur</p>
              <br>
              <p class="mt-2"><strong>General Line : </strong> <span>+603 9206 9700</span></p>
              <p class="mt-2"><strong>Tel : </strong> <span>+603 92837186 (Marketing)</span></p>
              <p class="mt-2"><strong>Fax : </strong> <span>+603 92810475</span></p>
              <p><strong>Email : </strong> <span>marketing@uptm.edu.my</span></p>
            </div>
            <div class="social-links d-flex mt-4">
              <a href="https://www.youtube.com/@uptm_official" target="_blank"><i class="bi bi-youtube"></i></a>
              <a href="https://www.tiktok.com/@uptm_official" target="_blank"><i class="bi bi-tiktok"></i></a>
              <a href="https://www.instagram.com/uptm_official" target="_blank"><i class="bi bi-instagram"></i></a>
              <a href="https://www.facebook.com/uptm.official/" target="_blank"><i class="bi bi-facebook"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="https://cmskl.kptm.edu.my:8011/smp/index2.php" target="_blank"> CMS Staff</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank"> Staff Email</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://lms.uptm.edu.my/0824/login/index.php" target="_blank"> LMS Portal</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://ucam.uptm.edu.my/lecturer/login" target="_blank"> UCAM System</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://hrms.kptm.edu.my:4080/" target="_blank"> eP2P System</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="http://kptmnet.kptm.edu.my/kptmnet/admin/" target="_blank"> Kptmnet Portal</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://pmskptm.info/" target="_blank"> KPI System</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://eadmission.kptm.edu.my/main/login" target="_blank"> Agent Portal</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://aduan.kptm.edu.my/eaduan/" target="_blank"> e-Aduan System</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://aduan.kptm.edu.my/integriti/" target="_blank"> Sistem Aduan Integriti</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="http://aces.kptm.edu.my:2180/" target="_blank"> ACES System</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://www1.grpgov.com/saga/Frames/Login.aspx?ReturnUrl=%2fsaga" target="_blank"> GRP Century System</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://sys.kptm.edu.my/staff/" target="_blank"> Staff Directory</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Programes</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#services"> Foundation</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#services"> Diploma</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#services"> Bachelor</a></li>
            </ul>
          </div>

          <!-- <div class="col-lg-4 col-md-12 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div> -->

        </div>
      </div>
    </div>

    <div class="copyright">
      <div class="container text-center">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">FCOM</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="https://www.instagram.com/mrhaz_/">Haxel</a>
        </div>
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
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
