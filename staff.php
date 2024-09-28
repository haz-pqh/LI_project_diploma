<?php
    include("connection.php");
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
  <link href="assets/favicon.ico" rel="icon">
  <link href="assets/favicon.ico" rel="apple-touch-icon">

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">


  <!-- Main CSS File -->
  <link href="assets/css/staff.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="staff-page" id="staff-page">

<div align="center" class="start-layer fixed-top" id="start-layer">
  <div class="card_info">
    <br>
    <h2><span>!!</span> ATTENTION <span>!!</span></h2>
    <br>
    <h6>If you want to know more about the staff, you can click on the someone face in the picture and the information will popup.</h6>
    <br>
    <video autoplay loop muted class="vid" id="vid" class loop preload="auto" style="width: 80%;">
      <source src="0927.mp4" type="video/mp4">
    </video>
    <br>
    <br>
    <button id="gotit">Got It</button>
  </div>
</div>
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/Logo FCOM Official 2020 copy-02 - Copy - Copy.png">
        <!-- <h1 class="sitename">Selecao</h1> -->
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
              <li><a href="profile/index3.php?username=45">Executive Officer</a></li>
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
          <li><a href="uptm-web/index.php">Edit Staff</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">
    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Staff Management</h2>
        <p>Check our Staff Management</p>
      </div>

      <div class="container">

        <div class="isotope-layout" data-default-filter=".filter-network" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter=".filter-network" class="filter-active" id="network" data-name="network">Network</li>
            <li data-filter=".filter-software" id="software">Sofware Engineering</li>
            <li data-filter=".filter-it" id="tech">Information Technology</li>
            <li data-filter=".filter-ai" id="intel">Artificial Intelligence</li>
            <li data-filter=".filter-multimedia" id="mult">Multimedia</li>
            <li data-filter=".filter-maths" id="maths">Mathematics</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
              <!-- _______________________________ NETWORK _______________________________________ -->
              <div class="col-lg-12 col-md-6 portfolio-item filter-network isotope-item  big-image">
                <button id="net1" style="position: absolute; cursor: pointer; top: 24%; left: 22.5%; border-radius: 50%; width: 70px; height: 90px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="net2" style="position: absolute; cursor: pointer; top: 26%; left: 33.6%; border-radius: 50%; width: 55px; height: 70px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="net3" style="position: absolute; cursor: pointer; top: 31%; left: 41.3%; border-radius: 50%; width: 40px; height: 60px; background-color: transparent; border: 0px; color: white; z-index: 1;" class="circle_point"></button>
                <button id="net4" style="position: absolute; cursor: pointer; top: 31.5%; left: 43.5%; border-radius: 50%; width: 40px; height: 60px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="net5" style="position: absolute; cursor: pointer; top: 27%; left: 46%; border-radius: 50%; width: 40px; height: 60px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="net6" style="position: absolute; cursor: pointer; top: 28.8%; left: 50.8%; border-radius: 50%; width: 50px; height: 60px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="net7" style="position: absolute; cursor: pointer; top: 20.5%; left: 55.8%; border-radius: 50%; width: 55px; height: 70px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="net8" style="position: absolute; cursor: pointer; top: 21%; left: 62.3%; border-radius: 50%; width: 60px; height: 70px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <!-- <button id="net9" style="position: absolute; cursor: pointer; top: 27.8%; left: 68%; border-radius: 50%; width: 80px; height: 90px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button> -->
                <button id="net10" style="position: absolute; cursor: pointer; top: 18.8%; left: 72.5%; border-radius: 50%; width: 60px; height: 80px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                
                <?php
                  $a = "SELECT * FROM staff ORDER BY staff_id";

                  $result = @mysqli_query ($db, $a);

                  if($result)
                  {
                      while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                      {
                        $field_name = $row["staff_field"];
                        $staff_position = $row["staff_position"];

                        if($field_name == "Network"){
                          if($staff_position == "Dean" || $staff_position == "Deputy Dean"){
                            echo '<div class="backLayer" id="network-'.$row["staff_id"].'">
                                    <div class="layer1">
                                      <div class="close-btn" id="close-btn-net'.$row["staff_id"].'">&times;</div>
                                      <div class="left_part">
                                        <img src="assets/img/'.$row["staff_id"].'.png" id="net">
                                      </div>
                                      <div class="right_part">
                                        <h4>'.$row["staff_name"].'</h4>';
                                        
                                        $b = "SELECT * FROM contact WHERE id=".$row['staff_id'];

                                        $r = @mysqli_query ($db, $b);
                      
                                        if($r)
                                        {
                                          while($row1=mysqli_fetch_array($r, MYSQLI_ASSOC))
                                          {
                                            echo'
                                                <h6>'.$row1["position"].'</h6>
                                                <br><br>
                                                <p>
                                                ';
                                          }
                                        }
                                        
                                        
                                        echo'
                                          <span>Tel : </span> '.$row["staff_tel"].'
                                          <br>
                                          <span>Email : </span> '.$row["staff_email"].'
                                          <br>
                                          <br>
                                          <span>Higher Education : </span>';
                                      
                                        $user = $row['user_name'];

                                        $c = "SELECT kelulusan FROM aca_qualification WHERE user_name='$user' ORDER BY year DESC LIMIT 1";

                                        $r2 = @mysqli_query ($db, $c);
                      
                                        if($r2)
                                        {
                                          while($row2=mysqli_fetch_array($r2, MYSQLI_ASSOC))
                                          {
                                            echo'
                                                <br>
                                                  '.$row2["kelulusan"].'
                                                ';
                                          }
                                        }
                                        
                                        
                                        echo'
                                        </p>
                                        <button onclick="window.location.href=`profile/index'.$row["staff_id"].'.php?username='.$row["staff_id"].'`;">View My Profile</button>
                                      </div>
                                    </div>
                                  </div>';
                          }
                          else{
                            echo '<div class="backLayer" id="network-'.$row["staff_id"].'">
                                    <div class="layer1">
                                      <div class="close-btn" id="close-btn-net'.$row["staff_id"].'">&times;</div>
                                      <div class="left_part">
                                        <img src="assets/img/'.$row["staff_id"].'.png" id="net">
                                      </div>
                                      <div class="right_part">
                                        <h4>'.$row["staff_name"].'</h4>';
                                        
                                        $b = "SELECT * FROM contact WHERE id=".$row['staff_id'];

                                        $r = @mysqli_query ($db, $b);
                      
                                        if($result)
                                        {
                                          while($row1=mysqli_fetch_array($r, MYSQLI_ASSOC))
                                          {
                                            echo'
                                                <h6>'.$row1["position"].'</h6>
                                                <br><br>
                                                <p>
                                                ';
                                          }
                                        }
                                        
                                        
                                        echo'
                                          <span>Tel : </span> '.$row["staff_tel"].'
                                          <br>
                                          <span>Email : </span> '.$row["staff_email"].'
                                          <br>
                                          <br>
                                          <span>Higher Education : </span>';
                                      
                                        $user = $row['user_name'];

                                        $c = "SELECT kelulusan FROM aca_qualification WHERE user_name='$user' ORDER BY year DESC LIMIT 1";

                                        $r2 = @mysqli_query ($db, $c);
                      
                                        if($r2)
                                        {
                                          while($row2=mysqli_fetch_array($r2, MYSQLI_ASSOC))
                                          {
                                            echo'
                                                <br>
                                                  '.$row2["kelulusan"].'
                                                ';
                                          }
                                        }
                                        
                                        
                                        echo'
                                        </p>
                                        <button onclick="window.location.href=`staff-details.php?username='.$row["staff_id"].'`;">View My Profile</button>
                                      </div>
                                    </div>
                                  </div>';
                          }
                        }
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
                
                <img src="assets/img/New/3.png" class="image" width="100%">
                
              </div>

              <!-- ___________________________________ SOFTWARE ___________________________________ -->
              <div class="col-lg-12 col-md-6 portfolio-item isotope-item filter-software big-image">
                <button id="sof1" style="position: absolute; cursor: pointer; top: 24%; left: 12.2%; border-radius: 50%; width: 50px; height: 65px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="sof2" style="position: absolute; cursor: pointer; top: 26.5%; left: 19%; border-radius: 50%; width: 45px; height: 60px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="sof3" style="position: absolute; cursor: pointer; top: 30%; left: 36%; border-radius: 50%; width: 40px; height: 50px; background-color: transparent; border: 0px; color: white; z-index: 1;" class="circle_point"></button>
                <button id="sof4" style="position: absolute; cursor: pointer; top: 38.5%; left: 43.5%; border-radius: 50%; width: 40px; height: 50px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="sof5" style="position: absolute; cursor: pointer; top: 31%; left: 58%; border-radius: 50%; width: 50px; height: 50px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="sof6" style="position: absolute; cursor: pointer; top: 27%; left: 72.5%; border-radius: 50%; width: 50px; height: 60px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="sof7" style="position: absolute; cursor: pointer; top: 25%; left: 79.5%; border-radius: 50%; width: 55px; height: 70px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <?php
                  $a = "SELECT * FROM staff ORDER BY staff_id";

                  $result = @mysqli_query ($db, $a);

                  if($result)
                  {
                      while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                      {
                        $field_name = $row["staff_field"];
                        $staff_position = $row["staff_position"];

                        if($field_name == "Software Engineering"){
                          if($staff_position == "Dean" || $staff_position == "Deputy Dean"){
                            echo '<div class="backLayer" id="software-'.$row["staff_id"].'">
                                    <div class="layer1">
                                      <div class="close-btn" id="close-btn-sof'.$row["staff_id"].'">&times;</div>
                                      <div class="left_part">
                                        <img src="assets/img/'.$row["staff_id"].'.png" id="soft">
                                      </div>
                                      <div class="right_part">
                                        <h4>'.$row["staff_name"].'</h4>';
                                        
                                        $b = "SELECT * FROM contact WHERE id=".$row['staff_id'];

                                        $r = @mysqli_query ($db, $b);
                      
                                        if($result)
                                        {
                                          while($row1=mysqli_fetch_array($r, MYSQLI_ASSOC))
                                          {
                                            echo'
                                                <h6>'.$row1["position"].'</h6>
                                                <br><br>
                                                <p>
                                                ';
                                          }
                                        }
                                        
                                        
                                        echo'
                                          <span>Tel : </span> '.$row["staff_tel"].'
                                          <br>
                                          <span>Email : </span> '.$row["staff_email"].'
                                          <br>
                                          <br>
                                          <span>Higher Education : </span>';
                                      
                                        $user = $row['user_name'];

                                        $c = "SELECT kelulusan FROM aca_qualification WHERE user_name='$user' ORDER BY year DESC LIMIT 1";

                                        $r2 = @mysqli_query ($db, $c);
                      
                                        if($r2)
                                        {
                                          while($row2=mysqli_fetch_array($r2, MYSQLI_ASSOC))
                                          {
                                            echo'
                                                <br>
                                                  '.$row2["kelulusan"].'
                                                ';
                                          }
                                        }
                                        
                                        
                                        echo'
                                        </p>
                                        <button onclick="window.location.href=`profile/index'.$row["staff_id"].'.php?username='.$row["staff_id"].'`;">View My Profile</button>
                                      </div>
                                    </div>
                                  </div>';
                          }
                          else{
                            echo '<div class="backLayer" id="software-'.$row["staff_id"].'">
                                    <div class="layer1">
                                      <div class="close-btn" id="close-btn-sof'.$row["staff_id"].'">&times;</div>
                                      <div class="left_part">
                                        <img src="assets/img/'.$row["staff_id"].'.png" id="soft">
                                      </div>
                                      <div class="right_part">
                                        <h4>'.$row["staff_name"].'</h4>';
                                        
                                        $b = "SELECT * FROM contact WHERE id=".$row['staff_id'];

                                        $r = @mysqli_query ($db, $b);
                      
                                        if($result)
                                        {
                                          while($row1=mysqli_fetch_array($r, MYSQLI_ASSOC))
                                          {
                                            echo'
                                                <h6>'.$row1["position"].'</h6>
                                                <br><br>
                                                <p>
                                                ';
                                          }
                                        }
                                        
                                        
                                        echo'
                                          <span>Tel : </span> '.$row["staff_tel"].'
                                          <br>
                                          <span>Email : </span> '.$row["staff_email"].'
                                          <br>
                                          <br>
                                          <span>Higher Education : </span>';
                                      
                                        $user = $row['user_name'];

                                        $c = "SELECT kelulusan FROM aca_qualification WHERE user_name='$user' ORDER BY year DESC LIMIT 1";

                                        $r2 = @mysqli_query ($db, $c);
                      
                                        if($r2)
                                        {
                                          while($row2=mysqli_fetch_array($r2, MYSQLI_ASSOC))
                                          {
                                            echo'
                                                <br>
                                                  '.$row2["kelulusan"].'
                                                ';
                                          }
                                        }
                                        
                                        
                                        echo'
                                        </p>
                                        <button onclick="window.location.href=`staff-details.php?username='.$row["staff_id"].'`;">View My Profile</button>
                                      </div>
                                    </div>
                                  </div>';
                          }
                        }
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

                <img src="assets/img/new/4.png" class="image" width="100%">
              </div>

              <!-- _______________________________________ IT ____________________________________ -->
              <div class="col-lg-12 col-md-6 portfolio-item isotope-item filter-it big-image">
                <button id="it1" style="position: absolute; cursor: pointer; top: 24%; left: 15.8%; border-radius: 50%; width: 50px; height: 65px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="it2" style="position: absolute; cursor: pointer; top: 23.5%; left: 25%; border-radius: 50%; width: 45px; height: 65px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="it3" style="position: absolute; cursor: pointer; top: 24.8%; left: 35.8%; border-radius: 50%; width: 40px; height: 50px; background-color: transparent; border: 0px; color: white; z-index: 1;" class="circle_point"></button>
                <button id="it4" style="position: absolute; cursor: pointer; top: 24.5%; left: 48.5%; border-radius: 50%; width: 40px; height: 55px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="it5" style="position: absolute; cursor: pointer; top: 25%; left: 60%; border-radius: 50%; width: 50px; height: 55px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="it6" style="position: absolute; cursor: pointer; top: 25%; left: 70.8%; border-radius: 50%; width: 50px; height: 60px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="it7" style="position: absolute; cursor: pointer; top: 27%; left: 81.8%; border-radius: 50%; width: 55px; height: 70px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="it8" style="position: absolute; cursor: pointer; top: 35%; left: 41.3%; border-radius: 50%; width: 60px; height: 70px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="it9" style="position: absolute; cursor: pointer; top: 34.5%; left: 59%; border-radius: 50%; width: 60px; height: 80px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                
                <?php
                  $a = "SELECT * FROM staff ORDER BY staff_id";

                  $result = @mysqli_query ($db, $a);

                  if($result)
                  {
                      while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                      {
                        $field_name = $row["staff_field"];
                        $staff_position = $row["staff_position"];

                        if($field_name == "IT"){
                          if($staff_position == "Dean" || $staff_position == "Deputy Dean"){
                            echo '<div class="backLayer" id="it-'.$row["staff_id"].'">
                                    <div class="layer1">
                                      <div class="close-btn" id="close-btn-it'.$row["staff_id"].'">&times;</div>
                                      <div class="left_part">
                                        <img src="assets/img/'.$row["staff_id"].'.png" id="tech">
                                      </div>
                                      <div class="right_part">
                                        <h4>'.$row["staff_name"].'</h4>';
                                        
                                        $b = "SELECT * FROM contact WHERE id=".$row['staff_id'];

                                        $r = @mysqli_query ($db, $b);
                      
                                        if($result)
                                        {
                                          while($row1=mysqli_fetch_array($r, MYSQLI_ASSOC))
                                          {
                                            echo'
                                                <h6>'.$row1["position"].'</h6>
                                                <br><br>
                                                <p>
                                                ';
                                          }
                                        }
                                        
                                        
                                        echo'
                                          <span>Tel : </span> '.$row["staff_tel"].'
                                          <br>
                                          <span>Email : </span> '.$row["staff_email"].'
                                          <br>
                                          <br>
                                          <span>Higher Education : </span>';
                                      
                                        $user = $row['user_name'];

                                        $c = "SELECT kelulusan FROM aca_qualification WHERE user_name='$user' ORDER BY year DESC LIMIT 1";

                                        $r2 = @mysqli_query ($db, $c);
                      
                                        if($r2)
                                        {
                                          while($row2=mysqli_fetch_array($r2, MYSQLI_ASSOC))
                                          {
                                            echo'
                                                <br>
                                                  '.$row2["kelulusan"].'
                                                ';
                                          }
                                        }
                                        
                                        
                                        echo'
                                        </p>
                                        <button onclick="window.location.href=`profile/index'.$row["staff_id"].'.php?username='.$row["staff_id"].'`;">View My Profile</button>
                                      </div>
                                    </div>
                                  </div>';
                          }
                          else{
                            echo '<div class="backLayer" id="it-'.$row["staff_id"].'">
                                    <div class="layer1">
                                      <div class="close-btn" id="close-btn-it'.$row["staff_id"].'">&times;</div>
                                      <div class="left_part">
                                        <img src="assets/img/'.$row["staff_id"].'.png" id="tech">
                                      </div>
                                      <div class="right_part">
                                        <h4>'.$row["staff_name"].'</h4>';
                                        
                                        $b = "SELECT * FROM contact WHERE id=".$row['staff_id'];

                                        $r = @mysqli_query ($db, $b);
                      
                                        if($result)
                                        {
                                          while($row1=mysqli_fetch_array($r, MYSQLI_ASSOC))
                                          {
                                            echo'
                                                <h6>'.$row1["position"].'</h6>
                                                <br><br>
                                                <p>
                                                ';
                                          }
                                        }
                                        
                                        
                                        echo'
                                          <span>Tel : </span> '.$row["staff_tel"].'
                                          <br>
                                          <span>Email : </span> '.$row["staff_email"].'
                                          <br>
                                          <br>
                                          <span>Higher Education : </span>';
                                      
                                        $user = $row['user_name'];

                                        $c = "SELECT kelulusan FROM aca_qualification WHERE user_name='$user' ORDER BY year DESC LIMIT 1";

                                        $r2 = @mysqli_query ($db, $c);
                      
                                        if($r2)
                                        {
                                          while($row2=mysqli_fetch_array($r2, MYSQLI_ASSOC))
                                          {
                                            echo'
                                                <br>
                                                  '.$row2["kelulusan"].'
                                                ';
                                          }
                                        }
                                        
                                        
                                        echo'
                                        </p>
                                        <button onclick="window.location.href=`staff-details.php?username='.$row["staff_id"].'`;">View My Profile</button>
                                      </div>
                                    </div>
                                  </div>';
                          }
                        }
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
                
                <img src="assets/img/new/2.png" class="image" width="100%">
              </div>

              <!-- _____________________________________ AI _____________________________________ -->
              <div class="col-lg-12 col-md-6 portfolio-item filter-ai isotope-item  big-image">
                <button id="ai1" style="position: absolute; cursor: pointer; top: 21.5%; left: 21.8%; border-radius: 50%; width: 50px; height: 65px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="ai2" style="position: absolute; cursor: pointer; top: 29.5%; left: 33%; border-radius: 50%; width: 45px; height: 65px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="ai3" style="position: absolute; cursor: pointer; top: 24.8%; left: 43.5%; border-radius: 50%; width: 50px; height: 65px; background-color: transparent; border: 0px; color: white; z-index: 1;" class="circle_point"></button>
                <button id="ai4" style="position: absolute; cursor: pointer; top: 27.5%; left: 55%; border-radius: 50%; width: 45px; height: 55px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="ai5" style="position: absolute; cursor: pointer; top: 22.5%; left: 64.5%; border-radius: 50%; width: 50px; height: 65px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="ai6" style="position: absolute; cursor: pointer; top: 27%; left: 73.3%; border-radius: 50%; width: 55px; height: 60px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                
                <?php
                  $a = "SELECT * FROM staff ORDER BY staff_id";

                  $result = @mysqli_query ($db, $a);

                  if($result)
                  {
                      while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                      {
                        $field_name = $row["staff_field"];
                        $staff_position = $row["staff_position"];

                        if($field_name == "Data Analytic"){
                          if($staff_position == "Dean" || $staff_position == "Deputy Dean"){
                            echo '<div class="backLayer" id="ai-'.$row["staff_id"].'">
                                    <div class="layer1">
                                      <div class="close-btn" id="close-btn-ai'.$row["staff_id"].'">&times;</div>
                                      <div class="left_part">
                                        <img src="assets/img/'.$row["staff_id"].'.png" id="intel">
                                      </div>
                                      <div class="right_part">
                                        <h4>'.$row["staff_name"].'</h4>';
                                        
                                        $b = "SELECT * FROM contact WHERE id=".$row['staff_id'];

                                        $r = @mysqli_query ($db, $b);
                      
                                        if($result)
                                        {
                                          while($row1=mysqli_fetch_array($r, MYSQLI_ASSOC))
                                          {
                                            echo'
                                                <h6>'.$row1["position"].'</h6>
                                                <br><br>
                                                <p>
                                                ';
                                          }
                                        }
                                        
                                        
                                        echo'
                                          <span>Tel : </span> '.$row["staff_tel"].'
                                          <br>
                                          <span>Email : </span> '.$row["staff_email"].'
                                          <br>
                                          <br>
                                          <span>Higher Education : </span>';
                                      
                                        $user = $row['user_name'];

                                        $c = "SELECT kelulusan FROM aca_qualification WHERE user_name='$user' ORDER BY year DESC LIMIT 1";

                                        $r2 = @mysqli_query ($db, $c);
                      
                                        if($r2)
                                        {
                                          while($row2=mysqli_fetch_array($r2, MYSQLI_ASSOC))
                                          {
                                            echo'
                                                <br>
                                                  '.$row2["kelulusan"].'
                                                ';
                                          }
                                        }
                                        
                                        
                                        echo'
                                        </p>
                                        <button onclick="window.location.href=`profile/index.php?username='.$row["staff_id"].'`;">View My Profile</button>
                                      </div>
                                    </div>
                                  </div>';
                          }
                          else{
                            echo '<div class="backLayer" id="ai-'.$row["staff_id"].'">
                                    <div class="layer1">
                                      <div class="close-btn" id="close-btn-ai'.$row["staff_id"].'">&times;</div>
                                      <div class="left_part">
                                        <img src="assets/img/'.$row["staff_id"].'.png" id="intel">
                                      </div>
                                      <div class="right_part">
                                        <h4>'.$row["staff_name"].'</h4>';
                                        
                                        $b = "SELECT * FROM contact WHERE id=".$row['staff_id'];

                                        $r = @mysqli_query ($db, $b);
                      
                                        if($result)
                                        {
                                          while($row1=mysqli_fetch_array($r, MYSQLI_ASSOC))
                                          {
                                            echo'
                                                <h6>'.$row1["position"].'</h6>
                                                <br><br>
                                                <p>
                                                ';
                                          }
                                        }
                                        
                                        
                                        echo'
                                          <span>Tel : </span> '.$row["staff_tel"].'
                                          <br>
                                          <span>Email : </span> '.$row["staff_email"].'
                                          <br>
                                          <br>
                                          <span>Higher Education : </span>';
                                      
                                        $user = $row['user_name'];

                                        $c = "SELECT kelulusan FROM aca_qualification WHERE user_name='$user' ORDER BY year DESC LIMIT 1";

                                        $r2 = @mysqli_query ($db, $c);
                      
                                        if($r2)
                                        {
                                          while($row2=mysqli_fetch_array($r2, MYSQLI_ASSOC))
                                          {
                                            echo'
                                                <br>
                                                  '.$row2["kelulusan"].'
                                                ';
                                          }
                                        }
                                        
                                        
                                        echo'
                                        </p>
                                        <button onclick="window.location.href=`staff-details.php?username='.$row["staff_id"].'`;">View My Profile</button>
                                      </div>
                                    </div>
                                  </div>';
                          }
                        }
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
                
                <img src="assets/img/new/5.png" class="image" width="100%">
                
              </div>

              <!-- _____________________________________ MULTIMEDIA _____________________________________ -->
              <div class="col-lg-12 col-md-6 portfolio-item filter-multimedia isotope-item  big-image">
                <button id="mul1" style="position: absolute; cursor: pointer; top: 18%; left: 14.8%; border-radius: 50%; width: 60px; height: 80px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="mul2" style="position: absolute; cursor: pointer; top: 27.5%; left: 25%; border-radius: 50%; width: 45px; height: 65px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="mul3" style="position: absolute; cursor: pointer; top: 27.5%; left: 32.5%; border-radius: 50%; width: 50px; height: 65px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="mul4" style="position: absolute; cursor: pointer; top: 26.5%; left: 43%; border-radius: 50%; width: 50px; height: 65px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="mul5" style="position: absolute; cursor: pointer; top: 24.5%; left: 52.5%; border-radius: 50%; width: 50px; height: 65px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="mul6" style="position: absolute; cursor: pointer; top: 27%; left: 61.7%; border-radius: 50%; width: 55px; height: 65px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="mul7" style="position: absolute; cursor: pointer; top: 26%; left: 70.5%; border-radius: 50%; width: 55px; height: 70px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="mul8" style="position: absolute; cursor: pointer; top: 23%; left: 82.3%; border-radius: 50%; width: 50px; height: 75px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                
                <?php
                  $a = "SELECT * FROM staff ORDER BY staff_id";

                  $result = @mysqli_query ($db, $a);

                  if($result)
                  {
                    while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                      $field_name = $row["staff_field"];
                      $staff_position = $row["staff_position"];

                      if($field_name == "Multimedia"){
                        if($staff_position == "Dean" || $staff_position == "Deputy Dean"){
                          echo '<div class="backLayer" id="mul-'.$row["staff_id"].'">
                                  <div class="layer1"> 
                                    <div class="close-btn" id="close-btn-mul'.$row["staff_id"].'">&times;</div>
                                    <div class="left_part">
                                      <img src="assets/img/'.$row["staff_id"].'.png" id="mult">
                                    </div>
                                    <div class="right_part">
                                      <h4>'.$row["staff_name"].'</h4>';
                                        
                                        $b = "SELECT * FROM contact WHERE id=".$row['staff_id'];

                                        $r = @mysqli_query ($db, $b);
                      
                                        if($result)
                                        {
                                          while($row1=mysqli_fetch_array($r, MYSQLI_ASSOC))
                                          {
                                            echo'
                                                <h6>'.$row1["position"].'</h6>
                                                <br><br>
                                                <p>
                                                ';
                                          }
                                        }
                                        
                                        
                                        echo'
                                        <span>Tel : </span> '.$row["staff_tel"].'
                                        <br>
                                        <span>Email : </span> '.$row["staff_email"].'
                                        <br>
                                        <br>
                                          <span>Higher Education : </span>';
                                      
                                        $user = $row['user_name'];

                                        $c = "SELECT kelulusan FROM aca_qualification WHERE user_name='$user' ORDER BY year DESC LIMIT 1";

                                        $r2 = @mysqli_query ($db, $c);
                      
                                        if($r2)
                                        {
                                          while($row2=mysqli_fetch_array($r2, MYSQLI_ASSOC))
                                          {
                                            echo'
                                                <br>
                                                  '.$row2["kelulusan"].'
                                                ';
                                          }
                                        }
                                        
                                        
                                        echo'
                                      </p>
                                      <button onclick="window.location.href=`profile/index'.$row["staff_id"].'.php?username='.$row["staff_id"].'`;">View My Profile</button>
                                    </div>
                                  </div>
                                </div>';
                        }
                        else{
                          echo '<div class="backLayer" id="mul-'.$row["staff_id"].'">
                                  <div class="layer1">
                                    <div class="close-btn" id="close-btn-mul'.$row["staff_id"].'">&times;</div>
                                    <div class="left_part">
                                      <img src="assets/img/'.$row["staff_id"].'.png" id="mult">
                                    </div>
                                    <div class="right_part">
                                      <h4>'.$row["staff_name"].'</h4>';
                                        
                                        $b = "SELECT * FROM contact WHERE id=".$row['staff_id'];

                                        $r = @mysqli_query ($db, $b);
                      
                                        if($result)
                                        {
                                          while($row1=mysqli_fetch_array($r, MYSQLI_ASSOC))
                                          {
                                            echo'
                                                <h6>'.$row1["position"].'</h6>
                                                <br><br>
                                                <p>
                                                ';
                                          }
                                        }
                                        
                                        
                                        echo'
                                        <span>Tel : </span> '.$row["staff_tel"].'
                                        <br>
                                        <span>Email : </span> '.$row["staff_email"].'
                                        <br>
                                        <br>
                                          <span>Higher Education : </span>';
                                      
                                        $user = $row['user_name'];

                                        $c = "SELECT kelulusan FROM aca_qualification WHERE user_name='$user' ORDER BY year DESC LIMIT 1";

                                        $r2 = @mysqli_query ($db, $c);
                      
                                        if($r2)
                                        {
                                          while($row2=mysqli_fetch_array($r2, MYSQLI_ASSOC))
                                          {
                                            echo'
                                                <br>
                                                  '.$row2["kelulusan"].'
                                                ';
                                          }
                                        }
                                        
                                        
                                        echo'
                                      </p>
                                      <button onclick="window.location.href=`staff-details.php?username='.$row["staff_id"].'`;">View My Profile</button>
                                    </div>
                                  </div>
                                </div>';
                        }
                      }
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
                
                <img src="assets/img/new/MULTIMEDIA.png" class="image" width="100%">
                
              </div>

              <!-- _____________________________________ MATHS __________________________________ -->
              <div class="col-lg-12 col-md-6 portfolio-item isotope-item filter-maths big-image">
                <button id="mc1" style="position: absolute; cursor: pointer; top: 20.5%; left: 12.5%; border-radius: 50%; width: 50px; height: 65px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="mc2" style="position: absolute; cursor: pointer; top: 25.5%; left: 26%; border-radius: 50%; width: 45px; height: 55px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="mc3" style="position: absolute; cursor: pointer; top: 30.8%; left: 41.8%; border-radius: 50%; width: 40px; height: 55px; background-color: transparent; border: 0px; color: white; z-index: 1;" class="circle_point"></button>
                <button id="mc4" style="position: absolute; cursor: pointer; top: 42.5%; left: 52%; border-radius: 50%; width: 35px; height: 50px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="mc5" style="position: absolute; cursor: pointer; top: 23.5%; left: 71%; border-radius: 50%; width: 50px; height: 65px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                <button id="mc6" style="position: absolute; cursor: pointer; top: 21%; left: 81.8%; border-radius: 50%; width: 55px; height: 75px; background-color: transparent; border: 0px; color: white;" class="circle_point"></button>
                
                <?php
                  $a = "SELECT * FROM staff ORDER BY staff_id";

                  $result = @mysqli_query ($db, $a);

                  if($result)
                  {
                      while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                      {
                        $field_name = $row["staff_field"];
                        $staff_position = $row["staff_position"];

                        if($field_name == "Maths"){
                          if($staff_position == "Dean" || $staff_position == "Deputy Dean"){
                            echo '<div class="backLayer" id="mc-'.$row["staff_id"].'">
                                    <div class="layer1">
                                      <div class="close-btn" id="close-btn-mc'.$row["staff_id"].'">&times;</div>
                                      <div class="left_part">
                                        <img src="assets/img/'.$row["staff_id"].'.png" id="maths">
                                      </div>
                                      <div class="right_part">
                                        <h4>'.$row["staff_name"].'</h4>';
                                        
                                        $b = "SELECT * FROM contact WHERE id=".$row['staff_id'];

                                        $r = @mysqli_query ($db, $b);
                      
                                        if($result)
                                        {
                                          while($row1=mysqli_fetch_array($r, MYSQLI_ASSOC))
                                          {
                                            echo'
                                                <h6>'.$row1["position"].'</h6>
                                                <br><br>
                                                <p>
                                                ';
                                          }
                                        }
                                        
                                        
                                        echo'
                                          <span>Tel : </span> '.$row["staff_tel"].'
                                          <br>
                                          <span>Email : </span> '.$row["staff_email"].'
                                          <br>
                                          <br>
                                          <span>Higher Education : </span>';
                                      
                                        $user = $row['user_name'];

                                        $c = "SELECT kelulusan FROM aca_qualification WHERE user_name='$user' ORDER BY year DESC LIMIT 1";

                                        $r2 = @mysqli_query ($db, $c);
                      
                                        if($r2)
                                        {
                                          while($row2=mysqli_fetch_array($r2, MYSQLI_ASSOC))
                                          {
                                            echo'
                                                <br>
                                                  '.$row2["kelulusan"].'
                                                ';
                                          }
                                        }
                                        
                                        
                                        echo'
                                        </p>
                                        <button onclick="window.location.href=`profile/index'.$row["staff_id"].'.php?username='.$row["staff_id"].'`;">View My Profile</button>
                                      </div>
                                    </div>
                                  </div>';
                          }
                          else{
                            echo '<div class="backLayer" id="mc-'.$row["staff_id"].'">
                                    <div class="layer1">
                                      <div class="close-btn" id="close-btn-mc'.$row["staff_id"].'">&times;</div>
                                      <div class="left_part">
                                        <img src="assets/img/'.$row["staff_id"].'.png" id="maths">
                                      </div>
                                      <div class="right_part">
                                        <h4>'.$row["staff_name"].'</h4>';
                                        
                                        $b = "SELECT * FROM contact WHERE id=".$row['staff_id'];

                                        $r = @mysqli_query ($db, $b);
                      
                                        if($result)
                                        {
                                          while($row1=mysqli_fetch_array($r, MYSQLI_ASSOC))
                                          {
                                            echo'
                                                <h6>'.$row1["position"].'</h6>
                                                <br><br>
                                                <p>
                                                ';
                                          }
                                        }
                                        
                                        
                                        echo'
                                          <span>Tel : </span> '.$row["staff_tel"].'
                                          <br>
                                          <span>Email : </span> '.$row["staff_email"].'
                                          <br>
                                          <br>
                                          <span>Higher Education : </span>';
                                      
                                        $user = $row['user_name'];

                                        $c = "SELECT kelulusan FROM aca_qualification WHERE user_name='$user' ORDER BY year DESC LIMIT 1";

                                        $r2 = @mysqli_query ($db, $c);
                      
                                        if($r2)
                                        {
                                          while($row2=mysqli_fetch_array($r2, MYSQLI_ASSOC))
                                          {
                                            echo'
                                                <br>
                                                  '.$row2["kelulusan"].'
                                                ';
                                          }
                                        }
                                        
                                        
                                        echo'
                                        </p>
                                        <button onclick="window.location.href=`staff-details.php?username='.$row["staff_id"].'`;">View My Profile</button>
                                      </div>
                                    </div>
                                  </div>';
                          }
                        }
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
                
                <img src="assets/img/new/6.png" class="image" width="100%">
              </div>

            <?php

            $a = "SELECT * FROM staff ORDER BY staff_id";
 
            $result = @mysqli_query ($db, $a);

            if($result)
            {
                while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                {

                  $staff_position = $row["staff_position"];
                  $field_name = $row["staff_field"];

                  if($field_name == "Network"){
                    if($staff_position == "Dean" || $staff_position == "Deputy Dean"){
                      echo '<div class="col-lg-2 col-md-6 portfolio-item isotope-item filter-network small-image">
                              <img src="assets/img/staff/'.$row["staff_id"].'.png" class="img-fluid" alt=""  id="net">
                              <div class="portfolio-info">
                                <h4>'.$row["staff_name"].'</h4>
                                <a href="profile/index'.$row["staff_id"].'.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                            </div>';
                    }else{
                      echo '<div class="col-lg-2 col-md-6 portfolio-item isotope-item filter-network small-image">
                              <img src="assets/img/staff/'.$row["staff_id"].'.png" class="img-fluid" alt="" id="net">
                              <div class="portfolio-info">
                                <h4>'.$row["staff_name"].'</h4>
                                <a href="staff-details.php?username='.$row["staff_id"].'" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                            </div>';
                    }
                  }
                  if($field_name == "Software Engineering"){
                    if($staff_position == "Dean" || $staff_position == "Deputy Dean"){
                      echo '<div class="col-lg-2 col-md-6 portfolio-item isotope-item filter-software small-image">
                              <img src="assets/img/staff/'.$row["staff_id"].'.png" class="img-fluid" alt="" id="soft">
                              <div class="portfolio-info">
                                <h4>'.$row["staff_name"].'</h4>
                                <a href="profile/index'.$row["staff_id"].'.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                            </div>';
                    }else{
                      echo '<div class="col-lg-2 col-md-6 portfolio-item isotope-item filter-software small-image">
                              <img src="assets/img/staff/'.$row["staff_id"].'.png" class="img-fluid" alt="" id="soft">
                              <div class="portfolio-info">
                                <h4>'.$row["staff_name"].'</h4>
                                <a href="staff-details.php?username='.$row["staff_id"].'" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                            </div>';
                    }
                  }
                  if($field_name == "IT"){
                    if($staff_position == "Dean" || $staff_position == "Deputy Dean"){
                      echo '<div class="col-lg-2 col-md-6 portfolio-item isotope-item filter-it small-image">
                              <img src="assets/img/staff/'.$row["staff_id"].'.png" class="img-fluid" alt="" id="tech">
                              <div class="portfolio-info">
                                <h4>'.$row["staff_name"].'</h4>
                                <a href="profile/index'.$row["staff_id"].'.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                            </div>';
                    }else{
                      echo '<div class="col-lg-2 col-md-6 portfolio-item isotope-item filter-it small-image">
                              <img src="assets/img/staff/'.$row["staff_id"].'.png" class="img-fluid" alt="" id="tech">
                              <div class="portfolio-info">
                                <h4>'.$row["staff_name"].'</h4>
                                <a href="staff-details.php?username='.$row["staff_id"].'" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                            </div>';
                    }
                  }
                  if($field_name == "Data Analytic"){
                    if($staff_position == "Dean" || $staff_position == "Deputy Dean"){
                      echo '<div class="col-lg-2 col-md-6 portfolio-item isotope-item filter-ai small-image">
                              <img src="assets/img/staff/'.$row["staff_id"].'.png" class="img-fluid" alt="" id="intel">
                              <div class="portfolio-info">
                                <h4>'.$row["staff_name"].'</h4>
                                <a href="profile/index'.$row["staff_id"].'.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                            </div>';
                    }else{
                      echo '<div class="col-lg-2 col-md-6 portfolio-item isotope-item filter-ai small-image">
                              <img src="assets/img/staff/'.$row["staff_id"].'.png" class="img-fluid" alt="" id="intel">
                              <div class="portfolio-info">
                                <h4>'.$row["staff_name"].'</h4>
                                <a href="staff-details.php?username='.$row["staff_id"].'" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                            </div>';
                    }
                  }
                  if($field_name == "Multimedia"){
                    if($staff_position == "Dean" || $staff_position == "Deputy Dean"){
                      echo '<div class="col-lg-2 col-md-6 portfolio-item isotope-item filter-multimedia small-image">
                              <img src="assets/img/staff/'.$row["staff_id"].'.png" class="img-fluid" alt="" id="mult">
                              <div class="portfolio-info">
                                <h4>'.$row["staff_name"].'</h4>
                                <a href="profile/index'.$row["staff_id"].'.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                            </div>';
                    }else{
                      echo '<div class="col-lg-2 col-md-6 portfolio-item isotope-item filter-multimedia small-image">
                              <img src="assets/img/staff/'.$row["staff_id"].'.png" class="img-fluid" alt="" id="mult">
                              <div class="portfolio-info">
                                <h4>'.$row["staff_name"].'</h4>
                                <a href="staff-details.php?username='.$row["staff_id"].'" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                            </div>';
                    }
                  }
                  if($field_name == "Maths"){
                    if($staff_position == "Dean" || $staff_position == "Deputy Dean"){
                      echo '<div class="col-lg-2 col-md-6 portfolio-item isotope-item filter-maths small-image">
                              <img src="assets/img/staff/'.$row["staff_id"].'.png" class="img-fluid" alt="" id="maths">
                              <div class="portfolio-info">
                                <h4>'.$row["staff_name"].'</h4>
                                <a href="profile/index'.$row["staff_id"].'.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                            </div>';
                    }else{
                      echo '<div class="col-lg-2 col-md-6 portfolio-item isotope-item filter-maths small-image">
                              <img src="assets/img/staff/'.$row["staff_id"].'.png" class="img-fluid" alt="" id="maths">
                              <div class="portfolio-info">
                                <h4>'.$row["staff_name"].'</h4>
                                <a href="staff-details.php?username='.$row["staff_id"].'" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                            </div>';
                    }
                  }
                }

                mysqli_free_result ($result);

            }
            else
            {
                echo '<p class ="error"> The current data could not be retrieved.
                We apologize for any inconvenience.</p>';
                
                echo '<p>'.mysqli_error ($db).'<br><br/>Query:'.$a.'</p>'; 
            }
                
            mysqli_close($db);

            ?>
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Section -->

  </main>

  <footer id="footer" class="footer dark-background">

  <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-6 footer-about">
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

          <div class="col-lg-4 col-md-3 footer-links">
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
  <script src="index.js"></script>
  <script>
        const n1 = document.getElementById('net1');
        const n2 = document.getElementById('net2');
        const n3 = document.getElementById('net3');
        const n4 = document.getElementById('net4');
        const n5 = document.getElementById('net5');
        const n6 = document.getElementById('net6');
        const n7 = document.getElementById('net7');
        const n8 = document.getElementById('net8');
        const n10 = document.getElementById('net10');

        const btn_net1 = document.getElementById('close-btn-net1');
        const btn_net3 = document.getElementById('close-btn-net3');
        const btn_net4 = document.getElementById('close-btn-net4');
        const btn_net5 = document.getElementById('close-btn-net5');
        const btn_net6 = document.getElementById('close-btn-net6');
        const btn_net7 = document.getElementById('close-btn-net7');
        const btn_net8 = document.getElementById('close-btn-net8');
        const btn_net9 = document.getElementById('close-btn-net9');
        const btn_net10 = document.getElementById('close-btn-net10');

        n7.addEventListener("click", f1);
        btn_net1.addEventListener("click", f1);

        function f1(){
          document.getElementById("network-1").classList.toggle("active");
        }

        n6.addEventListener("click", f2);
        btn_net3.addEventListener("click", f2);

        function f2(){
          document.getElementById("network-3").classList.toggle("active");
        }

        n1.addEventListener("click", f3);
        btn_net4.addEventListener("click", f3);

        function f3(){
          document.getElementById("network-4").classList.toggle("active");
        }

        n8.addEventListener("click", f4);
        btn_net5.addEventListener("click", f4);

        function f4(){
          document.getElementById("network-5").classList.toggle("active");
        }
        
        n10.addEventListener("click", f5);
        btn_net6.addEventListener("click", f5);

        function f5(){
          document.getElementById("network-6").classList.toggle("active");
        }

        n2.addEventListener("click", f6);
        btn_net7.addEventListener("click", f6);

        function f6(){
          document.getElementById("network-7").classList.toggle("active");
        }

        n3.addEventListener("click", f7);
        btn_net8.addEventListener("click", f7);

        function f7(){
          document.getElementById("network-8").classList.toggle("active");
        }

        n4.addEventListener("click", f8);
        btn_net9.addEventListener("click", f8);

        function f8(){
          document.getElementById("network-9").classList.toggle("active");
        }

        n5.addEventListener("click", f10);
        btn_net10.addEventListener("click", f10);

        function f10(){
          document.getElementById("network-10").classList.toggle("active");
        }

        const s1 = document.getElementById('sof1');
        const s2 = document.getElementById('sof2');
        const s3 = document.getElementById('sof3');
        const s4 = document.getElementById('sof4');
        const s5 = document.getElementById('sof5');
        const s6 = document.getElementById('sof6');
        const s7 = document.getElementById('sof7');

        const btn_sof1 = document.getElementById('close-btn-sof11');
        const btn_sof2 = document.getElementById('close-btn-sof12');
        const btn_sof3 = document.getElementById('close-btn-sof13');
        const btn_sof4 = document.getElementById('close-btn-sof14');
        const btn_sof5 = document.getElementById('close-btn-sof15');
        const btn_sof6 = document.getElementById('close-btn-sof16');
        const btn_sof7 = document.getElementById('close-btn-sof17');

        s7.addEventListener("click", f11);
        btn_sof1.addEventListener("click", f11);

        function f11(){
          document.getElementById("software-11").classList.toggle("active");
        }

        s5.addEventListener("click", f12);
        btn_sof2.addEventListener("click", f12);

        function f12(){
          document.getElementById("software-12").classList.toggle("active");
        }

        s6.addEventListener("click", f13);
        btn_sof3.addEventListener("click", f13);

        function f13(){
          document.getElementById("software-13").classList.toggle("active");
        }

        s3.addEventListener("click", f14);
        btn_sof4.addEventListener("click", f14);

        function f14(){
          document.getElementById("software-14").classList.toggle("active");
        }

        s4.addEventListener("click", f15);
        btn_sof5.addEventListener("click", f15);

        function f15(){
          document.getElementById("software-15").classList.toggle("active");
        }

        s2.addEventListener("click", f16);
        btn_sof6.addEventListener("click", f16);

        function f16(){
          document.getElementById("software-16").classList.toggle("active");
        }

        s1.addEventListener("click", f17);
        btn_sof7.addEventListener("click", f17);

        function f17(){
          document.getElementById("software-17").classList.toggle("active");
        }

        const i1 = document.getElementById('it1');
        const i2 = document.getElementById('it2');
        const i3 = document.getElementById('it3');
        const i4 = document.getElementById('it4');
        const i5 = document.getElementById('it5');
        const i6 = document.getElementById('it6');
        const i7 = document.getElementById('it7');
        const i8 = document.getElementById('it8');
        const i9 = document.getElementById('it9');

        const btn_it1 = document.getElementById('close-btn-it18');
        const btn_it2 = document.getElementById('close-btn-it19');
        const btn_it3 = document.getElementById('close-btn-it20');
        const btn_it4 = document.getElementById('close-btn-it21');
        const btn_it5 = document.getElementById('close-btn-it22');
        const btn_it6 = document.getElementById('close-btn-it23');
        const btn_it7 = document.getElementById('close-btn-it24');
        const btn_it8 = document.getElementById('close-btn-it25');
        const btn_it9 = document.getElementById('close-btn-it26');
        const btn_it10 = document.getElementById('close-btn-it2');
        const btn_it11 = document.getElementById('close-btn-it47');

        i6.addEventListener("click", f18);
        btn_it1.addEventListener("click", f18);

        function f18(){
          document.getElementById("it-18").classList.toggle("active");
        }

        i3.addEventListener("click", f19);
        btn_it2.addEventListener("click", f19);

        function f19(){
          document.getElementById("it-19").classList.toggle("active");
        }

        i5.addEventListener("click", f20);
        btn_it3.addEventListener("click", f20);

        function f20(){
          document.getElementById("it-20").classList.toggle("active");
        }

        i8.addEventListener("click", f21);
        btn_it4.addEventListener("click", f21);

        function f21(){
          document.getElementById("it-21").classList.toggle("active");
        }

        i7.addEventListener("click", f22);
        btn_it5.addEventListener("click", f22);

        function f22(){
          document.getElementById("it-22").classList.toggle("active");
        }

        i1.addEventListener("click", f23);
        btn_it6.addEventListener("click", f23);

        function f23(){
          document.getElementById("it-23").classList.toggle("active");
        }

        i2.addEventListener("click", f24);
        btn_it7.addEventListener("click", f24);

        function f24(){
          document.getElementById("it-24").classList.toggle("active");
        }

        i4.addEventListener("click", f25);
        btn_it10.addEventListener("click", f25);

        function f25(){
          document.getElementById("it-2").classList.toggle("active");
        }

        i9.addEventListener("click", f47);
        btn_it11.addEventListener("click", f47);

        function f47(){
          document.getElementById("it-47").classList.toggle("active");
        }


        const a1 = document.getElementById('ai1');
        const a2 = document.getElementById('ai2');
        const a3 = document.getElementById('ai3');
        const a4 = document.getElementById('ai4');
        const a5 = document.getElementById('ai5');
        const a6 = document.getElementById('ai6');

        const btn_ai2 = document.getElementById('close-btn-ai26');
        const btn_ai3 = document.getElementById('close-btn-ai27');
        const btn_ai4 = document.getElementById('close-btn-ai28');
        const btn_ai5 = document.getElementById('close-btn-ai29');
        const btn_ai6 = document.getElementById('close-btn-ai30');
        const btn_ai7 = document.getElementById('close-btn-ai31');

        a2.addEventListener("click", f27);
        btn_ai2.addEventListener("click", f27);

        function f27(){
          document.getElementById("ai-26").classList.toggle("active");
        }

        a4.addEventListener("click", f28);
        btn_ai3.addEventListener("click", f28);

        function f28(){
          document.getElementById("ai-27").classList.toggle("active");
        }

        a6.addEventListener("click", f29);
        btn_ai4.addEventListener("click", f29);

        function f29(){
          document.getElementById("ai-28").classList.toggle("active");
        }

        a5.addEventListener("click", f30);
        btn_ai5.addEventListener("click", f30);

        function f30(){
          document.getElementById("ai-29").classList.toggle("active");
        }

        a1.addEventListener("click", f31);
        btn_ai6.addEventListener("click", f31);

        function f31(){
          document.getElementById("ai-30").classList.toggle("active");
        }

        a3.addEventListener("click", f32);
        btn_ai7.addEventListener("click", f32);

        function f32(){
          document.getElementById("ai-31").classList.toggle("active");
        }

        const u1 = document.getElementById('mul1');
        const u2 = document.getElementById('mul2');
        const u3 = document.getElementById('mul3');
        const u4 = document.getElementById('mul4');
        const u5 = document.getElementById('mul5');
        const u6 = document.getElementById('mul6');
        const u7 = document.getElementById('mul7');
        const u8 = document.getElementById('mul8');

        const btn_u1 = document.getElementById('close-btn-mul32');
        const btn_u2 = document.getElementById('close-btn-mul33');
        const btn_u3 = document.getElementById('close-btn-mul34');
        const btn_u4 = document.getElementById('close-btn-mul35');
        const btn_u5 = document.getElementById('close-btn-mul36');
        const btn_u6 = document.getElementById('close-btn-mul37');
        const btn_u7 = document.getElementById('close-btn-mul38');
        const btn_u8 = document.getElementById('close-btn-mul46');

        u1.addEventListener("click", f39);
        btn_u1.addEventListener("click", f39);

        function f39(){
          document.getElementById("mul-32").classList.toggle("active");
        }

        u4.addEventListener("click", f40);
        btn_u2.addEventListener("click", f40);

        function f40(){
          document.getElementById("mul-33").classList.toggle("active");
        }

        u5.addEventListener("click", f41);
        btn_u3.addEventListener("click", f41);

        function f41(){
          document.getElementById("mul-34").classList.toggle("active");
        }

        u8.addEventListener("click", f42);
        btn_u4.addEventListener("click", f42);

        function f42(){
          document.getElementById("mul-35").classList.toggle("active");
        }

        u7.addEventListener("click", f43);
        btn_u5.addEventListener("click", f43);

        function f43(){
          document.getElementById("mul-36").classList.toggle("active");
        }

        u2.addEventListener("click", f44);
        btn_u6.addEventListener("click", f44);

        function f44(){
          document.getElementById("mul-37").classList.toggle("active");
        }

        u6.addEventListener("click", f45);
        btn_u7.addEventListener("click", f45);

        function f45(){
          document.getElementById("mul-38").classList.toggle("active");
        }

        u3.addEventListener("click", f46);
        btn_u8.addEventListener("click", f46);

        function f46(){
          document.getElementById("mul-46").classList.toggle("active");
        }

        const m1 = document.getElementById('mc1');
        const m2 = document.getElementById('mc2');
        const m3 = document.getElementById('mc3');
        const m4 = document.getElementById('mc4');
        const m5 = document.getElementById('mc5');
        const m6 = document.getElementById('mc6');

        const btn_mc1 = document.getElementById('close-btn-mc39');
        const btn_mc2 = document.getElementById('close-btn-mc40');
        const btn_mc3 = document.getElementById('close-btn-mc41');
        const btn_mc4 = document.getElementById('close-btn-mc42');
        const btn_mc5 = document.getElementById('close-btn-mc43');
        const btn_mc6 = document.getElementById('close-btn-mc44');

        m4.addEventListener("click", f33);
        btn_mc1.addEventListener("click", f33);

        function f33(){
          document.getElementById("mc-39").classList.toggle("active");
        }

        m3.addEventListener("click", f34);
        btn_mc2.addEventListener("click", f34);

        function f34(){
          document.getElementById("mc-40").classList.toggle("active");
        }

        m2.addEventListener("click", f35);
        btn_mc3.addEventListener("click", f35);

        function f35(){
          document.getElementById("mc-41").classList.toggle("active");
        }

        m6.addEventListener("click", f36);
        btn_mc4.addEventListener("click", f36);

        function f36(){
          document.getElementById("mc-42").classList.toggle("active");
        }

        m5.addEventListener("click", f37);
        btn_mc5.addEventListener("click", f37);

        function f37(){
          document.getElementById("mc-43").classList.toggle("active");
        }

        m1.addEventListener("click", f38);
        btn_mc6.addEventListener("click", f38);

        function f38(){
          document.getElementById("mc-44").classList.toggle("active");
        }

        const btn_info = document.getElementById('gotit');
        
        btn_info.addEventListener("click", closePage);

        function closePage(){
          document.getElementById("start-layer").classList.toggle("active");
        }
    </script>
</body>

</html>