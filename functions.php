<?php
$is_auth = rand(0, 1);
$user_name = 'Itashiro';
/*
$main = [
    [
        'eng' => "boards",
        'rus' => "Доски и лыжи",

    ],
    [
        'eng' => "attachment",
        'rus' => "Крепления",

    ],
    [
        'eng' => "boots",
        'rus' => "Ботинки",

    ],
    [
        'eng' => "clothing",
        'rus' => "Одежда",

    ],
    [
        'eng' => "tools",
        'rus' => "Инструменты",

    ],
    [
        'eng' => "other",
        'rus' => "Разное",

    ]
];
$product =[
    [
        'name' => "2014 Rossignol District Snowboard",
        'category' => "Доски и лыжи",
        'price' => "10999",
        'img' => "img/lot-1.jpg"
    ],
    [
        'name' => "DC Ply Mens 2016/2017 Snowboard",
        'category' => "Доски и лыжи",
        'price' => "159999",
        'img' => "img/lot-2.jpg"
    ],
    [
        'name' => "Крепления Union Contact Pro 2015 года размер L/XL",
        'category' => "Крепления",
        'price' => "8000",
        'img' => "img/lot-3.jpg"
    ],
    [
        'name' => "Ботинки для сноуборда DC Mutiny Charocal",
        'category' => "Ботинки",
        'price' => "10999",
        'img' => "img/lot-4.jpg"
    ],
    [
        'name' => "Куртка для сноуборда DC Mutiny Charocal",
        'category' => "Инструменты",
        'price' => "7500",
        'img' => "img/lot-5.jpg"
    ],
    [
        'name' => "Маска Oakley Canopy",
        'category' => "Разное",
        'price' => "5400",
        'img' => "img/lot-6.jpg"
    ]
];=
*/
function num_format($cost)
{
    $cost = ceil($cost);
    if($cost>1000)
        $cost = number_format($cost,0,""," ");
    /*$cost = (int) $cost;*/
    $cost .= '<b class="rub">р</b>';
    return $cost;
}

function timeForm()
{
    $time2 =  strtotime('2022-05-12 24:00'); /*год не важен, только h:i:s*/
    $time1 = time(); /*значение по умолчанию для timestamp*/
    $diff = $time2 - $time1;
    return gmdate('H:i', $diff); /*grinvich (-2 hours)*/
}

function include_template($name, $data) {
    $name = 'templates/' . $name;
    $result = '';
    if (!file_exists($name)) {
        return $result;
    }
    ob_start();
    extract($data);
    require($name);
    $result = ob_get_clean();
    return $result;
}
?>
