<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percabangan</title>
</head>
<body>
    <?php 
        $price = 90000;
        if ($price > 100000){
           echo "Harganya Mahal"; 
        } else if ($price > 50000){
            echo "Harganya Sedang";
        } else {
            echo "Harganya Murah";
        }

        echo "<br>";

        $rank = 10;

        switch ($rank) {
            case 1:
                echo "You got 1st rank";
                break;
            case 2:
                echo "You got 2nd rank";
                break;
            case 3:
                echo "You got 3rd rank";
                break;
            default:
                echo "you got the " . $rank . "th rank"; 
        }
    ?>    
</body> 
</html>