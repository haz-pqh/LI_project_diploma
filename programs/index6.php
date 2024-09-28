<?php
    include("../connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>FCOM Official Website</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/fcom_logo.png" rel="icon">
  <link href="assets/img/fcom_logo.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main6.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="../index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="../assets/img/Logo FCOM Official 2020 copy-02 - Copy - Copy.png">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="../index.html#hero">Home<br></a></li>
          <li><a href="../index.html#services">Programs</a></li>
          <li><a href="../about/about.html">About</a></li>
          <li class="dropdown"><a href="#"><span>Manangements</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="../profile/index1.php?username=1">Dean</a></li>
              <li><a href="../profile/index2.php?username=2">Deputy Dean</a></li>
              <li><a href="../profile/index4.php">Professor Adjunct</a></li>
              <li><a href="../profile/index3.php?username=45">Executive Officer</a></li>
              <li><a href="../staff.php">Staff</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="active"><span>Activities</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="../activities/index1.html">Student Activities</a></li>
              <li><a href="../activities/index.html">Faculty Activities</a></li>
              <li><a href="../programs/index6.php">Research and Inovation</a></li>
            </ul>
          </li>
          <li><a href="../index.html#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="" class="hero section dark-background">
    <img src="assets/img/wall.jpg">
    
      <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">RESEARCH AND INNOVATIONS<span></span></h2>
            <p class="animate__animated animate__fadeInUp"></p>
          </div>
        </div>

      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

    </section><!-- /Hero Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">

        <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
              <i class="bi bi-archive"></i>
              <h4 class="d-none d-lg-block">Publications</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
              <i class="bi bi-archive"></i>
              <h4 class="d-none d-lg-block">Awards</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
              <i class="bi bi-archive"></i>
              <h4 class="d-none d-lg-block">Innovations</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
              <i class="bi bi-archive"></i>
              <h4 class="d-none d-lg-block">E-Books</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-5">
              <i class="bi bi-archive"></i>
              <h4 class="d-none d-lg-block">IP Copyrights</h4>
            </a>
          </li>
          <!-- <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-6">
              <i class="bi bi-archive"></i>
              <h4 class="d-none d-lg-block">Knowledge & Technology Transfer Program</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-7">
              <i class="bi bi-archive"></i>
              <h4 class="d-none d-lg-block">University Social Responsibility (USR)</h4>
            </a>
          </li> -->
        </ul><!-- End Tab Nav -->

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1">
            <!-- FAQ 1 - Bootstrap Brain Component -->
            <section class="bg-light py-3 py-md-5">
              <div class="container">
                <div class="row gy-5 gy-lg-0 align-items-lg-center">
                  <div class="col-12 col-lg-6">
                    <img class="img-fluid rounded" loading="lazy" src="assets/img/image1.jpg" alt="How can we help you?">
                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="row justify-content-xl-end">
                      <div class="col-12 col-xl-11">
                        <h2 class="h1 mb-3">Publications</h2>
                        <p class="lead fs-4 text-secondary mb-5">We hope you have found an answer to your question. If you need any help, please search your query on our Support Center or contact us via email.</p>
                        <div class="accordion accordion-flush" id="accordionExample">

                        <?php

                          echo '<div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button style="font-weight: bold;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      WOS
                                    </button>
                                  </h2>
                                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">';
                                    
                                    $a = "SELECT *, GROUP_CONCAT(name SEPARATOR '<li>') AS names FROM kerja_penerbitan INNER JOIN contact ON kerja_penerbitan.user_name = contact.user_name WHERE jenis_terbit='WOS' GROUP BY tajuk_terbit HAVING COUNT(*) > 1 OR COUNT(*) = 1 ORDER BY tahun_terbit DESC";

                                    $result = @mysqli_query ($db, $a);

                                    $t1 = 1;

                                    if($result)
                                    {
                                        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                                        {
                                          echo'
                                          <p><span style="font-weight: bold;">'.$row["tahun_terbit"].' - </span><a href="'.$row["link"].'" target="_blank" style="font-weight: normal;">'.$row["tajuk_terbit"].'</a></p>
                                          <div class="accordion" id="accordionExampleW'.$t1.'">
                                            <div class="accordion-item">
                                              <h2 class="accordion-header" id="headingSmallW'.$t1.'">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSmallW'.$t1.'" aria-expanded="false" aria-controls="collapseSmallW'.$t1.'">
                                                  Authors
                                                </button>
                                              </h2>
                                              <div id="collapseSmallW'.$t1.'" class="accordion-collapse collapse" aria-labelledby="headingSmallW'.$t1.'" data-bs-parent="#accordionExampleW'.$t1.'">
                                                <div class="accordion-body">
                                                  <li>'.$row["names"].'
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <br>
                                          <br>';

                                          $t1++;
                                        }

                                    mysqli_free_result ($result);

                                    }
                                    else
                                    {
                                    echo '<p class ="error"> The current data could not be retrieved.
                                    We apologize for any inconvenience.</p>';

                                    echo '<p>'.mysqli_error ($db).'<br><br/>Query:'.$a.'</p>'; 
                                    }

                                      echo'</div>
                                        </div>
                                      </div>';

                                // item 2
                                echo '<div class="accordion-item">
                                  <h2 class="accordion-header" id="headingTwo">
                                    <button style="font-weight: bold;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                      SCOPUS
                                    </button>
                                  </h2>
                                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">';
                                    
                                    $a = "SELECT *, GROUP_CONCAT(name SEPARATOR '<li>') AS names FROM kerja_penerbitan INNER JOIN contact ON kerja_penerbitan.user_name = contact.user_name WHERE jenis_terbit='SCOPUS' GROUP BY tajuk_terbit HAVING COUNT(*) > 1 OR COUNT(*) = 1 ORDER BY tahun_terbit DESC";

                                    $result = @mysqli_query ($db, $a);

                                    $t1 = 1;

                                    if($result)
                                    {
                                        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                                        {
                                          echo'
                                          <p><span style="font-weight: bold;">'.$row["tahun_terbit"].' - </span><a href="'.$row["link"].'" target="_blank" style="font-weight: normal;">'.$row["tajuk_terbit"].'</a></p>
                                          <div class="accordion" id="accordionExampleS'.$t1.'">
                                            <div class="accordion-item">
                                              <h2 class="accordion-header" id="headingSmallS'.$t1.'">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSmallS'.$t1.'" aria-expanded="false" aria-controls="collapseSmallS'.$t1.'">
                                                  Authors
                                                </button>
                                              </h2>
                                              <div id="collapseSmallS'.$t1.'" class="accordion-collapse collapse" aria-labelledby="headingSmallS'.$t1.'" data-bs-parent="#accordionExampleS'.$t1.'">
                                                <div class="accordion-body">
                                                  <li>'.$row["names"].'
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <br>
                                          <br>';
                                          
                                          $t1++;
                                        }

                                    mysqli_free_result ($result);

                                    }
                                    else
                                    {
                                    echo '<p class ="error"> The current data could not be retrieved.
                                    We apologize for any inconvenience.</p>';

                                    echo '<p>'.mysqli_error ($db).'<br><br/>Query:'.$a.'</p>'; 
                                    }

                                      echo'
                                    </div>
                                  </div>
                                </div>';

                                // item 3
                                echo '<div class="accordion-item">
                                  <h2 class="accordion-header" id="headingThree">
                                    <button style="font-weight: bold;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                      ERA
                                    </button>
                                  </h2>
                                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">';
                                    
                                    $a = "SELECT *, GROUP_CONCAT(name SEPARATOR '<li>') AS names FROM kerja_penerbitan INNER JOIN contact ON kerja_penerbitan.user_name = contact.user_name WHERE jenis_terbit='ERA' GROUP BY tajuk_terbit HAVING COUNT(*) > 1 OR COUNT(*) = 1 ORDER BY tahun_terbit DESC";

                                    $result = @mysqli_query ($db, $a);

                                    $t1 = 1;

                                    if($result)
                                    {
                                        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                                        {
                                          echo'
                                          <p><span style="font-weight: bold;">'.$row["tahun_terbit"].' - </span><a href="'.$row["link"].'" target="_blank" style="font-weight: normal;">'.$row["tajuk_terbit"].'</a></p>
                                          <div class="accordion" id="accordionExampleA'.$t1.'">
                                            <div class="accordion-item">
                                              <h2 class="accordion-header" id="headingSmallA'.$t1.'">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSmallA'.$t1.'" aria-expanded="false" aria-controls="collapseSmallA'.$t1.'">
                                                  Authors
                                                </button>
                                              </h2>
                                              <div id="collapseSmallA'.$t1.'" class="accordion-collapse collapse" aria-labelledby="headingSmallA'.$t1.'" data-bs-parent="#accordionExampleA'.$t1.'">
                                                <div class="accordion-body">
                                                  <li>'.$row["names"].'
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <br>
                                          <br>';
                                          
                                          $t1++;
                                        }

                                    mysqli_free_result ($result);

                                    }
                                    else
                                    {
                                    echo '<p class ="error"> The current data could not be retrieved.
                                    We apologize for any inconvenience.</p>';

                                    echo '<p>'.mysqli_error ($db).'<br><br/>Query:'.$a.'</p>'; 
                                    }

                                      echo'
                                    </div>
                                  </div>
                                </div>';

                                // item 4
                                echo '<div class="accordion-item">
                                  <h2 class="accordion-header" id="headingFour">
                                    <button style="font-weight: bold;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                      MYCITE
                                    </button>
                                  </h2>
                                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">';
                                    
                                    $a = "SELECT *, GROUP_CONCAT(name SEPARATOR '<li>') AS names FROM kerja_penerbitan INNER JOIN contact ON kerja_penerbitan.user_name = contact.user_name WHERE jenis_terbit='MYCITE' GROUP BY tajuk_terbit HAVING COUNT(*) > 1 OR COUNT(*) = 1 ORDER BY tahun_terbit DESC";

                                    $result = @mysqli_query ($db, $a);

                                    $t1 = 1;

                                    if($result)
                                    {
                                        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                                        {
                                          echo'
                                          <p><span style="font-weight: bold;">'.$row["tahun_terbit"].' - </span><a href="'.$row["link"].'" target="_blank" style="font-weight: normal;">'.$row["tajuk_terbit"].'</a></p>
                                          <div class="accordion" id="accordionExampleM'.$t1.'">
                                            <div class="accordion-item">
                                              <h2 class="accordion-header" id="headingSmallM'.$t1.'">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSmallM'.$t1.'" aria-expanded="false" aria-controls="collapseSmallM'.$t1.'">
                                                  Authors
                                                </button>
                                              </h2>
                                              <div id="collapseSmallM'.$t1.'" class="accordion-collapse collapse" aria-labelledby="headingSmallM'.$t1.'" data-bs-parent="#accordionExampleM'.$t1.'">
                                                <div class="accordion-body">
                                                  <li>'.$row["names"].'
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <br>
                                          <br>';

                                          $t1++;
                                        }

                                    mysqli_free_result ($result);

                                    }
                                    else
                                    {
                                    echo '<p class ="error"> The current data could not be retrieved.
                                    We apologize for any inconvenience.</p>';

                                    echo '<p>'.mysqli_error ($db).'<br><br/>Query:'.$a.'</p>'; 
                                    }

                                      echo'
                                    </div>
                                  </div>
                                </div>';

                                // item 5
                                echo '<div class="accordion-item">
                                  <h2 class="accordion-header" id="headingFive">
                                    <button style="font-weight: bold;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                      IEEE
                                    </button>
                                  </h2>
                                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">';
                                    
                                    $a = "SELECT *, GROUP_CONCAT(name SEPARATOR '<li>') AS names FROM kerja_penerbitan INNER JOIN contact ON kerja_penerbitan.user_name = contact.user_name WHERE jenis_terbit='IEEE' GROUP BY tajuk_terbit HAVING COUNT(*) > 1 OR COUNT(*) = 1 ORDER BY tahun_terbit DESC";

                                    $result = @mysqli_query ($db, $a);

                                    $t1 = 1;

                                    if($result)
                                    {
                                        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                                        {
                                          echo'
                                          <p><span style="font-weight: bold;">'.$row["tahun_terbit"].' - </span><a href="'.$row["link"].'" target="_blank" style="font-weight: normal;">'.$row["tajuk_terbit"].'</a></p>
                                          <div class="accordion" id="accordionExampleE'.$row["id"].'">
                                            <div class="accordion-item">
                                              <h2 class="accordion-header" id="headingSmallE'.$row["id"].'">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSmallE'.$row["id"].'" aria-expanded="false" aria-controls="collapseSmallE'.$row["id"].'">
                                                  Authors
                                                </button>
                                              </h2>
                                              <div id="collapseSmallE'.$row["id"].'" class="accordion-collapse collapse" aria-labelledby="headingSmallE'.$row["id"].'" data-bs-parent="#accordionExampleE'.$row["id"].'">
                                                <div class="accordion-body">
                                                  <li>'.$row["names"].'
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <br>
                                          <br>';

                                          $t1++;
                                        }

                                    mysqli_free_result ($result);

                                    }
                                    else
                                    {
                                    echo '<p class ="error"> The current data could not be retrieved.
                                    We apologize for any inconvenience.</p>';

                                    echo '<p>'.mysqli_error ($db).'<br><br/>Query:'.$a.'</p>'; 
                                    }

                                      echo'
                                    </div>
                                  </div>
                                </div>';

                                // item 6
                                echo '<div class="accordion-item">
                                  <h2 class="accordion-header" id="headingSix">
                                    <button style="font-weight: bold;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                      OTHERS
                                    </button>
                                  </h2>
                                  <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">';
                                    
                                    $a = "SELECT *, GROUP_CONCAT(name SEPARATOR '<li>') AS names FROM kerja_penerbitan INNER JOIN contact ON kerja_penerbitan.user_name = contact.user_name WHERE jenis_terbit!='MYCITE' AND jenis_terbit!='SCOPUS' AND jenis_terbit!='ERA' AND jenis_terbit!='IEEE' AND jenis_terbit!='WOS' GROUP BY tajuk_terbit HAVING COUNT(*) > 1 OR COUNT(*) = 1 ORDER BY tahun_terbit DESC";

                                    $result = @mysqli_query ($db, $a);

                                    $t1 = 1;
                                    if($result)
                                    {
                                        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                                        {
                                          echo'
                                          <p><span style="font-weight: bold;">'.$row["tahun_terbit"].' - </span><a href="'.$row["link"].'" target="_blank" style="font-weight: normal;">'.$row["tajuk_terbit"].'</a></p>
                                          <div class="accordion" id="accordionExampleO'.$t1.'">
                                            <div class="accordion-item">
                                              <h2 class="accordion-header" id="headingSmallO'.$t1.'">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSmallO'.$t1.'" aria-expanded="false" aria-controls="collapseSmallO'.$t1.'">
                                                  Authors
                                                </button>
                                              </h2>
                                              <div id="collapseSmallO'.$t1.'" class="accordion-collapse collapse" aria-labelledby="headingSmallO'.$t1.'" data-bs-parent="#accordionExampleO'.$t1.'">
                                                <div class="accordion-body">
                                                  <li>'.$row["names"].'
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <br>
                                          <br>';
                                          
                                          $t1++;
                                        }

                                    mysqli_free_result ($result);

                                    }
                                    else
                                    {
                                    echo '<p class ="error"> The current data could not be retrieved.
                                    We apologize for any inconvenience.</p>';

                                    echo '<p>'.mysqli_error ($db).'<br><br/>Query:'.$a.'</p>'; 
                                    }

                                      echo'
                                    </div>
                                  </div>
                                </div>';

                        ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0"><h2 class="h1 mb-3">Awards</h2>
              <p class="lead fs-4 text-secondary mb-5">We hope you have found the information about our awards helpful. If you need further details, please explore our Awards section on the Support Center or feel free to contact us via email.</p>
              <div class="accordion accordion-flush" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingGell">
                    <button style="font-weight: bold;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGell" aria-expanded="false" aria-controls="collapseGell">
                      Gallerys
                    </button>
                  </h2>
                  <div id="collapseGell" class="accordion-collapse collapse" aria-labelledby="headingGell" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <div class="col-md-12">
                        <ul class="box-container">
                          <li class="box">
                              <div class="inner">
                                  <a href="assets/img/Awards/awards_1.jpg" class="glightbox">
                                      <img src="assets/img/Awards/awards_1.jpg" alt="image" width="150" height="150"/>
                                  </a>
                              </div>
                          </li>
                          <li class="box">
                              <div class="inner">
                                  <a href="assets/img/Awards/awards_2.jpg" class="glightbox">
                                      <img src="assets/img/Awards/awards_2.jpg" alt="image" width="150" height="150"/>
                                  </a>
                              </div>
                          </li>
                          <li class="box">
                              <div class="inner">
                                  <a href="assets/img/Awards/awards_3.jpg" class="glightbox">
                                      <img src="assets/img/Awards/awards_3.jpg" alt="image" width="150" height="150"/>
                                  </a>
                              </div>
                          </li>
                          <li class="box">
                              <div class="inner">
                                  <a href="assets/img/Awards/awards_4.jpg" class="glightbox">
                                      <img src="assets/img/Awards/awards_4.jpg" alt="image" width="150" height="150"/>
                                  </a>
                              </div>
                          </li>
                          <li class="box">
                              <div class="inner">
                                  <a href="assets/img/Awards/awards_5.jpg" class="glightbox">
                                      <img src="assets/img/Awards/awards_5.jpg" alt="image" width="150" height="150"/>
                                  </a>
                              </div>
                          </li>
                          <li class="box">
                              <div class="inner">
                                  <a href="assets/img/Awards/awards_6.jpg" class="glightbox">
                                      <img src="assets/img/Awards/awards_6.jpg" alt="image" width="150" height="150"/>
                                  </a>
                              </div>
                          </li>
                        </ul>
                        <br>
                      </div>
                    </div>
                    <br>
                    <br>
                  </div>
                </div>
                <?php
                    echo '<div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button style="font-weight: bold;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        2022
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">';
                      
                      $a = "SELECT * FROM awards WHERE tahun='2022' ORDER BY id";

                      $result = @mysqli_query ($db, $a);

                      if($result)
                      {
                          while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                          {
                            echo'
                            <p><span style="font-weight: bold;">'.$row["tahun"].' - </span><span style="font-weight: bold; color: blue;">'.$row["award_name"].' - </span>'.$row["peringkat"].'<br></p>';
                      }

                      mysqli_free_result ($result);

                      }
                      else
                      {
                      echo '<p class ="error"> The current data could not be retrieved.
                      We apologize for any inconvenience.</p>';

                      echo '<p>'.mysqli_error ($db).'<br><br/>Query:'.$a.'</p>'; 
                      }

                        echo'</div>
                          </div>
                        </div>';



                        echo '<div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button style="font-weight: bold;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        2021
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">';
                      
                      $a = "SELECT * FROM awards WHERE tahun='2021' ORDER BY id";

                      $result = @mysqli_query ($db, $a);

                      if($result)
                      {
                          while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                          {
                            echo'
                            <p><span style="font-weight: bold;">'.$row["tahun"].' - </span><span style="font-weight: bold; color: blue;">'.$row["award_name"].' - </span>'.$row["peringkat"].'<br></p>';
                      }

                      mysqli_free_result ($result);

                      }
                      else
                      {
                      echo '<p class ="error"> The current data could not be retrieved.
                      We apologize for any inconvenience.</p>';

                      echo '<p>'.mysqli_error ($db).'<br><br/>Query:'.$a.'</p>'; 
                      }

                        echo'</div>
                          </div>
                        </div>';
                ?>
              </div>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/awards/wall.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h2 class="h1 mb-3">Innovations</h2>
                <p class="lead fs-4 text-secondary mb-5">We hope you have found the information about our innovations helpful. If you need further details, please explore our Innovations section in the Support Center or feel free to contact us via email.</p>
                <br>
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button style="font-weight: bold;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        2022
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div style="border-bottom: 1px solid black; padding-top: 15px; padding-bottom: 15px;">
                          <p>
                            <!-- <span style="font-weight: bold;"> - </span> -->
                            <a href="#" style="font-weight: normal;">A SMART ATTENDANCE MONITORING & MANAGEMENT SYSTEM USING BLUETOOTH LOW ENERGY TECHNOLOGY (SAMBLE)</a>
                            - 2nd International Research Invention, Innovation and Exhibition 2022 (I-RIE2022)
                          </p>
                          <p>Award : <span style="font-weight: bold;">Silver</span></p>
                        </div>
                        <div style="border-bottom: 1px solid black; padding-top: 15px; padding-bottom: 15px;">
                          <p>
                            <!-- <span style="font-weight: bold;"> - </span> -->
                            <a href="#" style="font-weight: normal;">PERSONAL ZAKAT CALCULATOR MOBILE APPS</a>
                            - 2nd International Research Invention, Innovation and Exhibition 2022 (I-RIE2022)
                          </p>
                          <p>Award : <span style="font-weight: bold;">Silver</span></p>
                        </div>
                        <div style="border-bottom: 1px solid black; padding-top: 15px; padding-bottom: 15px;">
                          <p>
                            <!-- <span style="font-weight: bold;"> - </span> -->
                            <a href="#" style="font-weight: normal;">CLASS MANAGEMENT SYSTEM (CAST)</a>
                            - 2nd International Research Invention, Innovation and Exhibition 2022 (I-RIE2022)
                          </p>
                          <p>Award : <span style="font-weight: bold;">Silver</span></p>
                        </div>
                        <div style="border-bottom: 1px solid black; padding-top: 15px; padding-bottom: 15px;">
                          <p>
                            <!-- <span style="font-weight: bold;"> - </span> -->
                            <a href="#" style="font-weight: normal;">COVID19 INDIVIDUAL QUARANTINE WEB APPLICATION (MYCOVIQ)</a>
                            - 2nd International Research Invention, Innovation and Exhibition 2022 (I-RIE2022)
                          </p>
                          <p>Award : <span style="font-weight: bold;">Bronze</span></p>
                        </div>
                        <div style="border-bottom: 1px solid black; padding-top: 15px; padding-bottom: 15px;">
                          <p>
                            <!-- <span style="font-weight: bold;"> - </span> -->
                            <a href="#" style="font-weight: normal;">A HIRARC SYSTEM FOR HAZARD IDENTIFICATION, SAFETY & RISKS ASSESSMENT: DESIGN AND IMPLEMENTATION</a>
                            - 2nd International Research Invention, Innovation and Exhibition 2022 (I-RIE2022)
                          </p>
                          <p>Award : <span style="font-weight: bold;">Bronze</span></p>
                        </div>
                        <div style="border-bottom: 1px solid black; padding-top: 15px; padding-bottom: 15px;">
                          <p>
                            <!-- <span style="font-weight: bold;"> - </span> -->
                            <a href="#" style="font-weight: normal;">DATA ANALYTICS OF AUTOMATED AQUAPONICS SMART AGRICULTURE SYSTEM TO SUPPORT SUSTAINABLE DEVELOPMENT GOALS</a>
                            - Malaysia Technology Expo 2022 (MTE 2022),The International Expo on Innovation and Technology
                          </p>
                          <p>Award : <span style="font-weight: bold;">Silver</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button style="font-weight: bold;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        2021
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div style="border-bottom: 1px solid black; padding-top: 15px; padding-bottom: 15px;">
                          <p>
                            <!-- <span style="font-weight: bold;"> - </span> -->
                            <a href="#" style="font-weight: normal;">The Lock Folder Application System</a>
                            - Innovation and Creativity Exhibition 2021 (ICE2021)
                          </p>
                          <p>Award : <span style="font-weight: bold;">Gold</span></p>
                        </div>
                        <div style="border-bottom: 1px solid black; padding-top: 15px; padding-bottom: 15px;">
                          <p>
                            <!-- <span style="font-weight: bold;"> - </span> -->
                            <a href="#" style="font-weight: normal;">Internship Logbook System</a>
                            - Innovation and Creativity Exhibition 2021 (ICE2021)
                          </p>
                          <p>Award : <span style="font-weight: bold;">Gold</span></p>
                        </div> 
                        <div style="border-bottom: 1px solid black; padding-top: 15px; padding-bottom: 15px;">
                          <p>
                            <!-- <span style="font-weight: bold;"> - </span> -->
                            <a href="#" style="font-weight: normal;">Secured Multi-Door Access System as a Web Application</a>
                            - International Exhibition & Symposium On Productivity, Innovation, Knowledge, Education & Design (i-SPiKE 2021) - UiTM
                          </p>
                          <p>Award : <span style="font-weight: bold;">Gold</span></p>
                        </div> 
                        <div style="border-bottom: 1px solid black; padding-top: 15px; padding-bottom: 15px;">
                          <p>
                            <!-- <span style="font-weight: bold;"> - </span> -->
                            <a href="#" style="font-weight: normal;">Improving Student Learning Through Interactive Mobile-Based App Incorporating Study Reminder</a>
                            - Innovation and Creativity Exhibition 2021 (ICE2021) - KUPTM
                          </p>
                          <p>Award : <span style="font-weight: bold;">Gold</span></p>
                        </div> 
                        <div style="border-bottom: 1px solid black; padding-top: 15px; padding-bottom: 15px;">
                          <p>
                            <!-- <span style="font-weight: bold;"> - </span> -->
                            <a href="#" style="font-weight: normal;">Alumni Web Portal For KUPTM: An Encapsulation Of Needs And Portal Production</a>
                            - Innovation and Creativity Exhibition 2021 (ICE2021) - KUPTM
                          </p>
                          <p>Award : <span style="font-weight: bold;">Silver</span></p>
                        </div> 
                        <div style="border-bottom: 1px solid black; padding-top: 15px; padding-bottom: 15px;">
                          <p>
                            <!-- <span style="font-weight: bold;"> - </span> -->
                            <a href="#" style="font-weight: normal;">Internship Placement Management System (IPMS)</a>
                            - Innovation and Creativity Exhibition 2021 (ICE2021) - KUPTM
                          </p>
                          <p>Award : <span style="font-weight: bold;">Silver</span></p>
                        </div> 
                        <div style="border-bottom: 1px solid black; padding-top: 15px; padding-bottom: 15px;">
                          <p>
                            <!-- <span style="font-weight: bold;"> - </span> -->
                            <a href="#" style="font-weight: normal;">Student Centered Online Learning Using Mobile Application (One Learning App)</a>
                            - Innovation and Creativity Exhibition 2021 (ICE2021) - KUPTM
                          </p>
                          <p>Award : <span style="font-weight: bold;">Silver</span></p>
                        </div> 
                        <div style="border-bottom: 1px solid black; padding-top: 15px; padding-bottom: 15px;">
                          <p>
                            <!-- <span style="font-weight: bold;"> - </span> -->
                            <a href="#" style="font-weight: normal;">Ble Beacon Smart Attendance Monitoring System With Notifications And Reporting Of Students’ Absenteeism</a>
                            - Innovation and Creativity Exhibition 2021 (ICE2021) - KUPTM
                          </p>
                          <p>Award : <span style="font-weight: bold;">Silver</span></p>
                        </div> 
                        <div style="border-bottom: 1px solid black; padding-top: 15px; padding-bottom: 15px;">
                          <p>
                            <!-- <span style="font-weight: bold;"> - </span> -->
                            <a href="#" style="font-weight: normal;">IOT Smart Classroom</a>
                            - Pertandingan Rekacipta & Inovasi Nasional (PRIN2021) - UKM
                          </p>
                          <p>Award : <span style="font-weight: bold;">Silver</span></p>
                        </div> 
                        <div style="border-bottom: 1px solid black; padding-top: 15px; padding-bottom: 15px;">
                          <p>
                            <!-- <span style="font-weight: bold;"> - </span> -->
                            <a href="#" style="font-weight: normal;">Personal Grant Management System</a>
                            - Innovative Research, Invention and Application Exhibition (I-RIA 2) - UUM
                          </p>
                          <p>Award : <span style="font-weight: bold;">Silver</span></p>
                        </div> 
                        <div style="border-bottom: 1px solid black; padding-top: 15px; padding-bottom: 15px;">
                          <p>
                            <!-- <span style="font-weight: bold;"> - </span> -->
                            <a href="#" style="font-weight: normal;">Automated Aquaponics Smart Agriculture System to Support Sustainable Development Goals</a>
                            - 32nd International Invention, Innovation & Technology Exhibition (ITEX 2021)
                          </p>
                          <p>Award : <span style="font-weight: bold;">Silver</span></p>
                        </div> 
                        <div style="border-bottom: 1px solid black; padding-top: 15px; padding-bottom: 15px;">
                          <p>
                            <!-- <span style="font-weight: bold;"> - </span> -->
                            <a href="#" style="font-weight: normal;">IOT SMART CLASSROOM</a>
                            - Innovation and Creativity Exhibition 2021 (ICE2021) - KUPTM
                          </p>
                          <p>Award : <span style="font-weight: bold;">Bronze</span></p>
                        </div>                 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/image2.png" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h2 class="h1 mb-3">E-Books</h2>
                <p class="lead fs-4 text-secondary mb-5">We hope you have found the information about our innovations helpful. If you need further details, please explore our Innovations section in the Support Center or feel free to contact us via email.</p>
                <br>
                <div class="accordion accordion-flush" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingGell">
                    <button style="font-weight: bold;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGell" aria-expanded="false" aria-controls="collapseGell">
                      Collections
                    </button>
                  </h2>
                  <div id="collapseGell" class="accordion-collapse collapse" aria-labelledby="headingGell" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <div class="col-md-12">
                        <ul class="box-container">
                          <li class="box">
                              <div class="inner">
                                  <a href="assets/img/eBook/2021_1.png" class="glightbox">
                                      <img src="assets/img/eBook/2021_1.png" alt="image" width="150" height="150"/>
                                  </a>
                              </div>
                          </li>
                          <li class="box">
                              <div class="inner">
                                  <a href="assets/img/eBook/2021_2.png" class="glightbox">
                                      <img src="assets/img/eBook/2021_2.png" alt="image" width="150" height="150"/>
                                  </a>
                              </div>
                          </li>
                          <li class="box">
                              <div class="inner">
                                  <a href="assets/img/eBook/2021_3.png" class="glightbox">
                                      <img src="assets/img/eBook/2021_3.png" alt="image" width="150" height="150"/>
                                  </a>
                              </div>
                          </li>
                          <li class="box">
                              <div class="inner">
                                  <a href="assets/img/eBook/2022_1.png" class="glightbox">
                                      <img src="assets/img/eBook/2022_1.png" alt="image" width="150" height="150"/>
                                  </a>
                              </div>
                          </li>
                          <li class="box">
                              <div class="inner">
                                  <a href="assets/img/eBook/2022_2.png" class="glightbox">
                                      <img src="assets/img/eBook/2022_2.png" alt="image" width="150" height="150"/>
                                  </a>
                              </div>
                          </li>
                          <li class="box">
                              <div class="inner">
                                  <a href="assets/img/eBook/2022_3.png" class="glightbox">
                                      <img src="assets/img/eBook/2022_3.png" alt="image" width="150" height="150"/>
                                  </a>
                              </div>
                          </li>
                          <li class="box">
                              <div class="inner">
                                  <a href="assets/img/eBook/2022_4.png" class="glightbox">
                                      <img src="assets/img/eBook/2022_4.png" alt="image" width="150" height="150"/>
                                  </a>
                              </div>
                          </li>
                          <li class="box">
                              <div class="inner">
                                  <a href="assets/img/eBook/2022_5.png" class="glightbox">
                                      <img src="assets/img/eBook/2022_5.png" alt="image" width="150" height="150"/>
                                  </a>
                              </div>
                          </li>
                          <li class="box">
                              <div class="inner">
                                  <a href="assets/img/eBook/2022_6.png" class="glightbox">
                                      <img src="assets/img/eBook/2022_6.png" alt="image" width="150" height="150"/>
                                  </a>
                              </div>
                          </li>
                          <li class="box">
                              <div class="inner">
                                  <a href="assets/img/eBook/2022_7.png" class="glightbox">
                                      <img src="assets/img/eBook/2022_7.png" alt="image" width="150" height="150"/>
                                  </a>
                              </div>
                          </li>
                          <li class="box">
                              <div class="inner">
                                  <a href="assets/img/eBook/2022_8.png" class="glightbox">
                                      <img src="assets/img/eBook/2022_8.png" alt="image" width="150" height="150"/>
                                  </a>
                              </div>
                          </li>
                          <li class="box">
                              <div class="inner">
                                  <a href="assets/img/eBook/2022_9.png" class="glightbox">
                                      <img src="assets/img/eBook/2022_9.png" alt="image" width="150" height="150"/>
                                  </a>
                              </div>
                          </li>
                          <li class="box">
                              <div class="inner">
                                  <a href="assets/img/eBook/2022_10.png" class="glightbox">
                                      <img src="assets/img/eBook/2022_10.png" alt="image" width="150" height="150"/>
                                  </a>
                              </div>
                          </li>
                          <li class="box">
                              <div class="inner">
                                  <a href="assets/img/eBook/2022_11.png" class="glightbox">
                                      <img src="assets/img/eBook/2022_11.png" alt="image" width="150" height="150"/>
                                  </a>
                              </div>
                          </li>
                          <li class="box">
                              <div class="inner">
                                  <a href="assets/img/eBook/2022_12.png" class="glightbox">
                                      <img src="assets/img/eBook/2022_12.png" alt="image" width="150" height="150"/>
                                  </a>
                              </div>
                          </li>
                          <li class="box">
                              <div class="inner">
                                  <a href="assets/img/eBook/2022_13.png" class="glightbox">
                                      <img src="assets/img/eBook/2022_13.png" alt="image" width="150" height="150"/>
                                  </a>
                              </div>
                          </li>
                          <li class="box">
                              <div class="inner">
                                  <a href="assets/img/eBook/2022_14.png" class="glightbox">
                                      <img src="assets/img/eBook/2022_14.png" alt="image" width="150" height="150"/>
                                  </a>
                              </div>
                          </li>
                          <li class="box">
                              <div class="inner">
                                  <a href="assets/img/eBook/2023_2.png" class="glightbox">
                                      <img src="assets/img/eBook/2023_2.png" alt="image" width="150" height="150"/>
                                  </a>
                              </div>
                          </li>
                        </ul>
                        <br>
                      </div>
                    </div>
                    <br>
                    <br>
                  </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button style="font-weight: bold;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Listing
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">

                        <?php

                          $a = "SELECT *, GROUP_CONCAT(name SEPARATOR '<li>') AS names FROM kerja_penerbitan INNER JOIN contact ON kerja_penerbitan.user_name = contact.user_name WHERE jenis_terbit='ebuku' OR jenis_terbit='buku' OR  jenis_terbit='eBook' OR  jenis_terbit='Book'  GROUP BY tajuk_terbit HAVING COUNT(*) > 1 OR COUNT(*) = 1 ORDER BY tahun_terbit DESC";

                          $result = @mysqli_query ($db, $a);

                          $t1 = 1;

                          if($result)
                          {
                              while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                              {
                                echo'<p><span style="font-weight: bold;">'.$row["tahun_terbit"].' - </span><a href="'.$row["link"].'" target="_blank" style="font-weight: normal;">'.$row["tajuk_terbit"].'</a></p>
                                      <div class="accordion" id="accordionExampleB'.$t1.'">
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingSmallB'.$t1.'">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSmallB'.$t1.'" aria-expanded="false" aria-controls="collapseSmallB'.$t1.'">
                                              Authors
                                            </button>
                                          </h2>
                                          <div id="collapseSmallB'.$t1.'" class="accordion-collapse collapse" aria-labelledby="headingSmallB'.$t1.'" data-bs-parent="#accordionExampleB'.$t1.'">
                                            <div class="accordion-body">
                                              <li>'.$row["names"].'
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <br>
                                      <br>';

                                $t1++;
                              }

                          mysqli_free_result ($result);

                          }
                          else
                          {
                          echo '<p class ="error"> The current data could not be retrieved.
                          We apologize for any inconvenience.</p>';

                          echo '<p>'.mysqli_error ($db).'<br><br/>Query:'.$a.'</p>'; 
                          }

                        ?>
                      </div>
                    </div>
                  </div>
              </div>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/eBook/wall.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-5">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h2 class="h1 mb-3">Intellectual Property and Copyright</h2>
                <p class="lead fs-4 text-secondary mb-5">We hope you have found the information about our intellectual property and copyright policies helpful. If you need further details, please explore our Intellectual Property section in the Support Center or feel free to contact us via email.</p>
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button style="font-weight: bold;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Listing
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <?php

                        $a = "SELECT *, GROUP_CONCAT(name SEPARATOR '<li>') AS names FROM iproperty INNER JOIN contact ON iproperty.user_name = contact.user_name GROUP BY title_ip HAVING COUNT(*) > 1 OR COUNT(*) = 1";

                        $result = @mysqli_query ($db, $a);

                        $t1 = 1;

                        if($result)
                        {
                            while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                            {
                              echo'<p><span style="font-weight: bold;">'.$row["ip_id"].' - </span><a href="#" style="font-weight: normal;">'.$row["title_ip"].'</a></p>
                                  <div class="accordion" id="accordionExampleP'.$t1.'">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="headingSmallP'.$t1.'">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSmallP'.$t1.'" aria-expanded="false" aria-controls="collapseSmallP'.$t1.'">
                                          Staff
                                        </button>
                                      </h2>
                                      <div id="collapseSmallP'.$t1.'" class="accordion-collapse collapse" aria-labelledby="headingSmallP'.$t1.'" data-bs-parent="#accordionExampleP'.$t1.'">
                                        <div class="accordion-body">
                                          <li>'.$row["names"].'
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <br>
                                  <br>';
                              
                              $t1++;
                            }

                        mysqli_free_result ($result);

                        }
                        else
                        {
                        echo '<p class ="error"> The current data could not be retrieved.
                        We apologize for any inconvenience.</p>';

                        echo '<p>'.mysqli_error ($db).'<br><br/>Query:'.$a.'</p>'; 
                        }

                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/Awards/copyright_1.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <!-- End Tab Content Item -->

          <!-- <div class="tab-pane fade" id="features-tab-6">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Omnis fugiat ea explicabo sunt dolorum asperiores sequi inventore rerum</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/working-4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div> -->
          <!-- End Tab Content Item -->
           
          <!-- <div class="tab-pane fade" id="features-tab-7">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Omnis fugiat ea explicabo sunt dolorum asperiores sequi inventore rerum</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/working-4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div> -->
          <!-- End Tab Content Item -->
        </div>

      </div>

    </section><!-- /Features Section -->

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>