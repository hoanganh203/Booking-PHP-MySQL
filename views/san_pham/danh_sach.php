<?php
// Bình thường
// Truy van
// Lay du lieu

// Bây giờ
// Bao giờ Controller gọi vào thì hiển thị ra
// Khi nào Controller được gọi?
// Khi đường dẫn gọi đến nghiệp vụ đang cần đến nó
?>

<table>
    <thead>
        <tr>
            <th>Ma SP</th>
            <th>Ten SP</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($ds_sp as $key => $value): ?>
            <tr>
                <td><?= $value['ten']  ?></td>
                <td><?= $value['gia']  ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
