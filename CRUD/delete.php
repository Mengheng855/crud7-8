<?php
     include 'conn.php';
     if(isset($_POST['delete'])){
        $id=$_POST['delete'];
        $delete="DELETE FROM tbl_login WHERE id='$id'";
        $res=mysqli_query($conn,$delete);
        if($res){
            header('location:table.php');
        }else{
            echo'<script>alert("Can not delete")</script>';
        }
     }

?>