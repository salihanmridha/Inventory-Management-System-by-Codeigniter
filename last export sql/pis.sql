-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2019 at 06:54 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pis`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(2, 'Bifa'),
(3, 'Bifa4'),
(4, 'Ani'),
(5, 'Rico'),
(6, 'HP');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('tr5i7t9hgbu49i7c93cib40nj21p95m5', '::1', 1536636159, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363633363134363b),
('f2kfn02paurvqe16ffedu93gd16bg8ns', '::1', 1536637257, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363633373033373b),
('c1joc1e7hqm2cqq7nklb4q0t9cdj03a3', '::1', 1536638132, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363633373837363b),
('2aj8djungs78ovd8dppdrj7clr6h3201', '::1', 1536638495, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363633383231353b),
('9a8off3v0i0as2bmhvrkjhgjupdar8ub', '::1', 1536638617, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363633383533333b),
('1bc5e32duhle91icl5nont8ghp36eb34', '::1', 1536639046, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363633393034353b),
('vhgk9guuhemdt04lr0841b7uqgkh8jlb', '::1', 1536639649, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363633393634383b),
('2evchr48iqofpc047op1grif9l3898to', '::1', 1536640225, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363634303135373b),
('1vp679ot95nut2rb7t0pmle31h8ua4ie', '::1', 1536640598, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363634303438373b),
('a05o8ufuafq5anp664ek0vkbutojl9vm', '::1', 1536641117, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363634313035363b),
('10p3uh0s7tartu26qa00eco44pbe6se8', '::1', 1536732194, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363733323038313b);

-- --------------------------------------------------------

--
-- Table structure for table `copyright`
--

CREATE TABLE `copyright` (
  `copyright_id` int(11) NOT NULL,
  `copyright_name` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `copyright`
--

INSERT INTO `copyright` (`copyright_id`, `copyright_name`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `deposite_amount` int(255) NOT NULL DEFAULT '0',
  `payable_amount` int(255) NOT NULL DEFAULT '0',
  `pay` int(255) NOT NULL DEFAULT '0',
  `deposite_date` text NOT NULL,
  `receipt_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `email`, `phone`, `address`, `deposite_amount`, `payable_amount`, `pay`, `deposite_date`, `receipt_no`) VALUES
(1, 'karim saheb', 'karim@gmail.com', '01773710263', 'Mirpur-11, Dhaka', 5000, 7300, 3000, '2018-10-13', '15761'),
(2, 'Rahim Saheb', 'rahim@gmail.com', '012522222', 'Naya Palton, Dhaka', 10000, 38420, 2500, '2018-10-13', '13368'),
(3, 'nazmul', 'naz@jhsgf', '55383453473', 'ghjghjghj', 2000, 6300, 0, '2018-10-14', '12535');

-- --------------------------------------------------------

--
-- Table structure for table `customer_deposite`
--

CREATE TABLE `customer_deposite` (
  `customer_deposite_id` int(11) NOT NULL,
  `customer_id` text NOT NULL,
  `deposite_amount` text NOT NULL,
  `deposite_month` text NOT NULL,
  `deposite_year` text NOT NULL,
  `deposite_date` text NOT NULL,
  `deposite_receipt_no` text NOT NULL,
  `customer_pay` text NOT NULL,
  `sales_invoice_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_deposite`
--

INSERT INTO `customer_deposite` (`customer_deposite_id`, `customer_id`, `deposite_amount`, `deposite_month`, `deposite_year`, `deposite_date`, `deposite_receipt_no`, `customer_pay`, `sales_invoice_no`) VALUES
(1, '3', '700', '10', '2018', '2018-10-25', '13256', '', ''),
(2, '3', '400', '10', '2018', '2018-10-16', '24534', '', ''),
(3, '3', '500', '10', '2018', '2018-10-16', '24534', '', ''),
(4, '3', '0', '0', '2018', '2018-10-16', '2659', '2000.00', '24251'),
(5, '3', '2000', '02', '2019', '2019-02-10', '17674', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer_total_amount`
--

CREATE TABLE `customer_total_amount` (
  `customer_total_amount_id` int(11) NOT NULL,
  `customer_id` text NOT NULL,
  `total_deposite_credit` text NOT NULL,
  `payable_debit` text NOT NULL,
  `dues` text NOT NULL,
  `payment_monthly` text NOT NULL,
  `payment_yearly` text NOT NULL,
  `payment_date` text NOT NULL,
  `money_receipt_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_total_amount`
--

INSERT INTO `customer_total_amount` (`customer_total_amount_id`, `customer_id`, `total_deposite_credit`, `payable_debit`, `dues`, `payment_monthly`, `payment_yearly`, `payment_date`, `money_receipt_no`) VALUES
(1, '1', '400.00', '5600.00', '-5200', '10', '2018', '2018-10-27', ''),
(2, '2', '1600.00', '12400.00', '-10800.00', '10', '2018', '2018-10-20', ''),
(3, '3', '1850.00', '1200.00', '650.00', '10', '2018', '2018-10-18', '');

-- --------------------------------------------------------

--
-- Table structure for table `distribution_packing`
--

CREATE TABLE `distribution_packing` (
  `distribution_packing_id` int(11) NOT NULL,
  `product_id` int(255) NOT NULL,
  `distribution_product_unit` text NOT NULL,
  `distribution_quantity` text NOT NULL,
  `supplier_distribution_quantity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `distribution_packing`
--

INSERT INTO `distribution_packing` (`distribution_packing_id`, `product_id`, `distribution_product_unit`, `distribution_quantity`, `supplier_distribution_quantity`) VALUES
(1, 2, '24*4*3', '5', '250'),
(2, 3, '5*2', '5', '100'),
(3, 4, '2*3', '4', '40'),
(4, 5, '5*2', '2', '10'),
(5, 22, '9x5x2', '2', '10'),
(6, 21, '4x3x2', '2', '8'),
(7, 20, '8x5x3', '3', '9'),
(8, 19, '3x3x2', '3', '18'),
(9, 18, '6x3x2', '2', '14'),
(10, 17, '2x2x1', '3', '15'),
(11, 9, '6x3x2', '3', '33'),
(12, 12, '9x5x2', '4', '36'),
(13, 6, '11x5x3', '3', '30'),
(15, 23, '2', '1', '36');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `email_id` int(11) NOT NULL,
  `email_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`email_id`, `email_name`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Table structure for table `favicon`
--

CREATE TABLE `favicon` (
  `favicon_id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `favicon`
--

INSERT INTO `favicon` (`favicon_id`, `image`) VALUES
(1, 'favicon.png');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `product_history_id` int(11) NOT NULL,
  `date` text NOT NULL,
  `previous_product_price` text NOT NULL,
  `new_product_price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `import`
--

CREATE TABLE `import` (
  `import_id` int(11) NOT NULL,
  `unconfirmed_import_id` text NOT NULL,
  `import_batch_no` int(255) NOT NULL,
  `chalan_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `import`
--

INSERT INTO `import` (`import_id`, `unconfirmed_import_id`, `import_batch_no`, `chalan_date`) VALUES
(1, '[\"1\",\"2\"]', 16884, ''),
(2, '[\"3\"]', 6595, ''),
(114, '[\"4\",\"5\"]', 14585, ''),
(119, '[\"6\",\"7\",\"8\",\"9\",\"10\"]', 29763, ''),
(120, '[\"11\",\"12\",\"13\"]', 18669, ''),
(121, '[\"14\"]', 21757, '');

-- --------------------------------------------------------

--
-- Table structure for table `import_invoice`
--

CREATE TABLE `import_invoice` (
  `import_invoice_id` int(11) NOT NULL,
  `import_id` int(255) NOT NULL,
  `import_invoice_no` int(255) NOT NULL,
  `import_batch_no` int(255) NOT NULL,
  `import_total_quantity` text NOT NULL,
  `import_total_price` text NOT NULL,
  `import_invoice_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `import_invoice`
--

INSERT INTO `import_invoice` (`import_invoice_id`, `import_id`, `import_invoice_no`, `import_batch_no`, `import_total_quantity`, `import_total_price`, `import_invoice_date`) VALUES
(1, 1, 7453, 16884, '45', '21700', '2018-10-13'),
(2, 2, 4672, 6595, '9', '3600', '2018-10-14'),
(4, 114, 20542, 14585, '345', '545760', '2018-10-18'),
(5, 119, 6848, 29763, '48', '37432', '2018-10-27'),
(6, 120, 29474, 18669, '92', '82540', '2018-11-06'),
(7, 121, 30194, 21757, '10', '100120', '2019-02-25');

-- --------------------------------------------------------

--
-- Table structure for table `import_new`
--

CREATE TABLE `import_new` (
  `import_new_id` int(11) NOT NULL,
  `import_id` int(255) NOT NULL,
  `new_product_price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `import_new`
--

INSERT INTO `import_new` (`import_new_id`, `import_id`, `new_product_price`) VALUES
(1, 114, '2008'),
(2, 114, '508');

-- --------------------------------------------------------

--
-- Table structure for table `import_new_quantity_price`
--

CREATE TABLE `import_new_quantity_price` (
  `import_new_quantity_price_id` int(11) NOT NULL,
  `import_id` int(255) NOT NULL,
  `new_quantity_price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `import_new_quantity_price`
--

INSERT INTO `import_new_quantity_price` (`import_new_quantity_price_id`, `import_id`, `new_quantity_price`) VALUES
(1, 114, '495976'),
(2, 114, '49784');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(11) NOT NULL,
  `package_name` text NOT NULL,
  `package_product_name` text NOT NULL,
  `author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_name`, `package_product_name`, `author`) VALUES
(10, 'gfh', 'fghfghg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `package_imported_product`
--

CREATE TABLE `package_imported_product` (
  `package_product_id` int(11) NOT NULL,
  `package_id` int(255) NOT NULL,
  `invoice_imported_product_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package_imported_product`
--

INSERT INTO `package_imported_product` (`package_product_id`, `package_id`, `invoice_imported_product_id`) VALUES
(5, 9, 6),
(6, 10, 6),
(7, 10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `package_stock_product`
--

CREATE TABLE `package_stock_product` (
  `package_stock_product_id` int(11) NOT NULL,
  `package_id` int(255) NOT NULL,
  `stock_imported_product_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package_stock_product`
--

INSERT INTO `package_stock_product` (`package_stock_product_id`, `package_id`, `stock_imported_product_id`) VALUES
(5, 9, 5),
(6, 10, 6),
(7, 10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `unit_id` int(255) NOT NULL,
  `brand_id` int(255) NOT NULL,
  `style_id` int(255) NOT NULL,
  `supplier_id` int(255) NOT NULL,
  `product_code_no` text NOT NULL,
  `product_name` text NOT NULL,
  `entry_date` text NOT NULL,
  `product_description` text NOT NULL,
  `product_price` text NOT NULL,
  `new_quantity_price` text NOT NULL,
  `documents_no` text NOT NULL,
  `product` text NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL,
  `ingradient` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `unit_id`, `brand_id`, `style_id`, `supplier_id`, `product_code_no`, `product_name`, `entry_date`, `product_description`, `product_price`, `new_quantity_price`, `documents_no`, `product`, `country`, `state`, `ingradient`, `image`) VALUES
(2, 2, 2, 2, 1, '5749', 'chocklet catebarry', '2018-10-04', 'One of the best chocklet in bangladesh', '500', '', '101', 'chocklet', '-1', 'Dhaka', 'chocklet', 'chocolates.jpg'),
(3, 3, 3, 3, 2, '26445', 'chocklet catebarry2', '2018-10-07', 'One of the best quality chocklet', '510', '', '102', 'chocklet2', '-1', 'Blida', 'chocklet2', 'A-130-300x391.jpg'),
(4, 2, 2, 3, 2, '31761', 'dairy milk', '2018-10-13', 'best quality chocklet', '600', '', '107', 'chocklet3', '-1', 'Dhaka', 'chocklet3', 'A-130-300x391.jpg'),
(5, 3, 3, 2, 1, '13360', 'dairy milk 3', '2018-10-13', 'best quality products', '500', '', '109', 'chocklet4', '-1', 'Dhaka', 'chockle4', 'chocolates.jpg'),
(6, 5, 4, 5, 33, '2684', 'Brawo', '2018-10-27', 'Milky Chocolate and Caramel Coated Nougat Bar', '2900.00', '', '', 'Chocolate', '-1', 'Karaman', '', 'b_brawo-5033.jpg'),
(7, 5, 4, 5, 33, '2690', 'Sprinter', '2018-10-27', 'Milky Chocolate Peanuts and Caramel Nougat Bar', '3200.00', '', '', 'Chocolate', 'Turkey', 'Karaman', '', 'b_brawo-sprinter-4544.jpg'),
(8, 5, 4, 5, 33, '2691', 'Lineker', '2018-10-27', 'Milky Chocolate Peanuts and Caramel Nougat Bar', '3200.00', '', '', 'Chocolate', 'Turkey', 'Karaman', '', 'b_lineker-7392.jpg'),
(9, 5, 4, 6, 33, '971', 'Jimax', '2018-10-27', 'Milky Compound Chocolate With Crispy Rice And Hazelnut Flavoured Cream', '5200.00', '', '', 'Chocolate', 'Turkey', 'Karaman', '', 'b_jimax-821.jpg'),
(10, 5, 4, 7, 33, '2381', 'Ringo Star', '2018-10-27', 'Compound Chocolate and Caramel Coated Nougat Bar', '6350.00', '', '', 'Chocolate', '-1', '', '', 'b_ringo-star-752.jpg'),
(11, 5, 4, 8, 33, '2250', 'Joykat', '2018-10-27', 'Milky Cocoa Coated Wafers With Cocoa and Hazelnut Flavoured Cream', '4300.00', '', '', 'Chocolate', '-1', 'Karaman', '', 'b_joykat-2157.jpg'),
(12, 5, 4, 7, 33, '2232', 'Lublino 25g', '2018-10-27', 'Milky Cocoa and Caramel Coated Wafers With Crisped Rice', '3500.00', '', '', 'Chocolate', 'Turkey', 'Karaman', '', 'b_lublino-25-g-6305.jpg'),
(13, 5, 4, 9, 33, '2233', 'Lublino 50g', '2018-10-27', 'Milky Cocoa and Chocolate Coated Wafers With Crisped Rice', '2900.00', '', '', 'Chocolate', 'Turkey', 'Karaman', '', 'b_lublino-50-g-6986.jpg'),
(14, 5, 4, 10, 33, '2018', 'Coco Romeo 50g', '2018-10-27', 'Milky Cocoa Bar Filled With Coconut', '3200.00', '', '', 'Chocolate', 'Turkey', 'Karaman', '', 'b_coco-romeo-50-g-6881.jpg'),
(15, 5, 4, 11, 33, '2032', 'Brawo Desire', '2018-10-27', 'Chocolate Coated Cake Filled With Caramel', '2300.00', '', '', 'Chocolate', 'Turkey', 'Karaman', '', 'b_brawo-desire-findikli-7179.jpg'),
(16, 5, 4, 6, 33, '2033', 'Brawo Desire', '2018-10-27', 'Hazelnut Chocolate Coated Cake Filled With Cocoa Cream', '2300.00', '', '', 'Chocolate', 'Turkey', 'Karaman', '', 'b_brawo-desire-findikli-7179.jpg'),
(17, 5, 4, 12, 33, '4995', 'Frolle x2', '2018-10-27', 'White Compound Chocolate Coated Wafers', '3350', '', '', 'Chocolate', 'Turkey', 'Karaman', '', 'b_frolle-8176.jpg'),
(18, 5, 5, 13, 34, 'CB-223', 'Chococos', '2018-10-27', 'Chocolate Beans', '1200.00', '', '', 'Chocolate', '-1', 'Kedah', '', 'CB223-CHOCOCOS.jpg'),
(19, 5, 5, 13, 34, 'CB-225', 'Coffeecos', '2018-10-27', 'Coffee Candy', '1400.00', '', '', 'Chocolate', 'Malaysia', 'Kedah', '', 'CB225-COFFEECOS.jpg'),
(20, 5, 5, 14, 34, 'CB-249', 'EYEGLASS With Candy', '2018-10-27', 'Candy Choco Beans', '1300.00', '', '', 'Chocolate', '-1', 'Kedah', '', 'CB249-GLASS.jpg'),
(21, 5, 5, 15, 34, 'JA-0001', 'Mix Fruit Jelly', '2018-10-27', 'Assorted Fruity Jelly', '1600.00', '', '', 'Jelly', '-1', 'Kedah', '', 'JA-0001.jpg'),
(22, 5, 5, 15, 34, 'JA-0018', 'Fruity Pudding', '2018-10-27', 'Assorted Fruity Pudding', '1400.00', '', '', 'Pudding', '-1', 'Kedah', 'Fruity Pudding', 'JA0018.jpg'),
(23, 4, 6, 16, 35, '1000876', 'HP Spectre x360', '2019-02-01', 'HP Spectre x360 13-AE517TU 8th Gen Intel Core i7 8550U (1.8-4.0GHz, 16GB 2133MHz Onboard LPDDR3, 512GB PCIe NVMe M.2 SSD) 13.3 Inch FHD (1920x1080) IPS micro-edge WLED-backlit Touch Screen with Corning Gorilla Glass, Copper and Gold Notebook with Win-10 H', '155000', '', '', 'HP Laptop', '-1', 'New Jersey', 'HP 8th generation core i7 laptop', 'laptop-pic.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `product_allocation`
--

CREATE TABLE `product_allocation` (
  `product_allocation_id` int(11) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `import_code_no` int(255) NOT NULL,
  `al_quantity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_history`
--

CREATE TABLE `product_history` (
  `product_history_id` int(11) NOT NULL,
  `product_id` int(255) NOT NULL,
  `unit_id` int(255) NOT NULL,
  `unit_id_old` text NOT NULL,
  `brand_id` int(255) NOT NULL,
  `brand_id_old` text NOT NULL,
  `style_id` int(255) NOT NULL,
  `style_id_old` text NOT NULL,
  `supplier_id` int(255) NOT NULL,
  `supplier_id_old` text NOT NULL,
  `product_code_no` text NOT NULL,
  `product_code_no_old` text NOT NULL,
  `product_name` text NOT NULL,
  `product_name_old` text NOT NULL,
  `entry_date` text NOT NULL,
  `entry_date_old` text NOT NULL,
  `product_description` text NOT NULL,
  `product_description_old` text NOT NULL,
  `product_price` text NOT NULL,
  `product_price_old` text NOT NULL,
  `product` text NOT NULL,
  `product_old` text NOT NULL,
  `country` text NOT NULL,
  `country_old` text NOT NULL,
  `state` text NOT NULL,
  `state_old` text NOT NULL,
  `ingradient` text NOT NULL,
  `ingradient_old` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_history`
--

INSERT INTO `product_history` (`product_history_id`, `product_id`, `unit_id`, `unit_id_old`, `brand_id`, `brand_id_old`, `style_id`, `style_id_old`, `supplier_id`, `supplier_id_old`, `product_code_no`, `product_code_no_old`, `product_name`, `product_name_old`, `entry_date`, `entry_date_old`, `product_description`, `product_description_old`, `product_price`, `product_price_old`, `product`, `product_old`, `country`, `country_old`, `state`, `state_old`, `ingradient`, `ingradient_old`, `date`, `time`) VALUES
(1, 22, 5, '5', 5, '5', 15, '15', 34, '34', 'JA-0018', 'JA-0018', 'Fruity Pudding', 'Fruity Pudding', '2018-10-27', '2018-10-27', 'Assorted Fruity Pudding', 'Assorted Fruity Pudding', '1500.00', '1600.00', 'Pudding', 'Pudding', '-1', '-1', 'Kedah', 'Kedah', 'Fruity Pudding', 'Fruity Pudding', '10-11-2018', '07:59:01am'),
(2, 22, 5, '5', 5, '5', 15, '15', 34, '34', 'JA-0018', 'JA-0018', 'Fruity Pudding', 'Fruity Pudding', '2018-10-27', '2018-10-27', 'Assorted Fruity Pudding', 'Assorted Fruity Pudding', '1400.00', '1500.00', 'Pudding', 'Pudding', '-1', '-1', 'Kedah', 'Kedah', 'Fruity Pudding', 'Fruity Pudding', '10-11-2018', '01:01:11pm'),
(3, 2, 2, '2', 2, '2', 2, '2', 1, '1', '5749', '5749', 'chocklet catebarry', 'chocklet catebarry', '2018-10-04', '2018-10-04', 'One of the best chocklet in bangladesh', 'One of the best chocklet in bangladesh', '450', '350', 'chocklet', 'chocklet', '-1', 'Bangladesh', 'Dhaka', 'Dhaka', 'chocklet', 'chocklet', '13-11-2018', '03:02:43pm'),
(4, 3, 3, '3', 3, '3', 3, '3', 2, '2', '26445', '26445', 'chocklet catebarry2', 'chocklet catebarry2', '2018-10-07', '2018-10-07', 'One of the best quality chocklet', 'One of the best quality chocklet', '510', '508', 'chocklet2', 'chocklet2', '-1', 'Algeria', 'Blida', 'Blida', 'chocklet2', 'chocklet2', '13-11-2018', '03:02:56pm'),
(5, 4, 2, '2', 2, '2', 3, '3', 2, '2', '31761', '31761', 'dairy milk', 'dairy milk', '2018-10-13', '2018-10-13', 'best quality chocklet', 'best quality chocklet', '600', '500', 'chocklet3', 'chocklet3', '-1', 'Bangladesh', 'Dhaka', 'Dhaka', 'chocklet3', 'chocklet3', '13-11-2018', '03:03:06pm'),
(6, 5, 3, '3', 3, '3', 2, '2', 1, '1', '13360', '13360', 'dairy milk 3', 'dairy milk 3', '2018-10-13', '2018-10-13', 'best quality products', 'best quality products', '500', '400', 'chocklet4', 'chocklet4', '-1', 'Bangladesh', 'Dhaka', 'Dhaka', 'chockle4', 'chockle4', '13-11-2018', '03:03:16pm'),
(7, 6, 5, '5', 4, '4', 5, '5', 33, '33', '2684', '2684', 'Brawo', 'Brawo', '2018-10-27', '2018-10-27', 'Milky Chocolate and Caramel Coated Nougat Bar', 'Milky Chocolate and Caramel Coated Nougat Bar', '2900.00', '2800.00', 'Chocolate', 'Chocolate', '-1', '-1', 'Karaman', 'Karaman', '', '', '13-11-2018', '03:03:26pm'),
(8, 23, 4, '4', 6, '6', 16, '16', 35, '35', '1000876', '1000876', 'HP Spectre x360', 'HP Spectre x360', '2019-02-01', '2019-02-01', 'HP Spectre x360 13-AE517TU 8th Gen Intel Core i7 8550U (1.8-4.0GHz, 16GB 2133MHz Onboard LPDDR3, 512GB PCIe NVMe M.2 SSD) 13.3 Inch FHD (1920x1080) IPS micro-edge WLED-backlit Touch Screen with Corning Gorilla Glass, Copper and Gold Notebook with Win-10 H', 'HP Spectre x360 13-AE517TU 8th Gen Intel Core i7 8550U (1.8-4.0GHz, 16GB 2133MHz Onboard LPDDR3, 512GB PCIe NVMe M.2 SSD) 13.3 Inch FHD (1920x1080) IPS micro-edge WLED-backlit Touch Screen with Corning Gorilla Glass, Copper and Gold Notebook with Win-10 H', '155000', '155000', 'HP Laptop', 'HP Laptop', '-1', '-1', 'New Jersey', 'New Jersey', 'HP 8th generation core i7 laptop', 'HP 8th generation core i7 laptop', '25-02-2019', '10:29:44am'),
(9, 23, 4, '4', 6, '6', 16, '16', 35, '35', '1000876', '1000876', 'HP Spectre x360', 'HP Spectre x360', '2019-02-01', '2019-02-01', 'HP Spectre x360 13-AE517TU 8th Gen Intel Core i7 8550U (1.8-4.0GHz, 16GB 2133MHz Onboard LPDDR3, 512GB PCIe NVMe M.2 SSD) 13.3 Inch FHD (1920x1080) IPS micro-edge WLED-backlit Touch Screen with Corning Gorilla Glass, Copper and Gold Notebook with Win-10 H', 'HP Spectre x360 13-AE517TU 8th Gen Intel Core i7 8550U (1.8-4.0GHz, 16GB 2133MHz Onboard LPDDR3, 512GB PCIe NVMe M.2 SSD) 13.3 Inch FHD (1920x1080) IPS micro-edge WLED-backlit Touch Screen with Corning Gorilla Glass, Copper and Gold Notebook with Win-10 H', '155000', '155000', 'HP Laptop', 'HP Laptop', '-1', '-1', 'New Jersey', 'New Jersey', 'HP 8th generation core i7 laptop', 'HP 8th generation core i7 laptop', '25-02-2019', '10:29:57am'),
(10, 23, 4, '4', 6, '6', 16, '16', 35, '35', '1000876', '1000876', 'HP Spectre x360', 'HP Spectre x360', '2019-02-01', '2019-02-01', 'HP Spectre x360 13-AE517TU 8th Gen Intel Core i7 8550U (1.8-4.0GHz, 16GB 2133MHz Onboard LPDDR3, 512GB PCIe NVMe M.2 SSD) 13.3 Inch FHD (1920x1080) IPS micro-edge WLED-backlit Touch Screen with Corning Gorilla Glass, Copper and Gold Notebook with Win-10 H', 'HP Spectre x360 13-AE517TU 8th Gen Intel Core i7 8550U (1.8-4.0GHz, 16GB 2133MHz Onboard LPDDR3, 512GB PCIe NVMe M.2 SSD) 13.3 Inch FHD (1920x1080) IPS micro-edge WLED-backlit Touch Screen with Corning Gorilla Glass, Copper and Gold Notebook with Win-10 H', '155000', '155000', 'HP Laptop', 'HP Laptop', '-1', '-1', 'New Jersey', 'New Jersey', 'HP 8th generation core i7 laptop', 'HP 8th generation core i7 laptop', '25-02-2019', '10:30:13am'),
(11, 23, 4, '4', 6, '6', 16, '16', 35, '35', '1000877', '1000876', 'HP Spectre x360', 'HP Spectre x360', '2019-02-01', '2019-02-01', 'HP Spectre x360 13-AE517TU 8th Gen Intel Core i7 8550U (1.8-4.0GHz, 16GB 2133MHz Onboard LPDDR3, 512GB PCIe NVMe M.2 SSD) 13.3 Inch FHD (1920x1080) IPS micro-edge WLED-backlit Touch Screen with Corning Gorilla Glass, Copper and Gold Notebook with Win-10 H', 'HP Spectre x360 13-AE517TU 8th Gen Intel Core i7 8550U (1.8-4.0GHz, 16GB 2133MHz Onboard LPDDR3, 512GB PCIe NVMe M.2 SSD) 13.3 Inch FHD (1920x1080) IPS micro-edge WLED-backlit Touch Screen with Corning Gorilla Glass, Copper and Gold Notebook with Win-10 H', '155000', '155000', 'HP Laptop', 'HP Laptop', '-1', '-1', 'New Jersey', 'New Jersey', 'HP 8th generation core i7 laptop', 'HP 8th generation core i7 laptop', '25-02-2019', '10:30:48am'),
(12, 23, 4, '4', 6, '6', 16, '16', 35, '35', '1000877', '1000877', 'HP Spectre x360', 'HP Spectre x360', '2019-02-01', '2019-02-01', 'HP Spectre x360 13-AE517TU 8th Gen Intel Core i7 8550U (1.8-4.0GHz, 16GB 2133MHz Onboard LPDDR3, 512GB PCIe NVMe M.2 SSD) 13.3 Inch FHD (1920x1080) IPS micro-edge WLED-backlit Touch Screen with Corning Gorilla Glass, Copper and Gold Notebook with Win-10 H', 'HP Spectre x360 13-AE517TU 8th Gen Intel Core i7 8550U (1.8-4.0GHz, 16GB 2133MHz Onboard LPDDR3, 512GB PCIe NVMe M.2 SSD) 13.3 Inch FHD (1920x1080) IPS micro-edge WLED-backlit Touch Screen with Corning Gorilla Glass, Copper and Gold Notebook with Win-10 H', '155000', '155000', 'HP Laptop', 'HP Laptop', '-1', '-1', 'New Jersey', 'New Jersey', 'HP 8th generation core i7 laptop', 'HP 8th generation core i7 laptop', '25-02-2019', '10:33:02am'),
(13, 23, 4, '4', 6, '6', 16, '16', 35, '35', '1000876', '1000877', 'HP Spectre x360', 'HP Spectre x360', '2019-02-01', '2019-02-01', 'HP Spectre x360 13-AE517TU 8th Gen Intel Core i7 8550U (1.8-4.0GHz, 16GB 2133MHz Onboard LPDDR3, 512GB PCIe NVMe M.2 SSD) 13.3 Inch FHD (1920x1080) IPS micro-edge WLED-backlit Touch Screen with Corning Gorilla Glass, Copper and Gold Notebook with Win-10 H', 'HP Spectre x360 13-AE517TU 8th Gen Intel Core i7 8550U (1.8-4.0GHz, 16GB 2133MHz Onboard LPDDR3, 512GB PCIe NVMe M.2 SSD) 13.3 Inch FHD (1920x1080) IPS micro-edge WLED-backlit Touch Screen with Corning Gorilla Glass, Copper and Gold Notebook with Win-10 H', '155000', '155000', 'HP Laptop', 'HP Laptop', '-1', '-1', 'New Jersey', 'New Jersey', 'HP 8th generation core i7 laptop', 'HP 8th generation core i7 laptop', '25-02-2019', '10:33:38am');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `return_qty_price` text NOT NULL,
  `customer_sales_payment` text NOT NULL,
  `money_receipt_no_1` text NOT NULL,
  `product_id` int(255) NOT NULL,
  `sale_quantity` int(255) NOT NULL,
  `sale_quantity_price` text NOT NULL,
  `sales_confirm_type` int(255) NOT NULL DEFAULT '0',
  `sales_return` int(11) NOT NULL DEFAULT '0',
  `sales_confirm_id` int(255) NOT NULL DEFAULT '0',
  `import_code_no` int(255) NOT NULL,
  `sales_invoice_no_1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `customer_id`, `return_qty_price`, `customer_sales_payment`, `money_receipt_no_1`, `product_id`, `sale_quantity`, `sale_quantity_price`, `sales_confirm_type`, `sales_return`, `sales_confirm_id`, `import_code_no`, `sales_invoice_no_1`) VALUES
(1, 2, '', '', '', 4, 2, '1000.00', 1, 0, 1, 2773, '15769'),
(2, 2, '', '', '', 5, 2, '800.00', 1, 0, 1, 4578, '2142'),
(3, 2, '', '', '', 5, 3, '1200.00', 1, 0, 1, 4578, '27868'),
(4, 1, '', '', '', 2, 2, '700.00', 1, 0, 2, 20834, '6673'),
(5, 1, '', '', '', 4, 2, '1000.00', 1, 0, 2, 2773, '30582'),
(6, 2, '', '', '', 18, 2, '2400.00', 1, 0, 3, 13927, '24251'),
(7, 2, '', '', '', 19, 2, '2800.00', 1, 0, 3, 23380, '32728'),
(8, 2, '', '', '', 20, 2, '2600.00', 1, 0, 3, 21172, '28465'),
(9, 2, '', '', '', 21, 1, '1600.00', 1, 0, 3, 27203, '30230'),
(10, 1, '', '', '', 20, 3, '3900.00', 1, 0, 4, 21172, '17074'),
(12, 3, '', '', '', 18, 1, '1200.00', 1, 0, 5, 13927, '15208'),
(13, 2, '', '400.00', '23451', 0, 0, '', 1, 0, 6, 0, ''),
(14, 2, '', '700.00', '25473', 0, 0, '', 1, 0, 6, 0, ''),
(15, 2, '', '500.00', '34578', 0, 0, '', 1, 0, 6, 0, ''),
(16, 1, '', '400.00', '34561', 0, 0, '', 1, 0, 6, 0, ''),
(17, 3, '', '1850.00', '25891', 0, 0, '', 1, 0, 6, 0, ''),
(19, 2, '800.00', '', '', 0, 0, '-800.00', 1, 0, 6, 0, 'R-23458'),
(20, 2, '1300.00', '', '', 0, 0, '-1300.00', 1, 0, 6, 0, 'R-25987'),
(21, 1, '1300.00', '', '', 0, 0, '-1300.00', 1, 0, 6, 0, 'R-21547'),
(22, 1, '', '', '', 21, 5, '8000', 1, 0, 6, 27203, '12049'),
(23, 3, '', '', '', 22, 2, '3000', 1, 0, 7, 19026, '19210'),
(24, 3, '', '', '', 2, 2, '900', 1, 0, 7, 20834, '9624'),
(25, 2, '', '', '', 3, 2, '1020', 1, 0, 8, 24992, '497');

-- --------------------------------------------------------

--
-- Table structure for table `sales_confirm`
--

CREATE TABLE `sales_confirm` (
  `sales_confirm_id` int(11) NOT NULL,
  `sales_batch_no` int(255) NOT NULL,
  `sales_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales_confirm`
--

INSERT INTO `sales_confirm` (`sales_confirm_id`, `sales_batch_no`, `sales_id`) VALUES
(1, 2087, '[\"1\",\"2\",\"3\"]'),
(2, 375, '[\"4\",\"5\"]'),
(3, 11159, '[\"6\",\"7\",\"8\",\"9\"]'),
(4, 20995, '[\"10\"]'),
(5, 11137, '[\"12\"]'),
(6, 26742, '[\"13\",\"14\",\"15\",\"16\",\"17\",\"19\",\"20\",\"21\",\"22\"]'),
(7, 4469, '[\"23\",\"24\"]'),
(8, 23127, '[\"25\"]');

-- --------------------------------------------------------

--
-- Table structure for table `sales_customer`
--

CREATE TABLE `sales_customer` (
  `sales_customer_id` int(11) NOT NULL,
  `customer_payment` text NOT NULL,
  `customer_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales_customer`
--

INSERT INTO `sales_customer` (`sales_customer_id`, `customer_payment`, `customer_id`) VALUES
(1, '500', 2),
(2, '300', 2),
(3, '400', 2),
(4, '600', 3),
(5, '500', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sales_invoice`
--

CREATE TABLE `sales_invoice` (
  `sales_invoice_id` int(11) NOT NULL,
  `sales_confirm_id` int(255) NOT NULL,
  `sales_invoice_no` int(255) NOT NULL,
  `sales_batch_no` int(255) NOT NULL,
  `sales_total_quantity` text NOT NULL,
  `sales_total_price` text NOT NULL,
  `sales_invoice_date` text NOT NULL,
  `sales_invoice_month` text NOT NULL,
  `sales_invoice_year` text NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales_invoice`
--

INSERT INTO `sales_invoice` (`sales_invoice_id`, `sales_confirm_id`, `sales_invoice_no`, `sales_batch_no`, `sales_total_quantity`, `sales_total_price`, `sales_invoice_date`, `sales_invoice_month`, `sales_invoice_year`, `customer_id`) VALUES
(1, 1, 15769, 2087, '7', '3000', '2018-10-25', '10', '2018', 2),
(2, 2, 6673, 375, '4', '1700', '2018-10-27', '10', '2018', 1),
(3, 3, 24251, 11159, '7', '9400', '2018-10-27', '10', '2018', 2),
(4, 4, 17074, 20995, '3', '3900', '2018-10-27', '10', '2018', 1),
(5, 5, 15208, 11137, '1', '1200', '2018-10-30', '10', '2018', 3),
(6, 6, 1258, 26742, '5', '8000', '2018-11-05', '11', '2018', 2),
(7, 7, 19210, 4469, '4', '3900', '2019-02-10', '02', '2019', 3),
(8, 8, 497, 23127, '2', '1020', '2019-02-10', '02', '2019', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sales_product`
--

CREATE TABLE `sales_product` (
  `sales_product_id` int(11) NOT NULL,
  `sales_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sales_report`
--

CREATE TABLE `sales_report` (
  `sales_report_id` int(11) NOT NULL,
  `sales_id` int(255) NOT NULL,
  `sales_report_month` text NOT NULL,
  `sales_report_year` text NOT NULL,
  `sales_report_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales_report`
--

INSERT INTO `sales_report` (`sales_report_id`, `sales_id`, `sales_report_month`, `sales_report_year`, `sales_report_date`) VALUES
(1, 1, '10', '2018', '2018-10-14'),
(2, 2, '10', '2018', '2018-10-15'),
(3, 3, '10', '2018', '2018-10-16'),
(4, 4, '10', '2018', '2018-10-22'),
(5, 5, '10', '2018', '2018-10-27'),
(6, 6, '10', '2018', '2018-10-25'),
(7, 7, '10', '2018', '2018-10-27'),
(8, 8, '10', '2018', '2018-10-29'),
(9, 9, '10', '2018', '2018-10-27'),
(10, 10, '10', '2018', '2018-10-27'),
(12, 12, '10', '2018', '2018-10-30'),
(13, 13, '10', '2018', '2018-10-27'),
(14, 14, '10', '2018', '2018-10-16'),
(15, 15, '10', '2018', '2018-10-14'),
(16, 16, '10', '2018', '2018-10-27'),
(17, 17, '10', '2018', '2018-10-14'),
(19, 19, '10', '2018', '2018-10-25'),
(20, 20, '10', '2018', '2018-10-23'),
(21, 21, '10', '2018', '2018-10-16'),
(22, 22, '11', '2018', '2018-11-05'),
(23, 23, '11', '2018', '2018-11-06'),
(24, 24, '02', '2019', '2019-02-10'),
(25, 25, '02', '2019', '2019-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `sales_return`
--

CREATE TABLE `sales_return` (
  `sales_return_id` int(11) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `sold_qty` text NOT NULL,
  `return_qty` text NOT NULL,
  `return_month` text NOT NULL,
  `return_year` text NOT NULL,
  `return_date` text NOT NULL,
  `product_price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales_return`
--

INSERT INTO `sales_return` (`sales_return_id`, `customer_id`, `product_id`, `sold_qty`, `return_qty`, `return_month`, `return_year`, `return_date`, `product_price`) VALUES
(1, 2, 5, '5', '2', '10', '2018', '2018-10-28', '500'),
(2, 2, 20, '2', '1', '10', '2018', '2018-10-29', '1300.00'),
(3, 1, 20, '3', '1', '10', '2018', '2018-10-29', '1300.00'),
(4, 3, 2, '2', '1', '02', '2019', '2019-02-10', '450'),
(5, 1, 2, '2', '1', '02', '2019', '2019-02-10', '450');

-- --------------------------------------------------------

--
-- Table structure for table `site_logo`
--

CREATE TABLE `site_logo` (
  `site_logo_id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_logo`
--

INSERT INTO `site_logo` (`site_logo_id`, `image`) VALUES
(1, 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `style`
--

CREATE TABLE `style` (
  `style_id` int(11) NOT NULL,
  `style_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `style`
--

INSERT INTO `style` (`style_id`, `style_name`) VALUES
(2, '120gm'),
(3, '100gm'),
(4, '25gm'),
(5, '50gm x 24Pcs x 6Box'),
(6, '36gm x 24 pcs x 6 Box'),
(7, '25gm x 24pcs x 6Box'),
(8, '32gm x 24pcs x 6Box'),
(9, '46gm x 24pcs x 6Box'),
(10, '48gm x 24pcs x 6Box'),
(11, '40gm x 24 pcs x 6 Box'),
(12, '30gm x 24pcs x 6Box'),
(13, '25gm x 12 pcs x 24Box'),
(14, '40pcs x 24Box'),
(15, '750gm x 12pkt x 50pcs'),
(16, '1500gm X 6pcs X 1Box');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` text NOT NULL,
  `supplier_email` text NOT NULL,
  `supplier_phone` text NOT NULL,
  `supplier_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `supplier_email`, `supplier_phone`, `supplier_address`) VALUES
(1, 'Prarona Enterprise', 'info@praronaenterprise.com', '01773710263', 'Naya Palton, Dhaka'),
(2, 'amarpriyo.com', 'amarpriyo@gmail.com', '017555552354', 'S.R garden, Naya Palton, Dhaka'),
(32, 'Amarpriyo Page', 'amarpriyopage@gmail.com', '012547854785', 'polton dhaka'),
(33, 'Anı Biscuits Food Industry And Trade Inc', 'bilgi@anibiskuvi.com.tr', '+90 (338) 224 12 30', 'Organize Sanayi Bölgesi 16. Cadde No:16 KARAMAN / TÜRKİYE'),
(34, 'Rico Food', 'info@ricofood.com.my', '+604-4848888', '42, Jalan Makmur 2, Taman Makmur, 09600 Lunas, Kedah Darul Aman, Malaysia'),
(35, 'Salihan Mridha', 'salihanmridha@gmail.com', '01782624220', '592, Madrasa Road, Siddhirgonj, Narayangonj');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_packing`
--

CREATE TABLE `supplier_packing` (
  `supplier_packing_id` int(11) NOT NULL,
  `product_id` int(255) NOT NULL,
  `supplier_id` int(255) NOT NULL,
  `supplier_product_unit` text NOT NULL,
  `supplier_quantity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier_packing`
--

INSERT INTO `supplier_packing` (`supplier_packing_id`, `product_id`, `supplier_id`, `supplier_product_unit`, `supplier_quantity`) VALUES
(1, 2, 1, '24*5*3', '50'),
(2, 3, 2, '10*20*3', '20'),
(3, 4, 2, '10*50*3', '10'),
(4, 5, 1, '24*5*3', '5'),
(5, 22, 34, '750 x12x 50 ', '5'),
(6, 21, 34, '750x12x 50', '4'),
(7, 20, 34, '40x 24', '3'),
(8, 19, 34, '25x 12x24', '6'),
(9, 18, 34, '25x 12x24', '7'),
(10, 17, 33, '3x2x1', '5'),
(11, 6, 33, '10x5x3', '10'),
(12, 14, 33, '3x2x1', '7'),
(13, 12, 33, '4x3x2', '9'),
(14, 9, 33, '5x3x2', '11'),
(15, 23, 35, '6', '36');

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `title_id` int(11) NOT NULL,
  `title_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`title_id`, `title_name`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Table structure for table `unconfirmed_import`
--

CREATE TABLE `unconfirmed_import` (
  `unconfirmed_import_id` int(11) NOT NULL,
  `supplier_id` int(255) NOT NULL,
  `product_id` text NOT NULL,
  `import_code_no` int(255) NOT NULL,
  `lost_damage` text NOT NULL,
  `production_date` text NOT NULL,
  `expiery_date` text NOT NULL,
  `cost_price` text NOT NULL,
  `quantity` text NOT NULL,
  `import_monthly` text NOT NULL,
  `quantity_price` text NOT NULL,
  `import_yearly` text NOT NULL,
  `import_date` text NOT NULL,
  `unconfirmed_type` int(11) NOT NULL DEFAULT '0',
  `import_id` int(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `unconfirmed_import`
--

INSERT INTO `unconfirmed_import` (`unconfirmed_import_id`, `supplier_id`, `product_id`, `import_code_no`, `lost_damage`, `production_date`, `expiery_date`, `cost_price`, `quantity`, `import_monthly`, `quantity_price`, `import_yearly`, `import_date`, `unconfirmed_type`, `import_id`) VALUES
(1, 2, '4', 2773, '3', '2018-10-09', '2018-10-17', '600', '26', '10', '13000', '2018', '2018-10-04', 1, 1),
(2, 1, '5', 5678, '2', '2018-10-03', '2018-10-24', '450', '10', '10', '3200', '2018', '2018-10-05', 1, 1),
(3, 1, '5', 4578, '1', '2018-10-16', '2018-10-31', '450', '10', '10', '4000', '2018', '2018-10-06', 1, 2),
(4, 2, '3', 24992, '2', '2018-10-09', '2018-10-25', '550', '96', '10', '48960', '2018', '2018-10-07', 1, 114),
(5, 1, '2', 20834, '3', '2018-10-07', '2018-10-20', '380', '247', '10', '110250', '2018', '2018-10-08', 1, 114),
(6, 34, '18', 13927, '2', '2018-10-10', '2018-10-31', '934', '11', '10', '13200', '2018', '2018-10-27', 1, 119),
(7, 34, '19', 23380, '1', '2018-10-10', '2018-10-31', '834', '17', '10', '23800', '2018', '2018-10-11', 1, 119),
(8, 34, '20', 21172, '3', '2018-10-10', '2018-10-30', '734', '8', '10', '4200', '2018', '2018-10-27', 1, 119),
(9, 34, '21', 27203, '1', '2018-10-02', '2018-10-30', '634', '2', '10', '3200', '2018', '2018-10-27', 1, 119),
(10, 34, '22', 19026, '4', '2018-10-01', '2018-10-29', '534', '4', '10', '6000', '2018', '2018-10-27', 1, 119),
(11, 33, '6', 13206, '2', '2018-10-31', '2018-11-07', '995', '28', '11', '25200', '2018', '2018-11-06', 1, 120),
(12, 33, '9', 23319, '3', '2018-10-31]', '2018-11-07', '695', '30', '11', '18000', '2018', '2018-11-06', 1, 120),
(13, 33, '12', 31492, '2', '2018-10-31', '2018-11-07', '995', '34', '11', '30600', '2018', '2018-11-06', 1, 120),
(14, 2, '3', 27549, '10', '2018-11-07', '2018-11-21', '10012', '10', '11', '100000', '2018', '2018-11-10', 1, 121),
(15, 35, '23', 30567, '100000', '', '', '', '-99964', '02', '0', '2019', '2019-02-25', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` int(11) NOT NULL,
  `unit_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `unit_name`) VALUES
(2, 'Kg'),
(3, 'Pcs'),
(4, 'Box'),
(5, 'Cartoon');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `type`) VALUES
(1, 'admin@gmail.com', 'admin', '1'),
(2, 'user@gmail.com', 'user', 'manager'),
(3, 'user2@gmail.com', 'user2', 'accounts'),
(4, 'salihanmridha@gmail.com', '123456', 'supplier');

-- --------------------------------------------------------

--
-- Table structure for table `user_previledge`
--

CREATE TABLE `user_previledge` (
  `user_previledge_id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `presets` text,
  `supplier` text,
  `supplier_view` text,
  `supplier_add` text,
  `supplier_edit` text,
  `brand` text,
  `brand_view` text,
  `brand_add` text,
  `brand_edit` text,
  `brand_delete` text,
  `unit` text,
  `unit_view` text,
  `unit_add` text,
  `unit_edit` text,
  `unit_delete` text,
  `style` text,
  `style_view` text,
  `style_add` text,
  `style_edit` text,
  `style_delete` text,
  `product` text,
  `product_view` text,
  `product_add` text,
  `product_edit` text,
  `product_delete` text,
  `supplier_packing` text,
  `supplier_packing_view` text,
  `supplier_packing_add` text,
  `supplier_packing_edit` text,
  `supplier_packing_delete` text,
  `distribution_packing` text,
  `distribution_packing_view` text,
  `distribution_packing_add` text,
  `distribution_packing_edit` text,
  `distribution_packing_delete` text,
  `product_import` text,
  `import_add` text,
  `import_view` text,
  `import_print` text,
  `import_delete` text,
  `operation` text,
  `inventory` text,
  `inventory_view` text,
  `customer` text,
  `customer_view` text,
  `customer_add` text,
  `customer_edit` text,
  `customer_delete` text,
  `sales` text,
  `sales_create` text,
  `return_1` text,
  `sales_return` text,
  `invoice` text,
  `invoice_listing` text,
  `invoice_print` text,
  `challan` text,
  `challan_listing` text,
  `challan_print` text,
  `receipt` text,
  `receipt_listing` text,
  `receipt_print` text,
  `ledger` text,
  `ledger_view` text,
  `report` text,
  `import_report` text,
  `supplier_import_report` text,
  `product_import_report` text,
  `inventory_report` text,
  `supplier_inventory_report` text,
  `product_inventory_report` text,
  `sales_report` text,
  `product_sales_report` text,
  `supplier_sales_report` text,
  `invoice_sales_report` text,
  `cost_sales_report` text,
  `return_report` text,
  `product_return_report` text,
  `supplier_return_report` text,
  `invoice_return_report` text,
  `ledger_report` text,
  `customer_ledger_report` text,
  `all_customer_ledger_report` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_previledge`
--

INSERT INTO `user_previledge` (`user_previledge_id`, `user_id`, `presets`, `supplier`, `supplier_view`, `supplier_add`, `supplier_edit`, `brand`, `brand_view`, `brand_add`, `brand_edit`, `brand_delete`, `unit`, `unit_view`, `unit_add`, `unit_edit`, `unit_delete`, `style`, `style_view`, `style_add`, `style_edit`, `style_delete`, `product`, `product_view`, `product_add`, `product_edit`, `product_delete`, `supplier_packing`, `supplier_packing_view`, `supplier_packing_add`, `supplier_packing_edit`, `supplier_packing_delete`, `distribution_packing`, `distribution_packing_view`, `distribution_packing_add`, `distribution_packing_edit`, `distribution_packing_delete`, `product_import`, `import_add`, `import_view`, `import_print`, `import_delete`, `operation`, `inventory`, `inventory_view`, `customer`, `customer_view`, `customer_add`, `customer_edit`, `customer_delete`, `sales`, `sales_create`, `return_1`, `sales_return`, `invoice`, `invoice_listing`, `invoice_print`, `challan`, `challan_listing`, `challan_print`, `receipt`, `receipt_listing`, `receipt_print`, `ledger`, `ledger_view`, `report`, `import_report`, `supplier_import_report`, `product_import_report`, `inventory_report`, `supplier_inventory_report`, `product_inventory_report`, `sales_report`, `product_sales_report`, `supplier_sales_report`, `invoice_sales_report`, `cost_sales_report`, `return_report`, `product_return_report`, `supplier_return_report`, `invoice_return_report`, `ledger_report`, `customer_ledger_report`, `all_customer_ledger_report`) VALUES
(2, 1, 'presets', 'supplier', 'supplier_view', 'supplier_add', 'supplier_edit', 'brand', 'brand_view', 'brand_add', 'brand_edit', 'brand_delete', 'unit', 'unit_view', 'unit_add', 'unit_edit', 'unit_delete', 'style', 'style_view', 'style_add', 'style_edit', 'style_delete', 'product', 'product_view', 'product_add', 'product_edit', 'product_delete', 'supplier_packing', 'supplier_packing_view', 'supplier_packing_add', 'supplier_packing_edit', 'supplier_packing_delete', 'distribution_packing', 'distribution_packing_view', 'distribution_packing_add', 'distribution_packing_edit', 'distribution_packing_delete', 'product_import', 'import_add', 'import_view', 'import_print', 'import_delete', 'operation', 'inventory', 'inventory_view', 'customer', 'customer_view', 'customer_add', 'customer_edit', 'customer_delete', 'sales', 'sales_create', 'return', 'sales_return', 'invoice', 'invoice_listing', 'invoice_print', 'challan', 'challan_listing', 'challan_print', 'receipt', 'receipt_listing', 'receipt_print', 'ledger', 'ledger_view', 'report', 'import_report', 'supplier_import_report', 'product_import_report', 'inventory_report', 'supplier_inventory_report', 'product_inventory_report', 'sales_report', 'product_sales_report', 'supplier_sales_report', 'invoice_sales_report', 'cost_sales_report', 'return_report', 'product_return_report', 'supplier_return_report', 'invoice_return_report', 'ledger_report', 'customer_ledger_report', 'all_customer_ledger_report'),
(5, 2, NULL, 'supplier', 'supplier_view', 'supplier_add', 'supplier_edit', 'brand', 'brand_view', 'brand_add', 'brand_edit', 'brand_delete', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_import_report', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'inventory_report', 'supplier_inventory_report', 'product_inventory_report', 'sales_report', 'product_sales_report', 'supplier_sales_report', 'invoice_sales_report', 'cost_sales_report', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'operation', NULL, NULL, 'customer', 'customer_view', 'customer_add', 'customer_edit', 'customer_delete', 'sales', 'sales_create', 'return', 'sales_return', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'operation', NULL, NULL, 'customer', 'customer_view', 'customer_add', 'customer_edit', 'customer_delete', 'sales', 'sales_create', NULL, 'sales_return', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 3, NULL, NULL, NULL, NULL, 'supplier_edit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `copyright`
--
ALTER TABLE `copyright`
  ADD PRIMARY KEY (`copyright_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_deposite`
--
ALTER TABLE `customer_deposite`
  ADD PRIMARY KEY (`customer_deposite_id`);

--
-- Indexes for table `customer_total_amount`
--
ALTER TABLE `customer_total_amount`
  ADD PRIMARY KEY (`customer_total_amount_id`);

--
-- Indexes for table `distribution_packing`
--
ALTER TABLE `distribution_packing`
  ADD PRIMARY KEY (`distribution_packing_id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `favicon`
--
ALTER TABLE `favicon`
  ADD PRIMARY KEY (`favicon_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`product_history_id`);

--
-- Indexes for table `import`
--
ALTER TABLE `import`
  ADD PRIMARY KEY (`import_id`);

--
-- Indexes for table `import_invoice`
--
ALTER TABLE `import_invoice`
  ADD PRIMARY KEY (`import_invoice_id`);

--
-- Indexes for table `import_new`
--
ALTER TABLE `import_new`
  ADD PRIMARY KEY (`import_new_id`);

--
-- Indexes for table `import_new_quantity_price`
--
ALTER TABLE `import_new_quantity_price`
  ADD PRIMARY KEY (`import_new_quantity_price_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `package_imported_product`
--
ALTER TABLE `package_imported_product`
  ADD PRIMARY KEY (`package_product_id`);

--
-- Indexes for table `package_stock_product`
--
ALTER TABLE `package_stock_product`
  ADD PRIMARY KEY (`package_stock_product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_allocation`
--
ALTER TABLE `product_allocation`
  ADD PRIMARY KEY (`product_allocation_id`);

--
-- Indexes for table `product_history`
--
ALTER TABLE `product_history`
  ADD PRIMARY KEY (`product_history_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `sales_confirm`
--
ALTER TABLE `sales_confirm`
  ADD PRIMARY KEY (`sales_confirm_id`);

--
-- Indexes for table `sales_customer`
--
ALTER TABLE `sales_customer`
  ADD PRIMARY KEY (`sales_customer_id`);

--
-- Indexes for table `sales_invoice`
--
ALTER TABLE `sales_invoice`
  ADD PRIMARY KEY (`sales_invoice_id`);

--
-- Indexes for table `sales_product`
--
ALTER TABLE `sales_product`
  ADD PRIMARY KEY (`sales_product_id`);

--
-- Indexes for table `sales_report`
--
ALTER TABLE `sales_report`
  ADD PRIMARY KEY (`sales_report_id`);

--
-- Indexes for table `sales_return`
--
ALTER TABLE `sales_return`
  ADD PRIMARY KEY (`sales_return_id`);

--
-- Indexes for table `site_logo`
--
ALTER TABLE `site_logo`
  ADD PRIMARY KEY (`site_logo_id`);

--
-- Indexes for table `style`
--
ALTER TABLE `style`
  ADD PRIMARY KEY (`style_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `supplier_packing`
--
ALTER TABLE `supplier_packing`
  ADD PRIMARY KEY (`supplier_packing_id`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`title_id`);

--
-- Indexes for table `unconfirmed_import`
--
ALTER TABLE `unconfirmed_import`
  ADD PRIMARY KEY (`unconfirmed_import_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_previledge`
--
ALTER TABLE `user_previledge`
  ADD PRIMARY KEY (`user_previledge_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `copyright`
--
ALTER TABLE `copyright`
  MODIFY `copyright_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_deposite`
--
ALTER TABLE `customer_deposite`
  MODIFY `customer_deposite_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_total_amount`
--
ALTER TABLE `customer_total_amount`
  MODIFY `customer_total_amount_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `distribution_packing`
--
ALTER TABLE `distribution_packing`
  MODIFY `distribution_packing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `email_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `favicon`
--
ALTER TABLE `favicon`
  MODIFY `favicon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `product_history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `import`
--
ALTER TABLE `import`
  MODIFY `import_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `import_invoice`
--
ALTER TABLE `import_invoice`
  MODIFY `import_invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `import_new`
--
ALTER TABLE `import_new`
  MODIFY `import_new_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `import_new_quantity_price`
--
ALTER TABLE `import_new_quantity_price`
  MODIFY `import_new_quantity_price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `package_imported_product`
--
ALTER TABLE `package_imported_product`
  MODIFY `package_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `package_stock_product`
--
ALTER TABLE `package_stock_product`
  MODIFY `package_stock_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product_allocation`
--
ALTER TABLE `product_allocation`
  MODIFY `product_allocation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_history`
--
ALTER TABLE `product_history`
  MODIFY `product_history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sales_confirm`
--
ALTER TABLE `sales_confirm`
  MODIFY `sales_confirm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sales_customer`
--
ALTER TABLE `sales_customer`
  MODIFY `sales_customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sales_invoice`
--
ALTER TABLE `sales_invoice`
  MODIFY `sales_invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sales_product`
--
ALTER TABLE `sales_product`
  MODIFY `sales_product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_report`
--
ALTER TABLE `sales_report`
  MODIFY `sales_report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sales_return`
--
ALTER TABLE `sales_return`
  MODIFY `sales_return_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `style`
--
ALTER TABLE `style`
  MODIFY `style_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `supplier_packing`
--
ALTER TABLE `supplier_packing`
  MODIFY `supplier_packing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `unconfirmed_import`
--
ALTER TABLE `unconfirmed_import`
  MODIFY `unconfirmed_import_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_previledge`
--
ALTER TABLE `user_previledge`
  MODIFY `user_previledge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
