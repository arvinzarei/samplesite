<?php
include_once 'SeoWebsite.php';
$title=$_POST['title'];
$author=$_POST['author'];
$description=$_POST['description'];
$keywords=$_POST['keywords'];
SeoWebsite::InsertSeo($title,$author,$description,$keywords);
header("location:admin.php");