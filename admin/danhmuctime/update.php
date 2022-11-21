<?php 

if(is_array($dmtime)){
  extract($dmtime);
}
?>

<section>
                <h2>Thêm Khung Giờ</h2>
                <form action="index.php?act=updatedmtime"method="post" enctype="multipart/form-data">
              <div>
                <input type="hidden" name="maloai" value="<?php if(isset($id)&&($id!="")) echo $id; ?>">
                <p>MÃ ID</p>
                <input  type="text" name ='maloai'disabled>
                <p>Khung Giờ</p>
                <input  type="text" name= 'tenloai' value="<?php if(isset($time)&&($time!="")) echo $time?>">   
                 <button class="normal btn" type="submit" name ="btn_luu">Lưu</button>    
              </div>
                </form>
            </section>
        </div>
    </body>
</html>