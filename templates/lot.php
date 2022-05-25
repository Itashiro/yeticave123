<nav class="nav">
    <ul class="nav__list container"> <!-- + --->
        <?php
        foreach ($array as $category){
            ?>
            <li class="nav__item">
                <a href="pages/all-lots.html"><?=$category["name_category"]?></a>
            </li>
        <?php } ?>
    </ul>
</nav>
<section class="lot-item container">  <!-- + --->
    <h2><?=$lot_site['lot_name']?></h2>
    <div class="lot-item__content">
        <div class="lot-item__left">
            <div class="lot-item__image">
                <img src="<?=$lot_site["img"]?>" width="730" height="548" alt="Сноуборд">
            </div>
            <p class="lot-item__category">Категория: <span><?=$lot_site["name_category"]?></span></p>
            <p class="lot-item__description"><?=$lot_site["descr"]?></p>
        </div>


        <div class="lot-item__right">
            <div class="lot-item__state">
                <div class="lot-item__timer timer">
                    <?= timeForm() ?>
                </div>
                <div class="lot-item__cost-state">
                    <div class="lot-item__rate">
                        <span class="lot-item__amount">Текущая цена</span>
                        <span class="lot-item__cost"><?php if ($history['id_bid'] == 0){
                                echo num_format($lot_site['start_price']);
                            }
                            else{
                                echo num_format($sum['bid_sum']);
                            }?></span>
                    </div>
                    <div class="lot-item__min-cost">
                        Мин. ставка <span><?= num_format($lot_site['start_price']) ?></span>
                    </div>
                </div>
                <?php
                if($is_auth == 1):
                    ?>
                    <form class="lot-item__form" action="#" method="post" autocomplete="off">
                        <p class="lot-item__form-item form__item form__item--invalid">
                            <label for="cost">Ваша ставка</label>
                            <input id="cost" type="text" name="cost" placeholder="12 000">
                            <span class="form__error">Введите наименование лота</span>
                        </p>
                        <button type="submit" class="button">Сделать ставку</button>
                    </form>
                <?php else: ?>
                    <form class="lot-item__form" action="403.php" method="post" autocomplete="off">
                        <p class="lot-item__form-item form__item form__item--invalid">
                            <label for="cost">Ваша ставка</label>
                            <input id="cost" type="text" name="cost" placeholder="12 000">
                            <span class="form__error">Введите наименование лота</span>
                        </p>
                        <button type="submit" class="button">Сделать ставку</button>
                    </form>
                <?php endif; ?>
            </div>
            <div class="history">
                <h3>История ставок (<span><?= $history['id_bid']?></span>)</h3>
                <?php foreach ($bid as $ins) {?>
                <table class="history__list">
                    <tr class="history__item">
                        <td class="history__name"><?= $ins['login']?></td>
                        <td class="history__price"><?= num_format($ins['bid_sum'])?></td>
                        <td class="history__time"><?= $ins['bid_date']?></td>
                    </tr>
                </table> <?php } ?>
            </div>

        </div>
    </div>
</section>
