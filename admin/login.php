<?php
session_start();
include_once "LoginAdmin.php";
$query=LoginAdmin::SelectUser();
$item=[];
$flag=0;
while ($item=mysqli_fetch_assoc($query)){
$flag=1;
}
if ($flag==0){
    $username="arvinzarei";
    $password="arvinzarei";
    $hash=sha1($password);
    $salt=$hash."156498723";
    $final=sha1($salt);
    LoginAdmin::InsertUser($username,$final);
}
if (isset($_SESSION['admin'])){
    header("location:admin.php");
}
if (isset($_SESSION['wrong'])){
    echo $_SESSION['wrong'];
}
?>
<!DOCTYPE html>
<html lang="fa">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" />
    <link rel="stylesheet" href="../Css/login-style.css" />
    <title>فرم ورود و ثبت نام</title>
  </head>
  <body>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="check.php" method="post">
          <h1>ساخت حساب کاربری</h1>
          <br/>
          <input type="text" name="name" placeholder="نام" />
          <input type="email" name="email" placeholder="ایمیل" />
          <input type="password" name="password" placeholder="رمز عبور" />
          <button>ثبت نام</button>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form action="check.php" method="post">
          <h1>ورود</h1>
          <br/>
          <input type="text" name="username" placeholder="نام کاربری" />
          <input type="password" name="password" placeholder="رمز عبور" />
          <a href="#">فراموشی رمز عبور</a>

          <button>ورود</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>!خوش آمدید</h1>
            <p>
              برای برقراری ادامه ارتباط با ما لطفا با حساب شخصی خود وارد شوید
            </p>
            <button class="ghost" id="signIn">ورود</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>سلام دوست من</h1>
            <p>مشخصات خود را وارد کنید و با ما  باشید</p>
            <button class="ghost" id="signUp">ثبت نام</button>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      const signUpButton = document.getElementById("signUp");
      const signInButton = document.getElementById("signIn");
      const container = document.getElementById("container");

      signUpButton.addEventListener("click", () => {
        container.classList.add("right-panel-active");
      });
      signInButton.addEventListener("click", () => {
        container.classList.remove("right-panel-active");
      });
    </script>
  </body>
</html>
