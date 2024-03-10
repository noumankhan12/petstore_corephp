<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8185bbc38a.js" crossorigin="anonymous"></script>

</head>
<body>
<?php
include 'mystore.php';
$con=mysqli_connect('localhost','root','','Ecommerce');
$Record=mysqli_query($con,"SELECT * FROM `tbluser`");
$row_count=mysqli_num_rows($Record);
?>
<div class="container mt-5">
<div class="row">
    <div class="col-md-10">
    <table class="table table-secondary table-bordered">
        <thead class="text-center">
           <th>S.No</th>
           <th>Name</th>
           <th>Email</th>
           <th>Number</th>
           <th>Delete</th>
</thead>
<tbody class="text-center text-danger">
    <?php
    $i=0;
    ?>
<?php

     while($row=mysqli_fetch_array($Record)){
        echo"
        <tr>
        <td> ";?> <?php echo ++$i;?> <?php echo"</td>
        <td>$row[Username]</td>
        <td>$row[Email]</td>
        <td>$row[Number]</td>
        <td><a href='delete.php? ID=$row[Id]' class='btn btn-outline-danger'>Delete</a></td>
        </tr>";
     }

?>
</tbody>
</table>
</div>
<div class="col-md-2 pr-5text-center">
<h3 class="text-danger text-center">Total</h3>
<h1 class="bg-danger text-white text-center"> <?php echo $row_count?> </h1>
    </div>
    </div>
    </div>
    
</body>
</html>