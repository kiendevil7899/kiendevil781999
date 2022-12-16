<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../uploads/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height= '80px' >";
} else {
    $hinh = "khong co anh";
}
?>
<header>
    <h1 class="text-center mt-4 mb-2">Cập nhật sản phẩm</h1>
</header>

<form action="index.php?act=updatesp" class="w-50 mx-auto" id="waterform" method="post" enctype="multipart/form-data">
    <div class="rowm b10 mx-auto " style="width: 200px ;">
        <select name="iddm" id="">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                if ($iddm == $id) $s = "selected";
                else $s = "";
                echo '<option value="' . $id . '" ' . $s . '>' . $name . '</option>';
            }
            ?>
        </select>
    </div>
    <table style="margin-left: 100px;">
        <tr>
            <td>
                Tên sản phẩm<br>
                <input type="text" id="name" class="mb-2" style="width: 300px;" name="tensp" value="<?= $sanpham['name'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                Giá<br>
                <input type="text" id="name" class="mb-2" style="width: 300px;" name="giasp" value="<?= $price ?>">
            </td>
        </tr>
        <tr>
            <td>
                Hình<br>
                <?= $hinh ?>
                <input type="file" style="font-size: 12px;" class="mb-2" id="name" name="hinh">
                
            </td>
        </tr>
        <tr>
            <td>
                Thông tin<br>
                <textarea name="thongtin" id="" style="font-size: 15px;" class="mb-2" cols="60" rows="7"><?= $thongtin ?></textarea>
            </td>
        </tr>
        <tr>
            <td>
                Mô tả<br>
                <textarea name="mota" id="" cols="60" rows="7" style="font-size: 15px;" class="mb-2"><?= $mota ?></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="id" value="<?= $sanpham['id'] ?>">
                <input type="submit" name="capnhat" class="btn btn-warning text-white btn-sm"  value="Cập nhật">
                <a href="index.php?act=listsp"><input type="button" class="btn btn-info btn-sm" value="Danh sách"></a>
            </td>
        </tr>
    </table>
    <?php
    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
    ?>
</form>