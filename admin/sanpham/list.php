<div class="Danhmuc__list">
            <div class="Danhmuc__content--table">
                <form action="index.php?act=listsp" method="POST">
                    <input type="text" name="kyw">
                    <select name="iddm">
                    <option value="0" selected>Tất cả</option>
                    <?php
                            foreach ($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id_xebook.'">'.$name1.'</option>';
                            }
                            ?>
                    </select>

                    

                    <input type="submit" name="listok" value="Lọc">
                </form>
                <?php 
                    if(isset($thongbao)&&($thongbao!=""))echo $thongbao;                   
                    ?>

<div class="Danhmuc__content1">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa tất cả đã chọn">
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
        </div>
                <table>
                    <tr>
                        <th></th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Mô tả</th>
                        <th>Hình1</th>
                        <th>Hình2</th>
                        <th>Lượt xem</th>
                        <th></th>
                    </tr>

                    <?php
                     foreach ($listsanpham as $sanpham){
                        extract($sanpham);
                        $suasp="index.php?act=suasp&id_xebook=".$id_xebook;
                        $xoasp="index.php?act=xoasp&id_xebook=".$id_xebook;
                        $hinhpath="../images/".$img;
                        $hinhphu="../img/".$imgphu;
                        if(is_file($hinhpath)){
                            $hinh="<img src='".$hinhpath."'width='100' heigth='80'>";
                            $hinhphu="<img src='".$hinhphu."'width='100' heigth='80'>";
                        }else{
                            $hinh='no photo';
                        }
                        echo ' <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id_xebook.'</td>
                        <td>'.$name.'</td>
                        <td>'.$price.' $</td>
                        <td>'.$mota.' $</td>
                        <td>'.$hinh.'</td>
                        <td>'.$hinhphu.'</td>
                        <td>'.$luotxem.'</td>

                        <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a>
                       <a href="'.$xoasp.'"><input type="button" value="Xóa"></a>
                        </td>
                    </tr>
                        ';
                     }
                    
                    ?>

                
                </table>
            </div>
       

        </div>

        <style>
            td{
                border: 1px solid #ccc;
            }
        </style>