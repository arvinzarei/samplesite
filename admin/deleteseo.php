<?php
include_once 'SeoWebsite.php';
$id=$_POST['id'];
SeoWebsite::delete($id);
header("location:detailsSeo.php");