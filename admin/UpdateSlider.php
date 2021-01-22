<?php
include_once 'Slider.php';
$id=$_POST['id'];
$caption=$_POST['caption'];
$link=$_POST['link'];
$image=$_FILES['image'];
Slider::updateSlider($id,$image,$caption,$link);
header("location:detailsSlider.php");