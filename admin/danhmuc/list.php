<div class="Danhmuc__list">
            <div class="Danhmuc__content--table">
            <div class="Danhmuc__content1">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa tất cả đã chọn">
            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
        </div>
                <table>
                    <tr>
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên loại</th>
                        <th></th>
                    </tr>

                    <?php
                     foreach ($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                        $suadm="index.php?act=suadm&id=".$id;
                        $xoadm="index.php?act=xoadm&id=".$id;

                        echo ' <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$name1.'</td>
                        <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a>
                       <a href="'.$xoadm.'"><input type="button" value="Xóa"></a>
                        </td>
                    </tr>
                        ';
                     }
                    
                    ?>

                
                </table>
            </div>
      

        </div>