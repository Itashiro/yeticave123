<?php
require_once('functions.php');
require_once('data.php');

$i=0;
$s="";
$form_class = "";
$div_class = array("","","","","","","");
$check = false;

$form_items = array($_POST['lot-name'],$_POST['category'],$_POST['message'],
    444,$_POST['lot-rate'],$_POST['lot-step'],$_POST['lot-date']);
if(filter_var($form_items[4],FILTER_SANITIZE_NUMBER_INT)!=$form_items[4]){
    $div_class[5] = "form__item--invalid";
    $check = true;
}
if(filter_var($form_items[5],FILTER_SANITIZE_NUMBER_INT)!=$form_items[5]){
    $div_class[6] = "form__item--invalid";
    $check = true;
}
foreach ($form_items as $form_item){
    $i++;
    if($form_item==''){
        $form_class = "form--invalid";
        $div_class[$i] = "form__item--invalid";
        $check = true;
    }
}
if($check){
    $page_content = include_template('add.php',  [
        'category' => $category,
        'form_class' => $form_class,
        'div_class' => $div_class,
        'form_items' => $form_items
    ]);
    $layout_content = include_template('layout.php', [
        'content' => $page_content,
        'page_name' => 'Добавление лота',
        'is_auth' => $is_auth,
        'user_name' => $user_name,
        'category' => $category
    ]);
    print($layout_content);
}
else{
    $uploaddir = 'img/';
    $uploadfile = $uploaddir . basename($_FILES['lot-img']['name']);
    move_uploaded_file($_FILES['lot-img']['tmp_name'], $uploadfile);
    foreach ($category as $cat){
        if( $cat['name_category']==$form_items[1]){
            $s = $cat['id_category'];
        }
    }
    $sql ="INSERT INTO `lot` (`creation_date`, `lot_name`, `descr`, `img`, `start_price`, `end_date`, `iteration`, `id_author`, `id_winner`, `id_category`) VALUES ('2022-05-20','$form_items[0]','$form_items[2]','$uploadfile','$form_items[4]','$form_items[6]','$form_items[5]',1,1,'$s')";
    $result = mysqli_query($link, $sql);
    $sql = 'SELECT MAX(id_lot) as id_lot FROM lot';
    $result = mysqli_query($link,$sql);
    $created_lot = mysqli_fetch_array($result, MYSQLI_ASSOC);
    header('Location: ../lot.php?id_lot='.$created_lot['id_lot']); 
}