<?php
session_start();
include "../uptm-web/db_conn.php";

if (isset($_POST['username']) && isset($_POST['pass']) && isset($_GET['id'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $id = $_GET['id'];

    $uname = validate ($_POST['username']);
    $pass = validate ($_POST['pass']);

    if (empty ($uname)) {
        header("Location: index.php?error=User Name is required");
        exit;
    }else if(empty ($pass)) {
        header("Location: index.php?error=Password is required");
        exit;
    }else{
        $sql = "SELECT * FROM users WHERE id=$id";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['role'] = $row['role'];

                header("Location: index.php?id=".$row['id']."");
                exit();
            }else{
                header("Location: login_page.php?error=Incorrect User Name or Password");
                exit();
            }
        }else{
            header("Location: login_page.php?error=Incorrect User Name or Password");
            exit();
        }
    }

}else{
    header("Location: login_page.php?error");
    exit();
}