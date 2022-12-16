<header>
    <h1 class="mt-4 mb-3 text-center">Thêm mới bình luận</h1>
</header>

<div id="form">

    <form action="index.php?act=addbl" class="w-50 mx-auto" id="waterform" method="post">
        <div class="formgroup" id="name-form">
            Nội dung<br>
            <input type="text" class="form-control" id="name" name="noidung">
        </div>
        <div class="formgroup" id="name-form">
            ID User<br>
            <input type="text" class="form-control mb-2" id="name" name="iduser">
        </div>
        <div class="formgroup" id="name-form">
            Name User<br>
            <input type="text" class="form-control mb-2" id="name" name="nameuser">
        </div>
        <div class="formgroup" id="name-form">
            ID Pro<br>
            <input type="text" class="form-control mb-2" id="name" name="idpro">
        </div>
        <div class="formgroup" id="name-form">
            Ngày bình luận<br>
            <input type="date" class="border mb-2" id="name" name="ngaybl">
        </div>
        <input type="submit" name="themmoi" class="btn btn-success btn-sm mr-2" value="Thêm mới">
        <a href="index.php?act=dsbl"><input type="button" class="btn btn-info btn-sm mr-2" value="Danh sách"></a>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
        ?>
    </form>
</div>