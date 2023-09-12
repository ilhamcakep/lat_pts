<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dex.css">
  
</head>
<body>
<?php

include 'config.php';

$query = "SELECT * FROM tb_buku";
$perpus = mysqli_query($conn, $query);

$i = 1;

?>

<div class="container">
    <div class="table">
        <div style="text-align"><h1>Data Perpustakaan</h1></div>
        <br>
        <br>
        <table border=1 cellspacing=0 cellspadding=10>
            <thead>
                <th>No</th>
                <th>judul_buku</th>
                <th>pengarang_buku</th>
                <th>genre_buku</th>
                <th>aksi</th>
            </thead>
            <tbody>
                <?php foreach($perpus as $per) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $per['judul_buku']; ?></td>
                        <td><?= $per['pengarang_buku']; ?></td>
                        <td><?= $per['genre_buku']; ?></td>
                        <td>
                            <a href="delete.php?id='<?= $per['Id'] ?>'">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <?php mysqli_close($conn); ?>
        </table>
        <a href="create.php" class="td">tambah data</a>
    </div>
</div>
</body>
</html>