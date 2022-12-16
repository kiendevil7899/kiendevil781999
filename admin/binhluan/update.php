<?php
if (is_array($bl)) {
    extract($bl);
}
?>
<header>
    <h1 class="text-center mt-4 mb-3">Cập nhật bình luận</h1>
</header>

<div id="form">

    <form action="index.php?act=updatebl" class="w-50 mx-auto" id="waterform" method="post">
        <div class="" id="name-form">
            Nội dung<br>
            <input type="text" class="form-control mb-3" id="name" name="noidung" value="<?php if (isset($noidung) && ($noidung != "")) echo $noidung; ?>">
        </div>
        <div class="row ">
            <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
            <div class="mx-auto">
            <input type="submit" name="capnhat" class="btn btn-warning text-white btn-sm mr-2 " value="Cập nhật">
            <a href="index.php?act=dsbl"><input type="button" class="btn btn-info btn-sm " value="Danh sách"></a>
            </div>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
        ?>
    </form>
</div>