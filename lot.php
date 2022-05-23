<?php
require_once "functions.php";
require_once "data.php";

$id = 0;
if(isset($_GET["id_lot"])){
    $id = $_GET["id_lot"];

    $sql3 = 'SELECT id_lot, lot_name, name_category, descr , img ,start_price FROM lot INNER JOIN category on lot.id_category = category.id_category WHERE id_lot ='.$id;
    $result3 = mysqli_query($link,$sql3);
    $lot_site = mysqli_fetch_array($result3,MYSQLI_ASSOC);

    $sql4 = 'SELECT MAX(bid_sum) as bid_sum FROM bid WHERE id_lot ='.$id;
    $result4 = mysqli_query($link,$sql4);
    $sum = mysqli_fetch_array($result4,MYSQLI_ASSOC);

    $sql5 = 'SELECT bid_sum, bid_date, login FROM user INNER JOIN bid on user.id_user = bid.id_user WHERE id_lot ='.$id;
    $result5 = mysqli_query($link, $sql5);
    $bid = mysqli_fetch_all($result5, MYSQLI_ASSOC);

    $content = include_template('lot.php', ['array' => $array, 'category_info'=>$category_info , 'lot_site'=>$lot_site, 'sum'=>$sum, 'bid' =>$bid]);
    $layout_content = include_template('layout.php', [
        'content' => $content,  /*content*/
        'array' => $array,  /**/
        'category'=>$category_info, /*footer*/
        'title' => $lot_site['name_category'], /*title*/
        'body' => $sum,
        'bid' => $bid,
    ]);
    if($lot_site["id_lot"] != $id ){   /*worked*/
        header("Location: 404.php");
    }
    else {
        print($layout_content);
    }
}


?>
