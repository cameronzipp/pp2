<?php
//Cameron Zipp - 1/11/2022
//index.php - Pair Program 2

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);
include ('functions.php');
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 2</title>
</head>
<body>
    <h2>Pair Program 2</h2>

    <?php
    echo "<h2>PHP Array Practice</h2>";

    $numbers = array(7, 9, 8, 9, 8, 8, 6);

    echo "<p>Print Array Numbers</p>";
    printArr($numbers);
    echo "<p>Print largest number</p>";
    largest($numbers);

    ?>

</body>
</html>