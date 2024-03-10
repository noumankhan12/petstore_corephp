<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8185bbc38a.js" crossorigin="anonymous"></script>
</head>
<?php
session_start();
if(!$_SESSION['admin']){
    header("location:form/login.php");
}
?>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid text-white">
    <a class="navbar-brand text-white" href="#">PetStore</a>
            <span>
                <i class="fas fa-user-shield "></i>
                Hello;  <?php
                echo $_SESSION['admin'];
                ?>
                <i class="fas fa-sign-out-alt "></i>
                <a href="form/logout.php" class="text-decoration-none text-white">Logout</a>
                <a href="../user/index.php"class="text-decoration-none text-white px-3">Userpanel</a>
</span>
</div>
</nav>
<div>
    <h2 class="text-center">Dashboard</h2>
</div>
<div class= "col-md-6 bg-danger text-center m-auto">
    <a href="product/index.php"  class="tex-white text-decoration-none text-center fs-4 fw-bold px-5">Add Post</a>
    <a href="user.php" class="tex-white text-decoration-none text-center fs-4 fw-bold px-5">Users</a>
</div>
</div>
</body>
</html>