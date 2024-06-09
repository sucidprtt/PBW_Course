<?php
include 'Database.php';
include 'Event.php';

$database = new Database();
$db = $database->getConnection();

$event = new Event($db);
$message = null;

if (isset($_GET['id'])) {
    $event->id_event = $_GET['id'];
    $stmt = $event->readOne();
    $eventData = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$eventData) {
        header("Location: daftar.php");
        exit();
    }
} else {
    header("Location: daftar.php");
    exit();
}

if (isset($_POST['submit'])) {
    try {
        $event->id_event = $_POST['id_event'];
        $event->name_event = $_POST['name_event'];
        $event->date = $_POST['date'];
        $event->location = $_POST['location'];
        $event->description = $_POST['description'];

        if ($event->update()) {
            header("Location: daftar.php");
            exit();
        } else {
            $message = "Failed to update event.";
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
    <title>Edit Event</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
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
            <h1 class="text-info-emphasis">Edit Event</h1>
            <p class=""><em>What are u doing, babe!</em></p>
        </div>
        <!-- Tampil Pesan Eror -->
        <?php if ($message) { ?>
            <div class="alert alert-danger d-inline-block" role="alert">
                <?= $message ?>
            </div>
        <?php } ?>
        <div class="container mt-4 d-flex">
            <form action="edit-event.php?id=<?= $event->id_event ?>" method="post">
                <!-- Form Inputan -->
                <input type="hidden" name="id_event" value="<?= $eventData['id_event'] ?>">
                <div class="mb-4 row">
                    <label for="name_event" class="form-label">Name's Event</label>
                    <div class="col-12">
                    <input type="text" class="form-control shadow-sm p-2 bg-light rounded" name="name_event" value="<?= $eventData['name_event'] ?>" required>
                    </div>
                </div>
                <div class="mb-4 row">
                    <label for="date" class="form-label">Date</label>
                    <div class="col-12">
                    <input type="date" class="form-control shadow-sm p-2 bg-light rounded" name="date" value="<?= $eventData['date'] ?>" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="location" class="form-label">Location</label>
                    <div class="col-12">
                    <input type="text" class="form-control shadow-sm p-2 bg-light rounded" name="location" value="<?= $eventData['location'] ?>" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="description" class="form-label">Description</label>
                    <div class="col-12">
                    <textarea class="form-control shadow-sm p-2 bg-light rounded" name="description" required><?= $eventData['description'] ?></textarea>
                    </div>
                </div>
                <!-- Tombol Simpan Perubahan -->
                <button type="submit" name="submit" class="btn btn-outline-secondary active">
                    <i class="bi bi-save2"></i> Update Event</button>
                    <!-- Tombol Batal Edit -->
                    <a type="button" href="daftar.php" class="btn btn-danger active"  >
                    <i class="bi bi-backspace"></i> Back</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</body>
</html>
