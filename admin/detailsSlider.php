<?php include_once "_headeradmin.php"; ?>
<body style="background-color:#E5E4E2">
<!-- Start Menu-->
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
                        تنظیمات
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">جزئیات سئو</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="FormSlider.php">اسلایدر</a>
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
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Image Name</th>
            <th>Image</th>
            <th>Caption</th>
            <th>link</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include_once 'Slider.php';
        $query=Slider::SelectSlider();
        $item=[];
        while ($item=mysqli_fetch_assoc($query)): ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['image']; ?></td>
                <td><img src="../images/slider/<?php echo $item['image']; ?>" width="50px" height="50px" </td>
                <td><?php echo $item['caption']; ?></td>
                <td><?php echo $item['link']; ?></td>
                <td>
                    <form action="deleteseo.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                        <input type="submit" value="Delete">
                    </form>
                </td>
                <td>
                    <form action="deleteseo.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                        <input type="submit" value="Update">
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
<!--End Form Setting-->
<?php include_once '_jsadmin.php';?>
</body>
</html>