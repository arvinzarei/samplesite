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
    public static function deleteSlider($id){
        self::DatabaseConnect();
        mysqli_query(self::$con,"delete from `slider` where `id`=$id");
    }
    public static function selectSliderID($id){
        self::DatabaseConnect();
        $query=mysqli_query(self::$con,"select * from `slider` where `id`=$id");
        return $query;
    }
    public static function updateSlider($id,$image,$caption,$link){
        self::DatabaseConnect();
        $path="../images/slider/";
        $image_new=self::ImageSliderWebsite($image,$path);
        if ($image_new==null) {
            $query=self::selectSliderID($id);
            $item=[];
            $item=mysqli_fetch_assoc($query);
            $image_new=$item['image'];
        }
        mysqli_query(self::$con,"update `slider` set `image`='$image_new',`caption`='$caption',`link`='$link' where `id`='$id'");
    }
    public static function DatabaseConnect(){
        self::$con=Database::connect();
        mysqli_set_charset(self::$con,"utf8");
    }
}