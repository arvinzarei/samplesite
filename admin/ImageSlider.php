<?php
class ImageSlider
{
    public static function ImageSliderWebsite($image,$path){
        $upload=1;
        $image_new=$image['name'];
        $directory=$path;
        $targetfile=$directory.basename($image_new);
        $filetype=pathinfo($targetfile,PATHINFO_EXTENSION);
        if ($filetype!=="jpg" && $filetype!=="png" && $filetype!=="gif" && $filetype!=="jpeg") {
            $upload=0;
            echo "This picture type is not supported!";
        }
        if ($image['size']>5000000) {
            $upload=0;
            echo "Your file siz is too large!";
        }
        if ($upload==1) {
            if (move_uploaded_file($image['tmp_name'],$targetfile)) {
                echo "Done!";
            }
        }
        return $image_new;
    }
}