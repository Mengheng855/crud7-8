<?php
    include 'conn.php';
    $select="SELECT * FROM tbl_login ";
    $res=mysqli_query($conn,$select);
    // $result=$conn->query($select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Information</h1>
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>    
                <th>Password</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            <?php
               while($row=mysqli_fetch_assoc($res)){
                    echo'
                      <tr>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['name'].'</td>                            
                            <td>'.$row['email'].'</td>
                            <td>'.$row['password'].'</td>
                            <td><img src="upload/'.$row['image'].'" alt="" width="70px"></td>                            
                            <td>
                                <form action="delete.php" method="post" enctype="multipart/form-data">
                                    <button class="btn btn-warning">Edit</button>
                                    <button class="btn btn-danger" name="delete" value="'.$row['id'].'" >Delete</button>
                                </form>
                            </td>
                        </tr>
                    ';
               }
            ?>
        </table>
    </div>
</body>
</html>
