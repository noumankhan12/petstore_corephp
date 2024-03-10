<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8185bbc38a.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    $count=0;
    if(isset($_SESSION['cart'])){
       $count=count($_SESSION['cart']) ;
    }
    
    ?>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid  font-monospace">
    <a class="navbar-brand pb-2"><img src="/Ecommerce/images/logo.png" alt="" width="50" height="80" ></a>
    
    <div class="d-flex">
    <a href="index.php" class="text-warning text-decoration-none pe-2 fw-bold"><i class="fas fa-home"></i>Home</a>
 <a href="viewcart.php" class="text-warning text-decoration-none pe-2 fw-bold"><i class="fas fa-shopping-cart"></i>Cart(<?php echo $count ?>)</a>
    <span class="text-warning fw-bold pe-2">
        <i class="fas fa-user-shield "></i>Hello,
        <?php
        if(isset($_SESSION['user'])){
        echo $_SESSION['user'];
echo "
        <a href='form/logout.php' class='text-warning text-decoration-none pe-2 fw-bold'><i class='fas fa-sign-in-alt'></i>Logout</a>
        ";
    }
    else{
        echo "
        <a href='form/login.php' class='text-warning text-decoration-none pe-2 fw-bold'><i class='fas fa-sign-in-alt'></i>Login</a>
        ";
    }
        ?>
        <a href="../admin/form/login.php"class="text-warning text-decoration-none pe-2 fw-bold">Admin</a>
</span>
   
</nav>  
</div>
<div class="bg-danger font-monospace sticky-top text-center"> 
    <ul class="list-unstyled d-flex justify-content-center">
        <li><a href="cats.php" class="text-decoration-none text-white fs-4 fw-bold px-5">Cats</a></li>
        <li><a href="dogs.php" class="text-decoration-none text-white fs-4 fw-bold px-5">Dogs</a></li>
        <li><a href="parrots.php" class="text-decoration-none text-white fs-4 fw-bold px-5">Parrots</a></li>

    </ul>
</div>
</body>
</html>