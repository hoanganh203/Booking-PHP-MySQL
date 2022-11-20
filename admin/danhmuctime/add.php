
        <div class="Danhmuc">
            <div class="Danhmuc__title  goldal">
                <h1>Thêm mới loại hàng</h1>
            </div>

            <div class="Danhmuc__content">
                <form action="index.php?act=adddmtime" method="post">
                    <div class="Danhmuc__content-ml  mb  input--item">
                        ID <br>
                        <input type="text" name="maloai"  placeholder="auto ID">
                    </div>
                    <div class="Danhmuc__content-tl  mb  input--item">
                        ADD khung giờ new <br>
                        <input type="text" name="tenloai" placeholder="8H-12H">
                    </div>
                    <div class="Danhmuc__content1">
                        <input type="submit" value="THÊM MỚI" name="themmoi">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listdmtime"><input type="button" value="DANH SÁCH"></a>
                    </div>

                    <?php 
                    if(isset($thongbao)&&($thongbao!=""))echo $thongbao;                   
                    ?>


                </form>
            </div>
        </div>