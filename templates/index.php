<section class="promo">
    <h2 class="promo__title">Нужен стаф для катки?</h2>
    <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
    <ul class="promo__list">
        <?php foreach ($category as $ins) { ?>
            <!--заполните этот список из массива категорий-->
            <li class="promo__item promo__item--<?=$ins['eng']?>">
                <a class="promo__link" href="pages/all-lots.html"><?=$ins['name_category']?></a>
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
        <?php foreach ($goods as $ins) { ?>
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src="<?= $ins["img"] ?>" width="350" height="260" alt="">
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?= $ins["name_category"] ?></span>
                    <h3 class="lot__title"><a class="text-link" href="lot.php?id_lot=<?=$ins["id_lot"]?>"><?= $ins["lot_name"] ?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost"><?= num_format($ins["start_price"]) ?></span>
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
