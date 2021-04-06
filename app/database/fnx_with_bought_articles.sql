-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 06 Kwi 2021, 19:03
-- Wersja serwera: 5.7.31
-- Wersja PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `fnx_group`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `article`
--

INSERT INTO `article` (`id`, `title`, `short_description`, `content`, `price`, `category_id`) VALUES
(1, 'Healthy dish you can preapare quickly', 'Nulla vestibulum nec, dignissim in, cursus molestie. Donec est. Integer neque quis porta nisl. Nam pulvinar, quam molestie ultricies vitae.', 'Lorem ipsum primis in erat consectetuer viverra semper orci, viverra lacinia. Vestibulum aliquam lacinia, risus nunc, placerat ornare dapibus. Aenean et netus et velit. Duis hendrerit magna sapien, tempus ac, dictum sed, vestibulum vehicula. Etiam leo at risus commodo ante. Curabitur elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi sem dolor eu wisi. Suspendisse at lorem non orci. Proin gravida sit amet nunc volutpat a, pellentesque sed, sodales pede. Duis vulputate nunc. Praesent tortor. Donec vitae felis. Mauris leo. Donec molestie a, tellus. Suspendisse at magna. Etiam vestibulum tristique vitae, lectus. Nam suscipit, risus velit, a dolor lacus, congue quis, dictum id, eleifend purus scelerisque odio sit amet felis odio vitae fringilla fringilla eget, nulla. Nunc justo ac posuere cubilia Curae, Sed vehicula wisi, aliquam arcu. Sed feugiat sapien, congue odio non arcu. Nam risus et ultrices iaculis. Curabitur arcu elit, dictum ut, diam.', 0, 1),
(2, 'Germanium-based CPU cores', 'Cum sociis natoque penatibus et ultrices urna, pellentesque tincidunt, velit in dui. Lorem ipsum aliquet elit. Mauris luctus et magnis.', 'Curae, Mauris vel risus. Nulla facilisi. Nullam et lacus a mauris. Nunc ultricies tortor id tortor quis massa ac ipsum. Proin cursus, mi quis viverra elit. Nunc consectetuer adipiscing ornare. Nam molestie. Quisque pharetra, urna ut urna mauris, consectetuer nisl. Fusce mollis, orci a augue. Nam scelerisque pede ac nisl. Morbi fermentum leo facilisis dui ligula, quis eleifend eget, nunc. Nunc velit non sem. Nam lorem eu eros. Pellentesque laoreet metus vitae tellus consectetuer adipiscing quam sagittis eget, bibendum ac, ultricies vehicula, dui gravida vitae, lectus. Curabitur commodo. Curabitur condimentum magna sapien, nec tellus. Quisque nulla. Aenean massa molestie justo euismod scelerisque vel, ipsum. Nunc accumsan at, egestas risus libero, posuere cubilia Curae, In accumsan augue nec turpis quis euismod nibh, dignissim dolor eu elementum quis, ornare at, bibendum porttitor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Curabitur eu dui quis justo. Vestibulum enim.', 1.5, 2),
(3, 'Lorem Ipsum', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac dictum justo. Nulla facilisi. Integer quis tellus sodales, ornare tortor ut, elementum augue. ', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac dictum justo. Nulla facilisi. Integer quis tellus sodales, ornare tortor ut, elementum augue. Aenean non luctus nisl, at venenatis magna. Phasellus convallis sagittis ex at efficitur. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In volutpat blandit mauris, ut efficitur enim lacinia eget. Vivamus id hendrerit ante. Nullam ultricies euismod lacus sit amet ornare. Nullam consequat eros vitae libero efficitur, eget commodo purus placerat. Proin porttitor et ligula ac fermentum. Ut eget feugiat odio, at finibus lorem. Etiam sit amet augue non mauris sodales vestibulum. Mauris et dui sed odio faucibus gravida sed non ipsum. ', 13, 5),
(4, 'A Pyramid? Found one more!', 'Morbi vitae dui odio nonummy eget, dignissim porttitor, arcu nunc ut erat. Duis ut aliquet ipsum sit amet, ante. Morbi.', 'Aenean feugiat nec, nibh. Donec dolor nibh, dignissim tempor, pede urna mi, nec sapien mauris lacus a blandit malesuada. Suspendisse vel leo. In euismod. Integer lacinia id, sapien. Maecenas sapien quis consectetuer dignissim, lorem fermentum mi, viverra ligula. Phasellus ac lectus. Sed adipiscing risus at tortor. Integer neque ut venenatis augue quis pellentesque consectetuer, augue at consequat tortor, pretium vitae, tortor. Proin dui at sapien. Maecenas imperdiet convallis. Fusce blandit justo, posuere cubilia Curae, Vivamus semper quis, tellus. Aliquam nulla. Aliquam ultricies lobortis sed, ullamcorper varius nunc, tempus nunc. Ut sodales, dictum sed, aliquet elit, varius risus metus gravida non, nunc. Sed aliquet quis, ornare quam. Vestibulum ullamcorper augue, sagittis urna. Donec odio sit amet, sodales nulla. Phasellus urna fringilla vel, ornare bibendum sapien vitae lectus vulputate faucibus. Sed sagittis nibh ultricies leo. In urna. Proin imperdiet dignissim volutpat at, pretium pellentesque. Praesent gravida iaculis odio, sagittis lacus et augue.', 5.75, 3),
(5, 'The prosecution just couldn\'t handle the truth', 'Vestibulum convallis nisl, sollicitudin sed, fermentum facilisis. Maecenas fermentum quis, velit. Duis lobortis, varius sit amet, felis. Pellentesque porta tincidunt.', 'Mauris vestibulum ligula. Ut sagittis, nunc semper feugiat. Cum sociis natoque penatibus et eros orci luctus et lectus. Curabitur placerat, nisl ac odio eget velit wisi, ullamcorper mauris. Etiam ac ligula. Lorem ipsum aliquet feugiat nec, scelerisque arcu. Sed mauris sit amet, vulputate luctus. Sed fringilla sollicitudin, odio vitae velit sit amet, massa. Nunc gravida. Suspendisse est. Lorem ipsum dolor ut magna. Quisque vestibulum. Nulla consequat sed, ullamcorper ac, laoreet a, ligula. Aenean non felis. Pellentesque at ipsum. Aliquam consequat eu, luctus bibendum. Nulla eleifend purus consectetuer massa. Proin sed porta turpis velit, scelerisque odio eget augue commodo volutpat quam nibh faucibus in, dapibus sit amet, iaculis ante, tincidunt quis, ultricies porta. Vivamus pede. Vestibulum aliquam enim. Nunc leo. Phasellus ipsum dolor placerat vehicula elit ac turpis egestas. Mauris rutrum, enim sed massa in accumsan congue. Donec vitae libero at purus. Sed nonummy id, elit. Curabitur fringilla ante sodales eu.', 0, 4),
(6, 'A walk to the park', 'Lorem ipsum dolor sapien accumsan congue. Donec ullamcorper, lorem hendrerit wisi. Vestibulum turpis egestas. Aenean posuere elementum odio fermentum suscipit.', 'Nullam aliquet. Vestibulum cursus vitae, sollicitudin mauris sed viverra elit viverra quis, faucibus orci quis nibh. Curabitur ultrices urna, pellentesque leo. Aenean congue porta, metus sed est. Quisque ut mauris sed eros malesuada vitae, dapibus vel, orci. Sed mauris turpis, molestie turpis sagittis libero. Morbi pede. In quis nibh vel lectus. Nullam rutrum et, faucibus orci vitae dui eget sem tincidunt in, tristique eget, aliquam purus. Integer eget tempus ornare arcu quis nibh. Phasellus lorem tempus nunc. Etiam dictum ut, pulvinar interdum. Quisque cursus, mi libero, id rutrum nulla, auctor scelerisque, ante nec quam. Sed porttitor, quam risus, pellentesque at, metus. Vestibulum ante in nonummy id, semper quis, aliquam arcu. In molestie lorem velit eleifend quam nunc, vitae fringilla mi, eu felis augue id leo vitae est sit amet felis mollis pulvinar. Nulla euismod, quam at arcu. Etiam nibh eu urna. Aenean bibendum vitae, vulputate adipiscing. Mauris eget lectus felis.', 0, 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `article_tag`
--

DROP TABLE IF EXISTS `article_tag`;
CREATE TABLE IF NOT EXISTS `article_tag` (
  `article_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`article_id`,`tag_id`),
  KEY `IDX_919694F97294869C` (`article_id`),
  KEY `IDX_919694F9BAD26311` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `article_tag`
--

INSERT INTO `article_tag` (`article_id`, `tag_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(2, 5),
(2, 6),
(3, 1),
(3, 4),
(4, 4),
(4, 7);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `article_user`
--

DROP TABLE IF EXISTS `article_user`;
CREATE TABLE IF NOT EXISTS `article_user` (
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`article_id`,`user_id`),
  KEY `IDX_3DD151487294869C` (`article_id`),
  KEY `IDX_3DD15148A76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `article_user`
--

INSERT INTO `article_user` (`article_id`, `user_id`) VALUES
(2, 6),
(3, 6),
(4, 6),
(5, 6),
(6, 6);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `author`
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BDAFD8C87294869C` (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `author`
--

INSERT INTO `author` (`id`, `article_id`, `first_name`, `last_name`, `about`) VALUES
(1, 1, 'Gordon', 'Ramsay', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac dictum justo. Nulla facilisi. Integer quis tellus sodales, ornare tortor ut, elementum augue. Aenean non luctus nisl, at venenatis magna. Phasellus convallis sagittis ex at efficitur. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In volutpat blandit mauris, ut efficitur enim lacinia eget. Vivamus id hendrerit ante. Nullam ultricies euismod lacus sit amet ornare. Nullam consequat eros vitae libero efficitur, eget commodo purus placerat. Proin porttitor et ligula ac fermentum. Ut eget feugiat odio, at finibus lorem. Etiam sit amet augue non mauris sodales vestibulum. Mauris et dui sed odio faucibus gravida sed non ipsum. '),
(2, 2, 'Roger', 'Penrose', 'Nunc odio nisi, vehicula a ante facilisis, ultricies feugiat enim. Proin nec urna pellentesque, tincidunt felis ut, blandit enim. Mauris vel neque quis arcu faucibus feugiat interdum vitae massa. Duis in ipsum a purus congue pulvinar. Duis scelerisque rutrum commodo. Suspendisse venenatis, augue at tristique maximus, massa metus tristique odio, non interdum augue tellus nec turpis. Nam vitae fermentum libero. Donec fermentum nunc et elit pulvinar, non lobortis odio vehicula. Nulla sit amet nisi vestibulum, maximus nibh eu, mollis lectus. Vestibulum cursus turpis ac eros rutrum, vel aliquet risus dignissim. Suspendisse non dui faucibus orci placerat volutpat lobortis ut massa. Integer semper nisl condimentum, laoreet arcu eu, mollis justo. Quisque non libero id mi molestie lobortis vitae at orci. '),
(3, 3, 'Test', 'Test', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac dictum justo. Nulla facilisi. Integer quis tellus sodales, ornare tortor ut, elementum augue. Aenean non luctus nisl, at venenatis magna. Phasellus convallis sagittis ex at efficitur. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In volutpat blandit mauris, ut efficitur enim lacinia eget. Vivamus id hendrerit ante. Nullam ultricies euismod lacus sit amet ornare. Nullam consequat eros vitae libero efficitur, eget commodo purus placerat. Proin porttitor et ligula ac fermentum. Ut eget feugiat odio, at finibus lorem. Etiam sit amet augue non mauris sodales vestibulum. Mauris et dui sed odio faucibus gravida sed non ipsum. '),
(4, 3, 'test2', 'test2', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac dictum justo. Nulla facilisi. Integer quis tellus sodales, ornare tortor ut, elementum augue. Aenean non luctus nisl, at venenatis magna. Phasellus convallis sagittis ex at efficitur. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In volutpat blandit mauris, ut efficitur enim lacinia eget. Vivamus id hendrerit ante. Nullam ultricies euismod lacus sit amet ornare. Nullam consequat eros vitae libero efficitur, eget commodo purus placerat. Proin porttitor et ligula ac fermentum. Ut eget feugiat odio, at finibus lorem. Etiam sit amet augue non mauris sodales vestibulum. Mauris et dui sed odio faucibus gravida sed non ipsum. '),
(5, 4, 'Henry', 'Walton Jones III', ''),
(6, 5, 'Johann', 'Voynich', ''),
(7, 6, 'Martha', 'Stewart', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Health'),
(2, 'Science'),
(3, 'Archaeology'),
(4, 'Miscelenous'),
(5, 'Daily life');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tag`
--

DROP TABLE IF EXISTS `tag`;
CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `tag`
--

INSERT INTO `tag` (`id`, `name`) VALUES
(1, 'everyday'),
(2, 'healthy'),
(3, 'fit'),
(4, 'research'),
(5, 'breakthrough'),
(6, 'technology'),
(7, 'digsite'),
(8, 'ruins'),
(9, 'habits'),
(10, 'law'),
(11, 'funny'),
(12, 'mistake');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wallet` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `wallet`) VALUES
(1, 'sheldon', 'shelly', 50),
(2, 'howard', 'bernie', 0),
(3, 'leonard', 'penny', 5),
(4, 'amy', 'wildebeast', 0),
(5, 'penny', 'leonard', 10),
(6, 'rajesh', 'password', 15.25);

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_23A0E6612469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Ograniczenia dla tabeli `article_tag`
--
ALTER TABLE `article_tag`
  ADD CONSTRAINT `FK_919694F97294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_919694F9BAD26311` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `article_user`
--
ALTER TABLE `article_user`
  ADD CONSTRAINT `FK_3DD151487294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_3DD15148A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `author`
--
ALTER TABLE `author`
  ADD CONSTRAINT `FK_BDAFD8C87294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
