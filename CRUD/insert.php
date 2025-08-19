<?php
    include 'conn.php';
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $file=$_FILES['image']['name'];
        $tmp_name=$_FILES['image']['tmp_name'];
        $file=rand().'_'.$file;
        $path='upload/'.$file;
        move_uploaded_file($tmp_name,$path);
        $pass=password_hash($_POST['password'],PASSWORD_BCRYPT);
        $insert="INSERT INTO tbl_login (name,email,password,image) 
        VALUES ('$name','$email','$pass','$file')";
        $res=mysqli_query($conn,$insert);
        if($res){
            echo '<script>alert("inserted")</script>';
            echo '<script>window.location.href="form.php"</script>';            
        }else{
            echo 'data not inserted';
        }
    }    

?>