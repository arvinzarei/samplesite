<?php
include_once 'Slider.php';
$id=$_POST['id'];
$path=$_POST['path'];
Slider::deleteSlider($id);
unlink($path);
header("location:detailsSlider.php");
