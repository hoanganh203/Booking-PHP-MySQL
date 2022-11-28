
<div class="form_all">
    <h1>Đăng nhập</h1>
<form action="index.php?act=dangnhap" method="POST">
<div class="input--item1">
    <input type="text" name="user" class="form-input" placeholder=" ">
    <label for="name" class="form-label">
        Tên đăng nhập
    </label>
</div>
<div class="input--item1">
    <input type="password" name="pass" class="form-input" placeholder=" ">
    <label for="name" class="form-label">
        Password
    </label>
</div>
<div class="header__menucon-list--item">
    <input type="checkbox">
    <p> Ghi nhớ tài khoản ?</p>
</div>

<li class="header__menucon-list--item">
<i class="fa-sharp fa-solid fa-question"></i> <a href="index.php?act=quenmk">Quên mật khẩu</a>
</li>
<li class="header__menucon-list--item">


<i class="fa-sharp fa-solid fa-id-card"></i> <a href="index.php?act=dangky">Đăng kí thành viên</a>
</li>
<div class="input--item3">
<input type="submit" value="Đăng nhập" name="dangnhap"><i class="fa-sharp fa-solid fa-arrow-right-to-bracket"></i>
</div>
<?php

if (isset($thongbao) && ($thongbao != "")) {
  echo $thongbao;
}
?>
</form>
</div>

<style>

    .form_all{
        margin: 50px 550px 100px 550px;
    }

    .form_all h1{
        text-align: center;
    }
    .form-input{
    width: 300px;
    height: 40px;
    padding: 0px 20px;
    border: 1px solid blue;
    outline: none;
}
.input--item3 input{
    margin: 5px 0px;
    padding: 10px 25px;
    width: 300px;
    border-radius: 10px;
    border: 1px solid;

  }

.form-input:focus{
    border-color: violet;
}

.input--item1{
    position: relative;
    margin-top: 10px;
}

.form-label{
    position: absolute;
    transform: translateY(-70%);
    left: 20px;
    top: 25px;
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