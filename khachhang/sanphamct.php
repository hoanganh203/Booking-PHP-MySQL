        <?php

        $date = getdate();

        extract($onesp);
        $hinhsp = "images/" . $img;
        $id_xe = loadone1_sanpham($id_xebook);
        $hinhphu = "img/" . $imgphu;

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
                    <div><span class="car_color car_clr2"><img src="<?=$hinhphu?>" alt="" class="img-fluid impl_hover_car_img" ></span></div>

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
                  <a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i>Hãng xe : <?= $name1 ?></a>
                </div>
                <p><?= $mota ?></p>
                <div class="impl_old_buy_btn">
                  <a href="checkout.html" class="impl_btn">add to cart</a>
                  <a href="index.php" class="impl_btn">Back</a>
                </div>
              </div>
            </div>
          </div>

      

            <style>
        
              .input--item1 input {
                padding: 5px 25px;
                outline: none;
                border: 1px solid;
                margin: 0px 150px;
                width: 500px;

              }

              .input--item2 input {
                padding: 5px 25px;
                outline: none;
                border-radius: 5px;
                border: 1px solid;
                margin: 0px 250px;
                display: flex;
                width: 300px;

              }

              .input--item1 h3 {
                margin: 0px 250px;

              }

              .input--item2 h3 {
                margin: 0px 250px;

              }

              .input--item3 input {
                margin: 5px 150px;
                padding: 10px 25px;
                width: 500px;
                border: 1px solid;

              }

              .input--item3 input:hover {
                background-color: #F7F6DC;
              }

              .form-input {
                height: 40px;
                padding: 0 20px;
                border: 1px solid blue;
                outline: none;
              }

              .form-input:focus {
                border-color: violet;
              }

              .input--item1 {
                position: relative;
                margin-top: 15px;
              }

              .form-label {
                position: absolute;
                transform: translateY(-50%);
                left: 175px;
                top: 20px;
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
                padding: 2px 10px;
                border-radius: 3px;

              }

              .test input {
                display: none;
              }

              .tesst input {
                display: none;
              }

              .form_all{
                margin: 50px 0px 0px 300px ;
                border: 1px solid #fff;
                width: 800px;
                padding: 30px 0px;
              }

              .form_all h1{
                text-align: center;
                color: cadetblue;
              }
              .form_all h3{
                text-align: center;
                margin: 50px 0px 0px 0px;
                text-decoration: underline;
              }
              span{
                color: cornflowerblue;
              }
            </style>

            <?php if (isset($_SESSION['user']) && ($_SESSION['user'] > 0)) { ?>
              <div class="form_all">

               <h1>Đặt lịch xem xe</h1>
              <form action="index.php?act=book" method="POST" enctype="multipart/form-data">
               <h3> Bạn muốn đặt xe <span><?= $name ?></span></h3>
               
                <div class="input--item1">
                  <input type="text" name="note" class="form-input" placeholder=" ">
                  <label for="name" class="form-label">
                    Note book
                  </label>
                </div>
                <div class="input--item1">
                <input type="date" name="date_book">
                </div>
                <div class="input--item1">
                <input type="time" name="time_book">
                </div>

                <input type="hidden" name="id_user" value="<?= $id_user ?>">
                <input type="hidden" name="id_xebook" value="<?= $id_xe ?>">
                <input type="hidden" name="time_nhan" value="<?php date_default_timezone_set("Asia/Ho_Chi_Minh");
                                                            echo date('d-m-Y H:i:sa'); ?>">


                <div class="input--item3">

                  <input type="reset" value="Nhập lại">
                  <input type="submit" value="Đặt lịch" name="gui"></a>

                </div>
              </form>
              </div>
            <?php } else { ?>
              <h1>Vui lòng đăng nhập</h1>
            <?php } ?>
          </div>