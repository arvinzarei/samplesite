<?php include_once "_headeradmin.php";
session_start();
?>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand"><img src="../images/icon/dashboard.png" alt="Dashboard img"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Interview Css
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="detailsSeo.php">جزئیات css</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="FormSlider.php">اسلایدر</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="FormTeam.php">تیم ما</a>
                </li>
            </ul>
            <form class="d-flex">
                <a href="../index.php" target="_blank"><span class="fas fa-desktop"> نمایش وب سایت </span></a>
                <a href="administrator.php"s><span class="fas fa-cogs"> پروفایل </span></a>
                <a href="logout.php"><span class="fas fa-power-off">  خروج  </span></a>
            </form>
        </div>
    </div>
</nav>
<!-- End Menu-->
<!--Start Create Form Setting-->
<div class="Seo-form">
    <form action="inserInterviewCss.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image"><br/>
        <input type="color" name="color"><br/>
        <input type="text" name="height"><br/>
        <select name="font" style="margin-bottom: 20px">
            <option value="Yekan">BYekan</option>
            <option value="BElham">BElham</option>
        </select><br/>
        <button>Submit</button>
    </form>
</div>
<!--End Form Setting-->
<?php include_once '_jsadmin.php';?>
</body>
</html>