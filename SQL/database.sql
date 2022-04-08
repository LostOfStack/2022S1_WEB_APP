-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 08, 2022 at 05:29 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ptype` varchar(25) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `description` varchar(1000) NOT NULL,
  `quantiy` int(11) NOT NULL,
  `img_directory` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `ptype`, `brand`, `name`, `price`, `description`, `quantiy`, `img_directory`) VALUES
(1, 'Laptop', 'APPLE\r\n', 'MacBookPro13', 5599, '8thâ€‘generation Intel Core i5 processor, Intel Iris Plus Graphics 645, 8GB 2133MHz LPDDR3 memory and a 256GB SSD storage. It also has a 13.3â€‘inch (diagonal) 2560x1600 native resolution at 227 pixels per inch with support for millions of display and weighs 1.4kg.', 20, 'image/apple laptop.jpg'),
(2, 'Laptop', 'DELL\r\n', 'New XPS 17 Laptop', 9945, '12th Generation IntelÂ® Coreâ„¢ i7-12700H, Windows 11 Home Single Language(Dell Technologies recommends Windows 11 Pro for business) NVIDIAÂ® GeForce RTXâ„¢ 3050, 4 GB GDDR6, 60 W16 GB, 2 x 8 GB, DDR5, 4800 MHz, dual-channel 512 GB, M.2, PCIe NVMe, SSD 17.0-in. display.', 20, 'image/dell laptop.jpg'),
(3, 'Laptop', 'ACER\r\n', 'Aspire 3 ', 2099, '15.6\" FHD, Intel Pentium Silver N6000, 4GB RAM + 512GB SSD, IntelÂ® UHD Graphics, Windows 10 (Preloaded MS Office Home  & Student) ', 20, 'image/acer laptop.jpg'),
(4, 'Desktop', 'APPLE\r\n', 'iMac 24\" ', 7249, '512GB storageÂ¹, 8GB unified memory, 24-inch 4.5K Retina displayÂ², Two Thunderbolt / USB 4 ports, Two USB 3 ports, Gigabit Ethernet, Magic Keyboard with Touch ID ', 20, 'image/imac desktop.jpg'),
(5, 'Desktop', 'DELL\r\n', 'New Inspiron Compact Desktop ', 2099, '12th Gen IntelÂ® Coreâ„¢ i3-12100, Windows 11 Home Single Language, (Dell Technologies recommends Windows 11 Pro for business), IntelÂ® UHD Graphics 730, 8 GB, 1 x 8 GB, DDR4, 3200 MHz,256 GB, M.2, PCIe NVMe, SSD ', 20, 'image/dell desktop.jpg'),
(6, 'Desktop', 'ACER\r\n', 'Acer Aspire AXC895-10400F ', 1900, 'IntelÂ® Coreâ„¢ i5-10400 Processor, 4 GB DDR4 2666 MHz UDIMM (upgradable to 16GB*2) Ram, 512GB SSD, IntelÂ® UHD Graphics 630, DOS ( No Windows ), 3 Years Acer Malaysia Onsite Warranty. ', 20, 'image/acer desktop.jpg'),
(7, 'Monitor', 'AOC\r\n', 'AGON 27\" Premium Gaming Monitor ', 900, 'ICompetitively modeled for agile execution on the battlefield, the AG273FZE AGON III 27â€ gaming monitor has 240Hz refresh rate and 0.5ms response time. The displayâ€™s G-Sync Compatible technology ensures the monitorâ€™s refresh rate is seamlessly synced with your processorâ€™s to eliminate screen tearing. With brighter lights, darker shadows and more vivid colors, the monitorâ€™s HDR technology illuminates with pristine visuals. Whether you want to flash team colors at an e-sports event or create the ultimate gaming ambience with the 13 default modes, AOCâ€™s Light FX can transcend your gaming experience beyond the screen. ', 20, 'image/aoc monitor.jpg'),
(8, 'Monitor', 'DELL\r\n', 'Dell 23\" Full HD Monitor P2317H ', 500, 'Affordable and reliable 23â€ IPS monitor with wide viewing angle and essential features that drive productivity, Get consistent colors across a wide viewing angle, enabled by In-plane switching technology on a 23â€ full HD screen, Optimize eye comfort with a flicker-free screen and comfort view feature which minimizes blue light emission, Compatible with most legacy and current PCs via VGA and HDMI connectivity (Ports vary depending on models). Compatibility- All operating system, Flexibility to configure with Dell mounts and stands options for evolving office requirements. Refresh rate:60 Hz ', 20, 'image/dell monitor.jpg'),
(9, 'Monitor', 'SAMSUNG\r\n', '24\" Flat T35 Series ', 700, '3-sided border-less screen, Full technicolor experience,Eye Saver Mode minimizes emitted blue light.', 20, 'image/samsung monitor.jpg'),
(10, 'Mouse', 'Logitech\r\n', 'Logitech G502 Hero ', 300, 'HERO 25K is our most accurate gaming sensor ever with next-gen precision and a ground-up architecture. With the fastest frame rate processing yet, HERO is capable of 400+ IPS across the 100 - 25,600 DPI range with zero smoothing, filtering or acceleration. HERO 25K achieves competition-level precision and the most consistent responsiveness ever. Be sure to customize and tune your DPI settings using Logitech G HUB.', 20, 'image/logitech mouse.jpg'),
(11, 'Mouse', 'RAZER\r\n', 'Razer DeathAdder V2 Pro ', 700, '25% faster than any other wireless technology available, you wonâ€™t even realize that youâ€™re using a wireless gaming mouse due to its high-speed transmission, lowest click latency, and seamless frequency switching in the noisiest, data-saturated environments.', 20, 'image/razer death mouse.jpg'),
(12, 'Mouse', 'Glorious\r\n', 'GLORIOUS Model O Gaming Mouse ', 330, 'FAST & RESPONSIVE NO-LAG 2.4 GHZ WIRELESS CONNECTIVITY. Model O Wireless has the lowest wireless latency of any mouse in its class. The state-of-the-industry technology provides responsive, crisp clicks and no double clicking.', 20, 'image/glorious mouse.jpg'),
(13, 'Speaker', 'SONY\r\n', 'XB13 EXTRA BASS Portable Wireless Speaker ', 230, 'The SRS-XB13 is durable and portable. It comes with a specially engineered strap to make travelling with it easier. But donâ€™t be fooled by its small size, with Extra Bassâ„¢, Sound Diffusion Processor, this little speaker packs plenty of punch.', 20, 'image/sony speaker.jpg'),
(14, 'Speaker', 'MARSHALL\r\n', 'ACTON II BLUETOOTH ', 1200, 'Acton II may be compact, but its sound is nothing short of large. This dynamic compact speaker features three dedicated class D amplifiers that power its dual tweeters and subwoofer, for a sound that is nothing short of large. With Bluetooth 5.0 technology you can play your music in glorious, stereo sound with no wires required.', 20, 'image/marshall speaker.jpg'),
(15, 'Speaker', 'JBL\r\n', 'JBL Flip 5 ', 649, 'Take your tunes on the go with the powerful JBL Flip 5. Our lightweight Bluetooth speaker goes anywhere. Bad weather? Not to worry. With its waterproof design, you can rock out to our signature sound rain or shine. Move more. Pair two JBL PartyBoost-compatible speakers together for stereo sound or link multiple JBL PartyBoost-compatible speakers to create a bigger party. Enjoy up to 12 hours of play time for your favorite music. Stand it vertical or horizontal and be bold with your choice of 11 vibrant colors.', 20, 'image/jbl speaker.jpg'),
(16, 'Smartphone', 'APPLE\r\n', 'IPHONE 13 ', 3899, 'We designed a totally new architecture and turned the lenses 45 degrees to fit in our best dual-camera system ever â€” with its biggest Wide camera sensor. We also made room for our sensor-shift optical image stabilisation. And we equipped the Ultra Wide camera with a faster sensor.', 20, 'image/iphone.jpg'),
(17, 'Smartphone', 'SAMSUNG\r\n', 'Samsung Galaxy S21 ', 3199, 'Never miss that perfect shot again. Meet Galaxy S21 5G and S21+ 5G. Designed to revolutionize video and photography, with beyond cinematic 8K resolution so you can snap epic photos right out of video. It has it all in two sizes: 64MP, our fastest chipset and a massive all-day battery.1 Things just got epic.', 20, 'image/samsung.jpg'),
(18, 'Smartphone', 'HUAWEI\r\n', 'HUAWEI P50 Pro ', 4199, 'Ultimate 4K Videography with Huawei Image. 4K Time Lapse, Video Recording & AI Cinemagraph. 120Hz Refesh Rate, P3 Wide Colour Gamut & 1.07 Billion True-Chroma Display. 6.6\" Curved OLED Display. 120Hz High Refresh Rate..', 20, 'image/huawei.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNo` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phoneNo`, `gender`, `created_at`) VALUES
(2, 'harry', '$2y$10$EkhPwB0AvO65dOEd1/1aeOXGjnjqs775tRG2pnVkOsr8VwjzFFYr2', 'harryliow1028@gmail.com', '012-3455678', 'male', '2022-04-08 13:23:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_items`
--

DROP TABLE IF EXISTS `user_items`;
CREATE TABLE IF NOT EXISTS `user_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`item_id`),
  KEY `item_id` (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_items`
--

INSERT INTO `user_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(2, 2, 13, 'Confirmed'),
(3, 2, 18, 'Added to cart');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
