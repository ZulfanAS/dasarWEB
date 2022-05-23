<!DOCTYPE HTML>
<html>
    <head>
        <title>HOME</title>
        <link rel="stylesheet" type="text/css" href="setail.css"/>
    </head>
    <body>
        <h1>DATA MAHASISWA</h1>
        <a href="insertForm.html"><button>TAMBAH DATA</button></a>
        <table>
            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>Aksi</th>
            </tr>
            <?php
                include "myconnection.php";
                $query = "SELECT * FROM student";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["name"];?></td>
                            <td><?php echo $row["address"];?></td>
                            <td>
                                <a href="editForm.php?id=<?php echo $row["id"];?> ">
                                <button>edit</button></a>
                                <a href="delete.php?id=<?php echo $row["id"];?> ">
                                <button>hapus</button></a>
                            </td>
                        </tr>
                        <?php
                    }
                }else {
                    echo "0 results";
                }
                ?>
        </table>
    </body>
</html>