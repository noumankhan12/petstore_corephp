<?php
session_start();
if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array(); 
}
if(isset($_SESSION['user'])){

    if(isset($_POST['addcart'])) {
        $product_name = $_POST['Pname'];
        $product_price = $_POST['Pprice'];
        $product_quantity = $_POST['pquantity'];

        $check_product = array_column($_SESSION['cart'], 'productname');
        if(in_array($product_name, $check_product)) {
            echo "<script>
                alert('Product Already Added');
                window.location.href = 'index.php';
            </script>";
        } else {
            $_SESSION['cart'][]= array(
                'productname'=> $product_name,
                'productprice'=> $product_price,
                'productquantity' => $product_quantity
            );
            header("location:viewcart.php");
        }
    }

    // remove product
    if(isset($_POST['remove'])) {
        foreach($_SESSION['cart'] as $key => $value) {
            if(isset($value['productname']) && $value['productname'] === $_POST['item']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                header('location: viewcart.php');
            }
        }
    }

    // update product
    if(isset($_POST['update'])) {
        foreach($_SESSION['cart'] as $key => $value) {
            if(isset($value['productname']) && $value['productname'] === $_POST['item']) {
                $_SESSION['cart'][$key]['productname'] = $_POST['Pname'];
                $_SESSION['cart'][$key]['productprice'] = $_POST['Pprice'];
                $_SESSION['cart'][$key]['productquantity'] = $_POST['pquantity'];
                header("location:viewcart.php");
            }
        }
    }

} else {
    header("location:form/login.php");
}

?>
