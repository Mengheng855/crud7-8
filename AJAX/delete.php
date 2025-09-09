<?php
  include 'conn.php';
    $id=$_POST['id'];
    $delete="DELETE FROM tbl_employee WHERE `id`='$id'";
    mysqli_query($conn,$delete);
?>