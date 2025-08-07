-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 07, 2025 at 07:06 AM
-- Server version: 10.11.13-MariaDB-cll-lve
-- PHP Version: 8.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avhy9875_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('last_sk_number_2025', 'O:13:\"App\\Models\\Sk\":31:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:3:\"sks\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";s:2:\"24\";s:8:\"nomor_sk\";s:14:\"020 TAHUN 2025\";s:10:\"tanggal_sk\";s:10:\"2025-06-23\";s:7:\"perihal\";s:127:\"SK Tim Swakelola Kegiatan Sosialisasi Komunikasi, Informasi dan Edukasi Pencegahan dan Penanggulangan Penyakit Ternak Strategis\";s:10:\"created_at\";s:19:\"2025-06-23 15:27:02\";s:10:\"updated_at\";s:19:\"2025-06-23 15:27:02\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";s:2:\"24\";s:8:\"nomor_sk\";s:14:\"020 TAHUN 2025\";s:10:\"tanggal_sk\";s:10:\"2025-06-23\";s:7:\"perihal\";s:127:\"SK Tim Swakelola Kegiatan Sosialisasi Komunikasi, Informasi dan Edukasi Pencegahan dan Penanggulangan Penyakit Ternak Strategis\";s:10:\"created_at\";s:19:\"2025-06-23 15:27:02\";s:10:\"updated_at\";s:19:\"2025-06-23 15:27:02\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:3:{i:0;s:8:\"nomor_sk\";i:1;s:10:\"tanggal_sk\";i:2;s:7:\"perihal\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}s:8:\"\0*\0dates\";a:1:{i:0;s:10:\"tanggal_sk\";}}', 1752041099),
('livewire-rate-limiter:004aeed26a941fe596743e502242f06868e258dc', 'i:3;', 1753799407),
('livewire-rate-limiter:004aeed26a941fe596743e502242f06868e258dc:timer', 'i:1753799407;', 1753799407),
('livewire-rate-limiter:01294c71646f26ee465c9038ca3289994c72daa9', 'i:1;', 1741316240),
('livewire-rate-limiter:01294c71646f26ee465c9038ca3289994c72daa9:timer', 'i:1741316240;', 1741316240),
('livewire-rate-limiter:0162cce218042d307fb6c26ab1e945deef1e955e', 'i:1;', 1747516716),
('livewire-rate-limiter:0162cce218042d307fb6c26ab1e945deef1e955e:timer', 'i:1747516716;', 1747516716),
('livewire-rate-limiter:035b8b0ed0301a3a1d252e7456082fc431503ab0', 'i:1;', 1752720977),
('livewire-rate-limiter:035b8b0ed0301a3a1d252e7456082fc431503ab0:timer', 'i:1752720977;', 1752720977),
('livewire-rate-limiter:05d21a08d735f835fa8f51db8e5d44e2a0579e00', 'i:1;', 1747733358),
('livewire-rate-limiter:05d21a08d735f835fa8f51db8e5d44e2a0579e00:timer', 'i:1747733358;', 1747733358),
('livewire-rate-limiter:0683fba37adc4cf04d0a2230e94d44c23e924f06', 'i:1;', 1748396167),
('livewire-rate-limiter:0683fba37adc4cf04d0a2230e94d44c23e924f06:timer', 'i:1748396167;', 1748396167),
('livewire-rate-limiter:09a3af7f4495b48f799035c20d72b4ea9e664107', 'i:1;', 1753798051),
('livewire-rate-limiter:09a3af7f4495b48f799035c20d72b4ea9e664107:timer', 'i:1753798051;', 1753798051),
('livewire-rate-limiter:0a70bb2cde8964fb08799a82dd274b7e788b26c3', 'i:1;', 1754388617),
('livewire-rate-limiter:0a70bb2cde8964fb08799a82dd274b7e788b26c3:timer', 'i:1754388617;', 1754388617),
('livewire-rate-limiter:0cba9486164ce7cab12ab6688bad5ef3844dee05', 'i:1;', 1751960359),
('livewire-rate-limiter:0cba9486164ce7cab12ab6688bad5ef3844dee05:timer', 'i:1751960359;', 1751960359),
('livewire-rate-limiter:0dd446fdd24ee08e096ff41d4639f089da74048e', 'i:1;', 1753158878),
('livewire-rate-limiter:0dd446fdd24ee08e096ff41d4639f089da74048e:timer', 'i:1753158878;', 1753158878),
('livewire-rate-limiter:11a8b3a553a8a3985befcc6d2d12a38186bbf06f', 'i:3;', 1754489870),
('livewire-rate-limiter:11a8b3a553a8a3985befcc6d2d12a38186bbf06f:timer', 'i:1754489870;', 1754489870),
('livewire-rate-limiter:12fcacd3f04243ea5f33c829c01d80f27a2fe889', 'i:1;', 1749907113),
('livewire-rate-limiter:12fcacd3f04243ea5f33c829c01d80f27a2fe889:timer', 'i:1749907113;', 1749907113),
('livewire-rate-limiter:141edfc6c0bc6a2978c273ba864c285f5c3ec40d', 'i:1;', 1750943052),
('livewire-rate-limiter:141edfc6c0bc6a2978c273ba864c285f5c3ec40d:timer', 'i:1750943052;', 1750943052),
('livewire-rate-limiter:147249d0ecdae320f24e732b13b98c26345d4ad1', 'i:1;', 1741675278),
('livewire-rate-limiter:147249d0ecdae320f24e732b13b98c26345d4ad1:timer', 'i:1741675278;', 1741675278),
('livewire-rate-limiter:15a9f1ef1edef4a01a77cc16780829383020b9de', 'i:2;', 1750222480),
('livewire-rate-limiter:15a9f1ef1edef4a01a77cc16780829383020b9de:timer', 'i:1750222480;', 1750222480),
('livewire-rate-limiter:1846e89fa060aa05b1d13d67e8cee1aa10268bcc', 'i:1;', 1747898462),
('livewire-rate-limiter:1846e89fa060aa05b1d13d67e8cee1aa10268bcc:timer', 'i:1747898462;', 1747898462),
('livewire-rate-limiter:1d696a3f6ad2279d402179d246baaa8f2d273dfc', 'i:1;', 1741935143),
('livewire-rate-limiter:1d696a3f6ad2279d402179d246baaa8f2d273dfc:timer', 'i:1741935143;', 1741935143),
('livewire-rate-limiter:1e278521e906d8fc45ec558822ba7997bee74874', 'i:1;', 1741154833),
('livewire-rate-limiter:1e278521e906d8fc45ec558822ba7997bee74874:timer', 'i:1741154833;', 1741154833),
('livewire-rate-limiter:1f480c790f37acc3baf1a16e7f10948f6fbecb2c', 'i:1;', 1752539768),
('livewire-rate-limiter:1f480c790f37acc3baf1a16e7f10948f6fbecb2c:timer', 'i:1752539768;', 1752539768),
('livewire-rate-limiter:2a60366efe7abe472aac8a4cad96983d70660ded', 'i:1;', 1747446854),
('livewire-rate-limiter:2a60366efe7abe472aac8a4cad96983d70660ded:timer', 'i:1747446854;', 1747446854),
('livewire-rate-limiter:2b957f4a9d2931c33d0b62eb431264360cb3544f', 'i:2;', 1748831872),
('livewire-rate-limiter:2b957f4a9d2931c33d0b62eb431264360cb3544f:timer', 'i:1748831872;', 1748831872),
('livewire-rate-limiter:2c67115b7ffffd5a530f9e1fddd76e3a4b0c211e', 'i:1;', 1740652935),
('livewire-rate-limiter:2c67115b7ffffd5a530f9e1fddd76e3a4b0c211e:timer', 'i:1740652935;', 1740652935),
('livewire-rate-limiter:2d55ed47dfc0aba72554b6622324bceb9cee313d', 'i:1;', 1741198967),
('livewire-rate-limiter:2d55ed47dfc0aba72554b6622324bceb9cee313d:timer', 'i:1741198967;', 1741198967),
('livewire-rate-limiter:306fbc63f34938eba1d28a9a1ecfe2f376acf0b2', 'i:1;', 1747039122),
('livewire-rate-limiter:306fbc63f34938eba1d28a9a1ecfe2f376acf0b2:timer', 'i:1747039122;', 1747039122),
('livewire-rate-limiter:3554e6eb938fda06b1f9f303c3a06c6a4c46b338', 'i:1;', 1747275472),
('livewire-rate-limiter:3554e6eb938fda06b1f9f303c3a06c6a4c46b338:timer', 'i:1747275472;', 1747275472),
('livewire-rate-limiter:35659b21d582bf327d937144f704b5cd36af1262', 'i:1;', 1745594351),
('livewire-rate-limiter:35659b21d582bf327d937144f704b5cd36af1262:timer', 'i:1745594351;', 1745594351),
('livewire-rate-limiter:39eaa06dee09730a30cdd63d0e8eaac388f838d2', 'i:1;', 1745464046),
('livewire-rate-limiter:39eaa06dee09730a30cdd63d0e8eaac388f838d2:timer', 'i:1745464046;', 1745464046),
('livewire-rate-limiter:3ae21bb918828a1f1311b842cffd77c42b2f4389', 'i:1;', 1750323071),
('livewire-rate-limiter:3ae21bb918828a1f1311b842cffd77c42b2f4389:timer', 'i:1750323071;', 1750323071),
('livewire-rate-limiter:3b3fda494f68d0ad1fe758e9f9b7cd70cdc059ac', 'i:2;', 1746268600),
('livewire-rate-limiter:3b3fda494f68d0ad1fe758e9f9b7cd70cdc059ac:timer', 'i:1746268600;', 1746268600),
('livewire-rate-limiter:3e59e4d8a3396884d325c744cedbdd40476561e3', 'i:1;', 1742372610),
('livewire-rate-limiter:3e59e4d8a3396884d325c744cedbdd40476561e3:timer', 'i:1742372610;', 1742372610),
('livewire-rate-limiter:41e0de9a2c5e7107ebe5b3db3e01839ab14df5ff', 'i:3;', 1754491588),
('livewire-rate-limiter:41e0de9a2c5e7107ebe5b3db3e01839ab14df5ff:timer', 'i:1754491588;', 1754491588),
('livewire-rate-limiter:43d049746dfbdfe5af52b1353ee50af2221dfe5b', 'i:1;', 1749634704),
('livewire-rate-limiter:43d049746dfbdfe5af52b1353ee50af2221dfe5b:timer', 'i:1749634704;', 1749634704),
('livewire-rate-limiter:4533078e7ae4d537a494ec3067cb71eb7e90e901', 'i:1;', 1753839095),
('livewire-rate-limiter:4533078e7ae4d537a494ec3067cb71eb7e90e901:timer', 'i:1753839095;', 1753839095),
('livewire-rate-limiter:4ba6590589ec358c9c9cfc8f40f9dc233a457403', 'i:1;', 1742274414),
('livewire-rate-limiter:4ba6590589ec358c9c9cfc8f40f9dc233a457403:timer', 'i:1742274414;', 1742274414),
('livewire-rate-limiter:4ef6dadb34fd4cc2caaeab3f22efbbcb70ae407b', 'i:1;', 1746024451),
('livewire-rate-limiter:4ef6dadb34fd4cc2caaeab3f22efbbcb70ae407b:timer', 'i:1746024451;', 1746024451),
('livewire-rate-limiter:5000978b1b8e1ce91bd4f99ffe835a7617b9dfec', 'i:2;', 1747572942),
('livewire-rate-limiter:5000978b1b8e1ce91bd4f99ffe835a7617b9dfec:timer', 'i:1747572942;', 1747572942),
('livewire-rate-limiter:50bf4aba76ec9f02026b08d225a17071303d0fec', 'i:1;', 1751275050),
('livewire-rate-limiter:50bf4aba76ec9f02026b08d225a17071303d0fec:timer', 'i:1751275050;', 1751275050),
('livewire-rate-limiter:5324742cd319fa7320bc81d689b5ad5d5ab15f11', 'i:1;', 1740586822),
('livewire-rate-limiter:5324742cd319fa7320bc81d689b5ad5d5ab15f11:timer', 'i:1740586822;', 1740586822),
('livewire-rate-limiter:55c7d60cbb7582d67c8f03cf0d7196fb42e8f531', 'i:1;', 1753844038),
('livewire-rate-limiter:55c7d60cbb7582d67c8f03cf0d7196fb42e8f531:timer', 'i:1753844038;', 1753844038),
('livewire-rate-limiter:56f25d12cade9d93308fbc7d42afcd9bb80074e1', 'i:1;', 1746436698),
('livewire-rate-limiter:56f25d12cade9d93308fbc7d42afcd9bb80074e1:timer', 'i:1746436698;', 1746436698),
('livewire-rate-limiter:5b6e61628803f07e7bb729dd20c4d7e4fe903ec2', 'i:1;', 1754270304),
('livewire-rate-limiter:5b6e61628803f07e7bb729dd20c4d7e4fe903ec2:timer', 'i:1754270304;', 1754270304),
('livewire-rate-limiter:5de4b2d4936f82987fd414a8b17d8737d8f70e29', 'i:1;', 1739981515),
('livewire-rate-limiter:5de4b2d4936f82987fd414a8b17d8737d8f70e29:timer', 'i:1739981515;', 1739981515),
('livewire-rate-limiter:5e43b623d2febb1e883302b04061d148f16684f3', 'i:1;', 1747562895),
('livewire-rate-limiter:5e43b623d2febb1e883302b04061d148f16684f3:timer', 'i:1747562895;', 1747562895),
('livewire-rate-limiter:6111fe3514655cf7f39acc38622457de9dff36dc', 'i:1;', 1750413064),
('livewire-rate-limiter:6111fe3514655cf7f39acc38622457de9dff36dc:timer', 'i:1750413064;', 1750413064),
('livewire-rate-limiter:6634518ee62a467e7f4e0a5a8e1ec457df7a5125', 'i:1;', 1749024086),
('livewire-rate-limiter:6634518ee62a467e7f4e0a5a8e1ec457df7a5125:timer', 'i:1749024086;', 1749024086),
('livewire-rate-limiter:674906fc7f64c05515bf4b77402d3d9dd95dd619', 'i:1;', 1749709349),
('livewire-rate-limiter:674906fc7f64c05515bf4b77402d3d9dd95dd619:timer', 'i:1749709349;', 1749709349),
('livewire-rate-limiter:6d5a71a5e4e2500803d912ca3e2820e176976b6f', 'i:1;', 1745911401),
('livewire-rate-limiter:6d5a71a5e4e2500803d912ca3e2820e176976b6f:timer', 'i:1745911401;', 1745911401),
('livewire-rate-limiter:759c48fffc6d5d318e7e8ce2ba0adbcf7694dcb3', 'i:1;', 1754435503),
('livewire-rate-limiter:759c48fffc6d5d318e7e8ce2ba0adbcf7694dcb3:timer', 'i:1754435503;', 1754435503),
('livewire-rate-limiter:7aa2ee060904a169de3ebf76943b4f283e85611b', 'i:1;', 1750732873),
('livewire-rate-limiter:7aa2ee060904a169de3ebf76943b4f283e85611b:timer', 'i:1750732873;', 1750732873),
('livewire-rate-limiter:7e387117708d8cc6714edd1aaebcba2ca00e4570', 'i:1;', 1750658731),
('livewire-rate-limiter:7e387117708d8cc6714edd1aaebcba2ca00e4570:timer', 'i:1750658731;', 1750658731),
('livewire-rate-limiter:7fde539979e9b803063968281aa5ce05f97c3d52', 'i:1;', 1742868449),
('livewire-rate-limiter:7fde539979e9b803063968281aa5ce05f97c3d52:timer', 'i:1742868449;', 1742868449),
('livewire-rate-limiter:7ff8cef9976fb42e1a1e58df30fa5766c89cdf63', 'i:1;', 1739802610),
('livewire-rate-limiter:7ff8cef9976fb42e1a1e58df30fa5766c89cdf63:timer', 'i:1739802610;', 1739802610),
('livewire-rate-limiter:8186fe8b04a2c2ad49b1c5b0ccb68a34df7a08c8', 'i:1;', 1753504224),
('livewire-rate-limiter:8186fe8b04a2c2ad49b1c5b0ccb68a34df7a08c8:timer', 'i:1753504224;', 1753504224),
('livewire-rate-limiter:821930a45102b5fc69149052c3e54627378a7f36', 'i:1;', 1741936050),
('livewire-rate-limiter:821930a45102b5fc69149052c3e54627378a7f36:timer', 'i:1741936050;', 1741936050),
('livewire-rate-limiter:82c4619d33c73181c5eca219ecec7fc371549a27', 'i:2;', 1750736299),
('livewire-rate-limiter:82c4619d33c73181c5eca219ecec7fc371549a27:timer', 'i:1750736299;', 1750736299),
('livewire-rate-limiter:82cde4fe765b12816c12ed39785d61dc68bf3703', 'i:1;', 1748776362),
('livewire-rate-limiter:82cde4fe765b12816c12ed39785d61dc68bf3703:timer', 'i:1748776362;', 1748776362),
('livewire-rate-limiter:83eb5f7124c578b04523853d3035b1fbdc9228cd', 'i:1;', 1745462014),
('livewire-rate-limiter:83eb5f7124c578b04523853d3035b1fbdc9228cd:timer', 'i:1745462014;', 1745462014),
('livewire-rate-limiter:83f7295e4e9e0319462cab8e58c85885cf3736e0', 'i:1;', 1744768272),
('livewire-rate-limiter:83f7295e4e9e0319462cab8e58c85885cf3736e0:timer', 'i:1744768272;', 1744768272),
('livewire-rate-limiter:84ae3cece1fe735653ed6cc770a8b0bb1637b405', 'i:1;', 1747214721),
('livewire-rate-limiter:84ae3cece1fe735653ed6cc770a8b0bb1637b405:timer', 'i:1747214721;', 1747214721),
('livewire-rate-limiter:883fa90a0ac1859ceb11edfc4f7d2667ab1ce77d', 'i:1;', 1752384390),
('livewire-rate-limiter:883fa90a0ac1859ceb11edfc4f7d2667ab1ce77d:timer', 'i:1752384390;', 1752384390),
('livewire-rate-limiter:8b055deb404f32b569616a495da4c061d7a3774c', 'i:1;', 1753945487),
('livewire-rate-limiter:8b055deb404f32b569616a495da4c061d7a3774c:timer', 'i:1753945487;', 1753945487),
('livewire-rate-limiter:8dbc06bc90b43fd5ca72a462b0b09c7bc17abccf', 'i:3;', 1751871250),
('livewire-rate-limiter:8dbc06bc90b43fd5ca72a462b0b09c7bc17abccf:timer', 'i:1751871250;', 1751871250),
('livewire-rate-limiter:90eefa1388ffb32f9311cd2ffbf4dab44371aff1', 'i:1;', 1746574319),
('livewire-rate-limiter:90eefa1388ffb32f9311cd2ffbf4dab44371aff1:timer', 'i:1746574319;', 1746574319),
('livewire-rate-limiter:970e3d18339c3c41eec12700f540330836f69f31', 'i:1;', 1747760520),
('livewire-rate-limiter:970e3d18339c3c41eec12700f540330836f69f31:timer', 'i:1747760520;', 1747760520),
('livewire-rate-limiter:98840edbcb09c7d44a810c36f3015369c7069b61', 'i:1;', 1753918811),
('livewire-rate-limiter:98840edbcb09c7d44a810c36f3015369c7069b61:timer', 'i:1753918811;', 1753918811),
('livewire-rate-limiter:98f4ac0eca7c5df29cf5aa2812fd4c99753c9c71', 'i:1;', 1741576990),
('livewire-rate-limiter:98f4ac0eca7c5df29cf5aa2812fd4c99753c9c71:timer', 'i:1741576990;', 1741576990),
('livewire-rate-limiter:9a43247e9d142455d68f91b0079fee3dbdb3f49c', 'i:1;', 1751530129),
('livewire-rate-limiter:9a43247e9d142455d68f91b0079fee3dbdb3f49c:timer', 'i:1751530129;', 1751530129),
('livewire-rate-limiter:9e1ddbda9042316714cea19a2ebf5a760c809e9b', 'i:1;', 1754462755),
('livewire-rate-limiter:9e1ddbda9042316714cea19a2ebf5a760c809e9b:timer', 'i:1754462755;', 1754462755),
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1739788195),
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1739788195;', 1739788195),
('livewire-rate-limiter:a68600c1c3144018b7f5fa1372cd101b90a04c46', 'i:1;', 1753448947),
('livewire-rate-limiter:a68600c1c3144018b7f5fa1372cd101b90a04c46:timer', 'i:1753448947;', 1753448947),
('livewire-rate-limiter:a87d9a1f236fe2a4ad4b42c276d7fa35d53e042a', 'i:1;', 1740584847),
('livewire-rate-limiter:a87d9a1f236fe2a4ad4b42c276d7fa35d53e042a:timer', 'i:1740584847;', 1740584847),
('livewire-rate-limiter:a99a290312bdbb8f6dc2384ceed96d67343c1357', 'i:1;', 1749907270),
('livewire-rate-limiter:a99a290312bdbb8f6dc2384ceed96d67343c1357:timer', 'i:1749907270;', 1749907270),
('livewire-rate-limiter:afac4d4792b86951ea0e25046718a0b73ae55571', 'i:1;', 1747446722),
('livewire-rate-limiter:afac4d4792b86951ea0e25046718a0b73ae55571:timer', 'i:1747446722;', 1747446722),
('livewire-rate-limiter:b268984f83a270ea9e4d9ae0a1c6c25d2016ca05', 'i:1;', 1751290078),
('livewire-rate-limiter:b268984f83a270ea9e4d9ae0a1c6c25d2016ca05:timer', 'i:1751290078;', 1751290078),
('livewire-rate-limiter:b292fcf612fa4bf9781735c3d210953f19264bbd', 'i:1;', 1752128111),
('livewire-rate-limiter:b292fcf612fa4bf9781735c3d210953f19264bbd:timer', 'i:1752128111;', 1752128111),
('livewire-rate-limiter:b49af733615650be69f1b2c03f6e82b2d07c2fa3', 'i:1;', 1744861633),
('livewire-rate-limiter:b49af733615650be69f1b2c03f6e82b2d07c2fa3:timer', 'i:1744861633;', 1744861633),
('livewire-rate-limiter:b8ed02350d5f807b2a5e41312a00f312e5dbed8f', 'i:1;', 1751821866),
('livewire-rate-limiter:b8ed02350d5f807b2a5e41312a00f312e5dbed8f:timer', 'i:1751821866;', 1751821866),
('livewire-rate-limiter:bd4f85ac68841136dbb8effddd60c0b5ecd1c934', 'i:1;', 1745802923),
('livewire-rate-limiter:bd4f85ac68841136dbb8effddd60c0b5ecd1c934:timer', 'i:1745802923;', 1745802923),
('livewire-rate-limiter:c24a6a29b32e28c9bd098d696eaa8555120a5162', 'i:1;', 1745854479),
('livewire-rate-limiter:c24a6a29b32e28c9bd098d696eaa8555120a5162:timer', 'i:1745854479;', 1745854479),
('livewire-rate-limiter:c5d992f158738d5966eece7cb0d9849cf1f73991', 'i:1;', 1748233975),
('livewire-rate-limiter:c5d992f158738d5966eece7cb0d9849cf1f73991:timer', 'i:1748233975;', 1748233975),
('livewire-rate-limiter:c711cb3cc7ac8ce99c64d1f41cf0c7013c4f68ba', 'i:1;', 1754436606),
('livewire-rate-limiter:c711cb3cc7ac8ce99c64d1f41cf0c7013c4f68ba:timer', 'i:1754436606;', 1754436606),
('livewire-rate-limiter:c810a0521b4bbaa533e4647b7dbb2bd66a79252a', 'i:1;', 1744956306),
('livewire-rate-limiter:c810a0521b4bbaa533e4647b7dbb2bd66a79252a:timer', 'i:1744956306;', 1744956306),
('livewire-rate-limiter:caba7d0ca2eab8442e01e6f764a17147966d024c', 'i:1;', 1747566973),
('livewire-rate-limiter:caba7d0ca2eab8442e01e6f764a17147966d024c:timer', 'i:1747566973;', 1747566973),
('livewire-rate-limiter:ccdc5311c1f572a22d3ccced0e876881ffbfeb07', 'i:1;', 1745494198),
('livewire-rate-limiter:ccdc5311c1f572a22d3ccced0e876881ffbfeb07:timer', 'i:1745494198;', 1745494198),
('livewire-rate-limiter:cd7fdc8a270fd10932faa6cf1ddf5a49e7a225e3', 'i:1;', 1740711202),
('livewire-rate-limiter:cd7fdc8a270fd10932faa6cf1ddf5a49e7a225e3:timer', 'i:1740711202;', 1740711202),
('livewire-rate-limiter:cdeb8892253eb97900432a1b8b22d79ff7f5060a', 'i:2;', 1741017723),
('livewire-rate-limiter:cdeb8892253eb97900432a1b8b22d79ff7f5060a:timer', 'i:1741017723;', 1741017723),
('livewire-rate-limiter:d2a6e16202995a0b59f787e1a2bfd9607e7566f9', 'i:1;', 1751462658),
('livewire-rate-limiter:d2a6e16202995a0b59f787e1a2bfd9607e7566f9:timer', 'i:1751462658;', 1751462658),
('livewire-rate-limiter:d4c869a69cbb960e48665833c9dbde9d9f176cb2', 'i:1;', 1739840848),
('livewire-rate-limiter:d4c869a69cbb960e48665833c9dbde9d9f176cb2:timer', 'i:1739840848;', 1739840848),
('livewire-rate-limiter:d4d7414575d95ec92ce208d001ec0a86f306c419', 'i:1;', 1748868993),
('livewire-rate-limiter:d4d7414575d95ec92ce208d001ec0a86f306c419:timer', 'i:1748868993;', 1748868993),
('livewire-rate-limiter:d9374463f51f9dfb258702a058635d6702a2cb7e', 'i:1;', 1744765037),
('livewire-rate-limiter:d9374463f51f9dfb258702a058635d6702a2cb7e:timer', 'i:1744765037;', 1744765037),
('livewire-rate-limiter:d9c85b55fbe5225906e960a5839a8c107b637338', 'i:1;', 1750820435),
('livewire-rate-limiter:d9c85b55fbe5225906e960a5839a8c107b637338:timer', 'i:1750820435;', 1750820435),
('livewire-rate-limiter:da77b1a5184e3132733b8e669f56c8dc571e0ef1', 'i:2;', 1745998614),
('livewire-rate-limiter:da77b1a5184e3132733b8e669f56c8dc571e0ef1:timer', 'i:1745998614;', 1745998614),
('livewire-rate-limiter:dc3ac59874dc8451c5c27be34636a17850063bd0', 'i:1;', 1754260957),
('livewire-rate-limiter:dc3ac59874dc8451c5c27be34636a17850063bd0:timer', 'i:1754260957;', 1754260957),
('livewire-rate-limiter:dd39f7f908c78c7aa6fe67ceb3d64172479ccdcd', 'i:1;', 1753416499),
('livewire-rate-limiter:dd39f7f908c78c7aa6fe67ceb3d64172479ccdcd:timer', 'i:1753416499;', 1753416499),
('livewire-rate-limiter:deb34523de6a3d2ca13dc3a34711b5b4ff12602a', 'i:1;', 1744779133),
('livewire-rate-limiter:deb34523de6a3d2ca13dc3a34711b5b4ff12602a:timer', 'i:1744779133;', 1744779133),
('livewire-rate-limiter:e53da604abba1181ce9b5da395de13af88012be4', 'i:1;', 1740082128),
('livewire-rate-limiter:e53da604abba1181ce9b5da395de13af88012be4:timer', 'i:1740082128;', 1740082128),
('livewire-rate-limiter:f3cff7cfc448a5a7709fc52da35e001579efba99', 'i:1;', 1744184213),
('livewire-rate-limiter:f3cff7cfc448a5a7709fc52da35e001579efba99:timer', 'i:1744184213;', 1744184213),
('livewire-rate-limiter:f465f322bea9fa2c11a38a12d8bc8959ea63c119', 'i:1;', 1749610761),
('livewire-rate-limiter:f465f322bea9fa2c11a38a12d8bc8959ea63c119:timer', 'i:1749610761;', 1749610761),
('livewire-rate-limiter:f7ddbb2fe5d44dd6ff58030d37aaaa8bf93a14fa', 'i:1;', 1739948616),
('livewire-rate-limiter:f7ddbb2fe5d44dd6ff58030d37aaaa8bf93a14fa:timer', 'i:1739948616;', 1739948616),
('livewire-rate-limiter:f8405384966520db796b885a44eff5de700b49bd', 'i:1;', 1747632867),
('livewire-rate-limiter:f8405384966520db796b885a44eff5de700b49bd:timer', 'i:1747632867;', 1747632867),
('livewire-rate-limiter:f8f2b3e32a4b210281a3b5b3950d618eb06f81c5', 'i:1;', 1746420642),
('livewire-rate-limiter:f8f2b3e32a4b210281a3b5b3950d618eb06f81c5:timer', 'i:1746420642;', 1746420642),
('livewire-rate-limiter:fbff257a70a16cb474fcc9b57d22c2f1e7bfcdcd', 'i:1;', 1754009861),
('livewire-rate-limiter:fbff257a70a16cb474fcc9b57d22c2f1e7bfcdcd:timer', 'i:1754009861;', 1754009861),
('livewire-rate-limiter:fc10f2bdfe93b955e3fd035c96dbedb4cacf1c18', 'i:1;', 1743730217),
('livewire-rate-limiter:fc10f2bdfe93b955e3fd035c96dbedb4cacf1c18:timer', 'i:1743730217;', 1743730217),
('livewire-rate-limiter:fe3466107b554ce21003809de7176f7ed95db481', 'i:1;', 1747287635),
('livewire-rate-limiter:fe3466107b554ce21003809de7176f7ed95db481:timer', 'i:1747287635;', 1747287635),
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:162:{i:0;a:4:{s:1:\"a\";s:1:\"1\";s:1:\"b\";s:9:\"view_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:1;a:4:{s:1:\"a\";s:1:\"2\";s:1:\"b\";s:13:\"view_any_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:4:{s:1:\"a\";s:1:\"3\";s:1:\"b\";s:11:\"create_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:4:{s:1:\"a\";s:1:\"4\";s:1:\"b\";s:11:\"update_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:4;a:4:{s:1:\"a\";s:1:\"5\";s:1:\"b\";s:11:\"delete_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:4:{s:1:\"a\";s:1:\"6\";s:1:\"b\";s:15:\"delete_any_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:4:{s:1:\"a\";s:1:\"7\";s:1:\"b\";s:13:\"view_category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:7;a:4:{s:1:\"a\";s:1:\"8\";s:1:\"b\";s:17:\"view_any_category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:8;a:4:{s:1:\"a\";s:1:\"9\";s:1:\"b\";s:15:\"create_category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:9;a:4:{s:1:\"a\";s:2:\"10\";s:1:\"b\";s:15:\"update_category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:10;a:4:{s:1:\"a\";s:2:\"11\";s:1:\"b\";s:16:\"restore_category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:11;a:4:{s:1:\"a\";s:2:\"12\";s:1:\"b\";s:20:\"restore_any_category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:12;a:4:{s:1:\"a\";s:2:\"13\";s:1:\"b\";s:18:\"replicate_category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:13;a:4:{s:1:\"a\";s:2:\"14\";s:1:\"b\";s:16:\"reorder_category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:14;a:4:{s:1:\"a\";s:2:\"15\";s:1:\"b\";s:15:\"delete_category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:15;a:4:{s:1:\"a\";s:2:\"16\";s:1:\"b\";s:19:\"delete_any_category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:16;a:4:{s:1:\"a\";s:2:\"17\";s:1:\"b\";s:21:\"force_delete_category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:17;a:4:{s:1:\"a\";s:2:\"18\";s:1:\"b\";s:25:\"force_delete_any_category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:18;a:3:{s:1:\"a\";s:2:\"19\";s:1:\"b\";s:22:\"view_perjalanan::dinas\";s:1:\"c\";s:3:\"web\";}i:19;a:3:{s:1:\"a\";s:2:\"20\";s:1:\"b\";s:26:\"view_any_perjalanan::dinas\";s:1:\"c\";s:3:\"web\";}i:20;a:3:{s:1:\"a\";s:2:\"21\";s:1:\"b\";s:24:\"create_perjalanan::dinas\";s:1:\"c\";s:3:\"web\";}i:21;a:3:{s:1:\"a\";s:2:\"22\";s:1:\"b\";s:24:\"update_perjalanan::dinas\";s:1:\"c\";s:3:\"web\";}i:22;a:3:{s:1:\"a\";s:2:\"23\";s:1:\"b\";s:25:\"restore_perjalanan::dinas\";s:1:\"c\";s:3:\"web\";}i:23;a:3:{s:1:\"a\";s:2:\"24\";s:1:\"b\";s:29:\"restore_any_perjalanan::dinas\";s:1:\"c\";s:3:\"web\";}i:24;a:3:{s:1:\"a\";s:2:\"25\";s:1:\"b\";s:27:\"replicate_perjalanan::dinas\";s:1:\"c\";s:3:\"web\";}i:25;a:3:{s:1:\"a\";s:2:\"26\";s:1:\"b\";s:25:\"reorder_perjalanan::dinas\";s:1:\"c\";s:3:\"web\";}i:26;a:3:{s:1:\"a\";s:2:\"27\";s:1:\"b\";s:24:\"delete_perjalanan::dinas\";s:1:\"c\";s:3:\"web\";}i:27;a:3:{s:1:\"a\";s:2:\"28\";s:1:\"b\";s:28:\"delete_any_perjalanan::dinas\";s:1:\"c\";s:3:\"web\";}i:28;a:3:{s:1:\"a\";s:2:\"29\";s:1:\"b\";s:30:\"force_delete_perjalanan::dinas\";s:1:\"c\";s:3:\"web\";}i:29;a:3:{s:1:\"a\";s:2:\"30\";s:1:\"b\";s:34:\"force_delete_any_perjalanan::dinas\";s:1:\"c\";s:3:\"web\";}i:30;a:4:{s:1:\"a\";s:2:\"31\";s:1:\"b\";s:18:\"view_surat::keluar\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:31;a:4:{s:1:\"a\";s:2:\"32\";s:1:\"b\";s:22:\"view_any_surat::keluar\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:32;a:4:{s:1:\"a\";s:2:\"33\";s:1:\"b\";s:20:\"create_surat::keluar\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:33;a:4:{s:1:\"a\";s:2:\"34\";s:1:\"b\";s:20:\"update_surat::keluar\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:34;a:4:{s:1:\"a\";s:2:\"35\";s:1:\"b\";s:21:\"restore_surat::keluar\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:35;a:4:{s:1:\"a\";s:2:\"36\";s:1:\"b\";s:25:\"restore_any_surat::keluar\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:36;a:4:{s:1:\"a\";s:2:\"37\";s:1:\"b\";s:23:\"replicate_surat::keluar\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:37;a:4:{s:1:\"a\";s:2:\"38\";s:1:\"b\";s:21:\"reorder_surat::keluar\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:38;a:4:{s:1:\"a\";s:2:\"39\";s:1:\"b\";s:20:\"delete_surat::keluar\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:39;a:4:{s:1:\"a\";s:2:\"40\";s:1:\"b\";s:24:\"delete_any_surat::keluar\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:40;a:4:{s:1:\"a\";s:2:\"41\";s:1:\"b\";s:26:\"force_delete_surat::keluar\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:41;a:4:{s:1:\"a\";s:2:\"42\";s:1:\"b\";s:30:\"force_delete_any_surat::keluar\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:42;a:4:{s:1:\"a\";s:2:\"43\";s:1:\"b\";s:9:\"view_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:43;a:4:{s:1:\"a\";s:2:\"44\";s:1:\"b\";s:13:\"view_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:44;a:4:{s:1:\"a\";s:2:\"45\";s:1:\"b\";s:11:\"create_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:45;a:4:{s:1:\"a\";s:2:\"46\";s:1:\"b\";s:11:\"update_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:46;a:4:{s:1:\"a\";s:2:\"47\";s:1:\"b\";s:12:\"restore_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:47;a:4:{s:1:\"a\";s:2:\"48\";s:1:\"b\";s:16:\"restore_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:48;a:4:{s:1:\"a\";s:2:\"49\";s:1:\"b\";s:14:\"replicate_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:49;a:4:{s:1:\"a\";s:2:\"50\";s:1:\"b\";s:12:\"reorder_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:50;a:4:{s:1:\"a\";s:2:\"51\";s:1:\"b\";s:11:\"delete_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:51;a:4:{s:1:\"a\";s:2:\"52\";s:1:\"b\";s:15:\"delete_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:52;a:4:{s:1:\"a\";s:2:\"53\";s:1:\"b\";s:17:\"force_delete_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:53;a:4:{s:1:\"a\";s:2:\"54\";s:1:\"b\";s:21:\"force_delete_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:54;a:4:{s:1:\"a\";s:2:\"55\";s:1:\"b\";s:17:\"view_surat::masuk\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:55;a:4:{s:1:\"a\";s:2:\"56\";s:1:\"b\";s:21:\"view_any_surat::masuk\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:56;a:4:{s:1:\"a\";s:2:\"57\";s:1:\"b\";s:19:\"create_surat::masuk\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:57;a:4:{s:1:\"a\";s:2:\"58\";s:1:\"b\";s:19:\"update_surat::masuk\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:58;a:4:{s:1:\"a\";s:2:\"59\";s:1:\"b\";s:20:\"restore_surat::masuk\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:59;a:4:{s:1:\"a\";s:2:\"60\";s:1:\"b\";s:24:\"restore_any_surat::masuk\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:60;a:4:{s:1:\"a\";s:2:\"61\";s:1:\"b\";s:22:\"replicate_surat::masuk\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:61;a:4:{s:1:\"a\";s:2:\"62\";s:1:\"b\";s:20:\"reorder_surat::masuk\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:62;a:4:{s:1:\"a\";s:2:\"63\";s:1:\"b\";s:19:\"delete_surat::masuk\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:63;a:4:{s:1:\"a\";s:2:\"64\";s:1:\"b\";s:23:\"delete_any_surat::masuk\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:64;a:4:{s:1:\"a\";s:2:\"65\";s:1:\"b\";s:25:\"force_delete_surat::masuk\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:65;a:4:{s:1:\"a\";s:2:\"66\";s:1:\"b\";s:29:\"force_delete_any_surat::masuk\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:66;a:3:{s:1:\"a\";s:2:\"67\";s:1:\"b\";s:22:\"view_perjalanan::dinas\";s:1:\"c\";s:4:\"user\";}i:67;a:3:{s:1:\"a\";s:2:\"68\";s:1:\"b\";s:26:\"view_any_perjalanan::dinas\";s:1:\"c\";s:4:\"user\";}i:68;a:3:{s:1:\"a\";s:2:\"69\";s:1:\"b\";s:24:\"create_perjalanan::dinas\";s:1:\"c\";s:4:\"user\";}i:69;a:3:{s:1:\"a\";s:2:\"70\";s:1:\"b\";s:24:\"update_perjalanan::dinas\";s:1:\"c\";s:4:\"user\";}i:70;a:3:{s:1:\"a\";s:2:\"71\";s:1:\"b\";s:25:\"restore_perjalanan::dinas\";s:1:\"c\";s:4:\"user\";}i:71;a:3:{s:1:\"a\";s:2:\"72\";s:1:\"b\";s:29:\"restore_any_perjalanan::dinas\";s:1:\"c\";s:4:\"user\";}i:72;a:3:{s:1:\"a\";s:2:\"73\";s:1:\"b\";s:27:\"replicate_perjalanan::dinas\";s:1:\"c\";s:4:\"user\";}i:73;a:3:{s:1:\"a\";s:2:\"74\";s:1:\"b\";s:25:\"reorder_perjalanan::dinas\";s:1:\"c\";s:4:\"user\";}i:74;a:3:{s:1:\"a\";s:2:\"75\";s:1:\"b\";s:24:\"delete_perjalanan::dinas\";s:1:\"c\";s:4:\"user\";}i:75;a:3:{s:1:\"a\";s:2:\"76\";s:1:\"b\";s:28:\"delete_any_perjalanan::dinas\";s:1:\"c\";s:4:\"user\";}i:76;a:3:{s:1:\"a\";s:2:\"77\";s:1:\"b\";s:30:\"force_delete_perjalanan::dinas\";s:1:\"c\";s:4:\"user\";}i:77;a:3:{s:1:\"a\";s:2:\"78\";s:1:\"b\";s:34:\"force_delete_any_perjalanan::dinas\";s:1:\"c\";s:4:\"user\";}i:78;a:4:{s:1:\"a\";s:2:\"79\";s:1:\"b\";s:22:\"view_rincian::kategori\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:79;a:4:{s:1:\"a\";s:2:\"80\";s:1:\"b\";s:26:\"view_any_rincian::kategori\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:80;a:4:{s:1:\"a\";s:2:\"81\";s:1:\"b\";s:24:\"create_rincian::kategori\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:81;a:4:{s:1:\"a\";s:2:\"82\";s:1:\"b\";s:24:\"update_rincian::kategori\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:82;a:4:{s:1:\"a\";s:2:\"83\";s:1:\"b\";s:25:\"restore_rincian::kategori\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:83;a:4:{s:1:\"a\";s:2:\"84\";s:1:\"b\";s:29:\"restore_any_rincian::kategori\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:84;a:4:{s:1:\"a\";s:2:\"85\";s:1:\"b\";s:27:\"replicate_rincian::kategori\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:85;a:4:{s:1:\"a\";s:2:\"86\";s:1:\"b\";s:25:\"reorder_rincian::kategori\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:86;a:4:{s:1:\"a\";s:2:\"87\";s:1:\"b\";s:24:\"delete_rincian::kategori\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:87;a:4:{s:1:\"a\";s:2:\"88\";s:1:\"b\";s:28:\"delete_any_rincian::kategori\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:88;a:4:{s:1:\"a\";s:2:\"89\";s:1:\"b\";s:30:\"force_delete_rincian::kategori\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:89;a:4:{s:1:\"a\";s:2:\"90\";s:1:\"b\";s:34:\"force_delete_any_rincian::kategori\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:90;a:4:{s:1:\"a\";s:2:\"91\";s:1:\"b\";s:7:\"view_sk\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:91;a:4:{s:1:\"a\";s:2:\"92\";s:1:\"b\";s:11:\"view_any_sk\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:92;a:4:{s:1:\"a\";s:2:\"93\";s:1:\"b\";s:9:\"create_sk\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:93;a:4:{s:1:\"a\";s:2:\"94\";s:1:\"b\";s:9:\"update_sk\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:94;a:4:{s:1:\"a\";s:2:\"95\";s:1:\"b\";s:10:\"restore_sk\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:95;a:4:{s:1:\"a\";s:2:\"96\";s:1:\"b\";s:14:\"restore_any_sk\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:96;a:4:{s:1:\"a\";s:2:\"97\";s:1:\"b\";s:12:\"replicate_sk\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:97;a:4:{s:1:\"a\";s:2:\"98\";s:1:\"b\";s:10:\"reorder_sk\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:98;a:4:{s:1:\"a\";s:2:\"99\";s:1:\"b\";s:9:\"delete_sk\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:99;a:4:{s:1:\"a\";s:3:\"100\";s:1:\"b\";s:13:\"delete_any_sk\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:100;a:4:{s:1:\"a\";s:3:\"101\";s:1:\"b\";s:15:\"force_delete_sk\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:101;a:4:{s:1:\"a\";s:3:\"102\";s:1:\"b\";s:19:\"force_delete_any_sk\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:102;a:4:{s:1:\"a\";s:3:\"103\";s:1:\"b\";s:24:\"view_sppd::dalam::daerah\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}}i:103;a:4:{s:1:\"a\";s:3:\"104\";s:1:\"b\";s:28:\"view_any_sppd::dalam::daerah\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}}i:104;a:4:{s:1:\"a\";s:3:\"105\";s:1:\"b\";s:26:\"create_sppd::dalam::daerah\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:105;a:4:{s:1:\"a\";s:3:\"106\";s:1:\"b\";s:26:\"update_sppd::dalam::daerah\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:106;a:4:{s:1:\"a\";s:3:\"107\";s:1:\"b\";s:27:\"restore_sppd::dalam::daerah\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:107;a:4:{s:1:\"a\";s:3:\"108\";s:1:\"b\";s:31:\"restore_any_sppd::dalam::daerah\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:108;a:4:{s:1:\"a\";s:3:\"109\";s:1:\"b\";s:29:\"replicate_sppd::dalam::daerah\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:109;a:4:{s:1:\"a\";s:3:\"110\";s:1:\"b\";s:27:\"reorder_sppd::dalam::daerah\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:110;a:4:{s:1:\"a\";s:3:\"111\";s:1:\"b\";s:26:\"delete_sppd::dalam::daerah\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:111;a:4:{s:1:\"a\";s:3:\"112\";s:1:\"b\";s:30:\"delete_any_sppd::dalam::daerah\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:112;a:4:{s:1:\"a\";s:3:\"113\";s:1:\"b\";s:32:\"force_delete_sppd::dalam::daerah\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:113;a:4:{s:1:\"a\";s:3:\"114\";s:1:\"b\";s:36:\"force_delete_any_sppd::dalam::daerah\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:114;a:4:{s:1:\"a\";s:3:\"115\";s:1:\"b\";s:18:\"view_sub::kategori\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:115;a:4:{s:1:\"a\";s:3:\"116\";s:1:\"b\";s:22:\"view_any_sub::kategori\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:116;a:4:{s:1:\"a\";s:3:\"117\";s:1:\"b\";s:20:\"create_sub::kategori\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:117;a:4:{s:1:\"a\";s:3:\"118\";s:1:\"b\";s:20:\"update_sub::kategori\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:118;a:4:{s:1:\"a\";s:3:\"119\";s:1:\"b\";s:21:\"restore_sub::kategori\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:119;a:4:{s:1:\"a\";s:3:\"120\";s:1:\"b\";s:25:\"restore_any_sub::kategori\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:120;a:4:{s:1:\"a\";s:3:\"121\";s:1:\"b\";s:23:\"replicate_sub::kategori\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:121;a:4:{s:1:\"a\";s:3:\"122\";s:1:\"b\";s:21:\"reorder_sub::kategori\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:122;a:4:{s:1:\"a\";s:3:\"123\";s:1:\"b\";s:20:\"delete_sub::kategori\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:123;a:4:{s:1:\"a\";s:3:\"124\";s:1:\"b\";s:24:\"delete_any_sub::kategori\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:124;a:4:{s:1:\"a\";s:3:\"125\";s:1:\"b\";s:26:\"force_delete_sub::kategori\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:125;a:4:{s:1:\"a\";s:3:\"126\";s:1:\"b\";s:30:\"force_delete_any_sub::kategori\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:126;a:4:{s:1:\"a\";s:3:\"127\";s:1:\"b\";s:23:\"view_sppd::luar::daerah\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}}i:127;a:4:{s:1:\"a\";s:3:\"128\";s:1:\"b\";s:27:\"view_any_sppd::luar::daerah\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:128;a:4:{s:1:\"a\";s:3:\"129\";s:1:\"b\";s:25:\"create_sppd::luar::daerah\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:129;a:4:{s:1:\"a\";s:3:\"130\";s:1:\"b\";s:25:\"update_sppd::luar::daerah\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:130;a:4:{s:1:\"a\";s:3:\"131\";s:1:\"b\";s:26:\"restore_sppd::luar::daerah\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:131;a:4:{s:1:\"a\";s:3:\"132\";s:1:\"b\";s:30:\"restore_any_sppd::luar::daerah\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:132;a:4:{s:1:\"a\";s:3:\"133\";s:1:\"b\";s:28:\"replicate_sppd::luar::daerah\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:133;a:4:{s:1:\"a\";s:3:\"134\";s:1:\"b\";s:26:\"reorder_sppd::luar::daerah\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:134;a:4:{s:1:\"a\";s:3:\"135\";s:1:\"b\";s:25:\"delete_sppd::luar::daerah\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:135;a:4:{s:1:\"a\";s:3:\"136\";s:1:\"b\";s:29:\"delete_any_sppd::luar::daerah\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:136;a:4:{s:1:\"a\";s:3:\"137\";s:1:\"b\";s:31:\"force_delete_sppd::luar::daerah\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:137;a:4:{s:1:\"a\";s:3:\"138\";s:1:\"b\";s:35:\"force_delete_any_sppd::luar::daerah\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:138;a:4:{s:1:\"a\";s:3:\"139\";s:1:\"b\";s:16:\"view_surat::izin\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:139;a:4:{s:1:\"a\";s:3:\"140\";s:1:\"b\";s:20:\"view_any_surat::izin\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:140;a:4:{s:1:\"a\";s:3:\"141\";s:1:\"b\";s:18:\"create_surat::izin\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:141;a:4:{s:1:\"a\";s:3:\"142\";s:1:\"b\";s:18:\"update_surat::izin\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:142;a:4:{s:1:\"a\";s:3:\"143\";s:1:\"b\";s:19:\"restore_surat::izin\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:143;a:4:{s:1:\"a\";s:3:\"144\";s:1:\"b\";s:23:\"restore_any_surat::izin\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:144;a:4:{s:1:\"a\";s:3:\"145\";s:1:\"b\";s:21:\"replicate_surat::izin\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:145;a:4:{s:1:\"a\";s:3:\"146\";s:1:\"b\";s:19:\"reorder_surat::izin\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:146;a:4:{s:1:\"a\";s:3:\"147\";s:1:\"b\";s:18:\"delete_surat::izin\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:147;a:4:{s:1:\"a\";s:3:\"148\";s:1:\"b\";s:22:\"delete_any_surat::izin\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:148;a:4:{s:1:\"a\";s:3:\"149\";s:1:\"b\";s:24:\"force_delete_surat::izin\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:149;a:4:{s:1:\"a\";s:3:\"150\";s:1:\"b\";s:28:\"force_delete_any_surat::izin\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:150;a:3:{s:1:\"a\";s:3:\"151\";s:1:\"b\";s:17:\"view_detail::user\";s:1:\"c\";s:3:\"web\";}i:151;a:3:{s:1:\"a\";s:3:\"152\";s:1:\"b\";s:21:\"view_any_detail::user\";s:1:\"c\";s:3:\"web\";}i:152;a:3:{s:1:\"a\";s:3:\"153\";s:1:\"b\";s:19:\"create_detail::user\";s:1:\"c\";s:3:\"web\";}i:153;a:3:{s:1:\"a\";s:3:\"154\";s:1:\"b\";s:19:\"update_detail::user\";s:1:\"c\";s:3:\"web\";}i:154;a:3:{s:1:\"a\";s:3:\"155\";s:1:\"b\";s:20:\"restore_detail::user\";s:1:\"c\";s:3:\"web\";}i:155;a:3:{s:1:\"a\";s:3:\"156\";s:1:\"b\";s:24:\"restore_any_detail::user\";s:1:\"c\";s:3:\"web\";}i:156;a:3:{s:1:\"a\";s:3:\"157\";s:1:\"b\";s:22:\"replicate_detail::user\";s:1:\"c\";s:3:\"web\";}i:157;a:3:{s:1:\"a\";s:3:\"158\";s:1:\"b\";s:20:\"reorder_detail::user\";s:1:\"c\";s:3:\"web\";}i:158;a:3:{s:1:\"a\";s:3:\"159\";s:1:\"b\";s:19:\"delete_detail::user\";s:1:\"c\";s:3:\"web\";}i:159;a:3:{s:1:\"a\";s:3:\"160\";s:1:\"b\";s:23:\"delete_any_detail::user\";s:1:\"c\";s:3:\"web\";}i:160;a:3:{s:1:\"a\";s:3:\"161\";s:1:\"b\";s:25:\"force_delete_detail::user\";s:1:\"c\";s:3:\"web\";}i:161;a:3:{s:1:\"a\";s:3:\"162\";s:1:\"b\";s:29:\"force_delete_any_detail::user\";s:1:\"c\";s:3:\"web\";}}s:5:\"roles\";a:4:{i:0;a:3:{s:1:\"a\";s:1:\"1\";s:1:\"b\";s:11:\"super_admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";s:1:\"2\";s:1:\"b\";s:5:\"admin\";s:1:\"c\";s:3:\"web\";}i:2;a:3:{s:1:\"a\";s:1:\"4\";s:1:\"b\";s:8:\"operator\";s:1:\"c\";s:3:\"web\";}i:3;a:3:{s:1:\"a\";s:1:\"3\";s:1:\"b\";s:4:\"user\";s:1:\"c\";s:3:\"web\";}}}', 1754577960);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache_locks`
--

INSERT INTO `cache_locks` (`key`, `owner`, `expiration`) VALUES
('laravel-queue-overlap:Filament\\Actions\\Exports\\Jobs\\ExportCsv:export56', 'ElUqV62SdsLf7tTJ', 1736269605);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nomor_kategori`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, '000.1', 'KETATAUSAHAAN DAN KERUMAHTANGGAAN', NULL, NULL),
(2, '000.2', 'PERLENGKAPAN', NULL, NULL),
(3, '000.3', 'PENGADAAN', NULL, NULL),
(4, '000.4', 'PERPUSTAKAAN', NULL, NULL),
(5, '000.5', 'KEARSIPAN', NULL, NULL),
(6, '000.6', 'PERSANDIAN', NULL, NULL),
(7, '000.7', 'PERENCANAAN PEMBANGUNAN', NULL, NULL),
(8, '000.8', 'ORGANISASI DAN TATA LAKSANA', NULL, NULL),
(9, '000.9', 'PENELITIAN, PENGKAJIAN, DAN PENGEMBANGAN', NULL, NULL),
(10, '100.1', 'OTONOMI DAERAH', NULL, NULL),
(11, '100.2', 'PEMERINTAHAN UMUM', NULL, NULL),
(12, '100.3', 'HUKUM', NULL, NULL),
(13, '200.1', 'TATA USAHA NEGARA', NULL, NULL),
(14, '200.2', 'PERBURUHAN', NULL, NULL),
(15, '200.3', 'ARBITRASE', NULL, NULL),
(16, '200.4', 'SENGKETA ADAT', NULL, NULL),
(17, '200.5', 'PERIJINAN', NULL, NULL),
(18, '200.6', 'HAK ATAS KEKAYAAN INTELEKTUAL (HAKI)', NULL, NULL),
(19, '200.7', 'KESATUAN BANGSA DAN POLITIK', NULL, NULL),
(20, '200.8', 'PEMILU', NULL, NULL),
(21, '300.1', 'SATUAN POLISI PAMONG PRAJA', NULL, NULL),
(22, '300.2', 'PENANGGULANGAN BENCANA, PENCARIAN, DAN PERTOLONGAN', NULL, NULL),
(23, '400.1', 'PEMBANGUNAN DAERAH TERTINGGAL', NULL, NULL),
(24, '400.2', 'PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK', NULL, NULL),
(25, '400.3', 'PENDIDIKAN', NULL, NULL),
(26, '400.4', 'KEOLAHRAGAAN', NULL, NULL),
(27, '400.5', 'KEPEMUDAAN', NULL, NULL),
(28, '400.6', 'KEBUDAYAAN', NULL, NULL),
(29, '400.7', 'KESEHATAN', NULL, NULL),
(30, '400.8', 'AGAMA DAN KEPERCAYAAN', NULL, NULL),
(31, '400.9', 'SOSIAL', NULL, NULL),
(32, '400.10', 'PEMBERDAYAAN MASYARAKAT DESA', NULL, NULL),
(33, '400.11', 'PERTAMANAN DAN PEMAKAMAN', NULL, NULL),
(34, '400.12', 'KEPENDUDUKAN DAN CATATAN SIPIL', NULL, NULL),
(35, '400.13', 'KELUARGA BERENCANA', NULL, NULL),
(36, '400.14', 'HUBUNGAN MASYARAKAT', NULL, NULL),
(37, '500.1', 'KETAHANAN PANGAN', NULL, NULL),
(38, '500.2', 'PERDAGANGAN', NULL, NULL),
(39, '500.3', 'KOPERASI DAN USAHA KECIL MENENGAH', NULL, NULL),
(40, '500.4', 'KEHUTANAN', NULL, NULL),
(41, '500.5', 'KELAUTAN DAN PERIKANAN', NULL, NULL),
(42, '500.6', 'PERTANIAN', NULL, NULL),
(43, '500.7', 'PETERNAKAN', NULL, NULL),
(44, '500.8', 'PERKEBUNAN', NULL, NULL),
(45, '500.9', 'PERINDUSTRIAN', NULL, NULL),
(46, '500.10', 'ENERGI DAN SUMBER DAYA MINERAL', NULL, NULL),
(47, '500.11', 'PERHUBUNGAN', NULL, NULL),
(48, '500.12', 'KOMUNIKASI DAN INFORMATIKA', NULL, NULL),
(49, '500.13', 'PARIWISATA DAN EKONOMI KREATIF', NULL, NULL),
(50, '500.14', 'STATISTIK', NULL, NULL),
(51, '500.15', 'KETENAGAKERJAAN', NULL, NULL),
(52, '500.16', 'PENANAMAN MODAL', NULL, NULL),
(53, '500.17', 'PERTANAHAN', NULL, NULL),
(54, '500.18', 'TRANSMIGRASI', NULL, NULL),
(55, '600.1', 'PEKERJAAN UMUM', NULL, NULL),
(56, '600.2', 'PERUMAHAN RAKYAT DAN KAWASAN PEMUKIMAN', NULL, NULL),
(57, '600.3', 'TATA RUANG (TATA KOTA)', NULL, NULL),
(58, '600.4', 'LINGKUNGAN HIDUP', NULL, NULL),
(59, '700.1', 'PENGAWASAN INTERNAL', NULL, NULL),
(60, '800.1', 'SUMBER DAYA MANUSIA', NULL, NULL),
(61, '800.2', 'PENDIDIKAN DAN PELATIHAN', NULL, NULL),
(62, '900.1', 'KEUANGAN DAERAH', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_users`
--

CREATE TABLE `detail_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `pangkat_gol` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_users`
--

INSERT INTO `detail_users` (`id`, `user_id`, `nip`, `pangkat_gol`, `jabatan`, `created_at`, `updated_at`) VALUES
(16, 2, '19760425 200604 1 006', 'Pembina TK I, IV/b', 'Kepala Dinas', '2025-02-27 10:55:41', '2025-02-27 10:56:40'),
(17, 4, '19820116 201004 1 003', 'Pembina, IV/a', 'Kepala Bidang Peternakan', '2025-02-27 10:57:15', '2025-06-12 06:21:39'),
(18, 3, '19790508 200604 1 013', 'Pembina, IV/a', 'Kepala Bidang Tanaman pangan, Perkebunan dan Hortikultura', '2025-02-27 10:57:35', '2025-02-27 10:57:35'),
(19, 5, '19700221 200801 1 008', 'Pembina, IV/a', 'Sekretaris Dinas', '2025-02-27 10:58:00', '2025-02-27 10:58:00'),
(20, 6, '19780825 200801 2 017', 'Pembina, IV/a', 'Kepala Bidang PSP', '2025-02-27 10:58:25', '2025-06-12 05:02:05'),
(21, 7, '19911011 201903 2 008', 'Penata Muda TK I, III/b', 'Analis Dunia Usaha', '2025-02-27 10:58:50', '2025-02-27 10:58:50'),
(22, 8, '19920910 201903 2 011', 'Penata Muda TK I, III/b', 'Analis Dunia Usaha', '2025-02-27 10:59:11', '2025-02-27 10:59:11'),
(23, 9, '19950406 201903 1 003', 'Penata Muda TK I, III/b', 'Kasubag Umum dan Kepegawaian', '2025-02-27 10:59:30', '2025-02-27 10:59:30'),
(24, 10, '19911012 202012 2 015', 'Penata Muda Tk I, III/b', 'Penyuluh Pertanian Ahli Pertama', '2025-02-27 10:59:48', '2025-07-13 06:57:35'),
(25, 11, '19901202 2023211 0 14', 'Penata Muda, /IX', 'Penyuluh Pertanian Ahli Pertama', '2025-02-27 11:00:05', '2025-04-30 02:15:17'),
(26, 12, '19900720 202321 1 014', 'Penata Muda, /IX', 'Penyuluh Pertanian Ahli Pertama', '2025-02-27 11:00:24', '2025-02-27 11:00:24'),
(27, 13, '19920131 202321 1 018', 'Penata Muda, /IX', 'Penyuluh Pertanian Ahli Pertama', '2025-02-27 11:00:44', '2025-02-27 11:00:44'),
(28, 14, '-', '-', 'Staf Dinas Pertanian', '2025-02-27 11:01:13', '2025-02-27 11:01:13'),
(29, 15, '-', '-', 'Staf Dinas Pertanian', '2025-02-27 11:01:39', '2025-02-27 11:01:39'),
(30, 16, '-', '-', 'Staf Dinas Pertanian', '2025-02-27 11:01:56', '2025-02-27 11:01:56'),
(31, 18, '-', '-', 'Staf Dinas Pertanian', '2025-02-27 11:02:12', '2025-02-27 11:02:12'),
(32, 19, '-', '-', 'Penyuluh Pertanian', '2025-02-27 11:03:03', '2025-02-27 11:03:03'),
(33, 29, '19970118 202504 2 008', 'Penata Muda Tk I, III/b', 'Medik Veteriner Ahli Pertama', '2025-03-14 07:07:56', '2025-07-08 07:49:17'),
(34, 20, '19800731 202421 2 001', 'Penata muda/IX', 'Analis Hasil Pasar Pertanian', '2025-03-14 07:15:03', '2025-04-30 02:16:07'),
(35, 31, '-', '-', 'Penyuluh Pertanian', '2025-04-21 01:38:50', '2025-04-21 01:38:50'),
(36, 32, '-', '-', 'Staf Dinas Pertanian', '2025-04-21 01:39:26', '2025-04-21 01:39:26'),
(37, 33, '19820812 200801 2 024', 'Penata, III/c', 'Penelaah Teknis Kebijakan', '2025-04-21 01:45:34', '2025-04-30 02:16:32'),
(38, 23, '-', '-', 'Staf Dinas Pertanian', '2025-04-21 02:41:14', '2025-04-21 02:41:14'),
(39, 25, '-', '-', 'Penyuluh Pertanian', '2025-04-21 02:50:36', '2025-04-21 02:50:36'),
(40, 27, '19841111 202521 1 001', 'Gol. IX', 'Anasli Pasar Hasil Pertanian Ahli Pertama', '2025-04-21 02:50:56', '2025-04-30 02:18:18'),
(41, 34, '19801007 202521 1 001', 'Gol. IX', 'Analis Pasar Hasil Pertanian Ahli Pertama', '2025-04-22 01:00:53', '2025-04-30 02:23:15'),
(42, 35, '-', '-', 'Penyuluh Pertanian', '2025-04-22 01:01:24', '2025-04-22 01:01:24'),
(43, 36, '-', '-', 'Penyuluh Pertanian', '2025-04-22 01:01:54', '2025-04-22 01:01:54'),
(44, 37, '-', '-', 'Penyuluh Pertanian', '2025-04-22 01:02:13', '2025-04-22 01:02:13'),
(45, 38, '-', '-', 'Penyuluh Pertanian', '2025-04-22 01:03:12', '2025-04-22 01:03:12'),
(46, 47, '-', '-', 'Penyuluh Pertanian', '2025-04-22 01:03:24', '2025-04-22 01:03:24'),
(47, 39, '19911212 202521 1 003', 'Gol. IX', 'Analis Pasar Hasil Pertanian Ahli Pertama', '2025-04-22 01:03:40', '2025-04-30 02:21:26'),
(48, 40, '-', '-', 'Penyuluh Pertanian', '2025-04-22 01:04:07', '2025-04-22 01:04:07'),
(49, 24, '-', '-', 'Penyuluh Pertanian', '2025-04-22 01:04:48', '2025-04-22 01:04:48'),
(51, 42, '-', '-', 'Penyuluh Pertanian', '2025-04-22 01:06:03', '2025-04-22 01:06:03'),
(52, 43, '-', '-', 'Penyuluh Pertanian', '2025-04-22 01:06:11', '2025-04-22 01:06:11'),
(53, 44, '-', '-', 'Penyuluh Pertanian', '2025-04-22 01:06:26', '2025-04-22 01:06:26'),
(54, 45, '-', '-', 'Penyuluh Pertanian', '2025-04-22 01:06:44', '2025-04-22 01:06:44'),
(55, 46, '-', '-', 'Penyuluh Pertanian', '2025-04-22 01:06:54', '2025-04-22 01:06:54'),
(56, 26, '19760502 202521 1 001', 'Gol. IX', 'Analis Pasar Hasil Pertanian Ahli Pertama', '2025-04-22 01:22:29', '2025-04-30 02:17:40'),
(57, 48, '-', '-', 'Penyuluh Pertanian', '2025-04-22 01:28:40', '2025-04-22 01:28:40'),
(58, 49, '-', '-', 'Penyuluh Pertanian', '2025-04-22 01:36:50', '2025-04-22 01:36:50'),
(59, 53, '-', '-', 'Penyuluh Pertanian', '2025-04-22 01:51:28', '2025-04-22 01:51:28'),
(60, 54, '19750212 202521 1 003', 'Gol. IX', 'Analis Pasar Hasil Pertanian Ahli Pertama', '2025-04-30 02:14:54', '2025-04-30 02:14:54'),
(61, 55, '19810311 202521 2 001', 'Gol. IX', 'Analis Pasar Hasil Pertanian Ahli Pertama', '2025-04-30 02:19:25', '2025-04-30 02:19:25'),
(62, 41, '19910527 202521 2 001', 'Gol. IX', 'Analis Pasar Hasil Pertanian Ahli Pertama', '2025-04-30 02:20:50', '2025-04-30 02:20:50'),
(63, 56, '19950806 202521 2 002', 'Gol. IX', 'Analis Pasar Hasil Pertanian Ahli Pertama', '2025-04-30 02:22:33', '2025-04-30 02:22:33'),
(64, 57, '-', '-', 'Peternak', '2025-05-16 03:14:20', '2025-05-16 03:14:20'),
(65, 58, '-', '-', 'Peternak', '2025-05-16 03:14:49', '2025-05-16 03:14:49'),
(66, 59, '-', '-', 'Peternak', '2025-05-16 03:15:14', '2025-05-16 03:15:14'),
(67, 60, '-', '-', 'Peternak', '2025-05-16 03:15:33', '2025-05-16 03:15:33'),
(68, 61, '-', '-', 'Peternak', '2025-05-16 03:15:51', '2025-05-16 03:15:51'),
(69, 62, '-', '-', 'Peternak', '2025-05-16 03:16:09', '2025-05-16 03:16:09'),
(70, 62, '-', '-', 'Peternak', '2025-05-16 03:16:33', '2025-05-16 03:16:33'),
(71, 63, '-', '-', 'Peternak', '2025-05-16 03:17:07', '2025-05-16 03:17:07'),
(72, 64, '-', '-', 'Peternak', '2025-05-16 03:17:24', '2025-05-16 03:17:24'),
(73, 65, '-', '-', 'Peternak', '2025-05-16 03:17:57', '2025-05-16 03:17:57'),
(74, 66, '-', '-', 'Peternak', '2025-05-16 03:18:14', '2025-05-16 03:18:14'),
(75, 70, '-', '-', 'Petani', '2025-05-18 07:02:11', '2025-05-18 07:02:11'),
(76, 71, '-', '-', 'Petani', '2025-05-18 11:19:44', '2025-05-18 11:19:44'),
(78, 73, '-', '-', 'Petani', '2025-05-18 11:32:41', '2025-05-18 11:32:41'),
(79, 74, '-', '-', 'Petani', '2025-05-18 11:34:12', '2025-05-18 11:34:12'),
(80, 75, '-', '-', 'Petani', '2025-05-18 11:35:53', '2025-05-18 11:35:53'),
(81, 76, '-', '-', 'Petani', '2025-05-18 11:38:08', '2025-05-18 11:38:08'),
(82, 78, '-', '-', 'Petani', '2025-05-18 11:50:00', '2025-05-18 11:50:00'),
(83, 79, '-', '-', 'Petani', '2025-05-18 11:51:43', '2025-05-18 11:51:43'),
(84, 81, '-', '-', 'Petani', '2025-05-18 11:59:06', '2025-05-18 11:59:06'),
(85, 82, '-', '-', 'Petani', '2025-05-18 12:00:46', '2025-05-18 12:00:46'),
(86, 83, '-', '-', 'Petani', '2025-05-18 12:02:11', '2025-05-18 12:02:11'),
(87, 84, '-', '-', 'Petani', '2025-05-18 12:05:44', '2025-05-18 12:05:44'),
(88, 85, '-', '-', 'Petani', '2025-05-18 12:06:41', '2025-05-18 12:06:41'),
(89, 86, '-', '-', 'Petani', '2025-05-18 12:08:01', '2025-05-18 12:08:01'),
(90, 88, '-', '-', 'Penyuluh Pertanian', '2025-06-02 05:10:55', '2025-06-02 05:10:55'),
(91, 89, '-', '-', 'Penyuluh Pertanian', '2025-06-02 05:20:24', '2025-06-02 05:20:24'),
(92, 28, '-', '-', 'Penyuluh Pertanian', '2025-06-02 05:41:02', '2025-06-02 05:41:02'),
(93, 90, '-', '-', 'Petani Milenial', '2025-06-12 04:57:49', '2025-06-12 04:57:49'),
(94, 91, '-', '-', 'Petani Milenial', '2025-06-12 04:57:58', '2025-06-12 04:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `exports`
--

CREATE TABLE `exports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `completed_at` timestamp NULL DEFAULT NULL,
  `file_disk` varchar(255) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `exporter` varchar(255) NOT NULL,
  `processed_rows` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `total_rows` int(10) UNSIGNED NOT NULL,
  `successful_rows` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exports`
--

INSERT INTO `exports` (`id`, `completed_at`, `file_disk`, `file_name`, `exporter`, `processed_rows`, `total_rows`, `successful_rows`, `user_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 'local', 'export-1-surat-keluars', 'App\\Filament\\Exports\\SuratKeluarExporter', 2, 2, 0, 1, '2025-01-07 02:17:35', '2025-01-07 02:17:45'),
(2, NULL, 'local', 'export-2-surat-keluars', 'App\\Filament\\Exports\\SuratKeluarExporter', 0, 2, 0, 1, '2025-01-07 02:18:18', '2025-01-07 02:18:18'),
(3, NULL, 'local', 'export-3-surat-keluars', 'App\\Filament\\Exports\\SuratKeluarExporter', 0, 2, 0, 1, '2025-01-07 02:19:52', '2025-01-07 02:19:52'),
(4, '2025-01-07 02:20:57', 'local', 'export-4-surat-keluars', 'App\\Filament\\Exports\\SuratKeluarExporter', 2, 2, 2, 1, '2025-01-07 02:20:54', '2025-01-07 02:20:57'),
(5, NULL, 'local', 'export-5-surat-keluars', 'App\\Filament\\Exports\\SuratKeluarExporter', 2, 2, 0, 1, '2025-01-07 02:22:03', '2025-01-07 02:22:12'),
(6, NULL, 'local', 'export-6-surat-keluars', 'App\\Filament\\Exports\\SuratKeluarExporter', 0, 2, 0, 1, '2025-01-07 02:22:59', '2025-01-07 02:22:59'),
(7, NULL, 'local', 'export-7-surat-keluars', 'App\\Filament\\Exports\\SuratKeluarExporter', 0, 2, 0, 1, '2025-01-07 02:23:28', '2025-01-07 02:23:28'),
(8, '2025-01-07 02:23:55', 'local', 'export-8-surat-keluars', 'App\\Filament\\Exports\\SuratKeluarExporter', 2, 2, 2, 1, '2025-01-07 02:23:52', '2025-01-07 02:23:55'),
(9, NULL, 'local', 'export-9-surat-keluars', 'App\\Filament\\Exports\\SuratKeluarExporter', 2, 2, 0, 1, '2025-01-07 02:27:28', '2025-01-07 02:27:39'),
(10, '2025-01-07 02:27:56', 'local', 'export-10-surat-keluars', 'App\\Filament\\Exports\\SuratKeluarExporter', 2, 2, 2, 1, '2025-01-07 02:27:56', '2025-01-07 02:27:56'),
(11, '2025-01-07 02:28:36', 'local', 'export-11-surat-keluars', 'App\\Filament\\Exports\\SuratKeluarExporter', 2, 2, 2, 1, '2025-01-07 02:28:35', '2025-01-07 02:28:36'),
(12, NULL, 'local', 'export-12-surat-keluars', 'App\\Filament\\Exports\\SuratKeluarExporter', 2, 2, 0, 1, '2025-01-07 02:30:40', '2025-01-07 02:30:50'),
(13, NULL, 'local', 'export-13-surat-keluars', 'App\\Filament\\Exports\\SuratKeluarExporter', 2, 2, 0, 1, '2025-01-07 02:31:38', '2025-01-07 02:31:46'),
(14, '2025-01-07 02:32:46', 'local', 'export-14-surat-keluars', 'App\\Filament\\Exports\\SuratKeluarExporter', 2, 2, 2, 1, '2025-01-07 02:32:45', '2025-01-07 02:32:46'),
(15, '2025-01-07 02:34:02', 'local', 'export-15-surat-keluars', 'App\\Filament\\Exports\\SuratKeluarExporter', 2, 2, 2, 1, '2025-01-07 02:34:00', '2025-01-07 02:34:02'),
(16, '2025-01-07 02:53:51', 'local', 'export-16-surat-keluars', 'App\\Filament\\Exports\\SuratKeluarExporter', 1, 1, 1, 1, '2025-01-07 02:53:49', '2025-01-07 02:53:51'),
(17, NULL, 'local', 'export-17-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 0, 1, 0, 1, '2025-01-07 07:28:11', '2025-01-07 07:28:11'),
(18, '2025-01-07 07:28:48', 'local', 'export-18-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 1, 1, 1, 1, '2025-01-07 07:28:47', '2025-01-07 07:28:48'),
(19, '2025-01-07 07:33:32', 'local', 'export-19-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 1, 1, 1, 1, '2025-01-07 07:33:29', '2025-01-07 07:33:32'),
(20, NULL, 'local', 'export-20-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 1, 1, 0, 1, '2025-01-07 07:35:42', '2025-01-07 07:35:48'),
(21, NULL, 'local', 'export-21-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 1, 1, 0, 1, '2025-01-07 07:37:33', '2025-01-07 07:37:38'),
(22, '2025-01-07 07:38:46', 'local', 'export-22-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 1, 1, 1, 1, '2025-01-07 07:38:44', '2025-01-07 07:38:46'),
(23, NULL, 'local', 'export-23-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 1, 1, 0, 1, '2025-01-07 07:41:27', '2025-01-07 07:41:34'),
(24, NULL, 'local', 'export-24-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 1, 1, 0, 1, '2025-01-07 07:44:04', '2025-01-07 07:44:10'),
(25, '2025-01-07 07:49:21', 'local', 'export-25-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 1, 1, 1, 1, '2025-01-07 07:46:25', '2025-01-07 07:49:21'),
(26, '2025-01-07 07:49:39', 'local', 'export-26-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 1, 1, 1, 1, '2025-01-07 07:49:36', '2025-01-07 07:49:39'),
(27, '2025-01-07 07:50:50', 'local', 'export-27-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 1, 1, 1, 1, '2025-01-07 07:50:50', '2025-01-07 07:50:50'),
(28, '2025-01-07 07:52:24', 'local', 'export-28-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 1, 1, 1, 1, '2025-01-07 07:52:21', '2025-01-07 07:52:24'),
(29, '2025-01-07 07:54:50', 'local', 'export-29-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 1, 1, 1, 1, '2025-01-07 07:54:48', '2025-01-07 07:54:50'),
(30, '2025-01-07 07:55:26', 'local', 'export-30-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 2, 2, 2, 1, '2025-01-07 07:55:26', '2025-01-07 07:55:26'),
(31, '2025-01-07 07:57:47', 'local', 'export-31-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 3, 3, 3, 1, '2025-01-07 07:57:45', '2025-01-07 07:57:47'),
(32, NULL, 'local', 'export-32-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 3, 3, 0, 1, '2025-01-07 08:00:39', '2025-01-07 08:02:20'),
(33, '2025-01-07 08:02:18', 'local', 'export-33-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 3, 3, 3, 1, '2025-01-07 08:02:04', '2025-01-07 08:02:18'),
(34, '2025-01-07 08:03:47', 'local', 'export-34-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 2, 2, 2, 1, '2025-01-07 08:03:45', '2025-01-07 08:03:47'),
(35, NULL, 'local', 'export-35-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 0, 2, 0, 1, '2025-01-07 08:09:18', '2025-01-07 08:09:18'),
(36, NULL, 'local', 'export-36-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 0, 2, 0, 1, '2025-01-07 08:09:45', '2025-01-07 08:09:45'),
(37, NULL, 'local', 'export-37-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 0, 2, 0, 1, '2025-01-07 08:10:40', '2025-01-07 08:10:40'),
(38, NULL, 'local', 'export-38-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 0, 2, 0, 1, '2025-01-07 08:11:55', '2025-01-07 08:11:55'),
(39, NULL, 'local', 'export-39-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 0, 2, 0, 1, '2025-01-07 08:12:55', '2025-01-07 08:12:55'),
(40, '2025-01-07 08:13:30', 'local', 'export-40-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 2, 2, 2, 1, '2025-01-07 08:13:29', '2025-01-07 08:13:30'),
(41, NULL, 'local', 'export-41-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 2, 2, 0, 1, '2025-01-07 08:14:20', '2025-01-07 08:14:26'),
(42, NULL, 'local', 'export-42-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 2, 2, 0, 1, '2025-01-07 08:16:59', '2025-01-07 08:17:03'),
(43, NULL, 'local', 'export-43-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 2, 2, 0, 1, '2025-01-07 08:18:01', '2025-01-07 08:18:05'),
(44, '2025-01-07 08:30:53', 'local', 'export-44-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 2, 2, 2, 1, '2025-01-07 08:30:51', '2025-01-07 08:30:53'),
(45, NULL, 'local', 'export-45-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 2, 2, 0, 1, '2025-01-07 08:31:51', '2025-01-07 08:32:00'),
(46, '2025-01-07 08:32:35', 'local', 'export-46-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 2, 2, 2, 1, '2025-01-07 08:32:34', '2025-01-07 08:32:35'),
(47, '2025-01-07 08:36:17', 'local', 'export-47-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 2, 2, 2, 1, '2025-01-07 08:36:16', '2025-01-07 08:36:17'),
(48, '2025-01-07 08:41:08', 'local', 'export-48-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 2, 2, 2, 1, '2025-01-07 08:41:05', '2025-01-07 08:41:08'),
(49, '2025-01-07 08:44:08', 'local', 'export-49-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 2, 2, 2, 1, '2025-01-07 08:44:08', '2025-01-07 08:44:08'),
(50, '2025-01-07 08:45:29', 'local', 'export-50-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 2, 2, 2, 1, '2025-01-07 08:45:29', '2025-01-07 08:45:29'),
(51, '2025-01-07 08:48:12', 'local', 'export-51-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 2, 2, 2, 1, '2025-01-07 08:48:09', '2025-01-07 08:48:12'),
(52, '2025-01-07 08:49:33', 'local', 'export-52-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 2, 2, 2, 1, '2025-01-07 08:49:31', '2025-01-07 08:49:33'),
(53, '2025-01-07 08:51:13', 'local', 'export-53-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 2, 2, 2, 1, '2025-01-07 08:51:11', '2025-01-07 08:51:13'),
(54, '2025-01-07 08:52:43', 'local', 'export-54-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 2, 2, 2, 1, '2025-01-07 08:52:41', '2025-01-07 08:52:43'),
(55, NULL, 'local', 'export-55-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 2, 2, 0, 1, '2025-01-07 08:54:05', '2025-01-07 08:54:16'),
(56, NULL, 'local', 'export-56-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 2, 2, 0, 1, '2025-01-07 08:56:41', '2025-01-07 08:56:45'),
(57, '2025-01-07 09:05:52', 'local', 'export-57-surat-masuks', 'App\\Filament\\Exports\\SuratMasukExporter', 2, 2, 2, 1, '2025-01-07 09:05:51', '2025-01-07 09:05:52'),
(58, '2025-01-08 05:30:03', 'local', 'export-58-surat-keluars', 'App\\Filament\\Exports\\SuratKeluarExporter', 1, 1, 1, 1, '2025-01-08 05:29:07', '2025-01-08 05:30:03'),
(59, '2025-01-08 05:30:03', 'local', 'export-59-surat-keluars', 'App\\Filament\\Exports\\SuratKeluarExporter', 1, 1, 1, 1, '2025-01-08 05:29:48', '2025-01-08 05:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_import_rows`
--

CREATE TABLE `failed_import_rows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `import_id` bigint(20) UNSIGNED NOT NULL,
  `validation_error` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `imports`
--

CREATE TABLE `imports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `completed_at` timestamp NULL DEFAULT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `importer` varchar(255) NOT NULL,
  `processed_rows` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `total_rows` int(10) UNSIGNED NOT NULL,
  `successful_rows` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_batches`
--

INSERT INTO `job_batches` (`id`, `name`, `total_jobs`, `pending_jobs`, `failed_jobs`, `failed_job_ids`, `options`, `cancelled_at`, `created_at`, `finished_at`) VALUES
('9de91afd-7ca0-44b8-9825-b7fd320892cd', '', 2, 1, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5750:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:17:35\";s:10:\"created_at\";s:19:\"2025-01-07 10:17:35\";s:2:\"id\";i:1;s:9:\"file_name\";s:22:\"export-1-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:17:35\";s:10:\"created_at\";s:19:\"2025-01-07 10:17:35\";s:2:\"id\";i:1;s:9:\"file_name\";s:22:\"export-1-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-1-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"ID\";s:14:\"combined_nomor\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:1;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"ID\";s:14:\"combined_nomor\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2526:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:17:35\";s:10:\"created_at\";s:19:\"2025-01-07 10:17:35\";s:2:\"id\";i:1;s:9:\"file_name\";s:22:\"export-1-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:17:35\";s:10:\"created_at\";s:19:\"2025-01-07 10:17:35\";s:2:\"id\";i:1;s:9:\"file_name\";s:22:\"export-1-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-1-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"ID\";s:14:\"combined_nomor\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:1;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"ID\";s:14:\"combined_nomor\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009000000000000000000\";}\";s:4:\"hash\";s:44:\"JvVaIb9B3R+QtTDHfcAbNU1a+wyrRPkd+Ng+lmk5pbk=\";}}}}', NULL, 1736245057, NULL),
('9de91c2e-431d-40c4-8076-f0c5e430537e', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5922:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:20:54\";s:10:\"created_at\";s:19:\"2025-01-07 10:20:54\";s:2:\"id\";i:4;s:9:\"file_name\";s:22:\"export-4-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:20:54\";s:10:\"created_at\";s:19:\"2025-01-07 10:20:54\";s:2:\"id\";i:4;s:9:\"file_name\";s:22:\"export-4-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-4-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:8:{s:2:\"id\";s:2:\"ID\";s:23:\"category.nomor_kategori\";s:8:\"Category\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:4;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:8:{s:2:\"id\";s:2:\"ID\";s:23:\"category.nomor_kategori\";s:8:\"Category\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2612:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:20:54\";s:10:\"created_at\";s:19:\"2025-01-07 10:20:54\";s:2:\"id\";i:4;s:9:\"file_name\";s:22:\"export-4-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:20:54\";s:10:\"created_at\";s:19:\"2025-01-07 10:20:54\";s:2:\"id\";i:4;s:9:\"file_name\";s:22:\"export-4-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-4-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:8:{s:2:\"id\";s:2:\"ID\";s:23:\"category.nomor_kategori\";s:8:\"Category\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:4;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:8:{s:2:\"id\";s:2:\"ID\";s:23:\"category.nomor_kategori\";s:8:\"Category\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009000000000000000000\";}\";s:4:\"hash\";s:44:\"32LT0PGG3xscHMq4NfFyyy7ksFCbSxWl4TkIzVfpx1I=\";}}}}', NULL, 1736245257, 1736245257),
('9de91c93-7a28-40c5-8697-b53b34eff27c', '', 2, 1, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5750:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:22:03\";s:10:\"created_at\";s:19:\"2025-01-07 10:22:03\";s:2:\"id\";i:5;s:9:\"file_name\";s:22:\"export-5-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:22:03\";s:10:\"created_at\";s:19:\"2025-01-07 10:22:03\";s:2:\"id\";i:5;s:9:\"file_name\";s:22:\"export-5-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-5-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"ID\";s:14:\"combined_nomor\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:5;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"ID\";s:14:\"combined_nomor\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2526:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:22:03\";s:10:\"created_at\";s:19:\"2025-01-07 10:22:03\";s:2:\"id\";i:5;s:9:\"file_name\";s:22:\"export-5-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:22:03\";s:10:\"created_at\";s:19:\"2025-01-07 10:22:03\";s:2:\"id\";i:5;s:9:\"file_name\";s:22:\"export-5-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-5-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"ID\";s:14:\"combined_nomor\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:5;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"ID\";s:14:\"combined_nomor\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"000000000000095c0000000000000000\";}\";s:4:\"hash\";s:44:\"psHX2nCRGa7cxNcaGWukC9aiNyx/S6RJBwIpkUN6W7g=\";}}}}', NULL, 1736245323, NULL),
('9de91d3d-5f81-4b9a-b909-527706d7911b', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5922:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:23:52\";s:10:\"created_at\";s:19:\"2025-01-07 10:23:52\";s:2:\"id\";i:8;s:9:\"file_name\";s:22:\"export-8-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:23:52\";s:10:\"created_at\";s:19:\"2025-01-07 10:23:52\";s:2:\"id\";i:8;s:9:\"file_name\";s:22:\"export-8-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-8-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:8:{s:2:\"id\";s:2:\"ID\";s:23:\"category.nomor_kategori\";s:8:\"Category\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:8;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:8:{s:2:\"id\";s:2:\"ID\";s:23:\"category.nomor_kategori\";s:8:\"Category\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2612:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:23:52\";s:10:\"created_at\";s:19:\"2025-01-07 10:23:52\";s:2:\"id\";i:8;s:9:\"file_name\";s:22:\"export-8-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:23:52\";s:10:\"created_at\";s:19:\"2025-01-07 10:23:52\";s:2:\"id\";i:8;s:9:\"file_name\";s:22:\"export-8-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-8-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:8:{s:2:\"id\";s:2:\"ID\";s:23:\"category.nomor_kategori\";s:8:\"Category\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:8;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:8:{s:2:\"id\";s:2:\"ID\";s:23:\"category.nomor_kategori\";s:8:\"Category\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009000000000000000000\";}\";s:4:\"hash\";s:44:\"7gHI1kVNZ3lVeQprUsSpbs+bwTq/lEpur1+1K2vEhhg=\";}}}}', NULL, 1736245435, 1736245435),
('9de91e87-c83e-4cc0-aa1c-0e072c911828', '', 2, 1, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5746:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:27:28\";s:10:\"created_at\";s:19:\"2025-01-07 10:27:28\";s:2:\"id\";i:9;s:9:\"file_name\";s:22:\"export-9-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:27:28\";s:10:\"created_at\";s:19:\"2025-01-07 10:27:28\";s:2:\"id\";i:9;s:9:\"file_name\";s:22:\"export-9-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-9-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"ID\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:9;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"ID\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2524:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:27:28\";s:10:\"created_at\";s:19:\"2025-01-07 10:27:28\";s:2:\"id\";i:9;s:9:\"file_name\";s:22:\"export-9-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:27:28\";s:10:\"created_at\";s:19:\"2025-01-07 10:27:28\";s:2:\"id\";i:9;s:9:\"file_name\";s:22:\"export-9-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-9-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"ID\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:9;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"ID\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"000000000000095c0000000000000000\";}\";s:4:\"hash\";s:44:\"NnVmMfO9yGHU4qxnMHfxOWaNP/1/KWk51HiCM1XEENk=\";}}}}', NULL, 1736245651, NULL),
('9de91eae-3bc0-4d1a-a77f-ea77a8e53486', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5758:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:27:56\";s:10:\"created_at\";s:19:\"2025-01-07 10:27:56\";s:2:\"id\";i:10;s:9:\"file_name\";s:23:\"export-10-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:27:56\";s:10:\"created_at\";s:19:\"2025-01-07 10:27:56\";s:2:\"id\";i:10;s:9:\"file_name\";s:23:\"export-10-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:23:\"export-10-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"ID\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:10;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"ID\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2530:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:27:56\";s:10:\"created_at\";s:19:\"2025-01-07 10:27:56\";s:2:\"id\";i:10;s:9:\"file_name\";s:23:\"export-10-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:27:56\";s:10:\"created_at\";s:19:\"2025-01-07 10:27:56\";s:2:\"id\";i:10;s:9:\"file_name\";s:23:\"export-10-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:23:\"export-10-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"ID\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:10;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"ID\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009000000000000000000\";}\";s:4:\"hash\";s:44:\"6SDXfMnwTFMvD0MQyC/ouTIPRDIV4tFWOHiVQa5tyvw=\";}}}}', NULL, 1736245676, 1736245676),
('9de91eea-27d5-40c5-aff9-1e754b090ccc', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5398:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:28:35\";s:10:\"created_at\";s:19:\"2025-01-07 10:28:35\";s:2:\"id\";i:11;s:9:\"file_name\";s:23:\"export-11-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:28:35\";s:10:\"created_at\";s:19:\"2025-01-07 10:28:35\";s:2:\"id\";i:11;s:9:\"file_name\";s:23:\"export-11-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:23:\"export-11-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:4:{s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:11;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:4:{s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2350:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:28:35\";s:10:\"created_at\";s:19:\"2025-01-07 10:28:35\";s:2:\"id\";i:11;s:9:\"file_name\";s:23:\"export-11-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:28:35\";s:10:\"created_at\";s:19:\"2025-01-07 10:28:35\";s:2:\"id\";i:11;s:9:\"file_name\";s:23:\"export-11-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:23:\"export-11-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:4:{s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:11;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:4:{s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009440000000000000000\";}\";s:4:\"hash\";s:44:\"GygmYy6VyxEHmIOoH5quzysNS3AzSTq9n7G1j7F84kE=\";}}}}', NULL, 1736245716, 1736245716);
INSERT INTO `job_batches` (`id`, `name`, `total_jobs`, `pending_jobs`, `failed_jobs`, `failed_job_ids`, `options`, `cancelled_at`, `created_at`, `finished_at`) VALUES
('9de91fab-287e-4128-ab47-91ea3b4df48f', '', 2, 1, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5506:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:30:40\";s:10:\"created_at\";s:19:\"2025-01-07 10:30:40\";s:2:\"id\";i:12;s:9:\"file_name\";s:23:\"export-12-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:30:40\";s:10:\"created_at\";s:19:\"2025-01-07 10:30:40\";s:2:\"id\";i:12;s:9:\"file_name\";s:23:\"export-12-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:23:\"export-12-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:5:{s:10:\"nomor_urut\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:12;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:5:{s:10:\"nomor_urut\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2404:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:30:40\";s:10:\"created_at\";s:19:\"2025-01-07 10:30:40\";s:2:\"id\";i:12;s:9:\"file_name\";s:23:\"export-12-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:30:40\";s:10:\"created_at\";s:19:\"2025-01-07 10:30:40\";s:2:\"id\";i:12;s:9:\"file_name\";s:23:\"export-12-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:23:\"export-12-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:5:{s:10:\"nomor_urut\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:12;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:5:{s:10:\"nomor_urut\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009000000000000000000\";}\";s:4:\"hash\";s:44:\"e7CZOPe3nvZr1QpkEIIs1urvmcMwuy2awBJrF8+ONjo=\";}}}}', NULL, 1736245842, NULL),
('9de92002-01ad-4877-ba7d-21d20a93f82d', '', 2, 1, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5506:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:31:38\";s:10:\"created_at\";s:19:\"2025-01-07 10:31:38\";s:2:\"id\";i:13;s:9:\"file_name\";s:23:\"export-13-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:31:38\";s:10:\"created_at\";s:19:\"2025-01-07 10:31:38\";s:2:\"id\";i:13;s:9:\"file_name\";s:23:\"export-13-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:23:\"export-13-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:5:{s:10:\"nomor_urut\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:13;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:5:{s:10:\"nomor_urut\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2404:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:31:38\";s:10:\"created_at\";s:19:\"2025-01-07 10:31:38\";s:2:\"id\";i:13;s:9:\"file_name\";s:23:\"export-13-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:31:38\";s:10:\"created_at\";s:19:\"2025-01-07 10:31:38\";s:2:\"id\";i:13;s:9:\"file_name\";s:23:\"export-13-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:23:\"export-13-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:5:{s:10:\"nomor_urut\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:13;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:5:{s:10:\"nomor_urut\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009000000000000000000\";}\";s:4:\"hash\";s:44:\"nac8U6KYYXIQhwAx9XQhHS8JxdD9vSv6G2nLG/+sMCU=\";}}}}', NULL, 1736245899, NULL),
('9de92068-bca8-42cd-aa3b-c34e0cec4d6b', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5470:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:32:45\";s:10:\"created_at\";s:19:\"2025-01-07 10:32:45\";s:2:\"id\";i:14;s:9:\"file_name\";s:23:\"export-14-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:32:45\";s:10:\"created_at\";s:19:\"2025-01-07 10:32:45\";s:2:\"id\";i:14;s:9:\"file_name\";s:23:\"export-14-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:23:\"export-14-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:5:{s:2:\"id\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:14;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:5:{s:2:\"id\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2386:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:32:45\";s:10:\"created_at\";s:19:\"2025-01-07 10:32:45\";s:2:\"id\";i:14;s:9:\"file_name\";s:23:\"export-14-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:32:45\";s:10:\"created_at\";s:19:\"2025-01-07 10:32:45\";s:2:\"id\";i:14;s:9:\"file_name\";s:23:\"export-14-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:23:\"export-14-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:5:{s:2:\"id\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:14;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:5:{s:2:\"id\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009000000000000000000\";}\";s:4:\"hash\";s:44:\"LQ+FJS1ev6dH9mPj4agztmG9wL4tZakLWEpU8jlRGRk=\";}}}}', NULL, 1736245966, 1736245966),
('9de920db-ae58-4681-a345-a11f9f3c9cfb', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5470:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:34:00\";s:10:\"created_at\";s:19:\"2025-01-07 10:34:00\";s:2:\"id\";i:15;s:9:\"file_name\";s:23:\"export-15-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:34:00\";s:10:\"created_at\";s:19:\"2025-01-07 10:34:00\";s:2:\"id\";i:15;s:9:\"file_name\";s:23:\"export-15-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:23:\"export-15-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:5:{s:2:\"id\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:15;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:5:{s:2:\"id\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2386:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:34:00\";s:10:\"created_at\";s:19:\"2025-01-07 10:34:00\";s:2:\"id\";i:15;s:9:\"file_name\";s:23:\"export-15-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:34:00\";s:10:\"created_at\";s:19:\"2025-01-07 10:34:00\";s:2:\"id\";i:15;s:9:\"file_name\";s:23:\"export-15-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:23:\"export-15-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:5:{s:2:\"id\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:15;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:5:{s:2:\"id\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009440000000000000000\";}\";s:4:\"hash\";s:44:\"hbt2cXy5WRKKtekDo10VhYpl509e1eNCOIXK+DB4szI=\";}}}}', NULL, 1736246042, 1736246042),
('9de927f2-d1f2-4ce6-880f-4754ee8788f8', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5470:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:53:49\";s:10:\"created_at\";s:19:\"2025-01-07 10:53:49\";s:2:\"id\";i:16;s:9:\"file_name\";s:23:\"export-16-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:53:49\";s:10:\"created_at\";s:19:\"2025-01-07 10:53:49\";s:2:\"id\";i:16;s:9:\"file_name\";s:23:\"export-16-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:23:\"export-16-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:5:{s:2:\"id\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:16;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:5:{s:2:\"id\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2386:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:53:49\";s:10:\"created_at\";s:19:\"2025-01-07 10:53:49\";s:2:\"id\";i:16;s:9:\"file_name\";s:23:\"export-16-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 10:53:49\";s:10:\"created_at\";s:19:\"2025-01-07 10:53:49\";s:2:\"id\";i:16;s:9:\"file_name\";s:23:\"export-16-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:23:\"export-16-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:5:{s:2:\"id\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:16;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:5:{s:2:\"id\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009190000000000000000\";}\";s:4:\"hash\";s:44:\"Oiv9mfIg2h7FAFublQoKuY3VTpAZOWCAkNCPQdntlls=\";}}}}', NULL, 1736247231, 1736247231),
('9de98a46-d7f5-45bf-b45d-8d13a1280dd2', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5698:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:28:47\";s:10:\"created_at\";s:19:\"2025-01-07 15:28:47\";s:2:\"id\";i:18;s:9:\"file_name\";s:22:\"export-18-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:28:47\";s:10:\"created_at\";s:19:\"2025-01-07 15:28:47\";s:2:\"id\";i:18;s:9:\"file_name\";s:22:\"export-18-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-18-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"ID\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:18;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"ID\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2500:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:28:47\";s:10:\"created_at\";s:19:\"2025-01-07 15:28:47\";s:2:\"id\";i:18;s:9:\"file_name\";s:22:\"export-18-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:28:47\";s:10:\"created_at\";s:19:\"2025-01-07 15:28:47\";s:2:\"id\";i:18;s:9:\"file_name\";s:22:\"export-18-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-18-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"ID\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:18;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"ID\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009030000000000000000\";}\";s:4:\"hash\";s:44:\"2fxKmajVKh9rWgH0aPNTNlGvfN9rJnXBzTahxop/Xcg=\";}}}}', NULL, 1736263728, 1736263728),
('9de98bf8-0219-4875-adf3-eee068da635f', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5698:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:33:29\";s:10:\"created_at\";s:19:\"2025-01-07 15:33:29\";s:2:\"id\";i:19;s:9:\"file_name\";s:22:\"export-19-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:33:29\";s:10:\"created_at\";s:19:\"2025-01-07 15:33:29\";s:2:\"id\";i:19;s:9:\"file_name\";s:22:\"export-19-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-19-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:19;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2500:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:33:29\";s:10:\"created_at\";s:19:\"2025-01-07 15:33:29\";s:2:\"id\";i:19;s:9:\"file_name\";s:22:\"export-19-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:33:29\";s:10:\"created_at\";s:19:\"2025-01-07 15:33:29\";s:2:\"id\";i:19;s:9:\"file_name\";s:22:\"export-19-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-19-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:19;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009030000000000000000\";}\";s:4:\"hash\";s:44:\"suxsQigmKAIK0iP8dzuTrS6fzZggk5muE/qHD7x1FaU=\";}}}}', NULL, 1736264012, 1736264012);
INSERT INTO `job_batches` (`id`, `name`, `total_jobs`, `pending_jobs`, `failed_jobs`, `failed_job_ids`, `options`, `cancelled_at`, `created_at`, `finished_at`) VALUES
('9de98cc2-118d-4475-a3fd-b13589101073', '', 2, 1, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5734:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:35:42\";s:10:\"created_at\";s:19:\"2025-01-07 15:35:42\";s:2:\"id\";i:20;s:9:\"file_name\";s:22:\"export-20-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:35:42\";s:10:\"created_at\";s:19:\"2025-01-07 15:35:42\";s:2:\"id\";i:20;s:9:\"file_name\";s:22:\"export-20-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-20-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:10:\"nomor_urut\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:20;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:10:\"nomor_urut\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2518:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:35:42\";s:10:\"created_at\";s:19:\"2025-01-07 15:35:42\";s:2:\"id\";i:20;s:9:\"file_name\";s:22:\"export-20-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:35:42\";s:10:\"created_at\";s:19:\"2025-01-07 15:35:42\";s:2:\"id\";i:20;s:9:\"file_name\";s:22:\"export-20-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-20-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:10:\"nomor_urut\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:20;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:10:\"nomor_urut\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"000000000000096d0000000000000000\";}\";s:4:\"hash\";s:44:\"E2f1c+4mCbJCB5tdx7LVf1BdmPAlcF4921lN3TnYU60=\";}}}}', NULL, 1736264144, NULL),
('9de98d6a-22f5-4821-aea7-91aee9771a8d', '', 2, 1, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5698:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:37:33\";s:10:\"created_at\";s:19:\"2025-01-07 15:37:33\";s:2:\"id\";i:21;s:9:\"file_name\";s:22:\"export-21-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:37:33\";s:10:\"created_at\";s:19:\"2025-01-07 15:37:33\";s:2:\"id\";i:21;s:9:\"file_name\";s:22:\"export-21-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-21-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:21;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2500:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:37:33\";s:10:\"created_at\";s:19:\"2025-01-07 15:37:33\";s:2:\"id\";i:21;s:9:\"file_name\";s:22:\"export-21-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:37:33\";s:10:\"created_at\";s:19:\"2025-01-07 15:37:33\";s:2:\"id\";i:21;s:9:\"file_name\";s:22:\"export-21-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-21-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:21;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009030000000000000000\";}\";s:4:\"hash\";s:44:\"gpEXxtHL4KTQqfa0UqCcR/Nczvt+fIbLYktjmdxB4WY=\";}}}}', NULL, 1736264254, NULL),
('9de98dd7-1da3-4a73-a05e-e1cf379a7552', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5698:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:38:44\";s:10:\"created_at\";s:19:\"2025-01-07 15:38:44\";s:2:\"id\";i:22;s:9:\"file_name\";s:22:\"export-22-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:38:44\";s:10:\"created_at\";s:19:\"2025-01-07 15:38:44\";s:2:\"id\";i:22;s:9:\"file_name\";s:22:\"export-22-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-22-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:22;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2500:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:38:44\";s:10:\"created_at\";s:19:\"2025-01-07 15:38:44\";s:2:\"id\";i:22;s:9:\"file_name\";s:22:\"export-22-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:38:44\";s:10:\"created_at\";s:19:\"2025-01-07 15:38:44\";s:2:\"id\";i:22;s:9:\"file_name\";s:22:\"export-22-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-22-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:22;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009030000000000000000\";}\";s:4:\"hash\";s:44:\"WOM7YKinakhKm+kLTEgKi8ET/yyF07ZWOXbJ3d24K84=\";}}}}', NULL, 1736264326, 1736264326),
('9de98ecf-b843-4320-82c4-9ee0f4a0081f', '', 2, 1, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5698:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:41:27\";s:10:\"created_at\";s:19:\"2025-01-07 15:41:27\";s:2:\"id\";i:23;s:9:\"file_name\";s:22:\"export-23-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:41:27\";s:10:\"created_at\";s:19:\"2025-01-07 15:41:27\";s:2:\"id\";i:23;s:9:\"file_name\";s:22:\"export-23-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-23-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:23;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2500:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:41:27\";s:10:\"created_at\";s:19:\"2025-01-07 15:41:27\";s:2:\"id\";i:23;s:9:\"file_name\";s:22:\"export-23-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:41:27\";s:10:\"created_at\";s:19:\"2025-01-07 15:41:27\";s:2:\"id\";i:23;s:9:\"file_name\";s:22:\"export-23-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-23-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:23;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009030000000000000000\";}\";s:4:\"hash\";s:44:\"8KZu3giTDZU0TL2y88KNeGezCKNnrWyTn4dnTL+GX84=\";}}}}', NULL, 1736264489, NULL),
('9de98fbd-5788-496d-86cc-66eaef489c12', '', 2, 1, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5698:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:44:04\";s:10:\"created_at\";s:19:\"2025-01-07 15:44:04\";s:2:\"id\";i:24;s:9:\"file_name\";s:22:\"export-24-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:44:04\";s:10:\"created_at\";s:19:\"2025-01-07 15:44:04\";s:2:\"id\";i:24;s:9:\"file_name\";s:22:\"export-24-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-24-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:24;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2500:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:44:04\";s:10:\"created_at\";s:19:\"2025-01-07 15:44:04\";s:2:\"id\";i:24;s:9:\"file_name\";s:22:\"export-24-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:44:04\";s:10:\"created_at\";s:19:\"2025-01-07 15:44:04\";s:2:\"id\";i:24;s:9:\"file_name\";s:22:\"export-24-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-24-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:24;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009030000000000000000\";}\";s:4:\"hash\";s:44:\"Cbg8re8r+IWDRtYV9A0i2bN1mWZ1VVVQ9vPzUjeHFEE=\";}}}}', NULL, 1736264644, NULL),
('9de99096-e422-4747-802c-0ec47ce418f6', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5698:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:46:25\";s:10:\"created_at\";s:19:\"2025-01-07 15:46:25\";s:2:\"id\";i:25;s:9:\"file_name\";s:22:\"export-25-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:46:25\";s:10:\"created_at\";s:19:\"2025-01-07 15:46:25\";s:2:\"id\";i:25;s:9:\"file_name\";s:22:\"export-25-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-25-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:25;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2500:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:46:25\";s:10:\"created_at\";s:19:\"2025-01-07 15:46:25\";s:2:\"id\";i:25;s:9:\"file_name\";s:22:\"export-25-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:46:25\";s:10:\"created_at\";s:19:\"2025-01-07 15:46:25\";s:2:\"id\";i:25;s:9:\"file_name\";s:22:\"export-25-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-25-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:25;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009030000000000000000\";}\";s:4:\"hash\";s:44:\"3/unMjyOXm7U85ZqRgQjyDWnfCAvLolUCMDn+3Hi7oY=\";}}}}', NULL, 1736264787, 1736264960),
('9de991bb-6e17-42c3-aac9-f9c7dcf84bc5', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5698:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:49:36\";s:10:\"created_at\";s:19:\"2025-01-07 15:49:36\";s:2:\"id\";i:26;s:9:\"file_name\";s:22:\"export-26-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:49:36\";s:10:\"created_at\";s:19:\"2025-01-07 15:49:36\";s:2:\"id\";i:26;s:9:\"file_name\";s:22:\"export-26-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-26-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:26;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2500:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:49:36\";s:10:\"created_at\";s:19:\"2025-01-07 15:49:36\";s:2:\"id\";i:26;s:9:\"file_name\";s:22:\"export-26-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:49:36\";s:10:\"created_at\";s:19:\"2025-01-07 15:49:36\";s:2:\"id\";i:26;s:9:\"file_name\";s:22:\"export-26-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-26-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:26;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009680000000000000000\";}\";s:4:\"hash\";s:44:\"7E7vGBtLW15pEB/RFdp1Lc3GU+mWusiO23vE1xJapWM=\";}}}}', NULL, 1736264979, 1736264979);
INSERT INTO `job_batches` (`id`, `name`, `total_jobs`, `pending_jobs`, `failed_jobs`, `failed_job_ids`, `options`, `cancelled_at`, `created_at`, `finished_at`) VALUES
('9de99228-463e-4c25-bb56-10a9da74d915', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5698:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:50:50\";s:10:\"created_at\";s:19:\"2025-01-07 15:50:50\";s:2:\"id\";i:27;s:9:\"file_name\";s:22:\"export-27-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:50:50\";s:10:\"created_at\";s:19:\"2025-01-07 15:50:50\";s:2:\"id\";i:27;s:9:\"file_name\";s:22:\"export-27-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-27-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:27;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2500:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:50:50\";s:10:\"created_at\";s:19:\"2025-01-07 15:50:50\";s:2:\"id\";i:27;s:9:\"file_name\";s:22:\"export-27-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:50:50\";s:10:\"created_at\";s:19:\"2025-01-07 15:50:50\";s:2:\"id\";i:27;s:9:\"file_name\";s:22:\"export-27-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-27-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:27;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009030000000000000000\";}\";s:4:\"hash\";s:44:\"tjZLUdYqIstCw26tqXQ2Ar7ZBB2e1u3Qz7buwIcC9aQ=\";}}}}', NULL, 1736265050, 1736265050),
('9de992b6-f0fc-4c76-a234-1af3434aa926', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5698:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:52:21\";s:10:\"created_at\";s:19:\"2025-01-07 15:52:21\";s:2:\"id\";i:28;s:9:\"file_name\";s:22:\"export-28-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:52:21\";s:10:\"created_at\";s:19:\"2025-01-07 15:52:21\";s:2:\"id\";i:28;s:9:\"file_name\";s:22:\"export-28-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-28-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:28;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2500:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:52:21\";s:10:\"created_at\";s:19:\"2025-01-07 15:52:21\";s:2:\"id\";i:28;s:9:\"file_name\";s:22:\"export-28-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:52:21\";s:10:\"created_at\";s:19:\"2025-01-07 15:52:21\";s:2:\"id\";i:28;s:9:\"file_name\";s:22:\"export-28-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-28-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:28;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"000000000000096a0000000000000000\";}\";s:4:\"hash\";s:44:\"9HliV9Zyv5EBAxt2X6NIzN734JfIBQI0AmwVbX45XD4=\";}}}}', NULL, 1736265144, 1736265144),
('9de99395-9f3c-48b8-9856-fc5b2226c2b0', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5698:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:54:48\";s:10:\"created_at\";s:19:\"2025-01-07 15:54:48\";s:2:\"id\";i:29;s:9:\"file_name\";s:22:\"export-29-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:54:48\";s:10:\"created_at\";s:19:\"2025-01-07 15:54:48\";s:2:\"id\";i:29;s:9:\"file_name\";s:22:\"export-29-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-29-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:29;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2500:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:54:48\";s:10:\"created_at\";s:19:\"2025-01-07 15:54:48\";s:2:\"id\";i:29;s:9:\"file_name\";s:22:\"export-29-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:54:48\";s:10:\"created_at\";s:19:\"2025-01-07 15:54:48\";s:2:\"id\";i:29;s:9:\"file_name\";s:22:\"export-29-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-29-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:29;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009030000000000000000\";}\";s:4:\"hash\";s:44:\"4RR9jTf3AL+iwVuBYgXuHFiSd1x3c8tExCuy4QdjYHA=\";}}}}', NULL, 1736265289, 1736265290),
('9de993cd-0628-420d-b1f7-3c0c5a2a669c', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5698:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:55:26\";s:10:\"created_at\";s:19:\"2025-01-07 15:55:26\";s:2:\"id\";i:30;s:9:\"file_name\";s:22:\"export-30-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:55:26\";s:10:\"created_at\";s:19:\"2025-01-07 15:55:26\";s:2:\"id\";i:30;s:9:\"file_name\";s:22:\"export-30-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-30-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:30;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2500:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:55:26\";s:10:\"created_at\";s:19:\"2025-01-07 15:55:26\";s:2:\"id\";i:30;s:9:\"file_name\";s:22:\"export-30-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:55:26\";s:10:\"created_at\";s:19:\"2025-01-07 15:55:26\";s:2:\"id\";i:30;s:9:\"file_name\";s:22:\"export-30-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-30-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:30;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009310000000000000000\";}\";s:4:\"hash\";s:44:\"k3ljB5SdfJEryNBog9zZazI8SaoL4DUs+/2AweGUoDM=\";}}}}', NULL, 1736265326, 1736265326),
('9de994a4-fe71-46ed-87b9-b817a5aa823d', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5698:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:3;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:57:45\";s:10:\"created_at\";s:19:\"2025-01-07 15:57:45\";s:2:\"id\";i:31;s:9:\"file_name\";s:22:\"export-31-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:3;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:57:45\";s:10:\"created_at\";s:19:\"2025-01-07 15:57:45\";s:2:\"id\";i:31;s:9:\"file_name\";s:22:\"export-31-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-31-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:31;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2500:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:3;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:57:45\";s:10:\"created_at\";s:19:\"2025-01-07 15:57:45\";s:2:\"id\";i:31;s:9:\"file_name\";s:22:\"export-31-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:3;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 15:57:45\";s:10:\"created_at\";s:19:\"2025-01-07 15:57:45\";s:2:\"id\";i:31;s:9:\"file_name\";s:22:\"export-31-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-31-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:31;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"000000000000097b0000000000000000\";}\";s:4:\"hash\";s:44:\"tCOW4qnxMd2QfRqDg40kFBMxaO+E7WqU8zJVKZD6BzI=\";}}}}', NULL, 1736265467, 1736265467),
('9de995ad-a00f-4ddb-8ca1-5eae63e24441', '', 2, 1, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5698:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:3;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:00:39\";s:10:\"created_at\";s:19:\"2025-01-07 16:00:39\";s:2:\"id\";i:32;s:9:\"file_name\";s:22:\"export-32-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:3;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:00:39\";s:10:\"created_at\";s:19:\"2025-01-07 16:00:39\";s:2:\"id\";i:32;s:9:\"file_name\";s:22:\"export-32-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-32-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:32;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2500:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:3;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:00:39\";s:10:\"created_at\";s:19:\"2025-01-07 16:00:39\";s:2:\"id\";i:32;s:9:\"file_name\";s:22:\"export-32-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:3;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:00:39\";s:10:\"created_at\";s:19:\"2025-01-07 16:00:39\";s:2:\"id\";i:32;s:9:\"file_name\";s:22:\"export-32-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-32-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:32;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009030000000000000000\";}\";s:4:\"hash\";s:44:\"TVMJzwM+mA7fK6MWJPw5t7Pl6EebjaZ03V43njWdx8s=\";}}}}', NULL, 1736265641, NULL),
('9de99641-1278-46c9-99a3-8311d13e9a31', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5698:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:3;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:02:04\";s:10:\"created_at\";s:19:\"2025-01-07 16:02:04\";s:2:\"id\";i:33;s:9:\"file_name\";s:22:\"export-33-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:3;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:02:04\";s:10:\"created_at\";s:19:\"2025-01-07 16:02:04\";s:2:\"id\";i:33;s:9:\"file_name\";s:22:\"export-33-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-33-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:33;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2500:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:3;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:02:04\";s:10:\"created_at\";s:19:\"2025-01-07 16:02:04\";s:2:\"id\";i:33;s:9:\"file_name\";s:22:\"export-33-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:3;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:02:04\";s:10:\"created_at\";s:19:\"2025-01-07 16:02:04\";s:2:\"id\";i:33;s:9:\"file_name\";s:22:\"export-33-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-33-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:33;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000008e90000000000000000\";}\";s:4:\"hash\";s:44:\"cmXOVsDJYmjgKMJqGwzngttJIgexnisxNm/+7D8Ken8=\";}}}}', NULL, 1736265737, 1736265738);
INSERT INTO `job_batches` (`id`, `name`, `total_jobs`, `pending_jobs`, `failed_jobs`, `failed_job_ids`, `options`, `cancelled_at`, `created_at`, `finished_at`) VALUES
('9de996c9-31b0-4e97-b0cc-7af35cf79c44', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5698:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:03:45\";s:10:\"created_at\";s:19:\"2025-01-07 16:03:45\";s:2:\"id\";i:34;s:9:\"file_name\";s:22:\"export-34-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:03:45\";s:10:\"created_at\";s:19:\"2025-01-07 16:03:45\";s:2:\"id\";i:34;s:9:\"file_name\";s:22:\"export-34-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-34-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:34;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2500:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:03:45\";s:10:\"created_at\";s:19:\"2025-01-07 16:03:45\";s:2:\"id\";i:34;s:9:\"file_name\";s:22:\"export-34-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:03:45\";s:10:\"created_at\";s:19:\"2025-01-07 16:03:45\";s:2:\"id\";i:34;s:9:\"file_name\";s:22:\"export-34-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-34-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:34;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009030000000000000000\";}\";s:4:\"hash\";s:44:\"TvquKZTtaWLQNlDDb7io2Vm6hjC8Vmhh76X9nAEq0O0=\";}}}}', NULL, 1736265827, 1736265827),
('9de99a43-257f-4593-9fa9-88feb10d30b8', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5698:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:13:29\";s:10:\"created_at\";s:19:\"2025-01-07 16:13:29\";s:2:\"id\";i:40;s:9:\"file_name\";s:22:\"export-40-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:13:29\";s:10:\"created_at\";s:19:\"2025-01-07 16:13:29\";s:2:\"id\";i:40;s:9:\"file_name\";s:22:\"export-40-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-40-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:40;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2500:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:13:29\";s:10:\"created_at\";s:19:\"2025-01-07 16:13:29\";s:2:\"id\";i:40;s:9:\"file_name\";s:22:\"export-40-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:13:29\";s:10:\"created_at\";s:19:\"2025-01-07 16:13:29\";s:2:\"id\";i:40;s:9:\"file_name\";s:22:\"export-40-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-40-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:40;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009030000000000000000\";}\";s:4:\"hash\";s:44:\"gtCMB8FIeGCFtMtk7VBvEU95LaWntNdc6gp6ZtouEUI=\";}}}}', NULL, 1736266410, 1736266410),
('9de99a90-e8d4-4791-866b-01076b92bd6a', '', 2, 1, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5734:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:14:20\";s:10:\"created_at\";s:19:\"2025-01-07 16:14:20\";s:2:\"id\";i:41;s:9:\"file_name\";s:22:\"export-41-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:14:20\";s:10:\"created_at\";s:19:\"2025-01-07 16:14:20\";s:2:\"id\";i:41;s:9:\"file_name\";s:22:\"export-41-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-41-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:10:\"row_number\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:41;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:10:\"row_number\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2518:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:14:20\";s:10:\"created_at\";s:19:\"2025-01-07 16:14:20\";s:2:\"id\";i:41;s:9:\"file_name\";s:22:\"export-41-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:14:20\";s:10:\"created_at\";s:19:\"2025-01-07 16:14:20\";s:2:\"id\";i:41;s:9:\"file_name\";s:22:\"export-41-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-41-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:10:\"row_number\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:41;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:10:\"row_number\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009030000000000000000\";}\";s:4:\"hash\";s:44:\"Nt4K7Mi3kdEJwz9cIgXHhC7MSA+QanWQpA5STQtVzkc=\";}}}}', NULL, 1736266461, NULL),
('9de99b83-07f9-4501-a253-1aecad5a6223', '', 2, 1, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5822:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:16:59\";s:10:\"created_at\";s:19:\"2025-01-07 16:16:59\";s:2:\"id\";i:42;s:9:\"file_name\";s:22:\"export-42-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:16:59\";s:10:\"created_at\";s:19:\"2025-01-07 16:16:59\";s:2:\"id\";i:42;s:9:\"file_name\";s:22:\"export-42-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-42-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:8:{s:2:\"id\";s:14:\"ID (Data Asli)\";s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:42;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:8:{s:2:\"id\";s:14:\"ID (Data Asli)\";s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2562:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:16:59\";s:10:\"created_at\";s:19:\"2025-01-07 16:16:59\";s:2:\"id\";i:42;s:9:\"file_name\";s:22:\"export-42-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:16:59\";s:10:\"created_at\";s:19:\"2025-01-07 16:16:59\";s:2:\"id\";i:42;s:9:\"file_name\";s:22:\"export-42-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-42-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:8:{s:2:\"id\";s:14:\"ID (Data Asli)\";s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:42;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:8:{s:2:\"id\";s:14:\"ID (Data Asli)\";s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009030000000000000000\";}\";s:4:\"hash\";s:44:\"WfuGEWo8lrvve3jXuUBSlJQbF3dFX3YCVG1TYt9phNE=\";}}}}', NULL, 1736266619, NULL),
('9de99be2-b28b-4da8-9a3f-9818266641e2', '', 2, 1, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5822:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:18:01\";s:10:\"created_at\";s:19:\"2025-01-07 16:18:01\";s:2:\"id\";i:43;s:9:\"file_name\";s:22:\"export-43-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:18:01\";s:10:\"created_at\";s:19:\"2025-01-07 16:18:01\";s:2:\"id\";i:43;s:9:\"file_name\";s:22:\"export-43-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-43-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:8:{s:2:\"id\";s:14:\"ID (Data Asli)\";s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:43;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:8:{s:2:\"id\";s:14:\"ID (Data Asli)\";s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2562:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:18:01\";s:10:\"created_at\";s:19:\"2025-01-07 16:18:01\";s:2:\"id\";i:43;s:9:\"file_name\";s:22:\"export-43-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:18:01\";s:10:\"created_at\";s:19:\"2025-01-07 16:18:01\";s:2:\"id\";i:43;s:9:\"file_name\";s:22:\"export-43-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-43-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:8:{s:2:\"id\";s:14:\"ID (Data Asli)\";s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:43;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:8:{s:2:\"id\";s:14:\"ID (Data Asli)\";s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009030000000000000000\";}\";s:4:\"hash\";s:44:\"dF47tJqsM7oVzA1s+MZINP15yU8Dk4XCJ4SoG8PCe90=\";}}}}', NULL, 1736266682, NULL),
('9de9a07a-5df9-4018-ad77-a1ea5f8758a4', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5698:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:30:51\";s:10:\"created_at\";s:19:\"2025-01-07 16:30:51\";s:2:\"id\";i:44;s:9:\"file_name\";s:22:\"export-44-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:30:51\";s:10:\"created_at\";s:19:\"2025-01-07 16:30:51\";s:2:\"id\";i:44;s:9:\"file_name\";s:22:\"export-44-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-44-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:44;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2500:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:30:51\";s:10:\"created_at\";s:19:\"2025-01-07 16:30:51\";s:2:\"id\";i:44;s:9:\"file_name\";s:22:\"export-44-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:30:51\";s:10:\"created_at\";s:19:\"2025-01-07 16:30:51\";s:2:\"id\";i:44;s:9:\"file_name\";s:22:\"export-44-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-44-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:44;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009030000000000000000\";}\";s:4:\"hash\";s:44:\"vHeZtjpxnBTEXuyDJOnetjCxSzP7UqXJYdOuLsIkNQk=\";}}}}', NULL, 1736267453, 1736267453),
('9de9a0d6-7591-4d92-9ded-1e7ade9592ce', '', 2, 1, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5698:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:31:51\";s:10:\"created_at\";s:19:\"2025-01-07 16:31:51\";s:2:\"id\";i:45;s:9:\"file_name\";s:22:\"export-45-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:31:51\";s:10:\"created_at\";s:19:\"2025-01-07 16:31:51\";s:2:\"id\";i:45;s:9:\"file_name\";s:22:\"export-45-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-45-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:45;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2500:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:31:51\";s:10:\"created_at\";s:19:\"2025-01-07 16:31:51\";s:2:\"id\";i:45;s:9:\"file_name\";s:22:\"export-45-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:31:51\";s:10:\"created_at\";s:19:\"2025-01-07 16:31:51\";s:2:\"id\";i:45;s:9:\"file_name\";s:22:\"export-45-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-45-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:45;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"no\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"000000000000096d0000000000000000\";}\";s:4:\"hash\";s:44:\"iZ+cQo/PQJyyhWdNhhs19VHRpXtI0w9bK6a8UfCW5Uc=\";}}}}', NULL, 1736267513, NULL);
INSERT INTO `job_batches` (`id`, `name`, `total_jobs`, `pending_jobs`, `failed_jobs`, `failed_job_ids`, `options`, `cancelled_at`, `created_at`, `finished_at`) VALUES
('9de9a116-7e95-417f-8692-49259f1e2ed1', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5698:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:32:34\";s:10:\"created_at\";s:19:\"2025-01-07 16:32:34\";s:2:\"id\";i:46;s:9:\"file_name\";s:22:\"export-46-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:32:34\";s:10:\"created_at\";s:19:\"2025-01-07 16:32:34\";s:2:\"id\";i:46;s:9:\"file_name\";s:22:\"export-46-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-46-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:46;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2500:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:32:34\";s:10:\"created_at\";s:19:\"2025-01-07 16:32:34\";s:2:\"id\";i:46;s:9:\"file_name\";s:22:\"export-46-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:32:34\";s:10:\"created_at\";s:19:\"2025-01-07 16:32:34\";s:2:\"id\";i:46;s:9:\"file_name\";s:22:\"export-46-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-46-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:46;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009030000000000000000\";}\";s:4:\"hash\";s:44:\"Y48hYM3Hwr0STmcDxobpDD7KVLjtZ2IlwWzmHv56fY8=\";}}}}', NULL, 1736267555, 1736267555),
('9de9a269-69e5-4398-8091-1691fc98cb7a', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5698:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:36:16\";s:10:\"created_at\";s:19:\"2025-01-07 16:36:16\";s:2:\"id\";i:47;s:9:\"file_name\";s:22:\"export-47-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:36:16\";s:10:\"created_at\";s:19:\"2025-01-07 16:36:16\";s:2:\"id\";i:47;s:9:\"file_name\";s:22:\"export-47-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-47-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:47;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2500:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:36:16\";s:10:\"created_at\";s:19:\"2025-01-07 16:36:16\";s:2:\"id\";i:47;s:9:\"file_name\";s:22:\"export-47-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:36:16\";s:10:\"created_at\";s:19:\"2025-01-07 16:36:16\";s:2:\"id\";i:47;s:9:\"file_name\";s:22:\"export-47-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-47-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:47;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009030000000000000000\";}\";s:4:\"hash\";s:44:\"K/e+ATHNvX9Tcww4qHPLJtDFL6WwxZDDO2epwU4TDC8=\";}}}}', NULL, 1736267777, 1736267777),
('9de9a424-6cee-40a9-92f6-425555c24991', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5762:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:41:05\";s:10:\"created_at\";s:19:\"2025-01-07 16:41:05\";s:2:\"id\";i:48;s:9:\"file_name\";s:22:\"export-48-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:41:05\";s:10:\"created_at\";s:19:\"2025-01-07 16:41:05\";s:2:\"id\";i:48;s:9:\"file_name\";s:22:\"export-48-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-48-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:48;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2532:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:41:05\";s:10:\"created_at\";s:19:\"2025-01-07 16:41:05\";s:2:\"id\";i:48;s:9:\"file_name\";s:22:\"export-48-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:41:05\";s:10:\"created_at\";s:19:\"2025-01-07 16:41:05\";s:2:\"id\";i:48;s:9:\"file_name\";s:22:\"export-48-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-48-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:48;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009030000000000000000\";}\";s:4:\"hash\";s:44:\"RV15QX8Ztu6UsT7+OUVIwTHSN+qKF4v/q0qFo9ofECY=\";}}}}', NULL, 1736268067, 1736268068),
('9de9a537-da2a-44b9-9799-a388f9340b9b', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5762:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:44:08\";s:10:\"created_at\";s:19:\"2025-01-07 16:44:08\";s:2:\"id\";i:49;s:9:\"file_name\";s:22:\"export-49-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:44:08\";s:10:\"created_at\";s:19:\"2025-01-07 16:44:08\";s:2:\"id\";i:49;s:9:\"file_name\";s:22:\"export-49-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-49-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:49;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2532:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:44:08\";s:10:\"created_at\";s:19:\"2025-01-07 16:44:08\";s:2:\"id\";i:49;s:9:\"file_name\";s:22:\"export-49-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:44:08\";s:10:\"created_at\";s:19:\"2025-01-07 16:44:08\";s:2:\"id\";i:49;s:9:\"file_name\";s:22:\"export-49-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-49-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:49;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009390000000000000000\";}\";s:4:\"hash\";s:44:\"vBj5YA5TDcfMcCiX4ibCC1+R+b1Jf2JOoyauuFi2lcA=\";}}}}', NULL, 1736268248, 1736268248),
('9de9a5b4-18c6-4a3a-96cc-670152a6f6d0', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5762:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:45:29\";s:10:\"created_at\";s:19:\"2025-01-07 16:45:29\";s:2:\"id\";i:50;s:9:\"file_name\";s:22:\"export-50-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:45:29\";s:10:\"created_at\";s:19:\"2025-01-07 16:45:29\";s:2:\"id\";i:50;s:9:\"file_name\";s:22:\"export-50-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-50-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:50;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2532:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:45:29\";s:10:\"created_at\";s:19:\"2025-01-07 16:45:29\";s:2:\"id\";i:50;s:9:\"file_name\";s:22:\"export-50-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:45:29\";s:10:\"created_at\";s:19:\"2025-01-07 16:45:29\";s:2:\"id\";i:50;s:9:\"file_name\";s:22:\"export-50-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-50-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:50;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"000000000000096a0000000000000000\";}\";s:4:\"hash\";s:44:\"DFG8QnQ5U1Tw9KIBOQWRFlWD2i351P4Do3Mu7wd5HBw=\";}}}}', NULL, 1736268329, 1736268329),
('9de9a6ac-018c-490c-b55b-454bfbdf7661', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5762:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:48:09\";s:10:\"created_at\";s:19:\"2025-01-07 16:48:09\";s:2:\"id\";i:51;s:9:\"file_name\";s:22:\"export-51-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:48:09\";s:10:\"created_at\";s:19:\"2025-01-07 16:48:09\";s:2:\"id\";i:51;s:9:\"file_name\";s:22:\"export-51-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-51-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:51;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2532:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:48:09\";s:10:\"created_at\";s:19:\"2025-01-07 16:48:09\";s:2:\"id\";i:51;s:9:\"file_name\";s:22:\"export-51-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:48:09\";s:10:\"created_at\";s:19:\"2025-01-07 16:48:09\";s:2:\"id\";i:51;s:9:\"file_name\";s:22:\"export-51-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-51-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:51;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"000000000000090d0000000000000000\";}\";s:4:\"hash\";s:44:\"+YDILNVV/R+xyBYnkd21fg12elcFX4NTZtVOTBmVNdM=\";}}}}', NULL, 1736268492, 1736268492),
('9de9a728-1a15-4385-9caa-3972d413fd4b', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5762:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:49:31\";s:10:\"created_at\";s:19:\"2025-01-07 16:49:31\";s:2:\"id\";i:52;s:9:\"file_name\";s:22:\"export-52-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:49:31\";s:10:\"created_at\";s:19:\"2025-01-07 16:49:31\";s:2:\"id\";i:52;s:9:\"file_name\";s:22:\"export-52-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-52-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:52;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2532:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:49:31\";s:10:\"created_at\";s:19:\"2025-01-07 16:49:31\";s:2:\"id\";i:52;s:9:\"file_name\";s:22:\"export-52-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:49:31\";s:10:\"created_at\";s:19:\"2025-01-07 16:49:31\";s:2:\"id\";i:52;s:9:\"file_name\";s:22:\"export-52-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-52-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:52;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009930000000000000000\";}\";s:4:\"hash\";s:44:\"NiI3zAjaREide+M1jCyAihDhCzG3Twwk3wAITfhvwk4=\";}}}}', NULL, 1736268573, 1736268573);
INSERT INTO `job_batches` (`id`, `name`, `total_jobs`, `pending_jobs`, `failed_jobs`, `failed_job_ids`, `options`, `cancelled_at`, `created_at`, `finished_at`) VALUES
('9de9a7bf-ad09-4139-bf41-184daa0e4f86', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5762:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:51:11\";s:10:\"created_at\";s:19:\"2025-01-07 16:51:11\";s:2:\"id\";i:53;s:9:\"file_name\";s:22:\"export-53-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:51:11\";s:10:\"created_at\";s:19:\"2025-01-07 16:51:11\";s:2:\"id\";i:53;s:9:\"file_name\";s:22:\"export-53-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-53-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:53;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2532:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:51:11\";s:10:\"created_at\";s:19:\"2025-01-07 16:51:11\";s:2:\"id\";i:53;s:9:\"file_name\";s:22:\"export-53-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:51:11\";s:10:\"created_at\";s:19:\"2025-01-07 16:51:11\";s:2:\"id\";i:53;s:9:\"file_name\";s:22:\"export-53-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-53-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:53;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"000000000000097d0000000000000000\";}\";s:4:\"hash\";s:44:\"wwGIRAvulKHG08/tNOk3aEI0sIRgL+TqSAku7aeYyqM=\";}}}}', NULL, 1736268672, 1736268673),
('9de9a849-76e0-465a-bed0-1cec58ef2ddc', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5762:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:52:41\";s:10:\"created_at\";s:19:\"2025-01-07 16:52:41\";s:2:\"id\";i:54;s:9:\"file_name\";s:22:\"export-54-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:52:41\";s:10:\"created_at\";s:19:\"2025-01-07 16:52:41\";s:2:\"id\";i:54;s:9:\"file_name\";s:22:\"export-54-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-54-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:54;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2532:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:52:41\";s:10:\"created_at\";s:19:\"2025-01-07 16:52:41\";s:2:\"id\";i:54;s:9:\"file_name\";s:22:\"export-54-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:52:41\";s:10:\"created_at\";s:19:\"2025-01-07 16:52:41\";s:2:\"id\";i:54;s:9:\"file_name\";s:22:\"export-54-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-54-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:54;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009400000000000000000\";}\";s:4:\"hash\";s:44:\"Zb/DrYV3Tejqb9aQXRfbNc/95WAh7g2jqr3mUE1+eSQ=\";}}}}', NULL, 1736268763, 1736268763),
('9de9a8c7-29b0-4924-ae3d-4876beeaab7c', '', 2, 1, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5762:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:54:05\";s:10:\"created_at\";s:19:\"2025-01-07 16:54:05\";s:2:\"id\";i:55;s:9:\"file_name\";s:22:\"export-55-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:54:05\";s:10:\"created_at\";s:19:\"2025-01-07 16:54:05\";s:2:\"id\";i:55;s:9:\"file_name\";s:22:\"export-55-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-55-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:55;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2532:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:54:05\";s:10:\"created_at\";s:19:\"2025-01-07 16:54:05\";s:2:\"id\";i:55;s:9:\"file_name\";s:22:\"export-55-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:54:05\";s:10:\"created_at\";s:19:\"2025-01-07 16:54:05\";s:2:\"id\";i:55;s:9:\"file_name\";s:22:\"export-55-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-55-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:55;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009030000000000000000\";}\";s:4:\"hash\";s:44:\"xv5Tqz18iR6GMzqJass9mGpe+6R50Ff8tIPfvQeUXbE=\";}}}}', NULL, 1736268845, NULL),
('9de9a9b6-2b11-470e-8f92-e90850099bcb', '', 2, 1, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5762:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:56:41\";s:10:\"created_at\";s:19:\"2025-01-07 16:56:41\";s:2:\"id\";i:56;s:9:\"file_name\";s:22:\"export-56-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:56:41\";s:10:\"created_at\";s:19:\"2025-01-07 16:56:41\";s:2:\"id\";i:56;s:9:\"file_name\";s:22:\"export-56-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-56-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:56;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2532:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:56:41\";s:10:\"created_at\";s:19:\"2025-01-07 16:56:41\";s:2:\"id\";i:56;s:9:\"file_name\";s:22:\"export-56-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 16:56:41\";s:10:\"created_at\";s:19:\"2025-01-07 16:56:41\";s:2:\"id\";i:56;s:9:\"file_name\";s:22:\"export-56-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-56-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:56;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:17:\"No (2 Total Data)\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009030000000000000000\";}\";s:4:\"hash\";s:44:\"kiPcbMkPz/ZVHxY9uzj1SavVr8y7c4uY3/r3GNdHeeQ=\";}}}}', NULL, 1736269002, NULL),
('9de9acfd-cbca-4182-b4e4-37e4b7c64a95', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5698:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 17:05:51\";s:10:\"created_at\";s:19:\"2025-01-07 17:05:51\";s:2:\"id\";i:57;s:9:\"file_name\";s:22:\"export-57-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 17:05:51\";s:10:\"created_at\";s:19:\"2025-01-07 17:05:51\";s:2:\"id\";i:57;s:9:\"file_name\";s:22:\"export-57-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-57-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:57;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2500:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:39:\"App\\Filament\\Exports\\SuratMasukExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 17:05:51\";s:10:\"created_at\";s:19:\"2025-01-07 17:05:51\";s:2:\"id\";i:57;s:9:\"file_name\";s:22:\"export-57-surat-masuks\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:39:\"App\\Filament\\Exports\\SuratMasukExporter\";s:10:\"total_rows\";i:2;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-07 17:05:51\";s:10:\"created_at\";s:19:\"2025-01-07 17:05:51\";s:2:\"id\";i:57;s:9:\"file_name\";s:22:\"export-57-surat-masuks\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:22:\"export-57-surat-masuks\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:57;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:11:\"nomor_surat\";s:11:\"Nomor surat\";s:8:\"pengirim\";s:8:\"Pengirim\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009030000000000000000\";}\";s:4:\"hash\";s:44:\"3sL024lkjT+DPSq8EwZbEsHrJjgWAu0OF4xbeRWEG0E=\";}}}}', NULL, 1736269552, 1736269552),
('9deb62ca-365c-4766-bfac-eb71ad967cdc', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5758:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-08 13:29:07\";s:10:\"created_at\";s:19:\"2025-01-08 13:29:07\";s:2:\"id\";i:58;s:9:\"file_name\";s:23:\"export-58-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-08 13:29:07\";s:10:\"created_at\";s:19:\"2025-01-08 13:29:07\";s:2:\"id\";i:58;s:9:\"file_name\";s:23:\"export-58-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:23:\"export-58-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:58;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2530:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-08 13:29:07\";s:10:\"created_at\";s:19:\"2025-01-08 13:29:07\";s:2:\"id\";i:58;s:9:\"file_name\";s:23:\"export-58-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-08 13:29:07\";s:10:\"created_at\";s:19:\"2025-01-08 13:29:07\";s:2:\"id\";i:58;s:9:\"file_name\";s:23:\"export-58-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:23:\"export-58-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:58;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:7:{s:2:\"id\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";s:10:\"created_at\";s:10:\"Created at\";s:10:\"updated_at\";s:10:\"Updated at\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009090000000000000000\";}\";s:4:\"hash\";s:44:\"8BSqyD7FdZ6lLryvd8MMIgaqQSvb2Ye7V/b3wu8D9Co=\";}}}}', NULL, 1736343002, 1736343003),
('9deb62ca-4893-47ff-a1a3-9b48668ac96f', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5470:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-08 13:29:48\";s:10:\"created_at\";s:19:\"2025-01-08 13:29:48\";s:2:\"id\";i:59;s:9:\"file_name\";s:23:\"export-59-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-08 13:29:48\";s:10:\"created_at\";s:19:\"2025-01-08 13:29:48\";s:2:\"id\";i:59;s:9:\"file_name\";s:23:\"export-59-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:23:\"export-59-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:5:{s:2:\"id\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:59;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:5:{s:2:\"id\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2386:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-08 13:29:48\";s:10:\"created_at\";s:19:\"2025-01-08 13:29:48\";s:2:\"id\";i:59;s:9:\"file_name\";s:23:\"export-59-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-08 13:29:48\";s:10:\"created_at\";s:19:\"2025-01-08 13:29:48\";s:2:\"id\";i:59;s:9:\"file_name\";s:23:\"export-59-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:23:\"export-59-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:5:{s:2:\"id\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:59;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:5:{s:2:\"id\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"000000000000091d0000000000000000\";}\";s:4:\"hash\";s:44:\"PmaKVk/QrtSqS8xRK9Yp9JzVEaFI7X4Y7q3GHqJ6NKE=\";}}}}', NULL, 1736343002, 1736343003);
INSERT INTO `job_batches` (`id`, `name`, `total_jobs`, `pending_jobs`, `failed_jobs`, `failed_job_ids`, `options`, `cancelled_at`, `created_at`, `finished_at`) VALUES
('9deb64b1-14b8-4937-a04d-79d9a4bdeecb', '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5470:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:2;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-08 13:35:10\";s:10:\"created_at\";s:19:\"2025-01-08 13:35:10\";s:2:\"id\";i:60;s:9:\"file_name\";s:23:\"export-60-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:2;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-08 13:35:10\";s:10:\"created_at\";s:19:\"2025-01-08 13:35:10\";s:2:\"id\";i:60;s:9:\"file_name\";s:23:\"export-60-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:23:\"export-60-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:5:{s:2:\"id\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:60;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:5:{s:2:\"id\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2386:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:40:\"App\\Filament\\Exports\\SuratKeluarExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:2;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-08 13:35:10\";s:10:\"created_at\";s:19:\"2025-01-08 13:35:10\";s:2:\"id\";i:60;s:9:\"file_name\";s:23:\"export-60-surat-keluars\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:2;s:8:\"exporter\";s:40:\"App\\Filament\\Exports\\SuratKeluarExporter\";s:10:\"total_rows\";i:1;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-01-08 13:35:10\";s:10:\"created_at\";s:19:\"2025-01-08 13:35:10\";s:2:\"id\";i:60;s:9:\"file_name\";s:23:\"export-60-surat-keluars\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:23:\"export-60-surat-keluars\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:5:{s:2:\"id\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:60;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:5:{s:2:\"id\";s:2:\"No\";s:13:\"nomor_lengkap\";s:11:\"Nomor Surat\";s:12:\"tujuan_surat\";s:12:\"Tujuan surat\";s:13:\"tanggal_surat\";s:13:\"Tanggal surat\";s:7:\"perihal\";s:7:\"Perihal\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009090000000000000000\";}\";s:4:\"hash\";s:44:\"6Hh+hXG6wB5Zv5/W4a8dZ7WXeYpAV9IgyiYjsDSAh00=\";}}}}', NULL, 1736343322, 1736343322);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_01_07_034842_create_perjalanan_dinas_table', 1),
(6, '2025_01_07_044048_create_categories_table', 1),
(8, '2025_01_07_080254_create_notifications_table', 1),
(9, '2025_01_07_080302_create_imports_table', 1),
(10, '2025_01_07_080303_create_exports_table', 1),
(11, '2025_01_07_080304_create_failed_import_rows_table', 1),
(12, '2025_01_07_040115_create_permission_tables', 2),
(13, '2025_01_07_111233_create_surat_masuks_table', 3),
(16, '2025_01_09_022830_create_sks_table', 4),
(27, '2025_01_10_049049_create_surat_keluars_table', 6),
(31, '2025_01_11_141329_update_nomor_spt_in_sppd_dalam_daerahs_table', 7),
(33, '2025_01_13_030503_create_sppd_luar_daerahs_table', 8),
(35, '2025_01_10_052820_create_sppd_dalam_daerahs_table', 9),
(36, '2025_01_13_124710_add_user_ids_to_sppd_dalam_daerahs_table', 9),
(37, '2025_01_13_125210_modify_user_id_in_sppd_dalam_daerahs_table', 10),
(38, '2025_01_13_124710_add_user_ids_to_sppd_luar_daerahs_table', 11),
(39, '2025_01_13_125210_modify_user_id_in_sppd_luar_daerahs_table', 11),
(40, '2025_01_09_103140_create_sub_kategoris_table', 12),
(41, '2022_12_14_083707_create_settings_table', 13),
(42, '2025_02_09_213015_sites_settings', 14),
(43, '2025_02_09_213028_pwa_settings', 14),
(44, '2025_01_09_104850_create_rincian_kategoris_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 9),
(2, 'App\\Models\\User', 15),
(2, 'App\\Models\\User', 16),
(2, 'App\\Models\\User', 18),
(3, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 5),
(3, 'App\\Models\\User', 6),
(3, 'App\\Models\\User', 7),
(3, 'App\\Models\\User', 8),
(3, 'App\\Models\\User', 10),
(3, 'App\\Models\\User', 11),
(3, 'App\\Models\\User', 12),
(3, 'App\\Models\\User', 13),
(3, 'App\\Models\\User', 19),
(3, 'App\\Models\\User', 20),
(3, 'App\\Models\\User', 21),
(3, 'App\\Models\\User', 22),
(3, 'App\\Models\\User', 23),
(3, 'App\\Models\\User', 24),
(3, 'App\\Models\\User', 25),
(3, 'App\\Models\\User', 26),
(3, 'App\\Models\\User', 27),
(3, 'App\\Models\\User', 28),
(3, 'App\\Models\\User', 29),
(3, 'App\\Models\\User', 31),
(3, 'App\\Models\\User', 32),
(3, 'App\\Models\\User', 33),
(3, 'App\\Models\\User', 34),
(3, 'App\\Models\\User', 35),
(3, 'App\\Models\\User', 36),
(3, 'App\\Models\\User', 37),
(3, 'App\\Models\\User', 38),
(3, 'App\\Models\\User', 39),
(3, 'App\\Models\\User', 40),
(3, 'App\\Models\\User', 41),
(3, 'App\\Models\\User', 42),
(3, 'App\\Models\\User', 43),
(3, 'App\\Models\\User', 44),
(3, 'App\\Models\\User', 45),
(3, 'App\\Models\\User', 46),
(3, 'App\\Models\\User', 47),
(3, 'App\\Models\\User', 48),
(3, 'App\\Models\\User', 49),
(3, 'App\\Models\\User', 53),
(3, 'App\\Models\\User', 54),
(3, 'App\\Models\\User', 55),
(3, 'App\\Models\\User', 56),
(3, 'App\\Models\\User', 57),
(3, 'App\\Models\\User', 58),
(3, 'App\\Models\\User', 59),
(3, 'App\\Models\\User', 60),
(3, 'App\\Models\\User', 61),
(3, 'App\\Models\\User', 62),
(3, 'App\\Models\\User', 63),
(3, 'App\\Models\\User', 64),
(3, 'App\\Models\\User', 65),
(3, 'App\\Models\\User', 66),
(3, 'App\\Models\\User', 70),
(3, 'App\\Models\\User', 71),
(3, 'App\\Models\\User', 73),
(3, 'App\\Models\\User', 74),
(3, 'App\\Models\\User', 75),
(3, 'App\\Models\\User', 76),
(3, 'App\\Models\\User', 77),
(3, 'App\\Models\\User', 78),
(3, 'App\\Models\\User', 79),
(3, 'App\\Models\\User', 80),
(3, 'App\\Models\\User', 81),
(3, 'App\\Models\\User', 82),
(3, 'App\\Models\\User', 83),
(3, 'App\\Models\\User', 84),
(3, 'App\\Models\\User', 85),
(3, 'App\\Models\\User', 86),
(3, 'App\\Models\\User', 87),
(3, 'App\\Models\\User', 88),
(3, 'App\\Models\\User', 89),
(3, 'App\\Models\\User', 90),
(3, 'App\\Models\\User', 91),
(4, 'App\\Models\\User', 14);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perjalanan_dinas`
--

CREATE TABLE `perjalanan_dinas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `no_spt` varchar(255) NOT NULL,
  `uraian` text NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perjalanan_dinas`
--

INSERT INTO `perjalanan_dinas` (`id`, `user_id`, `no_spt`, `uraian`, `tgl_berangkat`, `tgl_kembali`, `created_at`, `updated_at`) VALUES
(2, 3, '094/002/2025', 'asdasdasd', '2025-01-08', '2025-01-10', '2025-01-08 05:40:07', '2025-01-08 05:40:07');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view_role', 'web', '2025-01-07 02:15:36', '2025-01-07 02:15:36'),
(2, 'view_any_role', 'web', '2025-01-07 02:15:37', '2025-01-07 02:15:37'),
(3, 'create_role', 'web', '2025-01-07 02:15:37', '2025-01-07 02:15:37'),
(4, 'update_role', 'web', '2025-01-07 02:15:37', '2025-01-07 02:15:37'),
(5, 'delete_role', 'web', '2025-01-07 02:15:37', '2025-01-07 02:15:37'),
(6, 'delete_any_role', 'web', '2025-01-07 02:15:37', '2025-01-07 02:15:37'),
(7, 'view_category', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(8, 'view_any_category', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(9, 'create_category', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(10, 'update_category', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(11, 'restore_category', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(12, 'restore_any_category', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(13, 'replicate_category', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(14, 'reorder_category', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(15, 'delete_category', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(16, 'delete_any_category', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(17, 'force_delete_category', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(18, 'force_delete_any_category', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(19, 'view_perjalanan::dinas', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(20, 'view_any_perjalanan::dinas', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(21, 'create_perjalanan::dinas', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(22, 'update_perjalanan::dinas', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(23, 'restore_perjalanan::dinas', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(24, 'restore_any_perjalanan::dinas', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(25, 'replicate_perjalanan::dinas', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(26, 'reorder_perjalanan::dinas', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(27, 'delete_perjalanan::dinas', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(28, 'delete_any_perjalanan::dinas', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(29, 'force_delete_perjalanan::dinas', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(30, 'force_delete_any_perjalanan::dinas', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(31, 'view_surat::keluar', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(32, 'view_any_surat::keluar', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(33, 'create_surat::keluar', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(34, 'update_surat::keluar', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(35, 'restore_surat::keluar', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(36, 'restore_any_surat::keluar', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(37, 'replicate_surat::keluar', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(38, 'reorder_surat::keluar', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(39, 'delete_surat::keluar', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(40, 'delete_any_surat::keluar', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(41, 'force_delete_surat::keluar', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(42, 'force_delete_any_surat::keluar', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(43, 'view_user', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(44, 'view_any_user', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(45, 'create_user', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(46, 'update_user', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(47, 'restore_user', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(48, 'restore_any_user', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(49, 'replicate_user', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(50, 'reorder_user', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(51, 'delete_user', 'web', '2025-01-07 02:15:44', '2025-01-07 02:15:44'),
(52, 'delete_any_user', 'web', '2025-01-07 02:15:45', '2025-01-07 02:15:45'),
(53, 'force_delete_user', 'web', '2025-01-07 02:15:45', '2025-01-07 02:15:45'),
(54, 'force_delete_any_user', 'web', '2025-01-07 02:15:45', '2025-01-07 02:15:45'),
(55, 'view_surat::masuk', 'web', '2025-01-08 05:32:16', '2025-01-08 05:32:16'),
(56, 'view_any_surat::masuk', 'web', '2025-01-08 05:32:16', '2025-01-08 05:32:16'),
(57, 'create_surat::masuk', 'web', '2025-01-08 05:32:16', '2025-01-08 05:32:16'),
(58, 'update_surat::masuk', 'web', '2025-01-08 05:32:16', '2025-01-08 05:32:16'),
(59, 'restore_surat::masuk', 'web', '2025-01-08 05:32:16', '2025-01-08 05:32:16'),
(60, 'restore_any_surat::masuk', 'web', '2025-01-08 05:32:16', '2025-01-08 05:32:16'),
(61, 'replicate_surat::masuk', 'web', '2025-01-08 05:32:16', '2025-01-08 05:32:16'),
(62, 'reorder_surat::masuk', 'web', '2025-01-08 05:32:16', '2025-01-08 05:32:16'),
(63, 'delete_surat::masuk', 'web', '2025-01-08 05:32:16', '2025-01-08 05:32:16'),
(64, 'delete_any_surat::masuk', 'web', '2025-01-08 05:32:16', '2025-01-08 05:32:16'),
(65, 'force_delete_surat::masuk', 'web', '2025-01-08 05:32:16', '2025-01-08 05:32:16'),
(66, 'force_delete_any_surat::masuk', 'web', '2025-01-08 05:32:16', '2025-01-08 05:32:16'),
(67, 'view_perjalanan::dinas', 'user', '2025-01-08 05:40:50', '2025-01-08 05:40:50'),
(68, 'view_any_perjalanan::dinas', 'user', '2025-01-08 05:40:50', '2025-01-08 05:40:50'),
(69, 'create_perjalanan::dinas', 'user', '2025-01-08 05:40:50', '2025-01-08 05:40:50'),
(70, 'update_perjalanan::dinas', 'user', '2025-01-08 05:40:50', '2025-01-08 05:40:50'),
(71, 'restore_perjalanan::dinas', 'user', '2025-01-08 05:40:50', '2025-01-08 05:40:50'),
(72, 'restore_any_perjalanan::dinas', 'user', '2025-01-08 05:40:50', '2025-01-08 05:40:50'),
(73, 'replicate_perjalanan::dinas', 'user', '2025-01-08 05:40:50', '2025-01-08 05:40:50'),
(74, 'reorder_perjalanan::dinas', 'user', '2025-01-08 05:40:50', '2025-01-08 05:40:50'),
(75, 'delete_perjalanan::dinas', 'user', '2025-01-08 05:40:50', '2025-01-08 05:40:50'),
(76, 'delete_any_perjalanan::dinas', 'user', '2025-01-08 05:40:50', '2025-01-08 05:40:50'),
(77, 'force_delete_perjalanan::dinas', 'user', '2025-01-08 05:40:50', '2025-01-08 05:40:50'),
(78, 'force_delete_any_perjalanan::dinas', 'user', '2025-01-08 05:40:50', '2025-01-08 05:40:50'),
(79, 'view_rincian::kategori', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(80, 'view_any_rincian::kategori', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(81, 'create_rincian::kategori', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(82, 'update_rincian::kategori', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(83, 'restore_rincian::kategori', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(84, 'restore_any_rincian::kategori', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(85, 'replicate_rincian::kategori', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(86, 'reorder_rincian::kategori', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(87, 'delete_rincian::kategori', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(88, 'delete_any_rincian::kategori', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(89, 'force_delete_rincian::kategori', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(90, 'force_delete_any_rincian::kategori', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(91, 'view_sk', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(92, 'view_any_sk', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(93, 'create_sk', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(94, 'update_sk', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(95, 'restore_sk', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(96, 'restore_any_sk', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(97, 'replicate_sk', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(98, 'reorder_sk', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(99, 'delete_sk', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(100, 'delete_any_sk', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(101, 'force_delete_sk', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(102, 'force_delete_any_sk', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(103, 'view_sppd::dalam::daerah', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(104, 'view_any_sppd::dalam::daerah', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(105, 'create_sppd::dalam::daerah', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(106, 'update_sppd::dalam::daerah', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(107, 'restore_sppd::dalam::daerah', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(108, 'restore_any_sppd::dalam::daerah', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(109, 'replicate_sppd::dalam::daerah', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(110, 'reorder_sppd::dalam::daerah', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(111, 'delete_sppd::dalam::daerah', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(112, 'delete_any_sppd::dalam::daerah', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(113, 'force_delete_sppd::dalam::daerah', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(114, 'force_delete_any_sppd::dalam::daerah', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(115, 'view_sub::kategori', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(116, 'view_any_sub::kategori', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(117, 'create_sub::kategori', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(118, 'update_sub::kategori', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(119, 'restore_sub::kategori', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(120, 'restore_any_sub::kategori', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(121, 'replicate_sub::kategori', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(122, 'reorder_sub::kategori', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(123, 'delete_sub::kategori', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(124, 'delete_any_sub::kategori', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(125, 'force_delete_sub::kategori', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(126, 'force_delete_any_sub::kategori', 'web', '2025-01-11 05:41:37', '2025-01-11 05:41:37'),
(127, 'view_sppd::luar::daerah', 'web', '2025-01-12 19:36:09', '2025-01-12 19:36:09'),
(128, 'view_any_sppd::luar::daerah', 'web', '2025-01-12 19:36:09', '2025-01-12 19:36:09'),
(129, 'create_sppd::luar::daerah', 'web', '2025-01-12 19:36:09', '2025-01-12 19:36:09'),
(130, 'update_sppd::luar::daerah', 'web', '2025-01-12 19:36:09', '2025-01-12 19:36:09'),
(131, 'restore_sppd::luar::daerah', 'web', '2025-01-12 19:36:09', '2025-01-12 19:36:09'),
(132, 'restore_any_sppd::luar::daerah', 'web', '2025-01-12 19:36:09', '2025-01-12 19:36:09'),
(133, 'replicate_sppd::luar::daerah', 'web', '2025-01-12 19:36:09', '2025-01-12 19:36:09'),
(134, 'reorder_sppd::luar::daerah', 'web', '2025-01-12 19:36:09', '2025-01-12 19:36:09'),
(135, 'delete_sppd::luar::daerah', 'web', '2025-01-12 19:36:09', '2025-01-12 19:36:09'),
(136, 'delete_any_sppd::luar::daerah', 'web', '2025-01-12 19:36:09', '2025-01-12 19:36:09'),
(137, 'force_delete_sppd::luar::daerah', 'web', '2025-01-12 19:36:09', '2025-01-12 19:36:09'),
(138, 'force_delete_any_sppd::luar::daerah', 'web', '2025-01-12 19:36:09', '2025-01-12 19:36:09'),
(139, 'view_surat::izin', 'web', '2025-01-14 11:13:24', '2025-01-14 11:13:24'),
(140, 'view_any_surat::izin', 'web', '2025-01-14 11:13:24', '2025-01-14 11:13:24'),
(141, 'create_surat::izin', 'web', '2025-01-14 11:13:24', '2025-01-14 11:13:24'),
(142, 'update_surat::izin', 'web', '2025-01-14 11:13:24', '2025-01-14 11:13:24'),
(143, 'restore_surat::izin', 'web', '2025-01-14 11:13:24', '2025-01-14 11:13:24'),
(144, 'restore_any_surat::izin', 'web', '2025-01-14 11:13:24', '2025-01-14 11:13:24'),
(145, 'replicate_surat::izin', 'web', '2025-01-14 11:13:24', '2025-01-14 11:13:24'),
(146, 'reorder_surat::izin', 'web', '2025-01-14 11:13:24', '2025-01-14 11:13:24'),
(147, 'delete_surat::izin', 'web', '2025-01-14 11:13:24', '2025-01-14 11:13:24'),
(148, 'delete_any_surat::izin', 'web', '2025-01-14 11:13:24', '2025-01-14 11:13:24'),
(149, 'force_delete_surat::izin', 'web', '2025-01-14 11:13:24', '2025-01-14 11:13:24'),
(150, 'force_delete_any_surat::izin', 'web', '2025-01-14 11:13:24', '2025-01-14 11:13:24'),
(151, 'view_detail::user', 'web', '2025-05-14 02:35:11', '2025-05-14 02:35:11'),
(152, 'view_any_detail::user', 'web', '2025-05-14 02:35:11', '2025-05-14 02:35:11'),
(153, 'create_detail::user', 'web', '2025-05-14 02:35:11', '2025-05-14 02:35:11'),
(154, 'update_detail::user', 'web', '2025-05-14 02:35:11', '2025-05-14 02:35:11'),
(155, 'restore_detail::user', 'web', '2025-05-14 02:35:11', '2025-05-14 02:35:11'),
(156, 'restore_any_detail::user', 'web', '2025-05-14 02:35:11', '2025-05-14 02:35:11'),
(157, 'replicate_detail::user', 'web', '2025-05-14 02:35:11', '2025-05-14 02:35:11'),
(158, 'reorder_detail::user', 'web', '2025-05-14 02:35:11', '2025-05-14 02:35:11'),
(159, 'delete_detail::user', 'web', '2025-05-14 02:35:11', '2025-05-14 02:35:11'),
(160, 'delete_any_detail::user', 'web', '2025-05-14 02:35:11', '2025-05-14 02:35:11'),
(161, 'force_delete_detail::user', 'web', '2025-05-14 02:35:11', '2025-05-14 02:35:11'),
(162, 'force_delete_any_detail::user', 'web', '2025-05-14 02:35:11', '2025-05-14 02:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `rincian_kategoris`
--

CREATE TABLE `rincian_kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_kategori_id` bigint(20) UNSIGNED NOT NULL,
  `nomor_rincian_kategori` varchar(255) NOT NULL,
  `nama_rincian_kategori` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rincian_kategoris`
--

INSERT INTO `rincian_kategoris` (`id`, `category_id`, `sub_kategori_id`, `nomor_rincian_kategori`, `nama_rincian_kategori`, `created_at`, `updated_at`) VALUES
(1, 62, 988, '1', 'Penyusunan Prioritas Plafon Anggaran (PPA)', NULL, NULL),
(2, 62, 988, '2', 'Penyusunan Rencana Kerja Anggaran Satuan Kerja Perangkat Daerah (RKASKPD)', NULL, NULL),
(3, 62, 988, '3', 'Penyampaian Rancangan Anggaran Pendapatan dan Belanja Daerah kepada Dewan Perwakilan', NULL, NULL),
(4, 62, 988, '4', 'Anggaran Pendapatan dan Belanja Daerah Perubahan (RAPBD-P)', NULL, NULL),
(5, 62, 989, '1', 'Musyawarah Rencana Pembangunan (Musrenbang) kecamatan', NULL, NULL),
(6, 62, 989, '2', 'Musyawarah Rencana Pembangunan (Musrenbang) Kota', NULL, NULL),
(7, 62, 989, '3', 'Rancangan Dokumen Pelaksanaan Anggaran (RDPA) SKPD yang telah disetujui Sekretaris Daerah', NULL, NULL),
(8, 62, 989, '4', 'Dokumen Pelaksanaan Anggaran (DPA) SKPD yang telah disahkan oleh Pejabat Pengelola Keuangan Daerah (PPKD)', NULL, NULL),
(9, 62, 990, '1', 'Surat Penyedia Dana (SPP, SPM, dan SP2D): UP, GU, TU, LS', NULL, NULL),
(10, 62, 990, '2', 'Pendapatan', NULL, NULL),
(11, 62, 990, '3', 'Belanja', NULL, NULL),
(12, 62, 990, '4', 'Pembiayaan Daerah', NULL, NULL),
(13, 62, 990, '5', 'Dokumen Penatausahaan Keuangan', NULL, NULL),
(14, 62, 990, '6', 'Pertanggungjawaban Penggunaan Dana', NULL, NULL),
(15, 62, 990, '7', 'Daftar Gaji', NULL, NULL),
(16, 62, 990, '8', 'Kartu Gaji', NULL, NULL),
(17, 62, 990, '9', 'Data Rekening Bendahara Umum Daerah (BUD)', NULL, NULL),
(18, 62, 990, '10', 'Laporan Keuangan', NULL, NULL),
(19, 62, 991, '1', 'Permohonan Pinjaman/Hibah Luar Negeri (Blue Book)', NULL, NULL),
(20, 62, 991, '2', 'Dokumen Kesanggupan Negara Donor untuk Membiayai (Green Book)', NULL, NULL),
(21, 62, 991, '3', 'Dokumen Memorandum of Understanding (MoU), dan dokumen sejenisnya', NULL, NULL),
(22, 62, 991, '4', 'Dokumen Loan Agreement (PHLN) Antara lain: Draft Agreement, Legal Opinion, Surat Menyurat dengan Lender', NULL, NULL),
(23, 62, 991, '5', 'Alokasi dan Relokasi Penggunaan Dana Luar Negeri, antara lain: usulan luncuran dana', NULL, NULL),
(24, 62, 991, '6', 'Aplikasi Penarikan Dana BLN berikut lampirannya', NULL, NULL),
(25, 62, 991, '7', 'Dokumen Otorisasi Penarikan Dana (Payment Advice)', NULL, NULL),
(26, 62, 991, '8', 'Dokumen Realisasi Pencairan Dana Bantuan Luar Negeri, yaitu: Surat Perintah Pencairan Dana, SPM beserta lampirannya, a.l.: SPP, Kontrak, BA, dan data pendukung lainnya', NULL, NULL),
(27, 62, 991, '9', 'Replenishment (Permintaan Penarikan Dana dari Negara Donor) meliputi antara lain: No Objection Letter (NOL), Project Implementation, Notification of Contract, Withdrawal Authorization (WA)', NULL, NULL),
(28, 62, 991, '10', 'Staff Appraisal Report', NULL, NULL),
(29, 62, 991, '11', 'Report /Laporan', NULL, NULL),
(30, 62, 991, '12', 'Laporan Hutang Daerah', NULL, NULL),
(31, 62, 991, '13', 'Completion Report/Annual Report', NULL, NULL),
(32, 62, 991, '14', 'Ketentuan/Peraturan yang menyangkut Pinjaman/Hibah Luar Negeri', NULL, NULL),
(33, 62, 993, '1', 'Manual Implementasi Sistem Akuntansi Keuangan Daerah (SAKD)', NULL, NULL),
(34, 62, 993, '2', 'Dokumen Kebijakan Akuntansi', NULL, NULL),
(35, 62, 993, '3', 'Arsip Data Komputer dan Berita Acara Rekonsiliasi', NULL, NULL),
(36, 62, 993, '4', 'Laporan Realisasi Anggaran dan Neraca Bulanan/Triwulanan/Semesteran', NULL, NULL),
(37, 62, 994, '1', 'Surat Penetapan Pemimpin Proyek/Bagian Proyek, Bendahara, atas Penggunaan Anggaran Kegiatan Pembantuan, termasuk Specimen Tanda Tangan', NULL, NULL),
(38, 62, 994, '2', 'Berkas Permintaan Pembayaran (SPP) dan lampirannya: SPP-SPP-Daftar Perincian Penggunaan SPPR-SPDR-L, SPM-LS, SPM-DU, bilyet giro, SPM Nihil, Penagihan/Invoice, Faktur Pajak, Bukti Penerimaan Kas/Bank beserta Bukti Pendukungnya a.l.: Copy Faktur Pajak dan Nota Kredit Bank, Permintaan Pelayanan Jasa/Service Report dan Berita Acara Penyelesaian Pekerjaan', NULL, NULL),
(39, 62, 994, '3', 'Buku Rekening Bank', NULL, NULL),
(40, 62, 994, '4', 'Keputusan Pembukuan Rekening', NULL, NULL),
(41, 62, 994, '5', 'Pembukuan anggaran terdiri antara lain: Buku Kas Umum (BKU), Buku Pembantu, Register dan Buku Tambahan, Daftar Pembukuan Pencairan/Pengeluaran (DPP), Daftar Himpunan Pencairan (DHP), dan Rekening Koran', NULL, NULL),
(42, 62, 995, '1', 'Berkas Penerimaan Keuangan Pelaksanaan dan Tugas Pembantuan termasuk Dana Sisa atau Pengeluaran lainnya', NULL, NULL),
(43, 62, 995, '2', 'Berkas Penerimaan Pajak termasuk PPh 21, PPh 22, PPh 23, dan PPn dan Denda Keterlambatan Menyelesaikan Pekerjaan', NULL, NULL),
(44, 60, 10, '1', 'Status Kepegawaian', NULL, NULL),
(45, 60, 10, '2', 'Kedudukan Kepegawaian', NULL, NULL),
(46, 60, 10, '3', 'Keberatan Pegawai', NULL, NULL),
(47, 60, 10, '4', 'Perselisihan/Sengketa Kepegawaian', NULL, NULL),
(48, 60, 11, '1', 'Pengolahan Data dan Informasi Kepegawaian', NULL, NULL),
(49, 60, 11, '2', 'Pengembangan Sistem Informasi Kepegawaian', NULL, NULL),
(50, 60, 11, '3', 'Pengembangan Sistem Pengelolaan Arsip Kepegawaian Elektronik', NULL, NULL),
(51, 60, 11, '4', 'Sistem Pengelolaan Arsip Kepegawaian Fisik', NULL, NULL),
(52, 60, 12, '1', 'Formasi, Pengadaan dan Pasca Diklat', NULL, NULL),
(53, 60, 12, '2', 'Kepangkatan, Pengangkatan, dan Pemberhentian Dalam Jabatan', NULL, NULL),
(54, 60, 12, '3', 'Gaji dan Tunjangan, Kesejahteraan dan Kinerja', NULL, NULL),
(55, 60, 12, '4', 'Kode Etik, Disiplin, Pemberhentian dan Pensiun ASN', NULL, NULL),
(56, 60, 12, '5', 'Laporan Hasil Pengawasan dan Pengendalian', NULL, NULL),
(57, 60, 12, '6', 'Sanggahan terhadap Permasalahan Tenaga Honorer', NULL, NULL),
(58, 60, 13, '1', 'Surat Perintah Dinas/Surat Tugas', NULL, NULL),
(59, 60, 13, '2', 'Cuti Sakit', NULL, NULL),
(60, 60, 13, '3', 'Cuti Bersalin', NULL, NULL),
(61, 60, 13, '4', 'Cuti Tahunan', NULL, NULL),
(62, 60, 13, '5', 'Cuti Alasan Penting', NULL, NULL),
(63, 60, 13, '6', 'Cuti Besar', NULL, NULL),
(64, 60, 13, '7', 'Cuti Di luar Tanggungan Negara', NULL, NULL),
(65, 60, 13, '8', 'Karpeg/KPE/Karis/Karsu', NULL, NULL),
(66, 60, 13, '9', 'Keanggotaan Organisasi Profesi/Kedinasan', NULL, NULL),
(67, 60, 13, '10', 'Laporan Pajak Penghasilan Pribadi (LP2P)', NULL, NULL),
(68, 60, 13, '11', 'Keterangan Penerimaan Pembayaran Penghasilan Pegawai (KP4)', NULL, NULL),
(69, 60, 13, '12', 'Daftar Urut Kepangkatan (DUK)', NULL, NULL),
(70, 60, 13, '13', 'Pengurusan Kenaikan Gaji Berkala, Mutasi Gaji/Tunjangan', NULL, NULL),
(71, 60, 14, '1', 'Pemeliharaan Kesehatan Pegawai', NULL, NULL),
(72, 60, 14, '2', 'Asuransi Pegawai/BPJS', NULL, NULL),
(73, 60, 14, '3', 'Tabungan Perumahan', NULL, NULL),
(74, 60, 14, '4', 'Bantuan Sosial', NULL, NULL),
(75, 60, 14, '5', 'Pakaian Dinas', NULL, NULL),
(76, 60, 14, '6', 'Layanan Pegawai yang Meninggal Karena Dinas', NULL, NULL),
(77, 60, 14, '7', 'Pemberian Tali Kasih', NULL, NULL),
(78, 60, 14, '8', 'Pemberian Piagam Penghargaan dan Tanda Jasa', NULL, NULL),
(79, 60, 14, '9', 'Olahraga dan Rekreasi', NULL, NULL),
(80, 60, 14, '10', 'Rekam Medis', NULL, NULL),
(81, 60, 15, '1', 'Pegawai Negeri Sipil (PNS)', NULL, NULL),
(82, 60, 15, '2', 'Pegawai Pemerintah dengan Perjanjian Kerja (PPPK)', NULL, NULL),
(83, 60, 15, '3', 'Pejabat Negara dan pejabat lainnya yang disetarakan', NULL, NULL),
(84, 60, 15, '4', 'Sekretaris Daerah', NULL, NULL),
(85, 60, 15, '5', 'ASN berjasa/terlibat dalam peristiwa berskala nasional', NULL, NULL),
(86, 60, 16, '1', 'Penilaian Kompetensi', NULL, NULL),
(87, 60, 16, '2', 'Hasil Penilaian Kompetensi', NULL, NULL),
(88, 60, 10, '1', 'Status Kepegawaian', NULL, NULL),
(89, 60, 10, '2', 'Kedudukan Kepegawaian', NULL, NULL),
(90, 60, 10, '3', 'Keberatan Pegawai', NULL, NULL),
(91, 60, 10, '4', 'Perselisihan/Sengketa Kepegawaian', NULL, NULL),
(92, 60, 11, '1', 'Pengolahan Data dan Informasi Kepegawaian', NULL, NULL),
(93, 60, 11, '2', 'Pengembangan Sistem Informasi Kepegawaian', NULL, NULL),
(94, 60, 11, '3', 'Pengembangan Sistem Pengelolaan Arsip Kepegawaian Elektronik', NULL, NULL),
(95, 60, 11, '4', 'Sistem Pengelolaan Arsip Kepegawaian Fisik', NULL, NULL),
(96, 60, 12, '1', 'Formasi, Pengadaan dan Pasca Diklat', NULL, NULL),
(97, 60, 12, '2', 'Kepangkatan, Pengangkatan, dan Pemberhentian Dalam Jabatan', NULL, NULL),
(98, 60, 12, '3', 'Gaji dan Tunjangan, Kesejahteraan dan Kinerja', NULL, NULL),
(99, 60, 12, '4', 'Kode Etik, Disiplin, Pemberhentian dan Pensiun ASN', NULL, NULL),
(100, 60, 12, '5', 'Laporan Hasil Pengawasan dan Pengendalian', NULL, NULL),
(101, 60, 12, '6', 'Sanggahan terhadap Permasalahan Tenaga Honorer', NULL, NULL),
(102, 60, 13, '1', 'Surat Perintah Dinas/Surat Tugas', NULL, NULL),
(103, 60, 13, '2', 'Cuti Sakit', NULL, NULL),
(104, 60, 13, '3', 'Cuti Bersalin', NULL, NULL),
(105, 60, 13, '4', 'Cuti Tahunan', NULL, NULL),
(106, 60, 13, '5', 'Cuti Alasan Penting', NULL, NULL),
(107, 60, 13, '6', 'Cuti Besar', NULL, NULL),
(108, 60, 13, '7', 'Cuti Di luar Tanggungan Negara', NULL, NULL),
(109, 60, 13, '8', 'Karpeg/KPE/Karis/Karsu', NULL, NULL),
(110, 60, 13, '9', 'Keanggotaan Organisasi Profesi/Kedinasan', NULL, NULL),
(111, 60, 13, '10', 'Laporan Pajak Penghasilan Pribadi (LP2P)', NULL, NULL),
(112, 60, 13, '11', 'Keterangan Penerimaan Pembayaran Penghasilan Pegawai (KP4)', NULL, NULL),
(113, 60, 13, '12', 'Daftar Urut Kepangkatan (DUK)', NULL, NULL),
(114, 60, 13, '13', 'Pengurusan Kenaikan Gaji Berkala, Mutasi Gaji/Tunjangan', NULL, NULL),
(115, 60, 14, '1', 'Pemeliharaan Kesehatan Pegawai', NULL, NULL),
(116, 60, 14, '2', 'Asuransi Pegawai/BPJS', NULL, NULL),
(117, 60, 14, '3', 'Tabungan Perumahan', NULL, NULL),
(118, 60, 14, '4', 'Bantuan Sosial', NULL, NULL),
(119, 60, 14, '5', 'Pakaian Dinas', NULL, NULL),
(120, 60, 14, '6', 'Layanan Pegawai yang Meninggal Karena Dinas', NULL, NULL),
(121, 60, 14, '7', 'Pemberian Tali Kasih', NULL, NULL),
(122, 60, 14, '8', 'Pemberian Piagam Penghargaan dan Tanda Jasa', NULL, NULL),
(123, 60, 14, '9', 'Olahraga dan Rekreasi', NULL, NULL),
(124, 60, 14, '10', 'Rekam Medis', NULL, NULL),
(125, 60, 15, '1', 'Pegawai Negeri Sipil (PNS)', NULL, NULL),
(126, 60, 15, '2', 'Pegawai Pemerintah dengan Perjanjian Kerja (PPPK)', NULL, NULL),
(127, 60, 15, '3', 'Pejabat Negara dan pejabat lainnya yang disetarakan', NULL, NULL),
(128, 60, 15, '4', 'Sekretaris Daerah', NULL, NULL),
(129, 60, 15, '5', 'ASN berjasa/terlibat dalam peristiwa berskala nasional', NULL, NULL),
(130, 60, 16, '1', 'Penilaian Kompetensi', NULL, NULL),
(131, 60, 16, '2', 'Hasil Penilaian Kompetensi', NULL, NULL),
(132, 60, 10, '1', 'Status Kepegawaian', NULL, NULL),
(133, 60, 10, '2', 'Kedudukan Kepegawaian', NULL, NULL),
(134, 60, 10, '3', 'Keberatan Pegawai', NULL, NULL),
(135, 60, 10, '4', 'Perselisihan/Sengketa Kepegawaian', NULL, NULL),
(136, 60, 11, '1', 'Pengolahan Data dan Informasi Kepegawaian', NULL, NULL),
(137, 60, 11, '2', 'Pengembangan Sistem Informasi Kepegawaian', NULL, NULL),
(138, 60, 11, '3', 'Pengembangan Sistem Pengelolaan Arsip Kepegawaian Elektronik', NULL, NULL),
(139, 60, 11, '4', 'Sistem Pengelolaan Arsip Kepegawaian Fisik', NULL, NULL),
(140, 60, 12, '1', 'Formasi, Pengadaan dan Pasca Diklat', NULL, NULL),
(141, 60, 12, '2', 'Kepangkatan, Pengangkatan, dan Pemberhentian Dalam Jabatan', NULL, NULL),
(142, 60, 12, '3', 'Gaji dan Tunjangan, Kesejahteraan dan Kinerja', NULL, NULL),
(143, 60, 12, '4', 'Kode Etik, Disiplin, Pemberhentian dan Pensiun ASN', NULL, NULL),
(144, 60, 12, '5', 'Laporan Hasil Pengawasan dan Pengendalian', NULL, NULL),
(145, 60, 12, '6', 'Sanggahan terhadap Permasalahan Tenaga Honorer', NULL, NULL),
(146, 60, 13, '1', 'Surat Perintah Dinas/Surat Tugas', NULL, NULL),
(147, 60, 13, '2', 'Cuti Sakit', NULL, NULL),
(148, 60, 13, '3', 'Cuti Bersalin', NULL, NULL),
(149, 60, 13, '4', 'Cuti Tahunan', NULL, NULL),
(150, 60, 13, '5', 'Cuti Alasan Penting', NULL, NULL),
(151, 60, 13, '6', 'Cuti Besar', NULL, NULL),
(152, 60, 13, '7', 'Cuti Di luar Tanggungan Negara', NULL, NULL),
(153, 60, 13, '8', 'Karpeg/KPE/Karis/Karsu', NULL, NULL),
(154, 60, 13, '9', 'Keanggotaan Organisasi Profesi/Kedinasan', NULL, NULL),
(155, 60, 13, '10', 'Laporan Pajak Penghasilan Pribadi (LP2P)', NULL, NULL),
(156, 60, 13, '11', 'Keterangan Penerimaan Pembayaran Penghasilan Pegawai (KP4)', NULL, NULL),
(157, 60, 13, '12', 'Daftar Urut Kepangkatan (DUK)', NULL, NULL),
(158, 60, 13, '13', 'Pengurusan Kenaikan Gaji Berkala, Mutasi Gaji/Tunjangan', NULL, NULL),
(159, 60, 14, '1', 'Pemeliharaan Kesehatan Pegawai', NULL, NULL),
(160, 60, 14, '2', 'Asuransi Pegawai/BPJS', NULL, NULL),
(161, 60, 14, '3', 'Tabungan Perumahan', NULL, NULL),
(162, 60, 14, '4', 'Bantuan Sosial', NULL, NULL),
(163, 60, 14, '5', 'Pakaian Dinas', NULL, NULL),
(164, 60, 14, '6', 'Layanan Pegawai yang Meninggal Karena Dinas', NULL, NULL),
(165, 60, 14, '7', 'Pemberian Tali Kasih', NULL, NULL),
(166, 60, 14, '8', 'Pemberian Piagam Penghargaan dan Tanda Jasa', NULL, NULL),
(167, 60, 14, '9', 'Olahraga dan Rekreasi', NULL, NULL),
(168, 60, 14, '10', 'Rekam Medis', NULL, NULL),
(169, 60, 15, '1', 'Pegawai Negeri Sipil (PNS)', NULL, NULL),
(170, 60, 15, '2', 'Pegawai Pemerintah dengan Perjanjian Kerja (PPPK)', NULL, NULL),
(171, 60, 15, '3', 'Pejabat Negara dan pejabat lainnya yang disetarakan', NULL, NULL),
(172, 60, 15, '4', 'Sekretaris Daerah', NULL, NULL),
(173, 60, 15, '5', 'ASN berjasa/terlibat dalam peristiwa berskala nasional', NULL, NULL),
(174, 60, 16, '1', 'Penilaian Kompetensi', NULL, NULL),
(175, 60, 16, '2', 'Hasil Penilaian Kompetensi', NULL, NULL),
(176, 60, 10, '1', 'Status Kepegawaian', NULL, NULL),
(177, 60, 10, '2', 'Kedudukan Kepegawaian', NULL, NULL),
(178, 60, 10, '3', 'Keberatan Pegawai', NULL, NULL),
(179, 60, 10, '4', 'Perselisihan/Sengketa Kepegawaian', NULL, NULL),
(180, 60, 11, '1', 'Pengolahan Data dan Informasi Kepegawaian', NULL, NULL),
(181, 60, 11, '2', 'Pengembangan Sistem Informasi Kepegawaian', NULL, NULL),
(182, 60, 11, '3', 'Pengembangan Sistem Pengelolaan Arsip Kepegawaian Elektronik', NULL, NULL),
(183, 60, 11, '4', 'Sistem Pengelolaan Arsip Kepegawaian Fisik', NULL, NULL),
(184, 60, 12, '1', 'Formasi, Pengadaan dan Pasca Diklat', NULL, NULL),
(185, 60, 12, '2', 'Kepangkatan, Pengangkatan, dan Pemberhentian Dalam Jabatan', NULL, NULL),
(186, 60, 12, '3', 'Gaji dan Tunjangan, Kesejahteraan dan Kinerja', NULL, NULL),
(187, 60, 12, '4', 'Kode Etik, Disiplin, Pemberhentian dan Pensiun ASN', NULL, NULL),
(188, 60, 12, '5', 'Laporan Hasil Pengawasan dan Pengendalian', NULL, NULL),
(189, 60, 12, '6', 'Sanggahan terhadap Permasalahan Tenaga Honorer', NULL, NULL),
(190, 60, 13, '1', 'Surat Perintah Dinas/Surat Tugas', NULL, NULL),
(191, 60, 13, '2', 'Cuti Sakit', NULL, NULL),
(192, 60, 13, '3', 'Cuti Bersalin', NULL, NULL),
(193, 60, 13, '4', 'Cuti Tahunan', NULL, NULL),
(194, 60, 13, '5', 'Cuti Alasan Penting', NULL, NULL),
(195, 60, 13, '6', 'Cuti Besar', NULL, NULL),
(196, 60, 13, '7', 'Cuti Di luar Tanggungan Negara', NULL, NULL),
(197, 60, 13, '8', 'Karpeg/KPE/Karis/Karsu', NULL, NULL),
(198, 60, 13, '9', 'Keanggotaan Organisasi Profesi/Kedinasan', NULL, NULL),
(199, 60, 13, '10', 'Laporan Pajak Penghasilan Pribadi (LP2P)', NULL, NULL),
(200, 60, 13, '11', 'Keterangan Penerimaan Pembayaran Penghasilan Pegawai (KP4)', NULL, NULL),
(201, 60, 13, '12', 'Daftar Urut Kepangkatan (DUK)', NULL, NULL),
(202, 60, 13, '13', 'Pengurusan Kenaikan Gaji Berkala, Mutasi Gaji/Tunjangan', NULL, NULL),
(203, 60, 14, '1', 'Pemeliharaan Kesehatan Pegawai', NULL, NULL),
(204, 60, 14, '2', 'Asuransi Pegawai/BPJS', NULL, NULL),
(205, 60, 14, '3', 'Tabungan Perumahan', NULL, NULL),
(206, 60, 14, '4', 'Bantuan Sosial', NULL, NULL),
(207, 60, 14, '5', 'Pakaian Dinas', NULL, NULL),
(208, 60, 14, '6', 'Layanan Pegawai yang Meninggal Karena Dinas', NULL, NULL),
(209, 60, 14, '7', 'Pemberian Tali Kasih', NULL, NULL),
(210, 60, 14, '8', 'Pemberian Piagam Penghargaan dan Tanda Jasa', NULL, NULL),
(211, 60, 14, '9', 'Olahraga dan Rekreasi', NULL, NULL),
(212, 60, 14, '10', 'Rekam Medis', NULL, NULL),
(213, 60, 15, '1', 'Pegawai Negeri Sipil (PNS)', NULL, NULL),
(214, 60, 15, '2', 'Pegawai Pemerintah dengan Perjanjian Kerja (PPPK)', NULL, NULL),
(215, 60, 15, '3', 'Pejabat Negara dan pejabat lainnya yang disetarakan', NULL, NULL),
(216, 60, 15, '4', 'Sekretaris Daerah', NULL, NULL),
(217, 60, 15, '5', 'ASN berjasa/terlibat dalam peristiwa berskala nasional', NULL, NULL),
(218, 60, 16, '1', 'Penilaian Kompetensi', NULL, NULL),
(219, 60, 16, '2', 'Hasil Penilaian Kompetensi', NULL, NULL),
(220, 62, 996, '1', 'Kebijakan Keuangan Pilkada dan Penyusunan Anggaran Bantuan Pemilu', NULL, NULL),
(221, 62, 996, '2', 'Peraturan/Pedoman/Standar Belanja Pegawai, Barang dan Jasa, Operasional dan Kontingensi untuk Biaya Pilkada dan Bantuan Pemilu', NULL, NULL),
(222, 62, 996, '3', 'Bahan Usulan Rencana Kegiatan dan Anggaran (RKA) Pilkada KPUD dan Panwasda Kota, PPK, PPS, KPPS dan Permohonan Pengajuan RKA KPUD dan Panwas', NULL, NULL),
(223, 62, 996, '4', 'Berkas Pembahasan RKA Pilkada dan Bantuan Pemilu', NULL, NULL),
(224, 62, 996, '5', 'Rencana Anggaran Satuan Kerja (RASK) Pilkada dan Bantuan Pemilu Kota', NULL, NULL),
(225, 62, 996, '6', 'Dokumen Rancangan Anggaran Satuan Kerja (DRASK) Pilkada KPUD dan Panwas Kota dan Bantuan Biaya Pemilu dari APBD', NULL, NULL),
(226, 62, 996, '7', 'Berkas Pembentukan Dana Cadangan Pilkada', NULL, NULL),
(227, 62, 996, '8', 'Bahan Rapat Rancangan Peraturan Daerah tentang Pilkada, dan Bantuan Biaya Pemilu dari APBD', NULL, NULL),
(228, 62, 996, '9', 'Nota Persetujuan DPRD tentang Perda APBD Pilkada dan Bantuan Biaya Pemilu dari APBD', NULL, NULL),
(229, 62, 997, '1', 'Berkas Penetapan Bendahara dan Atasan Langsung Bendahara KPUD, Bendahara Panwasda dan Bendahara pada Panitia Pilkada dan Pemilu', NULL, NULL),
(230, 62, 997, '2', 'Berkas Penerimaan Komisi, Rabat Pembayaran Pengadaan Jasa, Bunga, Pelaksanaan Pilkada/Pemilu', NULL, NULL),
(231, 62, 997, '3', 'Berkas setor sisa dana Pilkada/Pemilu termasuk setor komisi pengadaan barang/jasa, rabat, bunga, jasa giro Berkas Penyaluran Biaya Pemilu termasuk diantaranya Bukti Transfer Bank', NULL, NULL),
(232, 62, 997, '4', 'Pedoman Dokumen Penyediaan Pembiayaan Kegiatan Operasional (PPKO) Pemilu termasuk Perubahan/Pergeseran/Revisinya', NULL, NULL),
(233, 62, 998, '1', 'Laporan Hasil Pemeriksaan Badan Pemeriksa Keuangan Republik Indonesia atas Laporan Keuangan', NULL, NULL),
(234, 62, 998, '2', 'Hasil Pengawasan dan Pemeriksaan Internal', NULL, NULL),
(235, 62, 998, '3', 'Laporan Aparat Pemeriksa Fungsional', NULL, NULL),
(236, 62, 998, '4', 'Dokumen Penyelesaian Kerugian Daerah', NULL, NULL),
(237, 62, 999, '1', 'Anggaran Daerah', NULL, NULL),
(238, 62, 999, '2', 'Dukungan Teknis Anggaran Daerah', NULL, NULL),
(239, 62, 1000, '1', 'Pajak Daerah dan Retribusi Daerah Antara lain: fasilitasi pelaksanaan kebijakan standardisasi pajak daerah dan retribusi daerah, penyiapan bahan perumusan bimbingan teknis pajak daerah dan retribusi daerah, penyiapan bahan perumusan analisis dan evaluasi, pemantauan pajak daerah dan retribusi daerah, penyiapan bahan perumusan kebijakan fasilitasi pemberian insentif pajak daerah dan retribusi daerah', NULL, NULL),
(240, 62, 1000, '2', 'Badan Usaha Milik Daerah Antara lain: fasilitasi serta bimbingan teknis di bidang usaha milik daerah lembaga keuangan, fasilitas serta bimbingan teknis di bidang badan usaha milik daerah lembaga non keuangan, penyiapan pelaksanaan monitoring dan evaluasi badan usaha milik daerah', NULL, NULL),
(241, 62, 1000, '3', 'Badan Layanan Umum Daerah Antara lain: analisis, standardisasi teknis, fasilitasi serta bimbingan teknis, pemantauan dan evaluasi di bidang pola pengelolaan keuangan badan layanan umum daerah, Pembinaan pelaksanaan kebijakan, standardisasi teknis, prosedur dan kriteria, fasilitasi serta bimbingan teknis penerapan pola pengelolaan keuangan keuangan badan layanan umum daerah, Penyiapan pelaksanaan monitoring dan evaluasi pola pengelolaan keuangan badan layanan umum daerah', NULL, NULL),
(242, 62, 1000, '4', 'Pengelolaan Kekayaan Daerah Antara lain: fasilitasi serta bimbingan teknis pengelolaan kekayaan, Fasilitasi serta bimbingan teknis investasi daerah, Penyiapan pelaksanaan monitoring dan evaluasi pengelolaan kekayaan dan investasi daerah', NULL, NULL),
(243, 62, 1000, '5', 'Pinjam Dan Obligasi Daerah Antara lain: fasilitasi pelaksanaan kebijakan pinjaman dan hibah kepada pemerintah daerah dan/atau badan usaha milik daerah, Fasilitasi pelaksanaan kebijakan obligasi daerah, Fasilitasi pelaksanaan kebijakan dana bergulir yang bersumber dari APBN, Bimbingan teknis obligasi daerah, dana bergulir serta penyertaan modal daerah, Penyiapan pelaksanaan monitoring dan evaluasi pinjaman dan hibah, obligasi daerah, dan dana bergulir, dan penyertaan modal daerah', NULL, NULL),
(244, 62, 1001, '1', 'Fasilitasi Dana Alokasi Umum Antara lain: Koordinasi penyiapan data dasar penghitungan, dan rekonsiliasi dana alokasi umum, Sosialisasi dan supervisi dana alokasi umum, Penyiapan pelaksanaan monitoring dan evaluasi dana alokasi umum', NULL, NULL),
(245, 62, 1001, '2', 'Fasilitasi Dana Alokasi Khusus Antara lain: Koordinasi penyiapan data dasar, Sosialisasi dan supervisi dana alokasi khusus, penyiapan pelaksanaan monitoring, evaluasi dana alokasi khusus, Penyiapan pelaksanaan monitoring, evaluasi dana alokasi khusus', NULL, NULL),
(246, 62, 1001, '3', 'Dana Bagi Hasil Pajak dan Sumber Daya Alam Antara lain: Koordinasi penyiapan data dasar perhitungan, dan rekonsiliasi dana bagi hasil pajak dan sumber daya alam, Sosialisasi dan supervisi dana bagi hasil pajak dan sumber daya alam, Penyiapan pelaksanaan monitoring dan evaluasi dana bagi hasil pajak dan sumber daya alam', NULL, NULL),
(247, 62, 1001, '4', 'Dana Otonomi Khusus dan Dana Transfer Lainnya Antara lain: Sosialisasi dan supervisi dana otonomi khusus, Sosialisasi dan supervisi dan transfer lainnya, Pelaksanaan monitoring dan evaluasi dan otonomi khusus dan dana transfer lainnya', NULL, NULL),
(248, 62, 1001, '5', 'Dukungan Teknis Fasilitasi Dana Perimbangan Antara lain: Penyiapan sinkronisasi kebijakan dan perimbangan, Penyiapan dukungan teknis dana perimbangan, Penyiapan data dan informasi untuk penyusunan laporan dana perimbangan', NULL, NULL),
(249, 62, 1002, '1', 'Akuntansi Dan Pertanggungjawaban Keuangan Daerah Antara lain: Fasilitasi serta bimbingan teknis di bidang akuntansi dan pertangungjawaban keuangan daerah, Penyiapan evaluasi rancangan peraturan daerah pertanggungjawaban keuangan daerah', NULL, NULL),
(250, 62, 1002, '2', 'Pembinaan Kinerja dan Kapasitas Pengelolaan Keuangan Daerah Antara lain: Fasilitasi serta bimbingan teknis di bidang pembinaan kinerja dan kapasitas pengelolaan keuangan daerah, Penyiapan evaluasi rancangan peraturan daerah pertangungjawaban keuangan daerah', NULL, NULL),
(251, 62, 1002, '3', 'Pembinaan dan Evaluasi Pengelolaan Keuangan Daerah Antara lain: Fasilitasi serta bimbingan teknis di bidang pembinaan dan evaluasi pengelolaan keuangan daerah, Penyiapan evaluasi rancangan peraturan daerah pertangungjawaban keuangan daerah', NULL, NULL),
(252, 62, 1002, '4', 'Kajian Kebijakan dan Bantuan Keterangan Ahli Antara lain: Penyiapan bahan bantuan keterangan ahli di bidang keuangan daerah, Penyiapan evaluasi rancangan peraturan daerah pertanggungjawaban keuangan daerah', NULL, NULL),
(253, 62, 1002, '5', 'Data Informasi dan Pengelolaan Keuangan Daerah Antara lain: Penyiapan sinkronisasi kebijakan pelaksanaan pertangungjawaban pelaksanaan keuangan daerah, Penyiapan data dan informasi untuk penyusunan laporan pertangungjawaban pelaksanaan keuangan daerah, Pengelolaan sistem informasi pengelolaan keuangan daerah', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', 'web', '2025-01-07 02:15:37', '2025-01-07 02:15:37'),
(2, 'admin', 'web', '2025-01-08 05:32:16', '2025-01-11 05:58:31'),
(3, 'user', 'web', '2025-01-08 05:38:21', '2025-01-08 05:42:05'),
(4, 'operator', 'web', '2025-07-29 12:08:37', '2025-07-29 12:08:37');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(31, 1),
(31, 2),
(31, 4),
(32, 1),
(32, 2),
(32, 4),
(33, 1),
(33, 2),
(33, 4),
(34, 1),
(34, 2),
(34, 4),
(35, 1),
(35, 2),
(35, 4),
(36, 1),
(36, 2),
(36, 4),
(37, 1),
(37, 2),
(37, 4),
(38, 1),
(38, 2),
(38, 4),
(39, 1),
(39, 2),
(39, 4),
(40, 1),
(40, 2),
(40, 4),
(41, 1),
(41, 2),
(41, 4),
(42, 1),
(42, 2),
(42, 4),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(55, 2),
(55, 4),
(56, 1),
(56, 2),
(56, 4),
(57, 1),
(57, 2),
(57, 4),
(58, 1),
(58, 2),
(58, 4),
(59, 1),
(59, 2),
(59, 4),
(60, 1),
(60, 2),
(60, 4),
(61, 1),
(61, 2),
(61, 4),
(62, 1),
(62, 2),
(62, 4),
(63, 1),
(63, 2),
(63, 4),
(64, 1),
(64, 2),
(64, 4),
(65, 1),
(65, 2),
(65, 4),
(66, 1),
(66, 2),
(66, 4),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(91, 2),
(92, 1),
(92, 2),
(93, 1),
(93, 2),
(94, 1),
(94, 2),
(95, 1),
(95, 2),
(96, 1),
(96, 2),
(97, 1),
(97, 2),
(98, 1),
(98, 2),
(99, 1),
(99, 2),
(100, 1),
(100, 2),
(101, 1),
(101, 2),
(102, 1),
(102, 2),
(103, 1),
(103, 2),
(103, 3),
(104, 1),
(104, 2),
(104, 3),
(105, 1),
(105, 2),
(106, 1),
(106, 2),
(107, 1),
(107, 2),
(108, 1),
(108, 2),
(109, 1),
(109, 2),
(110, 1),
(110, 2),
(111, 1),
(111, 2),
(112, 1),
(112, 2),
(113, 1),
(113, 2),
(114, 1),
(114, 2),
(115, 1),
(116, 1),
(117, 1),
(118, 1),
(119, 1),
(120, 1),
(121, 1),
(122, 1),
(123, 1),
(124, 1),
(125, 1),
(126, 1),
(127, 1),
(127, 2),
(127, 3),
(128, 1),
(128, 2),
(129, 1),
(129, 2),
(130, 1),
(130, 2),
(131, 1),
(131, 2),
(132, 1),
(132, 2),
(133, 1),
(133, 2),
(134, 1),
(134, 2),
(135, 1),
(135, 2),
(136, 1),
(136, 2),
(137, 1),
(137, 2),
(138, 1),
(138, 2),
(139, 1),
(139, 2),
(140, 1),
(141, 1),
(142, 1),
(143, 1),
(144, 1),
(145, 1),
(146, 1),
(147, 1),
(148, 1),
(149, 1),
(150, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9XcGMCOrJ2pkfmizjCYug075SEUT66nmID7Uee30', NULL, '184.72.115.35', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.1.25 (KHTML, like Gecko) Version/8.0 Safari/600.1.25', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZ0JyTFNzN1hrdFJqZndzQzFuT0tzU0lyWmFjcUVaZFNGclNjTkFOZyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNToiaHR0cHM6Ly9hdmhhbi5teS5pZC9hZG1pbiI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMxOiJodHRwczovL2F2aGFuLm15LmlkL2FkbWluL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1754493381),
('B6W6wwrNFR2YNGjUDsz6VcsZShTmZft4EUXAcXpl', NULL, '194.195.91.14', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibDdIcTFiaE5EMWR0dFJHZ2pQTVZOcjRhU1lGTUZDSjgyekNpZ0lvViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vYXZoYW4ubXkuaWQvYWRtaW4vbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjI1OiJodHRwczovL2F2aGFuLm15LmlkL2FkbWluIjt9fQ==', 1754510907),
('cwrsiqi20g1quhbPJR7HyLE0d1eZRPQga1Zk4KnR', NULL, '2a06:4883:b000::c7', 'Mozilla/5.0 (compatible; InternetMeasurement/1.0; +https://internet-measurement.com/)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNUJkTW1MUlZ1dlh4ZmVHU0kwSmx4S0Y0WWdueTBKaTFiTTZmZ3hPaCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozODoiaHR0cHM6Ly9bMjAwMTpkZjA6MjdiOjI6Ojk6YTBiMl0vYWRtaW4iO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozODoiaHR0cHM6Ly9bMjAwMTpkZjA6MjdiOjI6Ojk6YTBiMl0vYWRtaW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1754522822),
('dPojcQ9ZnKWEz1OP8bSYT2S0nrttnzliq52WJsPY', NULL, '184.72.115.35', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.1.25 (KHTML, like Gecko) Version/8.0 Safari/600.1.25', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoid2s5VTU4b2h4cncwVVpqdG90ZmVXU0gyenFnWVhFOEZjQ3dvejFUbSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0NjoiaHR0cHM6Ly9hdmhhbi5teS5pZC9hZG1pbi9zdXJhdC1rZWx1YXJzL2NyZWF0ZSI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ2OiJodHRwczovL2F2aGFuLm15LmlkL2FkbWluL3N1cmF0LWtlbHVhcnMvY3JlYXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1754487893),
('Dx5hozLshUyqqVaqRGlrD4J6yLYH9R82C2O8aQFz', NULL, '44.251.212.249', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRk85WW8ya0Z5MWdlZE1jMGJYSVlTUDZmSld4Y1NQUkhaZUl5djVlNiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNToiaHR0cHM6Ly9hdmhhbi5teS5pZC9hZG1pbiI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL2F2aGFuLm15LmlkL2FkbWluIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1754485754),
('eIpFCTIRUSdq78b8IMZDH5xxjxQSjc2HNgNILFYz', NULL, '2.57.170.50', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWGlyb3Q0cVlNWVRHeG12NHQ4VXRUenpRalBHYmVkTXVwcEdidHV0ayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vYXZoYW4ubXkuaWQvYWRtaW4vbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjI1OiJodHRwczovL2F2aGFuLm15LmlkL2FkbWluIjt9fQ==', 1754520879),
('FbuwVlDBbQtRuPBFwk7Nur69D9mAo0RGW9WGmcwC', NULL, '103.247.9.9', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibkZVWnpKUVJCUmJXemF2VTZvNXBsWnFEUW15S2JvOEdBODFXSkNnRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vYXZoYW4ubXkuaWQvYWRtaW4vbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1754513407),
('gBMktZoUfu9WsltLMLfkA5zRV9iFKFocamrs3irf', NULL, '40.127.130.77', '', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZWlCQkxLakxsQTU3NHNkcVVLQkpyYjRwQ0FpWW1NR0J4V0NhZ3kxSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHBzOi8vYXZoYW4ubXkuaWQvaW5kZXgucGhwL2FkbWluL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozNToiaHR0cHM6Ly9hdmhhbi5teS5pZC9pbmRleC5waHAvYWRtaW4iO319', 1754495867),
('GvuYOpr6kWInWfsn2OaoRiByBuEhkTDpkDnhKRSi', NULL, '54.36.148.90', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZXRFZURGcVR3cHY1b0E5ZHlOeUlnUjR6MW51ejhybUN0RXM2ald6ZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHBzOi8vYXZoYW4ubXkuaWQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1754493333),
('J9CfchJ7X0dF9Rtc5Y3d7S7igL5OrkKQlZAiqBPM', NULL, '44.251.212.249', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSmJLZDVvdWxhNFBCSWVKdFg0eWtNRHNwTk83TmZGYk01STIwZ3oxSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vYXZoYW4ubXkuaWQvYWRtaW4vbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1754485754),
('K79xyTR6TSAVgIXzGkVziT6IiB5DrqVfddNQNU4i', NULL, '103.247.9.9', '', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidnhQODhRSGtPekZNSkxiUDhCRkxFVnFnSEE4Y05aNE9DNjRGVklkSiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNToiaHR0cHM6Ly9hdmhhbi5teS5pZC9hZG1pbiI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL2F2aGFuLm15LmlkL2FkbWluIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1754513407),
('KAZG7Vix183WJoUV2Nu7sDhBNCPBvcxrkvAVYdV3', NULL, '52.169.252.32', '', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicEIxS0xSQ1U2YVBpeTEwSVp0Y0hlVVdncmxCVnpBb1pqc2t2Zm1HQiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNToiaHR0cHM6Ly9hdmhhbi5teS5pZC9hZG1pbiI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL2F2aGFuLm15LmlkL2FkbWluIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1754492439),
('kfUY7HEQlFiTmorsfa3X9cssA5qoIx2Vm51CWEpA', NULL, '180.251.152.61', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiTVdPa2NtV2JJcHkxUlRVd2NGdTlJanpqbFNCZW5hYVZaOHVlQmd4OSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1754502783),
('NVkKhsLFgm5RKvd5IHLOd44JccWknjdJXFQiOQXa', 9, '202.65.234.134', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Mobile Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiT1RBMjdDWk9oNk5UMHJ4RE5iVEtXMG14SEVSTnRzbmVvWVpNcFRqdSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHBzOi8vYXZoYW4ubXkuaWQvYWRtaW4vc3BwZC1kYWxhbS1kYWVyYWhzIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6OTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJEc1RXRaTHcvQWZqNHRTT0Noa3JULnUzMGd1bnhORWJneFo0eTgvdzhvVVRtRFdnY0Z6VTVDIjt9', 1754491590),
('nvZpMnFcbxXAgoDhXLvAe8BG3D5M4Ol7Cj1Gn7Hb', 9, '180.251.152.253', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Mobile Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoidFk3Z0Frc3Y1ZHdXajhXRmFrRExjQTdNRDY2YmUySk0xUVpJaFZHRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODc6Imh0dHBzOi8vYXZoYW4ubXkuaWQvc3BwZC9kYWxhbS1kYWVyYWgvMTA4L3ByaW50P3RhbmRhX3Rhbmdhbj0yJnRhbmdnYWxfY2V0YWs9MjAyNS0wOC0wNiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo5O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkRzVFdFpMdy9BZmo0dFNPQ2hrclQudTMwZ3VueE5FYmd4WjR5OC93OG9VVG1EV2djRnpVNUMiO3M6ODoiZmlsYW1lbnQiO2E6MDp7fXM6NjoidGFibGVzIjthOjE6e3M6Mjk6Ikxpc3RTcHBkRGFsYW1EYWVyYWhzX3Blcl9wYWdlIjtzOjM6ImFsbCI7fX0=', 1754492236),
('pwnyQ6zLZVRMqSQoTvs1khatJyY8B7QqcMDwOt4W', NULL, '196.251.114.214', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoid3dJNUVGZWhWVHBrT3ZNTXN3bVdySXRiRGIzOHNhNWVmQXJVVHBFayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vYXZoYW4ubXkuaWQvYWRtaW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjI1OiJodHRwczovL2F2aGFuLm15LmlkL2FkbWluIjt9fQ==', 1754517745),
('qsZpHOUoNRKy6kxM6kxlspyehHJtl78kSObCIHs3', NULL, '2a06:4883:b000::c7', 'Mozilla/5.0 (compatible; InternetMeasurement/1.0; +https://internet-measurement.com/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR0ZEY1RDWThQNm51VWs1bzRIRjl4U0ZFZWhQNUlZUlRzUWQzYUZjUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vWzIwMDE6ZGYwOjI3YjoyOjo5OmEwYjJdIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1754522821),
('REZPMmpmXhpRplnmC7qtHW0PDoOOtwr2iByTbCHF', NULL, '180.251.152.61', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiaEkxVW1MNldpU2dxOFp2NEFrOVQyN2JWWWtEM2t6VFg5bGEzM3RtaCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1754514364),
('rQnz2oV6mb0H6JB5tEDyEschSSdzlm5qtp6pkeLW', NULL, '44.251.212.249', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY2x3YmZNRFQ4TG9XWmRFMzcyNVpWdXFyS21kdFk0MmI3ckFGWGZOWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHBzOi8vYXZoYW4ubXkuaWQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1754485753),
('uNTvfUgFM3ZHgF2AT6n7LTjnnpRsfmoT911rOBNL', NULL, '20.171.207.145', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GPTBot/1.2; +https://openai.com/gptbot)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiamh3a25zOWhBRHE1N1hFdWdQek5DM09HemRhRlo4SjgwRE5mS203WCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vbWFpbC5hcHAuYXZoYW4ubXkuaWQvYWRtaW4vbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjM0OiJodHRwczovL21haWwuYXBwLmF2aGFuLm15LmlkL2FkbWluIjt9fQ==', 1754509626),
('XbLYvAq7DTjm8ReJ4szjVouH0yfFkeRYNALqxZNW', NULL, '103.247.9.9', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic0dSYXkzY2hMVGtySEx3U0VBUU9kZmZrSlhNMGIxa0JPanJTMDRFYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHBzOi8vYXZoYW4ubXkuaWQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1754513407);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `locked` tinyint(1) NOT NULL DEFAULT 0,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`payload`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `group`, `name`, `locked`, `payload`, `created_at`, `updated_at`) VALUES
(1, 'sites', 'site_name', 0, '\"3x1\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(2, 'sites', 'site_description', 0, '\"Creative Solutions\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(3, 'sites', 'site_keywords', 0, '\"Graphics, Marketing, Programming\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(4, 'sites', 'site_profile', 0, '\"\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(5, 'sites', 'site_logo', 0, '\"\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(6, 'sites', 'site_author', 0, '\"Fady Mondy\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(7, 'sites', 'site_address', 0, '\"Cairo, Egypt\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(8, 'sites', 'site_email', 0, '\"info@3x1.io\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(9, 'sites', 'site_phone', 0, '\"+201207860084\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(10, 'sites', 'site_phone_code', 0, '\"+2\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(11, 'sites', 'site_location', 0, '\"Egypt\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(12, 'sites', 'site_currency', 0, '\"EGP\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(13, 'sites', 'site_language', 0, '\"English\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(14, 'sites', 'site_social', 0, '[]', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(15, 'pwa', 'pwa_app_name', 0, '\"TomatoPHP\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(16, 'pwa', 'pwa_short_name', 0, '\"Tomato\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(17, 'pwa', 'pwa_start_url', 0, '\"/\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(18, 'pwa', 'pwa_background_color', 0, '\"#ffffff\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(19, 'pwa', 'pwa_theme_color', 0, '\"#000000\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(20, 'pwa', 'pwa_display', 0, '\"standalone\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(21, 'pwa', 'pwa_orientation', 0, '\"any\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(22, 'pwa', 'pwa_status_bar', 0, '\"#000000\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(23, 'pwa', 'pwa_icons_72x72', 0, '\"\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(24, 'pwa', 'pwa_icons_96x96', 0, '\"\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(25, 'pwa', 'pwa_icons_128x128', 0, '\"\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(26, 'pwa', 'pwa_icons_144x144', 0, '\"\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(27, 'pwa', 'pwa_icons_152x152', 0, '\"\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(28, 'pwa', 'pwa_icons_192x192', 0, '\"\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(29, 'pwa', 'pwa_icons_384x384', 0, '\"\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(30, 'pwa', 'pwa_icons_512x512', 0, '\"\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(31, 'pwa', 'pwa_splash_640x1136', 0, '\"\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(32, 'pwa', 'pwa_splash_750x1334', 0, '\"\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(33, 'pwa', 'pwa_splash_828x1792', 0, '\"\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(34, 'pwa', 'pwa_splash_1125x2436', 0, '\"\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(35, 'pwa', 'pwa_splash_1242x2208', 0, '\"\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(36, 'pwa', 'pwa_splash_1242x2688', 0, '\"\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(37, 'pwa', 'pwa_splash_1536x2048', 0, '\"\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(38, 'pwa', 'pwa_splash_1668x2224', 0, '\"\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(39, 'pwa', 'pwa_splash_1668x2388', 0, '\"\"', '2025-02-10 05:32:13', '2025-02-10 05:32:13'),
(40, 'pwa', 'pwa_splash_2048x2732', 0, '\"\"', '2025-02-10 05:32:14', '2025-02-10 05:32:14'),
(41, 'pwa', 'pwa_shortcuts', 0, '[]', '2025-02-10 05:32:14', '2025-02-10 05:32:14');

-- --------------------------------------------------------

--
-- Table structure for table `sks`
--

CREATE TABLE `sks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_sk` varchar(255) NOT NULL,
  `tanggal_sk` date NOT NULL,
  `perihal` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sks`
--

INSERT INTO `sks` (`id`, `nomor_sk`, `tanggal_sk`, `perihal`, `created_at`, `updated_at`) VALUES
(2, '001 TAHUN 2025', '2025-01-02', 'PEMBAGIAN TUGAS PEGAWAI DINAS PERTANIAN TAHUN 2025', '2025-01-08 20:46:17', '2025-01-14 01:21:40'),
(3, '002 TAHUN 2025', '2025-01-02', 'PENUNJUKAN PEJABAT PENGADAAN BARANG/JASA PADA DINAS PERTANIAN KABUPATEN KONAWE KEPULAUAN', '2025-01-08 20:46:42', '2025-01-14 01:23:46'),
(5, '003 TAHUN 2025', '2025-01-02', 'PPK/PPTK', '2025-02-04 11:10:57', '2025-02-04 11:10:57'),
(6, '004 TAHUN 2025', '2025-01-02', 'Pengguna Barang', '2025-02-04 11:11:23', '2025-02-04 11:11:23'),
(7, '005 TAHUN 2025', '2025-01-04', 'Pembentukan TIM Pengelola Brigade Alat dan Mesin Pertanian (ALSINTAN)', '2025-02-04 11:11:33', '2025-06-26 13:06:09'),
(8, '006 TAHUN 2025', '2025-01-09', 'Penetapan CPCL Penerima Manfaat Kegiatan Perluasan Areal Tanam Padi Gogo', '2025-02-04 11:12:11', '2025-02-04 11:15:47'),
(9, '007 TAHUN 2025', '2025-01-09', 'CPCL Padi Sawah', '2025-02-04 11:12:21', '2025-02-04 11:16:16'),
(10, '008 TAHUN 2025', '2025-01-09', 'CPCL Jagung', '2025-02-04 11:12:31', '2025-02-04 11:16:46'),
(11, '009 TAHUN 2025', '2025-01-29', 'Swakelola Kaji Terap Pengelolaan Hijauan Pakan Ternak', '2025-02-04 11:13:12', '2025-02-04 11:13:12'),
(12, '010 TAHUN 2025', '2025-01-30', 'Penetapan CPCL Kelompok Tani Sebagai Penerima Bantuan Pemerintah Program Pembangunan Jaringan Irigasi Tersier', '2025-02-04 11:13:57', '2025-02-04 11:13:57'),
(13, '011 TAHUN 2025', '2025-01-30', 'CPCL Jalan Usaha Tani ', '2025-02-04 11:14:22', '2025-02-04 11:14:22'),
(14, '012 TAHUN 2025', '2025-01-30', 'CPCL Jembatan Tani', '2025-02-04 11:14:41', '2025-02-04 11:14:41'),
(15, '013 TAHUN 2025', '2025-04-03', 'VERPAL PUPUK SUBSIDI', '2025-05-14 05:18:18', '2025-05-14 05:19:45'),
(16, '013.a TAHUN 2025', '2025-04-18', 'ADENDUM PINJAM PAKAI EXACAVATOR', '2025-05-14 05:19:17', '2025-07-09 06:05:45'),
(17, '014 TAHUN 2025', '2025-05-26', 'Tim Penyelenggara Kegiatan Swakelola Pelatihan Juru Sembelih Halal (JULEHA) Tingkat Kabupaten Konawe Kepulauan', '2025-06-12 02:58:16', '2025-06-12 02:58:16'),
(18, '015 TAHUN 2025', '2025-06-13', 'Penetapan Tim Pendataan, Entry dan Updating Sistem e-RDKK dan Revisi SK Tim Verval Pupuk Bersubsidi Tingkat Kabupaten dan Kecamatan Tahun Anggaran 2025', '2025-06-13 08:54:26', '2025-06-13 08:54:26'),
(19, '016 TAHUN 2025', '2025-06-16', 'SK TIM Swakelola Kegiatan Sosialisasi Pelaksanaan Insemiasi Buatan (IB)', '2025-06-23 05:08:09', '2025-06-23 05:08:45'),
(20, '017 TAHUN 2025', '2025-06-17', 'TIM PENYELENGGARA KEGIATAN SWAKELOLA PEMBANGUNAN \nJALAN USAHA TANI DESA PESUE KECAMATAN WAWONII TENGAH \nKABUPATEN KONAWE KEPULAUAN ', '2025-06-23 05:09:42', '2025-06-26 13:07:48'),
(21, '018 TAHUN 2025', '2025-06-17', 'TIM PENYELENGGARA KEGIATAN SWAKELOLA PEMBANGUNAN \nJALAN USAHA TANI DESA PALINGI BARAT KECAMATAN WAWONII UTARA\nKABUPATEN KONAWE KEPULAUAN ', '2025-06-23 08:25:09', '2025-07-09 06:10:39'),
(22, '019 TAHUN 2025', '2025-06-17', 'TIM PENYELENGGARA KEGIATAN SWAKELOLA PEMBANGUNAN \nJALAN USAHA TANI DESA LAPULU KECAMATAN WAWONII TIMUR\nKABUPATEN KONAWE KEPULAUAN ', '2025-06-23 08:25:37', '2025-07-09 06:10:59'),
(23, '019 TAHUN 2025', '2025-06-23', 'Tim Penyelenggara Swakelola Jalan Usaha Tani (JUT) Desa ...', '2025-06-23 08:26:17', '2025-06-23 08:26:17'),
(24, '020 TAHUN 2025', '2025-06-23', 'SK Tim Swakelola Kegiatan Sosialisasi Komunikasi, Informasi dan Edukasi Pencegahan dan Penanggulangan Penyakit Ternak Strategis', '2025-06-23 08:27:02', '2025-06-23 08:27:02'),
(26, '012.a TAHUN 2025', '2025-02-28', 'PENETAPAN PENYULUH PERTANIAN PENERIMA BIAYA OPERASIONAL PENYULUH PERTANIAN TAHUN ANGGARAN 2025', '2025-07-09 06:05:14', '2025-07-09 06:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `sppd_dalam_daerahs`
--

CREATE TABLE `sppd_dalam_daerahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `nomor_spt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_spt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_spt` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sppd_dalam_daerahs`
--

INSERT INTO `sppd_dalam_daerahs` (`id`, `user_id`, `user_ids`, `nomor_spt`, `tujuan_spt`, `perihal`, `tanggal_spt`, `created_at`, `updated_at`) VALUES
(1, NULL, '[\"8\",\"13\",\"15\"]', '800.1.11.1/001/DD/2025', 'Wawonii Utara', 'Melaksanakan Kaji Terap Pengolahan HPT di Kecamatan Wawonii Utara Kab. Konawe Kepulauan pada Tanggal 13 Januari 2025', '2025-01-13', '2025-02-18 01:14:46', '2025-02-18 01:37:30'),
(2, NULL, '[\"10\",\"11\",\"23\",\"4\"]', '800.1.11.1/002/DD/2025', 'Wawonii Timur', 'Melaksanakan Kaji Terap Pengolahan HPT di Kecamatan Wawonii Timur Kab. Konawe Kepulauan pada tanggal 14 Januari 2025', '2025-01-14', '2025-02-18 01:19:53', '2025-02-18 01:36:28'),
(3, NULL, '[\"9\",\"4\"]', '800.1.11.1/003/DD/2025', 'Wawonii Selatan', 'Melaksanakan Kaji Terap Pengolahan HPT di Kecamatan Wawonii Selatan Kab. Konawe Kepulauan pada Tanggal 15 Januari 2025', '2025-01-15', '2025-02-18 01:25:51', '2025-02-18 01:36:01'),
(4, NULL, '[\"10\",\"26\",\"27\",\"4\"]', '800.1.11.1/004/DD/2025', 'Wawonii Timur Laut', 'Melaksanakan Kaji Terap Pengolahan HPT di Kecamatan Wawonii Timur Laut Kab. Konawe Kepulauan pada Tanggal 16 Januari 2025', '2025-01-16', '2025-02-18 01:32:05', '2025-02-18 01:35:07'),
(6, NULL, '[\"4\",\"8\"]', '800.1.11.1/005/DD/2025', 'Wawonii Utara', 'Kegiatan Survey Harga Produk Asal Hewan di Kecamatan Wawonii Utara', '2025-02-06', '2025-04-21 01:11:11', '2025-04-21 01:11:11'),
(7, NULL, '[\"4\",\"7\",\"23\"]', '800.1.11.1/006/DD/2025', 'Wawonii Tengah', 'Kegiatan Survey Harga Produk Asal Hewan di Kecamatan Wawonii Utara', '2025-02-07', '2025-04-21 01:12:14', '2025-04-21 01:12:14'),
(8, NULL, '[\"4\",\"8\"]', '800.1.11.1/007/DD/2025', 'Wawonii Selatan', 'Kegiatan Survey Harga Produk Asal Hewan di Kecamatan Wawonii Selatan', '2025-02-10', '2025-04-21 01:13:25', '2025-04-21 01:13:45'),
(9, NULL, '[\"4\",\"7\",\"23\"]', '800.1.11.1/008/DD/2025', 'Wawonii Timur Laut', 'Kegiatan Survey Harga Produk Asal Hewan di Kecamatan Wawonii Timur Laut', '2025-02-11', '2025-04-21 01:14:58', '2025-04-21 01:14:58'),
(10, NULL, '[\"5\",\"3\",\"6\",\"9\",\"10\",\"15\"]', '800.1.11.1/009/DD/2025', 'Wawonii Utara', 'Kegiatan Musrembang di Kecamatan Wawonii Utara', '2025-02-11', '2025-04-21 01:17:48', '2025-04-21 01:17:48'),
(11, NULL, '[\"5\",\"4\",\"6\",\"9\",\"10\",\"15\"]', '800.1.11.1/010/DD/2025', 'Wawonii Timur Laut', 'Kegiatan Musrembang di Kecamatan Wawonii Timur Laut', '2025-02-12', '2025-04-21 01:19:36', '2025-04-21 01:19:36'),
(12, NULL, '[\"5\",\"3\",\"4\",\"9\",\"10\",\"15\"]', '800.1.11.1/011/DD/2025', 'Wawonii TImur', 'Kegiatan Musrembang di Kecamatan Wawonii Timur', '2025-02-13', '2025-04-21 01:21:17', '2025-04-21 01:21:17'),
(13, NULL, '[\"5\",\"3\",\"9\",\"10\",\"15\",\"18\"]', '800.1.11.1/012/DD/2025', 'Wawonii Selatan', 'Kegiatan Musrembang di Kecamatan Wawonii Selatan', '2025-02-13', '2025-04-21 01:22:22', '2025-04-21 01:22:22'),
(14, NULL, '[\"5\",\"3\",\"6\",\"9\",\"15\"]', '800.1.11.1/013/DD/2025', 'Wawonii Tenggara', 'Kegiatan Musrembang di Kecamatan Wawonii Tenggara', '2025-02-13', '2025-04-21 01:23:26', '2025-04-21 01:23:26'),
(15, NULL, '[\"5\",\"4\",\"6\",\"9\",\"10\"]', '800.1.11.1/014/DD/2025', 'Wawonii Tengah', 'Kegiatan Musrembang di Kecamatan Wawonii Tengah', '2025-02-14', '2025-04-21 01:24:08', '2025-04-21 01:24:08'),
(16, NULL, '[\"3\",\"8\",\"7\"]', '800.1.11.1/015/DD/2025', 'Wawonii Tengah', 'Monitoring Penanganan Penyakit Layu Fusarium Pada Tanaman Nilam di Kecamatan Wawonii Tengah', '2025-02-24', '2025-04-21 01:25:45', '2025-04-21 01:25:45'),
(17, NULL, '[\"3\"]', '800.1.11.1/016/DD/2025', 'Wawonii Selatan', 'Monitoring Penanganan Penyakit Layu Fusarium Pada Tanaman Nilam di Kecamatan Wawonii Selatan', '2025-02-25', '2025-04-21 01:26:12', '2025-04-21 01:26:12'),
(18, NULL, '[\"3\",\"20\"]', '800.1.11.1/017/DD/2025', 'Wawonii TImur', 'Monitoring Penanganan Penyakit Layu Fusarium Pada Tanaman Nilam di Kecamatan Wawonii Timur', '2025-04-26', '2025-04-21 01:26:41', '2025-04-21 01:26:41'),
(19, NULL, '[\"6\",\"11\",\"13\"]', '800.1.11.1/018/DD/2025', 'Wawonii Utara', 'Kegiatan Pendataan ALSINTAN di Kecamatan Wawonii Utara', '2025-02-24', '2025-04-21 01:27:37', '2025-04-21 01:27:37'),
(20, NULL, '[\"6\"]', '800.1.11.1/019/DD/2025', 'Wawonii Tengah', 'Kegiatan Pendataan ALSINTAN di Kecamatan Wawonii Tengah', '2025-02-25', '2025-04-21 01:28:01', '2025-04-21 01:28:01'),
(21, NULL, '[\"6\",\"12\"]', '800.1.11.1/020/DD/2025', 'Wawonii Timur Laut', 'Kegiatan Pendataan ALSINTAN di Kecamatan Wawonii Timur Laut', '2025-02-26', '2025-04-21 01:28:30', '2025-04-21 01:28:49'),
(22, NULL, '[\"6\",\"12\"]', '800.1.11.1/021/DD/2025', 'Wawonii Timur', 'Kegiatan Pendataan ALSINTAN di Kecamatan Wawonii Timur', '2025-02-27', '2025-04-21 01:29:35', '2025-04-21 01:29:35'),
(23, NULL, '[\"5\",\"6\",\"12\"]', '800.1.11.1/022/DD/2025', 'Wawonii Timur Laut', 'Kegiatan Pendataan Rencana Definitif Kebutuhan Kelompok (RDKK) Pupuk Bersubsidi di Kecamatan Wawonii Timur Laut', '2025-03-04', '2025-04-21 01:30:54', '2025-04-21 01:30:54'),
(24, NULL, '[\"5\",\"6\",\"13\"]', '800.1.11.1/023/DD/2025', 'Wawonii Tenggara', 'Kegiatan Pendataan Rencana Definitif Kebutuhan Kelompok (RDKK) Pupuk Bersubsidi di Kecamatan Wawonii Tenggara', '2025-03-06', '2025-04-21 01:31:28', '2025-04-21 01:31:28'),
(25, NULL, '[\"29\",\"25\",\"27\",\"23\"]', '800.1.11.1/024/DD/2025', 'Wawonii Utara', 'Monitoring Kaji Terap Pengelolaan Hijauan Pakan Ternak Sapi di Kecamatan Wawonii Utara', '2025-04-14', '2025-04-21 01:33:13', '2025-04-21 05:01:44'),
(26, NULL, '[\"33\",\"27\",\"29\"]', '800.1.11.1/025/DD/2025', 'Wawonii Timur Laut', 'Monitoring Kaji Terap Pengelolaan Hijauan Pakan Ternak Sapi di Kecamatan Wawonii Timur Laut', '2025-05-08', '2025-04-21 01:34:11', '2025-05-15 05:16:27'),
(29, NULL, '[\"4\",\"27\",\"29\",\"32\"]', '800.1.11.1/026/DD/2025', 'Wawonii Utara', 'Monitoring Kaji Terap Pengelolaan Hijauan Pakan Ternak Sapi di Kecamatan Wawonii Utara', '2025-05-06', '2025-04-21 03:02:49', '2025-05-15 05:20:03'),
(30, NULL, '[\"27\",\"25\",\"29\",\"31\"]', '800.1.11.1/027/DD/2025', 'Wawonii Selatan', 'Monitoring Kaji Terap Pengelolaan Hijauan Pakan Ternak Sapi di Kecamatan Wawonii Selatan', '2025-05-07', '2025-04-21 03:04:02', '2025-05-15 05:42:54'),
(31, NULL, '[\"33\",\"25\",\"29\"]', '800.1.11.1/028/DD/2025', 'Wawonii Timur', 'Monitoring Kaji Terap Pengelolaan Hijauan Pakan Ternak Sapi di Kecamatan Wawonii Timur', '2025-05-05', '2025-04-21 03:04:38', '2025-05-15 05:13:21'),
(32, NULL, '[\"6\",\"16\",\"45\",\"46\"]', '800.1.11.1/029/DD/2025', 'Wawonii Barat', 'Verifikasi Lapangan Pendaftar Petani Milenial di Kecamatan Wawonii Barat', '2025-04-22', '2025-04-22 00:44:54', '2025-04-22 01:14:20'),
(33, NULL, '[\"12\",\"25\",\"19\",\"35\"]', '800.1.11.1/030/DD/2025', 'Wawonii Tenggara', 'Verifikasi Lapangan Pendaftar Petani Milenial di Kecamatan Wawonii Tenggara', '2025-04-22', '2025-04-22 01:08:22', '2025-04-23 05:38:12'),
(34, NULL, '[\"15\",\"37\",\"38\",\"47\",\"48\"]', '800.1.11.1/031/DD/2025', 'Wawonii Timur', 'Verifikasi Lapangan Pendaftar Petani Milenial di Kecamatan Wawonii Timur', '2025-04-22', '2025-04-22 01:09:11', '2025-04-22 01:28:53'),
(35, NULL, '[\"14\",\"39\",\"24\",\"40\"]', '800.1.11.1/032/DD/2025', 'Wawonii Timur Laut', 'Verifikasi Lapangan Pendaftar Petani Milenial di Kecamatan Wawonii Timur Laut', '2025-04-22', '2025-04-22 01:09:57', '2025-04-22 01:24:16'),
(36, NULL, '[\"41\",\"42\",\"43\",\"31\",\"53\"]', '800.1.11.1/033/DD/2025', 'Wawonii Utara', 'Verifikasi Lapangan Pendaftar Petani Milenial di Kecamatan Wawonii Utara', '2025-04-22', '2025-04-22 01:10:59', '2025-04-22 01:49:19'),
(37, NULL, '[\"11\",\"27\",\"28\",\"44\"]', '800.1.11.1/034/DD/2025', 'Wawonii Tengah', 'Verifikasi Lapangan Pendaftar Petani Milenial di Kecamatan Wawonii Tengah', '2025-04-22', '2025-04-22 01:11:32', '2025-04-22 01:11:32'),
(38, NULL, '[\"26\",\"36\",\"49\"]', '800.1.11.1/035/DD/2025', 'Wawonii Selatan', 'Verifikasi Lapangan Pendaftar Petani Milenial di Kecamatan Wawonii Selatan', '2025-04-22', '2025-04-22 01:11:57', '2025-04-22 01:37:17'),
(40, NULL, '[\"12\",\"25\",\"19\",\"35\"]', '800.1.11.1/036/DD/2025', 'Wawonii Tenggara', 'Verifikasi Lapangan Pendaftar Petani Milenial di Kecamatan Wawonii Tenggara', '2025-04-23', '2025-04-28 01:05:29', '2025-04-28 01:05:29'),
(41, NULL, '[\"20\",\"41\",\"34\"]', '800.1.11.1/037/DD/2025', 'Wawonii Utara', 'Monitoring Luas Tambah Tanam (LTT) di Kecamatan Wawonii Utara', '2025-04-30', '2025-04-30 01:23:10', '2025-04-30 01:23:10'),
(42, NULL, '[\"1\"]', '800.1.11.1/038/DD/2025', 'Wawonii Barat', 'Pengambilan Titik Koordinat Pengembangan Pangan Bergizi (P2B) di Kecamatan Wawonii Barat', '2025-04-30', '2025-04-30 01:25:17', '2025-04-30 01:25:17'),
(43, NULL, '[\"27\"]', '800.1.11.1/039/DD/2025', 'Wawonii Tengah', 'Pencegahan dan penanggulangan Penyakit Ternak', '2025-05-05', '2025-05-05 05:50:33', '2025-05-05 05:50:33'),
(44, NULL, '[\"6\",\"12\",\"13\"]', '800.1.11.1/040/DD/2025', 'Wawonii Timur', 'Penyuluhan Budidaya Tanaman Nilam', '2025-05-07', '2025-05-06 07:58:15', '2025-05-06 07:58:15'),
(45, NULL, '[\"26\"]', '800.1.11.1/041/DD/2025', 'Wawonii Selatan', 'Kegiatan Penilaian Tanaman Hortikultura Desa Sawa Patani Kec. Wawonii Selatan ', '2025-05-14', '2025-05-14 03:32:23', '2025-05-14 03:32:46'),
(46, NULL, '[\"12\",\"13\",\"10\",\"41\",\"15\",\"32\",\"16\",\"18\",\"19\",\"28\",\"53\"]', '800.1.11.1/042/DD/2025', 'Wawonii Utara', 'Kegiatan Penyuluhan Pengembangan Nilam di Kecamatan Wawonii Utara', '2025-05-07', '2025-05-15 14:49:46', '2025-05-15 14:49:46'),
(47, NULL, '[\"13\",\"10\",\"41\",\"39\",\"16\",\"19\",\"53\",\"18\",\"32\",\"15\",\"28\"]', '800.1.11.1/043/DD/2025', 'Wawonii Tengah', 'Kegiatan Penyuluhan Pengembangan Nilam di Kecamatan Wawonii Tengah', '2025-05-08', '2025-05-15 14:51:19', '2025-05-15 14:51:19'),
(48, NULL, '[\"11\",\"12\",\"10\",\"41\",\"32\",\"15\",\"18\",\"16\",\"53\",\"19\",\"28\"]', '800.1.11.1/044/DD/2025', 'Wawonii Selatan', 'Kegiatan Penyuluhan Pengembangan Nilam di Kecamatan Wawonii Selatan', '2025-05-09', '2025-05-15 14:52:26', '2025-05-15 14:52:26'),
(49, NULL, '[\"11\",\"12\",\"13\",\"10\",\"18\",\"16\",\"19\",\"28\",\"53\",\"15\",\"32\"]', '800.1.11.1/045/DD/2025', 'Wawonii Tenggara', 'Kegiatan Penyuluhan Pengembangan Nilam di Kecamatan Wawonii Tenggara', '2025-05-13', '2025-05-15 14:54:09', '2025-05-15 14:57:29'),
(50, NULL, '[\"11\",\"12\",\"13\",\"39\",\"15\",\"32\",\"16\",\"18\",\"19\",\"28\",\"53\"]', '800.1.11.1/046/DD/2025', 'Wawonii Timur Laut', 'Kegiatan Penyuluhan Pengembangan Nilam di Kecamatan Wawonii Timur Laut', '2025-05-14', '2025-05-15 14:59:11', '2025-05-15 14:59:11'),
(51, NULL, '[\"11\",\"10\",\"39\",\"41\",\"19\",\"28\",\"16\",\"18\",\"15\",\"32\"]', '800.1.11.1/047/DD/2025', 'Wawonii Timur', 'Kegiatan Penyuluhan Pengembangan Nilam di Kecamatan Wawonii Timur', '2025-05-15', '2025-05-15 15:00:20', '2025-05-15 15:00:20'),
(52, NULL, '[\"54\",\"55\",\"41\"]', '800.1.11.1/048/DD/2025', 'Wawonii Tengah', 'Monitoring Pengembangan Pekarangan Pangan Bergizi (P2B) di Kecamatan Wawonii Tengah', '2025-05-26', '2025-05-26 01:12:06', '2025-05-26 01:18:06'),
(53, NULL, '[\"20\",\"26\",\"34\"]', '800.1.11.1/049/DD/2025', 'Wawonii selatan', 'Monitoring Pengembangan Pekarangan Bergizi (P2B) di Kecamatan Wawonii Selatan', '2025-05-26', '2025-05-26 01:13:35', '2025-05-26 01:13:35'),
(54, NULL, '[\"11\"]', '800.1.11.1/050/DD/2025', 'Wawonii Utara', 'Pendampingan Penyaluran Pupuk Subsidi di Wawonii Utara', '2025-06-03', '2025-06-02 02:38:59', '2025-06-02 02:38:59'),
(55, NULL, '[\"4\",\"46\",\"43\",\"45\"]', '800.1.11.1/051/DD/2025', 'Wawonii Utara', 'Pendataan Hewan Qurban di Kecamatan Wawonii Utara', '2025-06-02', '2025-06-02 05:02:11', '2025-07-25 02:23:58'),
(56, NULL, '[\"9\",\"24\",\"88\"]', '800.1.11.1/052/DD/2025', 'Wawonii Timur Laut', 'Pendataan Hewan Qurban di Kecamatan Wawonii Timur Laut', '2025-06-02', '2025-06-02 05:05:19', '2025-07-25 02:33:28'),
(57, NULL, '[\"5\",\"25\",\"48\"]', '800.1.11.1/053/DD/2025', 'Wawonii Timur', 'Pendataan Hewan Qurban di Kecamatan Wawonii Timur ', '2025-06-02', '2025-06-02 05:06:01', '2025-07-25 03:20:48'),
(58, NULL, '[\"27\",\"23\"]', '800.1.11.1/054/DD/2025', 'Wawonii Tenggara', 'Pendataan Hewan Qurban di Kecamatan Wawonii Tenggara', '2025-06-02', '2025-06-02 05:06:30', '2025-07-25 02:43:49'),
(59, NULL, '[\"29\",\"49\",\"16\"]', '800.1.11.1/055/DD/2025', 'Wawonii Selatan', 'Pendataan Hewan Qurban di Kecamatan Wawonii Selatan', '2025-06-02', '2025-06-02 05:07:26', '2025-07-25 02:12:57'),
(60, NULL, '[\"28\",\"44\",\"15\"]', '800.1.11.1/056/DD/2025', 'Wawonii Tengah', 'Pendataan Hewan Qurban di Kecamatan Wawonii Tengah', '2025-06-02', '2025-06-02 05:08:27', '2025-07-25 02:16:33'),
(61, NULL, '[\"29\",\"56\",\"39\"]', '800.1.11.1/057/DD/2025', 'Wawonii Utara', 'Pemeriksaan Ante Mortem di Kecamatan Wawonii Utara', '2025-06-04', '2025-06-02 05:25:15', '2025-07-25 02:26:37'),
(62, NULL, '[\"29\",\"41\",\"47\"]', '800.1.11.1/058/DD/2025', 'Wawonii Timur Laut', 'Pemeriksaan Ante Mortem di Kecamatan Wawonii Timur Laut', '2025-06-05', '2025-06-02 05:26:11', '2025-07-25 02:35:33'),
(63, NULL, '[\"4\",\"33\"]', '800.1.11.1/059/DD/2025', 'Wawonii Timur', 'Pemeriksaan Ante Mortem di Kecamatan Wawonii Timur', '2025-06-05', '2025-06-02 05:26:59', '2025-07-25 02:39:29'),
(64, NULL, '[\"26\",\"35\"]', '800.1.11.1/060/DD/2025', 'Wawonii Tenggara', 'Pemeriksaan Ante Mortem di Kecamatan Wawonii Tenggara ', '2025-06-04', '2025-06-02 05:28:38', '2025-07-25 02:45:31'),
(65, NULL, '[\"8\",\"34\",\"18\",\"15\"]', '800.1.11.1/061/DD/2025', 'Wawonii Selatan', 'Pemeriksaan Ante Mortem di Kecamatan Wawonii Selatan', '2025-06-04', '2025-06-02 05:29:21', '2025-07-25 02:49:27'),
(66, NULL, '[\"4\",\"31\",\"53\"]', '800.1.11.1/062/DD/2025', 'Wawonii Tengah', 'Pemeriksaan Ante Mortem di Kecamatan Wawonii Tengah', '2025-06-04', '2025-06-02 05:30:15', '2025-07-25 02:54:11'),
(67, NULL, '[\"29\",\"54\",\"55\"]', '800.1.11.1/063/DD/2025', 'Wawonii Utara', 'Pemeriksaan Post Mortem di Kecamatan Wawonii Utara', '2025-06-07', '2025-06-02 05:31:16', '2025-07-25 02:31:46'),
(68, NULL, '[\"42\",\"40\"]', '800.1.11.1/064/DD/2025', 'Wawonii Timur Laut', 'Pemeriksaan Post Mortem di Kecamatan Wawonii Timur Laut', '2025-06-07', '2025-06-02 05:31:53', '2025-07-25 03:18:11'),
(69, NULL, '[\"4\",\"37\"]', '800.1.11.1/065/DD/2025', 'Wawonii Timur', 'Pemeriksaan Post Mortem di Kecamatan Wawonii Timur', '2025-06-06', '2025-06-02 05:32:22', '2025-07-25 02:42:15'),
(70, NULL, '[\"4\",\"33\"]', '800.1.11.1/066/DD/2025', 'Wawonii Tenggara', 'Pemeriksaan Post Mortem di Kecamatan Wawonii Tenggara', '2025-06-07', '2025-06-02 05:32:56', '2025-06-02 05:32:56'),
(71, NULL, '[\"9\",\"10\",\"13\"]', '800.1.11.1/067/DD/2025', 'Wawonii Selatan', 'Pemeriksaan Post Mortem di Kecamatan Wawonii Selatan', '2025-06-06', '2025-06-02 05:33:40', '2025-07-25 02:51:09'),
(72, NULL, '[\"9\",\"12\",\"10\",\"19\"]', '800.1.11.1/068/DD/2025', 'Wawonii Tengah', 'Pemeriksaan Post Mortem di Kecamatan Wawonii Tengah', '2025-06-07', '2025-06-02 05:34:17', '2025-07-25 02:55:49'),
(73, NULL, '[\"5\",\"8\",\"20\",\"26\",\"34\",\"41\",\"54\",\"56\"]', '800.1.11.1/069/DD/2025', 'Wawonii Selatan', 'Pendampingan Kegiatan Pekarangan Pangan Bergizi (P2B) di Kecamatan Wawonii Selatan', '2025-06-03', '2025-06-02 12:57:29', '2025-06-02 12:57:29'),
(74, NULL, '[\"27\",\"26\",\"29\",\"25\",\"18\",\"19\"]', '800.1.11.1/070/DD/2025', 'Wawonii Selatan', 'Pencegahan dan Penanggulangan Penyakit Zoonosis di Kecamatan Wawonii Selatan', '2025-06-12', '2025-06-11 02:59:27', '2025-06-11 08:05:57'),
(75, NULL, '[\"4\",\"9\",\"10\",\"12\",\"55\",\"41\",\"29\",\"25\"]', '800.1.11.1/071/DD/2025', 'Wawonii Utara', 'Sosialisasi Optimalisasi Pelaksanaan Inseminasi Buatan di Wawonii Utara', '2025-07-05', '2025-06-25 03:03:25', '2025-07-07 01:49:16'),
(76, NULL, '[\"5\",\"4\",\"33\",\"8\",\"29\",\"25\",\"15\",\"9\"]', '800.1.11.1/072/DD/2025', 'Wawonii Timur Laut', 'Insiminasi Buatan di Kecamatan Wawonii Timur Laut', '2025-07-01', '2025-06-25 03:12:03', '2025-08-06 06:29:57'),
(77, NULL, '[\"5\",\"4\",\"33\",\"9\",\"12\",\"20\",\"27\",\"55\",\"29\",\"25\"]', '800.1.11.1/073/DD/2025', 'Wawonii Timur', 'Inseminasi Buatan di Kecamatan Wawonii Timur', '2025-07-02', '2025-06-25 03:15:20', '2025-06-30 09:13:03'),
(78, NULL, '[\"5\",\"4\",\"11\",\"10\",\"12\",\"39\",\"56\",\"27\",\"34\",\"33\",\"55\"]', '800.1.11.1/074/DD/2025', 'Wawonii Tengah', 'Sosialisasi Optimalisasi Pelaksanaan Inseminasi Buatan di Kecamatan Wawonii Tengah', '2025-07-03', '2025-06-25 03:17:16', '2025-07-02 09:35:20'),
(79, NULL, '[\"5\",\"4\",\"27\",\"54\",\"25\"]', '800.1.11.1/075/DD/2025', 'Wawonii Selatan', 'Inseminasi Buatan di Kecamatan Wawonii Selatan', '2025-07-04', '2025-06-25 03:18:29', '2025-07-07 00:59:34'),
(80, NULL, '[\"5\",\"33\",\"27\"]', '800.1.11.1/076/DD/2025', 'Wawonii Utara', 'Sosialisasi Optimalisasi Pelaksanaan Inseminasi Buatan di Wawonii Utara', '2025-06-30', '2025-06-30 04:39:00', '2025-06-30 04:39:00'),
(82, NULL, '[\"5\",\"4\",\"33\",\"29\",\"12\",\"13\",\"26\",\"27\"]', '800.1.11.1/077/DD/2025', 'Wawonii Selatan', 'Sosialisasi Komunikasi Informasi Edukasi Pencegahan dan Penanggulangan Penyakit Ternak Strategis ', '2025-07-09', '2025-07-08 07:40:44', '2025-07-08 07:55:31'),
(83, NULL, '[\"5\",\"4\",\"33\",\"29\",\"12\",\"41\",\"39\",\"27\"]', '800.1.11.1/078/DD/2025', 'Wawonii Timur Laut', 'Sosialisasi Komunikasi Informasi Edukasi Pencegahan dan Penanggulangan Penyakit Ternak Strategis ', '2025-07-10', '2025-07-08 07:59:23', '2025-07-08 07:59:23'),
(84, NULL, '[\"5\",\"4\",\"33\",\"29\",\"11\",\"34\",\"41\",\"27\"]', '800.1.11.1/079/DD/2025', 'Wawonii Tengah', 'Sosialisasi Komunikasi Informasi Edukasi Pencegahan dan Penanggulangan Penyakit Ternak Strategis ', '2025-07-11', '2025-07-08 08:03:20', '2025-07-10 06:15:04'),
(85, NULL, '[\"6\",\"11\",\"12\",\"13\"]', '800.1.11.1/080/DD/2025', 'Wawonii Utara', 'Swakelola Jalan Tani Bidang PSP di Kecamatan Wawonii Utara', '2025-07-15', '2025-07-15 00:37:13', '2025-07-15 01:35:14'),
(86, NULL, '[\"29\",\"26\",\"27\"]', '800.1.11.1/081/DD/2025', 'Wawonii Selatan', 'Pencegahan dan Penanggulangan Penyakit Menular Strategis di Kecamatan Wawonii Selatan', '2025-07-17', '2025-07-16 06:25:13', '2025-07-16 06:25:13'),
(87, NULL, '[\"4\",\"33\",\"29\",\"26\",\"27\",\"9\"]', '800.1.11.1/082/DD/2025', 'Wawonii Selatan', 'Pencegahan dan Penanggulangan Penyakit Pada Ternak', '2025-07-22', '2025-07-21 08:57:36', '2025-08-06 06:14:29'),
(88, NULL, '[\"26\"]', '800.1.11.1/083/DD/2025', 'Wawonii Tenggara', 'Penataan Lahan Pertanian Terdampak Tambang di Wawonii Tenggara', '2025-07-24', '2025-07-23 05:30:06', '2025-07-23 05:30:43'),
(89, NULL, '[\"26\"]', '800.1.11.1/084/DD/2025', 'Wawonii Tenggara', 'Penataan Lahan Pertanian Terdampak Tambang di Wawonii Tenggara', '2025-07-25', '2025-07-23 05:30:28', '2025-07-23 05:30:28'),
(90, NULL, '[\"4\",\"33\",\"29\",\"41\",\"27\",\"25\"]', '800.1.11.1/085/DD/2025', 'Wawonii Utara', 'Pencegahan dan Penanggulangan Penyakit Pada Ternak', '2025-07-23', '2025-07-23 08:26:50', '2025-07-23 08:26:50'),
(91, NULL, '[\"4\",\"33\",\"27\",\"41\",\"25\"]', '800.1.11.1/086/DD/2025', 'Wawonii Utara', 'Pencegahan dan Penanggulangan Penyakit Pada Ternak', '2025-07-24', '2025-07-23 08:30:55', '2025-07-23 08:30:55'),
(92, NULL, '[\"41\",\"27\",\"9\"]', '800.1.11.1/087/DD/2025', 'Wawonii Utara', 'Pencegahan dan Penanggulangan Penyakit Ternak', '2025-07-29', '2025-07-28 07:51:54', '2025-08-06 06:23:17'),
(93, NULL, '[\"6\",\"13\",\"11\",\"12\",\"15\"]', '800.1.11.1/088/DD/2025', 'Wawonii Timur', 'Kegiatan Swakelola Jalan Usaha Tani Desa Lapulu Kecamatan Wawonii Timur', '2025-07-30', '2025-07-29 14:08:24', '2025-07-30 02:11:09'),
(94, NULL, '[\"9\",\"10\",\"15\",\"16\",\"28\"]', '800.1.11.1/089/DD/2025', 'Kecamatan Wawonii Utara', 'Dalam Rangka Kegiatan Sosialisasi Pupuk bersubsidi di Kecamata Wawonii Utara', '2025-04-08', '2025-07-29 14:36:30', '2025-07-29 14:36:30'),
(95, NULL, '[\"26\",\"13\",\"16\",\"19\",\"28\",\"18\"]', '800.1.11.1/090/DD/2025', 'Kecamatan Wawonii Tengah', 'Dalam Rangka Kegiatan Sosialisasi Pupuk Bersubsidi di Kecamatan Wawonii Tengah', '2025-04-09', '2025-07-29 14:47:05', '2025-07-29 14:47:05'),
(96, NULL, '[\"11\",\"13\",\"15\",\"32\",\"18\"]', '800.1.11.1/091/DD/2025', 'Kecamatan Wawonii Selatan', 'Dalam Rangka Kegiatan Sosialisasi Pupuk Bersubsidi di Kecamatan Wawonii Selatan', '2025-04-10', '2025-07-29 14:53:30', '2025-07-29 14:53:30'),
(97, NULL, '[\"9\",\"26\",\"16\",\"28\",\"19\"]', '800.1.11.1/092/DD/2025', 'Kecamatan Wawonii Timur Laut', 'Dalam Rangka Kegiatan Sosialisasi Pupuk Bersubsidi di Kecamatan Wawonii Timur Laut', '2025-04-11', '2025-07-29 14:58:14', '2025-07-29 14:58:14'),
(98, NULL, '[\"13\",\"11\",\"15\",\"32\",\"18\",\"19\"]', '800.1.11.1/093/DD/2025', 'Kecamatan Wawonii Timur', 'Dalam Rangka Kegiatan Sosialiasi Pupuk Bersubsidi di Kecamatan Wawonii Timur', '2025-04-12', '2025-07-29 15:07:34', '2025-07-29 15:11:54'),
(99, NULL, '[\"9\",\"26\",\"16\",\"15\",\"19\"]', '800.1.11.1/094/DD/2025', 'Kecamatan Wawonii Tenggara', 'Dalam Rangka Kegiatan Sosialisasi Pupuk Subsidi di Kecamatan Wawonii Tenggara', '2025-04-13', '2025-07-29 15:16:37', '2025-07-29 15:16:37'),
(100, NULL, '[\"5\",\"3\",\"9\",\"10\",\"15\",\"32\"]', '800.1.11.1/095/DD/2025', 'Kecamatan Wawonii Utara', 'Dalam Rangka Kegiatan Penyusunan Programa Penyuluhan di Kecamatan Wawonii Utara', '2025-03-25', '2025-08-01 01:00:20', '2025-08-01 01:00:20'),
(101, NULL, '[\"5\",\"12\",\"16\"]', '800.1.11.1/096/DD/2025', 'Kecamatan Wawonii Tengah', 'Dalam Rangka Penyusunan Programa Penyuluhan di Kecamatan Wawonii Tengah ', '2025-03-26', '2025-08-01 01:05:34', '2025-08-01 01:11:48'),
(102, NULL, '[\"5\",\"11\",\"8\",\"16\",\"32\"]', '800.1.11.1/097/DD/2025', 'Kecamatan Wawonii Selatan', 'Dalam Rangka Kegiatan Penyusunan Programa Penyluhan di Kecamatan Wawonii Selatan', '2025-03-27', '2025-08-01 01:10:16', '2025-08-01 01:10:16'),
(103, NULL, '[\"5\",\"9\",\"12\",\"15\",\"32\"]', '800.1.11.1/098/DD/2025', 'Kecamatan Wawonii Timur Laut', 'Dalam Rangka Kegiatan Penyusunan Programa Penyuluhan di Kecamatan Wawonii Timur Laut', '2025-03-28', '2025-08-01 01:15:02', '2025-08-01 01:15:02'),
(104, NULL, '[\"5\",\"11\",\"10\",\"16\",\"15\"]', '800.1.11.1/099/DD/2025', 'Kecamatan Wawonii  Timur', 'Dalam Rangka Kegiatan Penyusunan Programa Penyuluhan di Kecamatan Wawonii Timur', '2025-03-31', '2025-08-01 01:18:29', '2025-08-01 01:21:09'),
(105, NULL, '[\"5\",\"9\",\"12\",\"16\",\"15\"]', '800.1.11.1/100/DD/2025', 'Kecamatan Wawonii Tenggara', 'Dalam Rangka Kegiatan Penyusunan Programa Penyuluhan di Kecamatan Wawonii Tenggara', '2025-04-01', '2025-08-01 01:23:38', '2025-08-01 01:23:38'),
(106, NULL, '[\"6\",\"15\",\"16\"]', '800.1.11.1/101/DD/2025', 'Desa Lapulu Kecamatan Wawonii Timur', 'Monitoring Pelaksanaan Kegiatan Swakelola Pembangunan Jalan Usaha Tani Desa Lapulu Kecamatan Wawonii Timur', '2025-08-05', '2025-08-05 23:12:36', '2025-08-05 23:12:36'),
(108, NULL, '[\"6\",\"12\"]', '800.1.11.1/102/DD/2025', 'Desa Lapulu Kecamatan Wawonii Timur', 'Monitoring Pembangunan Jalan Usaha Tani Desa Lapulu Kecamatan Wawonii Timur', '2025-08-07', '2025-08-06 14:53:55', '2025-08-06 14:54:38');

-- --------------------------------------------------------

--
-- Table structure for table `sppd_luar_daerahs`
--

CREATE TABLE `sppd_luar_daerahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `nomor_spt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_spt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `dasar_surat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sppd_luar_daerahs`
--

INSERT INTO `sppd_luar_daerahs` (`id`, `user_id`, `user_ids`, `nomor_spt`, `tujuan_spt`, `perihal`, `tanggal_berangkat`, `tanggal_kembali`, `dasar_surat`, `created_at`, `updated_at`) VALUES
(1, 6, '[\"6\"]', '800.1.11.1/001/LD/2025', 'Jakarta', 'Konsultasi Tindak Lanjut Hibah Alat dan Mesin Pertanian di Kementrian Pertanian', '2025-01-06', '2025-01-10', '', '2025-01-13 20:19:32', '2025-01-13 20:19:32'),
(2, 9, '[\"9\",\"14\",\"15\"]', '800.1.11.1/002/LD/2025', 'KENDARI', 'Koordinasi Rencana Penyaluran Pupuk Bersubsidi KabupatenKonawe Kepulauan T.A. 2025 pada PT Marina Putra Sulawesi', '2025-01-10', '2025-01-12', NULL, '2025-01-13 20:28:11', '2025-02-27 04:52:24'),
(3, 6, '[\"6\",\"3\",\"14\",\"20\"]', '800.1.11.1/003/LD/2025', 'Kendari', 'Rapat Koordinasi Ketahanan Pangan di Dinas Tanaman Pangan dan Peternakan Provinsi Sulawesi Tenggara', '2025-01-13', '2025-01-15', NULL, '2025-01-13 21:11:11', '2025-03-14 06:52:37'),
(4, 5, '[\"5\",\"19\",\"13\"]', '800.1.11.1/004/LD/2025', 'Kendari', 'Koordinasi dan Konsultasi di Dinas Tanaman Pangan dan Peternakan Prov. Sultra', '2025-01-16', '2025-01-18', NULL, '2025-01-13 21:13:09', '2025-04-15 07:19:06'),
(5, 6, '[\"6\"]', '800.1.11.1/005/LD/2025', 'The Royal Surakarta Heritage, Solo', 'Undangan Sosialisasi Petunjuk Teknis Penyediaan Saprodi Mendukung Peningkatan Produksi Pertanian T.A 2025', '2025-01-19', '2025-01-24', NULL, '2025-01-19 14:30:13', '2025-01-19 14:30:13'),
(6, 6, '[\"6\"]', '800.1.11.1/006/LD/2025', 'Jakarta', 'Konsulasi Bantuan Pemerintah di Kementrian Pertanian', '2025-02-03', '2025-02-07', NULL, '2025-02-12 19:06:45', '2025-02-12 19:06:45'),
(7, 5, '[\"5\",\"9\",\"15\",\"16\"]', '800.1.11.1/007/LD/2025', 'Kendari', 'Koordinasi dan Konsultasi di Dinas Tanaman Pangan dan Peternakan Provinsi Sulawesi Tenggara', '2025-02-03', '2025-02-05', NULL, '2025-02-12 19:08:17', '2025-02-27 06:45:32'),
(8, 20, '[\"20\"]', '800.1.11.1/008/LD/2025', 'Kendari', 'Koordinasi dan Konsultasi di Dinas Tanaman Pangan dan Peternakan Provinsi Sulawesi Tenggara', '2025-02-11', '2025-02-14', NULL, '2025-02-12 19:17:39', '2025-02-12 19:17:39'),
(9, 4, '[\"4\"]', '800.1.11.1/009/LD/2025', 'Kendari', 'Konsultasi, Koordinasi Pencegahan dan Penanggulangan Penyakit Mulut dan Kuku pada Dinas Tanaman Pangan dan Peternakan Provinsi Sulawesi Tenggara', '2025-02-17', '2025-02-19', NULL, '2025-02-12 19:21:07', '2025-02-17 14:25:58'),
(12, 6, '[\"6\"]', '800.1.11.1/010/LD/2025', 'Jakarta', 'Konsultasi Sarana Pertanian Dalam Program Swasembada Pangan', '2025-02-17', '2025-02-21', NULL, '2025-02-15 03:59:44', '2025-02-27 04:17:56'),
(13, 5, '[\"5\"]', '800.1.11.1/011/LD/2025', 'Kendari', 'Koordinasi tentang Pedoman Pembinaan Petani Milenial di Dinas Tanaman Pangan dan Peternakan Provinsi Sulawesi Tenggara', '2025-02-17', '2025-02-19', NULL, '2025-02-27 04:07:43', '2025-02-27 04:09:16'),
(14, 10, '[\"10\",\"12\"]', '800.1.11.1/002.a/LD/2025', 'Kendari', 'Koordinasi Petugas E-Pusluh Kab. Konawe Kepulauan di Dinas Tanaman Pangan dan Peternakan Provinsi Sulawesi Tenggara Tahun 2025', '2025-01-10', '2025-01-12', NULL, '2025-02-27 04:58:52', '2025-02-27 05:00:34'),
(15, 13, '[\"13\",\"14\"]', '800.1.11.1/012/LD/2025', 'Kendari', 'Menghadiri Kegiatan Rapat Focus Grup Discussion (FGD) Konawe Kepulauan dalam Angka 2025 di BPS Kota Kendari', '2025-02-18', '2025-02-20', 'Surat Sekretaris Daerah Kabupaten Konawe Kepulauan Nomor : ', '2025-02-27 05:52:31', '2025-02-27 05:52:53'),
(16, 11, '[\"11\",\"12\"]', '800.1.11.1/008.a/LD/2025', 'Kendari', 'Koordinasi Data Hortikultura dan Perkebunan Kabupaten Konawe Kepulauan di Dinas Perkebunan dan Hortikultura Prov. Sultra', '2025-02-12', '2025-02-14', NULL, '2025-02-27 07:20:18', '2025-02-27 07:21:43'),
(17, 3, '[\"3\",\"9\",\"10\",\"19\"]', '800.1.11.1/013/LD/2025', 'Kendari', 'Konsultasi di Dinas Tanaman Pangan dan Peternakan Provinsi Sulawesi Tenggara', '2025-03-03', '2025-03-05', NULL, '2025-03-14 06:55:46', '2025-05-26 00:20:55'),
(18, 20, '[\"20\"]', '800.1.11.1/014/LD/2025', 'Kendari', 'Koordinasi dan Konsultasi Data Pangan Kabupaten Konawe Kepulauan Triwulan I', '2025-03-04', '2025-03-06', NULL, '2025-03-14 06:57:27', '2025-03-14 06:57:27'),
(19, 6, '[\"6\"]', '800.1.11.1/015/LD/2025', 'Kendari', 'Konsultasi Kegiatan Bidang PSP Tahun 2026 di Dinas Tanaman Pangan dan Peternakan Provinsi Sulawesi Tenggara', '2025-03-11', '2025-03-13', NULL, '2025-03-14 07:00:46', '2025-03-14 07:00:46'),
(20, 8, '[\"8\",\"7\"]', '800.1.11.1/016/LD/2025', 'Kendari', 'Koordinasi Pengembangan Tanaman Padi Gogo di Dinas Tanaman Pangan dan Peternakan Provinsi Sulawesi Tenggara', '2025-03-17', '2025-03-19', NULL, '2025-03-14 07:02:05', '2025-03-14 07:02:05'),
(21, 9, '[\"9\",\"10\",\"16\",\"15\"]', '800.1.11.1/017/LD/2025', 'Kendari', 'Sosialisasi e-Arsip Terintegrasi', '2025-03-19', '2025-03-21', NULL, '2025-03-14 07:04:16', '2025-07-25 07:09:09'),
(22, 11, '[\"11\",\"13\"]', '800.1.11.1/018/LD/2025', 'Kendari', 'Koordinasi Peningkatan Peran Penyuluh Pertanian dalam Pendampingan dan Pelaporan Program LTT di Dinas Tanaman Pangan dan Peternakan Prov. Sultra', '2025-03-19', '2025-03-21', NULL, '2025-03-14 07:07:19', '2025-07-25 08:58:46'),
(23, 12, '[\"12\",\"18\"]', '800.1.11.1/019/LD/2025', 'Kendari', 'Pelaporan Kelembagaan Petani Kabupaten Konawe Kepulauan di Dinas Tanaman Pangan dan Peternakan Prov. Sultra', '2025-03-25', '2025-03-27', NULL, '2025-03-14 07:08:21', '2025-07-25 09:24:13'),
(24, 3, '[\"3\",\"4\",\"9\"]', '800.1.11.1/020/LD/2025', 'JAWA TIMUR', 'Konsultasi dan Koordinasi Pelatihan Manajemen Pemeliharaan Ternak Ruminansa', '2025-04-14', '2025-04-18', NULL, '2025-04-13 02:40:42', '2025-04-13 02:45:11'),
(26, 6, '[\"6\"]', '800.1.11.1/021/LD/2025', 'Dinas Pertanian Provinsi Sulawesi Tenggara', 'Konsultasi Penyaluran Pupuk Tahap 2', '2025-04-16', '2025-04-18', NULL, '2025-04-16 00:58:38', '2025-04-21 02:24:28'),
(27, 13, '[\"13\"]', '800.1.11.1/022/LD/2025', 'Kolaka', 'Hari Ulang Tahun Sultra di Kolaka', '2025-04-22', '2025-04-25', NULL, '2025-04-21 07:28:32', '2025-04-21 07:31:35'),
(28, 20, '[\"20\"]', '800.1.11.1/023/LD/2025', 'Dinas Tanaman Pangan dan Peternakan Provinsi Sulawesi Tenggara', 'Koordinasi dan Konsultasi Data Pangan Kabupaten Konawe Kepulauan Triwulan II di Dinas Tanaman Pangan dan Peternakan Provinsi Sulawesi Tenggara', '2025-04-23', '2025-04-25', NULL, '2025-04-22 00:49:29', '2025-04-22 00:49:29'),
(29, 11, '[\"11\",\"12\",\"19\"]', '800.1.11.1/014.a/LD/2025', 'Kendari', 'Koordinasi Realokasi Penerima Manfaat Program Pekarangan Pangan Bergizi di Dinas Tanaman Pangan dan Peternakan Prov. Sultra', '2025-03-07', '2025-03-09', NULL, '2025-04-23 02:21:22', '2025-07-25 09:38:15'),
(30, 9, '[\"9\",\"14\",\"15\"]', '800.1.11.1/024/LD/2025', 'Kendari', 'Penyesuaian Program Pengendalian dan Pemanfaatan Kawasan Pertanian di Dinas Perkebunan dan Hortikultura Provinsi Sulawesi Tenggara', '2025-04-24', '2025-04-26', NULL, '2025-04-23 07:35:36', '2025-07-25 09:10:57'),
(31, 6, '[\"6\",\"14\"]', '800.1.11.1/025/LD/2025', 'Kementrian Pertanian Jakarta', 'Konsultasi Kegiatan Pertanian di Dirjen PSP', '2025-04-28', '2025-05-02', NULL, '2025-04-25 15:20:36', '2025-04-25 15:20:36'),
(32, 4, '[\"4\",\"10\"]', '800.1.11.1/026/LD/2025', 'Konawe Selatan', 'Identifikasi Calon Hewan Kurban Bantuan Kemasyarakatan (BANMAS) Presiden RI pada idul Adha 1446 H / 2025 M di Kabupaten Konawe Selatan', '2025-04-29', '2025-05-02', 'Surat Dirjen Peternakan dan Kesehatan Hewan Nomor B-54/PK/210/F.2/04/2025 perihal Kegiatan BANMAS', '2025-04-29 02:43:08', '2025-04-29 02:43:08'),
(33, 7, '[\"7\"]', '800.1.11.1/027/LD/2025', 'Kendari', 'Tindaklanjut Pemeriksaan BPK terkait BPKB Kendaraan Roda 2 dan Roda 4 di Dealer Hasrat Abadi dan Kalla Toyota', '2025-04-30', '2025-05-02', NULL, '2025-04-29 03:20:46', '2025-04-29 03:20:46'),
(34, 15, '[\"15\"]', '800.1.11.1/028/LD/2025', 'Kendari', 'Konsultasi', '2025-04-30', '2025-05-02', NULL, '2025-04-30 06:41:13', '2025-05-26 00:47:58'),
(35, 9, '[\"9\",\"8\",\"11\"]', '800.1.11.1/029/LD/2025', 'Dinas Tanaman Pangan dan Peternakan Prov. Sultra', 'Verifikasi Data Anomali dan Penginputan e-alokasi pupuk bersubsidi triwulan II di Dinas Tanaman Pangan dan Peternakan Prov. Sultra', '2025-05-05', '2025-05-08', NULL, '2025-04-30 07:16:27', '2025-05-08 08:26:17'),
(36, 3, '[\"3\"]', '800.1.11.1/030/LD/2025', 'Dinas Perkebunan dan Hortikultura Prov. Sultra', 'Koordinasi Penetapan CPCL penerima manfaat kegiatan P2B di Dinas Perkebunan dan Hortikultura Prov. Sultra', '2025-05-06', '2025-05-08', NULL, '2025-05-05 09:21:38', '2025-05-05 09:21:38'),
(37, 4, '[\"4\"]', '800.1.11.1/031/LD/2025', 'Kota Kendari', 'Rapat Koordinasi Penyusunana Angka Statistik Peternakan di Provinsi Sulawesi Tenggara', '2025-05-07', '2025-05-09', 'Surat Dinas Tanaman Pangan dan Peternakan Prov. Sulawesi Tenggara Nomor B/725/000.1.5/V/2025', '2025-05-06 07:55:05', '2025-05-06 23:31:38'),
(38, 5, '[\"5\",\"27\",\"25\",\"57\",\"58\",\"59\",\"60\",\"61\",\"62\",\"63\",\"64\",\"65\",\"66\"]', '800.1.11.1/032/LD/2025', 'Malang Jawa Timur', 'Pendampingan/Mengikuti Bimtek Pelatihan Manajemen Pemeliharaan Ternak Ruminasia Bagi Aparatur dan Petani di Malang Jawa Timur', '2025-05-19', '2025-05-23', NULL, '2025-05-17 01:55:45', '2025-05-17 01:55:45'),
(39, 6, '[\"6\",\"10\",\"12\",\"16\",\"77\",\"78\",\"79\",\"80\",\"71\",\"73\",\"74\",\"75\",\"76\",\"83\"]', '800.1.11.1/033/LD/2025', 'Jawa Barat', 'Perjalanan Dinas Luar Daerah Luar Provinsi Dalam Rangka Pendampingan BIMTEK Pelatihan Tanaman Hortikultura Bagi Aparatur dan Petani Kab. Konawe Kepulauan di Balai Perakitan dan Pengujian Tanaman Sayuran di Lembang Jawa Barat', '2025-05-19', '2025-05-23', NULL, '2025-05-18 12:18:00', '2025-06-16 06:33:05'),
(40, 3, '[\"3\",\"15\",\"84\",\"85\",\"86\",\"70\",\"81\",\"82\"]', '800.1.11.1/034/LD/2025', 'Bogor', 'Perjalanan Dinas Luar Daerah Luar Provinsi Dalam Rangka Pendampingan BIMTEK Pelatihan Pengembangan Tanaman Nilam Bagi Aparatur dan Petani Kab. Konawe Kepulauan di Balai Perakitan dan Pengujian Tanaman Rempah, Obat, dan Aromatik di Bogor', '2025-05-19', '2025-05-23', NULL, '2025-05-18 12:49:23', '2025-06-16 06:32:29'),
(41, 4, '[\"4\",\"9\",\"8\"]', '800.1.11.1/035/LD/2025', 'Kendari', 'Pertemuan Penyelesaian Administrasi Bantuan Kemasyarakatan (BANMAS) Presiden Republik Indonesia Tahun 2025', '2025-05-21', '2025-05-23', 'Surat Kepala Dinas Tanaman Pangan dan Peternakan Provinsi Sulawesi Tenggara Nomor : B/785/500.1.3/V/2025 Perihal Penyelesaian Administrasi Bantuan Kemasyarakatan (BANMAS) Presiden RI Tahun 2025', '2025-05-20 17:35:36', '2025-05-26 01:06:24'),
(42, 4, '[\"4\",\"9\",\"14\",\"91\",\"90\"]', '800.1.11.1/036/LD/2025', 'PT. Jass Mandiri Sejahtera', 'Pendampingan/Pelatihan Petani Milenial (Usaha Ayam Pedaging) di PT. Jass Mandiri Sejahtera', '2025-05-27', '2025-05-30', NULL, '2025-05-25 13:51:45', '2025-06-12 04:59:17'),
(43, 33, '[\"33\",\"39\"]', '800.1.11.1/037/LD/2025', 'Kantor Perhimpunan Dokter Hewan Indonesia', 'Konsultasi dan Koordinasi Kesiapan Narasumber Pelatihan Juru Sembelih Halal', '2025-05-27', '2025-05-30', NULL, '2025-05-25 13:54:16', '2025-05-25 13:54:16'),
(44, 6, '[\"6\",\"9\",\"14\",\"15\"]', '800.1.11.1/038/LD/2025', 'Kendari', 'Menghadiri kegiatan Desk pelaksanaan Instruksi presiden No. 2 Tahun 2025 Tahap II', '2025-06-03', '2025-06-04', NULL, '2025-06-02 01:30:50', '2025-06-02 03:15:49'),
(45, 6, '[\"6\",\"14\"]', '800.1.11.1/039/LD/2025', 'Kendari', 'Menghadiri kegiatan Desk pelaksanaan Instruksi presiden No. 2 Tahun 2025 Tahap II', '2025-06-03', '2025-06-04', NULL, '2025-06-02 07:02:09', '2025-06-02 07:02:09'),
(46, 7, '[\"7\",\"8\"]', '800.1.11.1/040/LD/2025', 'Kendari', 'Melakukan Penelusuran BKPB atas Kendaraan Dinas Pertanian Pengadaan Tahun 2015 di Dealer Yamaha Kendari', '2025-06-16', '2025-06-19', NULL, '2025-06-12 04:09:26', '2025-06-12 04:09:26'),
(47, 6, '[\"6\",\"10\",\"12\"]', '800.1.11.1/041/LD/2025', 'Dinas Tanaman Pangan dan Peternakan Provinsi Sulawesi Tenggara', 'Koordinasi Penyaluran Biaya Operasional Penyuluh (BOP) di Dinas Tanaman Pangan dan Peternakan Provinsi Sulawesi Tenggara', '2025-06-26', '2025-06-27', NULL, '2025-06-25 03:05:41', '2025-06-25 03:05:41'),
(48, 20, '[\"20\",\"39\",\"7\"]', '800.1.11.1/042/LD/2025', 'Dinas Perkebunan dan Hortikultura Provinsi Sulawesi Tenggara', '........', '2025-06-26', '2025-06-27', NULL, '2025-06-25 04:16:13', '2025-06-25 09:36:23'),
(49, 26, '[\"26\"]', '800.1.11.1/043/LD/2025', 'Kendari', 'Kegiatan Pekarangan Pangan Bergizi (P2B) di Polres Kendari', '2025-06-30', '2025-07-01', NULL, '2025-06-30 01:40:24', '2025-08-06 05:44:31'),
(50, 13, '[\"13\"]', '800.1.11.1/044/LD/2025', 'Dinas Tanaman Pangan dan Peternakan Prov. Sultra', 'Konsultasi Tindaklanjut Data ALSINTAN Kabupaten Konawe Kepulauan di Dinas Tanaman Pangan dan Peternakan Provinsi Sulawesi Tenggara', '2025-07-01', '2025-07-04', NULL, '2025-06-30 02:03:35', '2025-06-30 02:03:35'),
(51, 6, '[\"6\",\"26\"]', '800.1.11.1/045/LD/2025', 'Konawe Selatan', 'Monitoring Kegiatan Pentadaan Alat Penyulingan Nilam di Kab. Konawe Selatan', '2025-07-02', '2025-07-04', NULL, '2025-07-01 07:56:22', '2025-07-01 07:56:22'),
(52, 11, '[\"11\"]', '800.1.11.1/046/LD/2025', 'Dinas Perkebunan dan Hortikultura Provinsi Sulawesi Tenggara', 'Koordinasi Pelaporan dan Sinkronisasi Data Hortikultura dan Perkebunan di Dinas Perkebunan dan Hortikultura Provinsi Sulawesi Tenggara', '2025-07-07', '2025-07-09', NULL, '2025-07-06 15:16:29', '2025-07-06 15:16:29'),
(53, 9, '[\"9\",\"14\"]', '800.1.11.1/047/LD/2025', 'Balai Wilayah Sungai IV Kendari', 'Undangan Verifikasi Usulan Kegiatan Inpres Nomor 2 Tahun 2025 Tahap III Tingkat Balai', '2025-07-09', '2025-07-11', NULL, '2025-07-07 05:35:23', '2025-08-06 06:33:35'),
(54, 10, '[\"10\",\"7\"]', '800.1.11.1/048/LD/2025', 'Kendari', 'Koordinasi perihal Laporan Kunjungan Lapangan dalam Rangka Rencana Monitoring dan Evaluasi Program Pertanian dengan Dana BOP di Dinas Tanaman Pangan dan Peternakan Prov.Sulawesi Tenggara', '2025-07-14', '2025-07-16', NULL, '2025-07-13 06:54:36', '2025-07-13 18:02:47'),
(55, 3, '[\"3\",\"9\"]', '800.1.11.1/049/LD/2025', 'Dinas Perkebunan dan Hortikultura Provinsi Sulawesi Tenggara', 'Koordinasi Usulan Pengembangan Durian di Dinas Perkebunan dan Hortikultura Provinsi Sulawesi Tenggara', '2025-07-15', '2025-07-18', NULL, '2025-07-15 03:51:47', '2025-07-15 03:54:10'),
(56, 8, '[\"8\"]', '800.1.11.1/050/LD/2025', 'Kota Kendari', 'Melakukan Koordinasi Pengajuan Data Tidak Padan dan Penginputan Pengajuan E-Alokasi Pupuk Bersubsidi Triwulan II', '2025-07-17', '2025-07-18', NULL, '2025-07-16 05:50:30', '2025-07-16 05:50:30'),
(57, 10, '[\"10\"]', '800.1.11.1/019.a/LD/2025', 'Dinas Tanaman Pangan dan Peternakan Prov. Sultra', 'Koordinasi dan Konsultasi Data Kelembagaan Penyuluhan Kabupaten Konawe Kepulauan di Dinas Tanaman Pangan dan Peternakan Provinsi Sulawesi Tenggara', '2025-04-11', '2025-04-12', NULL, '2025-07-25 06:57:40', '2025-07-25 06:58:10'),
(58, 14, '[\"14\"]', '800.1.11.1/021.a/LD/2025', 'Dinas Tanaman Pangan dan Peternakan Prov. Sultra', 'Konsultasi Adendum Excavator Merk Hyundai Type PC 220, Tahun 2025 di Dinas Tanaman Pangan dan Peternakan Prov. SULTRA', '2025-04-17', '2025-04-19', NULL, '2025-07-25 09:33:15', '2025-07-25 09:35:17'),
(59, 7, '[\"7\",\"8\"]', '800.1.11.1/051/LD/2025', 'Kendari', 'Rapat Koordinasi Penyusunan Angka Tetap (ATAP) 2024 Produksi Tanaman Pangan', '2025-07-31', '2025-08-02', NULL, '2025-07-31 02:28:05', '2025-07-31 02:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kategoris`
--

CREATE TABLE `sub_kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `nomor_sub_kategori` varchar(255) NOT NULL,
  `nama_sub_kategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_kategoris`
--

INSERT INTO `sub_kategoris` (`id`, `category_id`, `nomor_sub_kategori`, `nama_sub_kategori`, `created_at`, `updated_at`) VALUES
(1, 59, '1', 'Rencana Pengawasan', NULL, NULL),
(2, 59, '2', 'Pelaksanaan Pengawasan', NULL, NULL),
(3, 60, '1', 'Penyusunan dan Penetapan Kebutuhan Aparatur Sipil Negara', NULL, NULL),
(4, 60, '2', 'Formasi dan Pengadaan Pegawai', NULL, NULL),
(5, 60, '3', 'Mutasi Pegawai', NULL, NULL),
(6, 60, '4', 'Pengembangan Karir', NULL, NULL),
(7, 60, '5', 'Kinerja Aparatur Sipil Negara', NULL, NULL),
(8, 60, '6', 'Kode Etik, Disiplin, Pemberhentian dan Pensiun ASN', NULL, NULL),
(9, 60, '7', 'Bantuan Hukum', NULL, NULL),
(10, 60, '8', 'Status dan Kedudukan Pegawai', NULL, NULL),
(11, 60, '9', 'Sistem Informasi Kepegawaian', NULL, NULL),
(12, 60, '10', 'Pengawasan dan Pengendalian', NULL, NULL),
(13, 60, '11', 'Administrasi Pegawai', NULL, NULL),
(14, 60, '12', 'Kesejahteraan Pegawai', NULL, NULL),
(15, 60, '13', 'Administrasi Perseorangan', NULL, NULL),
(16, 60, '14', 'Penilaian Kompetensi', NULL, NULL),
(17, 55, '1', 'Kebijakan di bidang Pekerjaan Umum yang dilakukan oleh Pemerintah Daerah', NULL, NULL),
(18, 55, '2', 'Penatagunaan Sumber Daya Air', NULL, NULL),
(19, 55, '3', 'Pengembangan Jaringan Sumber Daya Air', NULL, NULL),
(20, 55, '4', 'Pengelolaan Sumber Daya Air', NULL, NULL),
(21, 55, '5', 'Operasi dan Pemeliharaan Sumber Daya Air', NULL, NULL),
(22, 55, '6', 'Pengendalian Lumpur Sidoarjo (Bencana Lokal Lingkup Nasional)', NULL, NULL),
(23, 55, '7', 'Pengembangan Jaringan Jalan', NULL, NULL),
(24, 55, '8', 'Pembangunan Jalan', NULL, NULL),
(25, 55, '9', 'Preservasi Jalan', NULL, NULL),
(26, 55, '10', 'Pengelolaan Jembatan', NULL, NULL),
(27, 55, '11', 'Pengelolaan Jalan Bebas Hambatan, Perkotaan, dan Fasilitas Jalan Daerah', NULL, NULL),
(28, 55, '12', 'Pengaturan Jalan Tol', NULL, NULL),
(29, 55, '13', 'Keterpaduan Infrastruktur Permukiman', NULL, NULL),
(30, 55, '14', 'Pengembangan Kawasan Permukiman', NULL, NULL),
(31, 55, '15', 'Pembinaan Penataan Bangunan', NULL, NULL),
(32, 55, '16', 'Pengembangan Sistem Penyediaan Air Minum', NULL, NULL),
(33, 55, '17', 'Pengembangan Penyehatan Lingkungan Permukiman', NULL, NULL),
(34, 55, '18', 'Pemantauan dan Evaluasi', NULL, NULL),
(35, 56, '1', 'Kebijakan di bidang Perumahan Rakyat dan Kawasan Pemukiman yang dilakukan oleh Pemerintah Daerah', NULL, NULL),
(36, 56, '2', 'Perencanaan Pembiayaan Perumahan', NULL, NULL),
(37, 56, '3', 'Pola Pembiayaan Perumahan', NULL, NULL),
(38, 56, '4', 'Pendayagunaan Sumber Pembiayaan Perumahan', NULL, NULL),
(39, 56, '5', 'Perencanaan Penyediaan Perumahan', NULL, NULL),
(40, 56, '6', 'Penyediaan Rumah Susun', NULL, NULL),
(41, 56, '7', 'Penyediaan Rumah Khusus', NULL, NULL),
(42, 56, '8', 'Penyediaan Rumah Umum dan Komersial', NULL, NULL),
(43, 56, '9', 'Investasi Infrastruktur', NULL, NULL),
(44, 56, '10', 'Penyelenggaraan Jasa Konstruksi', NULL, NULL),
(45, 56, '11', 'Kelembagaan dan Sumber Daya Konstruksi', NULL, NULL),
(46, 56, '12', 'Kompetensi dan Produktivitas Konstruksi', NULL, NULL),
(47, 56, '13', 'Peningkatan Kerjasama dan Pemberdayaan Jasa Konstruksi', NULL, NULL),
(48, 56, '14', 'Peningkatan Jasa Konstruksi', NULL, NULL),
(49, 56, '15', 'Penerapan Teknologi Konstruksi', NULL, NULL),
(50, 56, '16', 'Rencana Pengembangan Infrastruktur Pekerjaan Perumahan Rakyat (PUPR)', NULL, NULL),
(51, 56, '17', 'Pengembangan Kawasan Strategis', NULL, NULL),
(52, 56, '18', 'Pengembangan Kawasan Perkotaan', NULL, NULL),
(53, 56, '19', 'Pemantauan dan Evaluasi', NULL, NULL),
(54, 57, '1', 'Kebijakan di bidang Tata Ruang yang dilakukan Pemerintahan Daerah', NULL, NULL),
(55, 57, '2', 'Perencanaan', NULL, NULL),
(56, 57, '3', 'Pemanfaatan dan Pengendalian', NULL, NULL),
(57, 57, '4', 'Pemetaan', NULL, NULL),
(58, 58, '1', 'Kebijakan di bidang Lingkungan Hidup yang dilakukan oleh Pemerintah Daerah', NULL, NULL),
(59, 58, '2', 'Perencanaan Pemanfaatan Sumber Daya Alam dan Lingkungan Hidup', NULL, NULL),
(60, 58, '3', 'Penerapan Kebijakan Wilayah dan Sektor', NULL, NULL),
(61, 58, '4', 'Ekonomi Lingkungan', NULL, NULL),
(62, 58, '5', 'Dampak Lingkungan', NULL, NULL),
(63, 58, '6', 'Pemantauan dan Pengawasan', NULL, NULL),
(64, 58, '7', 'Evaluasi dan Pengembangan', NULL, NULL),
(65, 58, '8', 'Keanekaragaman Hayati dan Pengendalian Kerusakan Lahan', NULL, NULL),
(66, 58, '9', 'Kerusakan Ekosistem Perairan Darat', NULL, NULL),
(67, 58, '10', 'Mitigasi dan Pelestarian Fungsi Atmosfer', NULL, NULL),
(68, 58, '11', 'Adaptasi Perubahan Iklim', NULL, NULL),
(69, 58, '12', 'Pengelolaan Bahan Berbahaya dan Beracun', NULL, NULL),
(70, 58, '13', 'Verifikasi Pengelolaan Limbah Bahan Berbahaya dan Beracun', NULL, NULL),
(71, 58, '14', 'Pengelolaan Limbah B3 dan Pemulihan Kontaminasi Limbah B3', NULL, NULL),
(72, 58, '15', 'Pengelolaan Sampah', NULL, NULL),
(73, 58, '16', 'Hukum Administrasi Lingkungan', NULL, NULL),
(74, 58, '17', 'Penyelesaian Sengketa Lingkungan', NULL, NULL),
(75, 58, '18', 'Penegakan Hukum Pidana Lingkungan', NULL, NULL),
(76, 58, '19', 'Komunikasi Lingkungan', NULL, NULL),
(77, 58, '20', 'Penguatan Inisiatif Masyarakat', NULL, NULL),
(78, 58, '21', 'Peningkatan Peran Masyarakat', NULL, NULL),
(79, 58, '22', 'Peningkatan Peran Organisasi Kemasyarakatan', NULL, NULL),
(80, 58, '23', 'Data dan Informasi Lingkungan', NULL, NULL),
(81, 58, '24', 'Kelembagaan Lingkungan', NULL, NULL),
(82, 58, '25', 'Standarisasi dan Teknologi', NULL, NULL),
(83, 58, '26', 'Pusat Sarana Pengendalian Dampak Lingkungan', NULL, NULL),
(84, 49, '1', 'Kebijakan di bidang Pariwisata dan Ekonomi Kreatif yang dilakukan oleh Pemerintah Daerah', NULL, NULL),
(85, 49, '2', 'Pengembangan Destinasi Wisata', NULL, NULL),
(86, 49, '3', 'Pemasaran Pariwisata', NULL, NULL),
(87, 49, '4', 'Ekonomi Kreatif Berbasis Seni dan Budaya', NULL, NULL),
(88, 49, '5', 'Ekonomi Kreatif Berbasis Media, Desain, dan IPTEK', NULL, NULL),
(89, 49, '6', 'Pengembangan Sumber Daya Pariwisata dan Ekonomi Kreatif', NULL, NULL),
(90, 50, '1', 'Kebijakan di bidang Statistik yang dilakukan oleh Pemerintah Daerah', NULL, NULL),
(91, 50, '2', 'Sensus Penduduk, Pertanian, dan Ekonomi', NULL, NULL),
(92, 50, '3', 'Survei', NULL, NULL),
(93, 50, '4', 'Konsolidasi Data Statistik', NULL, NULL),
(94, 50, '5', 'Evaluasi dan Pelaporan Sensus, Survei, dan Konsolidasi Data Statistik', NULL, NULL),
(95, 51, '1', 'Kebijakan di bidang Ketenagakerjaan yang dilakukan oleh Pemerintah Daerah', NULL, NULL),
(96, 51, '2', 'Perencanaan Tenaga Kerja', NULL, NULL),
(97, 51, '3', 'Pengembangan Standarisasi Kompetensi', NULL, NULL),
(98, 51, '4', 'Bina Lembaga dan Sarana Pelatihan Kerja', NULL, NULL),
(99, 51, '5', 'Bina Instruktur dan Tenaga Pelatihan', NULL, NULL),
(100, 51, '6', 'Bina Pemagangan', NULL, NULL),
(101, 51, '7', 'Produktivitas dan Kewirausahaan', NULL, NULL),
(102, 51, '8', 'Pengembangan Pasar Kerja', NULL, NULL),
(103, 51, '9', 'Penempatan Tenaga Kerja Dalam Negeri', NULL, NULL),
(104, 51, '10', 'Perluasan Kesempatan Kerja dan Pengembangan Tenaga Kerja Sektor Informal', NULL, NULL),
(105, 51, '11', 'Standardisasi Profesi', NULL, NULL),
(106, 51, '12', 'Persyaratan Kerja, Kesejahteraan, dan Analisis Diskriminasi', NULL, NULL),
(107, 51, '13', 'Kelembagaan dan Pemasyarakatan Hubungan Industrial', NULL, NULL),
(108, 51, '14', 'Pengupahan dan Penyelesaian Perselisihan Hubungan Industrial', NULL, NULL),
(109, 51, '15', 'Pencegahan dan Penyelesaian Pelestarian Hubungan Industrial', NULL, NULL),
(110, 51, '16', 'Pengawasan Norma Kerja dan Jaminan Sosial Tenaga Kerja', NULL, NULL),
(111, 51, '17', 'Pengawasan Norma Kerja Perempuan dan Anak', NULL, NULL),
(112, 51, '18', 'Pengawasan Norma Keselamatan dan Kesehatan Kerja', NULL, NULL),
(113, 51, '19', 'Laporan Hasil Pengawasan Ketenagakerjaan', NULL, NULL),
(114, 51, '20', 'Bina Penegakan Hukum', NULL, NULL),
(115, 51, '21', 'Pengkajian dan Bimbingan Teknis Pelayanan Keselamatan dan Kesehatan Kerja (K3)', NULL, NULL),
(116, 51, '22', 'Pengembangan SDM dan Kompetensi K3', NULL, NULL),
(117, 52, '1', 'Kebijakan di bidang Penanaman Modal yang dilakukan oleh Pemerintah Daerah', NULL, NULL),
(118, 52, '2', 'Perencanaan Penanaman Modal', NULL, NULL),
(119, 52, '3', 'Pengembangan Iklim Penanaman Modal', NULL, NULL),
(120, 52, '4', 'Promosi Penanaman Modal', NULL, NULL),
(121, 52, '5', 'Kerja Sama Penanaman Modal', NULL, NULL),
(122, 52, '6', 'Pengendalian Pelaksanaan Penanaman Modal', NULL, NULL),
(123, 52, '7', 'Pelayanan Penanaman Modal', NULL, NULL),
(124, 53, '1', 'Kebijakan di bidang Pertanahan yang dilakukan oleh Pemerintah Daerah', NULL, NULL),
(125, 53, '2', 'Pengadaan dan Penataan Administrasi Pertanahan', NULL, NULL),
(126, 53, '3', 'Penatagunaan dan Penguatan Hak Atas Tanah', NULL, NULL),
(127, 53, '4', 'Sengketa Tanah', NULL, NULL),
(128, 54, '1', 'Kebijakan di bidang Transmigrasi yang dilakukan oleh Pemerintah Daerah', NULL, NULL),
(129, 54, '2', 'Penyediaan Tanah Transmigrasi', NULL, NULL),
(130, 54, '3', 'Pembangunan Pemukiman dan Infrastruktur Kawasan Transmigrasi', NULL, NULL),
(131, 54, '4', 'Fasilitasi Penempatan Transmigrasi', NULL, NULL),
(132, 54, '5', 'Partisipasi Masyarakat', NULL, NULL),
(133, 54, '6', 'Pembinaan Pengembangan Masyarakat dan Kawasan Transmigrasi', NULL, NULL),
(134, 54, '7', 'Peningkatan Kapasitas Sumber Daya Manusia dan Masyarakat', NULL, NULL),
(135, 54, '8', 'Pengembangan Usaha', NULL, NULL),
(136, 54, '9', 'Pengembangan Sarana dan Prasarana Kawasan', NULL, NULL),
(137, 54, '10', 'Penyerasian Lingkungan', NULL, NULL),
(138, 48, '1', 'Kebijakan di bidang Komunikasi dan Informatika yang dilakukan oleh Pemerintah Daerah', NULL, NULL),
(139, 48, '2', 'Telekomunikasi', NULL, NULL),
(140, 48, '3', 'Penyiaran', NULL, NULL),
(141, 48, '4', 'Telekomunikasi Khusus, Penyiaran Publik, dan Kewajiban Universal', NULL, NULL),
(142, 48, '5', 'Pengendalian Informatika', NULL, NULL),
(143, 48, '6', 'e-Government', NULL, NULL),
(144, 48, '7', 'e-Business', NULL, NULL),
(145, 48, '8', 'Pemberdayaan Informatika Masyarakat', NULL, NULL),
(146, 48, '9', 'Pemberdayaan Industri Informatika', NULL, NULL),
(147, 48, '10', 'Keamanan Informasi', NULL, NULL),
(148, 48, '11', 'Komunikasi Publik', NULL, NULL),
(149, 48, '12', 'Pengolahan dan Penyediaan Informasi', NULL, NULL),
(150, 48, '13', 'Pengelolaan Media Publik', NULL, NULL),
(151, 48, '14', 'Kemitraan Komunikasi', NULL, NULL),
(152, 48, '15', 'Infrastruktur Informatika', NULL, NULL),
(153, 48, '16', 'Sistem dan Data', NULL, NULL),
(154, 48, '17', 'Pusat Kerjasama', NULL, NULL),
(155, 48, '18', 'Pusat Informasi dan Hubungan Masyarakat', NULL, NULL),
(156, 48, '19', 'Evaluasi', NULL, NULL),
(157, 47, '1', 'Kebijakan di bidang Perhubungan yang dilakukan oleh Pemerintah Daerah', NULL, NULL),
(158, 47, '2', 'Jaringan Prasarana dan Pelayanan', NULL, NULL),
(159, 47, '3', 'Pengembangan Transportasi Jalan', NULL, NULL),
(160, 47, '4', 'Pengujian Kendaraan Bermotor', NULL, NULL),
(161, 47, '5', 'Teknologi Kendaraan Bermotor', NULL, NULL),
(162, 47, '6', 'Manajemen dan Rekayasa Lalu Lintas', NULL, NULL),
(163, 47, '7', 'Perlengkapan Jalan', NULL, NULL),
(164, 47, '8', 'Angkutan Penumpang', NULL, NULL),
(165, 47, '9', 'Angkutan Barang', NULL, NULL),
(166, 47, '10', 'Monitoring Operasional', NULL, NULL),
(167, 47, '11', 'Bimbingan Teknis Penyidik Pegawai Negeri Sipil', NULL, NULL),
(168, 47, '12', 'Analisa dan Evaluasi Jaringan Transportasi Sungai, Danau, dan Penyeberangan', NULL, NULL),
(169, 47, '13', 'Pengembangan Jaringan Transportasi Sungai, Danau, dan Penyeberangan', NULL, NULL),
(170, 47, '14', 'Rancang Bangun Sarana Angkutan Sungai, Danau, dan Penyeberangan', NULL, NULL),
(171, 47, '15', 'Bimbingan Perawatan Sarana Angkutan Sungai, Danau, dan Penyeberangan', NULL, NULL),
(172, 47, '16', 'Rancang Bangun Pelabuhan Sungai, Danau, dan Penyeberangan', NULL, NULL),
(173, 47, '17', 'Kualifikasi Teknis Petugas Pelabuhan Sungai, Danau, dan Penyeberangan', NULL, NULL),
(174, 47, '18', 'Manajemen Lalu Lintas Sungai, Danau, dan Penyeberangan', NULL, NULL),
(175, 47, '19', 'Alur dan Perambuan Lalu Lintas Sungai, Danau, dan Penyeberangan', NULL, NULL),
(176, 47, '20', 'Bimbingan Usaha Angkutan Sungai, Danau, dan Penyeberangan', NULL, NULL),
(177, 47, '21', 'Tarif dan Keperintisan', NULL, NULL),
(178, 47, '22', 'Bina Sistem Transportasi Perkotaan', NULL, NULL),
(179, 47, '23', 'Lalu Lintas Perkotaan', NULL, NULL),
(180, 47, '24', 'Angkutan Perkotaan', NULL, NULL),
(181, 47, '25', 'Pengaduan Moda Transportasi Perkotaan', NULL, NULL),
(182, 47, '26', 'Dampak Transportasi Perkotaan', NULL, NULL),
(183, 47, '27', 'Monitoring dan Evaluasi Manajemen Keselamatan', NULL, NULL),
(184, 47, '28', 'Pengembangan Keselamatan', NULL, NULL),
(185, 47, '29', 'Promosi dan Kemitraan Keselamatan', NULL, NULL),
(186, 47, '30', 'Bina Keselamatan Angkutan Umum', NULL, NULL),
(187, 47, '31', 'Audit Keselamatan', NULL, NULL),
(188, 47, '32', 'Inspeksi Keselamatan', NULL, NULL),
(189, 47, '33', 'Parkir', NULL, NULL),
(190, 46, '17', 'Bina Program Tenaga Listrik', NULL, NULL),
(191, 46, '18', 'Bina Usaha Ketenagalistrikan', NULL, NULL),
(192, 46, '19', 'Teknik dan Lingkungan Ketenagalistrikan', NULL, NULL),
(193, 46, '20', 'Sertifikasi', NULL, NULL),
(194, 46, '21', 'Akreditasi Ketenagalistrikan', NULL, NULL),
(195, 46, '22', 'Standarisasi Kompetensi', NULL, NULL),
(196, 46, '23', 'Standardisasi Nasional Indonesia (SNI) Bidang Ketenagalistrikan', NULL, NULL),
(197, 46, '24', 'Standardisasi Usaha Penunjang Ketenagalistrikan', NULL, NULL),
(198, 46, '25', 'Bina Program Mineral dan Batubara', NULL, NULL),
(199, 46, '26', 'Pembinaan Pengusahaan Mineral', NULL, NULL),
(200, 46, '27', 'Pembinaan Pengusahaan Batubara', NULL, NULL),
(201, 46, '28', 'Penerimaan Negara', NULL, NULL),
(202, 46, '29', 'Teknik dan Lingkungan Mineral dan Batubara', NULL, NULL),
(203, 46, '30', 'Program Penelitian dan Pengembangan', NULL, NULL),
(204, 46, '31', 'Sarana Litbang', NULL, NULL),
(205, 46, '32', 'Afiliasi', NULL, NULL),
(206, 46, '33', 'Penelitian dan Pengembangan Kegeologian', NULL, NULL),
(207, 46, '34', 'Penelitian dan Pengembangan Teknologi Minyak dan Gas Bumi', NULL, NULL),
(208, 46, '35', 'Penelitian dan Pengembangan Teknologi Mineral Batubara', NULL, NULL),
(209, 46, '36', 'Penelitian dan Pengembangan Ketenagalistrikan dan Energi Baru Terbarukan', NULL, NULL),
(210, 46, '9', 'Teknik dan Lingkungan', NULL, NULL),
(211, 46, '10', 'Infrastruktur Minyak dan Gas Bumi', NULL, NULL),
(212, 46, '11', 'Penyiapan Program Energi Terbarukan dan Konservasi Energi', NULL, NULL),
(213, 46, '12', 'Panas Bumi', NULL, NULL),
(214, 46, '13', 'Bioenergi', NULL, NULL),
(215, 46, '14', 'Aneka Energi', NULL, NULL),
(216, 46, '15', 'Konservasi Energi', NULL, NULL),
(217, 46, '16', 'Perencanaan dan Pembangunan Infrastruktur EBTKE', NULL, NULL),
(218, 46, '17', 'Bina Program Tenaga Listrik', NULL, NULL),
(219, 46, '1', 'Kebijakan di bidang Energi dan Sumber Daya Mineral yang dilakukan oleh Pemerintah Daerah', NULL, NULL),
(220, 46, '2', 'Rekomendasi Kegeologian', NULL, NULL),
(221, 46, '3', 'Penelitian Kegeologian', NULL, NULL),
(222, 46, '4', 'Inventarisasi dan evaluasi kegeologian', NULL, NULL),
(223, 46, '5', 'Administrasi Pelayanan Kegeologian dan Penyajian Data dan Informasi', NULL, NULL),
(224, 46, '6', 'Pembinaan Program Minyak dan Gas Bumi', NULL, NULL),
(225, 46, '7', 'Pembinaan Usaha Hulu Minyak dan Gas Bumi', NULL, NULL),
(226, 46, '8', 'Pembinaan Usaha Hilir Minyak dan Gas Bumi', NULL, NULL),
(227, 46, '6.8', 'Rencana Kebutuhan Impor Barang (RKIB) dan Rencana Impor Barang (RIB)', NULL, NULL),
(228, 46, '7', 'Pembinaan Usaha Hulu Minyak dan Gas Bumi', NULL, NULL),
(229, 46, '7.1', 'Penyiapan dan Penawaran Wilayah Kerja (WK) Minyak dan Gas Bumi (Konvensional dan Non Konvensional)', NULL, NULL),
(230, 46, '7.2', 'Eksplorasi Minyak dan Gas Bumi', NULL, NULL),
(231, 46, '7.3', 'Eksploitasi Minyak dan Gas Bumi', NULL, NULL),
(232, 46, '7.4', 'Pengembangan lapangan Minyak dan Gas Bumi (POD)', NULL, NULL),
(233, 46, '7.5', 'Perpanjangan Kontrak KKS', NULL, NULL),
(234, 46, '7.6', 'Penetapan Alokasi dan Harga Gas', NULL, NULL),
(235, 46, '7.7', 'Partisipasi Interest', NULL, NULL),
(236, 46, '7.8', 'Tumpang Tindih Lahan', NULL, NULL),
(237, 46, '8', 'Pembinaan Usaha Hilir Minyak dan Gas Bumi', NULL, NULL),
(238, 46, '8.1', 'Perumusan pedoman, prosedur, layanan serta pengawasan Usaha Pengolahan, Pengangkutan, Penyimpanan, dan Niaga Minyak Bumi dan Gas Bumi, Hasil Olahan dan Bahan Bakar Lain', NULL, NULL),
(239, 46, '8.2', 'Fasilitasi dan pertimbangan pelanggaran', NULL, NULL),
(240, 46, '8.3', 'Penetapan Harga dan Subsidi Bahan Bakar yang ditetapkan dengan Keputusan Menteri', NULL, NULL),
(241, 46, '9', 'Teknik dan Lingkungan', NULL, NULL),
(242, 46, '9.1', 'Perumusan pelaksanaan dan pengawasan Standar Nasional Indonesia (SNI) / Standar Kompetensi Kerja Nasional Indonesia (SKKNI)', NULL, NULL),
(243, 46, '9.2', 'Registrasi Nomor Pelumas Terdaftar (NPT)', NULL, NULL),
(244, 46, '9.3', 'Buku Register Welding Procedure Specification (WPS)/ Procedure Qualification Record (PQR)', NULL, NULL),
(245, 46, '9.4', 'Register dan Sertifikat Kualifikasi Juru Las', NULL, NULL),
(246, 46, '9.5', 'Keselamatan Hulu Minyak dan Gas Bumi', NULL, NULL),
(247, 46, '9.6', 'Keselamatan Hilir Minyak dan Gas Bumi', NULL, NULL),
(248, 46, '9.7', 'Keselamatan Kerja dan Lindungan Lingkungan', NULL, NULL),
(249, 46, '9.8', 'Dokumen Persetujuan Penunjukkan Kepala/Wakil Kepala Teknik Tambang Hulu dan Hilir', NULL, NULL),
(250, 46, '9.9', 'Penghargaan Keselamatan Kerja', NULL, NULL),
(251, 46, '9.10', 'Usaha penunjang', NULL, NULL),
(252, 46, '10', 'Infrastruktur Minyak dan Gas Bumi', NULL, NULL),
(253, 46, '10.1', 'Perencanaan Program Kerja Pembangunan Infrastruktur Minyak dan Gas Bumi', NULL, NULL),
(254, 46, '10.2', 'Pengadaan Pembangunan Infrastruktur Minyak dan Gas Bumi', NULL, NULL),
(255, 46, '10.3', 'Pelaksanaan Pembangunan Infrastruktur Minyak dan Gas Bumi', NULL, NULL),
(256, 46, '10.4', 'Pengawasan dan Evaluasi Pembangunan Infrastruktur Minyak dan Gas Bumi', NULL, NULL),
(257, 46, '11', 'Penyiapan Program Energi Terbarukan dan Konservasi Energi', NULL, NULL),
(258, 46, '11.1', 'Usulan Wilayah Kerja Panas Bumi', NULL, NULL),
(259, 46, '11.2', 'Usul Program Aneka Energi Pemerintah Daerah dan Lembaga', NULL, NULL),
(260, 46, '11.3', 'Penyiapan Program Pemanfaatan Energi', NULL, NULL),
(261, 46, '11.4', 'Proyeksi Kebutuhan Energi dari EBT', NULL, NULL),
(262, 46, '11.5', 'Perencanaan Pemanfaatan Energi dari EBT', NULL, NULL),
(263, 46, '11.6', 'Penyusunan Neraca Energi', NULL, NULL),
(264, 46, '11.7', 'Road Map di Bidang EBT', NULL, NULL),
(265, 46, '12', 'Panas Bumi', NULL, NULL),
(266, 46, '12.1', 'Penerbitan Surat Keterangan Terdaftar (SKT)', NULL, NULL),
(267, 46, '12.2', 'Sertifikasi Kelayakan Penggunaan Instalasi (SKPI)', NULL, NULL),
(268, 46, '12.3', 'Sertifikasi Kelayakan Penggunaan Peralatan', NULL, NULL),
(269, 46, '12.4', 'Rekomendasi Bahan Peledak', NULL, NULL),
(270, 46, '12.5', 'Perizinan penggunaan gudang bahan peledak', NULL, NULL),
(271, 46, '12.6', 'Izin Tangki Bahan Bakar Cair', NULL, NULL),
(272, 46, '12.7', 'Persetujuan sertifikasi Welding Procedure Specification (WPS) dan Procedure Qualification Record (PQR) dan kualifikasi Juru Las', NULL, NULL),
(273, 46, '12.8', 'Penerbitan Izin Usaha Panas Bumi (IUP)', NULL, NULL),
(274, 46, '12.9', 'Penerbitan Izin Panas Bumi (IPB)', NULL, NULL),
(275, 46, '12.10', 'Penerbitan Izin Pemanfaatan Langsung (IPL)', NULL, NULL),
(276, 46, '12.11', 'Penetapan kapasitas usaha panas bumi', NULL, NULL),
(277, 46, '12.12', 'Penetapan kapasitas Pembangkit Listrik Tenaga Panas Bumi (PLTP)', NULL, NULL),
(278, 46, '12.13', 'Pengawasan Eksplorasi dan Eksploitasi Panas Bumi', NULL, NULL),
(279, 46, '12.14', 'Pelaksanaan Kerja Sama Panas Bumi', NULL, NULL),
(280, 46, '12.15', 'Inventarisasi, Verifikasi dan Evaluasi Obvitnas Bidang Panas Bumi', NULL, NULL),
(281, 46, '12.16', 'Monitoring Pelaksanaan Program Pengembangan dan Pemberdayaan Masyarakat (PPM) pada Kegiatan Pengusahaan Panas Bumi', NULL, NULL),
(282, 46, '12.17', 'Pembinaan dan Pengawasan Investasi Panas Bumi', NULL, NULL),
(283, 46, '13', 'Bioenergi', NULL, NULL),
(284, 46, '13.1', 'Penerbitan Izin Usaha Niaga Bahan Bakar Nabati (BNN)', NULL, NULL),
(285, 46, '13.2', 'Pengadaan Bahan Bakar Nabati (BBN)', NULL, NULL),
(286, 46, '13.3', 'Penerbitan Rekomendasi Ekspor - Impor', NULL, NULL),
(287, 46, '13.4', 'Penetapan Indeks Harga Pasar BBN (HIP BBN)', NULL, NULL),
(288, 46, '13.5', 'Evaluasi/Revisi HIP BBN', NULL, NULL),
(289, 46, '13.6', 'Database Pengusahaan Bioenergi', NULL, NULL),
(290, 46, '13.7', 'Penetapan Badan Usaha sebagai Pengelola Energi Biomassa atau Biogas untuk Pembangkit Listrik', NULL, NULL),
(291, 46, '13.8', 'Penetapan Spesifikasi Bahan Bakar Nabati', NULL, NULL),
(292, 46, '13.9', 'Usul Program Bioenergi Pemerintah Daerah dan Lembaga', NULL, NULL),
(293, 46, '14', 'Aneka Energi', NULL, NULL),
(294, 46, '14.1', 'Penerbitan Izin Usaha Aneka Energi', NULL, NULL),
(295, 46, '14.2', 'Penetapan Kapasitas Usaha', NULL, NULL),
(296, 46, '14.3', 'Rekomendasi Kompetensi dan Rencana Penggunaan Tenaga Kerja Asing', NULL, NULL),
(297, 46, '14.4', 'Rekomendasi Persetujuan Perubahan Pemegang Saham', NULL, NULL),
(298, 46, '14.5', 'Persetujuan Rencana Impor Barang (RIB)', NULL, NULL),
(299, 46, '15', 'Konservasi Energi', NULL, NULL),
(300, 46, '15.1', 'Audit Energi melalui program kemitraan Konservasi Energi', NULL, NULL),
(301, 46, '15.2', 'Monitoring Implementasi hasil audit energi melalui program kemitraan konservasi energi', NULL, NULL),
(302, 46, '15.3', 'Pembinaan dan pengawasan pelaksanaan manajamen energi di pengguna energi di atas 6.000 TOE', NULL, NULL),
(303, 46, '15.4', 'Pengawasan sertifikasi label dan tanda hemat energi pada lampu swabalast', NULL, NULL),
(304, 46, '15.5', 'Penyusunan daftar peralatan/teknologi efisiensi', NULL, NULL),
(305, 46, '15.6', 'Penyusunan emisi energi gas rumah kaca', NULL, NULL),
(306, 46, '15.7', 'Pemberian insentif dan disinsentif konservasi energi', NULL, NULL),
(307, 46, '15.8', 'Profil investasi efisiensi energi', NULL, NULL),
(308, 46, '15.9', 'Invesment Grade Audit (IGA)', NULL, NULL),
(309, 46, '15.10', 'Bimbingan Teknis Bidang EBTKE', NULL, NULL),
(310, 46, '16', 'Perencanaan dan Pembangunan Infrastruktur EBTKE', NULL, NULL),
(311, 46, '16.1', 'Usul Pembangunan Infrastruktur Pemerintah Daerah dan Lembaga', NULL, NULL),
(312, 46, '16.2', 'Perencanaan Pembangunan Infrastruktur Minyak dan Gas Bumi', NULL, NULL),
(313, 46, '16.3', 'Pelaksanaan Pembangunan Infrastruktur Bidang EBTKE', NULL, NULL),
(314, 46, '16.4', 'Evaluasi Program Kerja', NULL, NULL),
(315, 46, '17', 'Bina Program Tenaga Listrik', NULL, NULL),
(316, 46, '17.1', 'Investasi dan pendanaan tenaga listrik', NULL, NULL),
(317, 46, '17.2', 'Pengembangan listrik pedesaan', NULL, NULL),
(318, 46, '17.3', 'Data dan Informasi Ketenagalistrikan', NULL, NULL),
(319, 46, '18', 'Bina Usaha Ketenagalistrikan', NULL, NULL),
(320, 46, '18.1', 'Penyiapan Usaha Ketenagalistrikan', NULL, NULL),
(321, 46, '18.2', 'Harga dan Subsidi Listrik', NULL, NULL),
(322, 46, '18.3', 'Hubungan komersial tenaga listrik', NULL, NULL),
(323, 46, '18.4', 'Perlindungan konsumen listrik', NULL, NULL),
(324, 46, '19', 'Teknik dan Lingkungan Ketenagalistrikan', NULL, NULL),
(325, 46, '19.1', 'Kelaikan teknik dan keselamatan ketenagalistrikan', NULL, NULL),
(326, 46, '19.2', 'Penyiapan kompetensi dan pengawasan tenaga teknik ketenagalistrikan', NULL, NULL),
(327, 46, '19.3', 'Usaha penunjang ketenagalistrikan', NULL, NULL),
(328, 46, '19.4', 'Perlindungan lingkungan ketenagalistrikan', NULL, NULL),
(329, 46, '20', 'Sertifikasi', NULL, NULL),
(330, 46, '20.1', 'Dokumen Sertifikasi Produk peralatan dan pemanfaatan tenaga listrik', NULL, NULL),
(331, 46, '20.2', 'Dokumen Penunjukan Lembaga Sertifikasi Kompetensi (LSK)', NULL, NULL),
(332, 46, '20.3', 'Dokumen Penerbitan Sertifikasi Laik Operasi (SLO) Instalasi Tenaga Listrik', NULL, NULL),
(333, 46, '20.4', 'Dokumen Pembinaan dan pengawasan sertifikat laik operasi (SLO) instalasi tenaga listrik', NULL, NULL),
(334, 46, '20.5', 'Registrasi Sertifikasi', NULL, NULL),
(335, 46, '21', 'Akreditasi Ketenagalistrikan', NULL, NULL),
(336, 46, '22', 'Standarisasi Kompetensi', NULL, NULL),
(337, 46, '23', 'Standardisasi Nasional Indonesia (SNI) Bidang Ketenagalistrikan', NULL, NULL),
(338, 46, '23.1', 'Perumusan rancangan SNI bidang ketenagalistrikan', NULL, NULL),
(339, 46, '23.2', 'Forum konsensus rancangan SNI bidang ketenagalistrikan', NULL, NULL),
(340, 46, '23.3', 'Program pemberlakuan SNI wajib bidang ketenagalistrikan', NULL, NULL),
(341, 46, '23.4', 'Dokumen pengawasan penerapan SNI wajib bidang ketenagalistrikan', NULL, NULL),
(342, 46, '24', 'Standardisasi Usaha Penunjang Ketenagalistrikan', NULL, NULL),
(343, 46, '24.1', 'Klasifikasi usaha penunjang ketenagalistrikan', NULL, NULL),
(344, 46, '24.2', 'Kualifikasi usaha penunjang ketenagalistrikan', NULL, NULL),
(345, 46, '24.3', 'Dokumen penunjukan LIT (Lembaga Inspeksi Teknis)', NULL, NULL),
(346, 46, '24.4', 'Laporan berkala pemegang penunjukan LIT', NULL, NULL),
(347, 46, '24.5', 'Laporan hasil pengawasan penunjukan', NULL, NULL),
(348, 46, '25', 'Bina Program Mineral dan Batubara', NULL, NULL),
(349, 46, '25.1', 'Penyiapan dan Perencanaan Program Mineral dan Batubara', NULL, NULL),
(350, 46, '25.2', 'Rencana Induk Mineral dan Batubara', NULL, NULL),
(351, 46, '25.3', 'Pengembangan Investasi dan Kerja Sama Bidang Mineral dan Batubara', NULL, NULL),
(352, 46, '25.4', 'Data dan Informasai Mineral dan Batubara', NULL, NULL),
(353, 46, '25.5', 'Pelaporan Program Mineral dan Batubara', NULL, NULL),
(354, 46, '25.6', 'Perencanaan, Penyiapan dan Penawaran Wilayah Kerja (WK) Mineral dan Batubara melalui lelang reguler', NULL, NULL),
(355, 46, '25.7', 'Data dan Informasi Wilayah Mineral dan Batubara', NULL, NULL),
(356, 46, '25.8', 'Perencanaan Produksi Mineral dan Batubara', NULL, NULL),
(357, 46, '25.9', 'Pengembangan dan Pemanfaatan Mineral dan Batubara', NULL, NULL),
(358, 46, '26', 'Pembinaan Pengusahaan Mineral', NULL, NULL),
(359, 46, '26.1', 'Ketenagakerjaan', NULL, NULL),
(360, 46, '26.2', 'Pemberdayaan masyarakat sekitar tambang', NULL, NULL),
(361, 46, '26.3', 'Penyelesaian perselisihan usaha pertambangan mineral', NULL, NULL),
(362, 46, '26.4', 'Rekomendasi kegiatan usaha pertambangan mineral', NULL, NULL),
(363, 46, '26.5', 'Laporan/data kegiatan eksplorasi mineral', NULL, NULL),
(364, 46, '26.6', 'Pengawasan produksi dan pemasaran mineral (logam, bukan logam batuan, radioaktif, dan mineral jarang)', NULL, NULL),
(365, 46, '26.7', 'Perizinan usaha pertambangan mineral', NULL, NULL),
(366, 46, '26.8', 'Kontrak Karya (KK)', NULL, NULL),
(367, 46, '26.9', 'Pengelolaan barang Kontrak Karya (KK)', NULL, NULL),
(368, 46, '26.10', 'Persetujuan Obyek Vital Nasional (OBVITNAS)', NULL, NULL),
(369, 46, '26.11', 'Persetujuan perubahan saham direksi, komisaris, pada perusahaan mineral', NULL, NULL),
(370, 46, '26.12', 'Teguran kepada pengusahan Kontrak Karya (KK)', NULL, NULL),
(371, 46, '26.13', 'Tanggapan kepada pemerintah daerah terkait usaha pertambangan mineral', NULL, NULL),
(372, 46, '26.14', 'Pedoman/petunjuk teknis pertambangan mineral termasuk rancangan awal sampul dengan rancangan akhir', NULL, NULL),
(373, 46, '26.15', 'Pelaporan usaha pertambangan mineral', NULL, NULL),
(374, 46, '26.16', 'Penghargaan usaha pertambangan mineral', NULL, NULL),
(375, 46, '26.17', 'Penerbitan sertifikat clear and clean (CnC) Izin Usaha Pertambangan (IUP) Mineral', NULL, NULL),
(376, 46, '27', 'Pembinaan Pengusahaan Batubara', NULL, NULL),
(377, 46, '27.1', 'Ketenagakerjaan', NULL, NULL),
(378, 46, '27.2', 'Pemberdayaan masyarakat sekitar tambang', NULL, NULL),
(379, 46, '27.3', 'Penyelesaian perselisihan usaha pertambangan batubara', NULL, NULL),
(380, 46, '27.4', 'Rekomendasi kegiatan usaha pertambangan batubara', NULL, NULL),
(381, 46, '27.5', 'Laporan/data kegiatan eksplorasi batubara', NULL, NULL),
(382, 46, '27.6', 'Pengawasan produksi dan pemasaran batubara (bitumen padat, batuan aspal, batubara dan gambut)', NULL, NULL),
(383, 46, '27.7', 'Perizinan Usaha Pertambangan Batubara', NULL, NULL),
(384, 46, '27.8', 'Perjanjian Karya Pengusahaan Batubara (PKP2B)', NULL, NULL),
(385, 46, '27.9', 'Pengelolaan Barang Perjanjian Karya Pengusahaan Batubara (PKP2B)', NULL, NULL),
(386, 46, '27.10', 'Persetujuan Obyek Vital Nasional (OBVITNAS)', NULL, NULL),
(387, 46, '27.11', 'Persetujuan perubahan saham direksi, komisaris, pada perusahaan Perjanjian Karya Pengusahaan Batubara (PKP2B)', NULL, NULL),
(388, 46, '27.12', 'Teguran kepada pengusahan Perjanjian Karya Pengusahaan Batubara (PKP2B)', NULL, NULL),
(389, 46, '27.13', 'Tanggapan kepada pemerintah daerah terkait usaha pertambangan batubara', NULL, NULL),
(390, 46, '27.14', 'Pedoman/petunjuk teknis pertambangan mineral termasuk rancangan awal sampul dengan rancangan akhir', NULL, NULL),
(391, 46, '27.15', 'Pelaporan usaha pertambangan batubara', NULL, NULL),
(392, 46, '27.16', 'Penghargaan usaha pertambangan batubara', NULL, NULL),
(393, 46, '27.17', 'Penerbitan sertifikat clear and clean (CnC) Izin Usaha Pertambangan (IUP) Batubara', NULL, NULL),
(394, 46, '28', 'Penerimaan Negara', NULL, NULL),
(395, 46, '28.1', 'Penerimaan Negara Bukan Pajak', NULL, NULL),
(396, 46, '28.2', 'Penetapan Bagi Hasil Penerimaan Negara Bukan Pajak (PNBP)', NULL, NULL),
(397, 46, '28.3', 'Pelaksanaan Pemeriksaan dan Pengujian PNBP', NULL, NULL),
(398, 46, '29', 'Teknik dan Lingkungan Mineral dan Batubara', NULL, NULL),
(399, 46, '29.1', 'Perumusan RSNI (Rancangan Standar Nasional Indonesia)/ RSKKNI (Rancangan Standar Kompetensi Kerja Nasional Indonesia)', NULL, NULL),
(400, 46, '29.2', 'Pengawasan Standardisasi', NULL, NULL),
(401, 46, '29.3', 'Persetujuan Penunjukkan Kepala/Wakil Kepala Teknik Tambang', NULL, NULL),
(402, 46, '29.4', 'Pengawasan Keselamatan Kegiatan dan Keselamatan Pekerja', NULL, NULL),
(403, 46, '29.5', 'Pemeriksaan teknis dan pengujian instalasi dan peralatan tambang', NULL, NULL),
(404, 46, '29.6', 'Analisis Mengenai Dampak Lingkungan (AMDAL)', NULL, NULL),
(405, 46, '29.7', 'Upaya Pengelolaan Lingkungan (UKL) dan Upaya Pemantauan Lingkungan (UPL)', NULL, NULL),
(406, 46, '29.8', 'Rekomendasi bahan kimia', NULL, NULL),
(407, 46, '29.9', 'Pengawasan Pelaksanaan Pengelolaan dan Pemantauan Lingkungan', NULL, NULL),
(408, 46, '29.10', 'Laporan berkala teknik dan lingkungan pertambangan/ laporan tahunan', NULL, NULL),
(409, 46, '29.11', 'Pemberian Penghargaan', NULL, NULL),
(410, 46, '29.12', 'Pengawasan lingkungan pertambangan', NULL, NULL),
(411, 46, '29.13', 'Usaha Jasa Mineral dan Batubara', NULL, NULL),
(412, 46, '29.14', 'Pembinaan dan pengawasan usaha jasa mineral dan batubara', NULL, NULL),
(413, 46, '29.15', 'Rekomendasi Teknis', NULL, NULL),
(414, 46, '29.16', 'Persetujuan Teknis', NULL, NULL),
(415, 46, '29.17', 'Pengawasan Teknis', NULL, NULL),
(416, 46, '29.18', 'Pengawasan Konservasi Mineral dan Batubara', NULL, NULL),
(417, 46, '29.19', 'Peminaan Teknik dan Lingkungan Mineral dan Batubara', NULL, NULL),
(418, 46, '30', 'Program Penelitian dan Pengembangan', NULL, NULL),
(419, 46, '30.1', 'Rencana Penelitian dan Pengembangan', NULL, NULL),
(420, 46, '30.2', 'Pengembangan dan inovasi', NULL, NULL),
(421, 46, '30.3', 'Dokumen penerapan/pemanfaatan/pendayagunaan/replikasi/prototipe hasil penelitian/pengkajian/pengembangan /inovasi', NULL, NULL),
(422, 46, '30.4', 'Advokasi dan fasilitasi penelitian, pengembangan dan inovasi', NULL, NULL),
(423, 46, '30.5', 'Diseminasi hasil penelitian, pengembangan dan penerapan ilmu pengetahuan dan teknologi', NULL, NULL),
(424, 46, '30.6', 'Pembinaan penelitian/Pengembangan, pengkajian, dan penerapan ilmu pengetahunan dan teknologi', NULL, NULL),
(425, 46, '30.7', 'Jaringan Sistem Nasional Penelitian, Pengembangan dan Penerapan ilmu pengetahuan dan teknologi', NULL, NULL),
(426, 46, '30.8', 'Data dan informasi hasil penelitian, pengembangan dan penerapan ilmu pengetahuan dan teknologi', NULL, NULL),
(427, 46, '30.9', 'Master proceeding/ jurnal penelitian, pengembangan dan penerapan ilmu pengetahuan dan teknologi', NULL, NULL),
(428, 46, '30.10', 'Hak atas kekayaan intelektual (HaKI)', NULL, NULL),
(429, 46, '30.11', 'Forum komunikasi penelitian, pengembangan dan penerapan ilmu pengetahuan dan teknologi', NULL, NULL),
(430, 46, '30.12', 'Layanan jasa penelitian, pengembangan, penerapan IPTEK', NULL, NULL),
(431, 46, '30.13', 'Sertifikasi personil peneliti bidang Sumber Daya Mineral', NULL, NULL),
(432, 46, '31', 'Sarana Litbang', NULL, NULL),
(433, 46, '31.1', 'Administrasi penggunaan peralatan', NULL, NULL),
(434, 46, '31.2', 'Log-book Peralatan Survei/Peralatan Uji Kalibrasi', NULL, NULL),
(435, 46, '32', 'Afiliasi', NULL, NULL),
(436, 46, '32.1', 'Proyek Percontohan', NULL, NULL),
(437, 46, '32.2', 'Promosi dan Layanan Jasa Teknologi', NULL, NULL),
(438, 46, '32.3', 'Pembinaan Penelitian dan Pengembangan', NULL, NULL),
(439, 46, '32.4', 'Penyajian Informasi', NULL, NULL),
(440, 46, '33', 'Penelitian dan Pengembangan Kegeologian', NULL, NULL),
(441, 46, '33.1', 'Pemetaaan dan penelitian geologi, geokimia, dan geofisika kelautan', NULL, NULL),
(442, 46, '33.2', 'Energi Kelautan dan Kewilayahan Penelitian Energi dan kewilayahan pantai', NULL, NULL),
(443, 46, '33.3', 'Penelitian sumber daya energi dan mineral kelautan', NULL, NULL),
(444, 46, '33.4', 'Penelitian Sumber Daya Mineral Kelautan', NULL, NULL),
(445, 46, '34', 'Penelitian dan Pengembangan Teknologi Minyak dan Gas Bumi', NULL, NULL),
(446, 46, '34.1', 'Teknologi Eksplorasi', NULL, NULL),
(447, 46, '34.2', 'Teknologi Eksploitasi', NULL, NULL),
(448, 46, '34.3', 'Laboratorium', NULL, NULL),
(449, 46, '34.4', 'Study', NULL, NULL),
(450, 46, '34.5', 'Teknologi Proses', NULL, NULL),
(451, 46, '34.6', 'Teknologi Aplikasi Produk', NULL, NULL),
(452, 46, '34.7', 'Teknologi Gas', NULL, NULL),
(453, 46, '35', 'Penelitian dan Pengembangan Teknologi Mineral Batubara', NULL, NULL),
(454, 46, '35.1', 'Teknologi Eksploitasi Tambang dan Pengolahan Sumber Daya', NULL, NULL),
(455, 46, '35.2', 'Teknologi Pengolahan dan Pemanfaatan mineral', NULL, NULL),
(456, 46, '35.3', 'Teknologi Pemanfaatan Batubara', NULL, NULL),
(457, 46, '36', 'Penelitian dan Pengembangan Ketenagalistrikan dan Energi Baru Terbarukan', NULL, NULL),
(458, 46, '36.1', 'Energi baru terbarukan', NULL, NULL),
(459, 46, '36.2', 'Teknologi Ketenagalistrikan', NULL, NULL),
(460, 46, '36.3', 'Lingkungan dan Konservasi Energi', NULL, NULL),
(461, 46, '36.4', 'Penelitian dan Pengembangan Teknologi PLTSa (Pembangkit Listrik Tenaga Sampah) dan Konservasi Energi', NULL, NULL),
(462, 46, '1', 'Kebijakan di bidang Energi dan Sumber Daya Mineral yang dilakukan oleh Pemerintah Daerah', NULL, NULL),
(463, 46, '2', 'Rekomendasi Kegeologian', NULL, NULL),
(464, 46, '3', 'Penelitian Kegeologian', NULL, NULL),
(465, 46, '4', 'Inventarisasi dan evaluasi kegeologian', NULL, NULL),
(466, 46, '5', 'Administrasi Pelayanan Kegeologian dan Penyajian Data dan Informasi', NULL, NULL),
(467, 46, '6', 'Pembinaan Program Minyak dan Gas Bumi', NULL, NULL),
(468, 30, '1', 'Kebijakan di Bidang Agama dan Kepercayaan', NULL, NULL),
(469, 30, '2', 'Fasilitasi', NULL, NULL),
(470, 30, '3', 'Pembinaan Kepercayaan Kepada Tuhan YME', NULL, NULL),
(471, 31, '1', 'Kebijakan di Bidang Sosial', NULL, NULL),
(472, 31, '2', 'Kesejahteraan Sosial Anak', NULL, NULL),
(473, 31, '3', 'Rehabilitasi Sosial', NULL, NULL),
(474, 31, '4', 'Rehabilitasi Sosial Tuna Sosial', NULL, NULL),
(475, 31, '5', 'Rehabilitasi Sosial Korban Penyalahgunaan NAPZA', NULL, NULL),
(476, 31, '6', 'Pelayanan Sosial Lanjut Usia', NULL, NULL),
(477, 31, '7', 'Pengumpulan dan Pengelolaan Sumber Dana Bantuan Sosial', NULL, NULL),
(478, 31, '8', 'Perlindungan Sosial Korban Tindak Kekerasan dan Pekerja Migran', NULL, NULL),
(479, 31, '9', 'Perlindungan Sosial Korban Bencana Sosial', NULL, NULL),
(480, 31, '10', 'Perlindungan Sosial Korban Bencana Alam', NULL, NULL),
(481, 31, '11', 'Jaminan Sosial', NULL, NULL),
(482, 31, '12', 'Pemberdayaan Keluarga dan Kelembagaan Sosial', NULL, NULL),
(483, 31, '13', 'Pemberdayaan Komunitas Adat Terpencil', NULL, NULL),
(484, 31, '14', 'Penanggulangan Kemiskinan Perkotaan dan Perdesaan', NULL, NULL),
(485, 31, '15', 'Kepahlawanan, Keperintisan, dan Kesetiakawanan Sosial', NULL, NULL),
(486, 32, '1', 'Kebijakan di Bidang Pemberdayaan Masyarakat Desa', NULL, NULL),
(487, 32, '2', 'Pemerintahan Desa dan Kelurahan', NULL, NULL),
(488, 32, '3', 'Kelembagaan dan Pelatihan Masyarakat', NULL, NULL),
(489, 32, '4', 'Pemberdayaan Adat dan Sosial Budaya Masyarakat', NULL, NULL),
(490, 32, '5', 'Usaha Ekonomi Masyarakat', NULL, NULL),
(491, 32, '6', 'Sumberdaya Alam dan Teknologi Tepat Guna Perdesaan', NULL, NULL),
(492, 32, '7', 'Badan Usaha Milik Desa (Bumdes)', NULL, NULL),
(493, 33, '1', 'Kebijakan di Bidang Pertamanan dan Pemakaman', NULL, NULL),
(494, 33, '2', 'Pertamanan', NULL, NULL),
(495, 33, '3', 'Pemakaman', NULL, NULL),
(496, 33, '4', 'Jalur Hijau', NULL, NULL),
(497, 34, '1', 'Kebijakan di Bidang Kependudukan dan Catatan Sipil', NULL, NULL),
(498, 34, '2', 'Pendaftaran Penduduk', NULL, NULL),
(499, 34, '3', 'Pencatatan Sipil', NULL, NULL),
(500, 34, '4', 'Pengelolaan Informasi Administrasi Kependudukan', NULL, NULL),
(501, 34, '5', 'Pengembangan Kebijakan Kependudukan', NULL, NULL),
(502, 34, '6', 'Penyerasian Kependudukan', NULL, NULL),
(503, 35, '1', 'Kebijakan di Bidang Keluarga Berencana', NULL, NULL),
(504, 35, '2', 'Analisis Pengaduan Kebijakan Pengendalian Penduduk', NULL, NULL),
(505, 35, '3', 'Fasilitas Pengaduan Kebijakan Pengendalian Penduduk', NULL, NULL),
(506, 35, '4', 'Profil dan Proyeksi Penduduk', NULL, NULL),
(507, 35, '5', 'Penetapan Parameter Pengendalian Penduduk', NULL, NULL),
(508, 35, '6', 'Pemanfaatan Perencanaan Pengendalian Penduduk', NULL, NULL),
(509, 35, '7', 'Pengembangan Sistem', NULL, NULL),
(510, 35, '8', 'Pengembangan Materi', NULL, NULL),
(511, 35, '9', 'Monitoring dan Evaluasi', NULL, NULL),
(512, 35, '10', 'Analisis Sosial', NULL, NULL),
(513, 35, '11', 'Analisis Ekonomi', NULL, NULL),
(514, 35, '12', 'Analisis Dampak Politik, Pertahanan, dan Keamanan', NULL, NULL),
(515, 35, '13', 'Analisis Daya Dukung dan Daya Tampung Lingkungan', NULL, NULL),
(516, 35, '14', 'Bina Keluarga Berencana Rumah Sakit dan Klinik Pemerintah', NULL, NULL),
(517, 35, '15', 'Jaminan Pelayanan dan Penyediaan Sarana Keluarga Berencana', NULL, NULL),
(518, 35, '16', 'Kualitas Pelayanan Keluarga Berencana Pemerintah', NULL, NULL),
(519, 35, '17', 'Bina Keluarga Berencana Rumah Sakit dan Klinik Swasta', NULL, NULL),
(520, 35, '18', 'Jaminan dan Ketersediaan Sarana Keluarga Berencana Swasta', NULL, NULL),
(521, 35, '19', 'Kualitas Pelayanan Keluarga Berencana Swasta', NULL, NULL),
(522, 35, '20', 'Akses dan Kualitas Pelayanan Keluarga Berencana Jalur Wilayah Tertinggal, Terpencil, dan Perbatasan', NULL, NULL),
(523, 35, '21', 'Akses dan Kualitas Pelayanan Keluarga Berencana Wilayah Miskin Perkotaan', NULL, NULL),
(524, 35, '22', 'Kesertaan Keluarga Berencana Pria', NULL, NULL),
(525, 35, '23', 'Kelangsungan Hidup Ibu, Bayi, dan Anak', NULL, NULL),
(526, 35, '24', 'Pencegahan PMS dan HIV/AIDS', NULL, NULL),
(527, 35, '25', 'Pencegahan Kanker Alat Reproduksi dan Penanggulangan Infertilitas', NULL, NULL),
(528, 35, '26', 'Pelembagaan Bina Keluarga Balita dan Anak', NULL, NULL),
(529, 35, '27', 'Monitoring dan Evaluasi Bina Keluarga Balita dan Anak', NULL, NULL),
(530, 35, '28', 'Pelembagaan Bina Ketahanan Remaja', NULL, NULL),
(531, 35, '29', 'Monitoring dan Evaluasi Bina Ketahanan Remaja', NULL, NULL),
(532, 35, '30', 'Pengembangan Program Bina Ketahanan Keluarga Lansia dan Rentan', NULL, NULL),
(533, 35, '31', 'Pelembagaan Bina Ketahanan Keluarga Lansia dan Rentan', NULL, NULL),
(534, 35, '32', 'Monitoring dan Evaluasi Bina Ketahanan Keluarga Lansia dan Rentan', NULL, NULL),
(535, 35, '33', 'Pengembangan Program Usaha Ekonomi Keluarga', NULL, NULL),
(536, 35, '34', 'Peningkatan Teknologi dan Permodalan Usaha Ekonomi Keluarga', NULL, NULL),
(537, 35, '35', 'Peningkatan Manajemen Usaha Ekonomi Keluarga', NULL, NULL),
(538, 35, '36', 'Monitoring dan Evaluasi Usaha Ekonomi Keluarga', NULL, NULL),
(539, 35, '37', 'Pengembangan Program Pusat Pelayanan Keluarga Sejahtera', NULL, NULL),
(540, 35, '38', 'Pelembagaan Pusat Pelayanan Keluarga Sejahtera', NULL, NULL),
(541, 35, '39', 'Monitoring dan Evaluasi Pusat Pelayanan Keluarga Sejahtera', NULL, NULL),
(542, 35, '40', 'Pengembangan Advokasi dan Komunikasi, Informasi, Edukasi', NULL, NULL),
(543, 35, '41', 'Advokasi dan Pencitraan', NULL, NULL),
(544, 35, '42', 'Komunikasi, Informasi, dan Edukasi', NULL, NULL),
(545, 35, '43', 'Hubungan dengan Lembaga Pemerintah Pusat dan Provinsi', NULL, NULL),
(546, 35, '44', 'Hubungan dengan Lembaga Pemerintah Kabupaten dan Kota', NULL, NULL),
(547, 35, '45', 'Hubungan dengan Lembaga Nonpemerintah', NULL, NULL),
(548, 35, '46', 'Tenaga Lini Lapangan', NULL, NULL),
(549, 35, '47', 'Institusi Masyarakat Pedesaan', NULL, NULL),
(550, 35, '48', 'Mekanisme Operasional Lini Lapangan', NULL, NULL),
(551, 35, '49', 'Pengembangan Sistem Pencatatan dan Pelaporan', NULL, NULL),
(552, 35, '50', 'Pengumpulan dan Pengolahan Data', NULL, NULL),
(553, 35, '51', 'Analisis dan Evaluasi', NULL, NULL),
(554, 35, '52', 'Sistem Aplikasi dan Bank Data', NULL, NULL),
(555, 35, '53', 'Infrastruktur Teknologi Informasi', NULL, NULL),
(556, 35, '54', 'Dokumentasi dan Penyebarluasan Informasi', NULL, NULL),
(557, 36, '1', 'Keprotokolan', NULL, NULL),
(558, 36, '2', 'Daftar Nama/Alamat Kantor/Pejabat', NULL, NULL),
(559, 36, '3', 'Dokumentasi/Liputan Kegiatan Dinas Pimpinan, Acara Kedinasan, dan Peristiwa-Peristiwa Bidang Masing-Masing', NULL, NULL),
(560, 36, '4', 'Pengumpulan, Pengolahan, dan Penyajian Informasi Kelembagaan', NULL, NULL),
(561, 36, '5', 'Hubungan Antar Lembaga dan Pemerintahan Daerah', NULL, NULL),
(562, 36, '6', 'Dengar Pendapat/Hearing DPRD', NULL, NULL),
(563, 36, '7', 'Bahan/Materi Pidato/Sidang Muspida Provinsi/Kota/Kabupaten', NULL, NULL),
(564, 36, '8', 'Penerbitan Majalah, Buletin, Koran, dan Jurnal', NULL, NULL),
(565, 36, '9', 'Publikasi Melalui Media Cetak Maupun Elektronik', NULL, NULL),
(566, 36, '10', 'Pameran/Sayembara/Lomba/Festival, Pembuatan Spanduk dan Iklan', NULL, NULL),
(567, 36, '11', 'Penghargaan/Tanda Kenang-Kenangan', NULL, NULL),
(568, 36, '12', 'Ucapan Terima Kasih, Ucapan Selamat, Bela Sungkawa, Permohonan Maaf', NULL, NULL),
(569, 37, '1', 'Kebijakan di Bidang Ketahanan Pangan', NULL, NULL),
(570, 37, '2', 'Ketersediaan dan Kerawanan Pangan', NULL, NULL),
(571, 37, '3', 'Distribusi dan Cadangan Pangan', NULL, NULL),
(572, 37, '4', 'Penganekaragaman Konsumsi dan Ketahanan Pangan', NULL, NULL),
(573, 37, '5', 'Penguatan Kelembagaan Ketahanan Pangan', NULL, NULL),
(574, 37, '6', 'Swasembada Pangan (Kearifan Lokal)', NULL, NULL),
(575, 37, '7', 'Bimbingan Teknis', NULL, NULL),
(576, 37, '8', 'Evaluasi', NULL, NULL),
(577, 38, '1', 'Kebijakan di Bidang Perdagangan', NULL, NULL),
(578, 38, '2', 'Perdagangan Dalam Negeri', NULL, NULL),
(579, 38, '3', 'Standarisasi dan Perlindungan Konsumen', NULL, NULL),
(580, 38, '4', 'Perdagangan Berjangka Komoditi', NULL, NULL),
(581, 38, '5', 'Bimbingan Teknis', NULL, NULL),
(582, 38, '6', 'Evaluasi', NULL, NULL),
(583, 39, '1', 'Kebijakan di Bidang Koperasi dan Usaha Kecil Menengah', NULL, NULL),
(584, 39, '2', 'Kelembagaan Koperasi dan UKM', NULL, NULL),
(585, 39, '3', 'Produksi', NULL, NULL),
(586, 39, '4', 'Pembiayaan', NULL, NULL),
(587, 39, '5', 'Pemasaran dan Jaringan Usaha', NULL, NULL),
(588, 39, '6', 'Pengembangan Sumber Daya Manusia', NULL, NULL),
(589, 39, '7', 'Pengembangan dan Restrukturisasi Usaha', NULL, NULL),
(590, 39, '8', 'Pengkajian Sumber Daya UKMK', NULL, NULL),
(591, 39, '9', 'Kerja Sama Hubungan Antar Lembaga', NULL, NULL),
(592, 39, '10', 'Pedagang Kaki Lima (PKL)', NULL, NULL),
(593, 39, '11', 'Monitoring dan Evaluasi', NULL, NULL),
(594, 40, '1', 'Kebijakan di Bidang Kehutanan', NULL, NULL),
(595, 40, '2', 'Penyuluhan', NULL, NULL),
(596, 40, '3', 'Planologi Kehutanan', NULL, NULL),
(597, 40, '4', 'Bina Usaha Kehutanan', NULL, NULL),
(598, 40, '5', 'Standardisasi dan Lingkungan', NULL, NULL),
(599, 40, '6', 'Perlindungan Hutan dan Konservasi Alam', NULL, NULL),
(600, 40, '7', 'Bina Pengelolaan Daerah Aliran Sungai dan Perhutanan Sosial', NULL, NULL),
(601, 40, '8', 'Penelitian dan Pengembangan Kehutanan', NULL, NULL),
(602, 41, '1', 'Kebijakan di Bidang Kelautan dan Perikanan', NULL, NULL),
(603, 41, '2', 'Perikanan Tangkap', NULL, NULL),
(604, 41, '3', 'Perikanan Budidaya', NULL, NULL),
(605, 41, '4', 'Pengolahan dan Pemasaran Hasil Perikanan', NULL, NULL),
(606, 41, '5', 'Kelautan, Pesisir, dan Pulau-Pulau Kecil', NULL, NULL),
(607, 41, '6', 'Pengawasan Sumber Daya Kelautan dan Perikanan', NULL, NULL),
(608, 41, '7', 'Karantina Ikan', NULL, NULL),
(609, 42, '1', 'Kebijakan di Bidang Pertanian', NULL, NULL),
(610, 42, '2', 'Perlindungan Hortikultura', NULL, NULL),
(611, 42, '3', 'Perbenihan Hortikultura', NULL, NULL),
(612, 42, '4', 'Perluasan dan Pengelolaan Lahan', NULL, NULL),
(613, 42, '5', 'Pengelolaan Air Irigasi', NULL, NULL),
(614, 42, '6', 'Pembiayaan Pertanian', NULL, NULL),
(615, 42, '7', 'Pupuk Pestisida', NULL, NULL),
(616, 42, '8', 'Alat dan Mesin Pertanian', NULL, NULL),
(617, 42, '9', 'Perbenihan Tanaman Pangan', NULL, NULL),
(618, 42, '10', 'Budidaya Serealia', NULL, NULL),
(619, 42, '11', 'Budidaya Aneka Kacang dan Umbi', NULL, NULL),
(620, 42, '12', 'Tanaman Pangan', NULL, NULL),
(621, 42, '13', 'Pascapanen Tanaman Pangan', NULL, NULL),
(622, 42, '14', 'Pengolahan Hasil Pertanian', NULL, NULL),
(623, 42, '15', 'Mutu dan Standarisasi', NULL, NULL),
(624, 42, '16', 'Pengembangan Usaha dan Investasi', NULL, NULL),
(625, 42, '17', 'Pemasaran Domestik', NULL, NULL),
(626, 42, '18', 'Administrasi Penelitian, Pengkajian, dan Pengembangan', NULL, NULL),
(627, 42, '19', 'Hasil Penelitian, Pengkajian, dan Pengembangan', NULL, NULL),
(628, 42, '20', 'Diseminasi', NULL, NULL),
(629, 42, '21', 'Publikasi Hasil Penelitian/Pengkajian', NULL, NULL),
(630, 42, '22', 'Bimbingan Teknis Penelitian, Pengkajian, dan Pengembangan', NULL, NULL),
(631, 42, '23', 'Forum Komunikasi Penelitian dan Pengembangan', NULL, NULL),
(632, 42, '24', 'Data Penelitian dan Pengembangan', NULL, NULL),
(633, 42, '25', 'Evaluasi Penelitian/Pengkajian dan Pengembangan', NULL, NULL),
(634, 42, '26', 'Hak Atas Kekayaan Intelektual (HAKI)', NULL, NULL),
(635, 42, '27', 'Pelayanan Perijinan Pertanian', NULL, NULL),
(636, 42, '28', 'Pelayanan Hukum', NULL, NULL),
(637, 42, '29', 'Karantina Pertanian', NULL, NULL),
(638, 42, '30', 'Bimbingan Teknis', NULL, NULL),
(639, 42, '31', 'Evaluasi', NULL, NULL),
(640, 43, '1', 'Kebijakan di Bidang Peternakan', NULL, NULL),
(641, 43, '2', 'Peternakan dan Kesehatan Hewan', NULL, NULL),
(642, 43, '3', 'Bimbingan Teknis', NULL, NULL),
(643, 43, '4', 'Evaluasi', NULL, NULL),
(644, 44, '1', 'Kebijakan di Bidang Perkebunan', NULL, NULL),
(645, 44, '2', 'Tanaman Semusim', NULL, NULL),
(646, 44, '3', 'Tanaman Rempah & Penyegar', NULL, NULL),
(647, 44, '4', 'Tanaman Tahunan', NULL, NULL),
(648, 44, '5', 'Perlindungan Perkebunan', NULL, NULL),
(649, 44, '6', 'Pascapanen dan Pembinaan Usaha', NULL, NULL),
(650, 44, '7', 'Bimbingan Teknis Perkebunan', NULL, NULL),
(651, 44, '8', 'Evaluasi Perkebunan', NULL, NULL),
(652, 45, '1', 'Kebijakan di Bidang Perindustrian', NULL, NULL),
(653, 45, '2', 'Iklim Usaha dan Kerja Sama', NULL, NULL),
(654, 45, '3', 'Promosi Industri', NULL, NULL),
(655, 45, '4', 'Standarisasi dan Teknologi', NULL, NULL),
(656, 45, '5', 'Hak dan Kekayaan Intelektual', NULL, NULL),
(657, 45, '6', 'Industri Hijau', NULL, NULL),
(658, 45, '7', 'Analisis Kerja Sama Industri Unggulan Kabupaten/Kota', NULL, NULL),
(659, 45, '8', 'Monitoring dan Evaluasi Kompetensi Inti Industri (Provinsi dan Kabupaten/Kota)', NULL, NULL),
(660, 45, '9', 'Pengembangan Infrastruktur Pendukung Pengembangan Kawasan Industri', NULL, NULL),
(661, 45, '10', 'Fasilitasi Pengembangan Kawasan Industri', NULL, NULL),
(662, 45, '11', 'Kerja Sama Ketahanan Industri Internasional', NULL, NULL),
(663, 45, '12', 'Standarisasi', NULL, NULL),
(664, 45, '13', 'Pengkajian Kebijakan dan Iklim Usaha Industri', NULL, NULL),
(665, 45, '14', 'Pengkajian Industri Hijau dan Lingkungan Hidup', NULL, NULL),
(666, 45, '15', 'Teknologi dan Hak Kekayaan Intelektual', NULL, NULL),
(667, 45, '16', 'Monitoring dan Evaluasi Kompetensi Industri', NULL, NULL),
(668, 21, '1', 'Kebijakan di Bidang Polisi Pamong Praja', NULL, NULL),
(669, 21, '2', 'Tata Operasional dan Prasarana Sarana Polisi Pamong Praja', NULL, NULL),
(670, 21, '3', 'Peningkatan Kapasitas SDM Polisi Pamong Praja', NULL, NULL),
(671, 21, '4', 'Perlindungan Masyarakat', NULL, NULL),
(672, 21, '5', 'Penyidik Pegawai Negeri Sipil', NULL, NULL),
(673, 21, '6', 'Perlindungan Hak-Hak Sipil dan Hak Asasi Manusia', NULL, NULL),
(674, 22, '1', 'Kebijakan di Bidang Penanggulangan Bencana', NULL, NULL),
(675, 22, '2', 'Perencanaan Penanggulangan Bencana, Pencarian, dan Pertolongan', NULL, NULL),
(676, 22, '3', 'Pencegahan dan Kesiapsiagaan', NULL, NULL),
(677, 22, '4', 'Potensi Pencarian dan Pertolongan', NULL, NULL),
(678, 22, '5', 'Bina Ketenagaan dan Pemasyarakatan', NULL, NULL),
(679, 22, '6', 'Operasi Pencarian dan Pertolongan', NULL, NULL),
(680, 22, '7', 'Rencana Pengembangan dan Standardisasi Komunikasi', NULL, NULL),
(681, 22, '8', 'Operasi Komunikasi', NULL, NULL),
(682, 22, '9', 'Inventarisasi dan Pemeliharaan', NULL, NULL),
(683, 22, '10', 'Pengembangan Sistem Informasi', NULL, NULL),
(684, 22, '11', 'Penyajian dan Layanan Informasi', NULL, NULL),
(685, 22, '12', 'Pelaporan dan Evaluasi', NULL, NULL),
(686, 23, '1', 'Kebijakan di Bidang Pembangunan Daerah Tertinggal', NULL, NULL),
(687, 23, '2', 'Pembangunan Sumber Daya', NULL, NULL),
(688, 23, '3', 'Peningkatan Infrastruktur', NULL, NULL),
(689, 23, '4', 'Pembinaan Ekonomi dan Dunia Usaha', NULL, NULL),
(690, 23, '5', 'Pembinaan Lembaga Sosial dan Budaya', NULL, NULL),
(691, 23, '6', 'Pengembangan Daerah Khusus', NULL, NULL),
(692, 24, '1', 'Kebijakan di Bidang Pemberdayaan Perempuan dan Perlindungan Anak', NULL, NULL),
(693, 24, '2', 'Pengarusutamaan Gender Ekonomi, Politik, Sosial, dan Hukum', NULL, NULL),
(694, 24, '3', 'Perlindungan Perempuan', NULL, NULL),
(695, 24, '4', 'Perlindungan Anak', NULL, NULL),
(696, 24, '5', 'Tumbuh Kembang Anak', NULL, NULL),
(697, 25, '1', 'Kebijakan di Bidang Pendidikan', NULL, NULL),
(698, 25, '2', 'Pendidikan Anak Usia Dini (PAUD) Nonformal, Informal', NULL, NULL),
(699, 25, '3', 'Pendidikan Masyarakat', NULL, NULL),
(700, 25, '4', 'Kursus/Pelatihan Pendidik dan Tenaga Pendidik', NULL, NULL),
(701, 25, '5', 'Pendidikan Dasar dan Menengah Pertama', NULL, NULL),
(702, 25, '6', 'Pendidikan Khusus/Layanan Khusus', NULL, NULL),
(703, 25, '7', 'Pembinaan Pendidik dan Tenaga Pendidik', NULL, NULL),
(704, 25, '8', 'Sekolah Menengah Atas', NULL, NULL),
(705, 25, '9', 'Pendidikan Khusus-Layanan Khusus', NULL, NULL),
(706, 25, '10', 'Pendidik dan Tenaga Pendidik', NULL, NULL),
(707, 25, '11', 'Penilaian Pendidikan', NULL, NULL),
(708, 25, '12', 'Data dan Statistik Pendidikan', NULL, NULL);
INSERT INTO `sub_kategoris` (`id`, `category_id`, `nomor_sub_kategori`, `nama_sub_kategori`, `created_at`, `updated_at`) VALUES
(709, 25, '13', 'Prasarana dan Sarana Pendidikan', NULL, NULL),
(710, 26, '1', 'Kebijakan di Bidang Keolahragaan', NULL, NULL),
(711, 26, '2', 'Pengelolaan Olahraga Pendidikan', NULL, NULL),
(712, 26, '3', 'Pengelolaan Olahraga Rekreasi', NULL, NULL),
(713, 26, '4', 'Pengelolaan Pembinaan Sentra dan Sekolah Khusus Olahraga', NULL, NULL),
(714, 26, '5', 'Pengembangan Olahraga Tradisional dan Layanan Khusus', NULL, NULL),
(715, 26, '6', 'Kemitraan dan Penghargaan Olahraga', NULL, NULL),
(716, 26, '7', 'Pembibitan dan IPTEK Olahraga', NULL, NULL),
(717, 26, '8', 'Peningkatan Tenaga dan Organisasi Keolahragaan', NULL, NULL),
(718, 26, '9', 'Industri dan Promosi Olahraga', NULL, NULL),
(719, 26, '10', 'Olahraga Prestasi', NULL, NULL),
(720, 26, '11', 'Standardisasi dan Infrastruktur Olahraga', NULL, NULL),
(721, 27, '1', 'Kebijakan di Bidang Kepemudaan', NULL, NULL),
(722, 27, '2', 'Peningkatan Tenaga dan Sumber Daya Pemuda', NULL, NULL),
(723, 27, '3', 'Peningkatan Wawasan Pemuda', NULL, NULL),
(724, 27, '4', 'Peningkatan Kapasitas Pemuda', NULL, NULL),
(725, 27, '5', 'Peningkatan Kreativitas Pemuda', NULL, NULL),
(726, 27, '6', 'Kepemimpinan dan Kepeloporan Pemuda', NULL, NULL),
(727, 27, '7', 'Kewirausahaan', NULL, NULL),
(728, 27, '8', 'Organisasi Kepemudaan dan Pengawasan Kepramukaan', NULL, NULL),
(729, 27, '9', 'Standardisasi dan Infrastruktur Pemuda', NULL, NULL),
(730, 27, '10', 'Kemitraan dan Penghargaan Pemuda', NULL, NULL),
(731, 28, '1', 'Kebijakan di Bidang Kebudayaan', NULL, NULL),
(732, 28, '2', 'Pelestarian Cagar Budaya dan Permuseuman', NULL, NULL),
(733, 28, '3', 'Pembinaan Kesenian dan Perfilman', NULL, NULL),
(734, 28, '4', 'Sejarah dan Nilai Budaya', NULL, NULL),
(735, 28, '5', 'Internalisasi Nilai dan Diplomasi Budaya', NULL, NULL),
(736, 29, '1', 'Kebijakan di Bidang Kesehatan', NULL, NULL),
(737, 29, '2', 'Upaya Kesehatan Dasar', NULL, NULL),
(738, 29, '3', 'Upaya Kesehatan Rujukan', NULL, NULL),
(739, 29, '4', 'Keperawatan dan Keteknisian Medik', NULL, NULL),
(740, 29, '5', 'Penunjang Medik dan Sarana Kesehatan', NULL, NULL),
(741, 29, '6', 'Kesehatan Jiwa', NULL, NULL),
(742, 29, '7', 'Surveilans, Imunisasi, Karantina, dan Kesehatan Matra', NULL, NULL),
(743, 29, '8', 'Pengendalian Penyakit Menular Langsung', NULL, NULL),
(744, 29, '9', 'Pengendalian Penyakit Bersumber Binatang', NULL, NULL),
(745, 29, '10', 'Pengendalian Penyakit Tidak Menular', NULL, NULL),
(746, 29, '11', 'Penyehatan Lingkungan', NULL, NULL),
(747, 29, '12', 'Pengembangan dan Penapisan Teknologi Pengendalian Penyakit dan Pengendalian Lingkungan', NULL, NULL),
(748, 29, '13', 'Gizi', NULL, NULL),
(749, 29, '14', 'Kesehatan Ibu', NULL, NULL),
(750, 29, '15', 'Kesehatan Anak', NULL, NULL),
(751, 29, '16', 'Kesehatan Tradisional Alternatif dan Komplementer', NULL, NULL),
(752, 29, '17', 'Kesehatan Kerja dan Olahraga', NULL, NULL),
(753, 29, '18', 'Obat Publik dan Perbekalan Kesehatan', NULL, NULL),
(754, 29, '19', 'Produksi dan Distribusi Alat Kesehatan', NULL, NULL),
(755, 29, '20', 'Kefarmasian', NULL, NULL),
(756, 29, '21', 'Produksi dan Distribusi Kefarmasian', NULL, NULL),
(757, 29, '22', 'Surat Keterangan, Sertifikasi, dan Perijinan', NULL, NULL),
(758, 29, '23', 'Penanggulangan Krisis Kesehatan', NULL, NULL),
(759, 29, '24', 'Pengembangan dan Jaminan Kesehatan', NULL, NULL),
(760, 29, '25', 'Intelegensia Kesehatan', NULL, NULL),
(761, 29, '26', 'Kesehatan Haji', NULL, NULL),
(762, 29, '27', 'Promosi Kesehatan', NULL, NULL),
(763, 29, '28', 'Data dan Informasi', NULL, NULL),
(764, 29, '29', 'Pengawasan Obat Tradisional, Kosmetik, dan Produk Komplimen', NULL, NULL),
(765, 29, '30', 'Pengawasan Keamanan Pangan dan Bahan Berbahaya', NULL, NULL),
(766, 29, '31', 'Rekam Medis', NULL, NULL),
(767, 1, '1', 'Telekomunikasi', NULL, NULL),
(768, 1, '2', 'Perjalanan Dinas Dalam Negeri', NULL, NULL),
(769, 1, '3', 'Perjalanan Dinas Luar Negeri', NULL, NULL),
(770, 1, '4', 'Penggunaan Fasilitas Kantor', NULL, NULL),
(771, 1, '5', 'Rapat Pimpinan', NULL, NULL),
(772, 1, '6', 'Penyediaan Konsumsi', NULL, NULL),
(773, 1, '7', 'Pengurusan Kendaraan Dinas', NULL, NULL),
(774, 1, '8', 'Pemeliharaan Gedung, Taman, dan Peralatan Kantor', NULL, NULL),
(775, 1, '9', 'Pengelolaan Jaringan Listrik, Air, Telepon, dan Komputer', NULL, NULL),
(776, 1, '10', 'Ketertiban dan Keamanan', NULL, NULL),
(777, 1, '11', 'Administrasi Pengelolaan Parkir', NULL, NULL),
(778, 1, '12', 'Administrasi Pakaian Dinas Pegawai', NULL, NULL),
(779, 2, '1', 'Inventarisasi dan Penyimpanan', NULL, NULL),
(780, 2, '2', 'Pemeliharaan Peralatan Kantor', NULL, NULL),
(781, 2, '3', 'Distribusi', NULL, NULL),
(782, 2, '4', 'Penghapusan Barang Milik Daerah', NULL, NULL),
(783, 2, '5', 'Pengelolaan Database Barang Milik Daerah', NULL, NULL),
(784, 3, '1', 'Rencana Pengadaan Barang dan Jasa', NULL, NULL),
(785, 3, '2', 'Pengadaan Langsung', NULL, NULL),
(786, 3, '3', 'Pengadaan Tidak Langsung/Lelang', NULL, NULL),
(787, 3, '4', 'Swakelola', NULL, NULL),
(788, 3, '5', 'Pengolahan Sistem Informasi Pengadaan', NULL, NULL),
(789, 3, '6', 'Monitoring dan Evaluasi Pelaksanaan Kebijakan dan Pelaksanaan Pengadaan', NULL, NULL),
(790, 4, '1', 'Kebijakan di Bidang Perpustakaan', NULL, NULL),
(791, 4, '2', 'Deposit Bahan Pustaka', NULL, NULL),
(792, 4, '3', 'Koleksi Pustaka', NULL, NULL),
(793, 4, '4', 'Pengolahan Bahan Pustaka', NULL, NULL),
(794, 4, '5', 'Pangkalan Data Katalog Koleksi', NULL, NULL),
(795, 4, '6', 'Layanan Perpustakaan', NULL, NULL),
(796, 4, '7', 'Kerjasama Perpustakaan', NULL, NULL),
(797, 4, '8', 'Pengembangan Implementasi Teknologi Informasi Perpustakaan', NULL, NULL),
(798, 4, '9', 'Pangkalan Data Layanan Perpustakaan', NULL, NULL),
(799, 4, '10', 'Konservasi', NULL, NULL),
(800, 4, '11', 'Reprografi', NULL, NULL),
(801, 4, '12', 'Transformasi Digital', NULL, NULL),
(802, 4, '13', 'Kurasi Digital', NULL, NULL),
(803, 4, '14', 'Pengembangan Perpustakaan', NULL, NULL),
(804, 5, '1', 'Kebijakan di Bidang Kearsipan', NULL, NULL),
(805, 5, '2', 'Pembinaan Kearsipan', NULL, NULL),
(806, 5, '3', 'Pengelolaan Arsip Dinamis', NULL, NULL),
(807, 5, '4', 'Program Arsip Vital', NULL, NULL),
(808, 5, '5', 'Pengelolaan Arsip Terjaga', NULL, NULL),
(809, 5, '6', 'Penyusutan Arsip', NULL, NULL),
(810, 5, '7', 'Alih Media Arsip', NULL, NULL),
(811, 5, '8', 'Data Base Pengelolaan Arsip Dinamis', NULL, NULL),
(812, 5, '9', 'Pengelolaan Arsip Statis', NULL, NULL),
(813, 5, '10', 'Jasa Kearsipan', NULL, NULL),
(814, 5, '11', 'Pengelolaan SIKN dan JIKN', NULL, NULL),
(815, 5, '12', 'Pelindungan dan Penyelamatan Arsip Akibat Bencana', NULL, NULL),
(816, 5, '13', 'Penyelamatan Arsip Perangkat Daerah', NULL, NULL),
(817, 5, '14', 'Penerbitan Izin Penggunaan Arsip yang Bersifat Tertutup', NULL, NULL),
(818, 5, '15', 'Pengawasan Kearsipan', NULL, NULL),
(819, 6, '1', 'Kebijakan di Bidang Persandian', NULL, NULL),
(820, 6, '2', 'Pengamanan Persandian', NULL, NULL),
(821, 6, '3', 'Pengkajian Persandian', NULL, NULL),
(822, 6, '4', 'Pembinaan dan Pengendalian Persandian', NULL, NULL),
(823, 6, '5', 'Layanan Sertifikasi Elektronik', NULL, NULL),
(824, 7, '1', 'Musyawarah Perencanaan Pembangunan (Musrenbang)', NULL, NULL),
(825, 7, '2', 'Perencanaan Pembangunan Daerah', NULL, NULL),
(826, 7, '3', 'Koordinasi dan Sinkronisasi Perencanaan Pembangunan', NULL, NULL),
(827, 7, '4', 'Konsultasi Perencanaan Pembangunan', NULL, NULL),
(828, 7, '5', 'Pemantauan, Evaluasi, Penilaian, dan Pelaporan Perencanaan Pembangunan', NULL, NULL),
(829, 7, '6', 'Aksi Strategis Daerah', NULL, NULL),
(830, 7, '7', 'Perencanaan Pendanaan Pembangunan', NULL, NULL),
(831, 8, '1', 'Struktur Organisasi di Lingkungan Pemerintahan Daerah Kab/Kota', NULL, NULL),
(832, 8, '2', 'Uraian Jabatan', NULL, NULL),
(833, 8, '3', 'Ketatalaksanaan', NULL, NULL),
(834, 8, '4', 'Standar Kompetensi Jabatan Struktural dan Fungsional', NULL, NULL),
(835, 8, '5', 'Evaluasi Kelembagaan', NULL, NULL),
(836, 8, '6', 'Koordinasi Penguatan Reformasi dan Birokrasi', NULL, NULL),
(837, 9, '1', 'Kebijakan di Bidang Penelitian, Pengkajian, dan Pengembangan', NULL, NULL),
(838, 9, '2', 'Penelitian, Pengkajian, dan Pengembangan', NULL, NULL),
(839, 9, '3', 'Sosialisasi dan Desiminasi Hasil Penelitian, Pengkajian, dan Pengembangan', NULL, NULL),
(840, 9, '4', 'Bimbingan Teknis Penelitian, Pengkajian, dan Pengembangan', NULL, NULL),
(841, 9, '5', 'Forum Komunikasi Penelitian, Pengembangan, dan Penerapan Ilmu Pengetahuan dan Teknologi', NULL, NULL),
(842, 9, '6', 'Data dan Informasi Hasil Penelitian, Pengembangan, dan Penerapan Ilmu Pengetahuan dan Teknologi', NULL, NULL),
(843, 9, '7', 'Master Proceeding/Jurnal Penelitian, Pengembangan, dan Penerapan Ilmu Pengetahuan dan Teknologi', NULL, NULL),
(844, 9, '8', 'Hak Atas Kekayaan Intelektual (HaKI)', NULL, NULL),
(845, 9, '9', 'Evaluasi Pelaksanaan Kebijakan', NULL, NULL),
(846, 9, '10', 'Seminar, Lokakarya, Temukarya, Workshop', NULL, NULL),
(847, 10, '1', 'Kebijakan di Bidang Otonomi Daerah', NULL, NULL),
(848, 10, '2', 'Penyelenggaraan Pemerintah Daerah', NULL, NULL),
(849, 10, '3', 'Penataan Daerah, Pembinaan Daerah Pemekaran, Otonomi Khusus, Daerah Istimewa, dan Dewan Pertimbangan Otonomi Daerah', NULL, NULL),
(850, 10, '4', 'Pemilihan Kepala Daerah, DPRD, dan Hubungan Antar Lembaga', NULL, NULL),
(851, 10, '5', 'Otonomi Khusus dan Daerah Istimewa', NULL, NULL),
(852, 10, '6', 'Peningkatan Kapasitas dan Evaluasi Kinerja Daerah', NULL, NULL),
(853, 10, '7', 'LKPJ/LKPJAMJ dan LPPD', NULL, NULL),
(854, 11, '1', 'Kebijakan di Bidang Pemerintahan Umum', NULL, NULL),
(855, 11, '2', 'Dekonsentrasi dan Kerjasama', NULL, NULL),
(856, 11, '3', 'Wilayah Administrasi dan Perbatasan', NULL, NULL),
(857, 12, '1', 'Program Legislasi', NULL, NULL),
(858, 12, '2', 'Rancangan Peraturan Perundang-Undangan', NULL, NULL),
(859, 12, '3', 'Keputusan/Ketetapan Pimpinan Pemerintah', NULL, NULL),
(860, 12, '4', 'Instruksi/Surat Edaran', NULL, NULL),
(861, 12, '5', 'Surat Perintah', NULL, NULL),
(862, 12, '6', 'Standar/Pedoman/Prosedur Kerja/Petunjuk Pelaksanaan/Petunjuk Teknis', NULL, NULL),
(863, 12, '7', 'Nota Kesepakatan/Memorandum of Understanding (MOU)/Kontrak/Perjanjian Kerjasama', NULL, NULL),
(864, 12, '8', 'Dokumentasi Hukum', NULL, NULL),
(865, 12, '9', 'Sosialisasi/Penyuluhan/Pembinaan Hukum', NULL, NULL),
(866, 12, '10', 'Bantuan/Konsultasi Hukum/Advokasi', NULL, NULL),
(867, 12, '11', 'Kasus/Sengketa Hukum', NULL, NULL),
(868, 13, '1', 'Kebijakan di Bidang Tata Usaha Negara', NULL, NULL),
(869, 14, '1', 'Kebijakan di Bidang Perburuhan', NULL, NULL),
(870, 15, '1', 'Kebijakan di Bidang Arbitrase', NULL, NULL),
(871, 16, '1', 'Kebijakan di Bidang Sengketa Adat', NULL, NULL),
(872, 17, '1', 'Kebijakan di Bidang Perijinan', NULL, NULL),
(873, 18, '1', 'Hak Cipta', NULL, NULL),
(874, 18, '2', 'Hak Paten', NULL, NULL),
(875, 18, '3', 'Hak Desain Industri', NULL, NULL),
(876, 18, '4', 'Hak Rahasia Dagang', NULL, NULL),
(877, 18, '5', 'Hak Merk', NULL, NULL),
(878, 18, '6', 'Permohonan HAKI yang Ditolak', NULL, NULL),
(879, 19, '1', 'Kebijakan di Bidang Kesatuan Bangsa dan Politik', NULL, NULL),
(880, 19, '2', 'Bina Ideologi dan Wawasan Kebangsaan', NULL, NULL),
(881, 19, '3', 'Kewaspadaan Nasional', NULL, NULL),
(882, 19, '4', 'Ketahanan Seni, Budaya, Adat, Agama, dan Kemasyarakatan', NULL, NULL),
(883, 19, '5', 'Politik Dalam Negeri', NULL, NULL),
(884, 19, '6', 'Ketahanan Ekonomi', NULL, NULL),
(885, 20, '1', 'Kebijakan di Bidang Pemilu', NULL, NULL),
(886, 20, '2', 'Pemutakhiran dan Penyusunan Daftar Pemilih', NULL, NULL),
(887, 20, '3', 'Pendaftaran dan Verifikasi Peserta Pemilu', NULL, NULL),
(888, 20, '4', 'Penetapan Peserta Pemilu', NULL, NULL),
(889, 20, '5', 'Pencalonan Pemilu', NULL, NULL),
(890, 20, '6', 'Kampanye Pemilu', NULL, NULL),
(891, 20, '7', 'Dana Kampanye', NULL, NULL),
(892, 20, '8', 'Pemungutan dan Penghitungan Suara', NULL, NULL),
(893, 20, '9', 'Penetapan Hasil Pemilu', NULL, NULL),
(894, 20, '10', 'Perselisihan Hasil Pemilu', NULL, NULL),
(895, 20, '11', 'Laporan Hasil Penyelenggaraan Pemilu', NULL, NULL),
(896, 1, '1', 'Telekomunikasi', NULL, NULL),
(897, 1, '2', 'Perjalanan Dinas Dalam Negeri', NULL, NULL),
(898, 1, '3', 'Perjalanan Dinas Luar Negeri', NULL, NULL),
(899, 1, '4', 'Penggunaan Fasilitas Kantor', NULL, NULL),
(900, 1, '5', 'Rapat Pimpinan', NULL, NULL),
(901, 1, '6', 'Penyediaan Konsumsi', NULL, NULL),
(902, 1, '7', 'Pengurusan Kendaraan Dinas', NULL, NULL),
(903, 1, '8', 'Pemeliharaan Gedung, Taman, dan Peralatan Kantor', NULL, NULL),
(904, 1, '9', 'Pengelolaan Jaringan Listrik, Air, Telepon, dan Komputer', NULL, NULL),
(905, 1, '10', 'Ketertiban dan Keamanan', NULL, NULL),
(906, 1, '11', 'Administrasi Pengelolaan Parkir', NULL, NULL),
(907, 1, '12', 'Administrasi Pakaian Dinas Pegawai', NULL, NULL),
(908, 2, '1', 'Inventarisasi dan Penyimpanan', NULL, NULL),
(909, 2, '2', 'Pemeliharaan Peralatan Kantor', NULL, NULL),
(910, 2, '3', 'Distribusi', NULL, NULL),
(911, 2, '4', 'Penghapusan Barang Milik Daerah', NULL, NULL),
(912, 2, '5', 'Pengelolaan Database Barang Milik Daerah', NULL, NULL),
(913, 3, '1', 'Rencana Pengadaan Barang dan Jasa', NULL, NULL),
(914, 3, '2', 'Pengadaan Langsung', NULL, NULL),
(915, 3, '3', 'Pengadaan Tidak Langsung/Lelang', NULL, NULL),
(916, 3, '4', 'Swakelola', NULL, NULL),
(917, 3, '5', 'Pengolahan Sistem Informasi Pengadaan', NULL, NULL),
(918, 3, '6', 'Monitoring dan Evaluasi Pelaksanaan Kebijakan dan Pelaksanaan Pengadaan', NULL, NULL),
(919, 4, '1', 'Kebijakan di Bidang Perpustakaan', NULL, NULL),
(920, 4, '2', 'Deposit Bahan Pustaka', NULL, NULL),
(921, 4, '3', 'Koleksi Pustaka', NULL, NULL),
(922, 4, '4', 'Pengolahan Bahan Pustaka', NULL, NULL),
(923, 4, '5', 'Pangkalan Data Katalog Koleksi', NULL, NULL),
(924, 4, '6', 'Layanan Perpustakaan', NULL, NULL),
(925, 4, '7', 'Kerjasama Perpustakaan', NULL, NULL),
(926, 4, '8', 'Pengembangan Implementasi Teknologi Informasi Perpustakaan', NULL, NULL),
(927, 4, '9', 'Pangkalan Data Layanan Perpustakaan', NULL, NULL),
(928, 4, '10', 'Konservasi', NULL, NULL),
(929, 4, '11', 'Reprografi', NULL, NULL),
(930, 4, '12', 'Transformasi Digital', NULL, NULL),
(931, 4, '13', 'Kurasi Digital', NULL, NULL),
(932, 4, '14', 'Pengembangan Perpustakaan', NULL, NULL),
(933, 5, '1', 'Kebijakan di Bidang Kearsipan', NULL, NULL),
(934, 5, '2', 'Pembinaan Kearsipan', NULL, NULL),
(935, 5, '3', 'Pengelolaan Arsip Dinamis', NULL, NULL),
(936, 5, '4', 'Program Arsip Vital', NULL, NULL),
(937, 5, '5', 'Pengelolaan Arsip Terjaga', NULL, NULL),
(938, 5, '6', 'Penyusutan Arsip', NULL, NULL),
(939, 5, '7', 'Alih Media Arsip', NULL, NULL),
(940, 5, '8', 'Data Base Pengelolaan Arsip Dinamis', NULL, NULL),
(941, 5, '9', 'Pengelolaan Arsip Statis', NULL, NULL),
(942, 5, '10', 'Jasa Kearsipan', NULL, NULL),
(943, 5, '11', 'Pengelolaan SIKN dan JIKN', NULL, NULL),
(944, 5, '12', 'Pelindungan dan Penyelamatan Arsip Akibat Bencana', NULL, NULL),
(945, 5, '13', 'Penyelamatan Arsip Perangkat Daerah', NULL, NULL),
(946, 5, '14', 'Penerbitan Izin Penggunaan Arsip yang Bersifat Tertutup', NULL, NULL),
(947, 5, '15', 'Pengawasan Kearsipan', NULL, NULL),
(948, 6, '1', 'Kebijakan di Bidang Persandian', NULL, NULL),
(949, 6, '2', 'Pengamanan Persandian', NULL, NULL),
(950, 6, '3', 'Pengkajian Persandian', NULL, NULL),
(951, 6, '4', 'Pembinaan dan Pengendalian Persandian', NULL, NULL),
(952, 6, '5', 'Layanan Sertifikasi Elektronik', NULL, NULL),
(953, 7, '1', 'Musyawarah Perencanaan Pembangunan (Musrenbang)', NULL, NULL),
(954, 7, '2', 'Perencanaan Pembangunan Daerah', NULL, NULL),
(955, 7, '3', 'Koordinasi dan Sinkronisasi Perencanaan Pembangunan', NULL, NULL),
(956, 7, '4', 'Konsultasi Perencanaan Pembangunan', NULL, NULL),
(957, 7, '5', 'Pemantauan, Evaluasi, Penilaian, dan Pelaporan Perencanaan Pembangunan', NULL, NULL),
(958, 7, '6', 'Aksi Strategis Daerah', NULL, NULL),
(959, 7, '7', 'Perencanaan Pendanaan Pembangunan', NULL, NULL),
(960, 8, '1', 'Struktur Organisasi di Lingkungan Pemerintahan Daerah Kab/Kota', NULL, NULL),
(961, 8, '2', 'Uraian Jabatan', NULL, NULL),
(962, 8, '3', 'Ketatalaksanaan', NULL, NULL),
(963, 8, '4', 'Standar Kompetensi Jabatan Struktural dan Fungsional', NULL, NULL),
(964, 8, '5', 'Evaluasi Kelembagaan', NULL, NULL),
(965, 8, '6', 'Koordinasi Penguatan Reformasi dan Birokrasi', NULL, NULL),
(966, 9, '1', 'Kebijakan di Bidang Penelitian, Pengkajian, dan Pengembangan', NULL, NULL),
(967, 9, '2', 'Penelitian, Pengkajian, dan Pengembangan', NULL, NULL),
(968, 9, '3', 'Sosialisasi dan Desiminasi Hasil Penelitian, Pengkajian, dan Pengembangan', NULL, NULL),
(969, 9, '4', 'Bimbingan Teknis Penelitian, Pengkajian, dan Pengembangan', NULL, NULL),
(970, 9, '5', 'Forum Komunikasi Penelitian, Pengembangan, dan Penerapan Ilmu Pengetahuan dan Teknologi', NULL, NULL),
(971, 9, '6', 'Data dan Informasi Hasil Penelitian, Pengembangan, dan Penerapan Ilmu Pengetahuan dan Teknologi', NULL, NULL),
(972, 9, '7', 'Master Proceeding/Jurnal Penelitian, Pengembangan, dan Penerapan Ilmu Pengetahuan dan Teknologi', NULL, NULL),
(973, 9, '8', 'Hak Atas Kekayaan Intelektual (HaKI)', NULL, NULL),
(974, 9, '9', 'Evaluasi Pelaksanaan Kebijakan', NULL, NULL),
(975, 9, '10', 'Seminar, Lokakarya, Temukarya, Workshop', NULL, NULL),
(976, 1, '1', 'Telekomunikasi', NULL, NULL),
(977, 1, '2', 'Perjalanan Dinas Dalam Negeri', NULL, NULL),
(978, 1, '3', 'Perjalanan Dinas Luar Negeri', NULL, NULL),
(979, 1, '4', 'Penggunaan Fasilitas Kantor', NULL, NULL),
(980, 1, '5', 'Rapat Pimpinan', NULL, NULL),
(981, 1, '6', 'Penyediaan Konsumsi', NULL, NULL),
(982, 1, '7', 'Pengurusan Kendaraan Dinas', NULL, NULL),
(983, 1, '8', 'Pemeliharaan Gedung, Taman, dan Peralatan Kantor', NULL, NULL),
(984, 1, '9', 'Pengelolaan Jaringan Listrik, Air, Telepon, dan Komputer', NULL, NULL),
(985, 1, '10', 'Ketertiban dan Keamanan', NULL, NULL),
(986, 1, '11', 'Administrasi Pengelolaan Parkir', NULL, NULL),
(987, 1, '12', 'Administrasi Pakaian Dinas Pegawai', NULL, NULL),
(988, 62, '1', 'Rencana Anggaran Pendapatan dan Belanja Daerah (RAPBD) dan Anggaran Pendapatan dan Belanja Daerah Perubahan (APBD-P)', NULL, NULL),
(989, 62, '2', 'Penyusunan Anggaran', NULL, NULL),
(990, 62, '3', 'Pelaksanaan Anggaran', NULL, NULL),
(991, 62, '4', 'Pinjaman/Hibah Luar Negeri', NULL, NULL),
(992, 62, '5', 'Pengelolaan APBD/Dana Pinjaman/Hibah Luar Negeri (PHLN)', NULL, NULL),
(993, 62, '6', 'Sistem Akuntansi Keuangan Daerah (SAKD)', NULL, NULL),
(994, 62, '7', 'Penyaluran Anggaran Tugas Pembantuan', NULL, NULL),
(995, 62, '8', 'Penerimaan Anggaran Tugas Pembantuan', NULL, NULL),
(996, 62, '9', 'Penyusunan Anggaran Pilkada dan Biaya Bantuan Pemilu Dari APBD', NULL, NULL),
(997, 62, '10', 'Pelaksanaan Anggaran PILKADA dan Anggaran Biaya Bantuan Pemilu', NULL, NULL),
(998, 62, '11', 'Pemeriksaan/Pengawasan Keuangan Daerah', NULL, NULL),
(999, 62, '12', 'Anggaran Daerah', NULL, NULL),
(1000, 62, '13', 'Pendapatan dan Investasi Daerah', NULL, NULL),
(1001, 62, '14', 'Fasilitasi Dana Perimbangan', NULL, NULL),
(1002, 62, '15', 'Pelaksanaan Dan Pertanggungjawaban Keuangan Daerah', NULL, NULL),
(1003, 60, '15', 'Kepegawaian', '2025-07-02 13:51:31', '2025-07-02 13:51:31');

-- --------------------------------------------------------

--
-- Table structure for table `surat_izins`
--

CREATE TABLE `surat_izins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nomor_surat` varchar(255) NOT NULL,
  `dari_tanggal` date DEFAULT NULL,
  `sampai_tanggal` date DEFAULT NULL,
  `alasan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat_izins`
--

INSERT INTO `surat_izins` (`id`, `user_id`, `nomor_surat`, `dari_tanggal`, `sampai_tanggal`, `alasan`, `created_at`, `updated_at`) VALUES
(1, 11, '800.1.11.5/001/2025', '2025-01-07', '2025-01-07', 'Sakit', '2025-01-15 03:21:20', '2025-01-15 03:32:24'),
(2, 12, '800.1.11.5/002/2025', '2025-01-08', '2025-01-08', 'Sakit Perut', '2025-01-15 03:21:44', '2025-01-15 03:21:44'),
(4, 5, '800.1.11.5/003/2025', '2025-04-16', '2025-04-17', 'Urusan Keluarga ', '2025-04-16 05:33:02', '2025-04-16 05:33:02'),
(5, 13, '800.1.11.5/004/2025', '2025-06-26', '2025-06-26', 'Urusan Keluarga', '2025-06-25 02:36:37', '2025-06-25 02:36:37'),
(6, 7, '800.1.11.5/005/2025', '2025-06-30', '2025-07-01', 'Mendampingi Anak Sakit di Rumah Sakit Bhayangkara Kendari', '2025-06-30 04:50:34', '2025-06-30 04:50:34'),
(7, 10, '800.1.11.5/006/2025', '2025-08-04', '2025-08-04', 'Urusan Keluarga (Menghadiri Rapat Pertemuan Orang Tua Murid di Sekolah Anak)', '2025-08-03 22:43:19', '2025-08-03 22:43:19'),
(8, 8, '800.1.11.5/007/2025', '2025-08-04', '2025-08-05', 'Melaksanakan wisuda', '2025-08-04 01:18:29', '2025-08-04 01:18:29'),
(9, 5, '800.1.11.5/008/2025', '2025-07-28', '2025-07-28', 'Mengurus Dokumen Kendaraan Nomor = 004.a', '2025-08-06 05:48:58', '2025-08-06 05:49:29');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluars`
--

CREATE TABLE `surat_keluars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_kategori_id` bigint(20) UNSIGNED NOT NULL,
  `rincian_kategori_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nomor_surat` varchar(255) NOT NULL,
  `tujuan_surat` varchar(255) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat_keluars`
--

INSERT INTO `surat_keluars` (`id`, `category_id`, `sub_kategori_id`, `rincian_kategori_id`, `nomor_surat`, `tujuan_surat`, `tanggal_surat`, `perihal`, `user_id`, `created_at`, `updated_at`) VALUES
(8, 62, 990, 13, '001/2025', 'Badan Keuangan Daerah', '2025-01-03', 'Usulan Penatausahaan Keuangan T.A 2025', 0, '2025-01-15 05:05:04', '2025-02-17 13:43:11'),
(9, 60, 15, 82, '002/2025', 'AYU JULISTYA SRIANI', '2025-01-03', 'Surat Keterangan Aktif Bekerja ', 0, '2025-01-15 05:05:52', '2025-02-17 13:58:02'),
(10, 42, 615, NULL, '003/2025', 'Direktur PT. Marina Putra Sulawesi', '2025-01-06', 'Rekomendasi Menjadi Kios Resmi Pupuk Bersubsidi', 0, '2025-02-17 13:59:38', '2025-02-17 13:59:38'),
(11, 42, 609, NULL, '004/2025', 'Menteri Pertanian Cq. Dirjen PSP', '2025-01-09', 'Usulan Bantuan Pengembangan Jalan Pertanian', 0, '2025-02-17 14:02:02', '2025-02-17 14:02:02'),
(12, 43, 640, NULL, '005/2025', 'Kapolsek Wabar, Wateng, Waworete & DANRAMIL 1417-01 Wawonii', '2025-01-14', 'Permintaan Nama Petugas Babinkamtibmas', 0, '2025-02-17 14:03:42', '2025-02-17 14:05:32'),
(13, 42, 615, NULL, '006/2025', 'Direktur Pupuk ', '2025-01-20', 'Usulan Kegiatan Prasarana dan Sarana Pertanian T.A. 2025', 3, '2025-02-17 14:07:01', '2025-07-24 07:57:41'),
(14, 10, 853, NULL, '007/2025', 'Sekretaris Daerah Cq. Kabag Pemerintahan', '2025-01-20', 'Surat Pengantar Dokumen LPPD', 0, '2025-02-17 14:09:52', '2025-02-17 14:09:52'),
(15, 42, 609, NULL, '008/2025', 'Menteri Desa Cq. Dirjen Pembangunan Desa dan Perdesaan', '2025-02-09', 'Usulan Bantuan Pengembangan Jalan Pertanian', 0, '2025-02-17 14:12:03', '2025-02-17 14:12:03'),
(16, 62, 1002, 253, '009/2025', 'Badan Pemeriksa Keuangan (BPK)', '2025-02-17', 'Penyerahan Dokumen Permintaan BPK', 0, '2025-02-17 14:16:51', '2025-02-17 14:16:51'),
(17, 43, 641, NULL, '010/2025', 'Kepala Desa/Lurah se Kabupaten Konawe Kepulauan', '2025-02-20', 'Vaksinasi Penyakit Mulut dan Kuku (PMK)', 0, '2025-02-20 03:27:35', '2025-02-20 03:27:35'),
(18, 42, 616, NULL, '011/2025', 'Direktur Alat dan Mesin Pertanian Kementrian Pertanian', '2025-03-07', 'Data Alsintan dan Data Peningkatan Produksi Padi dan Jagung', 0, '2025-03-07 02:58:22', '2025-03-07 02:58:22'),
(19, 42, 616, NULL, '012/2025', 'Jaelani, S.IP., M.Si (Anggota DPR RI)', '2025-03-10', 'Verifikasi CPCL Penerima Bantuan Alsintan dan Bibit Padi', 0, '2025-03-10 05:12:36', '2025-03-10 05:12:36'),
(20, 43, 641, NULL, '013/2025', 'Kepala Dinas Tanaman Pangan dan Peternakan Provinsi Sulawesi Tenggara Cq. Kepala UPTD BPPT Prov. Sultra', '2025-03-17', 'Permohonan Bantuan Ternak Ayam', 0, '2025-03-17 05:38:34', '2025-03-17 05:38:34'),
(21, 42, 609, NULL, '010.a/2025', 'Dinas Kependudukan dan Catatan Sipil Konawe Kepulauan', '2025-03-03', 'PKS Pemanfaatan NIK, Data Kependudukan dan KTP Elektronik dalam Layanan Lingkup Dinas Pertanian', 0, '2025-03-18 04:44:25', '2025-03-18 04:44:25'),
(24, 60, 13, 70, '014/2025', 'BKD Kab. Konkep', '2025-04-15', 'Usulan Kenaikan Gaji Berkala (KGB)', 0, '2025-04-16 03:43:35', '2025-04-16 05:21:01'),
(25, 60, 15, 81, '015/2025', 'Sekretaris Daerah Kab. Konkep Cq. Kabag Organisasi Setda Kab. Konkep', '2025-04-15', 'Narahubung Instansi', 0, '2025-04-16 05:26:17', '2025-07-25 12:10:06'),
(27, 5, 804, NULL, '016/2025', 'Kominfo Kab. Konkep', '2025-04-16', 'Rekomendasi TTE', 0, '2025-04-16 05:38:53', '2025-04-16 05:38:53'),
(28, 11, 854, NULL, '017/2025', 'Sekretaris Daerah Kab. Konkep Cq. Kabag Organisasi Setda Kab. KOnkep', '2025-04-16', 'Penyampaian Narahubung Instansi', 0, '2025-04-16 05:55:39', '2025-04-16 05:55:39'),
(29, 42, 612, NULL, '018/2025', 'Menteri Pertanian RI', '2025-04-21', 'Permohonan Peremajaan Kelapa Dalam dengan Metode Underplanting', 0, '2025-04-21 07:25:18', '2025-04-21 07:25:18'),
(30, 42, 616, NULL, '019/2025', 'Direktur Alat dan Mesin Pertanian Kementrian Pertanian', '2025-04-23', 'Kelengkapan Data CPCL Bantuan ALSINTAN Prapanen', 0, '2025-04-23 06:16:50', '2025-04-23 06:16:50'),
(31, 42, 611, NULL, '020/2025', 'Direktur Jenderal Hortikultura Cq. Direktur Sayuran dan Tanaman Buah di Jakarta', '2025-04-25', 'Usulan CPCL P2B Sayuran dan Buah T.A 2025', 0, '2025-04-25 11:30:07', '2025-04-25 11:30:07'),
(32, 42, 611, NULL, '021/2025', 'Direktur Jenderal Hortikultura Cq. Direktur Sayuran dan Tanaman Buah di Jakarta', '2025-04-25', 'Usulan Petugas Pendaping Kegiatan P2B', 0, '2025-04-25 11:31:17', '2025-04-25 11:31:17'),
(33, 42, 611, NULL, '022/2025', 'Direktur Jenderal Hortikultura Cq. Direktur Sayuran dan Tanaman Buah di Jakarta', '2025-04-25', 'Usulan Tim Teknis Kegiatan', 0, '2025-04-25 11:31:44', '2025-04-25 11:31:44'),
(34, 42, 613, NULL, '023/2025', 'Direktur Irigasi Kementrian Pertanian', '2025-04-28', 'Permohonan Audiensi', 0, '2025-04-28 15:36:23', '2025-04-28 15:36:23'),
(35, 1, 773, NULL, '024/2025', 'Kalla Toyota', '2025-04-29', 'Surat Kuasa Pengambilan BPKB Kendaraan Mobil Dinas Pertanian', 0, '2025-04-29 07:24:04', '2025-04-29 07:24:04'),
(36, 1, 773, NULL, '025/2025', 'Hasyrat Abadi Motor', '2025-04-29', 'Surat Kuasa Pengambilan BPKB Kendaraan Motor Dinas Pertanian', 0, '2025-04-29 07:25:29', '2025-04-29 07:26:23'),
(37, 62, 1002, 253, '026/2025', 'Ketua TIM BPK Perwakilan Provinsi Sulawesi Tenggara', '2025-04-30', 'Surat Pengantar Tanggapan Temuan I Pemeriksaan LKPD 2024', 0, '2025-04-30 02:35:22', '2025-04-30 02:35:22'),
(38, 43, 640, NULL, '027/2025', 'Dirjen Peternakan dan Kesehatan Hewan Kementrian Pertanian', '2025-04-28', 'Rekomendasi Calon Sapi Bantuan Kemasyarakatan (BANMAS) Presiden pada Hari Raya Idul Adha 1446 H/2025 M', 0, '2025-04-30 06:16:29', '2025-04-30 06:16:29'),
(39, 5, 804, NULL, '028/2025', 'PERPUATAKAAN KAB. KONKEP', '2025-04-30', 'DATA ADMIN SRIKANDI', 0, '2025-04-30 14:55:04', '2025-05-01 01:05:11'),
(40, 42, 616, NULL, '018.a/2025', 'PPK Direktorat Alat dan Mesin Pertanian Kementrian Pertanian', '2025-04-22', 'Kelengkapan Data CPCL Bantuan Alsintan Prapanen', 0, '2025-05-05 04:51:35', '2025-05-05 04:52:31'),
(41, 1, 773, NULL, '029/2025', 'LKPD', '2025-05-09', 'PEMERIKSAAN BERMOTOR', 0, '2025-05-09 01:56:55', '2025-05-09 01:56:55'),
(42, 42, 616, NULL, '030/2025', 'PPK Direktorat Alat dan Mesin Pertanian Kementrian Pertanian', '2025-05-15', 'Data CPCL Penerima Bantuan ALSINTAN', 0, '2025-05-15 05:40:56', '2025-05-15 05:40:56'),
(43, 42, 630, NULL, '031/2025', 'Balai Besar Inseminasi Buatan (BBIB) Singosari', '2025-05-15', 'Permohonan Pelatihan Budidaya Nilam', 0, '2025-05-15 06:24:07', '2025-05-15 06:35:54'),
(44, 60, 5, NULL, '032/2025', 'Kepala BKPSDM (800.1.3.1/032/2025)', '2025-05-15', 'Penyampaian Data Dukung Pengalihan Penyuluh Pertanian ASN dari Pemda Konkep ke Kementan', 0, '2025-05-19 02:10:16', '2025-07-02 15:13:40'),
(45, 42, 616, NULL, '033/2025', 'PPK Direktorat Alat dan Mesin Pertanian Kementrian Pertanian', '2025-05-16', 'Kelengkapan Data CPCL Bantuan Alsintan Prapanen (Race Transplanter)', 0, '2025-05-19 02:30:51', '2025-05-19 02:30:51'),
(46, 42, 616, NULL, '034/2025', 'Kapolsek Wawonii Tengah Cq. Kasat Reskrim Wawonii Tengah', '2025-05-19', 'Penyampaian Informasi Alsintan', 0, '2025-05-19 05:25:41', '2025-05-19 05:28:23'),
(47, 12, 863, NULL, '025.a/2025', 'BBIB (100.4.7/025.a/2025)', '2025-04-29', 'Mou BBIB', 0, '2025-05-20 09:38:30', '2025-05-20 09:42:29'),
(48, 12, 863, NULL, '025.b/2025', 'BBPP Lembang', '2025-04-29', 'Mou BBPP', 0, '2025-05-20 09:40:47', '2025-05-20 09:40:47'),
(49, 12, 863, NULL, '025.c/2025', 'BBBP Troa', '2025-04-29', 'Mou BBBP Troa', 0, '2025-05-20 09:41:39', '2025-05-20 09:41:39'),
(50, 42, 616, NULL, '010.b/2025', 'Dinas Tanaman Pangan dan Peternakan Prov Sultra', '2025-04-07', 'Adendum Exavator Hyundai PC 220', 0, '2025-05-26 04:52:04', '2025-05-26 04:52:04'),
(51, 43, 642, NULL, '035/2025', 'Persatuan Dokter Hewan Indonesia Cabang Sultra', '2025-05-28', 'Permohonan Narasumber Juru Sembelih Halal', 0, '2025-05-28 01:36:29', '2025-05-28 01:37:36'),
(52, 43, 642, NULL, '036/2025', 'Peserta', '2025-05-28', 'Surat Undangan Peserta', 0, '2025-05-28 02:09:25', '2025-05-28 02:09:25'),
(53, 62, 998, 233, '037/2025', 'PPK, Perencana dan Bendahara Pengeluaran Dinas Pertanian', '2025-06-11', 'Tindak Lanjut Surat Bupati Konawe Kepulauan No : 011/900/TL/2025', 0, '2025-06-11 09:44:49', '2025-06-12 04:13:30'),
(54, 62, 998, 233, '038/2025', 'PPK, PPTK, Perencana dan Bendahara Pengeluaran', '2025-06-11', 'Tindak Lanjut Surat Bupati Konawe Kepulauan No : 049/900/TL/2025', 0, '2025-06-12 01:59:55', '2025-06-12 04:05:52'),
(55, 62, 998, 233, '039/2025', 'PPK, PPTK, Perencana dan Bendahara Pengeluaran', '2025-06-11', 'Tindak Lanjut Surat Bupati Konawe Kepulauan No : 074/900/TL/2025', 0, '2025-06-12 02:09:27', '2025-06-12 04:13:00'),
(56, 3, 789, NULL, '040/2025', 'Badan Keuangan Daerah', '2025-06-11', 'Penilaian Barang Milik Daerah', 0, '2025-06-12 03:36:30', '2025-06-12 03:36:30'),
(57, 3, 784, NULL, '041/2025', 'Badan Keuangan Daerah', '2025-06-11', 'Usulan Rencana Kebutuhan Barang Milik Daerah 2026', 0, '2025-06-12 03:37:16', '2025-06-12 03:37:16'),
(58, 2, 783, NULL, '042/2025', 'Pegawai Dinas Pertanian', '2025-06-12', 'Berita Acara Pengguna Barang Milik Daerah (BMD)', 0, '2025-06-12 06:15:47', '2025-06-12 06:15:47'),
(59, 42, 616, NULL, '043/2025', 'Kepala Dinas Tanaman Pangan dan Peternakan Provinsi Sulawesi Tenggara', '2025-06-18', 'Usulan Permohonan Penggunaan Sementara ALSINTAN', 0, '2025-06-18 05:33:04', '2025-06-18 05:33:04'),
(60, 42, 620, NULL, '044/2025', 'Dirjen Lahan dan Irigasi Pertanian Cq. Direktur Penyediaan Lahan', '2025-06-23', 'Usulan Kegiatan Cetak Sawah Tahun Anggaran 2026', 0, '2025-06-23 05:48:51', '2025-06-23 05:48:51'),
(61, 62, 998, 233, '045/2025', 'PPK DINAS PERTANIAN', '2025-06-23', 'Tanggapan atas Laporan Hasil Pemeriksaan Nomor : 28.B/LHP/XIX.KDR/05/2025', 0, '2025-06-23 07:46:35', '2025-06-24 01:03:27'),
(62, 62, 998, 233, '046/2025', 'Pengurus Barang Dinas Pertanian Kabupaten Konawe Kepulauan', '2025-06-24', 'Tanggapan atas LHP Nomor : 27.B/LHP/XIX.KDR/05/2022 tentang penatausahaan dan pencatatan Aset Tetap', 0, '2025-06-24 00:00:30', '2025-06-24 00:00:30'),
(63, 43, 642, NULL, '047/2025', 'kepala UPTD balai perbibitan dan pakan ternak dinas tanaman pangan dan peternakan', '2025-06-24', 'permintaan narasumber pelatihan sosialisasi optimalisasi pelaksanaan IB', 0, '2025-06-24 03:27:11', '2025-06-24 03:27:11'),
(64, 43, 641, NULL, '048/2025', 'direktorat jenderal peternakan dan kesehatan hewan', '2025-06-24', 'Petugas validasi data vaksinasi penyakit mulut dan kuku', 0, '2025-06-24 03:28:30', '2025-06-24 03:28:30'),
(65, 62, 998, 233, '049/2025', 'Bendahara Pengeluaran ', '2025-06-25', 'Tanggapan atas LHP Sistem Pengendalian kas pada Bendahara OPD', 0, '2025-06-25 02:27:19', '2025-06-25 02:28:12'),
(66, 62, 998, 233, '050/2025', 'PPK DINAS PERTANIAN', '2025-06-25', 'Tanggapan atas LHP Perjalanan Dinas yang tidak sesuai Ketentuan', 0, '2025-06-25 02:30:27', '2025-06-25 02:30:27'),
(67, 42, 609, NULL, '043.a/2025', 'Kepala bidang PSP Dinas Pertanian', '2025-06-20', 'Persetujuan Swakelola JUT Desa Pesue', 0, '2025-06-25 04:03:22', '2025-06-25 04:03:22'),
(68, 43, 641, NULL, '044/2025', 'Kepala Desa', '2025-06-26', 'Permohonan Peminjaman Tempat', 0, '2025-06-26 07:46:23', '2025-06-26 07:46:23'),
(69, 43, 641, NULL, '045/2025', 'Peserta', '2025-06-26', 'undangan sosialisasi optimalsisasi pelaksanaan IB', 0, '2025-06-26 07:47:06', '2025-06-26 07:47:06'),
(70, 60, 8, NULL, '046/2025', 'Kepala BKPSDM Kab. Konawe Kepulauan', '2025-07-02', 'Usul Penindakan Disiplin Pegawai', 0, '2025-07-02 14:53:16', '2025-07-02 15:12:54'),
(71, 62, 1002, 253, '047/2025', 'Kepala Badan Keuangan Daerah Cq. Bidang Aset', '2025-07-03', 'Laporan Barang Milik Daerah', 0, '2025-07-03 08:10:26', '2025-07-03 08:10:26'),
(72, 60, 1003, NULL, '048/2025', 'Medik Veteriner Ahli Pertama', '2025-07-03', 'Surat Keterangan Aktif Melaksanakan Tugas (SKAMT)', 0, '2025-07-03 08:59:14', '2025-07-03 08:59:14'),
(73, 43, 641, NULL, '049/2025', 'Kepala Desa Lantula', '2025-07-07', 'Sosialisasi Komunikasi, Informasi, dan Edukasi Pencegahan dan Penanggulangan Penyakit Hewan Menular Strategis Tingkat Kabupaten Konawe Kepulauan di Desa Lantula', 0, '2025-07-07 07:53:16', '2025-07-07 07:53:16'),
(74, 43, 641, NULL, '050/2025', 'Balai Desa Lantula', '2025-07-07', 'Meningkatkan Pengetahuan Peternak tentang Penyakit Hewan Menular Strategis Tingkat Kabupaten Konawe Kepulauan', 0, '2025-07-07 07:56:48', '2025-07-07 07:56:48'),
(75, 43, 641, NULL, '051/2025', 'Kepala Desa Lantula', '2025-07-07', 'Sosialisasi Komunikasi Informasi, dan Edukasi Pencegahan dan Penanggulangan Penyakit Hewan Menular Strategis (PHMS)', 0, '2025-07-07 07:57:51', '2025-07-07 07:57:51'),
(76, 60, 13, 70, '052/2025', 'Badan Keuangan Daerah', '2025-07-14', 'Kenaikan Gaji Berkala A.n. RIYAL ASHARI', 0, '2025-07-14 03:38:45', '2025-07-14 03:38:45'),
(77, 60, 13, 70, '053/2025', 'Badan Keuangan Daerah', '2025-07-14', 'Kenaikan Gaji Berkala A.n. AHMAD RAMADHAN', 0, '2025-07-14 03:39:37', '2025-07-14 03:39:37'),
(78, 60, 13, 70, '054/2025', 'Badan Keuangan Daerah', '2025-07-14', 'Kenaikan Gaji Berkala A.n. LUKMINSASI SAPUTRA', 0, '2025-07-14 03:40:13', '2025-07-14 03:40:13'),
(79, 42, 620, NULL, '055/2025', 'Dinas Tanaman Pangan dan Peternakan Prov. Sultra', '2025-07-15', 'Usulan Pengelolaan Satuan Kerja Dana Tugas Pembantuan Ditjen PSP TA. 2025', 0, '2025-07-15 09:25:37', '2025-07-15 09:25:37'),
(80, 43, 640, NULL, '056/2025', 'Penyuluh dan Peternak', '2025-07-16', 'Mencegah Penularan Penyakit Mutu dan Kuku (PMK)', 0, '2025-07-16 03:48:22', '2025-07-16 03:48:22'),
(81, 42, 616, NULL, '057/2025', 'Direktur Alat dan Mesin Pertanian Kementrian Pertanian', '2025-07-28', 'Data ALSINTAN Prapanen Tahun 2017-2024', 14, '2025-07-28 05:07:24', '2025-07-28 05:07:24'),
(82, 42, 613, NULL, '058/2025', 'Dirjen Lahan dan Irigasi Pertanian', '2025-07-29', 'Usulan Kegiatan Jalan Usaha Tani TA. 2026', 14, '2025-07-29 12:20:18', '2025-07-29 12:20:18'),
(83, 43, 641, NULL, '059/2025', 'Dinas Tanaman Pangan dan Peternakan Prov Sultra', '2025-08-05', 'Proposal Bantuan Obat-Obatan Ternak dan Peralatan Medis', 4, '2025-08-05 09:01:54', '2025-08-05 09:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuks`
--

CREATE TABLE `surat_masuks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_surat` varchar(255) NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat_masuks`
--

INSERT INTO `surat_masuks` (`id`, `nomor_surat`, `pengirim`, `tanggal_surat`, `perihal`, `created_at`, `updated_at`) VALUES
(4, 'B/16/I/BIN.2.1/2025', 'Kepala Kepolisian Resor Kota Kendari', '2025-01-10', 'Undangan Rapat Koordinasi Ketahanan Pangan', '2025-01-15 02:22:09', '2025-01-15 02:22:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$12$x4zuumOAt7GhPieFYhQwwOfsNhNWYKhPbnLcMzTKmuKU/azJ64UTS', NULL, '2025-01-07 02:16:06', '2025-01-07 02:16:06'),
(2, 'NAJAMUDIN, S.Pd', 'najamudin@email.com', NULL, '$2y$12$dJE6Fh7QT1JCijwhDMSUXOwnuDCwe11OLYAP8LbbUt2GlmW18Vgs.', NULL, '2025-02-15 03:09:54', '2025-02-15 03:09:54'),
(3, 'IKSAL,SP., MP', 'Iksal@email.com', NULL, '$2y$12$qQZVrfrP3OscioMPkui88OfGHoGYk.ZK32/xofTrpcHxeAGSw6M6m', NULL, '2025-01-08 05:38:41', '2025-01-13 10:13:41'),
(4, 'SUWARNO, S.Pt', 'suwarno@email.com', NULL, '$2y$12$z/GOTA66PCvpg1YgIoR9wukqd6.Cn1yxKpgwCadIc44d/eMLdS37u', NULL, '2025-02-12 19:19:31', '2025-02-12 19:19:31'),
(5, 'RUSDI MUSA, SP, M.AP', 'RusdiMusda@email.com', NULL, '$2y$12$NvYjHCrcvPenfvlE0j2UH.zRggAT6jc0cIsMdKLMgZFLUCpb.jvYS', NULL, '2025-01-13 10:14:27', '2025-01-13 10:14:27'),
(6, 'SITI PATIMAH, S.S.Kom., MM', 'SitiFatima@email.com', NULL, '$2y$12$p.ExoDzqgDYuhCjv8paJfuAbYuih/cUuvAkD/vZEgQtfYJZymh8IC', NULL, '2025-01-13 10:14:50', '2025-01-13 10:14:50'),
(7, 'WA SARIMUNA,SP', 'WaSarimuna@email.com', NULL, '$2y$12$P6PZTYTXh6N1L0MgDa4z/.JIGDs3PgXcqMSaUy9c9R310CwIORgQK', NULL, '2025-01-13 10:15:09', '2025-01-13 10:15:09'),
(8, 'MAULID WATI PITUNANI, S.TP', 'MaulidWati@email.com', NULL, '$2y$12$DTsmNslYlVLjpaOqtxXTBu3738fObFZsSFOyWUJKCMzpR3TfoycH.', NULL, '2025-01-13 10:15:32', '2025-01-13 10:15:32'),
(9, 'RIANSYAH. SP', 'rian@email.com', NULL, '$2y$12$G5EtZLw/Afj4tSOChkrT.u30gunxNEbgxZ4y8/w8oUTmDWgcFzU5C', 'VJ5OxcQLyP8eLWgLNtQsQz7k3Q2QDXrf2rSfRE8q0FgV5UBfILFEFzgmuMEa', '2025-01-13 10:15:50', '2025-08-06 10:12:39'),
(10, 'RHANY OKTAVINA, S.P', 'RhanyOktavina@email.com', NULL, '$2y$12$QmC8.jT2HFaZMpYfAy1nI.HKH71olH8EnnNfwdjPn7E.uoJdHvrIW', NULL, '2025-01-13 10:16:16', '2025-01-13 10:16:16'),
(11, 'RIYAL ASHARI, S.P', 'riyal@email.com', NULL, '$2y$12$RvHaYvkA6bxIG4CCxlKDXOMNF54jkUePXPM.vnwGeaot5sD95gudG', NULL, '2025-01-13 10:16:34', '2025-06-30 04:37:48'),
(12, 'LUKMINSASI SAPUTRA, S.P', 'Lukmin@email.com', NULL, '$2y$12$uqxdhqB7z/vatJsaoLkOSuz.IhEfqE5fC/mFPssOogsXZo0JpHJwi', NULL, '2025-01-13 10:16:49', '2025-01-13 10:16:49'),
(13, 'AHMAD RAMADHAN, S.P', 'AhmadRamadhan@email.com', NULL, '$2y$12$TAwJGIYLf/Z5NmCCSn0Aeu2/04/QTj08jAFCLuxeFhc7kIVOEZ.HW', NULL, '2025-01-13 10:17:08', '2025-01-13 10:17:08'),
(14, 'TAMSIL, ST., MM', 'Tamsil@distan.com', NULL, '$2y$12$NLPJMQRuMCyEv7LSwR.6OObbfOrHWBv7dXvhcgq1q9DBrsj1YWNwq', NULL, '2025-01-13 10:17:31', '2025-07-29 12:09:27'),
(15, 'HASAN, A.Md.,Kom', 'hasan@email.com', NULL, '$2y$12$lhjdWN14Rzsprb.fNmqHj.UE4lbihlOHcsGEB90zIKWniQaJRrSke', NULL, '2025-01-13 10:18:05', '2025-07-29 12:20:26'),
(16, 'SITTI RISKAYANTI, S.Si', 'Riska@email.com', NULL, '$2y$12$.VNJHm6jOYBVcqx15yWKLeY8GWvK1y7ORFOmYC6NFcNtKgfrotG6C', NULL, '2025-01-13 10:18:33', '2025-01-15 01:42:25'),
(18, 'MIKI ASTRIA NINGSIH, S.Ak', 'Miki@email.com', NULL, '$2y$12$Yu9lfvkm3RtaAAE4NBTf9ecEAmehp9VAWBGJ6vVFyY.QrIJcgiDaq', 'wMoBx8T7usQgftP4Nqsn8YQpMIWyZZ2xaseWd4fhBEyZZEtFuF91buCuzUUg', '2025-01-13 10:19:53', '2025-05-14 02:34:02'),
(19, 'YURNI, SP', 'Yurni@email.com', NULL, '$2y$12$ygp4JXgeJkzLw9JFgldkme//IK4nC1nSwZGSioSvemwnCMDOjmCCi', NULL, '2025-01-13 10:20:11', '2025-01-13 10:20:11'),
(20, 'WA ODE NUZULI', 'waodenuzuli@email.com', NULL, '$2y$12$PdOUBXvJ8vBLzIuL9KSUAefI/ipAPUmSkojgSuJWkdP474qDqI5G2', NULL, '2025-02-12 19:10:15', '2025-02-12 19:10:15'),
(23, 'FIRDHA ANGGERAINI, S.Pt', 'angra@email.com', NULL, '$2y$12$Z2ZyVdxVct29wDc6ogNCi.LRZHtgIfPNFEXPN6ytehsCH0B2X4s4e', NULL, '2025-02-18 01:18:03', '2025-02-18 01:18:03'),
(24, 'YUNIARTY, A.Md', 'yuniarti@email.com', NULL, '$2y$12$7ct3DSCz0g5BE46d40r6M.oq4z8PQJ36peU13XU4o6kxWFIAEN5Ea', NULL, '2025-02-18 01:21:32', '2025-04-22 01:05:26'),
(25, 'RUSDAN, S.Pt', 'rusdan@email.com', NULL, '$2y$12$ZRSgN6I0C8qnYtSP/GpHru5i1y.q1bpiZzahs.7fJGKlu/6lmlm4e', NULL, '2025-02-18 01:24:37', '2025-02-18 01:24:37'),
(26, 'SALAM, S.TP', 'salam@email.com', NULL, '$2y$12$3YqElf38dNlpcQbJwG5nL./rw9Gxo/m6ROgi7SxqlNCL.KSweWAnG', NULL, '2025-02-18 01:26:35', '2025-02-18 01:27:26'),
(27, 'HUNAIN, SP', 'hunain@email.com', NULL, '$2y$12$fr1GpN0YLvQnBlJtAvYm/efbWqfAUOcSIemFQ1k8gOAQ4mZAI9.QG', NULL, '2025-02-18 01:30:03', '2025-04-21 04:50:00'),
(28, 'DARNI, S.P', 'darni@email.com', NULL, '$2y$12$PeaM1.efKOfzSXWVax3RBextnx/CXuH1k9XThPWBoLmblD/7G6INy', NULL, '2025-02-27 07:23:59', '2025-02-27 07:24:18'),
(29, 'Drh. JENI YUNITA NINGSIH', 'jeni@email.com', NULL, '$2y$12$Q5e2IonyvglGpOAp.Ka72e5raStbwjHaIKoC4jXhkHUsOjk7Fu4gW', NULL, '2025-03-14 07:07:26', '2025-03-14 07:07:26'),
(31, 'ARBIANTO, SP', 'arbi@email.com', NULL, '$2y$12$GnWCBdKcuPPmKEbHw2wxdegsv5EM6ynP4mUi1uzA/qj22QJK5k.qy', NULL, '2025-04-21 01:37:58', '2025-04-21 01:37:58'),
(32, 'MUDASIR, S.Kom', 'mudasir@email.com', NULL, '$2y$12$60X2dRDojtvjb1uWyLSG.OQ2fiSfEjvzZRxn0B7Lo3re8WmXnK4eu', NULL, '2025-04-21 01:38:27', '2025-04-21 01:38:27'),
(33, 'ARNA, SP', 'arna@email.com', NULL, '$2y$12$AjIPsZcFthRmvd6AXZoIuuESZm8DpmTbolEwuBc3lFUW7W9nBE8TC', NULL, '2025-04-21 01:42:19', '2025-04-21 01:42:19'),
(34, 'SULFADLY, SP', 'sulfadi@email.com', NULL, '$2y$12$.rgm/GaVqXDlp8CmIvYOl.Rq2WEj.zNVPllaeZnSDiE72ASfL7s3e', NULL, '2025-04-22 00:53:10', '2025-06-04 08:39:38'),
(35, 'HAMRIN, S.TP', 'hamrin@email.com', NULL, '$2y$12$xVwlVvy217dRo5Pb8xVK4.ckgPOdElw8vwAE4KIAH2Z72Jfbt6xM6', NULL, '2025-04-22 00:53:43', '2025-04-22 00:53:43'),
(36, 'UMMU HABIBA, SP', 'ummuhabiba@email.com', NULL, '$2y$12$XI78bS.rzgnE3s/67gjJSuwL97Sp/x6tTazSpcz613e/L6/IWW2rW', NULL, '2025-04-22 00:54:11', '2025-04-22 00:54:11'),
(37, 'SITI AISYAH, A.Md', 'sitiaisyah@email.com', NULL, '$2y$12$wM3jgZFb7ez9/kLFcvh7/uWIwJQMPojdek3QfYkWo074YsliFySp.', NULL, '2025-04-22 00:54:49', '2025-04-22 00:54:49'),
(38, 'YUNARMIN, SP', 'yunarmin@email.com', NULL, '$2y$12$fqIFamza5y7ubry1caFZBenPIgpQiknOf23dX868UQOKRX2.V3coa', NULL, '2025-04-22 00:55:17', '2025-07-23 09:02:39'),
(39, 'EKATUSALAM, SP', 'ekatusalam@email.com', NULL, '$2y$12$vAHS03FGrLMDlZEOGOK1Bew969p/URCNBzKcxulO20Dq2mlKW/Xje', NULL, '2025-04-22 00:56:42', '2025-04-22 00:56:42'),
(40, 'HARIYANTO, SP', 'hariyanto@email.com', NULL, '$2y$12$Ml7xICtc627uuZ24BL3zgOu5WreXURVWohBH0O8DPFKpYnN4Z8k3G', NULL, '2025-04-22 00:57:11', '2025-04-22 00:57:11'),
(41, 'DEDY HARIYADI, SP', 'dedyhariyadi@email.com', NULL, '$2y$12$egxd8.DptFDU1ku91qRyXu.RLV/47tGJa8t.JGGA1CCBhysO5XYoi', NULL, '2025-04-22 00:57:48', '2025-04-30 02:20:06'),
(42, 'ERIK SANTOSO, SP', 'eriksantoso@email.com', NULL, '$2y$12$SD3HGXNCcrmTSz5AddOBi.uDunVyYEHqFQBZ3IRzINy49dyRoPCjK', NULL, '2025-04-22 00:58:09', '2025-04-22 00:58:09'),
(43, 'EVI SUDARYANTI, SP', 'evisudaryanti@email.com', NULL, '$2y$12$.VfbDWUzbFMs52hnhrA6G.TiEaixVe5HSjbMSSHROqJdqt9/FyhVC', NULL, '2025-04-22 00:58:28', '2025-04-22 00:58:28'),
(44, 'RATNAWATI, A.Md', 'ratnawati@email.com', NULL, '$2y$12$xAWIxwUf8ZD4rsPHKlCi3.vp7g9laIHHY7FQ1i6qgm4ABoTP.VywC', NULL, '2025-04-22 00:58:56', '2025-04-22 00:58:56'),
(45, 'SYAMSIAR, S.TP', 'syamsiar@email.com', NULL, '$2y$12$qiDDzpn/vn1eegYnsBGsWOBY9ghb7VYJWwLc6pVjgFUcxSh8ErekG', NULL, '2025-04-22 00:59:29', '2025-04-22 00:59:29'),
(46, 'RANI UMIRLAN, SP', 'raniumirlan@email.com', NULL, '$2y$12$SbBiQLlHW.wOXCapOwuKYOZrTUNehMBVYVlXUcT8yUo00bLZPBU2m', NULL, '2025-04-22 00:59:53', '2025-04-22 00:59:53'),
(47, 'METI ANDRIARNI, SP', 'meti@email.com', NULL, '$2y$12$d8VylmKCSTzT3cb55/FZl.gPvT5TZKkjTW9cj0W..JF.CDBTrtUky', NULL, '2025-04-22 01:02:41', '2025-04-22 01:02:41'),
(48, 'INDRAYANI, S.TP', 'indrayani@email.com', NULL, '$2y$12$j5I2UK4YQKjpYQNtt43txOT0UjGnLUs0CFrByUPpGebWrEAF.orny', NULL, '2025-04-22 01:28:24', '2025-04-22 01:28:24'),
(49, 'ASDIFAR MIRSYAD, SP', 'asdifar@email.com', NULL, '$2y$12$Ov9kc88eJY0E08avmTfweulxxXg.xd3zqPqJcopp4TJ0gW73QMYWi', NULL, '2025-04-22 01:36:35', '2025-04-22 01:36:35'),
(53, 'FITRI EKAYANI, SP', 'fitri@email.com', NULL, '$2y$12$xcxfxUv8srFAprmXodC.H.klbUN6SQ0ezO6M2iD8K/.jpxmowk0DG', NULL, '2025-04-22 01:48:58', '2025-04-22 01:48:58'),
(54, 'NASIR, SP', 'nasir@email.com', NULL, '$2y$12$YGedJ7zAU/tKgU1OtGMg7uDnQSVYjoIZlmodaPFh7a.Qa8ODAvFxG', NULL, '2025-04-30 02:13:29', '2025-04-30 02:13:29'),
(55, 'SARIDA, G. S.Pt', 'sarida@email.com', NULL, '$2y$12$751zuRxshmxabA6aU888F.8jz1fbPEBjYZgAg3hd4wltg1ueebKJu', NULL, '2025-04-30 02:18:48', '2025-04-30 02:18:48'),
(56, 'HAMIZA, SP', 'hamiza@email.com', NULL, '$2y$12$yScp9mUldS0LKDFz84QyNOub9Q.9tGj4vUY26z3clgRB0bZB/KlM6', NULL, '2025-04-30 02:21:59', '2025-04-30 02:21:59'),
(57, 'KAHARUDDIN', 'kaharudin@email.com', NULL, '$2y$12$wNinBksqhHQNK72JXzbFzeyLHbv4aMA1PPfkwaE5You4IpgLWMxOW', NULL, '2025-05-16 03:08:54', '2025-05-16 03:08:54'),
(58, 'KAMAL', 'kamal@email.com', NULL, '$2y$12$b//f.pC77q/Cu6HqJ8I1bef8igLgOCTIiKK7PTel2l.BkI1yKs5ty', NULL, '2025-05-16 03:09:18', '2025-05-16 03:09:18'),
(59, 'MUHRA RAJA', 'muhraraja@email.com', NULL, '$2y$12$Dpj3z.ZTrgqVn42FNOdvtuUKfqdh4IMas3kQrW4AmgKzWbvAjpeB.', NULL, '2025-05-16 03:09:47', '2025-05-16 03:09:47'),
(60, 'HARDIN', 'hardin@email.com', NULL, '$2y$12$9T.EfV2QT0vbP6ZGSovZS.Xtwg.AUn47pf5Nv0lBImIa/6Tmi9twW', NULL, '2025-05-16 03:10:25', '2025-05-16 03:10:25'),
(61, 'SIGIT ARIANTO', 'sigit@email.com', NULL, '$2y$12$NuNt9CEKymf8/Uyi56r0c.hXHh6M7x9zqgJ87Tk4ROoIYLWz9XjDG', NULL, '2025-05-16 03:10:52', '2025-05-16 03:10:52'),
(62, 'DIMAN', 'diman@email.com', NULL, '$2y$12$X8NK9rx7sJORGZmpBBNpTuWY9kdk8jxWv0Z7vcPKluMB5SAYKADMm', NULL, '2025-05-16 03:11:10', '2025-05-16 03:11:10'),
(63, 'DAVID MIHARJO', 'david@email.com', NULL, '$2y$12$Tc36jsR9MO/141a7vvA4t.kVkU7ILSt2xigP7EdssfgiRnbR6r.mG', NULL, '2025-05-16 03:11:31', '2025-05-16 03:11:31'),
(64, 'MUHAMMAD IKSAN', 'iksan@email.com', NULL, '$2y$12$JjIq5PbhEDNdzYMvILdnhuX3ecBsRsjfLGs73n.yeOLG7hn3H6602', NULL, '2025-05-16 03:11:53', '2025-05-16 03:11:53'),
(65, 'ERWIN PAMURU', 'erwin@email.com', NULL, '$2y$12$wBzU5l.Kh9myf/j.dm1rAepOWetIJoFkhsX.JDKdUfcMm5Qu6SllG', NULL, '2025-05-16 03:12:19', '2025-05-16 03:12:19'),
(66, 'KURDIN', 'kurdin@email.com', NULL, '$2y$12$NDJuYWJQZvCHGUyCKfFC..PkY7VLJ9uNiVm7crggZY3rMOC7bnFuO', NULL, '2025-05-16 03:12:38', '2025-05-16 03:12:38'),
(70, 'ANDRIAS SIDIK', 'andriassidik@.com', NULL, '$2y$12$ilhii8.u9RDjQalr.0YubuNXnQ77mbEaDSHAFRj.dsJutMJX.HCL6', NULL, '2025-05-18 06:48:25', '2025-05-18 07:00:46'),
(71, 'SUDIRMAN', 'sudirman@email.com', NULL, '$2y$12$ef7BXBm/49I8J0SPKc5FpuVf5Gg99rq.8nrFbyXtTae0a0kFVM6NO', NULL, '2025-05-18 11:18:51', '2025-05-18 11:18:51'),
(73, 'LAODE RAHMAT', 'laoderahmat@email.com', NULL, '$2y$12$L46zvPbcciw96Vj.M1Ze5OE7rcqQgr6R097leezs1DDO0aVYsHaky', NULL, '2025-05-18 11:26:53', '2025-05-18 11:31:34'),
(74, 'ISALMAN', 'isalman@email.com', NULL, '$2y$12$gQ/M1RiQAEN0UOiuZdpJgu89BJCWLtTvuT1MFGgfWSw1d/9I9hpvi', NULL, '2025-05-18 11:33:37', '2025-05-18 11:33:37'),
(75, 'CANDRA ADIATMA', 'candraadiatma@email.com', NULL, '$2y$12$Wvdkm1LMOEKhNcp2VwkNPOUlByRFV.e.4caw2/J4ZmUFikqjUMYiy', NULL, '2025-05-18 11:35:05', '2025-05-18 11:35:22'),
(76, 'MUH RIZALDI', 'rizaldi@email.com', NULL, '$2y$12$bDT7nUEjL68IhIL.jneUuOhd9R4VrKGiFGmKMbIhDXLdVzLmM9jeu', NULL, '2025-05-18 11:37:38', '2025-05-18 11:37:44'),
(77, 'RAHMI', 'rahmi@email.com', NULL, '$2y$12$F4nWPVRacfdhntZa5CLkWu8uDfYY7CJxGj9AcG8DsbDZ4o9xlvbIq', NULL, '2025-05-18 11:41:38', '2025-05-18 11:41:45'),
(78, 'SUPRIYATI', 'supriyati@email.com', NULL, '$2y$12$uYJZFiZ5CUTATUNyod3LZuZdeNhk3PfJuPCNYBahuVqg0ezMpq3ri', NULL, '2025-05-18 11:49:29', '2025-05-18 11:49:34'),
(79, 'MOCH SUQRAM S', 'mochsuqram@email.com', NULL, '$2y$12$LZaRkO6b69LB5dcQjlz1POfrOrIGFI.vGX0H4cvXJIIzyULQXqfc2', NULL, '2025-05-18 11:51:01', '2025-05-18 11:51:08'),
(80, 'DIKI DARMAWAN', 'dikidarmawan@email.com', NULL, '$2y$12$PdI7N7.Vr868pEC3ihXTCOt4pwu7ddMRKMU0UOi0vKKW3/BBDU5T6', NULL, '2025-05-18 11:56:14', '2025-05-18 11:56:22'),
(81, 'FERY PRASETIA', 'feryprasetia@email.com', NULL, '$2y$12$cl2/5geICW2jshkm8gsS0eBQYugLfTAP6oETQSKppUVxrrcWfrcMO', NULL, '2025-05-18 11:58:37', '2025-05-18 11:58:43'),
(82, 'RAHMAT TASLIM', 'rahmattaslim@email.com', NULL, '$2y$12$mIbDr3RYJIyERLtbbsWvB.i2pQNiEKO2bbjl86diO6ETkx4i2YE1q', NULL, '2025-05-18 12:00:14', '2025-05-18 12:00:21'),
(83, 'ADRIAN ODE GOLA', 'adrianodegola@email.com', NULL, '$2y$12$cUiNGj8Sg6ACsQw44CFNd.Ed5vORUIALx4ccx.mhSgCPngjP6UroO', NULL, '2025-05-18 12:01:48', '2025-05-18 12:01:54'),
(84, 'ARDIAN SAHDATUN KASIM', 'ardiansahdatunkasim@email.com', NULL, '$2y$12$QI6bvXNF6qdKKs0P/j9kR.N2ki5FSFKQG1weaDtXRzdTKQFVTZ/zG', NULL, '2025-05-18 12:04:03', '2025-05-18 12:04:27'),
(85, 'DONI RAHMAT', 'donirahmat@email.com', NULL, '$2y$12$m0wZsGD5YTXZYTyzpnKjeOCuBu11Ufw06X56Qw4MuGNFlU4We7UlK', NULL, '2025-05-18 12:06:19', '2025-05-18 12:06:23'),
(86, 'IZAN MIZAN MUHAMMAD', 'izanmizanmuhammad@email.com', NULL, '$2y$12$97crAcO5Ey2pBHPZYaa6FO4Os05ZYR0mydAxXiUgMNdDhNXRB7en2', NULL, '2025-05-18 12:07:28', '2025-05-18 12:07:32'),
(87, 'ANDRIAS SIDIK', 'andriassidik@email.com', NULL, '$2y$12$EcXm1uHHZI3BBxXfosjD3eTssL6Q5Ke1Gf/gHBTn8iyDwHG9GsO5C', NULL, '2025-05-18 12:08:39', '2025-05-18 12:08:44'),
(88, 'ALMUNZIR, SP', 'almundzir@email.com', NULL, '$2y$12$IrJWWlkqi4lmPsb0S2cutOv.cK/SWsCp4UKsjSJFTOMqRLmnd0wkm', NULL, '2025-06-02 05:10:31', '2025-06-02 05:14:39'),
(89, 'HASRIANI, S.P', 'hasriani@email.com', NULL, '$2y$12$OZyiZfbcn7.LLglETyyOiOF.gs7ZR52Oq1BcMPhuEwBz9sv7XY14O', NULL, '2025-06-02 05:20:03', '2025-06-02 05:20:03'),
(90, 'JARMAN', 'jarman@email.com', NULL, '$2y$12$gJ80BPaEq4QLnOjRJt3dm.uora5jEhAvv/U6S9R/JVzdu6cWJi4RC', NULL, '2025-06-12 04:57:16', '2025-06-12 04:57:16'),
(91, 'ERIK', 'erik@email.com', NULL, '$2y$12$3GjIozQgWUOOTU0RRFxxF.KkwIwBacb6ajWRElvodVHq.fiTDAFF2', NULL, '2025-06-12 04:57:29', '2025-06-12 04:57:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_users`
--
ALTER TABLE `detail_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_users_user_id_foreign` (`user_id`);

--
-- Indexes for table `exports`
--
ALTER TABLE `exports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exports_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_import_rows`
--
ALTER TABLE `failed_import_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `failed_import_rows_import_id_foreign` (`import_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `imports`
--
ALTER TABLE `imports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imports_user_id_foreign` (`user_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `perjalanan_dinas`
--
ALTER TABLE `perjalanan_dinas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `perjalanan_dinas_no_spt_unique` (`no_spt`),
  ADD KEY `perjalanan_dinas_user_id_foreign` (`user_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `rincian_kategoris`
--
ALTER TABLE `rincian_kategoris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rincian_kategoris_category_id_foreign` (`category_id`),
  ADD KEY `rincian_kategoris_sub_kategori_id_foreign` (`sub_kategori_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_group_name_unique` (`group`,`name`);

--
-- Indexes for table `sks`
--
ALTER TABLE `sks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sppd_dalam_daerahs`
--
ALTER TABLE `sppd_dalam_daerahs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sppd_dalam_daerahs_user_id_foreign` (`user_id`);

--
-- Indexes for table `sppd_luar_daerahs`
--
ALTER TABLE `sppd_luar_daerahs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sppd_luar_daerahs_user_id_foreign` (`user_id`);

--
-- Indexes for table `sub_kategoris`
--
ALTER TABLE `sub_kategoris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_kategoris_category_id_foreign` (`category_id`);

--
-- Indexes for table `surat_izins`
--
ALTER TABLE `surat_izins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surat_izins_user_id_foreign` (`user_id`);

--
-- Indexes for table `surat_keluars`
--
ALTER TABLE `surat_keluars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surat_keluars_category_id_foreign` (`category_id`),
  ADD KEY `surat_keluars_sub_kategori_id_foreign` (`sub_kategori_id`),
  ADD KEY `surat_keluars_rincian_kategori_id_foreign` (`rincian_kategori_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `surat_masuks`
--
ALTER TABLE `surat_masuks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `detail_users`
--
ALTER TABLE `detail_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `exports`
--
ALTER TABLE `exports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `failed_import_rows`
--
ALTER TABLE `failed_import_rows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `imports`
--
ALTER TABLE `imports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3259;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `perjalanan_dinas`
--
ALTER TABLE `perjalanan_dinas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `rincian_kategoris`
--
ALTER TABLE `rincian_kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `sks`
--
ALTER TABLE `sks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `sppd_dalam_daerahs`
--
ALTER TABLE `sppd_dalam_daerahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `sppd_luar_daerahs`
--
ALTER TABLE `sppd_luar_daerahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `sub_kategoris`
--
ALTER TABLE `sub_kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT for table `surat_izins`
--
ALTER TABLE `surat_izins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `surat_keluars`
--
ALTER TABLE `surat_keluars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `surat_masuks`
--
ALTER TABLE `surat_masuks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_users`
--
ALTER TABLE `detail_users`
  ADD CONSTRAINT `detail_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exports`
--
ALTER TABLE `exports`
  ADD CONSTRAINT `exports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `failed_import_rows`
--
ALTER TABLE `failed_import_rows`
  ADD CONSTRAINT `failed_import_rows_import_id_foreign` FOREIGN KEY (`import_id`) REFERENCES `imports` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `imports`
--
ALTER TABLE `imports`
  ADD CONSTRAINT `imports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `perjalanan_dinas`
--
ALTER TABLE `perjalanan_dinas`
  ADD CONSTRAINT `perjalanan_dinas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rincian_kategoris`
--
ALTER TABLE `rincian_kategoris`
  ADD CONSTRAINT `rincian_kategoris_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rincian_kategoris_sub_kategori_id_foreign` FOREIGN KEY (`sub_kategori_id`) REFERENCES `sub_kategoris` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_kategoris`
--
ALTER TABLE `sub_kategoris`
  ADD CONSTRAINT `sub_kategoris_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
