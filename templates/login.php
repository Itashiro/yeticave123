<form class="form container" action="<?=$_SERVER['PHP_SELF']?>" method="post"> <!-- form--invalid -->
    <h2>Вход</h2>
    <div class="form__item <?= isset($errors['email'])&&$errors['email']!==0?"form__item--invalid":""?>"> <!-- form__item--invalid -->
        <label for="email">E-mail <sup>*</sup></label>
        <input id="email" type="text" name="email" placeholder="Введите e-mail" value="<?=$_POST['email']??""?>">
        <span class="form__error"><?=$errors['email']??""?></span>
    </div>
    <div class="form__item form__item--last <?= isset($errors['password'])&&$errors['password']!==0?"form__item--invalid":""?>">
        <label for="password">Пароль <sup>*</sup></label>
        <input id="password" type="password" name="password" placeholder="Введите пароль" value="<?=$_POST['password']??""?>">
        <span class="form__error"><?=$errors['password']??""?></span>
    </div>
    <button type="submit" class="button">Войти</button>
</form>
