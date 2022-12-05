            <div class="Danhmuc__content--table">
                <form action="index.php?act=listsp" method="POST">
                    <select name="iddm">
                    <option value="0" selected>Tất cả</option>
                    <?php
                            foreach ($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name1.'</option>';
                            }
                            ?>
                    </select>

                    

                    <input type="submit" name="listok" value="Lọc">
                </form>
                <?php 
                    if(isset($thongbao)&&($thongbao!=""))echo $thongbao;                   
                    ?>

            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa tất cả đã chọn">
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                <table>
                    <tr>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Mô tả</th>
                        <th>Hình1</th>
                        <th>Hình2</th>
                        <th>Lượt xem</th>
                        <th>Chức năng</th>
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
                        echo '<tr>
                        <td>'.$id_xebook.'</td>
                        <td>'.$name.'</td>
                        <td>'.number_format($price).' Vnđ</td>
                        <td>'.$mota.' $</td>
                        <td>'.$hinh.'</td>
                        <td>'.$hinhphu.'</td>
                        <td>'.$luotxem.'</td>

                        <td><button>
                        <span><a href="' . $suasp . ';">Sửa</a></span>
                    </button>
                    <button>
                        <span><a href="' . $xoasp. ';">Xóa</a></span>
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
        width: 20%;
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