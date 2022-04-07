<?php
    $id_pembeli = $_POST["id_pembeli"];
    $nm_pembeli = $_POST["nm_pembeli"];
    $status = $_POST["member"];
    $makanan = $_POST["makanan"];
    $porsi = $_POST["porsi"];

    if ($makanan == "rendang") {
        $harga = 30000;
    } elseif ($makanan == "ayam_crispy") {
        $harga = 20000;
    } elseif ($makanan == "terong_balado") {
        $harga = 10000;
    } elseif ($makanan == "tongkol_suwir") {
        $harga = 15000;
    } elseif ($makanan == "krecek") {
        $harga = 25000;
    }

    $total = $harga * $porsi;

    if ($status == "member") {
        if ($porsi == 1) {
            $potongan_harga = $harga * 0.05;
            $total_harga = $total - $potongan_harga;
        } elseif ($porsi > 1 && $porsi <= 3) {
            $potongan_harga = $harga * 0.07;
            $total_harga = $total - ($potongan_harga * $porsi);
        } elseif ($porsi > 3) {
            $potongan_harga = $harga * 0.1;
            $total_harga = $total - ($potongan_harga * $porsi);
        } 
    } elseif ($status == "non_member") {
        if ($porsi > 0 && $porsi <= 3) {
            $potongan_harga = 0;
            $total_harga = $total - $potongan_harga;
        } elseif ($porsi > 2 && $porsi <= 5) {
            $potongan_harga = $total * 0.05;
            $total_harga = $total - $potongan_harga;
        } elseif ($porsi > 5) {
            $potongan_harga = $harga * 0.05;
            $total_harga = $total - ($potongan_harga * $porsi);
        } 
    }

    //  echo $harga;
    // echo $nm_pembeli;
    // echo $status;
    // echo $makanan;
    // echo $porsi;
    // echo $total_harga;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Makan</title>
    <style>
        body {
            font-family: Arial;
            background: url(img/warteg.jpg);
            background-repeat:no-repeat;
            background-size: cover;
        }

        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: coral;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: coral;
        }

        div.container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 100px;
            padding-top: 10px;
            margin: 300px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Detail Pesanan</h3>
        <form>
            <label for="id_pembeli">ID Pembeli</label>
            <input type="text" id="id_pembeli" name="id_pembeli" placeholder="<?= $id_pembeli ?>" readonly>

            <label for="nm_pembeli">Nama Pembeli</label>
            <input type="text" id="nm_pembeli" name="nm_pembeli" placeholder="<?= $nm_pembeli ?>" readonly>
            
            <label for="status">Status Pembeli</label>
            <input type="text" id="status" name="status" placeholder="<?= $status ?>" readonly>
            
            <label for="makanan">Makanan</label>
            <input type="text" id="makanan" name="makanan" placeholder="<?= $makanan ?>" readonly>

            <label for="porsi">Jumlah porsi</label>
            <input type="text" id="porsi" name="porsi" placeholder="<?= $porsi ?>" readonly>

            <label for="pembayaran">Jumlah pembayaran</label>
            <input type="text" id="pembayaran" name="pembayaran" placeholder="<?= $total_harga ?>" readonly>
        </form>
        <a href="UTS.html">
            <input type="submit" value="Ok">
        </a>
        
    </div>
    
</body>

</html>