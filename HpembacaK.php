<?php
require "config.php";

$id = $_GET['id']; // Mengambil ID dari URL

$komikResult = mysqli_query($mysqli, "SELECT * FROM wiki WHERE id = $id"); // Mengambil data komik berdasarkan ID
$komik = mysqli_fetch_assoc($komikResult);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Halaman Baru</title>
    <link rel="stylesheet" href="stylesH.css">
    <style>
        .dark-mode {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="header">
            <h1>WIKIWU</h1>
            <div class="buttons">
                <button id="mode-button" class="mode-button">Dark Mode</button>
                <button class="home-button" onclick="location.href='homewiki.php'">Home</button>
            </div>
        </header>
    </div>
    <div class="content">
        <div class="table-description">
            <table>
                <tr>
                    <td colspan="2"><?= $komik['nama_komik']; ?></td>
                </tr>
                <tr>
                    <td rowspan="1"><img src="gambar/<?= $komik['gambar']; ?>" alt="Gambar"></td>
                </tr>
                <tr>
                    <td><?= $komik['chapter']; ?></td>
                </tr>
                <tr>
                    <td colspan="1"><?= $komik['tahun_rilis']; ?></td>
                </tr>
                <tr>
                    <td colspan="1"><?= $komik['genre']; ?></td>
                </tr>
                <tr>
                    <td colspan="1"><?= $komik['studio']; ?></td>
                </tr>
                <tr>
                    <td colspan="1"><?= $komik['rating']; ?></td>
                </tr>
                <tr>
                    <td colspan="4"><?= $komik['deskripsi']; ?></td>
                </tr>
            </table>
        </div>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            const modeButton = document.getElementById('mode-button');
            const body = document.body;

            modeButton.addEventListener('click', function() {
                body.classList.toggle('dark-mode');
                if (body.classList.contains('dark-mode')) {
                    modeButton.textContent = 'Light Mode';
                } else {
                    modeButton.textContent = 'Dark Mode';
                }
            });
        });
    </script>
</body>

</html>
