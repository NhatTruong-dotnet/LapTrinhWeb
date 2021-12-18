<?php

    
    session_start();
    $redirectProductURL = "http://localhost/DO-AN-THAYDUC/LapTrinhWeb/UI/Details.php?id='".$_POST['product-id']."'";
    require_once("config/conndb.php");
    $conn = new mysqli(HOST, USER, PASS, DATABASE);
    $sqlInsertRatingStar = 'INSERT INTO `rating` (`user_email`, `rating_star`, `product_id`) 
    VALUES ("' . $_SESSION['email'] . '","' . $_POST['star'] . '","' . $_POST['product-id'] . '")';

    mysqli_query($conn, $sqlInsertRatingStar);

    
    header("Location: ".$redirectProductURL);
    die();

?> 

