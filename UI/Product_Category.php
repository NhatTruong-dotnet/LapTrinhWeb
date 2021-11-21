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
<!--[if IE 9]> <html class="ie9 no-js" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <?php include 'config/heade_tag.php' ?>
</head>
<body class="template-index">
	<a class="in-page-link visually-hidden skip-link" href="#MainContent">Skip to content</a>
	<div id="shopify-section-nov-header" class="shopify-section">
		<div data-section-id="nov-header" data-section-type="header-section">
		<?php include 'Common/Header/header.php' ?>
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
			<div id="shopify-section-1601622782451"
				class="shopify-section index-section section-product-deal wow fadeIn animated">
				<div class="distance" style="padding-top: 40px; padding-bottom: 30px">
					<div class="" data-section-id="1601622782451" data-section-type="nov-slick">
						<div class="container">
							<div class="row">
								<div class="col-md-3" id="catagorie">
									<!--catagories start-->
									<div class="blog-sidebar">
										<div class="block">
											<h2>Catagories</h2>
											<div class="list-group">
												<?php
													$ds= loadCategory();
													foreach($ds as $row ){
														echo "<a href='Product_Category.php?act=category&id=".$row[0]."' class='list-group-item'>".$row[1]."</a>";

													};
												?> 
											</div>
										</div>
									</div>
								</div>
								<?php
									function loadCategory() {
										// $servername = "sql6.freemysqlhosting.net";
                        				// $username = "sql6448508";
                        				// $password = '2SHPjvRite';
										$conn= new mysqli('localhost:3307','root','','laptrinhweb');
										$conn->set_charset("utf8");
										$sql = "SELECT * FROM category";
										$result=$conn->query($sql);
										$stmt=array();
										$i=0;
										while($row=$result->fetch_assoc()){
											$stmt[$i]= array($row['category_id'], $row['name'], $row['shortname']);
           									 $i++;
										};	
										return $stmt;
									}
								?>
								<!--End catagories -->
								<!-- ============================================================ -->
								<div class="page-width product_deals col-md-9">
								<?php
									// $servername = "sql6.freemysqlhosting.net";
									// $username = "sql6448508";
									// $password = '2SHPjvRite';
									$conn= new mysqli('localhost:3307','root','','laptrinhweb');
									$conn->set_charset("utf8");
									//=================
									$item_per_page=!empty($_GET['per_page'])?$_GET['per_page']:15;
									$current_page=!empty($_GET['page'])?$_GET['page']:1;
									$offset=($current_page-1)* $item_per_page;
									$b=$_GET['id'];
									$sql1= "SELECT * from product where  category_id = $b";
									$totalRecords= mysqli_query($conn,$sql1);
									$totalRecords=$totalRecords->num_rows;
									$totalPages=ceil($totalRecords/$item_per_page);
									//=================
                                    if(isset($_GET['id'])&& $_GET['id']>0){                    
                                        danhmuc($_GET['id'],$item_per_page,$offset);?>
										<!-- Pagination -->
									<div class="nov-pagination d-flex align-items-center justify-content-center">
										<ul class="pagination d-flex justify-content-end align-items-center">
											<?php
												if($current_page>1){
													$prev_page=$current_page-1;?>
													<li class="d-none d-sm-inline">
														<a href="?id=<?=$_GET['id']?>&per_page=<?=$item_per_page?>&page=<?=$prev_page?>" class="pagination__btn d-block">
															<i class="zmdi zmdi-chevron-left"></i>
															<span class="icon__fallback-text">Prev</span>
														</a>
													</li>
													<?php 
												}
													?>
												<?php
													for($num=1;$num<=$totalPages;$num++){
														if($num!=$current_page){
															if($num>$current_page-3&&$num<$current_page+3){?>
																<li class="pagination__text">
																	<a href="?id=<?=$_GET['id']?>&per_page=<?=$item_per_page?>&page=<?=$num?>" title=""><?=$num?></a>
																</li>
															<?php }
														}else{?>
															<li class="pagination__text active"><span><?=$num?></span></li>
														<?php }
													}
												?>
												<?php
													if($current_page<$totalPages-1){
														$next_page=$current_page+1;?>
														<li class="d-none d-sm-inline">
															<a href="?id=<?=$_GET['id']?>&per_page=<?=$item_per_page?>&page=<?=$next_page?>" class="pagination__btn d-block">
																<span class="icon__fallback-text">Next</span>
																<i class="zmdi zmdi-chevron-right"></i>
															</a>
														</li>
													<?php }
												?>
										</ul>
									</div>
									<!-- End of /.pagination -->
                                    <?php }else{
                                        include "Product.php";
                                    }
									
                                function danhmuc($a,$item_per_page,$offset){
									// $servername = "sql6.freemysqlhosting.net";
                        			// 	$username = "sql6448508";
                        			// 	$password = '2SHPjvRite';
										$conn= new mysqli('localhost:3307','root','','laptrinhweb');
										$conn->set_charset("utf8");
									$sql = "SELECT name,product.product_id,product_image.image_blob, price, currency, category_id FROM product join product_image on product.product_id=product_image.product_id   Where category_id=$a limit $item_per_page offset $offset" ;
									$result=mysqli_query($conn,$sql);
									$arr= array();
									$i=0;
									while($row=mysqli_fetch_assoc($result) ){
										$arr[$i]= array($row['name'], $row['image_blob'], $row['price'], $row['currency'],$row['product_id']);
										$i++;
									}
									
									for($j=0;$j<count($arr);$j+=4){
										
										
										echo '
									
									
									<div class="block" style="padding:25px 0;">
										<div class="grid--view-items row nov-slick-carousel" data-autoplay="true"
											data-autoplayTimeout="10000" data-loop="true" data-dots="false"
											data-nav="false" data-items="3" data-items_lg_tablet="3"
											data-items_tablet="3" data-items_mobile="2" data-items_mobiles="1">
											<div class="item">
												<div class="item-shadow">
													<div class="item-product" >
														<div class="thumbnail-container has-multiimage">
															<a href="Details.php?id=%27'.$arr[$j][4].'%27">
																<img class="img-fluid product__thumbnail lazyload"
																	src="'.$arr[$j][1].'"
																	alt=""style="width:150px; height:150px;">
																
															</a>
															
														</div>
														<div class="product__info">
															<div class="product__title">
																<a href="Details.php?id=%27'.$arr[$j][4].'%27">'
																	.$arr[$j][0].'</a>
															</div>
															<div class="product__price" style="display:flex;justify-content: space-between; ">
																
																<span class="product-price__price product-price__sale">
																	<span class="money"
																		style="height: 40px;line-height: 40px;">'.number_format($arr[$j][2], 0, ",", ".").' '.$arr[$j][3].'</span>
																</span>
																
																<div class="group-buttons" style="min-width: 60px;">
																	<form class="formAddToCart" action="addcart.php?id=%27'.$arr[$j][4].'%27" method="post" >
																		<input type="hidden" name="id" value="30262361260085" />
																		<a class="btn btnAddToCart btnChooseVariant"
																			href="addcart.php?id=%27'.$arr[$j][4].'%27"
																			data-url="/products/diamond-halo-stud-earrings?view=json"
																			data-toggle="tooltip" data-placement="top"
																			title="" tabindex="0">
																			<span><i class="zmdi zmdi-shopping-cart" style="color:#222222;"></i></span>
																		</a>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="item-shadow">
													<div class="item-product" >
														<div class="thumbnail-container has-multiimage">
															<a href="Details.php?id=%27'.$arr[$j+1][4].'%27">
																<img class="img-fluid product__thumbnail lazyload"
																	src="'.$arr[$j+1][1].'"
																	alt=""style="width:150px; height:150px;">
																
															</a>
															
														</div>
														<div class="product__info">
															<div class="product__title">
																<a href="Details.php?id=%27'.$arr[$j+1][4].'%27">'
																	.$arr[$j+1][0].'</a>
															</div>
															<div class="product__price" style="display:flex;justify-content: space-between; ">
																
																<span class="product-price__price product-price__sale">
																	<span class="money"
																		style="height: 40px;line-height: 40px;">'.number_format($arr[$j+1][2], 0, ",", ".").' '.$arr[$j+1][3].'</span>
																</span>
																<div class="group-buttons" style="min-width: 60px;">
																	<form class="formAddToCart" action="addcart.php?id=%27'.$arr[$j+1][4].'%27" method="post" >
																		<input type="hidden" name="id" value="30262361260085" />
																		<a class="btn btnAddToCart btnChooseVariant"
																			href="addcart.php?id=%27'.$arr[$j+1][4].'%27"
																			data-url="/products/diamond-halo-stud-earrings?view=json"
																			data-toggle="tooltip" data-placement="top"
																			title="" tabindex="0">
																			<span><i class="zmdi zmdi-shopping-cart" style="color:#222222;"></i></span>
																		</a>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="item-shadow">
													<div class="item-product">
														<div class="thumbnail-container has-multiimage">
															<a href="Details.php?id=%27'.$arr[$j+2][4].'%27">
																<img class="img-fluid product__thumbnail lazyload"
																	src="'.$arr[$j+2][1].'"
																	alt=""style="width:150px; height:150px;">
															
															</a>
															
														</div>
														<div class="product__info">
															<div class="product__title">
																<a href="Details.php?id=%27'.$arr[$j+2][4].'%27">'
																.$arr[$j+2][0].'</a>
															</div>
															<div class="product__price" style="display:flex;justify-content: space-between; ">
																
																<span class="product-price__price product-price__sale">
																	<span class="money"
																		style="height: 40px;line-height: 40px;">'.number_format($arr[$j+2][2], 0, ",", ".").' '.$arr[$j+2][3].'</span>
																</span>
																<div class="group-buttons" style="min-width: 60px;">
																	<form class="formAddToCart" action="addcart.php?id=%27'.$arr[$j+2][4].'%27" method="post">
																		<input type="hidden" name="id" value="30262361260085" />
																		<a class="btn btnAddToCart btnChooseVariant"
																			href="addcart.php?id=%27'.$arr[$j+2][4].'%27"
																			data-url="/products/diamond-halo-stud-earrings?view=json"
																			data-toggle="tooltip" data-placement="top"
																			title="" tabindex="0">
																			<span><i class="zmdi zmdi-shopping-cart" style="color:#222222;"></i></span>
																		</a>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>';
									
								}}
								?>									
									<!-- ===================================================================== -->
									
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
		<footer data-section-id="nov-footer">
			<div class="footer-top">
				<div class="block_footer">
					<div class="container">
						<div class="avenger">
							<div class="row">
								<div
									class="footer-contact footer-block footer-block__1 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="title-block">
										Warehouse
									</div>
									<div class="block-content">
										<div class="contact d-flex">
											<div class="icon-contact">
												<i class="icon-phone"></i>
											</div>
											<div class="phone-content">
												<div class="number">(+612) 2531 5600<p></p>
												</div>
											</div>
										</div>
										<div class="contact d-flex">
											<div class="icon-contact">
												<i class="icon-mail"></i>
											</div>
											<div class="email-content">
												<div class="email">vinova@gmail.com<p></p>
												</div>
											</div>
										</div>
										<div class="contact d-flex">
											<div class="icon-contact">
												<i class="icon-location"></i>
											</div>
											<div class="address-content">
												<div class="content-address">PO Box 1622 Visaosang Street West</div>
											</div>
										</div>
										<div class="contact d-flex">
											<div class="icon-contact">
												<i class="icon-hours"></i>
											</div>
											<div class="hours-content">
												<div class="content-hours">Opening Hours : 8.00AM - 21.00AM</div>
											</div>
										</div>
										<div class="social_newsletter">
											<div class="social-icons">
												<ul class="site-footer__social-icons p-0">
													<li>
														<a class="social-icons__link"
															href="https://facebook.com/vinovatheme"
															title="Warehouse Electronic on Facebook">
															<i class="zmdi zmdi-facebook"></i>
														</a>
													</li>
													<li>
														<a class="social-icons__link"
															href="https://twitter.com/vinovatheme"
															title="Warehouse Electronic on Twitter">
															<i class="zmdi zmdi-twitter"></i>
														</a>
													</li>
													<li>
														<a class="social-icons__link"
															href="https://pinterest.com/vinovatheme"
															title="Warehouse Electronic on Pinterest">
															<i class="fa fa-pinterest" aria-hidden="true"></i>
														</a>
													</li>
													<li>
														<a class="social-icons__link"
															href="https://vimeo.com/vinovatheme"
															title="Warehouse Electronic on Vimeo">
															<i class="fa fa-vimeo" aria-hidden="true"></i>
														</a>
													</li>
													<li>
														<a class="social-icons__link"
															href="https://instagram.com/vinovatheme"
															title="Warehouse Electronic on Instagram">
															<i class="fa fa-instagram" aria-hidden="true"></i>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div
									class="footer-menu footer-block footer-block__2 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="title-block">
										Customer Service
									</div>
									<ul class="site-footer__linklist list-unstyled">
										<li class="site-footer__linklist-item">
											<a href="/pages/contact-us">Contact us</a>
										</li>
										<li class="site-footer__linklist-item">
											<a href="#">Help and advice</a>
										</li>
										<li class="site-footer__linklist-item">
											<a href="#">Shipping & Returns</a>
										</li>
										<li class="site-footer__linklist-item">
											<a href="#">Terms and conditions</a>
										</li>
										<li class="site-footer__linklist-item">
											<a href="#">Refund Policy</a>
										</li>
									</ul>
								</div>
								<div
									class="newsletter btn_icon footer-block footer-block__3 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="title-block">
										Newsletter
									</div>
									<div class="des">Sign up for newsletter to receive special offers and exclusive news
										about Nuranium products</div>
									<div class="block-content">
										<div class="site-footer__newsletter">
											<form method="post" action="/contact#contact_form" id="contact_form"
												accept-charset="UTF-8" class="contact-form"><input type="hidden"
													name="form_type" value="customer" /><input type="hidden" name="utf8"
													value="✓" />
												<div class="input-group">
													<input type="hidden" name="contact[tags]" value="newsletter">
													<input type="email" name="contact[email]" id="Email_Footer"
														class="input-group__field newsletter__input form-control pl-15"
														value="builehoangnhattruong@gmail.com"
														placeholder="Enter your email">
													<span class="input-group__btn">
														<button type="submit"
															class="btn newsletter__submit d-flex align-items-center"
															name="commit" id="Subscribe_footer">
															<span
																class="newsletter__submit-text--large">Subscribe</span>
														</button>
													</span>
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
			<div class="footer_copyright">
				<div class="container">
					<div class="list_category">
						<ul class="site-footer__linklist list-unstyled">
							<li class="list-inline-item">
								<a href="#">Nokia</a>
							</li>
							<li class="list-inline-item">
								<a href="#">Samsung</a>
							</li>
							<li class="list-inline-item">
								<a href="#">HTC</a>
							</li>
							<li class="list-inline-item">
								<a href="#">Laptop</a>
							</li>
							<li class="list-inline-item">
								<a href="#">Smartphone</a>
							</li>
							<li class="list-inline-item">
								<a href="#">Tablet</a>
							</li>
							<li class="list-inline-item">
								<a href="#">Vinova</a>
							</li>
							<li class="list-inline-item">
								<a href="#">Smartwatch</a>
							</li>
							<li class="list-inline-item">
								<a href="#">Wireless Charger</a>
							</li>
							<li class="list-inline-item">
								<a href="#">Company</a>
							</li>
							<li class="list-inline-item">
								<a href="#">Iphone 7S Plus</a>
							</li>
							<li class="list-inline-item">
								<a href="#">Nova Fashion</a>
							</li>
							<li class="list-inline-item">
								<a href="#">Android Phone</a>
							</li>
							<li class="list-inline-item">
								<a href="#">IOS Phone</a>
							</li>
							<li class="list-inline-item">
								<a href="#">OPPO</a>
							</li>
							<li class="list-inline-item">
								<a href="#">USB Kingston 128GB</a>
							</li>
							<li class="list-inline-item">
								<a href="#">Bluetooth Motorcycle Headset</a>
							</li>
							<li class="list-inline-item">
								<a href="#">Speaker </a>
							</li>
							<li class="list-inline-item">
								<a href="#">Headphone</a>
							</li>
							<li class="list-inline-item">
								<a href="#">Huawei</a>
							</li>
							<li class="list-inline-item">
								<a href="#">Zippo</a>
							</li>
						</ul>
					</div>
					<div class="row align-items-center">
						<div
							class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mb-20 wow fadeIn animated">
							<img src="//cdn.shopify.com/s/files/1/0272/1493/8165/files/payment-footer_3cd5e244-331d-4433-ac29-eb0f0c257a18_300x.png?v=1601623316"
								alt="img">
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeIn animated">
							<div class="copyright">Copyright © 2020 Vinovathemes. All rights reserved.</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<div id="_mobile_vertical_menu" class="vertical_menu"></div>
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
					<div>Find your product with fast search. Enter some keyword such as dress, shirts, shoes etc. Or can
						search by product sku.</div>
				</div>
				<div class="search-container-inner">
					<input class="search__input search-bar__input" type="search" name="q" value=""
						placeholder="Enter your keyword" aria-label="Enter your keyword">
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
					<div class="links-currency" data-target="#box-currency" data-titlebox="Currency">
						<span>Currency</span><i class="zmdi zmdi-arrow-right"></i>
					</div>
				</div>
			</div>
			<div id="box-currency" class="box-content list-unstyled">
				<div id="_mobile_currency_selector" class="currency-selector groups-selector"></div>
			</div>
		</div>
	</div>
	<div id="stickymenu_bottom_mobile" class="d-flex align-items-center justify-content-center d-md-none text-center">
		<div class="stickymenu-item"><a href="/"><i class="icon-home"></i><span>Home</span></a></div>
		<div class="stickymenu-item"><a href="/pages/page-wishlist"><i
					class="zmdi zmdi-favorite-outline"></i><span>Wishlist</span></a></div>
		<div class="stickymenu-item"><a href="#" class="nov-toggle-page" data-target="#mobile-blockcart"><span
					id="_mobile_cart_count" class="cart-products-count"></span><i
					class="icon-shopping-cart"></i><span>Cart</span></a></div>
		<div class="stickymenu-item"><a href="#" class="nov-toggle-page" data-target="#mobile-pageaccount"><i
					class="icon-account"></i><span>Setting</span></a></div>
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
	<form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="contact-form">
		<input type="hidden" name="form_type" value="customer" /><input type="hidden" name="utf8" value="✓" />
		<div id="popup-subscribe" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content row no-gutters">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
								class="zmdi zmdi-hc-fw zmdi-close"></i></button>
					</div>
					<div class="modal-body col-md-6 text-center d-flex justify-content-center align-items-end">
						<div class="subscribe_form">
							<div class="inner">
								<div class="title_block">Newsletter</div>
								<p>Sign up for newsletter to receive special offers and exclusive news about Minimart
									products</p>
								<div class="input-subscribe-wrap">
									<input type="hidden" name="contact[tags]" value="newsletter">
									<input type="email" name="contact[email]"
										class="inputNew form-control grey newsletter-input" value=""
										placeholder="Enter your email">
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
					<div class="col-md-6 text-center"><img class="img-fluid lazyload"
							data-src="//cdn.shopify.com/s/files/1/0272/1493/8165/files/newsletter-popup_830x.jpg?v=1603188175"
							alt=""></div>
				</div>
			</div>
		</div>
	</form>
	<div id="CustomerAccountForm" class="form-vertical modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-6">
							<form method="post" action="/account" id="create_customer" accept-charset="UTF-8"><input
									type="hidden" name="form_type" value="create_customer" /><input type="hidden"
									name="utf8" value="✓" />
								<div class="title_block"><span>Create an account</span></div>
								<div class="sub-title"><span>No account? Create one here:</span></div>
								<div class="block-form-register">
									<div class="form-group novform-firstname">
										<input type="text" name="customer[first_name]" id="FirstName"
											placeholder="First Name" required>
									</div>
									<div class="form-group novform-lastname">
										<input type="text" name="customer[last_name]" id="LastName"
											placeholder="Last Name" required>
									</div>
									<div class="form-group novform-email">
										<input type="email" name="customer[email]" id="email_rigester" class=""
											placeholder="Email" required>
									</div>
									<div class="form-group novform-password">
										<input type="password" name="customer[password]" id="CreatePassword" class=""
											placeholder="Password" required>
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
										<input type="submit" value="Register" class="btn">
									</div>
								</div>
							</form>
						</div>
						<div class="col-6">
							<form method="post" action="/account/login" id="customer_login" accept-charset="UTF-8">
								<input type="hidden" name="form_type" value="customer_login" /><input type="hidden"
									name="utf8" value="✓" />
								<div class="title-login">
									<div class="title_block"><span class="text-bold">Login</span></div>
								</div>
								<div class="block-form-login">
									<div class="title_form"><span>Insert your account information:</span></div>
									<div class="form-group novform-email">
										<input type="email" name="customer[email]" id="Email_login" class=""
											placeholder="Email" required autofocus>
									</div>
									<div class="form-group novform-password">
										<input type="password" value="" name="customer[password]" id="HeaderPassword"
											class="" placeholder="Password" required>
										<div class="hide_show_password" style="display: block;">
											<span class="show"><i class="zmdi zmdi-eye-off"></i></span>
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
									<form method="post" action="/account/recover" accept-charset="UTF-8"><input
											type="hidden" name="form_type" value="recover_customer_password" /><input
											type="hidden" name="utf8" value="✓" />
										<div class="form-group novform-email">
											<input type="email" value="" name="email" id="RecoverEmail"
												class="input-full" placeholder="Email" required>
										</div>
										<div class="d-flex groups-sub">
											<input type="submit" class="btn" value="Submit">
											<button type="button" id="HideRecoverPasswordIndex"
												class="text-link">Cancel</button>
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
				<i class="zmdi zmdi-notifications-active"></i>
				This item has been added to your Wishlist
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
	<!-- <script src="//cdn.shopify.com/s/javascripts/currencies.js" type="text/javascript"></script>
	<script src="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/jquery.currencies.min.js?v=7811281348689238064"
		type="text/javascript"></script>
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
		jQuery('span.money span.money').each(function () {
			jQuery(this).parents('span.money').removeClass('money');
		});
		// Saving the current price.
		jQuery('span.money').each(function () {
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
		}
		else {
			Currency.convertAll(shopCurrency, cookieCurrency);
			buttons.removeClass('selected');
			jQuery('#currencies span[data-currency=' + cookieCurrency + ']').addClass('selected');
		}
		var txt = jQuery('#currencies span.selected').text();
		jQuery('.currency-selector .current-currency').text(txt);
		// When customer clicks on a currency button.
		buttons.click(function () {
			buttons.removeClass('selected');
			jQuery(this).addClass('selected');
			var newCurrency = jQuery(this).attr('data-currency');
			var txt = jQuery('#currencies span.selected').text();
			jQuery('.currency-selector .current-currency').text(txt);
			Currency.convertAll(Currency.currentCurrency, newCurrency);
		});
		// For options.
		var original_selectCallback = window.selectCallback;
		var selectCallback = function (variant, selector) {
			original_selectCallback(variant, selector);
			Currency.convertAll(shopCurrency, jQuery('#currencies span.selected').attr('data-currency'));
			jQuery('.selected-currency').text(Currency.currentCurrency);
		};
		$('body').on('ajaxCart.afterCartLoad', function (cart) {
			Currency.convertAll(shopCurrency, jQuery('#currencies span.selected').attr('data-currency'));
			jQuery('.selected-currency').text(Currency.currentCurrency);
		});
		jQuery('.selected-currency').text(Currency.currentCurrency);
	</script>
	<script>
		jQuery(function () {
			jQuery('.swatch :radio').change(function () {
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
	<script src="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/nuranium.js?v=9641916987731097208"
		type="text/javascript"></script> -->
</body>
</html>

