<?php 
function checkuser($user,$pass){
    $conn = pdo_get_connection();
    $stmt = $conn->prepare("SELECT * FROM adminn where user='".$user."' AND pass='".$pass."'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $row = $stmt->fetchAll();
    if(count($row)>0) return $row[0]['role'];
           else return 0;

}
?>