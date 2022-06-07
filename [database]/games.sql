-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 02:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `games`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `genre_id` bigint(20) UNSIGNED NOT NULL,
  `studio_id` bigint(20) UNSIGNED NOT NULL,
  `platform_id` bigint(20) UNSIGNED NOT NULL,
  `game_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `genre_id`, `studio_id`, `platform_id`, `game_name`, `game_description`, `image`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 1, 'Battlefield 2042', '<p>Battlefield™ 2042 is a first-person shooter that marks the return to the iconic all-out warfare of the franchise. In a near-future world transformed by disorder, adapt and overcome dynamically-changing battlegrounds with the help of your squad and a cutting-edge arsenal.<br>&nbsp;<br>With support for 128 players, Battlefield™ 2042 brings unprecedented scale on vast battlegrounds. Players will take on several experiences comprising elevated versions of Conquest and Breakthrough, Battlefield™ Portal; a new community-driven platform where players can create, share and discover unexpected battles from Battlefield’s iconic past, present and future, and Battlefield™ Hazard Zone; a tense, squad-focused survival experience where every bullet, every skirmish, and every decision counts.</p>', 'oTelw9kbaSezkXqSUocCvkndItjt9ISkfkEu2gD0.jpg', '2022-06-06 16:12:23', '2022-06-06 16:12:23'),
(2, 6, 2, 1, 'Need for Speed Heat', '<p>From wild colors to racing stripes to tons of high-performance options, you’ll have everything you need to trick out and tweak your car to match your driving style.. A thrilling race experience that pits you against a city’s rogue police force as you battle your way into street racing’s elite.<br><br></p>', 'gxnbVGfiJ1mz4aff3bM6sHzFhfolj3tNwBlqvHuZ.jpg', '2022-06-06 16:13:08', '2022-06-06 16:26:42'),
(3, 5, 3, 1, 'STAR WARS Jedi: Fallen Order', '<p>While mastering your abilities, players will engage in cinematically-charged lightsaber and Force combat designed to deliver the kind of intense <em>Star Wars</em> lightsaber battles as seen in 5.the films. Players will need to approach enemies strategically, sizing up strengths and weaknesses while cleverly utilizing your Jedi training to overcome your opponents and solve the mysteries that lay in your path. <br>A galaxy-spanning adventure awaits in <em>Star Wars</em> Jedi: Fallen Order™, a new third-person action-adventure title from Respawn Entertainment. This narratively-driven, single-player game puts you in the role of a Jedi Padawan who narrowly escaped the purge of Order 66 following the events of <em>Episode 3: Revenge of the Sith</em>. On a quest to rebuild the Jedi Order, you must pick up the pieces of your shattered past to complete your training, develop new powerful Force abilities and master the art of the iconic lightsaber – all while staying one step ahead of the Empire and its deadly Inquisitors.<br><br></p>', 'Eq7HcL8LPxvOfVrHwDnRmc5pS2Vd8mT01yACSo90.jpg', '2022-06-06 16:13:42', '2022-06-06 16:27:18'),
(4, 2, 4, 1, 'FIFA 22', '<p>EA SPORTS™ FIFA 22 brings the game even closer to the real thing with fundamental gameplay advances and a new season of innovation across every mode.<br>&nbsp;<br>New gameplay features in FIFA 22 give you more consistency between the posts with a goalkeeper rewrite that brings more composure to the most important position on the pitch, alongside new ball physics, explosive sprint that better matches the acceleration of the game’s quickest players, and new attacking tactics that let you take control of how your team plays. In Career Mode, live out your football dreams as you create and manage the game’s newest club to glory. VOLTA FOOTBALL rewards you for your flair with restyled small-sided gameplay and new ways to play and progress each season. Get the squad together in Pro Clubs with enhanced team customisation and updated progression that puts you in control of your Virtual Pro’s development, and welcome back some of football’s most memorable players as new FUT Heroes in FIFA Ultimate Team™ with a redefined competition structure that makes testing your skills against other players more accessible. However you play, enjoy unrivaled authenticity everywhere with over 17,000 players, 700+ teams, and more than 30 leagues including the UEFA Champions League, CONMEBOL Libertadores, and the brand new UEFA Europa Conference League - only available in FIFA 22.</p>', 'uc8Pl4tDevey7DDpVl4GzTnIYaZVApWVcfBTQwvl.jpg', '2022-06-06 16:14:21', '2022-06-06 16:14:21'),
(5, 1, 5, 1, 'A Way Out', '<p>From the creators of Brothers – A Tale of Two Sons comes A Way Out, an exclusively co-op adventure where you play the role of one of two prisoners making their daring escape from prison.<br>What begins as a thrilling breakout quickly turns into an unpredictable, emotional adventure unlike anything seen or played before.<br>A Way Out is an experience that must be played with two players. Each player controls one of the main characters, Leo and Vincent, in a reluctant alliance to break out of prison and gain their freedom.</p>', '2epmCGRm3ZvMVVnOakarqcgefg7PJFo2tQE64LQs.jpg', '2022-06-06 16:15:00', '2022-06-06 16:15:00'),
(6, 4, 5, 1, 'Endless Legend', '<p>Endless Legend is a 4X turn-based fantasy strategy game by the creators of Endless Space and Dungeon of the Endless. Control every aspect of your civilization as you struggle to save your homeworld Auriga.</p>', 'nbba7OfXTGahRHWDUByKQglnqPy50MTSqCB7pc6I.jpg', '2022-06-06 16:15:31', '2022-06-06 16:15:31'),
(7, 3, 3, 1, 'Apex Legends', '<p>Conquer with character in Apex Legends, a free-to-play* Hero shooter where legendary characters with powerful abilities team up to battle for fame &amp; fortune on the fringes of the Frontier.<br>&nbsp;<br>Master an ever-growing roster of diverse Legends, deep-tactical squad play and bold, new innovations that go beyond the Battle Royale experience — all within a rugged world where anything goes. Welcome to the next evolution of Hero Shooter.</p>', 'aldahg7WkfiKXKyO9IFVdRzm0tjWKC0SG5x2VWwV.jpg', '2022-06-06 16:16:18', '2022-06-06 16:16:18'),
(8, 4, 6, 1, 'Frostpunk', '<p>Frostpunk, the newest title from the creators of This War of Mine, is a society survival game where heat means life and every decision comes at a price. In an entirely frozen world, people develop steam-powered technology to oppose the overwhelming cold. You face the task of building the last city on Earth and securing the means necessary for your community to survive.<br>&nbsp;<br>&nbsp;Optimization and resource management often clash with empathy and thoughtful decision-making. While city and society management will consume most of the ruler’s time, at some point exploration of the outside world is necessary to understand its history and present state.&nbsp;</p>', 'fw1OsUEU9dwDwiMX4yOEaEMjpRNagtxwDYgRA8WG.jpg', '2022-06-06 16:16:55', '2022-06-06 16:16:55'),
(9, 1, 7, 1, 'It Takes Two', '<p>Embark on the craziest journey of your life in It Takes Two, a genre-bending platform adventure created purely for co-op. Invite a friend to join for free with Friend’s Pass* and work together across a huge variety of gleefully disruptive gameplay challenges. Play as the clashing couple Cody and May, two humans turned into dolls by a magic spell. Together, trapped in a fantastical world where the unpredictable hides around every corner, they are reluctantly challenged with saving their fractured relationship.<br>&nbsp;<br>&nbsp;Master unique and connected character abilities in every new level. Help each other across an abundance of unexpected obstacles and laugh-out-loud moments. Kick gangster squirrels’ furry tails, pilot a pair of underpants, DJ a buzzing night club and bobsleigh through a magical snow globe. Embrace a heartfelt and hilarious story where narrative and gameplay are interwoven in a uniquely metaphorical experience.<br>&nbsp;<br>&nbsp;It Takes Two is developed by the award-winning studio Hazelight, the industry leader of cooperative play. They’re about to take you on a wild and wondrous ride where only one thing is for certain: we’re better together.</p>', 'Aemm2b4Hcrwbdk6m8o800lnczs5142fQ1mZFvWI5.jpg', '2022-06-06 16:18:05', '2022-06-06 16:18:05'),
(10, 2, 8, 1, 'F1 22', '<p>Enter the new era of Formula 1® in EA SPORTS™ F1® 22, the official video game of the 2022 FIA Formula One World Championship™. Take your seat for a new season as redesigned cars and overhauled rules redefine race day, test your skills around the new Miami International Autodrome, and get a taste of the glitz and glamour in F1® Life.<br>&nbsp;<br>&nbsp;Race the stunning, new cars of the Formula 1® 2022 season with the authentic lineup of all 20 drivers and 10 teams, and take control of your race experience with new immersive or broadcast race sequences. Create a team and take them to the front of the grid with new depth in the acclaimed My Team career mode, race head-to-head in split-screen, Two-Player Career or in multiplayer, or change the pace by taking supercars from some of the sport’s biggest names to the track in our all-new Pirelli Hot Laps feature.</p>', 'qx72V7qGwODOj5mImWkh4xz2yHbh8pYPn23SmAed.jpg', '2022-06-06 16:18:42', '2022-06-06 16:18:42'),
(11, 5, 9, 1, 'Anthem', '<p>Unleash Your Power. In a world left unfinished by the gods, a shadowy faction threatens all humankind. Only you stand between the Dominion and the ancient power they covet. Team up as heroes in this cooperative action-RPG from BioWare™ and EA.</p>', 'nbgCHdSJ4oHrVKj25Ac4NuxbXeHnV9e6dp8W2Uis.jpg', '2022-06-06 16:19:28', '2022-06-06 16:19:28'),
(12, 5, 9, 1, 'Mass Effect Legendary Edition', '<p>One person is all that stands between humanity and the greatest threat it’s ever faced. Relive the legend of Commander Shepard in the highly acclaimed Mass Effect trilogy with the Mass Effect™ Legendary Edition. Includes single-player base content and over 40 DLC from Mass Effect, Mass Effect 2 and Mass Effect 3 games, including promo weapons, armors and packs — remastered and optimized for 4K Ultra HD.<br>&nbsp;<br>Experience an amazingly rich and detailed universe where your decisions have profound consequences on the action and the outcome.</p>', 'dsebqs0YWeaqUM1NyD7c6ZH9kxZNDkgKSjAa7wdd.jpg', '2022-06-06 16:20:07', '2022-06-06 16:20:07'),
(13, 1, 10, 1, 'Sea of Solitude', '<p>Sea of Solitude takes you on a personal journey of a young woman’s loneliness. Set sail across a beautiful and evolving world, where nothing is quite what it seems. Meet fantastical creatures and monsters, learn their stories, and solve challenges. Explore a flooded city, either by boat, on foot, or by swimming through the water itself. Dare to look what lies beneath the surface, in a haunting struggle of darkness and light, and discover what it truly means to be human.</p>', '6olhlxk2s2fZLketL0w1iMyKzRT8GvHm99p9LoJM.jpg', '2022-06-06 16:20:43', '2022-06-06 16:20:43'),
(14, 6, 2, 1, 'Need for Speed Payback', '<p>Need for Speed™, one of the world’s bestselling video game franchises returns with a vengeance in the new Need for Speed Payback.<br>&nbsp;Set in the underworld of Fortune Valley, you and your crew were divided by betrayal and reunited by revenge to take down The House, a nefarious cartel that rules the city’s casinos, criminals and cops. In this corrupt gambler’s paradise, the stakes are high and The House always wins.<br>Craft unique rides with deeper performance and visual customization than ever before. Push them to the limit when you narrowly escape the heat in epic cop battles. From insane heist missions to devastating car battles to jaw-dropping set piece moments, Need for Speed Payback delivers an edge-of-your-seat, adrenaline-fueled action-driving fantasy.</p>', 'jIWMu6sxKiHVxRiZp8lFSQT1prSTUUmsVqV1NDXJ.jpg', '2022-06-06 16:29:35', '2022-06-06 16:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `genre_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `genre_name`, `created_at`, `updated_at`) VALUES
(1, 'Adventure', '2022-06-06 16:07:11', '2022-06-06 16:07:11'),
(2, 'Sports', '2022-06-06 16:07:19', '2022-06-06 16:07:19'),
(3, 'Shooter', '2022-06-06 16:07:35', '2022-06-06 16:07:35'),
(4, 'Strategy', '2022-06-06 16:07:41', '2022-06-06 16:07:41'),
(5, 'Action', '2022-06-06 16:07:57', '2022-06-06 16:07:57'),
(6, 'Racing', '2022-06-06 16:08:03', '2022-06-06 16:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_05_091257_create_games_table', 1),
(6, '2022_05_08_165233_create_genres_table', 1),
(7, '2022_05_12_104258_create_studios_table', 1),
(8, '2022_05_12_104356_create_platforms_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `platforms`
--

CREATE TABLE `platforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `platform_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `platforms`
--

INSERT INTO `platforms` (`id`, `platform_name`, `created_at`, `updated_at`) VALUES
(1, 'PC', '2022-06-06 16:08:50', '2022-06-06 16:08:50'),
(2, 'Mobile', '2022-06-06 16:09:16', '2022-06-06 16:09:16'),
(3, 'Console', '2022-06-06 16:09:31', '2022-06-06 16:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `studios`
--

CREATE TABLE `studios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `studio_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studios`
--

INSERT INTO `studios` (`id`, `studio_name`, `created_at`, `updated_at`) VALUES
(1, 'Dice', '2022-06-06 16:08:31', '2022-06-06 16:08:31'),
(2, 'Ghost Games', '2022-06-06 16:09:50', '2022-06-06 16:09:50'),
(3, 'Respawn Entertainment', '2022-06-06 16:09:57', '2022-06-06 16:09:57'),
(4, 'EA', '2022-06-06 16:10:04', '2022-06-06 16:10:04'),
(5, 'Amplitude Studios', '2022-06-06 16:10:11', '2022-06-06 16:10:11'),
(6, '11 bit studios', '2022-06-06 16:10:25', '2022-06-06 16:10:25'),
(7, 'Hazelight', '2022-06-06 16:10:35', '2022-06-06 16:10:35'),
(8, 'Codemasters', '2022-06-06 16:10:43', '2022-06-06 16:10:43'),
(9, 'BioWare', '2022-06-06 16:10:51', '2022-06-06 16:10:51'),
(10, 'Jo-Mei Games', '2022-06-06 16:11:00', '2022-06-06 16:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user', '$2y$10$U8/N/Q43tm/kIX/anpxtSeUzTE7CPL9TTTJWGTxYogoruAU/3CLn6', NULL, '2022-06-06 16:06:03', '2022-06-06 16:06:03'),
(2, 'Maulana', 'maulana', '$2y$10$C3jrWWEW4xGT499zCaoIkOICrvt2GdGWC/V.soYMiYbMCbrgkCkGS', NULL, '2022-06-06 16:06:18', '2022-06-06 16:06:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `platforms`
--
ALTER TABLE `platforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studios`
--
ALTER TABLE `studios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `platforms`
--
ALTER TABLE `platforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studios`
--
ALTER TABLE `studios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
