<?php

function insert_danhmuctime($tenloai){
    $sql="insert into danhmuctime(time) values('$tenloai')";
    pdo_execute($sql);
}

function delete_danhmuctime($id){
    $sql="delete from danhmuctime where id=".$id;
    pdo_execute($sql);
}

function loadall_danhmuctime(){
    $sql="select * from danhmuctime order by id desc";
            $listdanhmuctime=pdo_query($sql);
            return $listdanhmuctime;
}

function loadone_danhmuctime($id){
    $sql="select * from danhmuctime where id=".$id;
    $dmtime=pdo_query_one($sql);
    return $dmtime;
}

function loadone1_danhmuctime($iddmtime){
    $sql="select * from danhmuctime where id=".$iddmtime;
    $dmtime=pdo_query_one($sql);
    extract($dmtime);
    return $time;
}

function update_danhmuctime($id,$tenloai){
    $sql="update danhmuctime set time='".$tenloai."' where id=".$id;
    pdo_execute($sql);
}
?>