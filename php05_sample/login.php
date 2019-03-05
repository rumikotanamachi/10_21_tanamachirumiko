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
            <a class="navbar-brand" href="#">LogIn</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">ログインページ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="select_nologin.php">一覧ページ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <form method="post" action="login_act.php">
    <!-- <div>
    <h3>管理者</h3>
    <input type="radio" name="kanri" value="0" checked="checked">管理者
    <input type="radio" name="kanri" value="1" >一般
    </div>
    <div>
    <h3>会員登録</h3>
    <input type="radio" name="user" value="1" checked="checked">登録済み
    <input type="radio" name="user" value="1" >未登録
    </div> -->
        <div class="form-group">
            <label for="lid">LoginID</label>
            <input type="text" class="form-control" id="lid" name="lid">
        </div>
        <div class=" form-group">
            <label for="lpw">Pass</label>
            <input type="password" class="form-control" id="lpw" name="lpw">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</body>

</html>