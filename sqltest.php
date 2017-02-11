

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
ini_set('display_errors', 1);
include_once ('Database.php');
include_once ("Response.php");

/*echo 'new test : ';
$hostname = 'localhost';
$dbname = "bulletin-board";
$user = 'root';
 $pass = 'root';
$title = 'test';
echo 'new test : ';
try{
    $pdo = null;
    echo 'new test : ';
    $pdo = new PDO("mysql:host=".$hostname.";dbname=".$dbname, $user, $pass);
    echo 'new test : ';
    $stm = $pdo->prepare("SELECT `id` FROM `bulletin-board`.Thread WHERE `title` = ?;");
    echo 'new test : ';
    $stm->bindParam(1, $title,PDO::PARAM_STR);
    if($stm->execute()){
        if($raw = $stm->fetch()){
            echo $raw[id];
        }else{
            echo -1;
        }
    }else{
        echo -1;
    }
    $pdo = null;
}catch(Exception $e) {
    echo $e->getMessage();
}*/

//$a = 1;
//echo Database::getThreadId('test001');
//echo Database::createThread('test001','admin','test');
//$thread = ThreadClass::makeThread();
//echo $thread->getThreadTitle();
$title = 'test001';
//echo " : ".$title."<br>";
$id = Database::getThreadId($title);
echo $id.'<br>';
//echo 1 + "<br>";
//$response = Database::getResponsesArray($title);
//$response = new Response('a','a','a','a','a');
$response = ThreadClass::makeThread('テスト');
if(empty($response)){
    echo no;
}else{
    print_r($response);
}

?>

</body>

</html>