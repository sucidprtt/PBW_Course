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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
        .search-container {
            text-align: center;
            margin: 20px 0;
        }
        .search-container input[type=text] {
            padding: 10px;
            width: 80%;
            font-size: 16px;
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
        .content {
            padding: 20px;
            text-align: center;
        }
        .accordion {
            background-color: white;
            color: black;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            text-align: left;
            border: 1px solid #ccc;
            outline: none;
            transition: 0.4s;
            font-size: 18px;
            margin-bottom: 5px;
            position: relative;
        }
        .accordion .icon {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 18px;
        }
        .panel {
            padding: 0 18px;
            background-color: white;
            display: none;
            overflow: hidden;
            border: 1px solid #ccc;
            border-top: none;
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
    
    <div class="hero" style="background-image: url('image/faq_bg.jpg'); background-size: cover; background-position: top 86% center">
    
    </div>

    <div class="content">
        <button class="accordion">KUOTA PENDAKIAN <span class="icon"><i class="fas fa-plus"></i></span></button>
        <div class="panel">
            <p>Kuota pendakian diterapkan oleh pemerintah setempat untuk menjaga kelestarian alam dan keamanan pendaki.
                Kuota ini bisa berubah dari waktu ke waktu tergantung pada kebijakan pemerintah dan kondisi gunung.</p>
        </div>

        <button class="accordion">PENDAFTARAN PENDAKIAN <span class="icon"><i class="fas fa-plus"></i></span></button>
        <div class="panel">
            <p>Pendaki diharuskan mendaftar dan mendapatkan izin dari pihak yang berwenang sebelum melakukan pendakian.
                Biasanya, pendaftaran dilakukan melalui kantor pos pendakian atau melalui sistem pendaftaran online yang disediakan oleh pengelola Taman Nasional Gunung Rinjani.</p>
        </div>

        <button class="accordion">PERATURAN PENDAKIAN <span class="icon"><i class="fas fa-plus"></i></span></button>
        <div class="panel">
            <p>Pendaki diharuskan untuk mematuhi peraturan yang berlaku di Taman Nasional Gunung Rinjani.
                Ini termasuk aturan tentang pengelolaan sampah, larangan membakar api kecuali di tempat yang disediakan,
                dan larangan merusak atau mengambil flora dan fauna di kawasan taman nasional.</p>
        </div>

        <button class="accordion">PERSIAPAN PENDAKIAN <span class="icon"><i class="fas fa-plus"></i></span></button>
        <div class="panel">
            <p>Pendakian Gunung Rinjani via jalur Senaru membutuhkan persiapan yang matang.
                Pendaki disarankan untuk membawa peralatan pendakian yang memadai, termasuk perlengkapan tidur, pakaian hangat,
                peralatan masak, makanan dan minuman cukup, serta perlengkapan keamanan seperti headlamp, kompas, dan peta.</p>
        </div>

        <button class="accordion">PENGINAPAN & POST PEMANTAUAN <span class="icon"><i class="fas fa-plus"></i></span></button>
        <div class="panel">
            <p>Selama pendakian, terdapat beberapa pos pemantauan dan penginapan yang disediakan oleh pihak pengelola.
                Pendaki bisa menggunakan fasilitas ini untuk beristirahat dan mengisi kebutuhan logistik.</p>
        </div>

        <button class="accordion">KONDISI CUACA <span class="icon"><i class="fas fa-plus"></i></span></button>
        <div class="panel">
            <p>Cuaca di Gunung Rinjani bisa berubah secara tiba-tiba, terutama di daerah ketinggian.
                Pendaki disarankan untuk memantau perkiraan cuaca dan mengambil langkah-langkah keamanan yang sesuai.</p>
        </div>
    </div>

    <script>
        var acc = document.getElementsByClassName("accordion");
        for (var i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                var icon = this.querySelector(".icon i");
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                    icon.classList.remove("fa-minus");
                    icon.classList.add("fa-plus");
                } else {
                    panel.style.display = "block";
                    icon.classList.remove("fa-plus");
                    icon.classList.add("fa-minus");
                }
            });
        }
    </script>
</body>
</html>
