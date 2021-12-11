<?php
include('../../../config/connectdb.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';
$ID = "$id";
$sqlDelete = "DELETE FROM `product` WHERE product_id='$id'";
mysqli_query($conn, $sqlDelete);
header('location:product.php');
