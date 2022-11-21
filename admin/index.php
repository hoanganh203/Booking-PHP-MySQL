<?php

include "header.php";
include "../modal/pdo.php";
include "../modal/danhmuc.php";
include "../modal/sanpham.php";
include "../modal/danhmuctime.php";
include "../modal/book.php";

$listdanhmuc = loadall_danhmuc();

// contronller
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch($act){

        case 'khachhang':
            include "taikhoan/list.php";
            break;
            
            case 'adddm':
                if(isset($_POST['them'])){
                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao="them thành công";
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
                /*----*/
    
            case 'addsp':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $iddm = $_POST['iddm'];
                    $iddmtime = $_POST['iddmtime'];
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
                    insert_sanpham($tensp, $giasp, $hinhsp,$hinhphu, $mota, $iddm, $iddmtime);
                    $thongbao = "Thêm thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                $listdanhmuctime = loadall_danhmuctime();
                include "sanpham/add.php";
                break;
    
            case 'listsp':
                if (isset($_POST['listok']) && ($_POST['listok'])) {
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                } else {
                    $kyw = '';
                    $iddm = 0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($iddm);
                include "sanpham/list.php";
                break;
    
            case 'xoasp':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_sanpham($_GET['id']);
                }
                $listsanpham = loadall_sanpham("", 0);
                include "sanpham/list.php";
                break;

                case 'suasp':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $sp= loadone_sanpham($_GET['id']);
                    }
                    $listdanhmuc = loadall_danhmuc();
                    include "sanpham/update.php";
                    break;
    
                case "updatesp":
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $id = $_POST['id'];
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
                        update_sanpham($id,$tensp, $giasp, $hinhsp,$hinhphu, $mota);
                        $thongbao = "cập nhật thành công";
                    }
                    $listsanpham = loadall_sanpham(0);
                    include "sanpham/list.php";
                    break;
// quan ly time
                    case 'adddmtime':
                        if (isset($_POST['them'])) {
                            $tenloai = $_POST['tenloai'];
                            insert_danhmuctime($tenloai);
                            $thongbao="them thành công";
                        }
                        include "danhmuctime/add.php";
                        break;
            
                    case 'listdmtime':
                        $listdanhmuctime = loadall_danhmuctime();
                        include "danhmuctime/list.php";
                        break;
            
                    case 'xoadmtime':
                        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                            delete_danhmuctime($_GET['id']);
                        }
                        $listdanhmuctime = loadall_danhmuctime();
                        include "danhmuctime/list.php";
                        break;
          
                    case 'suadmtime':
                        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                            $dmtime = loadone_danhmuctime($_GET['id']);
                        }
                        include "danhmuctime/update.php";
                        break;
            
                    case "updatedmtime":
                        if(isset($_POST['btn_luu'])){
                            $id =$_POST['maloai'];
                            $tenloai=$_POST['tenloai'];
                            update_danhmuctime($id, $tenloai);
                            $thongbao="them thành công";
                        }
                        $listdanhmuctime = loadall_danhmuctime();
                        include "danhmuctime/list.php";
                        break;
                        
                        
            case 'booking':
                $listbooking = loadall_booking();
                include "quanlibooking/list.php";
                break;

    }
}else {
    include "home.php";
}



include "footer.php";

?>