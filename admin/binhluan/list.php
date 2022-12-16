<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 class="text-center mt-4 mb-3">Danh sách bình luận</h1>
    <table class="table table-striped">
        <tr style="text-align:center;">
            <th width=60>ID</th>
            <th width=200>Nội dung</th>
            <th width=60>ID user</th>
            <th width=60>ID pro</th>
            <th width=100>Ngày bình luận</th>
            <th width=100>Thao tác</th>
        </tr>
        <?php
        foreach ($listbinhluan as $bl) {
            extract($bl);
            $suabl = "index.php?act=suabl&id=" . $id;
            $xoabl = "index.php?act=xoabl&id=" . $id;
            echo '<tr>
                    <td style="text-align:center;">' . $id . '</td>
                    <td style="text-align:center;">' . $noidung . '</td>
                    <td style="text-align:center;">' . $iduser . '</td>
                    <td style="text-align:center;">' . $idpro . '</td>
                    <td style="text-align:center;">' . $ngaybl . '</td>
                    <td style="text-align:center;"><a href="' . $suabl . '"><input type="button" class="btn btn-outline-warning btn-sm mr-2" value="Sửa"></a><a href="' . $xoabl . '"><input type="button" class="btn btn-outline-danger btn-sm" value="Xóa"></a></td>
                </tr>';
        }
        ?>
    </table>
    <hr>
    <a href="index.php?act=addbl" class="row"><input type="button" class="btn btn-primary btn-sm mx-auto mb-4" value="Nhập thêm"></a>
    <br>
</body>

</html>