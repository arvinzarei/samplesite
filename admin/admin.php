<?php include_once "_headeradmin.php"; ?>
<body>
<!-- Start Menu-->
<nav>
    <ul>
        <li><img src="../images/icon/Dashboard.png"></li>
        <li><a href="#"> تنظیمات</a>
            <ul>
                <li><a href="detailsSeo.php">جزئیات سئو</a></li>
            </ul>
        </li>
        <li><a href="#">درباره ما</a></li>
        <div class="left-nav">
            <a href="../index.php" target="_blank"><span class="fas fa-desktop"> نمایش وب سایت </span></a>
            <a href="logout.php"><span class="fas fa-power-off"> خروج </span></a>
        </div>
    </ul>
</nav>
<!-- End Menu-->
<!--Start Create Form Setting-->
<div class="Seo-form">
<form action="insertseo.php" method="post">
        <input type="text" name="title" placeholder="Title Website" autofocus><br/>
        <input type="text" name="author" placeholder="Author Name"><br/>
        <textarea name="description" placeholder="Your Description..."></textarea><br/>
        <textarea name="keywords" placeholder="Enter your keywords..."></textarea><br/>
        <button>Submit</button>
</form>
</div>
<!--End Form Setting-->
</body>
</html>