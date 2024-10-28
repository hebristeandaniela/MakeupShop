-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: iun. 30, 2024 la 09:17 PM
-- Versiune server: 10.4.32-MariaDB
-- Versiune PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `laravel_shop`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Eliminarea datelor din tabel `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `quantity`, `price`, `user_id`, `created_at`, `updated_at`) VALUES
(6, 2, 2, 525.00, 5, '2024-04-23 14:41:24', '2024-04-23 14:41:27'),
(73, 2, 1, 525.00, 8, '2024-05-17 05:15:16', '2024-05-17 05:15:16');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `inventory`
--

CREATE TABLE `inventory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `sale_price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Eliminarea datelor din tabel `inventory`
--

INSERT INTO `inventory` (`id`, `product_id`, `quantity`, `price`, `sale_price`, `created_at`, `updated_at`) VALUES
(1, 1, 100, 250.00, 200.00, '2024-05-17 14:53:15', '2024-05-17 14:53:15'),
(2, 2, 50, 125.00, 100.00, '2024-05-17 14:53:15', '2024-05-17 14:53:15'),
(3, 3, 75, 130.00, 115.00, '2024-05-17 14:53:15', '2024-05-17 14:53:15'),
(4, 20, 35, 53.00, 33.00, '2024-06-30 09:14:26', '2024-06-30 11:22:18');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Eliminarea datelor din tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_02_12_000000_create_users_table', 1),
(2, '2024_02_12_100000_create_password_reset_tokens_table', 1),
(3, '2024_02_12_100000_create_password_resets_table', 1),
(5, '2024_02_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_02_29_125512_create_products_table', 1),
(7, '2024_02_29_125556_create_carts_table', 1),
(8, '2024_02_29_125556_create_processings_table', 2),
(9, '2024_03_08_092947_add_client_id_processings_table', 3),
(10, '2024_05_17_165011_add_role_user', 4);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `order_list`
--

CREATE TABLE `order_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `processing_id` bigint(20) UNSIGNED NOT NULL,
  `inventory_id` int(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `pret` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Eliminarea datelor din tabel `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('steficzabianca16@gmail.com', '$2y$12$vYTJZfR62juztXRPlvJCFO3fgkicoz1r/1cwjDpooWR7cskz.fGOO', '2024-04-23 14:49:10');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `processings`
--

CREATE TABLE `processings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_id` int(11) NOT NULL,
  `client_address` varchar(255) NOT NULL,
  `order_details` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `payment_method` varchar(100) NOT NULL,
  `payment_status` varchar(25) NOT NULL,
  `stripe_checkout_session_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Eliminarea datelor din tabel `processings`
--

INSERT INTO `processings` (`id`, `client_name`, `client_id`, `client_address`, `order_details`, `amount`, `currency`, `created_at`, `updated_at`, `payment_method`, `payment_status`, `stripe_checkout_session_id`) VALUES
(47, 'Lado Jurcsik', 6, '{\"line1\":\"Strada Universitatii, nr. 8\",\"postal_code\":\"410001\",\"city\":\"Oradea\",\"state\":\"bihor\",\"country\":\"Romania\"}', '[{\"name\":\"Easy Bake Loose Baking & Setting Powder\",\"quantity\":2,\"price\":358}]', '716', 'RON', '2024-05-12 16:17:41', '2024-05-12 16:17:41', 'CASH', 'success', NULL),
(87, 'Hebristean Daniela', 1, '{\"line1\":\"Strada Universitatii, nr. 8\",\"postal_code\":\"410001\",\"city\":\"Oradea\",\"state\":\"Bihor\",\"country\":\"Romania\"}', '[{\"name\":\"Quis iusto sit eos.\",\"quantity\":1,\"price\":525},{\"name\":\"Easy Bake Loose Baking & Setting Powder\",\"quantity\":2,\"price\":358}]', '1241', 'RON', '2024-05-14 12:25:48', '2024-05-14 12:25:52', 'CARD', 'pending', 'cs_test_b12PkWtPgRJpAQsohlQyvPkPgEDuGSDH0yG7N0jBf2neZleCTpqkfIHIiV'),
(91, 'Ana Maria', 7, '{\"line1\":\"Comuna Pope\\u0219ti, sat Varviz, strada principal\\u0103, nr 45\",\"postal_code\":\"417394\",\"city\":\"Varviz\",\"state\":\"Bihor\",\"country\":\"Romania\"}', '[{\"name\":\"Fond de Ten\",\"quantity\":1,\"price\":525},{\"name\":\"Paleta Nude\",\"quantity\":1,\"price\":216},{\"name\":\"Ruj Tarte Gloss\",\"quantity\":1,\"price\":496}]', '1237', 'RON', '2024-05-16 22:03:07', '2024-05-16 22:05:20', 'CARD', 'success - card', 'cs_test_b1y24bWw1Poa1cqb42FUEiK8easWFMRDgBjaYqZ0PWYB0EhRwxwf5LuQi8'),
(92, 'Teodora Hebriștean', 8, '{\"line1\":\"Comuna Pope\\u0219ti, sat Varviz, strada principal\\u0103, nr 45\",\"postal_code\":\"417394\",\"city\":\"Varviz\",\"state\":\"Bihor\",\"country\":\"Romania\"}', '[{\"name\":\"Ruj Milani\",\"quantity\":1,\"price\":96},{\"name\":\"Fond de Ten\",\"quantity\":1,\"price\":525},{\"name\":\"Paleta Conturare\",\"quantity\":1,\"price\":642}]', '1263', 'RON', '2024-05-17 04:57:48', '2024-05-17 04:57:48', 'CASH', 'success', NULL),
(99, 'Teo Hebri', 6, '{\"line1\":\"Comuna Pope\\u0219ti, sat Varviz, strada principal\\u0103, nr 45\",\"postal_code\":\"417394\",\"city\":\"Varviz\",\"state\":\"Bihor\",\"country\":\"Romania\"}', '[{\"name\":\"Pudra setare HudaBeauty\",\"quantity\":2,\"price\":100},{\"name\":\"Pudra setare HudaBeauty\",\"quantity\":1,\"price\":224},{\"name\":\"Pudra setare HudaBeauty\",\"quantity\":1,\"price\":181}]', '605', 'RON', '2024-06-19 20:48:13', '2024-06-19 20:48:13', 'CASH', 'success', NULL),
(100, 'Ladislauuu Jurcsik', 6, '{\"line1\":\"Strada Universitatii, nr. 8\",\"postal_code\":\"410001\",\"city\":\"Oradea\",\"state\":\"bihor\",\"country\":\"Romania\"}', '[{\"name\":\"Pudra setare HudaBeauty\",\"quantity\":2,\"price\":200},{\"name\":\"Pudra setare HudaBeauty\",\"quantity\":1,\"price\":100}]', '500', 'RON', '2024-06-19 20:48:57', '2024-06-19 20:49:05', 'CARD', 'success - card', 'cs_test_b1kmtujVpkW1MtRsj4VEiZEoOScKu5hyyghbZxJ2xUXxXGjZyQbOtvSlaf'),
(101, 'Ladislauuu Jurcsik', 6, '{\"line1\":\"Strada Universitatii, nr. 8\",\"postal_code\":\"410001\",\"city\":\"Oradea\",\"state\":\"bihor\",\"country\":\"Romania\"}', '[{\"name\":\"Pudra setare HudaBeauty\",\"quantity\":2,\"price\":200},{\"name\":\"Pudra setare HudaBeauty\",\"quantity\":1,\"price\":100}]', '500', 'RON', '2024-06-19 20:49:06', '2024-06-19 20:49:07', 'CARD', 'success - card', 'cs_test_b1QH7clLVR64EOFEbs7y6fOHwPh1ksv2cRGDMz7teC4jyPN5rlEXLGRXZX'),
(102, 'Hebristean Daniela', 6, '{\"line1\":\"Strada Universitatii, nr. 8\",\"postal_code\":\"410001\",\"city\":\"Oradea\",\"state\":\"Bihor\",\"country\":\"Romania\"}', '[{\"name\":\"Pudra setare HudaBeauty\",\"quantity\":2,\"price\":200},{\"name\":\"Pudra setare HudaBeauty\",\"quantity\":1,\"price\":100},{\"name\":\"Pudra setare HudaBeauty\",\"quantity\":1,\"price\":638}]', '1138', 'RON', '2024-06-19 20:51:09', '2024-06-19 20:51:10', 'CARD', 'success - card', 'cs_test_b12EDBNZ1eWtKn0I883Ke1XhxtknZ3wnsuTY930Okygf5k2uudD02azR9L'),
(103, 'Giorgiana Hebriștean', 6, '{\"line1\":\"Comuna Pope\\u0219ti, sat Varviz, strada principal\\u0103, nr 45\",\"postal_code\":\"417394\",\"city\":\"Varviz\",\"state\":\"Bihor\",\"country\":\"Romania\"}', '[{\"name\":\"Pudra setare HudaBeauty\",\"quantity\":2,\"price\":200},{\"name\":\"Fond de Ten\",\"quantity\":1,\"price\":100},{\"name\":\"Set buretel si suport\",\"quantity\":1,\"price\":638}]', '1138', 'RON', '2024-06-19 20:58:34', '2024-06-19 20:58:36', 'CARD', 'success - card', 'cs_test_b1aVodxFPR4PKefqkxBxIKQpUCZfEtQw1Q9ZbeREdVouNQZtlJtRNYLmVd'),
(104, 'Giorgiana Hebriștean', 6, '{\"line1\":\"Comuna Pope\\u0219ti, sat Varviz, strada principal\\u0103, nr 45\",\"postal_code\":\"417394\",\"city\":\"Varviz\",\"state\":\"Bihor\",\"country\":\"Romania\"}', '[{\"name\":\"Pudra setare HudaBeauty\",\"quantity\":2,\"price\":200},{\"name\":\"Fond de Ten\",\"quantity\":1,\"price\":100},{\"name\":\"Set buretel si suport\",\"quantity\":1,\"price\":638}]', '1138', 'RON', '2024-06-20 12:33:30', '2024-06-20 12:33:33', 'CARD', 'success - card', 'cs_test_b135CMytYwH87X5h2iBAqPLy0XUQd1EOiAqJ7v7xMxyK1f8DRGjUVcIBLD'),
(105, 'Hebristean Dana', 6, '{\"line1\":\"Strada Universitatii, nr. 8\",\"postal_code\":\"410001\",\"city\":\"Oradea\",\"state\":\"Bihor\",\"country\":\"Romania\"}', '[{\"name\":\"Pudra setare HudaBeauty\",\"quantity\":1,\"price\":200}]', '200', 'RON', '2024-06-20 12:35:28', '2024-06-30 12:16:29', 'CARD', 'success', 'cs_test_a16a5buN7OkXYj1eWSl3Bs8KlRYXbjTKV2d9XhFxnOxxIXGHXMJkNAGGPo');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `sale_price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `CATEGID` int(11) DEFAULT NULL,
  `delete_flag` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Eliminarea datelor din tabel `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `description`, `image_name`, `price`, `sale_price`, `created_at`, `updated_at`, `CATEGID`, `delete_flag`) VALUES
(1, 'Pudra setare HudaBeauty', 'pudra-de-setare-Huda', 'Pudra de setare matifiază și fixează machiajul pentru un aspect proaspăt și de durată.', 'https://i.postimg.cc/Kvr7JBy8/Powder.webp', '250', '200', '2024-02-29 11:16:31', '2024-06-30 11:01:57', 1, 0),
(2, 'Fond de ten', 'fond-de-ten', 'Fondul de ten oferă acoperire uniformă, lăsând pielea cu un aspect natural toată ziua.', 'https://i.postimg.cc/9f23fPMZ/fondTen.webp', '80', '60', '2024-02-29 11:16:31', '2024-02-29 11:16:31', 1, 0),
(3, 'Paleta conturare', 'paleta-de-contur', 'Paleta de contur definește și sculptează trăsăturile feței, oferind un aspect natural.', 'https://i.postimg.cc/XvkRBZGh/paleta-Conturare.webp', '155', '120', '2024-02-29 11:16:31', '2024-02-29 11:16:31', 1, 0),
(4, 'Paleta corectoare', 'paleta-corectoare', 'Paleta corector uniformizează și corectează nuanțele pielii pentru un ten impecabil și luminos.', 'https://i.postimg.cc/gJcfVY30/paleta-Corectoare.webp', '100', '70', '2024-02-29 11:16:31', '2024-02-29 11:16:31', 1, 0),
(5, 'Spray fixare machiaj', 'spray-fixare', 'Spray-ul fixator stabilizează machiajul pentru o rezistență îndelungată și un aspect proaspăt.', 'https://i.postimg.cc/63HFzDhf/spray-Fixator.webp', '54', '43', '2024-02-29 11:16:31', '2024-02-29 11:16:31', 1, 0),
(6, 'Ruj Milani', 'ruj-milani', 'Rujul nude adaugă o notă subtilă de culoare buzelor, cu o nuanță naturală și elegantă.', 'https://i.postimg.cc/K8DbBpCJ/ruj.webp', '78', '58', '2024-02-29 11:16:31', '2024-02-29 11:16:31', 2, 0),
(7, 'Ruj Rare Beauty', 'ruj-rare-beauty', 'Rujul roz are o nuanță delicată și proaspătă, ideală pentru un aspect plin de prospețime.', 'https://i.postimg.cc/BZRRvdNd/ruj-Rare-Beauty.webp', '140', '120', '2024-02-29 11:16:31', '2024-02-29 11:16:31', 2, 0),
(8, 'Ruj roșu Rare Beauty', 'ruj-roșu', 'Rujul roșu intensifică buzele cu o nuanță vibrantă și seducătoare, completează machiajul.', 'https://i.postimg.cc/VLYnXN7M/Ruj-Rosu-Rare-Beauty.webp', '150', '115', '2024-02-29 11:16:31', '2024-02-29 11:16:31', 2, 0),
(9, 'Ruj Tarte Gloss', 'ruj-gloss', 'Rujul gloss nude conferă buzelor un aspect lucios și hidratat, subliniind frumusețea naturală.', 'https://i.postimg.cc/RCGN5LR6/RujTarte.webp', '150', '130', '2024-02-29 11:16:31', '2024-02-29 11:16:31', 2, 0),
(10, 'Creion de buze', 'creion-de-buze', 'Creionul de buze definește și conturează perfect conturul buzelor cu un finisaj impecabil.', 'https://i.postimg.cc/nhQWW5rz/Creion-Buze.webp', '30', '22', '2024-02-29 11:16:31', '2024-02-29 11:16:31', 2, 0),
(11, 'Set gene banda', 'gene-banda', 'Gene bandă pentru un aspect dramatic și elegant, evidențiind frumusețea naturală a ochilor.', 'https://i.postimg.cc/YS6srW1B/setGene.webp', '137', '133', '2024-02-29 11:16:31', '2024-02-29 11:16:31', 3, 0),
(12, 'Gene smocuri', 'gene-smocuri', 'Genele smocuri adaugă volum și definire privirii, accentuând ochii pentru un efect seducător.', 'https://i.postimg.cc/x8Cx3pB9/gene-Smocuri.webp', '30', '22', '2024-02-29 11:16:31', '2024-02-29 11:16:31', 3, 0),
(13, 'Adeziv gene', 'adeziv-gene', 'Adezivul pentru gene asigură o fixare sigură și de lungă durată, look impecabil fără griji.', 'https://i.postimg.cc/wMGWfcdL/Adeziv-Gene.webp', '58', '48', '2024-02-29 11:16:31', '2024-02-29 11:16:31', 3, 0),
(14, 'Gene bandă', 'gene-banda', 'Genele bandă oferă un volum dramatic și o definire perfectă, aspect elegant.', 'https://i.postimg.cc/FFWnHmJz/gene-Banda.webp', '30', '25', '2024-02-29 11:16:31', '2024-02-29 11:16:31', 3, 0),
(15, 'Gene cu volum', 'gene-cu-volum', 'Genele banda cu mega volum oferă o privire dramatică și intensă, cu efect wow instant.', 'https://i.postimg.cc/rpkfPw7n/Gene-Volum.webp', '33', '31', '2024-02-29 11:16:31', '2024-02-29 11:16:31', 3, 0),
(16, 'Ondulator de gene', 'ondulator-de-gene', 'Ondulatorul de gene creează curbă naturală și definire pentru gene frumoase și conturate.', 'https://i.postimg.cc/43s11Fhj/Ondulator-Gene.webp', '60', '55', '2024-02-29 11:16:31', '2024-02-29 11:16:31', 4, 0),
(17, 'Set burețel și suport', 'set-buretel-si-suport', 'Setul burete și suport este ideal pentru aplicarea uniformă a machiajului.', 'https://i.postimg.cc/QtMk29mb/set-Burete.webp', '30', '25', '2024-02-29 11:16:31', '2024-02-29 11:16:31', 4, 0),
(18, 'Set periuțe ', 'set-periute', 'Periuțele sunt instrumentele perfecte pentru aplicarea precisă și uniformă a machiajului.', 'https://i.postimg.cc/MZNbLGQ7/Set-Periute.webp', '15', '10', '2024-02-29 11:16:31', '2024-02-29 11:16:31', 4, 0),
(19, 'Set plase pentru pensule', 'set-plase-pensule', 'Organizează și protejează pensulele cu aceste plase, ideal pentru depozitare și transport.', 'https://i.postimg.cc/JndcMrdW/SetPlase.webp', '10', '7', '2024-02-29 11:16:31', '2024-02-29 11:16:31', 4, 0),
(20, 'Oglindă cosmetică', 'oglinda-cosmetica', 'Oglindă cosmetică ideală pentru machiaj precis, cu imagine clară și luminată.', 'https://i.postimg.cc/rwLG8Ygz/Oglinda.webp', '50', '40', '2024-02-29 11:16:31', '2024-02-29 11:16:31', 4, 0),
(21, 'Paleta Nude', 'paleta-nude', 'Paleta nude de farduri oferă nuanțe naturale, perfecte pentru machiajul zilnic și elegant.', 'https://i.postimg.cc/nVDbJFZy/paleta-Nude.webp', '266', '216', '2024-02-29 11:16:31', '2024-02-29 11:16:31', 5, 0),
(22, 'Rimel', 'rimel', 'Rimelul oferă volum și alungire genelor, pentru un aspect dramatic și definit întreaga zi.', 'https://i.postimg.cc/W3SVqSWQ/Creion-Ochi.webp', '180', '120', '2024-02-29 11:16:31', '2024-02-29 11:16:31', 5, 0),
(23, 'Set creioane ochi', 'set-creioane-ochi', 'Creioane cu diverse culori și texturi, asigurând aplicarea precisă și durata îndelungată.', 'https://i.postimg.cc/TwnL88Pn/set-Creioane.webp', '200', '160', '2024-02-29 11:16:31', '2024-02-29 11:16:31', 5, 0),
(24, 'Kit sprâncene', 'kit-sprancene', 'Echipament complet pentru definirea sprâncenelor, pentru un aspect impecabil și natural.', 'https://i.postimg.cc/GmY1xbgP/kit-Sprancene.webp', '150', '130', '2024-02-29 11:16:31', '2024-02-29 11:16:31', 5, 0),
(25, 'Paleta colorată', 'paleta-colorata', 'Paleta colorată de farduri oferă nuanțe vibrante, ideale pentru machiaje creative și îndrăznețe.', 'https://i.postimg.cc/Y0mFC48L/Paleta-Ochi.webp', '278', '228', '2024-02-29 11:16:31', '2024-02-29 11:16:31', 5, 0);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `sales`
--

CREATE TABLE `sales` (
  `id` int(30) NOT NULL,
  `processing_id` int(30) NOT NULL,
  `amount` double NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `sales`
--

INSERT INTO `sales` (`id`, `processing_id`, `amount`, `date_created`) VALUES
(1, 47, 716, '2024-05-17 19:17:06'),
(2, 48, 716, '2024-05-17 19:17:06'),
(3, 93, 1432, '2024-05-17 19:17:06');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `tblcategory`
--

CREATE TABLE `tblcategory` (
  `CATEGID` int(11) NOT NULL,
  `CATEGORIES` varchar(255) NOT NULL,
  `USERID` int(11) NOT NULL,
  `delete_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Eliminarea datelor din tabel `tblcategory`
--

INSERT INTO `tblcategory` (`CATEGID`, `CATEGORIES`, `USERID`, `delete_flag`) VALUES
(1, 'Ten', 0, 0),
(2, 'Buze', 0, 0),
(3, 'Gene', 0, 0),
(4, 'Accesorii', 0, 0),
(5, 'Ochi', 0, 0);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Hebristean Daniela', 'hebristean.danielagiorgianateodora@student.uoradea.ro', NULL, '$2y$12$CtdZsFu8Vvu91SyG37.UoOO7WOID2Qgw0/jIthf7yYkVvK92cBaEW', 'iKh3RtZDVxADWZ3Hs3rCUHBAcHNgtkTdqRLEqgPu0OrPidMGb4ls65r1nxEX', '2024-02-29 12:07:32', '2024-06-30 13:14:55', 'client'),
(2, 'Teodora Hebristean', 'teo.hebri@gmail.com', NULL, '$2y$12$6VbLQS6AXGDB7UvkW1Bv7uI/ntb.gx9stv7qClOYaEc3e.JkMQoiq', NULL, '2024-03-05 14:59:27', '2024-03-05 14:59:27', 'client'),
(3, 'Hebristean Dan', 'dan.hebri@gmai.com', NULL, '$2y$12$4wjzjN0F4Cxc1LduG4q3PO0MoVpMyhYic3zRX3pKtsLGK1pViAt32', NULL, '2024-03-06 11:51:53', '2024-03-06 11:51:53', 'client'),
(4, 'Jurcsik', 'jurcsik07@gmail.com', NULL, '$2y$12$RNq.4w19FEjIFvnP03sC5.zkRRnJh6gKOrT8jTvLZ62dwH9fjmvcG', NULL, '2024-03-08 09:03:08', '2024-03-08 09:03:08', 'client'),
(5, 'steficza bianca', 'steficzabianca16@gmail.com', NULL, '$2y$12$dIfSP7zYskNhTjl3zXwtduQ14n3wqbh.LnAtcpRszAU.HVcHSmNia', NULL, '2024-04-23 14:39:59', '2024-04-23 14:39:59', 'client'),
(6, 'Hebriștean Daniela', 'daniela.hebristean22@gmail.com', NULL, '$2y$12$JdXnrE0/gR5opRGn4uspt.2FP5Bw4PcGRIZqulO2jq9KXz1kAWF9G', 'nFhU5d2GZGFHurUTqYHS5vZx86JKOQZBQWgRaIwYvKrjJ8OdS0IcQ6DtvZOu', '2024-04-23 15:17:38', '2024-06-30 15:36:56', 'admin'),
(7, 'Ana Maria', 'anamaria@gmail.com', NULL, '$2y$12$qOqj6oFooqXu07xSPBAdpOhjK1hQuxbKniI0yaoDd1uQ4jEfOG6Ta', 'yOZK2GDm4I33B2B2uKM6mkc8Ipb00fLSrMuIKQTq2RZmH4PEC8TTmNb2Jh2V', '2024-05-16 22:02:00', '2024-05-16 22:08:10', 'client'),
(8, 'Ioana', 'ioana1234@gmail.com', NULL, '$2y$12$wLt0AV/XcZ7U8CWKOVJgr.I9k3F.x4atfGb8F0W0dngznPyQgCONO', NULL, '2024-05-17 04:53:08', '2024-05-17 04:53:08', 'client');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexuri pentru tabele `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexuri pentru tabele `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inventory_id` (`inventory_id`) USING BTREE,
  ADD KEY `processings_id` (`processing_id`) USING BTREE;

--
-- Indexuri pentru tabele `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexuri pentru tabele `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexuri pentru tabele `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexuri pentru tabele `processings`
--
ALTER TABLE `processings`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CATEGID` (`CATEGID`);

--
-- Indexuri pentru tabele `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `processing_id` (`processing_id`);

--
-- Indexuri pentru tabele `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`CATEGID`);

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT pentru tabele `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pentru tabele `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pentru tabele `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pentru tabele `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pentru tabele `processings`
--
ALTER TABLE `processings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT pentru tabele `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pentru tabele `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `CATEGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pentru tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constrângeri pentru tabele eliminate
--

--
-- Constrângeri pentru tabele `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constrângeri pentru tabele `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constrângeri pentru tabele `order_list`
--
ALTER TABLE `order_list`
  ADD CONSTRAINT `order_list_ibfk_1` FOREIGN KEY (`processing_id`) REFERENCES `processings` (`id`) ON DELETE CASCADE;

--
-- Constrângeri pentru tabele `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`CATEGID`) REFERENCES `tblcategory` (`CATEGID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
