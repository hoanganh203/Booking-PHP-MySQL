<link href="../style2.css">

<form action="index.php?act=booking" method="post" enctype="multipart/form-data">
    <div class="Danhmuc__content-tl  mb  input--item">
        <div class="Danhmuc__content-tl  mb  input--item">

            <select name="trangthai">
                <option value="0" style="background-color: red;">Chưa duyệt</option>
                <option value="1" style="background-color: green;">Từ chối</option>
                <option value="2" style="background-color: blue;">Đã duyệt</option>
                <option value="3" style="background-color: blue;">Đã xem xe</option>
            </select>
        </div>
        <div class="Danhmuc__content1">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="submit" value="tìm kiếm" name="loc">

        </div>
       
</form>


<table>

    <tr class="domau">
        <th>ID_book</th>
        <th>ID_user</th>
        <th>NAME_user</th>
        <th>NAME_xe</th>
        <th>Date_book</th>
        <th>Date_time</th>
        <th>note</th>
        <th>Trạng thái</th>
        <th>Chức năng</th>
    </tr>

    <?php
    
    foreach ($listbooking as $danhmucbooking) {
        extract($danhmucbooking);
        $suabook = "index.php?act=suabook&id=" . $id;
        $xoabook = "index.php?act=xoabook&id=" . $id;
        $chitietdon = "index.php?act=chitietdon&id=" . $id;
        $sendmailhoadon = "index.php?act=sendmailhoadon&id=" . $id;
        $sendmailbook = "index.php?act=sendmailbook&id=" . $id;
        $sendmailhuy = "index.php?act=sendmailhuy&id=" . $id;
        $hoadon = "index.php?act=hoadon&id=" . $id;

    ?>

        <?php if (isset($trangthai) && $trangthai == 0) {
        ?>
            <tr class="test3">
                <td><?php echo '' . $id . ''; ?></td>
                <td><?php echo '' . $id_user . ''; ?></td>
                <td><?php echo '' . $user . ''; ?></td>
                <td><?php echo '' . $name . ''; ?></td>
                <td><?php echo '' . $date_book . ''; ?></td>
                <td><?php echo '' . $time_nhan . ''; ?></td>
                <td><?php echo '' . $note . ''; ?></td>
                <td><?php if (isset($trangthai) && $trangthai == 0) {
                        echo "Chưa duyệt";
                    }
                    ?>
                </td>
                <td> <button>
                            <span><a href="<?php echo '' . $suabook . ''; ?>">Sửa</a></span>
                        </button>
                        <button>
                            <span><a href="<?php echo '' . $xoabook . ''; ?>">Xóa</a></span>
                        </button>
                        <button class="chieudai">
                            <span><a href="<?php echo '' . $chitietdon . ''; ?>">Chi tiết</a></span>
                        </button>


                </td>


            </tr>

            <style>
                .test3 {
                    background-color: #F7A4A4;
                }
            </style>

        <?php   }
        ?>

        <?php if (isset($trangthai) && $trangthai == 1) {
        ?>
            <tr class="test4">
                <td><?php echo '' . $id . ''; ?></td>
                <td><?php echo '' . $id_user . ''; ?></td>
                <td><?php echo '' . $user . ''; ?></td>
                <td><?php echo '' . $name . ''; ?></td>
                <td><?php echo '' . $date_book . ''; ?></td>
                <td><?php echo '' . $time_nhan . ''; ?></td>
                <td><?php echo '' . $note . ''; ?></td>
                <td><?php if (isset($trangthai) && $trangthai == 1) {
                        echo "Từ chối";
                    }
                    ?>
                </td>
                <td><button>
                            <span><a href="<?php echo '' . $suabook . ''; ?>">Sửa</a></span>
                        </button>
                        <button>
                            <span><a href="<?php echo '' . $xoabook . ''; ?>">Xóa</a></span>
                        </button>
                        <button class="chieudai">
                            <span><a href="<?php echo '' . $chitietdon . ''; ?>">Chi tiết</a></span>
                        </button>
                 
                        <button class="chieudai">
                            <span><a href="<?php echo '' . $sendmailhuy . ''; ?>">MailHủy</a></span>
                        </button>

                </td>


            </tr>

            <style>
                .test4 {
                    background-color: #B73E3E;
                }
            </style>

        <?php   }
        ?>

        <?php if (isset($trangthai) && $trangthai == 2) {
        ?>
            <tr class="test1">
                <td><?php echo '' . $id . ''; ?></td>
                <td><?php echo '' . $id_user . ''; ?></td>
                <td><?php echo '' . $user . ''; ?></td>
                <td><?php echo '' . $name . ''; ?></td>
                <td><?php echo '' . $date_book . ''; ?></td>
                <td><?php echo '' . $time_nhan . ''; ?></td>
                <td><?php echo '' . $note . ''; ?></td>
                <td>
                    <?php if (isset($trangthai) && $trangthai == 2) {
                        echo "Đã duyệt";
                    }
                    ?>



                </td>
                <td><button>
                            <span><a href="<?php echo '' . $suabook . ''; ?>">Sửa</a></span>
                        </button>
                        <button>
                            <span><a href="<?php echo '' . $xoabook . ''; ?>">Xóa</a></span>
                        </button>
                        <button class="chieudai">
                            <span><a href="<?php echo '' . $chitietdon . ''; ?>">Chi tiết</a></span>
                        </button>
                 
                        <button class="chieudai">
                            <span><a href="<?php echo '' . $sendmailbook . ''; ?>">Mail Book</a></span>
                        </button>
                </td>




            </tr>
            <style>
                .test1 {
                    background-color:  #B6E2A1;
                }
            </style>

        <?php   }
        ?>

        <?php if (isset($trangthai) && $trangthai == 3) {
        ?>
            <tr class="test2">
                <td><?php echo '' . $id . ''; ?></td>
                <td><?php echo '' . $id_user . ''; ?></td>
                <td><?php echo '' . $user . ''; ?></td>
                <td><?php echo '' . $name . ''; ?></td>
                <td><?php echo '' . $date_book . ''; ?></td>
                <td><?php echo '' . $time_nhan . ''; ?></td>
                <td><?php echo '' . $note . ''; ?></td>
                <td>
                    <?php if (isset($trangthai) && $trangthai == 3) {
                        echo "Đã xem xe";
                    }
                    ?>
                </td>
                <td><button>
                            <span><a href="<?php echo '' . $suabook . ''; ?>">Sửa</a></span>
                        </button>
                        <button>
                            <span><a href="<?php echo '' . $xoabook . ''; ?>">Xóa</a></span>
                        </button>
                        <button class="chieudai">
                            <span><a href="<?php echo '' . $chitietdon . ''; ?>">Chi tiết</a></span>
                        </button>
                 
                        <button class="chieudai">
                            <span><a href="<?php echo '' . $sendmailhoadon . ''; ?>">Mail HĐ</a></span>
                        </button>
                        <button class="chieudai">
                            <span><a href="<?php echo '' . $hoadon . ''; ?>">Hóa đơn</a></span>
                        </button>
                </td>
            </tr>
            <style>
                .test2 {
                    background-color:#749F82 ;
                }
            </style>

        <?php   }
        ?>

    <?php } ?>

</table>


<style>
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
        width: 10%;
    }

    th:nth-child(6) {
        width: 10%;
    }

    th:nth-child(7) {
        width: 20%;
    }

    th:nth-child(8) {
        width: 10%;
    }

    td:nth-child(1) {
        width: 1%;
        ;
        text-align: center;
    }

    td:nth-child(2) {
        width: 1%;
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
        width: 10%;
        text-align: center;
        ;
    }

    td:nth-child(6) {
        width: 10%;
        text-align: center;
        ;
    }

    td:nth-child(7) {
        width: 15%;
        text-align: center;
        ;
        
    }
    td:nth-child(8) {
        width: 5%;
        text-align: center;
        ;
        
    }
</style>