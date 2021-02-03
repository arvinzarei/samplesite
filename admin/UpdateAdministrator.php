<?php
include_once 'LoginAdmin.php';
$username=$_POST['username'];
$password=$_POST['password'];
$hash=sha1($password);
$salt=$hash."156498723";
$final=sha1($salt);
$id=$_POST['id'];
LoginAdmin::Updadelogin($id,$username,$final);
header('location:administrator.php');