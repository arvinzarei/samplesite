<?php include_once "_headeradmin.php"; ?>
<body style="background-color:#E5E4E2">
<!-- Start Menu-->
<nav>
    <ul>
        <li><img src="../images/icon/Dashboard.png"></li>
        <li><a href="admin.php"> تنظیمات</a>
            <ul>
                <li><a href="#">وردپرس</a></li>
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
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Description</th>
            <th>Keywords</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include_once 'SeoWebsite.php';
        $query=SeoWebsite::SelectData();
        $item=[];
        while ($item=mysqli_fetch_assoc($query)): ?>
        <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['title']; ?></td>
            <td><?php echo $item['author']; ?></td>
            <td><?php echo $item['description']; ?></td>
            <td><?php echo $item['keywords']; ?></td>
            <td>
                <form action="deleteseo.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
<!--End Form Setting-->
</body>
</html>