<?php
require "config.php";
$result = mysqli_query($mysqli, "SELECT * FROM wiki");
$komik = [];
while ($kom = mysqli_fetch_assoc($result)) {
    $komik[] = $kom;
}
$i = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Daftar Komik</title>
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
        <h1>Daftar Komik</h1>
        <a href="homewiki.php">Home</a>
        <a href="tambah.php">Tambah Data</a>
        <table>
            <tr>
                <th>No</th>
                <th>Nama Komik</th>
                <th>Tahun Rilis</th>
                <th>Rating</th>
                <th>Deskripsi</th>
                <th>Studio</th>
                <th>Chapter</th>
                <th>Gambar</th>
                <th>Genre</th>
                <th>Action</th>
            </tr>
            <?php foreach ($komik as $k) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <?php $i++ ?>
                    <td><?= $k['nama_komik']; ?></td>
                    <td><?= $k['tahun_rilis']; ?></td>
                    <td><?= $k['rating']; ?></td>
                    <td><?= $k['deskripsi']; ?></td>
                    <td><?= $k['studio']; ?></td>
                    <td><?= $k['chapter']; ?></td>
                    <td><img src="gambar/<?= $k['gambar']; ?>" alt="Gambar Komik" width="50"></td>
                    <td><?= $k['genre']; ?></td>
                    <td>
                        <a href="hapus.php?id=<?= $k['id']; ?>">Hapus</a>
                        <a href="ubah.php?id=<?= $k['id']; ?>">Ubah</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>
