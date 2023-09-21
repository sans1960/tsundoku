-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 19, 2023 at 01:48 PM
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
-- Database: `tsundoku`
--

-- --------------------------------------------------------

--
-- Table structure for table `actes`
--

CREATE TABLE `actes` (
  `id` bigint UNSIGNED NOT NULL,
  `titol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `active` tinyint NOT NULL DEFAULT '1',
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `actes`
--

INSERT INTO `actes` (`id`, `titol`, `slug`, `image`, `hora`, `url`, `body`, `data`, `active`, `user_id`, `created_at`, `updated_at`) VALUES
(6, 'La Setmana del Llibre en Català', 'la-setmana-del-llibre-en-catala', 'images/actes/MWQO0HzjNC4vwF0OksL1Syyn3yWDudtMU0IJalry.jpg', '16.30', 'https://lasetmana.cat/', '<p>Celebrada per primer cop l&rsquo;any 1983, La Setmana del Llibre en Catal&agrave; no ha faltat mai a la seva cita anual amb els lectors. Ara, despr&eacute;s de 40 edicions, s&rsquo;ha consolidat com un dels esdeveniments culturals m&eacute;s importants del pa&iacute;s per projecci&oacute;, volum de negoci, participants, assistents i difusi&oacute;.</p>\r\n<p>La Setmana vol continuar sent un est&iacute;mul i servir a la promoci&oacute; de la lectura de llibres en catal&agrave;, contribuint aix&iacute; al creixement del nombre de lectors en la nostra llengua i col&middot;laborar en la construcci&oacute; d&rsquo;un pa&iacute;s molt m&eacute;s culte, m&eacute;s lliure.</p>\r\n<p>La Setmana &eacute;s el lloc de trobada dels lectors, un espai privilegiat per mostrar la riquesa i la diversitat de l&rsquo;edici&oacute; en catal&agrave; i la seva pot&egrave;ncia industrial, on es poden fer descobertes, compartir converses i tenir a l&rsquo;abast tant les novetats com els llibres de fons i les revistes publicades en catal&agrave;.</p>\r\n<p>La Setmana &eacute;s un espai on es poden comprar totes les novetats i llibres de fons en catal&agrave; i on es pot gaudir d&rsquo;una programaci&oacute; d&rsquo;activitats extensa i de qualitat entorn el llibre en catal&agrave;.</p>\r\n<p>Benvinguts a La Setmana!</p>', '2023-09-08', 1, 4, '2023-09-02 05:02:50', '2023-09-02 05:02:50');

-- --------------------------------------------------------

--
-- Table structure for table `autors`
--

CREATE TABLE `autors` (
  `id` bigint UNSIGNED NOT NULL,
  `autor_nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biopic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_foto` text COLLATE utf8mb4_unicode_ci,
  `active` tinyint NOT NULL DEFAULT '1',
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auto` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `autors`
--

INSERT INTO `autors` (`id`, `autor_nom`, `slug`, `biopic`, `url_foto`, `active`, `user_id`, `created_at`, `updated_at`, `image`, `web`, `facebook`, `instagram`, `twitter`, `auto`) VALUES
(1, 'Edgar Allan Poe', 'edgar-allan-poe', '<p><span style=\"font-size: 14pt;\">Edgar Allan Poe (Boston, 1809 ‒ Baltimore, 1849) &eacute;s considerat un dels grans escriptors nord-americans del per&iacute;ode rom&agrave;ntic</span>.</p>\r\n<p>Mestre del relat curt, amb contes tan famosos com &laquo;The Black Cat&raquo;, &laquo;The Murders in the Rue Morgue&raquo; o &laquo;The Fall of the House of Usher&raquo;, Poe tamb&eacute; va escriure una novel&middot;la (The Narrative of Arthur Gordon Pym of Nantucket), conre&agrave; de manera reeixida la poesia i &mdash;fet no tan conegut pel gran p&uacute;blic&mdash; es prodig&agrave; for&ccedil;a en l&rsquo;assaig, amb t&iacute;tols tan celebrats com The Philosophy of Composition, The Poetic Principle o l&rsquo;inclassificable i captivador Eureka, que ara presentem en traducci&oacute; catalana.</p>', NULL, 1, 4, '2023-07-14 06:13:36', '2023-08-02 08:10:28', 'images/autors/KVtO7gWdGtBOb3S47Fze62YUNL2iHemG6Ccik8J3.jpg', NULL, NULL, NULL, NULL, 0),
(2, 'Teresa Pàmies', 'teresa-pamies', '<p>(Balaguer, 8 d&rsquo;octubre de 1919 - Granada, 13 de mar&ccedil; de 2012) Escriptora catalana guardonada amb les m&agrave;ximes condecoracions de la literatura i cultura catalanes.<br>El 1984, la Generalitat de Catalunya li va concedir la Creu de Sant Jordi, el 1997, va rebre la Medalla d&rsquo;Honor de Barcelona, el 2001, el Premi d&rsquo;Honor de les Lletres Catalanes, la m&agrave;xima distinci&oacute; liter&agrave;ria en catal&agrave;, i el 2006, el Premi Manuel V&aacute;zquez Montalb&aacute;n.<br>La seva obra &eacute;s extensa i d&rsquo;un car&agrave;cter autobiogr&agrave;fic. El 1937 ingressa a les Joventuts Socialistes Unificades de Catalunya (jsuc), de la direcci&oacute; de les quals forma part durant la Guerra Civil. Despr&eacute;s de la guerra s&rsquo;exilia, primer a Fran&ccedil;a i m&eacute;s tard a Cuba, la Rep&uacute;blica Dominicana, M&egrave;xic, Iugosl&agrave;via i Txecoslov&agrave;quia.<br>Des de l&rsquo;exili col&middot;labora amb diferents revistes catalanes com Serra d&rsquo;Or. El 1971 torna de l&rsquo;exili i es dedica a la literatura i al periodisme fins la seva mort.</p>', NULL, 1, 2, '2023-07-17 05:16:12', '2023-08-02 08:13:24', 'images/autors/ZZqC5QkNFsVzGY7sg6a5KEAujHDMkVEcZfKt6FPk.jpg', NULL, NULL, NULL, NULL, 0),
(3, 'MATAS PONS, ÀLEX', 'matas-pons-alex', '<p>&Agrave;lex Matas Pons (Barcelona, 1975), fa classes de Teoria de la Literatura i Literatura Comparada a la Universitat de Barcelona i a la Universitat Oberta de Catalunya. Forma part del Grup de Recerca de Literatura Comparada en l&rsquo;Espai Intel&middot;lectual Europeu i col&middot;labora en els seminaris sobre hist&ograve;ria intel&middot;lectual i cultura urbana que organitza el Museu d&rsquo;Hist&ograve;ria de la Ciutat de Barcelona (MUHBA). L&rsquo;any 2010 va publicar l&rsquo;assaig La Ciudad y su trama (Lengua de Trapo) i el 2017, En falso. Una cr&iacute;tica cultural del siglo XX (Pre-Textos). Entre altres revistes, ha publicat articles a L&rsquo;Espill, Afers, Literatures, Comp&agrave;s d&rsquo;Amalgama, Catalan Review i Mirmanda.</p>', 'https://imatges.vilaweb.cat/nacional/wp-content/uploads/2020/10/IMG_0774-31133050-1024x768.jpg', 1, 4, '2023-07-24 06:18:22', '2023-07-24 06:18:22', NULL, NULL, NULL, NULL, NULL, 0),
(4, 'Ferran Sáez Mateu', 'ferran-saez-mateu', '<p>(la Granja d\'Escarp, Segri&agrave;, 1964) &eacute;s doctor en Filosofia i exerceix la doc&egrave;ncia a la Universitat Ramon Llull. Ha publicat una quarantena de llibres, aix&iacute; com centenars d\'articles. Ha col&middot;laborat amb els diaris Ara, La Vanguardia i El Punt Avui, entre altres mitjans de comunicaci&oacute;. La seva obra assag&iacute;stica ha merescut els premis Joan Fuster, Josep Vallverd&uacute;, Pere Calders i Carles Rahola. La seva obra narrativa inclou les novel&middot;les Vides improbables (2010), Les ombres errants (2012) i La nit contra tu (2016).</p>', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/FerranSM.jpg/800px-FerranSM.jpg', 1, 4, '2023-07-24 06:21:06', '2023-07-25 14:09:52', NULL, NULL, NULL, NULL, NULL, 0),
(5, 'Ivan Vera', 'ivan-vera', '<p>Vaig n&eacute;ixer a Badalona l&rsquo;any 1998, per&ograve; la ciutat que m&rsquo;ha vist cr&eacute;ixer &eacute;s Banyoles; sempre m&rsquo;han inspirat les aig&uuml;es calmades de l&rsquo;estany i la verdor dels boscos que l&rsquo;envolten. Des de ben petit he tingut dues grans passions, la lectura i els videojocs, i crec que totes dues han deixat molta empremta en la gestaci&oacute; de les hist&ograve;ries que componia, primer en forma de dibuixos i despr&eacute;s per escrit. Amb deu anys vaig descobrir El Senyor dels Anells i, des d&rsquo;aleshores, Tolkien va esdevenir el meu principal model creatiu. Per&ograve;, a m&eacute;s d&rsquo;obres fant&agrave;stiques, tamb&eacute; n&rsquo;he llegit moltes d&rsquo;hist&ograve;riques i, m&eacute;s recentment, en el proc&eacute;s de convertir-me en fil&ograve;leg, li he trobat el gust a la literatura catalana medieval.</p>', 'https://akiarabooks.com/wp-content/uploads/2021/02/Ivan-Vera-web-500x500.jpg', 1, 4, '2023-07-24 07:33:20', '2023-07-24 07:33:20', NULL, NULL, NULL, NULL, NULL, 0),
(6, 'Terry Pratchett', 'terry-pratchett', '<p>(Sir Terence David John Pratchett) &eacute;s el celebrat creador de la s&egrave;rie del Discm&oacute;n, un fenomen de vendes global, que va comen&ccedil;ar el 1983 amb la publicaci&oacute; d&rsquo;El color de la m&agrave;gia. En total, &eacute;s autor de m&eacute;s de setanta llibres. Les seves novel&middot;les han estat adaptades als escenaris i a les pantalles, i ha guanyat multitud de premis en el transcurs de la seva carrera, inclosa la Medalla Carnegie, a m&eacute;s de ser nomenat cavaller pels seus serveis a la literatura. Les vendes a tot el m&oacute;n dels seus llibres se situen en aquests moments pels volts dels 90 milions d&rsquo;exemplars (per&ograve; tampoc &eacute;s que ning&uacute; es dediqui a comptar-los), i s&rsquo;han publicat en quaranta-una lleng&uuml;es. Ara, quaranta-dues. Nascut a Anglaterra el 1948, va morir el 2015, per&ograve; una gran legi&oacute; de seguidors no permet que el llegat de Pratchett caigui en l&rsquo;oblit i, any rere any, celebren l&rsquo;obra del seu autor favorit inundant les xarxes amb el hashtag #SpeakHisName.</p>', 'https://www.maimes.cat/wp-content/uploads/2020/11/Terry-Pratchett-please-credit-Rob-Wilkins-BN.jpg', 1, 1, '2023-08-02 05:58:43', '2023-08-02 05:58:43', NULL, NULL, NULL, NULL, NULL, 0),
(7, 'Otessa Moshfegh', 'otessa-moshfegh', '<p>Nascuda a Boston el 1981, col&middot;labora a la revista The Paris Review, on ha publicat els relats amb qu&egrave; va guanyar el Plimpton Prize (2014). El 2015 va publicar la seva primera novel&middot;la, My name is Eileen, aclamada per la cr&iacute;tica, guanyadora del premi Pen/ Hemingway al millor debut literari i nominada al Man Booker Prize. El meu any de rep&ograve;s i relaxaci&oacute; l&rsquo;ha consagrat com una de les autores m&eacute;s interessants del segle XXI.</p>', NULL, 1, 1, '2023-08-02 06:10:49', '2023-08-02 06:10:49', 'images/autors/l2qw5bf80QsEqWl7xoj8wUIvnilEqExtl3VmGZI9.jpg', NULL, NULL, NULL, NULL, 0),
(8, 'Roc Casagran', 'roc-casagran', '<p>Roc Casagran Casa&ntilde;as (Sabadell, 1980) &eacute;s llicenciat en Teoria de la Literatura i Literatura Comparada i treballa de professor de llengua i literatura catalana a secund&agrave;ria. Va ser membre del consell de redacci&oacute; de la revista sociocultural Ordint la Trama durant els vuit anys de la seva exist&egrave;ncia (2001-2009) i de tant en tant fa recitals de poesia arreu del pa&iacute;s.&Eacute;s l\'autor de la novel&middot;la Austr&agrave;lia (Columna, Premi Pin i Soler 2007) i coautor juntament amb Oleguer Presas de Cam&iacute; d\'&Iacute;taca (Mina, 2006). Tamb&eacute; va participar a l\'antologia Veus de la nova narrativa catalana (Emp&uacute;ries, 2010). Ha publicat els poemaris Els carrers de les f&agrave;briques (Premi Mart&iacute; Dot, 2001), Despr&eacute;s de Sarajevo (Premi Miquel &Agrave;ngel Riera, 2005) i Tr&egrave;nnicament trenificats (2005) i ben aviat veur&agrave; la llum el poemari L\'ombra queixalada (Premi Parc Taul&iacute; 2010).Cada quinze dies escriu un article al seu bloc (http://in.directe.cat/roc-casagran) i piula sovint al Twitter (@roccasagran).&nbsp;</p>', NULL, 1, 1, '2023-08-02 06:27:16', '2023-08-09 07:19:21', 'images/autors/Hzq5rtgo65veN4b4AadqRM40QB1RiWerFLGBNqoO.jpg', NULL, 'https://www.facebook.com/roc.casagran/?locale=ca_ES', NULL, NULL, 0),
(9, 'Juana Dolores Romero Casanova', 'juana-dolores-romero-casanova', '<p>(el Prat de Llobregat 1992) &eacute;s filla d&rsquo;immigrants andalusos a Catalunya. Estudia interpretaci&oacute; a l&rsquo;Escola Superior d&rsquo;Art Dram&agrave;tic de l&rsquo;Institut del Teatre i, posteriorment, inicia estudis literaris a la Universitat de Barcelona. &Eacute;s fundadora i coordinadora del projecte cibern&egrave;tic @HYBRIS.VIRAL en qu&egrave;, juntament amb l&rsquo;artista Sandy Moldavia, desenvolupa pr&agrave;ctiques curatorials. La seva obra est&agrave; travessada per la investigaci&oacute; de les po&egrave;tiques de l&rsquo;acci&oacute; i les performativitats del discurs a trav&eacute;s de la tensi&oacute; entre les ideologies i la bellesa. Ha dirigit, interpretat i escrit # J U A N A D O L O R E S # * massa diva per a un moviment assembleari * (2019) i * HIT ME IF I&rsquo;M PRETTY * o Vladimir Maiakovski es va su&iuml;cidar per amor (2020). Tamb&eacute; reflexiona sobre els l&iacute;mits del v&iacute;deo i la poesia, com es pot apreciar a la seva &uacute;ltima pe&ccedil;a audiovisual LIMPIEZA (2020).</p>', NULL, 1, 1, '2023-08-08 17:34:58', '2023-08-08 17:34:58', 'images/autors/tcZXUEUuxYVogczERjDPz7Zwq6sAKVo9N8UtHv7d.jpg', NULL, NULL, 'https://www.instagram.com/juanadolorex/?hl=nb', 'https://twitter.com/juanadolorex?lang=ca', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bans`
--

CREATE TABLE `bans` (
  `id` int UNSIGNED NOT NULL,
  `bannable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bannable_id` bigint UNSIGNED NOT NULL,
  `created_by_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by_id` bigint UNSIGNED DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `expired_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bans`
--

INSERT INTO `bans` (`id`, `bannable_type`, `bannable_id`, `created_by_type`, `created_by_id`, `comment`, `expired_at`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 3, 'App\\Models\\User', 1, NULL, NULL, '2023-07-21 10:01:00', '2023-07-21 07:48:08', '2023-07-21 10:01:00'),
(2, 'App\\Models\\User', 5, 'App\\Models\\User', 1, NULL, NULL, '2023-07-21 10:07:24', '2023-07-21 10:07:15', '2023-07-21 10:07:24'),
(3, 'App\\Models\\User', 3, 'App\\Models\\User', 1, 'Mala praxis', NULL, '2023-07-21 10:28:17', '2023-07-21 10:17:24', '2023-07-21 10:28:17');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint UNSIGNED NOT NULL,
  `titol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor_nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genere_id` bigint UNSIGNED NOT NULL,
  `autor_id` bigint UNSIGNED DEFAULT NULL,
  `editorial_id` bigint UNSIGNED DEFAULT NULL,
  `editorial_nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imatge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sinopsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `editorial_web` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idioma` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `novetat` tinyint(1) NOT NULL DEFAULT '0',
  `primera` tinyint(1) NOT NULL DEFAULT '0',
  `auto` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `titol`, `slug`, `autor_nom`, `genere_id`, `autor_id`, `editorial_id`, `editorial_nom`, `isbn`, `imatge`, `sinopsi`, `editorial_web`, `idioma`, `user_id`, `active`, `created_at`, `updated_at`, `foto`, `novetat`, `primera`, `auto`) VALUES
(1, 'La pols que calla', 'la-pols-que-calla', 'Josep Cuello', 2, NULL, NULL, 'Stonberg', '978-84-946172-5-6', 'https://static.wixstatic.com/media/61f884_09484ed174a346d1a76c115c5d31fee5~mv2.jpg', '<p><em>Dins la tradici&oacute; liter&agrave;ria occidental, el sonet &eacute;s amb tota probabilitat el pont &mdash;can&ograve;nic i intemporal&mdash; m&eacute;s utilitzat pels poetes per tal d\'acostar els seus lectors, i o&iuml;dors, a les dues ribes de la veritat po&egrave;tica: l\'enteniment i l\'emoci&oacute;. Juntament amb la rima, en l\'economia dels catorze versos del sonet cl&agrave;ssic hi ha un exercici d\'exig&egrave;ncia sint&agrave;ctica i una progressi&oacute; narrativa est&agrave;ndard, que, si van de costat de l\'harmonia i el gust pel ritme, fan d\'aquesta composici&oacute; estr&ograve;fica una s&ograve;lida arquitectura on brilla la paraula.</em></p>\r\n<p>&nbsp;</p>\r\n<p>Els 37 sonets de La pols que calla formen un &agrave;lbum de fotografies tirades amb precisi&oacute;, escenes en les quals hi trobem la reflexi&oacute; vital: &ldquo;com el pardal xalest, que de tot fuig/ i a tot retorna prest a espicossar/ les molles tendres d\'un temps que ser&agrave;/ per a ell remei i fel&rdquo;, &ldquo;jo s&oacute;c el vent i el minut/ lleugers, el nus del fil trencat suara&rdquo;, &ldquo;fruita ventissa com pleg&oacute; de m&eacute;s, /molsa de carner, n&uacute;vol que torreja/ abans de ploure\'s&rdquo;. Sempre des d&rsquo;una perspectiva terrenal, la dels indrets m&eacute;s estimats de l\'autor: Manresa &mdash;&ldquo;somriu la ciutat, vella, plujosa i enramada&rdquo;&mdash; i la contrada &mdash;&ldquo;tot el m&oacute;n en una vall, /tot el cor en un terrer, /pedra de cal&ccedil; i glever&rdquo;&mdash;, Menorca &mdash;&ldquo;ara, al tranquil cal&oacute;, /lla&uuml;ts polits fendeixen la llisor/ i, afalagat, el mar llampant...&rdquo;&mdash; o els Pirineus: &ldquo;crema la cara pel sol del migdia, /xiulen marmotes i ronquen les gralles, /i els espadats, atents, fan tornaveu&rdquo;. I sempre amb un esguard ser&egrave;: &ldquo;fent del passat perfum&rdquo;, &ldquo;ara que &ldquo;les veles ja s&oacute;n somnis, caminant/ damunt les aig&uuml;es, gr&agrave;vids de certeses&rdquo;. Omnipresent, tothora, la mem&ograve;ria:<strong> &ldquo;all&iacute;, passat el pont, la pols que calla</strong>&rdquo;.</p>', 'https://www.stonbergeditorial.com/', 'Catalá', 1, 1, '2023-07-14 08:35:59', '2023-07-14 08:41:50', NULL, 0, 0, 0),
(2, '69 poemes d\'amor', '69-poemes-damor', 'Vicent Andrés Estellés', 2, NULL, NULL, 'Edicions del Bullent', '9788486390921', 'https://m.media-amazon.com/images/I/412Q2JtQh0L._SY264_BO1,204,203,200_QL40_ML2_.jpg', '<p>Vicent Andr&eacute;s Estell&eacute;s va n&agrave;ixer el 4 de setembre de 1924 i va morir el 27 de mar&ccedil; de 1993. Gaireb&eacute; seixanta-nou anys dedicats a la literatura. En l&rsquo;obra d&rsquo;Estell&eacute;s el lector ha sabut recon&egrave;ixer la seva realitat m&eacute;s immediata, m&eacute;s quotidiana: les inquietuds, les esperances, les mis&egrave;ries, els somnis, el dolor, l&rsquo;alegria, les frustracions, l&rsquo;amor, la mort&hellip; Tot aix&ograve; &eacute;s ja un motiu suficient per a oferir aquests 69 poemes d&rsquo;amor. Nosaltres ens hem marcat com a punt de partida el concepte de l&rsquo;amor per tal d&rsquo;arribar a Estell&eacute;s, ben segurs que una aproximaci&oacute; tem&agrave;tica ens en pot donar una visi&oacute; total. Aquesta impressionant polifonia l&iacute;rica de Vicent Andr&eacute;s Estell&eacute;s el situa, amb tot dret, al costat dels millors poetes del segle xx.</p>', 'https://www.bullent.net/inici/', 'Català', 2, 0, '2023-07-16 17:31:04', '2023-07-28 12:20:01', NULL, 0, 0, 0),
(3, 'ELS MARGES DELS MAPES: UNA GEOGRAFIA DESPLAÇADA', 'els-marges-dels-mapes-una-geografia-desplacada', 'MATAS PONS, ÀLEX', 1, 3, NULL, '3i4', '978-84-17469-34-4', NULL, '<p>Les fronteres no s&oacute;n nom&eacute;s l&iacute;nies divis&ograve;ries tra&ccedil;ades als mapes. S&oacute;n espais que recorden justament la impossibilitat de fixar l&iacute;mits clars entre territoris i evidencien, m&eacute;s aviat, la complexitat de tota realitat. Lluny de ser una ratlla morta i buida, la frontera recull les restes oblidades de la hist&ograve;ria. S&rsquo;hi poden llegir les m&uacute;ltiples capes del temps, la successi&oacute; variable dels interessos i les petjades d&rsquo;all&ograve; que ha quedat descartat. Aquest llibre s&rsquo;acosta a la frontera a trav&eacute;s de l&rsquo;an&agrave;lisi de de les obres de Jes&uacute;s Moncada, Francesc Ser&eacute;s, Joan-Llu&iacute;s Llu&iacute;s, Joan Daniel Bezsonoff i Juli&agrave; de J&ograve;dar, i ressegueix un itinerari geogr&agrave;fic que abasta des de la Franja fins al Bes&ograve;s passant pels Pirineus. &Eacute;s en aquesta geografia despla&ccedil;ada on es fa possible la comprensi&oacute; de l&rsquo;entramat del temps en l&rsquo;espai i on es pot apreciar com la hist&ograve;ria, arxivada all&agrave; on semblaria haver-se esborrat, hi queda sempre ben present.</p>', 'http://www.tresiquatre.cat/cataleg/novetats/?cat=1', 'Català', 3, 1, '2023-07-24 15:08:16', '2023-08-03 09:26:32', 'images/books/qDQHzjQoUIZyqqvbv9IkW1LOZqlU2e0j6O6EKmuz.jpg', 0, 0, 0),
(4, 'Els morts riallers', 'els-morts-riallers', 'Ferran Sáez Mateu', 5, NULL, NULL, 'Amsterdam', '9788417918392', NULL, '<p>Si la veritat of&egrave;n, expliquem-la amb una mentida. El retrat m&eacute;s agosarat de la gran impostura de la Transici&oacute;.<br>L&rsquo;any 1977, Sebasti&agrave; Rovira va salvar de la ru&iuml;na la seva editorial explotant la veta de les biografies per enc&agrave;rrec. En ple canvi de r&egrave;gim, el passat pot arribar a ser molt inc&ograve;mode, i pol&iacute;tics i empresaris feien cua per reescriure la seva hist&ograve;ria i fer-la apta per als nous temps.<br>Ara, molts anys despr&eacute;s, l&rsquo;editor revisita les biografies exemplars que va publicar sobre Pl&agrave;cid Escol&agrave; i Ernest Obach, honorables prohoms de la Transici&oacute;. Sota la capa de maquillatge que va inventar per a ells, Rovira desvela la veritable naturalesa depredadora dels vencedors de la postguerra. Despietats amb els d&egrave;bils, servils amb els forts i h&agrave;bils manipuladors dels fils del poder. Aquesta &eacute;s la hist&ograve;ria dels estrategs nats que van canviar-ho tot per tal que no canvi&eacute;s res.</p>', 'https://www.amsterdamllibres.cat/', 'Català', 1, 1, '2023-08-03 08:21:53', '2023-08-03 08:21:53', 'images/books/K4EysZ22ALcXO18dtLZ8LwjqdXAq88It8CJEaybX.jpg', 0, 0, 0),
(5, 'El meu any de repòs i relaxació', 'el-meu-any-de-repos-i-relaxacio', 'Otessa Moshfegh', 5, 7, 1, 'Angle editorial', '9788418197550', NULL, '<h4><strong>Un best s&eacute;ller internacional que es tradueix al catal&agrave; per primera vegada</strong></h4>\r\n<p>La narradora d&rsquo;aquesta novel&middot;la decideix tancar-se al seu pis de Manhattan durant un any. Els seus pares han mort, l&rsquo;han acomiadat de la galeria d&rsquo;art on treballava, les seves relacions s&oacute;n ef&iacute;meres. Com una ins&ograve;lita i ombr&iacute;vola Bella Dorment, vol evitar el contacte hum&agrave;, passar la major part del temps dormint o veient pel&middot;l&iacute;cules de Whoopi Goldberg i Harrison Ford, i tornar-se &laquo;immune als records dolorosos&raquo;. Haur&agrave; de superar uns pocs obstacles: satisfer les necessitats b&agrave;siques, les visites reiterades de la seva amiga Reva i les consultes amb la doctora Tuttle, una estranya, histri&ograve;nica i poc fiable psiquiatra que la proveir&agrave; de tota mena de f&agrave;rmacs per desconnectar.</p>\r\n<p><em>El meu any de rep&ograve;s i relaxaci&oacute;</em>&nbsp;&eacute;s una novel&middot;la meravellosa sobre la fragilitat de la condici&oacute; humana, la vanitat i la mediocritat, l&rsquo;autoodi, l&rsquo;amor i el desamor, les ferides que queden dins i no es curen, la necessitat d&rsquo;a&iuml;llar-se i de renovar-se. Amb l&rsquo;horitz&oacute; ple d&rsquo;esperan&ccedil;a d&rsquo;un nou mil&middot;lenni. L&rsquo;any 2001. A Nova York.</p>\r\n<p>&laquo;Enginyosa, fosca, c&ograve;mica [&hellip;]. La novel&middot;la s&rsquo;accelera fins arribar a la que &eacute;s probablement la millor &uacute;ltima p&agrave;gina que he llegit mai.&raquo; &mdash; Vice</p>\r\n<p><em>&ldquo;Aquesta obra ha rebut un ajut a l&rsquo;edici&oacute; del Ministeri de Cultura i Esport&rdquo;&nbsp;</em></p>', 'https://lafinestralectora.cat/editorials/angle-editorial/', 'Català', 1, 1, '2023-08-03 08:45:37', '2023-08-03 08:45:37', 'images/books/TqrebutD3wUEzGSABymTSBVsdbk5IQUV1vKNjbue.webp', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bookshops`
--

CREATE TABLE `bookshops` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qui_som` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitud` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitud` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zoom` int NOT NULL DEFAULT '14',
  `active` tinyint NOT NULL DEFAULT '1',
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookshops`
--

INSERT INTO `bookshops` (`id`, `nom`, `slug`, `logo`, `qui_som`, `url`, `latitud`, `longitud`, `zoom`, `active`, `user_id`, `created_at`, `updated_at`, `image`) VALUES
(1, 'El Cucut', 'el-cucut', 'https://pbs.twimg.com/profile_images/451413117721796608/a-3Kx9Dd.jpeg', '<p><strong>Treballem en un m&oacute;n de creativitat i de cultura. La cadena del m&oacute;n del llibre comen&ccedil;a quan un escriptor publica, amb la implicaci&oacute; d&rsquo;una editorial, el seu llibre. Aquest arriba a les nostres mans i aix&iacute; comen&ccedil;a la feina del llibreter.</strong>&nbsp;<br>Hem de con&egrave;ixer qu&egrave; tenim a la llibreria, hem de llegir tot el que puguem i hem de trobar el lector adient a cada llibre o un llibre per a cada lector.&nbsp;<br>Pensem que llegir ha de ser divertit i voluntari. Tothom s&rsquo;ho ha de passar b&eacute; llegint i quan alg&uacute; no ho aconsegueix &eacute;s feina del llibreter trobar l&rsquo;estil i l&rsquo;obra que el lector busca.<br>No som jutges de la literatura. Som prescriptors.&nbsp;<br><em>Creiem que en aquests moments que hi ha tanta producci&oacute; cultural i que surten tantes novetats constantment, la nostra feina &eacute;s saber destriar i orientar. En cap cas censurar.&nbsp;</em></p>', 'https://www.llibreriaelcucut.cat/', '42.04321448067007', '3.1235095423280006', 16, 1, 1, '2023-07-14 07:58:03', '2023-07-14 08:04:47', NULL),
(2, 'Llibreria 22', 'llibreria-22', 'https://www.llibreria22.net/web/bundles/acmestore/img/logo-web-nou-3.jpg', '<p>La Llibreria 22 fundada el 20 d\'octubre de 1978, ja forma part de la hist&ograve;ria de Girona dels darrers anys.</p>', 'https://www.llibreria22.net/web/llibreria22', '41.9845203502328', '2.822221071165709', 16, 1, 2, '2023-07-17 05:34:56', '2023-07-17 05:34:56', NULL),
(3, 'Fan Set', 'fan-set', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTPWgmroeyRNrMO-cNWYYmgwGsFDUZbGv_i1NOZn-b6HlSh77bTQbqWZtb_LQDPeo7MRY&usqp=CAU', '<p>Al cor de Val&egrave;ncia llibreria@fanset.cat</p>', 'https://www.facebook.com/llibreriafanset/', '39.47351207272171', '-0.37693576931200146', 17, 1, 5, '2023-07-24 09:02:34', '2023-07-24 09:02:34', NULL),
(4, 'Llibreria La Temeraria', 'llibreria-la-temeraria', NULL, '<p>Llibreria independent ubicada a Terrassa, ciutat en qu&egrave; ens volem sumar a les moltes activitats culturals que s\'hi duen a terme</p>\r\n<p>Especialitzada en humanitats i en literatura per a totes les edats. Un nou espai cultural.</p>', 'https://www.facebook.com/llibreriatemeraria/?locale=ca_ES', '41.56357213996124', '2.0087816539707424', 17, 1, 1, '2023-08-09 12:30:26', '2023-08-09 13:00:28', 'images/bookshops/gbPnBPgdtRpwadbqi8iE24kBrYxNq8fpzvM8Y8aD.png'),
(5, 'Llibreria Solidària AFAC', 'llibreria-solidaria-afac', NULL, '<p>Som una ONG, declarada Utilitat P&uacute;blica des del 2011, i destinem el 100% dels beneficis de la venda de lla botiga a gestionar el Projecte \"Contigo para Siempre\" un centre de nens orfes cecs i d&acute;altres patologies, dins un orfenat de Jiaozuo, a la Xina</p>', 'https://www.facebook.com/llibreriaafac/', '41.76823502322672', '2.2508374153499817', 18, 1, 1, '2023-08-09 13:05:36', '2023-08-09 13:09:02', 'images/bookshops/eSveZyvoBpIiDJ5L5vkrLGKiJvQO1lnDsHFxnOWB.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `coment_books`
--

CREATE TABLE `coment_books` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `book_id` int UNSIGNED NOT NULL,
  `parent_id` int UNSIGNED DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coment_books`
--

INSERT INTO `coment_books` (`id`, `user_id`, `book_id`, `parent_id`, `body`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, 'Bon llibre', '2023-09-17 07:12:05', '2023-09-17 07:12:05'),
(2, 4, 1, 1, 'Estic d\'acord', '2023-09-17 07:51:27', '2023-09-17 07:51:27'),
(3, 4, 1, NULL, 'Gran tecnica poetica', '2023-09-17 07:51:55', '2023-09-17 07:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `denuncia_comentari_books`
--

CREATE TABLE `denuncia_comentari_books` (
  `id` bigint UNSIGNED NOT NULL,
  `motiu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `coment_book_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `denuncia_comentari_books`
--

INSERT INTO `denuncia_comentari_books` (`id`, `motiu`, `user_id`, `coment_book_id`, `created_at`, `updated_at`) VALUES
(2, 'comentari estupid', 6, 2, '2023-09-18 16:31:33', '2023-09-18 16:31:33');

-- --------------------------------------------------------

--
-- Table structure for table `editorials`
--

CREATE TABLE `editorials` (
  `id` bigint UNSIGNED NOT NULL,
  `editorial_nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adreça` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint NOT NULL DEFAULT '1',
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `editorials`
--

INSERT INTO `editorials` (`id`, `editorial_nom`, `slug`, `descripcio`, `url`, `logo`, `adreça`, `active`, `user_id`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Angle editorial', 'angle-editorial', '<p><strong>Empresa editorial independent.</strong><br>Des del seu naixement l\'any 1992, Angle Editorial ha tingut la voluntat de convertir-se en una alternativa al m&oacute;n editorial en catal&agrave; caracteritzada per la recerca de la qualitat, tant pel que fa als continguts com als aspectes formals.</p>\r\n<p>Angle Editorial &eacute;s una editorial central i global que compta dins del seu cat&agrave;leg amb col&middot;leccions que abasten la narrativa, l\'assaig, la poesia, l\'humor, biografies i mem&ograve;ries, etc. El seu cat&agrave;leg es completa amb llibres il&middot;lustrats de gran format.</p>', 'www.angleeditorial.com', 'https://pbs.twimg.com/profile_images/476295748225470465/EaW9bU2l_400x400.jpeg', 'Calle Muntaner, 200, 08036, Barcelona', 1, 1, '2023-07-14 06:54:33', '2023-07-14 06:59:37', NULL),
(2, 'AKIARA books', 'akiara-books', '<p>AKIARA va n&eacute;ixer a Barcelona el 2018 de la m&agrave; d&rsquo;In&ecirc;s Castel-Branco, com a continuaci&oacute; de Petit Fragmenta, la col&middot;lecci&oacute; infantil de Fragmenta Editorial, que l&rsquo;editora havia creat i dirigit des de la tardor del 2015.<br>AKIARA sona com l&rsquo;expressi&oacute; &laquo;aqu&iacute; i ara&raquo; (amb una K, la lletra m&eacute;s juganera dels nens) i tamb&eacute; juga amb el nom japon&egrave;s Akira 明, que vol dir &lsquo;llumin&oacute;s, lluminosa&rsquo;.<br>AKIARA publica &uacute;nicament llibres de producci&oacute; pr&ograve;pia, curosament escrits i il&middot;lustrats, per a petits i joves de totes les edats, orientats al conreu de la interioritat i la qualitat humana.<br>Amb textos i il&middot;lustracions inspiradors, els llibres d&rsquo;AKIARA amplien horitzons i desperten el sentit de meravella davant del m&oacute;n, alhora que estimulen l&rsquo;art de llegir, de pensar, d&rsquo;argumentar, de contemplar i de con&egrave;ixer-se a si mateix(a).</p>', 'https://akiarabooks.com/editorial/', 'https://akiarabooks.com/wp-content/themes/akiarabooks/assets/img/akiara-books.svg', 'Pl​aça del Nord, 4, pral. 1.ª 08024 Barcelona', 1, 2, '2023-07-17 05:28:43', '2023-07-17 05:28:43', NULL),
(3, 'Tigre de paper', 'tigre-de-paper', '<p>Tigre de paper | Edicions som una editorial nascuda el 2011 i amb m&eacute;s de 90 obres editades en 4 col&middot;leccions, les quals contribueixen a desenvolupar el pensament cr&iacute;tic, teixir identitat col&middot;lectiva i enriquir l&rsquo;&agrave;mbit literari en llengua catalana.</p>\r\n<p>Aix&iacute; com Antoni Serra considera que &laquo;l&rsquo;escriptor no &eacute;s un &eacute;sser a&iuml;llat del context social on desenvolupa la seva activitat professional&raquo;, considerem que la literatura ha de respondre a la cr&iacute;tica, al pensament i a la imaginaci&oacute; de la societat, i com a projecte editorial, tenim el deure de respondre i reflexionar sobre la forma, les necessitats i les lluites de la nostra societat.</p>\r\n<p>Per aix&ograve; &nbsp;ens hem sumat al conjunt d&rsquo;editorials i projectes culturals que enfrontem la cultura del consum i del mercat per construir cultura popular, impulsant Cat&agrave;rsi magaz&iacute;n, cooperant amb Llibres Artesans, participant de l&rsquo;Espai Contrabandos, impulsant Literal, fira de llibres i idees radicals i sent membres de l&rsquo;Associaci&oacute; d&rsquo;Editorials Independents Llegir en catal&agrave;.</p>\r\n<p>Hem crescut amb la ferma voluntat de que els nostres llibres puguin ser eines per aquelles persones i col&middot;lectius mobilitzats en la lluita per la transformaci&oacute; social, i alhora, una porta d&rsquo;entrada al pensament i la consci&egrave;ncia cr&iacute;tica per a totes aquelles lectores de ment desperta.</p>\r\n<p>D\'aquesta manera, des de la novel&middot;la social, la biografia de lluites, l&rsquo;assaig nostrat i la narrativa de combat, &nbsp;pretenem obrir espais per la reflexi&oacute; i el debat. Espais per gaudir i pensar les paraules, les exclamacions, les accions&hellip; I aix&iacute; fer del paper un tigre de cultura popular.</p>', 'http://www.tigredepaper.cat', 'https://tigredepaper.cat/img/logo-tigre-de-paper.svg?1596186624', NULL, 1, 6, '2023-07-24 07:51:17', '2023-07-24 07:51:17', NULL),
(4, '3i4', '3i4', '<p>Va ser l\'any 1968, a les portes de la primavera, quan es va fundar la llibreria Tres i Quatre. L\'editorial hi anava al darrere, tot i que, de iure, no es va formalitzar fins el 1974, un any m&eacute;s tard de la primera edici&oacute; dels Premis Octubre. Ambdues, editorial i llibreria, formaven l\'embri&oacute; d\'un projecte cultural centrat en l\'&agrave;mbit de les publicacions primer i, poc despr&eacute;s, obrint-se a la dinamitzaci&oacute; cultural del Pa&iacute;s Valenci&agrave;. Els seus fundadors, el t&agrave;ndem Eliseu Climent-Rosa Raga, van engegar els motors d\'aquesta aventura que, en els seus inicis, va prendre forma de societat, amb la participaci&oacute;, a m&eacute;s, de Joan Senent i Anaya, Joan Senent i Moreno, Santiago Ninet i Joan Fuster.</p>\r\n<p>Actualment, Edicions Tres i Quatre continua jugant un paper fonamental en la promoci&oacute; cultural des del Pa&iacute;s Valenci&agrave;, aportant, per&ograve;, al debat una nova mirada cr&iacute;tica i un enfocament global.</p>', 'https://www.tresiquatre.cat/cataleg/novetats/?cat=1', NULL, NULL, 1, 1, '2023-08-04 11:48:30', '2023-08-04 13:07:34', 'images/editorials/fIDdIvcQaPzPtXJDgKxTtZ7QNZDrKeuaV9c64RRR.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `generes`
--

CREATE TABLE `generes` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generes`
--

INSERT INTO `generes` (`id`, `nom`, `slug`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Assaig', 'assaig', 1, NULL, '2023-07-13 15:16:20', '2023-07-13 15:16:20'),
(2, 'Poesia', 'poesia', 1, NULL, '2023-07-13 15:22:10', '2023-07-13 15:22:10'),
(3, 'Novel·la històrica', 'novella-historica', 0, NULL, '2023-07-23 11:36:05', '2023-07-23 11:36:05'),
(4, 'Novel·la ciència-ficció i fantasia', 'novella-ciencia-ficcio-i-fantasia', 1, NULL, '2023-07-23 11:50:01', '2023-07-23 11:50:01'),
(5, 'Narrativa contempóranea', 'narrativa-contemporanea', 1, NULL, '2023-08-01 17:07:22', '2023-08-01 17:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `medis`
--

CREATE TABLE `medis` (
  `id` bigint UNSIGNED NOT NULL,
  `titol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `active` tinyint NOT NULL DEFAULT '1',
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medis`
--

INSERT INTO `medis` (`id`, `titol`, `slug`, `image`, `url`, `body`, `data`, `active`, `user_id`, `created_at`, `updated_at`, `tipus`) VALUES
(6, 'Victoria Szpunberg i Nao Albet', 'victoria-szpunberg-i-nao-albet', 'images/medis/e3H9mKQN4cuSxxqGUTl2dpU9QDDnkaIANhTugmoP.png', 'https://www.revistapausa.cat/podcast/09-victoria-szpunberg-i-nao-albet/', '<p>En aquest episodi posem l&rsquo;accent en l&rsquo;escriptura teatral i per aquest motiu hem reunit a dues persones que fa temps que escriuen per a l&rsquo;escena. Avui ens visiten la Victoria Szpunberg que &eacute;s dramaturga, directora d&rsquo;escena i docent; i el Nao Albet que &eacute;s director, dramaturg, int&egrave;rpret i m&uacute;sic, i a qui hem vist cr&eacute;ixer de la m&agrave; del Marcel Borr&agrave;s.</p>', '2023-09-01', 1, 4, '2023-09-02 04:53:31', '2023-09-02 04:53:31', 'Audio');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int UNSIGNED NOT NULL,
  `thread_id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `thread_id`, `user_id`, `body`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 3, 'buenas trdes', '2023-07-28 13:55:15', '2023-07-28 13:55:15', NULL),
(2, 2, 3, 'hola', '2023-07-28 14:04:09', '2023-07-28 14:04:09', NULL),
(3, 3, 3, 'hola', '2023-07-28 14:04:44', '2023-07-28 14:04:44', NULL),
(4, 4, 2, 'monster high', '2023-07-28 14:16:17', '2023-07-28 14:16:17', NULL),
(5, 5, 1, 'eres tu', '2023-07-29 06:28:01', '2023-07-29 06:28:01', NULL),
(6, 6, 2, 'vaja birria de llibre', '2023-07-29 08:00:58', '2023-07-29 08:00:58', NULL),
(7, 6, 1, 'Ets un bocamoll', '2023-07-29 08:17:32', '2023-07-29 08:17:32', NULL),
(8, 7, 3, 'vaja birria de llibre', '2023-07-29 08:34:33', '2023-07-29 08:34:33', NULL),
(9, 7, 2, 'ets un bocamoll', '2023-07-29 08:35:32', '2023-07-29 08:35:32', NULL),
(10, 7, 3, 'gilipolles', '2023-07-29 08:42:24', '2023-07-29 08:42:24', NULL),
(11, 7, 2, 'al admin vas', '2023-07-29 08:43:39', '2023-07-29 08:43:39', NULL),
(12, 7, 3, 'xivato', '2023-07-29 08:44:31', '2023-07-29 08:44:31', NULL),
(13, 8, 1, 'Ets un follonero', '2023-07-29 08:47:59', '2023-07-29 08:47:59', NULL),
(14, 9, 1, 'Benvingut a Tsundoku.cat', '2023-08-28 08:48:35', '2023-08-28 08:48:35', NULL),
(15, 9, 7, 'Gracies', '2023-08-28 08:49:37', '2023-08-28 08:49:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_16_075527_create_generes_table', 1),
(10, '2023_06_21_063311_create_books_table', 1),
(13, '2023_06_18_065709_create_autors_table', 2),
(14, '2023_06_18_155618_create_editorials_table', 3),
(15, '2023_06_19_084503_create_bookshops_table', 4),
(16, '2023_07_14_141022_create_posts_table', 5),
(17, '2023_07_16_094837_create_medis_table', 6),
(18, '2023_07_16_155553_create_actes_table', 7),
(19, '2017_03_04_000000_create_bans_table', 8),
(20, '2023_07_21_091149_add_banned_at_column_to_users_table', 9),
(23, '2014_10_28_175635_create_threads_table', 11),
(24, '2014_10_28_175710_create_messages_table', 11),
(25, '2014_10_28_180224_create_participants_table', 11),
(26, '2014_11_03_154831_add_soft_deletes_to_participants_table', 11),
(27, '2014_12_04_124531_add_softdeletes_to_threads_table', 11),
(28, '2017_03_30_152742_add_soft_deletes_to_messages_table', 11),
(29, '2023_08_02_072540_make_url_foto_nullable_on_autors_table', 12),
(30, '2023_08_02_073326_add_image_column_to_autors_table', 13),
(31, '2023_08_03_094601_make_imatge_nullable_on_books_table', 14),
(32, '2023_08_03_095036_add_foto_column_to_books_table', 14),
(33, '2023_08_04_130326_make_logo_nullable_on_editorials_table', 15),
(34, '2023_08_04_130527_add_image_column_to_editorials_table', 15),
(35, '2023_08_08_185518_add_multiple_columns_to_autors_table', 16),
(36, '2023_08_09_135240_make_logo_nullable_on_bookshops_table', 17),
(37, '2023_08_09_135919_add_image_column_to_bookshops_table', 18),
(38, '2023_08_09_201614_add_tipus_column_to_medis_table', 19),
(39, '2023_08_28_083310_add_novetats_column_to_users_table', 20),
(41, '2023_09_07_100816_add_two_columns_to_books', 21),
(42, '2023_09_07_180524_add_auto_column_to_autors_table', 22),
(43, '2023_09_08_084426_create_rating_books_table', 23),
(44, '2023_09_17_081638_create_coment_books_table', 24),
(45, '2023_09_18_084515_create_denuncia_comentari_books_table', 25);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` int UNSIGNED NOT NULL,
  `thread_id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `last_read` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `thread_id`, `user_id`, `last_read`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 3, '2023-07-28 13:55:15', '2023-07-28 13:55:15', '2023-07-28 13:55:15', NULL),
(2, 2, 3, '2023-07-28 14:04:09', '2023-07-28 14:04:09', '2023-07-28 14:04:09', NULL),
(3, 2, 1, '2023-07-29 06:23:06', '2023-07-28 14:04:09', '2023-07-29 08:26:13', '2023-07-29 08:26:13'),
(4, 3, 3, '2023-07-28 14:04:44', '2023-07-28 14:04:44', '2023-07-28 14:04:44', NULL),
(5, 3, 2, '2023-07-28 14:15:09', '2023-07-28 14:04:44', '2023-07-29 08:24:46', '2023-07-29 08:24:46'),
(6, 4, 2, '2023-07-28 14:16:17', '2023-07-28 14:16:17', '2023-07-28 14:16:17', NULL),
(7, 4, 3, '2023-07-29 05:57:11', '2023-07-28 14:16:17', '2023-07-29 08:26:47', '2023-07-29 08:26:47'),
(8, 5, 1, '2023-07-29 06:28:01', '2023-07-29 06:28:01', '2023-07-29 06:28:01', NULL),
(9, 5, 2, '2023-07-29 06:30:27', '2023-07-29 06:28:01', '2023-07-29 08:24:42', '2023-07-29 08:24:42'),
(10, 6, 2, '2023-07-29 08:23:39', '2023-07-29 08:00:58', '2023-07-29 08:24:39', '2023-07-29 08:24:39'),
(11, 6, 1, '2023-07-29 08:20:11', '2023-07-29 08:00:58', '2023-07-29 08:26:09', '2023-07-29 08:26:09'),
(12, 7, 3, '2023-07-29 08:44:31', '2023-07-29 08:34:33', '2023-07-29 08:46:40', '2023-07-29 08:46:40'),
(13, 7, 2, '2023-07-29 08:45:10', '2023-07-29 08:34:33', '2023-07-29 08:46:03', '2023-07-29 08:46:03'),
(14, 8, 1, '2023-07-29 08:47:59', '2023-07-29 08:47:59', '2023-07-29 08:47:59', NULL),
(15, 8, 3, '2023-07-29 08:48:33', '2023-07-29 08:47:59', '2023-07-29 08:59:28', '2023-07-29 08:59:28'),
(16, 9, 1, '2023-08-28 08:50:18', '2023-08-28 08:48:35', '2023-08-28 08:50:18', NULL),
(17, 9, 7, '2023-08-29 08:00:59', '2023-08-28 08:48:35', '2023-08-29 08:00:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `titol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `font` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `active` tinyint NOT NULL DEFAULT '1',
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `titol`, `slug`, `image`, `font`, `url`, `body`, `data`, `active`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'La solidaritat dels veïns permet que reobri una llibreria de Sarrià cremada al gener', 'la-solidaritat-dels-veins-permet-que-reobri-una-llibreria-de-sarria-cremada-al-gener', 'images/posts/jqdZCBQoj4HrVQOHksNJqjXXdiw0idM8j3BSElJ8.webp', '3/34', 'https://www.ccma.cat/324/la-solidaritat-dels-veins-permet-que-reobri-una-llibreria-de-sarria-cremada-al-gener/noticia/3247636/', '<h2 class=\"entradeta\">L\'establiment \"La pla&ccedil;a\" es va cremar el 30 de gener per un foc el&egrave;ctric, per&ograve; l\'ajuda del barri ha fet possible que pugui tornar a obrir</h2>\r\n<p>La llibreria \"<strong>La pla&ccedil;a</strong>\", del districte de Sarri&agrave; de Barcelona, es prepara per reobrir set mesos despr&eacute;s de&nbsp;<a href=\"https://www.ccma.cat/324/un-incendi-calcina-una-llibreria-a-la-placa-de-sarria-a-barcelona/noticia/3209622/\" target=\"_blank\" rel=\"noopener\">l\'incendi que la va deixar calcinada per un foc el&egrave;ctric</a>.</p>\r\n<p>Les germanes Bassedes, propiet&agrave;ries de la llibreria, han tornat a apujar la persiana, i tot&nbsp;<strong>gr&agrave;cies</strong><strong>&nbsp;a la solidaritat dels ve&iuml;ns del barri</strong>.</p>\r\n<p>Durant aquests mesos, han estat donant llibres que despr&eacute;s es venien en una paradeta al mercat, al preu que cadasc&uacute; volgu&eacute;s pagar. \"No &eacute;s tant l\'aportaci&oacute; econ&ograve;mica, que tamb&eacute; ho va ser, sin&oacute; l\'aportaci&oacute; moral\", diu la Rosa Bassedes, que confessa que el que han rebut ha estat \"un regal que no haurien imaginat mai\".</p>\r\n<p>Mentre reomplen prestatgeries, petits i grans que les han trobat a faltar les visiten. Tenir tanta gent, tot un districte i entitats al darrere les ha ajudat molt a tirar endavant.</p>\r\n<p>Per aix&ograve;,&nbsp;<strong>el pr&ograve;xim 21 de setembre faran una festa d\'inauguraci&oacute;</strong>&nbsp;i agra&iuml;ment al barri.</p>\r\n<p>El seg&uuml;ent reportatge del&nbsp;<strong>Telenot&iacute;cies Comarques</strong>&nbsp;recull com ha estat la reobertura de la llibreria i com ho han viscut els ve&iuml;ns:</p>\r\n<p>&nbsp;</p>', '2023-09-01', 1, 4, '2023-09-02 04:41:06', '2023-09-02 04:41:06');

-- --------------------------------------------------------

--
-- Table structure for table `rating_books`
--

CREATE TABLE `rating_books` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `book_id` bigint UNSIGNED NOT NULL,
  `rate` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rating_books`
--

INSERT INTO `rating_books` (`id`, `user_id`, `book_id`, `rate`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '5.00', '2023-09-08 17:25:06', '2023-09-08 17:25:06'),
(2, 4, 1, '4.00', '2023-09-08 17:39:23', '2023-09-08 17:39:23'),
(3, 7, 1, '1.50', '2023-09-08 18:12:12', '2023-09-08 18:12:12'),
(4, 3, 1, '2.00', '2023-09-08 18:44:44', '2023-09-08 18:44:44'),
(5, 3, 2, '5.00', '2023-09-08 18:45:53', '2023-09-08 18:45:53'),
(6, 3, 3, '4.00', '2023-09-08 18:46:10', '2023-09-08 18:46:10'),
(7, 3, 4, '3.00', '2023-09-08 18:46:30', '2023-09-08 18:46:30'),
(8, 3, 5, '5.00', '2023-09-08 18:46:49', '2023-09-08 18:46:49'),
(9, 2, 2, '5.00', '2023-09-08 18:48:27', '2023-09-08 18:48:27'),
(10, 2, 3, '2.00', '2023-09-08 18:48:41', '2023-09-08 18:48:41'),
(11, 2, 4, '4.50', '2023-09-08 18:48:57', '2023-09-08 18:48:57'),
(12, 2, 5, '0.50', '2023-09-08 18:49:17', '2023-09-08 18:49:17'),
(13, 1, 4, '5.00', '2023-09-12 10:39:58', '2023-09-12 10:39:58'),
(14, 6, 4, '5.00', '2023-09-12 10:41:32', '2023-09-12 10:41:32'),
(15, 9, 4, '5.00', '2023-09-12 10:42:49', '2023-09-12 10:42:49'),
(16, 6, 1, '5.00', '2023-09-18 15:47:12', '2023-09-18 15:47:12');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` int UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `subject`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'saludos', '2023-07-28 13:55:15', '2023-07-28 13:55:15', NULL),
(2, 'saludos', '2023-07-28 14:04:09', '2023-07-28 14:04:09', NULL),
(3, 'saludos', '2023-07-28 14:04:44', '2023-07-28 14:04:44', NULL),
(4, 'saludos', '2023-07-28 14:16:17', '2023-07-28 14:16:17', NULL),
(5, 'saludos', '2023-07-29 06:28:01', '2023-07-29 06:28:01', NULL),
(6, 'LLibre pujat', '2023-07-29 08:00:58', '2023-07-29 08:17:32', NULL),
(7, 'LLibre pujat', '2023-07-29 08:34:33', '2023-07-29 08:44:31', NULL),
(8, 'Mala conversa', '2023-07-29 08:47:59', '2023-07-29 08:47:59', NULL),
(9, 'Benvinguda', '2023-08-28 08:48:35', '2023-08-28 08:49:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condicio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'lector',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  `novetats` enum('Si','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nickname`, `condicio`, `email`, `email_verified_at`, `password`, `avatar`, `type`, `remember_token`, `created_at`, `updated_at`, `banned_at`, `novetats`) VALUES
(1, 'Albert Sans Climent', 'Admin', '', 'asanscliment@gmail.com', NULL, '$2y$10$/ldUbIvsd4MGLKBjgjlcDOv8kDBLPWWhgOnHM8Uuy1fKVUKJfvmA6', 'images/avatars/zfBjZeYy0JYmeD98nNArY97ph8TC1yoZwSQaYeC9.png', 'admin', NULL, '2023-07-13 10:19:25', '2023-07-13 10:19:25', NULL, 'No'),
(2, 'Zacarias Satrustegui', 'zaka1966', 'lector', 'albertsans830@gmail.com', NULL, '$2y$10$/DmhWfqSc4YxPEbYVoTcveFRbEzKlxOVx/W5lCQoxWe4WSCKMynDO', 'images/avatars/nV1FwYl8BHJQR9n3RQKnZ45kmtT1SlK4vDSI8ofT.png', 'user', NULL, '2023-07-13 15:27:11', '2023-08-28 15:22:29', NULL, 'Si'),
(3, 'Pep Formiga', 'form63', 'lector', 'pep@gmail.com', NULL, '$2y$10$ihjvBwPxA8yGGedCTI3wiOcy2L6I5VjrQhbLVr2jcRQrwZ2RAePEe', NULL, 'user', NULL, '2023-07-18 10:58:59', '2023-07-21 10:28:18', NULL, 'No'),
(4, 'Joan Picas', 'joan65', 'autor', 'joan@gmail.com', NULL, '$2y$10$GVHKl2HUbN7CHDSDgFsdcO8lnWhS.ADKmIfW/ay8QOiOIABt/9WX2', 'images/avatars/ibk8zEecKUprSMZLe8bfFQWxOj4Vu1ChcOuyCKET.png', 'user', NULL, '2023-07-18 11:11:58', '2023-07-18 11:11:58', NULL, 'No'),
(5, 'Llibreria Can Pocasolta', 'poca45', 'llibreria', 'llibre@gmail.com', NULL, '$2y$10$ar/ajEefZDVQOwQEZcGOTeFfUcYx5pU8FHslTK6T2uPjwDPxvlXwS', NULL, 'user', NULL, '2023-07-18 11:15:09', '2023-07-21 10:07:24', NULL, 'No'),
(6, 'Editorial Pixapins', 'pins340', 'editorial', 'pins@gmail.com', NULL, '$2y$10$vbSLYU1rffsbvDv0WuDvt.sGvLvhha9nP92IoT/HMP01c2rhuL7aC', 'images/avatars/dm94O8nPcMxtrZ3CHs4Bpk4u5jcidtcg5v3AxhBj.png', 'user', NULL, '2023-07-18 11:18:22', '2023-08-28 15:37:37', NULL, 'Si'),
(7, 'Perico Nogueras', 'peri7890', 'lector', 'peri@gmail.com', NULL, '$2y$10$sxbuUZiNLKlMva8AJMbvmuvaDOsGafy2JVrQDjLCFwZ5yqNpTaC9S', NULL, 'user', NULL, '2023-08-28 07:06:38', '2023-08-28 07:06:38', NULL, 'Si'),
(8, 'Policarp Bonanit', 'bona346', 'autor', 'poli@gmail.com', NULL, '$2y$10$lQLq7xe1tTTf6nDJj7eWauOeldAP0GuWRGOwwAasW84rkWfsM5xDy', 'images/avatars/hSiBsDREao80kUXOX5PiIGY1GmEOhLhFRByzbLEw.png', 'user', NULL, '2023-09-01 06:55:26', '2023-09-01 06:57:09', NULL, 'Si'),
(9, 'Pio Auba', 'pio4567', 'autor', 'pio@gmail.com', NULL, '$2y$10$TUEbt72Yz4zVGHk2JL1Wo.s/RtTl9AsMMIPDI4EjM2nOZ/4JSQjUa', 'images/avatars/ADkPK7TfK0LyLLXyfGOzzXcti6df0DsDmt6yS7hw.jpg', 'user', NULL, '2023-09-01 07:11:56', '2023-09-01 07:50:18', NULL, 'Si'),
(10, 'Maria Cantallops', 'canta234', 'lector', 'maria@gmail.com', NULL, '$2y$10$5j8YUGtaPOtV7bWt5D5IR.L4w7sIsaxdLEAYlGDhZWz9hEKMvd6j6', 'images/avatars/rBZiIEsLxou0EsLZen9kHyIMS5s2vUCsOmrLYpVC.png', 'user', NULL, '2023-09-01 07:18:40', '2023-09-01 07:27:16', NULL, 'Si');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actes`
--
ALTER TABLE `actes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `actes_user_id_foreign` (`user_id`);

--
-- Indexes for table `autors`
--
ALTER TABLE `autors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `autors_user_id_foreign` (`user_id`);

--
-- Indexes for table `bans`
--
ALTER TABLE `bans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bans_bannable_type_bannable_id_index` (`bannable_type`,`bannable_id`),
  ADD KEY `bans_created_by_type_created_by_id_index` (`created_by_type`,`created_by_id`),
  ADD KEY `bans_expired_at_index` (`expired_at`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_genere_id_foreign` (`genere_id`),
  ADD KEY `books_user_id_foreign` (`user_id`);

--
-- Indexes for table `bookshops`
--
ALTER TABLE `bookshops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookshops_user_id_foreign` (`user_id`);

--
-- Indexes for table `coment_books`
--
ALTER TABLE `coment_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `denuncia_comentari_books`
--
ALTER TABLE `denuncia_comentari_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `denuncia_comentari_books_user_id_foreign` (`user_id`),
  ADD KEY `denuncia_comentari_books_coment_book_id_foreign` (`coment_book_id`);

--
-- Indexes for table `editorials`
--
ALTER TABLE `editorials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `editorials_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `generes`
--
ALTER TABLE `generes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medis`
--
ALTER TABLE `medis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medis_user_id_foreign` (`user_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `rating_books`
--
ALTER TABLE `rating_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rating_books_user_id_foreign` (`user_id`),
  ADD KEY `rating_books_book_id_foreign` (`book_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actes`
--
ALTER TABLE `actes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `autors`
--
ALTER TABLE `autors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bans`
--
ALTER TABLE `bans`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bookshops`
--
ALTER TABLE `bookshops`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coment_books`
--
ALTER TABLE `coment_books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `denuncia_comentari_books`
--
ALTER TABLE `denuncia_comentari_books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `editorials`
--
ALTER TABLE `editorials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generes`
--
ALTER TABLE `generes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medis`
--
ALTER TABLE `medis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rating_books`
--
ALTER TABLE `rating_books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actes`
--
ALTER TABLE `actes`
  ADD CONSTRAINT `actes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `autors`
--
ALTER TABLE `autors`
  ADD CONSTRAINT `autors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_genere_id_foreign` FOREIGN KEY (`genere_id`) REFERENCES `generes` (`id`),
  ADD CONSTRAINT `books_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `bookshops`
--
ALTER TABLE `bookshops`
  ADD CONSTRAINT `bookshops_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `denuncia_comentari_books`
--
ALTER TABLE `denuncia_comentari_books`
  ADD CONSTRAINT `denuncia_comentari_books_coment_book_id_foreign` FOREIGN KEY (`coment_book_id`) REFERENCES `coment_books` (`id`),
  ADD CONSTRAINT `denuncia_comentari_books_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `editorials`
--
ALTER TABLE `editorials`
  ADD CONSTRAINT `editorials_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `medis`
--
ALTER TABLE `medis`
  ADD CONSTRAINT `medis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `rating_books`
--
ALTER TABLE `rating_books`
  ADD CONSTRAINT `rating_books_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `rating_books_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
