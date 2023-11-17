/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS `spk_bantuan_siswa` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `spk_bantuan_siswa`;

CREATE TABLE IF NOT EXISTS `data_alternatif` (
  `id_alternatif` varchar(10) NOT NULL,
  `C1` int(11) NOT NULL,
  `C2` int(11) NOT NULL,
  `C3` int(11) NOT NULL,
  `C4` int(11) NOT NULL,
  `C5` int(11) NOT NULL,
  `C6` int(11) NOT NULL,
  KEY `data_alternatif_id_alternatif_foreign` (`id_alternatif`),
  CONSTRAINT `data_alternatif_id_alternatif_foreign` FOREIGN KEY (`id_alternatif`) REFERENCES `data_siswa` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `data_alternatif` (`id_alternatif`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`) VALUES
	('A1', 2, 2, 3, 3, 3, 1),
	('A2', 5, 3, 2, 3, 1, 3),
	('A3', 2, 3, 4, 3, 1, 3),
	('A4', 4, 2, 4, 3, 1, 3),
	('A5', 2, 4, 3, 3, 1, 3);

CREATE TABLE IF NOT EXISTS `data_bobot` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sub_kriteria` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `bobot` int(11) NOT NULL,
  `id_kriteria` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `data_bobot_id_kriteria_foreign` (`id_kriteria`),
  CONSTRAINT `data_bobot_id_kriteria_foreign` FOREIGN KEY (`id_kriteria`) REFERENCES `data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `data_bobot` (`id`, `sub_kriteria`, `keterangan`, `bobot`, `id_kriteria`) VALUES
	(1, '< 700.000', 'Sangat Buruk', 1, 'C1'),
	(2, '701.000 - 1.000.000', 'Kurang Baik', 2, 'C1'),
	(3, '1.001.000 - 1.200.000', 'Cukup', 3, 'C1'),
	(4, '1.2001.000 - 1.500.000', 'Baik', 4, 'C1'),
	(5, '1 anak', 'Tidak Baik', 1, 'C2'),
	(6, '2 anak', 'Cukup', 2, 'C2'),
	(7, '3 anak', 'Baik', 3, 'C2'),
	(8, '> 3 anak', 'Sangat Baik', 4, 'C2'),
	(9, 'PNS', 'Tidak Baik', 1, 'C3'),
	(10, 'Karyawan/Wiraswasta', 'Cukup', 2, 'C3'),
	(11, 'Petani', 'Baik', 3, 'C3'),
	(12, 'Buruh', 'Sangat Baik', 4, 'C3'),
	(13, '< 70', 'Tidak Baik', 1, 'C4'),
	(14, '71 - 80', 'Cukup', 2, 'C4'),
	(15, '81 - 90', 'Baik', 3, 'C4'),
	(16, '91 - 100', 'Sangat Baik', 4, 'C4'),
	(17, 'Masih Ada Keduanya', 'Tidak Baik', 1, 'C5'),
	(18, 'Piatu', 'Cukup', 2, 'C5'),
	(19, 'Yatim', 'Baik', 3, 'C5'),
	(20, 'Yatim Piatu', 'Sangat Baik', 4, 'C5'),
	(21, 'Tidak Ada', 'Sangat Baik', 4, 'C6'),
	(22, 'Memilik SKTM', 'Baik', 3, 'C6'),
	(23, 'Terdaftar PKH', 'Cukup', 2, 'C6'),
	(24, 'Tidak Baik', 'Tidak Baik', 1, 'C6');

CREATE TABLE IF NOT EXISTS `data_kriteria` (
  `id_kriteria` varchar(10) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `bobot` decimal(8,2) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `data_kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`, `jenis`) VALUES
	('C1', 'Pendapatan Orang Tua', 0.40, 'Cost'),
	('C2', 'Tanggungan Anak Sekolah', 0.20, 'Benefit'),
	('C3', 'Pekerjaan Orang Tua', 0.15, 'Benefit'),
	('C4', 'Nilai Rapot', 0.05, 'Benefit'),
	('C5', 'Status Orang Tua', 0.20, 'Benefit'),
	('C6', 'Memiliki Kartu Program Pemerintah', 0.30, 'Cost');

CREATE TABLE IF NOT EXISTS `data_siswa` (
  `id_alternatif` varchar(10) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `kelas` int(11) NOT NULL,
  `pekerjaan_ortu` varchar(50) NOT NULL,
  `penghasilan_ortu` varchar(50) NOT NULL,
  `tanggungan_ortu` varchar(50) NOT NULL,
  `nilai_rapot` varchar(50) NOT NULL,
  `status_ortu` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL,
  PRIMARY KEY (`id_alternatif`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `data_siswa` (`id_alternatif`, `nama_siswa`, `kelas`, `pekerjaan_ortu`, `penghasilan_ortu`, `tanggungan_ortu`, `nilai_rapot`, `status_ortu`, `program`) VALUES
	('A1', 'Khakha Surya Samudra', 5, 'Petani', '701.000 - 1.000.000', '2 anak', '81-90', 'Yatim', 'Terdaftar KPS'),
	('A2', 'Anjani Septriansyah', 2, 'Karyawan/Wiraswasta', '> 1.501.000', '3 anak', '81-90', 'Lengkap', 'Memiliki SKTM'),
	('A3', 'Armansyah Daulay', 2, 'Buruh', '701.000 - 1.000.000', '3 anak', '81-90', 'Lengkap', 'Memiliki SKTM'),
	('A4', 'Ismaya Dwi Aprianti', 3, 'Buruh', '1.201.000 - 1.500.000', '2 anak', '81-90', 'Lengkap', 'Memiliki SKTM'),
	('A5', 'Putri Amelia', 3, 'Petani', '701.000 - 1.000.000', '> 3 anak', '81-90', 'Lengkap', 'Memiliki SKTM');

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(2, '2023_11_10_110113_create_data_kriteria', 1),
	(3, '2023_11_10_110829_create_data_bobot', 1),
	(4, '2023_11_10_111638_create_data_siswa', 1),
	(5, '2023_11_10_111646_create_data_alternatif', 1),
	(6, '2023_11_13_113729_create_normalisasi', 1),
	(7, '2023_11_13_134641_create_rangking', 1);

CREATE TABLE IF NOT EXISTS `normalisasi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_alternatif` varchar(10) DEFAULT NULL,
  `C1` float NOT NULL DEFAULT 0,
  `C2` float NOT NULL DEFAULT 0,
  `C3` float NOT NULL DEFAULT 0,
  `C4` float NOT NULL DEFAULT 0,
  `C5` float NOT NULL DEFAULT 0,
  `C6` float NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `normalisasi_id_alternatif_foreign` (`id_alternatif`),
  CONSTRAINT `normalisasi_id_alternatif_foreign` FOREIGN KEY (`id_alternatif`) REFERENCES `data_siswa` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `normalisasi` (`id`, `id_alternatif`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`) VALUES
	(1, 'A1', 0.10988, 0.06172, 0.06123, 0.02236, 0.16642, 0.04932),
	(2, 'A2', 0.27472, 0.09258, 0.04083, 0.02236, 0.05548, 0.14796),
	(3, 'A3', 0.10988, 0.09258, 0.081645, 0.02236, 0.05548, 0.14796),
	(4, 'A4', 0.21976, 0.06172, 0.081645, 0.02236, 0.05548, 0.14796),
	(5, 'A5', 0.10988, 0.12344, 0.06123, 0.02236, 0.05548, 0.14796);

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `rangking` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `rangking` int(11) DEFAULT NULL,
  `id_alternatif` varchar(10) NOT NULL,
  `y` float NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `rangking_id_alternatif_foreign` (`id_alternatif`),
  CONSTRAINT `rangking_id_alternatif_foreign` FOREIGN KEY (`id_alternatif`) REFERENCES `data_siswa` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `rangking` (`id`, `rangking`, `id_alternatif`, `y`) VALUES
	(1, 1, 'A1', 0.15253),
	(2, 5, 'A2', -0.21143),
	(3, 3, 'A3', -0.005775),
	(4, 4, 'A4', -0.146515),
	(5, 2, 'A5', 0.00467);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
