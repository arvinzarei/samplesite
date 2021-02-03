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
    public static function InsertUser($username,$password){
        self::DatabaseConnect();
        mysqli_query(self::$con,"insert into `login` (`username`,`password`) VALUES ('$username','$password')");
    }
    public static function SelectUserID($id){
        self::DatabaseConnect();
        $query=mysqli_query(self::$con,"select * from `login` where `id`='$id'");
        return $query;
    }
    public static function Updadelogin($id,$username,$password){
        self::DatabaseConnect();
        mysqli_query(self::$con,"update `login` set `username`='$username',`password`='$password' where `id`='$id'");
    }
    public static function DatabaseConnect(){
        self::$con=Database::connect();
        mysqli_set_charset(self::$con,"utf8");
    }
}