
        <div class="Danhmuc">
            <div class="Danhmuc__title  goldal">
                <h1>Thêm mới sản phẩm</h1>
            </div>

            <div class="Danhmuc__content">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="Danhmuc__content-ml  mb">
                        Danh mục xe <br>
                        <select name="iddm">
                            <?php
                            foreach ($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value='.$id.'>'.$name1.'</option>';
                            }
                            ?>

                            <option value=""></option>
                        </select>
                    </div>

                    <div class="Danhmuc__content-ml  mb">
                        Chọn khung giờ <br>
                        <select name="iddmtime">
                            <?php
                            foreach ($listdanhmuctime as $danhmuc){
                                extract($danhmuc);
                                echo '<option value='.$id.'>'.$time.'</option>';
                            }
                            ?>

                            <option value=""></option>
                        </select>
                    </div>

                    <div class="Danhmuc__content-tl  mb  input--item">
                        Tên xe <br>
                        <input type="text" name="tensp" id="">
                    </div>
                    <div class="Danhmuc__content-tl  mb  input--item">
                        Giá <br>
                        <input type="text" name="giasp" id="">
                    </div>
                    <div class="Danhmuc__content-tl  mb  input--item">
                        Hình ảnh1 <br>
                        <input type="file" name="hinhsp">
                    </div>

                    <div class="Danhmuc__content-tl  mb  input--item">
                        Hình ảnh2 <br>
                        <input type="file" name="hinhphu">
                    </div>
                    <div class="Danhmuc__content-tl  mb  input--item">
                        Mô tả <br>
                        <textarea name="mota"  cols="30" rows="10"></textarea>
                    </div>
                    <div class="Danhmuc__content1">
                        <input type="submit" value="THÊM MỚI" name="themmoi">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
                    </div>

                    <?php 
                    if(isset($thongbao)&&($thongbao!=""))echo $thongbao;                   
                    ?>


                </form>
            </div>
        </div>