
<div class="impl_featured_wrappar">

<?php

            
foreach ($dstime as $sp) {


extract($sp);
$hinhsp = "images/" . $img;
$hinhphu = "img/" . $imgphu;

echo ' 
<div class="impl_fea_car_box">
<div class="impl_fea_car_img">
    <img src="' . $hinhsp . '"" class="img-fluid impl_frst_car_img">
    <img src="' . $hinhphu . '" alt="" class="img-fluid impl_hover_car_img" >
    <span class="impl_img_tag" title="compare"><i class="fa fa-exchange" aria-hidden="true"></i></span>
</div>
<div class="impl_fea_car_data">
<h2><a href="purchase_new.html">' . $name . '</a></h2>
    <ul>
        <li><span class="impl_fea_title">Hãng xe</span>
            <span class="impl_fea_name">' . $name1 . '</span></li>
        <li><span class="impl_fea_title">Vehicle Status</span>
            <span class="impl_fea_name">' . $mota . '</span></li>
        <li><span class="impl_fea_title">Color</span>
            <span class="impl_fea_name">white</span></li>
    </ul>
    <div class="impl_fea_btn">
        <button class="impl_btn"><span class="impl_doller">$ ' . $price . '</span><span class="impl_bnw">buy now</span></button>
    </div>
</div>
</div>
';
}
?>

</div>