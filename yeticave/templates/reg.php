<form class="form container <?=isset($e)&&$e?"form--invalid":""?>" enctype="multipart/form-data" action="<?=$_SERVER['PHP_SELF']?>" method="post" autocomplete="off"> <!-- form
    --invalid -->
    <h2>Регистрация нового аккаунта</h2>
    <div class="form__item <?= isset($errors['email'])&&$errors['email']!==0?"form__item--invalid":""?>"> <!-- form__item--invalid -->
        <label for="email">E-mail <sup>*</sup></label>
        <input id="email" type="text" name="email" placeholder="Введите e-mail" value="<?=$_POST['email']??""?>">
        <span class="form__error"><?=$errors['email']??"" ?></span>
    </div>
    <div class="form__item <?= isset($errors['password'])&&$errors['password']?"form__item--invalid":"" ?>">
        <label for="password">Пароль <sup>*</sup></label>
        <input id="password" type="password" name="password" placeholder="Введите пароль" value="<?=$_POST['password']??""?>">
        <span class="form__error"><?=$errors['password']??"" ?></span>
    </div>
    <div class="form__item <?= isset($errors['name'])&&$errors['name']?"form__item--invalid":"" ?>">
        <label for="name">Имя <sup>*</sup></label>
        <input id="name" type="text" name="name" placeholder="Введите имя" value="<?=$_POST['name']??""?>">
        <span class="form__error"><?=$errors['name']??"" ?></span>
    </div>
    <div class="form__item <?= isset($errors['img'])&&$errors['img']?"form__item--invalid":"" ?> form__item--file">
        <label>Аватар</label>
        <div class="form__input-file">
            <input class="visually-hidden" name="img" type="file" id="img">
            <label for="img">
                Добавить
            </label>
            <span class="form__error"><?=$errors['img']??"" ?></span>
        </div>
    </div>
    <div class="form__item <?= isset($errors['message'])&&$errors['message']?"form__item--invalid":"" ?> form__item--wide">
        <label for="message">Контактные данные <sup>*</sup></label>
        <textarea id="message" name="message" placeholder="Напишите как с вами связаться"><?=$_POST['message']??""?></textarea>
        <span class="form__error">Напишите как с вами связаться</span>
    </div>
    <span class="form__error form__error--bottom">Пожалуйста, исправьте ошибки в форме.</span>
    <button type="submit" class="button">Зарегистрироваться</button>
    <a class="text-link" href="login.php">Уже есть аккаунт</a>
</form>
