<?php
    include('config/connectdb.php');
    session_start();
    if(isset($_GET["id"])){
        // var_dump($_GET);
        $soluong = 1;
        if(isset($_GET["num"])){
            $soluong = (int)$_GET["num"];
        }
        $id = $_GET["id"];
        $sqlSelectSanPham = "SELECT * FROM `product` sp 
                                        JOIN `category` cate ON sp.category_id = cate.category_id
                                        JOIN `product_image` pdi ON sp.product_id = pdi.product_id  
                                        WHERE sp.product_id =".$id;
        $resultSelectSanPham = mysqli_query($conn, $sqlSelectSanPham);
        $data = mysqli_fetch_row($resultSelectSanPham);
        
        if(!empty($_SESSION["cart"])){
            $cart = $_SESSION["cart"];
            //Kiểm tra lần thứ 2 mua có id chưa
            if(array_key_exists($id,$_SESSION["cart"])){
                $cart[$id] = array(
                    "soluong" => (int)$cart[$id]["soluong"]+$soluong,
                    "price" => $data[6],
                    "name" => $data[1],
                    "image_blob" => $data[16]
                );
            }else{
                $cart[$id] = array(
                    "soluong" => $soluong,
                    "price" => $data[6],
                    "name" => $data[1],
                    "image_blob" => $data[16]
                );
            }
        }else{
            //Lần đầu tiên mua
            $cart[$id] = array(
                "soluong" => $soluong,
                "price" => $data[6],
                "name" => $data[1],
                "image_blob" => $data[16]
            );
        }
        $_SESSION["cart"] = $cart;
    }else{


    }
    // echo "<pre>";
    // print_r($_SESSION["cart"]);
    // die;
    // if(isset($_POST["id"]) && isset($_POST["num"])){
    //     echo $_POST["id"]."--".$_POST["num"];
    // }
?>
