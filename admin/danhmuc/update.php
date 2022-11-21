<?php 

if(is_array($dm)){
  extract($dm);
}


?>

<section>
                <h2>Thêm Danh Mục</h2>
                <form action="index.php?act=updatedm"method="post" enctype="multipart/form-data">
              <div>
                <input type="hidden" name="id" value="<?php if(isset($id)&&($id!="")) echo $id; ?>">
                <p>MÃ Danh Mục</p>
                <input  type="text" name ='id'disabled>
                <p>TÊN Danh Mục</p>
                <input  type="text" name= 'tenloai' value="<?php if(isset($name1)&&($name1!="")) echo $name1?>">   
                 <button class="normal btn" type="submit" name ="btn_luu">Lưu</button>    
              </div>
                </form>
            </section>
        </div>
    </body>
</html>