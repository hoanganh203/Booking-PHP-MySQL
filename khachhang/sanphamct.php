        <?php

        extract($onesp);
        $hinhsp = "images/" . $img;
        $book = "index.php?act=book&idsp=" . $id;
        $time = load_ten_danhmuctime($iddmtime);
        ?>
        <div class="impl_buy_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="impl_buycar_wrapper">
                            <div class="impl_buycar_color" id="color_car">
                                <div class="slider slider-for1">
                                    <div><img src="<?= $hinhsp ?>" alt=""></div>
                                </div>
                                <div class="slider slider-nav1">
                                    <div><span class="car_color car_clr1"></span></div>
                                    <div><span class="car_color car_clr2"></span></div>
                                    <div><span class="car_color car_clr3"></span></div>
                                    <div><span class="car_color car_clr4"></span></div>
                                    <div><span class="car_color car_clr5"></span></div>
                                    <div><span class="car_color car_clr6"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="impl_buycar_data">
                        <h1><?= $name ?></h1>
                        <h1>$<?= $price ?></h1>
                        <div class="car_emi_wrapper">
                            <span>Khung giờ : <?= $time ?></span>
                            <a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i>Hãng xe : <?= $name1?></a>
                        </div>
                        <p><?= $mota ?></p>
                        <div class="impl_old_buy_btn">
                            <a href="checkout.html" class="impl_btn">add to cart</a>
                            <?php

                            if (isset($_SESSION['unique_id']) && ($_SESSION['unique_id'] > 0)) {
                            ?>
                                <a href="<?=$book?>" class="impl_btn">Book</a>

                            <?php
                            } else {
                                echo '<h6>Vui lòng đăng nhập để BOOK</h6>';
                            } ?>

                            <a href="index.php" class="impl_btn">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>