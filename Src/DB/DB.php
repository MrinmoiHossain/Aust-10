<?php

class DB
{
    const DB_HOST = '';
    const DB_NAME = '';
    const DB_USER = '';
    const DB_PASS = '';

    public static $con = '';

    public static function connect(){
        try{
            self::$con = new PDO("mysql:host=".self::DB_HOST.";dbname=".self::DB_NAME,self::DB_USER,self::DB_PASS);
            self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}
?>