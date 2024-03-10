<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
<?php
include 'header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 bg-light mb-5 rounded text-center">
            <h1 class="text-warning">My Cart</h1>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-around">
        <div class="col-sm-12 col-md-6 col-lg-9">
            <table class="table text-center table-bordered">
                <thead class="bg-danger text-white fs-5">
                    <tr>
                        <th>Serial No.</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ptotal = 0;
                    $total = 0;
                    $i = 0;
                    if (isset($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $key => $value) {
                            $ptotal = isset($value['productprice']) && isset($value['productquantity']) ? intval($value['productprice']) * intval($value['productquantity']) : 0;
                            $total += $ptotal;
                            $i = $key + 1;
                            $pname = isset($value['productname']) ? $value['productname'] : '';
                            $pprice = isset($value['productprice']) ? $value['productprice'] : '';
                            echo "
                            <form action='Insertcart.php' method='POST'>
                            <tr>
                                <td>$i</td>
                                <td><input type='hidden' name='Pname' value= '$pname'>$pname</td>
                                <td><input type='hidden' name='Pprice' value= '$pprice'>$pprice</td>
                                <td>   <input type='number' name='pquantity' value='min='1' max='20'' placeholder='Quantity' required</td>
                                <td>$ptotal</td>
                                <td><button name='update' class='btn-warning'>Update</button></td>
                                <td><button name='remove' class='btn-danger'>Delete</button></td>
                                <td><input type='hidden' name='item' value='$pname'></td>
                            </tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-3 text-center">
            <h3>Total</h3>
            <h1 class="bg-danger text-white"><?php echo number_format($total,2) ?></h1>
        </div>
    </div>
</div>

</body>
</html>