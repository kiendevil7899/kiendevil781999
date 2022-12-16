<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<header>
    <h1 class="text-center m-4">Cập nhật loại hàng hóa</h1>
</header>

<div id="form">
    <form action="index.php?act=updatedm" class="w-50 mx-auto" id="waterform" method="post">
        <div class="mb-3" id="name-form">
            Mã loại<br>
            <input type="text" class="w-100" id="name" name="maloai" disabled>
        </div>

        <div class="mb-3" id="message-form">
            Tên loại<br>
            <input type="text" class="w-100" id="name" name="tenloai" value="<?php if (isset($name) && ($name != "")) echo $name; ?>">
        </div>
        <div class="row mt-2 mx-auto">
            <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
            <input type="submit" class="btn btn-warning btn-sm text-white mr-2" name="capnhat" value="Cập nhật">
            <a href="index.php?act=listdm"><input type="button" class="btn btn-info btn-sm" value="Danh sách"></a>
        </div>

        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
        ?>
    </form>
</div>