
<?php
session_start();

include "modal/pdo.php";
include "modal/danhmuc.php";
include "modal/sanpham.php";
include "modal/book.php";
include "modal/taikhoan.php";
include "khachhang/header.php";
$listdanhmuc = loadall_danhmuc();
$dsdm = loadall_danhmuc();
$spnew = loadall_sanpham__home();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {

        case 'sanpham':
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($iddm);
            $tendm = load_ten_danhmuc($iddm);
            include "khachhang/sanpham.php";
            break;

        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id_xebook = $_GET['idsp'];
                $onesp = loadone_sanpham($id_xebook);
                extract($onesp);
                include "khachhang/sanphamct.php";
            } else {
                include "khachhang/home.php";
            }
            break;

        case 'dangky':

            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $img = $_FILES['img']['name'];
                $target_dir = "uploaduser/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)); {
                } if ($email == "") {
                    $err = 'Email không được để trống';
                } else if ($user == "")   {
                    $err = 'Tên của bạn không trống';
                } else if ($pass == "") {
                    $err = 'Mật khẩu không được để trống';
                } else if (strlen($pass) < 8) {
                    $err = "Mật khẩu phải nhiều hơn 8 ký tự";
                }else if ($address== "") {
                    $err ='Địa chỉ của bạn không được để trống';
                }else if ($tel== "") {
                    $err ='SDT của bạn không được để trống';
                } else {
                insert_taikhoan($email,$user,$pass,$address,$tel,$img);
                include "khachhang/taikhoan/dangnhap.php";
                break;
            }
        }
        
            include "khachhang/taikhoan/dangky.php";
            
            break;

        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                if ($user == "") {
                    $err = 'Tên tài khoản không được để trống';
                } else if ($pass == "") {
                    $err = 'Mật khẩu không được để trống';
                }else {
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    // $thongbao = "Đã đăng nhập thành công"; 
                    header('Location: index.php');
                } else {
                    $thongbao= "Thông tin tài khoản không chính xác";
                    $thongbao = "tài khoản không tồn tại";
                }
            }
        }
            include "khachhang/taikhoan/dangnhap.php";
            break;



        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $email = $_POST['email'];
                $id_user = $_POST['id_user'];
                if ($email == "") {
                    $err = 'Email không được để trống';
                } else if ($user == "")   {
                    $err = 'Tên của bạn không trống';
                } else if ($pass == "") {
                    $err = 'Mật khẩu không được để trống';
                } else if (strlen($pass) < 8) {
                    $err = "Mật khẩu phải nhiều hơn 8 ký tự";
                }else if ($address== "") {
                    $err ='Địa chỉ của bạn không được để trống';
                }else if ($tel== "") {
                    $err ='SDT của bạn không được để trống';
                }else{

                
                update_taikhoan($id_user, $user, $pass, $email, $address, $tel);
                $_SESSION['user'] = checkuser($user, $pass);
                header('Location: index.php?edit_taikhoan');
            }
        }
            include "khachhang/taikhoan/edit_taikhoan.php";
            break;

        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = checkuser_email($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu : " . $checkemail['pass'];
                } else {
                    $thongbao = "email không đúng";
                }
            }
            include "khachhang/taikhoan/quenmk.php";
            break;


        case 'book':
            if (isset($_POST['gui']) && ($_POST['gui'])) {
                $id_user = $_POST['id_user'];
                $id_xebook = $_POST['id_xebook'];
                $date_book = $_POST['date_book'];
                $time_nhan = $_POST['time_nhan'];
                $note = $_POST['note'];
                if ($note == "") {
                    $err = 'Ghi chú không được để trống';
                } else if ($date_book == "")   {
                    $err = 'Tên của bạn không trống';
                }else{
                insert_booking($id_user,$id_xebook, $date_book,$time_nhan,$note);
                include "khachhang/camon.php";
            }
        }
            include "khachhang/camon.php";
            $thongbao = "Đặt lịch thành công";
            break;

        case 'camon':
            include "khachhang/camon.php";
            break;


        case 'lichsu':
            if (isset($_GET['id_user']) && ($_GET['id_user'] > 0)) {
                $id_user = $_GET['id_user'];
            } else {
                $id_user = 0;
            }
            $listCT = loadall_lichsu($id_user);
            $listbooking =loadall_booking(0);
            include "khachhang/lichsubook.php";
            break;



        case 'thoat':
            session_unset();
            session_destroy();
            header('Location: index.php');
            break;
    }
} else {
    include "khachhang/home.php";
}
include "khachhang/footer.php";

// Chỉ dùng để quản lý đường dẫn và điều hướng đến màn hình phù hợp
