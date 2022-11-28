
<?php 

if(is_array($book)){
  extract($book);
}


?>



<form action="index.php?act=updatebook" method="post" enctype="multipart/form-data">
          <div class="Danhmuc__content-tl  mb  input--item">
                    <div class="Danhmuc__content-tl  mb  input--item">
                        
                    <select name="trangthai">
                   <option value="0" style="background-color: red;">Chưa duyệt</option>
                   <option value="1" style="background-color: green;">Đã duyệt</option>
                   <option value="2" style="background-color: blue;">Đã xem xe</option>
                   </select>
                    </div>
                    <div class="Danhmuc__content1">
                    <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" value="Cập Nhật" name="capnhat">
                      
                    </div>
                </form>
