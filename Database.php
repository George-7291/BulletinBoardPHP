<?php

/**
 * Created by PhpStorm.
 * User: k15125kk
 * Date: 2017/02/10
 * Time: 0:21
 */
class Database
{
    private static $hostname = 'localhost';
    private static $dbname = "bulletin-board";
    private static $user = 'root';
    private static $pass = 'root';

    /**
     * @param $title
     * @param $name
     * @param $body
     * @return bool
     */
    public static function createThread($title, $name, $body){
        try {
            $pdo = new PDO("mysql:host=".Database::$hostname.";dbname=".Database::$dbname, Database::$user, Database::$pass);
            if(Database::existThread($title) > 0){
                return 0;
            }
            $stm = $pdo->prepare("INSERT INTO `bulletin-board`.Thread(title)VALUE (?);");
            $stm->bindParam(1,$title,PDO::PARAM_STR);
            if(!$stm->execute())
                return 1;

            $threadId = Database::getThreadId($title);

            $stm = $pdo->prepare("INSERT INTO `bulletin-board`.Response(response_id, user_name, date, thread_id, body) VALUES (?,?,?,?,?);");
            $stm->bindValue(1,1,PDO::PARAM_INT);
            $stm->bindParam(2,$name,PDO::PARAM_STR);
            $stm->bindParam(3,date("Y-m-d H:i:s"));
            $stm->bindParam(4,$threadId,PDO::PARAM_INT);
            $stm->bindParam(5,$body,PDO::PARAM_STR);
            if($stm->execute()){
                return 2;
            }
        }catch (Exception $e){
            echo $e->getMessage();
            return 3;
            //echo $exception->getMessage();
        }
    }

    public static function getThreadId($title){
        try{
            $pdo = new PDO("mysql:host=".Database::$hostname.";dbname=".Database::$dbname, Database::$user, Database::$pass);
            $stm = $pdo->prepare("SELECT `id` FROM `bulletin-board`.Thread WHERE `title` = ?;");
            $stm->bindParam(1, $title,PDO::PARAM_STR);
            if($stm->execute()){
                if($raw = $stm->fetch()){
                    return $raw[id];
                }else{
                    return -1;
                }
            }
        }catch(Exception $e){

        }
    }

    public static function existThread($title){
        try{
            $pdo = new PDO("mysql:host=".Database::$hostname.";dbname=".Database::$dbname, Database::$user, Database::$pass);
            $stm = $pdo->prepare("SELECT COUNT(*) AS `count` FROM `bulletin-board`.Thread WHERE `title` = ?;");
            $stm->bindParam(1, $title,PDO::PARAM_STR);
            if($stm->execute()){
                if($raw = $stm->fetch()){
                    return $raw[count];
                }else{
                    return -1;
                }
            }else{
                return -1;
            }
        }catch(Exception $e){
            return -1;
        }
    }
}
?>