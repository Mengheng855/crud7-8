<?php
  include 'conn.php';
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['username'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone_number=$_POST['phone_number'];
    $positon=$_POST['position'];
    $salary=$_POST['salary'];
    $address=$_POST['address'];
    $file=$_FILES['file']['name'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $path='image/'.$file;
    move_uploaded_file($tmp_name,$path);

    $insert="INSERT INTO tbl_employee (username,gender,email,phone_number,position,salary,address,profile) 
    VALUES ('$username','$gender','$email','$phone_number','$positon','$salary','$address','$file')";
    
    $res=mysqli_query($conn,$insert);
    if($res){
        echo 'success';
    }else{
        echo 'unsuccess';
    }
  }

?>