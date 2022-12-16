<?php
function loadall_acc(){
    $sql = "select * from user order by id desc";
    $listacc = pdo_query($sql);
    return $listacc;    
}
function insert_taikhoan($name,$email,$user,$pass,$tel,$address){
    $sql = "Insert into user(name,email,user,pass,tel,address) values('$name','$email','$user','$pass','$tel','$address')";
    pdo_execute($sql);
}

function login($user,$pass){
    $sql = "Select * from user where user='".$user."' AND pass='".$pass."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkmail($email){
    $sql = "Select * from user where email='".$email."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_user($id,$name,$email,$user,$pass,$tel,$address){
    $sql="update user set name = '".$name."', email = '".$email."', user = '".$user."', pass = '".$pass."', tel = '".$tel."', address = '".$address."' where id =".$id;
     pdo_execute($sql);
}
function delete_acc($id){
    $sql="delete from user where id=".$id;
    pdo_execute($sql); 
}
?>