<?php 
    $name = "Mahasiswa";
    $value = "Ali RIdho.M";

    setcookie($name, $value, time()+600);
    setcookie("Kelas","MI-1F", time()+3600);
?>
<html>
    <body>
        <?php
        echo "Cookies telah diubah"; 
        ?>
    </body>
</html>