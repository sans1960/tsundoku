-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Temps de generació: 19-04-2024 a les 16:10:51
-- Versió del servidor: 10.11.7-MariaDB-cll-lve
-- Versió de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `u106888451_tsundoku`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `actes`
--

CREATE TABLE `actes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titol` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `hora` varchar(191) NOT NULL,
  `url` varchar(191) NOT NULL,
  `body` text NOT NULL,
  `data` date NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lloc` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `actes`
--

INSERT INTO `actes` (`id`, `titol`, `slug`, `image`, `hora`, `url`, `body`, `data`, `active`, `user_id`, `created_at`, `updated_at`, `lloc`) VALUES
(1, 'Riudelletres', 'riudelletres', 'images/actes/n5qVjxe8FneUBZihhOWHLEtSZzVsOmI14QSRThz1.jpg', '12:00', 'http://riudelletres.cat/', '<p><strong>Dissabte 30 de setembre &ndash; Diumenge 1 d&rsquo;octubre</strong>&nbsp;&ndash; SANT PERE DE RIUDEBITLLES (ALT PENED&Egrave;S)</p>\r\n<p>Com sempre, des del Riudelletres no en tenim mai prou i, per aquest motiu, l&rsquo;edici&oacute; 2023 de la trobada anual per a la promoci&oacute; de la literatura comptar&agrave; amb una de les novetats m&eacute;s importants amb qu&egrave; ens hem complicat la vida els darrers temps. Es tracta de la&nbsp;<strong>primera fira de llibres</strong>&nbsp;de la nostra hist&ograve;ria. Per aquest motiu, convidem a llibreries, editorials i entitats a participar amb les seves parades a l&rsquo;edici&oacute; 2023 del Riudelletres.</p>\r\n<p>Aquest any, doncs, a part de participar en les xerrades i taules rodones, els visitants podran triar i remenar entre les parades de llibres. Sabem que &eacute;s un repte important i que aix&ograve; suposa un salt qualitatiu i quantitatiu en els nostres reptes organitzatius, per&ograve; tamb&eacute; sabem que el sector necessita aquest tipus d&rsquo;esdeveniments per al seu manteniment.</p>', '2023-10-10', 1, 12, '2023-10-03 05:16:06', '2023-10-03 05:18:28', NULL),
(3, 'Presentació del llibre \"Classes socials i burocràcia\" de A. Bakunin', 'presentacio-del-llibre-classes-socials-i-burocracia-de-a-bakunin', 'images/actes/Dq0ahbL2YgtOznTLSowqHWcLPEtL3ZxIY0rWHivb.jpg', '19:00', 'https://www.facebook.com/RestaurantAnonims', '<div>\r\n<div class=\"gmail_default\"><strong>El Centre d&rsquo;Estudis Sindicals i Llibertaris</strong> presenta el dimecres 17 d\'abril al restaurant-llibreria An&ograve;nims de Granollers la seva primera publicaci&oacute;.</div>\r\n<p>Es tracta d\'una traducci&oacute; al catal&agrave; d&rsquo;un text de&nbsp;Felipe&nbsp;C&ocirc;rrea&nbsp;sobre la teoria de les classes socials en el pensament de Bakunin.</p>\r\n<p>Mija&iacute;l Bakunin&nbsp;(1814-1876) va ser un revolucionari rus i anarquista que va participar activament en el cicle de revolucions a l\'Europa de 1848 i, despr&eacute;s d\'anys de pres&oacute; i exili, va tenir un paper decisiu en la conformaci&oacute; de l&rsquo;anarquisme en el si de la I Internacional i inspiraci&oacute; del futur anarcosindicalisme al nostre pa&iacute;s.<span class=\"gmail_default\">&nbsp;</span>El text que presenta el Centre d&rsquo;Estudis fa una lectura del pensament i<span class=\"gmail_default\">&nbsp;</span>l&rsquo;acci&oacute;&nbsp;de Bakunin sobre<span class=\"gmail_default\">&nbsp;</span>&nbsp;l&rsquo;estructura&nbsp;de les classes socials i, en especial, de la burocr&agrave;cia de<span class=\"gmail_default\">&nbsp;</span>&nbsp;l&rsquo;Estat<span class=\"gmail_default\">&nbsp;</span>modern que continua essent d&rsquo;inter&egrave;s en ple segle XXI.</p>\r\n<p>Felipe&nbsp;C&ocirc;rrea, autor del text, &eacute;s un militant anarquista del Brasil que fa anys que est&agrave; dedicat a l&rsquo;estudi de la teoria i hist&ograve;ria anarquista des de l&rsquo;Institut de Teoria i Hist&ograve;ria Anarquista (ITHA).</p>\r\n<p>El Centre d&rsquo;Estudis presenta aix&iacute; la seva primera publicaci&oacute; des de la seva creaci&oacute; fa uns mesos. Us hi esperem!</p>\r\n</div>', '2024-04-17', 1, 11, '2024-04-13 13:48:33', '2024-04-13 13:48:33', NULL),
(4, 'Presentació del llibre \"Els escrits tardans de Marx. Conceptes de canvi revolucionari i d\'alternatives al capitalisme\", amb Kevin B. Anderson, autor del llibre', 'presentacio-del-llibre-els-escrits-tardans-de-marx-conceptes-de-canvi-revolucionari-i-dalternatives-al-capitalisme-amb-kevin-b-anderson-autor-del-llibre', 'images/actes/FNZjHo2rnT29aBhqOYa5LHiQgBY9fEJ8NtY9LARp.jpg', '18:00', 'https://www.facebook.com/RestaurantAnonims', '<div dir=\"auto\">A trav&eacute;s de lectures molt informades d\'obres que van des dels quaderns in&egrave;dits de Marx de 1879-1882 fins als seus escrits apassionats sobre la causa antiesclavista als Estats Units, Marx als marges ofereix una visi&oacute; innovadora i que canvia el c&agrave;non sobre Karl Marx. En lloc de presentar-lo com un pensador que nom&eacute;s escriu sobre la classe, Kevin B. Anderson ofereix un retrat de Marx per al segle XXI: un te&ograve;ric global la cr&iacute;tica del qual era sensible a les varietats del desenvolupament social i hist&ograve;ric de l\'&eacute;sser hum&agrave;, incloent-hi el nacionalisme , la ra&ccedil;a i l\'&egrave;tnia. Aquest cl&agrave;ssic ens permet recuperar el Marx m&eacute;s descolonitzat i menys euroc&egrave;ntric.</div>\r\n<div dir=\"auto\">Kevin B. Anderson.&Eacute;s catedr&agrave;tic distingit de Sociologia a la Universitat de Calif&ograve;rnia, Santa B&agrave;rbara, amb nomenaments de cortesia a Estudis Feministes i Ci&egrave;ncies Pol&iacute;tiques. &Eacute;s autor de Lenin, Hegel, Western Marxism (1995), Foucault i Iranian Revolution (amb Janet Afary, 2005), i Marx als Marges (2010). Entre els seus volums editats hi ha el Rosa Luxemburg Reader (amb Peter Hudis, 2004) i la Dunayevskaya-Marcuse-Fromm Correspondence (amb Russell Rockwell, 2012). Escriu regularment per a New Politics , The International Marxist-Humanist i Jacobin sobre marxisme i sobre pol&iacute;tica internacional i moviments radicals a &Agrave;frica, Europa i Orient Mitj&agrave;.</div>', '2024-04-13', 1, 11, '2024-04-13 13:53:17', '2024-04-13 13:54:58', NULL),
(5, 'Presentació del llibre Sota el xal, de Núria Armengol Segura i Tessa Julià Dinarès', 'presentacio-del-llibre-sota-el-xal-de-nuria-armengol-segura-i-tessa-julia-dinares', 'images/actes/t0mRJRg7kCKMRjJdX9DJCzp7Uwn0UbkyTuHLCfMn.jpg', '19:30', 'https://bibliotecavirtual.diba.cat/garriga-la-biblioteca-nuria-albo', '<p>Presentaci&oacute; a c&agrave;rrec de Josep Giralt i amb la col&middot;laboraci&oacute; de la llibreria Strogoff a la biblioteca N&uacute;ria Alb&ograve;.&nbsp;</p>\r\n<p>C/Centre , 49. 08530. La Garriga</p>', '2024-04-18', 1, 11, '2024-04-14 11:41:09', '2024-04-14 11:41:09', NULL),
(6, 'Presentació “La catalana llengua” d’Elisenda Pineda i KAP', 'presentacio-la-catalana-llengua-delisenda-pineda-i-kap', 'images/actes/uzH4nC8aaxZQzSxPjuEyng0KzG8I1CbmHD3bDnyy.jpg', '12:00', 'https://www.arallibres.cat/esdeveniment/presentacio-la-catalana-llengua-delisenda-pineda-i-kap-2/', '<header class=\"entry-header\">\r\n<p class=\"subtitol\">Premi&agrave; de Mar. PATRONAT SOCIAL PREMIANENC, C/ de Reverend Josep Paradeda, 26.</p>\r\n</header>\r\n<div class=\"entry-content\">Conversa amb Elisenda Pineda, autora i KAP, autor de les il&middot;lustracions amb Xavier Tra&iuml;d G&agrave;llego.</div>', '2024-04-20', 1, 11, '2024-04-14 12:42:56', '2024-04-14 12:42:56', NULL),
(7, 'Presentació de \'La casa tapiada\', de Julià de Jòdar', 'presentacio-de-la-casa-tapiada-de-julia-de-jodar', 'images/actes/sUj6DMjc1VFk1GA36lu3RKH39pD6mSXRCJzaahwt.png', '19:00', 'https://comanegra.com/ca/event/205_presentacio-la-casa-tapiada-de-julia-de-jodar/', '<p>A c&agrave;rrec de l\'autor del llibre,<strong>&nbsp;Juli&agrave; de J&ograve;dar,&nbsp;</strong>i acompanyat per&nbsp;<strong>Josep Maria Llur&oacute;&nbsp;</strong>i<strong>&nbsp;Jaume C</strong>.&nbsp;<strong>Pons Alorda</strong>.</p>\r\n<p>Presenten la quarta entrega de&nbsp;<a href=\"https://comanegra.com/ca/ficcio/737-atzar-ombres-julia-jodar.html\" target=\"_blank\" rel=\"noopener\"><em>L\'Atzar i les ombres</em></a>:&nbsp;<em><strong>La casa tapiada</strong>.</em></p>\r\n<p><strong>De qu&egrave; tracta?</strong></p>\r\n<p>El cicle protagonitzat per Gabriel Caballero continua amb aquesta quarta entrega, que abarca de 1962 a 1977. Vet aqu&iacute; la presumpta biografia de Caballero a mans del senyor Lotari, trenada amb centenars de veus (algunes d&rsquo;an&ograve;nimes i moltes de ben p&uacute;bliques) que despullen i escabetxen sense pietat tant l&rsquo;home concret com totes les cares i caretes de l&rsquo;antifranquisme dels seixanta i setanta.</p>\r\n<p><strong>QUAN:</strong>&nbsp;Dijous 25 d\'abril a les 19 h.&nbsp;<br><strong>ON:</strong>&nbsp;Al Festival Vilapensa - Museu Vinseum (Pla&ccedil;a de Jaume I, 1, 08720 Vilafranca del Pened&egrave;s).</p>', '2024-04-25', 1, 11, '2024-04-14 12:45:55', '2024-04-14 12:45:55', NULL),
(8, 'Sant Jordi a l\'Ateneu Zitzània', 'sant-jordi-a-lateneu-zitzania', 'images/actes/lClynASmCctzORcsxr7YbgvPNL2CAYfFnHXYN066.jpg', '18:30', 'https://twitter.com/AteneuZitzania/status/1779851114495574270', '<p><span class=\"css-1qaijid r-bcqeeo r-qvutc0 r-poiln3\">Dimarts 23 d\'abril, de 10h a 20h, trobareu la paradeta de llibres amb les nostres editorials de cap&ccedil;alera, davant l\'Ateneu&nbsp;</span></p>\r\n<p><span class=\"css-1qaijid r-bcqeeo r-qvutc0 r-poiln3\">18.30h Presentaci&oacute; del llibre \"La llibertat contra el dest&iacute;\" amb Nebon Babou Bassono.</span></p>', '2024-04-23', 1, 11, '2024-04-18 19:14:13', '2024-04-18 19:14:13', 'Carrer de la Muntanya, 96, Sant Martí, 08026 Barcelona');

-- --------------------------------------------------------

--
-- Estructura de la taula `autors`
--

CREATE TABLE `autors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `autor_nom` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `biopic` text NOT NULL,
  `url_foto` text DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `web` varchar(191) DEFAULT NULL,
  `facebook` varchar(191) DEFAULT NULL,
  `instagram` varchar(191) DEFAULT NULL,
  `twitter` varchar(191) DEFAULT NULL,
  `auto` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `autors`
--

INSERT INTO `autors` (`id`, `autor_nom`, `slug`, `biopic`, `url_foto`, `active`, `user_id`, `created_at`, `updated_at`, `image`, `web`, `facebook`, `instagram`, `twitter`, `auto`) VALUES
(1, 'Edgar Allan Poe', 'edgar-allan-poe', '<p><span style=\"font-size: 14pt;\">Edgar Allan Poe (Boston, 1809 ‒ Baltimore, 1849) &eacute;s considerat un dels grans escriptors nord-americans del per&iacute;ode rom&agrave;ntic</span>.</p>\r\n<p>Mestre del relat curt, amb contes tan famosos com &laquo;The Black Cat&raquo;, &laquo;The Murders in the Rue Morgue&raquo; o &laquo;The Fall of the House of Usher&raquo;, Poe tamb&eacute; va escriure una novel&middot;la (The Narrative of Arthur Gordon Pym of Nantucket), conre&agrave; de manera reeixida la poesia i &mdash;fet no tan conegut pel gran p&uacute;blic&mdash; es prodig&agrave; for&ccedil;a en l&rsquo;assaig, amb t&iacute;tols tan celebrats com The Philosophy of Composition, The Poetic Principle o l&rsquo;inclassificable i captivador Eureka, que ara presentem en traducci&oacute; catalana.</p>', NULL, 1, 1, '2023-07-14 06:13:36', '2024-04-13 15:56:05', 'images/autors/KVtO7gWdGtBOb3S47Fze62YUNL2iHemG6Ccik8J3.jpg', NULL, NULL, NULL, NULL, 0),
(2, 'Teresa Pàmies', 'teresa-pamies', '<p>(Balaguer, 8 d&rsquo;octubre de 1919 - Granada, 13 de mar&ccedil; de 2012) Escriptora catalana guardonada amb les m&agrave;ximes condecoracions de la literatura i cultura catalanes.<br>El 1984, la Generalitat de Catalunya li va concedir la Creu de Sant Jordi, el 1997, va rebre la Medalla d&rsquo;Honor de Barcelona, el 2001, el Premi d&rsquo;Honor de les Lletres Catalanes, la m&agrave;xima distinci&oacute; liter&agrave;ria en catal&agrave;, i el 2006, el Premi Manuel V&aacute;zquez Montalb&aacute;n.<br>La seva obra &eacute;s extensa i d&rsquo;un car&agrave;cter autobiogr&agrave;fic. El 1937 ingressa a les Joventuts Socialistes Unificades de Catalunya (jsuc), de la direcci&oacute; de les quals forma part durant la Guerra Civil. Despr&eacute;s de la guerra s&rsquo;exilia, primer a Fran&ccedil;a i m&eacute;s tard a Cuba, la Rep&uacute;blica Dominicana, M&egrave;xic, Iugosl&agrave;via i Txecoslov&agrave;quia.<br>Des de l&rsquo;exili col&middot;labora amb diferents revistes catalanes com Serra d&rsquo;Or. El 1971 torna de l&rsquo;exili i es dedica a la literatura i al periodisme fins la seva mort.</p>', NULL, 1, 1, '2023-07-17 05:16:12', '2024-04-13 15:56:20', 'images/autors/ZZqC5QkNFsVzGY7sg6a5KEAujHDMkVEcZfKt6FPk.jpg', NULL, NULL, NULL, NULL, 0),
(3, 'Àlex Matas Pons', 'alex-matas-pons', '<p>&Agrave;lex Matas Pons (Barcelona, 1975), fa classes de Teoria de la Literatura i Literatura Comparada a la Universitat de Barcelona i a la Universitat Oberta de Catalunya. Forma part del Grup de Recerca de Literatura Comparada en l&rsquo;Espai Intel&middot;lectual Europeu i col&middot;labora en els seminaris sobre hist&ograve;ria intel&middot;lectual i cultura urbana que organitza el Museu d&rsquo;Hist&ograve;ria de la Ciutat de Barcelona (MUHBA). L&rsquo;any 2010 va publicar l&rsquo;assaig La Ciudad y su trama (Lengua de Trapo) i el 2017, En falso. Una cr&iacute;tica cultural del siglo XX (Pre-Textos). Entre altres revistes, ha publicat articles a L&rsquo;Espill, Afers, Literatures, Comp&agrave;s d&rsquo;Amalgama, Catalan Review i Mirmanda.</p>', 'https://imatges.vilaweb.cat/nacional/wp-content/uploads/2020/10/IMG_0774-31133050-1024x768.jpg', 1, 1, '2023-07-24 06:18:22', '2024-04-14 07:30:42', NULL, NULL, NULL, NULL, NULL, 0),
(4, 'Ferran Sáez Mateu', 'ferran-saez-mateu', '<p>(la Granja d\'Escarp, Segri&agrave;, 1964) &eacute;s doctor en Filosofia i exerceix la doc&egrave;ncia a la Universitat Ramon Llull. Ha publicat una quarantena de llibres, aix&iacute; com centenars d\'articles. Ha col&middot;laborat amb els diaris Ara, La Vanguardia i El Punt Avui, entre altres mitjans de comunicaci&oacute;. La seva obra assag&iacute;stica ha merescut els premis Joan Fuster, Josep Vallverd&uacute;, Pere Calders i Carles Rahola. La seva obra narrativa inclou les novel&middot;les Vides improbables (2010), Les ombres errants (2012) i La nit contra tu (2016).</p>', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/FerranSM.jpg/800px-FerranSM.jpg', 1, 1, '2023-07-24 06:21:06', '2024-04-13 15:56:45', NULL, NULL, NULL, NULL, NULL, 0),
(5, 'Ivan Vera', 'ivan-vera', '<p>Vaig n&eacute;ixer a Badalona l&rsquo;any 1998, per&ograve; la ciutat que m&rsquo;ha vist cr&eacute;ixer &eacute;s Banyoles; sempre m&rsquo;han inspirat les aig&uuml;es calmades de l&rsquo;estany i la verdor dels boscos que l&rsquo;envolten. Des de ben petit he tingut dues grans passions, la lectura i els videojocs, i crec que totes dues han deixat molta empremta en la gestaci&oacute; de les hist&ograve;ries que componia, primer en forma de dibuixos i despr&eacute;s per escrit. Amb deu anys vaig descobrir El Senyor dels Anells i, des d&rsquo;aleshores, Tolkien va esdevenir el meu principal model creatiu. Per&ograve;, a m&eacute;s d&rsquo;obres fant&agrave;stiques, tamb&eacute; n&rsquo;he llegit moltes d&rsquo;hist&ograve;riques i, m&eacute;s recentment, en el proc&eacute;s de convertir-me en fil&ograve;leg, li he trobat el gust a la literatura catalana medieval.</p>', 'https://akiarabooks.com/wp-content/uploads/2021/02/Ivan-Vera-web-500x500.jpg', 1, 1, '2023-07-24 07:33:20', '2024-04-13 15:56:57', NULL, NULL, NULL, NULL, NULL, 0),
(6, 'Terry Pratchett', 'terry-pratchett', '<p>(Sir Terence David John Pratchett) &eacute;s el celebrat creador de la s&egrave;rie del Discm&oacute;n, un fenomen de vendes global, que va comen&ccedil;ar el 1983 amb la publicaci&oacute; d&rsquo;El color de la m&agrave;gia. En total, &eacute;s autor de m&eacute;s de setanta llibres. Les seves novel&middot;les han estat adaptades als escenaris i a les pantalles, i ha guanyat multitud de premis en el transcurs de la seva carrera, inclosa la Medalla Carnegie, a m&eacute;s de ser nomenat cavaller pels seus serveis a la literatura. Les vendes a tot el m&oacute;n dels seus llibres se situen en aquests moments pels volts dels 90 milions d&rsquo;exemplars (per&ograve; tampoc &eacute;s que ning&uacute; es dediqui a comptar-los), i s&rsquo;han publicat en quaranta-una lleng&uuml;es. Ara, quaranta-dues. Nascut a Anglaterra el 1948, va morir el 2015, per&ograve; una gran legi&oacute; de seguidors no permet que el llegat de Pratchett caigui en l&rsquo;oblit i, any rere any, celebren l&rsquo;obra del seu autor favorit inundant les xarxes amb el hashtag #SpeakHisName.</p>', 'https://www.maimes.cat/wp-content/uploads/2020/11/Terry-Pratchett-please-credit-Rob-Wilkins-BN.jpg', 1, 1, '2023-08-02 05:58:43', '2023-08-02 05:58:43', NULL, NULL, NULL, NULL, NULL, 0),
(7, 'Otessa Moshfegh', 'otessa-moshfegh', '<p>Nascuda a Boston el 1981, col&middot;labora a la revista The Paris Review, on ha publicat els relats amb qu&egrave; va guanyar el Plimpton Prize (2014). El 2015 va publicar la seva primera novel&middot;la, My name is Eileen, aclamada per la cr&iacute;tica, guanyadora del premi Pen/ Hemingway al millor debut literari i nominada al Man Booker Prize. El meu any de rep&ograve;s i relaxaci&oacute; l&rsquo;ha consagrat com una de les autores m&eacute;s interessants del segle XXI.</p>', NULL, 1, 1, '2023-08-02 06:10:49', '2023-08-02 06:10:49', 'images/autors/l2qw5bf80QsEqWl7xoj8wUIvnilEqExtl3VmGZI9.jpg', NULL, NULL, NULL, NULL, 0),
(8, 'Roc Casagran', 'roc-casagran', '<p>Roc Casagran Casa&ntilde;as (Sabadell, 1980) &eacute;s llicenciat en Teoria de la Literatura i Literatura Comparada i treballa de professor de llengua i literatura catalana a secund&agrave;ria. Va ser membre del consell de redacci&oacute; de la revista sociocultural Ordint la Trama durant els vuit anys de la seva exist&egrave;ncia (2001-2009) i de tant en tant fa recitals de poesia arreu del pa&iacute;s.&Eacute;s l\'autor de la novel&middot;la Austr&agrave;lia (Columna, Premi Pin i Soler 2007) i coautor juntament amb Oleguer Presas de Cam&iacute; d\'&Iacute;taca (Mina, 2006). Tamb&eacute; va participar a l\'antologia Veus de la nova narrativa catalana (Emp&uacute;ries, 2010). Ha publicat els poemaris Els carrers de les f&agrave;briques (Premi Mart&iacute; Dot, 2001), Despr&eacute;s de Sarajevo (Premi Miquel &Agrave;ngel Riera, 2005) i Tr&egrave;nnicament trenificats (2005) i ben aviat veur&agrave; la llum el poemari L\'ombra queixalada (Premi Parc Taul&iacute; 2010).Cada quinze dies escriu un article al seu bloc (http://in.directe.cat/roc-casagran) i piula sovint al Twitter (@roccasagran).&nbsp;</p>', NULL, 1, 1, '2023-08-02 06:27:16', '2023-08-09 07:19:21', 'images/autors/Hzq5rtgo65veN4b4AadqRM40QB1RiWerFLGBNqoO.jpg', NULL, 'https://www.facebook.com/roc.casagran/?locale=ca_ES', NULL, NULL, 0),
(9, 'Juana Dolores Romero Casanova', 'juana-dolores-romero-casanova', '<p>(el Prat de Llobregat 1992) &eacute;s filla d&rsquo;immigrants andalusos a Catalunya. Estudia interpretaci&oacute; a l&rsquo;Escola Superior d&rsquo;Art Dram&agrave;tic de l&rsquo;Institut del Teatre i, posteriorment, inicia estudis literaris a la Universitat de Barcelona. &Eacute;s fundadora i coordinadora del projecte cibern&egrave;tic @HYBRIS.VIRAL en qu&egrave;, juntament amb l&rsquo;artista Sandy Moldavia, desenvolupa pr&agrave;ctiques curatorials. La seva obra est&agrave; travessada per la investigaci&oacute; de les po&egrave;tiques de l&rsquo;acci&oacute; i les performativitats del discurs a trav&eacute;s de la tensi&oacute; entre les ideologies i la bellesa. Ha dirigit, interpretat i escrit # J U A N A D O L O R E S # * massa diva per a un moviment assembleari * (2019) i * HIT ME IF I&rsquo;M PRETTY * o Vladimir Maiakovski es va su&iuml;cidar per amor (2020). Tamb&eacute; reflexiona sobre els l&iacute;mits del v&iacute;deo i la poesia, com es pot apreciar a la seva &uacute;ltima pe&ccedil;a audiovisual LIMPIEZA (2020).</p>', NULL, 1, 1, '2023-08-08 17:34:58', '2023-08-08 17:34:58', 'images/autors/tcZXUEUuxYVogczERjDPz7Zwq6sAKVo9N8UtHv7d.jpg', NULL, NULL, 'https://www.instagram.com/juanadolorex/?hl=nb', 'https://twitter.com/juanadolorex?lang=ca', 0),
(10, 'Israel Calvache Masuet', 'israel-calvache-masuet', '<p>Israel Calvache Masuet va n&egrave;ixer a Granollers el 1972 i va passar la infantesa a La Torreta, una barriada de la Roca del Vall&egrave;s. Ha viscut tamb&eacute; a Girona i actualment ho fa a Aiguafreda. &Eacute;s llicenciat en Geografia i Hist&ograve;ria, activista de l\'Esquerra Independentista i, a banda de treballs historiogr&agrave;fics tamb&eacute; ha publicat nombrosos articles en mitjans digitals i locals.</p>', 'https://tsundoku.cat/storage/images/avatars/886TYYsrhEnDHEYAaDUdUFpLAZbTnO7Q0bO2AbIj.jpg', 1, 12, '2023-09-21 16:06:23', '2023-09-21 16:06:23', NULL, NULL, 'https://www.facebook.com/israelcalvachemasuet/', NULL, NULL, 0),
(11, 'Karl Marx', 'karl-marx', '<h4>Tr&egrave;veris, 1818 - Londres ,1883</h4>\r\n<div class=\"c-author__content__body__content\">Karl Marx va ser un fil&ograve;sof, periodista, economista pol&iacute;tic, soci&ograve;leg i revolucionari alemany. Va tractar una gran varietat de temes i &eacute;s conegut, sobretot, per la seva an&agrave;lisi de la Hist&ograve;ria en termes de lluita de classes, resumida en l&rsquo;encap&ccedil;alament d&rsquo;<em>El manifest comunista</em>: &laquo;La hist&ograve;ria de totes les societats &eacute;s la hist&ograve;ria de la lluita de classes.&raquo; Va ser el pare te&ograve;ric del socialisme cient&iacute;fic i del comunisme i, junt amb Friedrich Engels, &eacute;s considerat una figura hist&ograve;rica clau per entendre la societat i la pol&iacute;tica contempor&agrave;nia. A Tigre de Paper hi ha publicada la seva obra magna,&nbsp;<em>El Capital</em>&nbsp;(2018), i&nbsp;<em>El manifest comunista&nbsp;</em>(2020).</div>', 'https://www.tigredepaper.cat/images/Autores/Marx,-Karl.jpg', 1, 12, '2023-10-03 04:42:40', '2023-10-03 04:42:40', NULL, NULL, NULL, NULL, NULL, 0),
(12, 'Jordi Roig', 'jordi-roig', '<p>Jordi Roig Pi (La Palma, Baix Llobregat, 14 d&rsquo;abril de 1957). Poeta. Treballa al departament de Comunicaci&oacute; de l&rsquo;Ajuntament de la Palma.<br><br>Ha publicat els llibres de poesia:&nbsp;<em>Contraban de silenci</em>, Viena Edicions (2001);&nbsp;<em>Intemp&egrave;rie</em>, Viena Edicions (2004);&nbsp;<em>El melic de les teranyines</em>, Editorial Malhivern (2006);&nbsp;<em>Sota el per&iacute;metre del vent</em>, March Editor (2008);&nbsp;<em>Despr&eacute;s del tacte</em>, Perif&egrave;ric Edicions (2010);&nbsp;<em>Cada dilluns que es perd</em>, Stonberg Editorial (2015);&nbsp;<em>A punt</em>, Voliana Edicions (2017), amb N&uacute;ria Pujol&agrave;s i Lali Ribera,&nbsp;<em>Escopir al fang (Redempci&oacute;)</em>, Viena Edicions (2018) i&nbsp;<em>Els dits d&rsquo;una setmana</em>&nbsp;(2022) Voliana Edicions.<br><br>Ha publicat les novel&middot;les:&nbsp;<em>La noia d&rsquo;aire blau</em>, Stonberg Editorial (2011), i&nbsp;<em>Un segon despr&eacute;s de Praga</em>, Editorial Gregal (2014).<br><br>Ha participat en els llibres col&middot;lectius:&nbsp;<em>Lletres blaves per l&rsquo;autisme</em>, Stonberg Editorial (2017),&nbsp;<em>Som amb tu</em>, llibre solidari per a recaptar fons per a la Fundaci&oacute; d&rsquo;Oncologia Infantil Enriqueta Villavecchia, Editorial Trirremis (2017),&nbsp;<em>La terra sagna. L&rsquo;1 d&rsquo;octubre dels poetes</em>, Edicions de l&rsquo;Alb&iacute; (2018), i&nbsp;<em>S&oacute;n pocs, som molts, ARC</em>&nbsp;(2019), a benefici de La Marat&oacute; de TV3.Ha escrit el conte infantil&nbsp;<em>Els secrets de la Palma</em>, amb il&middot;lustracions de Roser Calafell, Mosaics Llibres (2018). Ha escrit l&rsquo;obra de teatre&nbsp;<em>Buits</em>, representada a la Palma el novembre de 2017.</p>', 'https://static.wixstatic.com/media/61f884_47e91436be264e55848986857341759d~mv2.jpg/v1/fill/w_420,h_420,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/61f884_47e91436be264e55848986857341759d~mv2.jpg', 1, 11, '2023-10-15 08:40:53', '2023-10-15 08:40:53', NULL, NULL, NULL, NULL, NULL, 0),
(13, 'Anna Carreras Aubets', 'anna-carreras-aubets', '<table>\r\n<tbody>\r\n<tr>\r\n<td>Anna Carreras Aubets (Barcelona, 6 de gener de 1977), &eacute;s una escriptora, cr&iacute;tica liter&agrave;ria, correctora i traductora catalana.[1] Llicenciada en Filologia catalana per la Universitat Aut&ograve;noma de Barcelona, ha escrit diversos estudis sobre la literatura dels anys 1970 i 1980, entre els quals destaca l\'edici&oacute; de l\'obra po&egrave;tica completa de Vicen&ccedil; Altai&oacute;. &Eacute;s autora, juntament amb Vicen&ccedil; Altai&oacute; i Jes&uacute;s Gald&oacute;n, del llibre d\'aforismes El cervell i les venes (2005). El 2008 guany&agrave; el Premi Alexandre Ballester amb l\'obra Tot ser&agrave; blanc. Ha tradu&iuml;t l\'obra d\'Elena Ferrante al catal&agrave;[2] i ha participat en diferents reculls de contes. Col&middot;labora a la premsa i a les revistes d\'art.</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'https://www.nuvol.com/app/uploads/2017/03/anna-carreras-1-e1532331822763.jpg', 1, 11, '2024-04-11 20:59:45', '2024-04-11 20:59:45', NULL, NULL, NULL, NULL, NULL, 0),
(14, 'Lluís Nicolau i d\'Olwer', 'lluis-nicolau-i-dolwer', '<table>\r\n<tbody>\r\n<tr>\r\n<td>Llu&iacute;s Nicolau d&rsquo;Olwer (Barcelona, 1888 ‒ Ciutat de M&egrave;xic, 1961), hel&middot;lenista, llatinista, medievalista i gran coneixedor de la literatura catalana medieval, home d&rsquo;una activitat intel&middot;lectual incansable, a m&eacute;s de pol&iacute;tic molt conegut i respectat en la seva &egrave;poca &mdash;arrib&agrave; a ser ministre del govern Aza&ntilde;a&mdash;, fou una de les figures decisives de la cultura catalana en la primera meitat del segle XX. Escriptor de ploma exquisida, entre la seva producci&oacute; es destaquen obres emblem&agrave;tiques com L&rsquo;expansi&oacute; de Catalunya en la Mediterr&agrave;nia Oriental (1926), Paisatges de la nostra hist&ograve;ria (1929), Caliu: records de mestres i amics (1958) i, especialment, un llibre immarcescible: El pont de la mar blava, que, publicat per primer cop el 1928, ara presentem en una nova edici&oacute;.</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Nicolau_D%27Olwer.JPG/171px-Nicolau_D%27Olwer.JPG', 1, 11, '2024-04-11 21:06:17', '2024-04-11 21:06:17', NULL, NULL, NULL, NULL, NULL, 0),
(15, 'Quim Monzó', 'quim-monzo', '<p>Quim Monz&oacute; va n&eacute;ixer a Barcelona l&rsquo;any 1952. Va comen&ccedil;ar a publicar a principis dels setanta, a diaris de Barcelona i Madrid, sobre les guerres d&rsquo;Irlanda del Nord, Vietnam i Cambodja. L&rsquo;any 1982 va anar becat a Nova York per estudiar literatura contempor&agrave;nia nord-americana. Ha tradu&iuml;t contes, novel&middot;les i obres de teatre. Ha escrit guions per a la r&agrave;dio, la televisi&oacute; i el cinema. &Eacute;s col&middot;laborador habitual de La Vanguardia i Catalunya R&agrave;dio. Ha publicat onze llibres de narrativa i deu d&rsquo;articles. Ha guanyat el premi&nbsp;Nacional de Literatura, el de narrativa Ciutat de Barcelona, el&nbsp;d&rsquo;Honor de les Lletres Catalanes,&nbsp;el de novel&middot;la Prudenci Bertrana, el de novel&middot;la El Temps, el Lletra d&rsquo;Or al millor llibre de l&rsquo;any, el dels Escriptors Catalans i, quatre vegades, el premi de la Cr&iacute;tica, que atorga Serra d&rsquo;Or.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>50&egrave; Premi d&rsquo;Honor de les Lletres Catalanes</strong></p>\r\n<p>Article de David Castillo a&nbsp;<a href=\"http://www.elpuntavui.cat/cultura/article/19-cultura/1353525-anais-nin-obligatoria.html\"><em>El Punt Avui</em>&nbsp;</a>(08/03/2018)<br>Article d&rsquo;Elena Hevia a&nbsp;<a href=\"https://www.elperiodico.cat/ca/oci-i-cultura/20180307/quim-monzo-premi-dhonor-lletres-catalanes-omnium-cultural-6673103\"><em>El Peri&oacute;dico de Catalunya&nbsp;</em></a>(08/03/2018)<br>Article de Carles Geli a&nbsp;<em><a href=\"https://elpais.com/ccaa/2018/03/07/catalunya/1520417611_462069.html\">El Pa&iacute;s</a>&nbsp;</em>(08/03/2018)<br>Cr&ograve;nica de la concessi&oacute; per Josep Massot a&nbsp;<a href=\"http://www.quadernscrema.com/wp-content/uploads/La-Vanguardia-Josep-Massot-CAT.pdf\"><em>La Vanguardia&nbsp;</em></a>(08/03/2018)<br>Article de Bernat Joan i Mar&iacute; a&nbsp;<a href=\"https://www.diaridegirona.cat/opinio/2018/03/10/quim-monzo-premi-dhonor-lletres/900408.html\"><em>Diari de Girona</em></a>&nbsp;(10/03/2018)<br>Article d&rsquo;Antoni Batista a l&rsquo;<em><a href=\"https://www.ara.cat/opinio/antoni-batista-magnitud-tragedia-politica_0_1979202081.html\">Ara</a>&nbsp;</em>(16/03/2018)<br>Entrevista de&nbsp;Montserrat Serra a<em>&nbsp;<a href=\"https://www.vilaweb.cat/noticies/quim-monzo-lhumor-ens-ha-salvat/\">VilaWeb</a></em>&nbsp;(Primera part) (18/03/2018)<br>Entrevista de Montserrat Serra a&nbsp;<em><a href=\"https://www.vilaweb.cat/noticies/quim-monzo-diuen-no-vull-pero-de-que-em-parles-no-vol-que-laixafi-un-cotxe-o-no-vol-menjar-peres-i-ii/\">VilaWeb</a>&nbsp;</em>(Segona part) (19/03/2018)<br>Entrevista de Mag&iacute; Camps a&nbsp;<a href=\"http://www.lavanguardia.com/cultura/20180603/444025822827/som-trilingues-parlem-espanyol-catanyol-i-alguns-catala.html\"><em>La Vanguard</em>ia&nbsp;</a>(03/06/2018)<br>Article de l&rsquo;acte d&rsquo;entrega per Elena Hevia a&nbsp;<a href=\"https://www.elperiodico.com/es/ocio-y-cultura/20180604/quim-monzo-premi-honor-lletres-catalanes-6857312\"><em>El Peri&oacute;dico de Catalunya&nbsp;</em></a>(05/06/2018)<br>Article de l&rsquo;acte d&rsquo;entrega per Carles Geli a&nbsp;<em><a href=\"https://elpais.com/ccaa/2018/06/04/catalunya/1528144147_644749.html\">El Pa&iacute;s</a>&nbsp;</em>(05/06/2018)<br>Article de l&rsquo;acte d&rsquo;entrega per Mag&iacute; Camps a&nbsp;<em><a href=\"http://www.quadernscrema.com/wp-content/uploads/La-Vanguardia-Magi%CC%81-Camps-3.pdf\">La Vanguardia</a>&nbsp;</em>(05/06/2018)<br>Cr&ograve;nica de l&rsquo;acte de lliurament per Laura Serra&nbsp;<a href=\"https://www.ara.cat/cultura/Quim-Monzo-reivindica-Catalunya-injusticia_0_2027197479.html\"><em>Ara</em></a>&nbsp;(05/06/2018)<br>Cr&ograve;nica de l&rsquo;acte de lliurament per Montserrat Serra a&nbsp;<a href=\"https://www.vilaweb.cat/noticies/quim-monzo-superman-i-el-bibliobus/\"><em>Vilaweb</em></a>&nbsp;(06/06/2018)<br>Entrevista de X&egrave;nia Buss&eacute; a&nbsp;<a href=\"http://www.quadernscrema.com/wp-content/uploads/Serra-dOr-Xe%CC%80nia-Busse%CC%81.pdf\">Serra d&rsquo;Or</a>&nbsp;(01/08/2018)</p>\r\n<p>&laquo;Monz&oacute; &eacute;s, per resumir, una b&egrave;stia liter&agrave;ria&raquo;.<br>Xavier Aliaga,&nbsp;<em>El Temps</em></p>\r\n<p>&laquo;Ha contribu&iuml;t de manera decisiva a la naturalitat expressiva de l&rsquo;idioma, que tanta falta feia&raquo;.<br>Merc&egrave; Ibarz,&nbsp;<a href=\"https://www.vilaweb.cat/noticies/monzo-article-merce-ibarz-opinio/\"><em>VilaWeb</em></a></p>\r\n<p>&laquo;En Monz&oacute; va obrir tots els camins pels quals, m&eacute;s o menys, c&ograve;modament, hem circulat tots els altres&raquo;.<br>Julia Guillamon,&nbsp;<em>La Vanguardia</em></p>\r\n<p>&laquo;Veig els seus llibres com un conjunt de gran coher&egrave;ncia, i alhora amb unes etapes molt distingides. Monz&oacute; obria un cam&iacute; nou en la literatura catalana, narrava amb una llibertat burleta que venia de la contracultura&raquo;.<br>Jordi Punt&iacute;,&nbsp;<em><a href=\"https://www.elperiodico.cat/ca/opinio/20180309/article-opinio-jordi-punti-quim-monzo-premi-honor-lletres-catalanes-6679648\">El Periodico de Catalunya</a></em></p>\r\n<p>&nbsp;</p>', 'https://www.quadernscrema.com/wp-content/uploads/monzo-416x555.jpg', 1, 11, '2024-04-13 13:58:19', '2024-04-13 13:58:19', NULL, 'http://www.monzo.info/', 'https://www.facebook.com/quim.monzo', NULL, NULL, 0),
(16, 'Sergi Pàmies', 'sergi-pamies', '<p>Sergi P&agrave;mies (Par&iacute;s, 1960) ha publicat en aquesta editorial els reculls de contes&nbsp;<em>T&rsquo;hauria de caure la cara de vergonya</em>,&nbsp;<em>Infecci&oacute;</em>,&nbsp;<em>La gran novel&middot;la sobre Barcelona</em>&nbsp;(Premi de la Cr&iacute;tica Serra d&rsquo;Or),&nbsp;<em>L&rsquo;&uacute;ltim llibre de Sergi P&agrave;mies</em>,&nbsp;<em>Si menges una llimona sense fer ganyotes</em>&nbsp;(premis Ciutat de Barcelona i Lletra d&rsquo;Or),&nbsp;<em>La bicicleta est&agrave;tica</em>&nbsp;(Premi Maria &Agrave;ngels Anglada),&nbsp;<em>Can&ccedil;ons d&rsquo;amor i de pluja,</em>&nbsp;<em>L&rsquo;art de portar gavardina</em>&nbsp;(Premi de la Cr&iacute;tica Serra d&rsquo;Or) i&nbsp;<em>A les dues seran les tres</em>, a m&eacute;s de les novel&middot;les&nbsp;<em>La primera pedra</em>&nbsp;(Premi &Iacute;caro),&nbsp;<em>L&rsquo;instint</em>&nbsp;(Premi Prudenci Bertrana) i&nbsp;<em>Sentimental</em>. Tradu&iuml;t al castell&agrave;, al franc&egrave;s, a l&rsquo;alemany, a l&rsquo;itali&agrave;, al grec, a l&rsquo;angl&egrave;s i al xin&egrave;s, tamb&eacute; &eacute;s autor de&nbsp;<em>Confessions d&rsquo;un culer defectu&oacute;s</em>, Premi Internacional de Periodisme V&aacute;zquez Montalb&aacute;n i col&middot;laborador en diversos mitjans de comunicaci&oacute;.</p>\r\n<p><span style=\"font-size: 14pt;\"><strong>Premis:</strong></span></p>\r\n<ul>\r\n<li><strong>&Iacute;caro</strong>&nbsp;(1990):&nbsp;<em>La primera pedra</em>.</li>\r\n<li><strong>Prudenci Bertrana de novel&middot;la</strong>&nbsp;(1993):&nbsp;<em>L\'instint</em>.</li>\r\n<li><strong>Cr&iacute;tica Serra d\'Or</strong>&nbsp;(1998):&nbsp;<em>La gran novel&middot;la sobre Barcelona</em>.</li>\r\n<li><strong>Ciutat de Barcelona de narrativa</strong>&nbsp;(2006):&nbsp;<em>Si menges una llimona sense fer ganyotes</em>.</li>\r\n<li><strong>Lletra d\'Or</strong>&nbsp;(2007):&nbsp;<em>Si menges una llimona sense fer ganyotes</em>.</li>\r\n<li><strong>Premi Setenil al Millor Llibre de Relats Publicat a Espanya</strong>&nbsp;(2007):&nbsp;<em>Si menges una llimona sense fer ganyotes</em>.</li>\r\n<li><strong>Premi de Narrativa Maria &Agrave;ngels Anglada</strong>&nbsp;(2011):&nbsp;<em>La bicicleta est&agrave;tica</em>.</li>\r\n<li><strong>Premi de la Cr&iacute;tica Catalana de narrativa&nbsp;</strong>(2019):&nbsp;<em>L\'art de portar gavardina.</em></li>\r\n<li><strong>Premi Cr&iacute;tica Serra d\'Or de Narrativa (2019):&nbsp;</strong><em>L\'art de portar gavardina.</em></li>\r\n</ul>', 'https://www.quadernscrema.com/wp-content/uploads/pamies-web.jpg', 1, 11, '2024-04-13 14:01:40', '2024-04-13 14:01:40', NULL, NULL, NULL, NULL, NULL, 0),
(17, 'Mercè Rodoreda', 'merce-rodoreda', '<div class=\"col-sm-4 col-md-3\">&nbsp;</div>\r\n<div class=\"content col-sm-8 col-md-9\">\r\n<div class=\"field field--name-body field--type-text-with-summary field--label-hidden field--item\">\r\n<p align=\"justify\">Merc&egrave; Rodoreda (Barcelona, 1908 &ndash; Girona, 1983).</p>\r\n<p align=\"justify\">Va ser filla &uacute;nica d&rsquo;una fam&iacute;lia culta i boh&egrave;mia del barri barcelon&iacute; de Sant Gervasi de Cassoles. Les flors, ja presents a la seva inf&agrave;ncia, van ser una passi&oacute; constant a la seva vida. Va ser mare i es va casar ben jove, l&rsquo;any 1928, i durant els anys trenta ja va publicar les seves primeres novel&middot;les. Per la seva vinculaci&oacute; cultural amb el govern de la Rep&uacute;blica es va veure obligada a exiliar-se, primer a Fran&ccedil;a, l&rsquo;any 1939 i m&eacute;s tard, el 1954, a Ginebra. &Eacute;s en aquesta &egrave;poca que es desenvolupa com a artista i com a escriptora i, en concret, als anys seixanta. Durant aquests anys escriu les obres que la fan ser una de les autores m&eacute;s reconegudes i tradu&iuml;des de la literatura catalana del segle xx: La pla&ccedil;a del Diamant (1962), El carrer de les Cam&egrave;lies (1966), Jard&iacute; vora el mar (1967), Mirall trencat (1974). I &eacute;s tamb&eacute; quan escriu Flors de deb&ograve;. Un cop mort el dictador, l&rsquo;any 1979, torna a Catalunya i s&rsquo;estableix a Romany&agrave; de la Selva, en una casa a quatre vents i amb un jard&iacute; ple de flors. D&rsquo;aquesta &egrave;poca &eacute;s Viatges a uns quants pobles que, junt amb el cap&iacute;tol citat anteriorment, formar&agrave; el llibre Viatges i flors i que guanyar&agrave; el Premi Ciutat de Barcelona l&rsquo;any 1980.</p>\r\n</div>\r\n</div>', 'https://imagessl.casadellibro.com/img/autores/w/69829.webp', 1, 11, '2024-04-13 14:09:05', '2024-04-13 14:09:50', NULL, NULL, NULL, NULL, NULL, 0),
(18, 'Núria Cadenes', 'nuria-cadenes', '<table>\r\n<tbody>\r\n<tr>\r\n<td>N&uacute;ria Cadenes va n&eacute;ixer a Barcelona i viu a l&rsquo;Horta Sud, prop de Val&egrave;ncia. Treballa de llibretera i col&middot;labora en diversos mitjans (Vilaweb, El Temps). Ha publicat, entre d&rsquo;altres, els llibres Cartes de la pres&oacute; (1990), L&rsquo;Ovidi (2002), El banquer (2013) o Secundaris (2018). Amb AZ (2009) va guanyar el premi Ciutat d&rsquo;Elx i el de la Cr&iacute;tica dels Escriptors Valencians, i, amb Tota la veritat (2016), el Crims de Tinta.</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'https://scontent-bcn1-1.xx.fbcdn.net/v/t39.30808-1/241751518_696538241280584_7754595033990737985_n.jpg?stp=c66.23.194.194a_dst-jpg_p240x240&_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_ohc=PW4vXirAdjsAb6k3WKw&_nc_ht=scontent-bcn1-1.xx&oh=00_AfBUYpcZkZnRn-IDL4uliZTShIfhLhHteaXWfRe6Y7-uRQ&oe=66205FCB', 1, 11, '2024-04-13 14:35:10', '2024-04-13 14:37:01', NULL, 'https://nuriacadenes.cat/', 'https://www.facebook.com/ncadenes', NULL, NULL, 0),
(19, 'Núria Armengol', 'nuria-armengol', '<table>\r\n<tbody>\r\n<tr>\r\n<td>N&uacute;ria Armengol va n&eacute;ixer a Terrassa el 1958 i actualment viu a Matadepera. &Eacute;s llicenciada en psicologia. Ha dedicat gran part de la seva vida laboral a la doc&egrave;ncia en una escola de Terrassa. S&rsquo;ha format com a escriptora a L&rsquo;Aula de Lletres, Escola de les Arts Escrites. El seu relat Manual d&rsquo;Autoajuda ha quedat finalista en el I Concurs de relats per dramatitzar atorgat per l&rsquo;Associaci&oacute; Art i Cultura de Sant Antoni de Vilamajor. <em>Safareig</em> &eacute;s la seva primera novel&middot;la i acaba de publicar, juntament amb la Tessa Dinar&egrave;s, la novel&middot;la <em>Sota el xal</em></td>\r\n</tr>\r\n</tbody>\r\n</table>', 'https://static.wixstatic.com/media/61f884_000fa5dcd5a348cb8019b8ac3ad70931~mv2_d_3888_2592_s_4_2.jpg/v1/fill/w_520,h_347,al_c,q_85,usm_0.66_1.00_0.01/61f884_000fa5dcd5a348cb8019b8ac3ad70931~mv2_d_3888_2592_s_4_2.webp', 1, 11, '2024-04-14 12:07:05', '2024-04-14 12:07:05', NULL, NULL, 'https://www.facebook.com/nuria.armengol.587', NULL, NULL, 0),
(20, 'Angela Davis', 'angela-davis', '<table>\r\n<tbody>\r\n<tr>\r\n<td>Angela Yvonne Davis &eacute;s professora d&rsquo;Hist&ograve;ria de la Consci&egrave;ncia a la Universitat de Calif&ograve;rnia, Santa Cruz (EUA). Ha estat activa en nombroses organitzacions que s&rsquo;oposen a la repressi&oacute; associada amb la pres&oacute;. Va complir setze mesos de pres&oacute; preventiva el 1972 per haver defensat un grup de presos pol&iacute;tics; es va organitzar una campanya p&uacute;blica internacional de suport fins que la van absoldre. L&rsquo;any seg&uuml;ent va ser una de les fundadores de l&rsquo;Alian&ccedil;a Nacional contra la Repressi&oacute; Racista i Pol&iacute;tica. Ha estat membre del Partit Comunista dels Estats Units. &Eacute;s organitzadora del grup de recerca &laquo;Resist&egrave;ncia cr&iacute;tica: m&eacute;s enll&agrave; del complex industrial carcerari&raquo;.</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'https://upload.wikimedia.org/wikipedia/commons/e/ea/Angela_Davis_pic.jpg', 1, 11, '2024-04-14 12:53:42', '2024-04-14 12:53:42', NULL, NULL, NULL, NULL, NULL, 0),
(21, 'Carles Viñas', 'carles-vinas', '<table>\r\n<tbody>\r\n<tr>\r\n<td>(Vila de Gr&agrave;cia, 1972) Doctor en hist&ograve;ria contempor&agrave;nia per la Universitat de Barcelona (UB) i membre del Grup de Recerca i An&agrave;lisi del M&oacute;n Actual (GRANMA). Al llarg de la seva activitat investigadora ha analitzat l&rsquo;extremisme pol&iacute;tic i esportiu, els estils juvenils i el rerefons social de l&rsquo;esport. Actualment compagina la doc&egrave;ncia universit&agrave;ria amb la col&middot;laboraci&oacute; en diversos mitjans de comunicaci&oacute; i la publicaci&oacute; d&rsquo;articles de divulgaci&oacute; hist&ograve;rica en diferents revistes especialitzades. Altres obres de l\'autor: Sankt Pauli. Un altre futbol &eacute;s possible (Tigre de Paper, 2017), Una hist&ograve;ria de la ciutat a trav&eacute;s del Bar&ccedil;a (2012), Toler&agrave;ncia zero. La viol&egrave;ncia a l&rsquo;esport (Angle, 2006), Skinheads a Catalunya (Columna, 2004)</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'https://www.tigredepaper.cat/images/Autores/Vinas-Gracia,-Carles.jpg', 1, 11, '2024-04-14 13:03:55', '2024-04-14 13:08:48', NULL, NULL, 'https://www.facebook.com/carles.vinas.1', NULL, '@CarlesVinyas', 0);

-- --------------------------------------------------------

--
-- Estructura de la taula `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) NOT NULL,
  `url` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `posicio` varchar(191) NOT NULL,
  `actiu` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `bans`
--

CREATE TABLE `bans` (
  `id` int(10) UNSIGNED NOT NULL,
  `bannable_type` varchar(191) NOT NULL,
  `bannable_id` bigint(20) UNSIGNED NOT NULL,
  `created_by_type` varchar(191) DEFAULT NULL,
  `created_by_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `expired_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titol` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `autor_nom` varchar(191) NOT NULL,
  `genere_id` bigint(20) UNSIGNED NOT NULL,
  `autor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `editorial_id` bigint(20) UNSIGNED DEFAULT NULL,
  `editorial_nom` varchar(191) NOT NULL,
  `isbn` varchar(191) NOT NULL,
  `imatge` varchar(191) DEFAULT NULL,
  `sinopsi` text NOT NULL,
  `editorial_web` varchar(191) NOT NULL,
  `idioma` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `novetat` tinyint(1) NOT NULL DEFAULT 0,
  `primera` tinyint(1) NOT NULL DEFAULT 0,
  `auto` tinyint(1) NOT NULL DEFAULT 0,
  `cita` text DEFAULT NULL,
  `comentari` text DEFAULT NULL,
  `estrena` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `books`
--

INSERT INTO `books` (`id`, `titol`, `slug`, `autor_nom`, `genere_id`, `autor_id`, `editorial_id`, `editorial_nom`, `isbn`, `imatge`, `sinopsi`, `editorial_web`, `idioma`, `user_id`, `active`, `created_at`, `updated_at`, `foto`, `novetat`, `primera`, `auto`, `cita`, `comentari`, `estrena`) VALUES
(1, 'La pols que calla', 'la-pols-que-calla', 'Josep Cuello', 2, NULL, NULL, 'Stonberg', '978-84-946172-5-6', 'https://static.wixstatic.com/media/61f884_09484ed174a346d1a76c115c5d31fee5~mv2.jpg', '<p><em>Dins la tradici&oacute; liter&agrave;ria occidental, el sonet &eacute;s amb tota probabilitat el pont &mdash;can&ograve;nic i intemporal&mdash; m&eacute;s utilitzat pels poetes per tal d\'acostar els seus lectors, i o&iuml;dors, a les dues ribes de la veritat po&egrave;tica: l\'enteniment i l\'emoci&oacute;. Juntament amb la rima, en l\'economia dels catorze versos del sonet cl&agrave;ssic hi ha un exercici d\'exig&egrave;ncia sint&agrave;ctica i una progressi&oacute; narrativa est&agrave;ndard, que, si van de costat de l\'harmonia i el gust pel ritme, fan d\'aquesta composici&oacute; estr&ograve;fica una s&ograve;lida arquitectura on brilla la paraula.</em></p>\r\n<p>&nbsp;</p>\r\n<p>Els 37 sonets de La pols que calla formen un &agrave;lbum de fotografies tirades amb precisi&oacute;, escenes en les quals hi trobem la reflexi&oacute; vital: &ldquo;com el pardal xalest, que de tot fuig/ i a tot retorna prest a espicossar/ les molles tendres d\'un temps que ser&agrave;/ per a ell remei i fel&rdquo;, &ldquo;jo s&oacute;c el vent i el minut/ lleugers, el nus del fil trencat suara&rdquo;, &ldquo;fruita ventissa com pleg&oacute; de m&eacute;s, /molsa de carner, n&uacute;vol que torreja/ abans de ploure\'s&rdquo;. Sempre des d&rsquo;una perspectiva terrenal, la dels indrets m&eacute;s estimats de l\'autor: Manresa &mdash;&ldquo;somriu la ciutat, vella, plujosa i enramada&rdquo;&mdash; i la contrada &mdash;&ldquo;tot el m&oacute;n en una vall, /tot el cor en un terrer, /pedra de cal&ccedil; i glever&rdquo;&mdash;, Menorca &mdash;&ldquo;ara, al tranquil cal&oacute;, /lla&uuml;ts polits fendeixen la llisor/ i, afalagat, el mar llampant...&rdquo;&mdash; o els Pirineus: &ldquo;crema la cara pel sol del migdia, /xiulen marmotes i ronquen les gralles, /i els espadats, atents, fan tornaveu&rdquo;. I sempre amb un esguard ser&egrave;: &ldquo;fent del passat perfum&rdquo;, &ldquo;ara que &ldquo;les veles ja s&oacute;n somnis, caminant/ damunt les aig&uuml;es, gr&agrave;vids de certeses&rdquo;. Omnipresent, tothora, la mem&ograve;ria:<strong> &ldquo;all&iacute;, passat el pont, la pols que calla</strong>&rdquo;.</p>', 'https://www.stonbergeditorial.com/', 'Català', 1, 1, '2023-07-14 08:35:59', '2024-04-13 15:28:37', NULL, 0, 0, 0, NULL, NULL, 0),
(2, '69 poemes d\'amor', '69-poemes-damor', 'Vicent Andrés Estellés', 2, NULL, NULL, 'Edicions del Bullent', '9788486390921', 'https://m.media-amazon.com/images/I/412Q2JtQh0L._SY264_BO1,204,203,200_QL40_ML2_.jpg', '<p>Vicent Andr&eacute;s Estell&eacute;s va n&agrave;ixer el 4 de setembre de 1924 i va morir el 27 de mar&ccedil; de 1993. Gaireb&eacute; seixanta-nou anys dedicats a la literatura. En l&rsquo;obra d&rsquo;Estell&eacute;s el lector ha sabut recon&egrave;ixer la seva realitat m&eacute;s immediata, m&eacute;s quotidiana: les inquietuds, les esperances, les mis&egrave;ries, els somnis, el dolor, l&rsquo;alegria, les frustracions, l&rsquo;amor, la mort&hellip; Tot aix&ograve; &eacute;s ja un motiu suficient per a oferir aquests 69 poemes d&rsquo;amor. Nosaltres ens hem marcat com a punt de partida el concepte de l&rsquo;amor per tal d&rsquo;arribar a Estell&eacute;s, ben segurs que una aproximaci&oacute; tem&agrave;tica ens en pot donar una visi&oacute; total. Aquesta impressionant polifonia l&iacute;rica de Vicent Andr&eacute;s Estell&eacute;s el situa, amb tot dret, al costat dels millors poetes del segle xx.</p>', 'https://www.bullent.net/inici/', 'Català', 1, 0, '2023-07-16 17:31:04', '2024-04-13 15:59:44', NULL, 0, 0, 0, NULL, NULL, 0),
(3, 'Els Marges Dels Mapes: Una Geografia Desplaçada', 'els-marges-dels-mapes-una-geografia-desplacada', 'Àlex Matas Pons', 1, 3, NULL, '3i4', '978-84-17469-34-4', NULL, '<p>Les fronteres no s&oacute;n nom&eacute;s l&iacute;nies divis&ograve;ries tra&ccedil;ades als mapes. S&oacute;n espais que recorden justament la impossibilitat de fixar l&iacute;mits clars entre territoris i evidencien, m&eacute;s aviat, la complexitat de tota realitat. Lluny de ser una ratlla morta i buida, la frontera recull les restes oblidades de la hist&ograve;ria. S&rsquo;hi poden llegir les m&uacute;ltiples capes del temps, la successi&oacute; variable dels interessos i les petjades d&rsquo;all&ograve; que ha quedat descartat. Aquest llibre s&rsquo;acosta a la frontera a trav&eacute;s de l&rsquo;an&agrave;lisi de de les obres de Jes&uacute;s Moncada, Francesc Ser&eacute;s, Joan-Llu&iacute;s Llu&iacute;s, Joan Daniel Bezsonoff i Juli&agrave; de J&ograve;dar, i ressegueix un itinerari geogr&agrave;fic que abasta des de la Franja fins al Bes&ograve;s passant pels Pirineus. &Eacute;s en aquesta geografia despla&ccedil;ada on es fa possible la comprensi&oacute; de l&rsquo;entramat del temps en l&rsquo;espai i on es pot apreciar com la hist&ograve;ria, arxivada all&agrave; on semblaria haver-se esborrat, hi queda sempre ben present.</p>', 'http://www.tresiquatre.cat/cataleg/novetats/?cat=1', 'Català', 1, 1, '2023-07-24 15:08:16', '2024-04-14 07:33:03', 'images/books/qDQHzjQoUIZyqqvbv9IkW1LOZqlU2e0j6O6EKmuz.jpg', 0, 0, 0, NULL, NULL, 0),
(4, 'Els morts riallers', 'els-morts-riallers', 'Ferran Sáez Mateu', 5, NULL, NULL, 'Amsterdam', '9788417918392', NULL, '<p>Si la veritat of&egrave;n, expliquem-la amb una mentida. El retrat m&eacute;s agosarat de la gran impostura de la Transici&oacute;.<br>L&rsquo;any 1977, Sebasti&agrave; Rovira va salvar de la ru&iuml;na la seva editorial explotant la veta de les biografies per enc&agrave;rrec. En ple canvi de r&egrave;gim, el passat pot arribar a ser molt inc&ograve;mode, i pol&iacute;tics i empresaris feien cua per reescriure la seva hist&ograve;ria i fer-la apta per als nous temps.<br>Ara, molts anys despr&eacute;s, l&rsquo;editor revisita les biografies exemplars que va publicar sobre Pl&agrave;cid Escol&agrave; i Ernest Obach, honorables prohoms de la Transici&oacute;. Sota la capa de maquillatge que va inventar per a ells, Rovira desvela la veritable naturalesa depredadora dels vencedors de la postguerra. Despietats amb els d&egrave;bils, servils amb els forts i h&agrave;bils manipuladors dels fils del poder. Aquesta &eacute;s la hist&ograve;ria dels estrategs nats que van canviar-ho tot per tal que no canvi&eacute;s res.</p>', 'https://www.amsterdamllibres.cat/', 'Català', 1, 1, '2023-08-03 08:21:53', '2023-08-03 08:21:53', 'images/books/K4EysZ22ALcXO18dtLZ8LwjqdXAq88It8CJEaybX.jpg', 0, 0, 0, NULL, NULL, 0),
(5, 'El meu any de repòs i relaxació', 'el-meu-any-de-repos-i-relaxacio', 'Otessa Moshfegh', 5, 7, 1, 'Angle editorial', '9788418197550', NULL, '<h4><strong>Un best s&eacute;ller internacional que es tradueix al catal&agrave; per primera vegada</strong></h4>\r\n<p>La narradora d&rsquo;aquesta novel&middot;la decideix tancar-se al seu pis de Manhattan durant un any. Els seus pares han mort, l&rsquo;han acomiadat de la galeria d&rsquo;art on treballava, les seves relacions s&oacute;n ef&iacute;meres. Com una ins&ograve;lita i ombr&iacute;vola Bella Dorment, vol evitar el contacte hum&agrave;, passar la major part del temps dormint o veient pel&middot;l&iacute;cules de Whoopi Goldberg i Harrison Ford, i tornar-se &laquo;immune als records dolorosos&raquo;. Haur&agrave; de superar uns pocs obstacles: satisfer les necessitats b&agrave;siques, les visites reiterades de la seva amiga Reva i les consultes amb la doctora Tuttle, una estranya, histri&ograve;nica i poc fiable psiquiatra que la proveir&agrave; de tota mena de f&agrave;rmacs per desconnectar.</p>\r\n<p><em>El meu any de rep&ograve;s i relaxaci&oacute;</em>&nbsp;&eacute;s una novel&middot;la meravellosa sobre la fragilitat de la condici&oacute; humana, la vanitat i la mediocritat, l&rsquo;autoodi, l&rsquo;amor i el desamor, les ferides que queden dins i no es curen, la necessitat d&rsquo;a&iuml;llar-se i de renovar-se. Amb l&rsquo;horitz&oacute; ple d&rsquo;esperan&ccedil;a d&rsquo;un nou mil&middot;lenni. L&rsquo;any 2001. A Nova York.</p>\r\n<p>&laquo;Enginyosa, fosca, c&ograve;mica [&hellip;]. La novel&middot;la s&rsquo;accelera fins arribar a la que &eacute;s probablement la millor &uacute;ltima p&agrave;gina que he llegit mai.&raquo; &mdash; Vice</p>\r\n<p><em>&ldquo;Aquesta obra ha rebut un ajut a l&rsquo;edici&oacute; del Ministeri de Cultura i Esport&rdquo;&nbsp;</em></p>', 'https://lafinestralectora.cat/editorials/angle-editorial/', 'Català', 1, 1, '2023-08-03 08:45:37', '2023-08-03 08:45:37', 'images/books/TqrebutD3wUEzGSABymTSBVsdbk5IQUV1vKNjbue.webp', 0, 0, 0, NULL, NULL, 0),
(6, 'Deulofeu', 'deulofeu', 'Israel Calvache Masuet', 6, 10, NULL, 'Gregal', '978-84-941500-2-9', 'https://static.serlogal.com/imagenes_big/9788494/978849415002.JPG', '<div class=\"sinopsisHTML\">En Iuri Matamala, un mediocre professor d\'hist&ograve;ria, ha trepitjat merda: com si no en tingu&eacute;s prou amb la mort del seu pare v&iacute;ctima d\'un c&agrave;ncer i l\'empresonament del seu fill Pol, quan la seva dona Alba l\'abandoni per un amant molt m&eacute;s jove que ell es veur&agrave; obligat a deixar temporalment la feina i a intentar reconstruir la seva vida en un petit apartament de la zona gaireb&eacute; deserta del F&ograve;rum de Barcelona. Ser&agrave; l\'aparici&oacute; d\'un inquietant i inoport&uacute; ve&iacute; que sembla posseir l\'habilitat de llegir-li la ment, en Deulofeu, la que l\'obligar&agrave;, tot trampejant l\'insomni i la depressi&oacute;, a fer examen de consci&egrave;ncia i a acceptar, a poc a poc, que de la seva exist&egrave;ncia fallida i covarda no en pot culpar a cap altre persona que no sigui ell mateix. Aix&iacute;, quan en una esp&egrave;cie de pacte mefistof&egrave;lic en Deulofeu li proposi concedir-li el seu desig m&eacute;s &iacute;ntim a canvi de no res i, esc&egrave;ptic, en Iuri li demani viure sense por, comen&ccedil;ar&agrave; una carrera per recompondre la seva malmesa autoestima reconquerint l\'amor de l\'Alba, el respecte d\'en Pol i, ja posats, mirant d\'esbrinar perqu&egrave; la seva mare mai no l\'ha estimat. Amb el que en Iuri no comptar&agrave;, per&ograve;, &eacute;s amb l\'aparici&oacute; de la Marta, una misteriosa i inestable joveneta que li acabar&agrave; de trastocar la vida, ni encara menys amb la del fantasma del seu germ&agrave; Ignasi que, mort als cinc anys d\'edat, li va marcar la inf&agrave;ncia i l\'acuita ara a tibar del fil d\'un misteri irresolt que acabar&agrave; per revelar-li una veritat tan colpidora com inacceptable.</div>', 'https://www.facebook.com/EditorialGregal/', 'Català', 12, 1, '2023-09-21 15:58:06', '2024-04-13 16:11:58', NULL, 0, 0, 0, NULL, NULL, 0),
(7, 'L\'hort de Caín', 'lhort-de-cain', 'Israel Calvache Masuet', 5, 10, 1, 'Stonberg', '978-8494470417', 'https://static.wixstatic.com/media/61f884_9534d3542bb842c99d549b4380fd3a5d~mv2.jpg/v1/fill/w_268,h_420,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/61f884_9534d3542bb842c99d549b4380fd3a5d~mv2.jpg', '<p>Des que ha trencat la relaci&oacute; que mantenia amb la N&uacute;ria, una dona m&eacute;s gran que ell, en Ca&iacute;n amb prou feines surt de l\'apartament de Girona on viu recl&ograve;s, obsessionat en acabar una novel&middot;la amb la que espera desfer-se del sentiment de culpa que arrossega per la mort accidental de l\'Oriol, el seu millor amic. Per aix&ograve;, quan es veu obligat a retornar a la seva ciutat natal per tal d\'assistir amb tots els membres de l\'antiga colla a una trobada en homenatge a l\'Oriol, el poc que es mant&eacute; dempeus del seu m&oacute;n trontolla del tot. A Granollers en Ca&iacute;n haur&agrave; d\'enfrontar-se amb els sentiments que li remour&agrave; la Irene, una antiga xicota per la que encara se sent atret, i amb la condescend&egrave;ncia d\'en Roc, que ara t&eacute; una filla amb ella, amb els recels que sempre li ha guardat en Garcia, amb l\'enyor de la Tina UK i, sobretot, amb les pors que el sotraguen davant la tomba de l\'Oriol. Mentre reconstrueix el record de la inf&agrave;ncia revisitant-ne els escenaris i mira de desfer-se dels fantasmes reals i metaf&ograve;rics que plaguen la seva hist&ograve;ria familiar, en Ca&iacute;n s\'adona com el temps ha convertit en no res tots els somnis de l&rsquo;adolesc&egrave;ncia i decideix recuperar un vell rellotge de plata, her&egrave;ncia del seu avi saur&iacute;, conven&ccedil;ut que posseeix uns poders m&agrave;gics que l\'ajudaran a canviar el passat. Per&ograve; si una cosa ja va aprendre en Ca&iacute;n de ben petit &eacute;s que la m&agrave;gia no nom&eacute;s mai surt de franc, sin&oacute; que sovint cobra un preu molt alt, a qui s\'atreveix a desencadenar-la.</p>', 'https://www.stonbergeditorial.com/', 'Català', 12, 1, '2023-09-30 07:31:15', '2023-09-30 08:19:20', NULL, 0, 0, 0, NULL, NULL, 0),
(8, 'El manifest Comunista', 'el-manifest-comunista', 'Karl Marx i Frederich Engels', 1, 11, 2, 'Tigre de paper', '9788416855810', 'https://www.tigredepaper.cat/ca/cataleg/el-manifest-comunista/download', '<p><em>&laquo;Un fantasma &ndash;el fantasma del Comunisme&ndash; plana damunt d&rsquo;Europa. Totes les pot&egrave;ncies de la vella Europa, el Papa i el Tsar, Metternich i Guizot, radicals francesos i policies alemanys, s&rsquo;han coalitzat en una guerra santa contra aquest espectre. &iquest;On &eacute;s el partit d&rsquo;oposici&oacute; que no ha estat titllat de comunista per part dels seus adversaris que ocupaven el Poder?</em></p>\r\n<p><em>&iquest;On &eacute;s el partit d&rsquo;oposici&oacute; que no ha llan&ccedil;at l&rsquo;estigmatitzant retret del Comunisme als individus m&eacute;s avan&ccedil;ats de l&rsquo;oposici&oacute;, aix&iacute; com als seus adversaris reaccionaris?&raquo;</em></p>\r\n<p>No calen presentacions. Qualsevol sinopsi es quedaria curta. El nom dels seus autors ressona encara avui en dia amb molta for&ccedil;a als Pa&iuml;sos Catalans, i la vig&egrave;ncia del seu pensament esdev&eacute; cada dia m&eacute;s evident ara que la realitat material colpeja amb especial duresa la classe treballadora. En aquest context, publiquem una nova edici&oacute; d&rsquo;una obra de refer&egrave;ncia pel moviment obrer en llengua catalana, en un moment hist&ograve;ric crucial per al futur de la classe obrera.</p>', 'www.tigredepaper.cat', 'Català', 12, 1, '2023-10-03 04:25:29', '2023-10-03 04:51:31', NULL, 0, 0, 0, NULL, NULL, 0),
(9, '414', '414', 'Jordi Roig', 9, 12, 1, 'Stonberg', '9788412682427', NULL, '<table class=\"r3-o\" role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\r\n<tbody>\r\n<tr>\r\n<td class=\"r17-i\">\r\n<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<th class=\"r5-c\" valign=\"top\" width=\"100%\">\r\n<table class=\"r6-o\" role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td class=\"r7-i\" valign=\"top\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</th>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table class=\"r3-o\" role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\r\n<tbody>\r\n<tr>\r\n<td class=\"r17-i\">\r\n<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<th class=\"r5-c\" valign=\"top\" width=\"100%\">\r\n<table class=\"r6-o\" role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td class=\"r7-i\" valign=\"top\">\r\n<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td class=\"r8-c\" align=\"left\">\r\n<table class=\"r9-o\" role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td class=\"r19-i nl2go-default-textstyle\" align=\"left\" valign=\"top\">\r\n<div>\r\n<p><strong>En aquesta peculiar obra liter&agrave;ria, Jordi Roig barreja ficci&oacute; i pensament, imaginaci&oacute; i reflexi&oacute;, temps i records. Com apunta el poeta Carles Duarte al p&ograve;rtic del llibre, Jordi Roig, mestre de la paraula, ens convida a confrontar-nos amb la perplexitat i el misteri de la vida. Ens fa veure la insatisfacci&oacute;, l\'enigma i la manca d\'encaix entre la realitat i el somni, entre el que sembla real i el que sembla absurd. I ens sorpr&egrave;n amb l\'imprevist m&eacute;s inesperat.</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Submergiu-vos en aquest llibre format per un men&uacute; literari de:</strong></p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>41 relats breus de 414 paraules</li>\r\n<li>141 microtextos de 41 paraules</li>\r\n<li>14+4 aforismes de 14 paraules i 14+7 miniaforismes de 7 paraules</li>\r\n<li>Descodificadors i sorpresa final&nbsp;</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>Tot plegat amanit amb jocs de paraules plens d\'humor, drama i realitat i embolcallat amb la tendresa, intensa i profunda, de la poesia.</p>\r\n<p>&nbsp;</p>\r\n<p>Hi trobareu frases sense verb; frases on les paraules segueixen l\'ordre de l\'abecedari; texts on cap lletra de pal va cap avall, com si l\'&uacute;nic punt on fixar la mirada fos el cel...&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>En llegir <em><strong>414 </strong></em>a ella se li va obrir alguna ferida, per&ograve; va quedar <em>satisfletxa</em>.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Al final tot quadra.</p>\r\n</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</th>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'https://www.stonbergeditorial.com/', 'Català', 11, 1, '2023-10-15 08:38:10', '2024-04-11 17:48:58', 'images/books/WgWaWzX3zIvzIL75CLYkbfPuvyHnYLqIh4DYFHOl.webp', 1, 0, 0, NULL, NULL, 0),
(10, 'Cada dilluns que es perd', 'cada-dilluns-que-es-perd', 'Jordi Roig', 2, 12, 1, 'Stonberg', '8494337785', 'https://static.wixstatic.com/media/61f884_fa99d7cc792740458cd81dea7c473768~mv2.png/v1/fill/w_252,h_420,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/61f884_fa99d7cc792740458cd81dea7c473768~mv2.png', '<p>La nostra vida arrenca de mat&iacute;, un dilluns qualsevol, amb dues culleradetes al caf&egrave; i amb el qual comencem de zero per&ograve; amb la primavera, amb l&rsquo;alfa i el gener, que s&oacute;n entrades simb&ograve;liques per inaugurar els cicles vitals.</p>\r\n<p><em>Amb Cada dilluns que es perd,</em>&nbsp;el poeta s&rsquo;endinsa en l&rsquo;espai observat i viscut, capta les aromes i el contorn dels objectes de la seva quotidianitat. S&oacute;n setanta poemes incontestables. Alguns d&rsquo;abast general i d&rsquo;altres, &eacute;s clar, d&rsquo;abast particular perqu&egrave; expliquen el seu dia a dia. Des del caf&egrave; de cada dilluns fins a cadascuna de les oportunitats viscudes, i de les perdudes!, que ha tingut. Convoca el silenci i la visi&oacute; fotogr&agrave;fica de l&rsquo;interior d&rsquo;una casa per explicar l&rsquo;abs&egrave;ncia i el buit. Tamb&eacute; l&rsquo;amor, la fam&iacute;lia, l&rsquo;amistat i el temps tenyeixen els seus mosaics po&egrave;tics. Tot seguit n&rsquo;extreu una m&agrave;xima, un pensament, una s&iacute;ntesi de vida que ens acompanya, que ens reconforta emocionalment. Se serveix d&rsquo;un to proper i c&ograve;mplice amb nosaltres, els seus lectors, perqu&egrave; el nostre jo tamb&eacute; vol companyia (Ricard Mirabete).</p>', 'https://www.stonbergeditorial.com/', 'Català', 11, 1, '2023-10-15 08:50:48', '2023-10-15 08:50:48', NULL, 0, 0, 0, NULL, NULL, 0),
(11, 'Lloances a Déu entre ombres d\'incertesa', 'lloances-a-deu-entre-ombres-dincertesa', 'Dani Algara', 1, NULL, NULL, 'Autopublicat', '9789403630007', NULL, '<p>D\'en&ccedil;&agrave; que va tornar de la seva estada amb els monjos cistercencs del monestir de Poblet, l\'autor d\'aquest relat fa examen de consci&egrave;ndia sobre la vida que ha dut fins alehores i es planteja seriosament sol&middot;licitar el seu ingr&eacute;s a la comunitat religiosa.</p>', 'xxx', 'Català', 12, 1, '2023-10-15 09:11:24', '2023-10-15 09:11:24', 'images/books/ae9pkETO4QsOagFqoioVzi41JHtWzHQ1VWkbaZup.png', 0, 1, 1, NULL, NULL, 0),
(12, 'La vida secreta dels trencalossos', 'la-vida-secreta-dels-trencalossos', 'Carme Jurado Sayós', 13, NULL, NULL, 'Amazon', 'B0CLKYLSN2', 'https://m.media-amazon.com/images/I/714z3srmdNL._SY466_.jpg', '<p>Estem dins el municipi del Pont de Suert pels voltants de la festa de Sant Sebasti&agrave;, efem&egrave;ride molt important en aquesta poblaci&oacute;. &Eacute;s un hivern de fred i nevades. De sobte, desapareix un estudi&oacute;s dels trencalossos d\'origen alemany que fa poc temps s\'ha instal&middot;lat a Erta, un llogarret abra&ccedil;at per les muntanyes.<br>La seva dona i els Mossos d\'Esquadra comencen luna recerca que sembla impossible de resoldre. A m&eacute;s a m&eacute;s s\'adonen que aquesta no &eacute;s la &uacute;nica desaparici&oacute; misteriosa que s\'ha produ&iuml;t. M&eacute;s aviat sembla que ens trobem davant d\'un treball en s&egrave;trie.<br>Entremig s\'hi entortolliguen deutes d\'un passat m&eacute;s o menys lluny&agrave; i antigues disputes no resoltes. Com afegit&oacute;, l\'assass&iacute; sembla ser alg&uacute; recargolat i sense escr&uacute;pols a l\'hora de desfer-se dels cad&agrave;vers.<br>Qui diu la veritat? Qui menteix? Qu&egrave; s\'amaga darrere de tot plegat?<br>Escrit en catal&agrave;, per&ograve; respectant la variant ribagor&ccedil;ana dels personatges, aquesta &eacute;s una novel&middot;la d\'intriga polic&iacute;aca amb una clara banda sonora a mesura que les escenes es desplacen davant dels nostres ulls.<br>Una novel&middot;la que no et deixar&agrave; indiferent i que et far&agrave; dubtar de tothom fins al final, amb el remanent de la influ&egrave;ncia d\'autors de novel&middot;la negra n&ograve;rdica com ara Jo Nesbo, Henning Mankel o Stieg Larsson.</p>', 'https://www.amazon.es/dp/B0CLKYLSN2?ref_=cm_sw_r_apan_dp_3FARC4Z07X4PSKD8YHDG&language=es-ES', 'Català', 11, 1, '2023-10-29 08:49:28', '2023-10-29 08:49:28', NULL, 1, 1, 1, NULL, NULL, 0),
(13, 'Una bomba al jardí', 'una-bomba-al-jardi', 'Olga Xirinacs', 2, NULL, NULL, 'Stonberg', '978-84-123413-5-5', NULL, '<p>La bomba era aut&egrave;ntica i els tres germans no sab&iacute;em que podia fer por. Hi vam cr&eacute;ixer al voltant. Moltes fotografies de record van ser en blanc i negre. L\'escriptor hi posa color quan les descriu, i aix&iacute; es tornen vives. La infantesa i la maduresa es donen la m&agrave; en molts d\'aquests poemes.</p>', 'www.stonbergeditorial.com', 'Català', 1, 1, '2023-11-09 08:04:29', '2024-04-13 16:04:25', 'images/books/5Gl7Q4gsJfHKoBQh6PSxhGaU7cQCnkryyVGoCwSw.webp', 0, 0, 0, NULL, NULL, 0),
(14, 'El somni de Júria', 'el-somni-de-juria', 'Jaume Mas', 5, NULL, NULL, 'Stonberg', '978-84-123413-3-1', NULL, '<p>Una inesperada llumin&agrave;ria en el cel de la Vall d\'en Bas, a la comarca de la Garrotxa, &eacute;s el punt de partida d\'un seguit d\'esdeveniments que condueixen al Marc a viure l\'aventura m&eacute;s transcendental de la seva vida. El que descobrir&agrave; a la muntanya del Puigsacalm l\'acabar&agrave; portant molt lluny de casa seva, al mateix temps que li obrir&agrave; el cam&iacute; per reflexionar sobre la seva exist&egrave;ncia des d\'una perspectiva tan diferent que li canviar&agrave; la vida per sempre.<br>Jaume Mas, divulgador cient&iacute;fic i coordinador del Planetari Municipal de Barcelona, planteja en aquesta novel&middot;la algunes de les grans preguntes que en el transcurs de la vida ens fem alguna vegada els humans, tenyides amb pinzellades de ci&egrave;ncia astron&ograve;mica i viatges a terres llunyanes, impregnant un ritme que us conduir&agrave; a voler con&egrave;ixer irremissiblement el desenlla&ccedil; final de la seva aventura.</p>', 'www.stonbergeditorial.com', 'Català', 1, 1, '2023-11-09 08:11:43', '2024-04-13 16:05:00', 'images/books/CXzNuampDU3URl95qpqBfYtpBg1mtJvxyAWCsc77.webp', 0, 0, 0, NULL, NULL, 0),
(15, 'No diguis res', 'no-diguis-res', 'Raquel Gámez Serrano', 13, NULL, NULL, 'Llibres del delicte', '978-84-947889-7-0', NULL, '<p>Quan l&rsquo;Edit i en Jan es casen i marxen a viure a una casa d&rsquo;un petit poble, els plans de crear una fam&iacute;lia feli&ccedil; aviat xoquen davant la impossibilitat inicial d&rsquo;ampliar la fam&iacute;lia. L&rsquo;obsessi&oacute; de l&rsquo;Edit l&rsquo;empeny a viure en un m&oacute;n irreal mentre en Jan s&rsquo;allunya de la macabra fantasia que sembla envoltar la llar. Fins que adopten en Demian.</p>\r\n<p>La por i els conflictes del passat no resolts s&rsquo;apoderaran de les seves vides. La situaci&oacute; esdevindr&agrave; angoixant i insostenible. Per&ograve; en una societat on les decepcions s&rsquo;amaguen, si no s&rsquo;esmenten, no existeixen</p>', 'https://www.llibresdeldelicte.com/', 'Català', 1, 1, '2023-11-09 08:31:09', '2024-04-13 16:05:20', 'images/books/1p6AONXb3aH5eqjDwm9RsPx2wuUUiU0u47zCrgEx.jpg', 0, 0, 0, NULL, NULL, 0),
(17, 'El pont de la mar blava', 'el-pont-de-la-mar-blava', 'Lluís Nicolau d\'Olwer', 10, 14, 3, 'Adesiara', '978-84-16948-05-5', 'https://www.adesiaraeditorial.cat/wp-content/uploads/2023/03/pont-mar-blava-lluis-nicolau-olwer.jpg', '<p>aisatges evocadors, poblacions heterog&egrave;nies, mites antiqu&iacute;ssims i moltes altres del&iacute;cies conformen les impressions que ens ofereix Llu&iacute;s Nicolau d&rsquo;Olwer arran d&rsquo;un viatge que va fer per la Mediterr&agrave;nia seguint la petja dels catalans en el per&iacute;ode m&eacute;s insigne de la nostra hist&ograve;ria. Tant a la Tun&iacute;sia de Ramon Llull i Anselm Turmeda com a la Malta dels Grans Mestres que parlaven la nostra llengua i a la mil&middot;len&agrave;ria Sic&iacute;lia ens acompanyen ombres amigues. Les teniu for&ccedil;a m&eacute;s a prop del que creieu &mdash;tot i que alguns fan mans i m&agrave;nigues per oblidar-les&mdash; en aquest llibre espl&egrave;ndid, que, segons Dom&egrave;nec Guans&eacute;, &eacute;s un dels &laquo;m&eacute;s verament mediterranis, m&eacute;s evocadors i m&eacute;s exactes que s&rsquo;han escrit a les vores del mar llat&iacute;&raquo;.</p>\r\n<p>&laquo;Recuperat el m&iacute;tic periple de Llu&iacute;s Nicolau d&rsquo;Olwer a la recerca de les arrels catalanes.&raquo;<br>Ignasi Aragay,&nbsp;<em>Ara</em></p>\r\n<p>&laquo;Nicolau captura per la netedat de la seva prosa. L&rsquo;origen period&iacute;stic i la brevetat no priven&nbsp;<em>El pont de la mar blava</em>&nbsp;d&rsquo;assolir una profunditat i un rigor assequibles que fan pensar en una obra de refer&egrave;ncia com&nbsp;<em>El Danubi</em>, de Claudio Magris. Un llibre bell, commovedor i molt actual.&raquo;<br>Xavier Dilla,&nbsp;<em>El Pa&iacute;s</em></p>\r\n<p>&laquo;Escrits de forma tan culta com amena, els articles recollits per cap&iacute;tols a&nbsp;<em>El pont de la mar blava</em>&nbsp;s&oacute;n una festa per a la sensibilitat i la intel&middot;lig&egrave;ncia.&raquo;<br>Teresa Costa-Gramunt,&nbsp;<em>N&uacute;vol</em></p>', 'https://www.adesiaraeditorial.cat/', 'Català', 11, 1, '2024-04-11 20:48:13', '2024-04-11 21:07:20', NULL, 0, 0, 0, NULL, NULL, 0),
(18, 'Halley 2040', 'halley-2040', 'Anna Carreras Aubets', 13, 13, 4, 'Llibres del delicte', '978-84-120625-6-4', 'https://www.llibresdeldelicte.com/wp-content/uploads/2020/03/Halley.jpg', '<table>\r\n<tbody>\r\n<tr>\r\n<td>La Laia i en Llu&iacute;s s&oacute;n germans i viuen junts. Fart de sentir enrenou sexual al pis del costat, en Llu&iacute;s exigeix a la Laia que li canvi&iuml; l&rsquo;habitaci&oacute;. Ell treballa en un forn i es lleva d&rsquo;hora. Ella, que escriu contes i no t&eacute; horaris, accepta el canvi per&ograve; no assumeix que l&rsquo;entranyable ve&iuml;na nonagen&agrave;ria tingui una vida sexual envejable. Decidida a descobrir el misteri que s&rsquo;amaga al pis del costat, la Laia inicia una innocent investigaci&oacute; que l&rsquo;inspira a escriure un conte a temps real. El fet de con&egrave;ixer l&rsquo;Ovidi, un paio inanimat de vida fosca, i l&rsquo;Albert, un veterinari retirat que ara fa de repartidor d&rsquo;Amazon, portar&agrave; la Laia a l&rsquo;epicentre d&rsquo;una trama criminal en la qual s&rsquo;hi veur&agrave; enxarxada com en una teranyina.</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'https://www.llibresdeldelicte.com/', 'Català', 11, 1, '2024-04-11 20:53:47', '2024-04-11 21:04:51', NULL, 0, 0, 0, NULL, NULL, 0),
(20, 'Podem abolir les presons?', 'podem-abolir-les-presons', 'Angela Davis', 1, 20, 2, 'Tigre de paper', '978-84-16855-65-0', NULL, '<table>\r\n<tbody>\r\n<tr>\r\n<td>Ens podem imaginar una societat en qu&egrave; la ra&ccedil;a i la classe social no siguin els determinants principals d&rsquo;un c&agrave;stig? Hi ha poques veus m&eacute;s autoritzades per enfocar aquest debat que Angela Davis. La pres&oacute; funciona ideol&ograve;gicament com un espai abstracte on es dipositen els indesitjables, i aix&ograve; ens deslliura de la responsabilitat de pensar en els problemes reals que afecten les comunitats d&rsquo;on provenen els presos. El repte m&eacute;s dif&iacute;cil i urgent &eacute;s el d&rsquo;explorar creativament nous aspectes de la just&iacute;cia, en qu&egrave; la pres&oacute; ja no faci m&eacute;s la funci&oacute; d&rsquo;&agrave;ncora principal.</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'www.tigredepaper.cat', 'Català', 11, 1, '2024-04-13 09:53:41', '2024-04-14 12:56:36', 'images/books/mxvuzQePkYh5MSEkDCBE1fb9QHtEZX7acDCKSgP5.jpg', 0, 0, 0, NULL, NULL, 0),
(21, 'Follem?', 'follem', 'Bel Olid', 1, NULL, NULL, 'Bridge', '978-84-16670-44-4', 'https://www.ireadbridge.com/uploads/9788416670444/imatge_portada_llibre_detall_9788416670444.jpg', '<table>\r\n<tbody>\r\n<tr>\r\n<td>Seguir el desig, compartir el plaer. Sembla f&agrave;cil, oi? I, tanmateix, vivim sexualitats condicionades per expectatives, pressup&ograve;sits i tab&uacute;s que ens fan complicat escoltar-nos. Follem? explora els camins que ens poden portar a sexualitats m&eacute;s humanes, a relacions m&eacute;s plaents.Amb il&middot;lustracions de Gl&ograve;ria Vives Xiol. De qu&egrave; (no) parlem quan parlem de sexualitats.</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'https://www.ireadbridge.com/', 'Català', 11, 1, '2024-04-13 09:58:19', '2024-04-13 09:58:19', NULL, 0, 0, 0, NULL, NULL, 0),
(22, 'Feminisme de butxaca', 'feminisme-de-butxaca', 'Bel Olid', 1, NULL, NULL, 'Angle editorial', '978-84-15307-59-4', 'https://lafinestralectora.cat/wp-content/uploads/2020/12/FeminismeDeButxaca10e.jpg', '<p>&laquo;La meva fantasia &eacute;s una metralleta.<br>Quan vaig pel carrer i un desconegut em crida alguna cosa: metralleta. Quan el pol&iacute;tic de torn fa el comentari masclista de torn: metralleta. Quan el bisbe explica als diaris que com volem que no ens violin, si demanem l&rsquo;avortament lliure i gratu&iuml;t: metralleta. Quan a l&rsquo;escola es valora fins a l&rsquo;infinit que el pare de les criatures vagi a la reuni&oacute;, per&ograve; es donen per descomptat les mares que hi van: metralleta. Quan em fan fora de la feina perqu&egrave; estic embarassada: metralleta. Quan em diuen que no m&rsquo;exalti, que no n&rsquo;hi ha per a tant: metralleta.<br>Podria semblar una fantasia violenta, per&ograve; no ho &eacute;s; &eacute;s una fantasia d&rsquo;autodefensa.&raquo;</p>\r\n<p>Avui dia el feminisme &eacute;s m&eacute;s viu i necessari que mai perqu&egrave; la discriminaci&oacute; cap a les dones s&rsquo;ha tornat m&eacute;s subtil i dif&iacute;cil de detectar per&ograve; mant&eacute; el seu poder pa&middot; ralitzant. Bel Olid s&rsquo;hi enfronta exposant els conceptes clau de la lluita feminista actual d&rsquo;una manera intel&middot; ligent, radical i, de vegades, sorprenent.</p>', 'https://lafinestralectora.cat/editorials/angle-editorial/', 'Català', 11, 1, '2024-04-13 10:04:28', '2024-04-13 10:04:28', NULL, 0, 0, 0, NULL, NULL, 0),
(23, 'Futbol al país dels soviets', 'futbol-al-pais-dels-soviets', 'Carles Viñas', 1, 21, 2, 'Tigre de paper', '8416855366', NULL, '<div class=\"c-book__content__description c-text-base\">\r\n<p><strong>Qui diria que el futbol va ser l\'esport rei als inicis de la Uni&oacute; Sovi&egrave;tica? Com va arribar a ser-ho? Com encaixa tot aix&ograve; en un pa&iacute;s comunista com l\'URSS?</strong></p>\r\n<p>El futbol rus es concret&agrave;, a les darreries del segle XIX, a recer del context sociopol&iacute;tic que caracteritz&agrave; un pa&iacute;s a cavall entre el declivi imperial i la revoluci&oacute; prolet&agrave;ria conseg&uuml;ent. Uns fets que condicionaren no nom&eacute;s la hist&ograve;ria de la humanitat, sin&oacute; tamb&eacute; la implantaci&oacute;, extensi&oacute; i evoluci&oacute; d&rsquo;aquesta disciplina esportiva, tant a la R&uacute;ssia imperial com, posteriorment, al pa&iacute;s dels soviets.</p>\r\n<p>En aquells inicis vinculats a la R&uacute;ssia tsarista, aquest esport era un simple entreteniment restringit a l&rsquo;aristocr&agrave;cia local i a la col&ograve;nia estrangera. No fou fins a la transformaci&oacute; que va patir arran de la Revoluci&oacute; d&rsquo;Octubre quan esdevingu&eacute; veritablement un fenomen de masses vinculat a les classes populars.</p>\r\n<p>En aquest proc&eacute;s, els diversos actors implicats van mantenir posicions i opinions divergents respecte a la seva pr&agrave;ctica, des dels cortesans tsaristes que rebutjaven una disciplina esportiva que consideraven estrangera fins als revolucionaris que la definiren com un artifici propi de la burgesia.</p>\r\n<p>Com es va produir aquesta metamorfosi? Per qu&egrave; aquells que reprovaven la pr&agrave;ctica de l&rsquo;esport van acabar instrumentalitzant-lo en benefici propi? Quina incid&egrave;ncia va tenir la Revoluci&oacute; Russa en el futbol? Els clubs eren entitats polititzades abans del triomf dels bolxevics? Com &eacute;s que un joc burg&egrave;s va acabar esdevenint el passatemps predilecte de la classe obrera sovi&egrave;tica?</p>\r\n</div>\r\n<div class=\"c-book__content__price__quantity__buy \">\r\n<div class=\"c-book__content__price-block\">\r\n<div class=\"c-book__content__price c-price\">&nbsp;</div>\r\n</div>\r\n</div>', 'www.tigredepaper.cat', 'Català', 11, 1, '2024-04-13 10:06:57', '2024-04-14 13:10:30', 'images/books/oyq4UoqXyB6qrKM0chFeidSr2RJbHv8Hm7x42Kba.jpg', 0, 0, 0, NULL, NULL, 0),
(24, 'Guillem', 'guillem', 'Núria Cadenes', 3, 18, NULL, 'Amsterdam', '9788417918194', NULL, '<table>\r\n<tbody>\r\n<tr>\r\n<td>Guillem Agull&oacute; i Salvador va ser assassinat a Montanejos (Alt Millars) la matinada de l&rsquo;11 d&rsquo;abril del 1993. Era nedador. Antifeixista. Antiracista. Independentista. Tenia divuit anys. El cas va sotragar i marcar una generaci&oacute; sencera de joves. Guillem Agull&oacute; ha esdevingut un s&iacute;mbol de llibertat. L&rsquo;assassinat de Guillem Agull&oacute; &eacute;s un esgarrif&oacute;s exemple de la impunitat amb qu&egrave; actua el feixisme, sota la protecci&oacute; de les forces polic&iacute;aques i del sistema judicial, i amb la vergonyosa complicitat d&rsquo;una premsa capa&ccedil; de manipular la realitat fins a l&rsquo;extrem de presentar la v&iacute;ctima com a botx&iacute;. Aquesta novel&middot;la documental ens submergeix en una Val&egrave;ncia amb urpes, &ldquo;on les h&ograve;sties volen com si fossin part del decorat&rdquo;, i denuncia l&rsquo;intent de soterrar viva una fam&iacute;lia. Assetjant-los. Calumniant-los. Posant-los a la diana del seu odi amb pintades als carrers i pancartes de &laquo;Guillem, j&oacute;dete&raquo; als estadis de futbol. No ho van aconseguir. N&uacute;ria Cadenes, amb un estil depurat i contingut, s&rsquo;ha immers en el sumari del cas, en els diaris de l&rsquo;&egrave;poca, en els records de la fam&iacute;lia i amics del Guillem i fins i tot en el seu propi passat per mesurar la dist&agrave;ncia que hi ha entre la paraula injust&iacute;cia i la paraula dignitat. Ni oblit ni perd&oacute;.</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'http://www.arallibres.cat/ca/cataleg/amsterdam', 'Català', 11, 1, '2024-04-13 10:28:12', '2024-04-14 07:38:20', 'images/books/gKSoXIW83Uht2k6Qvet9Wc3T7hOa0sIxx4aF94Eo.jpg', 0, 0, 0, NULL, NULL, 0),
(25, 'Cartes de la presó', 'cartes-de-la-preso', 'Núria Cadenes', 11, 18, NULL, '3i4', '978-84-7502-664-0', 'https://www.tresiquatre.cat/fitxers/imatges/GR00061.jpg', '<table>\r\n<tbody>\r\n<tr>\r\n<td>Amb divuit anys, des de darrere dels murs d\'una pres&oacute; espanyola, la vida de N&uacute;ria Cadenes va prendre forma de cartes. Per connectar-se amb el pa&iacute;s, amb els amics, amb la gent de casa, un full de paper condensava el temps i esmicolava l\'espai. Les primeres cartes de la jove independentista -la majoria destinades a la seva &agrave;via, Maria Dom&egrave;nech- es converteixen en un document que ens acosta, de manera directa i sovint punyent, a la part menys coneguda de l\'estat. La N&uacute;ria va estar sis anys a la pres&oacute;. Aquest n\'&eacute;s el testimoni.</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'http://www.tresiquatre.cat', 'Català', 11, 1, '2024-04-13 10:31:28', '2024-04-14 07:37:32', NULL, 0, 0, 0, NULL, NULL, 0),
(26, 'Tropel, una dècada de lluita estudiantil a Colòmbia', 'tropel-una-decada-de-lluita-estudiantil-a-colombia', 'Carlos Medina Gallego', 5, NULL, NULL, 'Tigre de paper', '9788493896010', NULL, '<p><em>&ldquo;El Tropel &eacute;s una concepci&oacute; de vida que implica moviment i transformaci&oacute; permanent&hellip; Una guerra a mort a la mediocritat, a l&rsquo;apatia, a la cultura de la desgana i de la neglig&egrave;ncia. Una font de possibilitats per confrontar i contrarestar les ires i els odis, per aniquilar enganys, per enterrar la tirania i l&rsquo;autoritarisme&rdquo;.</em></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Cr&ograve;nica novel&middot;lada sobre el moviment estudiantil de la Universitat Nacional de Col&ograve;mbia als anys 70. Els debats ideol&ograve;gics, la lluita de carrer, les vagues, els amors i la quotidianitat, la clandestinitat, les manifestacions&hellip; Les il&middot;lusions, discussions i frustracions d&rsquo;una generaci&oacute; de&nbsp;<em>tropeleros</em>&nbsp;i&nbsp;<em>tropeleras</em>&nbsp;que reneix amb el pas del temps.</p>\r\n<p>Carlos Medina Gallego ens presenta els acalorats debats estudiantils de l&rsquo;&egrave;poca, plens de passi&oacute; i de voluntat, per&ograve; moltes vegades conduits pel sectarisme i el dogmatisme i atrapats en discursos filos&ograve;fics allunyats de la praxis, ens endinsa en les manifestacions i ocupacions confrontades a la policia, aix&iacute; com en diverses accions caracteritzades per la seva originalitat i el seu simbolisme i el pas cap a una organitzaci&oacute; armada.</p>\r\n<p>Ens descriu les problem&agrave;tiques socials d&rsquo;una ciutat, Bogot&aacute;, plena de contrastos, on un&nbsp;problema com l&rsquo;acc&eacute;s a la salut, s&rsquo;acaba convertint en una reivindicaci&oacute; estudiantil.&nbsp;Enmig d&rsquo;aquest ambient de lluita pol&iacute;tica tamb&eacute; se&rsquo;ns exposen el desenvolupament de&nbsp;diverses relacions sentimentals entre els seus protagonistes, com es veuen afectades per la&nbsp;milit&agrave;ncia i quin paper pot jugar-hi la dona en un &agrave;mbit rebel per&ograve; encara impregnat del car&agrave;cter masclista de la societat.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;<em>&ldquo;Els tropeleros i les tropeleras s&oacute;n uns militants de la vida, que no suporten els dogmes ni les sectes, que no renuncien a la utopia de somniar albades prenyades d&rsquo;abund&agrave;ncia, i d&rsquo;alegria. S&oacute;n uns guerrers n&ograve;mades, uns colonitzadors de deserts d&rsquo;apatia, uns unificadors de voluntats diferents que saben que la d&rsquo;organitzar &eacute;s la m&eacute;s dura i llarga de totes les batalles, per&ograve; la m&eacute;s necess&agrave;ria&rdquo;.</em></p>\r\n<p>&nbsp;</p>\r\n<p>&ldquo;Tropel, una d&egrave;cada de lluita estudiantil a Col&ograve;mbia&rdquo;, obra reeditada diverses&nbsp;vegades, s&rsquo;ha convertit en un referent de la hist&ograve;ria de la lluita estudiantil a Col&ograve;mbia, donant peu a debats sobre les seves caracter&iacute;stiques i evoluci&oacute; que avui en dia encara duren.</p>\r\n<p>Un cl&agrave;ssic de la literatura activista colombiana, que pret&eacute;n deixar el record d&rsquo;aquelles persones que amb el seu temps, el seu esfor&ccedil; i la seva vida van escriure perqu&egrave; se segueixi escrivint la hist&ograve;ria del moviment estudiantil.</p>\r\n<p>Perqu&egrave; no hi ha&nbsp;<em>Tropel</em>&nbsp;sense&nbsp;<em>tropeleros</em>&nbsp;i&nbsp;<em>tropeleras</em>&hellip;</p>', 'www.tigredepaper.cat', 'Català', 11, 1, '2024-04-13 10:36:23', '2024-04-13 10:36:23', 'images/books/6B1gAb9PrTzWaYicTsrsPwODzw7hQO4x4HKuiqWQ.jpg', 0, 0, 0, NULL, NULL, 0),
(27, 'Històries secretes', 'histories-secretes', 'Ramon Breu Panyella', 5, NULL, NULL, 'Tigre de paper', '9788494320507', NULL, '<p>&laquo; &mdash;Saps qu&egrave; &eacute;s el pitjor de tota aquesta hist&ograve;ria, Tina? &mdash;Digues-m&rsquo;ho tu, Rosa. &mdash;Que hi ha milers d&rsquo;aquestes hist&ograve;ries que sempre seran secretes, hi ha milers de persones que van ser v&iacute;ctimes d&rsquo;una dictadura, que no tindran mai ning&uacute; que es recordi d&rsquo;elles ni ning&uacute; que els faci un senzill&iacute;ssim homenatge, que sempre estaran colgades per la inf&agrave;mia en qualsevol rac&oacute;, al costat de qualsevol cam&iacute;, dins de qualsevol barranc.&raquo;</p>\r\n<p><strong>Apagueu el llum, engegueu la r&agrave;dio&hellip; i que tingueu bona lectura.</strong></p>\r\n<p>Les protagonistes d&rsquo;Hist&ograve;ries secretes s&oacute;n dues periodistes, la Tina i la Mar, molt preparades, molt &iacute;ntegres i massa ing&egrave;nues. Encara no acaben d&rsquo;entendre el m&oacute;n que les colpeja de vegades o que tamb&eacute;, de vegades, les emociona. Les dues s&rsquo;inventen un programa de r&agrave;dio per a les matinades que consisteix en la idea que els oients expliquin de forma m&eacute;s o menys secreta hist&ograve;ries que mai ning&uacute; no ha sabut, hist&ograve;ries amagades, sepultades per l&rsquo;oblit, per la mala fe o per la culpabilitat. El programa pren vida pr&ograve;pia, i les joves periodistes observen amb la boca oberta com hi ha oients que no poden dormir que decideixen no conrear m&eacute;s el silenci i diuen coses sorprenents. A les matinades apareixen hist&ograve;ries remotes per&ograve; tamb&eacute; d&rsquo;ara. Al programa truca gent solit&agrave;ria que no tenia cap interlocutor i que veu com alg&uacute; &eacute;s capa&ccedil; d&rsquo;escoltar-la. Apareixen secrets de persones que acaben de morir, apareixen venjances, apareixen hist&ograve;ries que fan descansar a qui les explica.</p>', 'www.tigredepaper.cat', 'Català', 11, 1, '2024-04-13 10:40:53', '2024-04-13 10:40:53', 'images/books/2GiwgG81URNceaui6F1rri4TDRVPazulCWqRRhXX.jpg', 0, 0, 0, NULL, NULL, 0),
(28, 'Llunes d\'atzabeja', 'llunes-datzabeja', 'Gabriel Pérez', 2, NULL, 1, 'Stonberg', '978-84-947542-9-6', 'https://static.wixstatic.com/media/61f884_ad1c55041e474f7d9ff31fabdc5d3b24~mv2_d_1649_2600_s_2.jpg', '<p>Miquel &Aacute;ngel Llad&oacute; Ribas (Es Pont d\'Inca)<br>&ldquo;Camins conc&egrave;ntrics, llums de guaita, petons a balquena... Tot aix&ograve; i m&eacute;s trobareu en aquest recull tan sincer com essencial, amarat del treball i la bonhomia de Gabriel Maria P&eacute;rez Fuster.&nbsp;No dubteu a submergir-vos-hi!&rdquo;</p>\r\n<p>&nbsp;</p>\r\n<p>Antonio Fco.Buitrago (Elche)<br>&ldquo;Yo soy de esos que no se calla, a lo mejor por eso la vida me va as&iacute;, como de culo. Pero tambi&eacute;n por eso puedo ser sincero a la hora de&nbsp;decir, con orgullo y sin ning&uacute;n puto complejo, lo mucho que admiro la sentida poes&iacute;a de Gabriel M. Y si miento, que me quede seco ahora mismo&rdquo;&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Josep Maria Fuster Perell&oacute; (Manacor)<br>&ldquo;Per a mi, que la poesia, intimista o no, sigui coherent, &eacute;s una bona not&iacute;cia. Pens que la de Gabriel Maria P&eacute;rez es un retrat vivent de la seva pr&ograve;pia realitat&rdquo;</p>\r\n<p>&nbsp;</p>\r\n<p>Manola V&aacute;zquez (Galicia)</p>\r\n<p>&ldquo;Letras con esencia que llegan a quien las lee de forma clara y sencilla, un gran pintor con pinceles llenos de palabras, poeta insigne&rdquo;</p>\r\n<p>&nbsp;</p>\r\n<p>Marcelo Sosa Guridi (Uruguay)</p>\r\n<p>&ldquo;Hay &aacute;ngeles que sobrevuelan el &oacute;xido de las esculturas. Hay padres con vocaci&oacute;n de &aacute;ngeles. Hay escritores angelados, padres de letras y maravillosas sonrisas&rdquo;</p>', 'https://www.stonbergeditorial.com/', 'Català', 11, 1, '2024-04-13 10:44:21', '2024-04-13 10:44:21', NULL, 0, 0, 0, NULL, NULL, 0),
(29, 'I per muralla els ulls', 'i-per-muralla-els-ulls', 'Alexandre Tornabell', 2, NULL, 1, 'Stonberg', '978-84-945156-8-2', 'https://static.wixstatic.com/media/61f884_f179d046a6b74f94ae828220f6a38af7~mv2.jpg', '<table>\r\n<tbody>\r\n<tr>\r\n<td>Qui obri aquest llibre quedar&agrave; de seguida enlluernat pel fulgor de les paraules que brillen als t&iacute;tols, a les imatges, a les construccions que semblen remetre a un m&oacute;n bigarrat, riqu&iacute;ssim, que de vegades sembla com sortit d&rsquo;un somni. O, potser, al lector li semblar&agrave; veure una altra mena de l&ograve;gica: la l&ograve;gica rica i impensada del joc infantil que reuneix pedretes i troncs, taps i botons, fils i llaunes per tal de fer-ne una mercaderia llampant de productes vistosos i nous de trinca amb els quals revolucionar el mercat de l&rsquo;imaginari. Francesc Parcerisas</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'https://www.stonbergeditorial.com/', 'Català', 11, 1, '2024-04-13 10:46:48', '2024-04-13 10:46:48', NULL, 0, 0, 0, NULL, NULL, 0),
(30, 'La història del bon vell i la bonica joveneta', 'la-historia-del-bon-vell-i-la-bonica-joveneta', 'Italo Svevo', 10, NULL, 3, 'Adesiara', '978-84-16948-41-3', NULL, '<table>\r\n<tbody>\r\n<tr>\r\n<td>En el curs de la Primera Guerra Mundial, a Trieste, una dona humil demana feina per a la seva filla a un empresari ja gran, que mou els fils escaients per trobar-li una pla&ccedil;a de conductora de tramvies. Al cap de poc, la noia coincideix per atzar amb el vell i inicien una relaci&oacute; sentimental ambigua i singular &mdash;l&rsquo;&uacute;ltima per a ell&mdash;, que el far&agrave; emmalaltir i acabar&agrave; per treure a la llum les interioritats m&eacute;s pregones que el neguitegen (els dubtes morals, l&rsquo;instint de protecci&oacute;, la culpa, la gelosia, el remordiment...). Poques vegades s&rsquo;han expressat amb tanta justesa com en aquesta novel&middot;la les contradiccions de l&rsquo;edat i els envitricolls de l&rsquo;amor.</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'https://www.adesiaraeditorial.cat/', 'Català', 11, 1, '2024-04-13 10:55:03', '2024-04-13 10:55:03', 'images/books/jpZifHT0sSY0SjJ5FvqXbfsC0cjF6Gt5q1RumDJ0.jpg', 0, 0, 0, NULL, NULL, 0),
(31, 'Eureka', 'eureka', 'Edgar Allan Poe', 2, 1, 3, 'Adesiara', '978-84-16948-26-0', 'https://www.lacentral.com/9788416948260.jpg', '<p>Nom&eacute;s un enginy inspirat i atrevit com el de Poe podia concebre una elaborada cosmogonia &mdash;un dels g&egrave;neres m&eacute;s antics que existeixen&mdash; en ple segle XIX, incorporant-hi, no cal dir-ho, els coneixements cient&iacute;fics vigents al seu temps, per&ograve; amanits amb una intu&iuml;ci&oacute; fora mida. Les observacions sobre els planetes, els astres, les nebuloses, en definitiva, sobre tot el que conforma l&rsquo;Univers, sedueixen el lector pel seu inter&egrave;s i la seva varietat. Aquest volum inclou, a tall d&rsquo;introducci&oacute;, unes p&agrave;gines que Paul Val&eacute;ry va dedicar a&nbsp;<em>Eureka</em>&nbsp;i que, segons Julio Cort&aacute;zar, s&oacute;n &laquo;les millors p&agrave;gines que s&rsquo;han escrit mai sobre aquest llibre&raquo;.</p>\r\n<p>&laquo;<em>Eureka</em>&nbsp;&eacute;s un absolut deliri genial: la prosa de Poe sembla alimentar-se d&rsquo;una ambici&oacute; sense mesura; la seva ingenu&iuml;tat fa que adquireixi tons prof&egrave;tics i messi&agrave;nics que contrasten amb una intu&iuml;ci&oacute; febril capa&ccedil; d&rsquo;esbossar, amb vuitanta anys d&rsquo;antelaci&oacute;, la teoria del Big Bang. I qu&egrave; dir sobre el valor literari d&rsquo;<em>Eureka</em>!&raquo;<br>Oriol Roig,&nbsp;<em>N&uacute;vol</em></p>', 'https://www.adesiaraeditorial.cat/', 'Català', 11, 1, '2024-04-13 10:59:13', '2024-04-13 11:00:37', NULL, 0, 0, 0, NULL, NULL, 0);
INSERT INTO `books` (`id`, `titol`, `slug`, `autor_nom`, `genere_id`, `autor_id`, `editorial_id`, `editorial_nom`, `isbn`, `imatge`, `sinopsi`, `editorial_web`, `idioma`, `user_id`, `active`, `created_at`, `updated_at`, `foto`, `novetat`, `primera`, `auto`, `cita`, `comentari`, `estrena`) VALUES
(32, 'Occitan en Catalonha', 'occitan-en-catalonha', 'Jusèp Loís Sans', 1, NULL, NULL, 'Pagès Editors', '978-84-9779-603-3', 'https://www.pageseditors.cat/media/catalog/product/cache/1/image/570x735/9df78eab33525d08d6e5fb8d27136e95/9/7/9788497796033_04_n_3.jpg', '<table>\r\n<tbody>\r\n<tr>\r\n<td>En tot partir d\'un resp&egrave;cte pera identitat d\'Aran, era sua ist&ograve;ria e es sues institucions, s\'analize era oficialitat que dera lengua occitana en Catalonha ne h&egrave; er Estatut. Se valore era ocasion istorica qu\'era aplicacion d\'aguest manament estatutari represente ent&agrave; Catalonha, en tot auer era possibilitat d\'elaborar un nau mod&egrave;l exemplar de politica ling&uuml;istica. Ent&agrave; Aran e es sues institucions, ei era ocasion ent&agrave; h&egrave;r-se presentes pera proteccion der occitan en un escenari internacional e perpetuar era sua personalitat.</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'https://www.pageseditors.cat/', 'Occità', 11, 1, '2024-04-13 11:06:23', '2024-04-13 11:06:23', NULL, 0, 0, 0, '<table>\r\n<tbody>\r\n<tr>\r\n<td>En tot partir d\'un resp&egrave;cte pera identitat d\'Aran, era sua ist&ograve;ria e es sues institucions, s\'analize era oficialitat que dera lengua occitana en Catalonha ne h&egrave; er Estatut. Se valore era ocasion istorica qu\'era aplicacion d\'aguest manament estatutari represente ent&agrave; Catalonha, en tot auer era possibilitat d\'elaborar un nau mod&egrave;l exemplar de politica ling&uuml;istica. Ent&agrave; Aran e es sues institucions, ei era ocasion ent&agrave; h&egrave;r-se presentes pera proteccion der occitan en un escenari internacional e perpetuar era sua personalitat.</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, 0),
(33, 'Ereus dera tèrra', 'ereus-dera-terra', 'Francés Xavier Boya Alòs', 5, NULL, NULL, 'Pagès Editors', '978-84-1303-082-1', 'https://www.pageseditors.cat/media/catalog/product/cache/1/image/570x735/9df78eab33525d08d6e5fb8d27136e95/9/7/9788413030821_04_n_2.jpg', '<table>\r\n<tbody>\r\n<tr>\r\n<td>Un libre t&agrave; abordar es debats claus des territ&ograve;ris de montanha e en especiau d&rsquo;Aran coma un pa&iacute;s singular. Er autor ab&ograve;rde es r&egrave;ptes de futur d&rsquo;aguest espaci geografic damb ua guardada prigonda e transversau sus es probl&egrave;mes de m&egrave;s rabiosa actualitat coma eth cambi climatic, era despoblacion o er impacte dera economia globalizada enes economies de montanha. Aguest libre sup&ograve;se tanben ua introspeccion ena experi&eacute;ncia vitau deth pr&ograve;pi autor que h&egrave; un interessant exercici de mem&ograve;ria personau e colectiva, damb un apassionant relat istoric e politic en un viatge, damb pincelades liter&agrave;ries e personaus, que mos transp&ograve;rte soent tath passat coma airina que pogue ajudar-mos a afrontar es r&egrave;ptes que plantege eth futur m&egrave;s immediat.</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'https://www.pageseditors.cat/', 'Occità', 11, 1, '2024-04-13 11:08:31', '2024-04-13 11:08:31', NULL, 0, 0, 0, NULL, NULL, 0),
(34, 'Àunia', 'aunia', 'Ivan Vera', 8, NULL, NULL, 'AKIARA books', '978-84-17440-86-2', 'https://akiarabooks.com/wp-content/uploads/2021/02/AUNIA-Banyoles-1380x690.jpg', '<table>\r\n<tbody>\r\n<tr>\r\n<td>L&rsquo;&Agrave;unia &eacute;s una noia ib&egrave;rica, de la tribu dels indigets; una h&agrave;bil ca&ccedil;adora que amb nom&eacute;s tretze anys es rebel&middot;la contra el rol que li imposa la societat i se&rsquo;n va de casa a la recerca de la llibertat. &Eacute;s l&rsquo;&egrave;poca, per&ograve;, en qu&egrave; ha comen&ccedil;at la invasi&oacute; dels romans, que volen imposar les seves lleis i la seva llengua. I tamb&eacute; &eacute;s el temps en qu&egrave; Ann&iacute;bal travessa Catalunya i recluta ibers per marxar cap als Alps i enfrontar-se als romans. L&rsquo;&Agrave;unia es far&agrave; dona en temps de guerra, coneixer&agrave; l&rsquo;amor i l&rsquo;odi, la solidaritat i la tra&iuml;ci&oacute;, i lluitar&agrave; fins al final per defensar la llibertat, la seva i la del seu poble.</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'https://akiarabooks.com/', 'Català', 11, 1, '2024-04-13 11:12:23', '2024-04-13 11:12:23', NULL, 0, 1, 0, NULL, NULL, 0),
(35, 'Safareig', 'safareig', 'Nuria Armengol', 5, NULL, 1, 'Stonberg', '978-84-945156-7-5', 'https://static.wixstatic.com/media/61f884_eb5a8f9323a6477a998a6217b346f5a6~mv2.png/v1/fill/w_274,h_420,al_c,q_90,usm_0.66_1.00_0.01/61f884_eb5a8f9323a6477a998a6217b346f5a6~mv2.webp', '<table>\r\n<tbody>\r\n<tr>\r\n<td>L&rsquo;Helena i el Marcel s&oacute;n una parella que, com tantes d&rsquo;altres, ha seguit les pautes que marca la societat i ho ha assolit tot: una casa bonica a Matadepera, dues filles bessones de sis anys i feina de cert prestigi. Com a bescanvi obt&eacute; el mateix que el d&rsquo;una gran majoria: insatisfacci&oacute; personal. Quan l&rsquo;Helena decideix separar-se descobreix, sorpresa, que el marit t&eacute; una amant des de fa temps. Rere una aparen&ccedil;a fr&iacute;vola i diletant, encara la situaci&oacute; decidint fer tot all&ograve; que no s&rsquo;ha perm&egrave;s pel qu&egrave; diran. Inicia aix&iacute; un recorregut que la portar&agrave; als inferns personals dels quals sorgir&agrave; amb la pell nova, i sense cap escut protector enfrontar&agrave; la seva realitat.</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'https://www.stonbergeditorial.com/', 'Català', 11, 1, '2024-04-13 11:14:41', '2024-04-13 17:31:11', NULL, 0, 1, 0, NULL, NULL, 0),
(36, 'El Mecanisme', 'el-mecanisme', 'Mark Castelló', 5, NULL, 1, 'Stonberg', '978-84-123413-8-6', 'https://static.wixstatic.com/media/61f884_879cf05da0a44f358de0f4d999a2cdc1~mv2.jpg/v1/fill/w_274,h_420,al_c,q_85,usm_0.66_1.00_0.01/61f884_879cf05da0a44f358de0f4d999a2cdc1~mv2.webp', '<p><strong><em>M&rsquo;han intentat matar, em volen arrencar les dents. Estigues alerta. Et podria passar a tu</em>.</strong>&nbsp;<strong>I tot plegat amarat de bon sentit de l\'humor.</strong></p>', 'https://www.stonbergeditorial.com/', 'Català', 11, 1, '2024-04-13 11:18:25', '2024-04-13 17:33:42', NULL, 0, 1, 0, NULL, NULL, 0),
(37, 'Pirena, ets perillosa', 'pirena-ets-perillosa', 'Neus Càceres', 5, NULL, 1, 'Stonberg', '978-84-947542-1-0', 'https://static.wixstatic.com/media/61f884_1c5176cf917d4cb8a8b90b1a00860dcf~mv2.jpg/v1/fill/w_275,h_420,al_c,q_85,usm_0.66_1.00_0.01/61f884_1c5176cf917d4cb8a8b90b1a00860dcf~mv2.webp', '<table>\r\n<tbody>\r\n<tr>\r\n<td>La Pirena fuig de l&rsquo;atracci&oacute; sexual que sent cap al seu pare. La fugida &eacute;s cara, per&ograve; pagar&agrave; el peatge al preu de separar-se de l&rsquo;Eloi, l&rsquo;home de qui est&agrave; obsessivament enamorada; de vendre el seu cos a canvi d&rsquo;afecte; i de ficar el dit a les ferides on ning&uacute; m&eacute;s gosa burxar. Immersa en l&rsquo;espiral de sensualitat on malviu, juga a ser la nena consentida i desbocada tot cercant el pare que l&rsquo;ha d\'aturar d&rsquo;una vegada per totes. I, al fons del pou, el trobar&agrave; en la persona que menys espera.</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'https://www.stonbergeditorial.com/', 'Català', 11, 1, '2024-04-13 11:20:07', '2024-04-13 17:34:05', NULL, 0, 1, 0, NULL, NULL, 0),
(38, 'Era revolucion verticau', 'era-revolucion-verticau', 'Ngũgĩ wa Thiong\'o', 5, NULL, NULL, 'Pagès Editors', '978-84-1303-066-1', 'https://www.raigverdeditorial.cat/wp-content/uploads//2019/02/9788416689606_CATALA_COBERTA_LA-REV-VERT_web-222x300.jpg', '<table>\r\n<tbody>\r\n<tr>\r\n<td>Era revolucion verticau ei ua faula africana d&rsquo;estil classic escrita en kikuiu e revirada en m&egrave;s de ueitanta lengües de tot eth mon. Ei un aumenatge ara tradicion dera literatura orau e d&rsquo;aqueth magic moment partatjat que se da en tot li&eacute;ger t&agrave;s auti. Eth conte explique era formacion deth c&ograve;s uman coma ua discussion entre es sues parts. Braci e cames voler&agrave;n mostrar que son es m&egrave;s importanti en ua competicion qu&rsquo;aur&agrave; coma testim&ograve;nis a toti es animau. Es animaus les prener&agrave;n per p&egrave;cs, e es autes parts deth c&ograve;s i voler&agrave;n intervier. Com acabar&agrave; tot aquer&ograve;? Un meravelh&oacute;s conde de Ngugi wa Thiong&rsquo;o illustrat per Agust&iacute;n Comotto.</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'https://www.pageseditors.cat/', 'Occità', 11, 1, '2024-04-13 11:25:56', '2024-04-13 11:25:56', NULL, 0, 0, 0, NULL, NULL, 0),
(39, 'Ments preclares', 'ments-preclares', 'Quim Monzó', 15, 15, NULL, 'Libros de vanguardia', '978-84-18604-44-7', 'https://shopping.lavanguardia.com/media/catalog/product/cache/1/image/580x/9df78eab33525d08d6e5fb8d27136e95/m/e/mentspreclares_quimmonzo_coberta-pdf.jpg', '<p><strong>&nbsp;El llibre dels idiotes</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Als bars, al carrer, dalt d&rsquo;una moto, als festivals de porno, als restaurants t&iacute;pics, als trens de rodalies,als anuncis de la tele: estem envoltats d&rsquo;idiotes!</p>\r\n<p>La idiotesa campa per tot arreu i adopta noves formes que Quim Monz&oacute; detecta i descriu en els seus escrits.</p>\r\n<p>Ments preclares &eacute;s un repertori de la idiotesa contempor&agrave;nia. Tamb&eacute; hi apareixen els espavilats que es pensen que ens poden prendre el p&egrave;l tranquil&middot;lament. I els qui creuen que ens ho han de donar tot mastegat perqu&egrave; som ximples.</p>\r\n<p>Elcap&iacute;tol&ldquo;&iquest;Com puc ser tan idiota?&rdquo; demostra que de la idiotesa ning&uacute; no se n&rsquo;escapa. Monz&oacute;&nbsp;despulla la bestiesa contempor&agrave;nia amb un final apote&ograve;sic dedicat als idiotes i la intel&middot;lig&egrave;ncia artificial.</p>', 'https://www.lavanguardia.com/libros-de-vanguardia', 'Català', 11, 1, '2024-04-13 11:30:41', '2024-04-13 17:28:52', NULL, 1, 0, 0, NULL, NULL, 0),
(40, 'La mestra i la Bèstia', 'la-mestra-i-la-bestia', 'Imma Monsó', 5, NULL, NULL, 'Llibres Anagrama', '978-84-339-0175-0', 'https://img.beteve.cat/wp-content/uploads/2024/03/PTI-sant-jordi-mestra-576x1024.jpg', '<p><strong>Premi&nbsp;&Ograve;mnium a la Millor Novel&middot;la de l&rsquo;Any</strong></p>\r\n<p><strong>El subtil retrat d&rsquo;una noia que apr&egrave;n a llegir entre l&iacute;nies la hist&ograve;ria del seu pa&iacute;s. Una novel&middot;la plena d&rsquo;intel&middot;lig&egrave;ncia i humor.</strong></p>\r\n<p>Setembre de 1962. Una jove mestra de vocaci&oacute; dubtosa i escassa capacitat de comunicaci&oacute; oral arriba a la seva primera pla&ccedil;a en una escola del Pirineu ribagor&ccedil;&agrave;. Ella volia un poble, una feina i una casa des d&rsquo;on veure caure la neu. Darrere deixa una infantesa marcada per l&rsquo;enigm&agrave;tica activitat del pare i per l&rsquo;original educaci&oacute; rebuda d&rsquo;una mare dividida entre l&rsquo;impuls irresistible d&rsquo;apartar la filla de les consignes del R&egrave;gim i la por d&rsquo;a&iuml;llar-la excessivament de la normalitat imperant.</p>\r\n<p>La c&agrave;ndida Severina, desconeixedora dels h&agrave;bits de conviv&egrave;ncia en un entorn rural i de les marques que la Hist&ograve;ria ha deixat en els habitants, encaixar&agrave; les peces que la lliguen al passat col&middot;lectiu gr&agrave;cies al sentit com&uacute; de la Justa i a la complicitat d&rsquo;un home fascinant amb qui mantindr&agrave; una passi&oacute; deliciosament unidireccional. Tamb&eacute; descobrir&agrave;, horroritzada, que no n&rsquo;hi ha prou amb la discreci&oacute; i l&rsquo;afabilitat perqu&egrave; una comunitat ens deixi en pau.</p>\r\n<p>&laquo;L&rsquo;abast de la narrativa d&rsquo;Imma Mons&oacute; s&rsquo;ha anat eixamplant majestuosament llibre rere llibre&raquo; (Pon&ccedil; Puigdevall,&nbsp;<em>El Pa&iacute;s).</em></p>\r\n<p>&laquo;Una autora excepcional&raquo; (Vicen&ccedil; Pag&egrave;s Jord&agrave;,&nbsp;<em>L&rsquo;Aven&ccedil;).</em></p>\r\n<p>&laquo;Una de les veus m&eacute;s s&ograve;lides i innovadores de la narrativa catalana contempor&agrave;nia&raquo; (Montserrat Lunati).</p>\r\n<p>&laquo;Mons&oacute; acostuma a fer servir personatges disfressats d&rsquo;una aparent excentricitat (sempre de proximitat) que convida els lectors a pensar que no s&oacute;n ben b&eacute; com nosaltres (error) i que obliga els cr&iacute;tics a fer servir l&rsquo;adjectiu d&rsquo;&ldquo;escriptora inclassificable&rdquo;&raquo; (Sergi P&agrave;mies,&nbsp;<em>La Vanguardia).</em></p>', 'https://www.anagrama-ed.es/', 'Català', 11, 1, '2024-04-13 12:38:50', '2024-04-13 18:19:51', NULL, 1, 0, 0, NULL, NULL, 0),
(41, 'Tots els contes', 'tots-els-contes', 'Maria Barbal', 9, NULL, NULL, 'Coulmna Edicions', '9788466431231', 'https://grup62cat.cdnstatics2.com/usuaris/libros/fotos/385/m_libros/portada_tots-els-contes_maria-barbal_202310031312.jpg', '<div id=\"capsa-sinopsi\" class=\"sinopsi\">\r\n<div class=\"frase-mkt\">\r\n<p><strong>El gran recull de contes de Maria Barbal.</strong></p>\r\n<p><strong>UN ESDEVENIMENT LITERARI</strong></p>\r\n</div>\r\n<p>&laquo;L&rsquo;obra de Maria Barbal est&agrave; constru&iuml;da a partir de la concisi&oacute; i l&rsquo;essencialitat i a cavall d&rsquo;una llengua que llisca suaument i s&rsquo;explica sense giragonses&raquo;. Joan Josep Isern,&nbsp;<em><strong>Vilaweb</strong></em></p>\r\n<p>El present volum aplega la totalitat dels contes escrits per Maria Barbal fins ara, tant els publicats en volums com els esparsos en publicacions peri&ograve;diques o en antologies tem&agrave;tiques i, tamb&eacute;, contes encara in&egrave;dits, que s&rsquo;ofereixen en prim&iacute;cia. Tota la narrativa curta de qui ha destacat per damunt de tot com a novel&middot;lista, per&ograve; que des de bon comen&ccedil;ament va dedicar al conte volums tan espl&egrave;ndids com&nbsp;<em>La mort de Teresa</em>, al qual van seguir&nbsp;<em>Ulleres de sol</em>,&nbsp;<em>La pressa del temps</em>,&nbsp;<em>Cada dia penso en tu</em>,&nbsp;<em>Pampallugues</em>&nbsp;o&nbsp;<em>Bari</em>.</p>\r\n<p>La possibilitat d&rsquo;oferir la totalitat dels contes en aquest volum, organitzats de manera diferent de com ens havien arribat fins ara, ens obre una nova dimensi&oacute;, una lectura renovada, i en conseq&uuml;&egrave;ncia ens dona la possibilitat de fer-ne una mirada actual. Una cosmovisi&oacute; nova que ens ajuda a gaudir millor de tota la seva novel&middot;l&iacute;stica.</p>\r\n<p>La veu hi &eacute;s sempre contundent, poderosa en matisos, en gran part gr&agrave;cies a una llengua precisa i rica, que entra suau i ho amara tot. &Eacute;s amb el seu estil inconfusible fet de concisi&oacute;, de claredat, que denota una gran expertesa, que captem aquesta &agrave;nima que ho vertebra tot.</p>\r\n<p>&laquo;Arriben&nbsp;<em>Tots els contes</em>&nbsp;per remenar i triar-los d&rsquo;un en un i me&rsquo;ls miro amb simpatia i amor. Amb sort, podria ser que d&rsquo;aqu&iacute; un temps n&rsquo;hi hagu&eacute;s uns quants m&eacute;s. Significaria que encara tinc for&ccedil;a i paci&egrave;ncia per escriure&rsquo;n, que encara n&rsquo;aprenc i, de les hist&ograve;ries desitjades, me&rsquo;n continuen sortint arguments que, despr&eacute;s d&rsquo;espolsar-se un munt de circumst&agrave;ncies i paraules, aprimats, s&rsquo;imposen. Aquests s&oacute;n uns quants dels contes que he escrit. M&rsquo;hi voleu acompanyar?&raquo;.&nbsp;<strong>Maria Barbal</strong></p>\r\n</div>', 'https://grup62cat.cdnstatics2.com', 'Català', 11, 1, '2024-04-13 12:43:25', '2024-04-13 12:43:25', NULL, 1, 0, 0, NULL, NULL, 0),
(42, 'Biografia del foc', 'biografia-del-foc', 'Carlota Gurt', 9, NULL, NULL, 'Edicions Proa', '9788419657299', 'https://grup62cat.cdnstatics2.com/usuaris/libros/fotos/379/m_libros/portada_biografia-del-foc_carlota-gurt_202306290931.jpg', '<div class=\"frase-mkt\">\r\n<p><strong>Carlota Gurt, m&eacute;s Gurt que mai</strong></p>\r\n</div>\r\n<p>&laquo;Carlota Gurt &eacute;s literatura i coratge en expansi&oacute; permanent&raquo;. Anna Carreras,&nbsp;<strong><em>Ara</em></strong></p>\r\n<p><em>&laquo;Biografia del foc</em>, el nou recull de contes de Carlota Gurt, fa gala d&rsquo;un talent consolidat<em>&raquo;.&nbsp;</em>Adri&agrave; Pujol,<em>&nbsp;<strong>El Pa&iacute;s - Quadern</strong></em></p>\r\n<p>&laquo;Gurt sempre aconsegueix que els textos estiguin vius sense perdre l&rsquo;eleg&agrave;ncia de les met&agrave;fores ni la riquesa l&egrave;xica&raquo;. Carlota Rubio,&nbsp;<strong><em>N&uacute;vol</em></strong></p>\r\n<p>&laquo;L&rsquo;autora mai no ens dona el que esperem, sin&oacute; que va m&eacute;s enll&agrave;&raquo;. Andreu Gomila,&nbsp;<strong><em>Time Out</em></strong></p>\r\n<p>La realitat &eacute;s imprevisible i acostuma a tirar per terra els futurs que imaginem. Vivim a les fosques.&nbsp;<strong>&iquest;Quines conseq&uuml;&egrave;ncies tindran les nostres decisions?</strong>&nbsp;<em>Biografia del foc</em>&nbsp;ens parla d&rsquo;aquesta incertesa terror&iacute;fica i alhora plena de possibilitats. Per les seves p&agrave;gines hi desfilen herois de l&rsquo;angoixa i esclaus de l&rsquo;amor, mares moribundes, personatges que no saben on van ni com hi arribaran. Carlota Gurt ha creat&nbsp;<strong>un aut&egrave;ntic retaule de les relacions humanes</strong>, des de l&rsquo;enamorament m&eacute;s fulgurant fins al ressentiment m&eacute;s agre. Hi trobarem allaus i vides calcinades, per&ograve; tamb&eacute; mons prodigiosos sorgits de la destrucci&oacute;. Alternant entre la ironia i un to gaireb&eacute; confessional,&nbsp;<strong>l&rsquo;autora ens convida a entrar en el seu univers amb una prosa addictiva i una llengua viv&iacute;ssima que atrapen el lector i no el deixen anar</strong>.</p>', 'https://www.grup62.cat/', 'Català', 11, 1, '2024-04-13 12:46:47', '2024-04-13 12:46:47', NULL, 1, 0, 0, NULL, NULL, 0),
(43, 'A les dues seran les tres', 'a-les-dues-seran-les-tres', 'Sergi Pàmies', 9, NULL, NULL, 'Quaderns crema', '978-84-7727-679-1', 'https://www.quadernscrema.com/wp-content/uploads/A-les-dues-seran-les-tres.jpg', '<p>Als contes d&rsquo;<em>A les dues seran les tres</em>, la mem&ograve;ria es converteix en revisi&oacute; de l&rsquo;experi&egrave;ncia, la cr&ograve;nica en comprom&iacute;s amb el passat i la fantasia en un joc que, en funci&oacute; de l&rsquo;estat d&rsquo;&agrave;nim, il&middot;lumina, pertorba o reconforta. Esdeveniments hist&ograve;rics o an&egrave;cdotes deliberadament privades es confabulen en favor de la narraci&oacute;, sempre eloqüent i persuasiva, en qu&egrave; Sergi P&agrave;mies, fidel a una veu i a un estil inconfusibles, aprofundeix en el domini de la tendresa i la digressi&oacute;, aix&iacute; com en l&rsquo;equilibri entre la ironia i la perspic&agrave;cia. Tot al servei d&rsquo;una mirada, resignadament incerta, sobre el pas&mdash;ja sigui endavant o enrere&mdash;del temps.</p>', 'https://www.quadernscrema.com/', 'Català', 11, 1, '2024-04-13 12:51:14', '2024-04-13 12:51:14', NULL, 1, 0, 0, NULL, NULL, 0),
(44, 'Sentimental', 'sentimental', 'Sergi Pàmies', 5, NULL, 5, 'Quaderns crema', '978-84-7727-135-2', 'https://www.quadernscrema.com/wp-content/uploads/sentimental-416x670.jpg', '<p>&laquo;L&rsquo;home que fa un moment ha dit: &ldquo;Vaig a comprar tabac&rdquo; no tornar&agrave; mai m&eacute;s a casa seva&raquo; &eacute;s la primera frase d&rsquo;una hist&ograve;ria que combina el drama, la com&egrave;dia i l&rsquo;acci&oacute; per descriure l&rsquo;experi&egrave;ncia accidentada d&rsquo;un home que fuig. El ritme trepidant i la utilitzaci&oacute; d&rsquo;elements fant&agrave;stics&mdash;que contrasten amb una prosa precisa i realista&mdash;atrapen el lector, que segueix les perip&egrave;cies del protagonista amb una barreja d&rsquo;estupefacci&oacute; i d&rsquo;angoixa. Amb&nbsp;<em>Sentimental</em>, Sergi P&agrave;mies porta al l&iacute;mit les virtuts que li han estat un&agrave;nimement reconegudes als seus llibres anteriors i ens ofereix una novel&middot;la fascinant, amb brillants canvis d&rsquo;escenari i una profunda descripci&oacute; d&rsquo;estats d&rsquo;&agrave;nim.</p>', 'https://www.quadernscrema.com', 'Català', 11, 1, '2024-04-13 12:53:36', '2024-04-13 17:30:40', NULL, 0, 0, 0, NULL, NULL, 0),
(45, 'T’hauria de caure la cara de vergonya', 'thauria-de-caure-la-cara-de-vergonya', 'Sergi Pàmies', 9, NULL, NULL, 'Quaderns crema', '978-84-85704-85-9', 'https://www.quadernscrema.com/wp-content/uploads/t-hauria-de-caure-la-cara-quaderns-crema-416x651.jpg', '<p>&laquo;Els contes de P&agrave;mies s&oacute;n com petits vasos d&rsquo;alcohol molt fort, molt sec, que ens empassem d&rsquo;un glop les nits de&nbsp;<em>spleen</em>&nbsp;per donar una mica de color i de calor a l&rsquo;exist&egrave;ncia&raquo;.<br>Pierre Lepape,&nbsp;<em>Le Monde</em></p>\r\n<p>&laquo;Sergi P&agrave;mies ha publicat aquest llibre de contes perqu&egrave; el lector amb ganes de ficar-se a les entranyes de l&rsquo;urb&agrave; ho faci a trav&eacute;s del llenguatge r&agrave;pid i prec&iacute;s, la ironia feli&ccedil; i la imaginaci&oacute; juganera i tendra d&rsquo;un autor que immediatament v&eacute;nen ganes d&rsquo;incorporar-lo al llibre dels amics i dels entranyables&raquo;.<br>Pablo di Masso,&nbsp;<em>Playboy</em></p>', 'https://www.quadernscrema.com', 'Català', 11, 1, '2024-04-13 12:57:08', '2024-04-13 12:57:08', NULL, 0, 1, 0, NULL, NULL, 0),
(46, 'Història d’un piano', 'historia-dun-piano', 'Ramon Gener', 5, NULL, NULL, 'Columna Edicions', '9788466431910', 'https://grup62cat.cdnstatics2.com/usuaris/libros/fotos/392/m_libros/portada_historia-dun-piano_ramon-gener_202403251044.jpg', '<div class=\"frase-mkt\">\r\n<p><strong>Premi Ramon Llull 2024</strong></p>\r\n<p><strong>Una novel&middot;la inoblidable sobre el poder de redempci&oacute;&nbsp;</strong><strong>de la m&uacute;sica</strong></p>\r\n</div>\r\n<p><strong>Una novel&middot;la inoblidable sobre el poder de redempci&oacute; de la m&uacute;sica.</strong></p>\r\n<p>El protagonista de la novel&middot;la troba el piano de so vellutat que sempre havia volgut en una petita botiga del barri de Gr&agrave;cia. En Janusz Borowski, un home misteri&oacute;s nascut en un bosc a l&rsquo;est de Pol&ograve;nia, l&rsquo;adverteix que es tracta d&rsquo;un piano molt especial que ha de cuidar. El piano de cua, amb el n&uacute;mero de s&egrave;rie 31887, &eacute;s un Grotrian-Steinweg constru&iuml;t a Brunsvic (Alemanya) l&rsquo;any 1915. La descoberta d&rsquo;un secret ocult al seu interior el portar&agrave; a iniciar un llarg viatge en un relat que recorre la hist&ograve;ria d&rsquo;Europa del segle xx.</p>\r\n<p><em>Hist&ograve;ria d&rsquo;un piano&nbsp;</em>&eacute;s una novel&middot;la captivadora sobre la for&ccedil;a d&rsquo;un instrument que esdev&eacute; una met&agrave;fora del poder de redempci&oacute; a trav&eacute;s de l&rsquo;amor, de l&rsquo;amistat, de la bellesa i, per descomptat, de la m&uacute;sica.</p>\r\n<p>&nbsp;</p>\r\n<p><em>&laquo;L&rsquo;&uacute;nic que volia era ser all&agrave; quan el seu fill arrib&eacute;s. Volia ser all&agrave; igual que hi havia estat totes les vegades que en Johannes havia tornat de Leipzig. Si abans no havia fallat mai, ara encara menys.</em></p>\r\n<p><em>Asseguda al banc central de l&rsquo;andana, pensava en com es llan&ccedil;aria a sobre d&rsquo;ell, en com l&rsquo;abra&ccedil;aria amb totes les seves forces i en com, si no fos per la seva complexi&oacute; robusta, seria capa&ccedil; de trencar-lo en mil bocins&raquo;.</em></p>\r\n<p>&nbsp;</p>\r\n<p>&laquo;La construcci&oacute; &eacute;s ambiciosa i convincent. Hi desfila la hist&ograve;ria europea del segle xx&raquo;. Carles Casajuana</p>\r\n<p>&laquo;Una de les novel&middot;les catalanes m&eacute;s importants que he llegit en molts anys. Cada p&agrave;gina est&agrave; bellament escrita&raquo;. Pere Gimferrer</p>\r\n<p>&laquo;En Ramon Gener no ha fet un llibre de temporada, ha escrit una novel&middot;la per sempre&raquo;. Gerard Quintana</p>\r\n<p>&laquo;Una hist&ograve;ria destinada a enamorar molts lectors. Un gran Premi Ramon Llull&raquo;. Isona Passola</p>\r\n<p>&laquo;La combinaci&oacute; de la perip&egrave;cia personal dels protagonistes amb la hist&ograve;ria europea &eacute;s molt destacable, aix&iacute; com el pacifisme que se&rsquo;n despr&egrave;n&raquo;. N&uacute;ria Pradas</p>\r\n<p>&laquo;T&eacute; for&ccedil;a. T&eacute; m&agrave;gia. Destaca per la construcci&oacute; del relat i per la capacitat d&rsquo;emocionar-nos. Un plantejament literari d&rsquo;alt nivell&raquo;. Carme Riera</p>', 'https://grup62cat.cdnstatics2.com', 'Català', 11, 1, '2024-04-13 13:03:42', '2024-04-13 13:03:42', NULL, 1, 0, 0, NULL, NULL, 0),
(47, 'Confeti', 'confeti', 'Jordi Puntí', 5, NULL, NULL, 'Edicions Proa', '978-84-19657-57-2', 'https://grup62cat.cdnstatics2.com/usuaris/libros/fotos/391/m_libros/portada_confeti_jordi-punti_202401171704.jpg', '<div class=\"frase-mkt\">\r\n<p><strong>El desig de ser feli&ccedil; a qualsevol preu.</strong></p>\r\n</div>\r\n<p>&laquo;Aqueta novel&middot;la &eacute;s un regal als lectors&raquo;&nbsp;<strong>M&agrave;rius Serra,&nbsp;<em>La Vanguardia</em></strong></p>\r\n<p>\"Els optimistes ho veuen tot de color rosa i els pessimistes ho veuen tot negre. Entre els dos colors, vivim envoltats d\'il&middot;lusions, somnis, esperances, malentesos, enveges, trampes.\" Amb aquestes paraules el narrador de&nbsp;<em>Confeti</em>&nbsp;ens avan&ccedil;a la seva motivaci&oacute; per escriure: demostrar que gran part de l\'exist&egrave;ncia humana &eacute;s una ficci&oacute; feta a mida. I com a periodista d\'espectacles, troba en la figura de Xavier Cugat la inspiraci&oacute; ideal. El m&uacute;sic catal&agrave; va dedicar tota la vida a ser feli&ccedil; i fam&oacute;s a qualsevol preu, sempre gr&agrave;cies a all&ograve; que l\'apassionava: les caricatures, les orquestres, les pel&middot;l&iacute;cules, els matrimonis amb dones guapes i joven&iacute;ssimes, els chihuahues...</p>\r\n<p>Amb una prosa elegant i en&egrave;rgica com el ball de Fred Astaire, tocada d\'un humor fi, Jordi Punt&iacute; ens fa viatjar de Nova York a Hollywood, de l\'Havana a l\'hotel Ritz de Barcelona. Aix&iacute;, al llarg de tot un segle turbulent i fantasi&oacute;s, llegim les perip&egrave;cies de dos homes que van ser amics potser per conveni&egrave;ncia, en un joc de miralls en qu&egrave; la imaginaci&oacute; conviu amb la voluntat de ser immortal, etern.</p>', 'https://grup62cat.cdnstatics2.com', 'Català', 11, 1, '2024-04-13 13:07:08', '2024-04-13 13:07:08', NULL, 1, 0, 0, NULL, NULL, 0),
(48, 'Ofert a les mans, el paradís crema', 'ofert-a-les-mans-el-paradis-crema', 'Pol Guasch', 5, NULL, NULL, 'Llibres Anagrama', '978-84-339-2204-5', 'https://www.anagrama-ed.es/uploads/media/portadas/0001/28/xthumb_27454_portadas_big.jpeg.pagespeed.ic.dW2ifEQDHy.webp', '<p><strong>Efervesc&egrave;ncia i melancolia: una novel&middot;la sobre l&rsquo;amistat en un m&oacute;n abocat al col&middot;lapse.</strong></p>\r\n<p>La Rita viu a la Col&ograve;nia, dalt d&rsquo;un cim on homes cansats buiden una mina a punt d&rsquo;esgotar-se. Des d&rsquo;all&iacute;, contempla el poble enfonsat a la vall, i els boscos que, tot d&rsquo;una, comencen a cremar. En L&iacute;ton, que va cr&eacute;ixer a ciutat, apaga el foc amb la resta de joves del Servei.</p>\r\n<p>Aquesta novel&middot;la ressegueix la hist&ograve;ria dels dos amics: la infantesa en contextos oposats, el descobriment del desig, els seus amors amb en F&egrave;lix i en Ren&eacute; &ndash;i la nost&agrave;lgia del futur que no ser&agrave;. Junts viuen l&rsquo;emancipaci&oacute; i l&rsquo;efervesc&egrave;ncia festiva de la vintena, per&ograve; tamb&eacute; les servituds de la fam&iacute;lia i d&rsquo;una &egrave;poca marcada per l&rsquo;extinci&oacute;: com deu ser el brunzit d&rsquo;una abella? En un m&oacute;n abocat al col&middot;lapse, all&agrave; on la vida es fa impossible de viure, la Rita i en L&iacute;ton converteixen l&rsquo;amistat en una confabulaci&oacute; per pensar un univers habitable.</p>\r\n<p>Pol Guasch ha escrit un llibre en qu&egrave; cada dosi de dolor t&eacute; el seu revers fulgurant, i cada desenlla&ccedil; augura un nou comen&ccedil;ament. Desordenada com la mem&ograve;ria, fosca i lluminosa alhora,&nbsp;<em>Ofert a les mans, el parad&iacute;s crema</em>&nbsp;&eacute;s melanc&ograve;lica com nom&eacute;s ho pot ser assistir a la fosa en negre de la joventut del m&oacute;n.</p>\r\n<p>&laquo;&Eacute;s un dels joves prodigiosos de la poesia del nostre pa&iacute;s&raquo; (Pepa Blanes,&nbsp;<em>Cadena SER</em>).</p>\r\n<p>&laquo;El catal&agrave; de Guasch &eacute;s actual, bombollejant, capa&ccedil; de descriure amb llum interna els matisos d&rsquo;all&ograve; real, una prosa que desborda la sensibilitat d&rsquo;un autor poeta&raquo; (Val&egrave;ria Gaillard,&nbsp;<em>El Peri&oacute;dico</em>).</p>\r\n<p>&laquo;Una descripci&oacute; de l&rsquo;horror feta des de la fascinaci&oacute; que normalment es reserva a la bellesa&raquo; (Guillem Gisbert).</p>\r\n<p>--</p>\r\n<p><a href=\"https://open.spotify.com/show/5YfkX92gpWnDnG3nCDLcBy\" target=\"_blank\" rel=\"noopener\">Escolta&nbsp;el p&ograve;dcast Parad&iacute;s</a>,&nbsp;les converses de l\'autor amb altres creadors al voltant de les q&uuml;estions centrals de la novel&middot;la, com l&rsquo;amistat, l&rsquo;amor, la classe, la fam&iacute;lia o&nbsp;&nbsp;la possibilitat de viure en un m&oacute;n inhabitable.</p>', 'https://www.anagrama-ed.es', 'Català', 11, 1, '2024-04-13 13:11:57', '2024-04-13 13:11:57', NULL, 1, 0, 0, NULL, NULL, 0),
(49, 'Estimada desconeguda', 'estimada-desconeguda', 'Júlia Bertran', 5, NULL, 8, 'La Campana', '978-84-18226-87-8', 'https://www.penguinllibres.com/2810859-thickbox_default/estimada-desconeguda.jpg', '<p>&laquo;Si vols, no pots. Quan un inesperat desig maternal em va esclatar a la cara, vaig descobrir que ja era massa tard. El meu cos era un desert. Si volia gestar i parir un fill, em quedava una opci&oacute;: fer-ho amb l\'&ograve;vul d\'una altra dona&raquo;.</p>\r\n<p>Aquesta &eacute;s una hist&ograve;ria sobre una decisi&oacute; dif&iacute;cil. Sobre mutacions f&iacute;siques i l&iacute;mits que es desborden. La cr&ograve;nica d\'un periple m&egrave;dic i un intent de despullar d\'eufemismes i tab&uacute;s la ind&uacute;stria de la reproducci&oacute; assistida. Una exploraci&oacute; del dol gen&egrave;tic i de les contradiccions que claven els ullals. Una escaleta perqu&egrave; ascendeixin altres hist&ograve;ries subterr&agrave;nies. I, sobretot, una invitaci&oacute; a pensar plegades el nostre futur.</p>\r\n<p>&laquo;Transformant la culpa en responsabilitat, em dic. [...] D&rsquo;aqu&iacute; aquest llibre que tens a les mans. D&rsquo;aqu&iacute; l&rsquo;impuls per compartir- vos la meva hist&ograve;ria personal, les preguntes m&eacute;s aspres. Airejo les v&iacute;sceres per si poden resultar &uacute;tils a alg&uacute;, per si la meva experi&egrave;ncia pot encetar converses, per aportar unes p&agrave;gines al que ha d&rsquo;esdevenir un relat col&middot;lectiu. Aqu&iacute; rau la meva responsabilitat, en posar els privilegis i altaveus que se m&rsquo;han brindat al servei d&rsquo;una conversa p&uacute;blica pendent, la de l&rsquo;augment sostingut de la compravenda d&rsquo;&ograve;vuls al nostre pa&iacute;s.</p>\r\n<p>Al llarg d&rsquo;aquestes p&agrave;gines he esbossat aquells temes que crec que s&rsquo;han d&rsquo;abordar col&middot;lectivament: Per qu&egrave; tantes dones arribem de mala gana i amb el cap cot a la reproducci&oacute; assistida? Quina estela de malestars i desigualtats socials deixen els mercats reproductius i, concretament, la legislaci&oacute; actual sobre la donaci&oacute; d&rsquo;&ograve;vuls? Com s&rsquo;ha de plantejar perqu&egrave; sigui m&eacute;s respectuosa i &egrave;tica amb totes les parts implicades?</p>\r\n<p>Qu&egrave; ha de canviar o qu&egrave; s&rsquo;ha d&rsquo;implementar perqu&egrave; les donants i les persones que neixen fruit d&rsquo;aquestes t&egrave;cniques tinguin m&eacute;s garanties i m&eacute;s drets?&raquo;</p>', 'https://www.penguinrandomhousegrupoeditorial.com/sello/la-campana/', 'Català', 11, 1, '2024-04-13 13:18:03', '2024-04-13 18:13:43', NULL, 1, 0, 0, NULL, NULL, 0),
(50, 'La casa de la nit', 'la-casa-de-la-nit', 'Jo Nesbø', 13, NULL, 7, 'Edicions Proa', '9788419657534', 'https://grup62cat.cdnstatics2.com/usuaris/libros/fotos/390/m_libros/portada_la-casa-de-la-nit_jo-nesbo_202312141604.jpg', '<p><strong>Quan et truquin, no contestis. Torna l\'inconfusible Jo Nesbo amb un thriller renovador.</strong></p>\r\n<p>Arran de la mort dels seus pares, en Richard Elauved, de catorze anys, ha anat a viure amb la seva tieta i el seu oncle al poble remot de Ballantyne. Richard es guanya r&agrave;pidament la reputaci&oacute; d\'inadaptat, i quan un company de classe anomenat Tom desapareix, tothom sospita que ell n&rsquo;&eacute;s el responsable. Ning&uacute; se&rsquo;l creu quan diu que la cabina telef&ograve;nica a la vora del bosc va xuclar en Tom pel receptor com si fossin en una pel&middot;l&iacute;cula de terror. Ning&uacute; excepte la Karen, una companya que anima en Richard a buscar pistes que la policia refusa investigar. Rastrejar el n&uacute;mero de tel&egrave;fon al qual va trucar en Tom des de la cabina el porta a una casa abandonada al bosc de Mirall. All&agrave; veu una cara terror&iacute;fica a la finestra. I llavors les veus comencen a xiuxiuejar-li a l\'orella...</p>\r\n<p>I, tanmateix, en Richard potser no &eacute;s el narrador m&eacute;s fiable de la seva pr&ograve;pia hist&ograve;ria...</p>', 'https://grup62cat.cdnstatics2.com', 'Català', 11, 1, '2024-04-13 13:22:07', '2024-04-13 18:05:36', NULL, 1, 0, 0, NULL, NULL, 0),
(51, 'ALOMA', 'aloma', 'Mercè Rodoreda', 5, 17, 7, 'Educaula', '9788492672271', 'https://imagessl1.casadellibro.com/a/l/s7/71/9788492672271.webp', '<p><strong>Amb estudi introductori i propostes did&agrave;ctiques de Neus Real.</strong></p>\r\n<p><em>Aloma,</em> editada inicialment el 1938, es la novel&middot;la que enlla&ccedil;a les produccions de preguerra i de postguerra de Merce Rodoreda. &Eacute;s l\'&uacute;nic t&iacute;tol de la seva primera etapa que l\'escriptora va reconeixer, i la versi&oacute; revisada de 1969 (la definitiva i que, per tant, s\'ofereix aqu&iacute;) permet observar l\'evoluci&oacute; de l\'autora i comprendre millor el conjunt de la seva obra.Neus Real, professora de la UAB i guanyadora del Premi Fundaci&oacute; Merce Rodoreda 2005, ha elaborat un proleg i unes propostes de treball que volen ser una eina &uacute;til per als professors i els estudiants que s\'aproximin tant a Aloma com a la narrativa rodorediana.Aloma narra la historia de la relaci&oacute; entre la jove barcelonina de divuit anys que d&oacute;na t&iacute;tol a la novel&middot;la i Robert, el parent pol&iacute;tic ja madur vingut d\'America. El relat es concentra en els sentiments contradictoris d\'Aloma, en com viu la relaci&oacute; tant individualment com respecte del seu entorn social i en la manera com tot plegat enfronta dram&agrave;ticament la noia a una realitat molt diferent de qualsevol ideal adolescent.</p>', 'https://www.grup62.cat/editorial/educaula62/65', 'Català', 11, 1, '2024-04-13 14:14:25', '2024-04-13 18:05:18', NULL, 0, 0, 0, NULL, NULL, 0),
(52, 'Llibre del desassossec', 'llibre-del-desassossec', 'Fernando Pessoa', 11, NULL, 5, 'Quaderns crema', '978-84-7727-606-7', 'https://www.quadernscrema.com/wp-content/uploads/BMI0125-416x657.jpg', '<p>El&nbsp;<em>Llibre del desassossec</em>, que presentem per primer cop tradu&iuml;t &iacute;ntegrament al catal&agrave;, va n&eacute;ixer el 1913 i Pessoa hi va treballar durant tota la vida. Aquesta &eacute;s una obra inacabada i inacabable: un univers sencer en expansi&oacute;, d&rsquo;una pluralitat&mdash;liter&agrave;ria i vital&mdash;infinita. Bernardo Soares, ajudant de comptable a la ciutat de Lisboa, autor fictici d&rsquo;aquest llibre, &eacute;s, segons Pessoa, &laquo;un semiheter&ograve;nim, perqu&egrave;, no essent meva la personalitat, &eacute;s, no diferent de la meva, sin&oacute; una mutilaci&oacute; d&rsquo;ella&raquo;. Prosador que poetitza, somniador que raona i m&iacute;stic descregut, aquest &eacute;s el m&eacute;s pesso&agrave; de tots els heter&ograve;nims, i la riquesa inesgotable de les seves p&agrave;gines&mdash;representaci&oacute; de tot un m&oacute;n&mdash;cont&eacute; el geni de Pessoa en tota la seva extensi&oacute;. Aquesta versi&oacute; del&nbsp;<em>Llibre del desassossec</em>&nbsp;segueix el text establert per Richard Zenith en l&rsquo;edici&oacute; portuguesa corregida i ampliada de l&rsquo;any 2010.</p>\r\n<p>Nova edici&oacute; del llibre m&eacute;s emblem&agrave;tic de Fernando Pessoa, segons l&rsquo;edici&oacute; portuguesa corregida i ampliada de l&rsquo;any 2010.</p>\r\n<p>&nbsp;</p>\r\n<p>\"S&oacute;n tan imprescindibles els <em>Essais</em>&nbsp;de Montaigne per entendre els or&iacute;gens de la modernitat com ho &eacute;s el<em>&nbsp;Llibre del desassossec</em>, de Fernando Pessoa, per entendre les tribulacions de l&rsquo;home intel&middot;ligent al segle XX\".<em><br></em>Jordi Llovet,&nbsp;<em>El Pa&iacute;s</em></p>\r\n<p>&laquo;El volum, un h&iacute;brid entre poesia, assaig i literatura del jo, defuig la narrativitat i s&rsquo;instal&middot;la en les reflexions est&agrave;tiques i pessimistes d&rsquo;un ajudant de comptable, Bernardo Soares&raquo;.<br>Jordi Nopca,&nbsp;<a href=\"https://llegim.ara.cat/reportatges/Torna-Fernando-Pessoa-Set-Alhora_0_2139386061.html\" target=\"_blank\" rel=\"noopener\"><em>Ara</em></a></p>\r\n<p>&laquo;Bernardo Soares (heter&ograve;nim de Pessoa) ens porta fins a la divagaci&oacute; m&eacute;s absoluta en certs moments de la hist&ograve;ria, sempre amb una qualitat liter&agrave;ria i narrativa excel&middot;lent que fa molt lleg&iacute;vol aquest dietari&raquo;.<br>&Aacute;lvaro Mu&ntilde;oz,&nbsp;<a href=\"http://www.llegirencasdincendi.cat/2019/01/llibre-del-desassossec-de-fernando-pessoa/\" target=\"_blank\" rel=\"noopener\"><em>Llegir en cas d&rsquo;incendi</em></a></p>\r\n<p>&laquo;Llibre del desassossec s&rsquo;ajusta com un guant a tots aquests desperfectes de l&rsquo;&agrave;nima que est&agrave; ocasionant la nostra &egrave;poca&raquo;.<br>Jos&eacute; Andr&eacute;s Rojo,&nbsp;<em>El Pa&iacute;s</em></p>\r\n<p>&laquo;Una enlluernadora confessi&oacute; en forma de breviari&raquo;.<br>Iv&aacute;n Pinto,&nbsp;<a href=\"http://www.acantilado.es/wp-content/uploads/de_la_vanguardia.pdf\" target=\"_blank\" rel=\"noopener noreferrer\"><em>La Vanguardia</em></a></p>\r\n<p>&laquo;Un dels llibres m&eacute;s inquietants, excel&middot;lents i representatius del segle XX, en una nova, bella i exemplar edici&oacute;&raquo;.<br>Manuel Arranz,&nbsp;<em>Levante</em></p>\r\n<p>&laquo;Aquesta obra s&oacute;n passatges, fragments, retalls de la vida de Pessoa recollits en pensaments, aforismes, relats&hellip; Intimitats emocionals i existencials&raquo;.<br>Winston Manrique Sabogal,&nbsp;<a href=\"http://wmagazin.com/relatos/los-libros-inspiradores-de-pedro-almodovar-en-dolor-y-gloria/\" target=\"_blank\" rel=\"noopener\"><em>WMagaz&iacute;n</em></a></p>', 'https://www.quadernscrema.com/', 'Català', 11, 1, '2024-04-13 14:21:32', '2024-04-13 14:21:32', NULL, 0, 0, 0, NULL, NULL, 0),
(53, 'El banquer anarquista', 'el-banquer-anarquista', 'Fernando Pessoa', 5, NULL, 5, 'Quaderns crema', '978-84-7727-366-0', 'https://www.quadernscrema.com/wp-content/uploads/el-banquer-anarquista-1.jpg', '<p>El present relat, &laquo;faula dial&egrave;ctica&raquo; -en paraules del mateix Pessoa- on un banquer anarquista per convicci&oacute; construeix discursivament un pamflet ir&ograve;nic i incendiari contra la societat burgesa i la divinitzaci&oacute; dels diners, &eacute;s un dels textos m&eacute;s populars i brillants de l&rsquo;autor. Tradu&iuml;t a les m&eacute;s diverses lleng&uuml;es, continua sorprenent i fascinant els lectors per l&rsquo;enginy paradoxal i el cinisme d&rsquo;insuperable actualitat que traspuen els mots del c&egrave;lebre banquer. &laquo;Hi ha, doncs, una cosa evident?&hellip; En l&rsquo;estat social present no &eacute;s possible un grup d&rsquo;homes, per ben intencionats que siguin, per preocupats que estiguin nom&eacute;s a combatre les ficcions socials i treballar per la llibertat, que treballin junts sense que espont&agrave;niament cre&iuml;n tirania entre si&hellip;? sense destruir en la pr&agrave;ctica tot all&ograve; que volen en la teoria.&raquo;</p>\r\n<p>&nbsp;</p>\r\n<p>&ldquo;Aquest llibre &eacute;s una joia, un d&rsquo;aquells llibrets amb els quals gaudeixes un dia, una llarga tarda o una feli&ccedil; nit, i que es degusten gaireb&eacute; de cop, deixant-te emportar pel seu ritme, interromput potser per alguna pausa d&rsquo;avituallament&rdquo;.<br>Xavier Bassas,&nbsp;<em>Diari de Tarragona</em></p>', 'https://www.quadernscrema.com', 'Català', 11, 1, '2024-04-13 14:23:54', '2024-04-13 17:30:07', NULL, 0, 0, 0, NULL, NULL, 0),
(54, 'Tiberi Cèsar', 'tiberi-cesar', 'Núria Cadenes', 3, 18, 7, 'Edicions Proa', '9788419657336', 'https://grup62cat.cdnstatics2.com/usuaris/libros/fotos/382/m_libros/portada_tiberi-cesar_nuria-cadenes_202309081304.jpg', '<p>Aquesta &eacute;s la hist&ograve;ria de Tiberi, fill de L&iacute;via, successor d\'August, segon emperador de Roma, despietat conqueridor de Pann&ograve;nia i de Germ&agrave;nia, home d\'esperit torturat, enamorat, taciturn, cruel, culte. Aquesta &eacute;s la hist&ograve;ria de la ciutat que va bastir el seu domini sobre mig m&oacute;n: lleis, marbre i rapinya. N&uacute;ria Cadenes recrea fastuosament la Roma del segle primer i ens submergeix, potser com mai abans, en la viv&egrave;ncia interior i m&eacute;s humana dels seus protagonistes&nbsp; i, particularment, de les dones, que aqu&iacute; prenen un relleu nou i merescut. Escrita amb una for&ccedil;a verbal espectacular i hipn&ograve;tica,&nbsp;<em>Tiberi C&egrave;sar</em>&nbsp;&eacute;s una novel&middot;la hist&ograve;rica i &iacute;ntima, el relat d\'un temps clau en una Roma grandiosa, brutal i tr&agrave;gica com les persones que la van fer.</p>', 'https://grup62cat.cdnstatics2.com', 'Català', 11, 1, '2024-04-13 14:31:38', '2024-04-14 07:39:52', NULL, 1, 0, 0, NULL, NULL, 0),
(55, 'El càsting', 'el-casting', 'Antònia Carré-Pons', 5, NULL, 6, 'Club Editor', '978-84-7329-433-1', 'https://clubeditor.cat/wp-content/uploads/2024/01/frontal_casting.jpg', '<p>Que s&rsquo;apartin Arist&ograve;fanes i Menandre, Ant&ograve;nia Carr&eacute;-Pons &eacute;s la reina de la com&egrave;dia gerontol&ograve;gica. Despr&eacute;s dels vells al natural de&nbsp;<a href=\"https://clubeditor.cat/llibres/com-sesbrava-la-mala-llet/?hilite=Ant%C3%B2nia\"><em>Com s&rsquo;esbrava la mala llet</em></a>, arriben la Paula i l&rsquo;Ernestina, una parella de velles que ha sobreviscut a la covid i es nega a enxampar un virus igualment infecci&oacute;s: el tedi postjubilaci&oacute;.</p>\r\n<p>El joc que s&rsquo;empesquen per aconseguir-ho consisteix a llogar l&rsquo;habitaci&oacute; de convidats &mdash;gangues del mercat immobiliari. Comencen les entrevistes per triar company de pis i, amb cada nou candidat, un nou sainet i una nova disfressa. &Eacute;s un di&agrave;leg en viu, i dos mons que xoquen i es riuen l&rsquo;un de l&rsquo;altre sense pietat.</p>\r\n<p>Aix&ograve; &eacute;s&nbsp;<em>El c&agrave;sting</em>: quan de les manies i els costums exc&egrave;ntrics de dues jubilades no en un surt una sitcom com&nbsp;<em>Plats bruts</em>, sin&oacute; un llibre.</p>\r\n<p>&nbsp;</p>\r\n<h6>N&rsquo;han dit</h6>\r\n<p>&ldquo;<em>El c&agrave;sting</em>&nbsp;es llegeix d&rsquo;una revolada gr&agrave;cies a uns cap&iacute;tols curts que llisquen com l&rsquo;aigua i di&agrave;legs consecutius sense marques d&rsquo;entrada.&rdquo; Oriol Osan i Tort a&nbsp;<strong>N&uacute;vol&nbsp;</strong>&mdash;&nbsp;<a href=\"https://www.nuvol.com/llibres/dues-jubilades-de-traca-i-mocador-369348\">Ant&ograve;nia Carr&eacute;-Pons publica &lsquo;El c&agrave;sting&rsquo;, una divertida oda a la llibertat de la vellesa</a></p>\r\n<p>Llu&iacute;s Llort comenta que el&nbsp;<em>C&agrave;sting</em>&nbsp;permet a l&rsquo;autora parlar de diversos temes d&rsquo;actualitat social.&nbsp;<strong>El Punt Avui &mdash;</strong><a href=\"https://www.elpuntavui.cat/cultura/article/19-cultura/2386235-quan-la-frontera-de-la-vellesa-s-allunya.html\">Quan la frontera de la vellesa s&rsquo;allunya</a></p>', 'https://clubeditor.cat', 'Català', 11, 1, '2024-04-13 14:47:37', '2024-04-13 17:39:05', NULL, 1, 0, 0, NULL, NULL, 0),
(56, 'Un film (3000 metres)', 'un-film-3000-metres', 'Victor Català', 5, NULL, 6, 'Club Editor', '978-84-7329-191-0', 'https://clubeditor.cat/wp-content/uploads/2018/11/54-Un-film_baixa.jpg', '<p>Nonat Ventura, fill bord abandonat a l&rsquo;Hospici, en surt amb l&rsquo;ambici&oacute; de reparar el greuge que li ha fet el Dest&iacute;. Com que les vies legals duen totes al cul-de-sac de la pobresa, decideix abandonar Girona i l&rsquo;ofici de serraller per convertir-se en un lladre &mdash;per&ograve; no pas un lladre qualsevol, sin&oacute; el m&eacute;s fam&oacute;s i refinat de Barcelona, el m&eacute;s admirat de tothom, el&nbsp;<em>Senyoret</em>.</p>\r\n<p>A trav&eacute;s de la seva vida, &eacute;s la gran ciutat convulsa i tota la seva fauna que V&iacute;ctor Catal&agrave; fa espurnejar davant dels nostres ulls, passejant per totes les cantonades i entrant a totes les porteries com el califa de les&nbsp;<em>Mil i una nits</em>. Al seu pas atrapem les converses del proxeneta amb la puta, de la muller amb el marit, del solter amb el coix&iacute;, de l&rsquo;assass&iacute; amb la v&iacute;ctima&hellip;</p>\r\n<p><em>Un film (3000 metres)</em>&nbsp;&eacute;s una obra &uacute;nica. La&nbsp;<mark class=\"hilite term-1\" data-markjs=\"true\">fascinaci&oacute;</mark>&nbsp;pels baixos fons que ha produ&iuml;t a Fran&ccedil;a un Balzac o un Hugo, a Catalunya produeix aquesta novel&middot;la contempor&agrave;nia del cine mut. &Eacute;s tota l&rsquo;energia viva de la&nbsp;<em>belle &eacute;poque</em>&nbsp;i tota la gr&agrave;cia salada de Caterina Albert que sonen en aquestes p&agrave;gines, veritable tresor enterrat de la literatura catalana. Desenterra&rsquo;l, lector: la cr&iacute;tica la condemnava per anacr&ograve;nica i &eacute;s una meravella que est&agrave; fora del temps.</p>\r\n<p><strong><em>Un film (3.000 metres)</em>&nbsp;va ser un dels&nbsp;<a href=\"http://www.elperiodico.com/es/noticias/sant-jordi-2015/libros-mas-vendidos-sant-jordi-4127323\">cinc t&iacute;tols</a>&nbsp;m&eacute;s venuts del&nbsp;<a href=\"http://www.lavanguardia.com/libros/sant-jordi/20150423/54430816291/sant-jordi-autores-mas-vendidos.html\">Sant Jordi 2015</a>. Llegidors de Caterina Albert: gr&agrave;cies!</strong></p>\r\n<h6>N&rsquo;han dit</h6>\r\n<p><a href=\"http://clubeditor.blogspot.com.es/2015/03/desenterrar-un-tresor-un-film-de-victor.html\" target=\"_blank\" rel=\"noopener noreferrer\">Carta el&egrave;ctrica sobre&nbsp;<em>Un film (3000 metres)</em></a><br><a href=\"http://www.elpuntavui.cat/cultura/article/19-cultura/936103-victor-catala-reneix.html\" target=\"_blank\" rel=\"noopener noreferrer\"><em>V&iacute;ctor Catal&agrave; reneix</em></a><em>&nbsp;</em>per&nbsp;<strong>David Castillo</strong>&nbsp;a&nbsp;<em>El Punt Avui</em><br><em><a href=\"http://www.diaridegirona.cat/dominical/2016/01/27/caterina-albert-pionera-universal/764664.html\" target=\"_blank\" rel=\"noopener noreferrer\">Caterina Albert, pionera universal</a></em>&nbsp;per&nbsp;<strong>Llu&iacute;s Busquets</strong>&nbsp;al&nbsp;<em>Diari de Girona</em><br><em>Recordant Caterina Albert</em>&nbsp;<a href=\"http://www.ccma.cat/tv3/alacarta/tria33/recordant-caterina-albert/video/5578935/\" target=\"_blank\" rel=\"noopener noreferrer\">Tria33</a><br>Ressenya de&nbsp;<strong>Jaume C. Pons Alorda</strong>&nbsp;a&nbsp;<a href=\"http://www.nuvol.com/opinio/caterina-albert-i-el-seu-excepcional-film-rescatat/\" target=\"_blank\" rel=\"noopener noreferrer\">N&uacute;vol</a><br>Ressenya de&nbsp;<strong>Sebasti&agrave; Portell</strong>&nbsp;a&nbsp;<a href=\"http://www.llegirencasdincendi.cat/2015/04/un-film-3000-metres-nomes-una-pel%C2%B7licula/\" target=\"_blank\" rel=\"noopener noreferrer\">Llegir en cas d&rsquo;incendi</a><br>Ressenya a&nbsp;<a href=\"http://quaderndemots.cat/un-film-3000-metres/\" target=\"_blank\" rel=\"noopener noreferrer\">Quadern de mots</a><br>Ressenya de&nbsp;<strong>Ramon Moreno</strong>&nbsp;a&nbsp;<a href=\"http://www.directe.cat/llibre-en-directe/404917/ressenya-un-film-3000-metres\" target=\"_blank\" rel=\"noopener noreferrer\">directe.cat</a></p>', 'https://clubeditor.cat/', 'Català', 11, 1, '2024-04-13 14:52:42', '2024-04-13 17:38:50', NULL, 0, 0, 0, NULL, NULL, 0);
INSERT INTO `books` (`id`, `titol`, `slug`, `autor_nom`, `genere_id`, `autor_id`, `editorial_id`, `editorial_nom`, `isbn`, `imatge`, `sinopsi`, `editorial_web`, `idioma`, `user_id`, `active`, `created_at`, `updated_at`, `foto`, `novetat`, `primera`, `auto`, `cita`, `comentari`, `estrena`) VALUES
(57, 'Ocàs i fascinació', 'ocas-i-fascinacio', 'Eva Baltasar', 5, NULL, 6, 'Club Editor', '978-84-7329-429-4', 'https://clubeditor.cat/wp-content/uploads/2023/12/frontal_ocas-1.jpg', '<p>lotes, aix&ograve; &eacute;s el m&agrave;xim que has aconseguit. Tens mitja feina, una habitaci&oacute; rellogada i un t&iacute;tol que acredita que ets dels que no poden caure. Per&ograve; caus. El risc ha entrat a la teva vida sense que el veiessis venir. D&rsquo;un dia per l&rsquo;altre tot all&ograve; que no et podia passar esdev&eacute; real: perds el sostre, perds la feina i et parteixen la cara.</p>\r\n<p>Ara la vida ja no va de creure en les regles. Ara tu fabriques l&rsquo;engany. Entrar&agrave;s a les cases dels altres. Creuran que hi ets per netejar-les i fer-los la vida amable. El llop que no havies de trobar si feies bondat ets tu. &iquest;Oi que no tens res a perdre?</p>\r\n<p>Despr&eacute;s del tr&iacute;ptic sobre la maternitat que l&rsquo;ha fet mundialment coneguda, Eva Baltasar trastoca el nostre confort mental des d&rsquo;un altre cant&oacute;, el del pacte social quan esdev&eacute; terrorista. La seva poesia canta la nit al ras, la inquietud de qui se sap invisible enmig de la ciutat. La seva lucidesa mostra el lloc on es toquen el crim i la devoci&oacute;. I la seva nova novel&middot;la va prenyada d&rsquo;un conte on l&rsquo;horror &eacute;s la fada que pinta d&rsquo;or el m&oacute;n.</p>\r\n<h6>N&rsquo;han dit</h6>\r\n<p>&ldquo;El que llegeixo en Baltasar &eacute;s un crit desesperat i lucid&iacute;ssim d&rsquo;alerta: o ens ajudem de deb&ograve; o la gran majoria podem caure al pou.&rdquo; Blanca Llum Vidal a&nbsp;<strong>Catorze</strong>&nbsp;&mdash;<strong>&nbsp;</strong><a href=\"https://www.catorze.cat/biblioteca/deixam-que-hi-pensi/ocas-i-fascinacio-220198/\">Baltasar explica que &laquo;la mort deu ser aix&ograve;, haver-se quedat sense lloc&raquo;</a></p>\r\n<p><em>&ldquo;<mark class=\"hilite term-0\" data-markjs=\"true\">Oc&agrave;s</mark>&nbsp;i&nbsp;<mark class=\"hilite term-1\" data-markjs=\"true\">fascinaci&oacute;</mark></em>&nbsp;&eacute;s un relat en dos temps en qu&egrave; Eva Baltasar aconsegueix que el lector se submergeixi en un cataclisme, en un malson d&rsquo;una saturada concentraci&oacute; de dolor, en el foc de l&rsquo;infern.&rdquo; Pon&ccedil; Puigdevall a&nbsp;<strong>El Pa&iacute;s&nbsp;</strong>&mdash;&nbsp;<a href=\"https://elpais.com/quadern/2024-03-06/eva-baltasar-ens-submergeix-en-el-foc-de-linfern-a-ocas-i-fascinacio.html\">Eva Baltasar ens submergeix en el foc de l&rsquo;infern a &lsquo;<mark class=\"hilite term-0\" data-markjs=\"true\">Oc&agrave;s</mark>&nbsp;i&nbsp;<mark class=\"hilite term-1\" data-markjs=\"true\">fascinaci&oacute;</mark>&rsquo;</a></p>\r\n<p>&ldquo;Les dones de Baltasar no tenen cap lligam amb la comunitat ni, encara menys, amb elles mateixes.&rdquo; N&uacute;ria Bendicho a&nbsp;<strong>Catorze</strong>&nbsp;&mdash;&nbsp;<a href=\"https://www.catorze.cat/biblioteca/eva-baltasar-220271/\">Les dones d&rsquo;Eva Baltasar</a></p>\r\n<p>&ldquo;La protagonista voldria tenir una vida corrent sense renunciar al sentiment de tristesa davant del m&oacute;n i aix&ograve; la fa psicol&ograve;gicament i moralment complexa.&rdquo; Juli&agrave; Guillamon a&nbsp;<strong>La Vanguardia&nbsp;</strong>&mdash;&nbsp;<a href=\"https://clubeditor.cat/wp-content/uploads/2024/03/OcasIFascinacio_LaVanguardia_LesLleisDeLaSelva.pdf\">Les lleis de la selva</a></p>\r\n<p>&ldquo;Quina habilitat, la de Baltasar [&hellip;] per capturar la precarietat actual.&rdquo; Anna Guitart al&nbsp;<strong>Diari ARA&nbsp;</strong>&mdash;&nbsp;<a href=\"https://llegim.ara.cat/opinio/precarietat-l-eva-baltasar-victoria-szpunberg_129_4977150.html\">La precarietat de l&rsquo;Eva Baltasar</a></p>', 'https://clubeditor.cat/', 'Català', 11, 1, '2024-04-13 14:56:07', '2024-04-13 17:38:39', NULL, 0, 0, 0, NULL, NULL, 0),
(59, 'Sota el xal', 'sota-el-xal', 'Tessa Julià i Núria Armengol', 16, 19, 10, 'Adelis', '9788412682977', 'https://imagessl7.casadellibro.com/a/l/s7/77/9788412682977.webp', '<p>A la graduaci&oacute; de batxillerat, la Coco i la Lila es regalen m&uacute;tuament dos xals id&eacute;ntics, que ambdues conservaran per sempre m&eacute;s, com la seva amistat. Passen els anys, totes dues han rodat m&oacute;n i avancen professionalment: una en el camp de la inform&aacute;tica i l\'altra en una ag&eacute;ncia de viatges. En aquest moment, la Lila est&aacute; a punt de casar-se i la Coco no aconsegueix treure\'s del damunt la gaireb&eacute; obsessiva fixaci&oacute; en un amor adolescent, el Fran. Un dia tenen una idea de negoci innovadora que les convertir&aacute; en s&ograve;cies: una p&aacute;gina web d\'all&ograve; m&eacute;s engrescadora que promet boges aventures er&ograve;tiques. La p&aacute;gina web programa cites a cegues a destins paradis&iacute;acs per a encontres amorosos ocasionals amb parelles seleccionades especialment per a cadasc&uacute;. Elles mateixes posaran a prova la seva creaci&oacute; passaran un cap de setmana de sexe inoblidable. El senyor Norbert, client de l\'ag&egrave;ncia de viatges, les descobreix i vol gaudir tamb&eacute; dels serveis que ofereix la p&aacute;gina web. Amb les seves pr&ograve;pies paraules \"t&eacute; ganes de sucar el melindro amb una mossa de bon veure\". I aix&iacute; ho fa.</p>', 'https://editorialaledis.cat', 'Català', 11, 1, '2024-04-14 12:01:22', '2024-04-14 12:08:49', NULL, 1, 0, 0, NULL, NULL, 0),
(60, 'Sankt Pauli, un altre futbol és possible', 'sankt-pauli-un-altre-futbol-es-possible', 'Carles Viñas', 1, 21, 2, 'Tigre de paper', '9788416855032', 'https://www.tigredepaper.cat/ca/cataleg/sankt-pauli/download', '<h2 class=\"o-heading-content-subtitle\">Un altre futbol &eacute;s possible</h2>\r\n<div class=\"c-book__content__authors\"><span class=\"autoria\">Autor/a</span><span class=\"c-book__content__authors__author\"><span class=\"listado\"><a href=\"https://www.tigredepaper.cat/ca/tigre-de-paper-2/autors-autores/natxo-parra-arnaiz\">NATXO PARRA ARNAIZ</a></span><span class=\"listado\"><a href=\"https://www.tigredepaper.cat/ca/tigre-de-paper-2/autors-autores/carles-vinas-gracia\">CARLES VI&Ntilde;AS GRACIA</a></span></span></div>\r\n<div class=\"c-book__content__description c-text-base\">\r\n<p>Aquest no &eacute;s un llibre de futbol. &Eacute;s quelcom m&eacute;s que un recull d&rsquo;an&egrave;cdotes, dades, gols i jugadors d&rsquo;un club concret.</p>\r\n<p>A partir de la descripci&oacute; de la traject&ograve;ria esportiva del St. Pauli fem un recorregut per la hist&ograve;ria d&rsquo;Alemanya, des del seu proc&eacute;s d&rsquo;unificaci&oacute; al segle XIX fins a l&rsquo;actualitat. Vict&ograve;ries i derrotes es barregen amb episodis de lluites socials i reivindicacions obreres, de resist&egrave;ncies al nazisme i manifestacions ecologistes i antinuclears. Ascensos i descensos, ocupacions d&rsquo;habitatges, apoderament popular, creaci&oacute; de la Bundesliga, gentrificaci&oacute;, cultura de graderia, antiracisme, antifeixisme i antisexisme.</p>\r\n<p>El St. Pauli &eacute;s molt m&eacute;s que un simple equip de futbol. &Eacute;s una manera d&rsquo;entendre l&rsquo;esport i el seu arrelament al barri, a la comunitat, a l&rsquo;entorn quotidi&agrave;. &Eacute;s una met&agrave;fora social d&rsquo;una ciutat, Hamburg, i d&rsquo;un pa&iacute;s. Per&ograve; res &eacute;s id&iacute;l&middot;lic. Tampoc el St. Pauli, un club que transita pel futbol professional abordant les contradiccions pr&ograve;pies del futbol modern actual on el negoci tot ho impregna.</p>\r\n<p>Descobrim, doncs, que hi ha darrere aquesta calavera amb qu&egrave; tothom identifica al FC St. Pauli, els pirates de la lliga.</p>\r\n<p>&nbsp;</p>\r\n<p>Gran &egrave;xit del Sant Jordi 2017. La primera edici&oacute; es va esgotar en tan sols 3 setmanes</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Qu&egrave; en diuen?</strong></p>\r\n<p>&laquo;La forma de ser del St Pauli ha fet que gent d&rsquo;arreu del m&oacute;n utilitzin la bandera i l&rsquo;escut en els moviments socials en qu&egrave; participen. L&rsquo;any que ve, seguir&agrave; a la segona divisi&oacute;, per&ograve; les seves ensenyes estaran per tot Europa a primera l&iacute;nia de les protestes.&raquo;<strong>El Pa&iacute;s</strong></p>\r\n<p>&laquo;Amb m&eacute;s d&rsquo;onze milions de seguidors i cinc-centes penyes en els cinc continents, el seu leitmotiv &eacute;s la diversitat cultural i la toler&agrave;ncia.&raquo;&nbsp;<strong>La Vanguardia</strong></p>\r\n<p>&laquo;Mentre que la resta del futbol europeu estava immers en racisme i viol&egrave;ncia, St. Pauli va prendre un cam&iacute; m&eacute;s progressista, llan&ccedil;ant campanyes antiracistes i antihom&ograve;fobes molts abans que altres clubs ho fessin.&raquo;&nbsp;<strong>Diario La Expansi&oacute;n</strong></p>\r\n<p>&laquo;Sense un pressupost ostent&oacute;s ni jugadors emblem&agrave;tics, el combinat ha aconseguit canviar els paradigmes del futbol per posar a aquest esport al servei de la societat.&raquo;&nbsp;&nbsp;<strong>P&aacute;gina 12</strong></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>', 'https://www.tigredepaper.cat', 'Català', 11, 1, '2024-04-14 13:13:03', '2024-04-14 13:13:03', NULL, 0, 0, 0, NULL, NULL, 0),
(61, 'Amaga\'t dels drons!', 'amagat-dels-drons', 'Ester Vizcarra Fortuny', 7, NULL, 11, 'Edicions del Bullent', '9788499042404', 'https://storage.googleapis.com/glide-prod.appspot.com/uploads-v2/88aBd8yrFD3y0huwdbxh/pub/Znrwo57cJSP9A2caBIH5.png', '<p>AURA mai s&rsquo;havia plantejat que pogu&eacute;s existir un m&oacute;n diferent. A mitjan de l&rsquo;actual mil&middot;lenni, s&rsquo;ha dut a l&rsquo;extrem la desconnexi&oacute; de la humanitat amb la naturalesa, tot &eacute;s net i ordenat. Tanmateix, un arriscat experiment de tornar a introduir els animals de companyia, foragitats fa molt de temps de les cases per antihigi&egrave;nics i infecciosos, desperta en ella la comprensi&oacute; de la injust&iacute;cia que s&rsquo;est&agrave; cometent amb les b&egrave;sties. Una femella de tigre es converteix en la seua fidel companya i, per molt que li posen les lleis pel davant, no pot resignar-se a abandonar-la al seu dest&iacute; quan li siga retirada per haver crescut massa. Aura tractar&agrave; de salvar-la, amb l&rsquo;ajuda de diversos personatges, sovint enigm&agrave;tics, i d&rsquo;una computadora-robot que sembla massa espavilada per la seua condici&oacute;. Resultar&agrave; el pla d&rsquo;Aura com ella espera? Trobar&agrave; un lloc al m&oacute;n per a la seua amiga? No ho sap, per&ograve; s&rsquo;adona que l&rsquo;animal, ignorant de les maquinacions humanes, nom&eacute;s la t&eacute; a ella.</p>', 'https://bullent.net/', 'Català', 11, 1, '2024-04-14 13:19:10', '2024-04-14 13:21:20', NULL, 0, 0, 0, NULL, NULL, 0),
(62, 'La puresa de l\'engany', 'la-puresa-de-lengany', 'Gerard Quintana', 5, NULL, NULL, 'Grup 62', '9788466432023', 'https://grup62cat.cdnstatics2.com/usuaris/libros/fotos/372/original/portada_la-puresa-de-lengany_gerard-quintana_202403051604.jpg', '<div class=\"frase-mkt\">\r\n<p><strong>Torna Gerard Quintana despr&eacute;s de l&rsquo;&egrave;xit assolit amb&nbsp;<em>L&rsquo;home que va viure dues vegades</em>, Premi Ramon Llull 2021.</strong></p>\r\n</div>\r\n<p>La vida &eacute;s all&ograve; que amaguem mentre fem veure que vivim.</p>\r\n<p>El director de cinema giron&iacute; Claudi Careta explica el seu viatge a Cuba, immersa en el Per&iacute;odo Especial arran de la desfeta de la Uni&oacute; Sovi&egrave;tica a comen&ccedil;aments dels anys noranta. All&agrave; coneixer&agrave; l&rsquo;Antoine, un jove i guardonat poeta que aconseguir&agrave; fugir de l&rsquo;illa caribenya i traslladar-se a Girona, on trigar&agrave; pocs mesos a posar-se la ciutat a la butxaca amb el seu domini esc&egrave;nic, la impressionant capacitat d&rsquo;improvisaci&oacute; i el verb agut i llumin&oacute;s. Fins que un bon dia un home arribar&agrave; a la ciutat dient que &eacute;s el vertader Antoine.</p>\r\n<p>&laquo;Hi ha massa hist&ograve;ries que parlen de tornar a casa, des de l&rsquo;<em>Odissea</em>&nbsp;d&rsquo;Homer fins a l&rsquo;<em>ET</em>&nbsp;de Spielberg. Per&ograve; el que ens atrau del relat &eacute;s la dificultat d&rsquo;aconseguir-ho i el fet d&rsquo;estar perduts. Quan est&agrave;s perdut tot &eacute;s possible, fins i tot trobar-te a tu mateix&raquo;.</p>', 'https://grup62cat.cdnstatics2.com', 'Català', 11, 1, '2024-04-15 18:39:04', '2024-04-17 14:05:58', NULL, 1, 0, 0, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de la taula `bookshops`
--

CREATE TABLE `bookshops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `logo` varchar(191) DEFAULT NULL,
  `qui_som` text NOT NULL,
  `url` varchar(191) NOT NULL,
  `latitud` varchar(191) NOT NULL,
  `longitud` varchar(191) NOT NULL,
  `zoom` int(11) NOT NULL DEFAULT 14,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `bookshops`
--

INSERT INTO `bookshops` (`id`, `nom`, `slug`, `logo`, `qui_som`, `url`, `latitud`, `longitud`, `zoom`, `active`, `user_id`, `created_at`, `updated_at`, `image`) VALUES
(1, 'La Gralla', 'la-gralla', NULL, '<p><strong>La Gralla</strong>&nbsp;&eacute;s una&nbsp;<a title=\"Cooperativa\" href=\"https://ca.wikipedia.org/wiki/Cooperativa\">societat cooperativa</a>&nbsp;de treball situada en ple centre de la ciutat de&nbsp;<a title=\"Granollers\" href=\"https://ca.wikipedia.org/wiki/Granollers\">Granollers</a>&nbsp;(<a title=\"Vall&egrave;s Oriental\" href=\"https://ca.wikipedia.org/wiki/Vall%C3%A8s_Oriental\">Vall&egrave;s Oriental</a>) dedicada al m&oacute;n del llibre, la m&uacute;sica i la papereria.</p>\r\n<p>Disposa de seccions de&nbsp;<a title=\"Literatura infantil\" href=\"https://ca.wikipedia.org/wiki/Literatura_infantil\">literatura infantil</a>&nbsp;i&nbsp;<a title=\"Literatura juvenil\" href=\"https://ca.wikipedia.org/wiki/Literatura_juvenil\">juvenil</a>, literatura per a adults, assaig, llibre pr&agrave;ctic, diccionaris, m&egrave;todes d\'idiomes, literatura en llengua estrangera,&nbsp;<a title=\"Llibre de butxaca\" href=\"https://ca.wikipedia.org/wiki/Llibre_de_butxaca\">llibres de butxaca</a>, guies, mapes i&nbsp;<a title=\"Literatura de viatges\" href=\"https://ca.wikipedia.org/wiki/Literatura_de_viatges\">literatura de viatges</a>. I tamb&eacute; ofereix una secci&oacute; de m&uacute;sica i productes complementaris al llibre en diferents suports audiovisuals (cd, dvd, cd-rom).</p>', 'https://www.llibrerialagralla.cat/', '41.609036970680876', '2.2876148883577154', 16, 1, 1, '2023-10-27 10:55:52', '2023-10-27 10:55:52', 'images/bookshops/Bfz21um4wbOHlzhinbW2ap1Ey67IHQB4mZC9bMVq.jpg'),
(2, 'Strogoff', 'strogoff', NULL, '<div class=\"et_pb_section et_pb_section_0 et_pb_with_background et_section_regular\">\r\n<div class=\"et_pb_row et_pb_row_0\">\r\n<div class=\"et_pb_column et_pb_column_4_4 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough et-last-child\">\r\n<div class=\"et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_center et_pb_bg_layout_light\">\r\n<div class=\"et_pb_text_inner\">\r\n<h1>Qui som, o millor dit qui s&oacute;c</h1>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"et_pb_row et_pb_row_1\">\r\n<div class=\"et_pb_column et_pb_column_1_2 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough\">\r\n<div class=\"et_pb_module et_pb_image et_pb_image_0\"><span class=\"et_pb_image_wrap \"><img class=\"wp-image-75\" title=\"Strogoff Qui som 1\" src=\"https://strogoff.cat/wp-content/uploads/2023/11/Strogoff-Qui-som-1-1.jpeg\" sizes=\"(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) and (max-width: 980px) 980px, (min-width: 981px) and (max-width: 1280px) 1280px, (min-width: 1281px) 1341px, 100vw\" srcset=\"https://strogoff.cat/wp-content/uploads/2023/11/Strogoff-Qui-som-1-1.jpeg 1341w, https://strogoff.cat/wp-content/uploads/2023/11/Strogoff-Qui-som-1-1-1280x1287.jpeg 1280w, https://strogoff.cat/wp-content/uploads/2023/11/Strogoff-Qui-som-1-1-980x985.jpeg 980w, https://strogoff.cat/wp-content/uploads/2023/11/Strogoff-Qui-som-1-1-480x483.jpeg 480w\" alt=\"\" width=\"615\" height=\"618\"></span></div>\r\n</div>\r\n<div class=\"et_pb_column et_pb_column_1_2 et_pb_column_2  et_pb_css_mix_blend_mode_passthrough et-last-child\">\r\n<div class=\"et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_justified et_pb_text_align_left-tablet et_pb_bg_layout_light\">\r\n<div class=\"et_pb_text_inner\">\r\n<p>Passo dels cinquanta. D&rsquo;aquests, trenta els he ballat. Ho dic literalment perqu&egrave; m&rsquo;he guanyat la vida fent classes de ball: vals, salsa, Rock, Lindy-Hop, Tango&hellip; Soc llicenciat en hist&ograve;ria, carrera que vaig fer m&eacute;s per caprici i per gust (me&rsquo;n va donar molt) que no per ganes de fer d&rsquo;historiador. Als trenta anys vaig comen&ccedil;ar a trescar muntanyes amunt i avall, m&rsquo;encantava c&oacute;rrer per&ograve; el meu malaurat maluc va dir prou quan en tenia quaranta-set. Se t&rsquo;ha acabat el c&oacute;rrer i tamb&eacute; el ballar, maco! em va dir el metge.</p>\r\n<p>Nom&eacute;s s&eacute; fer all&ograve; que m&rsquo;agrada i si miro enrere en aquesta hist&ograve;ria nom&eacute;s falta una cosa que no he dit fins ara &ndash;i que importa aqu&iacute;-&nbsp;<strong>des que vaig entendre la l&ograve;gica d&rsquo;ajuntar lletres no he parat de llegir com un condemnat encenent un llibre amb la burilla d&rsquo;un altre. Aix&iacute; doncs i amb una l&ograve;gica molt poc cartesiana em vaig dir: No pots ballar ergo munta una llibreria. I aqu&iacute; em teniu.</strong></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"et_pb_section et_pb_section_1 et_pb_with_background et_section_regular\">\r\n<div class=\"et_pb_row et_pb_row_2\">\r\n<div class=\"et_pb_column et_pb_column_4_4 et_pb_column_3  et_pb_css_mix_blend_mode_passthrough et-last-child\">\r\n<div class=\"et_pb_module et_pb_text et_pb_text_2  et_pb_text_align_justified et_pb_text_align_left-tablet et_pb_bg_layout_light\">\r\n<div class=\"et_pb_text_inner\">\r\n<p>La hist&ograve;ria &eacute;s banal i respon principalment al meu vici per tot el que envolta als llibres i a la literatura. Per posar-li una mica d&rsquo;aix&ograve;, de literatura, dir&eacute; que jo tenia tres aficions principals: ballar, c&oacute;rrer per la muntanya i llegir. De la primera en vaig fer el meu ofici, de la segona i la tercera la meva manera de mantenir l&rsquo;equilibri personal.&nbsp;</p>\r\n<p>Fa uns anys, com us comentava,&nbsp; em van diagnosticar una lesi&oacute; al maluc que m&rsquo;impedia c&oacute;rrer i en menor mesura ballar. D&rsquo;aqu&iacute;, al replantejament de canviar de vida i de feina nom&eacute;s hi va haver-hi un pas. Un pas en forma de muntar una llibreria.</p>\r\n<p><strong>La Strogoff &eacute;s una llibreria liter&agrave;ria generalista, que va obrir les seves portes al novembre de 2016, i que malgrat tenir un espai relativament redu&iuml;t te una especial ambici&oacute; per tenir fons.</strong></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"et_pb_section et_pb_section_2 et_pb_with_background et_section_regular\">\r\n<div class=\"et_pb_row et_pb_row_3 et_pb_equal_columns\">\r\n<div class=\"et_pb_column et_pb_column_1_2 et_pb_column_4  et_pb_css_mix_blend_mode_passthrough\">\r\n<div class=\"et_pb_module et_pb_text et_pb_text_3  et_pb_text_align_center et_pb_bg_layout_light\">\r\n<div class=\"et_pb_text_inner\">\r\n<h1>Qu&egrave; la fa especial</h1>\r\n</div>\r\n</div>\r\n<div class=\"et_pb_module et_pb_text et_pb_text_4  et_pb_text_align_justified et_pb_text_align_left-tablet et_pb_bg_layout_light\">\r\n<div class=\"et_pb_text_inner\">\r\n<p>Suposo que la selecci&oacute; de llibres que hi ha: &eacute;s una&nbsp;llibreria generalista (aix&ograve; ja ho hem dit), per tant hi ha de tot una mica, per&ograve; el fons -que cada vegada &eacute;s m&eacute;s gran- &eacute;s bastant personal. Tamb&eacute; les activitats: grups de lectura (quatre d&rsquo;infantils i un d&rsquo;adults), presentacions, recitals de poesia i potser el que ens diferencia m&eacute;s de la resta: concerts en directe. Som una llibreria que programem concerts de jazz (tenim piano) per&ograve; tamb&eacute; de cl&agrave;ssica, de folk i de R&rsquo;n&rsquo;R.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'https://strogoff.cat/', '41.685996055916', '2.2863489679563864', 16, 1, 11, '2024-04-14 11:47:26', '2024-04-14 11:48:24', 'images/bookshops/fuYIJk4s82kFleXVx9l7g75mQmFFVrm2o8haIDc3.png'),
(3, 'El Cucut', 'el-cucut', 'https://pbs.twimg.com/profile_images/451413117721796608/a-3Kx9Dd.jpeg', '<table>\r\n<tbody>\r\n<tr>\r\n<td>Treballem en un m&oacute;n de creativitat i de cultura. La cadena del m&oacute;n del llibre comen&ccedil;a quan un escriptor publica, amb la implicaci&oacute; d&rsquo;una editorial, el seu llibre. Aquest arriba a les nostres mans i aix&iacute; comen&ccedil;a la feina del llibreter. Hem de con&egrave;ixer qu&egrave; tenim a la llibreria, hem de llegir tot el que puguem i hem de trobar el lector adient a cada llibre o un llibre per a cada lector. Pensem que llegir ha de ser divertit i voluntari. Tothom s&rsquo;ho ha de passar b&eacute; llegint i quan alg&uacute; no ho aconsegueix &eacute;s feina del llibreter trobar l&rsquo;estil i l&rsquo;obra que el lector busca. No som jutges de la literatura. Som prescriptors. Creiem que en aquests moments que hi ha tanta producci&oacute; cultural i que surten tantes novetats constantment, la nostra feina &eacute;s saber destriar i orientar. En cap cas censurar.</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'https://www.llibreriaelcucut.cat/', '42.04266468084259', '3.123509539138003', 16, 1, 11, '2024-04-14 13:34:13', '2024-04-14 13:34:13', NULL),
(4, 'Llibreria Solidària AFAC', 'llibreria-solidaria-afac', 'https://www.aiguafreda.cat/imatge/24798/Anfac.jpg?amplada-maxima=400', '<table>\r\n<tbody>\r\n<tr>\r\n<td>Som una ONG, declarada Utilitat P&uacute;blica des del 2011, i destinem el 100% dels beneficis de la venda de lla botiga a gestionar el Projecte \"Contigo para Siempre\" un centre de nens orfes cecs i d&acute;altres patologies, dins un orfenat de Jiaozuo, a la Xina</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'https://www.facebook.com/llibreriaafac/', '41.76744278634134', '2.2508052256310793', 16, 1, 11, '2024-04-14 13:40:20', '2024-04-14 13:40:20', NULL),
(5, 'Llibreria 22', 'llibreria-22', 'https://storage.googleapis.com/glide-prod.appspot.com/uploads-v2/88aBd8yrFD3y0huwdbxh/pub/W3Z1t7nNZDHyOWz46pWw.jpg', '<table>\r\n<tbody>\r\n<tr>\r\n<td>La Llibreria 22 fundada el 20 d\'octubre de 1978, ja forma part de la hist&ograve;ria de Girona dels darrers anys.</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'https://www.llibreria22.net/web/llibreria22', '41.98454007148994', '2.822222196806039', 16, 1, 11, '2024-04-14 13:42:19', '2024-04-14 13:42:19', NULL),
(6, 'Fan Set', 'fan-set', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqyjNGuPj4aTz0RHBwb-hqKgrsdpj7cKojr3vClTq5JA&s', '<table>\r\n<tbody>\r\n<tr>\r\n<td>Al cor de Val&egrave;ncia llibreria@fanset.cat</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'https://www.facebook.com/llibreriafanset?ref=embed_page', '39.473114517391174', '-0.377021603311019', 16, 1, 11, '2024-04-14 13:48:08', '2024-04-14 13:48:53', NULL);

-- --------------------------------------------------------

--
-- Estructura de la taula `coment_actes`
--

CREATE TABLE `coment_actes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `acte_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `coment_autors`
--

CREATE TABLE `coment_autors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `autor_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `coment_books`
--

CREATE TABLE `coment_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `coment_books`
--

INSERT INTO `coment_books` (`id`, `user_id`, `book_id`, `parent_id`, `body`, `created_at`, `updated_at`) VALUES
(4, 11, 8, NULL, 'El llibre que tot revolucionari ha de dur a la butxaca, on de manera clara i concisa Karl Marx I Frederich Engels assenten les bases del socialisme científic, la ideologia comunista que seria la inspiració  per a un bon grapat de revolucions escampades arreu de la geografia mundial. Una obra que, lluny d\'envellir, és més actual que mai.', '2024-04-13 15:01:29', '2024-04-13 15:01:29'),
(5, 11, 10, NULL, 'Un bon grapat de bons poemes que reflecteixen el desencant a voltes cru de la quotidianitat contemporània. Un desencant que, a voltes cru, a voltes estèril, ens toca a tots.', '2024-04-13 15:05:55', '2024-04-13 15:05:55'),
(6, 11, 53, NULL, 'Una obra irònica que retrata la hipocresia humana a través de la història d\'un àcrata que, per tal de no generar cap nova tirania ni injustícia, acaba dedicant-se a un dels oficis menys nobles de la història de la humanitat. Es pot ser banquer i anarquista sense despentinar-se ni tenir cap càrrec de consciència? Molt em temo que la realitat, de nou, supera per molt a la ficció.', '2024-04-13 15:10:53', '2024-04-13 15:10:53'),
(7, 11, 35, NULL, 'A Safareig, Núria Armengol ens fa un retrat més que creïble de la desorientació d\'una dona ben situada econòmicament que, després de tota una vida dedicada al seu marit, ha de fer front a la seva llibertat personal i sexual, fet que la durà a viure situacions divertides  i un pel rocambolesques. Safareig, en el fons,  és el retrat d\'una dona amb seriosos problemes per a prendre decisions. I del discret i banal encant de la classe mitja, vaja.', '2024-04-13 15:22:42', '2024-04-13 15:22:42'),
(8, 12, 8, NULL, 'Mai en tant poques pàgines s\'havia concentrat tanta veritat. Imprescindible per a entendre la societat en la que vivim i la proposta dels comunistes per a un món sense explotació de l\'home per l\'home', '2024-04-14 11:24:32', '2024-04-14 11:24:32'),
(9, 19, 6, NULL, 'És un relat que t\'enganxa des de la primera paraula.', '2024-04-15 14:35:04', '2024-04-15 14:35:04'),
(10, 20, 25, NULL, 'Un retrat acurat del sistema repressiu de l\'Estat als anys 90', '2024-04-16 14:47:23', '2024-04-16 14:47:23');

-- --------------------------------------------------------

--
-- Estructura de la taula `coment_bookshops`
--

CREATE TABLE `coment_bookshops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `bookshop_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `coment_bookshops`
--

INSERT INTO `coment_bookshops` (`id`, `user_id`, `bookshop_id`, `parent_id`, `body`, `created_at`, `updated_at`) VALUES
(1, 12, 1, NULL, 'Una de les llibreries fonamentals d\'aquest país!', '2023-10-30 19:36:43', '2023-10-30 19:36:43'),
(2, 11, 2, NULL, 'Punt de trobada indispensable per als lletraferits de La Garriga i part de l\'estranger :)', '2024-04-14 11:49:25', '2024-04-14 11:49:25');

-- --------------------------------------------------------

--
-- Estructura de la taula `coment_editorials`
--

CREATE TABLE `coment_editorials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `editorial_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `coment_medis`
--

CREATE TABLE `coment_medis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `medi_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `coment_posts`
--

CREATE TABLE `coment_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `coment_posts`
--

INSERT INTO `coment_posts` (`id`, `user_id`, `post_id`, `parent_id`, `body`, `created_at`, `updated_at`) VALUES
(1, 12, 3, NULL, 'Ja era hora que una institució d\'importància es posicionés sobre aquest tema d\'una manera pública i clara!', '2023-10-30 19:35:15', '2023-10-30 19:35:15');

-- --------------------------------------------------------

--
-- Estructura de la taula `denuncia_comentari_books`
--

CREATE TABLE `denuncia_comentari_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `motiu` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `coment_book_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `denuncia_coment_actes`
--

CREATE TABLE `denuncia_coment_actes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `motiu` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `coment_acte_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `denuncia_coment_autors`
--

CREATE TABLE `denuncia_coment_autors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `motiu` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `coment_autor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `denuncia_coment_bookshops`
--

CREATE TABLE `denuncia_coment_bookshops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `motiu` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `coment_bookshop_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `denuncia_coment_editorials`
--

CREATE TABLE `denuncia_coment_editorials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `motiu` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `coment_editorial_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `denuncia_coment_medis`
--

CREATE TABLE `denuncia_coment_medis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `motiu` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `coment_medi_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `denuncia_coment_posts`
--

CREATE TABLE `denuncia_coment_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `motiu` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `coment_post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `editorials`
--

CREATE TABLE `editorials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `editorial_nom` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `descripcio` text NOT NULL,
  `url` varchar(191) NOT NULL,
  `logo` varchar(191) DEFAULT NULL,
  `adreça` varchar(191) DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `editorials`
--

INSERT INTO `editorials` (`id`, `editorial_nom`, `slug`, `descripcio`, `url`, `logo`, `adreça`, `active`, `user_id`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Stonberg', 'stonberg', '<p>Ens emociona descobrir un llibre. Ens apassiona publicar-lo.</p>', 'https://www.stonbergeditorial.com/', 'https://static.wixstatic.com/media/61f884_51fb5b2bc88d4b7c92ca119bdbbd819a.jpg/v1/fit/w_2500,h_1330,al_c/61f884_51fb5b2bc88d4b7c92ca119bdbbd819a.jpg', NULL, 1, 11, '2023-09-30 07:36:06', '2023-09-30 07:36:06', NULL),
(2, 'Tigre de paper', 'tigre-de-paper', '<p>Tigre de Paper som una editorial nascuda el 2011 i amb m&eacute;s de 100 obres editades en 3 col&middot;leccions, les quals contribueixen a desenvolupar el pensament cr&iacute;tic, teixir identitat col&middot;lectiva i enriquir l&rsquo;&agrave;mbit literari en llengua catalana.</p>\r\n<p>Aix&iacute; com Antoni Serra considera que &laquo;l&rsquo;escriptor no &eacute;s un &eacute;sser a&iuml;llat del context social on desenvolupa la seva activitat professional&raquo;, considerem que la literatura ha de respondre a la cr&iacute;tica, al pensament i a la imaginaci&oacute; de la societat, i com a projecte editorial, tenim el deure de respondre i reflexionar sobre la forma, les necessitats i les lluites de la nostra societat.</p>\r\n<p>Per aix&ograve;&nbsp; ens hem sumat al conjunt d&rsquo;editorials i projectes culturals que enfrontem la cultura del consum i del mercat per construir cultura popular. D\'aquesta manera, hem impulsat Literal, la fira de llibres i idees radicals i tamb&eacute; la revista Catarsi magaz&iacute;n. Ens hem sumat a Culturacoop una espai d\'articulaci&oacute; del sector cultural transformador de l\'economia social i tamb&eacute; a PlatformEES, des d\'on compartim eines de comunicaci&oacute; i difusi&oacute; basades en el programari lliure, amb l\'objectiu d\'assolir la sobirania digital i democratitzar la tecnologia.</p>\r\n<p>A nivell internacional hem teixit aliances amb editorials de pensament cr&iacute;tic d\'arreu del m&oacute;n a trav&eacute;s de la iniciativa Radical May i la Radical Publishers Alliance. A nivell de pa&iacute;s som membres de l&rsquo;Associaci&oacute; d&rsquo;Editorials Independents Llegir en Catal&agrave; i a nivell local hem fet un pas endavant en participar de l\'organitzaci&oacute; de la fira del riu de Manresa, un espai de cultura transformadora i economia social i tamb&eacute; estem treballant conjuntament amb l\'Ateneu Cooperatiu de la Catalunya Central.</p>\r\n<p>Hem crescut amb la ferma voluntat de que els nostres llibres puguin ser eines per aquelles persones i col&middot;lectius mobilitzats en la lluita per la transformaci&oacute; social, i alhora, una porta d&rsquo;entrada al pensament i la consci&egrave;ncia cr&iacute;tica per a totes aquelles lectores de ment desperta.</p>\r\n<p>D\'aquesta manera, amb els nostres llibres,&nbsp; pretenem obrir espais per la reflexi&oacute; i el debat. Espais que ens permetin esquin&ccedil;ar la realitat i dibuixar un nou m&oacute;n que no nom&eacute;s &eacute;s possible sin&oacute; que tamb&eacute; &eacute;s necessari. Espais per gaudir i pensar les paraules, les exclamacions, les accions&hellip; I aix&iacute; fer del paper un tigre de cultura popular.</p>', 'https://www.tigredepaper.cat/ca', 'https://www.tigredepaper.cat/img/logo-tigre-de-paper.svg?1596186624', NULL, 1, 11, '2023-10-03 04:50:39', '2023-10-03 04:50:39', NULL),
(3, 'Adesiara', 'adesiara', '<div class=\"elementor-element elementor-element-31a6dc4 elementor-align-center elementor-widget elementor-widget-ube-heading\" data-id=\"31a6dc4\" data-element_type=\"widget\" data-widget_type=\"ube-heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<div class=\"ube-heading\">\r\n<div class=\"ube-heading-description\">\r\n<p>&laquo;Els llibres, com el vi o les corbates,<br>tamb&eacute; tenen un p&uacute;blic exigent i curi&oacute;s.&raquo;<br>Anton M. Espadaler,&nbsp;<em>La Vanguardia</em></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-a14d404 elementor-widget elementor-widget-text-editor\" data-id=\"a14d404\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">\r\n<div class=\"elementor-widget-container\">\r\n<p class=\"mg-bottom-55 sm-mg-bottom-25\">Adesiara &eacute;s una editorial petita i independent formada per persones que volen aprofitar la seva experi&egrave;ncia en els diferents &agrave;mbits del m&oacute;n de l&rsquo;edici&oacute; per a elaborar llibres de qualitat. Amb la ferma voluntat de treballar per la cultura del pa&iacute;s, i deixant en un segon terme els interessos cremat&iacute;stics &mdash;conscients, tanmateix, del risc que aix&ograve; comporta&mdash;, apostem de manera exclusiva pel llibre en catal&agrave; i donem una import&agrave;ncia especial a la incorporaci&oacute; a la nostra llengua, mitjan&ccedil;ant traduccions acurades, d&rsquo;algunes de les obres m&eacute;s destacades de la literatura universal de tots els temps. El principal prop&ograve;sit d&rsquo;Adesiara consisteix a facilitar al p&uacute;blic lector l&rsquo;acc&eacute;s a t&iacute;tols, tant antics com moderns, que per diversos motius (autors que &laquo;no es venen&raquo;, temes pretesament menors, p&uacute;blic potencial redu&iuml;t, &eacute;s a dir, tot all&ograve; que massa sovint cedeix a la totpoderosa rendibilitat econ&ograve;mica) no han estat mai tradu&iuml;ts en llengua catalana i, si ho van ser fa molts anys, ara com ara s&oacute;n introbables o b&eacute; estan fora de cat&agrave;leg. &Eacute;s justament per aquesta ra&oacute; que el nostre ritme de publicaci&oacute; &eacute;s volgudament modest ―de deu a catorze volums l&rsquo;any―: l&rsquo;experi&egrave;ncia que hem anat acumulant ens ha ensenyat que un llibre ben escrit i ben editat requereix for&ccedil;a temps i, sobretot, molta cura.</p>\r\n</div>\r\n</div>', 'https://www.adesiaraeditorial.cat/', 'https://www.adesiaraeditorial.cat/wp-content/uploads/2024/03/adesiara-editorial-logo.svg', NULL, 1, 11, '2024-04-11 20:55:25', '2024-04-11 20:55:25', NULL),
(4, 'Llibres del delicte', 'llibres-del-delicte', '<p><strong>Llibres del Delicte</strong>&nbsp;&eacute;s una editorial independent, que neix a Barcelona amb la voluntat de mantenir un comprom&iacute;s amb la literatura en catal&agrave; i, en concret, amb la bona&nbsp;<strong>novel&middot;la negra</strong>&nbsp;que s&rsquo;escriu al pa&iacute;s.</p>\r\n<p>La nostra missi&oacute; &eacute;s editar llibres del g&egrave;nere negre escrits per autors catalans i recuperar la tradici&oacute; d&rsquo;excel&middot;lents autors i col&middot;leccions d&rsquo;obres que des de sempre ha situat la novel&middot;la negra com un dels g&egrave;neres tradicionals de la literatura catalana.</p>\r\n<p>Ens adrecem al lector que vol llegir bona novel&middot;la negra en catal&agrave;, ja siguin trames criminals, polic&iacute;aques o qualsevol altre subg&egrave;nere, per&ograve; sempre amb un toc proper i temes que reflecteixen la societat catalana.</p>\r\n<p>Per aix&ograve;, la nostra aposta &eacute;s per&nbsp;<strong>l&rsquo;escriptor catal&agrave;&nbsp;</strong>de novel&middot;la negra, descobrint i donant difusi&oacute; a noves veus narratives que aportin frescor a les lletres catalanes, per&ograve; sense descuidar els autors consagrats amb pres&egrave;ncia al mercat editorial.</p>\r\n<p>El nostre cat&agrave;leg el conformen una selecci&oacute; de t&iacute;tols ben estudiada, amb set novetats anuals en la col&middot;lecci&oacute; de novel&middot;la negra per a adults i tres en la col&middot;lecci&oacute; Delictes Juvenils de novel&middot;la juvenil de misteri, el que ens assegura una tria de t&iacute;tols depurada i coherent.</p>\r\n<p>La voluntat de publicar la millor novel&middot;la negra en catal&agrave; ens porta a presentar una acurada edici&oacute;, treballant les hist&ograve;ries i els textos, per&ograve; tamb&eacute; apostant per un disseny i una est&egrave;tica en conson&agrave;ncia amb els continguts, on busquem retre homenatge als cl&agrave;ssics del g&egrave;nere negre.</p>\r\n<p>Si voleu gaudir de la novel&middot;la negra en catal&agrave; escrita per escriptores i escriptors catalans,&nbsp;<strong>Llibres del Delicte</strong>&nbsp;&eacute;s la vostra editorial.</p>\r\n<p><strong>Llibres del Delicte &eacute;s la novel&middot;la negra dels catalans.</strong></p>', 'https://www.llibresdeldelicte.com/', 'https://www.llibresdeldelicte.com/wp-content/uploads/2016/12/logo-llibresdeldelicte.png', NULL, 1, 11, '2024-04-11 20:56:57', '2024-04-11 20:56:57', NULL),
(5, 'Quaderns Crema', 'quaderns-crema', '<p><strong>Vaig veure que en el seu pregon s&rsquo;interna,</strong><br><strong>relligat amb amor, en un volum,</strong><br><strong>tot el que l&rsquo;univers desenquaderna.</strong></p>\r\n<p><strong>Dante,&nbsp;<em>La divina com&egrave;dia</em>, &laquo;Parad&iacute;s&raquo;, cant XXXIII,</strong><br><strong>traducci&oacute; de Josep M. de Sagarra</strong></p>\r\n<p>Quaderns Crema &eacute;s una editorial independent fundada l&rsquo;any 1979 per Jaume Vallcorba i dirigida des del 2014 per Sandra Ollo, que des del 2008 hi ha ocupat els c&agrave;rrecs d&rsquo;editora i de gerent. Amb un cat&agrave;leg concebut com a espai de di&agrave;leg transversal a trav&eacute;s dels anys i dels g&egrave;neres, la nostra missi&oacute; sempre ha estat oferir llibres editats amb el m&agrave;xim rigor, produ&iuml;ts amb els millors materials i amb un disseny modern i agosarat. Ens hem proposat presentar autors fonamentals de les lletres catalanes en edicions noves i acurades, oferir traduccions de qualitat d&rsquo;obres cabdals del patrimoni universal i donar cabuda a nous narradors, poetes i assagistes. Despr&eacute;s de gaireb&eacute; quaranta anys de treball editorial, prop de set-cents t&iacute;tols conformen la biblioteca que hem volgut compartir amb el p&uacute;blic, la qual inclou obres d&rsquo;autors imprescindibles de la literatura de tots els temps, com ara Dante, Maria de Fran&ccedil;a i E. A. Poe, i cl&agrave;ssics contemporanis, entre els quals Franz Kafka, Stefan Zweig, Dorothy Parker, J. V. Foix, Eugeni d&rsquo;Ors, Quim Monz&oacute; i Sergi P&agrave;mies. Aquesta labor ha rebut el reconeixement del p&uacute;blic i de la cr&iacute;tica, aix&iacute; com diversos guardons, entre els quals el Premi Nacional a la Millor Labor Editorial 2002, concedit pel Ministeri de Cultura.</p>', 'https://www.quadernscrema.com/', 'https://www.quadernscrema.com/wp-content/uploads/quaderns-crema-logo-retina.png', NULL, 1, 11, '2024-04-13 14:16:41', '2024-04-13 14:16:41', NULL),
(6, 'Club Editor', 'club-editor', '<h5>Qui som</h5>\r\n<p><strong>Som una&nbsp;<em>indie</em>&nbsp;de seixanta anys. Publiquem els autors que creiem que ens sobreviuran. Fem una desena de t&iacute;tols l&rsquo;any, de vegades en doble edici&oacute; catalana i castellana. Ens dediquem al contraban: portem la literatura catalana fora de les seves fronteres i l&rsquo;estrangera a dins. Tamb&eacute; saltem la barrera del temps.</strong></p>\r\n<h2>D&rsquo;on venim</h2>\r\n<p>Club Editor va ser creada per un grup d&rsquo;escriptors amb el designi de construir el que el franquisme havia destru&iuml;t: una literatura que despert&eacute;s el p&uacute;blic. Es deien &ldquo;el club dels novel&middot;listes&rdquo; i Merc&egrave; Rodoreda va publicar-hi la seva obra des de l&rsquo;exili. Joan Sales dirigia el projecte i d&rsquo;ell &eacute;s el lema: &ldquo;els llibres tamb&eacute; s&oacute;n una arma&rdquo;.</p>\r\n<h2>On anem</h2>\r\n<p>Avui procurem ser una editorial de refer&egrave;ncia per a la gent que busca plaer i subst&agrave;ncia en la literatura. El nostre cat&agrave;leg &eacute;s un banquet que oferim als lectors i una casa que obrim als autors. Tots ells s&rsquo;expressen en llengua catalana, tamb&eacute; els que escriuen des de Beirut o Moscou. Tots s&rsquo;avenen i es parlen, els vius amb els morts i viceversa.<br>Buscant excepcions hem fundat una fam&iacute;lia, la dels autors que s&rsquo;adrecen a la sensibilitat sense preocupar-se d&rsquo;encaixar en el seu temps. Aqu&iacute; no mana el g&egrave;nere sin&oacute; la personalitat. Novel&middot;les, contes, assaig disfressat de ficci&oacute; o novel&middot;la gr&agrave;fica, a casa nostra hi conviuen tots els representants de la prosa, que sovint s&oacute;n poetes.</p>\r\n<h2>Com ho fem</h2>\r\n<p>La nostra editorial &eacute;s una manera de treballar. Tant o m&eacute;s que el cat&agrave;leg, ens importa ser un obrador on la intel&middot;lig&egrave;ncia de cada obrer floreixi dins d&rsquo;un projecte com&uacute;. Artista &eacute;s qui professa una art i obrer &eacute;s qui fa una obra: ho diu el diccionari Alcover-Moll, la nostra b&iacute;blia.</p>\r\n<h2>El comprom&iacute;s amb els autors</h2>\r\n<p>Publicar una obra, no pas un t&iacute;tol; mantenir en vida el conjunt que &eacute;s una obra: reeditar-la i difondre-la m&eacute;s enll&agrave; de la novetat, buscar la viabilitat en el long seller. Dedicar a cada text tot el treball que necessita per arribar a maduresa. L&rsquo;elaboraci&oacute; del text amb l&rsquo;autor &eacute;s l&rsquo;&uacute;nica compet&egrave;ncia editorial que no es veu q&uuml;estionada per les transformacions del sector. Fer-ne la pedra angular va ser la vocaci&oacute; primera de Club Editor, i els nous temps la confirmen.</p>\r\n<h2>El comprom&iacute;s amb els lectors</h2>\r\n<p>Oferir traduccions i originals in&egrave;dits ben treballats, no pas nom&eacute;s avalats per un nom i un segell editorial. Oferir un territori literari que es pugui identificar, no pas una suma de t&iacute;tols determinats per l&rsquo;aire del temps. Oferir, a m&eacute;s dels llibres, la possibilitat d&rsquo;explorar qu&egrave; s&oacute;n.</p>', 'https://clubeditor.cat', NULL, NULL, 1, 11, '2024-04-13 17:38:16', '2024-04-13 18:16:12', 'images/editorials/hEccZD64UxjxDnoq1myCenCbyZNorwWWlaHZVlAL.png'),
(7, 'Grup 62', 'grup-62', '<p>Grup 62, que es va fundar a partir d&rsquo;Edicions 62 per crear un cat&agrave;leg modern, general i universal, avui inclou segells d&rsquo;altres editorials de gran prestigi en catal&agrave; i castell&agrave;, amb representaci&oacute; de tots els g&egrave;neres literaris i totes les modalitats d&rsquo;edici&oacute;. Tamb&eacute; disposa de la comercialitzadora Un x 1. Part del fons editorial es comercialitza en format digital i a m&eacute;s, posa a disposici&oacute; dels clients un fons de disponibilitat garantida (ipe62, impressi&oacute; per enc&agrave;rrec).</p>\r\n<p>Estem compromesos des de fa m&eacute;s de mig segle a editar bons llibres per potenciar la Cultura, b&agrave;sicament en Catal&agrave;, al nostre pa&iacute;s. El nostre desafiament s&rsquo;orienta a:<br><br>- Connectar quelcom que alg&uacute; vol dir amb qu&iacute; ho vol llegir<br>- Des d&rsquo;una perspectiva cultural i plural<br>- Orientada als canvis dels gustos dels nostres lectors<br>- Contribuint a potenciar la nostra identitat col.lectiva</p>', 'https://grup62cat.cdnstatics2.com', 'https://grup62cat.cdnstatics2.com/img/logos/logo-grup62.svg', NULL, 1, 11, '2024-04-13 18:03:58', '2024-04-13 18:03:58', NULL),
(8, 'La Campana', 'la-campana', '<h6 id=\"tw-target-text\" class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" style=\"text-align: left;\" data-placeholder=\"Traducci&oacute;\" aria-label=\"Text tradu&iuml;t\" data-ved=\"2ahUKEwiPg6TFyb-FAxWzQvEDHTUODh0Q3ewLegQIExAU\"><span class=\"Y2IQFc\" lang=\"ca\">La Campana, creada el 1985 per l\'escriptor Josep Maria Espin&agrave;s i Isabel Mart&iacute;,<br>destaca pel seu alt percentatge d?&egrave;xits comercials. Ni llibres dif&iacute;cils, per a una minoria,<br>ni t&iacute;tols impresos tan sols amb una mera intenci&oacute; comercial. La Campana &eacute;s exigent amb si mateixa,<br>per aix&iacute; correspondre als lectors m&eacute;s exigents. Llibres de qualitat, per&ograve; per a tothom.<br>La Campana ha estat de vegades definida com el llogaret gal d\'Ast&egrave;rix de les editorials.<br>Una petita empresa que resisteix i resistir&agrave;, i que de vegades supera, els grans grups.<br>I aix&ograve; s\'aconsegueix mitjan&ccedil;ant una accentuada personalitat, on no es defrauda mai el lector.<br>La Campana publica novel&middot;la, assaig, humor, cr&ograve;niques, reportatges i mem&ograve;ries.<br>Ha editat grans noms de la literatura catalana, aix&iacute; com un gran nombre d\'autors tradu&iuml;ts. Els primers<br>anys va llan&ccedil;ar al mercat la col&middot;lecci&oacute; d\'antologies &laquo;100 p&agrave;gines triades per mi&raquo;, de cl&agrave;ssics actuals<br>com Miquel Mart&iacute; i Pol, Baltasar Porcel, Maria Aur&egrave;lia Capmany, Manuel Pedrolo, Montserrat Roig o J.V.<br>Foix. Entre molts altres &egrave;xits editorials cal citar &ldquo;Criatura i companyia&rdquo; de Carles Capdevila,<br>&ldquo;Atreviu-vos a pensar&rdquo; de Josep Maria Terricabras, &ldquo;El desconcert de l\'educaci&oacute;&rdquo; de Salvador Card&uacute;s,<br>&ldquo;El nom del porc&rdquo; d\'Albert Om o Hist&ograve;ria de totes les seves can&ccedil;ons de Llu&iacute;s Llach. El teu nom &eacute;s Olga<br>de Josep Maria Espin&agrave;s &eacute;s un altre t&iacute;tol important a la hist&ograve;ria de La Campana, on el reconegut escriptor </span>ha publicat m&eacute;s de trenta obres, entre les quals figuren els seus populars Viatges a peu o El meu ofici . El 2002, amb La pell freda, Albert S&aacute;nchez Pi&ntilde;ol es va convertir en un dels autors catalans m&eacute;s venuts i tradu&iuml;ts. I el 2005 es va publicar Tor de Carles Porta, un cl&agrave;ssic del periodisme literari. Al llarg de la darrera d&egrave;cada quatre dels deu t&iacute;tols m&eacute;s venuts del mercat en catal&agrave; han estat editats per La Campana: &laquo;Wonder&raquo; de R.J. Palau; La noia del tren de Paula Hawkins; &laquo;L\'avi de 100 anys que s\'escapar&agrave; per la finestra&raquo; de Jonas Jonasson; i Victus d\'Albert S&aacute;nchez Pi&ntilde;ol. L\'editorial compta amb 400 t&iacute;tols al seu cat&agrave;leg, en qu&egrave; podem trobar, a m&eacute;s dels esmentats anteriorment, autors com Elena Ferrante, Jo&euml;l Dicker, John Carlin, Emanuel Bergmann, Antonella Lattanzi, Angelika Schrobsdorff, Hans Rosling, Carles Puigdemont, Ada Castells o Xavier Roig, entre d\'altres. Al juliol de 2019 va passar a formar part de Penguin Random House Grupo Editorial.</h6>', 'https://www.penguinrandomhousegrupoeditorial.com/sello/la-campana/', NULL, NULL, 1, 11, '2024-04-13 18:10:34', '2024-04-13 18:12:49', 'images/editorials/SkmI7nSasJrQ6IG2i1C9jHavSyhstgzpuYEmfZgG.png'),
(10, 'Editorial Adelis', 'editorial-adelis', '<p>Aledis &eacute;s la for&ccedil;a que empeny la necessitat de donar veu a escriptores en una actualitat en la qual els homes tenen m&eacute;s rellev&agrave;ncia, la necessitat de donar a con&egrave;ixer l&rsquo;esfor&ccedil; i la qualitat de la paraula escrita, tan d&rsquo;escriptors/es de renom com novells, la inquietud de fomentar la nostra llengua, d&rsquo;aprofundir en g&egrave;neres poc publicats en catal&agrave;, la de mostrar camins als joves i recordar la petja de la nostra hist&ograve;ria, de les nostres arrels. L&rsquo;equip directiu constitu&iuml;t per l&rsquo;Aleix Tijero i Casas, responsable de log&iacute;stica amb experi&egrave;ncia en el camp d&rsquo;impressi&oacute; i log&iacute;stica en una desapareguda editorial; la Irene Bosch, responsable de m&agrave;rqueting i promoci&oacute; amb m&eacute;s d&rsquo;onze anys d&rsquo;experi&egrave;ncia en aquest camp i Ma Rosa Casas Sabater directora i editora amb experi&egrave;ncia en administraci&oacute; p&uacute;blica i en una editorial recent desapareguda que l&rsquo;ha fet cr&eacute;ixer tan personal com professionalment.</p>', 'https://editorialaledis.cat', 'https://editorialaledis.cat/wp-content/uploads/2023/12/logo-aledis-2.png', NULL, 1, 11, '2024-04-14 11:52:34', '2024-04-14 11:52:34', NULL),
(11, 'Edicions del Bullent', 'edicions-del-bullent', '<p><strong>Edicions del Bullent</strong>&nbsp;som una de les editorials del Pa&iacute;s Valenci&agrave; de m&eacute;s llarga traject&ograve;ria.</p>\r\n<p>&nbsp;</p>\r\n<p>Pensem que la cultura &eacute;s vital per al desenvolupament de la societat i editem els llibres en conseq&uuml;&egrave;ncia i procurem que la gent els conega un cop els hem editat.</p>\r\n<p>&nbsp;</p>\r\n<p>No es fa cultura sense gent creativa. Hem incl&ograve;s en aquesta web un llistat dels&nbsp;<a href=\"https://www.bullent.net/autors/\">autors/es</a>&nbsp;dels llibres que hem publicat. Alguns comen&ccedil;aren publicant amb nosaltres i ara ja tenen un reconeixement social, altres el tindran i tots tenen el nostre reconeixement i admiraci&oacute;.</p>\r\n<p>&nbsp;</p>\r\n<p>Convoquem el&nbsp;<a href=\"https://www.bullent.net/premi-enric-valor/\">Premi Enric Valor</a>&nbsp;de narrativa juvenil (que comen&ccedil;&agrave; el 1980) amb l\'ajuntament de Picanya i el<a href=\"https://www.bullent.net/premi-bernat-capo/\" target=\"_blank\" rel=\"noopener\">&nbsp;Premi Bernat Cap&oacute;</a>&nbsp;de difusi&oacute; de la Cultura popular amb el Museu Valenci&agrave; d\'Etnologia i en publiquem altres, com el&nbsp;<a href=\"https://www.bullent.net/premi-soler-i-estruch/\" target=\"_blank\" rel=\"noopener\">Premi Soler i Estruch</a>&nbsp;de narrativa curta.</p>\r\n<p>&nbsp;</p>\r\n<p>Comencem a publicar el 1983 amb vocaci&oacute; d\'abastir els valencians de &nbsp;llibres en la seua llengua. Ara comptem amb col&middot;leccions de narrativa per als m&eacute;s menuts i per als m&eacute;s grans, i tamb&eacute; d\'assaig i de suport a l\'ensenyament.</p>\r\n<p>&nbsp;</p>\r\n<p>Vosl publicar amb nosaltres? Hem creat aquest formulari perqu&egrave; tingueu una forma m&eacute;s directa i ordenada de fer-nos arribar les vostres obres.&nbsp;<a href=\"https://www.bullent.net/originals\">https://www.bullent.net/originals</a></p>\r\n<p>&nbsp;</p>\r\n<p>Tamb&eacute; publiquem en castell&agrave; sota el segell<a href=\"http://abisal.bullent.net/\">&nbsp;<em>Abisal</em></a>.</p>\r\n<p>&nbsp;</p>\r\n<p>Som membres de l\'Associaci&oacute; d\'editors del Pa&iacute;s Valenci&agrave; i de l\'Associaci&oacute; d\'Editors en llengua Catalana.</p>', 'https://www.bullent.net', 'https://www.bullent.net/imagenes/edicions-del-bullent.svg', NULL, 1, 11, '2024-04-14 13:20:41', '2024-04-14 13:20:41', NULL);

-- --------------------------------------------------------

--
-- Estructura de la taula `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `generes`
--

CREATE TABLE `generes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `generes`
--

INSERT INTO `generes` (`id`, `nom`, `slug`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Assaig', 'assaig', 1, NULL, '2023-07-13 15:16:20', '2023-07-13 15:16:20'),
(2, 'Poesia', 'poesia', 1, NULL, '2023-07-13 15:22:10', '2023-07-13 15:22:10'),
(3, 'Novel·la històrica', 'novella-historica', 0, NULL, '2023-07-23 11:36:05', '2023-07-23 11:36:05'),
(5, 'Narrativa contemporània', 'narrativa-contemporanea', 1, NULL, '2023-08-01 17:07:22', '2023-08-01 17:07:22'),
(6, 'Novel·la de misteri, gòtica i terror', 'novella-de-misteri-gotica-i-terror', 1, NULL, '2023-09-19 22:59:33', '2023-10-29 08:42:16'),
(7, 'Novel·la de ciència ficció i fantasia', 'novella-de-ciencia-ficcio-i-fantasia', 1, NULL, '2023-09-19 23:00:08', '2023-10-29 08:43:22'),
(8, 'Infantil i juvenil', 'infantil-i-juvenil', 1, NULL, '2023-09-19 23:00:36', '2023-09-19 23:00:36'),
(9, 'Contes i narracions', 'contes-i-narracions', 1, NULL, '2023-10-15 08:27:01', '2023-10-15 08:27:01'),
(10, 'Clàssics', 'classics', 1, NULL, '2023-10-29 08:41:22', '2023-10-29 08:41:22'),
(11, 'Memòries i biografies', 'memories-i-biografies', 1, NULL, '2023-10-29 08:41:48', '2023-10-29 08:41:48'),
(12, 'Novel·la de viatges i aventures', 'novella-de-viatges-i-aventures', 1, NULL, '2023-10-29 08:42:45', '2023-10-29 08:42:45'),
(13, 'Novel·la negra i policíaca', 'novella-negra-i-policiaca', 1, NULL, '2023-10-29 08:43:06', '2023-10-29 08:43:06'),
(14, 'Teatre', 'teatre', 1, NULL, '2023-10-29 08:43:38', '2023-10-29 08:43:38'),
(15, 'Recull periodístic', 'recull-periodistic', 1, NULL, '2024-04-13 11:31:55', '2024-04-13 11:31:55'),
(16, 'Novel·la romàntica i eròtica', 'novella-romantica-i-erotica', 1, NULL, '2024-04-14 11:56:53', '2024-04-14 11:58:13');

-- --------------------------------------------------------

--
-- Estructura de la taula `medis`
--

CREATE TABLE `medis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titol` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `url` varchar(191) NOT NULL,
  `body` text NOT NULL,
  `data` date NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipus` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `medis`
--

INSERT INTO `medis` (`id`, `titol`, `slug`, `image`, `url`, `body`, `data`, `active`, `user_id`, `created_at`, `updated_at`, `tipus`) VALUES
(1, 'Israel Calvache publica la seva primera novel·la', 'israel-calvache-publica-la-seva-primera-novella', 'images/medis/R9SBu8PiKB5jd9DnTiw7K0j1TuqWwhsEHMZSRro4.jpg', 'https://www.youtube.com/watch?v=PU00u-m40TQ', '<table>\r\n<tbody>\r\n<tr>\r\n<td>Not&iacute;cia&nbsp;emesa&nbsp;a&nbsp;l\'informatiu&nbsp;del&nbsp;dia&nbsp;19&nbsp;de&nbsp;novembre&nbsp;de&nbsp;2013.</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2013-11-19', 1, 11, '2023-10-03 05:23:01', '2023-10-03 05:23:01', 'Video'),
(2, 'Jordi Roig presenta el seu nou poemari \"Cada dilluns que es perd\"', 'jordi-roig-presenta-el-seu-nou-poemari-cada-dilluns-que-es-perd', 'images/medis/Bg8Ad8Nd7JOzheN5XwN5naz5wUXuWKyvL3B1qU5V.jpg', 'https://youtu.be/8iIajgeWy-0', '<table>\r\n<tbody>\r\n<tr>\r\n<td>Cada&nbsp;dilluns&nbsp;que&nbsp;es&nbsp;perd,&nbsp;nou&nbsp;poemari&nbsp;de&nbsp;Jordi&nbsp;Roig</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2016-12-04', 1, 11, '2023-10-03 05:29:04', '2023-10-03 05:29:04', 'Video'),
(3, 'Presentació de L\'Hort de Caín a Vic, amb Georgina Rieradevall', 'presentacio-de-lhort-de-cain-a-vic-amb-georgina-rieradevall', 'images/medis/2VfC7KacqnnGv4y63nwZnvm8lNqaqIWCtJxkxMqs.jpg', 'https://www.facebook.com/israelcalvachemasuet/videos/241469459538224', '<p>Presentaci&oacute; a la llibreria La Tralla de Vic de la segona novel&middot;la d\'Israel Calvache, amb la pres&egrave;ncia de l\'actriu Georgina Rieradevall</p>', '2015-05-05', 1, 11, '2023-11-01 07:05:36', '2023-11-01 07:09:24', 'Video');

-- --------------------------------------------------------

--
-- Estructura de la taula `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `thread_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `messages`
--

INSERT INTO `messages` (`id`, `thread_id`, `user_id`, `body`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 11, 'Modificació: pots posar el carrussel de \"últims llibres afegits\" a dalt de tots els altres?', '2024-04-13 10:48:48', '2024-04-13 10:48:48', NULL),
(2, 2, 11, 'Pots canviar el títol del carrussel \"S\'estrenen\" per \"Primeres obres\"?', '2024-04-13 11:21:38', '2024-04-13 11:21:38', NULL),
(3, 3, 11, 'Podries fer que als llibres que són novetat sortís impresa damunt de la portada una etiqueta que posés \"Novetat\"?', '2024-04-13 11:33:16', '2024-04-13 11:33:16', NULL),
(4, 4, 11, 'En tots els carrussels les últimes entrades haurien d\'apareixer en primer lloc', '2024-04-13 11:34:36', '2024-04-13 11:34:36', NULL),
(5, 5, 11, 'Cada vegada que es clica un enllaç extern a Tsundoku.cat s\'hauria d\'obrir en una finestra nova, i no en una pestanya', '2024-04-13 13:42:21', '2024-04-13 13:42:21', NULL),
(6, 6, 11, 'He canviat d\'opinió, no canviïs el títol de secció de \"s\'estrenen\", si us plau', '2024-04-13 14:38:15', '2024-04-13 14:38:15', NULL),
(7, 7, 11, 'Val, ara sí que m\'ha deixat editar el nom del perfil!', '2024-04-13 17:27:07', '2024-04-13 17:27:07', NULL),
(8, 8, 11, 'Bon dia. Al carrussel dels més votats haurien d\'apareixer al davant de tot els llibres que tinguin més puntuació(que en aquest cas és el manifest comunista)', '2024-04-14 11:17:08', '2024-04-14 11:17:08', NULL),
(9, 9, 11, 'Al carrussel d\'agenda haurien d\'apareixer primer les entrades més noves', '2024-04-14 11:18:29', '2024-04-14 11:18:29', NULL),
(10, 10, 11, 'Pots esborrar l\'usuari Editir? L\'he creta per fer una prova', '2024-04-14 11:18:59', '2024-04-14 11:18:59', NULL),
(11, 11, 11, 'Quan entres al teu perfil tot i clicar la pestanya \"recorda\'m\" quan surts i tornes a entrar no et recorda :D', '2024-04-14 11:27:37', '2024-04-14 11:27:37', NULL),
(12, 12, 11, 'Quan afegeixes una acte nou a l\'agenda ha d\'haber-hi un camp per posar el lloc de l\'acte. I si pogués sortir la geolocalització com ja surt amb les llibreries seria l\'hòstia', '2024-04-14 11:42:53', '2024-04-14 11:42:53', NULL),
(13, 13, 11, 'Ei, genial el buscador de la pàgina de gestió!', '2024-04-14 11:54:14', '2024-04-14 11:54:14', NULL),
(14, 14, 11, 'Recorda que a l\'alpartat \"tots els llibres\" ha de sortir la puntuació i número de valoracions dels llibres', '2024-04-14 13:43:31', '2024-04-14 13:43:31', NULL),
(15, 14, 1, 'Ja esta', '2024-04-14 13:48:57', '2024-04-14 13:48:57', NULL),
(16, 15, 20, 'Hola!', '2024-04-16 14:43:03', '2024-04-16 14:43:03', NULL);

-- --------------------------------------------------------

--
-- Estructura de la taula `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2014_10_28_175635_create_threads_table', 1),
(5, '2014_10_28_175710_create_messages_table', 1),
(6, '2014_10_28_180224_create_participants_table', 1),
(7, '2014_11_03_154831_add_soft_deletes_to_participants_table', 1),
(8, '2014_12_04_124531_add_softdeletes_to_threads_table', 1),
(9, '2017_03_04_000000_create_bans_table', 1),
(10, '2017_03_30_152742_add_soft_deletes_to_messages_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2023_06_16_075527_create_generes_table', 1),
(14, '2023_06_18_065709_create_autors_table', 1),
(15, '2023_06_18_155618_create_editorials_table', 1),
(16, '2023_06_19_084503_create_bookshops_table', 1),
(17, '2023_06_21_063311_create_books_table', 1),
(18, '2023_07_14_141022_create_posts_table', 1),
(19, '2023_07_16_094837_create_medis_table', 1),
(20, '2023_07_16_155553_create_actes_table', 1),
(21, '2023_07_21_091149_add_banned_at_column_to_users_table', 1),
(22, '2023_08_02_072540_make_url_foto_nullable_on_autors_table', 1),
(23, '2023_08_02_073326_add_image_column_to_autors_table', 1),
(24, '2023_08_03_094601_make_imatge_nullable_on_books_table', 1),
(25, '2023_08_03_095036_add_foto_column_to_books_table', 1),
(26, '2023_08_04_130326_make_logo_nullable_on_editorials_table', 1),
(27, '2023_08_04_130527_add_image_column_to_editorials_table', 1),
(28, '2023_08_08_185518_add_multiple_columns_to_autors_table', 1),
(29, '2023_08_09_135240_make_logo_nullable_on_bookshops_table', 1),
(30, '2023_08_09_135919_add_image_column_to_bookshops_table', 1),
(31, '2023_08_09_201614_add_tipus_column_to_medis_table', 1),
(32, '2023_08_28_083310_add_novetats_column_to_users_table', 1),
(33, '2023_09_07_100816_add_two_columns_to_books', 1),
(34, '2023_09_07_180524_add_auto_column_to_autors_table', 1),
(35, '2023_09_08_084426_create_rating_books_table', 1),
(36, '2023_09_17_081638_create_coment_books_table', 1),
(37, '2023_09_18_084515_create_denuncia_comentari_books_table', 1),
(38, '2023_09_21_172509_create_rating_autors_table', 2),
(39, '2023_09_21_172639_create_coment_autors_table', 2),
(40, '2023_09_21_172801_create_denuncia_coment_autors_table', 2),
(41, '2023_10_06_172503_add_biopic_column_to_users_table', 2),
(42, '2023_10_07_103950_add_cita_column_and_comentari_column_to_books_table', 2),
(43, '2023_10_22_102806_create_rating_ediorials_table', 3),
(44, '2023_10_23_114647_create_coment_editorials_table', 4),
(45, '2023_10_23_124440_create_denuncia_coment_editorials_table', 4),
(46, '2023_10_29_093256_create_rating_bookshops_table', 5),
(47, '2023_10_29_123923_create_coment_bookshops_table', 5),
(48, '2023_10_30_132011_create_denuncia_coment_bookshops_table', 5),
(49, '2023_10_30_151506_create_rating_posts_table', 6),
(50, '2023_10_30_160834_create_coment_posts_table', 6),
(51, '2023_10_30_175727_create_denuncia_coment_posts_table', 6),
(52, '2023_10_31_090412_create_rating_medis_table', 7),
(53, '2023_10_31_100803_create_coment_medis_table', 7),
(54, '2023_10_31_143406_create_denuncia_coment_medis_table', 7),
(55, '2023_11_01_080637_create_rating_actes_table', 8),
(56, '2023_11_01_084629_create_coment_actes_table', 8),
(57, '2023_11_01_100159_create_denuncia_coment_actes_table', 8),
(58, '2024_04_15_174559_add_estrena_to_books_table', 9),
(59, '2024_04_16_140804_add_lloc_column_to_actes_table', 10),
(60, '2024_04_16_151005_create_banners_table', 11);

-- --------------------------------------------------------

--
-- Estructura de la taula `participants`
--

CREATE TABLE `participants` (
  `id` int(10) UNSIGNED NOT NULL,
  `thread_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `last_read` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `participants`
--

INSERT INTO `participants` (`id`, `thread_id`, `user_id`, `last_read`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 11, '2024-04-13 10:48:48', '2024-04-13 10:48:48', '2024-04-13 10:48:48', NULL),
(2, 1, 1, NULL, '2024-04-13 10:48:48', '2024-04-13 17:53:24', '2024-04-13 17:53:24'),
(3, 2, 11, '2024-04-13 11:21:38', '2024-04-13 11:21:38', '2024-04-13 11:21:38', NULL),
(4, 2, 1, NULL, '2024-04-13 11:21:38', '2024-04-13 17:53:18', '2024-04-13 17:53:18'),
(5, 3, 11, '2024-04-13 11:33:16', '2024-04-13 11:33:16', '2024-04-13 11:33:16', NULL),
(6, 3, 1, NULL, '2024-04-13 11:33:16', '2024-04-13 17:53:12', '2024-04-13 17:53:12'),
(7, 4, 11, '2024-04-13 11:34:36', '2024-04-13 11:34:36', '2024-04-13 11:34:36', NULL),
(8, 4, 1, NULL, '2024-04-13 11:34:36', '2024-04-13 17:53:00', '2024-04-13 17:53:00'),
(9, 5, 11, '2024-04-13 13:42:21', '2024-04-13 13:42:21', '2024-04-13 13:42:21', NULL),
(10, 5, 1, NULL, '2024-04-13 13:42:21', '2024-04-13 18:19:20', '2024-04-13 18:19:20'),
(11, 6, 11, '2024-04-13 14:38:15', '2024-04-13 14:38:15', '2024-04-13 14:38:15', NULL),
(12, 6, 1, NULL, '2024-04-13 14:38:15', '2024-04-13 17:52:37', '2024-04-13 17:52:37'),
(13, 7, 11, '2024-04-13 17:27:07', '2024-04-13 17:27:07', '2024-04-13 17:27:07', NULL),
(14, 7, 1, NULL, '2024-04-13 17:27:07', '2024-04-13 17:52:27', '2024-04-13 17:52:27'),
(15, 8, 11, '2024-04-14 11:17:08', '2024-04-14 11:17:08', '2024-04-14 11:17:08', NULL),
(16, 8, 1, NULL, '2024-04-14 11:17:08', '2024-04-17 14:04:33', '2024-04-17 14:04:33'),
(17, 9, 11, '2024-04-14 11:18:29', '2024-04-14 11:18:29', '2024-04-14 11:18:29', NULL),
(18, 9, 1, '2024-04-15 12:20:32', '2024-04-14 11:18:29', '2024-04-15 12:20:37', '2024-04-15 12:20:37'),
(19, 10, 11, '2024-04-14 11:18:59', '2024-04-14 11:18:59', '2024-04-14 11:18:59', NULL),
(20, 10, 17, NULL, '2024-04-14 11:18:59', '2024-04-14 11:18:59', NULL),
(21, 11, 11, '2024-04-14 11:27:37', '2024-04-14 11:27:37', '2024-04-14 11:27:37', NULL),
(22, 11, 1, '2024-04-14 13:49:08', '2024-04-14 11:27:37', '2024-04-14 13:49:28', '2024-04-14 13:49:28'),
(23, 12, 11, '2024-04-14 11:42:53', '2024-04-14 11:42:53', '2024-04-14 11:42:53', NULL),
(24, 12, 1, NULL, '2024-04-14 11:42:53', '2024-04-17 14:04:27', '2024-04-17 14:04:27'),
(25, 13, 11, '2024-04-14 11:54:14', '2024-04-14 11:54:14', '2024-04-14 11:54:14', NULL),
(26, 13, 1, '2024-04-14 13:15:20', '2024-04-14 11:54:14', '2024-04-14 13:15:31', '2024-04-14 13:15:31'),
(27, 14, 11, '2024-04-14 13:49:08', '2024-04-14 13:43:31', '2024-04-14 13:49:08', NULL),
(28, 14, 1, '2024-04-15 07:02:37', '2024-04-14 13:43:31', '2024-04-15 07:02:51', '2024-04-15 07:02:51'),
(29, 15, 20, '2024-04-16 14:43:03', '2024-04-16 14:43:03', '2024-04-16 14:43:03', NULL),
(30, 15, 1, '2024-04-17 14:04:07', '2024-04-16 14:43:03', '2024-04-17 14:04:21', '2024-04-17 14:04:21');

-- --------------------------------------------------------

--
-- Estructura de la taula `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titol` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `font` varchar(191) NOT NULL,
  `url` varchar(191) NOT NULL,
  `body` text NOT NULL,
  `data` date NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `posts`
--

INSERT INTO `posts` (`id`, `titol`, `slug`, `image`, `font`, `url`, `body`, `data`, `active`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Premi Nobel de literatura 2023: anunci i on seguir-lo', 'premi-nobel-de-literatura-2023-anunci-i-on-seguir-lo', 'images/posts/gwRgTi7GS0odZh6CjHNWcoPgIAx9GkJGJ3tPWzGt.webp', 'Diari Ara', 'https://llegim.ara.cat/llegim/premi-nobel-literatura-2023_1_4813007.html', '<h2 class=\"subtitle\">La Reial Acad&egrave;mia de les Ci&egrave;ncies de Su&egrave;cia va entregar els primers guardons l\'any 1901: l\'edici&oacute; d\'enguany ser&agrave; la 122a</h2>\r\n<p><span class=\"place\">BARCELONA</span>La Reial Acad&egrave;mia de les Ci&egrave;ncies de Su&egrave;cia anunciar&agrave; el dijous, 5 d&rsquo;octubre, l&rsquo;esperat guanyador (o guanyadors) del premi Nobel de literatura 2023. Ser&agrave; a partir de les 13.00, hora catalana.</p>\r\n<p>Tot i que la deliberaci&oacute; &eacute;s secreta, les apostes situen la reconeguda escriptora xinesa Can Xue com a favorita. El seu nom &eacute;s un etern de la llista, igual que el de Jon Fosse, Gerald Murnane, Anne Carson, Ludmila Ulitskaja i Mircea Cărtărescu, que va delectar molts lectors catalans amb Solenoide (Periscopi). Entre la resta de possibles guanyadors, hi ha Haruki Murakami, Michel Houellebecq, C&eacute;sar Aira, Ra&uuml;l Zurita i Salman Rushdie, l\'escriptor que va ser atacat en un acte a Nova York l\'any passat, despr&eacute;s de ser amena&ccedil;at durant d&egrave;cades pel seu llibre Els versos sat&agrave;nics, i que participar&agrave; enguany al Kosmopolis.</p>', '2023-09-29', 1, 1, '2023-10-03 10:18:05', '2024-04-13 16:01:13'),
(2, 'Més de cinquanta editorials mostren els últims títols en valencià en l\'onzena Plaça del Llibre', 'mes-de-cinquanta-editorials-mostren-els-ultims-titols-en-valencia-en-lonzena-placa-del-llibre', 'images/posts/FVyMkTZqD4CtTSgC1bOz2F2nrlTzNzpj1Dt3mvKI.jpg', 'À Punt', 'https://www.apuntmedia.es/noticies/cultura/cinquanta-editorials-mostren-ultims-titols-valencia-l-onzena-placa-llibre_1_1655326.html', '<p>La Pla&ccedil;a del Llibre torna aquest divendres a Val&egrave;ncia per a celebrar l\'edici&oacute; que fa onze al Jard&iacute; Bot&agrave;nic, amb la col&middot;laboraci&oacute; de la Universitat de Val&egrave;ncia. Fins a l&rsquo;1 de novembre, m&eacute;s de 50 editorials es donaran cita en l\'aparador m&eacute;s gran de la literatura en valenci&agrave;, integrat per m&eacute;s de 3.000 t&iacute;tols en exposici&oacute; i mig centenar de propostes per a tots els p&uacute;blics.</p>\r\n<div class=\"advertising banner list\">&nbsp;</div>\r\n<p>Entre les editorials figuren Llibres de la Drassana, Jollibre, Andana Editorial, Savanna Books, o les editorials universit&agrave;ries com ara Publicacions de la Universitat de Val&egrave;ncia (PUV), Publicacions de la Universitat d&rsquo;Alacant i el servei de publicacions de la Universitat Jaume I.&nbsp;</p>\r\n<p>Segons defensa &Agrave;frica Ram&iacute;rez, presidenta de l&rsquo;Associaci&oacute; d&rsquo;Editors del Pa&iacute;s Valenci&agrave;, &ldquo;&eacute;s una cita clau, un espai de contacte amb els lectors&rdquo; que dona a les editorials menudes la possibilitat de &ldquo;fer-se un lloc al costat dels grans grups&rdquo;. D&rsquo;altra banda, el p&uacute;blic assistent tamb&eacute; hi podr&agrave; trobar un gran aparador de diferents mat&egrave;ries gestionat per les llibreries Abacus i Llibreria de Pla&ccedil;a del Llibre. Jes&uacute;s Figuerola, president de la Fundaci&oacute; Full (Fundaci&oacute; pel Llibre i la Lectura), explica que aquesta cita &ldquo;reivindica la pot&egrave;ncia de la nostra literatura, s&rsquo;estableix com un espai que visibilitza l&rsquo;extraordin&agrave;ria producci&oacute; liter&agrave;ria en la nostra llengua i la fa arribar als lectors&rdquo;.</p>\r\n<h2 class=\"heading\"><strong>Una programaci&oacute; transversal</strong></h2>\r\n<p>Dins de la programaci&oacute; s&rsquo;intercalaran tert&uacute;lies, tallers i presentacions liter&agrave;ries, recitals po&egrave;tics, mon&ograve;legs i la retransmissi&oacute; en directe del p&ograve;dcast&nbsp;<em>Deparkineo</em>, enfocat en la maternitat. El p&uacute;blic infantil tamb&eacute; disposar&agrave; de titelles, un espectacle musical i altres activitats manuals.</p>\r\n<p>Entre les presentacions destaca&nbsp;<em>Han tornat les roselles</em>, d&rsquo;Isabel Robles;&nbsp;<em>Les abs&egrave;ncies</em>, de l&rsquo;escriptora Irene Klein i&nbsp;<em>Rosa Torres. La construcci&oacute; d&rsquo;un llenguatge</em>, de Francesc Miralles, que comptar&agrave; amb l\'autor de l&rsquo;obra i la mateixa Rosa Torres. I l&rsquo;Etno, el Museu valenci&agrave; d&rsquo;Etnologia, ofereix la taula redona&nbsp;<em>Faltar o morir</em>, amb Raquel Ferrero, Jos&eacute; Mar&iacute;a Candela i Eusebio L&oacute;pez, i la conversa&nbsp;<em>Un vermut de fantasia amb la Guia inacabada</em>, que estar&agrave; a c&agrave;rrec de Joan Borja, V&iacute;ctor Labrado, Francesc Gisbert i Amparo Pons.</p>\r\n<div class=\"advertising banner list\">&nbsp;</div>\r\n<h2 class=\"heading\"><strong>Lliurament de premis</strong></h2>\r\n<p>Durant aquesta edici&oacute; tamb&eacute; es far&agrave; el lliurament dels Premis Samaruc i els Premis Pla&ccedil;a del Llibre, que enguany han reconegut a la poeta, traductora i assagista Isabel Robles, per la seua traject&ograve;ria liter&agrave;ria; a la Instituci&oacute; Alfons el Magn&agrave;nim-Centre d&rsquo;Estudis i d&rsquo;Investigaci&oacute; en la categoria de traject&ograve;ria editorial; i, finalment, a l&rsquo;associaci&oacute; Maestrat Viu per la seua difusi&oacute; de la cultura valenciana. El lliurament dels Premis FULL d&rsquo;Investigaci&oacute; i difusi&oacute; de la lectura comptar&agrave; amb una pon&egrave;ncia de Josep Ballester, catedr&agrave;tic de la Universitat de Val&egrave;ncia.</p>', '2023-10-27', 1, 11, '2023-10-28 11:30:33', '2023-10-28 11:30:33'),
(3, 'El IEC es desmarca del llenguatge inclusiu i diu que és una fórmula artificial', 'el-iec-es-desmarca-del-llenguatge-inclusiu-i-diu-que-es-una-formula-artificial', 'images/posts/9UNSgx2Za7cZ7moR7JiEC49RGSIPm1Bl1SJedL4K.jpg', 'Vilaweb', 'https://www.vilaweb.cat/noticies/iec-desmarca-llenguatge-inclusiu/', '<p>La Secci&oacute; Filol&ograve;gica de l&rsquo;Institut d&rsquo;Estudis Catalans (IEC) ha em&egrave;s un comunicat en qu&egrave; s&rsquo;ha desmarcat de l&rsquo;&uacute;s de l&rsquo;anomenat llenguatge inclusiu, tot recordant que &eacute;s una f&oacute;rmula artificial.</p>\r\n<p>El document constata, en al&middot;lusi&oacute; al llenguatge inclusiu, que &ldquo;han sorgit algunes tend&egrave;ncies de manipulaci&oacute; conscient de la gram&agrave;tica per a fer-la evolucionar en un determinat sentit, una evoluci&oacute; diferent de la que &eacute;s habitual en les lleng&uuml;es naturals, guiades en aquest &agrave;mbit per la convenci&oacute; t&agrave;cita, diferent de la que sol aplicar-se en determinades innovacions ortogr&agrave;fiques o terminol&ograve;giques en qu&egrave; la convenci&oacute; &eacute;s expl&iacute;cita&rdquo;.</p>\r\n<p>Els experts de la Secci&oacute; Filol&ograve;gica recorden que, en catal&agrave;, el mascul&iacute; &eacute;s el terme no marcat i el femen&iacute; el terme marcat. I afegeixen: &ldquo;El sexe, en canvi, fa refer&egrave;ncia a la divisi&oacute; en determinades esp&egrave;cies d&rsquo;&eacute;ssers vius entre mascles i femelles d&rsquo;acord amb un conjunt de trets bioqu&iacute;mics, fisiol&ograve;gics i org&agrave;nics.&rdquo;</p>\r\n<p>Per a veure la difer&egrave;ncia, posa aquest exemple: &ldquo;En aquells casos en qu&egrave; s&rsquo;estableixen distincions sexuals a partir d&rsquo;oposicions de g&egrave;nere, el terme no marcat pot incloure tots els elements sense establir distincions de sexe. Per aix&ograve;, amb l&rsquo;oraci&oacute; &lsquo;Els gossos d&rsquo;atura s&oacute;n molt intel&middot;ligents&rsquo; ens podem referir a la classe de gossos d&rsquo;atura en general, sense diferenciar-hi mascles ni femelles. En canvi, el femen&iacute; t&eacute; un &uacute;s espec&iacute;fic i ling&uuml;&iacute;sticament es considera el g&egrave;nere marcat i, doncs, no pot incloure individus de g&egrave;nere diferent.&rdquo;</p>\r\n<p>S&rsquo;oposa a la pr&agrave;ctica de fer servir el femen&iacute; gen&egrave;ric. &ldquo;Emprar el femen&iacute; per a referir-se a un conjunt de persones format per homes i per dones provoca una interpretaci&oacute; en qu&egrave; els homes en queden exclosos&rdquo;, diu. I afegeix: &ldquo;La interpretaci&oacute; per defecte &eacute;s que es fa refer&egrave;ncia a un conjunt format exclusivament per dones. Per tant, es tracta d&rsquo;un &uacute;s que pot generar expressions equ&iacute;voques i confuses.&rdquo;</p>\r\n<p>El text recorda que el catal&agrave; disposa d&rsquo;alternatives a l&rsquo;&uacute;s del femen&iacute; gen&egrave;ric que s&iacute; que aconsegueixen aquest prop&ograve;sit de &ldquo;fer visibles les dones a trav&eacute;s del llenguatge&rdquo; sense contravenir les normes gramaticals, com ara les formes dobles (&eacute;s a dir, explicitar tant el mascul&iacute; com el femen&iacute; d&rsquo;un mateix nom per mitj&agrave; de la coordinaci&oacute;), l&rsquo;&uacute;s de mots col&middot;lectius (&eacute;s a dir, noms amb un referent plural tot i tenir forma singular, com ara &ldquo;professorat&rdquo;) o b&eacute; l&rsquo;&uacute;s del &ldquo;tothom&rdquo; com a alternativa a certs masculins gen&egrave;rics.</p>\r\n<p>El IEC recorda que cal alternar aquestes estrat&egrave;gies alternatives a l&rsquo;&uacute;s del femen&iacute; gen&egrave;ric segons el context. &ldquo;Cal determinar el recurs m&eacute;s adequat en cada cas, tenint en compte el tipus de text que s&rsquo;elabora, quina finalitat t&eacute; i a qui va destinat, entre altres factors discursius. D&rsquo;aquesta manera, s&rsquo;evitar&agrave; que les construccions que se&rsquo;n puguin obtenir siguin feixugues, for&ccedil;ades o fins i tot equ&iacute;voques i aix&iacute; el resultat final ser&agrave; un discurs clar i coherent, d&rsquo;acord amb el context.&rdquo; I afegeix: &ldquo;Sigui com sigui, l&rsquo;&uacute;s del g&egrave;nere no marcat com a gen&egrave;ric &eacute;s plenament normatiu i no implica cap<br>voluntat d&rsquo;ocultar la pres&egrave;ncia de dones en un determinat col&middot;lectiu.&rdquo;</p>\r\n<p>Sobre la proposta de crear formes amb la terminaci&oacute; &ndash;i (com ara&nbsp;<em>ellis</em>&nbsp;en compte de&nbsp;<em>ells</em>) per a evitar de rec&oacute;rrer a la classificaci&oacute; bin&agrave;ria mascul&iacute;-femen&iacute;, el IEC recorda que aquesta estrat&egrave;gia &eacute;s estranya al marc normatiu i gramatical. I continua: &ldquo;En aquest cas, no es tracta d&rsquo;una tria estil&iacute;stica ja existent en la nostra llengua, &eacute;s a dir, no &eacute;s cap estrat&egrave;gia natural del catal&agrave;, sin&oacute; que s&rsquo;ha creat manipulant el funcionament intern de la llengua i, per tant, contradiu el nostre sistema ling&uuml;&iacute;stic. &Eacute;s, doncs, un recurs que contrav&eacute; les normes internes del catal&agrave;.&rdquo;</p>\r\n<p>El document acaba dient: &ldquo;En catal&agrave;, el mascul&iacute; &eacute;s el g&egrave;nere no marcat i, per tant, es pot fer servir per a fer refer&egrave;ncia gen&egrave;ricament a grups o individus tant de sexe mascul&iacute; com de sexe femen&iacute;.&rdquo; Aix&iacute; i tot, recorda: &ldquo;Si es vol subratllar el fet que en un determinat conjunt de persones hi ha tant homes com dones, hi ha diversos recursos estil&iacute;stics que permeten fer-ho&rdquo;, uns recursos que s&oacute;n acceptables &ldquo;sempre que s&rsquo;utilitzin adequadament i no cre&iuml;n problemes d&rsquo;ambig&uuml;itat, flu&iuml;desa o complexitat&rdquo;.</p>\r\n<p>I afegeix: &ldquo;En alguns contextos, per&ograve;, aquestes estrat&egrave;gies per a evitar la discriminaci&oacute; en el llenguatge poden ser innecess&agrave;ries o artificioses, com el desdoblament sistem&agrave;tic de formes, que pot donar lloc a expressions complexes i a vegades de significat erroni o b&eacute; a errors de concordan&ccedil;a. En tot cas, es tracta de tries individuals o corporatives que, com a tals, ni s&rsquo;haurien de prohibir ni s&rsquo;haurien de fer obligat&ograve;ries.&rdquo;</p>', '2023-10-26', 1, 11, '2023-10-28 11:37:30', '2023-10-28 11:37:30'),
(4, 'La pressió dels llibreters doblega el Consell de Menorca i manté viva la Fira del Llibre en Català', 'la-pressio-dels-llibreters-doblega-el-consell-de-menorca-i-mante-viva-la-fira-del-llibre-en-catala', 'images/posts/yj5dA3e3E8SxblqcGmPeDQgxcxAzc0eu67Cemtot.jpg', 'Vilaweb', 'https://www.vilaweb.cat/noticies/pressio-llibreters-doblega-consell-menorca-viva-fira-llibre-catala/', '<div class=\"max-w-4xl\">\r\n<p>El<strong>&nbsp;Consell de Menorca</strong>&nbsp;ha rectificat i&nbsp;<strong>no fulminar&agrave; la Fira del Llibre en Catal&agrave;</strong>, que es far&agrave; el 25 de novembre a Ciutadella. Ara fa dues setmanes, el Consell, que dirigeix el PP despr&eacute;s d&rsquo;haver arribat a un acord amb Vox, va indignar les llibreries de l&rsquo;illa quan va anunciar modificacions en la fira per a incloure-hi autors menorquins que escriuen en castell&agrave;. Els llibreters van amena&ccedil;ar de boicotar-la.</p>\r\n<div class=\"mb-10 md:w-4/5 ml-auto xl:w-5/6\">\r\n<div class=\"border-b border-gray-300 border-t flex py-4 w-full\">\r\n<div class=\"flex w-full\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<p>Finalment, aquest migdia, la pol&egrave;mica s&rsquo;ha tancat amb un acord entre el Consell i les llibreries. La Fira del Llibre en Catal&agrave; conservar&agrave; la seva ess&egrave;ncia, despr&eacute;s de gaireb&eacute; dues d&egrave;cades de recorregut, i continuar&agrave; vindicant la literatura en catal&agrave;. Aix&iacute; mateix, el Consell ha anunciat que al gener es far&agrave; una segona fira &ndash;la Fira del Llibre de Menorca&ndash;, en qu&egrave; hi haur&agrave; literatura en castell&agrave;, entre m&eacute;s lleng&uuml;es.</p>\r\n<p>&ldquo;&Eacute;s una molt bona not&iacute;cia per a Menorca. El Consell i les llibreries ens hem posat d&rsquo;acord per fer dues fires. Mantenim la Fira del Llibre en Catal&agrave;, tal com s&rsquo;havia fet fins ara, i incorporem una cita de nova creaci&oacute;, la Fira del Llibre de Menorca&rdquo;, ha dit el conseller de Cultura, Joan Pons.</p>\r\n<p>Tanmateix, l&rsquo;optimisme del conseller contrasta amb el parer dels llibreters, que lamenten haver hagut de negociar tant per mantenir viva la fira en catal&agrave;.</p>\r\n</div>\r\n<div class=\"mt-6 relative\">&nbsp;</div>', '2023-10-28', 0, 11, '2023-10-29 07:36:30', '2023-10-29 07:36:30'),
(5, 'La Tia Visantica, la millor creadora de contingut en català del País Valencià', 'la-tia-visantica-la-millor-creadora-de-contingut-en-catala-del-pais-valencia', 'images/posts/SMz5zuWG9dq0kGe93CL1hdOicmCHXIAnrPiq6CDO.png', 'Vilaweb', 'https://www.vilaweb.cat/noticies/tia-visantica-millor-creadora-contingut-catala/', '<p>La&nbsp;<strong>segona Gala de Creaci&oacute; de Contingut en Valenci&agrave;</strong>&nbsp;ha atorgat els premis a la creaci&oacute; de contingut en catal&agrave;. Una gala que ha coronat la&nbsp;<strong>Tia Visantica</strong>&nbsp;com a millor creadora de contingut de l&rsquo;any. Enguany, comptava amb tres nominacions, tamb&eacute; a les categories d&rsquo;instagramer de l&rsquo;any i tiktoker, per&ograve; finalment aquests guardons han anat a parar a&nbsp;<strong>Xitxo del Cabanyal</strong>&nbsp;i&nbsp;<strong>Gina,</strong>&nbsp;respectivament. La gala &eacute;s organitzada per Poblet (plataforma que reuneix la creaci&oacute; de contingut valenci&agrave;), la Claveguera (segell discogr&agrave;fic de Malparlat) i l&rsquo;Associaci&oacute; Ciutadana i Comunicaci&oacute; (ACICOM).</p>\r\n<p>Un altre dels qui es presentava amb m&eacute;s nominacions era l&rsquo;alte&agrave;&nbsp;<strong>Aitor Mu&ntilde;oz</strong>, el creador de contingut conegut com a&nbsp;<strong>Llet i Vi</strong>, que s&rsquo;ha endut el reconeixement de streamer de l&rsquo;any.&nbsp; I ha quedat finalista en les categories de v&iacute;deo de l&rsquo;any, per una entrevista a Xavi Sarri&agrave;, youtuber de l&rsquo;any i creador de l&rsquo;any.</p>\r\n<p>Els organitzadors han atorgat el premi de creador honor&iacute;fic a&nbsp;<strong>la Gossa Sorda</strong>. El vocalista,&nbsp;<strong>Josep Nadal</strong>, ha recollit el premi en representaci&oacute; del m&iacute;tic grup de Pego, que ha estat reconegut per la seua tasca de promoci&oacute;, seguiment i creaci&oacute; per a generar un ecosistema musical en catal&agrave;.</p>\r\n<p>Per una altra banda,&nbsp;<strong>Alegria de Poble</strong>&nbsp;ha estat reconegut com a creador revelaci&oacute;. &ldquo;La seua frescor i originalitat van sorprendre i captivar l&rsquo;audi&egrave;ncia, pel gran potencial en el m&oacute;n de la creaci&oacute; de contingut. A m&eacute;s, Alegria comptava, juntament amb Llet i Vi, amb quatre nominacions. Per&ograve; el jurat professional nom&eacute;s l&rsquo;ha reconegut en la categoria de revelaci&oacute;&rdquo;, expliquen els organitzadors. Tot un &egrave;xit per a l&rsquo;aparici&oacute; m&eacute;s innovadora d&rsquo;aquest darrer any en el m&oacute;n de la creaci&oacute; de contingut en catal&agrave;. Alguns dels seus v&iacute;deos a TikTok tenen milers de reproduccions.</p>\r\n<p>El premi al millor v&iacute;deo de l&rsquo;any ha estat per a &ldquo;La Mona Lisa&rdquo; d&rsquo;<strong>El coneixement</strong>&nbsp;<strong>no fa nosa</strong>. Aquesta obra va captivar el jurat amb la seva bellesa i profunditat, i per oferir una visi&oacute; &uacute;nica de l&rsquo;art i la cultura amb un llenguatge &agrave;cid i to humor&iacute;stic.</p>\r\n<p>El reconeixement com a youtuber de l&rsquo;any ha estat per a&nbsp;<strong>Apr&egrave;n valenci&agrave; en l&iacute;nia</strong>. Amb aquest canal, ha educat i entretingut amb contingut de qualitat i ha contribu&iuml;t a la promoci&oacute; de la llengua i la cultura.</p>\r\n<p><strong>Gina</strong>&nbsp;ha guanyat el t&iacute;tol de tiktoker de l&rsquo;any gr&agrave;cies a la creativitat i autenticitat en la creaci&oacute; de contingut a la xarxa social. Les creacions r&agrave;pides i entretingudes destaquen en aquesta plataforma, segons els organitzadors.</p>\r\n<p>El reconeixement com a instagramer de l&rsquo;any ha estat per a&nbsp;<strong>Xitxo del Cabanyal</strong>. El seu mur d&rsquo;imatges i hist&ograve;ries ha transm&egrave;s la bellesa i la riquesa de manera excepcional amb to d&rsquo;entreteniment.</p>', '2023-10-31', 1, 11, '2023-11-01 06:54:52', '2023-11-01 06:54:52'),
(6, 'L’extinció de les biblioteques personals', 'lextincio-de-les-biblioteques-personals', 'images/posts/zaFA17qKr6us1JPrxvJt4gCexJrZI9taU2oMBNqq.jpg', 'https://lletraferit.com/', 'https://lletraferit.com/patrimoni/lextincio-de-les-biblioteques-personals/', '<div class=\"et_pb_module et_pb_text et_pb_text_0_tb_body  et_pb_text_align_left et_pb_bg_layout_light\">\r\n<div class=\"et_pb_text_inner\">Les biblioteques de les cases desapareixen a la carrera, com l&rsquo;h&agrave;bit lector. Qui en t&eacute; la culpa?</div>\r\n</div>\r\n<div class=\"et_pb_module et_pb_post_content et_pb_post_content_0_tb_body\">\r\n<p class=\"p1\">N&rsquo;hi ha m&eacute;s, segur, per&ograve; se m&rsquo;ocorren, aix&iacute; a colp, quatre tipologies de biblioteques personals o familiars contempor&agrave;nies: en primer lloc, trobem la cl&agrave;ssica llibreria que ompli totes les parets d&rsquo;un despatx i que s&rsquo;escampa, m&eacute;s discretament i per desbordament natural, per altres estances de la casa. Amb el temps, tamb&eacute; amb naturalitat, el tap&iacute;s de llibres ha esdevingut escenari on es destina, a l&rsquo;oci i a treballar sobre pantalles, part del temps que abans s&rsquo;emprava en llegir volums en paper, per pura fru&iuml;ci&oacute; liter&agrave;ria, o a consultar coses (m&eacute;s o menys) pr&agrave;ctiques. Se m&rsquo;ocorre imaginar, posem per cas, la propiet&agrave;ria assentada davant d&rsquo;una taula de cirerer, amb un port&agrave;til obert. Darrere d&rsquo;ella destaquen els deu volums, en roig guaflex, del&nbsp;<a href=\"https://ca.wikipedia.org/wiki/Diccionari_catal%25C3%25A0-valenci%25C3%25A0-balear\"><span class=\"s1\">sumptu&oacute;s&nbsp;<em>Diccionari Alcover-Moll</em></span></a>. No &eacute;s que visca amb turment pels dubtes existencials, per&ograve; consulta en l&iacute;nia&nbsp;<a href=\"https://dcvb.iec.cat/results.asp?Word=progr%2525E9s&amp;Id=115153&amp;search=progr%2525E9s\"><span class=\"s1\">el significat de la paraula&nbsp;<em>progr&eacute;s</em></span></a>. Li telefonen i s&rsquo;al&ccedil;a a caminar per l&rsquo;habitaci&oacute;. La conversa &eacute;s trivial, avorrida. Observa els lloms de l&rsquo;<strong>Alcover</strong>, els toca, amb el m&ograve;bil apegat a l&rsquo;orella, i es pregunta quant de temps fa que no consulta un terme directament sobre el paper.</p>\r\n<p class=\"p1\">La segona &eacute;s una biblioteca de fetitxes. El propietari a penes dedica ja temps a llegir en paper. Fa uns anys que decid&iacute; resoldre el debat intern. Li agrada m&eacute;s que li relaten les hist&ograve;ries des de la pantalla. S&iacute;, s&egrave;ries. Com tants altres. No &eacute;s tan jove com per a no recordar amb afecte aquell temps i col&middot;lecciona edicions dels llibres que l&rsquo;emocionaren i el colpiren en el passat. Hi ha alguna cosa t&agrave;cita en esta resignaci&oacute;, com si el temps present no oferira ja un marge per a la sorpresa i el descobriment, com si la possessi&oacute; fora ja l&rsquo;alternativa definitiva.</p>\r\n<p class=\"p1\">La tercera biblioteca se sost&eacute; sobre una quimera. Els seus t&iacute;tols han sigut importants per al propietari &ndash;molt, fins i tot&ndash;, per&ograve; l&rsquo;entusiasme que despertaren en el seu moment &eacute;s ja simple nost&agrave;lgia. Sap que no tornar&agrave; sobre ells. &Eacute;s millor no temptar la sort, no rellegir obres que potser ara decebrien. &Eacute;s preferible conservar-ne el record intacte. I a m&eacute;s est&agrave; la presb&iacute;cia. Ha arribat a la conclusi&oacute; que desmantellar la llibreria vital no seria cap sacrilegi, per&ograve; s&rsquo;ho estalviar&agrave;. No vol ser qui decidisca el tall definitiu. S&rsquo;estima m&eacute;s apostar per una probabilitat tan difusa que &eacute;s quasi com fer-se trampes al solitari. Mantindr&agrave; la biblioteca per si, algun dia, alguns dels llibres apleguen a ser tan importants per als fills.</p>\r\n<p class=\"p1\">La quarta &eacute;s la biblioteca buida, de prestatges polsegosos amb alguna andr&ograve;mina oblidada durant el saqueig. Els exemplars s&rsquo;han venut a pes a alguna misericorde llibreria de vell, on buscaran una segona oportunitat. O s&rsquo;han refilat al reciclatge del paper. O fins i tot al femer de l&rsquo;org&agrave;nic. Una her&egrave;ncia enverinada.</p>\r\n</div>', '2024-03-20', 1, 11, '2024-03-23 11:12:35', '2024-03-23 11:12:35'),
(7, 'La Rambla recuperarà tota l’esplendor pel Sant Jordi 2024 a Barcelona amb parades de punta a punta', 'la-rambla-recuperara-tota-lesplendor-pel-sant-jordi-2024-a-barcelona-amb-parades-de-punta-a-punta', 'images/posts/5XVaF5UJXYVeiVMLRb7BpoLTXcqTFOe0ajzWS2sK.jpg', 'https://beteve.cat', 'https://beteve.cat/cultura/parades-rambla-sant-jordi-2024-barcelona/', '<div class=\"pd-top-5\">&nbsp;</div>\r\n<h4 class=\"post-subtitle tw-font-grotesk tw-pt-10px tw-text-[rgba(42,48,52,0.45)] tw-text-[24px] tw-leading-[1.2] tw-tracking-[0] max991:tw-text-[16px] max991:tw-leading-[1.2]\">Les llibreries tornaran a ocupar tota la superf&iacute;cie del passeig, des de la pla&ccedil;a de Catalunya fins al tram de Santa M&ograve;nica</h4>\r\n<div class=\"post-author-container tw-text-[#979797] tw-pt-20px !tw-pb-15px tw-text-[18px] tw-space-x-[5px]\"><span class=\"post-author-date-text post-author-text tw-mb-0 tw-text-roigbeteve tw-pr-[11px]\"><a href=\"https://beteve.cat/author/maria-solans/\">Maria Solans&nbsp;</a></span></div>\r\n<div class=\"post-author-container tw-text-[#979797] tw-pt-20px !tw-pb-15px tw-text-[18px] tw-space-x-[5px]\">&nbsp;</div>\r\n<div class=\"post-author-container tw-text-[#979797] tw-pt-20px !tw-pb-15px tw-text-[18px] tw-space-x-[5px]\">\r\n<p>La Rambla<strong>&nbsp;tornar&agrave; a ser un dels epicentres&nbsp;</strong>de la&nbsp;<a href=\"https://beteve.cat/agenda/sant-jordi-barcelona/\">diada de Sant Jordi</a>&nbsp;a Barcelona aquest 2024. Segons ha ha explicat la Cambra del Llibre aquest dilluns, les parades&nbsp;<strong>tornaran a ocupar tota la superf&iacute;cie del passeig, des de la pla&ccedil;a de Catalunya fins a la rambla de Santa M&ograve;nica.</strong>&nbsp;L&rsquo;atemptat terrorista del 2017 i la pand&egrave;mia sanit&agrave;ria van obligar a modificar la<strong>&nbsp;configuraci&oacute; de l&rsquo;espai per a les parades de Sant Jordi.</strong>&nbsp;Tot i que l&rsquo;any passat,&nbsp;<strong><a href=\"https://beteve.cat/cultura/rambla-suma-superilla-sant-jordi-2023-no-consell-cent/\">el passeig ja es va sumar a la superilla liter&agrave;ria</a>,</strong>&nbsp;nom&eacute;s ho va fer&nbsp;<strong>des de Canaletes fins a l&rsquo;entrada de la pla&ccedil;a Reial</strong>.</p>\r\n<div>\r\n<p>Ara, per&ograve;, tornar&agrave; a omplir-se d&rsquo;activitat. Per Mari&agrave; Mar&iacute;n, responsable del Gremi de Llibreters,&nbsp;<strong>&ldquo;recuperar la festa al lloc on va n&eacute;ixer i recuperar la Rambla per a la ciutadania i la cultura ens sembla molt rellevant&rdquo;.&nbsp;</strong>A la Rambla<strong>&nbsp;hi haur&agrave; en total 94 parades de llibres</strong>, les floristeries &mdash;com l&rsquo;any passat&mdash; i les parades de les entitats del barri, com per exemple Amics de la Rambla.</p>\r\n<div>\r\n<h3 class=\"wp-block-heading\">Un espai de Sant Jordi &ldquo;definitiu&rdquo;</h3>\r\n<p>Tot apunta, a m&eacute;s, que no hi haur&agrave; marxa enrere i que aquest &eacute;s el model que se seguir&agrave; els propers anys. El regidor de Cultura de l&rsquo;Ajuntament, Xavier Merc&egrave;, ha detallat que&nbsp;<strong>&ldquo;la Rambla es recupera d&rsquo;una manera que voldria pensar que &eacute;s definitiva com un espai de Sant Jordi&rdquo;.&nbsp;</strong>Merc&egrave; tamb&eacute; s&rsquo;ha mostrat conven&ccedil;ut que Sant Jordi ser&agrave; tot un &egrave;xit i que &ldquo;un any mes ser&agrave; un any de r&egrave;cords&rdquo;.</p>\r\n<div>&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>', '2024-04-08', 1, 11, '2024-04-13 13:27:40', '2024-04-13 13:27:40'),
(8, 'Guia de Sant Jordi 2024 a Barcelona', 'guia-de-sant-jordi-2024-a-barcelona', 'images/posts/VC57KTxuaOBMTvqRyQ0rbnWt3Rd3kpxYgsWphDkL.webp', 'https://www.timeout.cat', 'https://www.timeout.cat/barcelona/ca/sant-jordi-a-barcelona', '<p>&Eacute;s la festa de la cultura catalana per excel&middot;l&egrave;ncia, i aquest 23 d\'abril es recuperen les Rambles i s\'amplia la superilla liter&agrave;ria.&nbsp;<a href=\"https://www.timeout.cat/barcelona/ca/que-fer\" target=\"_blank\" rel=\"noopener noreferrer\">Qu&egrave; fer a Barcelona</a>&nbsp;per Sant Jordi 2024? Sortirem al carrer, ens regalarem&nbsp;<a href=\"https://www.timeout.cat/barcelona/ca/llibres\" target=\"_blank\" rel=\"noopener noreferrer\">llibres</a>&nbsp;i roses, els autors i autores signaran les seves novetats i als diversos barris de Barcelona s\'organitzen un munt d\'activitats.&nbsp;Preneu nota!</p>', '2024-03-13', 1, 11, '2024-04-13 13:40:31', '2024-04-13 13:40:31'),
(9, 'Quins llibres podeu regalar per Sant Jordi 2024? Més de setanta novel·les en català', 'quins-llibres-podeu-regalar-per-sant-jordi-2024-mes-de-setanta-novelles-en-catala', 'images/posts/9b44NwiSljQVU6Gpqmpf7cNZoQEH4mMMmPGdtYfP.jpg', 'https://www.vilaweb.cat', 'https://www.vilaweb.cat/noticies/novelles-llibres-sant-jordi-2024-recomanacions/', '<p>No sabeu quins llibres regalar per Sant Jordi 2024? Per facilitar-vos la tria, us recomanem una gran varietat de novel&middot;les. &Eacute;s una selecci&oacute; de novetats editorials, publicades majorit&agrave;riament del gener a l&rsquo;abril d&rsquo;enguany, excepte els llibres premiats a obra publicada. En total, m&eacute;s de setanta propostes que dividim en cinc apartats: premis a obra in&egrave;dita, premis a obra publicada, novetats, reedicions i cl&agrave;ssics, i traduccions. Les travesses pr&egrave;vies a Sant Jordi apunten que els que tindran m&eacute;s &egrave;xit seran els medi&agrave;tics&nbsp;<strong>Ramon Gener</strong>, amb&nbsp;<em>Hist&ograve;ria d&rsquo;un piano</em>&nbsp;(Columna), i&nbsp;<strong>Xavi Coral</strong>, amb&nbsp;<em>Aprendre a esquivar les bales</em>&nbsp;(la Campana), frec a frec amb&nbsp;<strong>Eva Baltasar</strong>, amb&nbsp;<em>Oc&agrave;s i fascinaci&oacute;</em>&nbsp;(Club Editor). Entre les novel&middot;les tradu&iuml;des, destaquen&nbsp;<em>Baumgartner</em>&nbsp;(Edicions 62), el retorn de&nbsp;<strong>Paul Auster</strong>, i&nbsp;<em>La dist&agrave;ncia que ens separa&nbsp;</em>(l&rsquo;Altra Editorial), de&nbsp;<strong>Maggie O&rsquo;Farrell</strong>, que l&rsquo;any passat va ser l&rsquo;autora de ficci&oacute; tradu&iuml;da amb m&eacute;s vendes.</p>\r\n<div id=\"vlw-intext-banner\"></div>\r\n<p>Durant aquesta setmana publicarem unes quantes seleccions de llibres dedicades a llibres de no-ficci&oacute;, gastronomia, poesia i novel&middot;la negra. Tamb&eacute; hi haur&agrave; un episodi especial del p&ograve;dcast&nbsp;<em>Poc cas</em>, dedicat a la literatura infantil i juvenil.</p>\r\n<div class=\"wp-block-media-text alignwide vlw-book-entry vlw-wp-block-media-text-container adjust-margin\">\r\n<div class=\"wp-block-media-text__content vlw-wp-block-media-text-text space-y-1 vlw-pattern\">\r\n<p>Continua llegint: https:<a href=\"https://www.vilaweb.cat/noticies/novelles-llibres-sant-jordi-2024-recomanacions/\">//www.vilaweb.cat/noticies/novelles-llibres-sant-jordi-2024-recomanacions/</a></p>\r\n</div>\r\n</div>', '2024-04-13', 1, 11, '2024-04-14 12:13:40', '2024-04-14 12:13:40');

-- --------------------------------------------------------

--
-- Estructura de la taula `rating_actes`
--

CREATE TABLE `rating_actes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `acte_id` bigint(20) UNSIGNED NOT NULL,
  `rate` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `rating_autors`
--

CREATE TABLE `rating_autors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `autor_id` bigint(20) UNSIGNED NOT NULL,
  `rate` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `rating_autors`
--

INSERT INTO `rating_autors` (`id`, `user_id`, `autor_id`, `rate`, `created_at`, `updated_at`) VALUES
(1, 11, 12, 5.00, '2023-10-15 08:41:25', '2023-10-15 08:41:25'),
(2, 11, 15, 5.00, '2024-04-13 13:58:48', '2024-04-13 13:58:48'),
(3, 11, 16, 2.50, '2024-04-13 14:02:01', '2024-04-13 14:02:01'),
(4, 11, 17, 5.00, '2024-04-13 14:10:46', '2024-04-13 14:10:46'),
(5, 11, 21, 5.00, '2024-04-14 13:09:11', '2024-04-14 13:09:11'),
(6, 20, 15, 5.00, '2024-04-16 14:37:45', '2024-04-16 14:37:45');

-- --------------------------------------------------------

--
-- Estructura de la taula `rating_books`
--

CREATE TABLE `rating_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `rate` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `rating_books`
--

INSERT INTO `rating_books` (`id`, `user_id`, `book_id`, `rate`, `created_at`, `updated_at`) VALUES
(13, 1, 4, 5.00, '2023-09-12 10:39:58', '2023-09-12 10:39:58'),
(17, 12, 8, 5.00, '2023-10-03 04:29:44', '2023-10-03 04:29:44'),
(18, 11, 8, 5.00, '2023-10-03 04:51:06', '2023-10-03 04:51:06'),
(19, 12, 1, 2.50, '2023-10-03 06:00:21', '2023-10-03 06:00:21'),
(20, 12, 6, 5.00, '2023-10-03 06:01:24', '2023-10-03 06:01:24'),
(21, 11, 10, 5.00, '2023-10-15 08:51:37', '2023-10-15 08:51:37'),
(22, 11, 17, 5.00, '2024-04-11 20:50:28', '2024-04-11 20:50:28'),
(24, 11, 51, 3.00, '2024-04-13 15:16:12', '2024-04-13 15:16:12'),
(25, 11, 52, 4.00, '2024-04-13 15:16:50', '2024-04-13 15:16:50'),
(26, 11, 35, 3.00, '2024-04-13 15:17:19', '2024-04-13 15:17:19'),
(27, 19, 60, 5.00, '2024-04-15 14:37:41', '2024-04-15 14:37:41'),
(28, 20, 8, 5.00, '2024-04-16 14:34:49', '2024-04-16 14:34:49'),
(29, 20, 25, 3.00, '2024-04-16 14:46:14', '2024-04-16 14:46:14'),
(30, 1, 8, 5.00, '2024-04-17 17:28:05', '2024-04-17 17:28:05');

-- --------------------------------------------------------

--
-- Estructura de la taula `rating_bookshops`
--

CREATE TABLE `rating_bookshops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bookshop_id` bigint(20) UNSIGNED NOT NULL,
  `rate` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `rating_bookshops`
--

INSERT INTO `rating_bookshops` (`id`, `user_id`, `bookshop_id`, `rate`, `created_at`, `updated_at`) VALUES
(1, 12, 1, 5.00, '2023-10-30 19:36:23', '2023-10-30 19:36:23'),
(2, 11, 2, 5.00, '2024-04-14 11:48:45', '2024-04-14 11:48:45'),
(3, 11, 3, 5.00, '2024-04-14 13:34:27', '2024-04-14 13:34:27');

-- --------------------------------------------------------

--
-- Estructura de la taula `rating_ediorials`
--

CREATE TABLE `rating_ediorials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `editorial_id` bigint(20) UNSIGNED NOT NULL,
  `rate` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `rating_ediorials`
--

INSERT INTO `rating_ediorials` (`id`, `user_id`, `editorial_id`, `rate`, `created_at`, `updated_at`) VALUES
(3, 12, 2, 5.00, '2023-10-30 19:38:38', '2023-10-30 19:38:38'),
(4, 11, 5, 5.00, '2024-04-13 14:17:00', '2024-04-13 14:17:00'),
(5, 11, 1, 3.00, '2024-04-13 17:34:43', '2024-04-13 17:34:43'),
(6, 12, 1, 5.00, '2024-04-18 19:26:06', '2024-04-18 19:26:06');

-- --------------------------------------------------------

--
-- Estructura de la taula `rating_medis`
--

CREATE TABLE `rating_medis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `medi_id` bigint(20) UNSIGNED NOT NULL,
  `rate` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `rating_medis`
--

INSERT INTO `rating_medis` (`id`, `user_id`, `medi_id`, `rate`, `created_at`, `updated_at`) VALUES
(1, 11, 3, 3.50, '2023-11-01 07:06:01', '2023-11-01 07:06:01');

-- --------------------------------------------------------

--
-- Estructura de la taula `rating_posts`
--

CREATE TABLE `rating_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `rate` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `rating_posts`
--

INSERT INTO `rating_posts` (`id`, `user_id`, `post_id`, `rate`, `created_at`, `updated_at`) VALUES
(1, 12, 3, 4.50, '2023-10-30 19:35:32', '2023-10-30 19:35:32'),
(2, 11, 6, 5.00, '2024-03-23 11:13:02', '2024-03-23 11:13:02');

-- --------------------------------------------------------

--
-- Estructura de la taula `threads`
--

CREATE TABLE `threads` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `threads`
--

INSERT INTO `threads` (`id`, `subject`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Modificació', '2024-04-13 10:48:48', '2024-04-13 10:48:48', NULL),
(2, 'Modificació', '2024-04-13 11:21:38', '2024-04-13 11:21:38', NULL),
(3, 'Modificació', '2024-04-13 11:33:16', '2024-04-13 11:33:16', NULL),
(4, 'Modificació', '2024-04-13 11:34:36', '2024-04-13 11:34:36', NULL),
(5, 'Modificació', '2024-04-13 13:42:21', '2024-04-13 13:42:21', NULL),
(6, 'Modificació', '2024-04-13 14:38:15', '2024-04-13 14:38:15', NULL),
(7, 'perfil', '2024-04-13 17:27:07', '2024-04-13 17:27:07', NULL),
(8, 'Modificació', '2024-04-14 11:17:08', '2024-04-14 11:17:08', NULL),
(9, 'Modificació', '2024-04-14 11:18:29', '2024-04-14 11:18:29', NULL),
(10, 'Modificació', '2024-04-14 11:18:59', '2024-04-14 11:18:59', NULL),
(11, 'Modificació', '2024-04-14 11:27:37', '2024-04-14 11:27:37', NULL),
(12, 'Modificació', '2024-04-14 11:42:53', '2024-04-14 11:42:53', NULL),
(13, 'Felicitació :)', '2024-04-14 11:54:14', '2024-04-14 11:54:14', NULL),
(14, 'Modificació', '2024-04-14 13:43:31', '2024-04-14 13:48:57', NULL),
(15, 'Hola!', '2024-04-16 14:43:03', '2024-04-16 14:43:03', NULL);

-- --------------------------------------------------------

--
-- Estructura de la taula `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `nickname` varchar(191) NOT NULL,
  `condicio` varchar(191) NOT NULL DEFAULT 'lector',
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `avatar` varchar(191) DEFAULT NULL,
  `type` varchar(191) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  `novetats` enum('Si','No') NOT NULL DEFAULT 'No',
  `biopic` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `users`
--

INSERT INTO `users` (`id`, `name`, `nickname`, `condicio`, `email`, `email_verified_at`, `password`, `avatar`, `type`, `remember_token`, `created_at`, `updated_at`, `banned_at`, `novetats`, `biopic`) VALUES
(1, 'Albert Sans Climent', 'Admin', '', 'asanscliment@gmail.com', '2024-04-18 10:09:28', '$2y$10$/ldUbIvsd4MGLKBjgjlcDOv8kDBLPWWhgOnHM8Uuy1fKVUKJfvmA6', 'images/avatars/zfBjZeYy0JYmeD98nNArY97ph8TC1yoZwSQaYeC9.png', 'admin', 'YqdACv2T5D617eS5NnswgLU0xV5gTS5A3I0pEddVpFOIccwlUbT5Wp0M0ub4', '2023-07-13 10:19:25', '2024-04-13 16:17:39', NULL, 'No', 'Administrador'),
(11, 'gordo', 'Gordo', 'lector', 'gordohauser@gmail.com', '2024-04-18 10:09:45', '$2y$10$cY7Bo5jMaI364QmfYGPf8.0kwnCjvGZ9r.2f4hYQavePwm4ail7HG', 'images/avatars/F3YL5YmA651k0z5SWTMx2VuDb3NPMFtN0tIST8MH.jpg', 'admin', 'oxTjhPxvKkdBTAAeu6ZunuvXU4p8cZIEDpr9C86WgscJSnAyZd61IDx1lYq2', '2023-09-19 20:36:48', '2024-04-13 17:26:18', NULL, 'Si', 'xx'),
(12, 'Israel Calvache', 'Israel', 'autor', 'hauser_1000@yahoo.ie', '2024-04-18 10:10:07', '$2y$10$JWup9vCK/zaxGhITbDSHO.PMlYgWWH3lrN65FM7hEviBj1qaGvv9a', 'images/avatars/886TYYsrhEnDHEYAaDUdUFpLAZbTnO7Q0bO2AbIj.jpg', 'user', NULL, '2023-09-19 23:09:58', '2023-09-19 23:13:15', NULL, 'Si', NULL),
(19, 'NÚRIA ARRASTIA GARCIA', 'Nugaar', 'lector', 'nugaar@gmail.com', '2024-04-15 14:32:36', '$2y$10$ec5JIDV0ssP0AuLhnqSpeu44h/vLGN6IWSasyITyUvfjROOaD9GNq', NULL, 'user', 'wgp0GdQDPFRtPvpiodegdyuwp3aFhtzyhetJpygs0JXLeZRBuYfxtCre9lO9', '2024-04-15 14:31:25', '2024-04-15 14:32:36', NULL, 'Si', 'Ara mateix'),
(20, 'Ramon Català i Prat', 'Ra', 'lector', 'racatalaprat@gmail.com', '2024-04-16 14:33:53', '$2y$10$bHfq3mduwcuriPNANozD7eGi.AiUCul4jGLBTC8VFLZQNVcq40KGu', NULL, 'user', NULL, '2024-04-16 14:33:16', '2024-04-16 14:33:53', NULL, 'Si', 'Sóc un lector empedreït'),
(23, 'Zacarias Satrustegui', 'zaca23', 'lector', 'albertsans830@gmail.com', '2024-04-19 13:39:13', '$2y$10$1MfE65L2/pV/GC92C65CyuhvzWv7jvk1UEDaWPEkCszXzgAizfLma', NULL, 'user', NULL, '2024-04-19 13:38:28', '2024-04-19 13:39:13', NULL, 'Si', 'Lector incansable');

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `actes`
--
ALTER TABLE `actes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `actes_user_id_foreign` (`user_id`);

--
-- Índexs per a la taula `autors`
--
ALTER TABLE `autors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `autors_user_id_foreign` (`user_id`);

--
-- Índexs per a la taula `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `bans`
--
ALTER TABLE `bans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bans_bannable_type_bannable_id_index` (`bannable_type`,`bannable_id`),
  ADD KEY `bans_created_by_type_created_by_id_index` (`created_by_type`,`created_by_id`),
  ADD KEY `bans_expired_at_index` (`expired_at`);

--
-- Índexs per a la taula `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_genere_id_foreign` (`genere_id`),
  ADD KEY `books_user_id_foreign` (`user_id`);

--
-- Índexs per a la taula `bookshops`
--
ALTER TABLE `bookshops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookshops_user_id_foreign` (`user_id`);

--
-- Índexs per a la taula `coment_actes`
--
ALTER TABLE `coment_actes`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `coment_autors`
--
ALTER TABLE `coment_autors`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `coment_books`
--
ALTER TABLE `coment_books`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `coment_bookshops`
--
ALTER TABLE `coment_bookshops`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `coment_editorials`
--
ALTER TABLE `coment_editorials`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `coment_medis`
--
ALTER TABLE `coment_medis`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `coment_posts`
--
ALTER TABLE `coment_posts`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `denuncia_comentari_books`
--
ALTER TABLE `denuncia_comentari_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `denuncia_comentari_books_user_id_foreign` (`user_id`),
  ADD KEY `denuncia_comentari_books_coment_book_id_foreign` (`coment_book_id`);

--
-- Índexs per a la taula `denuncia_coment_actes`
--
ALTER TABLE `denuncia_coment_actes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `denuncia_coment_actes_user_id_foreign` (`user_id`),
  ADD KEY `denuncia_coment_actes_coment_acte_id_foreign` (`coment_acte_id`);

--
-- Índexs per a la taula `denuncia_coment_autors`
--
ALTER TABLE `denuncia_coment_autors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `denuncia_coment_autors_user_id_foreign` (`user_id`),
  ADD KEY `denuncia_coment_autors_coment_autor_id_foreign` (`coment_autor_id`);

--
-- Índexs per a la taula `denuncia_coment_bookshops`
--
ALTER TABLE `denuncia_coment_bookshops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `denuncia_coment_bookshops_user_id_foreign` (`user_id`),
  ADD KEY `denuncia_coment_bookshops_coment_bookshop_id_foreign` (`coment_bookshop_id`);

--
-- Índexs per a la taula `denuncia_coment_editorials`
--
ALTER TABLE `denuncia_coment_editorials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `denuncia_coment_editorials_user_id_foreign` (`user_id`),
  ADD KEY `denuncia_coment_editorials_coment_editorial_id_foreign` (`coment_editorial_id`);

--
-- Índexs per a la taula `denuncia_coment_medis`
--
ALTER TABLE `denuncia_coment_medis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `denuncia_coment_medis_user_id_foreign` (`user_id`),
  ADD KEY `denuncia_coment_medis_coment_medi_id_foreign` (`coment_medi_id`);

--
-- Índexs per a la taula `denuncia_coment_posts`
--
ALTER TABLE `denuncia_coment_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `denuncia_coment_posts_user_id_foreign` (`user_id`),
  ADD KEY `denuncia_coment_posts_coment_post_id_foreign` (`coment_post_id`);

--
-- Índexs per a la taula `editorials`
--
ALTER TABLE `editorials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `editorials_user_id_foreign` (`user_id`);

--
-- Índexs per a la taula `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índexs per a la taula `generes`
--
ALTER TABLE `generes`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `medis`
--
ALTER TABLE `medis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medis_user_id_foreign` (`user_id`);

--
-- Índexs per a la taula `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índexs per a la taula `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índexs per a la taula `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índexs per a la taula `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Índexs per a la taula `rating_actes`
--
ALTER TABLE `rating_actes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rating_actes_user_id_foreign` (`user_id`),
  ADD KEY `rating_actes_acte_id_foreign` (`acte_id`);

--
-- Índexs per a la taula `rating_autors`
--
ALTER TABLE `rating_autors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rating_autors_user_id_foreign` (`user_id`),
  ADD KEY `rating_autors_autor_id_foreign` (`autor_id`);

--
-- Índexs per a la taula `rating_books`
--
ALTER TABLE `rating_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rating_books_user_id_foreign` (`user_id`),
  ADD KEY `rating_books_book_id_foreign` (`book_id`);

--
-- Índexs per a la taula `rating_bookshops`
--
ALTER TABLE `rating_bookshops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rating_bookshops_user_id_foreign` (`user_id`),
  ADD KEY `rating_bookshops_bookshop_id_foreign` (`bookshop_id`);

--
-- Índexs per a la taula `rating_ediorials`
--
ALTER TABLE `rating_ediorials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rating_ediorials_user_id_foreign` (`user_id`),
  ADD KEY `rating_ediorials_editorial_id_foreign` (`editorial_id`);

--
-- Índexs per a la taula `rating_medis`
--
ALTER TABLE `rating_medis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rating_medis_user_id_foreign` (`user_id`),
  ADD KEY `rating_medis_medi_id_foreign` (`medi_id`);

--
-- Índexs per a la taula `rating_posts`
--
ALTER TABLE `rating_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rating_posts_user_id_foreign` (`user_id`),
  ADD KEY `rating_posts_post_id_foreign` (`post_id`);

--
-- Índexs per a la taula `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `actes`
--
ALTER TABLE `actes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT per la taula `autors`
--
ALTER TABLE `autors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT per la taula `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `bans`
--
ALTER TABLE `bans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT per la taula `bookshops`
--
ALTER TABLE `bookshops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la taula `coment_actes`
--
ALTER TABLE `coment_actes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `coment_autors`
--
ALTER TABLE `coment_autors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `coment_books`
--
ALTER TABLE `coment_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT per la taula `coment_bookshops`
--
ALTER TABLE `coment_bookshops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la taula `coment_editorials`
--
ALTER TABLE `coment_editorials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `coment_medis`
--
ALTER TABLE `coment_medis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `coment_posts`
--
ALTER TABLE `coment_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la taula `denuncia_comentari_books`
--
ALTER TABLE `denuncia_comentari_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `denuncia_coment_actes`
--
ALTER TABLE `denuncia_coment_actes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `denuncia_coment_autors`
--
ALTER TABLE `denuncia_coment_autors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `denuncia_coment_bookshops`
--
ALTER TABLE `denuncia_coment_bookshops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `denuncia_coment_editorials`
--
ALTER TABLE `denuncia_coment_editorials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `denuncia_coment_medis`
--
ALTER TABLE `denuncia_coment_medis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `denuncia_coment_posts`
--
ALTER TABLE `denuncia_coment_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `editorials`
--
ALTER TABLE `editorials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT per la taula `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `generes`
--
ALTER TABLE `generes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT per la taula `medis`
--
ALTER TABLE `medis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la taula `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT per la taula `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT per la taula `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT per la taula `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT per la taula `rating_actes`
--
ALTER TABLE `rating_actes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `rating_autors`
--
ALTER TABLE `rating_autors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la taula `rating_books`
--
ALTER TABLE `rating_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT per la taula `rating_bookshops`
--
ALTER TABLE `rating_bookshops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la taula `rating_ediorials`
--
ALTER TABLE `rating_ediorials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la taula `rating_medis`
--
ALTER TABLE `rating_medis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la taula `rating_posts`
--
ALTER TABLE `rating_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la taula `threads`
--
ALTER TABLE `threads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT per la taula `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restriccions per a les taules bolcades
--

--
-- Restriccions per a la taula `actes`
--
ALTER TABLE `actes`
  ADD CONSTRAINT `actes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Restriccions per a la taula `autors`
--
ALTER TABLE `autors`
  ADD CONSTRAINT `autors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Restriccions per a la taula `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_genere_id_foreign` FOREIGN KEY (`genere_id`) REFERENCES `generes` (`id`),
  ADD CONSTRAINT `books_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Restriccions per a la taula `bookshops`
--
ALTER TABLE `bookshops`
  ADD CONSTRAINT `bookshops_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Restriccions per a la taula `denuncia_comentari_books`
--
ALTER TABLE `denuncia_comentari_books`
  ADD CONSTRAINT `denuncia_comentari_books_coment_book_id_foreign` FOREIGN KEY (`coment_book_id`) REFERENCES `coment_books` (`id`),
  ADD CONSTRAINT `denuncia_comentari_books_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Restriccions per a la taula `denuncia_coment_actes`
--
ALTER TABLE `denuncia_coment_actes`
  ADD CONSTRAINT `denuncia_coment_actes_coment_acte_id_foreign` FOREIGN KEY (`coment_acte_id`) REFERENCES `coment_actes` (`id`),
  ADD CONSTRAINT `denuncia_coment_actes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Restriccions per a la taula `denuncia_coment_autors`
--
ALTER TABLE `denuncia_coment_autors`
  ADD CONSTRAINT `denuncia_coment_autors_coment_autor_id_foreign` FOREIGN KEY (`coment_autor_id`) REFERENCES `coment_autors` (`id`),
  ADD CONSTRAINT `denuncia_coment_autors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Restriccions per a la taula `denuncia_coment_bookshops`
--
ALTER TABLE `denuncia_coment_bookshops`
  ADD CONSTRAINT `denuncia_coment_bookshops_coment_bookshop_id_foreign` FOREIGN KEY (`coment_bookshop_id`) REFERENCES `coment_bookshops` (`id`),
  ADD CONSTRAINT `denuncia_coment_bookshops_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Restriccions per a la taula `denuncia_coment_editorials`
--
ALTER TABLE `denuncia_coment_editorials`
  ADD CONSTRAINT `denuncia_coment_editorials_coment_editorial_id_foreign` FOREIGN KEY (`coment_editorial_id`) REFERENCES `coment_editorials` (`id`),
  ADD CONSTRAINT `denuncia_coment_editorials_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Restriccions per a la taula `denuncia_coment_medis`
--
ALTER TABLE `denuncia_coment_medis`
  ADD CONSTRAINT `denuncia_coment_medis_coment_medi_id_foreign` FOREIGN KEY (`coment_medi_id`) REFERENCES `coment_medis` (`id`),
  ADD CONSTRAINT `denuncia_coment_medis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Restriccions per a la taula `denuncia_coment_posts`
--
ALTER TABLE `denuncia_coment_posts`
  ADD CONSTRAINT `denuncia_coment_posts_coment_post_id_foreign` FOREIGN KEY (`coment_post_id`) REFERENCES `coment_posts` (`id`),
  ADD CONSTRAINT `denuncia_coment_posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Restriccions per a la taula `editorials`
--
ALTER TABLE `editorials`
  ADD CONSTRAINT `editorials_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Restriccions per a la taula `medis`
--
ALTER TABLE `medis`
  ADD CONSTRAINT `medis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Restriccions per a la taula `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Restriccions per a la taula `rating_actes`
--
ALTER TABLE `rating_actes`
  ADD CONSTRAINT `rating_actes_acte_id_foreign` FOREIGN KEY (`acte_id`) REFERENCES `actes` (`id`),
  ADD CONSTRAINT `rating_actes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Restriccions per a la taula `rating_autors`
--
ALTER TABLE `rating_autors`
  ADD CONSTRAINT `rating_autors_autor_id_foreign` FOREIGN KEY (`autor_id`) REFERENCES `autors` (`id`),
  ADD CONSTRAINT `rating_autors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Restriccions per a la taula `rating_books`
--
ALTER TABLE `rating_books`
  ADD CONSTRAINT `rating_books_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `rating_books_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Restriccions per a la taula `rating_bookshops`
--
ALTER TABLE `rating_bookshops`
  ADD CONSTRAINT `rating_bookshops_bookshop_id_foreign` FOREIGN KEY (`bookshop_id`) REFERENCES `bookshops` (`id`),
  ADD CONSTRAINT `rating_bookshops_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Restriccions per a la taula `rating_ediorials`
--
ALTER TABLE `rating_ediorials`
  ADD CONSTRAINT `rating_ediorials_editorial_id_foreign` FOREIGN KEY (`editorial_id`) REFERENCES `editorials` (`id`),
  ADD CONSTRAINT `rating_ediorials_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Restriccions per a la taula `rating_medis`
--
ALTER TABLE `rating_medis`
  ADD CONSTRAINT `rating_medis_medi_id_foreign` FOREIGN KEY (`medi_id`) REFERENCES `medis` (`id`),
  ADD CONSTRAINT `rating_medis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Restriccions per a la taula `rating_posts`
--
ALTER TABLE `rating_posts`
  ADD CONSTRAINT `rating_posts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `rating_posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
