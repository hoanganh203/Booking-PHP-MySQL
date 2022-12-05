
<?php 
$quayve = "index.php?act=booking";

                extract($CT);
?>
<table>
    
    <tr class="domau">
        <th>ID_book</th>
        <th>ID_user</th>
        <th>NAME_user</th>
        <th>NAME_xe</th>
        <th>Date_book</th>
        <th>Date_time</th>
        <th>note</th>
        <th>EMail</th>
        <th>Tel</th>
        <th>Trạng thái</th>
        <th>Chức năng</th>
    </tr>

    <tr>
        <td><?=$id?></td>
        <td><?= $id_user ?></td>
        <td><?= $user?></td>
        <td><?= $name?></td>
        <td><?= $date_book?></td>
        <td><?= $time_nhan?></td>
        <td><?= $note?></td>
        <td><?= $email?></td>
        <td><?= $tel?></td>
        <td>
        <?php if (isset($trangthai) && $trangthai == 0) {
                        echo "Chưa duyệt";
                    }
                    ?>
                    <?php if (isset($trangthai) && $trangthai == 1) {
                        echo "Từ chối";
                    }
                    ?>
                      <?php if (isset($trangthai) && $trangthai == 2) {
                        echo "Đã duyệt";
                    }
                    ?>
                      <?php if (isset($trangthai) && $trangthai == 3) {
                        echo "Đã xem xe";
                    }
                    ?>
                </td>

                <td>
                <button>
                            <span><a href="<?php echo '' . $quayve . ''; ?>">Quay về</a></span>
                        </button>
                </td>
    </tr>

</table>


<style>
    table {
        border: none;
    }

    th {
        background-color: #cccccc;
        padding: 10px 0px;
    }

    td {
        border: 1px solid #ccc;
    }


    th:nth-child(1) {
        width: 5%;
    }

    th:nth-child(2) {
        width: 5%;
    }

    th:nth-child(3) {
        width: 10%;
    }

    th:nth-child(4) {
        width: 10%;
    }

    th:nth-child(5) {
        width: 5%;
    }

    th:nth-child(6) {
        width: 5%;
    }

    th:nth-child(7) {
        width: 5%;
    }

    th:nth-child(8) {
        width: 15%;
    }
    
    th:nth-child(9) {
        width: 10%;
    }


    td:nth-child(1) {
        width: 2%;
        text-align: center;
    }

    td:nth-child(2) {
        width: 2%;
        ;
        text-align: center;
    }

    td:nth-child(3) {
        width: 5%;
        text-align: center;
        ;
    }

    td:nth-child(4) {
        width: 5%;
        text-align: center;
        ;
    }

    td:nth-child(5) {
        width: 7%;
        text-align: center;
        ;
    }

    td:nth-child(6) {
        width: 7%;
        text-align: center;
        ;
    }

    td:nth-child(7) {
        width: 10%;
        text-align: center;
        ;
    }

    td:nth-child(7) {
        width: 15%;
        text-align: center;
        ;
    }
</style>