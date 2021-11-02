<div class="item">
  <div class="item-product">
    <div class="thumbnail-container has-multiimage has_variants">
      <a href="Details.php?id=%27<?php echo $sanphamRelatedRow[$i][0]; ?>%27">
        <img class="img-fluid product__thumbnail lazyload"
        src="<?php echo $sanphamRelatedRow[$i][11]; ?>"
        alt="<?php echo $sanphamRelatedRow[$i][11]; ?>" style = "width: 180px !important;height: 180px !important;">
        <img class="img-fluid product__thumbnail-second" alt="Qiamond Calo Stud Aenean"
        src="<?php echo $sanphamRelatedRow[$i][11]; ?>"
        alt="<?php echo $sanphamRelatedRow[$i][11]; ?>">
      </a>
      <div class="badge_sale">        
        <span class="badge badge--sale-pt"><?php echo $sanphamRelatedRow[$i][4]; ?></span>
      </div>
      <div class="group-buttons d-flex">
        <div class="productWishList mr-5" onclick="return false;">
          <a class="wishlist btn btnProduct btnProductWishlist" data-icon-wishlist href="#"
            data-product-handle="qiamond-calo-stud-aenean" data-id="4907739906101"
            data-toggle="tooltip" data-placement="top" data-original-title="Add to wishlist">
            <i class="fa_wishlist"></i>
          </a>
        </div>
        <div class="productQuickView d-md-block">
          <a class="btn btnProduct btnProductQuickview" href="#"
            data-url="/products/qiamond-calo-stud-aenean?view=quick_view"
            data-handle="qiamond-calo-stud-aenean" data-pid="33119282987061"
            data-toggle="tooltip" data-placement="top" title="Quick view">
            <i class="fa_quickview"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="product__info text-center">
      <div class="block_product_info">
        <div class="product__title">
          <a href="Details.php?id=%27<?php echo $sanphamRelatedRow[$i][0]; ?>%27"><?php echo $sanphamRelatedRow[$i][1]; ?></a>
        </div>
        <div class="product__price">
          <!-- snippet/product-price.liquid -->
          <span class="visually-hidden">Regular price</span>
          <span class="product-price__price product-price__sale">
            <span class="money"><?php echo $sanphamRelatedRow[$i][6]." ".$sanphamRelatedRow[$i][9]; ?></span>
          </span>
          <s class="product-price__price"><span class="money"><?php echo $sanphamRelatedRow[$i][6]." ".$sanphamRelatedRow[$i][9]; ?></span></s>
        </div>
        <div class="group-buttons">
          <form class="formAddToCart" action="/cart/add" method="post"
            enctype="multipart/form-data">
            <input type="hidden" name="id" value="33119282987061" />
            <a class="btn btnAddToCart btnChooseVariant" href="javascript:void(0);"
              data-url="/products/qiamond-calo-stud-aenean?view=json" title="" tabindex="0">
              <i class="zmdi zmdi-check"></i>
              <span>Add to cart</span>
            </a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>