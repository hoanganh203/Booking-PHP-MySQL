<?php

function insert_booking($id_user,$id_xebook, $date_book,$time_book,$time_nhan,$note,$trangthai)
{
    $sql = "insert into booking(id_user,id_xebook, date_book,time_book,time_nhan,note,trangthai) values('$id_user','$id_xebook','$date_book','$time_book','$time_nhan','$note','$trangthai')";
    pdo_execute($sql);
 
}

function loadall_booking(){
            $sql = "SELECT `booking`.`id` as `id`,`booking`.`id_user` as `id_user`,`taikhoan`.`user` as `user`,`sanpham`.`name` as `name`,`booking`.`date_book` as `date_book`,`booking`.`time_book` as `time_book`,`booking`.`time_nhan` as `time_nhan`,`booking`.`note` as `note`,`booking`.`trangthai` as `trangthai` from `booking` , `taikhoan` , `sanpham` where `booking`.`id_user` = `taikhoan`.`id_user` and `booking`.`id_xebook` = `sanpham`.`id_xebook` ORDER BY id  DESC";
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
    $sql = "select * from booking where id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}

function loadall_lichsu($id_user){
    $sql="SELECT `booking`.`id` as `id`,`booking`.`id_user` as `id_user`,`taikhoan`.`user` as `user`,`sanpham`.`name` as `name`,`booking`.`date_book` as `date_book`,`booking`.`time_book` as `time_book`,`booking`.`time_nhan` as `time_nhan`,`booking`.`note` as `note`,`booking`.`trangthai` as `trangthai` from `booking` , `taikhoan` , `sanpham` where `booking`.`id_user` = `taikhoan`.`id_user` and `booking`.`id_xebook` = `sanpham`.`id_xebook` and `booking`.`id_user`=".$id_user ;
    $listCT = pdo_query($sql);
    return $listCT;
}

?>