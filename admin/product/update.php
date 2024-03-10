<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8185bbc38a.js" crossorigin="anonymous"></script>
    <title>Product Page</title>
</head>

<body>
<?php
 include 'Config.php';
 $id=$_GET['ID'];

 $Record=mysqli_query( $con,"SELECT * FROM `tblproduct` WHERE id='$id'");
$data=mysqli_fetch_array($Record);

?>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
<div class="container-fluid text-white">
<a class="navbar-brand text-white" href="#">PetStore</a>
<a href="../../user/index.php"class="text-decoration-none text-white px-3">Userpanel</a>
</div>
</nav>
    <div class="container">
   
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
    <form action="update.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <p class="text-center fw-bold fs-3 text-warning"> Pet Update:</p>
</div>
<div class="mb-3">
  <label  class="form-label">Pet Name</label>
  <input type="text" value ="<?php echo $data['Pname']?>" name="Pname" class="form-control"  placeholder="Enter Product Name">
</div>
<div class="mb-3">
  <label class="form-label">Pet Price</label>
  <input type="text" value ="<?php echo $data['Pprice']?>" name="Pprice" class="form-control"  placeholder="Enter Product Price">
</div>
<div class="mb-3">
  <label class="form-label">Add Pet Image</label>
  <input type="file" name="Pimage" class="form-control"> <br>
  <img src= "Uploadimage/<?php echo $image_name ?>" alt="" style="height:100px">

<img src= "<?php echo $data['Pimage']?>" alt="" style="height:100px">
</div>
<div class="mb-3">
  <label class="form-label">Select Category</label>
  <select class="form-select" name="Pages">
  <option value="Home">Home</option>
  <option value="Cats">Cats</option>
  <option value="Dogs">Dogs</option>
  <option value="Parrots">Parrots</option>
</select>
</div>
<input type="hidden" name="id" value="<?php echo $data['id']?>">
<button name="update" class=" text-white bg-danger fs-4 fw-bold my-3 form-control">Update</button>
</form>
</div></div></div>
<!--php update code-->
<?php
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $product_name=$_POST['Pname'];
$product_price=$_POST['Pprice'];
$product_image=$_FILES['Pimage'];
$image_loc=$_FILES['Pimage']['tmp_name'];
$image_name=$_FILES['Pimage']['name'];
$img_des="Uploadimage/".$image_name;
move_uploaded_file($image_loc,"Uploadimage/".$image_name);
$product_category=$_POST['Pages'];
include 'Config.php';
mysqli_query($con,"UPDATE `tblproduct` SET 
`Pname`='$product_name',`Pprice`='$product_price',`Pimage`='$img_des',`Pcategory`='$product_category' WHERE id = $id");
header("location:index.php");
}
?>
</body>
</html>

<!----!

