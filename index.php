<?php
require_once('functions.php');

$content = include_template('index.php',
    [
    'main'=>$main,
    'product'=>$product
    ]
);
$layout_content = include_template('layout.php',
    [
    'content' => $content,
    'product'=>$product,
    'main'=>$main,
    'title' => 'Главная страница',
    'is_auth'=>$is_auth,
    'user_name' => $user_name
    ]
);

print($layout_content);
?>
