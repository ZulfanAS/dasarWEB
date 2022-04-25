<?php 
    session_start();
?>
<html>
    <body>
        <?php 
        $_SESSION ["makanfav"] = "Rujak";
        $_SESSION ["minumfav"] = "Es Teler";
        echo "Session telah diset";

        ?>
    </body>
</html>