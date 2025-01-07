<?php
require "config.php";
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM anime WHERE id = $id");
$anime = mysqli_fetch_assoc($result);

function upload()
{
    $name = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];
    $size = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    move_uploaded_file($tmp, "gambar/" . $name);

    return $name;
}

function ubah($data)
{
    global $mysqli;
    $id = $_POST['id'];
    $gambarlama = $_POST['gambarlama'];
    $nama = $_POST['nama'];
    $liris = $_POST['liris'];
    $rating = $_POST['rating'];
    $deskripsi = $_POST['deskripsi'];
    $studio = $_POST['studio'];
    $episode = $_POST['episode'];
    $genre = $_POST['genre'];
    $error = $_FILES['gambar']['error'];

    if ($error === 4) {
        // Jika tidak ada file gambar yang diupload, gunakan gambar lama
        $gambar = $gambarlama;
    } else {
        // Jika ada file gambar yang diupload, upload gambar baru
        $gambar = upload();
    }

    $query = "UPDATE anime SET
              nama_anime = '$nama',
              tahun_rilis = $liris,
              rating = '$rating',
              deskripsi = '$deskripsi',
              studio = '$studio',
              episode = '$episode',
              gambar = '$gambar',
              genre = '$genre'
              WHERE id = $id";
    mysqli_query($mysqli, $query);

    return mysqli_affected_rows($mysqli);
}

if (isset($_POST['submit'])) {
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diubah');
                window.location.href='anime.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data tidak berhasil diubah');
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Anime</title>
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
</head>

<body>
    
    <div class="container">
        <h1>Edit Anime</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <ul>
                <li>
                    <input type="hidden" name="id" value="<?= $anime['id']; ?>">
                </li>
                <li>
                    <input type="hidden" name="gambarlama" value="<?= $anime['gambar']; ?>">
                </li>
                <li>
                    <label for="nama">Nama Anime:</label>
                    <input type="text" id="nama" name="nama" value="<?= $anime['nama_anime']; ?>" required>
                </li>
                <li>
                    <label for="liris">Tahun Rilis:</label>
                    <input type="number" id="liris" name="liris" value="<?= $anime['tahun_rilis']; ?>" required>
                </li>
                <li>
                    <label for="rating">Rating:</label>
                    <input type="text" id="rating" name="rating" value="<?= $anime['rating']; ?>" required>
                </li>
                <li>
                    <label for="deskripsi">Deskripsi:</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4" required><?= $anime['deskripsi']; ?></textarea>
                </li>
                <li>
                    <label for="studio">Studio:</label>
                    <input type="text" id="studio" name="studio" value="<?= $anime['studio']; ?>" required>
                </li>
                <li>
                    <label for="episode">Episode:</label>
                    <input type="text" id="episode" name="episode" value="<?= $anime['episode']; ?>" required>
                </li>
                <li>
                    <label for="gambar">Gambar:</label>
                    <input type="file" id="gambar" name="gambar">
                </li>
                <li>
                    <label for="genre">Genre:</label>
                    <input type="text" id="genre" name="genre" value="<?= $anime['genre']; ?>" required>
                </li>
                <li>
                    <button type="submit" name="submit">Submit</button>
                </li>
            </ul>
        </form>
    </div>
</body>

</html>
