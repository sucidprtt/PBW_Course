<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KELOMPOK-6</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
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
        .hero {
            position: relative;
            background-size: cover;
            background-position: center;
            height: 50vh;
            color: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .hero .center-content {
            margin: 235px;
            margin-top: 250px;
            position: relative;
            z-index: 2;
            color: white; /* Warna teks putih agar kontras dengan overlay gelap */
        }
        .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.3); /* Overlay gelap semi-transparan */
        z-index: 1;
        }
        .content-container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }
        .content-container > div {
            flex: 1;
            margin: 0 30px;
            text-align: center;
            padding: 0 10px; 
        }
        .content-container .icon {
            height: 90px;
            width: auto;
            display: block;
            margin: 0 auto 20px;
        }
        .content-container h3 {
            margin-bottom: 10px; 
        }
        .content-container p {
            margin-top: 10px; /* Menambahkan jarak atas paragraf */
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
    
    <div class="hero" style="background-image: url('image/about-bg.jpg'); background-size: cover; background-position: top 86% center">
        <div class="center-content">
            <h1>About Us</h1>
            <h4>Taman Nasional Gunung Rinjani (TNGR)</h4>
            <p>Adalah sebuah kawasan konservasi yang terletak di Lombok, Nusa Tenggara Barat. 
                Didirikan pada tahun 1997, taman nasional ini membentang seluas 41.330 hektar dan 
                menjadi rumah bagi Gunung Rinjani, gunung berapi kedua tertinggi di Indonesia. 
                Ketinggian Gunung Rinjani adalah 3.726 meter di atas permukaan laut (mdpl). 
                Dan termasuk dalam 7 Summit Indonesia, yaitu tujuh gunung tertinggi di Indonesia.
            </p>
        </div>
    </div>
    
    <div class="content-container">
        <div class="left-content">
            <img src="image/visi.png" alt="Our Vision" class="icon">
            <h3>Our Vision</h3>
            <p>Menjadi Taman Nasional yang Terkelola Baik dan Tujuan Wisata Alam Berkelanjutan dan Bertanggung Jawab.
            </p>
        </div>
        <div class="middle-content">
            <img src="image/misi.png" alt="Our Mission" class="icon">
            <h3>Our Mission</h3>
            <p>Berdedikasi untuk melindungi dan melestarikan keanekaragaman hayati di kawasan taman nasional,
                serta memberikan pengalaman wisata yang aman dan berkesan bagi pengunjung.
            </p>
        </div>
        <div class="right-content">
            <img src="image/map.png" alt="Location" class="icon">
            <h3>Location</h3>
            <p>Desa Senaru, yang terletak di Kecamatan Bayan, Kabupaten Lombok Utara, di pulau Lombok, Indonesia,
                adalah sebuah lokasi yang menawarkan pengalaman wisata yang unik dan menarik.</p>
        </div>
    </div>
</body>
</html>