

  
            
           
<?php include "view/header.php" ?>
    <div class="content">
        <h1 class="mt-4 text-center">đơn hàng của bạn</h1>
    

        <table class="table table-hover mx-auto" style="width: 100% ; font-size:12px; ">
           <tr>
           
            <th>mã đơn hàng </th>
            <th>ngày đặt</th>
            <th>số lượng đặt hàng </th>
            <th>tổng giá trị đơn hàng  </th>
            <th>tình trạng đơn hàng </th>
  
            
           
           </tr>
           <?php 
           if(is_array($listbill)){
            foreach ($listbill as $bill) {
                extract($bill);
                $ttdh=get_ttdh($bill['bill_status']);
                $countsp=loadall_cart_count($bill['id']);
               echo '<tr>
               
               <th>dam-'.$bill['id'].'</th>
               <th>'.$bill['ngaydathang'].'</th>
               <th>'.$countsp.'</th>
               <th>'.$bill['total'].'</th>
               <th>'.$ttdh.'</th>
     
               
              
              </tr>';
          
            }
           }
           ?>
           
           
        </table>
     
        <hr>
       
    </div>


  

