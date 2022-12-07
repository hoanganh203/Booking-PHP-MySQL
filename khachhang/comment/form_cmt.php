<?php
include "../../modal/pdo.php";
include "../../modal/binh_luan.php";

session_start();


$idpro = $_REQUEST['id_product'];
$dsbl = load_all_binhluan();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>


    <div class="comment my-8">
        <div class="bg-black text-white inline-block font-semibold p-2">
            Bình luận
        </div>
        <div class="bg-[#F1F1F1] p-10">
            <ul>
            
                <?php
                foreach ($dsbl as $show) {
                    extract($show);
                    echo '
                    <li class="my-3">
                        <span class="font-bold text-[18px]">' . $user . ': &nbsp</span>
                        <span class="italic underline text-[18px]">'.$noi_dung.'</span>
                        <span class="font-normal ml-2 text-[12px]">('.$ngay_bl.')</span>
                    </li> 
                    ';
                }
                ?>
            </ul>
        </div>
        <!-- <?php
                echo "noi dung: " . $idpro;
                ?> -->
        <div>
            <div class=" px-7 w-[100%]  bg-white p-4">
                <p class="text-xl font-semibold text-blue-900 transition-all hover:text-black">Viết bình luận cho sản phẩm</p>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                    <input type="hidden" name="idpro" value="<?= $idpro ?>">
                    <input name="noidung_binhluan" required class="h-20 px-3 text-sm py-1 mt-5 outline-none border-pink-300 w-full resize-none border rounded-lg placeholder:text-sm " placeholder="Viết bình luận cho sản phẩm">
                    <div class="flex justify-between mt-2">
                        <?php
                        if (isset($_SESSION['user'])) {
                            extract($_SESSION['user']);
                        ?>
                            <button type="submit" name="gui_binhluan" class="h-12 w-[150px] bg-blue-400 text-sm text-white rounded-lg transition-all cursor-pointer hover:bg-blue-600">
                                Gửi bình luận
                            </button>
                        <?php } else {
                        ?>
                            <a href="" class="h-12 w-[150px] bg-blue-400 text-sm text-white text-center flex items-center rounded-lg transition-all cursor-pointer hover:bg-blue-600">
                                Đăng nhập để bình luận
                            </a>
                        <?php } ?>
                    </div>
                </form>
            </div>
        </div>

        <?php
        if (isset($_POST['gui_binhluan'])) {
            $noi_dung = $_POST['noidung_binhluan'];
            $id_xebook = $_POST['idpro'];
            $id_user = $_SESSION['user']['id_user'];
            $ngay_bl = date('h:i:sa d/m/Y');
            insert_binhluan($noi_dung, $id_xebook, $id_user, $ngay_bl);
            header("location: " . $_SERVER['HTTP_REFERER']);
        }
        ?>

    </div>

    <style>
        .outline-none{
            color: black;
        }
    </style>

</body>

</html>