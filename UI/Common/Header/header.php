<header class="site-header sticky-menu" style="background-color: #ffffff;">
                <div class="header-mobile d-md-none">
                    <div class="d-flex align-items-center">
                        <div class="mobile_logo text-center">
                            <a href="/" class="site-header__logo-image img-fluid">
                                <img class="lazyload js" src="./assets/img/logo_HexaFood-removebg.png" alt="" style="max-width: 150px">
                            </a>
                        </div>

                        <div id="mobile_search">
                            <form action="/search" method="get" class="search-header-inline search" role="search">
                                <input type="hidden" name="type" value="product">
                                <input class="search-header__input search__input" type="search" name="q" placeholder="Enter your keyword" aria-label="Search your product">
                                <button class="search-header__submit search__submit btn--link" type="submit">
                                    <span class="site-header__search-icon">
                                        <i class="icon-search"></i>
                                    </span>
                                </button>
                            </form>
                        </div>

                        <div class="d-flex justify-content-end">
                            <div id="show-megamenu" class="item-mobile-top"><i class="zmdi zmdi-view-headline"></i></div>
                        </div>
                    </div>
                </div>
                <div class="header_top d-none d-md-block">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="contentsticky_logo col-xl-3 col-lg-2 col-md-2">
                                <h1 class="h2 site-header__logo">
                                    <a href="./Home.php" itemprop="url" class="site-header__logo-image">
                                        <img class="lazyload js img-fluid" src="./assets/img/logo_HexaFood-removebg.png" alt="logo">
                                    </a>
                                </h1>

                            </div>
                            <div class="contentsticky_group col-xl-9 col-lg-10 col-md-10">
                                <div class="site-header__icons-wrapper style_2">

                                    <div class="policy_header d-flex align-items-center">
                                        <div class="nov-policy-1">
                                            <div class="nov-policy-item d-flex">

                                                <div class="policy-icon icon-margin-right">
                                                    <img class="lazyload" title="Free Delivery From $ 250" data-src="//cdn.shopify.com/s/files/1/0272/1493/8165/files/policy-header-1_d976702a-cfa7-4046-ab31-1540d6103336_72x.png?v=1602126424" alt="">
                                                </div>

                                                <div class="policy-info none_info">
                                                    <div class="title-policy text-uppercase">Free Delivery</div>
                                                    <div class="desc-policy">From $ 250</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nov-policy-2">
                                            <div class="nov-policy-item d-flex">

                                                <div class="policy-icon icon-margin-left">
                                                    <img class="lazyload" title="Money back GUARANTEED" data-src="//cdn.shopify.com/s/files/1/0272/1493/8165/files/policy-header-2_6373a3f1-434a-46ca-bbb2-feb57edfd7bc_72x.png?v=1602126436" alt="">
                                                </div>

                                                <div class="policy-info none_info">
                                                    <div class="title-policy text-uppercase">Money back</div>
                                                    <div class="desc-policy">GUARANTEED</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nov-policy-3">
                                            <div class="nov-policy-item d-flex align-items-center">

                                                <div class="policy-icon icon-margin-left">
                                                    <img class="lazyload" title="Cash on deliver from $ 50" data-src="//cdn.shopify.com/s/files/1/0272/1493/8165/files/policy-header-3_98dcc011-5563-4c2f-b19b-9d6441cb1f50_72x.png?v=1602126457" alt="">
                                                </div>

                                                <div class="policy-info none_info">
                                                    <div class="title-policy">cash on delivery</div>
                                                    <div class="desc-policy">From $ 50</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="group_items">
                                        <?php 
                                            if(isset($_SESSION['isLogin']) === TRUE){
                                                echo '<div class="form-account">
                                                <div class="form-account-title d-flex align-items-center" >
                                                    <i class="icon-form-account "></i>
                                                </div>
                                            </div>';
                                            }else{
                                                echo '<div class="btn__login " data-toggle="modal" data-target="#CustomerAccountForm">LOGIN</div>';
                                            }
                                        ?>
                                        
                                        
                                        
                                        <div id="cart_block">
                                            <a href="Cart.php" class="site-header__cart style_2 d-flex align-items-center">
                                                <span class="site-header__cart-icon"></span>
                                                <div id="_desktop_cart_count" class="site-header__cart-count">
                                                    <span id="CartCount">0</span>
                                                </div>
                                            </a>
                                            <div id="_desktop_cart">
                                                <div id="cart-info"></div>
                                            </div>
                                        </div>
                                        <?php
                                            $adminPageLink = isset($_SESSION['role']) && $_SESSION['role'] == 'admin' ? '<div>
                                            <a  href="admin/index.php" rel="nofollow" title="Check out">
                                            <i class="fas fa-user-tie d-inline-block" style="background:none"></i>
                                                <span>Admin Page</span>
                                            </a> </div>' : '';

                                            echo isset($_SESSION['isLogin']) === TRUE ? 
                                            '<div class="site-header_myaccount dropdown">
                                             <div class="myaccount-title dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-account"></i>
                                            </div> 
                                            <div class="account-list dropdown-menu dropdown-menu-right" id="_desktop_account_list">
                                                <div class="nov_sideward_content">
                                                    <div class="account-list-content">
                                                         <div>
                                                            <a class="myaccount" href="account/My_Account.php" rel="nofollow" title="My Account">
                                                                <i class="icon-myaccount d-inline-block"></i>
                                                                <span>My Account</span>
                                                            </a>
                                                        </div> 
                                                         <div>
                                                            <a class="logout" href="account/logout.php" rel="nofollow" title="Log out">
                                                                <i class="icon-logout d-inline-block"></i>
                                                                <span>
                                                                Log out
                                                                </span>
                                                            </a>
                                                        </div> 

                                                         <div>
                                                            <a class="check-out" href="https://nuranium-electronic.myshopify.com/checkout" rel="nofollow" title="Check out">
                                                                <i class="icon-checkout d-inline-block"></i>
                                                                <span>Check out</span>
                                                            </a>
                                                        </div>'.$adminPageLink.'
                                                    </div>
                                                </div>
                                            </div>

                                        </div>' : ''
                                        ?>
                                        <!--  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-header_menu position-static text-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="contentsticky_menu col-xl-6 col-lg-7 col-md-7">
                                <nav id="AccessibleNav">
                                    <ul class="site-nav list--inline " id="SiteNav">

                                        <li class="site-nav--active">
                                            <a href="./Home.php" class="site-nav__link site-nav__link--main">Home</a>


                                        </li>

                                        <li class="site-nav--has-dropdown hasMegaMenu center">
                                            <a class="d-flex" href="#" title="Products">

                                                <div class="group_title">PRODUCTS
                                                    
                                                    <i class="zmdi zmdi-chevron-down"></i>
                                                    <!-- <i class="zmdi fas fa-chevron-down"></i> -->

                                                </div>
                                                <span class="d-none show_sub ml-auto"><i class="zmdi zmdi-plus-square"></i></span>
                                            </a>
                                            <div class="dropdown_menu">
                                                <div class="site-nav__dropdown megaMenu left_30" aria-expanded="false" style="width:300px;" role="main">
                                                    <div class="menuGroup row spacing-30">

                                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                                            <div class="row">
                                                                <div class="menuCol col-xl-12 col-lg-12 col-md-12 col-xs-12">
                                                                    <ul class="novMenuLinks mrleft-40">
                                                                    <?php 
                                                                        $sql = "SELECT * FROM category";

                                                                        $result = execResult($sql);
                                                                        // var_dump($result);
                                                                        for($i = 0; $i < count($result);$i++){
                                                                            // var_dump($result[$i]);  class="menuTitle has_child"
                                                                        
                                                                    ?>
                                                                        <li class="category-item">
                                                                            <a href="#" title=""><?php echo $result[$i]['name'];?></a>
                                                                        </li>
                                                                        
                                                                    <?php
                                                                        }
                                                                    ?>    

                                                                        <!-- <li class="">
                                                                            <a href="https://nuranium-electronic.myshopify.com/?preview_theme_id=83794657333" title="">Homepage Electronic 1</a>
                                                                        </li> -->

                                                                    </ul>
                                                                </div>


                                                    

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="site-nav--has-dropdown hasMegaMenu center">
                                            <a class="d-flex" href="About.php" title="Abouts Us">

                                                <div class="group_title">ABOUT US
                                                    
                                                </div>
                                                <span class="d-none show_sub ml-auto"><i class="zmdi zmdi-plus-square"></i></span>
                                            </a>
                                            
                                        </li>

                                        <li class="site-nav--has-dropdown hasMegaMenu center">
                                            <a class="d-flex" href="Contact.php" title="Contact">

                                                <div class="group_title">CONTACT
                                                    
                                                    <!-- <i class="zmdi zmdi-chevron-down"></i> -->

                                                </div>
                                                <span class="d-none show_sub ml-auto"><i class="zmdi zmdi-plus-square"></i></span>
                                            </a>
                                            
                                        </li>


                                        <li class="site-nav--has-dropdown" aria-controls="SiteNavLabel-blog">
                                            <a href="News.php" class="site-nav__link site-nav__link--main" title="News">NEWS
                                            </a>
                                        </li>
                                        

                                    </ul>

                                </nav>
                            </div>
                            <div class="col-xl-6 col-lg-5 col-md-5">
                                <div class="site_search d-flex align-items-center justify-content-end">
                                    <div class="site-header__search">
                                        <div id="search_widget" class="site_header__search">
                                            <form action="/search" method="get" class="search-header-inline search" role="search">
                                                <input type="hidden" name="type" value="product">
                                                <input class="search-header__input search__input" type="search" name="q" placeholder="Enter your keyword" aria-label="Search your product">
                                                <button class="search-header__submit search__submit btn--link" type="submit">
                                                    <span class="site-header__search-icon">
                                                        <i class="icon-search"></i>
                                                    </span>   
                                                </button>
                                            </form>
                                            <script>
                                                $(function() {
                                                    // Current Ajax request.
                                                    var currentAjaxRequest = null;
                                                    // Grabbing all search forms on the page, and adding a .search-results list to each.
                                                    var searchForms = $('form[action="/search"]').css('position', 'relative').each(function() {
                                                        // Grabbing text input.
                                                        var input = $(this).find('input[name="q"]');
                                                        // Adding a list for showing search results.
                                                        var offSet = input.position().top + input.innerHeight();
                                                        $('<ul class="search-results has-scroll"></ul>').css({
                                                            'position': 'absolute',
                                                            'left': '0px',
                                                            'top': offSet
                                                        }).appendTo($(this)).hide();
                                                        // Listening to keyup and change on the text field within these search forms.
                                                        input.attr('autocomplete', 'off').bind('keyup change', function() {
                                                            // What's the search term?
                                                            var term = $(this).val();
                                                            // What's the search form?
                                                            var form = $(this).closest('form');
                                                            // What's the search URL?
                                                            var searchURL = '/search?type=product&q=' + term;
                                                            // What's the search results list?
                                                            var resultsList = form.find('.search-results');
                                                            // If that's a new term and it contains at least 3 characters.
                                                            if (term.length > 3 && term != $(this).attr('data-old-term')) {
                                                                // Saving old query.
                                                                $(this).attr('data-old-term', term);
                                                                // Killing any Ajax request that's currently being processed.
                                                                if (currentAjaxRequest != null) currentAjaxRequest.abort();
                                                                // Pulling results.
                                                                currentAjaxRequest = $.getJSON(searchURL + '&view=json', function(data) {
                                                                    // Reset results.
                                                                    resultsList.empty();
                                                                    // If we have no results.
                                                                    if (data.results_count == 0) {
                                                                        // resultsList.html('<li><span class="title">No results.</span></li>');
                                                                        // resultsList.fadeIn(200);
                                                                        resultsList.hide();
                                                                    } else {
                                                                        // If we have results.
                                                                        $.each(data.results, function(index, item) {
                                                                            var link = $('<a class="d-flex"></a>').attr('href', item.url);
                                                                            link.append('<div class="thumbnail"><img src="' + item.thumbnail + '" /></div>');
                                                                            link.append('<div class="media-body"><div class="title">' + item.title + '</div><div class="price">' + item.price + '</div></div>');
                                                                            // link.append('<div class="price">' + item.price + '</div>');
                                                                            link.wrap('<li></li>');
                                                                            resultsList.append(link.parent());
                                                                        });
                                                                        // The Ajax request will return at the most 10 results.
                                                                        // If there are more than 10, let's link to the search results page.
                                                                        if (data.results_count > 10) {
                                                                            resultsList.append('<li><a class="see_all" href="' + searchURL + '">See all results (' + data.results_count + ')</a></li>');
                                                                        }
                                                                        resultsList.fadeIn(200);
                                                                    }
                                                                });
                                                            }
                                                        });
                                                    });
                                                    // Clicking outside makes the results disappear.
                                                    $('body').bind('click', function() {
                                                        $('.search-results').hide();
                                                    });
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </header>