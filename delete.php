<?php 

include"includes/config.php";

$rcv_id = $_REQUEST['id'];

// $query = "DELETE FROM admins WHERE `admins`.`id` = 10";
$query = "DELETE FROM admins WHERE id = '{$rcv_id}'";

$result = mysqli_query($conection,$query);

if($result){
    header("location: newuser.php");
    echo"deletion sucsess";
}else{
    echo"deletion failed";
}

mysqli_close($conection);



?>