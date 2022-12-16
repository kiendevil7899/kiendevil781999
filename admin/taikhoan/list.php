<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
    <h1 class="text-center mt-4 mb-3">Danh sách tài khoản</h1>
    <table class="table table-striped">
        <tr style="text-align:center;">

            <th width=70>Mã TK</th>
            <th width=100>Tên</th>
            <th width=100>Email</th>
            <th width=100>Tên đăng nhập</th>
            <th width=100>Mật khẩu</th>
            <th width=100>Số điện thoại</th>
            <th width=100>Địa chỉ</th>
            <th width=30>Vai trò</th>
            <th width=100>Thao tác</th>
        </tr>
        <?php
        foreach ($listacc as $acc) {
            extract($acc);
            $suatk = "#";
            $xoatk = "index.php?act=xoatk&id=" . $id;
            echo '<tr>
                    <td style="text-align:center;">' . $id . '</td>
                    <td style="text-align:center;">' . $name . '</td>
                    <td style="text-align:center;">' . $email . '</td>
                    <td style="text-align:center;">' . $user . '</td>
                    <td style="text-align:center;">' . $pass . '</td>
                    <td style="text-align:center;">' . $tel . '</td>
                    <td style="text-align:center;">' . $address . '</td>
                    <td style="text-align:center;">' . $role . '</td>
                    <td style="text-align:center;"><a href="' . $suatk . '"><input type="button" class="btn btn-outline-warning btn-sm mr-2" value="Sửa"></a><a href="' . $xoatk . '"><input type="button" class="btn btn-outline-danger btn-sm" value="Xóa"></a></td>
                </tr>';
        }
        ?>

    </table>
    <br>
</body>

</html>