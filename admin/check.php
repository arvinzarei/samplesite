<?php
session_start();
include_once  'LoginAdmin.php';
$username=$_POST['username'];
$password=$_POST['password'];
$hash=sha1($password);
$salt=$hash."156498723";
$final=sha1($salt);
$flag=0;
$query=LoginAdmin::SelectUser();
$item=[];
while ($item=mysqli_fetch_assoc($query)){
    if ($item['username']==$username && $item['password']==$final){
        $flag=1;
        $_SESSION['admin']=$username;
        header("location:admin.php");
    }
    if ($flag==0){
        $_SESSION['wrong']="نام کاربری و کلمه عبور شما اشتباه می باشد";
        header("location:login.php");
    }
}