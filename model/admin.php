<?php
function loadall_admin(){
    $sql = "select * from admin order by id desc";
    $listacc = pdo_query($sql);
    return $listacc;    
}

function dangnhap($user,$pass){
    $sql = "Select * from admin where user='".$user."' AND pass='".$pass."'";
    $dn = pdo_query_one($sql);
    return $dn;
}


?>