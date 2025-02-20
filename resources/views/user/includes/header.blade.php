<section>
    <!-- <div class="top-navbar">
                <header class="header-row" style="--sm-max-width: 480px; --md-max-width: 996px; --lg-max-width: 1600px;">
                    <div class="left-row">
                        <div class="email">
                            <p><span class="fa fa-phone"></span>00-62-658-658</p>
                        </div>
                        <div class="search">
                            <input type="search" class="search" placeholder="Search...">
                        </div>
                    </div>
                    <div class="right-row">
                        <div class="login">
                            <nav>
                                <ul>
                                    <li class="dropdown">
                                        <a href="#">Account <i class="fa fa-angle-down"></i></a>
                                        <ul class="mega-col">
                                            <li> <a href="#">Login</a></li>
                                            <li> <a href="#">My Order</a></li>
                                            <li> <a href="#">Wish</a></li>
                                        </ul> 
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="add-to-cart">
                            <a href="#">
                            <img src="https://img.icons8.com/ios-glyphs/30/add-shopping-cart.png" alt="add-shopping-cart"/>
                            <span>Cart</span>
                            </a>
                        </div>  
                    </div>
                </header>
            </div> -->

    <!-- Start header section -->
    <header id="aa-header">
        <!-- start header top  -->
        <div class="aa-header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-header-top-area">
                            <!-- start header top left -->
                            <div class="aa-header-top-left">
                                <!-- start language -->
                                <div class="aa-language">
                                    <div class="dropdown">
                                        <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <img src="{{ asset('assets/user/img/flag/english.jpg') }}"
                                                alt="english flag">ENGLISH
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu list-box-in" aria-labelledby="dropdownMenu1">
                                            <li><a href="#"><img src="img/flag/french.jpg"
                                                        alt="">FRENCH</a></li>
                                            <li><a href="#"><img src="img/flag/english.jpg"
                                                        alt="">ENGLISH</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- / language -->

                                <!-- start currency -->
                                <div class="aa-currency">
                                    <div class="dropdown">
                                        <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <i class="fa fa-usd"></i>USD
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu list-box-in" aria-labelledby="dropdownMenu1">
                                            <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>
                                            <li><a href="#"><i class="fa fa-jpy"></i>YEN</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- / currency -->
                                <!-- start cellphone -->
                                <div class="cellphone hidden-xs">
                                    <p><span class="fa fa-phone"></span>00-62-658-658</p>
                                </div>
                                <!-- / cellphone -->
                            </div>
                            <!-- / header top left -->
                            <div class="aa-header-top-right">
                                <ul class="aa-head-top-nav-right">
                                    <li><a href="account.html">My Account</a></li>
                                    <li class="hidden-xs"><a href="wishlist.html">Wishlist</a></li>
                                    <li class="hidden-xs"><a href="cart.html">My Cart</a></li>
                                    <li class="hidden-xs"><a href="checkout.html">Checkout</a></li>
                                    <li><a href="#">Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / header top  -->

        <!-- start header bottom  -->
        <div class="aa-header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-header-bottom-area">
                            <!-- logo  -->
                            <div class="aa-logo">
                                <!-- Text based logo -->
                                <a href="{{ asset('/') }}">
                                    <img src="{{ asset('assets/user/images/KharidoBey.png') }}" alt="">
                                </a>
                            </div>
                            <!-- / logo  -->
                            <!-- cart box -->
                            <div class="aa-cartbox">
                                <a class="aa-cart-link" href="#">
                                    <span class="fa fa-shopping-basket"></span>
                                    <span class="aa-cart-title">SHOPPING CART</span>
                                    <span class="aa-cart-notify">2</span>
                                </a>
                                <div class="aa-cartbox-summary">
                                    <ul>
                                        <li>
                                            <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg"
                                                    alt="img"></a>
                                            <div class="aa-cartbox-info">
                                                <h4><a href="#">Product Name</a></h4>
                                                <p>1 x $250</p>
                                            </div>
                                            <a class="aa-remove-product" href="#"><span
                                                    class="fa fa-times"></span></a>
                                        </li>
                                        <li>
                                            <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg"
                                                    alt="img"></a>
                                            <div class="aa-cartbox-info">
                                                <h4><a href="#">Product Name</a></h4>
                                                <p>1 x $250</p>
                                            </div>
                                            <a class="aa-remove-product" href="#"><span
                                                    class="fa fa-times"></span></a>
                                        </li>
                                        <li>
                                            <span class="aa-cartbox-total-title">
                                                Total
                                            </span>
                                            <span class="aa-cartbox-total-price">
                                                $500
                                            </span>
                                        </li>
                                    </ul>
                                    <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Checkout</a>
                                </div>
                            </div>
                            <!-- / cart box -->
                            <!-- search box -->
                            <div class="aa-search-box">
                                <form action="">
                                    <input type="text" name="" id=""
                                        placeholder="Search here ex. 'man' ">
                                    <button type="submit"><span class="fa fa-search"></span></button>
                                </form>
                            </div>
                            <!-- / search box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / header bottom  -->
    </header>
    <!-- / header section -->

    <!-- menu -->
    <section id="menu">
        <div class="container">
            <div class="menu-area">
                <!-- Navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <!-- Left nav -->
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('user.index') }}">Home</a></li>
                            @foreach($categories as $list)
                            <li><a href="#">{{ $list->name }} <span class="caret"></span></a>
                                <ul class="dropdown-menu list-box-in">
                                    @foreach($list->subCategories as $subcategories)
                                    <li><a href="#">{{ $subcategories->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
    </section>
    <!-- / menu -->

</section>
