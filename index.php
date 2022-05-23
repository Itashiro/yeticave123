<?php
require_once('functions.php');

$link = mysqli_connect('localhost', 'root', '','yeticave');
mysqli_set_charset($link, utf8);

if (!$link) {
    $error = mysqli_connect_error();
    $content = include_template('error.php', ['error' => $error]);
}
else {
    $sql = 'SELECT * FROM category';
    $result = mysqli_query($link, $sql);

    if ($result) {
        $category = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    else {
        $error = mysqli_error($link);
        $content = include_template('error.php', ['error' => $error]);
    }

    $sql = 'SELECT * FROM lot left join category on lot.id_category=category.id_category';
    $result = mysqli_query($link, $sql);

    if ($result) {
        $goods = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    else {
        $error = mysqli_error($link);
        $content = include_template('error.php', ['error' => $error]);
    }
}

$content = include_template('index.php',
    [
    'category'=>$category,
    'goods'=>$goods
    ]
);
$layout_content = include_template('layout.php',
    [
    'content' => $content,
    'goods'=>$goods,
    'category'=>$category,
    'title' => 'Главная страница',
    'is_auth'=>$is_auth,
    'user_name' => $user_name
    ]
);

print($layout_content);
?>
