<?php
include('functions.php');

//DB接続
$pdo = db_conn();

// mysql> select * from food left join cate on drink.drinkid = food.id;

//データ表示SQL作成
$sql = 'SELECT * FROM menu ORDER BY id DESC';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//データ表示
if ($status==false) {
    errorMsg($stmt);
} else {
    $view='';
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= '<li class="list_group_food">';
        // imgタグで出力しよう！
        $view .= '<img src="'.$result['image'].'" alt="" height="50px">';    
        $view .= '<p>'.$result['name'].'</p>';
        $view .= '<p>'.$result['price'].'</p>';
        $view .= '<p>'.$result['comment'].'</p>';
        $view .= '</li>';
    }
}

$sql = 'SELECT * FROM drink ORDER BY id DESC';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//データ表示
if ($status==false) {
    errorMsg($stmt);
} else {
    // $view='';
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= '<li class="list_group_drink">';
        // imgタグで出力しよう！
        $view .= '<img src="'.$result['image'].'" alt="" height="50px">';    
        $view .= '<p>'.$result['name'].'</p>';
        $view .= '<p>'.$result['price'].'</p>';
        $view .= '<p>'.$result['comment'].'</p>';
        $view .= '</li>';
    }
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>メニューリスト</title>
    <link rel="./style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">メニューリスト</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </header>

<div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="select.php" role="tab" aria-controls="Food">Food</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="drink_select.php" role="tab" aria-controls="Drink">Drink</a>
    </div>
  </div>

<!-- food-menu -->
<!-- <div class="d-flex align-items-center"> -->
<div class="box" >
    <div class="card" style="width: 18rem;">
        <div class="card-body">
        <?=$view?>
        </div>
    </div>
</div>
<!-- </div> -->
</body>

</html>