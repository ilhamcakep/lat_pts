<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
    <link rel="stylesheet" href="ccsu.css">
</head>
<body>
    <?php

    include 'config.php';

    

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $judul_buku= $_POST['judul_buku'];
        $pengarang_buku= $_POST['pengarang_buku'];
        $genre_buku= $_POST['genre_buku'];
      
        var_dump($judul_buku);

        $query = "INSERT INTO tb_buku (judul_buku,pengarang_buku,genre_buku) VALUES ('$judul_buku', '$pengarang_buku', '$genre_buku')";

        if(mysqli_query($conn, $query)) {
            echo "<p>success add data!</p>";
        } else {
            echo "<p>failed add data!</p>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }

    ?>

    <div class="container">
        <div style="text-align"><h1>Tambah Data</h1></div>
        <div class="form">
            <form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">
                <label for="judul_buku">judul_buku</label>
                <input type="text" name="judul_buku" id="judul_buku">
                <label for="pengarang_buku">pengarang_buku</label>
                <input type="text" name="pengarang_buku" id="pengarang_buku">
                <label for="genre_buku">genre_buku</label>
                <select name="genre_buku">
                    <option value="Buku Sastra">Buku Sastra</option>
                    <option value="Buku Sejarah">Buku Sejarah</option>
                    <option value="Buku Romance">Buku Romance</option>
                    <option value="Buku Sci-Fi">Buku Sci-Fi</option>
                </select>
                <button type="submit">Simpan</button>
            </form>
        </div>
        <a href="index.php">kembali ke home</a>
    </div>
</body>
</html>