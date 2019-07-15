-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 04:25 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diskusi_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
-- Error reading data for table diskusi_online.komentar: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `diskusi_online`.`komentar`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_07_06_062702_user', 1),
(2, '2019_07_08_084820_create_postingan_table', 2),
(3, '2019_07_13_125221_table_komentar_create', 3);

-- --------------------------------------------------------

--
-- Table structure for table `postingan`
--

CREATE TABLE `postingan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `postingan`
--

INSERT INTO `postingan` (`id`, `judul`, `kategori`, `isi`, `created_at`, `updated_at`) VALUES
(7, '? > is not valid php. It should be ?>. But even that is questionable. Good practice is to leave it out, since it causes a million of issues. It is not required at all, the end of the file has the same effect.', 'op1', 'Hi I want to create a Template for a Site and I don´t know were this error comes from.\r\n\r\nLine 215 is the last line of the code \"? >\". I already searched for a solution, but I didn´t found the same problem as mine.\r\n\r\nIs there anything I didn´t notice?\r\n\r\nThanks\r\n\r\n<?php\r\n\r\nrequire_once \'./Page.php\';\r\n\r\nclass PageTemplate extends Page\r\n{\r\nprotected function __construct() \r\n{\r\n    parent::__construct(); \r\n}\r\n\r\nprotected function __destruct() \r\n{\r\n    parent::__destruct();\r\n}\r\n\r\nprotected function getViewData()\r\n{\r\n    $sql = \"\";\r\n\r\n    $recordset = $this->database->query($sql);\r\n    if(!$recordset){\r\n        throw new Exception(\"Abfrage fehlgeschlagen\");\r\n    }\r\n\r\n    $pizza = array();\r\n\r\n    $record = $recordset->fetch_assoc();\r\n\r\n    while($record){\r\n        $pizza[] = $record[\'Pizza\'];\r\n        $record = $recordset->fetch_assoc();\r\n    }\r\n\r\n    $recordset->free();\r\n    return $pizza;\r\n}\r\n\r\nprotected function generateView() \r\n{\r\n    $this->getViewData();\r\n    $this->generatePageHeader(\'Bestellung\');\r\n\r\n\r\n    echo <<<EOT\r\n    <section role=\"navigation\">\r\n    <nav>\r\n        <ul>\r\n          ...\r\n        </ul>\r\n    </nav>\r\n    </section>\r\n\r\n        <section id=\"content\">\r\n            ...\r\n        </section>\r\n\r\n    EOT;\r\n\r\n    $this->generatePageFooter();\r\n}\r\n\r\npublic static function main() \r\n{\r\n    try {\r\n        $page = new PageTemplate();\r\n        $page->processReceivedData();\r\n        $page->generateView();\r\n    }\r\n    catch (Exception $e) {\r\n        header(\"Content-type: text/plain; charset=UTF-8\");\r\n        echo $e->getMessage();\r\n    }\r\n}\r\n}\r\n\r\nPageTemplate::main();\r\n\r\n? >', '2019-07-13 10:01:09', '2019-07-13 10:01:09'),
(8, 'KOMPLAIN', 'op3', 'MAU KASIH SARAN KALO MAU KELUAR DARI KAMPUS KENAPA HARUS NUNJUKIN STNK.. BIKIN RIBET', '2019-07-15 07:01:46', '2019-07-15 07:01:46'),
(10, 'How to fix “powershell.exe -c (Get-Counter ”\\\\$env:computername\\PhysicalDisk(*)\\Avg. Disk Queue Length“).Countersamples”', 'web', 'I wan to run this from cmd powershell.exe -c (Get-Counter \"\\$env:computername\\PhysicalDisk(*)\\Avg. Disk Queue Length\").Countersamples\r\n\r\nits throwing error. Please help.', '2019-07-15 07:10:46', '2019-07-15 07:10:46'),
(11, 'Create a table with counts and percentages with missing data', 'web', 'I need the table to calculate a count and a percent whether or not a given Race and Sex combination exists in the data set. Here is what I need it to look like.\r\n\r\n[Table Format]1\r\n\r\nI have tried computing each value for the table individually and R-markdown gave me a \"memory error\". I have tried creating a count and percent table and combining them together but it does not give all of the Race/Sex combinations I need for the report. I am not sure where to go from here. Please Help!', '2019-07-15 07:11:48', '2019-07-15 07:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `filename`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ALI AKBAR ISMAIL', 'akbar@gmail.com', 'tzuuyuuuu', NULL, '$2y$10$P7N6CJ8VrnubIbk1K2i6reBdwzrR8V15BGQ4hO3oqY7QhtFUIeXpG', NULL, 'GBJmQist16uWZLhpxiB5ShTxLkTfIbh17TxV17wFeP9RPvDLZZYg7LsaOMZt', '2019-07-08 20:50:54', '2019-07-08 20:50:54'),
(4, 'agjkfff', 'tzuyu@gmail.com', 'akbrism', NULL, '$2y$10$fUfPiTgOkrz/qYhFiF0ElOsQv.ow.zOhYFWx8op6.l2fAGhmgokj2', NULL, '$2y$10$QSYqUeq7hEsnQ3w3ph0AXuc7hUY13rU3HLWkzRbSH0DNONnfIiWc.', '2019-07-08 20:54:32', '2019-07-08 20:54:32'),
(5, 'ali akbar', 'test02@gmail.com', 'admin', NULL, '$2y$10$4XJJwK2.p//fVRRA6wMYFuZoG94liFxkUG.3Fz3UXjzKDH1yMoG5W', NULL, '$2y$10$rxcMZd5P/PyNiGslZwU.peRMa68L5i9CIICGJSymlAnwGyanLnE3a', '2019-07-08 21:01:38', '2019-07-08 21:01:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_id_unique` (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
