<?php
include_once 'Interview.php';
$image=$_FILES['image'];
$font=$_POST['font'];
$color=$_POST['color'];
$height=$_POST['height'];
Interview::InsertCss($font,$image,$color,$height);
header("location:interviewCss.php");