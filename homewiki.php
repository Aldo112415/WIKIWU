<?php
require "config.php";

$komikResult = mysqli_query($mysqli, "SELECT * FROM wiki ORDER BY RAND() LIMIT 2");
$komik = [];
while ($kom = mysqli_fetch_assoc($komikResult)) {
    $komik[] = $kom;
}

$animeResult = mysqli_query($mysqli, "SELECT * FROM anime ORDER BY RAND() LIMIT 2");
$anime = [];
while ($anm = mysqli_fetch_assoc($animeResult)) {
    $anime[] = $anm;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Contoh Tampilan HTML</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .komik-button,
        .anime-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            text-decoration: none;
            margin-right: 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .komik-button:hover,
        .anime-button:hover {
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="header">
            <h1>WIKIWU</h1>
            <div class="buttons">
                <a href="komik.php" class="komik-button">Komik</a>
                <a href="anime.php" class="anime-button">Anime</a>
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
    <div class="table-container">
        <h3>Komik</h3>
        <br>
        <?php foreach ($komik as $k) : ?>
            <table>
                <tr>
                    <th colspan="4"><?= $k['nama_komik']; ?></th>
                </tr>
                <tr>
                    <td rowspan="2"><img src="gambar/<?= $k['gambar']; ?>" alt="Gambar"></td>
                    <th><?= $k['studio']; ?></th>
                    <th><?= $k['chapter']; ?></th>
                    <th><?= $k['rating']; ?></th>
                </tr>
                <tr>
                    <td colspan=""><a href="HpembacaK.php?id=<?= $k['id']; ?>">deskripsi.</a></td>
                    <td colspan="1"><?= $k['tahun_rilis']; ?></td>
                    <td><?= $k['genre']; ?></td>
                </tr>
            </table>
        <?php endforeach; ?>

    </div>
    <div class="table-container">
        <h3>Anime</h3>
        <?php foreach ($anime as $a) : ?>
            <table>
                <tr>
                    <th colspan="4"><?= $a['nama_anime']; ?></th>
                </tr>
                <tr>
                    <td rowspan="2"><img src="gambar/<?= $a['gambar']; ?>" alt="Gambar"></td>
                    <th><?= $a['studio']; ?></th>
                    <th><?= $a['episode']; ?></th>
                    <th><?= $a['rating']; ?></th>
                </tr>
                <tr>
                    <td colspan=""><a href="HpembacaA.php?id=<?= $a['id']; ?>">deskripsi.</a></td>
                    <td colspan="1"><?= $a['tahun_rilis']; ?></td>
                    <td colspan="1"><?= $a['genre']; ?></td>
                </tr>
            </table>
        <?php endforeach; ?>
    </div>
    <div class="comment-box">
        <h3>Comments</h3>
        <form>
            <textarea name="comment" placeholder="Write your comment here"></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
    <div class="about-me">
        <h3>Tentang Web ini</h3>
        <p>Saya membuat web ini terinspirasi dari web page WIKIPEDIA jadi saya ingin membuat wikipedia untuk hobisa saya saja </p>
        <p>Kontak saya jika ada masalah atau ingin bertanya lebih lanjut di (WA: 083180488657)(Email: aprialdo112415apri@gmai.com)</p>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            const modeButton = document.getElementById('mode-button');

            modeButton.addEventListener('click', function() {
                document.body.classList.toggle('dark-mode');
                if (document.body.classList.contains('dark-mode')) {
                    modeButton.textContent = 'Light Mode';
                } else {
                    modeButton.textContent = 'Dark Mode';
                }
            });
        });
    </script>
</body>

</html>
