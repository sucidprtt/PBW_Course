<?php
    include 'koneksi.php';
    $query_regist = "SELECT * FROM regist ORDER BY id DESC LIMIT 1"; 
    $sql_regist = mysqli_query($koneksi, $query_regist);
    $no = 0;
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
        <div class="container">
            <?php
            if ($sql_regist && mysqli_num_rows($sql_regist) > 0) {
                // Mengambil Data dari Hasil Query
            $result = mysqli_fetch_assoc($sql_regist) 
            ?>
            <!-- Menampilkan Pesan Sukses -->
                <h1 class="mt-5 mb-3 text-info-emphasis">Registration Successful</h1>
                <p>Thank you, <b><?php echo htmlspecialchars ($result['name']);?>.</b> Your registration is successful!
                <br>A confirmation email has been sent to: <b><?php echo htmlspecialchars ($result['email']);?></b></p>
                <!-- Menutup Blok Kondisi -->
            <?php } ?>
        </div>
</body>
</html>