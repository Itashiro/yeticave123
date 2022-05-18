<section class="promo">
    <h2 class="promo__title">Нужен стаф для катки?</h2>
    <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
    <ul class="promo__list">
<<<<<<< HEAD
        <?php foreach ($main as $ins) { ?>
            <!--заполните этот список из массива категорий-->
            <li class="promo__item promo__item--<?=$ins['eng']?>">
                <a class="promo__link" href="pages/all-lots.html"><?=$ins['rus']?></a>
=======
        <?php foreach ($category as $ins) { ?>
            <!--заполните этот список из массива категорий-->
            <li class="promo__item promo__item--<?=$ins['eng']?>">
                <a class="promo__link" href="pages/all-lots.html"><?=$ins['name_category']?></a>
>>>>>>> 23e7fa6 (Read&Show_8)
            </li>
        <?php } ?>
    </ul>
</section>
<section class="lots">
    <div class="lots__header">
        <h2>Открытые лоты</h2>
    </div>
    <ul class="lots__list">
        <!--заполните этот список из массива с товарами-->
<<<<<<< HEAD
        <?php foreach ($product as $ins) { ?>
=======
        <?php foreach ($goods as $ins) { ?>
>>>>>>> 23e7fa6 (Read&Show_8)
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src="<?= $ins["img"] ?>" width="350" height="260" alt="">
                </div>
                <div class="lot__info">
<<<<<<< HEAD
                    <span class="lot__category"><?= $ins["category"] ?></span>
                    <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?= $ins["name"] ?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost"><?= num_format($ins["price"]) ?></span>
=======
                    <span class="lot__category"><?= $ins["name_category"] ?></span>
                    <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?= $ins["lot_name"] ?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost"><?= num_format($ins["start_price"]) ?></span>
>>>>>>> 23e7fa6 (Read&Show_8)
                        </div>
                        <div class="lot__timer timer">
                            <?= timeForm() ?>
                        </div>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</section>
