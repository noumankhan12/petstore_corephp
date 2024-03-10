<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
   <div class="container">
    <div class="row">
    <div class="col-md-6 font-monospace shadow m-auto bg-white p-3 border border-info mt-3">
            <p class="text-warning text-center fs-3 fw-bold my-3">User Register</p>
            <form action="insert.php" method="POST">
                <div class="mb-3">
                    <label for="">Username:</label>
                    <input type="text" name="name" placeholder="Enter User Name" required class="form-control">
</div>
<div class="mb-3">
                    <label for="">UserEmail:</label>
                    <input type="email" name="email" placeholder="Enter User Email" required class="form-control">
</div>
<div class="mb-3">
                    <label for="">UserNumber:</label>
                    <input type="number" name="number"placeholder="Enter User Number" required class="form-control">
</div>
<div class="mb-3">
                    <label for="">UserPassword:</label>
                    <input type="password" name="password"placeholder="Enter User Password" required class="form-control">
</div>
<div class="mb-3">
<button name="submit" <a href="login.php" class="w-100 bg-warning fs-4 text-white">Register</a></button>
</div>
<div class="mb-3">
<button class="w-100 bg-danger fs-4 text-white"><a href="login.php" class="text-decoration-none text-white">Already Have An Account</a></button>
</div>
</form>
</div>
</div>
</div>
    
</body>
</html>

