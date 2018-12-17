-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 06 2016 г., 16:50
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `musiceproject`
--

-- --------------------------------------------------------

--
-- Структура таблицы `album`
--

CREATE TABLE `album` (
  `album_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `album`
--

INSERT INTO `album` (`album_id`, `artist_id`, `img`, `name`) VALUES
(1, 1, 'eminem.jpg', 'album Eminem-1'),
(2, 1, 'eminemalb1.jpg', 'Eminem-2'),
(3, 1, 'eminemaalb2.jpg', 'Eminem-3');

-- --------------------------------------------------------

--
-- Структура таблицы `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `artist`
--

INSERT INTO `artist` (`id`, `img`, `name`, `description`, `role`) VALUES
(1, 'eminemalb1.jpg', 'Eminem', 'Marshall Bruce Mathers III (born October 17, 1972),[2] known professionally as Eminem (often stylized as EMIN?M), is an American rapper, record producer, and actor. Eminem is the best-selling artist of the 2000s in the United States. Throughout his career, he has had 10 number-one albums on the Billboard 200 and five number-one singles on the Billboard Hot 100. With US sales of 45.1 million albums and 42 million tracks as of June 2014, Eminem is the second best-selling male artist of the Nielsen SoundScan era, the sixth best-selling artist in the United States and the best-selling hip-hop artist. Globally, he has sold more than 172 million albums, thus being one of the world''s best-selling artists. Rolling Stone ranked him 83rd on its list of 100 Greatest Artists of All Time, calling him the King of Hip Hop.', 'pop'),
(2, 'beyonce.jpg', 'Beyonce', 'Beyoncé Giselle Knowles-Carter (/bi??j?nse?/;[3] born September 4, 1981)[4][5][6] is an American singer, songwriter and actress. Born and raised in Houston, Texas, she performed in various singing and dancing competitions as a child and rose to fame in the late 1990s as lead singer of R&B girl-group Destiny''s Child. Managed by her father, Mathew Knowles, the group became one of the world''s best-selling girl groups of all time. Their hiatus saw the release of Beyoncé''s debut album, Dangerously in Love (2003), which established her as a solo artist worldwide, earned five Grammy Awards and featured the Billboard Hot 100 number-one singles "Crazy in Love" and "Baby Boy".\n\nFollowing the disbandment of Destiny''s Child in 2006, she released her second solo album, B''Day (2006), which contained hits "Déjà Vu", "Irreplaceable", and "Beautiful Liar". Beyoncé also ventured into acting, with a Golden Globe-nominated performance in Dreamgirls (2006) and starring roles in The Pink Panther (2006) and Obsessed (2009). Her marriage to rapper Jay Z and portrayal of Etta James in Cadillac Records (2008) influenced her third album, I Am... Sasha Fierce (2008), which saw the birth of her alter-ego Sasha Fierce and earned a record-setting six Grammy Awards in 2010, including Song of the Year for "Single Ladies (Put a Ring on It)". Beyoncé took a hiatus from music in 2010 and took over management of her career; her fourth album 4 (2011) was subsequently mellower in tone, exploring 1970s funk, 1980s pop, and 1990s soul.[7] Her critically acclaimed fifth album, Beyoncé (2013), was distinguished from previous releases by its experimental production and exploration of darker themes. Her sixth album, Lemonade (2016), was released in conjunction with a short film of the same name.', 'pop'),
(3, 'rihanna4.jpg', 'Rihanna', 'Robyn Rihanna Fenty (/ri?æn?/;[1] born February 20, 1988), known mononymously as Rihanna, is a Barbadian singer and songwriter. Born in Saint Michael and raised in Bridgetown, she first entered the music industry by recording demo tapes under the direction of record producer Evan Rogers in 2003. She ultimately signed a recording contract with Def Jam Recordings after auditioning for its then-president, hip hop producer and rapper Jay Z. In 2005, Rihanna rose to fame with the release of her debut studio album Music of the Sun and its follow-up A Girl like Me (2006), which charted on the top 10 of the U.S. Billboard 200 and respectively produced the hit singles "Pon de Replay" and "SOS".\n\nShe assumed creative control for her third studio album Good Girl Gone Bad (2007) and adopted a public image as a sex symbol while reinventing her music and image. Its successful lead single "Umbrella" became an international breakthrough in her career, as she won her first Grammy Award for Best Rap/Sung Collaboration with Jay Z in 2008. After releasing four Recording Industry Association of America (RIAA) platinum-certified albums, including the Grammy Award winner Unapologetic (2012), she was recognized as a pop icon. Her eighth studio album Anti (2016) and its lead single "Work" reached number-one on the Billboard 200 and Hot 100. Many of her songs rank among the world''s best-selling singles of all time, including the singles "Umbrella", "Take a Bow", "Disturbia", "Only Girl (In the World)", "S&M", "We Found Love", "Diamonds", and "Stay" in which she is the lead artist, and her collaborations "Live Your Life" (with T.I.), "Love the Way You Lie" and "The Monster" (both with Eminem).\n\nWith sales exceeding 200 million records worldwide, Rihanna is one of the best-selling artists of all time. Rihanna is the youngest and fastest solo artist to earn fourteen number-one singles on the Billboard Hot 100, and was named the Digital Songs Artist of the 2000s decade and the top Hot 100 artist of the 2010s decade by Billboard.[2][3][4] Among numerous awards and accolades, Rihanna has won eight Grammy Awards, twelve American Music Awards, twelve Billboard Music Awards, two BRIT Awards, and the inaugural Icon Award at the American Music Awards of 2013. Widely recognized for frequently reinventing her style and image, she received the Fashion Icon lifetime achievement award from the Council of Fashion Designers of America in 2014. Forbes ranked Rihanna the fourth most powerful celebrity of 2012, and was named one of Time''s "100 Most Influential People in the World" later that year.[5]', 'pop');

-- --------------------------------------------------------

--
-- Структура таблицы `properties`
--

CREATE TABLE `properties` (
  `type` varchar(255) NOT NULL,
  `tag_version` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `data_added` date NOT NULL,
  `modifed` varchar(255) NOT NULL,
  `last_played` date NOT NULL,
  `play_count` int(11) NOT NULL,
  `skipped` varchar(255) NOT NULL,
  `counts` int(11) NOT NULL,
  `encoded_with` varchar(255) NOT NULL,
  `chanels` varchar(255) NOT NULL,
  `bitrate` varchar(255) NOT NULL,
  `ample_rate` varchar(255) NOT NULL,
  `volume` varchar(255) NOT NULL,
  `prop_id` int(11) NOT NULL,
  `track_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `track`
--

CREATE TABLE `track` (
  `track_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `luricks` varchar(255) NOT NULL,
  `rate` double NOT NULL,
  `playing` int(11) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `track_image` varchar(255) NOT NULL,
  `playing_date` date NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `track`
--

INSERT INTO `track` (`track_id`, `album_id`, `artist_id`, `name`, `luricks`, `rate`, `playing`, `genre`, `track_image`, `playing_date`, `created_date`) VALUES
(1, 1, 1, 'eminem_-_lose_yourself_san_holo_remix_(zaycev.net).mp3', 'www', 2, 1, 'po', 'eminemaalb2.jpg', '2016-12-06', '2016-11-17'),
(2, 1, 1, '8 Mile - Ending Rap Battles (BEST QUALITY, 1080p).mp3', 'www', 3, 1, 'po', 'eminemaalb2.jpg', '2016-12-06', '2016-11-15'),
(3, 1, 1, 'martin_garrix_and_jay_hardway_-_wizard_(zaycev.net).mp3', 'www', 1, 1, 'tr', 'Era_-_Ameno.jpg', '2016-12-06', '2016-11-16'),
(4, 1, 1, 'era-ameno-ferhat-sonsoz-remix_(mp3.cc).mp3', 'www', 2, 1, 'ro', '713304.jpg', '2016-12-06', '2016-12-01'),
(5, 1, 2, 'sia_feat._kendrick_lamar_-_the_greatest_(zaycev.net).mp3', 'www', 5, 1, 'lo', 'PAY-Sia-Main.jpg', '2016-12-06', '2016-12-01'),
(6, 2, 2, 'beyonce-sorry-(best-muzon.me).mp3', 'www', 5, 1, 'po', 'beyonce_1.jpg', '2016-12-06', '2016-12-02'),
(7, 3, 3, 'rihanna-american-oxygen.mp3', 'www', 5, 1, 'lo', 'rihanna1.jpg', '2016-12-06', '2016-12-06'),
(8, 3, 3, 'rihanna-bitch-better-have-my-money-tim-gorgeous-radio-mix.mp3', 'www', 5, 1, 'lo', 'rihanna2.jpg', '2016-12-06', '2016-12-06'),
(9, 3, 3, 'rihanna-diamonds-kirill-clash-instrumental-remix.mp3', 'www', 5, 1, 'lo', 'rihanna3.jpg', '2016-12-06', '2016-12-06');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`);

--
-- Индексы таблицы `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`prop_id`);

--
-- Индексы таблицы `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`track_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `album`
--
ALTER TABLE `album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `properties`
--
ALTER TABLE `properties`
  MODIFY `prop_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `track`
--
ALTER TABLE `track`
  MODIFY `track_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
