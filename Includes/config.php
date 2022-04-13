<?php

// database connect variable
$host_name  = "localhost";
$user_name = "morning_post";
$pass = "Morning@post2022";
$db_name = "morning_post";

$conection = mysqli_connect("$host_name", "$user_name", "$pass", "$db_name",) or die("not connected". mysqli_error());

// if($conection = true){
//     echo"hello";
// }else{
//     echo"dhur";
// }

?>