<?php
include_once 'admin/TeamCms.php';
$query = TeamCms::SelectTeam();
$item = [];
?>
<div class="team" style="padding: 50px;background-color:#E5E4E2">
    <div class="row">
        <?php while ($item=mysqli_fetch_assoc($query)): ?>
            <div class="col-lg-3 col-lg-offset-1">
                <img class="img-fluid" src="images/team/<?php echo $item['image']; ?>" alt="post-image"
                     style="width: 250px;height: 200px;">
                <h3><?php echo $item['title']; ?></h3>
                <p>
                    <?php echo $item['summary']; ?>
                </p>
                <div>
                    <form action="team.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                        <input type="submit" value="بیشتر..." class="btn btn-success">
                    </form>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>