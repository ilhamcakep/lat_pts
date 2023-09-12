<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

include 'config.php';

$id = $_GET['id'];

$query = "DELETE FROM tb_buku WHERE id=$id";

if(mysqli_query($conn, $query)) {
    echo "<p>Data success deleted!</p>";
} else {
    echo "<p>Data failed deleted!</p>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<a href="index.php">Kembali</a>
</body>
</html>
