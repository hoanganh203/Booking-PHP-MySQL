

<table>
    
    <tr class="domau">
        <th>ID_book</th>
        <th>ID_user</th>
        <th>NAME_user</th>
        <th>NAME_xe</th>
        <th>Date_book</th>
        <th>Date_time</th>
        <th>Time_book</th>
        <th>note</th>
        <th>Trạng thái</th>
        <th>Chức năng</th>
    </tr>

    <?php
    foreach ($listbooking as $danhmucbooking) {
        extract($danhmucbooking);
        $suabook = "index.php?act=suabook&id=" . $id;

        $xoabook = "index.php?act=xoabook&id=" . $id;
        // $inhoadon = "index.php?act=inhoadon&id=" . $id;

    ?>

        <?php if (isset($trangthai) && $trangthai == 0) {
        ?>
            <tr class="test3">
                <td><?php echo '' . $id . ''; ?></td>
                <td><?php echo '' . $id_user . ''; ?></td>
                <td><?php echo '' . $user . ''; ?></td>
                <td><?php echo '' . $name . ''; ?></td>
                <td><?php echo '' . $date_book . ''; ?></td>
                <td><?php echo '' . $time_book . ''; ?></td>
                <td><?php echo '' . $time_nhan . ''; ?></td>
                <td><?php echo '' . $note . ''; ?></td>
                <td><?php if (isset($trangthai) && $trangthai == 0) {
                        echo "Chưa duyệt";
                    }
                    ?>
                </td>
                <td><a href="<?php echo '' . $suabook . ''; ?>"><button>sửa</button></a>
                    <a href="<?php echo '' . $xoabook . ''; ?>"><input type="button" value="Xóa"></a>
                </td>


            </tr>

            <style>
                .test3 {
                    background-color: red;
                }
            </style>

        <?php   }
        ?>

        <?php if (isset($trangthai) && $trangthai == 1) {
        ?>
            <tr class="test1">
                <td><?php echo '' . $id . ''; ?></td>
                <td><?php echo '' . $id_user . ''; ?></td>
                <td><?php echo '' . $user . ''; ?></td>
                <td><?php echo '' . $name . ''; ?></td>
                <td><?php echo '' . $date_book . ''; ?></td>
                <td><?php echo '' . $time_book . ''; ?></td>
                <td><?php echo '' . $time_nhan . ''; ?></td>
                <td><?php echo '' . $note . ''; ?></td>
                <td>
                    <?php if (isset($trangthai) && $trangthai == 1) {
                        echo "Đã duyệt";
                    }
                    ?>



                </td>
                <td><a href="<?php echo '' . $suabook . ''; ?>"><button>sửa</button></a>
                    <a href="<?php echo '' . $xoabook . ''; ?>"><input type="button" value="Xóa"></a>
                </td>




            </tr>
            <style>
                .test1 {
                    background-color: #ccc;
                }
            </style>

        <?php   }
        ?>

        <?php if (isset($trangthai) && $trangthai == 2) {
        ?>
            <tr class="test2">
                <td><?php echo '' . $id . ''; ?></td>
                <td><?php echo '' . $id_user . ''; ?></td>
                <td><?php echo '' . $user . ''; ?></td>
                <td><?php echo '' . $name . ''; ?></td>
                <td><?php echo '' . $date_book . ''; ?></td>
                <td><?php echo '' . $time_book . ''; ?></td>
                <td><?php echo '' . $time_nhan . ''; ?></td>
                <td><?php echo '' . $note . ''; ?></td>
                <td>
                    <?php if (isset($trangthai) && $trangthai == 2) {
                        echo "Đã xem xe";
                    }
                    ?>
                </td>
                <td><a href="<?php echo '' . $suabook . ''; ?>"><button>sửa</button></a>
                    <a href="<?php echo '' . $xoabook . ''; ?>"><input type="button" value="Xóa"></a>
                    <input type="button" value="In Đơn hàng" name="inhoadon">
                </td>
            </tr>
            <style>
                .test2 {
                    background-color: green;
                }
            </style>

        <?php   }
        ?>

    <?php } ?>

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
        width: 1%;
    }

    th:nth-child(2) {
        width: 15%;
    }

    th:nth-child(3) {
        width: 10%;
    }

    th:nth-child(4) {
        width: 10%;
    }

    th:nth-child(5) {
        width: 20%;
    }

    th:nth-child(6) {
        width: 15%;
    }

    th:nth-child(7) {
        width: 15%;
    }


    td:nth-child(1) {
        width: 1%;
        ;
        text-align: center;
    }

    td:nth-child(2) {
        width: 9%;
        ;
        text-align: center;
    }

    td:nth-child(3) {
        width: 10%;
        text-align: center;
        ;
    }

    td:nth-child(4) {
        width: 10%;
        text-align: center;
        ;
    }

    td:nth-child(5) {
        width: 15%;
        text-align: center;
        ;
    }

    td:nth-child(6) {
        width: 15%;
        text-align: center;
        ;
    }

    td:nth-child(7) {
        width: 15%;
        text-align: center;
        ;
    }
</style>