<?php
if (is_array($bill)) {
    extract($bill);
}


?>
<header>
    <h1 class="text-center mt-4 mb-2">Cập nhật đơn hàng </h1>
</header>

<form action="index.php?act=updatedh" class="w-50 mx-auto" id="waterform" method="post" enctype="multipart/form-data">
    <div class="rowm b10 mx-auto " style="width: 200px ;">
    trạng thái đơn hàng<br>
        <select name="bill_status" id="" value="<?= $bill['bill_name'] ?>">
            <option value="0" selected>đơn hàng mới </option>
            <option value="1" selected>đang sử lý </option>
            <option value="2" selected>đang giao hàng </option>
            <option value="3" selected>hoàn tất</option>
*
            <?php
            foreach ($listbill as $bill) {
                extract($bill);
                if ($ttdh == $id) $s = "selected";
                else $s = "";
                echo '<option value="' . $id . '" ' . $s . '>' . $ttdh . '</option>';
            }
            ?>
        </select>
    </div>
    <table style="margin-left: 100px;">
        <tr>
            <td>
                Tên khách hàng <br>
                <input type="text" id="name" class="mb-2" style="width: 300px;" name="bill_name" value="<?=$bill['bill_name']?>"/>
            </td>
        </tr>
        <tr>
            <td>
                email </br>
                <input type="text" id="name" class="mb-2" style="width: 300px;" name="bill_email" value="<?=$bill['bill_email']?>">
            </td>
        </tr>
       
            <td>
                địa chỉ<br>
                <input name="bill_address" id="" style="font-size: 15px;" class="mb-2" cols="60" rows="7" value="<?=$bill['bill_address']?>">
            </td>
        </tr>
        <tr>
            <td>
                số điện thoại<br>
                <input name="bill_tel" id="" cols="60" rows="7" style="font-size: 15px;" class="mb-2" value="<?=$bill['bill_tel']?>">
            </td>
        </tr>
        <tr>
          
       
        </tr>
        <tr>
            <td>
                <input type="hidden" name="id" value="<?= $bill['id']?>">
                <input type="submit" name="capnhat" class="btn btn-warning text-white btn-sm"  value="Cập nhật">
                <a href="index.php?act=listbill"><input type="button" class="btn btn-info btn-sm" value="Danh sách"></a>
            </td>
        </tr>
    </table>
    <?php
    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
    ?>
</form>