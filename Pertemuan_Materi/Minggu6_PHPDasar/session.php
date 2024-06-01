<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <h2>Session</h2>
    <?php 
    //  set session variable
    $_SESSION['name'] = "Cici";
    $_SESSION['role'] = "Admin";

    echo "Session variables are set" . "<br>";
    echo $_SESSION['name'] . "<br>";
    echo $_SESSION['role'] . "<br>";


    // remove session variable
    unset($_SESSION['name']);
    echo $_SESSION['name'];
    echo $_SESSION['role'];

    // remove all session variable
    session_unset();
    echo $_SESSION['name'];
    echo $_SESSION['role'];
    ?>
    
</body>
</html>