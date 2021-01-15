<?php  
class Database{
    private static $con;
    public static function connect(){
        self::$con=mysqli_connect("localhost","root","","oop") or die(mysqli_connect_error());
        return self::$con;
    }
}
