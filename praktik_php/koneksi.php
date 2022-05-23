<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";

    $connect = mysqli_connect($hostname, $username, $password);

    if($connect){
        echo "koneksi ke mysql berhasil";
    } else{
        echo "koneksi ke mysql gagal";
    }
    ?>