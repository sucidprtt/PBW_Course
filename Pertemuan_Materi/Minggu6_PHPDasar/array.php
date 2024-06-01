<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php 
       $books = array("PHP Programming For Beginners", "Web Design with HTML, CSS, Javascript and jQuery");
       $books[] = "PHP and MySQL for Dynamic Web Sites";
    // Pemanggilan Output ke dalam suatu halaman  menggunakan Echo
       echo "Book 1: " . $books[0] . "<br>";
       echo "Book 2: " . $books[1] . "<br>";
       echo "Book 3:  ". $books[2] . "<br>";
       
        // var_dump($books);
        // echo "<br>";
        // unset($books[2]);
        // var_dump($books);

        $novel = array(
            "title" => "A Walk to Remember",
            "author" => "Nicholas Sparks",
        );

        echo "Title " . $novel['title'] . "<br>";
    ?>
</body> 
</html>