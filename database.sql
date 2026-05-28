-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.11.0.7065
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for coffee_db
CREATE DATABASE IF NOT EXISTS `coffee_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `coffee_db`;

-- Dumping structure for table coffee_db.messages
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pesan` text COLLATE utf8mb4_general_ci,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table coffee_db.messages: ~0 rows (approximately)
INSERT INTO `messages` (`id`, `nama`, `email`, `pesan`, `tanggal`) VALUES
	(1, 'Hayyu', 'hayyu@gmail.com', 'I want to order coffee beans.', '2026-05-28 13:31:07'),
	(2, 'Hayyu Fdlh', 'hayyu@gmail.com', 'semangat', '2026-05-28 13:35:22'),
	(3, 'Hayyu Fdlh', 'hayyu@gmail.com', 'semangat', '2026-05-28 13:35:32');

-- Dumping structure for table coffee_db.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `produk` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pembayaran` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_pesanan` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table coffee_db.orders: ~0 rows (approximately)
INSERT INTO `orders` (`id`, `nama`, `email`, `produk`, `harga`, `alamat`, `created_at`, `pembayaran`, `status_pesanan`) VALUES
	(1, 'Hayyu Fdlh', 'nurhayyuf@gmail.com', 'Arabica Gayo', 85000, 'Jl.Sukaluyu I, Gg.II, No.32', '2026-05-28 15:14:51', NULL, NULL),
	(2, 'Hayyu Fdlh', 'nurhayyuf@gmail.com', 'Arabica Gayo', 85000, 'Jl.Sukaluyu I, Gg.II, No.32', '2026-05-28 15:14:52', NULL, NULL),
	(3, 'Hayyu Fdlh', 'nurhayyuf@gmail.com', 'Arabica Gayo', 85000, 'Jl.Sukaluyu I, Gg.II, No.32', '2026-05-28 15:14:53', NULL, NULL),
	(4, 'Hayyu Fdlh', 'nurhayyuf@gmail.com', 'Arabica Gayo', 85000, 'Jl.Sukaluyu I, Gg.II, No.32', '2026-05-28 15:14:53', NULL, NULL),
	(5, 'Hayyu Fdlh', 'nurhayyuf@gmail.com', 'Arabica Gayo', 85000, 'Jl.Sukaluyu I, Gg.II, No.32', '2026-05-28 15:14:54', NULL, NULL),
	(6, 'Hayyu Fdlh', 'nurhayyuf@gmail.com', 'Arabica Gayo', 85000, 'Jl.Sukaluyu I, Gg.II, No.32', '2026-05-28 15:14:54', NULL, NULL);

-- Dumping structure for table coffee_db.pesanan
CREATE TABLE IF NOT EXISTS `pesanan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_general_ci,
  `produk` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `payment` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_pesanan` varchar(50) COLLATE utf8mb4_general_ci DEFAULT 'Menunggu Pembayaran',
  `bukti_transfer` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table coffee_db.pesanan: ~0 rows (approximately)
INSERT INTO `pesanan` (`id`, `nama`, `email`, `alamat`, `produk`, `harga`, `payment`, `status_pesanan`, `bukti_transfer`, `tanggal`) VALUES
	(1, 'Hayyu Fdlh', 'nurhayyuf@gmail.com', 'Bandung', 'Arabica Gayo', 85000, 'Transfer Bank', 'Dikirim', NULL, '2026-05-28 15:36:28');

-- Dumping structure for table coffee_db.produk
CREATE TABLE IF NOT EXISTS `produk` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_general_ci,
  `harga` int DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kategori` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table coffee_db.produk: ~3 rows (approximately)
INSERT INTO `produk` (`id`, `nama_produk`, `deskripsi`, `harga`, `gambar`, `kategori`) VALUES
	(1, 'Arabica Gayo', 'Premium arabica coffee beans from Aceh Gayo.', 85000, 'gayo.jpg', 'Coffee Beans'),
	(2, 'Robusta Temanggung', 'Strong and bold robusta coffee from Central Java.', 65000, 'robusta.jpg', 'Coffee Beans');

-- Dumping structure for table coffee_db.reviews
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rating` int DEFAULT NULL,
  `komentar` text COLLATE utf8mb4_general_ci,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table coffee_db.reviews: ~0 rows (approximately)
INSERT INTO `reviews` (`id`, `nama`, `rating`, `komentar`, `tanggal`) VALUES
	(2, 'Hayyu Fdlh', 5, 'kopinya harum, harga sangat murah untuk kualitas yg bagus seperti ini', '2026-05-28 14:15:01');

-- Dumping structure for table coffee_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role` enum('admin','customer') COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table coffee_db.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
	(1, 'admin', '12345', 'admin'),
	(2, 'customer', '12345', 'customer');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
