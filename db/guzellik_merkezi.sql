-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 May 2026, 21:48:36
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `guzellik_merkezi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adminler`
--

CREATE TABLE `adminler` (
  `id` int(11) NOT NULL,
  `kullanici_adi` varchar(50) NOT NULL,
  `sifre` varchar(255) NOT NULL,
  `ad_soyad` varchar(100) DEFAULT NULL,
  `kayit_tarihi` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `adminler`
--

INSERT INTO `adminler` (`id`, `kullanici_adi`, `sifre`, `ad_soyad`, `kayit_tarihi`) VALUES
(1, 'admin', '$2y$10$w7aRlW0Ii1mDvMd5L3pSseFAjpfw7Oon8ucwQsm6K6FEdPWVVzcDS', 'Site Yöneticisi', '2026-05-20 21:22:12');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetler`
--

CREATE TABLE `hizmetler` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `aciklama` text DEFAULT NULL,
  `fiyat` varchar(50) DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `durum` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `hizmetler`
--

INSERT INTO `hizmetler` (`id`, `baslik`, `aciklama`, `fiyat`, `resim`, `durum`) VALUES
(1, 'Cilt Bakımı', 'Profesyonel cilt temizliği ve bakım uygulaması.', '750 TL', 'ciltbakimi.jpg', 1),
(2, 'Lazer Epilasyon', 'İstenmeyen tüyler için modern lazer epilasyon hizmeti.', '1200 TL', 'lazer.jpg', 1),
(3, 'Kaş Tasarımı', 'Yüz tipine uygun profesyonel kaş şekillendirme.', '700', 'kas.jpg', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kampanyalar`
--

CREATE TABLE `kampanyalar` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `aciklama` text DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `tarih` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevu_talepleri`
--

CREATE TABLE `randevu_talepleri` (
  `id` int(11) NOT NULL,
  `ad_soyad` varchar(255) DEFAULT NULL,
  `telefon` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `hizmet_id` int(11) DEFAULT NULL,
  `tarih` date DEFAULT NULL,
  `saat` time DEFAULT NULL,
  `mesaj` text DEFAULT NULL,
  `durum` varchar(50) DEFAULT NULL,
  `kayit_tarihi` datetime DEFAULT NULL,
  `uzman_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `randevu_talepleri`
--

INSERT INTO `randevu_talepleri` (`id`, `ad_soyad`, `telefon`, `email`, `hizmet_id`, `tarih`, `saat`, `mesaj`, `durum`, `kayit_tarihi`, `uzman_id`) VALUES
(13, 'ayşe demir', '0543 324 3234', 'ayse@site.com', 1, '2026-05-22', '06:37:00', 'efwfwefw', 'Bekliyor', '2026-05-20 22:37:15', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uzmanlar`
--

CREATE TABLE `uzmanlar` (
  `id` int(11) NOT NULL,
  `ad_soyad` varchar(255) DEFAULT NULL,
  `uzmanlik` varchar(255) DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `aciklama` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `uzmanlar`
--

INSERT INTO `uzmanlar` (`id`, `ad_soyad`, `uzmanlik`, `resim`, `aciklama`) VALUES
(1, 'Ayşe Demir', 'Cilt Bakımı Uzmanı', 'ayse.jpg', 'Profesyonel cilt bakımı ve analiz uygulamalarında uzmandır.'),
(2, 'Elif Kaya', 'Lazer Epilasyon Uzmanı', 'elif.jpg', 'Lazer epilasyon ve bölgesel bakım alanında hizmet vermektedir.'),
(3, 'Zeynep Yılmaz', 'Kaş ve Yüz Tasarımı Uzmanı', 'zeynep.jpg', 'Kaş tasarımı ve yüz estetiğine uygun uygulamalar yapmaktadır.'),
(4, 'Merve Şahin', 'Saç Bakım Uzmanı', 'merve.jpg', 'Saç bakımı, saç analizi ve yenileyici saç bakım uygulamalarında hizmet vermektedir.'),
(5, 'Duygu Yılmaz', 'Makyaj Uzmanı', 'duygu.jpg', 'Özel gün makyajı, günlük makyaj ve profesyonel makyaj uygulamalarında uzmandır.'),
(6, 'Seda Arslan', 'Manikür ve Pedikür Uzmanı', 'seda.jpg', 'El ve ayak bakımı, manikür ve pedikür uygulamalarında profesyonel hizmet sunmaktadır.'),
(7, 'Buse Korkmaz', 'Lazer Epilasyon Uzmanı', 'buse.jpg', 'Lazer epilasyon ve bölgesel bakım işlemlerinde deneyimli uzmandır.'),
(8, 'İrem Çelik', 'Cilt Analizi Uzmanı', 'irem.jpg', 'Cilt analizi, nem bakımı ve kişiye özel bakım uygulamaları yapmaktadır.');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `adminler`
--
ALTER TABLE `adminler`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kullanici_adi` (`kullanici_adi`);

--
-- Tablo için indeksler `hizmetler`
--
ALTER TABLE `hizmetler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kampanyalar`
--
ALTER TABLE `kampanyalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `randevu_talepleri`
--
ALTER TABLE `randevu_talepleri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uzmanlar`
--
ALTER TABLE `uzmanlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `adminler`
--
ALTER TABLE `adminler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `hizmetler`
--
ALTER TABLE `hizmetler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `kampanyalar`
--
ALTER TABLE `kampanyalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `randevu_talepleri`
--
ALTER TABLE `randevu_talepleri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `uzmanlar`
--
ALTER TABLE `uzmanlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
