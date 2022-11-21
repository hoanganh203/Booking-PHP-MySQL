<section>
            <h2>Quản lí Khung Giờ</h2>
            <table>
                <thead>
                    <tr>
                        <td>Mã ID</td> 
                        <td>Khung Giờ</td>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    foreach($listdanhmuctime as $danhmuc){
                        extract($danhmuc);
                        $suadm="index.php?=suadmtime=".$id;
                        $xoadm="index.php?=xoadmtime=".$id;
                        echo '<tr>
                        <td width="20%">'.$id.'</td>
                        <td width="40%">'.$time.'</td>
                        <td>
                            
                            <a href="index.php?act=suadmtime&id='.$id.'""><button class="normal update" >Update</button></a>
                            
                            <a href="index.php?act=xoadmtime&id='.$id.'"><button class="normal update" >Delete</button></a>
                        </td>
                    </tr>';
                    }
                ?>
                </tbody>
            </table>
        </section>
        <a href="index.php?act=adddmtime"><button class="normal btn" type ="submit" name = "btn_luu">Thêm Mới</button></a>
        </div>
    </body>
</html>

