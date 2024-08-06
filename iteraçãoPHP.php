<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" >
    <title>Iteração PHP</title>
</head>

    <body>
        <h1>PHP</h1>
        <?php
        $array = array(1, 2, 3, 4, 5,10,11,12,13,14,15,16,17,18);
        $sum = 0;
        for($i = 0; $i < $array; $i++) {
            $sum += $array[$i];

        }
        echo "<p>Soma dos elementos do array: </p>". $sum;

        foreach ($array as $numbers) {
            echo "<p>$numbers.mais 1</p>";
            echo "<marquee>$numbers +1 . ''</marquee>";

        }
        ?>
    </body
</html>