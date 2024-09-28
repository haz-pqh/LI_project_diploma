<?php
session_start();
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'fcom2');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

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

    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['pass']);

    // Query to fetch user data
    $sql = "SELECT * FROM users WHERE user_name = '$username' AND password = '$password' AND id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Success: Start the session
        header("Location: index.php?id=".$id);
    } else {
        // Failure: Invalid credentials
        header("Location: login_page.php?id=".$id);
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="login_page.css">
    <title>Document</title>
</head>
<body>
<section class="vh-100">
    
<?php if (isset($_GET['error'])) { ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert">
        <strong>Holy guacamole!</strong> <?php echo $_GET['error']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" id="close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php } ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-4 ms-xl-4">
          <img src="../assets/img/fcom_logo.png" width="300" style="margin-top: 50px;"/>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 mt-3 pt-3 mt-xl-n5">

          <form style="width: 23rem;" method="post" action="">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <div data-mdb-input-init class="form-outline mb-4">
              <input type="text" id="form2Example18" class="form-control form-control-lg" placeholder="Username" name="username"/>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
              <input type="password" id="form2Example28" class="form-control form-control-lg" placeholder="Password" name="pass" />
            </div>

            <div class="pt-1 mb-4">
              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg btn-block" type="Submit">Login</button>
            </div>
          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="../assets/img/uptm.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;"/>
      </div>
    </div>
  </div>
</section>
    <script>
        const alert_warning = document.getElementById('close');
        const warning_message = document.getElementById('alert');

        alert_warning.addEventListener('click', alert);

        function alert(){
            warning_message.style.display = "none"; // This hides the alert (if it's being shown with a "show" class)
        }
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>