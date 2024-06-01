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
            background-image: url('myteam/teaam.jpg');
            background-size: auto;
            background-repeat: no-repeat;
            background-position: center center;
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
        .team-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 60px;
            justify-items: right;
            padding: 80px 650px;
        }
        .team-member {
            background-color: #ffffff;
            border: 4px solid #6ba544;
            border-radius: 10px;
            padding: 10px;
            text-align: center;
            width: 200px; 
            box-sizing: border-box;
        }
        .team-member img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
        }
        .team-member h1 {
            margin: 0;
            font-size: 1.2em;
        }
        .team-member p {
            margin: 5px 0;
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

    <div class="team-container">
        <div class="team-member">
            <img src="myteam/fergi.jpg" alt="Fergi Ar Farid Afif">
            <h1 class="name">Fergi Ar Farid Afif</h1>
            <p class="role">membuat fitur “gallery”</p>
        </div>
        <div class="team-member">
            <img src="myteam/mutiii.jpg" alt="Mutia Ayu Fazriani">
            <h1 class="name">Mutia Ayu Fazriani</h1>
            <p class="role">membuat fitur "about"</p>
        </div>
        <div class="team-member">
            <img src="myteam/rasyiid.jpg" alt="Rasyid Iskandar P.">
            <h1 class="name">Rasyid Iskandar P.</h1>
            <p class="role">membuat fitur "team"</p>
        </div>
        <div class="team-member">
            <img src="myteam/adjie.jpg" alt="Adjie Arrayan S.">
            <h1 class="name">Adjie Arrayan S.</h1>
            <p class="role">membuat fitur "faq"</p>
        </div>
        <div class="team-member">
            <img src="https://placehold.co/120x120" alt="Nama Baru">
            <h1 class="name">Nama Baru</h1>
            <p class="role">Web Developer</p>
        </div>
        <div class="team-member">
            <img src="myteam/ciciy.jpg" alt="Suci Dwi Pratiwi">
            <h1 class="name">Suci Dwi Pratiwi</h1>
            <p class="role">membuat fitur "regist"</p>
        </div>
    </div>
</body>
</html>
