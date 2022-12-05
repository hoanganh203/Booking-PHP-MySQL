<div id="DivIdToPrint">    
        <table cellpadding="0" cellspacing="0">
        <table style="border:0;width:100%;">
        <tr><td colspan="2" align="center"><b>DOTBIKE</b></td></tr>	
        <tr><td colspan="2" align="center">Phường Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội</td></tr>
        <tr><td colspan="2" align="center"><b>Liên hệ:</b> +123 4567 89</td></tr>
        <tr><td colspan="2" align="center"> <b>Tên Khách hàng:</b> <?=$user?></td></tr>
        <tr><td colspan="2" align="center"><b>Số điện thoại:</b> <?=$tel?></td></tr>
        <tr><td colspan="2" align="center"><b>Hoá đơn</b></td></tr>
        <tr class="heading" style="background:#eee;border-bottom:1px solid #ddd;font-weight:bold;">
            <td>
               Sản phẩm
            </td>
            <td align="right">
                Giá
            </td>
        </tr>
        <tr class="itemrows">
            <td>
                <b> <?=$name?></b>
            </td>
            <td align="right">
           <?= number_format($price, 0, '', ',') ?>
            </td>
        </tr>
        <tr class="total">
            <td></td>
            <td align="right">
            <b>Tổng thanh toán :<?= number_format($price, 0, '', ',') ?></b>
            </td>
        </tr>
        <tr><td colspan="2" align="center">Thank You ! Visit Again</td></tr>
        </table>

        <button style="margin: 10px 500px 0px 650px; cursor: pointer;">IN Hóa Đơn</button>

</div>

<style>
    tr{

        border: none;
    }
</style>