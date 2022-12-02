<section>
            <h2>Quản lí Danh Mục</h2>
            <table>
                <thead>
                    <tr>
                        <td>Mã Danh Mục</td> 
                        <td>Tên Danh Mục</td>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    foreach($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                        $suadm="index.php?=suadm=".$id;
                        $xoadm="index.php?=xoadm=".$id;
                        echo '<tr>
                        <td width="20%">'.$id.'</td>
                        <td width="40%">'.$name1.'</td>
                        <td>
                            
                            <a href="index.php?act=suadm&id='.$id.'""><button class="normal update" >Update</button></a>
                            
                            <a href="index.php?act=xoadm&id='.$id.'"><button class="normal update" >Delete</button></a>
                        </td>
                    </tr>';
                    }
                ?>
                </tbody>
            </table>
        </section>
                            <span><a href="index.php?act=adddm"><button type ="submit" name = "btn_luu">Thêm Mới</button></a></span>
        
        </div>
    </body>
</html>