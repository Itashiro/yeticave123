<?php
require_once 'data.php';
require_once 'functions.php';

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $email = $_POST['email'];
    $password=$_POST['password'];
    $errors = array();
    $e =0;
    foreach ($_POST as $index=>$value)
    {
        if($value==="")
        {
            $errors[$index]="Введите $index";/*mail || pass*/
            $e=1;
        }
        else
        {
            $errors[$index]=0;
        }
    }
    $query = "SELECT login, password, avatar from user where email='$email'";
    $result = $link->query($query);
    if($result->num_rows===0 && $errors['email']===0)
    {
        $errors['email']="Пользователь с такой почтой не найден";
        $e=1;
    }
    $user = $result->fetch_array();
    if(!password_verify($password, $user['password']) && $errors['password'] === 0/*!$password == $user['password'] && $errors['password'] === 0*/)
    {
        $errors['password']="Неверный пароль";
        $e=1;
    }
    if(!$e)
    {
        $user_name = $user['login'];
        $avatar = $user['avatar'];
        session_start();
        $_SESSION['user_name'] = $user_name;
        $_SESSION['avatar'] = $avatar;
        header("location:index.php");
    }
    else
    {
$content = include_template('login.php',
    [
        'category'=>$category,
        'errors' => $errors,
    ]
);
$layout_content = include_template('layout.php',
    [
        'content' => $content,
        'errors' => $errors,
        'category'=>$category,
        'title' => 'Авторизация',
    ]
);
    }
}
else
{

$content = include_template('login.php',
    [
        'category'=>$category,
    ]
);
$layout_content = include_template('layout.php',
    [
        'content' => $content,
        'category'=>$category,
        'title' => 'Авторизация',
    ]
);
}

print($layout_content);
?>
