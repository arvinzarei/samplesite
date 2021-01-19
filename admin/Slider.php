<?php
include_once 'Database.php';
include_once 'ImageSlider.php';
class Slider extends ImageSlider
{
    private static $con;
    public static function InsertSlider($image,$caption,$link){
        self::DatabaseConnect();
        $path="../images/slider/";
        $image_new=self::ImageSliderWebsite($image,$path);
        mysqli_query(self::$con,"insert into `slider` (`image`,`caption`,`link`) VALUES ('$image_new','$caption','$link')");
    }
    public static function SelectSlider(){
        self::DatabaseConnect();
        $query=mysqli_query(self::$con,"select * from `slider`");
        return $query;
    }
    public static function DatabaseConnect(){
        self::$con=Database::connect();
        mysqli_set_charset(self::$con,"utf8");
    }
}