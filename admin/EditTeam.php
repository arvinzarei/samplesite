<?php include_once "_headeradmin.php"; ?>
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
                        اسلایدر
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="detailsSlider.php">جزئیات اسلایدر</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        تیم ما
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="FormTeam.php">فرم تیم ما</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="detailsTeam.php">جزئیات تیم ما</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="detailsSeo.php">تنظیمات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">گالری</a>
                </li>
            </ul>
            <form class="d-flex">
                <a href="../index.php" target="_blank"><span class="fas fa-desktop"> نمایش وب سایت </span></a>
                <a href="logout.php"><span class="fas fa-power-off">  خروج  </span></a>
            </form>
        </div>
    </div>
</nav>
<!-- End Menu-->
<!--Start Create Form Setting-->
<div class="Seo-form">
    <?php
    include_once 'TeamCms.php';
    $id=$_POST['id'];
    $query=TeamCms::selectTeamID($id);
    $item=[];
    $item=mysqli_fetch_assoc($query);
    ?>
    <form action="UpdateTeam.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image"><br/>
        <input type="text" name="title" value="<?php echo $item['title']; ?>"><br/>
        <textarea name="summary"><?php echo $item['summary']; ?></textarea><br/>
        <textarea name="content" class="editor"><?php echo $item['content']; ?></textarea><br/>
        <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
        <button>Update</button>
    </form>
</div>
<!--End Form Setting-->
<?php include_once '_jsadmin.php';?>
<script src="../ckeditor/ckeditor.js"></script>
<script src="../ckeditor/adapters/jquery.js"></script>
<script>
    $('textarea.editor').ckeditor();
</script>
</body>
</html>