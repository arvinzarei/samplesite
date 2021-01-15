<?php
include_once "Database.php";
class LoginAdmin
{
    private static $con;
    public static function SelectUser(){
        self::DatabaseConnect();
        $query=mysqli_query(self::$con,"select * from `login`");
        return $query;
    }
    public static function DatabaseConnect(){
        self::$con=Database::connect();
        mysqli_set_charset(self::$con,"utf8");
    }
    public static function InsertUser($username,$password){
        self::DatabaseConnect();
        $query=mysqli_query(self::$con,"insert into `login` (`username`,`password`) VALUES ('$username','$password')");
        return $query;
    }
}