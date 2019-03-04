<?php
include('functions.php');

// 入力チェック
if (
    !isset($_POST['task']) || $_POST['task']=='' ||
    !isset($_POST['deadline']) || $_POST['deadline']==''
) {
    exit('ParamError');
}

//POSTデータ取得
$task = $_POST['task'];
$deadline = $_POST['deadline'];
$comment = $_POST['comment'];

//DB接続
$pdo = db_conn();

$sql ='INSERT INTO php02_table(id, task, deadline, comment, indate) VALUES(NULL, :a1, :a2, :a3, sysdate())';

$stmt = $pdo->prepare($sql); //作成したSQLを実行オブジェクトにセットする。
$stmt->bindValue(':a1', $task, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $deadline, PDO::PARAM_STR);   //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //ステートメントを実行します

//データ登録処理後
if ($status==false) {
    errorMsg($stmt);
} else {
    //index.phpへリダイレクト
    header('Location: index.php');
}
