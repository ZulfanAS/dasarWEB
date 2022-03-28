<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php 
        $numbersString = "123456789012345678901234567890";
        $fivePos = strpos ($numbersString, "5");
        echo "Posisi angka 5 di dalam string adalah $fivePos";
        $fivePos2 = strpos ($numbersString, "5", $fivePos + 1);
        echo "<br> Posisi angka 5 yang kedua di dalam string adalah $fivePos2";
        ?>
    </body>
</html>