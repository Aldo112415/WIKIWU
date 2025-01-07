<?php
require "config.php";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $liris = $_POST['liris'];
    $rating = $_POST['rating'];
    $deskripsi = $_POST['deskripsi'];
    $studio = $_POST['studio'];
    $episode = $_POST['episode'];
    $genre = $_POST['genre'];
    
    // Proses upload gambar
    $gambar = $_FILES['gambar']['name'];
    $tmpGambar = $_FILES['gambar']['tmp_name'];
    $folderGambar = "gambar/";
    
    // Pindahkan gambar ke folder yang ditentukan
    move_uploaded_file($tmpGambar, $folderGambar . $gambar);
    
    // Insert data ke database
    $query = "INSERT INTO anime (nama_anime, tahun_rilis, rating, deskripsi, studio, episode, gambar, genre) VALUES ('$nama', '$liris', '$rating', '$deskripsi', '$studio', '$episode', '$gambar', '$genre')";
    mysqli_query($mysqli, $query);
    
    // Redirect ke halaman lain jika berhasil ditambahkan
    header("Location: anime.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Anime</title>
    <style>
        * {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
        }

        .container {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form ul {
            padding: 0;
        }

        form li {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        form label {
            width: 120px;
            font-weight: bold;
        }

        form input,
        form textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        form button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
    </style>
</head>

<body>
    <div class="container">
        <h1>Form Tambah Anime</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <ul>
                <li>
                    <label for="nama">Nama anime:</label>
                    <input type="text" id="nama" name="nama" required>
                </li>
                <li>
                    <label for="liris">Tahun Liris:</label>
                    <input type="number" id="liris" name="liris" required>
                </li>
                <li>
                    <label for="rating">Rating:</label>
                    <input type="text" id="rating" name="rating" required>
                </li>
                <li>
                    <label for="deskripsi">Deskripsi:</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4" required></textarea>
                </li>
                <li>
                    <label for="studio">Studio:</label>
                    <input type="text" id="studio" name="studio" required>
                </li>
                <li>
                    <label for="episode">Episode:</label>
                    <input type="text" id="episode" name="episode" required>
                </li>
                <li>
                    <label for="gambar">Gambar:</label>
                    <input type="file" id="gambar" name="gambar" required>
                </li>
                <li>
                    <label for="genre">Genre:</label>
                    <input type="text" id="genre" name="genre" required>
                </li>
                <li>
                    <button type="submit" name="submit">Submit</button>
                </li>
            </ul>
        </form>
    </div>
</body>

</html>
