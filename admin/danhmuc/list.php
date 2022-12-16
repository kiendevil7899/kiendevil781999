<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 class="text-center mt-4 mb-3">Danh sách loại hàng</h1>
    <table class="table table-hover" >
        <tr class="text-center">
            <th></th>
            <th style="width: 50px ;">Mã loại</th>
            <th>Tên loại</th>
            <th>Thao tác</th>
        </tr>
        <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                $suadm = "index.php?act=suadm&id=" . $id;
                $xoadm = "index.php?act=xoadm&id=" . $id;
                echo '<tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td style="text-align:center;">' . $id . '</td>
                                            <td style="text-align:center;">' . $name . '</td>
                                            <td style="text-align:center;" ><a href="' . $suadm . '"><input type="button" class="btn btn-outline-warning btn-sm mr-2" value="Sửa"></a><a href="' . $xoadm . '"><input type="button" class="btn btn-outline-danger btn-sm" value="Xóa"></a></td>
                                        </tr>';
            }
            ?>
    </table>
<hr>
    <div class="container">
    <a href="index.php?act=adddm" class="row "><input type="button" class="btn btn-primary btn-sm mx-auto" value="Nhập thêm"></a>
    </div>
</body>
</html>