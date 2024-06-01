<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan</title>
</head>
<body>
    <?php 
        // Perulangan For
        for ($i = 0; $i < 5; $i++)  {
        echo "Nomor: " . $i . "<br>";
        }

        // Perulangan While
        $i = 0;
        echo "<br>" . "Perulangan While" . "<br>";
        while ($i < 5) {
            echo "Nomor: ". $i ."<br>";
            $i++; 
        }

        // Perulangan Do While
        echo "<br>" . "Perulangan Do While" . "<br>";
        $j = 9;
        do {
            echo "$j <br>";
        } while ($j < 9);

        // Perulangan Foreach
        echo "<br>" . "Perulangan Foreach" . "<br>";
        $colors = array("red", "green", "blue", "yellow");
        foreach ($colors as $value) {
            echo "$value <br>";
        }

    ?>  
</body>
</html>