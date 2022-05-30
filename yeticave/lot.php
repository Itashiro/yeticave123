<?php
require_once "functions.php";
require_once "data.php";

$id = 0;
if(isset($_GET["id_lot"])){
    $id = $_GET["id_lot"];

    $sql = 'SELECT id_lot, lot_name, name_category, descr , img ,start_price FROM lot INNER JOIN category on lot.id_category = category.id_category WHERE id_lot ='.$id;
    $result = mysqli_query($link,$sql);
    $lot_site = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $sql = 'SELECT MAX(bid_sum) as bid_sum FROM bid WHERE id_lot ='.$id;
    $result = mysqli_query($link,$sql);
    $sum = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $sql = 'SELECT COUNT(id_bid) as id_bid FROM bid WHERE id_lot ='.$id;
    $result = mysqli_query($link,$sql);
    $history = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $sql = 'SELECT bid_sum, bid_date, login FROM user INNER JOIN bid on user.id_user = bid.id_user WHERE id_lot ='.$id;
    $result = mysqli_query($link, $sql);
    $bid = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $content = include_template('lot.php', ['array' => $array, 'lot_site'=>$lot_site, 'sum'=>$sum, 'bid' =>$bid, 'history'=>$history, 'is_auth'=>$is_auth,]);
    $layout_content = include_template('layout.php', [
        'content' => $content,  /*content*/
        'array' => $array,  /**/
        'data' => $data,
        'category'=>$category, /*footer*/
        'title' => $lot_site['name_category'], /*title*/
        'body' => $sum,
        'bid' => $bid,
        'history' => $history,
        'is_auth'=>$is_auth,
        'user_name' => $user_name
    ]);
    if($lot_site["id_lot"] != $id ){   /*worked*/
        header("Location: 404.php");
    }
    else {
        print($layout_content);
    }
}


?>
