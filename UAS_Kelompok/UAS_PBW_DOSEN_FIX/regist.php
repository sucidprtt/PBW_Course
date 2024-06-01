<?php 
    // Menambahkan Koneksi ke DataBase
    include 'koneksi.php'; 

    // Deklarasi Variabel 
    $inputId = '';
    $inputEmail = '';
    $inputName = '';
    $inputPhone = '';
    $inputType = '';
    $inputQty = '';
    $inputMessage = '';
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
                    <h1><b>Official Website For</b></h1>
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
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="content">
                        <h1 class="text-info-emphasis mt-5"><b>Form Regist</b></h1>
                        <p><em>Isi Data dengan Baik dan Benar!</em></p>
                        <form action="load-regist.php" method="POST">
                            <div class="mb-4 mt-5">
                                <label for="inputId" class="col-form-label">ID</label>
                                <input value="<?php echo $inputId?>" type="text" class="form-control shadow-sm bg-body-secondary rounded" id="inputId" name="inputId" placeholder="ID tidak perlu diisi, akan ditentukan secara otomatis" <?php if ($inputId == '') {echo "disabled";}; ?> >
                            </div>
                            <div class="mb-4">
                                <label for="inputEmail" class="form-label">Email address</label>
                                <input required value="<?php echo $inputEmail?>" type="email" class="form-control shadow-sm p-2 bg-light rounded" name="inputEmail" id="inputEmail" placeholder="name@example.com" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-4">
                                <label for="inputName" class="form-label">Name</label>
                                <input required value="<?php echo $inputName?>" type="text" name="inputName" class="form-control shadow-sm p-2 bg-light rounded" 
                                id="inputName" placeholder="Enter Your Name">
                            </div>
                            <div class="mb-4">
                                <label for="inputPhone" class="form-label">Phone Number</label>
                                <input required value="<?php echo $inputPhone?>" type="text" name="inputPhone" class="form-control shadow-sm p-2 bg-light rounded" 
                                id="inputPhone" placeholder="">
                            </div>
                            <div class="mb-4">
                                <label for="inputType" class="form-label">Type</label>
                                <select required value="<?php echo $inputType?>" name="inputType" id="inputType" class="form-select shadow-sm p-2 bg-light rounded" placeholder="Choose Ticket Type">
                                    <option selected>Chose Ticket Type</option>
                                    <option value="1">Epic</option>
                                    <option value="2">Legend</option>
                                    <option value="3">Mythic</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="inputQty" class="form-label">Quantity</label>
                                <input required value="<?php echo $inputQty?>" type="number" name="inputQty" class="form-control shadow-sm p-2 bg-light rounded" 
                                id="inputQty">
                                <div id="emailHelp" class="form-text">Write how many climbers</div>
                            </div>
                            <div class="mb-4">
                                <label for="inputMessage" class="form-label">Message</label>
                                <textarea required value="<?php echo $inputMessage?>" name="inputMessage" id="inputMesage" rows="3" class="form-control shadow-sm p-2 bg-light rounded"></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-outline-success">
                                <i class="bi bi-save"></i> Send</button>
                        </form>
                    </div>
                    <br><br>
                </div>
                <div class="col-md-6">
                    <div class="image">
                        <img src="image/regist_foto.jpeg" alt="Regist Logo">
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
