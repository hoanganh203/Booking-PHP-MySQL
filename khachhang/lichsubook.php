
<table>

  
<tr>
        <th>Họ và tên</th>
        <th>Tên xe</th>
        <th>Date_book</th>
        <th>Date_time</th>
        <th>Time_book</th>
        <th>note</th>
        <th>Trạng thái</th>

    </tr>



<?php
 $listbooking = loadall_booking();
$id=$_SESSION['user']['id_user'];
$sql = "select * from booking where id_user = '{$id}'";
$user=pdo_query_one($sql);
 if($_SESSION['user']['id_user']){
  
    foreach($listCT as $ls){
        extract($ls);
?>
        <tr>
            <td><?php echo '' . $user. ''; ?></td>
        <td><?php echo '' . $name . ''; ?></td>
        <td><?php echo '' . $date_book . ''; ?></td>
        <td><?php echo '' . $time_book . ''; ?></td>
        <td><?php echo '' . $time_nhan . ''; ?></td>
        <td><?php echo '' . $note . ''; ?></td>
     
        <td class="domau"><?php if (isset($trangthai) && $trangthai == 0) {
                                echo "<h6>Chưa duyệt</h6>
                                Vui lòng chờ ít phút";
                                ?>
                                <style>
                                    .domau{
                                        background-color: red;
                                    }
                                </style>
                           <?php }
                            ?>
            <?php if (isset($trangthai) && $trangthai == 1) {
                echo "<h6>Đã duyệt</h6>
                Mong bạn đến đúng lịch";
                ?>
                                <style>
                                    .domau{
                                        background-color: green;
                                    }
                                </style>
                           <?php }
                            ?>
            <?php if (isset($trangthai) && $trangthai == 2) {
                echo "Đã xem xe <br>Cảm ơn quý khách";
            }
            ?>



        </td>



    </tr>
<?php
 }
}
 ?>

</table>

<style>
    table{
        background-color:rgb(99, 111, 112 ,1);
        margin: 50px 0px 100px 0px;
        border: 1px solid #fff;
    }

    td{
        padding: 20px 0px;
        border: 1px solid #fff;
        text-align: center;
    }

    th{
        text-align: center;
    }

    td:nth-child(1){
        width: 10%;
    }
    td:nth-child(2){
        width: 10%;
    }
    
    td:nth-child(3){
        width: 10%;
    }
    td:nth-child(4){
        width: 10%;
    }
    td:nth-child(5){
        width: 10%;
    }
    
    td:nth-child(6){
        width: 10%;
    }
    td:nth-child(7){
        width: 10%;
    }
    th:nth-child(1){
        width: 10%;
    }
    th:nth-child(2){
        width: 10%;
    }
    
    th:nth-child(3){
        width: 10%;
    }
    th:nth-child(4){
        width: 10%;
    }
    th:nth-child(5){
        width: 10%;
    }
    
    th:nth-child(6){
        width: 10%;
    }
    th:nth-child(7){
        width: 10%;
    }
</style>
