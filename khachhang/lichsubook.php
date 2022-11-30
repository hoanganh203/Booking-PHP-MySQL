
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
$id=$_SESSION['user']['id_user'];
$sql = "select * from booking where id_user = '{$id}'";
$user=pdo_query_one($sql);
 if($_SESSION['user']['id_user']){
  
    foreach($listCT as $ls){
        extract($ls);
?>
<?php if (isset($trangthai) && $trangthai == 0) {
    ?>
        <tr class="test3">
            <td><?php echo '' . $user. ''; ?></td>
        <td><?php echo '' . $name . ''; ?></td>
        <td><?php echo '' . $date_book . ''; ?></td>
        <td><?php echo '' . $time_book . ''; ?></td>
        <td><?php echo '' . $time_nhan . ''; ?></td>
        <td><?php echo '' . $note . ''; ?></td>

       <td><?php if (isset($trangthai) && $trangthai == 0) {
                echo "<h6>Chưa duyệt</h6>
                Vui lòng đợi ít phút";
                ?>
                             
       <?php }?>
       </td> 
       </tr>
       <style>
          .test3{
            background-color: red;
          }
       </style>

       <?php } ?>

       <?php if (isset($trangthai) && $trangthai == 1) {
    ?>
        <tr class="test1">
            <td><?php echo '' . $user. ''; ?></td>
        <td><?php echo '' . $name . ''; ?></td>
        <td><?php echo '' . $date_book . ''; ?></td>
        <td><?php echo '' . $time_book . ''; ?></td>
        <td><?php echo '' . $time_nhan . ''; ?></td>
        <td><?php echo '' . $note . ''; ?></td>

       <td><?php if (isset($trangthai) && $trangthai == 1) {
                echo "<h6>Đã duyệt</h6>
                Mong bạn sẽ đến đúng giờ";
                ?>
                             
       <?php }?>

       <style>
          .test1{
            background-color: #ccc;
          }
       </style>
       </td> 
       </tr>


       <?php } ?>

       <?php if (isset($trangthai) && $trangthai == 2) {
    ?>
        <tr class="test2">
            <td><?php echo '' . $user. ''; ?></td>
        <td><?php echo '' . $name . ''; ?></td>
        <td><?php echo '' . $date_book . ''; ?></td>
        <td><?php echo '' . $time_book . ''; ?></td>
        <td><?php echo '' . $time_nhan . ''; ?></td>
        <td><?php echo '' . $note . ''; ?></td>

       <td><?php if (isset($trangthai) && $trangthai == 2) {
                echo "<h6>Đã xem xe</h6>
                Cảm ơn khách hàng đã tin tưởng";
                ?>
                             
       <?php }?>
       </td> 
       </tr>
       <style>
          .test2{
            background-color: green;
          }
       </style>

       <?php } ?>





       <?php } } ?>
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
