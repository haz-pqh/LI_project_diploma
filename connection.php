<html>
<head>
    <title>Database Connection</title>
</head>
<body>
    <?php

    $db = mysqli_connect("localhost","root","","fcom");

    if (!$db){
    die('Connection Failed: ' .mysqli_connect_error());
    }

    ?>
</body>
</html>
