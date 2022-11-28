  <div class="form_all">
  <h1>Cập nhật tài khoản</h1>

  <?php
  if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
    extract($_SESSION['user']);
  }

  ?>

<style>
      .form_all{
        margin: 50px 178px 100px 238px;
    }

    .form_all h1{
        text-align: center;
    }
  .form-input{
    width: 300px;
    height: 40px;
    padding: 0 20px;
    border: 1px solid blue;
    outline: none;
}

.form-input:focus{
    border-color: violet;
}

.input--item1{
    position: relative;
    margin-top: 15px;
}

.form-label{
    position: absolute;
    transform: translateY(-50%);
    left: 270px;
    top: 20px;
    user-select: none;
    color: #999;
    pointer-events: none;
    transition:all 0.25s linear;

}

.form-input:not(:placeholder-shown)+ .form-label,
.form-input:focus+.form-label{
    top:0;
    background-color: #fff;
    color: red;
    padding: 2px 10px;
    border-radius: 3px;
    
}
</style>


  <form action="index.php?act=edit_taikhoan" method="post" enctype="multipart/form-data">
    <div class="input--item1">
      <input type="email" class="form-input" name="email" value="<?= $email ?>" placeholder=" ">
      <label for="name" class="form-label">
            Email
        </label>
    </div>
    <div class="input--item1">
   
    <input type="text" name="user" class="form-input" value="<?= $user ?>" placeholder=" ">
        <label for="name" class="form-label">
            Tên đăng nhập
</label>
    </div>
    <div class="input--item1">
    
    <input type="password" name="pass" class="form-input" value="<?= $pass ?>" placeholder=" ">
        <label for="name" class="form-label">
            Password
        </label>

    </div>
    <div class="input--item1">
   
    <input type="text" name="address" class="form-input" value="<?= $address ?>" placeholder=" ">
        <label for="name" class="form-label">
            Địa chỉ
        </label>

    </div>
    <div class="input--item1">
    
    <input type="text" name="tel" class="form-input" value="<?= $tel ?>" placeholder=" ">
        <label for="name" class="form-label">
            Số điện thoại
        </label>

    </div>
    <div class="input--item1">
    <h3> Hình ảnh</h3>
   
    <input type="file" name="img">
    </div>
    <input type="hidden" name="id_user" value="<?= $id_user ?>">

    <div class="input--item3">

    <input type="submit" value="Cập nhật" name="capnhat">
    <input type="reset" value="Nhập lại">
    </div>

  </form>
  </div>

  <?php

    if (isset($thongbao) && ($thongbao != "")) {
      echo $thongbao;
    }
    ?>
   </div>
   </div> 

  <style>

  .input--item1 input {
    padding: 5px 25px;
    outline: none;
    border: 1px solid;
    margin: 0px 250px;
   width: 500px;

  }

  .input--item2 input {
    padding: 5px 25px;
    outline: none;
    border: 1px solid;
    margin: 0px 250px;
    display: flex;
   width: 500px;

  }

  .input--item1 h3 {
    margin: 0px 250px;

  }

  .input--item2 h3 {
    margin: 0px 250px;
  
  }

  .input--item3 input{
    margin: 5px 250px;
    padding: 10px 25px;
    width: 500px;
    border-radius: 10px;
    border: 1px solid;

  }

  .input--item3 input:hover {
    background-color: #F7F6DC;
  }
  </style>