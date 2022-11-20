<?php
include_once "part/header.php";
?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Đăng ký</header>
      <form action="#">
        <div class="error-text"></div>

        <div class="name-details">
          <div class="field input">
            <label for="">Tên</label>
            <input type="text" name="fname" placeholder="Tên" required>
          </div>
          <div class="field input">
            <label for="">Họ</label>
            <input type="text" name="lname" placeholder="Họ" required>
          </div>
        </div>

        <div class="field input">
          <label for="">Email</label>
          <input type="text" name="email" placeholder="Nhập Email" required>
        </div>

        <div class="field input">
          <label for="">Mật khẩu</label>
          <input type="password" name="password" placeholder="Nhập mật khẩu" required>
          <i class="fas fa-eye"></i>
        </div>

        <div class="field image">
          <label for="">Ảnh đại diện</label>
          <input type="file" name="image" accept="image/x-png,image/jpeg,image/jpg" required>
        </div>

        <div class="field button">
          <input type="submit" value="Đăng ký nào">
        </div>

      </form>
      <div class="link">Đã có tài khoản? <a href="login.php">Đăng nhập ngay</a></div>
      <div class="test" style="text-align: center; font-size: 20px;"><a href="/duan1">Quay lại</a></div>
      

    </section>
  </div>

  <script src="assets/password-event.js"></script>
  <script src="assets/signup.js"></script>
</body>
</html>

<style>
  .test a{
    color: black;
  }

  .test a:hover{
    text-decoration: underline;
    color: red;
  }
</style>

