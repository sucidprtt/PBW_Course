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
            height: 60px;
            margin-right: 10px;
        }
        .header .left .title {
            display: flex;
            flex-direction: column;
        }
        .header .left .title h1 {
            margin: 0;
            font-size: 0.8em;
        }
        .header .left .title p {
            margin: 0;
            font-size: 20px;
        }
        .header .right img {
            height: 60px;
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
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 10px;
            padding: 20px;
        }
        .gallery-title {
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: 500;
            font-style: normal;
            padding: 5px;
            padding-top: 10px;
            letter-spacing: 0.5em;
            margin-top: 5px;
            margin-bottom: -10px;
        }
        .gallery img {
            width: 100%;
            height: 100%;
            object-fit: fill;
            border-radius: 15px;
        }
        .gallery .large {
            grid-column: span 2;
            grid-row: span 2;
            position: relative;
        }
        .gallery div .text {
        position: absolute;
        font-family: 'Open Sans', sans-serif;
        bottom: 10px;
        left: 10px;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        padding: 7px;
        border-radius: 10px;
        font-size: 15px; /* Ubah ukuran teks sesuai kebutuhan */
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
    <div class="gallery-title mt-2">
        <b>G&nbsp;&nbsp;A&nbsp;&nbsp;L&nbsp;&nbsp;L&nbsp;&nbsp;E&nbsp;&nbsp;R&nbsp;&nbsp;Y</b>
    </div>
    <div class="gallery">
        <div class="large">
            <img src="Gallery/main-pic.webp" alt="The Best Portrait On Rinjani">
            <div class="text">THE BEST PORTRAIT ON RINJANI</div>
        </div>
        <img src="gallery/1.jpg" alt="Waterfall">
        <img src="gallery/2.jpg" alt="Hiker on Road">
        <img src="gallery/3.jpg" alt="Sunset Hike">
        <img src="gallery/4.jpg" alt="Mountain Peak">
        <img src="gallery/5.jpg" alt="Valley">
        <img src="gallery/6.jpg" alt="Hikers">
        <img src="gallery/7.jpg" alt="Hikers">
        <img src="gallery/8.jpg" alt="Hikers">
        <img src="gallery/9.jpg" alt="Waterfall">
        <img src="gallery/10.jpg" alt="Hiker on Road">
    </div>
</body>
</html>
