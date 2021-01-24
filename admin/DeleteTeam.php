<?php
include_once 'TeamCms.php';
$id=$_POST['id'];
$path=$_POST['path'];
unlink("$path");
TeamCms::deleteTeam($id);
header("location:detailsTeam.php");