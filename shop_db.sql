

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `cart` (`id`, `user_id`, `pid`, `name`, `price`, `quantity`, `image`) VALUES
(159, 16, 15, 'laptop', 15, 1, 'laptop.jpg'),
(160, 16, 16, 'ndegjuese', 13, 4, 'ndegjuese.jpg');



CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(23, 16, 'asdadadsa', '1652', '', 'cash on delivery', 'flat no. , , ,  - ', ', ndegjuese (1) , tablet (2) , laptop (1) ', 50, '24-Apr-2022', 'completed'),
(24, 16, '', '', '', 'cash on delivery', 'flat no. , , ,  - ', ', laptop (1) , ndegjuese (1) , kompjuteri (1) ', 43, '24-Apr-2022', 'completed'),
(25, 16, '', '', '', 'cash on delivery', 'flat no. , , ,  - ', ', laptop (1) ', 15, '24-Apr-2022', 'pending');



CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `products` (`id`, `name`, `details`, `price`, `image`) VALUES
(15, 'laptop', 'laptop', 15, 'laptop.jpg'),
(16, 'ndegjuese', 'ndegjuese', 13, 'ndegjuese.jpg'),
(17, 'telefon', 'telefon', 14, 'phone.png'),
(18, 'tablet', 'tablet', 11, 'tablet.jpg'),
(20, 'nintendoswitch', 'nintendoswitch', 24, 'nintendo.jpg'),
(21, 'kompjuteri', 'pc', 15, 'kompjuteri.jpg');



CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(10, 'admin A', 'admin01@gmail.com', '698d51a19d8a121ce581499d7b701668', 'admin'),
(14, 'user A', 'user01@gmail.com', '698d51a19d8a121ce581499d7b701668', 'user'),
(15, 'user B', 'user02@gmail.com', '698d51a19d8a121ce581499d7b701668', 'user'),
(16, 'andi', 'andi@gmail.com', '698d51a19d8a121ce581499d7b701668', 'user'),
(17, 'admin02', 'admin02@gmail.com', '698d51a19d8a121ce581499d7b701668', 'admin');


ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;


ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;


ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;


ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

