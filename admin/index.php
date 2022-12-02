<?php
// require 'mail/PHPMailer/src/PHPMailer.php';
// require 'mail/PHPMailer/src/PHPMailer.php';
// require 'mail/PHPMailer/src/SMTP.php';
// require 'mail/senmail.php';

include "header.php";
include "../modal/pdo.php";
include "../modal/danhmuc.php";
include "../modal/sanpham.php";
include "../modal/book.php";
include "../modal/thongke.php";
include "../modal/taikhoan.php";
include "../modal/binh_luan.php";

$listdanhmuc = loadall_danhmuc();

// contronller
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch($act){

        case 'taikhoan':
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
            // danh mục 
            case 'adddm':
                if(isset($_POST['them'])){
                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao="them thành công";
                    $listdanhmuc = loadall_danhmuc();
                    include "danhmuc/list.php";
                    break;
        
                }
                include "danhmuc/add.php";
                break;
    
            case 'listdm':
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
    
            case 'xoadm':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
    
            case 'suadm':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $dm = loadone_danhmuc($_GET['id']);
                }
                include "danhmuc/update.php";
                break;
    
            case "updatedm":
                if(isset($_POST['btn_luu'])){
                    $tenloai=$_POST['tenloai'];
                    $id =$_POST['id'];
                    update_danhmuc($id, $tenloai);
                    $thongbao="them thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
                /*--sản phẩm--*/

    
            case 'addsp':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $hinhsp = $_FILES['hinhsp']['name'];
                    $hinhphu = $_FILES['hinhphu']['name'];

                    $target_dir = "../images/";
                    $target_file = $target_dir . basename($_FILES["hinhsp"]["name"]);
                    if (move_uploaded_file($_FILES["hinhsp"]["tmp_name"], $target_file)); {
                    }
                    $hinhphu = $_FILES['hinhphu']['name'];

                    $target_dir = "../img/";
                    $target_file = $target_dir . basename($_FILES["hinhphu"]["name"]);
                    if (move_uploaded_file($_FILES["hinhphu"]["tmp_name"], $target_file)); {
                    }
                    insert_sanpham($tensp, $giasp, $hinhsp,$hinhphu, $mota, $iddm);
                    $thongbao = "Thêm thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/add.php";
                break;
    
            case 'listsp':
                if (isset($_POST['listok']) && ($_POST['listok'])) {
                    $iddm = $_POST['iddm'];
                } else {
                    $iddm = 0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($iddm);
                include "sanpham/list.php";
                break;
    
            case 'xoasp':
                if (isset($_GET['id_xebook']) && ($_GET['id_xebook'] > 0)) {
                    delete_sanpham($_GET['id_xebook']);
                }
                $listsanpham = loadall_sanpham(0);
                include "sanpham/list.php";
                break;

                case 'suasp':
                    if (isset($_GET['id_xebook']) && ($_GET['id_xebook'] > 0)) {
                        $sp = loadone_sanpham($_GET['id_xebook']);
                    }
                    $listdanhmuc = loadall_danhmuc();
                    include "sanpham/update.php";
                    break;

                case "updatesp":
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $id_xebook = $_POST['id_xebook'];
                        $tensp = $_POST['tensp'];
                        $giasp = $_POST['giasp'];
                        $mota = $_POST['mota'];
                        $hinhsp = $_FILES['hinhsp']['name'];
                        $target_dir = "../images/";
                        $target_file = $target_dir . basename($_FILES["hinhsp"]["name"]);
                        if (move_uploaded_file($_FILES["hinhsp"]["tmp_name"], $target_file)); {
                        }
                        $hinhphu = $_FILES['hinhphu']['name'];
                        $target_dir = "../img/";
                        $target_file = $target_dir . basename($_FILES["hinhphu"]["name"]);
                        if (move_uploaded_file($_FILES["hinhphu"]["tmp_name"], $target_file)); {
                        }
                        update_sanpham($id_xebook,$tensp, $giasp, $hinhsp,$hinhphu, $mota);
                        $thongbao = "cập nhật thành công";
                    }
                    $listsanpham = loadall_sanpham(0);
                    include "sanpham/list.php";
                    break;
    // booking

    
            case 'booking':
                if (isset($_POST['loc']) && ($_POST['loc'])) {
                    $trangthai = $_POST['trangthai'];

                } else {
                    $trangthai = 0;
                }
                $listbooking =loadall_booking($trangthai);
                include "quanlibooking/list.php";
                break;

                case 'suabook':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $book= loadone_booking($_GET['id']);
                    }
                    include "quanlibooking/updatebook.php";
                    break;

             
            case "updatebook":
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $id = $_POST['id'];
                    $trangthai = $_POST['trangthai'];
                    update_booking($id,$trangthai);
                    $thongbao="them thành công";
                }
                $listbooking =loadall_booking(0);
                include "quanlibooking/list.php";
                break;

                case 'xoabook':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        delete_booking($_GET['id']);
                    }
                    $listbooking =loadall_booking(0);
                    include "quanlibooking/list.php";
                    break;

                            

            case 'suatk':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $email = $_POST['email'];
                    $id = $_POST['id'];
                    update_taikhoan($id, $user, $pass, $email, $address, $tel);
                    $_SESSION['user'] = checkuser($user,$pass);
                    header('Location: index.php?edit_taikhoan');
                }
                include "taikhoan/edit_taikhoan.php";
                break;
            
        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;

            // thống kê
            case 'listthongke':
                $list_thongke= load_all_thongke();
                include "thongke/list.php";
                break;
            
            case 'list_binhluan':
                $list_bl = load_binhluan();
                include "../admin/binh_luan/list.php";
                   break;
        
            case 'xoa_binhluan':
                if (isset($_GET['ma_bl'])) {
                    $ma_bl = $_GET['ma_bl'];
                    delete_binhluan($ma_bl);
                }
                    $list_bl = load_binhluan();
                    include "./binh_luan/list.php";
                    break;



           case 'chitietdon':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $CT = loadone_booking($id);
                extract($CT);

            }
            include "quanlibooking/chitiet.php";
              break;

              case 'sendmailhoadon':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    $CT = loadone_booking($id);
                    extract($CT);
                }
                include "quanlibooking/sendmailhoadon.php";
                  break;

                  case 'sendmailbook':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $id = $_GET['id'];
                        $CT = loadone_booking($id);
                        extract($CT);
                    }
                    include "quanlibooking/sendmailbook.php";
                      break;

                      case 'sendmailhuy':
                        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                            $id = $_GET['id'];
                            $CT = loadone_booking($id);
                            extract($CT);
                        }
                        include "quanlibooking/sendmailhuy.php";
                          break;
                //   case 'sendmail':
                //     if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                //         $id = $_GET['id'];
                //         $CT = loadone_booking($id);
                //         extract($CT);
                //     }
                //     include "quanlibooking/sendmail.php";
                //       break;



           
            



    }
}else {
    include "home.php";
}



include "footer.php";
