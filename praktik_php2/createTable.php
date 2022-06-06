<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "web_db";

    $connect = mysqli_connect($hostname , $username , $password ,$database);

    if($connect){
        echo " Koneksi ke MySQL berhasil <br>";
    }else{
        echo "Koneksi ke MySQL gagal". mysqli_connect_error();
    }

    $query = "CREATE TABLE user (
                id INT PRIMARY KEY AUTO_INCREMENT,
                username VARCHAR(20) NOT NULL,
                password VARCHAR(30) NOT NULL)";

    if(mysqli_query($connect , $query)){
        echo "Tabel user berhasil diuat";
    }else{
        echo "Tabel user gagal dibuat <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>