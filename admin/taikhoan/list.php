  
  <link href="../style2.css">
  
  
  <h1>Quản lý khách hàng  </h1>
         
                <table>
                    <tr >
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

                        echo '<tr class="mr">
                        <td class="pd">'.$id_user.'</td>
                        <td class="pd">'.$user.'</td>
                        <td class="pd">'.$pass.'</td>
                        <td class="pd">'.$email.'</td>
                        <td class="pd">'.$address.'</td>
                        <td class="pd">'.$tel.'</td>
                        <td class="pd">'.$role.'</td>
                        <td><button>
                        <span><a href="' . $suatk . '; ?>">Sửa</a></span>
                    </button>
                    <button>
                        <span><a href="' . $xoatk . '; ?>">Xóa</a></span>
                    </button>
                 
                        </td>
                    </tr>
                        ';
                     }
                    
                    ?>
                </table>

                
   
                <style>
    th:nth-child(1) {
        width: 5%;
    }

    th:nth-child(2) {
        width: 10%;
    }

    th:nth-child(3) {
        width: 10%;
    }

    th:nth-child(4) {
        width: 10%;
    }

    th:nth-child(5) {
        width: 15%;
    }

    th:nth-child(6) {
        width: 15%;
    }

    th:nth-child(7) {
        width: 2%;
    }

    th:nth-child(8) {
        width: 20%;
    }

    td:nth-child(1) {
        width: 1%;
        ;
        text-align: center;
    }

    td:nth-child(2) {
        width: 1%;
        ;
        text-align: center;
    }

    td:nth-child(3) {
        width: 5%;
        text-align: center;
        ;
    }

    td:nth-child(4) {
        width: 5%;
        text-align: center;
        ;
    }

    td:nth-child(5) {
        width: 10%;
        text-align: center;
        ;
    }

    td:nth-child(6) {
        width: 10%;
        text-align: center;
        ;
    }

    td:nth-child(7) {
        width: 15%;
        text-align: center;
        ;
        
    }
    td:nth-child(8) {
        width: 5%;
        text-align: center;
        ;
        
    }
</style>