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
  <title>Edit Participation</title>
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

    <h2>Edit Participation</h2>
    <hr>
    <br>
    <?php
    if(isset($_GET['id'])){

        $seminar_id = mysqli_real_escape_string($conn, $_GET['id']);
        $query = "SELECT * FROM seminar_latihan WHERE id='$seminar_id'";
        $query_run = mysqli_query($conn, $query);

        if(mysqli_num_rows($query_run) > 0){

            $seminar = mysqli_fetch_array($query_run);
            ?>
            
            <form action="seminar_save.php" method="post">
                <input type="hidden" name="seminar_id" value="<?=$seminar['id'];?>">
        
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Kursus / Seminar / Bengkel</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="seminar_nama" value="<?=$seminar['seminar_nama'];?>">
                    </div>
                </div>
                <br>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Tahun</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="tahun_seminar" value="<?=$seminar['tahun_seminar'];?>">
                    </div>
                </div>
                <br>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Penganjur</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="penganjur_seminar" value="<?=$seminar['penganjur_seminar'];?>">
                    </div>
                </div>
                <br>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Catatan (Berkaitan Kursus Dihadiri)</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="catatan_seminar" value="<?=$seminar['catatan_seminar'];?>">
                    </div>
                </div>

                <br><br>
                <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                        <button type="submit" name="update_seminar" class="btn btn-primary">Update</button>
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