<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include 'Database.php';
include 'Event.php';

$database = new Database();
$db = $database->getConnection();

$event = new Event($db);
$message = null;

// Handle delete action
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['delete'])) {
    $event->id_event = $_GET['delete'];

    if ($event->delete()) {
        // Renumber the IDs after a successful delete
        $event->renumber();
        $message = "Event deleted successfully.";
    } else {
        $message = "Failed to delete event.";
    }
}

$stmt = $event->read();
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Event</title>
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
      <!-- TAB PILIHAN -->
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link text-info-emphasis" href="#">List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active bg-danger" aria-current="page" href="logout.php">Log out</a>
            </li>
        </ul>
      <!-- AKHIR TAB PILIHAN -->
    </div>
  </nav>
  <!-- AKHIR NAVBAR -->
   <br><br><br>
    <div class="container pt-4">
        <h4 class="text-info-emphasis mb-3 bg-body-secondary" style="text-align:center">Welcome Home, <?= $username ?> <i class="bi bi-apple"> </i></h4>
        <figure class="text-dark">
            <blockquote class="blockquote">
                <h1 class="text-info-emphasis mt-5">List Event</h1>
            </blockquote>
            <figcaption class="blockquote-footer text-dark">Create By
                <cite title="data">Suci Dwi Pratiwi</cite>
            </figcaption>
        </figure>
        <a href="add-event.php" class="btn bg-success border-0 text-white active mb-4" role="button" aria-pressed="true">
        <i class="bi bi-plus-square"> </i> Add New Event</a>
        <div class="" style="text-align:center">
        <table class="table table-hover mb-4 table-striped">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name's Event</th>
                    <th scope="col">Date</th>
                    <th scope="col">Location</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { extract($row);?>
                    <tr>
                        <td><?= $row['id_event'] ?></td>
                        <td><?= $row['name_event'] ?></td>
                        <td><?= (new DateTime($row['date']))->format('d F Y') ?></td>
                        <td><?= $row['location'] ?></td>
                        <td><?= $row['description'] ?></td>
                        <td>
                            <a type="button" class="btn btn-warning" href="edit-event.php?id=<?= $row['id_event'] ?>">
                                <i class="bi bi-pencil-square"></i></a>
                            <a href="daftar.php?delete=<?= $row['id_event'] ?>" class="btn btn-danger" onClick="return confirm('are u sure to delete this data?')">
                            <i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
        <br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
