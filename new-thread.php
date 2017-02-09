<!doctype html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- BootstrapのCSS読み込み -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">掲示板</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class=""><a href="index.php">Top</a></li>
                <li class="active"><a href="#">新規スレッド</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="row">
        <div class="jumbotron">
            <font color="#00bfff">
                <h1>新規スレッド<span class="glyphicon glyphicon-comment"></span></h1>
            </font>
            <form class="form-horizontal" action="thread-register.php" method="get">
                <div class="form-group text-left">
                    <label for="inputId" class="control-label">タイトル</label>
                    <input type="text" class="form-control" id="inputId" name="title" placeholder="Title" required>
                </div>
                <div class="form-group text-left">
                    <label for="inputId" class="control-label">名前</label>
                    <input type="text" class="form-control" id="inputId" name="name" placeholder="Name" >
                </div>
                <div class="form-group text-left">
                    <label for="inputPass" class="control-label">内容</label>
                    <textarea rows="5" class="form-control" id="body" name="body" placeholder="Body" required></textarea>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-success btn-lg">
                        <span class="glyphicon glyphicon-send"></span>
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>

</body>
</html>