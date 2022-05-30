<?php
require_once "functions.php";
require_once "data.php";

if($_SERVER['REQUEST_METHOD']=="POST")
{

    $errors = array();
    $e =0;
    foreach ($_POST as $index=>$value)
    {
        $i =$index;
        if($index == "name")
            $i ="имя";
        if($index == "password")
            $i ="пароль";
        if($value==="")
        {
            $errors[$index]="Введите $i";
            $e=1;
        }
        else
        {
            $errors[$index]=0;
        }
    }
    if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)&&$errors['email']===0)
    {
        $errors['email']="Почта не соответствует формату";
        $e=1;
    }
    $query = "SELECT login from user where email='{$_POST['email']}'; SELECT login from user where  login = '{$_POST['name']}'";
    $link->multi_query($query);
    $result1 =$link->store_result();
    $result = $result1->fetch_array(MYSQLI_ASSOC);
    if($result1->num_rows!==0 && $errors['email']===0)
    {
        $errors['email']="Пользователь с такой почтой уже зарегистрирован";
        $e=1;
    }
    $link->next_result();
    $result1 =$link->store_result();
    $result = $result1->fetch_array(MYSQLI_ASSOC);
    if($result1->num_rows!==0 && $errors['name']===0)
    {
        $errors['name']="Пользователь с таким именем уже зарегистрирован";
        $e=1;
    }
    $file = $_FILES['img']['tmp_name'];
    $to = "avatars/{$_FILES['img']['name']}";  /*local*/
    $for = "{$_FILES['img']['name']}"; /*db*/
    if($file=="")
    {
        $file = "img/user.png";
        $to = $file;
    }
    else
    {
        $mime = mime_content_type($file);
        echo $mime;
        if ($mime != 'image/jpeg' && $mime != 'image/png' && $mime != 'image/jpg') /*по умолчанию image, а не img*/ {
            $errors['img'] = 'Выберите файл формата .png,.jpg,.jpeg';
            $e = 1;
        }
        else {
            if(!$e)
                move_uploaded_file($_FILES['img']['tmp_name'],$to);
        }
    }
    if(!$e)
    {
        $now = date('Y-m-d');
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $sql ="INSERT INTO `user` (`reg_date`, `email`, `login`, `password`, `avatar`, `contacts`) VALUES ('$now', '{$_POST['email']}', '{$_POST['name']}', '$password', '$for','{$_POST['message']}')";
        $result = mysqli_query($link, $sql);
        print_r($_FILES);
        $user_name = $_POST['name'];
        $avatar = $to;
        setcookie('user_name',$user_name);
        setcookie('avatar', $avatar);/**/
        header("location:login.php");
    }
    else
    {

        $content = include_template('reg.php', ['category' => $category,"errors"=>$errors]);
        print_r(
            include_template(
                "layout.php",
                ['category' => $category,
                    "content" => $content,
                    "title" => "Регистрация"
                ]
            )
        );
    }
}
else
{

    $content = include_template('reg.php', ['categories' => $category]);
    print_r(
        include_template(
            "layout.php",
            ['category' => $category,
                "content" => $content,
                "title" => "Регистрация"
            ]
        )
    );
}
