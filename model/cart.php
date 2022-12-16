<?php

if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];
//Controller cho xem đơn hàng
function viewcart($del){
	global $img_path;
	if($del==1){
		$xoasp_th='<th>Thao tác</th>';
		$xoasp_td2='<td></td>';
	}else{
		$xoasp_th="";
		$xoasp_td2="";
	}
	echo'<thead>
	<tr>
		<th></th>
		<th>Hình</th>
		<th>Số lượng</th>
		<th>Tên sản phẩm</th>
		<th>Giá</th>
		<th>Thành tiền</th>
        <th>Cập Nhật</th>
		'.$xoasp_th.'
	</tr>
</thead>';
if(isset($_SESSION['mycart'])&&(is_array($_SESSION['mycart']))){
	if(sizeof($_SESSION['mycart'])>0){
	$tong = 0;
	for ($i=0; $i < sizeof($_SESSION['mycart']); $i++) { 
    $hinh = $img_path.$_SESSION['mycart'][$i][2];
    $tt = $_SESSION['mycart'][$i][3] * $_SESSION['mycart'][$i][4];
    $tong+= $tt;
	if($del==1){
		$xoasp_td='<td><a href="index.php?act=delcart&idcart='.$i.'">Xóa</a></td>';
	}else{
		$xoasp_td="";
	}

   echo'
   
	<tr class="rem1">
    <td class="invert">'.($i+1).'</td>
	<td class="invert-image">
	<a href="">
	<img src="'.$hinh.'" alt=" " height="120" width= "65%" class="img-responsive">
	</a>
	</td>
	<td class="invert">
	'.$_SESSION['mycart'][$i][4].'
    </td>
	<td class="invert">'.$_SESSION['mycart'][$i][1].'</td>
	<td class="invert">'.$_SESSION['mycart'][$i][3].'</td>
	<td class="invert">'.$tt.'</td>
	<td class="invert">'.$xoasp_td.'</td>
	</tr>';
    
}
	echo '<tr>
	<td colspan="7">Tổng tiền :'.$tong.'<sup>vnđ</sup> </td>
	</tr>';
	
}else{
	echo "Giỏ hàng rỗng!";
}
}
}
function bill_chi_tiet($listbill){
	global $img_path;
    $tong = 0;
    $i=0;
	echo'<thead>
	<tr>
		
		<th>Hình</th>
		<th>Số lượng</th>
		<th>Tên sản phẩm</th>
		
		<th>Giá</th>
		<th>Thành tiền</th>
        <th></th>	
	</tr>
</thead>';
    foreach ($listbill as $cart){
    $hinh=$img_path.$cart['img'];
    $tong+=$cart['thanhtien'];
   echo'
   
	<tr class="rem1">
	<td class="invert-image">
	<a href="">
	<img src="'.$hinh.'" alt=" " height="120" width= "65%" class="img-responsive">
	</a>
	</td>
	<td class="invert">
	'.$cart['soluong'].'

	</td>
	<td class="invert">'.$cart['name'].'</td>
	<td class="invert">'.$cart['price'].'</td>
	<td class="invert">'.$cart['thanhtien'].'</td>
	</tr>';
    $i+=1;
    
}
	echo '<tr>
	<td colspan="7">Tổng đơn hàng :'.$tong.'<sup>vnđ</sup> </td>
	</tr>';
}
//Controller tổng đơn hàng đã đặt
function tongdonhang(){
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart){
    $tt = $cart[3] * $cart[4];
    $tong+= $tt;
}
	return $tong;
}
function insert_bill($iduser,$name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang){
    $sql = "Insert into bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) values('$iduser','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
    $sql="Insert into cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}
function loadone_bill($id){
    $sql="Select * from bill where id=".$id;
    $bill=pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idbill){
    $sql="Select * from cart where idbill=".$idbill;
    $bill=pdo_query($sql);
    return $bill;
}

function loadall_thongke(){
	$sql="select danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) avgprice";
	$sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
	$sql.=" group by danhmuc.id order by danhmuc.id desc";
	$listtk=pdo_query($sql);
	return $listtk;
}
function loadall_cart_count($idbill){
    $sql="Select * from cart where idbill=".$idbill;
    $bill=pdo_query($sql);
    return sizeof($bill);
}
function delete_donhang($id){
    $sql="delete from bill where id=".$id;
    pdo_execute($sql); 
}
function update_bill($id,$bill_name,$email,$bill_address,$tel,$ttdh){
    $sql="update bill set bill_name = '".$bill_name."', bill_email = '".$email."', bill_address = '".$bill_address."', bill_tel = '".$tel."', bill_status = '".$ttdh."' where id =".$id;
     pdo_execute($sql);
}
function loadall_bill($kyw="",$iduser=0){
    $sql="Select * from bill where 1";
	if($iduser>0) $sql.=" AND iduser=".$iduser;
	if($kyw="") $sql.=" AND id like '%".$kyw."%'";
	$sql.=" order by id desc";
    $listbill=pdo_query($sql);
    return $listbill;
}
function get_ttdh($n){
	switch ($n) {
		case '0':
			$tt="đơn hàng mới ";
			break;
			case '1':
				$tt="dang xử lý  ";
				break;
		
				case '2':
					$tt="đang giao hàng ";
					break;
		
					case '3':
						$tt="hoàn tất  ";
						break;
		
						
		
	}
	return $tt;
}
?>