<?php
include_once "part/header.php";
?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Đăng nhập</header>
      <form action="#">
        <div class="error-text"></div>


        <div class="field input">
          <label for="">Email</label>
          <input type="text" name="email" placeholder="Nhập Email" required>
        </div>

        
        <div class="field input">
          <label for="">Mật khẩu</label>
          <input type="password" name="password" placeholder="Nhập mật khẩu" required>
          <i class="fas fa-eye"></i>
        </div>

        <div class="field button">
          <input type="submit" value="Đăng nhâp nào">
        </div>

      </form>
      <div class="link">Chưa có tài khoản? <a href="index.php">Đăng ký ngay</a></div>
      <div class="test" style="text-align: center; font-size: 20px;"><a href="/duan1">Quay lại</a></div>
    </section>
  </div>

  <script src="assets/password-event.js"></script>
  <script src="assets/login.js"></script>
</body>
</html>