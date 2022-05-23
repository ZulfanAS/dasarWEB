<?php
    $user = $_POST["username"];
    $pass = $_POST["password"];

    if($user=="admin" && $pass=="1234"){
        session_start();
        $_SESSION["username"] = $user;
        $_SESSION["role"] = "ADMINISTRATOR";
        header("Location:homeSession.php");
    }
    else{
        echo "USERNAME ATAU PASSWORD SALAH <br>";
        echo '<a href="loginForm.html">KEMBALI KE HALAMAN LOGIN</a>';
    }
?>