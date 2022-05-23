<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "web_db";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    if($connect){
        echo "koneksi ke mysql berhasil <br>";
    } else {
        echo "koneksi ke mysql gagal". mysqli_connect_error();
    }

    $query = "INSERT into student(name, address)
    VALUES ('Kevin', 'Malang'),
    ('Stephanie', 'Surabaya'),
    ('Sammy', 'Jakarta')";

    if(mysqli_query($connect, $query)){
        echo "data baru berhasil ditambahkan";
    } else {
        echo "data baru gagal ditambahkan <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
    ?>