<?php
  include 'conn.php';
  if($_SERVER['REQUEST_METHOD']=="POST"){
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

     $insert="INSERT INTO tbl_employee (username,gender,email,phone_number,position,salary,address,profile)
     VALUES ('$username','$gender','$email','$phone_number','$position','$salary','$address','$file')";
     $rs=mysqli_query($conn,$insert);
     

     $select_id="SELECT id FROM tbl_employee ORDER BY id DESC LIMIT 1";
     $res=mysqli_query($conn,$select_id);
    $id=mysqli_fetch_assoc($res)['id'];
        echo $id;
     }   
  

?>