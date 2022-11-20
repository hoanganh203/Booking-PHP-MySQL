
<?php
session_start();

include "modal/pdo.php";
include "modal/danhmuc.php";
include "modal/danhmuctime.php";
include "modal/sanpham.php";
include "modal/book.php";
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
            include "khachhang/sanpham.php";
            break;

            case 'sanphamtime':
                if (isset($_GET['iddmtime']) && ($_GET['iddmtime'] > 0)) {
                    $iddmtime = $_GET['iddmtime'];
                } else {
                    $iddmtime = 0;
                }
                $dstime = loadall_sanphamtime($iddmtime);
                include "khachhang/sanphamtime.php";
                break;
          
                case 'sanphamct':
                    if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                        $id = $_GET['idsp'];
                        $onesp = loadone_sanpham($id);
                        extract($onesp);
                        $spkhac = load_sanpham_cungloai($id, $iddm);
                        include "khachhang/sanphamct.php";
                    } else {
                        include "khachhang/home.php";
                    }
                    break;
                    
                    case 'book':
                        if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                            $id = $_GET['idsp'];
                            $onesp = loadone_sanpham($id);
                            extract($onesp);
                        include "khachhang/book.php";
                        }

                        if (isset($_POST['BOOK']) && ($_POST['BOOK'])) {
                            $namebook = $_POST['namebook'];
                            $mailbook = $_POST['mailbook'];
                            $telbook = $_POST['telbook'];
                            $notebook = $_POST['notebook'];
                            $xebook = $_POST['xebook'];
                            $timebook = $_POST['timebook'];
                        insert_booking($namebook, $mailbook, $telbook,$notebook, $xebook, $timebook);
                        header('location: khachhang/camon.php');

                        }
                        $thongbao = "Thêm thành công";
                        break;

        case 'dangky':
            header('Location: chatbox/index.php');
            break;

        case 'dangnhap':
            header('Location: chatbox/login.php');
            break;

        case 'chat':
            header('Location: chatbox/users.php');
            break;

        case 'admin':
            header('Location: admin');
            break;

        case 'thoat':
            session_unset();
            header('Location: index.php');
            break;
    }
} else {
    include "khachhang/home.php";
}
include "khachhang/footer.php";

// Chỉ dùng để quản lý đường dẫn và điều hướng đến màn hình phù hợp
