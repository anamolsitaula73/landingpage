-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2024 at 07:06 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surveydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE `surveys` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(90) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `org_size` varchar(255) DEFAULT NULL,
  `turnover` varchar(255) DEFAULT NULL,
  `price_range` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`id`, `name`, `email`, `company_name`, `org_size`, `turnover`, `price_range`) VALUES
(101, 'Anamol', 'aa@gmail.com', 'erte', NULL, '333333', NULL),
(102, 'ccc', 'anmolsitaula73@gmail.com', 'ccc', NULL, '22', NULL),
(103, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ss', NULL, '44444', NULL),
(104, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ss', NULL, '44444', NULL),
(105, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ss', NULL, '44444', NULL),
(106, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ss', NULL, '44444', NULL),
(107, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ss', NULL, '44444', NULL),
(108, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ss', NULL, '44444', NULL),
(109, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ss', NULL, '44444', NULL),
(110, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ss', NULL, '44444', NULL),
(111, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ss', NULL, '44444', NULL),
(112, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ss', NULL, '44444', NULL),
(113, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ss', NULL, '44444', NULL),
(114, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ss', NULL, '44444', NULL),
(115, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ss', NULL, '44444', NULL),
(116, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ss', NULL, '44444', NULL),
(117, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ss', NULL, '44444', NULL),
(118, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ss', NULL, '44444', NULL),
(119, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ss', NULL, '44444', NULL),
(120, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ss', NULL, '44444', NULL),
(121, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ss', NULL, '44444', NULL),
(122, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ss', NULL, '44444', NULL),
(123, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ss', NULL, '44444', NULL),
(124, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ss', NULL, '44444', NULL),
(125, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ss', NULL, '44444', NULL),
(126, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ss', NULL, '44444', NULL),
(127, 'w', 'anmolsitaula73@gmail.com', 'q', NULL, '1111', NULL),
(128, 'w', 'anmolsitaula73@gmail.com', 'q', NULL, '1111', NULL),
(129, 'w', 'anmolsitaula73@gmail.com', 'q', NULL, '1111', NULL),
(130, 'w', 'anmolsitaula73@gmail.com', 'q', NULL, '1111', NULL),
(131, 'w', 'anmolsitaula73@gmail.com', 'q', NULL, '1111', NULL),
(132, 'w', 'anmolsitaula73@gmail.com', 'q', NULL, '1111', NULL),
(133, 'w', 'anmolsitaula73@gmail.com', 'q', NULL, '1111', NULL),
(134, 'w', 'anmolsitaula73@gmail.com', 'q', NULL, '1111', NULL),
(135, 'w', 'anmolsitaula73@gmail.com', 'q', NULL, '1111', NULL),
(136, 'w', 'anmolsitaula73@gmail.com', 'q', NULL, '1111', NULL),
(137, 'w', 'anmolsitaula73@gmail.com', 'q', NULL, '1111', NULL),
(138, 'w', 'anmolsitaula73@gmail.com', 'q', NULL, '1111', NULL),
(139, 'w', 'anmolsitaula73@gmail.com', 'q', NULL, '1111', NULL),
(140, 'w', 'anmolsitaula73@gmail.com', 'q', NULL, '1111', NULL),
(141, 'w', 'anmolsitaula73@gmail.com', 'q', NULL, '1111', NULL),
(142, 'w', 'anmolsitaula73@gmail.com', 'q', NULL, '1111', NULL),
(143, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(144, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(145, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(146, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(147, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(148, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(149, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(150, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(151, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(152, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(153, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(154, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(155, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(156, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(157, 'aaaa', 'g@dddd.com', 'erte', NULL, '2222', NULL),
(158, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ccc', NULL, '2222', NULL),
(159, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ccc', NULL, '2222', NULL),
(160, 'ddd', 'admin@superteanepal.com', 'ddd', NULL, '22222', NULL),
(161, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ccc', NULL, '4444', NULL),
(162, 'Anamol Sitaula', 'anmolsitaula73@gmail.com', 'ccc', NULL, '4444', NULL),
(163, 'ddd', 'admin@superteanepal.com', 'ddd', NULL, '22222', NULL),
(164, 'सुनिल सिटौला', 'sunilsitaula2036@gmail.com', '333', NULL, '3333', NULL),
(165, 'anana', 'sunilsitaula2036@gmail.com', '333', NULL, '23333', NULL),
(166, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(167, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(168, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(169, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(170, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(171, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(172, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(173, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(174, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(175, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(176, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(177, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(178, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(179, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(180, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(181, 'aaaa', 'g@dddd.com', 'erte', NULL, '2222', NULL),
(182, 'aaaa', 'g@dddd.com', 'erte', NULL, '2222', NULL),
(183, 'aaaa', 'g@dddd.com', 'erte', NULL, '2222', NULL),
(184, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(185, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(186, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(187, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(188, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(189, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(190, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(191, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(192, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(193, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(194, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(195, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(196, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(197, 'ddd', 'aaaa@gmail.com', 'ddd', NULL, '5555', NULL),
(198, 'aaaa', 'aa@gmail.com', 'erte', NULL, '33443', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
