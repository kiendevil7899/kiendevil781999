<header>
    <h1 class="text-center mt-4">Thêm mới loại hàng hóa</h1>
</header>

<div id="form">

    <form action="index.php?act=adddm" class="container" id="waterform" method="post">
        <div class="formgroup w-50 mb-2 mx-auto " id="name-form">
            Mã loại<br>
            <input type="text" class="w-100 " id="name" name="maloai" disabled>
        </div>
        <div class="formgroup w-50 mx-auto" id="message-form">
            Tên loại<br>
            <input type="text" class="w-100" id="name" name="tenloai">
        </div>
        <div class="formgroup w-50 mx-auto">
        <input type="submit" name="themmoi" class="mt-2 btn btn-success btn-sm text-center" value="Thêm mới">
        <a href="index.php?act=listdm"><input type="button" class="btn btn-info btn-sm mt-2" value="Danh sách"></a>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
        ?>
        </div>
    </form>
</div>
