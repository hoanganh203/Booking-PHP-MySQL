<?php
include_once "../chatbox/api/app/controller/AuthController.php";
include_once "../chatbox/api/app/Config.php";
include_once "../chatbox/api/app/controller/UserController.php";

$auth = new AuthController();
$auth->checkAuth();

$user = new UserController();
$row = $user->getUserById($_SESSION['unique_id']);
include_once "../chatbox/part/header.php";
?>

<div class="Danhmuc__list">
    <div class="goldal">
        <h1>Quản lý khách hàng </h1>
    </div>
</div>
<div class="Danhmuc__content1">
    <input type="button" value="Chọn tất cả">
    <input type="button" value="Bỏ chọn tất cả">
    <input type="button" value="Xóa tất cả đã chọn">
</div>
<div class="Danhmuc__content--table">
    <table>
        <tr>
            <th>ID</th>
            <th>ID!</th>
            <th>Họ</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Mật khẩu</th>
            <th>Hình</th>
            <th>Vai trò</th>
            <th>Trang thái</th>
            <th></th>
        </tr>
        <?php
        $conn = new mysqli('localhost', 'root', '', 'duan1');
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {

            echo '
        <tr>
        <td>' . $row['user_id'] . '</td>
        <td>' . $row['unique_id'] . '</td>
        <td>' . $row['fname'] . '</td>
        <td>' . $row['lname'] . '</td>
        <td>' . $row['email'] . '</td>
        <td>' . $row['password'] . '</td>
        <td><img src="../images/'.$row['img'].'" alt="" width = "50" height="100"></td>
        <td>' . $row['role'] . '</td>
        <td>' . $row['status'] . '</td>
    </tr>';
        }
        ?>


        <?php


        ?>


    </table>


</div>

<style>

    img{
        object-fit:cover;
    }
    
    th{
        background-color: #cccccc;
    }

    td{
        border: 1px solid #ccc;
    }

    
    th:nth-child(1){
        width: 5%;
    }
    th:nth-child(2){
        width: 5%;
    }
    th:nth-child(3){
        width: 10%;
    }
    th:nth-child(4){
        width: 10%;
    }
    th:nth-child(5){
        width: 20%;
    }
   
    th:nth-child(6){
        width: 15%;
    }
    th:nth-child(7){
        width: 15%;
    }
    th:nth-child(8){
        width: 10%;
    }
    th:nth-child(9){
        width: 10%;
    }

    td:nth-child(1){
        width: 5%;;
        text-align: center;
    }
    td:nth-child(2){
        width: 5%;;
        text-align: center;
    }
    td:nth-child(3){
        width: 10%;
        text-align: center;;
    }
    td:nth-child(4){
        width: 10%;
        text-align: center;;
    }
    td:nth-child(5){
        width: 20%;
        text-align: center;;
    }
   
    td:nth-child(6){
        width: 15%;
        text-align: center;;
    }
    td:nth-child(7){
        width: 15%;
        text-align: center;;
    }
    td:nth-child(8){
        width: 10%;
        text-align: center;;
    }
    td:nth-child(9){
        width: 10%;
        text-align: center;;
    }
</style>