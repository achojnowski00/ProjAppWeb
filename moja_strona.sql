-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Gru 2021, 22:15
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `moja_strona`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `mails`
--

CREATE TABLE `mails` (
  `id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `mails`
--

INSERT INTO `mails` (`id`, `sender`, `content`) VALUES
(12, 'achojnowski00@gmail.com', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus neque expedita dolorem quo esse corporis deserunt odit ratione repellat quisquam obcaecati deleniti amet aut labore, veniam, eaque, assumenda provident error explicabo velit. Neque dolorum ut placeat blanditiis odio tempore voluptatum, assumenda voluptatem illum. Non, eos? Magni nulla tempora consequuntur fugit optio beatae cum fuga placeat dignissimos illo reiciendis a ipsa animi reprehenderit autem sed obcaecati laudantium, nam nisi soluta eligendi quam? Cum omnis odit laboriosam consequatur laborum suscipit consequuntur veritatis ipsam aspernatur voluptatibus, sapiente doloremque vitae harum earum dolorem quos, unde qui magnam eligendi. Minima numquam animi reprehenderit deleniti inventore quas id eos laborum, deserunt amet possimus officia maiores itaque blanditiis aspernatur. Reiciendis veniam corrupti odio repellendus quis magni molestiae magnam reprehenderit natus totam? Voluptatibus tempore doloremque laudantium. Rerum corporis, quae non, illum tenetur magni eum modi possimus debitis temporibus repellat necessitatibus eligendi. Debitis esse tenetur, natus beatae numquam vitae sunt repudiandae itaque expedita minus rerum id quos ut vel, autem nam corrupti eos obcaecati consequatur, molestias molestiae. Ipsa odit rerum, magni neque magnam quas maxime vel, officiis ex quaerat possimus voluptatum, quod doloribus omnis aut vitae nisi alias voluptatibus nam nihil facere adipisci. Voluptates ipsam porro eius veritatis laboriosam!'),
(14, 'test@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(15, 'lorem@impsum.com', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `page_list`
--

CREATE TABLE `page_list` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_content` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `page_list`
--

INSERT INTO `page_list` (`id`, `page_title`, `page_content`, `status`) VALUES
(1, 'o-mnie', '<div class=\"wrapper aboutme\">\r\n  <img src=\"./img/aboutme1.jpg\" alt=\"\" class=\"aboutme__image aboutme__image--me aboutme__image--floatleft\">\r\n  <p class=\"aboutme__text\">\r\n    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat officia possimus debitis labore aut expedita,\r\n    omnis nam repellat, accusamus eum, voluptates magni ullam? Optio alias, quo aliquid explicabo enim sit possimus\r\n    neque necessitatibus, est et adipisci omnis illum, dignissimos dicta minima fuga id amet consequatur velit libero!\r\n    Adipisci placeat quas quae architecto! Ipsam molestiae officia possimus sequi alias ad expedita aut, voluptatem\r\n    corrupti provident. Error eveniet, totam necessitatibus illo magnam nisi quas ipsam maxime sunt similique labore\r\n    enim qui ad accusamus assumenda mollitia quaerat perspiciatis eos expedita inventore ducimus saepe ex\r\n    voluptatibus! Quasi harum commodi deserunt quaerat, expedita a dolore.\r\n  </p>\r\n  <div class=\"clearfix\"></div>\r\n  <img src=\"./img/aboutme2.jpg\" alt=\"\" class=\"aboutme__image aboutme__image--me aboutme__image--floatright\">\r\n  <p class=\"aboutme__text\">\r\n    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat neque exercitationem tenetur cum porro,\r\n    perspiciatis aliquam dolor totam amet possimus quo distinctio esse. Harum, pariatur nisi distinctio animi debitis\r\n    illo eveniet qui rerum! Vel, laudantium natus non dolores illum perspiciatis odio eveniet tempore dolorem ad nihil\r\n    rem eaque maxime nostrum.\r\n  </p>\r\n  <p class=\"aboutme__text--quote\">\r\n    Lorem ipsum, dolor sit amet consectetur adipisicing.\r\n  </p>\r\n  <p class=\"aboutme__text\">\r\n    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus repellendus deserunt voluptatem corrupti?\r\n    Eveniet delectus aliquam voluptate dignissimos recusandae harum ratione nobis ex unde nisi ullam at suscipit\r\n    aspernatur, eos, eum qui earum accusantium consequuntur blanditiis. Esse fugit at voluptatum deleniti sed modi eos\r\n    illo dolores aliquid perferendis, atque optio quae, officiis iste pariatur vel eaque earum quisquam obcaecati ab\r\n    explicabo! Obcaecati odio repellat laboriosam! Ut itaque ab dolore sunt.\r\n  </p>\r\n  <div class=\"clearfix\"></div>\r\n</div>\r\n\r\n\r\n\r\n<footer class=\"footer\">\r\n\r\n\r\n  <div class=\"clock\">\r\n    <div id=\"zegarek\"></div>\r\n    <div id=\"data\"></div>\r\n  </div>\r\n\r\n\r\n  <div class=\"wrapper\">\r\n    <p class=\"footer__text\">\r\n      All rights reserved &copy;\r\n    </p>\r\n  </div>\r\n</footer>', 1),
(2, 'portfolio', '<div class=\"portfolio wrapper\">\r\n  <h1 class=\"portfolio__title\">portfolio</h1>\r\n\r\n  <div class=\"portfolio__gallery\">\r\n    <div class=\"portfolio__galleryItem\">\r\n      <img src=\"./img/port1.jpg\" alt=\"\" class=\"portfolio__galleryItemImage\">\r\n    </div>\r\n\r\n    <div class=\"portfolio__galleryItem\">\r\n      <img src=\"./img/port2.jpg\" alt=\"\" class=\"portfolio__galleryItemImage\">\r\n    </div>\r\n\r\n    <div class=\"portfolio__galleryItem\">\r\n      <img src=\"./img/port3.jpg\" alt=\"\" class=\"portfolio__galleryItemImage\">\r\n    </div>\r\n\r\n    <div class=\"portfolio__galleryItem\">\r\n      <img src=\"./img/port4.jpg\" alt=\"\" class=\"portfolio__galleryItemImage\">\r\n    </div>\r\n\r\n    <div class=\"portfolio__galleryItem\">\r\n      <img src=\"./img/port5.jpg\" alt=\"\" class=\"portfolio__galleryItemImage\">\r\n    </div>\r\n\r\n    <div class=\"portfolio__galleryItem\">\r\n      <img src=\"./img/port6.jpg\" alt=\"\" class=\"portfolio__galleryItemImage\">\r\n    </div>\r\n\r\n    <div class=\"portfolio__galleryItem\">\r\n      <img src=\"./img/port7.jpg\" alt=\"\" class=\"portfolio__galleryItemImage\">\r\n    </div>\r\n\r\n    <div class=\"portfolio__galleryItem\">\r\n      <img src=\"./img/port8.jpg\" alt=\"\" class=\"portfolio__galleryItemImage\">\r\n    </div>\r\n\r\n    <div class=\"portfolio__galleryItem\">\r\n      <img src=\"./img/port9.jpg\" alt=\"\" class=\"portfolio__galleryItemImage\">\r\n    </div>\r\n\r\n    <div class=\"portfolio__galleryItem\">\r\n      <img src=\"./img/port10.jpg\" alt=\"\" class=\"portfolio__galleryItemImage\">\r\n    </div>\r\n\r\n    <div class=\"portfolio__galleryItem\">\r\n      <img src=\"./img/port11.jpg\" alt=\"\" class=\"portfolio__galleryItemImage\">\r\n    </div>\r\n  </div>\r\n\r\n\r\n</div>\r\n\r\n<div class=\"footer\">\r\n  <div class=\"clock\">\r\n    <div id=\"zegarek\"></div>\r\n    <div id=\"data\"></div>\r\n  </div>\r\n  <div class=\"wrapper\">\r\n    <p class=\"footer__text\">\r\n      All rights reserved &copy;\r\n    </p>\r\n  </div>\r\n</div>', 1),
(3, 'uslugi', '<div class=\"wrapper uslugi\">\r\n  <h1 class=\"uslugi__title\">Oferowane przeze mnie uslugi</h1>\r\n  <ul class=\"uslugi__list\">\r\n    <li class=\"uslugi__usluga clearfix\">\r\n      <h2 class=\"uslugi__uslugaTitle\">wypożyczanie sprzętu</h2>\r\n      <img class=\"uslugi__uslugaImage\" src=\"./img/gear600300.jpg\" alt=\"\">\r\n      <p class=\"uslugi__uslugaText\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi dolorem iure ea\r\n        reprehenderit totam? Fugit deleniti veritatis optio culpa ducimus adipisci repellendus minus architecto\r\n        possimus aut, minima blanditiis corrupti, assumenda ea tempora enim perspiciatis. Totam, excepturi neque.</p>\r\n    </li>\r\n    <li class=\"uslugi__usluga clearfix\">\r\n      <h2 class=\"uslugi__uslugaTitle\">sesja plenerowa</h2>\r\n      <img class=\"uslugi__uslugaImage\" src=\"./img/forest600300.jpg\" alt=\"\">\r\n      <p class=\"uslugi__uslugaText\">Jeśli masz pomysł na sesje lub potrzebujesz zdjęć plenerowych, jestem pewien,\r\n        że pomogę Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ab hic consequatur excepturi\r\n        maxime voluptas similique mollitia neque accusamus possimus.</p>\r\n    </li>\r\n    <li class=\"uslugi__usluga clearfix\">\r\n      <h2 class=\"uslugi__uslugaTitle\">reportaż slubny</h2>\r\n      <img class=\"uslugi__uslugaImage\" src=\"./img/weding600300.jpg\" alt=\"\">\r\n      <p class=\"uslugi__uslugaText\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique nulla quod\r\n        eligendi? Eveniet, exercitationem? Incidunt totam facilis excepturi amet voluptatum cumque sit atque vitae\r\n        dolores ipsa minus explicabo animi, expedita quos repudiandae? Possimus, impedit explicabo? Ullam quos\r\n        eligendi dignissimos necessitatibus numquam vero deserunt repellat praesentium aperiam autem, nulla provident\r\n        aliquid!</p>\r\n    </li>\r\n    <li class=\"uslugi__usluga clearfix\">\r\n      <h2 class=\"uslugi__uslugaTitle\">sesja miejska</h2>\r\n      <img src=\"./img/city600300.jpg\" alt=\"\" class=\"uslugi__uslugaImage uslugi__uslugaImage--city\">\r\n      <h3 class=\"uslugi__uslugaSubtitle\">Możliwość zrealizowania sesji w:</h3>\r\n      <ul class=\"uslugi__uslugaList\">\r\n        <li class=\"uslugi__uslugaListItem\">Olsztyn</li>\r\n        <li class=\"uslugi__uslugaListItem\">Łomża</li>\r\n        <li class=\"uslugi__uslugaListItem\">Warszawa</li>\r\n        <li class=\"uslugi__uslugaListItem\">Wrocław</li>\r\n        <li class=\"uslugi__uslugaListItem\">Poznań</li>\r\n      </ul>\r\n    </li>\r\n\r\n  </ul>\r\n</div>\r\n\r\n<div class=\"footer\">\r\n  <div class=\"clock\">\r\n    <div id=\"zegarek\"></div>\r\n    <div id=\"data\"></div>\r\n  </div>\r\n  <div class=\"wrapper\">\r\n    <p class=\"footer__text\">\r\n      All rights reserved &copy;\r\n    </p>\r\n  </div>\r\n</div>', 1),
(4, 'sprzet', '<div class=\"gear wrapper\">\r\n\r\n  <section class=\"gear__product\">\r\n    <div class=\"gear__productImgContainer\">\r\n      <img src=\"./img/m50.png\" alt=\"\" class=\"gear__productImg\">\r\n    </div>\r\n    <div class=\"gear__productDesc\">\r\n      <h1 class=\"gear__productDescTitle\">Canon EOS m50</h1>\r\n      <p class=\"gear__productDescText\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa deserunt eum sit\r\n        voluptates dignissimos doloremque quaerat officiis esse illum consequatur.</p>\r\n    </div>\r\n  </section>\r\n\r\n  <section class=\"gear__product\">\r\n    <div class=\"gear__productImgContainer\">\r\n      <img src=\"./img/sigma30.png\" alt=\"\" class=\"gear__productImg\">\r\n    </div>\r\n    <div class=\"gear__productDesc\">\r\n      <h1 class=\"gear__productDescTitle\">Sigma C 30mm f/1.4</h1>\r\n      <p class=\"gear__productDescText\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, debitis.</p>\r\n      <p class=\"gear__productDescText\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, facilis\r\n        reiciendis repellendus quidem iusto pariatur?</p>\r\n    </div>\r\n  </section>\r\n\r\n  <section class=\"gear__product\">\r\n    <div class=\"gear__productImgContainer\">\r\n      <img src=\"./img/sigma100400.png\" alt=\"\" class=\"gear__productImg\">\r\n    </div>\r\n    <div class=\"gear__productDesc\">\r\n      <h1 class=\"gear__productDescTitle\">Sigma C 100-400m f/5-6.3</h1>\r\n      <p class=\"gear__productDescText\">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero vel numquam\r\n        minima quam laboriosam nisi ad assumenda eligendi sint harum fugit enim, laudantium iure maxime nihil\r\n        doloremque exercitationem itaque quisquam. Est dolores cum dolor nostrum temporibus incidunt exercitationem,\r\n        et eum porro debitis at illo. Sapiente, eaque?</p>\r\n    </div>\r\n  </section>\r\n\r\n\r\n\r\n</div>\r\n\r\n<div class=\"footer\">\r\n  <div class=\"clock\">\r\n    <div id=\"zegarek\"></div>\r\n    <div id=\"data\"></div>\r\n  </div>\r\n  <div class=\"wrapper\">\r\n    <p class=\"footer__text\">\r\n      All rights reserved &copy;\r\n    </p>\r\n  </div>\r\n</div>', 1),
(5, 'kontakt', '<div class=\"contact wrapper\">\r\n  <FORM class=\'contact__buttons\' METHOD=\"POST\" NAME=\"background\">\r\n    <INPUT class=\'contact__btn contact__btn--yellow\' TYPE=\"button\" VALUE=\"żółty\" ONCLICK=\"changeBackground(\'#FFF000\')\">\r\n    <INPUT class=\'contact__btn contact__btn--black\' TYPE=\"button\" VALUE=\"czarny\" ONCLICK=\"changeBackground(\'#000000\')\">\r\n    <INPUT class=\'contact__btn contact__btn--white\' TYPE=\"button\" VALUE=\"biały\" ONCLICK=\"changeBackground(\'#FFFFFF\')\">\r\n    <INPUT class=\'contact__btn contact__btn--green\' TYPE=\"button\" VALUE=\"zielony\" ONCLICK=\"changeBackground(\'#00FF00\')\">\r\n    <INPUT class=\'contact__btn contact__btn--blue\' TYPE=\"button\" VALUE=\"niebieski\"\r\n      ONCLICK=\"changeBackground(\'#0000FF\')\">\r\n    <INPUT class=\'contact__btn contact__btn--orange\' TYPE=\"button\" VALUE=\"pomarańczowy\"\r\n      ONCLICK=\"changeBackground(\'#FF8000\')\">\r\n    <INPUT class=\'contact__btn contact__btn--gray\' TYPE=\"button\" VALUE=\"szary\" ONCLICK=\"changeBackground(\'#c0c0c0\')\">\r\n    <INPUT class=\'contact__btn contact__btn--red\' TYPE=\"button\" VALUE=\"czerwony\" ONCLICK=\"changeBackground(\'#FF0000\')\">\r\n  </FORM>\r\n\r\n  <div class=\"contact__info\">\r\n    <p class=\"contact__data\">Email: <a href=\"mailto:achojnowski00@gmail.com\">achojnowski00@gmail.com</a></p>\r\n\r\n    <p class=\"contact__data\">\r\n      Tel.: 346793479\r\n    </p>\r\n  </div>\r\n\r\n  <form class=\'sendMail\' action=\"\" method=\"post\">\r\n    <h1 class=\"sendMail__heading\">SKONTAKTUJ SIĘ ZE MNĄ</h1>\r\n    <input class=\"sender inputbox\" name=\"sender\" type=\"text\" placeholder=\"Twój adres email\" required>\r\n    <textarea class=\"content inputbox inputarea\" name=\"content\" placeholder=\"Treść maila\" rows=\"10\" required></textarea>\r\n    <button class=\"submitbutton\" name=\"sendMail\" type=\"submit\" href=\"/\">WYSLIJ</button>\r\n  </form>\r\n</div>', 1),
(6, 'lab3', '<h1 class=\"heading\">animacje na blokach</h1>\r\n\r\n<div class=\"blocksContainer\">\r\n  <div class=\"block\" id=\"animacjaTestowa1\">Kliknij, a zrobię się większy</div>\r\n  <div class=\"block\" id=\"animacjaTestowa2\">Najedz na mnie, powiększę się</div>\r\n  <div class=\"block\" id=\"animacjaTestowa3\">Kliknij, a urosnę</div>\r\n</div>\r\n\r\n<script>\r\n  $(\"#animacjaTestowa1\").on(\"click\", function () {\r\n    $(this).animate({\r\n      width: \"500px\",\r\n      opacity: 0.4,\r\n      fontSize: \"3em\",\r\n      borderWidth: \"10px\"\r\n    }, 1500);\r\n  });\r\n\r\n  $(\"#animacjaTestowa2\").on({\r\n    \"mouseover\": function () {\r\n      $(this).animate({\r\n        width: 300\r\n      }, 800);\r\n    },\r\n    \"mouseout\": function () {\r\n      $(this).animate({\r\n        width: 200\r\n      }, 800);\r\n    }\r\n  });\r\n\r\n  $(\"#animacjaTestowa3\").on(\"click\", function () {\r\n    if (!$(this).is(\":animated\")) {\r\n      $(this).animate({\r\n        width: \"+=\" + 50,\r\n        height: \"+=\" + 10,\r\n        opacity: \"-=\" + 0.1,\r\n        duration: 3000\r\n      });\r\n    }\r\n  });\r\n</script>', 1),
(7, 'main', '<div class=\"mainpage\">\r\n  <div class=\"about\">\r\n    <h1 class=\"about__name\">Alex Chojnowski</h1>\r\n    <h2 class=\"about__myHobby\">Moje hobby to fotografia</h2>\r\n  </div>\r\n</div>', 1),
(8, 'logowanie', '<div class=\"logowanie\">\r\n  <h1 class=\"heading_logowanie\">Panel CMS:</h1>\r\n  <div class=\"logowanie\">\r\n    <form method=\"post\" name=\"LoginForm\" enctype=\"multipart/form-data\" action=\'.$_SERVER[\' REQUEST_URI\'].\' \">\r\n    <table class=\" logowanie\">\r\n      <tr>\r\n        <td class=\"1log4 t\">LOGIN </td>\r\n        <td><input type=\"text\" name=\"login_email\" class=\"logowanie\" /></td>\r\n      </tr>\r\n      <tr>\r\n        <td class=\"log4_t\">HASLO </td>\r\n        <td><input type=\"password\" name=\"login_pass\" class=\"logowanie\" /></td>\r\n      </tr>\r\n      <tr>\r\n        <td>&nbsp; </td>\r\n        <td><input type=\"submit\" name=\"x1_submit\" class=\"logowanie\" value=\"zaloguj\" /></td>\r\n      </tr>\r\n      </table>\r\n    </form>\r\n  </div>\r\n</div>', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(48) NOT NULL,
  `passwd` varchar(48) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `passwd`) VALUES
(1, 'root', 'root');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `page_list`
--
ALTER TABLE `page_list`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT dla tabeli `page_list`
--
ALTER TABLE `page_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
