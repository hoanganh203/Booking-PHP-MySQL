<div class="bg-gray-200 ">
    <div class="container mx-auto p-24">
        <h1 class="container mx-auto text-4xl text-red-500">show thong ke</h1>
        <table class="table-auto border-separate border border-green-900">
            <thead>
                <tr>
                    <th class="border border-green-600 px-3">Mã loại hàng</th>
                    <th class="border border-green-600 px-3">Tên loại hàng</th>
                    <th class="border border-green-600 px-3">Số lượng</th>
                    <th class="border border-green-600 px-3">Giá thấp nhất</th>
                    <th class="border border-green-600 px-3">Giá cao nhất</th>
                    <th class="border border-green-600 px-3">Giá trung bình</th>
                </tr>
            </thead>
            <tbody>
               
                <?php
                foreach ($list_thongke as $show) {
                    extract($show);
                    $xoatk="index.php?=xoatk=".$id;
                    echo '
                <tr>
                    <td class="border border-green-600 px-3">' . $id . '</td>
                    <td class="border border-green-600 px-3">' . $name1 . '</td>
                    <td class="border border-green-600 px-3">' . $count_sp . '</td>
                    <td class="border border-green-600 px-3">' . $min_gia . '</td>
                    <td class="border border-green-600 px-3">' . $max_gia . '</td>
                    <td class="border border-green-600 px-3">' . $avg_gia . '</td>
                    <td>
                </tr>
            ';
                }
                ?>
            </tbody>
        </table>
        <br> <br>
    
    </div>
</div>