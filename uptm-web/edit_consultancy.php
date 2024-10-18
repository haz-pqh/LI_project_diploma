<?php
session_start();
include "db_conn.php";

if(isset($_SESSION['user_name'])) {
}else{
    header("Location: home.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Consultancy Work</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .navbar-custom {
        background-color: indigo;
    }

  </style>
</head>
<body>

<nav class="navbar navbar-custom">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="home.php">fcom</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="home.php"><span class="glyphicon glyphicon-log-out"></span> Back To Home Page</a></li>
        </ul>
    </div>
</nav>

<div class="container my-5">

    <?php include('message.php'); ?>

    <h2>Edit Consultancy Work</h2>
    <hr>
    <br>
    <?php
    if(isset($_GET['id'])){

        $consult_id = mysqli_real_escape_string($conn, $_GET['id']);
        $query = "SELECT * FROM kerja_perundingan WHERE id='$consult_id'";
        $query_run = mysqli_query($conn, $query);

        if(mysqli_num_rows($query_run) > 0){

            $consult = mysqli_fetch_array($query_run);
            ?>
            
            <form action="consultancy_save.php" method="post">
                <input type="hidden" name="consultancy_id" value="<?=$consult['id'];?>">
        
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Tajuk</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="title_runding" value="<?=$consult['title_runding'];?>">
                    </div>
                </div>
                <br>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Tahun</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="tahun_runding" value="<?=$consult['tahun_runding'];?>">
                    </div>
                </div>
                <br>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Hasil</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="hasil_runding" value="<?=$consult['hasil_runding'];?>">
                    </div>
                </div>
                <br>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Sumber Kewangan</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="kewangan_runding" value="<?=$consult['kewangan_runding'];?>">
                    </div>
                </div>
                <br><br>
                <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                        <button type="submit" name="update_consultancy" class="btn btn-primary">Update</button>
                    </div>
                    <div>
                        <a href="home.php" class="btn btn-danger float-end">Cancel</a>
                    </div>
                </div>
            </form>
            <?php

        }else{
            echo "<h4>Subject Not Found</h4>";
        }
    }

    ?>
</div>

</body>
</html>