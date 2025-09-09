<?php
require 'conn.php';
    $id=$_POST['id'];
    $username=$_POST['username'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone_number=$_POST['phone_number'];
    $position=$_POST['position'];
    $address=$_POST['address'];
    $salary=$_POST['salary'];
    $file=$_FILES['file']['name'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $path='image/'.$file;
    move_uploaded_file($tmp_name,$path);

    $update="UPDATE `tbl_employee` SET `username`='$username',`gender`='$gender',`email`='$email',
    `phone_number`='$phone_number',`position`='$position',`salary`='$salary',`address`='$address',`profile`='$file' WHERE `id`='$id'";
    
    $ex=$conn->query($update);
    if($ex){
        echo 123;
    }
    

?>