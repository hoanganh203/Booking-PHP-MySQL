<?php

function insert_binhluan($noi_dung, $id_xebook, $id_user, $ngay_bl)
{
    $sql = "INSERT INTO binh_luan(noi_dung, id_xebook, id_user, ngay_bl) VALUES('$noi_dung', '$id_xebook', '$id_user', '$ngay_bl')";
    pdo_execute($sql);
}


function load_all_binhluan()
{
    $sql = "SELECT `binh_luan`.`ma_bl` as `ma_bl`,`binh_luan`.`noi_dung` as `noi_dung`,`sanpham`.`name` as `name`,`binh_luan`.`ngay_bl` as `ngay_bl`,`taikhoan`.`user` as `user`
     from `binh_luan` , `taikhoan` , `sanpham` where `binh_luan`.`id_user` = `taikhoan`.`id_user` and `binh_luan`.`id_xebook` = `sanpham`.`id_xebook`";
    $list_binhluan = pdo_query($sql);
    return $list_binhluan;
}

function load_binhluan()
{
    $sql = "SELECT * FROM binh_luan ORDER BY ma_bl DESC";
    $list_binhluan = pdo_query($sql);
    return $list_binhluan;
}

function delete_binhluan($ma_bl)
{
    $sql = "DELETE FROM binh_luan WHERE ma_bl=" . $ma_bl;
    pdo_execute($sql);
}
