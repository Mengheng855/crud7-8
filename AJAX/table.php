<?php
    include 'conn.php';
    $select="SELECT * FROM tbl_employee";
    $ex=$conn->query($select);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="container-fluid p-5 mt-5 shadow">
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-primary d-flex justify-content-end" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                +Add Employee
            </button>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Positon</th>
                    <th>Salary</th>
                    <th>Address</th>
                    <th>Profile</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 while($row=mysqli_fetch_assoc($ex)){
                    echo '
                      <tr>
                        <td>'.$row['id'].'</td>
                        <td>'.$row['username'].'</td>
                        <td>'.$row['gender'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['phone_number'].'</td>
                        <td>'.$row['position'].'</td>
                        <td>'.$row['salary'].'</td>
                        <td>'.$row['address'].'</td>
                        <td><img src="image/'.$row['profile'].'" alt="" width="60px" height="60px"></td>
                        
                        <td>
                            <button class="btn btn-danger " id="delete" type="button">Delete</button>
                            <button class="btn btn-success " type="button">Edit</button>
                        </td>
                    </tr>
                    ';
                 }
                ?>
            </tbody>
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="insert.php" id="form" method="post" enctype="multipart/form-data">
                                <div class="form-group  my-2">
                                    <label for="">Username</label>
                                    <input type="text" name="username" id="username" class="form-control"
                                        placeholder="Enter Username">
                                </div>
                                <label for="">Gender</label>
                                <select name="gender" id="gender" class="form-select">
                                    <option value="other" selected>-----Other-----</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <div class="form-group  my-2">
                                    <label for="">Email</label>
                                    <input type="text" name="email" id="email" class="form-control"
                                        placeholder="Enter Email">
                                </div>
                                <div class="form-group  my-2">
                                    <label for="">Phone Number</label>
                                    <input type="text" name="phone_number" id="phone_number" class="form-control"
                                        placeholder="Enter Phone Number">
                                </div>
                                <label for="">Position</label>

                                <select name="position" id="position" class="form-select">
                                    <option value="web_frontend">Web Frontend</option>
                                    <option value="web_backend">Web Backend</option>
                                    <option value="full_stack_web_developer">Full Stack Web developer</option>
                                    <option value="graphic_desgin">Graphic Desgin</option>
                                    <option value="cyber_security">Cyber Security</option>
                                </select>
                                <div class="form-group  my-2">
                                    <label for="">Salary</label>
                                    <input type="text" name="salary" id="salary" class="form-control"
                                        placeholder="Enter salary">
                                </div>
                                <div class="form-group my-2">
                                    <label for="">Address</label>
                                    <select name="address" id="address" class="form-control">
                                        <option value="">-- Select Province --</option>
                                        <option value="Phnom Penh">Phnom Penh</option>
                                        <option value="Banteay Meanchey">Banteay Meanchey</option>
                                        <option value="Battambang">Battambang</option>
                                        <option value="Kampong Cham">Kampong Cham</option>
                                        <option value="Kampong Chhnang">Kampong Chhnang</option>
                                        <option value="Kampong Speu">Kampong Speu</option>
                                        <option value="Kampong Thom">Kampong Thom</option>
                                        <option value="Kampot">Kampot</option>
                                        <option value="Kandal">Kandal</option>
                                        <option value="Kep">Kep</option>
                                        <option value="Koh Kong">Koh Kong</option>
                                        <option value="Kratie">Kratie</option>
                                        <option value="Mondulkiri">Mondulkiri</option>
                                        <option value="Oddar Meanchey">Oddar Meanchey</option>
                                        <option value="Pailin">Pailin</option>
                                        <option value="Preah Vihear">Preah Vihear</option>
                                        <option value="Prey Veng">Prey Veng</option>
                                        <option value="Pursat">Pursat</option>
                                        <option value="Ratanakiri">Ratanakiri</option>
                                        <option value="Siem Reap">Siem Reap</option>
                                        <option value="Preah Sihanouk">Preah Sihanouk</option>
                                        <option value="Stung Treng">Stung Treng</option>
                                        <option value="Svay Rieng">Svay Rieng</option>
                                        <option value="Takeo">Takeo</option>
                                        <option value="Tbong Khmum">Tbong Khmum</option>
                                    </select>
                                </div>
                                <div class="form-group  my-2">
                                    <img id="image" src="https://www.shutterstock.com/image-vector/user-profile-icon-vector-avatar-600nw-2247726673.jpg" alt="" width="200px" height="200px" style="border-radius: 50%; ">
                                    <input type="file" name="file" id="file">
                                </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" id="upload" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>
        </table>
    </div>
</body>
</html>
<script>
   $(document).ready(function(){
      $('#file').hide(); 
      $('#image').click(function(){
        $('#file').click();
      })
      $('#file').change(function(){
        let file=this.files[0];
        if(file){
            let img=URL.createObjectURL(file);
            $('#image').attr('src',img);
        }
      })
      $('#upload').click(function(){
        let file=$('#file')[0].files[0];
        let username=$('#username').val();
        let gender=$('#gender').val();
        let email=$('#email').val();
        let phone_number=$('#phone_number').val();
        let position=$('#position').val();
        let salary=$('#salary').val();
        let address=$('#address').val();

        let formdata= new FormData();
        formdata.append('file',file);
        formdata.append('username',username);
        formdata.append('gender',gender);
        formdata.append('email',email);
        formdata.append('phone_number',phone_number);
        formdata.append('position',position);
        formdata.append('salary',salary);
        formdata.append('address',address);

        $.ajax({
            url:'insert.php',
            type:'POST',
            data:formdata,
            contentType:false,
            processData:false,
            success:function(response){
                const image=$('#image').attr('src');
                $('tbody').append(`
                <tr>
                        <td>${response}</td>
                        <td>${username}</td>
                        <td>${gender}</td>
                        <td>${email}</td>
                        <td>${phone_number}</td>
                        <td>${position}</td>
                        <td>${salary}</td>
                        <td>${address}</td>
                        <td><img src="${image}" alt="" width="60px" height="60px"></td>
                        
                        <td>
                            <button class="btn btn-danger " id="delete" type="button">Delete</button>
                            <button class="btn btn-success " type="button">Edit</button>
                        </td>
                    </tr>
                `)
                $('#form')[0].reset();
                $('#image').attr('src','https://www.shutterstock.com/image-vector/user-profile-icon-vector-avatar-600nw-2247726673.jpg')
            }
        })
      })

      $(document).on('click','#delete',function(){    
         let row=$(this).closest('tr');
         let id=row.find('td:first').text().trim();
         $.ajax({
            url:'delete.php',
            type:'POST',
            data:{
                id
            },
            success:function(){  
                row.remove();
            }
         })
      })



   })
</script>
