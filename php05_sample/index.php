<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登録画面</title>
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
            <a class="navbar-brand" href="#">メニュー登録</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">メニュー登録</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="select.php">メニュー編集</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user.html">[一般]メニュー画面</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- 必要な属性を追加 -->
        <form method="post" action="insert_file.php" enctype="multipart/form-data"> 
        <div class="form-group">
        <input type="file" class="form-control-file" id="upfile" name="upfile" accept="image/*" capture="camera">
        <label for="upfile"></label>
        </div>
        
        <div class="form-group">
            <label for="name">メニュー</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="price">価格</label>
            <input type="text" class="form-control" id="price" name="price">
        <div class="form-group">
            <label for="comment">コメント</label>
            <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
        </div>

            <!-- inputを追加 -->
       
        <div class="form-group">
            <button type="submit" class="btn btn-primary">送信</button>
        </div>
    </form>

</body>

</html>