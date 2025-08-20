<?php
  include 'conn.php';
  if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $password=md5($pass);
    $file=$_FILES['image']['name'];
    $tmp_name=$_FILES['image']['tmp_name'];
    $newfile=date('d m y h i s').'_'.$file;
    $path='upload/'.$newfile;
    move_uploaded_file($tmp_name,$path);
    $update="UPDATE `tbl_login` SET `name`='$name',`email`='$email',`password`='$password',`image`='$newfile' WHERE `id`='$id'";
    $rs=mysqli_query($conn,$update);
    if($rs){
      echo"<script>window.location.href='table.php'</script>";
    }else{
      echo"<script>alert('Can not edit')</script>";
    }
  }
?>