-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Eyl 2023, 23:57:30
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ittalepformu`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilgiler`
--

CREATE TABLE `bilgiler` (
  `id` int(11) NOT NULL,
  `Talep_turu` varchar(50) NOT NULL,
  `Talep_tarihi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Talep_departmani` varchar(50) NOT NULL,
  `Talep_talep_acan` varchar(50) NOT NULL,
  `Talep_kullanacak_kisi` varchar(50) NOT NULL,
  `Talep_calisan` varchar(50) NOT NULL,
  `Talep_lokasyon` varchar(50) NOT NULL,
  `Talep_mail` varchar(50) NOT NULL,
  `Talep_telefon` varchar(50) NOT NULL,
  `Donanim_Laptop_Pc` int(3) NOT NULL,
  `Donanim_Laptop_Workstation` int(3) NOT NULL,
  `Donanim_Desktop_Pc` int(3) NOT NULL,
  `Donanim_Desktop_Workstation` int(3) NOT NULL,
  `Donanim_Macbook` int(3) NOT NULL,
  `Donanim_Mac_Pro_Laptop` int(3) NOT NULL,
  `Donanim_Mac_Workstation` int(3) NOT NULL,
  `Donanim_Tablet` int(3) NOT NULL,
  `Donanim_Mobil_Telefon` int(3) NOT NULL,
  `Donanim_Projection` int(3) NOT NULL,
  `Donanim_Yazici` int(3) NOT NULL,
  `Donanim_Donanim_Notlari` text NOT NULL,
  `Yazilim_Sap_Worker` int(3) NOT NULL,
  `Yazilim_Sap_Pro` int(3) NOT NULL,
  `Yazilim_Local_eposta_hesabi` int(3) NOT NULL,
  `Yazilim_Office_2016` int(3) NOT NULL,
  `Yazilim_PowerBI_Pro` int(3) NOT NULL,
  `Yazilim_MS_Project` int(3) NOT NULL,
  `Yazilim_Acrobat_Pro` int(3) NOT NULL,
  `Yazilim_Adobe_Creative_Cloud` int(3) NOT NULL,
  `Yazilim_Visual_Studio_Pro` int(3) NOT NULL,
  `Yazilim_Visual_Studio_Ent` int(3) NOT NULL,
  `Yazilim_O365_F1` int(3) NOT NULL,
  `Yazilim_O365_F3` int(3) NOT NULL,
  `Yazilim_O365_E3` int(3) NOT NULL,
  `Yazilim_O365_is_Std` int(3) NOT NULL,
  `Yazilim_Yazilim_Notlari` text NOT NULL,
  `Sarf_Monitor` int(3) NOT NULL,
  `Sarf_Klavye_Mouse` int(3) NOT NULL,
  `Sarf_Laptop_Cantasi` int(3) NOT NULL,
  `Sarf_Harici_HDD` int(3) NOT NULL,
  `Sarf_Flash_Bellek` int(3) NOT NULL,
  `Sarf_Laptop_Stand` int(3) NOT NULL,
  `Sarf_Kilif` int(3) NOT NULL,
  `Sarf_Adaptor_Kablo` int(3) NOT NULL,
  `Sarf_Not` text NOT NULL,
  `Not_Laptop_Pc` text NOT NULL,
  `Not_Laptop_Workstation` text NOT NULL,
  `Not_Desktop_Pc` text NOT NULL,
  `Not_Desktop_Workstation` text NOT NULL,
  `Not_Macbook` text NOT NULL,
  `Not_Mac_Pro_Laptop` text NOT NULL,
  `Not_Mac_Workstation` text NOT NULL,
  `Not_Tablet` text NOT NULL,
  `Not_Mobil_Telefon` text NOT NULL,
  `Not_Projection` text NOT NULL,
  `Not_Yazici` text NOT NULL,
  `Not_Sap_Worker` text NOT NULL,
  `Not_Sap_Pro` text NOT NULL,
  `Not_Local_eposta_hesabi` text NOT NULL,
  `Not_Office_2016` text NOT NULL,
  `Not_PowerBI_Pro` text NOT NULL,
  `Not_MS_Project` text NOT NULL,
  `Not_Acrobat_Pro` text NOT NULL,
  `Not_Adobe_Creative_Cloud` text NOT NULL,
  `Not_Visual_Studio_Pro` text NOT NULL,
  `Not_Visual_Studio_Ent` text NOT NULL,
  `Not_O365_F1` text NOT NULL,
  `Not_O365_F3` text NOT NULL,
  `Not_O365_E3` text NOT NULL,
  `Not_O365_is_Std` text NOT NULL,
  `Not_Monitor` text NOT NULL,
  `Not_Klavye_Mouse` text NOT NULL,
  `Not_Laptop_Cantasi` text NOT NULL,
  `Not_Harici_HDD` text NOT NULL,
  `Not_Flash_Bellek` text NOT NULL,
  `Not_Laptop_Stand` text NOT NULL,
  `Not_Kilif` text NOT NULL,
  `Not_Adaptor_Kablo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bilgiler`
--

INSERT INTO `bilgiler` (`id`, `Talep_turu`, `Talep_tarihi`, `Talep_departmani`, `Talep_talep_acan`, `Talep_kullanacak_kisi`, `Talep_calisan`, `Talep_lokasyon`, `Talep_mail`, `Talep_telefon`, `Donanim_Laptop_Pc`, `Donanim_Laptop_Workstation`, `Donanim_Desktop_Pc`, `Donanim_Desktop_Workstation`, `Donanim_Macbook`, `Donanim_Mac_Pro_Laptop`, `Donanim_Mac_Workstation`, `Donanim_Tablet`, `Donanim_Mobil_Telefon`, `Donanim_Projection`, `Donanim_Yazici`, `Donanim_Donanim_Notlari`, `Yazilim_Sap_Worker`, `Yazilim_Sap_Pro`, `Yazilim_Local_eposta_hesabi`, `Yazilim_Office_2016`, `Yazilim_PowerBI_Pro`, `Yazilim_MS_Project`, `Yazilim_Acrobat_Pro`, `Yazilim_Adobe_Creative_Cloud`, `Yazilim_Visual_Studio_Pro`, `Yazilim_Visual_Studio_Ent`, `Yazilim_O365_F1`, `Yazilim_O365_F3`, `Yazilim_O365_E3`, `Yazilim_O365_is_Std`, `Yazilim_Yazilim_Notlari`, `Sarf_Monitor`, `Sarf_Klavye_Mouse`, `Sarf_Laptop_Cantasi`, `Sarf_Harici_HDD`, `Sarf_Flash_Bellek`, `Sarf_Laptop_Stand`, `Sarf_Kilif`, `Sarf_Adaptor_Kablo`, `Sarf_Not`, `Not_Laptop_Pc`, `Not_Laptop_Workstation`, `Not_Desktop_Pc`, `Not_Desktop_Workstation`, `Not_Macbook`, `Not_Mac_Pro_Laptop`, `Not_Mac_Workstation`, `Not_Tablet`, `Not_Mobil_Telefon`, `Not_Projection`, `Not_Yazici`, `Not_Sap_Worker`, `Not_Sap_Pro`, `Not_Local_eposta_hesabi`, `Not_Office_2016`, `Not_PowerBI_Pro`, `Not_MS_Project`, `Not_Acrobat_Pro`, `Not_Adobe_Creative_Cloud`, `Not_Visual_Studio_Pro`, `Not_Visual_Studio_Ent`, `Not_O365_F1`, `Not_O365_F3`, `Not_O365_E3`, `Not_O365_is_Std`, `Not_Monitor`, `Not_Klavye_Mouse`, `Not_Laptop_Cantasi`, `Not_Harici_HDD`, `Not_Flash_Bellek`, `Not_Laptop_Stand`, `Not_Kilif`, `Not_Adaptor_Kablo`) VALUES
(40, 'IT Ürün Talep Formu', '2023-09-06 21:54:33', 'Yönetim Kurulu', 'ferhat2', 'Ahmet2', 'Yeni Çalışan', 'Merkez', 'info@ferhatyildiz.com', '05322706666', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bilgiler`
--
ALTER TABLE `bilgiler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bilgiler`
--
ALTER TABLE `bilgiler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
