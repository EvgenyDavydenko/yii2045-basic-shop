--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Структура таблицы `good`
--

CREATE TABLE `good` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `category` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `descr` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `good`
--

INSERT INTO `good` (`id`, `category`, `name`, `slug`, `price`, `descr`, `img`) VALUES
(1, 1, 'Золотые спирали', 'zolotye-spirali', 449, 'Чёрный китайский чай из провинции Юньнань, скрученный в изящные и эффектные упругие спирали. Напиток имеет бархатный вкус с медовыми нотками и оттенками сухофруктов.', 'zolotye-spirali.jpg'),
(2, 1, 'Цейлонский Шаулэндс', 'tseylonskiy-shaulends', 449, 'Цейлонский чай с высокогорной плантации «Шаулендс». Имеет яркий насыщенный вкус. Пробуждает, заряжает энергией, подходит для утреннего чаепития в английских традициях.', 'tseylonskiy-shaulends.jpg'),
(4, 2, 'Зеленая улитка', 'zelenaya-ulitka', 244, 'Китайский зеленый чай из пров. Фуцзянь, скрученный в форме улиток. Прозрачный настой с цветочно-лимонным ароматом и терпкой нотой во вкусе, переходящей в сладкое послевкусие.', 'zelenaya-ulitka.png'),
(5, 2, 'Бай Хоу (Белая обезьяна)', 'bay-khou-belaya-obezyana', 394, 'Классический зелёный чай из провинции Хунань. Молодые листочки и едва хрупкие чайные почки дарят нежный вкус, который хорошо раскрывается как в чайнике, так и в гайвани.', 'bay-khou-belaya-obezyana.jpg'),
(6, 3, 'Улун Се Чонг', 'ulun-se-chong', 597, 'Нетрадиционный прожаренный улун из Аньси, пров. Фуцзянь. Сытный сливочный вкус топленого молока, вяленого персика и терпких цветов.', 'ulun-se-chong.jpg'),
(7, 3, 'Те Гуань Инь Чанша Ти', 'te-guan-in-chansha-ti', 1399, 'Улун с мировой известностью. От природы имеет нежный цветочный аромат. Подходит для церемониального заваривания.', 'te-guan-in-chansha-ti.png'),
(8, 4, 'Пу Эр зеленое гнездо', 'pu-er-zelenoe-gnezdo', 1287, 'Шен пуэр из провинции Юньнань с 3-летней выдержкой. Тонизирует и освежает. Улучшает обмен веществ, работу сердечной мышцы и умственную деятельность.', 'pu-er-zelenoe-gnezdo.jpg'),
(9, 4, 'Пуэр Буланшань Тетяо', 'puer-bulanshan-tetyao', 579, 'Молодой шу пуэр со знаменитой горы Булан. Густой настой с обволакивающим древесно-сливочным вкусом и мягким ореховым послевкусием.', 'puer-bulanshan-tetyao.jpg');

