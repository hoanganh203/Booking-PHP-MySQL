

<form action="index.php?act=book" method="post" enctype="multipart/form-data">
<h1>Điền thông tin</h1>

<div class="header__menucon--form">
                                  
                                        <input type="text" name="namebook" class="form-input" placeholder=" ">
                                        <label for="name" class="form-label">
                                            Họ và tên
                                        </label>
                                    </div>
                                    <div class="header__menucon--form">
                                        <input type="email" name="mailbook" class="form-input" placeholder=" ">
                                        <label for="name" class="form-label">
                                           Email
                                        </label>
                                    </div>
                                    <div class="header__menucon--form">
                                        <input type="text" name="telbook" class="form-input" placeholder=" ">
                                        <label for="name" class="form-label">
                                           Số điện thoại
                                        </label>
                                    </div>
                                    <div class="header__menucon--form">
                                        <input type="text" name="notebook" class="form-input" placeholder=" ">
                                        <label for="name" class="form-label">
                                           Ghi chú
                                        </label>
                                    </div>
                                    <div class="header__menucon--form">
                                        <input type="text" name="xebook" class="form-input" value="<?=$name?>">
                                    </div>
                                    <div class="header__menucon--form">
                                        <input type="text" name="timebook" class="form-input" value="<?=$time?>">
                                    </div>
                                   <input type="submit" value="BOOK" name="BOOK">


                                    <p>Địa chỉ : Đường trịnh văn bô , Nam từ niêm , Hoài Đức , Hà Nội</p>

                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8638558814223!2d105.7445984147247!3d21.0381327928346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1668884374113!5m2!1svi!2s" width="350" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


</form>

<?php

extract($onesp);
$hinhsp = "images/" . $img;
$book = "index.php?act=book&idsp=" . $id;
 
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
                    <a href="index.php" class="impl_btn">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>

iframe{
    margin: 0px 130px;
}
   
   form{
    margin: 100px 450px 0px 450px;
    
   }

   form h1{
    text-align: center;
    text-decoration: underline;
   }

    .form-input {
        width: 600px;
        height: 50px;
        padding: 0px 20px;
        border: 1px solid blue;
        outline: none;
    }

    .form-input:focus {
        border-color: violet;
    }

    .header__menucon--form{
        position: relative;
        margin-top: 15px;
    }

    .form-label {
        position: absolute;
        transform: translateY(-80%);
        left: 20px;
        top: 33px;
        user-select: none;
        color: #999;
        pointer-events: none;
        transition: all 0.25s linear;

    }

    .form-input:not(:placeholder-shown)+.form-label,
    .form-input:focus+.form-label {
        top: 0;
        background-color: #fff;
        color: red;
        padding: 1px 2px;
        border-radius: 3px;

    }

    </style>


