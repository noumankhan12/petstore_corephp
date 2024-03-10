<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <?php
    include'header.php';
    ?>
</head>
<body>
  <div class="container-fluid">
    <div class="col-md-12">
    <div class="row">

    <h1 class="text-warning font-monospace my-3 text-center">Cats</h1>
<?php
include 'config.php';
$Record=mysqli_query($con," SELECT* FROM `tblproduct`");
while ($row=mysqli_fetch_array($Record)){
$check_page=$row['Pcategory'];
if($check_page ==='Dogs'){


  echo"
  <div class='col-md-6 col-lg-4 m-auto mb-3'>
      <form action='Insertcart.php' method='POST'>
      <div class='card m-auto'style='width: 18rem;'>
      <img src='../admin/product/$row[Pimage]' class='card-img-top m-auto' style='width:170px; height:100px;'  alt='...'>
    <div class='card-body text-center'>
      <h5 class='card-title text-danger fs-4 fw-bold'>$row[Pname]</h5>
      <p class='card-text text-danger fs-4 fw-bold'> ";?> RS:<?php echo number_format($row['Pprice'],2)?> <?php echo"</p>
      <input type='hidden' name='Pname' value='$row[Pname]'>
      <input type='hidden' name='Pprice' value='$row[Pprice]'>
   
     
     <button type='submit' name='addcart' class='btn btn-primary'>Add To Cart</button>
    </div>
    </form>
  </div>
  </div>
  ";
}
}
?>
</div> </div> </div>
<?php
include 'footer.php';
?>
</body>
</html>