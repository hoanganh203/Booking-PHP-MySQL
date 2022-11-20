<div class="Danhmuc__list">
            <div class="Danhmuc__content--table">
            <div class="Danhmuc__content1">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa tất cả đã chọn">
            <a href="index.php?act=adddmtime"><input type="button" value="Nhập thêm"></a>
        </div>
                <table>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Time xem xe</th>
                        <th></th>
                    </tr>

                    <?php
                     foreach ($listdanhmuctime as $danhmuc){
                        extract($danhmuc);
                        $suadm="index.php?act=suadmtime&id=".$id;
                        $xoadm="index.php?act=xoadmtime&id=".$id;

                        echo ' <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$time.'</td>
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

