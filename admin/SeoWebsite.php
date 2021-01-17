<?php
include_once 'Database.php';

class SeoWebsite
    {
    private static $con;
    public static function InsertSeo($title,$author,$description,$keywords){
        self::DatabaseConnect();
        mysqli_query(self::$con,"insert into `seo` (`title`,`author`,`description`,`keywords`) VALUES ('$title','$author','$description','$keywords')");
    }
    public static function SelectSeoID(){
        self::DatabaseConnect();
        $query=mysqli_query(self::$con,"select * from `seo` order by `id` DESC limit 1 offset 0");
        return $query;
    }
    public static function SelectData(){
        self::DatabaseConnect();
        $query=mysqli_query(self::$con,"select * from `seo`");
        return $query;
    }
    public static function delete($id){
        self::DatabaseConnect();
        mysqli_query(self::$con,"delete from `seo` where `id`=$id");
    }
    public static function DatabaseConnect(){
        self::$con=Database::connect();
        mysqli_set_charset(self::$con,"utf8");
    }
}