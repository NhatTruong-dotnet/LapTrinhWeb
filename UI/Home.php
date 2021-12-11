<?php
// Start the session
session_start();
// unset($_SESSION['error']);4
// setcookie('error','Invalid username or password');

?>

<?php 
    require_once("config/conndb.php");

    function execResult ($sql){
        $conn = new mysqli(HOST, USER, PASS, DATABASE);
        
        if($conn->connect_error){
            die('ket noi that bai:' . $conn->connect_error);
        }

        $conn->set_charset("utf8");

        $result = $conn->query($sql);

        $data = array();

        while($row = $result->fetch_array(1)){
            $data[] = $row;
        }
        return $data;

        $conn->close();
    }

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php include 'config/heade_tag.php' ?>
</head>

<body class="template-index">

    <div id="shopify-section-nov-header" class="shopify-section">
        <div data-section-id="nov-header" data-section-type="header-section">
        <?php require('Common/Header/header.php') ?>

            <div id="header-sticky" style="background-color: #ffffff;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="contentstickynew_logo col-xl-3 col-lg-3 col-md-3"></div>
                        <div class="contentstickynew_menu col-xl-6 col-lg-6 col-md-6 text-center"></div>
                        <div class="contentstickynew_group col-xl-3 col-lg-3 col-md-3 d-flex justify-content-end"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <main class="main-content" id="MainContent">
        <section class="page-container" id="PageContainer">
            <!-- BEGIN content_for_index -->
            <div id="shopify-section-1579502689582" class="shopify-section index-section section-slideshow">
                <div class="distance" style="padding-top: 30px; padding-bottom: 30px">

                    <div class="container">

                        

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img class="d-block w-100" src="https://cdn.tgdd.vn/bachhoaxanh/banners/2505/redbull-10112021194115.jpg"  alt="First slide" >
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="https://cdn.tgdd.vn/bachhoaxanh/banners/2505/fami-canxi-vi-moi-1211202193218.png" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="https://cdn.tgdd.vn/bachhoaxanh/banners/2505/khuyen-mai-sieu-hap-dan-0911202119555.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
            
            <div id="shopify-section-1602131451931" class="shopify-section index-section section-collection-tabs wow fadeIn animated">

                <div class="distance" style="padding-top: 41px;padding-bottom: 15px">
                    <div data-section-id="1602131451931" data-product-tabs>
                        <div class="page-width nov-collection-tabs nov-collection-tabs-slider">

                            <div class="container">
                      
                                <div id="product-tabs-categories-1602131451931" class="block product-tabs-categories">
                                    <div class="box-tab">
                                        <div class="row text-left marg-left-0">

                                            <div class="title_block">
                                                <span>Categories</span>
                                            </div>

                                        </div>
                                        <div class="row list-menu margin-tl">
                                            
                                        <!-- nav-tabs -->
                                            <ul class="row nav nav-tabs list-product-tabs w-100 mrgleft-15 ovef-auto" role="tablist">


                                                <li class="col-sm-6 col-md col-lg nav-item">
                                                    <a class="nav-link tab-links active" href="#producttabd_AF" data-target="#producttab_AF" data-product-tabTop data-href="/collections/tablet?view=json" id="tab-AF" data-id="AF" data-toggle="tab" role="tab">
                                                        <div class="content-nav">

                                                            <span>AGRICULTURAL FOOD</span>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li class="col-sm-6 col-md col-lg nav-item">
                                                    <a class="nav-link tab-links " href="#producttab_DF" data-target="#producttab_DF" data-product-tabTop data-href="/collections/iphone?view=json" id="tab-DF" data-id="DF" data-toggle="tab" role="tab">
                                                        <div class="content-nav">

                                                            <span>DRY FOOD</span>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li class="col-sm-6 col-md col-lg nav-item">
                                                    <a class="nav-link tab-links " href="#producttab_CF" data-target="#producttab_CF" data-product-tabTop data-href="/collections/iphone?view=json" id="tab-CF" data-id="CF" data-toggle="tab" role="tab">
                                                        <div class="content-nav">

                                                            <span>CANNED FOOD</span>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li class="col-sm-6 col-md col-lg nav-item padrigh-0">
                                                    <a class="nav-link tab-links" href="#producttab_FF" data-target="#producttab_FF" data-product-tabTop data-href="/collections/smartphone?view=json" id="tab-FF" data-id="FF" data-toggle="tab" role="tab">
                                                        <div class="content-nav">

                                                            <span>FRESH FOOD</span>
                                                        </div>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                <?php 
                                
                                            $sql = "SELECT product.*,category.name AS category_name, category.shortname , 
                                                        product_image.image_id, product_image.image_blob
                                                    FROM product 
                                                    JOIN category
                                                        ON product.category_id = category.category_id
                                                    JOIN product_image
                                                        ON product_image.product_id = product.product_id";
                                            $result = execResult($sql);
                                            

                                            $arr_FF = array();
                                            $arr_AF = array();
                                            $arr_CF = array();
                                            $arr_DF = array();

                                            for($i = 0; $i < count($result); $i++){
                                                if($result[$i]['shortname'] == 'FF'){
                                                    $arr_FF[] = $result[$i];
                                                }else if($result[$i]['shortname'] == 'AF'){
                                                    $arr_AF[] = $result[$i];
                                                }else if($result[$i]['shortname'] == 'CF'){
                                                    $arr_CF[] = $result[$i];
                                                }else{
                                                    $arr_DF[] = $result[$i];
                                                }
                                            }

                                            
                                
                                ?>

                                    <div class="product_tab_content tab-content product-tabs-content">

                                        <div class="tab-content active" data-product-TabContent id="producttab_AF">
                                            <div class="block_margin edit_block">
                                                <div class="block_padding">
                                                    <div class="products-grid row collection-carousel" data-items="4" data-items_lg_tablet="4" data-items_tablet="3" data-items_mobile="2" data-items_mobiles="2" data-row="1" data-loop="false" data-dots="false" data-nav="false" data-autoplay="false">
                                                        <div class="loading">
                                                            <div class="grid_product">
                                                                <div class="grid__row">

                                                            <?php
                                                                
                                                                for($af = 0; $af < 5; $af++){
                                                            ?> 
                                                               
                                                                <div class="grid__column-2-4">

                                                                    <div class="item">
                                                                        <div class="item-product item-animate">

                                                                            <div class="thumbnail-container has-multiimage ">
                                                                                <a href="Details.php?id=%27<?php echo $arr_AF[$af]['product_id']; ?>%27">
                                                                                    <img class="img-fluid product__thumbnail lazyload" data-src="<?php echo $arr_AF[$af]['image_blob'];?>" alt="">
                                                                                    <img class="img-fluid product__thumbnail-second lazyload" data-src="<?php echo $arr_AF[$af]['image_blob'];?>" alt="">
                                                                                </a>
                                                                                <div class="badge_sale">
                                                                                </div>
                                                                            </div>
                                                                            <div class="product__info">
                                                                                <div class="product__title">
                                                                                    <a href="Details.php?id=%27<?php echo $arr_AF[$af]['product_id']; ?>%27"><?php echo $arr_AF[$af]['name'];?></a>
                                                                                </div>


                                                                                <div class="product__review">
                                                                                    <div class="rating"><span class="shopify-product-reviews-badge" data-id="4907756027957"></span></div>
                                                                                </div>


                                                                                <div class="product__price">
                                                                                    

                                                                                    <span class="visually-hidden">Regular price</span>
                                                                                    <span class="product-price__price"><span class="money"><?php echo number_format($arr_AF[$af]['price'])." ". $arr_AF[$af]['currency'];?></span></span>

                                                                                </div>

                                                                                <div class="group-buttons d-flex concenter">

                                                                                    <form class="formAddToCart btnSize" action="/cart/add" method="post" enctype="multipart/form-data">
                                                                                        <input type="hidden" name="id" value="33119332040757" />


                                                                                        <!-- <button class="btn btnAddToCart btnSize" type="submit" value="Submit" data-handle="rimond-balo-stud-cum" data-pid="33119332040757" data-toggle="tooltip" data-placement="top" data-original-title="Add to cart" title="" tabindex="0">
                                                                                            <i class="icon_cart"></i>
                                                                                        </button> -->

                                                                                        <a class="btn btnAddToCart btnChooseVariant btnSize"
                                                                                                                href="addcart.php?id=%27<?php echo $arr_AF[$af]['product_id']?>%27"
                                                                                                                data-url="/products/diamond-halo-stud-earrings?view=json"
                                                                                                                data-toggle="tooltip" data-placement="top"
                                                                                                                title="" tabindex="0">
                                                                                                                <i class="icon_cart"></i>
                                                                                         </a>

                                                                                    </form>

                                                                                    <div class="productQuickView d-md-block">
                                                                                        <a class="btn btnProduct btnProductQuickview" href="Details.php?id=%27<?php echo $arr_AF[$af]['product_id']; ?>%27" data-url="/products/rimond-balo-stud-cum?view=quick_view" data-handle="rimond-balo-stud-cum" data-pid="33119332040757" data-toggle="tooltip" data-placement="top" title="Quick view">
                                                                                            <i class="fa_quickview"></i>
                                                                                        </a>
                                                                                    </div>


                        

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            <?php 
                                                                }
                                                                
                                                            ?>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-content " data-product-TabContent id="producttab_CF">
                                            <div class="block_margin edit_block">
                                                <div class="block_padding">
                                                    <div class="products-grid row collection-carousel" data-items="4" data-items_lg_tablet="4" data-items_tablet="3" data-items_mobile="2" data-items_mobiles="2" data-row="1" data-loop="false" data-dots="false" data-nav="false" data-autoplay="false">
                                                        <div class="loading">

                                                            <div class="grid_product">
                                                                <div class="grid__row">

                                                            <?php
                                                                
                                                                for($cf = 0; $cf < 5; $cf++){
                                                            ?> 
                                                               
                                                                <div class="grid__column-2-4">

                                                                    <div class="item">
                                                                        <div class="item-product item-animate ">

                                                                            <div class="thumbnail-container has-multiimage">
                                                                                <a href="Details.php?id=%27<?php echo $arr_CF[$cf]['product_id']; ?>%27">
                                                                                    <img class="img-fluid product__thumbnail lazyload" data-src="<?php echo $arr_CF[$cf]['image_blob'];?>" alt="">
                                                                                    <img class="img-fluid product__thumbnail-second lazyload" data-src="<?php echo $arr_CF[$cf]['image_blob'];?>" alt="">
                                                                                </a>
                                                                                <div class="badge_sale">
                                                                                </div>
                                                                            </div>
                                                                            <div class="product__info">
                                                                                <div class="product__title">
                                                                                    <a href="Details.php?id=%27<?php echo $arr_CF[$cf]['product_id']; ?>%27"><?php echo $arr_CF[$cf]['name'];?></a>
                                                                                </div>


                                                                                <div class="product__review">
                                                                                    <div class="rating"><span class="shopify-product-reviews-badge" data-id="4907756027957"></span></div>
                                                                                </div>


                                                                                <div class="product__price">
                                                                                    

                                                                                    <span class="visually-hidden">Regular price</span>
                                                                                    <span class="product-price__price"><span class="money"><?php echo number_format($arr_CF[$cf]['price'])." ". $arr_CF[$cf]['currency'];?></span></span>

                                                                                </div>

                                                                                <div class="group-buttons d-flex concenter">

                                                                                    <form class="formAddToCart btnSize" action="/cart/add" method="post" enctype="multipart/form-data">
                                                                                        <input type="hidden" name="id" value="33119332040757" />


                                                                                        <!-- <button class="btn btnAddToCart btnSize" type="submit" value="Submit" data-handle="rimond-balo-stud-cum" data-pid="33119332040757" data-toggle="tooltip" data-placement="top" data-original-title="Add to cart" title="" tabindex="0">
                                                                                            <i class="icon_cart"></i>
                                                                                        </button> -->

                                                                                        <a class="btn btnAddToCart btnChooseVariant btnSize"
                                                                                                                href="addcart.php?id=%27<?php echo $arr_CF[$cf]['product_id']?>%27"
                                                                                                                data-url="/products/diamond-halo-stud-earrings?view=json"
                                                                                                                data-toggle="tooltip" data-placement="top"
                                                                                                                title="" tabindex="0">
                                                                                                                <i class="icon_cart"></i>
                                                                                         </a>

                                                                                    </form>

                                                                                    <div class="productQuickView d-md-block">
                                                                                        <a class="btn btnProduct btnProductQuickview" href="Details.php?id=%27<?php echo $arr_CF[$cf]['product_id']; ?>%27" data-url="/products/rimond-balo-stud-cum?view=quick_view" data-handle="rimond-balo-stud-cum" data-pid="33119332040757" data-toggle="tooltip" data-placement="top" title="Quick view">
                                                                                            <i class="fa_quickview"></i>
                                                                                        </a>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            <?php 
                                                                }
                                                                
                                                            ?>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-content " data-product-TabContent id="producttab_DF">
                                            <div class="block_margin edit_block">
                                                <div class="block_padding">
                                                    <div class="products-grid row collection-carousel" data-items="4" data-items_lg_tablet="4" data-items_tablet="3" data-items_mobile="2" data-items_mobiles="2" data-row="1" data-loop="false" data-dots="false" data-nav="false" data-autoplay="false">
                                                        <div class="loading">

                                                        <div class="grid_product">
                                                                <div class="grid__row">

                                                            <?php
                                                                
                                                                for($df = 0; $df < 5; $df++){
                                                            ?> 
                                                               
                                                                <div class="grid__column-2-4">

                                                                    <div class="item">
                                                                        <div class="item-product item-animate ">

                                                                            <div class="thumbnail-container has-multiimage">
                                                                                <a href="Details.php?id=%27<?php echo $arr_DF[$df]['product_id']; ?>%27">
                                                                                    <img class="img-fluid product__thumbnail lazyload" data-src="<?php echo $arr_DF[$df]['image_blob'];?>" alt="">
                                                                                    <img class="img-fluid product__thumbnail-second lazyload" data-src="<?php echo $arr_DF[$df]['image_blob'];?>" alt="">
                                                                                </a>
                                                                                <div class="badge_sale">
                                                                                </div>
                                                                            </div>
                                                                            <div class="product__info">
                                                                                <div class="product__title">
                                                                                    <a href="/products/rimond-balo-stud-cum"><?php echo $arr_DF[$df]['name'];?></a>
                                                                                </div>


                                                                                <div class="product__review">
                                                                                    <div class="rating"><span class="shopify-product-reviews-badge" data-id="4907756027957"></span></div>
                                                                                </div>


                                                                                <div class="product__price">
                                                                                    

                                                                                    <span class="visually-hidden">Regular price</span>
                                                                                    <span class="product-price__price"><span class="money"><?php echo number_format($arr_DF[$df]['price'])." ". $arr_DF[$df]['currency'];?></span></span>

                                                                                </div>

                                                                                <div class="group-buttons d-flex concenter">

                                                                                    <form class="formAddToCart btnSize" action="/cart/add" method="post" enctype="multipart/form-data">
                                                                                        <input type="hidden" name="id" value="33119332040757" />


                                                                                        <!-- <button class="btn btnAddToCart btnSize" type="submit" value="Submit" data-handle="rimond-balo-stud-cum" data-pid="33119332040757" data-toggle="tooltip" data-placement="top" data-original-title="Add to cart" title="" tabindex="0">
                                                                                            <i class="icon_cart"></i>
                                                                                        </button> -->

                                                                                        <a class="btn btnAddToCart btnChooseVariant btnSize"
                                                                                                                href="addcart.php?id=%27<?php echo $arr_DF[$df]['product_id']?>%27"
                                                                                                                data-url="/products/diamond-halo-stud-earrings?view=json"
                                                                                                                data-toggle="tooltip" data-placement="top"
                                                                                                                title="" tabindex="0">
                                                                                                                <i class="icon_cart"></i>
                                                                                         </a>

                                                                                    </form>

                                                                                    <div class="productQuickView d-md-block">
                                                                                        <a class="btn btnProduct btnProductQuickview" href="Details.php?id=%27<?php echo $arr_DF[$df]['product_id']; ?>%27" data-url="/products/rimond-balo-stud-cum?view=quick_view" data-handle="rimond-balo-stud-cum" data-pid="33119332040757" data-toggle="tooltip" data-placement="top" title="Quick view">
                                                                                            <i class="fa_quickview"></i>
                                                                                        </a>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            <?php 
                                                                }
                                                                
                                                            ?>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-content " data-product-TabContent id="producttab_FF">
                                            <div class="block_margin edit_block">
                                                <div class="block_padding">
                                                    <div class="products-grid row collection-carousel" data-items="4" data-items_lg_tablet="4" data-items_tablet="3" data-items_mobile="2" data-items_mobiles="2" data-row="1" data-loop="false" data-dots="false" data-nav="false" data-autoplay="false">
                                                        <div class="loading">

                                                        <div class="grid_product">
                                                                <div class="grid__row">

                                                            <?php
                                                                
                                                                for($ff = 0; $ff < 5; $ff++){
                                                            ?> 
                                                               
                                                                <div class="grid__column-2-4">

                                                                    <div class="item">
                                                                        <div class="item-product item-animate ">

                                                                            <div class="thumbnail-container has-multiimage">
                                                                                <a href="/products/rimond-balo-stud-cum">
                                                                                    <img class="img-fluid product__thumbnail lazyload" data-src="<?php echo $arr_FF[$ff]['image_blob'];?>" alt="">
                                                                                    <img class="img-fluid product__thumbnail-second lazyload" data-src="<?php echo $arr_FF[$ff]['image_blob'];?>" alt="">
                                                                                </a>
                                                                                <div class="badge_sale">
                                                                                </div>
                                                                            </div>
                                                                            <div class="product__info">
                                                                                <div class="product__title">
                                                                                    <a href="Details.php?id=%27<?php echo $arr_FF[$ff]['product_id']; ?>%27"><?php echo $arr_FF[$ff]['name'];?></a>
                                                                                </div>


                                                                                <div class="product__review">
                                                                                    <div class="rating"><span class="shopify-product-reviews-badge" data-id="4907756027957"></span></div>
                                                                                </div>


                                                                                <div class="product__price">
                                                                                    

                                                                                    <span class="visually-hidden">Regular price</span>
                                                                                    <span class="product-price__price"><span class="money"><?php echo number_format($arr_FF[$ff]['price'])." ". $arr_FF[$ff]['currency'];?></span></span>

                                                                                </div>

                                                                                <div class="group-buttons d-flex concenter">

                                                                                    <form class="formAddToCart btnSize" action="/cart/add" method="post" enctype="multipart/form-data">
                                                                                        <input type="hidden" name="id" value="33119332040757" />


                                                                                        <!-- <button class="btn btnAddToCart btnSize" type="submit" value="Submit" data-handle="rimond-balo-stud-cum" data-pid="33119332040757" data-toggle="tooltip" data-placement="top" data-original-title="Add to cart" title="" tabindex="0">
                                                                                            <i class="icon_cart"></i>
                                                                                        </button> -->

                                                                                        <a class="btn btnAddToCart btnChooseVariant btnSize"
                                                                                                                href="addcart.php?id=%27<?php echo $arr_FF[$ff]['product_id']?>%27"
                                                                                                                data-url="/products/diamond-halo-stud-earrings?view=json"
                                                                                                                data-toggle="tooltip" data-placement="top"
                                                                                                                title="" tabindex="0">
                                                                                                                <i class="icon_cart"></i>
                                                                                         </a>

                                                                                    </form>

                                                                                    <div class="productQuickView d-md-block">
                                                                                        <a class="btn btnProduct btnProductQuickview" href="Details.php?id=%27<?php echo $arr_FF[$ff]['product_id']; ?>%27" data-url="/products/rimond-balo-stud-cum?view=quick_view" data-handle="rimond-balo-stud-cum" data-pid="33119332040757" data-toggle="tooltip" data-placement="top" title="Quick view">
                                                                                            <i class="fa_quickview"></i>
                                                                                        </a>
                                                                                    </div>


                                                                                    

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            <?php 
                                                                }
                                                                
                                                            ?>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                   
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>


            <div id="shopify-section-1602139616540" class="shopify-section index-section section-custom wow fadeIn animated">

                <div class="distance" style="padding-top: 67px;" data-section-id="1602139616540" data-section-type="nov-slick">
                    <div class="page-width ">

                        <div class="container">


                            <div class="block_customs">
                                <div class="custom-content row">


                                    <div class="custom__item col-xl-12 col-lg-12 col-md-12">
                                        <div class="custom_collection_tab">
                                            <div class="custom__item-inner">

                                                <div class="nov-collection-tabs nov-collection-tabs-slider tab_style_1">
                                                    <div class="box-margin">
                                                        <div class="box-padding position-relative no_image">
                                                            <div class="page-width">
                                                                <div id="product-tabs-categories-1602141758633" class="block product-tabs-categories">
                                                                    <div class="title_block text-center no_tab">

                                                                        <span>All Products</span>
                                                                        <ul id="collection_tab" class="nav nav-tabs justify-content-center flex-nowrap" role="tablist">

                                                                        </ul>
                                                                    </div>


                                                                    <div class="product_tab_content tab-content">

                                                                        <div id="producttab1" class="tab-pane fade show active" role="tabpanel">
                                                                            <div class="grid--view-items nov-slick-carousel" data-items="2" data-items_lg_tablet="1" data-items_tablet="1" data-items_mobile="1" data-items_mobiles="1" data-row="3" data-loop="true" data-dots="true" data-nav="false" data-autoplay="false" data-autoplayTimeout="6000">

                                                                                <div class="container">
                                                                                    <div class="row">
                                                    <?php
                                                        $sql_pagina = 'SELECT  COUNT(product_id) AS number FROM product';


                                                        $result_pagina = execResult($sql_pagina);

                                                        $maxNumPage = 0;
                                                        if($result_pagina != null && count($result_pagina) > 0){
                                                            $maxNumPage = $result_pagina[0]['number'];
                                                        }
                                                        $numberPage = ceil($maxNumPage / 12);
                                                        $currentPage = 1 ;


                                                        if(isset($_GET['page'])){
                                                            $currentPage = $_GET['page'];


                                                        }
                                                        $index = ($currentPage - 1) * 12;

                                                        $sql_allpro = 'SELECT product.*,category.name AS category_name, category.shortname , 
                                                                            product_image.image_id, product_image.image_blob
                                                                            FROM product 
                                                                            JOIN category
                                                                            ON product.category_id = category.category_id
                                                                            JOIN product_image
                                                                            ON product_image.product_id = product.product_id
                                                                            LIMIT '.$index.', 12';


                                                        $result_allpro = execResult($sql_allpro);


                                                        for($j = 0 ;$j < count($result_allpro); $j++){
                                                        ?>
                                                                                    <div class="col-md-6 col-lg-4">
                                                                                        <div class="item">
                                                                                            <div class="item-product item-animate ">

                                                                                                <div class="thumbnail-container has-multiimage">
                                                                                                    <a href="Details.php?id=%27<?php echo $result_allpro[$j]['product_id']; ?>%27">


                                                                                                        <img class="img-fluid product__thumbnail lazyload" data-src="<?php echo $result_allpro[$j]['image_blob'];?>" alt="">
                                                                                                        <img class="img-fluid product__thumbnail-second lazyload" data-src="<?php echo $result_allpro[$j]['image_blob'];?>" alt="">
                                                                                                    </a>
                                                                                                    <div class="badge_sale"></div>


                                                                                                </div>
                                                                            
                                                                                                <div class="product__info">
                                                                                                    <div class="product__title">
                                                                                                        <a href="Details.php?id=%27<?php echo $result_allpro[$j]['product_id']; ?>%27"><?php echo $result_allpro[$j]['name'];?></a>
                                                                                                    </div>


                                                                                                    <div class="product__review">
                                                                                                        <div class="rating"><span class="shopify-product-reviews-badge" data-id="4907756027957"></span></div>
                                                                                                    </div>


                                                                                                    <div class="product__price">

                                                                                                        <span class="visually-hidden">Regular price</span>
                                                                                                        <span class="product-price__price"><span class="money"><?php echo number_format($result_allpro[$j]['price']).' '.$result_allpro[$j]['currency'];?></span></span>

                                                                                                    </div>

                                                                                                    <div class="group-buttons d-flex">

                                                                                                        <form class="formAddToCart" action="addcart.php?id=%27<?php echo  $result_allpro[$j]['product_id']; ?>%27" method="post" enctype="multipart/form-data">
                                                                                                            <input type="hidden" name="id" value="33119332040757" />


                                                                                                            <!-- <button class="btn btnAddToCart" type="submit" value="Submit" data-handle="rimond-balo-stud-cum" data-pid="33119332040757" data-toggle="tooltip" data-placement="top" data-original-title="Add to cart" title="" tabindex="0">
                                                                                                                <i class="icon_cart"></i>
                                                                                                            </button> -->

                                                                                                            <a class="btn btnAddToCart btnChooseVariant"
                                                                                                                href="addcart.php?id=%27<?php echo $result_allpro[$j]['product_id']?>%27"
                                                                                                                data-url="/products/diamond-halo-stud-earrings?view=json"
                                                                                                                data-toggle="tooltip" data-placement="top"
                                                                                                                title="" tabindex="0">
                                                                                                                <i class="icon_cart"></i>
                                                                                                            </a>

                                                                                                        </form>

                                                                                                        <div class="productQuickView d-md-block">
                                                                                                            <a class="btn btnProduct btnProductQuickview" href="Details.php?id=%27<?php echo $result_allpro[$j]['product_id']; ?>%27" data-url="/products/rimond-balo-stud-cum?view=quick_view" data-handle="rimond-balo-stud-cum" data-pid="33119332040757" data-toggle="tooltip" data-placement="top" title="Quick view">
                                                                                                                <i class="fa_quickview"></i>
                                                                                                            </a>
                                                                                                        </div>


                                                                                                        

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                            <?php
                                                                            }
                                                                            ?>
                                                                                </div>


                                                                            </div>


                                                                            </div>
                                                                        </div>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>


                        </div>

                    </div>

                    <div class="product_pagination">
                    <?php 
                        if($currentPage > 1){
                    ?>
                        <a href="?page=<?php echo ($currentPage -1);?>">&laquo;</a>
                    <?php
                        }
                    
                
                        for($page = 1; $page <= $numberPage; $page++){
                            
                            if($page == $currentPage){
                                $active = "active";
                    
                                // <!-- <a href="?page=" class="number_page active"></a> -->
                    
                            }else{
                                $active = "";
                    
                            }

                            echo '<a href="?page='.$page.'" class="number_page '.$active.'">'.$page.'</a>' ;
                            
                        }
                        
                        if($numberPage > $currentPage){
                    ?>
                            
                            <a href="?page=<?php echo ($currentPage +1);?>">&raquo;</a>
                    <?php
                        }
                    ?>

                    </div>

                </div>

            </div>
            
            <div id="shopify-section-1602139639954" class="shopify-section index-section manufacture-section wow fadeIn animated">
                <div class="distance" style="padding-bottom: 78px">
                    <div class="section-manufacture" data-section-id="1602139639954" data-section-type="nov-owl">
                        <div class="block nov-manufacture">

                            <div class="container">

                                <div class="block_content">

                                    <div class="nov-owl-carousel owl-carousel owl-theme" data-autoplay="true" data-autoplayTimeout="2000" data-loop="true" data-margin="0" data-dots="false" data-nav="false" data-items="6" data-items_tablet="5" data-items_mobile="2" data-center="false" data-start="0">

                                        <div class="manufacture__item">

                                            <a href="#" class="manufacture__link">


                                                <img src="//cdn.shopify.com/s/files/1/0272/1493/8165/files/Brands_1_a626543a-33da-47fe-a606-cdc9a4e1c73f_160x160@2x.png?v=1602140173" alt="" class="manufacture__image" />


                                            </a>

                                        </div>

                                        <div class="manufacture__item">

                                            <a href="#" class="manufacture__link">


                                                <img src="//cdn.shopify.com/s/files/1/0272/1493/8165/files/Brands_2_ec544c61-becf-404d-ade9-cf17e2ffea2e_160x160@2x.png?v=1602140183" alt="" class="manufacture__image" />


                                            </a>

                                        </div>

                                        <div class="manufacture__item">

                                            <a href="#" class="manufacture__link">


                                                <img src="//cdn.shopify.com/s/files/1/0272/1493/8165/files/Brands_3_847cb0b9-5c73-41d1-b6f0-5055b1fc0f4c_160x160@2x.png?v=1602140193" alt="" class="manufacture__image" />


                                            </a>

                                        </div>

                                        <div class="manufacture__item">

                                            <a href="#" class="manufacture__link">


                                                <img src="//cdn.shopify.com/s/files/1/0272/1493/8165/files/Brands_4_40c1dc78-c3d9-470e-bb15-309b03338742_160x160@2x.png?v=1602140202" alt="" class="manufacture__image" />


                                            </a>

                                        </div>

                                        <div class="manufacture__item">

                                            <a href="#" class="manufacture__link">


                                                <img src="//cdn.shopify.com/s/files/1/0272/1493/8165/files/Brands_5_7b30023b-e4d9-408c-b29c-ca70580da975_160x160@2x.png?v=1602140208" alt="" class="manufacture__image" />


                                            </a>

                                        </div>

                                        <div class="manufacture__item">

                                            <a href="#" class="manufacture__link">


                                                <img src="//cdn.shopify.com/s/files/1/0272/1493/8165/files/Brands_6_041a76e5-647b-4d0b-82af-f960c6b5b5c7_160x160@2x.png?v=1602140220" alt="" class="manufacture__image" />


                                            </a>

                                        </div>

                                    </div>



                                </div>


                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- END content_for_index -->

        </section>
    </main>
    <div id="shopify-section-nov-footer" class="shopify-section nov-footer wow fadeIn animated">
        <?php include 'config/footer.php' ?>

    </div>

    <div class="canvas-menu drawer-left">
        <div class="canvas-header-box d-flex justify-content-center align-items-center">
            <div class="close-box"><i class="zmdi zmdi-close"></i></div>
        </div>
    </div>
    <div class="canvas-overlay"></div>

    <div class="sidebar-overlay"></div>
    <div class="overlay overlay-search style-light-bg">
        <!-- class open -->
        <div class="close-search">
            <i class="zmdi zmdi-close"></i>
        </div>
        <div class="search-container">
            <form class="search search-bar__form" action="/search" method="get" role="search">
                <div class="search__des text-center">
                    <i class="zmdi zmdi-search"></i>
                    <h2>Search your product</h2>
                    <div>Find your product with fast search. Enter some keyword such as dress, shirts, shoes etc. Or can search by product sku.</div>
                </div>
                <div class="search-container-inner">
                    <input class="search__input search-bar__input" type="search" name="q" value="" placeholder="Enter your keyword" aria-label="Enter your keyword">
                    <button class="search-bar__submit search__submit btn--link" type="submit">
          <span class="icon__fallback-text"><i class="zmdi zmdi-search"></i></span>
        </button>
                </div>
            </form>
        </div>
    </div>

    <div id="mobile-blockcart" class="mobile-boxpage d-flex d-md-none">
        <div class="content-boxpage col">
            <div class="box-header d-flex justify-content-between align-items-center">
                <div class="title-box">Cart</div>
                <div class="close-box">Close</div>
            </div>
            <div id="_mobile_cart" class="box-content"></div>
        </div>
    </div>

    <div id="mobile-pageaccount" class="mobile-boxpage d-flex d-md-none" data-titlebox-parent="Account">
        <div class="content-boxpage col">
            <div class="box-header d-flex justify-content-between align-items-center">
                <div class="back-box">Back</div>
                <div class="title-box">Account</div>
                <div class="close-box">Close</div>
            </div>
            <div class="box-content d-flex justify-content-center align-items-center text-center">
                <div>
                    <div id="_mobile_account_list"></div>

                    <div class="links-currency" data-target="#box-currency" data-titlebox="Currency"><span>Currency</span><i class="zmdi zmdi-arrow-right"></i></div>

                </div>
            </div>

            <div id="box-currency" class="box-content list-unstyled">
                <div id="_mobile_currency_selector" class="currency-selector groups-selector"></div>
            </div>

        </div>
    </div>

    <div id="stickymenu_bottom_mobile" class="d-flex align-items-center justify-content-center d-md-none text-center">
        <div class="stickymenu-item"><a href="/"><i class="icon-home"></i><span>Home</span></a></div>
        <!-- <div class="stickymenu-item">
            <a href="/pages/page-wishlist">
                <i class="zmdi zmdi-favorite-outline"></i>
                <span>Wishlist</span>
            </a>
        </div> -->
        <div class="stickymenu-item"><a href="#" class="nov-toggle-page" data-target="#mobile-blockcart"><span id="_mobile_cart_count" class="cart-products-count"></span><i class="icon-shopping-cart"></i><span>Cart</span></a></div>
        <div class="stickymenu-item"><a href="#" class="nov-toggle-page" data-target="#mobile-pageaccount"><i class="icon-account"></i><span>Setting</span></a></div>
        <div class="stickymenu-item">
            <div id="back_top">
                <div>
                    <i class="fa fa-long-arrow-up"></i>
                    <div class="on_top">On Top</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Popup newsletter -->

    <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type" value="customer" /><input type="hidden" name="utf8" value="✓" />


        <div id="popup-subscribe" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content row no-gutters">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="zmdi zmdi-hc-fw zmdi-close"></i></button>
                    </div>
                    <div class="modal-body col-md-6 text-center d-flex justify-content-center align-items-end">
                        <div class="subscribe_form">
                            <div class="inner">
                                <div class="title_block">Newsletter</div>
                                <p>Sign up for newsletter to receive special offers and exclusive news about Minimart products</p>
                                <div class="input-subscribe-wrap">
                                    <input type="hidden" name="contact[tags]" value="newsletter">
                                    <input type="email" name="contact[email]" class="inputNew form-control grey newsletter-input" value="" placeholder="Enter your email">
                                    <span class="input-group-btn mt-10 d-block">
                              <button id="Subscribe" type="submit" name="commit" class="btn btn-primary">
                                Subscribe
                              </button>
                            </span>
                                </div>
                                <div class="checkbox">
                                    <label id="myCheck" class="d-inline-flex">
                              <span class="custom-checkbox">
                                <input name="no-view" class="no-view" type="checkbox">
                              </span>
                              <span id="text">Don’t show this popup again</span>
                            </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center"><img class="img-fluid lazyload" data-src="//cdn.shopify.com/s/files/1/0272/1493/8165/files/newsletter-popup_830x.jpg?v=1603188175" alt=""></div>
                </div>
            </div>
        </div>

    </form>


    <div id="CustomerAccountForm" class="form-vertical modal fade">
        <div class="modal-dialog">
            <div class="modal-content" style="max-height:none">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="title_block">
                                
                                <div class="title-block__item active">
                                    <span>Login</span>
                                </div>
                                <div class="title-block__item">
                                    <span>Create an account</span>
                                </div>
                                
                                <div class="title-block__line"></div>
                            </div>

                            <div class="content__modal">
                                <div class="content__modal--block active">
                                <form method="post" action="account/login.php" id="customer_login" accept-charset="UTF-8">
                                        <input type="hidden" name="form_type" value="customer_login" />
                                        <input type="hidden" name="utf8" value="✓" />

                                        <div class="block-form-login">
                                            <div class="title_form">
                                                <span>Insert your account information:</span>
                                            </div>
                                            <div class="form-group custom-form novform-email" style="margin-bottom:30px">
                                                <input type="email" name="email" id="Email_login"   value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ""?>" placeholder="Email"  autofocus>
                                                <div class="message"></div>
                                            </div>

                                            <div class="form-group custom-form novform-password" style="margin-bottom:30px">

                                                <input type="password" value="" name="password" id="HeaderPassword" class="" placeholder="Password" >
                                                <div class="message"></div>

                                                <div class="hide_show_password" style="display: block;">
                                                    <span class="show" ><i class="zmdi zmdi-eye-off"></i></span>
                                                    <!-- <span class="show"><i class="zmdi zmdi-eye"></i></span> -->
                                                </div>
                                            </div>

                                            <div class="forgot_password">
                                                <i class="zmdi zmdi-email"></i>

                                                <a href="#recover" id="RecoversPassword">
                                                    Forgot your <strong>Password ?</strong>
                                                </a>

                                            </div>

                                            <div class="form_submit">
                                                <input type="submit" class="btn" value="Login">
                                            </div>
                                        </div>
                                    </form>



                                        <div id="RecoverPasswordFormIndex" class="hide">
                                            <div class="title">
                                                Reset your password
                                            </div>

                                            <div class="form-vertical">
                                                <form method="post" action="/account/recover" accept-charset="UTF-8">
                                                    <input type="hidden" name="form_type" value="recover_customer_password" />
                                                    <input type="hidden" name="utf8" value="✓" />

                                                    <div class="form-group novform-email">
                                                        <input type="email" value="" name="email" id="RecoverEmail" class="input-full" placeholder="Email" required>
                                                    </div>
                                                    <div class="d-flex groups-sub">
                                                        <input type="submit" class="btn" value="Submit">
                                                        <button type="button" id="HideRecoverPasswordIndex" class="text-link">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                <div class="content__modal--block">
                                    <form method="post" action="account/register.php" id="create_customer" accept-charset="UTF-8">
                                        <input type="hidden" name="form_type" value="create_customer" />
                                        <input type="hidden" name="utf8" value="✓" />

                                        <div class="sub-title"><span>No account? Create one here:</span></div>


                                        <div class="block-form-register">
                                            <div class="form-group   custom-form novform-firstname">
                                                <input type="text" name="name" id="name" placeholder="Họ tên" >
                                            
                                                <div class="message"></div>
                                              </div>
                                            <div class="form-group  custom-form novform-lastname">
                                                <input type="text" name="numberphone" id="numberphone" placeholder="Số điện thoại" >
                                                
                                                <div class="message"></div>

                                            </div>
                                            <div class="form-group custom-form novform-email">
                                                <input type="email" name="email" id="email" class="" placeholder="Email" >
                                              
                                                <div class="message"></div>

                                            </div>
                                            <div class="form-group custom-form novform-password">
                                                <input type="password" name="password" id="CreatePassword" class="" placeholder="Password" >
                                               
                                                <div class="message"></div>

                                            </div>
                                            <div class="form-checkbox novform-newsletter">
                                                <label id="form-checkbox" class="custom_checkbox d-inline-flex">
                                                    <span class="custom-checkbox">
                                                    <input type="checkbox" name="newsletter" value="1">
                                                    </span>
                                                    <span class="text">Sign up for our newsletter</span>
                                                </label>
                                            </div>
                                            <div class="form_submit">
                                                <input type="submit" name="submit" value="Register" class="btn">
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="popup-Wishlist" class="loading-modal modal">
        <div class="overlay"></div>
        <div class="modal-header d-flex align-items-center">
            <div class="message_title">
                <i class="zmdi zmdi-notifications-active"></i> This item has been added to your Wishlist
            </div>
            <button type="button" class="close-modal popupwishlistClose">
            <i class="zmdi zmdi-hc-fw zmdi-close"></i>
        </button>
        </div>
        <div class="modal-body">
            <div class="wishlistprimary d-flex align-items-center">
                <div class="wishlistimage">
                    <img class="product-image" alt="&nbsp;" src="" style="max-width: 50px; max-height:50px" />
                </div>
                <div class="product-title"></div>
                <div class="actions">
                    <a class="btn btn-wishlist" href="/pages/page-wishlist">Go to wishlist</a>
                </div>
            </div>
        </div>
    </div>



    <div id="_desktop_back_top">
        <div id="back-top">
            <span>
          <i class="zmdi zmdi-chevron-up"></i>
        </span>
        </div>
    </div>


    <!-- Toast message -->
    <?php 
    echo isset($_COOKIE['error']) ? '<div class="alert alert-danger" id="toast-message" role="alert" style="position:fixed;bottom:20px;left:20px;">'.
                                         $_COOKIE['error'].   
                                    '</div>' : '';

    echo isset($_COOKIE['success']) ? '<div class="alert alert-success" id="toast-message" role="alert" style="position:fixed;bottom:20px;left:20px;">'.
    $_COOKIE['success'].   
    '</div>' : '';
    ?>
    


    <script src="//cdn.shopify.com/s/javascripts/currencies.js" type="text/javascript"></script>
    <script src="//cdn.shopify.com/s/files/1/0272/1493/8165/t/27/assets/jquery.currencies.min.js?v=7811281348689238064" type="text/javascript"></script>

    <script>
        // Pick your format here:
        // money_format or money_with_currency_format
        Currency.format = 'money_format';

        var shopCurrency = 'USD';

        /* Sometimes merchants change their shop currency, let's tell our JavaScript file */
        Currency.moneyFormats[shopCurrency].money_with_currency_format = "${{amount}} USD";
        Currency.moneyFormats[shopCurrency].money_format = "${{amount}}";

        var cookieCurrency = Currency.cookie.read();

        // Fix for customer account pages.
        jQuery('span.money span.money').each(function() {
            jQuery(this).parents('span.money').removeClass('money');
        });

        // Saving the current price.
        jQuery('span.money').each(function() {
            jQuery(this).attr('data-currency-USD', jQuery(this).html());
        });

        // Select all your currencies buttons.
        var buttons = jQuery('#currencies span');
        var title = jQuery('.currency-selector .current-currency');


        // If there's no cookie or it's the shop currency.
        if (cookieCurrency == null || cookieCurrency === shopCurrency) {
            buttons.removeClass('selected');
            jQuery('#currencies span[data-currency=' + shopCurrency + ']').addClass('selected');
            Currency.currentCurrency = shopCurrency;
        } else {
            Currency.convertAll(shopCurrency, cookieCurrency);
            buttons.removeClass('selected');
            jQuery('#currencies span[data-currency=' + cookieCurrency + ']').addClass('selected');
        }


        var txt = jQuery('#currencies span.selected').text();
        jQuery('.currency-selector .current-currency').text(txt);

        // When customer clicks on a currency button.
        buttons.click(function() {
            buttons.removeClass('selected');
            jQuery(this).addClass('selected');
            var newCurrency = jQuery(this).attr('data-currency');
            var txt = jQuery('#currencies span.selected').text();
            jQuery('.currency-selector .current-currency').text(txt);
            Currency.convertAll(Currency.currentCurrency, newCurrency);
        });


        // For options.
        var original_selectCallback = window.selectCallback;
        var selectCallback = function(variant, selector) {
            original_selectCallback(variant, selector);
            Currency.convertAll(shopCurrency, jQuery('#currencies span.selected').attr('data-currency'));
            jQuery('.selected-currency').text(Currency.currentCurrency);
        };

        $('body').on('ajaxCart.afterCartLoad', function(cart) {
            Currency.convertAll(shopCurrency, jQuery('#currencies span.selected').attr('data-currency'));
            jQuery('.selected-currency').text(Currency.currentCurrency);
        });

        jQuery('.selected-currency').text(Currency.currentCurrency);
    </script>


    <script>
        jQuery(function() {
            jQuery('.swatch :radio').change(function() {
                var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
                var optionValue = jQuery(this).val();
                jQuery(this)
                    .closest('form')
                    .find('.single-option-selector')
                    .eq(optionIndex)
                    .val(optionValue)
                    .trigger('change');

                jQuery(this).parents('.watch_availabel').find('span.variant_current').text(optionValue);
            });

        });
    </script>
    <script src="./assets/js/main.js"></script>
    <script src="//cdn.shopify.com/s/files/1/0272/1493/8165/t/27/assets/nuranium.js?v=11704140786233088045" type="text/javascript"></script>

    <script>

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function deleteCookie(cname){
  document.cookie = `${cname}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`
}


</script>
<script src="./assets/js/main.js"></script>
<script src="./assets/js/validator.js"></script>
<script>
Validator({
  form:'#create_customer',
  errorSelector:".message",
  rules:[
    Validator.isRequired('#name'),
    Validator.isRequired('#numberphone'),
    Validator.amountNumber('#numberphone', 10),
    Validator.startWithNumber("#numberphone", 0),
    Validator.validNumberPhone('#numberphone'),
    Validator.isRequired('#CreatePassword'),
    Validator.minLength('#CreatePassword', 6),
    Validator.atLeastOneUppercaseLetter('#CreatePassword'),
    Validator.isRequired('#email'),
    Validator.isEmail('#email'),
  ]
})


Validator({
  form:'#customer_login',
  errorSelector:".message",
  rules:[
    Validator.isRequired('#Email_login'),
    Validator.isEmail('#Email_login'),
    Validator.isRequired('#HeaderPassword'),
  ]
})

Validator({
  form:'#contact_form',
  errorSelector:".message",
  rules:[
    Validator.isRequired('#ContactFormName'),

    Validator.isRequired('#ContactFormEmail'),
    Validator.isEmail('#ContactFormEmail'),
    
    Validator.isRequired('#ContactFormPhone'),
    Validator.amountNumber('#ContactFormPhone', 10),
    Validator.startWithNumber("#ContactFormPhone", 0),
    Validator.validNumberPhone('#ContactFormPhone'),
    
    
    Validator.isRequired('#ContactFormMessage'),
  ]
})
</script>

<script>

  const hidePasswordbtn = document.querySelector('.hide_show_password')
  const icon = hidePasswordbtn.querySelector('.show > i')
  hidePasswordbtn.onclick = () => {
    if(icon.classList[1] === 'zmdi-eye-off'){
      icon.classList.remove('zmdi-eye-off')
      icon.classList.add('zmdi-eye')
      document.querySelector('#HeaderPassword').type = 'text'
    }else{
      icon.classList.remove('zmdi-eye')
      icon.classList.add('zmdi-eye-off')
      document.querySelector('#HeaderPassword').type = 'password'
    }
  }
</script>


<script defer>
    const toastMessage = document.querySelector('#toast-message')
    if(toastMessage){
        setTimeout(() => {
            toastMessage.remove()
        }, 5000);
    }
</script>

</body>

</html>