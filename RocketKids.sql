-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Ago-2023 às 16:42
-- Versão do servidor: 10.1.34-MariaDB
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
-- Database: `rocketkids`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `admin`, `name`) VALUES
(18, 'pedrovalentetoledo123@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 'Pedro'),
(19, 'pedrovalentetoledo1233@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 'Pedro'),
(20, 'pedrovalentetoleo123@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 'Pedro'),
(21, '123@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 'Pedro'),
(23, 'pp@gmail.com', '$2y$10$AE9FEmShvDBl2nK5HIHQIO3E9bIAAD83fXy32yc7a9H2ghgHUsUwe', 0, 'Pedro'),
(24, 'ppadm@gmail.com', '$2y$10$fBYUk4dc4z9YXCmhMILZ8eal2yzqRm/0b2V7yNqDYSQ8FgdsKssLa', 1, 'Adm malvadÃ£o'),
(25, 'gdg@gmail.com', '$2y$10$ozpxArD2MCEHZw0vydhi6O8iDENpy5yhcmGdG2FqVXtwHCLvDcDO.', 0, 'Giovanna do grau');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;