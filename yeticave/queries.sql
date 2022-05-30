/*Добавление в таблицу `category`*/
INSERT INTO `category` (`name_category`) VALUES ('Доски и лыжи'), ('Крепления'), ('Ботинки'), ('Одежда'), ('Инструменты'), ('Разное');

/*Добавление в таблицу `user`*/
INSERT INTO `user` (`reg_date`, `email`, `login`, `password`, `avatar`, `contacts`) VALUES ('2022-05-15', 'gmail@gmail.com', 'CoolOlga', 'O12345', 'avatar.jpg', '88005553535'),
                                                                                           ('2022-05-16', 'olga@gmail.com', 'AmazingOlga', 'L12345', 'avatar.jpg', '88005553536');
/*Добавление в таблицу `lot`*/
INSERT INTO `lot` (`creation_date`, `lot_name`, `descr`, `img`, `start_price`, `end_date`, `iteration`, `id_author`, `id_winner`, `id_category`) VALUES ('2022-05-16', '2014 Rossignol District Snowboard', 'Легкий маневренный сноуборд, готовый дать жару в любом парке, растопив снег мощным щелчкоми четкими дугами. Стекловолокно Bi-Ax, уложенное в двух направлениях, наделяет этот снаряд отличной гибкостью и отзывчивостью, а симметричная геометрия в сочетании с классическим прогибом кэмбер позволит уверенно держать высокие скорости. А если к концу катального дня сил совсем не останется, просто посмотрите на Вашу доску и улыбнитесь, крутая графика от Шона Кливера еще никого не оставляла равнодушным.', 'img/lot-1.jpg', '10999', '2022-05-17', '1', '1', '2', '1'),
                                                                                                                                                        ('2022-05-16', 'DC Ply Mens 2016/2017 Snowboard', 'Легкий маневренный сноуборд, готовый дать жару в любом парке, растопив снег мощным щелчкоми четкими дугами. Стекловолокно Bi-Ax, уложенное в двух направлениях, наделяет этот снаряд отличной гибкостью и отзывчивостью, а симметричная геометрия в сочетании с классическим прогибом кэмбер позволит уверенно держать высокие скорости. А если к концу катального дня сил совсем не останется, просто посмотрите на Вашу доску и улыбнитесь, крутая графика от Шона Кливера еще никого не оставляла равнодушным.', 'img/lot-2.jpg', '159999', '2022-05-17', '1', '1', '2', '1'),
                                                                                                                                                        ('2022-05-16', 'Крепления Union Contact Pro 2015 года размер L/XL', 'Легкий маневренный сноуборд, готовый дать жару в любом парке, растопив снег мощным щелчкоми четкими дугами. Стекловолокно Bi-Ax, уложенное в двух направлениях, наделяет этот снаряд отличной гибкостью и отзывчивостью, а симметричная геометрия в сочетании с классическим прогибом кэмбер позволит уверенно держать высокие скорости. А если к концу катального дня сил совсем не останется, просто посмотрите на Вашу доску и улыбнитесь, крутая графика от Шона Кливера еще никого не оставляла равнодушным.', 'img/lot-3.jpg', '8000', '2022-05-17', '1', '1', '2', '2'),
                                                                                                                                                        ('2022-05-16', 'Ботинки для сноуборда DC Mutiny Charocal', 'Легкий маневренный сноуборд, готовый дать жару в любом парке, растопив снег мощным щелчкоми четкими дугами. Стекловолокно Bi-Ax, уложенное в двух направлениях, наделяет этот снаряд отличной гибкостью и отзывчивостью, а симметричная геометрия в сочетании с классическим прогибом кэмбер позволит уверенно держать высокие скорости. А если к концу катального дня сил совсем не останется, просто посмотрите на Вашу доску и улыбнитесь, крутая графика от Шона Кливера еще никого не оставляла равнодушным.', 'img/lot-4.jpg', '10999', '2022-05-17', '1', '1', '2', '3'),
                                                                                                                                                        ('2022-05-16', 'Куртка для сноуборда DC Mutiny Charocal', 'Легкий маневренный сноуборд, готовый дать жару в любом парке, растопив снег мощным щелчкоми четкими дугами. Стекловолокно Bi-Ax, уложенное в двух направлениях, наделяет этот снаряд отличной гибкостью и отзывчивостью, а симметричная геометрия в сочетании с классическим прогибом кэмбер позволит уверенно держать высокие скорости. А если к концу катального дня сил совсем не останется, просто посмотрите на Вашу доску и улыбнитесь, крутая графика от Шона Кливера еще никого не оставляла равнодушным.', 'img/lot-5.jpg', '7500', '2022-05-17', '1', '1', '2', '4'),
                                                                                                                                                        ('2022-05-16', 'Маска Oakley Canopy', 'Легкий маневренный сноуборд, готовый дать жару в любом парке, растопив снег мощным щелчкоми четкими дугами. Стекловолокно Bi-Ax, уложенное в двух направлениях, наделяет этот снаряд отличной гибкостью и отзывчивостью, а симметричная геометрия в сочетании с классическим прогибом кэмбер позволит уверенно держать высокие скорости. А если к концу катального дня сил совсем не останется, просто посмотрите на Вашу доску и улыбнитесь, крутая графика от Шона Кливера еще никого не оставляла равнодушным.', 'img/lot-6.jpg', '5400', '2022-05-17', '1', '1', '2', '6');
/*Добавление в таблицу `bid`*/
INSERT INTO `bid` (`bid_date`, `bid_sum`, `id_user`, `id_lot`) VALUES ('2022-05-16', '11001','1','5'),
                                                                      ('2022-05-16', '161000','1','2'),
                                                                      ('2022-05-16', '5500','1','6'),
                                                                      ('2022-05-16', '11001','1','4'),
                                                                      ('2022-05-16', '9508','1','3'),
                                                                      ('2022-05-16', '12000','1','1');
/*Выборка из таблицы `category`*/
SELECT * FROM `category`;
/*Выборка из таблицы `user`*/
SELECT * FROM `user`;
/*Выборка из таблицы `lot`*/
SELECT * FROM `lot`;
/*Выборка из таблицы `bid`*/
SELECT * FROM `bid`;

/* получить все категории*/
SELECT `name_category` FROM `category`;


/*получить самые новые, открытые лоты. Каждый лот должен включать
название, стартовую цену, ссылку на изображение, цену последней ставки,
количество ставок, название категории*/
SELECT a.lot_name,
       start_price,
       img,
       (b.bid_sum+a.start_price)Последняя_ставка,
       count(b.bid_sum)Количество_ставок,
       c.name_category,
       end_date
from lot as a
       left join bid as b
                 on a.id_lot = b.id_lot
       inner join category c on a.id_category = c.id_category
group by a.lot_name, start_price, img,c.name_category, id_winner,end_date, creation_date,b.bid_sum
having end_date > '2022-05-16';



/* показать лот по его id. Получите также название категории, к которой
принадлежит лот*/
SELECT `id_lot`,`name_category` FROM lot INNER JOIN category ON `lot`.`id_category` = `category`.`id_category` WHERE `id_lot` = 1;


/* обновить название лота по его идентификатору*/
UPDATE `lot` SET `lot_name`= 'ddddd' WHERE `id_lot` = 1;

/* получить список самых свежих ставок для лота по его идентификатору*/
SELECT `id_bid` FROM `bid` INNER JOIN `lot` ON `bid`.`id_lot` = `lot`.`id_lot` WHERE `bid_date` = '2022-05-16';
