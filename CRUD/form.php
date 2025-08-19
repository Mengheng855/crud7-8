<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 shadow p-4">
        <h1 class="text-center">Form Login</h1>
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <div class="form-group mb-4">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
            </div>
            <div class="form-group mb-4">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="form-group mb-4">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>
            <div class="form-group mb-4">
                <label for="">Upload </label>
                <input type="file" name="image" class="form-control"  required>
            </div>
            <div class="group-btn">
                <button type="submit" name="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>