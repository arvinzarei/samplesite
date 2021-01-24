<?php
include_once 'admin/TeamCms.php';
$id=$_POST['id'];
$query = TeamCms::selectTeamID($id);
$item = [];
?>
<div class="team" style="padding: 50px;background-color:#E5E4E2">
    <div class="row">
        <?php while ($item=mysqli_fetch_assoc($query)): ?>
            <div class="col-lg-10 col-lg-offset-1">
                <img class="img-fluid" src="images/team/<?php echo $item['image']; ?>" alt="post-image"
                     style="width: 250px;height: 200px;">
                <h3><?php echo $item['title']; ?></h3>
                <p>
                    <?php echo $item['content']; ?>
                </p>
            </div>
        <?php endwhile; ?>
    </div>
</div>