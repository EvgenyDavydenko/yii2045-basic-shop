--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `slug`) VALUES
(1, 'Чёрный чай', 'black'),
(2, 'Зеленый чай', 'green'),
(3, 'Оолонг (Улун)', 'oolong'),
(4, 'Пуэр', 'puer');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `slug`, `price`, `description`, `img`) VALUES
(1, 1, 'Золотые спирали', 'zolotye-spirali', 449, 'Чёрный китайский чай из провинции Юньнань, скрученный в изящные и эффектные упругие спирали. Напиток имеет бархатный вкус с медовыми нотками и оттенками сухофруктов.', 'zolotye-spirali.jpg'),
(2, 1, 'Цейлонский Шаулэндс', 'tseylonskiy-shaulends', 449, 'Цейлонский чай с высокогорной плантации «Шаулендс». Имеет яркий насыщенный вкус. Пробуждает, заряжает энергией, подходит для утреннего чаепития в английских традициях.', 'tseylonskiy-shaulends.jpg'),
(3, 2, 'Зеленая улитка', 'zelenaya-ulitka', 244, 'Китайский зеленый чай из пров. Фуцзянь, скрученный в форме улиток. Прозрачный настой с цветочно-лимонным ароматом и терпкой нотой во вкусе, переходящей в сладкое послевкусие.', 'zelenaya-ulitka.png'),
(4, 2, 'Бай Хоу (Белая обезьяна)', 'bay-khou-belaya-obezyana', 394, 'Классический зелёный чай из провинции Хунань. Молодые листочки и едва хрупкие чайные почки дарят нежный вкус, который хорошо раскрывается как в чайнике, так и в гайвани.', 'bay-khou-belaya-obezyana.jpg'),
(5, 3, 'Улун Се Чонг', 'ulun-se-chong', 597, 'Нетрадиционный прожаренный улун из Аньси, пров. Фуцзянь. Сытный сливочный вкус топленого молока, вяленого персика и терпких цветов.', 'ulun-se-chong.jpg'),
(6, 3, 'Те Гуань Инь Чанша Ти', 'te-guan-in-chansha-ti', 1399, 'Улун с мировой известностью. От природы имеет нежный цветочный аромат. Подходит для церемониального заваривания.', 'te-guan-in-chansha-ti.png'),
(7, 4, 'Пу Эр зеленое гнездо', 'pu-er-zelenoe-gnezdo', 1287, 'Шен пуэр из провинции Юньнань с 3-летней выдержкой. Тонизирует и освежает. Улучшает обмен веществ, работу сердечной мышцы и умственную деятельность.', 'pu-er-zelenoe-gnezdo.jpg'),
(8, 4, 'Пуэр Буланшань Тетяо', 'puer-bulanshan-tetyao', 579, 'Молодой шу пуэр со знаменитой горы Булан. Густой настой с обволакивающим древесно-сливочным вкусом и мягким ореховым послевкусием.', 'puer-bulanshan-tetyao.jpg');

--
-- Структура таблицы `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `qty` int(10) NOT NULL,
  `sum` float NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--

CREATE TABLE IF NOT EXISTS `order_item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `qty_item` int(11) NOT NULL,
  `sum_item` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth_key` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;