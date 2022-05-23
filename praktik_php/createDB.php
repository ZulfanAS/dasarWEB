<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";

    $connect = mysqli_connect($hostname, $username, $password);

    if($connect){
        echo "koneksi ke mysql berhasil <br>";
    } else {
        echo "koneksi ke mysql gagal". mysqli_connect_error();
    }

    $query = "create database web_db";
    if(mysqli_query($connect, $query)){
        echo "database berhasil dibuat";
    } else {
        echo "database gagal dibuat <br>". mysqli_error($connect);
    }
    mysqli_close($connect);
    ?>