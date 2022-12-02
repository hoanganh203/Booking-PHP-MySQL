<?php

function insert_booking($id_user,$id_xebook, $date_book,$time_nhan,$note,$trangthai)
{
    $sql = "insert into booking(id_user,id_xebook, date_book,time_nhan,note,trangthai) values('$id_user','$id_xebook','$date_book','$time_nhan','$note','$trangthai')";
    pdo_execute($sql);
 
}

function loadall_booking($trangthai){
    $sql = "SELECT `booking`.`id` as `id`,`booking`.`id_user` as `id_user`,`taikhoan`.`user` as `user`,`sanpham`.`name` as `name`,`booking`.`date_book` as `date_book`,`booking`.`time_nhan` as `time_nhan`,`booking`.`note` as `note`,`booking`.`trangthai` as `trangthai` from `booking` , `taikhoan` , `sanpham` where `booking`.`id_user` = `taikhoan`.`id_user` and `booking`.`id_xebook` = `sanpham`.`id_xebook` and `booking`.`trangthai`=".$trangthai;
    $sql.=" order by id desc";
    $listbooking=pdo_query($sql);
    return $listbooking;
}

function loadall_booking1(){
    $sql = "SELECT `booking`.`id` as `id`,`booking`.`id_user` as `id_user`,`taikhoan`.`user` as `user`,`sanpham`.`name` as `name`,`booking`.`date_book` as `date_book`,`booking`.`time_nhan` as `time_nhan`,`booking`.`note` as `note`,`booking`.`trangthai` as `trangthai` from `booking` , `taikhoan` , `sanpham` where `booking`.`id_user` = `taikhoan`.`id_user` and `booking`.`id_xebook` = `sanpham`.`id_xebook`";
    $sql.=" order by id desc";
    $listbooking=pdo_query($sql);
    return $listbooking;
}

function delete_booking($id){
    $sql = "delete from booking where id=" .$id;
    pdo_query($sql);
}

function update_booking($id,$trangthai){
    $sql="update booking set trangthai='".$trangthai."' where id=".$id;
    pdo_execute($sql);
}

function loadone_booking($id)
{
    $sql = "SELECT `booking`.`id` as `id`,`booking`.`id_user` as `id_user`,`taikhoan`.`user` as `user`,`sanpham`.`name` as `name`,`booking`.`date_book` as `date_book`,`booking`.`time_nhan` as `time_nhan`,`booking`.`note` as `note`,`sanpham`.`price` as `price`,`taikhoan`.`email` as `email`,`taikhoan`.`tel` as `tel`,`booking`.`trangthai` as `trangthai` from `booking` , `taikhoan` , `sanpham` where `booking`.`id_user` = `taikhoan`.`id_user` and `booking`.`id_xebook` = `sanpham`.`id_xebook` and `booking`.`id`=".$id;
    $CT = pdo_query_one($sql);
    return $CT;
}



function loadall_lichsu($id_user){
    $sql="SELECT `booking`.`id` as `id`,`booking`.`id_user` as `id_user`,`taikhoan`.`user` as `user`,`sanpham`.`name` as `name`,`booking`.`date_book` as `date_book`,`booking`.`time_nhan` as `time_nhan`,`booking`.`note` as `note`,`booking`.`trangthai` as `trangthai` from `booking` , `taikhoan` , `sanpham` where `booking`.`id_user` = `taikhoan`.`id_user` and `booking`.`id_xebook` = `sanpham`.`id_xebook` and `booking`.`id_user`=".$id_user ;
    $listCT = pdo_query($sql);
    return $listCT;
    
}

// function hoadon($id){
//     $sql = "SELECT `booking`.`id` as `id`,`booking`.`id_user` as `id_user`,`taikhoan`.`user` as `user`,`sanpham`.`name` as `name`,`booking`.`date_book` as `date_book`,`booking`.`time_book` as `time_book`,`booking`.`time_nhan` as `time_nhan`,`booking`.`note` as `note`,`sanpham`.`price` as `price`,`taikhoan`.`email` as `email`,`taikhoan`.`tel` as `tel`,`booking`.`trangthai` as `trangthai` from `booking` , `taikhoan` , `sanpham` where `booking`.`id_user` = `taikhoan`.`id_user` and `booking`.`id_xebook` = `sanpham`.`id_xebook` and `booking`.`id`=".$id;
//     $hoadon = pdo_query($sql);
//     // echo '<pre>';
//     // print_r($hoadon);
//     // die();
//     return $hoadon;
//      if(isset([$_POST['sendmail']])){
//                 $bill = '
            //       <div id="DivIdToPrint">    
            //         <table cellpadding="0" cellspacing="0">
            //         <table style="border:0;width:100%;">
            //         <tr><td colspan="2" align="center"><b>DOTBIKE</b></td></tr>	
            //         <tr><td colspan="2" align="center">Phường Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội</td></tr>
            //         <tr><td colspan="2" align="center"><b>Liên hệ:</b> +91 90994 95757</td></tr>
            //         <tr><td><b>Tên Khách hàng:</b> ' . $hoadon['user'] . ' </td></tr>
            //         <tr><td><b>Số điện thoại:</b> ' . $hoadon['tel'] . ' </td></tr>
            //         <tr><td colspan="2" align="center"><b>Hoá đơn</b></td></tr>
            //         <tr class="heading" style="background:#eee;border-bottom:1px solid #ddd;font-weight:bold;">
            //             <td>
            //                Sản phẩm
            //             </td>
            //             <td align="right">
            //                 Giá
            //             </td>
            //         </tr>
            //         <tr class="itemrows">
            //             <td>
            //                 <b>' . $hoadon['name1'] . '</b>
            //             </td>
            //             <td align="right">
            //                 ' . number_format($hoadon['price']) . '
            //             </td>
            //         </tr>
            //         <tr class="total">
            //             <td></td>
            //             <td align="right">
            //             <b>Tổng thanh toán :&nbsp;' . number_format($hoadon['price']) . '</b>
            //             </td>
            //         </tr>
            //         <tr><td colspan="2" align="center">Thank You ! Visit Again</td></tr>
            //         </table>
            //     </table>  
            // </div>
//                   ';
//                   $title = 'book lichj thanhf cong';
//                   sendMail($hoadon['email'],$hoadon['user'],$title,$bill);
//             }
//             break;


?>