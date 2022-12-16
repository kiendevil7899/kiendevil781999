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
        <h1 class="mt-4 text-center">danh sách đơn hàng</h1>
        <form action="index.php?act=listbill" class="w-50 mx-auto" method="post">
            <table class="w-50 mx-auto">
                <tr>
                    <th>
                        <input type="text" style="height:25px ;" name="kyw" placeholder="nhập mã đơn hàng ">
                    </th>
                    <th>
                        <input type="submit"  class="ml-2 btn btn-outline-dark btn-sm" style="height: 25px; width: 50px; font-size: 10px; font-weight: bold;" name="listok" value="OK">
                    </th>
              
                </tr>
            </table>
        </form>

        <table class="table table-hover mx-auto" style="width: 100% ; font-size:12px; ">
           <tr>
            <th></th>
            <th>mã đơn hàng </th>
            <th>khách hàng </th>
            <th>số lượng hàng </th>
            <th>giá trị đơn hàng </th>
            <th>ngày đặt hàng</th>
            <th>tình trạng đơn hàng</th>
            
            <th>thao tác</th>
           </tr>
          <?php 
          foreach ($listbill as $bill) {
            extract($bill);
            $suadh = "index.php?act=suadh&id=" . $id;
            $xoadh = "index.php?act=xoadh&id=" . $id;
            $kh=$bill["bill_name"].'
            <br>'.$bill["bill_email"].'
            <br>'.$bill["bill_address"].'
            <br>'.$bill["bill_tel"];
            $ttdh=get_ttdh($bill["bill_status"]);
            $countsp=loadall_cart_count($bill["id"]);
            echo'<tr>
            <td><input type="checkbox" name="" id=""></td>
            <td>dam-'.$bill['id'].'</td>
            <td>'.$kh.'
            </td>
            <td>'.$countsp.'</td>
            
            <td><strong>'.$bill["total"].'</strong>vnd</td>
            <td>'.$bill['ngaydathang'].'</td>
            <td>'.$ttdh.'</td>
            
            
            <td style="text-align:center;" ><a href="' . $suadh . '"><input type="button" class="btn btn-outline-warning btn-sm mr-2" value="Sửa"></a><a href="' . $xoadh . '"><input type="button" class="btn btn-outline-danger btn-sm" value="Xóa"></a></td>
           </tr>';
            # code...
          }
           ?>
           
        </table>
        <div>
            <input type="button" value="chọn tất cả">
            
            <input type="button" value="xóa tất cả">
        </div>
        <hr>
       
    </div>
</body>

</html>