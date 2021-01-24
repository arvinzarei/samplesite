<?php
include_once 'Database.php';
include_once 'ImageSlider.php';
class TeamCms extends ImageSlider
{
private static $con;
    public static function InsertTeam($image,$title,$summary,$content){
        self::DatabaseConnect();
        $path="../images/team/";
        $image_new=self::ImageSliderWebsite($image,$path);
        mysqli_query(self::$con,"insert into `team`(`image`,`title`,`summary`,`content`)VALUES ('$image_new','$title','$summary','$content')");
    }
    public static function SelectTeam(){
        self::DatabaseConnect();
        $query=mysqli_query(self::$con,"select * from `team`");
        return $query;
    }
    public static function selectTeamID($id){
        self::DatabaseConnect();
        $query=mysqli_query(self::$con,"select * from `team` where `id`='$id'");
        return $query;
    }
    public static function deleteTeam($id){
        self::DatabaseConnect();
        mysqli_query(self::$con,"delete from `team` where `id`='$id'");
    }
    public static function updateTeamID($id,$image,$title,$summary,$content){
        self::DatabaseConnect();
        $path="../images/team/";
        $image_new=self::ImageSliderWebsite($image,$path);
        if ($image_new==null) {
            $query=self::selectTeamID($id);
            $item=[];
            $item=mysqli_fetch_assoc($query);
            $image_new=$item['image'];
        }
        mysqli_query(self::$con,"update `team` set `image`='$image_new',`title`='$title',`summary`='$summary',`content`='$content' where `id`='$id'");
    }
    public static function DatabaseConnect(){
        self::$con=Database::connect();
        mysqli_set_charset(self::$con,"utf8");
    }
}