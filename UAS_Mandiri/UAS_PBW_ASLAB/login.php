<?php
include 'Database.php';
include 'User.php';

session_start();

$database = new Database();
$db = $database->getConnection();

$user = new User($db);
$message = null;

if (isset($_POST['submit'])) {
    try {
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];

        if ($user->login()) {
            $_SESSION['user_id'] = $user->id;
            $_SESSION['username'] = $user->username;
            header("Location: daftar.php");
            exit();
        } else {
            $message = "Invalid login credentials.";
        }
    } catch (Exception $e) {
        $message = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- LINK CDN CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- LINK CSS BOOTSTRAP -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- BOOTSTRAP ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="">
   <style>
    *{
        font-family: 'Poppins', sans-serif;
    }
    body{
        background: linear-gradient(to right, #20002c, #cbb4d4);
    }
    .header{
        text-align: center;
        color: #fff
    }
    button{
        display: block;
        width: 90%;
        padding: 8px;
        border: none;
        outline: none;
        background: linear-gradient(to right, #20002c, #cbb4d4);
        font-size: 18px;
        color: #fff;
        cursor: pointer;
        max-width: 500px; /* Set maximum width of the card */
        margin: auto; /* Center the card horizontally */
    }
    .card{
        background: rgba(255,255,255,0.25);
        border: 1px solid rgba(255,255,255,0.18);
        border-radius: 4px;
        max-width: 500px; /* Set maximum width of the card */
        margin: auto; /* Center the card horizontally */
    }
    h2{
        color: #fff;
        text-align: center;
        text-transform: uppercase;
    }
    .card-body label{
        display: block;
        color: #fff;
        margin-left: 25px;
    }
    .card-body input{
        display: block;
        width: 90%;
        background: transparent;
        border: none;
        outline: none;
        border-bottom: 1px solid #fff;
        color: #fff;
        font-size: 16px;
        max-width: 450px; /* Set maximum width of the card */
        margin: auto; /* Center the card horizontally */
    }
    a{
        text-decoration: none;
        color: #20002c;
    }
    a:hover{
        text-decoration: underline;
    }
    .link{
        text-align: center;
        color: #fff;
    }
   </style>
</head>
<body>
    <div class="container mt-4 pt-4">
        <!-- Judul -->
        <div class="header">
            <p style="margin-bottom:5px;"><i class="bi bi-calendar2-plus"> </i> Start Your Day and Get Ready With ...</p>
            <h3><b>BeMyEvent </b><i class="bi bi-star "></i> <i class="bi  bi-star "></i> <i class="bi  bi-star"></i></h3>
        </div>
        <?php if ($message) { ?>
            <div class="alert alert-danger d-inline-block" role="alert">
                <?= $message ?>
            </div>
        <?php } ?>
        <!-- Card Login -->
        <div class="card shadow-lg mt-5" style="border-radius:20px;">
            <div class="card-body">
                <h2 class="mb-5" style="text-align: center;">LOGIN HERE!</h2>
                <!-- Form Login -->
                <form action="login.php" method="post">
                    <div class="mb-4">
                        <label for="email">Email</label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="mb-4">
                        <label for="password">Password</label>
                        <input type="password" name="password" required>
                    </div>
                    <div class="mb-4" style="text-align: center;">
                        <button type="submit" class="mb-4" name="submit">Log In</button>
                        <div class="link">Don't have account? <a class="text-decoration-none" href="register.php">Sign Up</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
