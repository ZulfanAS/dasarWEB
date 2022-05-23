<?php
    include "myconnection.php";

    $name = $_GET["myname"];
    $address = $_GET["myaddress"];

    $query = "INSERT INTO student(name, address)
            VALUE('$name', '$address')";

    if(mysqli_query($connect, $query)){
        echo "data baru berhasil ditambahkan";
    } else {
        echo "data baru gagal ditambahkan <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>