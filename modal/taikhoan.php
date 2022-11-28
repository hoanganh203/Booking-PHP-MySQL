<?php
function insert_taikhoan($email,$user,$pass,$address,$tel,$img){
    $sql="insert into taikhoan(email,user,pass,address,tel,img) values('$email','$user','$pass','$address','$tel','$img')";
    pdo_execute($sql);
}



function checkuser($user,$pass)
{
    $sql="select * from taikhoan where user='".$user."' AND pass='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
}


function checkuser_email($email)
{
    $sql="select * from taikhoan where email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id_user, $user, $pass,$email,$address,$tel){
    $sql="update taikhoan set  user='".$user."',pass='" . $pass . "',email='" . $email ."',address='" . $address ."',tel='" . $tel ."' where id_user=". $id_user;
    pdo_execute($sql);
}

function loadall_taikhoan(){
    $sql="select * from taikhoan order by id_user desc";
            $listtaikhoan=pdo_query($sql);
            return $listtaikhoan;
}

function delete_taikhoan($id_user)
{
    $sql = "delete from taikhoan where id_user=" . $id_user;
    pdo_execute($sql);
}

