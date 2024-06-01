<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KELOMPOK-6</title>
    <!-- Integrasi CCDN CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <!-- BOOTSTRAP ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
        }
        .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #f4f4f4;
        padding: 1px 50px;
        border-bottom: 1px solid #ddd;
        }
        .header .left, .header .right {
            display: flex;
            align-items: center;
        }
        .header .left img {
            height: 60px; /* Mengurangi tinggi logo */
            margin-right: 10px;
        }
        .header .left .title {
            display: flex;
            flex-direction: column;
        }
        .header .left .title h1 {
            margin: 0;
            font-size: 0.8em; /* Mengurangi ukuran font */
        }
        .header .left .title p {
            margin: 0;
            font-size: 20px; /* Mengurangi ukuran font */
        }
        .header .right img {
            height: 60px; /* Mengurangi tinggi logo */
        }
        .nav {
            display: flex;
            justify-content: center;
            padding: 1px 0;
            background-color: #A1C398;
        }
        .nav a {
            text-decoration: none;
            color: #333;
            padding: 5px 20px;
            font-weight: bold;
            font-size: 0.8em;
        }
        .container {
            align-items: center;
        }
        .content{
            margin-bottom: 0px;
            margin-left: 50px;
            margin-right: 25px;
        }
        .image {
            margin-left: 35px; /* Memberi jarak antara teks dan gambar */
            margin-top: 0px;
            margin-right: 25px;
        }
        .row .image img {
            margin-left: 0;
            margin-top: 0;
            max-width: 100%; /* Agar gambar tidak melebihi lebar kontainer */
            height: auto;
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
            <div class="left">
                <img src="image/rinjani_logo.png" alt="Rinjani Logo">
                <div class="title">
                    <h1>Official Website For</h1>
                    <p>Mt. Rinjani Climbing</p>
                </div>
            </div>
            <div class="right">
                <img src="image/Logo_P.I.png" alt="Wonderful Indonesia Logo">
            </div>
        </div>
        <div class="nav">
            <a href="home.php">HOME</a>
            <a href="gallery.php">GALLERY</a>
            <a href="about.php">ABOUT</a>
            <a href="team.php">TEAM</a>
            <a href="faq.php">FAQ</a>
            <a href="regist.php">REGIST</a>
        </div>
    <div>
    <!-- CONTAINER BODY CONTENT -->
    <div class="container mt-5 pt-5">
        <!-- PHP PEMROSESAN -->
        <?php
        // Check Metode Request berupa Post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mengambil Data dari Formulir
            $inputEmail = $_POST['inputEmail'];
            $inputName = $_POST['inputName'];
            $inputPhone = $_POST['inputPhone'];
            $inputType = $_POST['inputType'];
            $inputQty = $_POST['inputQty'];
            $inputMessage = $_POST['inputMessage'];

            // Menyusuk Query SQL
            $query = "INSERT INTO regist VALUES(null,'$inputEmail', '$inputName', '$inputPhone', '$inputType', '$inputQty', '$inputMessage')";
            // Eksekusi Query SQL
            $sql = mysqli_query($koneksi, $query); 

            // Mengelola Hasil Ekseskusi
            if ($sql) {
            header("location: show.php");
            } else {
            echo $query;
            }     
        }
        ?>
    </div>
</body>
</html>

    
