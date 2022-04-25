<?php 
    $name = "Mahasiswa";
    $value = "Zia Zidani";

    setcookie($name, $value, time()+600);
    setcookie("Kelas","MI-1F", time()+3600);
?>
<html>
    <body>
        <?php
        echo "Cookies telah dibuat"; 
        ?>
    </body>
</html>