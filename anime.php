<?php
require "config.php";
$result = mysqli_query($mysqli, "SELECT * FROM anime");
$anime = [];
while ($a = mysqli_fetch_assoc($result)) {
    $anime[] = $a;
}
$i = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Daftar Anime</title>
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
            max-width: 800px;
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

        a {
            display: inline-block;
            padding: 8px 16px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
        }

        table img {
            max-width: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Daftar Anime</h1>
        <a href="homewiki.php">Home</a>
        <a href="tambahA.php">Tambah Data</a>
        <table>
            <tr>
                <th>No</th>
                <th>Nama Anime</th>
                <th>Tahun Liris</th>
                <th>Rating</th>
                <th>Dekripsi</th>
                <th>Studio</th>
                <th>Episode</th>
                <th>Gambar</th>
                <th>Genre</th>
                <th>Action</th>
            </tr>
            <?php foreach ($anime as $a) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <?php $i++ ?>
                    <td><?= $a['nama_anime']; ?></td>
                    <td><?= $a['tahun_rilis']; ?></td>
                    <td><?= $a['rating']; ?></td>
                    <td><?= $a['deskripsi']; ?></td>
                    <td><?= $a['studio']; ?></td>
                    <td><?= $a['episode']; ?></td>
                    <td><img src="gambar/<?= $a['gambar']; ?>" alt="Gambar Anime" width="50"></td>
                    <td><?= $a['genre']; ?></td>
                    <td>
                        <a href="hapusA.php?id=<?= $a['id']; ?>">Hapus</a>
                        <a href="ubahA.php?id=<?= $a['id']; ?>">Ubah</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>
