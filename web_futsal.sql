-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2025 at 05:30 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_futsal`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_lapangan`
--

CREATE TABLE `booking_lapangan` (
  `id` int NOT NULL,
  `lapangan_id` int NOT NULL,
  `nama_lapangan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `harga` int NOT NULL,
  `status` enum('pending','paid') NOT NULL DEFAULT 'pending',
  `dibuat_pada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booking_lapangan`
--

INSERT INTO `booking_lapangan` (`id`, `lapangan_id`, `nama_lapangan`, `tanggal`, `waktu_mulai`, `waktu_selesai`, `harga`, `status`, `dibuat_pada`) VALUES
(1, 10, 'Lapangan Futsal 1', '2025-08-20', '10:00:00', '03:00:00', 65000, 'paid', '2025-11-19 15:22:38'),
(2, 12, 'Centro Tebetram', '2025-08-20', '17:00:00', '19:00:00', 100000, 'paid', '2025-11-19 15:26:33'),
(3, 4, 'Futsal limbad', '2025-08-20', '17:00:00', '19:00:00', 70000, 'paid', '2025-11-21 03:32:02'),
(4, 13, 'Gator Arena Futsal', '2025-08-20', '19:00:00', '21:00:00', 70000, 'paid', '2025-11-21 07:34:09'),
(5, 13, 'Gator Arena Futsal', '2025-08-20', '18:00:00', '19:00:00', 70000, 'paid', '2025-11-21 07:37:33'),
(6, 6, 'Danau Cintarum', '2025-08-20', '11:00:00', '12:00:00', 120000, 'paid', '2025-11-21 07:43:29'),
(7, 5, 'Futsal Rooftop', '2025-08-20', '19:00:00', '21:00:00', 90000, 'paid', '2025-11-21 08:04:41'),
(8, 11, 'Arena Futsal SBN', '2025-08-20', '16:00:00', '18:00:00', 85000, 'paid', '2025-11-22 05:05:18'),
(9, 15, 'Ten Soccer Arena', '2025-08-20', '22:00:00', '23:00:00', 125000, 'paid', '2025-11-22 05:17:29'),
(10, 21, 'Futsal Avenue', '2025-08-20', '09:00:00', '10:00:00', 85000, 'paid', '2025-11-22 05:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE `lapangan` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`id`, `name`, `rating`, `location`, `price`, `img`) VALUES
(1, 'Generasi Lama', 4.68, 'JayaPura', 50000, 'Generasi-lama.jpg'),
(2, 'Futsal Corner Bekasi', 4.1, 'Bekasi', 50000, 'futsal-corner-bekasi.jpg'),
(3, 'Futsal Kebon Jeruk ', 4.75, 'Balikpapan', 80000, 'futsal-kebon-jeruk.jpg'),
(4, 'Futsal limbad', 4.88, 'Jakarta Barat', 70000, 'Futsal-limbad.jpg'),
(5, 'Futsal Rooftop', 4.95, 'Singkawang', 90000, 'futsal-rooftop.jpg'),
(6, 'Danau Cintarum', 4.9, 'Banda Aceh', 120000, 'danau-cintarum.jpg'),
(7, 'Sports Corner', 4.5, 'Jakarta Pusat', 50000, 'sports-corner.jpg'),
(8, 'Futsal Hijau Indah', 3.05, 'Pontianak', 70000, 'futsal-hijau-indah.jpg'),
(9, 'Arena Balap', 4.8, 'Singkawang', 90000, 'arena-balap.jpg'),
(10, 'Bidadari Futsal', 4.88, 'Jakarta Timur', 65000, 'BIDADARI-FUTSAL.JPG'),
(11, 'Arena Futsal SBN', 4.75, 'Pontianak', 85000, 'arena-futsal-sbn.jpg'),
(12, 'Centro Tebetram', 4.9, 'Jakarta Selatan', 100000, 'CENTRO-TEBETAM.jpg'),
(13, 'Gator Arena Futsal', 4.79, 'Jakarta Utara', 70000, 'gator-futsal-arena.jpg'),
(14, 'JS Futsal', 4.98, 'Bogor', 110000, 'JS-FUTSAL.jpg'),
(15, 'Ten Soccer Arena', 4.88, 'Denpasar', 125000, 'TEN-SOCCER-PONDOK-INDAH.jpg'),
(16, 'Icon Futsal', 4.28, 'Tangerang', 78000, 'icon-futsal.jpg'),
(17, 'Bywi Futsal Rajeg\r\n\r\n', 4.67, 'Tangerang', 87000, 'Bywi-Futsal-Rajeg.jpg'),
(18, 'Libero Futsal', 4.69, 'Banten', 75000, 'libero.jpg'),
(19, 'Merdeka Futsal', 4.28, 'Semarang', 56000, 'merdeka-futsal.png'),
(20, 'Planet Futsal', 4.56, 'Pontianak', 75000, 'planet-futsal.png'),
(21, 'Futsal Avenue', 4.71, 'Jakarta Timur', 85000, 'futsal-avenue.png'),
(25, 'Vest Futsal', NULL, 'Bekasi', 250000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_city` varchar(100) DEFAULT NULL,
  `komentar` text,
  `rating` int DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `user_name`, `user_city`, `komentar`, `rating`, `foto`) VALUES
(1, 'Fahri', 'Jakarta Utara', 'Proses reservasinya super cepat dan mudah! Lapangannya bersih, stafnya ramah, dan sistem online-nya bikin booking jadi praktis banget.', 5, 'Fahri.png'),
(2, 'Olga', 'Banda Aceh', 'Platform reservasi ini sangat membantu tim kami mengatur jadwal latihan. Prosesnya cepat, sistemnya jelas, dan lapangannya keren.', 4, 'Olga.png'),
(3, 'Simanjuntak', 'Bogor', 'Reservasi di website ini sangat mudah dan tidak ribet dan sistem pembayaran yang simple.', 4, 'Simajuntak.png'),
(4, 'Asep', 'Pontianak', 'Reservasinya gampang dan cepat dan lapangan selalu ready dan bersih.', 5, 'Asep.png'),
(5, 'Wibi', 'Bali', 'Tim kami rutin pakai layanan ini buat latihan mingguan. Reservasi lancar, lapangan nyaman, dan jadwal selalu on time.\r\n', 5, 'Wibi.png'),
(6, 'Andi', 'Bandung', 'Sistem reservasinya efisien, lapangannya terawat, dan jadwal selalu tepat. Cocok buat saya yang nggak suka ribet.', 5, 'Andi.png'),
(7, 'Lewis', 'Pontianak', 'Sistem pemesanan lapangan diwebsite ini sangat bagus dan tepercaya.', 5, 'guest.png'),
(8, 'Jovan', 'Surabaya', 'Proses booking di sini super cepat dan anti-ribet! Cuma butuh beberapa klik, dan lapangan langsung aman di tangan. Sangat direkomendasikan untuk tim yang gerak cepat!', 4, 'guest.png'),
(9, 'Bryan', 'Tangerang', 'Interface websitenya sangat user-friendly. Saya bisa lihat jadwal kosong dan langsung bayar tanpa harus telepon atau chat admin. Praktis banget!', 5, 'guest.png'),
(10, 'Wemby', 'Bekasi', 'Sistem booking-nya paling update. Gak pernah kejadian jadwal ganda atau miss komunikasi. Membantu banget buat manager tim seperti saya.', 5, 'guest.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT 'guest.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `foto`) VALUES
(1, 'Andi Muhammad', 'Andi.5462@gmail.com', '12334567812345678', 'users-andi-muhammad.png'),
(2, 'Arya Melati', 'Arya.6426@gmail.com', 'AryaMelati', 'users-arya-melati.png'),
(20, 'Devon Austin', 'devon@gmail.com', 'devon', 'guest.png'),
(21, 'lewis', 'lewis@gmail.com', 'lewis', 'guest.png'),
(25, 'Hani', 'Hani21@gmail.com', '$2y$10$xb/Mpri0rxrt3Fg1Qc9teOZofbQAqzvcFgIM5r/VUywlZj9PkyE5W', 'guest.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_lapangan`
--
ALTER TABLE `booking_lapangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_lapangan_booking` (`lapangan_id`);

--
-- Indexes for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_lapangan`
--
ALTER TABLE `booking_lapangan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lapangan`
--
ALTER TABLE `lapangan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_lapangan`
--
ALTER TABLE `booking_lapangan`
  ADD CONSTRAINT `fk_lapangan_booking` FOREIGN KEY (`lapangan_id`) REFERENCES `lapangan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
