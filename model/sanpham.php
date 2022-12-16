<?php
function insert_sanpham($tensp,$giasp,$hinh,$thongtin,$mota,$iddm){
    $sql = "Insert into sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="delete from sanpham where id=".$id;
    pdo_execute($sql); 
}
function loadall_sanpham_top10(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;    
}
function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by id desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return $listsanpham;    
}
function loadall_sanpham($kyw="",$iddm=0){
    $sql="select * from sanpham where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;    
}
function load_ten_dm($iddm){
    if($iddm>0){
    $sql = "Select * from danhmuc where id=".$iddm;
    $dm = pdo_query_one($sql);
    extract($dm);
    return $name;
    }else{
        return "";
    }   
}
function loadone_sanpham($id){
    $sql = "Select * from sanpham where id=".$id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($id,$iddm){
    $sql = "Select * from sanpham where iddm=".$iddm." AND id <>".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;    
}
function update_sanpham($id,$iddm,$tensp,$giasp,$hinh,$thongtin,$mota){
    if($hinh!="")
       $sql="update sanpham set iddm = '".$iddm."', name = '".$tensp."', price = '".$giasp."', img = '".$hinh."', thongtin = '".$thongtin."', mota = '".$mota."' where id =".$id;
    else
       $sql="update sanpham set iddm = '".$iddm."', name = '".$tensp."', price = '".$giasp."', thongtin = '".$thongtin."', mota = '".$mota."' where id =".$id;
     pdo_execute($sql);
}
function listluotxem(){
    $sql="select sanpham.id as masp, sanpham.name as tensp, luotxem";
	$sql.=" from danhmuc left join sanpham on sanpham.iddm=danhmuc.id";
	$sql.=" group by sanpham.luotxem order by sanpham.luotxem ASC";
	$listtk=pdo_query($sql);
	return $listtk;
}
?>