<link rel="stylesheet" href="../Dự án mẫu/css/main.css">

<h1>Đăng kí</h1>

<?php
 if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
    extract($_SESSION['user']);
 }

?>
<form action="index.php?act=edit_taikhoan" method="post" enctype="multipart/form-data">
  email <br>
  <input type="email" name="email" value="<?=$email?>"><br>
  tên dăng nhập <br>
  <input type="text" name="user" value="<?=$user?>"><br>
  password <br>
  <input type="password" name="pass" value="<?=$pass?>"><br>
  địa chỉ<br>
  <input type="text" name="address"value="<?=$address?>"><br>
  điện thoại<br>
  <input type="text" name="tel"value="<?=$tel?>"><br>
  Hình ảnh <br>
  <input type="file" name="img" value="<?=$img?>">
  <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" value="Cập nhật" name="capnhat">
  <input type="reset" value="Nhập lại">

</form>
<div class="thongbao">
  <?php

  if (isset($thongbao) && ($thongbao != "")) {
    echo $thongbao;
  }
  ?>
</div>