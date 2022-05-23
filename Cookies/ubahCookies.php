<?php 
    $name = "Mahasiswa";
    $value = "Zulfan Akmal S";

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