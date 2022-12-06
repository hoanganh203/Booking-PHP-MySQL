<?php

function insert_binhluan($noi_dung, $id_xebook, $id_user, $ngay_bl)
{
    $sql = "INSERT INTO binh_luan(noi_dung, id_xebook, id_user, ngay_bl) VALUES('$noi_dung', '$id_xebook', '$id_user', '$ngay_bl')";
    pdo_execute($sql);
}


function load_all_binhluan($id_xebook)
{
    $sql = "SELECT  `binh_luan`.`ngay_bl` as `ngay_bl`,`binh_luan`.`noi_dung` as `noi_dung`,
    `taikhoan`.`user` as `user`,`binh_luan`.`id_xebook` as `id_xebook`
   from `binh_luan` , `taikhoan` where `binh_luan`.`id_user` = `taikhoan`.`id_user` and id_xebook='. $id_xebook .'";
    $list_binhluan = pdo_query($sql);
    return $list_binhluan;
}

function load_binhluan()
{
    // $sql = "SELECT * FROM binh_luan ORDER BY ma_bl DESC";
    $sql = "SELECT  `binh_luan`.`ngay_bl` as `ngay_bl`,`binh_luan`.`noi_dung` as `noi_dung`,`binh_luan`.`ma_bl` as `ma_bl`,
    `taikhoan`.`user` as `user`,`binh_luan`.`id_xebook` as `id_xebook`
   from `binh_luan` , `taikhoan` where `binh_luan`.`id_user` = `taikhoan`.`id_user`";
    $list_binhluan = pdo_query($sql);
    return $list_binhluan;
}

function delete_binhluan($ma_bl)
{
    $sql = "DELETE FROM binh_luan WHERE ma_bl=" . $ma_bl;
    pdo_execute($sql);
}
