<?php

require_once "../../database/db.php";

//  For Product Info
$productname = $_POST['product_name'];
$description = $_POST['product_description'];
$company = $_POST['company_name'];
$price = $_POST['product_price'];


$photo = $_FILES['product_photo']['name'];
$temp = $_FILES['product_photo']['tmp_name'];

// Insert Query

$sql = "INSERT INTO products(product_name, product_photo, product_description, company_name, product_price)

VALUES ('$productname', '$product_photo', '$description', '$company', '$price')";

if(mysqli_query($conn, $sql))
    {
        echo "<script>
        
            alert('Product Successfully Added.');
            
            window.location='products.php';
            
            </script>";
    }
    else {

        echo "<script>
        
            alert('Error Adding Product.');
            
            window.history.back();
            
            </script>";
    }
    ?>