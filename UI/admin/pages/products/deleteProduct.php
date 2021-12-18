<?php
include('../../../config/conndb.php');
$conn = new mysqli(HOST, USER, PASS, DATABASE);

$id = isset($_GET['id']) ? $_GET['id'] : '';
$ID = "$id";
$sqlDelete = "DELETE FROM `product` WHERE product_id='$id'";
mysqli_query($conn, $sqlDelete);
header('location:product.php');
