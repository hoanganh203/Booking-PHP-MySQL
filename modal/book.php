<?php

function insert_booking($namebook, $mailbook, $telbook,$notebook, $xebook, $timebook)
{
    $sql = "insert into booking(namebook,mailbook,telbook,notebook,xebook,timebook) values('$namebook','$mailbook','$telbook','$notebook','$xebook','$timebook')";
    pdo_execute($sql);
}

function loadall_booking(){
    $sql="select * from booking order by id desc";
            $listbooking=pdo_query($sql);
            return $listbooking;
}
?>