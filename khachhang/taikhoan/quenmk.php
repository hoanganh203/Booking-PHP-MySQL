
<style>

.form_all{
  margin: 50px 0px 100px 441px;
    }

    .form_all h1{
        text-align: center;
        width: 335px;
        margin-left: 70px
    }
    .form-input{
    width: 500px;
    height: 40px;
    padding: 0px 20px;
    border: 1px solid blue;
    outline: none;
}
.input--item3 input{
    margin: 5px 0px;
    padding: 10px 25px;
    width: 500px;
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


<div class="form_all">
<h1>Lấy lại mật khẩu</h1>
<form action="index.php?act=quenmk" method="post" enctype="multipart/form-data">
<div class="input--item1">
      <input type="email" name="email" class="form-input" placeholder=" ">
      <label for="name" class="form-label">
            Điền email
        </label>
    </div>
    <div class="input--item3">
  
  <input type="submit" value="Gửi" name="guiemail">
  <input type="reset" value="Nhập lại">
    </div>
</form>
</div>
<div class="thongbao">
  <?php

  if (isset($thongbao) && ($thongbao != "")) {
    echo $thongbao;
  }
  ?>
</div>