DROP TABLE IF EXISTS `splendor_card`;

CREATE TABLE `splendor_card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prestige` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `emerald_tokens` int(11) NOT NULL,
  `sapphire_tokens` int(11) NOT NULL,
  `ruby_tokens` int(11) NOT NULL,
  `diamond_tokens` int(11) NOT NULL,
  `onyx_tokens` int(11) NOT NULL,
  `bonus` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `splendor_card` (`id`, `prestige`, `level`, `emerald_tokens`, `sapphire_tokens`, `ruby_tokens`, `diamond_tokens`, `onyx_tokens`, `bonus`) VALUES
(1, 0, 1, 0, 1, 1, 1, 1, 'Green'),
(2, 0, 1, 0, 1, 1, 1, 2, 'Green'),
(3, 0, 1, 0, 1, 2, 0, 2, 'Green'),
(4, 0, 1, 1, 3, 0, 1, 0, 'Green'),
(5, 0, 1, 0, 1, 0, 2, 0, 'Green'),
(6, 0, 1, 0, 2, 2, 0, 0, 'Green'),
(7, 0, 1, 0, 0, 3, 0, 0, 'Green'),
(8, 1, 1, 0, 0, 0, 0, 4, 'Green'),
(9, 0, 1, 1, 0, 1, 1, 1, 'Blue'),
(10, 0, 1, 1, 0, 2, 1, 1, 'Blue'),
(11, 0, 1, 2, 0, 2, 1, 0, 'Blue'),
(12, 0, 1, 3, 1, 1, 0, 0, 'Blue'),
(13, 0, 1, 0, 0, 0, 1, 2, 'Blue'),
(14, 0, 1, 2, 0, 0, 0, 2, 'Blue'),
(15, 0, 1, 0, 0, 0, 0, 3, 'Blue'),
(16, 1, 1, 0, 0, 4, 0, 0, 'Blue'),
(17, 0, 1, 1, 1, 0, 1, 1, 'Red'),
(18, 0, 1, 1, 1, 0, 2, 1, 'Red'),
(19, 0, 1, 1, 0, 0, 2, 2, 'Red'),
(20, 0, 1, 0, 0, 1, 1, 3, 'Red'),
(21, 0, 1, 1, 2, 0, 0, 0, 'Red'),
(22, 0, 1, 0, 0, 2, 2, 0, 'Red'),
(23, 0, 1, 0, 0, 0, 3, 0, 'Red'),
(24, 1, 1, 0, 0, 0, 4, 0, 'Red'),
(25, 0, 1, 1, 1, 1, 0, 1, 'White'),
(26, 0, 1, 2, 1, 1, 0, 1, 'White'),
(27, 0, 1, 2, 2, 0, 0, 1, 'White'),
(28, 0, 1, 0, 1, 0, 3, 1, 'White'),
(29, 0, 1, 0, 0, 2, 0, 1, 'White'),
(30, 0, 1, 0, 2, 0, 0, 2, 'White'),
(31, 0, 1, 0, 3, 0, 0, 0, 'White'),
(32, 1, 1, 4, 0, 0, 0, 0, 'White'),
(33, 0, 1, 1, 1, 1, 1, 0, 'Black'),
(34, 0, 1, 1, 2, 1, 1, 0, 'Black'),
(35, 0, 1, 0, 2, 1, 2, 0, 'Black'),
(36, 0, 1, 1, 0, 3, 0, 1, 'Black'),
(37, 0, 1, 2, 0, 1, 0, 0, 'Black'),
(38, 0, 1, 2, 0, 0, 2, 0, 'Black'),
(39, 0, 1, 3, 0, 0, 0, 0, 'Black'),
(40, 1, 1, 0, 4, 0, 0, 0, 'Black'),
(41, 1, 2, 2, 0, 3, 3, 0, 'Green'),
(42, 1, 2, 0, 3, 0, 2, 2, 'Green'),
(43, 2, 2, 0, 2, 0, 4, 1, 'Green'),
(44, 2, 2, 3, 5, 0, 0, 0, 'Green'),
(45, 2, 2, 5, 0, 0, 0, 0, 'Green'),
(46, 3, 2, 6, 0, 0, 0, 0, 'Green'),
(47, 1, 2, 2, 2, 3, 0, 0, 'Blue'),
(48, 1, 2, 3, 2, 0, 0, 3, 'Blue'),
(49, 2, 2, 0, 3, 0, 5, 0, 'Blue'),
(50, 2, 2, 0, 0, 1, 2, 4, 'Blue'),
(51, 2, 2, 0, 5, 0, 0, 0, 'Blue'),
(52, 3, 2, 0, 6, 0, 0, 0, 'Blue'),
(53, 1, 2, 0, 0, 2, 2, 3, 'Red'),
(54, 1, 2, 0, 3, 2, 0, 3, 'Red'),
(55, 2, 2, 2, 4, 0, 1, 0, 'Red'),
(56, 2, 2, 0, 0, 0, 3, 5, 'Red'),
(57, 2, 2, 0, 0, 0, 0, 5, 'Red'),
(58, 3, 2, 0, 0, 6, 0, 0, 'Red'),
(59, 1, 2, 3, 0, 2, 0, 2, 'White'),
(60, 1, 2, 0, 3, 3, 2, 0, 'White'),
(61, 2, 2, 1, 0, 4, 0, 2, 'White'),
(62, 2, 2, 0, 0, 5, 0, 3, 'White'),
(63, 2, 2, 0, 0, 5, 0, 0, 'White'),
(64, 3, 2, 0, 0, 0, 6, 0, 'White'),
(65, 1, 2, 2, 2, 0, 3, 1, 'Black'),
(66, 1, 2, 3, 0, 0, 3, 2, 'Black'),
(67, 2, 2, 4, 1, 2, 0, 0, 'Black'),
(68, 2, 2, 5, 0, 3, 0, 0, 'Black'),
(69, 2, 2, 0, 0, 0, 5, 0, 'Black'),
(70, 3, 2, 0, 0, 0, 0, 6, 'Black'),
(71, 3, 3, 0, 3, 3, 5, 3, 'Green'),
(72, 4, 3, 0, 7, 0, 0, 0, 'Green'),
(73, 4, 3, 3, 6, 0, 3, 0, 'Green'),
(74, 5, 3, 3, 7, 0, 0, 0, 'Green'),
(75, 3, 3, 3, 0, 3, 3, 5, 'Blue'),
(76, 4, 3, 0, 0, 0, 7, 0, 'Blue'),
(77, 4, 3, 0, 3, 0, 6, 3, 'Blue'),
(78, 5, 3, 0, 3, 0, 7, 0, 'Blue'),
(79, 3, 3, 3, 5, 0, 3, 3, 'Red'),
(80, 4, 3, 7, 0, 0, 0, 0, 'Red'),
(81, 4, 3, 6, 3, 3, 0, 0, 'Red'),
(82, 5, 3, 7, 0, 3, 0, 0, 'Red'),
(83, 3, 3, 3, 3, 5, 0, 3, 'White'),
(84, 4, 3, 0, 0, 0, 0, 7, 'White'),
(85, 4, 3, 0, 0, 3, 3, 6, 'White'),
(86, 5, 3, 0, 0, 0, 3, 7, 'White'),
(87, 3, 3, 5, 3, 3, 3, 0, 'Black'),
(88, 4, 3, 0, 0, 7, 0, 0, 'Black'),
(89, 4, 3, 3, 0, 6, 0, 3, 'Black'),
(90, 5, 3, 0, 0, 7, 0, 3, 'Black'),
(91, 3, 0, 4, 0, 4, 0, 0, 'Noble'),
(92, 3, 0, 0, 0, 3, 3, 3, 'Noble'),
(93, 3, 0, 0, 4, 0, 4, 0, 'Noble'),
(94, 3, 0, 0, 0, 0, 4, 4, 'Noble'),
(95, 3, 0, 4, 4, 0, 0, 0, 'Noble'),
(96, 3, 0, 3, 3, 3, 0, 0, 'Noble'),
(97, 3, 0, 3, 3, 0, 3, 0, 'Noble'),
(98, 3, 0, 0, 0, 4, 0, 4, 'Noble'),
(99, 3, 0, 0, 3, 0, 3, 3, 'Noble'),
(100, 3, 0, 3, 0, 3, 0, 3, 'Noble');