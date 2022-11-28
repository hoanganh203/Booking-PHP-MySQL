<?php

function insert_sanpham($tensp, $giasp, $hinhsp,$hinhphu, $mota, $iddm)
{
    $sql = "insert into sanpham(name,price,img,imgphu,mota,iddm) values('$tensp','$giasp','$hinhsp','$hinhphu','$mota','$iddm')";
    pdo_execute($sql);
}

function delete_sanpham($id_xebook)
{
    $sql = "delete from sanpham where id_xebook=" . $id_xebook;
    pdo_execute($sql);
}

function loadall_sanpham__home(){
    $sql="select * from sanpham where 1 order by id_xebook desc limit 12";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}


function loadall_sanpham__top10(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function load_ten_danhmuc($iddm)
{
    if($iddm>0){
    $sql = "select * from danhmuc where id=" . $iddm;
    $dm = pdo_query_one($sql);
    extract($dm);
    return $name1;
    }else{
        return"";
    }
}


function loadall_sanpham($iddm){
    $sql="select * from sanpham where 1";
  
    if ($iddm >0) {
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id_xebook desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}



function loadone_sanpham($id_xebook)
{
    $sql = "select * from sanpham where id_xebook=" . $id_xebook;
    $sp = pdo_query_one($sql);
    return $sp;
}

function load_sanpham_cungloai($id_xebook,$iddm)
{
    $sql = "select * from sanpham where iddm=".$iddm." AND id_xebook <> " . $id_xebook;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function update_sanpham($id_xebook,$tensp, $giasp, $hinhsp,$hinhphu, $mota){
    if($hinhsp!="" && $hinhphu!="")
    $sql="update sanpham set name='".$tensp."',price='" . $giasp . "',mota='" . $mota ."',img='" . $hinhsp . "',imgphu='" . $hinhphu . "' where id_xebook=".$id_xebook;
    else
    $sql="update sanpham set name='".$tensp."', price='".$giasp."',mota='" . $mota . "' where id_xebook=".$id_xebook;
    pdo_execute($sql);
}

function loadone1_sanpham($id_xebook){
    $sql="select * from sanpham where id_xebook=".$id_xebook;
    $dm=pdo_query_one($sql);
    extract($dm);
    return $id_xebook;
}


?>