<?php
include_once 'TeamCms.php';
$id=$_POST['id'];
$image=$_FILES['image'];
$title=$_POST['title'];
$summary=$_POST['summary'];
$content=$_POST['content'];
TeamCms::updateTeamID($id,$image,$title,$summary,$content);
header("location:detailsTeam.php");