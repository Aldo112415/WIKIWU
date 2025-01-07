-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 10:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `komik`
--

-- --------------------------------------------------------

--
-- Table structure for table `anime`
--

CREATE TABLE `anime` (
  `id` int(15) NOT NULL,
  `nama_anime` varchar(100) NOT NULL,
  `tahun_rilis` varchar(100) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `deskripsi` mediumtext NOT NULL,
  `studio` varchar(100) NOT NULL,
  `episode` int(255) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anime`
--

INSERT INTO `anime` (`id`, `nama_anime`, `tahun_rilis`, `rating`, `deskripsi`, `studio`, `episode`, `gambar`, `genre`) VALUES
(1, 'Mashle', '2023', '7.59', 'Bagi semua orang di dunianya yang didominasi sihir, Mash Burnedead yang muda dan tak berdaya adalah ancaman bagi kumpulan gen dan harus disingkirkan. Hidup diam-diam di hutan, dia menghabiskan setiap hari melatih tubuhnya, membangun otot yang cukup kuat untuk bersaing dengan sihir itu sendiri! Namun, setelah identitasnya terungkap dan kehidupannya yang damai terancam, Mash memulai perjalanannya untuk menjadi “Visionaris Ilahi”, sebuah peran yang begitu kuat sehingga masyarakat tidak punya pilihan selain menerima keberadaannya.', 'A-1 Pictures', 12, 'mashle.jpg', 'Action,Adventure,Fantasy'),
(2, 'Mahoutsukai no Yome Season 2', '2023', '7.83', 'Season kedua dari anime Mahoutsukai no Yome\r\n\r\nMeski memiliki kemampuan untuk melihat makhluk dunia lain, Chise Hatori tidak pernah menganggap dirinya beruntung. Sejak orang tuanya meninggalkannya di usia muda, itu telah menjadi pusat kesulitannya, mendorongnya hingga menjual dirinya ke pasar budak, hanya untuk mengamankan tempat yang bisa dia sebut rumah.\r\n\r\nDipersembahkan kepada para penawar sebagai “Sleigh Beggy” yang langka—makhluk yang memiliki afinitas luar biasa tinggi terhadap energi magis harapan terakhir Chise yang tersisa muncul dalam wujud Elias Ainsworth, seorang magus misterius yang lebih buas daripada manusia. Alih-alih menjadikannya sebagai budak, dia telah memutuskan untuk menjadikannya muridnya, serta mempelai wanita.', 'Studio Kafka', 12, 'Mahoutsukai-no-Yome-Season-2.jpg', 'Action,Adventure,Fantasy'),
(3, 'Tensei shitara Slime Datta Ken Movie: Guren no Kizuna-hen', '2022', '7.48', 'Di Raja, sebuah negara kecil yang terletak di sebelah barat Tempest. Rimuru dan teman-temannya terlibat dalam konspirasi jangka panjang yang berputar di sekitar kekuatan misterius sang ratu. Rimuru dan komandannya Benimaru juga bertemu dengan seorang ogre yang selamat bernama Hiiro, seorang pria yang dulunya adalah saudara laki-laki Benimaru.', '8bit', 1, 'Tensei-shitara-Slime-Datta-Ken-Movie-Guren-no-Kizuna-hen.jpg', 'Action,Comedy,Fantasy'),
(4, 'Tensei Kizoku no Isekai Boukenroku: Jichou wo Shiranai Kamigami no Shito', '2023', '6.62', 'Remaja Shiinya Kazuya meninggal saat menyelamatkan gadis-gadis muda dari penyerang, hanya untuk menemukan dirinya bereinkarnasi ke dunia pedang dan sihir. Ini adalah mimpi yang menjadi kenyataan! Meskipun dia mengingat kehidupan dan pengetahuannya tentang Bumi, dia sekarang adalah Cain von Silford, putra ketiga seorang bangsawan. Diberikan perlindungan para dewa pada hari ulang tahunnya yang kelima ternyata merupakan hal yang terlalu baik bagi Kain. Statistik dan peningkatannya sangat kuat, dia harus menyembunyikan kemampuannya yang sebenarnya untuk naik pangkat masyarakat saat dia turun ke ruang bawah tanah yang paling gelap. Petualangan isekai pamungkas dimulai ketika seorang remaja yang berubah menjadi anak-anak terjebak di kerajaan indah yang tidak ia ciptakan, tetapi suatu hari mungkin akan berkuasa!', 'EMT Squared, Magic Bus', 12, 'Tensei-Kizoku-no-Isekai-Boukenroku-Jichou-wo-Shiranai-Kamigami-no-Shito.jpg', 'Action,Adventure,Fantasy');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'aldo', '123', 'user'),
(2, '12', '123', 'user'),
(3, 'pp', '123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `wiki`
--

CREATE TABLE `wiki` (
  `id` int(15) NOT NULL,
  `nama_komik` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tahun_rilis` int(15) NOT NULL,
  `rating` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `deskripsi` tinytext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `studio` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `chapter` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gambar` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `genre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wiki`
--

INSERT INTO `wiki` (`id`, `nama_komik`, `tahun_rilis`, `rating`, `deskripsi`, `studio`, `chapter`, `gambar`, `genre`) VALUES
(1, 'sakamoto days', 2019, '8.39', 'Manga Sakamoto Days yang dibuat oleh komikus bernama Suzuki Yuuto ini bercerita tentang Taro Sakamoto adalah pembunuh utama, ditakuti oleh penjahat dan dikagumi oleh pembunuh bayaran. Tapi suatu hari bertemu seseorang wanita dan  dia jatuh cinta pada pand', 'Suzuki Yuuto', '125', 'sakamoto.webp', 'Action,Comedy,Shounen'),
(2, 'Top Tier Providence: Secretly Cultivate for a Thousand Years', 2020, '7.00', 'Manhua Top Tier Providence: Secretly Cultivate for a Thousand Years yang dibuat oleh komikus bernama ??? ini bercerita tentang Bereinkarnasi di dunia kultivasi, Han Jue menyadari bahwa dia dapat menjalani hidupnya seperti video game. Dia mengendalikan pot', 'perusahaan langit berbintang', '90', 'Komik-Top-Tier-Providence-Secretly-Cultivate-for-a-Thousand-Years.jpg', 'Action,Drama,Fantasy'),
(3, 'Tondemo Skill de Isekai Hourou Meshi: Sui no Daibouken', 2023, '7.12', 'bercerita tentang Mukouda Tsuyoshi, seorang pria biasa yang secara tidak sengaja terbawa ke dunia fantasi bersama tiga pahlawan lainnya. Di dunia itu, dia mendapatkan skill unik yang bernama \"Belanja Online\", yang memungkinkannya membuat masakan lezat dar', 'Eguchi Ren', '65', 'Komik-Tondemo-Skill-de-Isekai-Hourou-Meshi-Sui-no-Daibouken.webp', 'Action,Adventure,Comedy'),
(4, 'Mission: Yozakura Family', 2023, '8.47', 'anga Mission: Yozakura Family yang dibuat oleh komikus bernama Gondaira Hitsuji ini bercerita tentang Taiyo Asano adalah seorang siswa SMA yang sangat pemalu dan satu-satunya orang yang dapat dia ajak bicara adalah teman masa kecilnya, Mutsumi Yozakura. T', 'Gondaira Hitsuji', '184', 'Komik-Mission-Yozakura-Family.webp', 'Action,Comedy,Romance'),
(5, 'Mashle: Magic and Muscles', 2023, '8.71', 'Manga Mashle: Magic and Muscles yang dibuat oleh komikus bernama Komoto Hajime ini bercerita tentang Ini adalah dunia sihir di mana sihir digunakan untuk segala hal. Tapi jauh di dalam hutan ada seorang pria muda yang menghabiskan waktunya untuk berlatih ', 'Komoto Hajime', '126', 'Komik-Mashle-Magic-and-Muscles.webp', 'Action,Adventure,Fantasy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wiki`
--
ALTER TABLE `wiki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wiki`
--
ALTER TABLE `wiki`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
