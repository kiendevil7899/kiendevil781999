<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="content">
        <h1 class="mt-4 text-center">Danh sách sản phẩm</h1>
        <form action="" class="w-50 mx-auto" method="post">
            <table class="w-50 mx-auto">
                <tr>
                    <th>
                        <input type="text" style="height:25px ;" name="kyw">
                    </th>
                    <th>
                        <select name="iddm" id="">
                            <option value="0" selected>Tất cả</option>
                            <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="' . $id . '">' . $name . '</option>';
                            }
                            ?>
                        </select>
                    </th>
                    <th>
                        <input type="submit"  class="ml-2 btn btn-outline-dark btn-sm" style="height: 25px; width: 50px; font-size: 10px; font-weight: bold;" name="listok" value="OK">
                    </th>
                </tr>
            </table>
        </form>

        <table class="table table-hover mx-auto" style="width: 100% ; font-size:12px; ">
            <tr style="text-align:center; font-size: 12px; ">
                <th style="width: 70px;">Mã loại</th>
                <th >Tên sản phẩm</th>
                <th style="width: 100px">Hình</th>
                <th >Giá</th>
                <th >Thông tin</th>
                <th >Mô tả</th>
                <th style="width: 120px;">Lượt xem</th>
                <th style="width: 120px;">Thao tác</th>
            </tr>
            <?php
            foreach ($listsanpham as $sanpham) {
                extract($sanpham);
                $suasp = "index.php?act=suasp&id=" . $id;
                $xoasp = "index.php?act=xoasp&id=" . $id;
                $hinhpath = "../uploads/" . $img;
                if (is_file($hinhpath)) {
                    $hinh = "<img src='" . $hinhpath . "' height= '100px' width='90px'>";
                } else {
                    $hinh = "khong co anh";
                }
                echo '
                    <tr ">
                    <td style="text-align:center;">' . $id . '</td>
                    <td style="width: 70px;text-align:center">' . $name . '</td>
                    <td style="width: ;">' . $hinh . '</td>
                    <td style="width: ;text-align:center">' . $price . '</td>
                    <td style="width: ;">' . $thongtin . '</td> 
                    <td style="width: ;">' . $mota . '</td> 
                    <td style="width: ;text-align:center">' . $luotxem . '</td>
                    <td class=" row mx-auto" style="width: 120px;"><a href="' . $suasp . '"><input type="button" class="btn btn-outline-warning btn-sm mr-2" value="Sửa"></a><br><br><a href="' . $xoasp . '"><input type="button" class="btn btn-outline-danger btn-sm" value="Xóa"></a></td>
                </tr>';
            }
            ?>
        </table>
        <hr>
        <a href="index.php?act=addsp" class="row" ><input type="button" style="width: 100px;" class="btn btn-primary btn-sm mx-auto mb-3" value="Nhập thêm"></a>
    </div>
</body>

</html>