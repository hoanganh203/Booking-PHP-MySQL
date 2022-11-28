<?php

function insert_danhmuc($tenloai){
    $sql="insert into danhmuc(name1) values('$tenloai')";
    pdo_execute($sql);
}

function delete_danhmuc($id){
    $sql="delete from danhmuc where id=".$id;
    pdo_execute($sql);
}

function loadall_danhmuc(){
    $sql="select * from danhmuc order by id desc";
            $listdanhmuc=pdo_query($sql);
            return $listdanhmuc;
}


function loadone_danhmuc($id){
    $sql="select * from danhmuc where id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}

function loadone1_danhmuc($iddm){
    $sql="select * from danhmuc where id=".$iddm;
    $dm=pdo_query_one($sql);
    extract($dm);
    return $name1;
}



function loadname_sanpham($id_xebook){
    $sql="select * from sanpham where id_xebook=".$id_xebook;
    $dm=pdo_query_one($sql);
    extract($dm);
    return $id_xebook;
}



function update_danhmuc($id,$tenloai){
    $sql="update danhmuc set name1='".$tenloai."' where id=".$id;
    pdo_execute($sql);
}
?>