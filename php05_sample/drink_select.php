<?php
include('functions.php');

//DB接続
$pdo = db_conn();

//データ表示SQL作成
$sql = 'SELECT * FROM drink ORDER BY id DESC';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//データ表示
if ($status==false) {
    errorMsg($stmt);
} else {
    $view='';
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= '<li class="list-group-item">';
        // imgタグで出力しよう！
        $view .= '<img src="'.$result['image'].'" alt="" height="50px">';    
        $view .= '<p>'.$result['name'].'</p>';
        $view .= '<p>'.$result['price'].'</p>';
        $view .= '<p>'.$result['comment'].'</p>';
        $view .= '<div><a href="drink_detail.php?id='.$result[id].'" class="badge badge-primary">Edit</a>';
        $view .= '<a href="drink_delete.php?id='.$result[id].'" class="badge badge-danger">Delete</a></div>';
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
    <title>ドリンクリスト</title>
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
            <a class="navbar-brand" href="#">ドリンクリスト</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="select.php">フード編集</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="drink_select.php">ドリンク編集</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">メニュー登録</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="drink_index.php">ドリンク登録</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


<!-- <div class="list_group_box"></div>
<div class="d-flex"> -->

<!-- </div> -->
<div class="d-flax  align-items-center justify-content-end" >
<div class="card" style="width: 18rem;">

<!-- <div class="d-flex justify-content-center"> -->
        <?=$view?>
</div>
  <!-- </div> -->
</div>
</body>

</html>