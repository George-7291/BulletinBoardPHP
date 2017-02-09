<?php
/**
 * Created by PhpStorm.
 * User: k15125kk
 * Date: 2017/02/09
 * Time: 23:34
 */

include 'Database.php';
$name = '名無し';
if(!empty($_GET['name']) || $_GET['name'] != '')
    $name = $_GET['name'];
Database::createThread($_GET['title'],$name,$_GET['body']);


require('index.php');
?>