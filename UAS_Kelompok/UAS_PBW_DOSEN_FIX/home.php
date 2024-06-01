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
        .social-media {
            position: fixed;
            bottom: 20px; /* Atur posisi dari bawah halaman */
            right: 20px; /* Atur posisi dari kanan halaman */
            z-index: 1000; /* Pastikan ikon tetap di atas elemen lainnya */
            display: flex;
            flex-direction: column; /* Menyusun ikon secara vertikal */
            align-items: center;
            background-color: rgba(255, 255, 255, 0.7); /* Latar belakang semi-transparan */
            padding: 10px;
            border-radius: 10px;
        }
        .social-media a {
            margin: 5px 0; /* Spasi antara ikon */
            transition: transform 0.3s ease; /* Animasi hover */
        }
        .social-media a:hover {
            transform: scale(1.1); /* Memperbesar ikon saat di-hover */
        }
        .social-media img {
            max-height: 30px;
        }
        .hero-text h1 {
            font-size: 3.5em;
            margin-top: 70px;
            margin: 0;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
        }
        .hero-text p {
            font-size: 1.5em;
            margin-top: 10px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
        }
        .hero-text a {
            margin-top: 145px;
        }
        .cta-button {
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            margin-top: 10px;
            display: inline-block;
            font-size: 1.2em;
            transition: background-color 0.3s ease, transform 0.3s ease; /* Tambahkan transisi untuk hover */
        }
        .cta-button:hover {
            background-color: #0056b3; /* Warna latar belakang saat di-hover */
            transform: scale(1.05); /* Efek zoom saat di-hover */
        }
        .more-info {
            display: none; /* Awalnya disembunyikan */
            padding: 20px;
            background-color: #f9f9f9;
            border-top: 1px solid #ddd;
            color: #333;
            font-size: 1.2em;
            line-height: 1.6;
        }
        .about-card {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .about-card h2 {
            color: #333333;
            font-size: 1.5em;
            margin-top: 0;
        }

        .about-content {
            color: #666666;
            font-size: 1em;
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

    <main>
    <section style="background-image: url('image/rinjani.jpg'); background-size: cover; background-position: top 1% center; height: 100vh; display: flex; justify-content: center; align-items: center; color: white; text-align: center;">
        <div class="hero-text">
            <h1>TAMAN NASIONAL GUNUNG RINJANI</h1>
            <p>Experience the Magic of Nature in Mount Rinjani National Park</p>
            <a href="#moreInfoContent" class="cta-button">MORE INFO</a>
        </div>
    </section>
    <section class="more-info" id="moreInfoContent">
        <div class="about-card">
            <h2>MORE INFO</h2>
            <div class="about-content">
                <p>Gunung Rinjani adalah salah satu gunung berapi tertinggi di Indonesia, terletak di Pulau Lombok, Nusa Tenggara Barat. Dengan ketinggian sekitar 3.726 meter di atas permukaan laut, Gunung Rinjani menawarkan pemandangan yang menakjubkan dan pengalaman mendaki yang menantang.</p>
                <p>Di puncak Rinjani, terdapat kaldera besar yang berisi danau kawah yang disebut Segara Anak. Danau ini memiliki kedalaman sekitar 200 meter dan luas sekitar 11 km². Di sekitar danau, terdapat beberapa sumber air panas yang sering digunakan pendaki untuk berendam dan relaksasi.</p>
                <p>Gunung Rinjani juga memiliki makna spiritual bagi masyarakat lokal, terutama Suku Sasak dan umat Hindu Bali yang sering melakukan upacara keagamaan di danau Segara Anak. Upacara ini biasanya dilakukan untuk menghormati roh-roh gunung dan meminta keselamatan serta kesejahteraan.</p>
                <p>Taman Nasional Gunung Rinjani, yang didirikan pada tahun 1997, melindungi keanekaragaman hayati yang kaya, termasuk berbagai spesies flora dan fauna endemik. Taman ini juga memiliki beberapa atraksi lain seperti air terjun Sendang Gile dan Tiu Kelep.</p>
            </div>
        </div>
    </section>
</main>
<footer>
    <div class="social-media">
        <a href="#"><img src="image/facebook.png" alt="Facebook"></a>
        <a href="https://www.instagram.com/visitmountrinjani?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img src="image/instagram.png" alt="Instagram"></a>
        <a href="#"><img src="image/twitter.png" alt="Twitter"></a>
        <a href="#"><img src="image/whatsapp.png" alt="WhatsApp"></a>
    </div>
</footer>

<script>
    document.querySelector('.cta-button').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah default link behavior
        var moreInfoContent = document.querySelector('.more-info');
        moreInfoContent.style.display = 'block'; // Menampilkan elemen
        window.scrollTo({
            top: moreInfoContent.offsetTop,
            behavior: 'smooth'
        });
    });
</script>
</body>
</html>