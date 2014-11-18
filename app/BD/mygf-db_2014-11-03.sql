

CREATE TABLE `bills` (
  `id` INTEGER PRIMARY KEY ASC,
  `category_id` INTEGER,
  `user_id` INTEGER,
  `created` TEXT,
  `modified` TEXT,
  `deleted` TEXT,
  `title` TEXT,
  `date` TEXT,
  `cost` INTEGER
);

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `category_id`, `user_id`, `created`, `modified`, `deleted`, `title`, `date`, `cost`) VALUES
(1, 1, 1, '2014-11-03 00:00:00', NULL, NULL, 'Meal Pasta', '2014-11-03', 22),
(2, 2, 2, '2014-11-03 00:00:00', NULL, NULL, 'Meat Supplies', '2014-11-03', 50);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
`id` INTEGER PRIMARY KEY ASC,
  `title` TEXT,
  `created` TEXT,
  `modified` TEXT,
  `deleted` TEXT,
  `user_id` INTEGER,
  `price` INTEGER,
  `weekyear` INTEGER
);

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `created`, `modified`, `deleted`, `user_id`, `price`, `weekyear`) VALUES
(1, 'Restaurant', '2014-11-03 00:00:00', '2014-11-03 00:00:00', '2014-11-03 00:00:00', 0, 145, 114),
(2, 'Épicerie', '2014-11-03 00:00:00', '2014-11-03 00:00:00', '2014-11-03 00:00:00', 0, 250, 214);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
`id` INTEGER PRIMARY KEY ASC,
  `username` TEXT,
  `password` TEXT,
  `email` TEXT,
  `created` TEXT,
  `modified` TEXT,
  `deleted` TEXT
);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created`, `modified`, `deleted`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '2014-11-03 00:00:00', NULL, NULL);


