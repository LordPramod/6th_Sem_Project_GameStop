-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 19, 2024 at 07:22 AM
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
-- Database: `gamestop`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkout_detail`
--

CREATE TABLE `checkout_detail` (
  `cid` int NOT NULL,
  `Uid` int NOT NULL,
  `Cname` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Cemail` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Cphone` bigint DEFAULT NULL,
  `Ccity` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Caddress` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout_detail`
--

INSERT INTO `checkout_detail` (`cid`, `Uid`, `Cname`, `Cemail`, `Cphone`, `Ccity`, `Caddress`) VALUES
(1, 4, 'PRAMOD THAPA', 'thapapramod821@gmail.com', 9800000000, 'lalitpur', 'Nepal'),
(2, 7, 'Lord Pramod', 'test@gmail.com', 9884113427, 'Kathmadu', 'Dhapasi,Kathmandu'),
(3, 8, 'Pramod Thapa', 'thapapramod821@gmail.com', 9884113427, 'Kathmadu', 'Dhapasi,Kathmandu'),
(4, 9, 'Pramod Thapa', 'thapapramod821@gmail.com', 9884113427, 'Kathmadu', 'Dhapasi,Kathmandu'),
(5, 11, 'PRAMOD THAPA', 'thapapramod821@gmail.com', 9861818292, 'Lalitpur,Bagmati', 'Lalitpur,Luboo,Mahalaxmi-8');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `user_id` int NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `quantity` int NOT NULL,
  `total` int NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `purchase_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `product_id` int DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_name`, `quantity`, `total`, `order_status`, `payment_method`, `email`, `city`, `address`, `product_image`, `purchase_date`, `product_id`) VALUES
(1, 4, 'Google Gift Card 10', 1, 1350, 'Completed', 'Esewa', 'thapapramod821@gmail.com', 'lalitpur', 'Nepal', 'google_10$.jpg', '0000-00-00 00:00:00', 1),
(2, 4, 'Google Gift Card 10', 1, 1350, 'pending', 'Esewa', 'thapapramod821@gmail.com', 'lalitpur', 'Nepal', 'google_10$.jpg', '0000-00-00 00:00:00', 1),
(3, 4, 'Google Gift Card 10', 1, 1350, 'pending', 'Esewa', 'thapapramod821@gmail.com', 'lalitpur', 'Nepal', 'google_10$.jpg', '0000-00-00 00:00:00', 1),
(4, 4, 'Google Gift Card 10', 1, 1350, 'pending', 'Esewa', 'thapapramod821@gmail.com', 'lalitpur', 'Nepal', 'google_10$.jpg', '0000-00-00 00:00:00', 1),
(9, 7, 'PlayStation Gift Card 10$ ', 1, 1350, 'pending', 'Esewa', 'test@gmail.com', 'Kathmadu', 'Dhapasi,Kathmandu', 'PlayStation-Gift-Card_10$.jpg', '0000-00-00 00:00:00', 15),
(10, 7, 'iTunes Gift Card 5$', 1, 650, 'pending', 'Esewa', 'test@gmail.com', 'Kathmadu', 'Dhapasi,Kathmandu', 'itunes_5$.jpg', '0000-00-00 00:00:00', 7),
(11, 8, 'iTunes Gift Card 100$', 1, 14500, 'pending', 'Esewa', 'thapapramod821@gmail.com', 'Kathmadu', 'Dhapasi,Kathmandu', 'itunes_100$.jpg', '0000-00-00 00:00:00', 13),
(15, 9, 'iTunes Gift Card 5$', 5, 3250, 'pending', 'Esewa', 'thapapramod821@gmail.com', 'Kathmadu', 'Dhapasi,Kathmandu', 'itunes_5$.jpg', '0000-00-00 00:00:00', 7),
(50, 11, 'Google Gift Card 10', 1, 1350, 'pending', 'Cash On Delivery', 'thapapramod821@gmail.com', 'Lalitpur,Bagmati', 'Lalitpur,Luboo,Mahalaxmi-8', 'google_10$.jpg', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pdt_cart`
--

CREATE TABLE `pdt_cart` (
  `cart_id` int NOT NULL,
  `user_id` int NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `product_price` int DEFAULT NULL,
  `product_quantity` int DEFAULT NULL,
  `total_amount` int DEFAULT NULL,
  `pdt_id` int DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pdt_category`
--

CREATE TABLE `pdt_category` (
  `C_id` int NOT NULL,
  `pdt_category_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `product_category_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pdt_category`
--

INSERT INTO `pdt_category` (`C_id`, `pdt_category_name`, `product_category_image`) VALUES
(1, 'Google Gift Cards', 'google-gift-card-main.png'),
(2, 'iTunes Gift Cards', 'itunes_100$.jpg'),
(3, 'PlayStation Subsctiption', 'PLAYSTATION-main.jpg'),
(4, 'Free Fire Topup Login', 'free-fire.jpg'),
(5, 'Nintendo Topup', 'nintendo eShop.jpg'),
(6, 'Mobile Legends Diamonds', 'mobile-legend.jpeg'),
(7, 'Xbox Live Gift Card', 'xbox.png'),
(8, 'Steam Gift Card', 'steam-100$.png'),
(9, 'Game', 'games.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `pdt_table`
--

CREATE TABLE `pdt_table` (
  `pdt_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products_details`
--

CREATE TABLE `products_details` (
  `id` int NOT NULL,
  `pdt_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pdt_price` int DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `products_category` int DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_details`
--

INSERT INTO `products_details` (`id`, `pdt_name`, `pdt_price`, `product_image`, `products_category`, `description`) VALUES
(1, 'Google Gift Card 10', 1350, 'google_10$.jpg', 1, 'Get your Google Play Gift Card $10 (US) now! Our Google Play Gift Card (US) allows users to add credits to their Google account, enabling access to millions of apps, games, movies, books, and more available on the Google Play Store. Easily purchase the Google Play Gift Card $5 (US) through our OffGamers store, where we are an official authorized distributor.\n\nAdding funds to your Google Play balance does not require a credit card. The Google Play Gift Card (US) can be used as a gift certificate on the Google Play platform to purchase apps, games, movies, music, books, and anything else available through the Play Store. With millions of digital content options, you’ll never run out of entertainment or productivity resources.\n\nJoin the community of over 2.5 billion active users who enjoy Google Play services worldwide. Discover new content, download updates, and take advantage of special deals and offers regularly available on the platform.\n\nWhether you\'re on an Android phone, tablet, Chromebook, or even streaming on a smart TV, Google Play works seamlessly across all your devices. With Google Play Gift Cards, you can enjoy digital content wherever you are, whenever you want.'),
(2, 'Google Gift Card 5$', 650, 'google_5$.jpg', 1, 'Get your Google Play Gift Card $5 (US) now! Our Google Play Gift Card (US) allows users to add credits to their Google account, enabling access to millions of apps, games, movies, books, and more available on the Google Play Store. Easily purchase the Google Play Gift Card $5 (US) through our OffGamers store, where we are an official authorized distributor.\n\nAdding funds to your Google Play balance does not require a credit card. The Google Play Gift Card (US) can be used as a gift certificate on the Google Play platform to purchase apps, games, movies, music, books, and anything else available through the Play Store. With millions of digital content options, you’ll never run out of entertainment or productivity resources.\n\nJoin the community of over 2.5 billion active users who enjoy Google Play services worldwide. Discover new content, download updates, and take advantage of special deals and offers regularly available on the platform.\n\nWhether you\'re on an Android phone, tablet, Chromebook, or even streaming on a smart TV, Google Play works seamlessly across all your devices. With Google Play Gift Cards, you can enjoy digital content wherever you are, whenever you want.'),
(3, 'Google Gift Card 15$', 2100, 'google_15$.jpg', 1, 'Get your Google Play Gift Card $15 (US) now! Our Google Play Gift Card (US) allows users to add credits to their Google account, enabling access to millions of apps, games, movies, books, and more available on the Google Play Store. Easily purchase the Google Play Gift Card $5 (US) through our OffGamers store, where we are an official authorized distributor.\n\nAdding funds to your Google Play balance does not require a credit card. The Google Play Gift Card (US) can be used as a gift certificate on the Google Play platform to purchase apps, games, movies, music, books, and anything else available through the Play Store. With millions of digital content options, you’ll never run out of entertainment or productivity resources.\n\nJoin the community of over 2.5 billion active users who enjoy Google Play services worldwide. Discover new content, download updates, and take advantage of special deals and offers regularly available on the platform.\n\nWhether you\'re on an Android phone, tablet, Chromebook, or even streaming on a smart TV, Google Play works seamlessly across all your devices. With Google Play Gift Cards, you can enjoy digital content wherever you are, whenever you want.'),
(4, 'Google Gift Card 25$', 3200, 'Google_25$.jpg', 1, 'Get your Google Play Gift Card $25 (US) now! Our Google Play Gift Card (US) allows users to add credits to their Google account, enabling access to millions of apps, games, movies, books, and more available on the Google Play Store. Easily purchase the Google Play Gift Card $5 (US) through our OffGamers store, where we are an official authorized distributor.\n\nAdding funds to your Google Play balance does not require a credit card. The Google Play Gift Card (US) can be used as a gift certificate on the Google Play platform to purchase apps, games, movies, music, books, and anything else available through the Play Store. With millions of digital content options, you’ll never run out of entertainment or productivity resources.\n\nJoin the community of over 2.5 billion active users who enjoy Google Play services worldwide. Discover new content, download updates, and take advantage of special deals and offers regularly available on the platform.\n\nWhether you\'re on an Android phone, tablet, Chromebook, or even streaming on a smart TV, Google Play works seamlessly across all your devices. With Google Play Gift Cards, you can enjoy digital content wherever you are, whenever you want.'),
(5, 'Google Gift Card 50$', 6500, 'google-gift-card-50.png', 1, 'Get your Google Play Gift Card $50 (US) now! Our Google Play Gift Card (US) allows users to add credits to their Google account, enabling access to millions of apps, games, movies, books, and more available on the Google Play Store. Easily purchase the Google Play Gift Card $5 (US) through our OffGamers store, where we are an official authorized distributor.\n\nAdding funds to your Google Play balance does not require a credit card. The Google Play Gift Card (US) can be used as a gift certificate on the Google Play platform to purchase apps, games, movies, music, books, and anything else available through the Play Store. With millions of digital content options, you’ll never run out of entertainment or productivity resources.\n\nJoin the community of over 2.5 billion active users who enjoy Google Play services worldwide. Discover new content, download updates, and take advantage of special deals and offers regularly available on the platform.\n\nWhether you\'re on an Android phone, tablet, Chromebook, or even streaming on a smart TV, Google Play works seamlessly across all your devices. With Google Play Gift Cards, you can enjoy digital content wherever you are, whenever you want.'),
(6, 'Google Gift Card 100$', 14500, 'google-giftcard_100$.jpg', 1, 'Get your Google Play Gift Card $100 (US) now! Our Google Play Gift Card (US) allows users to add credits to their Google account, enabling access to millions of apps, games, movies, books, and more available on the Google Play Store. Easily purchase the Google Play Gift Card $5 (US) through our OffGamers store, where we are an official authorized distributor.\n\nAdding funds to your Google Play balance does not require a credit card. The Google Play Gift Card (US) can be used as a gift certificate on the Google Play platform to purchase apps, games, movies, music, books, and anything else available through the Play Store. With millions of digital content options, you’ll never run out of entertainment or productivity resources.\n\nJoin the community of over 2.5 billion active users who enjoy Google Play services worldwide. Discover new content, download updates, and take advantage of special deals and offers regularly available on the platform.\n\nWhether you\'re on an Android phone, tablet, Chromebook, or even streaming on a smart TV, Google Play works seamlessly across all your devices. With Google Play Gift Cards, you can enjoy digital content wherever you are, whenever you want.'),
(7, 'iTunes Gift Card 5$', 650, 'itunes_5$.jpg', 2, 'Get your iTunes Gift Card $5 (US) now! Our iTunes Gift Card (US) lets you add funds to your Apple ID, giving you access to millions of songs, apps, movies, TV shows, books, and more on the iTunes Store, App Store, Apple Books, and Apple Music. Purchase your iTunes Gift Card $5 (US) conveniently through our OffGamers store, where we are an official authorized distributor.\n\nAdding funds to your Apple ID with the iTunes Gift Card (US) does not require a credit card. Use the gift card as a gift certificate for purchasing anything available on iTunes, from music to apps and entertainment content. With a wide range of digital content available, there’s always something new to enjoy.\n\nJoin the Apple ecosystem of over 1.5 billion active devices worldwide. Stream the latest music, download popular apps, or rent your favorite movies with ease. The iTunes Store and App Store regularly feature exclusive offers, sales, and special content to enhance your experience.\n\nCompatible with iPhones, iPads, Macs, Apple TVs, and even PCs, iTunes Gift Cards let you enjoy your digital content anywhere and anytime. Unlock endless possibilities with an iTunes Gift Card and take your entertainment on the go.'),
(9, 'iTunes Gift Card 10$', 1350, 'itunes_10$.png', 2, 'Get your iTunes Gift Card $10 (US) now! Our iTunes Gift Card (US) lets you add funds to your Apple ID, giving you access to millions of songs, apps, movies, TV shows, books, and more on the iTunes Store, App Store, Apple Books, and Apple Music. Purchase your iTunes Gift Card $5 (US) conveniently through our OffGamers store, where we are an official authorized distributor.\n\nAdding funds to your Apple ID with the iTunes Gift Card (US) does not require a credit card. Use the gift card as a gift certificate for purchasing anything available on iTunes, from music to apps and entertainment content. With a wide range of digital content available, there’s always something new to enjoy.\n\nJoin the Apple ecosystem of over 1.5 billion active devices worldwide. Stream the latest music, download popular apps, or rent your favorite movies with ease. The iTunes Store and App Store regularly feature exclusive offers, sales, and special content to enhance your experience.\n\nCompatible with iPhones, iPads, Macs, Apple TVs, and even PCs, iTunes Gift Cards let you enjoy your digital content anywhere and anytime. Unlock endless possibilities with an iTunes Gift Card and take your entertainment on the go.'),
(10, 'iTunes Gift Card 15$', 2100, 'itunes_15$.jpg', 2, 'Get your iTunes Gift Card $15 (US) now! Our iTunes Gift Card (US) lets you add funds to your Apple ID, giving you access to millions of songs, apps, movies, TV shows, books, and more on the iTunes Store, App Store, Apple Books, and Apple Music. Purchase your iTunes Gift Card $5 (US) conveniently through our OffGamers store, where we are an official authorized distributor.\n\nAdding funds to your Apple ID with the iTunes Gift Card (US) does not require a credit card. Use the gift card as a gift certificate for purchasing anything available on iTunes, from music to apps and entertainment content. With a wide range of digital content available, there’s always something new to enjoy.\n\nJoin the Apple ecosystem of over 1.5 billion active devices worldwide. Stream the latest music, download popular apps, or rent your favorite movies with ease. The iTunes Store and App Store regularly feature exclusive offers, sales, and special content to enhance your experience.\n\nCompatible with iPhones, iPads, Macs, Apple TVs, and even PCs, iTunes Gift Cards let you enjoy your digital content anywhere and anytime. Unlock endless possibilities with an iTunes Gift Card and take your entertainment on the go.'),
(12, 'iTunes Gift Card 50$', 6500, 'itunes_50$.jpg', 2, 'Get your iTunes Gift Card $50 (US) now! Our iTunes Gift Card (US) lets you add funds to your Apple ID, giving you access to millions of songs, apps, movies, TV shows, books, and more on the iTunes Store, App Store, Apple Books, and Apple Music. Purchase your iTunes Gift Card $5 (US) conveniently through our OffGamers store, where we are an official authorized distributor.\n\nAdding funds to your Apple ID with the iTunes Gift Card (US) does not require a credit card. Use the gift card as a gift certificate for purchasing anything available on iTunes, from music to apps and entertainment content. With a wide range of digital content available, there’s always something new to enjoy.\n\nJoin the Apple ecosystem of over 1.5 billion active devices worldwide. Stream the latest music, download popular apps, or rent your favorite movies with ease. The iTunes Store and App Store regularly feature exclusive offers, sales, and special content to enhance your experience.\n\nCompatible with iPhones, iPads, Macs, Apple TVs, and even PCs, iTunes Gift Cards let you enjoy your digital content anywhere and anytime. Unlock endless possibilities with an iTunes Gift Card and take your entertainment on the go.'),
(13, 'iTunes Gift Card 100$', 14500, 'itunes_100$.jpg', 2, 'Get your iTunes Gift Card $100 (US) now! Our iTunes Gift Card (US) lets you add funds to your Apple ID, giving you access to millions of songs, apps, movies, TV shows, books, and more on the iTunes Store, App Store, Apple Books, and Apple Music. Purchase your iTunes Gift Card $5 (US) conveniently through our OffGamers store, where we are an official authorized distributor.\n\nAdding funds to your Apple ID with the iTunes Gift Card (US) does not require a credit card. Use the gift card as a gift certificate for purchasing anything available on iTunes, from music to apps and entertainment content. With a wide range of digital content available, there’s always something new to enjoy.\n\nJoin the Apple ecosystem of over 1.5 billion active devices worldwide. Stream the latest music, download popular apps, or rent your favorite movies with ease. The iTunes Store and App Store regularly feature exclusive offers, sales, and special content to enhance your experience.\n\nCompatible with iPhones, iPads, Macs, Apple TVs, and even PCs, iTunes Gift Cards let you enjoy your digital content anywhere and anytime. Unlock endless possibilities with an iTunes Gift Card and take your entertainment on the go.'),
(14, 'PlayStation Gift Card 100$ ', 14500, 'PlayStation_Gift_Card_100$.jpg', 3, 'Get your PlayStation Gift Card $100 (US) now! Our PlayStation Gift Card (US) allows you to add funds to your PlayStation Network (PSN) account, giving you access to a vast library of games, add-ons, movies, TV shows, and more on the PlayStation Store. Easily purchase your PlayStation Gift Card $5 (US) from our OffGamers store, where we are an official authorized distributor.\n\nAdding funds to your PSN account with a PlayStation Gift Card (US) doesn’t require a credit card. Use the gift card as a convenient payment option to purchase new games, download in-game content, or rent the latest movies directly from the PlayStation Store. With thousands of digital items and games available, there’s always something exciting to discover.\n\nJoin the global community of millions of players who connect on PlayStation Network. Play your favorite games, team up with friends in multiplayer modes, and enjoy exclusive discounts on digital content through your PS Plus membership.\n\nCompatible with PlayStation 5, PlayStation 4, and even the PlayStation app on mobile devices, the PlayStation Gift Card ensures you can enjoy entertainment across all your PlayStation devices. Dive into the world of gaming and endless entertainment with a PlayStation Gift Card, and enjoy your favorite content anytime, anywhere.'),
(15, 'PlayStation Gift Card 10$ ', 1350, 'PlayStation-Gift-Card_10$.jpg', 3, 'Get your PlayStation Gift Card $10 (US) now! Our PlayStation Gift Card (US) allows you to add funds to your PlayStation Network (PSN) account, giving you access to a vast library of games, add-ons, movies, TV shows, and more on the PlayStation Store. Easily purchase your PlayStation Gift Card $5 (US) from our OffGamers store, where we are an official authorized distributor.\n\nAdding funds to your PSN account with a PlayStation Gift Card (US) doesn’t require a credit card. Use the gift card as a convenient payment option to purchase new games, download in-game content, or rent the latest movies directly from the PlayStation Store. With thousands of digital items and games available, there’s always something exciting to discover.\n\nJoin the global community of millions of players who connect on PlayStation Network. Play your favorite games, team up with friends in multiplayer modes, and enjoy exclusive discounts on digital content through your PS Plus membership.\n\nCompatible with PlayStation 5, PlayStation 4, and even the PlayStation app on mobile devices, the PlayStation Gift Card ensures you can enjoy entertainment across all your PlayStation devices. Dive into the world of gaming and endless entertainment with a PlayStation Gift Card, and enjoy your favorite content anytime, anywhere.'),
(16, 'PlayStation Gift Card 20$ ', 3200, 'PlayStation-Gift-Card_20$.jpg', 3, 'Get your PlayStation Gift Card $20 (US) now! Our PlayStation Gift Card (US) allows you to add funds to your PlayStation Network (PSN) account, giving you access to a vast library of games, add-ons, movies, TV shows, and more on the PlayStation Store. Easily purchase your PlayStation Gift Card $5 (US) from our OffGamers store, where we are an official authorized distributor.\n\nAdding funds to your PSN account with a PlayStation Gift Card (US) doesn’t require a credit card. Use the gift card as a convenient payment option to purchase new games, download in-game content, or rent the latest movies directly from the PlayStation Store. With thousands of digital items and games available, there’s always something exciting to discover.\n\nJoin the global community of millions of players who connect on PlayStation Network. Play your favorite games, team up with friends in multiplayer modes, and enjoy exclusive discounts on digital content through your PS Plus membership.\n\nCompatible with PlayStation 5, PlayStation 4, and even the PlayStation app on mobile devices, the PlayStation Gift Card ensures you can enjoy entertainment across all your PlayStation devices. Dive into the world of gaming and endless entertainment with a PlayStation Gift Card, and enjoy your favorite content anytime, anywhere.'),
(17, 'PlayStation Gift Card 50$ ', 6500, 'PlayStation-Gift-Card_50$.jpg', 3, 'Get your PlayStation Gift Card $50 (US) now! Our PlayStation Gift Card (US) allows you to add funds to your PlayStation Network (PSN) account, giving you access to a vast library of games, add-ons, movies, TV shows, and more on the PlayStation Store. Easily purchase your PlayStation Gift Card $5 (US) from our OffGamers store, where we are an official authorized distributor.\n\nAdding funds to your PSN account with a PlayStation Gift Card (US) doesn’t require a credit card. Use the gift card as a convenient payment option to purchase new games, download in-game content, or rent the latest movies directly from the PlayStation Store. With thousands of digital items and games available, there’s always something exciting to discover.\n\nJoin the global community of millions of players who connect on PlayStation Network. Play your favorite games, team up with friends in multiplayer modes, and enjoy exclusive discounts on digital content through your PS Plus membership.\n\nCompatible with PlayStation 5, PlayStation 4, and even the PlayStation app on mobile devices, the PlayStation Gift Card ensures you can enjoy entertainment across all your PlayStation devices. Dive into the world of gaming and endless entertainment with a PlayStation Gift Card, and enjoy your favorite content anytime, anywhere.'),
(19, 'Black Myth: Wukong Game 2024', 5999, 'games.jfif', 9, 'Black Myth: Wukong is an action RPG inspired by the classic Chinese tale, Journey to the West. In this highly anticipated game, players take on the role of Wukong, the legendary Monkey King, as he embarks on an epic quest filled with challenging enemies, breathtaking environments, and mystical powers. With fluid combat mechanics and stunning visuals, the game brings the ancient myth to life like never before.\n\nExplore a richly detailed world where fantasy and Chinese mythology blend seamlessly. Battle formidable foes with Wukong\'s iconic staff and shapeshifting abilities, transforming into various creatures to gain an advantage in combat and solve puzzles. The game features a unique mix of martial arts-inspired moves and supernatural skills, offering a dynamic combat experience that rewards skill and strategy.\n\nWhether you\'re traversing vast landscapes, confronting mythical beasts, or unraveling the mysteries of Wukong\'s past, Black Myth: Wukong promises an unforgettable journey full of adventure, action, and folklore. Prepare to dive into a world where legends come to life, and every encounter brings you closer to discovering the true power of the Monkey King.'),
(23, 'Steam Wallet Gift Card 100$', 14000, 'steam_wallet_100.jpg', 8, 'Take your gaming to the next level with a $100 Steam Wallet Gift Card. This higher-value card lets you splurge on the latest AAA titles, multiple games, or collect in-game items and DLC. With Steam’s massive selection and regular discounts, you can maximize your gaming experience, all while avoiding the hassle of entering credit card information. Whether you\'re a casual gamer or a dedicated Steam user, the $100 card gives you the freedom to explore, enjoy, and expand your library.'),
(24, 'Steam Wallet Gift Card 10$', 1400, 'steam-50.jpg', 8, 'With a $10 Steam Wallet Gift Card, you can unlock a wide range of digital content on Steam, from popular games to useful software, in-game items, and exclusive DLC. Whether you want to grab a new title, snag a sale item, or treat yourself to extra content, this card is an easy and secure way to add funds to your Steam Wallet. No need to worry about entering credit card details – just redeem and play!'),
(25, 'Steam Wallet Gift Card 5$', 700, 'steam_wallet_giftcard.jpg', 8, 'Add instant funds to your Steam account with a $5 Steam Wallet Gift Card. This is a perfect option for topping up your balance for a quick purchase, whether it\'s a small indie game, a few DLC items, or in-game content. Steam\'s vast library of games, software, and digital content ensures you\'ll always find something worth spending your balance on. No credit card required – simply redeem the code and get ready to enjoy the Steam experience!'),
(26, 'Steam Wallet Gift Card 50$', 6500, 'steam_wallet_giftcard.jpg', 8, 'Elevate your Steam experience with a $50 Steam Wallet Gift Card. Whether you’re looking to purchase a highly anticipated game, expand your library with multiple titles, or unlock new content for your favorite games, this gift card gives you plenty of purchasing power. Steam offers frequent discounts, seasonal sales, and bundles, so with $50, the possibilities are endless. Secure, simple, and hassle-free – perfect for gamers who want to get the most out of their Steam account.'),
(27, 'Steam Wallet Gift Card 20$', 3200, 'steam_wallet_giftcard.jpg', 8, 'Fuel your gaming passion with a $20 Steam Wallet Gift Card. Ideal for picking up new games, adding DLC to your favorite titles, or buying in-game currency, this card lets you enhance your gaming library with ease. Steam’s diverse collection of titles – from indie gems to AAA blockbusters – ensures you’ll always find something worth exploring. Enjoy the convenience and security of adding funds without needing a credit card.'),
(28, 'Xbox Gift Card 50$', 6500, 'xbox50.jpg', 7, 'The $50 Xbox Gift Card provides plenty of flexibility to elevate your gaming experience. Use it to purchase new games, downloadable content (DLC), in-game items, or to subscribe to Xbox Live Gold or Xbox Game Pass Ultimate. This card also works across multiple platforms – Xbox Series X|S, Xbox One, and PC. Whether you\'re diving into a new release or upgrading your subscription, the $50 Xbox Gift Card offers the purchasing power you need to enjoy everything Xbox has to offer, all without the need for a credit card.'),
(29, 'Xbox Gift Card 25$', 3200, 'xbox25.jpg', 7, 'Level up your gaming with the $25 Xbox Gift Card. With this gift card, you can purchase a wide range of digital content, from the latest Xbox titles to exclusive in-game items and downloadable content (DLC). You can also use it to renew or upgrade your Xbox Game Pass subscription for access to hundreds of games. Whether you’re looking to enhance your gaming experience, purchase new content, or gift a fellow gamer, the $25 Xbox Gift Card is the perfect choice.'),
(30, 'Xbox Gift Card 100$', 14000, 'xbox100.jpg', 7, 'Unlock a world of possibilities with the $100 Xbox Gift Card. With this card, you can purchase a variety of content from the Xbox Store, including new releases, DLC, in-game currency, and subscriptions like Xbox Game Pass Ultimate and Xbox Live Gold. This card is perfect for gamers who want to dive deep into the Xbox ecosystem, whether on Xbox Series X|S, Xbox One, or PC. With the $100 Xbox Gift Card, you’ll have the flexibility to choose from a massive library of digital content, including the latest titles, exclusive deals, and seasonal sales.'),
(31, 'Xbox Gift Card 5$', 700, 'xbox5.jpg', 7, 'Get your Xbox Gift Card $5 (US) now! Our Xbox Gift Card (US) allows you to add funds to your Microsoft account, giving you access to a huge collection of games, add-ons, movies, TV shows, and apps on the Microsoft Store and Xbox Store. You can easily purchase your Xbox Gift Card $5 (US) through our OffGamers store, where we are an official authorized distributor. Adding funds to your Xbox account with an Xbox Gift Card (US) doesn’t require a credit card. Use the gift card to purchase new games, download content for your favorite titles, or rent the latest blockbuster movies. With hundreds of games and digital content options available, there’s always something new and exciting to enjoy. Join millions of players on Xbox Live, the most advanced multiplayer network, where you can play with friends, compete in online tournaments, and take advantage of exclusive member discounts. The Xbox Store regularly features great deals, special offers, and game add-ons to enhance your gaming experience. Compatible with Xbox Series X|S, Xbox One, and Windows PCs, the Xbox Gift Card ensures you can enjoy gaming and entertainment across all your Microsoft devices. Unlock endless entertainment possibilities with an Xbox Gift Card and dive into your favorite games, movies, and apps anytime, anywhere.'),
(32, 'Xbox Gift Card 10$', 1400, 'xbox10.jpg', 7, 'Get your Xbox Gift Card $5 (US) now! Our Xbox Gift Card (US) allows you to add funds to your Microsoft account, giving you access to a huge collection of games, add-ons, movies, TV shows, and apps on the Microsoft Store and Xbox Store. You can easily purchase your Xbox Gift Card $5 (US) through our OffGamers store, where we are an official authorized distributor. Adding funds to your Xbox account with an Xbox Gift Card (US) doesn’t require a credit card. Use the gift card to purchase new games, download content for your favorite titles, or rent the latest blockbuster movies. With hundreds of games and digital content options available, there’s always something new and exciting to enjoy. Join millions of players on Xbox Live, the most advanced multiplayer network, where you can play with friends, compete in online tournaments, and take advantage of exclusive member discounts. The Xbox Store regularly features great deals, special offers, and game add-ons to enhance your gaming experience. Compatible with Xbox Series X|S, Xbox One, and Windows PCs, the Xbox Gift Card ensures you can enjoy gaming and entertainment across all your Microsoft devices. Unlock endless entertainment possibilities with an Xbox Gift Card and dive into your favorite games, movies, and apps anytime, anywhere.'),
(33, 'Marvel’s Spider-Man 2 ', 8000, 'spiderman.jpg', 9, 'Marvel’s Spider-Man 2 is an action-packed, open-world adventure for PlayStation 5 that lets players control both Peter Parker and Miles Morales as they face new and powerful threats in a stunning, immersive version of New York City. The game features dynamic dual gameplay with unique abilities for each Spider-Man, a gripping narrative filled with iconic villains like Venom, and enhanced combat and web-swinging mechanics. With breathtaking visuals, next-gen features like fast loading and adaptive controller feedback, and an emotional storyline that delves into the heroes’ personal struggles, Spider-Man 2 is a must-play experience for fans of the franchise.'),
(34, 'Assassin’s Creed Mirage', 11000, 'Assassin’s Creed Mirage.jpg', 9, 'Assassin’s Creed Mirage is an action-adventure game set in the vibrant and historic city of Baghdad during the 9th century. As Basim, a skilled thief turned Assassin, players navigate a richly detailed world filled with intrigue, hidden secrets, and intense parkour-based exploration. The game returns to the series’ roots with a focus on stealth, precision combat, and an engaging narrative centered around Basim’s journey to uncover powerful conspiracies while confronting his past. Featuring a reimagined, more intimate scale compared to its recent predecessors, Mirage brings players back to the heart of what made the Assassin\'s Creed franchise iconic, with a deep story, stunning visuals, and an immersive world that allows for a truly cinematic experience.'),
(35, 'Red Dead Redemption + Undead Nightmare', 6999, 'Red Dead Redemption.jpg', 9, 'Red Dead Redemption is an epic open-world action-adventure set in the dying days of the American frontier. Players step into the boots of John Marston, a former outlaw whose past comes back to haunt him when his family is taken hostage by the government. Marston is forced to hunt down his former gang members in order to secure their release, embarking on a journey across vast, diverse landscapes—from dusty deserts and rugged mountains to bustling towns and lawless wilderness. With a rich narrative, memorable characters, and immersive gameplay, Red Dead Redemption delivers intense gunfights, horseback riding, and an unparalleled sense of freedom in a beautifully realized world. The game masterfully blends action, exploration, and storytelling, making it one of the most beloved titles in the open-world genre.'),
(36, 'Marvel’s Wolverine Milestone 13', 5999, 'Marvel’s Wolverine Milestone 13.jpg', 9, 'Marvel’s Wolverine: Milestone 13 takes players on a brutal and emotional journey into the heart of one of Marvel’s most iconic antiheroes. As Wolverine, players experience a gritty, action-packed adventure through a dark chapter of Logan’s life. Set in the aftermath of personal loss and surrounded by enemies both familiar and new, Milestone 13 delves deeper into the psyche of Wolverine, showcasing his internal struggle between his human side and the animalistic rage that defines him. The game features intense, visceral combat where Logan’s signature claws and healing factor are at the forefront, with dynamic environments allowing for fluid exploration and brutal hand-to-hand combat.'),
(37, 'FREE FIRE 1080 DIAMONDS', 1400, 'ff.jpg', 4, 'Free Fire is an action-packed mobile battle royale game where 50 players are dropped onto a remote island, and the goal is simple: survive. Each 10-minute match challenges you to outlast your opponents by securing weapons, resources, and strategically staying within the safe zone. You can choose your landing spot with your parachute, drive vehicles across the expansive map, or hide in tall grass to ambush others. Whether you prefer sniping, ambushing, or close combat, the game offers endless tactical possibilities. Enhance your experience by purchasing Free Fire Diamonds (Garena), which allow you to unlock exclusive skins, weapons, and characters, giving you a competitive edge as you fight to become the last player standing.'),
(38, 'FREE FIRE 2530 DIAMONDS', 2500, 'freefire_in.jpg', 4, 'Free Fire is an action-packed mobile battle royale game where 50 players are dropped onto a remote island, and the goal is simple: survive. Each 10-minute match challenges you to outlast your opponents by securing weapons, resources, and strategically staying within the safe zone. You can choose your landing spot with your parachute, drive vehicles across the expansive map, or hide in tall grass to ambush others. Whether you prefer sniping, ambushing, or close combat, the game offers endless tactical possibilities. Enhance your experience by purchasing Free Fire Diamonds (Garena), which allow you to unlock exclusive skins, weapons, and characters, giving you a competitive edge as you fight to become the last player standing.'),
(39, 'FREE FIRE 520 DIAMONDS', 500, 'freefire_in.jpg', 4, 'Free Fire is an action-packed mobile battle royale game where 50 players are dropped onto a remote island, and the goal is simple: survive. Each 10-minute match challenges you to outlast your opponents by securing weapons, resources, and strategically staying within the safe zone. You can choose your landing spot with your parachute, drive vehicles across the expansive map, or hide in tall grass to ambush others. Whether you prefer sniping, ambushing, or close combat, the game offers endless tactical possibilities. Enhance your experience by purchasing Free Fire Diamonds (Garena), which allow you to unlock exclusive skins, weapons, and characters, giving you a competitive edge as you fight to become the last player standing.'),
(40, 'FREE FIRE 420 DIAMONDS', 400, 'freefire_diamonds.jpg', 4, 'Free Fire is an action-packed mobile battle royale game where 50 players are dropped onto a remote island, and the goal is simple: survive. Each 10-minute match challenges you to outlast your opponents by securing weapons, resources, and strategically staying within the safe zone. You can choose your landing spot with your parachute, drive vehicles across the expansive map, or hide in tall grass to ambush others. Whether you prefer sniping, ambushing, or close combat, the game offers endless tactical possibilities. Enhance your experience by purchasing Free Fire Diamonds (Garena), which allow you to unlock exclusive skins, weapons, and characters, giving you a competitive edge as you fight to become the last player standing.'),
(41, 'FREE FIRE 5600 DIAMONDS', 5500, 'freefire_diamonds.jpg', 4, 'Free Fire is an action-packed mobile battle royale game where 50 players are dropped onto a remote island, and the goal is simple: survive. Each 10-minute match challenges you to outlast your opponents by securing weapons, resources, and strategically staying within the safe zone. You can choose your landing spot with your parachute, drive vehicles across the expansive map, or hide in tall grass to ambush others. Whether you prefer sniping, ambushing, or close combat, the game offers endless tactical possibilities. Enhance your experience by purchasing Free Fire Diamonds (Garena), which allow you to unlock exclusive skins, weapons, and characters, giving you a competitive edge as you fight to become the last player standing.'),
(42, 'Nintendo eShop Card (US) $100', 14000, 'nintendo eShop.jpg', 5, 'Using Nintendo USD100 eShop Cards (US), you can access downloadable content from the online Nintendo eShop, which is an online store for the Nintendo Switch, Nintendo 3DS, and Wii U systems. In addition to classic games from previous systems, you can download both retail and download-only games, free demos, and programs from the Virtual Console. In addition, you can view videos and download rankings, as well as see user reviews. Nintendo USD100 eShop Card (US) makes it easy to get your favorite games anytime you want\r\n\r\nThe Nintendo Network provides plenty of opportunities for added gaming excitement, so get a Nintendo eShop Card based in the US today and start exploring those possibilities right in the comfort of your home or on the go with your new Nintendo Switch.'),
(43, 'Nintendo eShop Card (US) $10', 1400, 'nintendo eShop.jpg', 5, 'With the $10 Nintendo eShop Card (US), you can easily add funds to your Nintendo account and access a wide range of downloadable content on the Nintendo eShop for your Nintendo Switch, Nintendo 3DS, and Wii U. From classic games and retail titles to exclusive downloadable content, free demos, and Virtual Console programs, there\'s something for every gamer. The card also gives you access to rankings, user reviews, and video content, so you can discover new games and content anytime. It\'s a simple, hassle-free way to keep your gaming library fresh and enjoy your favorite games on-demand.'),
(44, 'Nintendo eShop Card (US) $30', 4000, 'nintendo eShop.jpg', 5, 'The $30 Nintendo eShop Card (US) unlocks a world of gaming possibilities on the Nintendo eShop, giving you access to a variety of digital content for your Nintendo Switch, Nintendo 3DS, and Wii U systems. With this card, you can download both retail and download-only games, free demos, and exclusive content from the Virtual Console. You can also browse user reviews, rankings, and videos to help you discover new favorites. Perfect for gamers looking to expand their collection, this eShop card offers the flexibility to shop on your terms, anytime you want.'),
(45, 'Nintendo eShop Card (US) $50', 6200, 'nintendo eShop.jpg', 5, 'The $50 Nintendo eShop Card (US) is the perfect way to access a wealth of digital content on the Nintendo eShop. With this card, you can download new releases, classic games, exclusive content, and much more for your Nintendo Switch, Nintendo 3DS, and Wii U systems. Whether you\'re looking to purchase retail titles, download-only games, or browse free demos, the eShop offers endless options. You’ll also have access to rankings, videos, and user reviews to help you make informed choices. Add funds easily to your Nintendo account and enjoy all the gaming excitement the Nintendo Network has to offer.'),
(46, 'Nintendo eShop Card (US) $50', 6200, 'nintendo eShop.jpg', 5, 'The $50 Nintendo eShop Card (US) is the perfect way to access a wealth of digital content on the Nintendo eShop. With this card, you can download new releases, classic games, exclusive content, and much more for your Nintendo Switch, Nintendo 3DS, and Wii U systems. Whether you\'re looking to purchase retail titles, download-only games, or browse free demos, the eShop offers endless options. You’ll also have access to rankings, videos, and user reviews to help you make informed choices. Add funds easily to your Nintendo account and enjoy all the gaming excitement the Nintendo Network has to offer.'),
(47, 'NINTENDO MEMBERSHIP 12 MONTHS (US)', 2600, 'nintedo_12month.jpg', 5, 'A paid subscription service from Nintendo, Nintendo Membership 12 Months (US), allows you to play online games and back up the game archives. Besides the classic game library, members can also enjoy various member-exclusive rewards and perks, including a complete library of FC/NES classic games (starting with 20 games and increasing monthly).\r\n\r\nSo what are you waiting for? Now you can become a Nintendo Individual Member with Nintendo Membership 12 Months (US)!'),
(48, 'NINTENDO MEMBERSHIP 3 MONTHS (US)', 1200, 'nintedo_3month.jpg', 5, 'Shop now for Nintendo Membership 3 Months (US)\r\n\r\nA paid subscription service from Nintendo, Nintendo Membership 3 Months (US), allows you to play online games and back up the game archives. Besides the classic game library, members can also enjoy various member-exclusive rewards and perks, including a complete library of FC/NES classic games (starting with 20 games and increasing monthly).\r\n\r\nSo what are you waiting for? Now you can become a Nintendo Individual Member with Nintendo Membership 3 Months (US)!'),
(49, 'Mobile Legends 278 Diamonds', 800, 'ml.jpg', 6, 'Join your friends for a brand new 5v5 MOBA showdown, Mobile Legends: Bang Bang! Join forces with your comrades and pick your favorite heroes! 10-second matchmaking, 10-minute battles. All the action and fun of MOBAs and action games in your hands! Jungle, link, tower rush, team battles! Embrace your eSports spirit!\r\n\r\nClaim the title of strongest Challenger by shattering your opponents with the touch of your finger! Boost your gaming experience with Mobile Legends: Bang Bang Diamonds Pin (Mobile)!'),
(50, 'Mobile Legends 571 Diamonds', 1660, 'ml.jpg', 6, 'Join your friends for a brand new 5v5 MOBA showdown, Mobile Legends: Bang Bang! Join forces with your comrades and pick your favorite heroes! 10-second matchmaking, 10-minute battles. All the action and fun of MOBAs and action games in your hands! Jungle, link, tower rush, team battles! Embrace your eSports spirit!\r\n\r\nClaim the title of strongest Challenger by shattering your opponents with the touch of your finger! Boost your gaming experience with Mobile Legends: Bang Bang Diamonds Pin (Mobile)!'),
(51, 'Mobile Legends 1192 Diamonds', 3300, 'ml.jpg', 6, 'Join your friends for a brand new 5v5 MOBA showdown, Mobile Legends: Bang Bang! Join forces with your comrades and pick your favorite heroes! 10-second matchmaking, 10-minute battles. All the action and fun of MOBAs and action games in your hands! Jungle, link, tower rush, team battles! Embrace your eSports spirit!\r\n\r\nClaim the title of strongest Challenger by shattering your opponents with the touch of your finger! Boost your gaming experience with Mobile Legends: Bang Bang Diamonds Pin (Mobile)!'),
(52, 'Mobile Legends 1788 Diamonds', 4900, 'ml.jpg', 6, 'Join your friends for a brand new 5v5 MOBA showdown, Mobile Legends: Bang Bang! Join forces with your comrades and pick your favorite heroes! 10-second matchmaking, 10-minute battles. All the action and fun of MOBAs and action games in your hands! Jungle, link, tower rush, team battles! Embrace your eSports spirit!\r\n\r\nClaim the title of strongest Challenger by shattering your opponents with the touch of your finger! Boost your gaming experience with Mobile Legends: Bang Bang Diamonds Pin (Mobile)!'),
(53, 'Mobile Legends 3005 Diamonds', 7500, 'ml.jpg', 6, 'Join your friends for a brand new 5v5 MOBA showdown, Mobile Legends: Bang Bang! Join forces with your comrades and pick your favorite heroes! 10-second matchmaking, 10-minute battles. All the action and fun of MOBAs and action games in your hands! Jungle, link, tower rush, team battles! Embrace your eSports spirit!\r\n\r\nClaim the title of strongest Challenger by shattering your opponents with the touch of your finger! Boost your gaming experience with Mobile Legends: Bang Bang Diamonds Pin (Mobile)!');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` bigint DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `usertype` varchar(20) COLLATE utf8mb4_general_ci DEFAULT 'user',
  `reset_token_hash` varchar(64) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `email`, `phone`, `password`, `usertype`, `reset_token_hash`, `reset_token_expires_at`) VALUES
(4, 'PRAMOD THAPA', 'thapa@gmail.com', 9800000000, 'bb16fa6160fa1d8a73eba6217844a08b', 'user', NULL, NULL),
(6, 'Pramod Thapa', 'pramod@gmail.com', 9861818297, 'bb16fa6160fa1d8a73eba6217844a08b', 'admin', NULL, NULL),
(7, 'Lord Pramod', 'test@gmail.com', 9861818297, 'cc03e747a6afbbcbf8be7668acfebee5', 'user', NULL, NULL),
(8, 'Pramod Thapa', 'thapapramod821@gmail.com', 9861818297, 'bb16fa6160fa1d8a73eba6217844a08b', 'admin', NULL, NULL),
(9, 'test', 'test1@gmail.com', 9861812244, 'bb16fa6160fa1d8a73eba6217844a08b', 'user', NULL, NULL),
(10, 'admin', 'admin@gmail.com', 1234567890, '21232f297a57a5a743894a0e4a801fc3', 'admin', NULL, NULL),
(11, 'PRAMOD THAPA', 'pramodthapa2023@gmail.com', 9861818297, 'bb16fa6160fa1d8a73eba6217844a08b', 'user', 'eff6338688eeae18ab9fb73a9d2a90b65dbad0e4e9684fc52315b46e33423d66', '2024-09-24 18:43:12'),
(12, 'Rishab Maharjan', 'Rishabmaharjan1999@gmail.com', 9849181673, '7e663263c00050dfe773e21dae3a31d8', 'user', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkout_detail`
--
ALTER TABLE `checkout_detail`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `Uid` (`Uid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `pdt_cart`
--
ALTER TABLE `pdt_cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pdt_category`
--
ALTER TABLE `pdt_category`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `pdt_table`
--
ALTER TABLE `pdt_table`
  ADD PRIMARY KEY (`pdt_id`);

--
-- Indexes for table `products_details`
--
ALTER TABLE `products_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category` (`products_category`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reset_token_hash` (`reset_token_hash`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout_detail`
--
ALTER TABLE `checkout_detail`
  MODIFY `cid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `pdt_cart`
--
ALTER TABLE `pdt_cart`
  MODIFY `cart_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `pdt_category`
--
ALTER TABLE `pdt_category`
  MODIFY `C_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pdt_table`
--
ALTER TABLE `pdt_table`
  MODIFY `pdt_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products_details`
--
ALTER TABLE `products_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkout_detail`
--
ALTER TABLE `checkout_detail`
  ADD CONSTRAINT `checkout_detail_ibfk_1` FOREIGN KEY (`Uid`) REFERENCES `user_info` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`id`),
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products_details` (`id`);

--
-- Constraints for table `pdt_cart`
--
ALTER TABLE `pdt_cart`
  ADD CONSTRAINT `pdt_cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`id`);

--
-- Constraints for table `products_details`
--
ALTER TABLE `products_details`
  ADD CONSTRAINT `products_details_ibfk_1` FOREIGN KEY (`products_category`) REFERENCES `pdt_category` (`C_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
