-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2024 at 03:55 PM
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
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id_event` int NOT NULL,
  `name_event` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id_event`, `name_event`, `date`, `location`, `description`) VALUES
(1, 'Revoist 3.0', '2024-06-11', 'Aula Unsika', 'Perayaan Hari Ulang Tahun Jurusan Sistem Informasi yang ke-3'),
(2, 'Play Off', '2024-06-25', 'Gor Dewi Sartika', 'Olahraga Bulu Tangkis Bersama Himsika '),
(3, 'MPL Arena', '2024-07-20', 'GOR Olimpiade Nasional', 'Acara Pertandingan MLBB Season 13 memperebutkan tiket MSC 2024'),
(4, 'Make Connect', '2024-06-29', 'Gedung Fasilkom Lantai 4', 'Studi Banding Bem Fasilkom Unsika'),
(5, 'Edufair', '2024-06-19', 'Google Meet', 'Webinar 08.00- 12.00 WIB ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(6, 'Sucidprtt', 'suci@mail.com', '$2y$10$whW4EqQo6YWfqJNxUGrEV.PFKXjZZViFGiMPTmrKDKvvWganeS3ru'),
(7, 'Juyeon', 'juyeon@gmail.com', '$2y$10$JhA960LCG8Z5vJZ.ca4OmOyQDUy6OwRkWTfuO0tmaUv9YvOprm4vi'),
(8, 'Cici', 'ciciaja@gmail.com', '$2y$10$ZM4ARayrJwmgDaCG7Qw9ReOyUVnXLW8Snmybjwhr51ypJjTzWiqwK'),
(9, 'Theboyz', 'theboyz@mail.com', '$2y$10$SVSAR0jEU3mBVTZ3gWNiA.DiQtLEigP5Loeq6Bcd3FbKtWTuCTlnS'),
(10, 'Sheren', 'sheren@gmail.com', '$2y$10$KXwiHzlJeJEcUWTwq0HE7u7V.KPM1ja6hUY6iDZPWucGfxsCmpA8S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
