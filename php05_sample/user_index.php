<?php
include('user_functions.php');

$menu = menu();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ログイン</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        div{
            padding: 10px;
            font-size:16px;
            }
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">user登録</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?=$menu?>
                </ul>
            </div>
        </nav>
    </header>
<form method="post" action="user_insert.php">
    <div>
        <p>
        <input type="radio" name="kanri_flg" value="0" checked="checked">一般
        <input type="radio" name="kanri_flg" value="1">管理者
        </p>    
    </div>
        <div class="form-group">
            <label for="name">名前</label>
            <input type="text" class="form-control" id="name" name="name" >
        </div>
        <div class="form-group">
            <label for="lid">ログイン</label>
            <input type="text" class="form-control" id="lid" name="lid">
        </div>
        <div class="form-group">
            <label for="lpw">パスワード</label>
            <input type="text" class="form-control" id="lpw" name="lpw">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">登録</button>
        </div>
    <div class="c">
        <p>
        <input type="radio" name="life_flg" value="0" checked="checked">
        <input type="radio" name="life_flg" value="1">
        </p>    
    </div>
    </form>

</body>

</html>