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
$id = $_POST['id'];
// $upfile = $_POST['upfile'];
$name = $_POST['name'];
$price = $_POST['price'];
$comment = $_POST['comment'];




if (isset($_FILES['upfile']) && $_FILES['upfile']['error'] ==0) {
    // ファイルをアップロードしたときの処理
    // ①送信ファイルの情報取得
    $file_name = $_FILES['upfile']['name']; //ファイル名
    $tmp_path = $_FILES['upfile']['tmp_name']; //tmpフォルダ
    $file_dir_path = 'upload/'; //アップロード先

    // ②File名の準備
    $extension = pathinfo($file_name, PATHINFO_EXTENSION); 
    $uniq_name = date('YmdHis').md5(session_id()) . "." . $extension; 
    $file_name = $file_dir_path.$uniq_name;    

        // ③サーバの保存領域に移動&④表示
        $img='';
        if (is_uploaded_file($tmp_path)) {
            if (move_uploaded_file($tmp_path, $file_name)) {
                chmod($file_name, 0644);
            } else { 
                exit('Error:アップロードできませんでした.');
            } 
        }
    } else {
    // ファイルをアップしていないときの処理
    exit('画像が送信されていません');
}



//DB接続します(エラー処理追加)
$pdo = db_conn();

//データ登録SQL作成
$sql = 'UPDATE menu SET image=:upfile ,name=:a1, price=:a2, comment=:a3 WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':upfile', $file_name, PDO::PARAM_STR);
$stmt->bindValue(':a1', $name, PDO::PARAM_STR);
$stmt->bindValue(':a2', $price, PDO::PARAM_STR);
$stmt->bindValue(':a3', $comment, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$status = $stmt->execute();
//4．データ登録処理後
if ($status==false) {
    errorMsg($stmt);
} else {
    header('Location: select.php');
    exit;
}
