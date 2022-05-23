<?php
require_once('functions.php');

$link = mysqli_connect('localhost', 'root', '','yeticave');
mysqli_set_charset($link, utf8);

if (!$link) {
    $error = mysqli_connect_error();
    $content = include_template('404.php', ['error' => $error]);
}
else {
    $sql = 'SELECT * FROM category';
    $result = mysqli_query($link, $sql);
    if ($result) {
        $category = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    else {
        $error = mysqli_error($link);
        $content = include_template('404.php', ['error' => $error]);
    }
    $sql = 'SELECT * FROM lot left join category on lot.id_category=category.id_category';
    $result = mysqli_query($link, $sql);
    if ($result) {
        $goods = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    else {
        $error = mysqli_error($link);
        $content = include_template('404.php', ['error' => $error]);
    }
}

$sql1 = 'SELECT * FROM category';
$result1 = mysqli_query($link, $sql1);
$array = mysqli_fetch_all($result1, MYSQLI_ASSOC);


$sql2 = 'SELECT id_lot, lot_name, name_category/*name_category*/, descr, img, start_price FROM lot INNER JOIN category on lot.id_category = category.id_category';
$result2 = mysqli_query($link,$sql2);
$category_info = mysqli_fetch_all($result2,MYSQLI_ASSOC);
?>
