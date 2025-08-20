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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
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
                                    <button type="button"  class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit'.$row['id'].'">
                                        Edit
                                    </button>
                                    <button class="btn btn-danger" name="delete" value="'.$row['id'].'" >Delete</button>
                                </form>
                            </td>
                        </tr>
                    ';
                    echo '
                       <div class="modal fade" id="edit'.$row['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <div class="container ">
                                            <form action="edit.php" method="post" enctype="multipart/form-data">
                                                 <div class="form-group mb-4">
                                                    
                                                    <input type="hidden" name="id" value="'.$row['id'].'" class="form-control" >
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="">Name</label>
                                                    <input type="text" value="'.$row['name'].'" name="name" class="form-control" placeholder="Enter your name" >
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="">Email</label>
                                                    <input type="text" value="'.$row['email'].'" name="email" class="form-control" placeholder="Enter your email" >
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="">Password</label>
                                                    <input type="password" name="password" value="'.$row['password'].'" class="form-control" placeholder="Enter your password" >
                                                </div>
                                                <div class="form-group mb-4">
                                                    
                                                    <img src="upload/'.$row['image'].'" alt="" width="100px" height="100px">
                                                    <input type="file" name="image" class="form-control"  required>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="edit">Save changes</button>
                                                </div>
                                                
                                            </form>
                                        </div>
                                </div>
                            
                            </div>
                        </div>
                        </div>
                    ';
      
                    
               }
            ?>
        


        </table>
    </div>
</body>
</html>
