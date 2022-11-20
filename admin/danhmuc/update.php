<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
        <div class="Danhmuc">
            <div class="Danhmuc__title  goldal">
                <h1>Cập nhật loại hàng loại hàng</h1>
            </div>

            <div class="Danhmuc__content">
                <form action="index.php?act=updatedm" method="post">
                    <div class="Danhmuc__content-ml  mb  input--item">
                        Mã loại <br>
                        <input type="text" name="maloai" id="">
                    </div>
                    <div class="Danhmuc__content-tl  mb  input--item">
                        Tên loại <br>
                        <input type="text" name="tenloai" id="" value="<?php if(isset($name1)&&($name1!="")) echo $name1;?>">
                    </div>
                    <div class="Danhmuc__content1">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
                        <input type="submit" value="Cập nhập" name="capnhat">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
                    </div>

                    <?php 
                    if(isset($thongbao)&&($thongbao!=""))echo $thongbao;                   
                    ?>


                </form>
            </div>
        </div>