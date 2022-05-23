<?php
    session_start();
    ?>
<html>
    <head>
        <title>HOME PAGE</title>
    </head>
    <body>
        <?php
            if(isset($_SESSION["username"])){
                echo "Selamat Datang". $_SESSION["username"]. "<br>";
                echo "anda sebagai " . $_SESSION["role"] . "<br>";
                echo '<a href="sessionLogout.php">LOGOUT</a>';
            }
            else{
                echo "anda belum login <br>";
                echo '<a href="loginForm.html">LOGIN</a>';
            }
            ?>
    </body>
</html>