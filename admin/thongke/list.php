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
        <h1 class="text-center mt-4 mb-3">Thống kê sản phẩm theo loại</h1>
        <table class="table table-striped">
            <tr style="text-align:center;">
                <th width=30>Mã danh mục</th>
                <th width=300>Tên danh mục</th>
                <th width=50>Số lượng</th>
                <th width=100>Giá cao nhất</th>
                <th width=100>Giá thấp nhất</th>
                <th width=100>Giá trung binh</th>
            </tr>
            <?php
            foreach ($listthongke as $thongke) {
                extract($thongke);
                echo '
                    <tr style="text-align:center;">
                        <td>' . $madm . '</td>
                        <td>' . $tendm . '</td>
                        <td>' . $countsp . '</td>
                        <td>' . $maxprice . '</td>
                        <td>' . $minprice . '</td> 
                        <td>' . $avgprice . '</td>                                            
                    </tr>';
            }
            ?>
        </table><hr><br>
        <h1 class="text-center mt-4 mb-3"> Thống kê sản phẩm theo lượt xem</h1>
        <table class="table table-striped">
            <tr style="text-align:center;">
                <th width=50>Mã sản phẩm</th>
                <th width=300>Tên sản phẩm</th>
                <th width=100>Lượt xem</th>
            </tr>
            <?php
            foreach ($listlx as $lx) {
                extract($lx);
                echo '
                    <tr style="text-align:center;">
                        <td>' . $masp . '</td>
                        <td>' . $tensp . '</td>
                        <td>' . $luotxem . '</td>
                    </tr>';
            }
            ?>
        </table>
        <hr>
        <a href="index.php?act=bieudo" class="row"><input type="button" class="btn btn-success btn-sm mx-auto mb-4" value="Xem biểu đồ"></a>
</body>

</html>