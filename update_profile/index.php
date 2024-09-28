<?php
session_start();
include "../connection.php";


if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['position'])) {

    $id = mysqli_real_escape_string($db, $_POST['id']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $tel = mysqli_real_escape_string($db, $_POST['tel']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $position = mysqli_real_escape_string($db, $_POST['position']);

    $sql = "UPDATE contact SET name='$name', position='$position' WHERE id='$id' ";
    $result = mysqli_query($db, $sql);

    if($result){
        $s = "UPDATE staff SET staff_name='$name', staff_tel='$tel' WHERE staff_id='$id' ";
        $r = mysqli_query($db, $s);

        if($position == "Dean" || $position == "dean" || $position == "DEAN"){
            echo '<script>alert("Update Successful!!");
            window.location.href = "../profile/index1.php?username='.$id.'"</script>
            ';
        }else if($position == "Deputy Dean" || $position == "deputy dean" || $position == "DEPUTY DEAN"){
            echo '<script>alert("Update Successful!!");
            window.location.href = "../profile/index2.php?username='.$position.'"</script>
            ';
        }else if($position == "Junior Executive" || $position == "junior executive" || $position == "JUNIOR EXECUTIVE"){
            echo '<script>alert("Update Successful!!");
            window.location.href = "../profile/index3.php?username='.$id.'"</script>
            ';
        }else{
            echo '<script>alert("Update Successful!!");
                    window.location.href = "../staff-details.php?username='.$id.'"</script>
                    ';
        }
    }
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Database connection
//     $conn = new mysqli('localhost', 'root', '', 'fcom2');

//     // Check connection
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     $id = $conn->real_escape_string($_POST['id']);
//     $name = $conn->real_escape_string($_POST['name']);
//     $tel = $conn->real_escape_string($_POST['tel']);
//     $email = $conn->real_escape_string($_POST['email']);
//     $position = $conn->real_escape_string($_POST['position']);

//     // Query to fetch user data
//     $sql = "UPDATE contact SET name='$name', position='$position' WHERE id='$id' ";
//     $result = $conn->query($sql);

//     if ($result) {

//         $s = "UPDATE staff SET staff_name='$name', staff_tel='$tel' WHERE staff_id='$id' ";
//         $r = $conn->query($s);

//         if ($r) {
//             // Success: Start the session
//             echo '<script>window.location.href</script>';
//         } else {
//             // Failure: Invalid credentials
//             header("Location: login_page.php?id=".$id);
//         }
//     } else {
//         // Failure: Invalid credentials
//         header("Location: login_page.php?id=".$id);
//     }

    

// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-9 col-md-10">
                
    
                <div class="card b-0 rounded-0 show">
                    <div class="row justify-content-center mx-auto step-container">
                        <div class="col-md-3 col-4 step-box active">
                            <h6 class="step-title-0">
                                <span class="fa fa-circle"></span>
                                <span class="break-line"></span>
                                <span class="step-title">UPDATE</span>
                            </h6>
                        </div>
                        <div class="col-md-3 col-4 step-box">
                            <h6 class="step-title-0">
                                <span class="fa fa-circle"></span>
                                <span class="break-line"></span>
                                <span class="step-title">CONFIRMATION</span>
                            </h6>
                        </div>
                    </div>

                    <?php
                        if ((isset ($_GET['id'])) && (is_numeric($_GET['id'])))
                        {
                            $id = $_GET['id'];
                        }
                        else if ((isset ($_POST['id'])) && (is_numeric($_POST['id'])))
                        {
                            $id = $_POST['id'];
                        }
                        else
                        {
                            echo '<p class ="error">This page has been accessed in error.</p>';
                            exit();
                        }

                        $a = "SELECT * FROM staff JOIN contact ON staff.user_name = contact.user_name WHERE id=$id";

                        $result = @mysqli_query ($db, $a);

                        if($result)
                        {
                        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                        {
                        echo'<form method="post" action="">
                                <div class="p-3 justify-content-center text-center">
                                    <h4 class="heading">UPDATE PROFILE</h4>
                                    <div class="row justify-content-center mb-4">
                                        <div class="col-xl-7 col-lg-8 col-10 list text-left">
                                            <label class="text-danger mb-3">* Required</label>
                                            <input type="hidden" id="id" name="id" value="'.$row['id'].'">
                                            <div class="form-group">
                                                <label class="form-control-label">Name :</label>
                                                <input type="text" id="name" name="name" placeholder="Full Name" class="form-control" value="'.$row['staff_name'].'">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Position :</label>
                                                <input type="text" id="position" name="position" placeholder="position" class="form-control" value="'.$row['position'].'">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">No. Tel :</label>
                                                <input type="text" id="tel" name="tel" placeholder="No. Tel" class="form-control" value="'.$row['staff_tel'].'">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Email :</label>
                                                <input type="email" id="email" name="email" placeholder="Email Address" class="form-control" value="'.$row['staff_email'].'">
                                            </div>
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

                    ?>
                        <button type="button" id="next2" class="btn btn-success rounded-0 mb-5 next">Submit</button>
                    </div>
                </div>
    
                <div class="card b-0 rounded-0">
                    <div class="row justify-content-center mx-auto step-container">
                        <div class="col-md-3 col-4 step-box">
                            <h6 class="step-title-0">
                                <span class="fa fa-check"></span>
                                <span class="break-line"></span>
                                <span class="step-title">FEEDBACK</span>
                            </h6>
                        </div>
                        <div class="col-md-3 col-4 step-box active">
                            <h6 class="step-title-0">
                                <span class="fa fa-circle"></span>
                                <span class="break-line"></span>
                                <span class="step-title">CONFIRMATION</span>
                            </h6>
                        </div>
                    </div>
                    <div class="p-3 justify-content-center text-center">
                        <h4 class="heading">Confirmation</h4>
                        <div class="row d-flex justify-content-center">
                            <div class="mb-4">
                                <h6 class="confirm">Verify all entered details and press confirm</h6>
                            </div>
                        </div>
                        <button type="Submit" id="next3" class="btn btn-success rounded-0 mb-5 next">Confirm</button>
                    </div>
                    </form>
                </div>
    
                <div class="card b-0 rounded-0">
                    <div class="row justify-content-center mx-auto step-container">
                        <?php if (isset($_GET['message'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert">
                                <strong>Holy guacamole!</strong> <?php echo $_GET['message']; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close" id="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php } ?>
                        <div class="col-md-3 col-4 step-box">
                            <h6 class="step-title-0">
                                <span class="fa fa-check"></span>
                                <span class="break-line"></span>
                                <span class="step-title">UPDATE</span>
                            </h6>
                        </div>
                        <div class="col-md-3 col-4 step-box">
                            <h6 class="step-title-0">
                                <span class="fa fa-check"></span>
                                <span class="break-line"></span>
                                <span class="step-title">CONFIRMATION</span>
                            </h6>
                        </div>
                    </div>
                    <div class="p-3 justify-content-center text-center">
                        <h3 class="heading">Thank You for your Feedback!</h3>
                        <div class="row justify-content-center">
                            <div class="">
                                <!-- <img src="asssets/success.gif" class="fit-image mb-5"> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="index.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>