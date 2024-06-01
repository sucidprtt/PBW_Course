<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php 
    // cara deklarasi function
    function writeMsg(){
        echo "Hello World!" . "<br>";
    }

    // cara memanggil function
    writeMSg();

    // function dengan parameter
    function show_name ($name){
        echo "Hello $name";
    }

    // cara memanggil function parameter
    show_name("Cici");

    // function dengan return value
    function add($x, $y){
        return $x + $y;
    }
    
    // cara mmanggil function return value
    echo "<br>" . add(5, 10);
    ?>
 
</body>
</html>