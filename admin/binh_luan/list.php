<div class="bg-gray-200">
    <div class="container mx-auto p-24">
        <table class="divide-y divide-gray-300 w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="py-2 text-xl text-gray-500">
                        Mã bl
                    </th>
                    <th class="py-2 text-xl text-gray-500">
                        Nội dung
                    </th>
                    <th class="py-2 text-xl text-gray-500">
                        Mã sp
                    </th>
                    <th class="py-2 text-xl text-gray-500">
                        Mã kh
                    </th>
                    <th class="py-2 text-xl text-gray-500">
                        Ngày bình luận
                    </th>
                    <th class="py-2 text-xl text-gray-500">
                        Xóa
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-300">
                <!-- <tr class="whitespace-nowrap">
                <td class="pl-40 py-4 text-sm text-gray-500">
                    1
                </td>
                <td class="pl-40 py-4">
                    <div class="text-sm text-gray-900">
                        Jon doe
                    </div>
                </td>
                <td class="pl-40 py-4">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </a>
                </td>
                <td class="pl-40 py-4">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </a>
                </td>
            </tr> -->   

                <?php
                foreach ($list_bl as $show) {
                    extract($show);

                    //tao bien sua, xoa
                    // $sua_loaihang = "index.php?act=sua_loaihang&ma_loai=" . $ma_loai;
                    $xoa_binhluan = "index.php?act=xoa_binhluan&ma_bl=" . $ma_bl;
                    //
                    echo '
                        <tr class="whitespace-nowrap">
                            <td class="pl-24 py-4 text-sm text-gray-500">
                                ' . $id_xebook . '
                            </td>
                            <td class="pl-24 py-4">
                                <div class="text-sm text-gray-900">
                                    ' . $noi_dung . '
                                </div>
                            </td>
                            <td class="pl-24 py-4">
                                <div class="text-sm text-gray-900">
                                    ' . $id_xebook . '
                                </div>
                            </td>
                            <td class="pl-24 py-4">
                                <div class="text-sm text-gray-900">
                                    ' . $id_user . '
                                </div>
                            </td>
                            <td class="pl-24 py-4">
                                <div class="text-sm text-gray-900">
                                    ' . $ngay_bl . '
                                </div>
                            </td>
                            <td class="pl-24 py-4">
                                <a href="' . $xoa_binhluan . '">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                ';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>