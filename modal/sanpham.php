<?php

function insert_sanpham($tensp, $giasp, $hinhsp,$hinhphu, $mota, $iddm, $iddmtime)
{
    $sql = "insert into sanpham(name,price,img,imgphu,mota,iddm,iddmtime) values('$tensp','$giasp','$hinhsp','$hinhphu','$mota','$iddm','$iddmtime')";
    pdo_execute($sql);
}

function delete_sanpham($id)
{
    $sql = "delete from sanpham where id=" . $id;
    pdo_execute($sql);
}

function loadall_sanpham__home(){
    $sql="select * from sanpham where 1 order by id desc limit 12";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}


function loadall_sanpham__top10(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}



function loadall_sanpham($iddm){
    $sql="select * from sanpham where 1";
    if ($iddm >0) {
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_sanphamtime($iddmtime){
    $sql="select * from sanpham where 1";

    if ($iddmtime >0) {
        $sql.=" and iddmtime ='".$iddmtime."'";
    }
    $sql.=" order by id desc";
    $listsanphamtime = pdo_query($sql);
    return $listsanphamtime;
}


function loadone_sanpham($id)
{
    $sql = "select * from sanpham where id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}

function load_sanpham_cungloai($id,$iddm)
{
    $sql = "select * from sanpham where iddm=".$iddm." AND id <> " . $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function update_sanpham($id,$tensp, $giasp, $hinhsp,$hinhphu, $mota){
    if($hinhsp!="" && $hinhphu!="")
    $sql="update sanpham set name='".$tensp."',price='" . $giasp . "',mota='" . $mota ."',img='" . $hinhsp . "',imgphu='" . $hinhphu . "' where id=".$id;
    else
    $sql="update sanpham set name='".$tensp."', price='".$giasp."',mota='" . $mota . "' where id=".$id;
    echo $sql;
    die();
    pdo_execute($sql);
}



?>