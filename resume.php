<?php
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume PDF Generator</title>
    <link rel="stylesheet" href="assets/css/resume.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
</head>
<body>
    <div class="resume-container" id="resume">
        <div class="main-content">
            <div class="left-column">
                <div class="profile-picture">

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
                    

                    $a = "SELECT * FROM users WHERE user_name='$username'";

                    $result = @mysqli_query ($db, $a);

                    if($result)
                    {
                        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                        {
                            echo '<img src="assets/img/staff/'.$row["id"].'.png" id="dp" data-id="'.$row["id"].'">
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

        $a = "SELECT * FROM staff WHERE user_name='$username'";

        $result = @mysqli_query ($db, $a);

        if($result)
        {
            while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
                echo '<div class="contact">
                <ul>
                    <li><i class="fa fa-phone"></i> <span>'.$row["staff_tel"].'</span></li>
                    <li><i class="fa fa-envelope"></i> <span>'.$row["staff_email"].'</span></li>
                </ul>
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

            
        $b = "SELECT * FROM kerja_penerbitan WHERE user_name='$username' ORDER BY tahun_terbit DESC LIMIT 3";

        $result1 = @mysqli_query ($db, $b);

        if($result1)
        {
        echo '<div class="language">
                <h2>PUBLICATION</h2>';

            while($row1=mysqli_fetch_array($result1, MYSQLI_ASSOC))
            {
            
            echo '
                <div class="job">
                    <p style="font-weight: bold;">'.$row1["jenis_terbit"].'</p>
                    <p>'.$row1["tajuk_terbit"].'</p>
                    <p style="font-weight: bold;">'.$row1["penerbit"].'</p>
                    <p style="font-weight: bold;">'.$row1["tahun_terbit"].'</p>
                </div><br>';
            }

            mysqli_free_result ($result1);

        }
        else
        {
            echo '<p class ="error"> The current data could not be retrieved.
            We apologize for any inconvenience.</p>';
            
            echo '<p>'.mysqli_error ($db).'<br><br/>Query:'.$b.'</p>'; 
        }


        $a = "SELECT * FROM staff WHERE user_name='$username'";

        $result = @mysqli_query ($db, $a);

        if($result)
        {
            while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
                echo'
                </div>
                <div class="expertise">
                    <h2>FIELD</h2>
                    <ul>
                        <li>'.$row["staff_field"].'</li>
                    </ul>
                </div>
            </div>
            <div class="right-column">
                <div class="logoPart">
                    <img src="assets/img/logoUptm.png" class="logo">
                    <img src="assets/img/fcom_logo.png" class="logo1">
                </div>
                <div class="header-text">';
                        
        }

        mysqli_free_result ($result);

        }
        else
        {
        echo '<p class ="error"> The current data could not be retrieved.
        We apologize for any inconvenience.</p>';

        echo '<p>'.mysqli_error ($db).'<br><br/>Query:'.$a.'</p>'; 
        }

        $a = "SELECT * FROM contact WHERE user_name='$username'";

        $result = @mysqli_query ($db, $a);

        if($result)
        {
            while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
                echo'
                    <h1 id="name" data-name="'.$row["user_name"].'">'.$row["name"].'</h1>
                    <h2>'.$row["position"].'</h2>
                    <p>Universiti Poly-Tech Malaysia</p>
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

        $a = "SELECT * FROM work_exp WHERE user_name='$username' ORDER BY id DESC LIMIT 3";

        $result = @mysqli_query ($db, $a);

        if($result)
        {
            echo '
                <div class="work-experience">
                            <h2>WORK EXPERIENCE</h2>';
            while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
                echo'
                    <div class="job">
                        <h3>'.$row["exp_position"].'</h3>
                        <p>'.$row["exp_name"].'</p>
                        <p style="font-weight: bold;">'.$row["exp_date"].'</p>
                    </div>';
                        
        }

        echo '</div>
                <br>';
        mysqli_free_result ($result);

        }
        else
        {
        echo '<p class ="error"> The current data could not be retrieved.
        We apologize for any inconvenience.</p>';

        echo '<p>'.mysqli_error ($db).'<br><br/>Query:'.$a.'</p>'; 
        }       


        $c = "SELECT * FROM aca_qualification WHERE user_name='$username' ORDER BY year DESC LIMIT 3";

        $result2 = @mysqli_query ($db, $c);

        if($result2)
        {
        echo '
            <div class="education">
                <h2>EDUCATION</h2>';

            while($row2=mysqli_fetch_array($result2, MYSQLI_ASSOC))
            {
            
            echo '
                <div class="school">
                    <h3>'.$row2["kelulusan"].'</h3>
                    <p>'.$row2["ipt_name"].'</p>
                    <p style="font-weight: bold;">'.$row2["year"].'</p>
                </div>';
            }

            mysqli_free_result ($result2);

        }
        else
        {
            echo '<p class ="error"> The current data could not be retrieved.
            We apologize for any inconvenience.</p>';
            
            echo '<p>'.mysqli_error ($db).'<br><br/>Query:'.$b.'</p>'; 
        }

        $a = "SELECT * FROM contact WHERE user_name='$username'";

        $result = @mysqli_query ($db, $a);

        if($result)
        {
            while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
                echo'
            </div>
            </div>
            </div>
        </div>
        <div class="buttonPart">
            <div class="button-container">
                <button id="downloadBtn">Save as PDF</button>
            </div>
            <div class="button-container">';
                    

            if($row['position'] == "Dean"){
                echo '<button onclick="window.location.href = `profile/index1.php?username='.$row["id"].'`;">Back</button>';
            }else if($row['position'] == "Deputy Dean"){
                echo '<button onclick="window.location.href = `profile/index2.php?username='.$row["id"].'`;">Back</button>';
            }else if($row['position'] == "Junior Executive"){
                echo '<button onclick="window.location.href = `profile/index3.php?username='.$row["id"].'`;">Back</button>';
            }else{
                echo '<button onclick="window.location.href = `staff-details.php?username='.$row["id"].'`;">Back</button>';
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
    <script src="assets/js/resume.js">

    </script>
</body>
</html>
