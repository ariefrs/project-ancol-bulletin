-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2020 at 11:07 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ancol_bulletin`
--

-- --------------------------------------------------------

--
-- Table structure for table `ancol_categories`
--

DROP TABLE IF EXISTS `ancol_categories`;
CREATE TABLE IF NOT EXISTS `ancol_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT '0',
  `title` varchar(255) DEFAULT '',
  `name` varchar(255) DEFAULT '',
  `alias` varchar(255) DEFAULT '',
  `image` varchar(255) DEFAULT '',
  `section` varchar(50) DEFAULT '',
  `image_position` varchar(30) DEFAULT '',
  `description` text,
  `published` tinyint(1) DEFAULT '0',
  `checked_out` int(11) UNSIGNED DEFAULT '0',
  `checked_out_time` datetime DEFAULT '0000-00-00 00:00:00',
  `editor` varchar(50) DEFAULT NULL,
  `ordering` int(11) DEFAULT '0',
  `access` tinyint(3) UNSIGNED DEFAULT '0',
  `count` int(11) DEFAULT '0',
  `params` text,
  PRIMARY KEY (`id`),
  KEY `cat_idx` (`section`,`published`,`access`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ancol_categories`
--

INSERT INTO `ancol_categories` (`id`, `parent_id`, `title`, `name`, `alias`, `image`, `section`, `image_position`, `description`, `published`, `checked_out`, `checked_out_time`, `editor`, `ordering`, `access`, `count`, `params`) VALUES
(1, 0, 'Berbagi', '', 'berbagi', '', '', '', NULL, 1, 0, '0000-00-00 00:00:00', NULL, 0, 0, 0, NULL),
(2, 0, 'Budaya Kerja', '', 'budaya_kerja', '', '', '', NULL, 1, 0, '0000-00-00 00:00:00', NULL, 0, 0, 0, NULL),
(3, 0, 'Edukasi', '', 'edukasi', '', '', '', NULL, 1, 0, '0000-00-00 00:00:00', NULL, 0, 0, 0, NULL),
(4, 0, 'Event', '', 'event', '', '', '', NULL, 1, 0, '0000-00-00 00:00:00', NULL, 0, 0, 0, NULL),
(5, 0, 'Fokus', '', 'fokus', '', '', '', NULL, 1, 0, '0000-00-00 00:00:00', NULL, 0, 0, 0, NULL),
(6, 0, 'Kabar Kita', '', 'kabar_kita', '', '', '', NULL, 1, 0, '0000-00-00 00:00:00', NULL, 0, 0, 0, NULL),
(7, 0, 'Partitur', '', 'partitur', '', '', '', NULL, 1, 0, '0000-00-00 00:00:00', NULL, 0, 0, 0, NULL),
(8, 0, 'Peristiwa', '', 'peristiwa', '', '', '', NULL, 1, 0, '0000-00-00 00:00:00', NULL, 0, 0, 0, NULL),
(9, 0, 'Perspektif', '', 'perspektif', '', '', '', NULL, 1, 0, '0000-00-00 00:00:00', NULL, 0, 0, 0, NULL),
(10, 0, 'Resensi', '', 'resensi', '', '', '', NULL, 1, 0, '0000-00-00 00:00:00', NULL, 0, 0, 0, NULL),
(11, 0, 'Santap', '', 'santap', '', '', '', NULL, 1, 0, '0000-00-00 00:00:00', NULL, 0, 0, 0, NULL),
(12, 0, 'Sosok', '', 'sosok', '', '', '', NULL, 1, 0, '0000-00-00 00:00:00', NULL, 0, 0, 0, NULL),
(13, 0, 'Tahukah Anda', '', 'tahukah_anda', '', '', '', NULL, 1, 0, '0000-00-00 00:00:00', NULL, 0, 0, 0, NULL),
(14, 0, 'Terkini', '', 'terkini', '', '', '', NULL, 1, 0, '0000-00-00 00:00:00', NULL, 0, 0, 0, NULL),
(15, 0, 'Tips', '', 'tips', '', '', '', NULL, 1, 0, '0000-00-00 00:00:00', NULL, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ancol_content`
--

DROP TABLE IF EXISTS `ancol_content`;
CREATE TABLE IF NOT EXISTS `ancol_content` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT '',
  `alias` varchar(255) DEFAULT '',
  `title_alias` varchar(255) DEFAULT '',
  `introtext` mediumtext,
  `completetext` mediumtext,
  `state` tinyint(3) DEFAULT '0',
  `sectionid` int(11) UNSIGNED DEFAULT '0',
  `mask` int(11) UNSIGNED DEFAULT '0',
  `catid` int(11) UNSIGNED DEFAULT '0',
  `created` datetime DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) UNSIGNED DEFAULT '0',
  `created_by_alias` varchar(255) DEFAULT '',
  `modified` datetime DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) UNSIGNED DEFAULT '0',
  `checked_out` int(11) UNSIGNED DEFAULT '0',
  `checked_out_time` datetime DEFAULT '0000-00-00 00:00:00',
  `publish_up` datetime DEFAULT '0000-00-00 00:00:00',
  `publish_down` datetime DEFAULT '0000-00-00 00:00:00',
  `images` text,
  `urls` text,
  `attribs` text,
  `version` int(11) UNSIGNED DEFAULT '1',
  `parentid` int(11) UNSIGNED DEFAULT '0',
  `ordering` int(11) DEFAULT '0',
  `metakey` text,
  `metadesc` text,
  `access` int(11) UNSIGNED DEFAULT '0',
  `hits` int(11) UNSIGNED DEFAULT '0',
  `metadata` text,
  PRIMARY KEY (`id`),
  KEY `idx_section` (`sectionid`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_state` (`state`),
  KEY `idx_catid` (`catid`),
  KEY `idx_createdby` (`created_by`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ancol_content`
--

INSERT INTO `ancol_content` (`id`, `title`, `alias`, `title_alias`, `introtext`, `completetext`, `state`, `sectionid`, `mask`, `catid`, `created`, `created_by`, `created_by_alias`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `publish_up`, `publish_down`, `images`, `urls`, `attribs`, `version`, `parentid`, `ordering`, `metakey`, `metadesc`, `access`, `hits`, `metadata`) VALUES
(1, 'Ancol dan Forhati Berbagi Ceria Bersama Anak Kampung Sumur Banten', 'ancol-dan-forhati-berbagi-ceria-bersama-anak-kampung-sumur-banten', '', '<p>Bencana tsunami yang melanda pesisir Selat Sunda pada 22 Desember 2018 yang lalu membawa sedikitnya 430 korban meninggal dan 7.000 an korban luka dan...', '<div><img class=\"\" src=\"http://localhost/ancol/images/content/Berbagi.jpg\"></div><div class=\"row\">\r\n    <div class=\"col-md-4\">\r\n    <p>Bencana tsunami yang melanda pesisir Selat Sunda pada 22 Desember 2018 yang lalu membawa sedikitnya 430 korban meninggal dan 7.000 an korban luka dan 30-an orang hilang.</p>\r\n    <p>Tsunami yang diakibatkan oleh longsor dan erupsinya anak Gunung Krakatau itu menyapu pesisir Banten dan Lampung. Di Banten, daerah terparah dialami oleh Kampung Sumur yang terletak di Tanjung Lesung Pandeglang. Korban meninggal dan luka-luka terbesar terjadi di daerah ini.</p>\r\n    <p>Di Kampung Sumur, banyak keluarga kehilangan tempat tinggal akibat tersapu gelombang tsunami. Selain itu di daerah ini juga banyak objek wisata pantai yang ikut tersapu air bah. Penduduk yang menjadi korban mengalami trauma, terutama anak-anak SD di Kampung Sumur.</p>\r\n    </div>\r\n\r\n    <div class=\"col-md-4\">\r\n    <p>PT Pembangunan Jaya Ancol Tbk (Ancol) bersama dengan Majelis Nasional Forum Alumni HMI Wati (FORHATI) mengundang 100 anak dari Kampung Sumur, Pandeglang, Banten berekreasi di Ancol Taman Impian.</p>\r\n    <p>Kegiatan yang bernama &ldquo;Menjemput Impian Bersama&rdquo; ini dilaksanakan pada Selasa, 26 Februari 2019 di Clubhouse Allianz Ecopark, Ancol. Acara dibuka pukul 09.00 pagi dan disambut oleh Direktur Utama Ancol, C. Paul Tehusijarana.</p>\r\n    <p>Mereka adalah anak-anak yang terdampak bencana tsunami di Pandeglang, Banten. Seluruh peserta terdiri dari siswa kelas 3 &ndash; 6 SD yang didampingi oleh Guru SD Taman Jaya Kampung Sumur.</p>\r\n    </div>\r\n\r\n    <div class=\"col-md-4\">\r\n    <p>Mereka diboyong ke Dunia Fantasi Ancol untuk menikmati seluruh permainan dan wahana yang ada di kawasan rekreasi. Setelah melalui pengalaman bencana alam yang tidak pernah mereka harapkan, hari ini anak-anak tersebut akan terhibur dengan wahana seru dan menyenangkan.</p>\r\n    <p>&ldquo;Kami harap kegiatan hari ini bisa menghibur serta menambah wawasan dan juga membantu anak-anak dalam memulihkan kondisi psikologisnya&rdquo; ucap Paul.</p>\r\n    <p>Sehari sebelumnya, Senin (25/2/2019) Forhati juga telah melaksanakan psiko sosial di SD Taman Jaya Kampung Sumur. Acara diisi dengan beragam permainan, kesenian origami, bernyanyi serta pengajaran bahasa inggris untuk anak-anak PAUD serta anak kelas 1 dan 2 SD.</p>\r\n    </div>\r\n</div>\r\n', 0, 1, 0, 1, '2019-03-10 23:27:55', 0, '', '2019-03-10 23:27:55', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'images/content/Berbagi.jpg', NULL, NULL, 1, 0, 0, NULL, NULL, 0, 50, NULL),
(3, 'Manajemen Jangan Tunda Pekerjaan', 'manajemen-jangan-tunda-pekerjaan', '', 'Setiap orang cenderung menunda pekerjaan, apa pun alasannya. Akan tetapi, ', '    <section id=\"hotels\" class=\"section-with-bg wow fadeInUp\">\r\n      <div class=\"container\">\r\n        <div class=\"row\">\r\n          <p>Setiap orang cenderung menunda pekerjaan, apa pun alasannya. Akan tetapi, bila menunda mulai membuat cemas dan lingkungan kerja bereaksi negatif, hati hati! Bisa jadi ini saatnya Anda mengintrospeksi diri. </p>\r\n          <p>Jika Anda menemui masalah seperti di atas, Himawan Wijanarko, General Manager Strategic Services The Jakarta Consulting Group, menyarankan untuk berstrategi mengurai sindrom prokrastinasi yang melilit. Berikut kiat-kiatnya:</p>\r\n        </div>\r\n\r\n        <div class=\"row\">\r\n          <div class=\"col-lg-4 col-md-6\">\r\n            <div class=\"hotel\">\r\n              <div class=\"hotel-img\">\r\n                <img src=\"http://localhost/ancol/images/content/Manajemen.jpg\" alt=\"Manajemen\" class=\"img-responsive\">\r\n              </div>\r\n              <h3><a href=\"#\"></a></h3>\r\n              <p></p>\r\n            </div>\r\n          </div>\r\n\r\n          <div class=\"col-lg-4 col-md-6\">\r\n            <div class=\"hotel\">\r\n              <div class=\"hotel-img\">\r\n                <img src=\"http://localhost/ancol/images/content/Manajemen1.jpg\" alt=\"Manajemen 1\" class=\"img-responsive\">\r\n              </div>\r\n              <h3><a href=\"#\"></a></h3>\r\n              <p></p>\r\n            </div>\r\n          </div>\r\n\r\n          <div class=\"col-lg-4 col-md-6\">\r\n            <div class=\"hotel\">\r\n              <div class=\"hotel-img\">\r\n                <img src=\"http://localhost/ancol/images/content/Manajemen2.jpg\" alt=\"Manajemen 2\" class=\"img-responsive\">\r\n              </div>\r\n              <h3><a href=\"#\"></a></h3>\r\n              <p></p>\r\n            </div>\r\n          </div>\r\n\r\n        </div>\r\n        <div class=\"row\">\r\n            <div class=\"col-md-6\">\r\n                    <h4>1. Manajemen Diri</h4>\r\n                    <p>Setiap orang memang memiliki kecenderungan menunda pekerjaan. Ini bisa saja disebabkan faktor kurang dalam kemampuan mengatur diri. Orang dengan kecenderungan ini biasanya sulit mengklasifikasikan mana urusan yang penting dan tidak terlalu penting.</p> \r\n                    <p>Akibatnya semua permasalahan tidak diletakkan dalam skala prioritas yang tepat. Mulai dari pengukuran kemampuan menyelesaikan suatu pekerjaan, perhitungan beban pekerjaan, dan prioritas deadlinepekerjaan itu sendiri.</p>\r\n                    <p>Kebanyakan orang yang terjebak dalam penundaan pekerjaan disebabkan oleh kecenderungan untuk menyelesaikan pekerjaan yang menyenangkan terlebih dahulu, sedangkan yang sulit belakangan. Sebenarnya ada sisi positif dari menyelesaikan pekerjaan yang mudah terlebih dahulu karena jika memaksakan mengerjakan yang sulit justru bisa membuat pekerjaan tidak selesai-selesai. Kendati demikian, jangan lupakan deadline, dan buat jadwal lebih rapi mengenai pengerjaan tugas perusahaan.</p>            \r\n            </div>\r\n            <div class=\"col-md-6\">\r\n                <h4>2. Manajemen Stress</h4>\r\n                <p>Disadari atau tidak, stres juga bisa mengacaukan akselerasi penyelesaian pekerjaan hingga tak sesuai target. Menurut Himawan, stres pada dasarnya bisa disebabkan empat hal. Pertama, tekanan seperti deadline dan tuntutan kualitas diri. Kedua, frustrasi yang bisa disebabkan oleh hasil yang kurang baik maupun reaksi negatif lingkungan. Ketiga, konflik seperti saat memilah untuk menyelesaikan pekerjaan yang mana lebih dahulu. Keempat, krisis yang bisa disebabkan oleh perubahan yang tiba-tiba.</p>\r\n                <p>Ketika menemui kondisi stres, yang perlu dilakukan adalah mengatasi efek psikologisnya. Petakan permasalahan demi menurunkan level stres hingga ke jenjang yang masuk akal. Jika Anda piawai memetakan permasalahan, dengan sendirinya level stres menurun. Level stres yang masuk akal ini justru bisa meningkatkan produktivitas seseorang karena stres sebenarnya juga berperan meningkatkan gairah untuk lebih produktif.</p>\r\n\r\n            </div>\r\n        </div>\r\n      </div>\r\n\r\n    </section>', 0, 1, 0, 2, '2019-03-11 02:06:05', 0, '', '2019-03-11 02:06:05', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'images/content/Manajemen1.jpg', NULL, NULL, 1, 0, 0, NULL, NULL, 0, 24, NULL),
(4, 'Manfaat Kunjungi Wisata Budaya', 'manfaat-kunjungi-wisata-budaya', '', '<p>&nbsp;</p>\r\n\r\n<p>Wisata budaya nampaknya kurang diminati oleh masyarakat modern, termasuk anak muda. Sebagian besar dari mereka menganggap kalau tempat...', '<div class=\\\"col-md-6\\\">\r\n<p>Wisata budaya nampaknya kurang diminati oleh masyarakat modern, termasuk anak muda. Sebagian besar dari mereka menganggap kalau tempat tersebut kuno, kurang menarik, tak ada hal seru didapatkan atau lain sebagainya.</p>\r\n\r\n<p>Anggapan tersebut kemudian tertular ke orang lain sehingga membuat beberapa destinasi wisata budaya tradisional menjadi sepi pengunjung.</p>\r\n\r\n<p>Akibatnya fatal dimana Indonesia bakal kehilangan identitas secara perlahan karena tergerus perkembangan zaman ditambah lagi penduduknya tak mau ikut melestarikan budaya peninggalan nenek moyang. Padahal ada begitu banyak manfaat kalau kita traveling ke suatu wisata budaya, diantaranya:</p>\r\n</div>\r\n<div class=\\\"col-md-6\\\">\r\n<p>Belajar mengenai kebudayaan tempat lain, mulai dari tradisi sehari-hari, makanan tradisional, dan upacara adat Mendapatkan nilai moral berharga lewat tindak tanduk para penduduknya. Menumbuhkan rasa bangga sekaligus cinta terhadap negara sendiri karena hanya Indonesia yang dianugerahi ratusan lebih jenis budaya.</p>\r\n\r\n<p>Pikiran menjadi lebih luas dan tidak kaku karena paham betul jika dunia ini tak seluas daun kelor. Bertemu dengan orang lain dari berbagai daerah atau negara sekalipun. Ajak mereka berkomunikasi dan berbagai ilmu bahkan pengalaman supaya saling mendapatkan keutungan.</p>\r\n</div>', 0, 2, 0, 3, '2019-03-11 02:48:08', 0, '', '2019-03-11 02:48:08', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'images/content/Budaya3.jpg', NULL, NULL, 1, 0, 0, NULL, NULL, 0, 111, NULL),
(5, 'Test Content 3', 'test-content-3', '', '<div style=\"font-family: Consolas, &quot;Courier New&quot;, monospace, Calibri; font-size: 12px; line-height: 16px; white-space: pre;\"><span style=\"color:...', '<div style=\"font-family: Consolas, &quot;Courier New&quot;, monospace, Calibri; font-size: 12px; line-height: 16px; white-space: pre;\"><span style=\"color: rgb(206, 198, 206); font-family: Tahoma; font-size: 14px;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad consequatur et beatae repudiandae voluptate pariatur nemo assumenda nostrum nam dignissimos quam consequuntur, officiis quis. Blanditiis eius pariatur tempore quibusdam provident a consequatur quaerat officiis ea, impedit sapiente eum minima dolores nam</span><span style=\"font-family: Tahoma; font-size: 14px;\">﻿</span><span style=\"color: rgb(206, 198, 206); font-family: Tahoma; font-size: 14px;\">. Provident voluptates dicta voluptatum debitis hic rerum, non blanditiis?</span></div>', 0, 9, 0, 15, '2019-03-13 12:11:01', 0, '', '2019-03-13 12:11:01', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, 1, 0, 0, NULL, NULL, 0, 4, NULL),
(6, 'Test Content 4', 'test-content-4', '', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum id numquam quaerat deleniti mollitia alias porro quibusdam ipsum consectetur ut exercitationem nesciunt optio reiciendis ullam, totam quisquam minima eius eligendi fugit illum. Quis repellendus inventore accusantium illo dolorem magnam eos consequatur modi natus aspernatur, expedita cupiditate, ea, rerum voluptatum. Repellendus cum cupiditate deserunt! Dolor, repellat nulla provident numquam totam nobis sapiente, sunt ducimus dolorem adipisci delectus ullam corrupti sit, labore sed nam odio eaque sint!', '<div class=\"row\">\r\n    <div class=\"col-md-6\">\r\n        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum id numquam quaerat deleniti mollitia alias porro quibusdam ipsum consectetur ut exercitationem nesciunt optio reiciendis ullam, totam quisquam minima eius eligendi fugit illum. Quis repellendus inventore accusantium illo dolorem magnam eos consequatur modi natus aspernatur, expedita cupiditate, ea, rerum voluptatum. Repellendus cum cupiditate deserunt! Dolor, repellat nulla provident numquam totam nobis sapiente, sunt ducimus dolorem adipisci delectus ullam corrupti sit, labore sed nam odio eaque sint!</p></div>\r\n    <div class=\"col-md-6\">\r\n        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod officiis magni eius facilis iste, est nostrum, atque, consectetur itaque corporis eveniet incidunt voluptas autem voluptates. Dolorem magni libero suscipit delectus quas, maxime tempora amet, eaque provident necessitatibus architecto laboriosam. Labore placeat voluptas, omnis ducimus eius quia modi tenetur qui earum voluptate distinctio, a optio, expedita saepe debitis. Nihil, facere asperiores pariatur quisquam optio quam, porro rem fuga, sequi consequuntur aut! Fugit sed pariatur recusandae? Reiciendis distinctio harum quaerat fuga id sequi debitis nobis, ipsam repellat a quisquam placeat dolorum blanditiis quis voluptates minima optio enim ab deserunt totam nam. Illo dolorem minima repellendus dignissimos voluptate quis saepe modi, reprehenderit debitis obcaecati, voluptatem neque magni quod ipsum nulla molestiae aliquam nobis harum tenetur? Sit, quisquam nobis!</p></div>\r\n</div>\r\n<div class=\"row\">\r\n    <div class=\"col-md-4\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, sequi consequatur. Minima, esse laboriosam in incidunt illum vero veritatis consectetur deserunt odit, inventore animi voluptatem provident? Quia consectetur libero, nesciunt necessitatibus repellendus, beatae fugiat quisquam illum velit odio nulla doloremque tenetur dignissimos molestias quasi aliquid.</div>\r\n    <div class=\"col-md-4\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, sequi consequatur. Minima, esse laboriosam in incidunt illum vero veritatis consectetur deserunt odit, inventore animi voluptatem provident? Quia consectetur libero, nesciunt necessitatibus repellendus, beatae fugiat quisquam illum velit odio nulla doloremque tenetur dignissimos molestias quasi aliquid.</div>\r\n    <div class=\"col-md-4\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, sequi consequatur. Minima, esse laboriosam in incidunt illum vero veritatis consectetur deserunt odit, inventore animi voluptatem provident? Quia consectetur libero, nesciunt necessitatibus repellendus, beatae fugiat quisquam illum velit odio nulla doloremque tenetur dignissimos molestias quasi aliquid.</div>\r\n</div>\r\n<div class=\"row\">\r\n    <div class=\"col-md-12\"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, quasi? Quo unde obcaecati, quod nostrum rerum, blanditiis est iusto ipsam aliquid, temporibus excepturi omnis. Ad ipsum rem, tempora quaerat doloribus rerum veniam enim laborum minus beatae nulla repudiandae illo vitae fuga ea expedita dolorum sit minima at quam possimus aliquid placeat. Doloribus, quam nam iusto tenetur, ad eaque exercitationem non commodi necessitatibus aliquid quis voluptatem hic vitae modi in dicta delectus neque placeat fugit saepe explicabo tempore repellendus? Consequuntur ab provident aspernatur veniam molestiae delectus iusto nisi praesentium obcaecati recusandae debitis commodi reiciendis vitae rerum, quod cupiditate accusantium. Incidunt reprehenderit consectetur unde numquam provident, mollitia perferendis saepe delectus, dignissimos in aperiam quae corporis eum est deserunt nisi nostrum voluptatibus autem vel iure assumenda. Aspernatur unde sapiente alias libero, quaerat labore pariatur porro officiis recusandae possimus harum, quisquam voluptate officia qui tenetur ipsam, odio eaque facere? Eos non culpa ratione impedit nulla commodi illum soluta voluptatum, ad repudiandae assumenda perferendis, accusamus ut quisquam perspiciatis odio repellat neque doloribus! Et voluptate esse omnis temporibus veritatis non, error quae consequatur earum sit maxime dolorum minima, magnam repudiandae minus nesciunt, tenetur ullam quo eaque eum voluptates mollitia suscipit totam accusamus. Eius aut fugiat nam minima earum iusto doloremque, modi consequatur? Possimus expedita rem voluptatibus architecto corporis doloribus porro fugiat asperiores optio distinctio iure perspiciatis perferendis inventore, eligendi quam. Laboriosam praesentium dolores ea tempora fugiat asperiores esse iure soluta veritatis dolorum in rerum pariatur quaerat, minus debitis qui tempore alias quibusdam? Dolorem possimus ad quo numquam mollitia architecto repellendus nemo, quas, soluta corporis qui sed earum dolores cum pariatur assumenda vero! Blanditiis sit aliquid quibusdam dolore cupiditate sapiente consequatur, facilis atque alias deleniti iusto libero, magnam consequuntur quo natus magni illum laudantium! Id tempora dolores repudiandae porro quisquam at consectetur accusamus. Quae aliquam officiis atque quibusdam fuga pariatur magnam perferendis. Odio cum, quisquam eos officiis architecto unde iure a inventore. Fugiat, esse, a quos eveniet corrupti odio qui dolores dolor quo vel quibusdam? Temporibus delectus obcaecati quibusdam neque voluptas quia quasi maxime recusandae sunt veritatis voluptatibus reprehenderit cum ducimus officiis, facere numquam aliquam ipsa optio!</p></div>\r\n</div>', 0, 9, 0, 15, '2019-03-13 13:00:39', 0, '', '2019-03-13 13:00:39', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, 1, 0, 0, NULL, NULL, 0, 2, NULL),
(7, 'Sample Konten Edukasi', 'sample-konten-edukasi', '', '<p>Bisa dibilang, Kok Bisa adalah pelopor channel Youtube edukasi Indonesia.&#8230;', '<p>Bisa dibilang, Kok Bisa adalah pelopor channel Youtube edukasi Indonesia. Melalui animasi graphic motion, Kok Bisa menjelaskan pertanyaan dan konsep sains yang rumit secara kontekstual dan lebih mudah dipahami.</p>\r\n<div class=\"text-center\">\r\n<iframe width=\"420\" height=\"315\" src=\"https://www.youtube.com/embed/pnuiEGuThsI\">\r\n</iframe></div>\r\n<p>Ada banyak topik yang diangkat, mulai dari membahas hal ringan seperti “Kenapa makanan pokok kita nasi?” sampai topik berat macam “Apa itu black hole?” yang dikemas secara sederhana.\r\n<br>\r\nPenjelasannya asik, ditambah lagi dengan adanya si bakso yang hadir di setiap video mereka.</p>', 0, 12, 0, 3, '2020-02-24 16:49:23', 0, '', '2020-02-24 16:49:23', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, 1, 0, 0, NULL, NULL, 0, 3, NULL),
(9, 'Fisika \'Sihir\' Dibalik Alam Semesta', 'fisika-sihir-dibalik-alam-semesta', '', '<p>Bisa dibilang, Kok Bisa adalah pelopor channel Youtube edukasi Indonesia.&#8230;', '<p>Fisika. Ya, dunia kita diatur oleh Fisika. Gravitasi yang menarik seluruh planet di alam semesta. Pesawat terbang berton-ton yang bisa melayang dan tak jatuh dari langit. Sepeda yang bisa terus melaju seimbang. Semuanya diatur oleh Fisika.</p>\r\n<div class=\"text-center\">\r\n	<iframe width=\"500\" height=\"350\"\r\n	src=\"https://www.youtube.com/embed/4HrweW4IqJc\">\r\n	</iframe><br/><small>Sumber : <a href=\"https://www.youtube.com/watch?v=4HrweW4IqJc\" target=\"_blank\">Youtube Channel - Kok Bisa ?</a></small>\r\n</div>\r\n\r\n<p>Ia bisa sebegitu luasnya, karena fisika itu adalah ilmu yang membongkar bagaimana dunia -- alam semesta kita -- bekerja. Mulai dari materi terkecil di alam semesta. Hingga objek super raksasa seperti galaksi.</p>\r\n<p>Mencoba menelusuri awal lahirnya semesta ini.\r\nHingga memprediksi akhir dari semuanya. Tapi juga membantu bagaimana hal sehari-hari bisa bekerja. Termasuk juga, untuk hal-hal yang menembus batas masuk akal.</p>\r\n<p>\r\nFisika adalah ilmu tentang segalanya. Selamat datang, ke ilmu yang mengatur, segala hal di dunia ini.</p>', 0, 9, 0, 3, '2020-02-24 16:56:42', 0, '', '2020-02-24 16:56:42', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, 1, 0, 0, NULL, NULL, 0, 6, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ancol_sections`
--

DROP TABLE IF EXISTS `ancol_sections`;
CREATE TABLE IF NOT EXISTS `ancol_sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT '',
  `name` varchar(255) DEFAULT '',
  `alias` varchar(255) DEFAULT '',
  `image` text,
  `scope` varchar(50) DEFAULT '',
  `image_position` varchar(30) DEFAULT '',
  `description` text,
  `published` tinyint(1) DEFAULT '0',
  `checked_out` int(11) UNSIGNED DEFAULT '0',
  `checked_out_time` datetime DEFAULT '0000-00-00 00:00:00',
  `ordering` int(11) DEFAULT '0',
  `access` tinyint(3) UNSIGNED DEFAULT '0',
  `count` int(11) DEFAULT '0',
  `params` text,
  PRIMARY KEY (`id`),
  KEY `idx_scope` (`scope`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ancol_sections`
--

INSERT INTO `ancol_sections` (`id`, `title`, `name`, `alias`, `image`, `scope`, `image_position`, `description`, `published`, `checked_out`, `checked_out_time`, `ordering`, `access`, `count`, `params`) VALUES
(1, 'Jan 2019', '', '201901', NULL, '', '', 'Bulletin Ancol Edisi Januari 2019', 1, 0, '0000-00-00 00:00:00', 0, 0, 0, NULL),
(2, 'Feb 2019', '', '201902', NULL, '', '', 'Bulletin Ancol Edisi Februari 2019', 1, 0, '0000-00-00 00:00:00', 0, 0, 0, NULL),
(3, 'Mar 2019', '', '201903', NULL, '', '', 'Bulletin Ancol Edisi Maret 2019', 1, 0, '0000-00-00 00:00:00', 0, 0, 0, NULL),
(4, 'Apr 2019', '', '201904', NULL, '', '', 'Bulletin Ancol Edisi April 2019', 1, 0, '0000-00-00 00:00:00', 0, 0, 0, NULL),
(5, 'Mei 2019', '', '201905', NULL, '', '', 'Bulletin Ancol Edisi Mei 2019', 1, 0, '0000-00-00 00:00:00', 0, 0, 0, NULL),
(6, 'Jun 2019', '', '201906', NULL, '', '', 'Bulletin Ancol Edisi Juni 2019', 1, 0, '0000-00-00 00:00:00', 0, 0, 0, NULL),
(7, 'Jul 2019', '', '201907', NULL, '', '', 'Bulletin Ancol Edisi Juli 2019', 1, 0, '0000-00-00 00:00:00', 0, 0, 0, NULL),
(8, 'Aug 2019', '', '201908', NULL, '', '', 'Bulletin Ancol Edisi Agustus 2019', 0, 0, '0000-00-00 00:00:00', 0, 0, 0, NULL),
(9, 'Sep 2019', '', '201909', NULL, '', '', 'Bulletin Ancol Edisi September 2019', 0, 0, '0000-00-00 00:00:00', 0, 0, 0, NULL),
(10, 'Oct 2019', '', '201910', NULL, '', '', 'Bulletin Ancol Edisi Oktober 2019', 0, 0, '0000-00-00 00:00:00', 0, 0, 0, NULL),
(11, 'Nov 2019', '', '201911', NULL, '', '', 'Bulletin Ancol Edisi Nopember 2019', 0, 0, '0000-00-00 00:00:00', 0, 0, 0, NULL),
(12, 'Dec 2019', '', '201912', NULL, '', '', 'Bulletin Ancol Edisi Desember 2019', 0, 0, '0000-00-00 00:00:00', 0, 0, 0, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
