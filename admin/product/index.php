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
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
<div class="container-fluid text-white">
<a class="navbar-brand text-white" href="#">PetStore</a>
<a href="../../user/index.php"class="text-decoration-none text-white px-3">Userpanel</a>
</div>
</nav>
    <div class="container">
   
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
    <form action="insert.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <p class="text-center fw-bold fs-3 text-warning"> Pet details:</p>
</div>
<div class="mb-3">
  <label  class="form-label">Pet Name</label>
  <input type="text" name="Pname" class="form-control"  placeholder="Enter Product Name">
</div>
<div class="mb-3">
  <label class="form-label">Pet Price</label>
  <input type="text" name="Pprice" class="form-control"  placeholder="Enter Product Price">
</div>
<div class="mb-3">
  <label class="form-label">Add Pet Image</label>
  <input type="file" name="Pimage" class="form-control">
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
<button name="submit" class=" text-white bg-danger fs-4 fw-bold my-3 form-control">Upload</button>
</form>
</div></div></div>
<!-- fetch data --> 
<div class="container ">
  <div class="row">
    <div class="col-md-8 m-auto">

<table class="table table-striped border border-warning my-5">
<thead class="bg-dark text-white fs-5 font-monospace text-center">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Category</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
 
  <tbody class="text-center">
    <?php
    include 'config.php';
    $Record= mysqli_query($con,"SELECT * FROM `tblproduct` ");
    while($row=mysqli_fetch_array($Record)){
echo" <tr>
<td>$row[id]</td>
<td>$row[Pname]</td>
<td>$row[Pprice]</td>
<td><img src='$row[Pimage]' height='90px' width='200px'></td>
<td>$row[Pcategory]</td>
<td><a href='delete.php? ID=$row[id]'class='btn btn-danger'>Delete</a></td>
<td><a href='update.php? ID=$row[id]'class='btn btn-warning'>Update</a></td>
</tr>";}

    ?>
</tbody>

</table>
</div></div></div>
</body>
</html>