<div class="form_all">

  <h1>Đăng kí</h1>
  <p class="err" style='color: red;'><?php if(!empty($err)) echo $err?></p>
  <?php
  if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
    extract($_SESSION['user']);
  }

  ?>

<style>
.err{
  text-align: center;
        margin: 0px 0px 0px -91px;
}


.form_all{
  margin: 50px 238px 100px 210px;
    }

    .form_all h1{
        text-align: center;
        margin: 0px 0px 0px -91px;
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

  <form action="index.php?act=dangky" method="post" enctype="multipart/form-data" >
    <div class="input--item1">
      <input type="email" name="email" class="form-input" placeholder=" " value="<?php if(!empty($_POST['email'])) echo $_POST['email'] ?>">
      <label for="name" class="form-label" >
            Email
        </label>
    </div>
    <div class="input--item1">
      <input type="text" name="user" class="form-input" placeholder=" " value="<?php if(!empty($_POST['user'])) echo $_POST['user'] ?>">
      <label for="name" class="form-label">
            Tên đăng nhập
        </label>
    </div>
    <div class="input--item1">
      <input type="password" name="pass" class="form-input" placeholder=" " value="<?php if(!empty($_POST['pass'])) echo $_POST['pass'] ?>">
      <label for="name" class="form-label">
            Password
        </label>
    </div>
    <div class="input--item1">
      <input type="text" name="address" class="form-input" placeholder=" " value="<?php if(!empty($_POST['address'])) echo $_POST['address'] ?>">
      <label for="name" class="form-label">
            Address
        </label>
    </div>
    <div class="input--item1">
      <input type="text" name="tel" class="form-input" placeholder=" " value="<?php if(!empty($_POST['tel'])) echo $_POST['tel'] ?>">
      <label for="name" class="form-label">
            tel
        </label>
    </div>
    <div class="input--item2">

      <h3>Hình ảnh <br></h3>
      <input type="file" name="img" value="<?php if(!empty($_POST['img'])) echo $_POST['img'] ?>"> <br>
      <input type="hidden" name="id" value="<? $id ?>" >
    </div>
    <div class="input--item3">

      <input type="reset" value="Nhập lại">
      <input type="submit" value="Đăng ký" name="dangky">

    </div>
  </form>

  <div class="thongbao">
    <?php

    if (isset($thongbao) && ($thongbao != "")) {
      echo $thongbao;
      header('Location: index.php');
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
    border-radius: 5px;
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