<?php
class db{
public static function getConnection(){
    $dbPath =  ROOT.'/config/db_connection.php';
    $path = include ($dbPath);
    $dsn = "mysql:host={$path['host']}; dbname = {$path['dbname']}";
    try {


        $db = new PDO($dsn,$path['user'],$path['password']);
        $db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec("set names utf8");
    } catch(PDOException $e){
        echo $e->getMessage();
    }
    $db->exec("set names utf8");
        return $db;
}
}

