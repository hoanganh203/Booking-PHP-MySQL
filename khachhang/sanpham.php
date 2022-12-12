<div class="impl_featured_wrappar">
        <?php
        $i = 0;
        foreach ($dssp as $sp) {
            extract($sp);
            $name1 = loadone1_danhmuc($iddm);
            $hinhsp = "images/" . $img;
            $hinhphu = "img/" . $imgphu;
            $datlich = "index.php?act=sanphamct&idsp=" . $id_xebook;
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
                                <li><span class="impl_fea_title">Thông tin</span>
                                    <span class="impl_fea_name">' . $mota . '</span></li>
                             
                            </ul>
                            <div class="impl_fea_btn">
                                <button class="impl_btn"><span class="impl_doller">'.number_format($price, 0, '', ',') .'</span><span class="impl_bnw">Add cart</span></button>
                            </div>
                            <div class="impl_fea_btn">
                            <a href="' . $datlich . '"><button class="impl_btn"><span class="impl_doller">Chi tiết</span><span class="impl_bnw">Booking</span></button></a>
                        </div>
                        </div>
                        </div>
            ';
        }

        ?>




</div>