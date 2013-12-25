-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.1.37 - Source distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             8.1.0.4545
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for travel
CREATE DATABASE IF NOT EXISTS `travel` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `travel`;


-- Dumping structure for table travel.armada
CREATE TABLE IF NOT EXISTS `armada` (
  `id_armada` varchar(15) NOT NULL,
  `jumlah_kursi` int(11) NOT NULL,
  `pj` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table travel.armada: 0 rows
/*!40000 ALTER TABLE `armada` DISABLE KEYS */;
/*!40000 ALTER TABLE `armada` ENABLE KEYS */;


-- Dumping structure for table travel.berita
CREATE TABLE IF NOT EXISTS `berita` (
  `date_time` datetime NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table travel.berita: 0 rows
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
/*!40000 ALTER TABLE `berita` ENABLE KEYS */;


-- Dumping structure for table travel.function_info
CREATE TABLE IF NOT EXISTS `function_info` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sequence` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `module` varchar(50) NOT NULL,
  `is_show` smallint(6) NOT NULL,
  `is_enabled` smallint(6) NOT NULL,
  `icon_module` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table travel.function_info: 2 rows
/*!40000 ALTER TABLE `function_info` DISABLE KEYS */;
INSERT INTO `function_info` (`id`, `name`, `sequence`, `url`, `module`, `is_show`, `is_enabled`, `icon_module`) VALUES
	('admin', 'Admin', 1, '/admin', 'Data Pengguna', 1, 1, 'icon-user'),
	('member', 'Member', 2, '/member', 'Data Pengguna', 1, 1, 'icon-user');
/*!40000 ALTER TABLE `function_info` ENABLE KEYS */;


-- Dumping structure for table travel.jadwal
CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_armada` varchar(15) NOT NULL,
  `id_rute` varchar(15) NOT NULL,
  `id_jadwal` varchar(15) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table travel.jadwal: 0 rows
/*!40000 ALTER TABLE `jadwal` DISABLE KEYS */;
/*!40000 ALTER TABLE `jadwal` ENABLE KEYS */;


-- Dumping structure for table travel.kota
CREATE TABLE IF NOT EXISTS `kota` (
  `id_kota` int(11) NOT NULL,
  `kota` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kota`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table travel.kota: 5 rows
/*!40000 ALTER TABLE `kota` DISABLE KEYS */;
INSERT INTO `kota` (`id_kota`, `kota`) VALUES
	(1, 'Jakarta'),
	(2, 'Bandung'),
	(3, 'Jogjakarta'),
	(4, 'Surabaya'),
	(5, 'Palembang');
/*!40000 ALTER TABLE `kota` ENABLE KEYS */;


-- Dumping structure for table travel.member
CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `tlp` varchar(12) NOT NULL,
  `email` varchar(35) NOT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table travel.member: 1 rows
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` (`id_member`, `username`, `nama`, `alamat`, `tlp`, `email`) VALUES
	(1, 'a', 'g', 'g', 'g', 'g');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;


-- Dumping structure for table travel.order
CREATE TABLE IF NOT EXISTS `order` (
  `id_member` varchar(20) NOT NULL,
  `id_jadwal` varchar(25) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_order` varchar(10) NOT NULL,
  `order_status` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `order_exp` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table travel.order: 0 rows
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
/*!40000 ALTER TABLE `order` ENABLE KEYS */;


-- Dumping structure for table travel.pembayaran
CREATE TABLE IF NOT EXISTS `pembayaran` (
  `kode_transfer` varchar(15) NOT NULL,
  `id_order` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table travel.pembayaran: 0 rows
/*!40000 ALTER TABLE `pembayaran` DISABLE KEYS */;
/*!40000 ALTER TABLE `pembayaran` ENABLE KEYS */;


-- Dumping structure for table travel.pool
CREATE TABLE IF NOT EXISTS `pool` (
  `pool` varchar(35) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tlp` varchar(12) NOT NULL,
  `sms` varchar(12) NOT NULL,
  `longitude` int(11) NOT NULL,
  `latitude` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table travel.pool: 0 rows
/*!40000 ALTER TABLE `pool` DISABLE KEYS */;
/*!40000 ALTER TABLE `pool` ENABLE KEYS */;


-- Dumping structure for table travel.privilege_info
CREATE TABLE IF NOT EXISTS `privilege_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` varchar(50) DEFAULT NULL,
  `function_info_id` varchar(50) DEFAULT NULL,
  `is_allow_read` smallint(6) DEFAULT '0',
  `is_allow_write` smallint(6) DEFAULT '0',
  `is_allow_update` smallint(6) DEFAULT '0',
  `is_allow_delete` smallint(6) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table travel.privilege_info: 0 rows
/*!40000 ALTER TABLE `privilege_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `privilege_info` ENABLE KEYS */;


-- Dumping structure for table travel.rute
CREATE TABLE IF NOT EXISTS `rute` (
  `id_rute` int(11) NOT NULL AUTO_INCREMENT,
  `asal` int(11) NOT NULL,
  `tujuan` int(11) NOT NULL,
  `harga_mhs` double NOT NULL,
  `harga_normal` double NOT NULL,
  PRIMARY KEY (`id_rute`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table travel.rute: 2 rows
/*!40000 ALTER TABLE `rute` DISABLE KEYS */;
INSERT INTO `rute` (`id_rute`, `asal`, `tujuan`, `harga_mhs`, `harga_normal`) VALUES
	(1, 1, 2, 100000, 150000),
	(2, 0, 0, 0, 0);
/*!40000 ALTER TABLE `rute` ENABLE KEYS */;


-- Dumping structure for table travel.user_group
CREATE TABLE IF NOT EXISTS `user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table travel.user_group: 2 rows
/*!40000 ALTER TABLE `user_group` DISABLE KEYS */;
INSERT INTO `user_group` (`id`, `name`) VALUES
	(1, 'Admin'),
	(3, 'customer');
/*!40000 ALTER TABLE `user_group` ENABLE KEYS */;


-- Dumping structure for table travel.user_info
CREATE TABLE IF NOT EXISTS `user_info` (
  `username` varchar(25) NOT NULL,
  `password` varchar(8) NOT NULL,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table travel.user_info: 2 rows
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
INSERT INTO `user_info` (`username`, `password`, `level`) VALUES
	('admin', 'asdas', '3'),
	('bayusantoso', 'asdasda', '1');
/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
