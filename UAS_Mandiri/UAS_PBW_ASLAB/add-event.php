<?php
include 'Database.php';
include 'Event.php';

$database = new Database();
$db = $database->getConnection();

$event = new Event($db);
$message = null;

if (isset($_POST['submit'])) {
    try {
        $event->name_event = $_POST['name_event'];
        $event->date = $_POST['date'];
        $event->location = $_POST['location'];
        $event->description = $_POST['description'];

        if ($event->create()) {
            header("Location: daftar.php");
            exit();
        } else {
            $message = "Failed to add event.";
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
    <title>Add Event</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar bg-body-tertiary mb-5 shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#" style="font-size : 1.1em;">
                <strong class="mt-5">BeMyEvent <i class="bi bi-calendar-heart"></i></strong>
            </a>
            <ul class="nav nav-pills">
                <a class="navbar-brand text-info-emphasis" href="#" style="font-size : 1em;"> May Your Event All-Right <i class="bi bi-arrow-bar-right"></i></a>
                <li class="nav-item">
                    <a class="nav-link active bg-secondary" aria-current="page" href="daftar.php">List</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- AKHIR NAVBAR -->
    <br><br>
    <div class="container mt-4 pt-4">
        <!-- Figure Judul -->
        <div class="ms-2">
            <h1 class="text-info-emphasis">List Event</h1>
            <p class=""><em>Plan Your Event, here!</em></p>
        </div>
        <!-- Tampil Pesan Eror -->
        <?php if ($message) { ?>
            <div class="alert alert-danger d-inline-block" role="alert">
                <?= $message ?>
            </div>
        <?php } ?>
        <!-- Form Inputan -->
        <div class="container mt-4 d-flex">
            <form action="add-event.php" method="post">
                <div class="mb-4 row">
                    <label for="name_event" class="form-label">Name's Event</label>
                    <div class="col-15">
                        <input type="text" name="name_event" class="form-control shadow-sm p-2 bg-light rounded" id="name_event" placeholder="Enter Event">
                    </div>
                </div>
                <div class="mb-4 row">
                    <label for="date" class="form-label">Date</label>
                    <div class="col-12">
                        <input type="date" name="date" class="form-control shadow-sm p-2 bg-light rounded" id="date">
                    </div>
                </div>
                <div class="mb-4 row">
                    <label for="location" class="form-label">Location</label>
                    <div class="col-12">
                        <input type="text" name="location" class="form-control shadow-sm p-2 bg-light rounded" id="location">
                    </div>
                </div>
                <div class="mb-4 row">
                    <label for="description" class="form-label">Description</label>
                    <div class="col-12">
                        <textarea type="text" name="description" class="form-control shadow-sm p-2 bg-light rounded" id="description"></textarea>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-outline-success">
                    <i class="bi bi-save"></i> Send</button>
                    <!-- Tombol Batal Tambah -->
                    <a type="button" href="daftar.php" class="btn btn-primary-outline active"  >
                    <i class="bi bi-back"></i> Batal</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</body>
</html>
