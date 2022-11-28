<?php
    if(is_array($sp)){
        extract($sp);
    }
    $hinhpath="../images/".$img;
    $hinhphu="../img/".$imgphu;
    if(is_file($hinhpath)){
        $hinh="<img src='".$hinhpath."'width='100' heigth='80'>";
        $hinhphu="<img src='".$hinhphu."'width='100' heigth='80'>";
    }else{
        $hinh='no photo';
    }
?>
        <div class="Danhmuc">
            <div class="Danhmuc__title  goldal">
                <h1>Cập nhật loại hàng loại hàng</h1>
            </div>

            <div class="Danhmuc__content">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <?php
        $tendm = load_ten_danhmuc($iddm);
         echo '<p>Danh mục hiện tại : '.$tendm.'</p>';
            ?>
               <select name="iddm">
                            <?php
                            foreach ($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value='.$id.'>'.$name1.'</option>';
                            }
                            ?>

                            <option value=""></option>
                        </select>
       
                    <div class="Danhmuc__content-ml  mb  input--item">
                        
                    </div>
                    <div class="Danhmuc__content-tl  mb  input--item">
                        Tên sản phẩm <br>
                        <input type="text" name="tensp" id="" value="<?=$name?>">
                    </div>
                    <div class="Danhmuc__content-tl  mb  input--item">
                        Giá <br>
                        <input type="text" name="giasp" id="" value="<?=$price?>">
                    </div>
                    <div class="Danhmuc__content-tl  mb  input--item">
                        Hình ảnh1 <br>
                        <input type="file" name="hinhsp">
                        <br>
                        <?=$hinh?>
                    </div>
                    <div class="Danhmuc__content-tl  mb  input--item">
                        Hình ảnh2 <br>
                        <input type="file" name="hinhphu">
                        <br>
                        <?=$hinhphu?>
                    </div>
                    <div class="Danhmuc__content-tl  mb  input--item">
                        Mô tả <br>
                        <textarea name="mota" cols="30" rows="10"><?=$mota?></textarea>
                    </div>
                    <div class="Danhmuc__content1">
                    <input type="hidden" name="id_xebook" value="<?=$id_xebook?>">
                        <input type="submit" value="Cập Nhật" name="capnhat">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
                    </div>

                   


                </form>
            </div>
        </div>