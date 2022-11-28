<?php

function load_all_thongke()
{
    $sql  = "SELECT danhmuc.id, danhmuc.name1, COUNT(sanpham.id_xebook) as count_sp, min(sanpham.price) as min_gia, max(sanpham.price) as max_gia, avg(sanpham.price) as avg_gia";
    $sql .= " from sanpham left join danhmuc on danhmuc.id = sanpham.iddm";
    $sql .= " group by danhmuc.id order by danhmuc.id desc";
    $list_thongke = pdo_query($sql);
    return $list_thongke;
}
function delete_thongke(){
    $sql  = "delete from danhmuc.id, danhmuc.name1, COUNT(sanpham.id_xebook) as count_sp, min(sanpham.price) as min_gia, max(sanpham.price) as max_gia, avg(sanpham.price) as avg_gia";
    $sql .= " from sanpham left join danhmuc on danhmuc.id = sanpham.iddm";
    $sql .= " group by danhmuc.id order by danhmuc.id desc";
}