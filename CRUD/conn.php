<?php
 $server='localhost';
 $username='root';
 $pass='';
 $db='db_7_8';
 $conn=mysqli_connect($server,$username,$pass,$db);
 if($conn){
    // echo "Connection Successfull";
 }else{
    echo "Connection Failed: " ;
 }

?>
