<?php
require "config.php";

$id = $_GET['id']; // Mengambil ID dari URL

$animeResult = mysqli_query($mysqli, "SELECT * FROM anime WHERE id = $id"); // Mengambil data anime berdasarkan ID

?>
<!DOCTYPE html>
<html>

<head>
    <title>Halaman Baru</title>
    <link rel="stylesheet" href="stylesH.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
                <button id="mode-button" class="mode-button">Light Mode</button>
                <a href="homewiki.php" class="home-button"><i class="fas fa-home"></i></a>
                <div class="register-button">
                    <a href="register.php"><i class="fas fa-user-plus"></i></a>
                    <div class="login-button">
                    <a href="login.php"><i class="fas fa-user"></i></a>
</div>
                </div>
            </div>
        </header>
    </div>
    <div class="content">
        <div class="table-description">
            <?php
            while ($a = mysqli_fetch_assoc($animeResult)) {
            ?>
            <table>
                <tr>
                    <td colspan="2"><?= $a['nama_anime']; ?></td>
                </tr>
                <tr>
                    <td rowspan="1"><img src="gambar/<?= $a['gambar']; ?>" alt="Gambar"></td>
                </tr>
                <tr>
                    <td colspan="1"><?= $a['episode']; ?></td>
                </tr>
                <tr>
                    <td colspan="1"><?= $a['tahun_rilis']; ?></td>
                </tr>
                <tr>
                    <td><?= $a['genre']; ?></td>
                </tr>
                <tr>
                    <td><?= $a['studio']; ?></td>
                </tr>
                <tr>
                    <td><?= $a['rating']; ?></td>
                </tr>
                <tr>
                <td colspan="2"><?= $a['deskripsi']; ?></td>

                </tr>
            </table>
            <?php }?>   
        </div>
    </div>


    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            const modeButton = document.getElementById('mode-button');
            const body = document.body;

            modeButton.addEventListener('click', function () {
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