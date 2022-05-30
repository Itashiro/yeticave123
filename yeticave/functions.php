<?php

session_start();

$is_auth = isset($_SESSION['user_name']);
$user_name = $_SESSION['user_name']??"";
$avatar = $_SESSION['avatar']??"";
$data['is_auth'] = $is_auth;
$data['user_name']=$user_name;
$data['avatar'] = $avatar;

/*$is_auth = rand(0, 1);
$user_name = 'Itashiro';*/

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
