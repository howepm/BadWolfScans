-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 17, 2020 at 03:51 PM
-- Server version: 10.1.41-MariaDB-0+deb9u1
-- PHP Version: 7.0.33-12+0~20191026.23+debian8~1.gbp940de0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_bw`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `posted` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `author`, `title`, `content`, `posted`, `modified`) VALUES
(1, 1, '\r\n                                                        Lorem ipsum dolor \r\n                                                        ', '\r\n                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras convallis, sapien ut sollicitudin auctor, libero dolor posuere sapien, maximus euismod enim ex vitae nunc. Nullam enim est, pellentesque semper suscipit in, maximus vitae ex. Sed pulvinar facilisis nibh, et vulputate enim viverra nec. Mauris maximus luctus sapien, eu aliquam quam mattis a. Duis eu turpis at tellus ultrices pellentesque et id augue. Quisque interdum quis dui quis condimentum. Vestibulum efficitur lacus non metus maximus, in vulputate libero eleifend. Nullam ut posuere ex, non rhoncus mauris. Donec lorem enim, feugiat id suscipit at, euismod eget libero. Praesent condimentum lacinia vulputate. Integer non rutrum eros. Donec sem leo, posuere nec arcu ut, tincidunt vestibulum velit. In luctus ante vitae magna euismod, at rhoncus nibh bibendum. Etiam dignissim ligula tristique sapien rhoncus, et semper enim feugiat. Quisque metus dolor, vestibulum et pellentesque eu, gravida at tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; \r\n                                                        ', '2020-01-08', '2020-01-08'),
(2, 1, '\r\n                                                        Nunc a feugiat tortor\r\n                                                        ', '\r\n                                                        Nunc a feugiat tortor. In condimentum erat cursus est mattis vestibulum. Nullam magna felis, tincidunt eu interdum at, dictum nec felis. Nunc tincidunt nisl ut est rutrum, nec viverra nunc eleifend. Aliquam eget ullamcorper nisl. Etiam eu consequat ante. Praesent vulputate ipsum elit, et rhoncus leo tristique sit amet. Pellentesque vel justo vel mauris semper dictum. Nullam eget libero dui. Suspendisse magna lectus, accumsan vitae ex vel, blandit malesuada nisi. Maecenas non elit vitae lorem imperdiet pharetra. Duis fermentum sem eros, varius mattis quam faucibus in. \r\n                                                        ', '2020-01-08', '2020-01-08'),
(3, 1, '\r\n                                                        Maecenas vel rutrum \r\n                                                        ', '\r\n                                                        Maecenas vel rutrum nulla, sit amet scelerisque turpis. Aliquam lacinia nibh ac suscipit posuere. Cras luctus massa non orci consequat sodales. Vestibulum vitae imperdiet arcu. Aenean vitae molestie tellus. Praesent vel pretium risus, sit amet fringilla elit. Morbi quis justo eget massa gravida semper a nec turpis. Phasellus enim turpis, dictum feugiat lacus vitae, consectetur gravida metus. Proin libero arcu, efficitur nec congue quis, ultrices volutpat dolor. Maecenas commodo commodo nunc ac egestas. Fusce a consequat lacus, ac tempus leo. Pellentesque sit amet lacinia ligula, eget aliquet sapien. Nam lobortis laoreet nisi at elementum. \r\n                                                        ', '2020-01-08', '2020-01-08'),
(4, 1, '\r\n                                                        Vestibulum ultricies nisl massa\r\n                                                        ', '\r\n                                                        Vestibulum ultricies nisl massa, eu rutrum libero mollis at. Nunc finibus euismod pretium. Sed id vehicula neque. Nulla vel dignissim felis. Pellentesque ultrices laoreet posuere. Sed vitae vehicula purus. Etiam quis arcu rutrum, pellentesque urna et, faucibus nisl. In gravida consequat enim ac imperdiet. Suspendisse in accumsan nisl, et bibendum mi. Nullam lobortis vestibulum mi, ac laoreet ex rhoncus vel. Nullam sed accumsan mi, at mollis nisi. Sed auctor, mauris quis suscipit fermentum, dui nunc placerat lectus, eget porttitor eros neque a ipsum. Curabitur blandit, diam at ultrices pretium, sem sapien imperdiet felis, sed consectetur purus diam vel dolor. Suspendisse scelerisque ligula vitae neque scelerisque facilisis. \r\n                                                        ', '2020-01-08', '2020-01-08'),
(5, 1, '\r\n                                                        Quisque eget porta felis\r\n                                                        ', 'Quisque eget porta felis, eget consequat tortor. Curabitur at enim varius, gravida augue at, euismod odio. Nullam congue vel massa sit amet auctor. Mauris feugiat, nibh vitae facilisis gravida, erat libero cursus libero, non tincidunt odio lorem a sem. Vivamus imperdiet scelerisque eros eget molestie. Nunc sed libero scelerisque, interdum ante sit amet, rhoncus quam. Etiam lectus leo, ornare ut luctus eget, aliquet nec urna. Maecenas rhoncus, nisi a aliquam tincidunt, mauris est malesuada lorem, vitae efficitur sem est ut mi. Suspendisse a placerat arcu. Suspendisse semper est magna, a pellentesque nibh sagittis ac. Pellentesque ac turpis quis ipsum pulvinar sagittis sed nec elit. Sed eget tempor turpis, in eleifend ex. Aliquam nec mauris sagittis, fringilla turpis vel, condimentum nibh. Aenean sodales ipsum eu est euismod, quis elementum nunc vehicula. Aenean nec neque lorem. Nulla facilisi. \r\n                                                        \r\n                                                        ', '2020-01-08', '2020-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `recoveryQuestion` text NOT NULL,
  `recoveryAnswer` varchar(255) NOT NULL,
  `2facode` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `firstlogin` date NOT NULL,
  `lastlogin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
