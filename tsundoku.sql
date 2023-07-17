-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 17, 2023 at 05:55 AM
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
  `active` tinyint NOT NULL DEFAULT '0',
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `actes`
--

INSERT INTO `actes` (`id`, `titol`, `slug`, `image`, `hora`, `url`, `body`, `data`, `active`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Plensa i els poetes', 'plensa-i-els-poetes', 'https://ajuntament.barcelona.cat/ciutatdelaliteratura/sites/default/files/styles/actualidad_detalle/public/jaume-plensa.jpg?itok=Gmzr1RbF', '21:00', 'https://ajuntament.barcelona.cat/ciutatdelaliteratura/ca/no-tho-perdis/recital-ateneu-plensa', '<p><strong>Ateneu Barcelon&egrave;s</strong></p>\r\n<p>Recital dirigit per Pablo Macho Otero i interpretat per Emma Arquillu&eacute; i Albert Triola.</p>\r\n<p><em>El pensament art&iacute;stic de Jaume Plensa s&rsquo;ha bastit entorn dels poetes i afirma: &ldquo;Les paraules ens protegeixen&rdquo;. El recital, que forma part de la programaci&oacute; de l\'Ateneu \"Juliol a la fresca\", oferir&agrave; un di&agrave;leg de l&rsquo;artista amb els versos d&rsquo;alguns dels poetes que m&eacute;s l&rsquo;han interpel&middot;lat, com s&oacute;n William Shakespeare, W. Blake, William C. Williams, Baudelaire, T.S. Eliot o Vicent Andr&eacute;s Estell&eacute;s. A c&agrave;rrec d\'Emma Arquillu&eacute; i Albert Triola i dirigit per Pablo Macho Otero.</em></p>', '2023-07-18', 1, 1, '2023-07-16 14:29:00', '2023-07-16 14:47:40'),
(3, 'Itinerari \"Josep Vallverdú a Barcelona: l’etapa d’estudiant i el reconeixement com a autor consagrat\"', 'itinerari-josep-vallverdu-a-barcelona-letapa-destudiant-i-el-reconeixement-com-a-autor-consagrat', 'https://cultura.gencat.cat/web/.content/ilc/05-comunicacio/03-agenda/imatges/El-vuite-nan.png_1668733195.png', '18:00', 'https://cultura.gencat.cat/ca/ilc/detalls/activitat/2023-09-12-itinerari-vallverdu-LSC23', '<p>A c&agrave;rrec de Maria Pujol Valls</p>\r\n<p>Punt de trobada:&nbsp;Universitat de Barcelona, edifici hist&ograve;ric (Pla&ccedil;a Universitat)<br>Finalitza a:&nbsp;Palau de la Generalitat (Pla&ccedil;a Sant Jaume)<br>Llibre:&nbsp;<em>El vuit&egrave; nan.&nbsp;La Galera</em><br>Autor:&nbsp;Josep Vallverd&uacute;. Il&middot;lustracions de Cuchu<br>Durada:&nbsp;90 minuts</p>\r\n<p>Una passejada pel centre de Barcelona per visitar llocs clau en la formaci&oacute; i el reconeixement de Josep Vallverd&uacute;: la universitat on es va formar com a fil&ograve;leg i on va despertar el seu activisme cultural als anys quaranta; i els espais on ha compartit el seu coneixement com a home de lletres i on s&rsquo;ha homenatjat la seva figura com a autor de la literatura catalana al llarg dels anys i pel seu centenari el 2023.</p>\r\n<p>Una ruta per l&rsquo;Eixample i Ciutat Vella</p>\r\n<p>Trobareu el llibre al m&ograve;dul n&uacute;m. 5-6 de La Setmana del Llibre en Catal&agrave;.</p>\r\n<p>M&eacute;s informaci&oacute;:&nbsp;itineraris@lasetmana.cat o tel. 608 917 032 (de 10h a 14h)</p>', '2023-09-12', 1, 2, '2023-07-17 05:48:08', '2023-07-17 05:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `autors`
--

CREATE TABLE `autors` (
  `id` bigint UNSIGNED NOT NULL,
  `autor_nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biopic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint NOT NULL DEFAULT '0',
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `autors`
--

INSERT INTO `autors` (`id`, `autor_nom`, `slug`, `biopic`, `url_foto`, `active`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Edgar Allan Poe', 'edgar-allan-poe', '<p><span style=\"font-size: 14pt;\">Edgar Allan Poe (Boston, 1809 ‒ Baltimore, 1849) &eacute;s considerat un dels grans escriptors nord-americans del per&iacute;ode rom&agrave;ntic</span>.</p>\r\n<p>Mestre del relat curt, amb contes tan famosos com &laquo;The Black Cat&raquo;, &laquo;The Murders in the Rue Morgue&raquo; o &laquo;The Fall of the House of Usher&raquo;, Poe tamb&eacute; va escriure una novel&middot;la (The Narrative of Arthur Gordon Pym of Nantucket), conre&agrave; de manera reeixida la poesia i &mdash;fet no tan conegut pel gran p&uacute;blic&mdash; es prodig&agrave; for&ccedil;a en l&rsquo;assaig, amb t&iacute;tols tan celebrats com The Philosophy of Composition, The Poetic Principle o l&rsquo;inclassificable i captivador Eureka, que ara presentem en traducci&oacute; catalana.</p>', 'http://www.adesiaraeditorial.cat/autores/thumbs/Poe.jpg', 1, 1, '2023-07-14 06:13:36', '2023-07-14 06:20:28'),
(2, 'Teresa Pàmies', 'teresa-pamies', '<p>(Balaguer, 8 d&rsquo;octubre de 1919 - Granada, 13 de mar&ccedil; de 2012) Escriptora catalana guardonada amb les m&agrave;ximes condecoracions de la literatura i cultura catalanes.<br>El 1984, la Generalitat de Catalunya li va concedir la Creu de Sant Jordi, el 1997, va rebre la Medalla d&rsquo;Honor de Barcelona, el 2001, el Premi d&rsquo;Honor de les Lletres Catalanes, la m&agrave;xima distinci&oacute; liter&agrave;ria en catal&agrave;, i el 2006, el Premi Manuel V&aacute;zquez Montalb&aacute;n.<br>La seva obra &eacute;s extensa i d&rsquo;un car&agrave;cter autobiogr&agrave;fic. El 1937 ingressa a les Joventuts Socialistes Unificades de Catalunya (jsuc), de la direcci&oacute; de les quals forma part durant la Guerra Civil. Despr&eacute;s de la guerra s&rsquo;exilia, primer a Fran&ccedil;a i m&eacute;s tard a Cuba, la Rep&uacute;blica Dominicana, M&egrave;xic, Iugosl&agrave;via i Txecoslov&agrave;quia.<br>Des de l&rsquo;exili col&middot;labora amb diferents revistes catalanes com Serra d&rsquo;Or. El 1971 torna de l&rsquo;exili i es dedica a la literatura i al periodisme fins la seva mort.</p>', 'https://upload.wikimedia.org/wikipedia/commons/d/d2/Teresa_P%C3%A0mies_i_Bertran.jpg', 1, 2, '2023-07-17 05:16:12', '2023-07-17 05:16:12');

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
  `imatge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinopsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `editorial_web` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idioma` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `titol`, `slug`, `autor_nom`, `genere_id`, `autor_id`, `editorial_id`, `editorial_nom`, `isbn`, `imatge`, `sinopsi`, `editorial_web`, `idioma`, `user_id`, `active`, `created_at`, `updated_at`) VALUES
(1, 'La pols que calla', 'la-pols-que-calla', 'Josep Cuello', 2, NULL, NULL, 'Stonberg', '978-84-946172-5-6', 'https://static.wixstatic.com/media/61f884_09484ed174a346d1a76c115c5d31fee5~mv2.jpg', '<p><em>Dins la tradici&oacute; liter&agrave;ria occidental, el sonet &eacute;s amb tota probabilitat el pont &mdash;can&ograve;nic i intemporal&mdash; m&eacute;s utilitzat pels poetes per tal d\'acostar els seus lectors, i o&iuml;dors, a les dues ribes de la veritat po&egrave;tica: l\'enteniment i l\'emoci&oacute;. Juntament amb la rima, en l\'economia dels catorze versos del sonet cl&agrave;ssic hi ha un exercici d\'exig&egrave;ncia sint&agrave;ctica i una progressi&oacute; narrativa est&agrave;ndard, que, si van de costat de l\'harmonia i el gust pel ritme, fan d\'aquesta composici&oacute; estr&ograve;fica una s&ograve;lida arquitectura on brilla la paraula.</em></p>\r\n<p>&nbsp;</p>\r\n<p>Els 37 sonets de La pols que calla formen un &agrave;lbum de fotografies tirades amb precisi&oacute;, escenes en les quals hi trobem la reflexi&oacute; vital: &ldquo;com el pardal xalest, que de tot fuig/ i a tot retorna prest a espicossar/ les molles tendres d\'un temps que ser&agrave;/ per a ell remei i fel&rdquo;, &ldquo;jo s&oacute;c el vent i el minut/ lleugers, el nus del fil trencat suara&rdquo;, &ldquo;fruita ventissa com pleg&oacute; de m&eacute;s, /molsa de carner, n&uacute;vol que torreja/ abans de ploure\'s&rdquo;. Sempre des d&rsquo;una perspectiva terrenal, la dels indrets m&eacute;s estimats de l\'autor: Manresa &mdash;&ldquo;somriu la ciutat, vella, plujosa i enramada&rdquo;&mdash; i la contrada &mdash;&ldquo;tot el m&oacute;n en una vall, /tot el cor en un terrer, /pedra de cal&ccedil; i glever&rdquo;&mdash;, Menorca &mdash;&ldquo;ara, al tranquil cal&oacute;, /lla&uuml;ts polits fendeixen la llisor/ i, afalagat, el mar llampant...&rdquo;&mdash; o els Pirineus: &ldquo;crema la cara pel sol del migdia, /xiulen marmotes i ronquen les gralles, /i els espadats, atents, fan tornaveu&rdquo;. I sempre amb un esguard ser&egrave;: &ldquo;fent del passat perfum&rdquo;, &ldquo;ara que &ldquo;les veles ja s&oacute;n somnis, caminant/ damunt les aig&uuml;es, gr&agrave;vids de certeses&rdquo;. Omnipresent, tothora, la mem&ograve;ria:<strong> &ldquo;all&iacute;, passat el pont, la pols que calla</strong>&rdquo;.</p>', 'https://www.stonbergeditorial.com/', 'Catalá', 1, 1, '2023-07-14 08:35:59', '2023-07-14 08:41:50'),
(2, '69 poemes d\'amor', '69-poemes-damor', 'Vicent Andrés Estellés', 2, NULL, NULL, 'Edicions del Bullent', '9788486390921', 'https://m.media-amazon.com/images/I/412Q2JtQh0L._SY264_BO1,204,203,200_QL40_ML2_.jpg', '<p>Vicent Andr&eacute;s Estell&eacute;s va n&agrave;ixer el 4 de setembre de 1924 i va morir el 27 de mar&ccedil; de 1993. Gaireb&eacute; seixanta-nou anys dedicats a la literatura. En l&rsquo;obra d&rsquo;Estell&eacute;s el lector ha sabut recon&egrave;ixer la seva realitat m&eacute;s immediata, m&eacute;s quotidiana: les inquietuds, les esperances, les mis&egrave;ries, els somnis, el dolor, l&rsquo;alegria, les frustracions, l&rsquo;amor, la mort&hellip; Tot aix&ograve; &eacute;s ja un motiu suficient per a oferir aquests 69 poemes d&rsquo;amor. Nosaltres ens hem marcat com a punt de partida el concepte de l&rsquo;amor per tal d&rsquo;arribar a Estell&eacute;s, ben segurs que una aproximaci&oacute; tem&agrave;tica ens en pot donar una visi&oacute; total. Aquesta impressionant polifonia l&iacute;rica de Vicent Andr&eacute;s Estell&eacute;s el situa, amb tot dret, al costat dels millors poetes del segle xx.</p>', 'https://www.bullent.net/inici/', 'Catalá', 2, 0, '2023-07-16 17:31:04', '2023-07-16 17:31:04');

-- --------------------------------------------------------

--
-- Table structure for table `bookshops`
--

CREATE TABLE `bookshops` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qui_som` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciutat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitud` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitud` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zoom` int NOT NULL DEFAULT '14',
  `active` tinyint NOT NULL DEFAULT '0',
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookshops`
--

INSERT INTO `bookshops` (`id`, `nom`, `slug`, `logo`, `qui_som`, `url`, `ciutat`, `latitud`, `longitud`, `zoom`, `active`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'El Cucut', 'el-cucut', 'https://pbs.twimg.com/profile_images/451413117721796608/a-3Kx9Dd.jpeg', '<p><strong>Treballem en un m&oacute;n de creativitat i de cultura. La cadena del m&oacute;n del llibre comen&ccedil;a quan un escriptor publica, amb la implicaci&oacute; d&rsquo;una editorial, el seu llibre. Aquest arriba a les nostres mans i aix&iacute; comen&ccedil;a la feina del llibreter.</strong>&nbsp;<br>Hem de con&egrave;ixer qu&egrave; tenim a la llibreria, hem de llegir tot el que puguem i hem de trobar el lector adient a cada llibre o un llibre per a cada lector.&nbsp;<br>Pensem que llegir ha de ser divertit i voluntari. Tothom s&rsquo;ho ha de passar b&eacute; llegint i quan alg&uacute; no ho aconsegueix &eacute;s feina del llibreter trobar l&rsquo;estil i l&rsquo;obra que el lector busca.<br>No som jutges de la literatura. Som prescriptors.&nbsp;<br><em>Creiem que en aquests moments que hi ha tanta producci&oacute; cultural i que surten tantes novetats constantment, la nostra feina &eacute;s saber destriar i orientar. En cap cas censurar.&nbsp;</em></p>', 'https://www.llibreriaelcucut.cat/', 'Torroella de Montgrí', '42.04321448067007', '3.1235095423280006', 16, 1, 1, '2023-07-14 07:58:03', '2023-07-14 08:04:47'),
(2, 'Llibreria 22', 'llibreria-22', 'https://www.llibreria22.net/web/bundles/acmestore/img/logo-web-nou-3.jpg', '<p>La Llibreria 22 fundada el 20 d\'octubre de 1978, ja forma part de la hist&ograve;ria de Girona dels darrers anys.</p>', 'https://www.llibreria22.net/web/llibreria22', 'Girona', '41.9845203502328', '2.822221071165709', 16, 1, 2, '2023-07-17 05:34:56', '2023-07-17 05:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `parent_id` int UNSIGNED DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` int UNSIGNED NOT NULL,
  `commentable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `parent_id`, `body`, `commentable_id`, `commentable_type`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, 'Bona noticia', 2, 'App\\Models\\Post', '2023-07-15 07:20:24', '2023-07-15 07:20:24'),
(2, 2, NULL, 'Molt ben escrit', 1, 'App\\Models\\Book', '2023-07-15 07:53:22', '2023-07-15 07:53:22'),
(3, 2, NULL, 'Mestre de la novela gótica', 1, 'App\\Models\\Autor', '2023-07-15 07:54:17', '2023-07-15 07:54:17'),
(4, 2, NULL, 'Editorial interassant', 1, 'App\\Models\\Editorial', '2023-07-15 07:54:55', '2023-07-15 07:54:55'),
(5, 2, NULL, 'Llibreria curiosa', 1, 'App\\Models\\Bookshop', '2023-07-15 07:56:08', '2023-07-15 07:56:08'),
(6, 2, NULL, 'Bon video', 2, 'App\\Models\\Medi', '2023-07-16 13:33:46', '2023-07-16 13:33:46'),
(7, 2, NULL, 'Será interessant', 1, 'App\\Models\\Acte', '2023-07-16 15:22:18', '2023-07-16 15:22:18'),
(8, 2, NULL, 'Si son les espardenyes', 2, 'App\\Models\\Book', '2023-07-17 05:51:32', '2023-07-17 05:51:32');

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
  `url_vendes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adreça` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint NOT NULL DEFAULT '0',
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `editorials`
--

INSERT INTO `editorials` (`id`, `editorial_nom`, `slug`, `descripcio`, `url`, `url_vendes`, `logo`, `adreça`, `active`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Angle editorial', 'angle-editorial', '<p><strong>Empresa editorial independent.</strong><br>Des del seu naixement l\'any 1992, Angle Editorial ha tingut la voluntat de convertir-se en una alternativa al m&oacute;n editorial en catal&agrave; caracteritzada per la recerca de la qualitat, tant pel que fa als continguts com als aspectes formals.</p>\r\n<p>Angle Editorial &eacute;s una editorial central i global que compta dins del seu cat&agrave;leg amb col&middot;leccions que abasten la narrativa, l\'assaig, la poesia, l\'humor, biografies i mem&ograve;ries, etc. El seu cat&agrave;leg es completa amb llibres il&middot;lustrats de gran format.</p>', 'www.angleeditorial.com', 'www.angleeditorial.com', 'https://pbs.twimg.com/profile_images/476295748225470465/EaW9bU2l_400x400.jpeg', 'Calle Muntaner, 200, 08036, Barcelona', 1, 1, '2023-07-14 06:54:33', '2023-07-14 06:59:37'),
(2, 'AKIARA books', 'akiara-books', '<p>AKIARA va n&eacute;ixer a Barcelona el 2018 de la m&agrave; d&rsquo;In&ecirc;s Castel-Branco, com a continuaci&oacute; de Petit Fragmenta, la col&middot;lecci&oacute; infantil de Fragmenta Editorial, que l&rsquo;editora havia creat i dirigit des de la tardor del 2015.<br>AKIARA sona com l&rsquo;expressi&oacute; &laquo;aqu&iacute; i ara&raquo; (amb una K, la lletra m&eacute;s juganera dels nens) i tamb&eacute; juga amb el nom japon&egrave;s Akira 明, que vol dir &lsquo;llumin&oacute;s, lluminosa&rsquo;.<br>AKIARA publica &uacute;nicament llibres de producci&oacute; pr&ograve;pia, curosament escrits i il&middot;lustrats, per a petits i joves de totes les edats, orientats al conreu de la interioritat i la qualitat humana.<br>Amb textos i il&middot;lustracions inspiradors, els llibres d&rsquo;AKIARA amplien horitzons i desperten el sentit de meravella davant del m&oacute;n, alhora que estimulen l&rsquo;art de llegir, de pensar, d&rsquo;argumentar, de contemplar i de con&egrave;ixer-se a si mateix(a).</p>', 'https://akiarabooks.com/editorial/', 'https://akiarabooks.com/editorial/', 'https://akiarabooks.com/wp-content/themes/akiarabooks/assets/img/akiara-books.svg', 'Pl​aça del Nord, 4, pral. 1.ª 08024 Barcelona', 1, 2, '2023-07-17 05:28:43', '2023-07-17 05:28:43');

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
  `active` tinyint NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generes`
--

INSERT INTO `generes` (`id`, `nom`, `slug`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Assaig', 'assaig', 1, NULL, '2023-07-13 15:16:20', '2023-07-13 15:16:20'),
(2, 'Poesia', 'poesia', 1, NULL, '2023-07-13 15:22:10', '2023-07-13 15:22:10');

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
  `active` tinyint NOT NULL DEFAULT '0',
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medis`
--

INSERT INTO `medis` (`id`, `titol`, `slug`, `image`, `url`, `body`, `data`, `active`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Jordi Roig presenta el seu nou poemari', 'jordi-roig-presenta-el-seu-nou-poemari', 'https://static.comunicae.com/photos/notas/1131346/1447695367_Jordi_Roig.jpg', 'https://youtu.be/8iIajgeWy-0', '<p><span style=\"font-size: 14pt;\"><strong>Cada dilluns que es perd, nou poemari de Jordi Roig</strong></span></p>', '2023-07-06', 1, 1, '2023-07-16 08:46:46', '2023-07-16 08:46:46'),
(3, 'Israel Calvache publica la seva primera novel·la', 'israel-calvache-publica-la-seva-primera-novella', 'https://storage.googleapis.com/glide-prod.appspot.com/uploads-v2/F3MAlDPfk86EMq6vDwk3/pub/2wsuCftOn3tLsevwgvcw.jpg', 'https://www.youtube.com/watch?v=PU00u-m40TQ', '<p>Not&iacute;cia emesa a l\'informatiu del dia 19 de novembre de 2013.</p>', '2023-06-26', 1, 2, '2023-07-17 05:42:45', '2023-07-17 05:42:45');

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
(11, '2023_06_29_100125_create_ratings_table', 1),
(12, '2023_06_30_101959_create_comments_table', 1),
(13, '2023_06_18_065709_create_autors_table', 2),
(14, '2023_06_18_155618_create_editorials_table', 3),
(15, '2023_06_19_084503_create_bookshops_table', 4),
(16, '2023_07_14_141022_create_posts_table', 5),
(17, '2023_07_16_094837_create_medis_table', 6),
(18, '2023_07_16_155553_create_actes_table', 7);

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
  `active` tinyint NOT NULL DEFAULT '0',
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `titol`, `slug`, `image`, `font`, `url`, `body`, `data`, `active`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Catalunya Nord, present a la Setmana del Llibre en Català', 'catalunya-nord-present-a-la-setmana-del-llibre-en-catala', 'images/posts/Tl1XKXkzWp9yZd5nYQkeNguXexDQtVh3UBBlRHe7.jpg', 'El Punt', 'https://www.elpuntavui.cat/cultura/article/19-cultura/2311418-catalunya-nord-present-a-la-setmana-del-llibre-en-catala.html', '<p>Del 8 al 17 de setembre de 2023, el Moll de la Fusta de Barcelona tornar&agrave; a acollir&nbsp;<a title=\"\" href=\"http://www.lasetmana.cat/\" target=\"_blank\" rel=\"noopener\">La Setmana del Llibre en Catal&agrave;</a>&nbsp;, el gran espai de trobada entre lectors, editors, llibreters i autors, que enguany arriba a la seva 41 edici&oacute; consolidada com el gran Festival del llibre en catal&agrave;.</p>\r\n<p>La Setmana assoleix aquest any la fita de reunir segells editorials de tots els territoris de llengua catalana. A la pres&egrave;ncia de Catalunya, Pa&iacute;s Valenci&agrave;, Andorra i Illes Balears, s&rsquo;hi suma la de Catalunya Nord, amb una caseta pr&ograve;pia liderada per la Llibreria Catalana de Perpiny&agrave;. En aquest sentit, la fira ser&agrave; en aquesta edici&oacute; encara m&eacute;s un espai privilegiat per mostrar la riquesa i la diversitat de tota l&rsquo;edici&oacute; en catal&agrave;.</p>\r\n<p>Seguint la l&iacute;nia iniciada el 2022, La Setmana esdev&eacute; un festival, no nom&eacute;s literari, sin&oacute; del llibre en catal&agrave;, amb presentacions, debats literaris, concerts, tallers, recitals de poesia, signatures d&rsquo;autors, taules rodones o converses, entre d&rsquo;altres activitats. Un gran espai de reivindicaci&oacute; del llibre com a origen del gaudi, de l&rsquo;oci cultural, d&rsquo;altres expressions art&iacute;stiques i culturals. Perqu&egrave;, com recorda el lema d&rsquo;aquesta edici&oacute; totes les hist&ograve;ries comencen en un llibre. I La Setmana &eacute;s on tot comen&ccedil;a.</p>\r\n<p>Com cada any, la fira suposar&agrave; tamb&eacute; l&rsquo;inici de curs per al sector. La cita de setembre marcar&agrave; la represa liter&agrave;ria despr&eacute;s de les vacances amb la presentaci&oacute; de 125 novetats editorials d&rsquo;adults, joves i infantils que obren la temporada de tardor.</p>\r\n<p>L&rsquo;espai que ocupar&agrave; enguany la fira creix fins als 7.000 metres quadrats, el m&agrave;xim de capacitat del Moll de la Fusta. En aquest espai s&rsquo;encabiran els 287 m&ograve;duls d&rsquo;expositors, tres escenaris per a p&uacute;blic jove i adult, un espai familiar amb escenari i zona de tallers, dos espais de lectura, una zona de bar, l&rsquo;exposici&oacute; Ser de lletres, que comissaria i organitza l&rsquo;Institut de les Lletres Catalanes (ILC), la carpa de l&rsquo;Associaci&oacute; de Publicacions Peri&ograve;diques en Catal&agrave; (APPEC) i un nou espai per a entitats.</p>\r\n<p>Tambe, com a novetat, La Setmana acollir&agrave; diferents podcasts literaris que es gravaran en el marc de l&rsquo;esdeveniment.</p>\r\n<p>El n&uacute;mero d&rsquo;expositors tamb&eacute; va a l&rsquo;al&ccedil;a i arriba fins als 287, entre segells editorials (244), llibreries (20), institucions (10), universitats (9), associacions (3) i distribu&iuml;dores (1).</p>\r\n<p>Pel que fa a les activitats (que inclouen la programaci&oacute; als escenaris i els itineraris literaris) se n&rsquo;han programat prop m&eacute;s de 300 en els deu dies que dura el festival, a m&eacute;s de m&eacute;s d&rsquo;un centenar de signatures d&rsquo;autors i autores. Una programaci&oacute; molt variada que respon a diversos interessos segons el perfil del p&uacute;blic de la fira.</p>\r\n<p>La Setmana torna a comptar enguany amb quatre autors i autores internacionals. Una d&rsquo;elles ser&agrave; l&rsquo;escriptora sueca Karin Smirnoff, escollida per a continuar les novel&middot;les de la s&egrave;rie Millenium d&rsquo;Stieg Larsson. De la m&agrave; del CCCB, arribar&agrave; la reconeguda autora coreana Han Kang, que parlar&agrave; del seu nou llibre La classe de grec. La no ficci&oacute; tamb&eacute; hi ser&agrave; representada amb la pres&egrave;ncia del brit&agrave;nic Roger Griffin, expert en feixisme, i l&rsquo;holand&egrave;s Rob Riemenn, amb el seu nou llibre L&rsquo;art d&rsquo;esdevenir hum&agrave;. Quatre estudis.</p>\r\n<p>A la fira s&rsquo;hi presentaran 125 novetats editorials, de tem&agrave;tica molt diversa. Les presentacions, en les que hi participaran gaireb&eacute; tots els segells amb pres&egrave;ncia a La Setmana, es faran amb diversos formats. Hi haur&agrave; converses i entrevistes a autors (Carlota Gurt, S&iacute;lvia Soler, Ferran Torrent i Sergi P&agrave;mies). Es parlar&agrave; de recuperacions (Narc&iacute;s Oller, Jaume Roig, Ana&iuml;s Nin, Joan-Llu&iacute;s Llu&iacute;s, Joyce Carol Oates o Italo Calvino). Es presentaran llibres d&rsquo;autors que han estat guardonats amb algun premi literari en aquest any 2023 (Marta Mar&iacute;n-D&ograve;mine, S&ograve;nia Casas, Mar Bosch, Gemma Ruiz, Gemma Ventura i Andreu Claret). No faltar&agrave; tampoc l&rsquo;espai musical amb els concerts de Joan Isaac, Freddi Jazz Band i Roger Mas i el tradicional acte inaugural de La Setmana, que aquesta 41a edici&oacute; comptar&agrave; amb el preg&oacute; del Premi d&rsquo;Honor de les Lletres catalanes 2023, Josep Piera.</p>\r\n<div class=\"format10\">\r\n<p>Merc&egrave; Ibarz, premiada</p>\r\n</div>\r\n<div class=\"format11\">\r\n<p>El 27&egrave; Premi Traject&ograve;ria, que es lliura anualment des del 1997 a un professional vinculat al m&oacute;n de la cultura catalana que hagi destacat en la seva divulgaci&oacute;, recau enguany en Merc&egrave; Ibarz (Said&iacute;, 1954). El jurat li ha concedit el guard&oacute; en considerar-la autora d&rsquo;una obra &uacute;nica en la nostra literatura, pionera en molts camps, i perqu&egrave; com a narradora, assagista, cronista, bi&ograve;grafa, professora, cr&iacute;tica d&rsquo;art i periodista cultural ha treballat sempre amb una gran autoexig&egrave;ncia que ha contribu&iuml;t a enriquir-nos culturalment i com a pa&iacute;s.</p>\r\n</div>', '2023-07-10', 1, 1, '2023-07-14 13:23:31', '2023-07-15 06:36:30'),
(3, 'La \"devoradora\" de llibres de la biblioteca de Tortosa: \"N\'he llegit 457 en un any\"', 'la-devoradora-de-llibres-de-la-biblioteca-de-tortosa-nhe-llegit-457-en-un-any', 'images/posts/if8iFXYKEyah4H4AxnVCgDhvMGGvhH2l3S6cKUoK.webp', '3/34', 'https://www.ccma.cat/324/la-devoradora-de-llibres-de-la-biblioteca-de-tortosa-nhe-llegit-457-en-un-any/noticia/3236277/', '<h2 class=\"entradeta\">La passi&oacute; per la lectura de Cinta Mascarell, una superlectora de 80 anys, li ve des de petita, quan es va aficionar als contes</h2>\r\n<p>Cinta Mascarell devora els llibres. Fa servir una t&egrave;cnica que li permet llegir-ne&nbsp;<strong>m&eacute;s d\'un al dia</strong>&nbsp;i ha aconseguit un r&egrave;cord: en un sol any, ha agafat&nbsp;<strong>457 llibres en pr&eacute;stec&nbsp;</strong>de la biblioteca de Tortosa.&nbsp;Per a ella, els llibres ho s&oacute;n tot, o gaireb&eacute;. Tant &eacute;s aix&iacute; que, a m&eacute;s a m&eacute;s, hi fa de volunt&agrave;ria dos dies a la setmana.&nbsp;&nbsp;</p>\r\n<p>Mascarell t&eacute;&nbsp;<strong>80 anys</strong>&nbsp;i va aprendre la t&egrave;cnica lectora en un curs que va fer per a l\'empresa on treballava d\'administrativa. \"La velocitat que tinc ara la vaig aprendre llegint documents.\" I quin &eacute;s el secret? \"A m&eacute;s de mirada lectora, mirada fotogr&agrave;fica\", assegura.&nbsp; &nbsp;&nbsp;<br>&nbsp;<br>Recorda que aquesta passi&oacute; li ve de petita, de llegir contes. Despr&eacute;s es va convertir en una gran lectora de novel&middot;la. \"Per&ograve; no novel&middot;la de Cor&iacute;n Tellado\", matisa, \"sin&oacute; de novel&middot;la que tingu&eacute;s argument\".&nbsp;&nbsp;</p>\r\n<p>Tamb&eacute; ha obert el ventall i llegeix assaig, biografia i reportatges period&iacute;stics. Un dels temes que m&eacute;s l\'apassionen &eacute;s tot el que t&eacute; a veure amb la&nbsp;<strong>Segona Guerra Mundial</strong>. Recupera aqu&iacute; el reportatge sencer:</p>', '2023-07-03', 1, 2, '2023-07-17 05:39:52', '2023-07-17 05:39:52');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rating` int NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `rateable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rateable_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `created_at`, `updated_at`, `rating`, `comment`, `rateable_type`, `rateable_id`, `user_id`) VALUES
(1, '2023-07-15 07:07:11', '2023-07-15 07:07:11', 5, NULL, 'App\\Models\\Post', 2, 2),
(2, '2023-07-15 07:53:01', '2023-07-15 07:53:01', 4, NULL, 'App\\Models\\Book', 1, 2),
(3, '2023-07-15 07:53:40', '2023-07-15 07:53:40', 5, NULL, 'App\\Models\\Autor', 1, 2),
(4, '2023-07-15 07:54:36', '2023-07-15 07:54:36', 5, NULL, 'App\\Models\\Editorial', 1, 2),
(5, '2023-07-15 07:55:40', '2023-07-15 07:55:40', 5, NULL, 'App\\Models\\Bookshop', 1, 2),
(6, '2023-07-16 13:22:56', '2023-07-16 13:22:56', 5, NULL, 'App\\Models\\Medi', 2, 2),
(7, '2023-07-16 15:13:13', '2023-07-16 15:13:13', 5, NULL, 'App\\Models\\Acte', 1, 2),
(8, '2023-07-17 05:48:57', '2023-07-17 05:48:57', 5, NULL, 'App\\Models\\Bookshop', 2, 2),
(9, '2023-07-17 05:49:21', '2023-07-17 05:49:21', 4, NULL, 'App\\Models\\Acte', 3, 2),
(10, '2023-07-17 05:50:59', '2023-07-17 05:50:59', 5, NULL, 'App\\Models\\Book', 2, 2);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nickname`, `condicio`, `email`, `email_verified_at`, `password`, `avatar`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Albert Sans Climent', 'Admin', '', 'asanscliment@gmail.com', NULL, '$2y$10$/ldUbIvsd4MGLKBjgjlcDOv8kDBLPWWhgOnHM8Uuy1fKVUKJfvmA6', 'images/avatars/zfBjZeYy0JYmeD98nNArY97ph8TC1yoZwSQaYeC9.png', 'admin', NULL, '2023-07-13 10:19:25', '2023-07-13 10:19:25'),
(2, 'Zacarias Satrustegui', 'zaka1960', 'lector', 'albertsans830@gmail.com', NULL, '$2y$10$/DmhWfqSc4YxPEbYVoTcveFRbEzKlxOVx/W5lCQoxWe4WSCKMynDO', NULL, 'user', NULL, '2023-07-13 15:27:11', '2023-07-13 15:27:11');

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
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_rateable_type_rateable_id_index` (`rateable_type`,`rateable_id`),
  ADD KEY `ratings_rateable_id_index` (`rateable_id`),
  ADD KEY `ratings_rateable_type_index` (`rateable_type`),
  ADD KEY `ratings_user_id_foreign` (`user_id`);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `autors`
--
ALTER TABLE `autors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookshops`
--
ALTER TABLE `bookshops`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `editorials`
--
ALTER TABLE `editorials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generes`
--
ALTER TABLE `generes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medis`
--
ALTER TABLE `medis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
