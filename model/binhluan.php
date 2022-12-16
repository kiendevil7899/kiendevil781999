<?php
function insert_binhluan($noidung,$iduser,$idpro,$ngaybl){
    $sql = "Insert into binhluan(noidung,iduser,idpro,ngaybl) values('$noidung','$iduser','$idpro','$ngaybl')";
    pdo_execute($sql);
}
function loadall_binhluan($idpro){
    $sql = "select * from binhluan where 1";
    if($idpro>0) $sql.=" AND idpro='".$idpro."'"; 
    $sql.=" order by binhluan.id desc";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;    
}
function show_bl($idpro){
    $sql = "select * from binhluan join user on binhluan.iduser = user.id where 1";
    if($idpro>0) $sql.=" AND idpro='".$idpro."'"; 
    $sql.=" order by binhluan.id desc";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;    
}
function delete_binhluan($id){
    $sql="delete from binhluan where id=".$id;
    pdo_execute($sql); 
}
function loadone_binhluan($id){
    $sql = "Select * from binhluan where id=".$id;
    $bl = pdo_query_one($sql);
    return $bl;
}
function update_binhluan($noidung,$id){
    $sql = "update binhluan set noidung = '".$noidung."' where id =".$id;
    pdo_execute($sql);
}

?>
