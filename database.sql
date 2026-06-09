

-- Dumping structure for table coffee_db.messages
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pesan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table coffee_db.messages: ~3 rows (approximately)
REPLACE INTO `messages` (`id`, `nama`, `email`, `pesan`, `tanggal`) VALUES
	(1, 'Hayyu', 'hayyu@gmail.com', 'I want to order coffee beans.', '2026-05-28 13:31:07'),
	(2, 'Hayyu Fdlh', 'hayyu@gmail.com', 'semangat', '2026-05-28 13:35:22'),
	(3, 'Hayyu Fdlh', 'hayyu@gmail.com', 'semangat', '2026-05-28 13:35:32');

-- Dumping structure for table coffee_db.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `produk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pembayaran` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_pesanan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table coffee_db.orders: ~6 rows (approximately)
REPLACE INTO `orders` (`id`, `nama`, `email`, `produk`, `harga`, `alamat`, `created_at`, `pembayaran`, `status_pesanan`) VALUES
	(1, 'Hayyu Fdlh', 'nurhayyuf@gmail.com', 'Arabica Gayo', 85000, 'Jl.Sukaluyu I, Gg.II, No.32', '2026-05-28 15:14:51', NULL, NULL),
	(2, 'Hayyu Fdlh', 'nurhayyuf@gmail.com', 'Arabica Gayo', 85000, 'Jl.Sukaluyu I, Gg.II, No.32', '2026-05-28 15:14:52', NULL, NULL),
	(3, 'Hayyu Fdlh', 'nurhayyuf@gmail.com', 'Arabica Gayo', 85000, 'Jl.Sukaluyu I, Gg.II, No.32', '2026-05-28 15:14:53', NULL, NULL),
	(4, 'Hayyu Fdlh', 'nurhayyuf@gmail.com', 'Arabica Gayo', 85000, 'Jl.Sukaluyu I, Gg.II, No.32', '2026-05-28 15:14:53', NULL, NULL),
	(5, 'Hayyu Fdlh', 'nurhayyuf@gmail.com', 'Arabica Gayo', 85000, 'Jl.Sukaluyu I, Gg.II, No.32', '2026-05-28 15:14:54', NULL, NULL),
	(6, 'Hayyu Fdlh', 'nurhayyuf@gmail.com', 'Arabica Gayo', 85000, 'Jl.Sukaluyu I, Gg.II, No.32', '2026-05-28 15:14:54', NULL, NULL);

-- Dumping structure for table coffee_db.pesanan
CREATE TABLE IF NOT EXISTS `pesanan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `produk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `payment` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_pesanan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'Menunggu Pembayaran',
  `bukti_transfer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `berat` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `qty` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table coffee_db.pesanan: ~4 rows (approximately)
REPLACE INTO `pesanan` (`id`, `nama`, `email`, `alamat`, `produk`, `harga`, `payment`, `status_pesanan`, `bukti_transfer`, `tanggal`, `berat`, `qty`) VALUES
	(1, 'Arda', 'nurhayyuf@gmail.com', 'Bandung', 'Arabica Gayo', 85000, 'Transfer Bank', 'Selesai', NULL, '2026-05-28 15:36:28', NULL, NULL),
	(2, 'Ubad', 'kohibuteng@gmail.com', 'Soreang', 'Arabica Gayo', 85000, 'E-Wallet', 'Diproses', NULL, '2026-05-28 23:54:05', NULL, NULL),
	(7, 'Hayyu Fdlh', 'nurhayyuf@gmail.com', 'inggris', 'Bubuk Kopi Arabica', 75000, 'Transfer Bank', 'Menunggu Pembayaran', NULL, '2026-06-04 15:59:09', NULL, NULL),
	(8, 'Fadillah', 'hayyufdlh@gmail.com', 'hujung', 'Robusta Temanggung', 65000, 'Transfer Bank', 'Diproses', '1780589406_gayo.jpg', '2026-06-04 16:09:37', NULL, NULL);

-- Dumping structure for table coffee_db.produk
CREATE TABLE IF NOT EXISTS `produk` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `harga` int DEFAULT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kategori` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `stok` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table coffee_db.produk: ~3 rows (approximately)
REPLACE INTO `produk` (`id`, `nama_produk`, `deskripsi`, `harga`, `gambar`, `kategori`, `stok`) VALUES
	(1, 'Arabica CMH Limited Edition', 'Premium arabica coffee beans from Aceh Gayo.', 35000, 'WhatsApp Image 2026-06-05 at 07.08.39.jpeg', 'Ground Coffe', 90),
	(4, 'Bubuk Kopi Arabica', 'Bubuk ', 75000, 'ground.jpg', 'coffee powder', 75);

-- Dumping structure for table coffee_db.reviews
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rating` int DEFAULT NULL,
  `komentar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table coffee_db.reviews: ~2 rows (approximately)
REPLACE INTO `reviews` (`id`, `nama`, `rating`, `komentar`, `tanggal`) VALUES
	(2, 'Hayyu Fdlh', 5, 'kopinya harum, harga sangat murah untuk kualitas yg bagus seperti ini', '2026-05-28 14:15:01'),
	(3, 'Hayyu Fdlh', 5, 'bagus\r\n', '2026-05-29 01:40:43');

-- Dumping structure for table coffee_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role` enum('admin','customer') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table coffee_db.users: ~2 rows (approximately)
REPLACE INTO `users` (`id`, `username`, `password`, `role`) VALUES
	(1, 'admin', '123', 'admin'),
	(2, 'customer', '123\r\n', 'customer'),
	(3, 'zombie', '123', 'customer');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
