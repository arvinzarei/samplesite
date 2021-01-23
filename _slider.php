<!-- Insert to your webpage where you want to display the slider -->
<div class="slider">
<div class="amazingslider-wrapper" id="amazingslider-wrapper-1" style="display:block;position:relative;width:1100px;margin:20px auto;">
    <div class="amazingslider" id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
        <ul class="amazingslider-slides" style="display:none;">
            <?php
            include_once 'admin/Slider.php';
            $query=Slider::SelectSlider();
            $item=[];
            ?>
            <?php while ($item=mysqli_fetch_assoc($query)): ?>
            <li><a href="<?php echo $item['link']; ?>"><img src="images/slider/<?php echo $item['image']; ?>" alt="<?php echo $item['image']; ?>"  title="<?php echo $item['caption']; ?>" /></a></li>
            <?php endwhile; ?>
        </ul>
        <ul class="amazingslider-thumbnails" style="display:none;">
            <?php
            include_once 'admin/Slider.php';
            $query=Slider::SelectSlider();
            $item=[];
            ?>
            <?php while ($item=mysqli_fetch_assoc($query)): ?>
            <li><img src="images/slider/<?php echo $item['image']; ?>"/></li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>
</div>
<!-- End of body section HTML codes -->