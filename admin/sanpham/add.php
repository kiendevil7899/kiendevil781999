<header>
    <h1 class="text-center mt-4 ">Thêm mới sản phẩm</h1>
</header>

<div id="form">
    <form action="index.php?act=addsp" id="waterform" style="padding-left: 100px;" class="mx-auto w-50" method="post" enctype="multipart/form-data">
        <div class="formgroup "   id="name-form">
            Danh mục:<br>
            <select name="iddm" class="mb-2" style="width:200px; height: 30px;" id="">
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="' . $id . '">' . $name . '</option>';
                }
                ?>
            </select>
        </div>
        <table>
            <tr>
                <td>
                    Tên sản phẩm:<br>
                    <input type="text" class="mb-2" style="width: 500px;" id="name" name="tensp">
                </td>
            </tr>
            <tr>
                <td>
                    Giá:<br>
                    <input type="text" class="mb-2" style="width: 500px;" id="name" name="giasp">
                </td>
            </tr>
            <tr>
                <td>
                    Hình:<br>
                    <input type="file" class="mb-2" id="name" name="hinh">
                </td>
            </tr>
            <tr>
                <td>
                    Thông tin:<br>
                    <textarea name="thongtin" class="mb-2" style="width: 500px; height:200px;" id="" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    Mô tả:<br>
                    <textarea name="mota" class="" style="width: 500px; height:200px;" id="" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" class="mt-2 btn btn-success btn-sm" name="themmoi" value="Thêm mới">
                    <a href="index.php?act=listsp"><input type="button" class="mt-2 btn btn-info btn-sm" value="Danh sách"></a>
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                    ?>
                </td>
            </tr>
        </table>
    </form>
</div>
<hr>