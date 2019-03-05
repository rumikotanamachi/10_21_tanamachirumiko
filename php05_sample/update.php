<?php
include('functions.php');

//入力チェック(受信確認処理追加)
if (
    !isset($_POST['name']) || $_POST['name']=='' ||
    !isset($_POST['price']) || $_POST['price']==''
) {
    exit('ParamError');
}

//POSTデータ取得
$name = $_POST['name'];
$price = $_POST['price'];
$comment = $_POST['comment'];

//DB接続します(エラー処理追加)
$pdo = db_conn();

//データ登録SQL作成
$sql = 'UPDATE menu SET image=:image ,name=:a1, price=:a2, comment=:a3 WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':image', $file_name, PDO::PARAM_STR);
$stmt->bindValue(':a1', $name, PDO::PARAM_STR);
$stmt->bindValue(':a2', $price, PDO::PARAM_STR);
$stmt->bindValue(':a3', $comment, PDO::PARAM_STR);
$status = $stmt->execute();

//4．データ登録処理後
if ($status==false) {
    errorMsg($stmt);
} else {
    header('Location: select.php');
    exit;
}
