
        <div class="Danhmuc">
            <div class="Danhmuc__title  goldal">
                <h1>Thêm mới loại hàng</h1>
            </div>

            <div class="Danhmuc__content">
                <form action="index.php?act=adddm" method="post">
                    <div class="Danhmuc__content-ml  mb  input--item">
                        Mã loại <br>
                        <input type="text" name="maloai"  placeholder="auto ID">
                    </div>
                    <div class="Danhmuc__content-tl  mb  input--item">
                        Tên loại <br>
                        <input type="text" name="tenloai" >
                    </div>
                    <div class="Danhmuc__content1">
                        <input type="submit" value="THÊM MỚI" name="themmoi">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
                    </div>

                    <?php 
                    if(isset($thongbao)&&($thongbao!=""))echo $thongbao;                   
                    ?>


                </form>
            </div>
        </div>