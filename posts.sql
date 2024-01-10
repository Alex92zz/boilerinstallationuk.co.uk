-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 10, 2024 at 02:19 PM
-- Server version: 10.6.16-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zeleamas_boilerinstallationuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `description` text DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `slug`, `content`, `description`, `keywords`, `is_published`, `created_at`, `updated_at`, `thumbnail`) VALUES
(50, 7, 'Choosing the Right Boiler for Your Home: A Comprehensive Guide', 'choosing-the-right-boiler-for-your-home-a-comprehensive-guide', '<p>When it comes to keeping your home warm and cozy, choosing the right boiler is a crucial decision. Whether you\'re upgrading your current system or installing a new one, understanding your options is essential to ensure comfort, efficiency, and cost-effectiveness. In this guide, we\'ll walk you through the key factors to consider when selecting a boiler for your home.</p><p><strong>1. Boiler Types</strong></p><p>Boilers come in various types, each catering to different needs:</p><ul><li><strong>Combi Boilers</strong>: These space-saving units provide both heating and hot water on-demand. Ideal for smaller homes with limited space.</li><li><strong>System Boilers</strong>: Suitable for medium to large homes, these boilers store hot water in a cylinder, ensuring a constant supply.</li><li><strong>Regular Boilers</strong>: Also known as conventional or heat-only boilers, they are often used in older homes with traditional heating systems.</li></ul><p><strong>2. Fuel Type</strong></p><p>Boilers can run on different fuel types:</p><ul><li><strong>Natural Gas</strong>: The most common and cost-effective option for many homes.</li><li><strong>LPG (Liquid Petroleum Gas)</strong>: Suitable for areas without access to natural gas lines.</li><li><strong>Oil</strong>: Common in rural areas, oil boilers are efficient and dependable.</li><li><strong>Electric</strong>: Environmentally friendly but may have higher operating costs.</li></ul><p><strong>3. Boiler Size</strong></p><p>The size of your boiler should match the heating needs of your home. A professional assessment will help determine the right size, ensuring efficiency and avoiding energy waste.</p><p><strong>4. Efficiency Ratings</strong></p><p>Look for boilers with high-efficiency ratings. The Annual Fuel Utilization Efficiency (AFUE) rating indicates how efficiently a boiler converts fuel into heat. The higher the AFUE, the more efficient the boiler.</p><p><strong>5. Cost Considerations</strong></p><p>Remember that the upfront cost of a boiler is just one aspect of the total cost of ownership. Consider long-term operating costs, maintenance expenses, and potential energy savings when making your decision.</p><p><strong>6. Professional Installation and Maintenance</strong></p><p>Proper installation and regular maintenance are crucial for the performance and longevity of your boiler. Hire certified professionals who can install and service your boiler to ensure it operates efficiently and safely.</p><p><strong>7. Environmental Impact</strong></p><p>If environmental concerns are important to you, consider boilers with low carbon emissions and high energy efficiency. This not only benefits the environment but can also lead to cost savings in the long run.</p><p><strong>8. Warranty and Support</strong></p><p>Check the manufacturer\'s warranty and after-sales support options. A comprehensive warranty can provide peace of mind and save you money on repairs.</p><p>In conclusion, selecting the right boiler for your home involves careful consideration of your heating needs, fuel options, efficiency ratings, and budget. It\'s a decision that impacts your comfort, energy bills, and the environment. Consulting with a professional heating engineer is highly recommended to ensure you make the best choice for your specific circumstances.</p><p>At Boiler Installation UK, we specialize in boiler installation, maintenance, and expert advice. Contact us today to discuss your heating needs and let us help you find the perfect boiler for your home. We\'re committed to keeping your home warm and your energy bills in check.</p>', 'Discover the Perfect Boiler for Your Home: A Comprehensive Guide | Learn how to choose the right boiler type, fuel, size, and efficiency for your heating needs. Make an informed decision with our expert advice. Contact Boiler Installation UK for professional installation and maintenance services, ensuring a warm and efficient home.', 'Boiler types, Boiler fuel options, Boiler efficiency, Boiler size selection, Heating system guide, Boiler installation tips, Maintenance best practices, Energy-efficient heating, Environmental impact, Home comfort solutions', 0, '2023-09-12 17:47:31', '2023-09-12 17:47:31', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
