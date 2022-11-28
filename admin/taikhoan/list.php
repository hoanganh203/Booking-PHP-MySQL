<div class="Danhmuc__list">
<div class="goldal">
                <h1>Quản lý khách hàng  </h1>
            </div>
            </div>
            <div class="Danhmuc__content1">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa tất cả đã chọn">
        </div>
            <div class="Danhmuc__content--table">
                <table>
                    <tr>
                        <th></th>
                        <th>Mã tài khoản</th>
                        <th>Họ tên</th>
                        <th>Mật khẩu</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Số điện</th>
                        <th>Vai trò</th>
                        <th></th>
                    </tr>

                    <?php
                     foreach ($listtaikhoan as $taikhoan){
                        extract($taikhoan);
                        $suatk="index.php?act=suatk&id=".$id_user;
                        $xoatk="index.php?act=xoatk&id=".$id_user;

                        echo ' <tr>
                        <td><input type="checkbox" name="" id=""></td>  
                        <td>'.$id_user.'</td>
                        <td>'.$user.'</td>
                        <td>'.$pass.'</td>
                        <td>'.$email.'</td>
                        <td>'.$address.'</td>
                        <td>'.$tel.'</td>
                        <td>'.$role.'</td>
                        <td><a href="'.$suatk.'"><input type="button" value="Sửa"></a>
                       <a href="'.$xoatk.'"><input type="button" value="Xóa"></a>
                        </td>
                    </tr>
                        ';
                     }
                    
                    ?>

                
                </table>
   

        </div>