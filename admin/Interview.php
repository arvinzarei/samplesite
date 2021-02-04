<?php
include_once 'Database.php';
include_once 'ImageSlider.php';
class Interview extends ImageSlider
{
    private static $con;
    public static function DatabaseConnect(){
        self::$con=Database::connect();
        mysqli_set_charset(self::$con,"utf8");
    }
    public static function InsertCss($font,$image,$color,$height){
        self::DatabaseConnect();
        $path='../images/interview/';
        $image_new=self::ImageSliderWebsite($image,$path);
        mysqli_query(self::$con,"insert into `css-interview`(`font`,`image`,`color`,`height`) values ('$font','$image_new','$color','$height') ");
    }
    public static function SelectCss(){
        self::DatabaseConnect();
       $query= mysqli_query(self::$con,"select * from `css-interview` order by `id` DESC LIMIT 1 OFFSET 0 ");
    return $query;
    }
}