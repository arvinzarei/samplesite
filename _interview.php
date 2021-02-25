<?php
include_once 'admin/Interview.php';
$query=Interview::SelectCss();
$item=[];
$item=mysqli_fetch_assoc($query);
?>
<div class="interview" style="width: 100%;height:<?php echo $item['height'].'px' ?>;padding-bottom: 100px; background: url('images/interview/<?php echo $item['image']; ?>') center center no-repeat fixed;background-size: cover;">
    <div class="row">
        <div class="text-center col-lg-8 offset-2">
            <h2 style="color:<?php echo $item['color']; ?>;">معرفی وبسایت رسمی ما</h2>
            <p style="font-family:<?php echo $item['font']; ?>;font-size: 18px;font-weight: bold">در اینجا ما سایتمان را تشریح خواهیم کرد...
                در اینجا ما سایتمان را تشریح خواهیم کرد...
                در اینجا ما سایتمان را تشریح خواهیم کرد...
                در اینجا ما سایتمان را تشریح خواهیم کرد.در اینجا ما سایتمان را تشریح خواهیم کرد...
            </p>
        </div>
    </div>
</div>