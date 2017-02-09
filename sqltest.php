<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Sample</title>
    <!-- BootstrapのCSS読み込み -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
<?php
$exFlag = false;
$exception = null;
try {
    $pdo = new PDO("mysql:host=localhost;dbname=bulletinboard", 'root', "root");
}catch (Exception $e){
    $exFlag = true;
    $exception = $e;
    //echo $exception->getMessage();
}
//$statement = $pdo->query("SELECT * FROM 'User'");

?>

<div class="jumbotron">
    <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        <p><?php if($exFlag) echo $exception->getMessage(); ?></p>
    </div>
</div>

</body>

</html>