@extends('user.layouts.master')
@section('content')
<body>
        <!-- wpf loader Two -->
        <div id="wpf-loader-two">
            <div class="wpf-loader-two-inner">
                <span>Loading</span>
            </div>
        </div>
        <!-- / wpf loader Two -->
        <!-- SCROLL TOP BUTTON -->
        <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
        <!-- END SCROLL TOP BUTTON -->

        <!-- Start slider section -->
        <section>
            <div class="container">
                <div class="row">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner mt-4">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="{{ asset('assets/user/images/banner/slider1.jpg') }}" class="d-block w-100"
                                    alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="{{ asset('assets/user/images/banner/slider2.jpg') }}" class="d-block w-100"
                                    alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/user/images/banner/slider3.jpg') }}" class="d-block w-100"
                                    alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- end slider section -->

        <!-- Start Promo section -->
        <section id="aa-product">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="aa-product-area">
                                <div class="aa-product-inner">
                                    <!-- start prduct navigation -->
                                    <ul class="nav nav-tabs aa-products-tab">
                                        <li class="active"><a href="#men" data-toggle="tab">Men</a></li>
                                        <li><a href="#women" data-toggle="tab">Women</a></li>
                                        <li><a href="#sports" data-toggle="tab">Sports</a></li>
                                        <li><a href="#electronics" data-toggle="tab">Electronics</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <!-- Start men product category -->
                                        <div class="tab-pane fade in active" id="men">
                                            <ul class="aa-product-catg">
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">T-Shirt</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Polo
                                                                    T-Shirt</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Polo
                                                                    T-Shirt</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-hot" href="#">HOT!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">T-Shirt</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Polo
                                                                    T-Shirt</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Polo
                                                                    T-Shirt</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">T-Shirt</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                                </li>
                                            </ul>
                                            <a class="aa-browse-btn" href="#">Browse all Product <span
                                                    class="fa fa-long-arrow-right"></span></a>
                                        </div>
                                        <!-- / men product category -->
                                        <!-- start women product category -->
                                        <div class="tab-pane fade" id="women">
                                            <ul class="aa-product-catg">
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">This is
                                                                    Title</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                    doller</a></h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-hot" href="#">HOT!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                    doller</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                    doller</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                    doller</a></h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>

                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                    doller</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                    doller</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                    doller</a></h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                                </li>
                                            </ul>
                                            <a class="aa-browse-btn" href="#">Browse all Product <span
                                                    class="fa fa-long-arrow-right"></span></a>
                                        </div>
                                        <!-- / women product category -->
                                        <!-- start sports product category -->
                                        <div class="tab-pane fade" id="sports">
                                            <ul class="aa-product-catg">
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">This is
                                                                    Title</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                    doller</a></h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                    doller</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                    doller</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-hot" href="#">HOT!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                    doller</a></h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                    doller</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                    doller</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                    doller</a></h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- / sports product category -->
                                        <!-- start electronic product category -->
                                        <div class="tab-pane fade" id="electronics">
                                            <ul class="aa-product-catg">
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">This is
                                                                    Title</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                    doller</a></h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                    doller</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                    doller</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-hot" href="#">HOT!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                    doller</a></h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                    doller</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                    doller</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                    doller</a></h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="" data-original-title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="" data-toggle="modal"
                                                            data-target="#quick-view-modal"
                                                            data-original-title="Quick View"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                                </li>
                                            </ul>
                                            <a class="aa-browse-btn" href="#">Browse all Product <span
                                                    class="fa fa-long-arrow-right"></span></a>
                                        </div>
                                        <!-- / electronic product category -->
                                    </div>
                                    <!-- quick view modal -->
                                    <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                    <div class="row">
                                                        <!-- Modal view slider -->
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="aa-product-view-slider">
                                                                <div class="simpleLens-gallery-container"
                                                                    id="demo-1">
                                                                    <div class="simpleLens-container">
                                                                        <div class="simpleLens-big-image-container">
                                                                            <a class="simpleLens-lens-image"
                                                                                data-lens-image="{{ asset('assets/user/img/man/polo-shirt-2.png') }}">
                                                                                <img src="img/view-slider/medium/polo-shirt-1.png"
                                                                                    class="simpleLens-big-image">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="simpleLens-thumbnails-container">
                                                                        <a href="#"
                                                                            class="simpleLens-thumbnail-wrapper"
                                                                            data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                                                            data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                                                            <img
                                                                                src="img/view-slider/thumbnail/polo-shirt-1.png">
                                                                        </a>
                                                                        <a href="#"
                                                                            class="simpleLens-thumbnail-wrapper"
                                                                            data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                                                            data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                                                            <img
                                                                                src="img/view-slider/thumbnail/polo-shirt-3.png">
                                                                        </a>

                                                                        <a href="#"
                                                                            class="simpleLens-thumbnail-wrapper"
                                                                            data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                                                            data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                                                            <img
                                                                                src="img/view-slider/thumbnail/polo-shirt-4.png">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Modal view content -->
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="aa-product-view-content">
                                                                <h3>T-Shirt</h3>
                                                                <div class="aa-price-block">
                                                                    <span class="aa-product-view-price">$34.99</span>
                                                                    <p class="aa-product-avilability">Avilability:
                                                                        <span>In stock</span>
                                                                    </p>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                    Officiis animi, veritatis quae repudiandae quod nulla
                                                                    porro quidem, itaque quis quaerat!</p>
                                                                <h4>Size</h4>
                                                                <div class="aa-prod-view-size">
                                                                    <a href="#">S</a>
                                                                    <a href="#">M</a>
                                                                    <a href="#">L</a>
                                                                    <a href="#">XL</a>
                                                                </div>
                                                                <div class="aa-prod-quantity">
                                                                    <form action="">
                                                                        <select name="" id="">
                                                                            <option value="0" selected="1">1
                                                                            </option>
                                                                            <option value="1">2</option>
                                                                            <option value="2">3</option>
                                                                            <option value="3">4</option>
                                                                            <option value="4">5</option>
                                                                            <option value="5">6</option>
                                                                        </select>
                                                                    </form>
                                                                    <p class="aa-prod-category">
                                                                        Category: <a href="#">Polo T-Shirt</a>
                                                                    </p>
                                                                </div>
                                                                <div class="aa-prod-view-bottom">
                                                                    <a href="#" class="aa-add-to-cart-btn"><span
                                                                            class="fa fa-shopping-cart"></span>Add To
                                                                        Cart</a>
                                                                    <a href="#" class="aa-add-to-cart-btn">View
                                                                        Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- / quick view modal -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / Promo section -->

        <!-- banner section -->
        <section id="aa-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="aa-banner-area">
                                <a href="#"><img src="{{ asset('assets/user/img/fashion-banner.jpg') }}"
                                        alt="fashion banner img"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- popular section -->
        <section id="aa-popular-category">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="aa-popular-category-area">
                                <!-- start prduct navigation -->
                                <ul class="nav nav-tabs aa-products-tab">
                                    <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
                                    <li><a href="#featured" data-toggle="tab">Featured</a></li>
                                    <li><a href="#latest" data-toggle="tab">Latest</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- Start men popular category -->
                                    <div class="tab-pane fade in active" id="popular">
                                        <ul class="aa-product-catg aa-popular-slider">
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a>
                                                        </h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('assets/user/img/women/girl-2.png') }}"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('assets/user/img/man/t-shirt-1.png') }}"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                </figure>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('assets/user/img/women/girl-3.png') }}"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('assets/user/img/man/polo-shirt-1.png') }}"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a>
                                                        </h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('assets/user/img/women/girl-4.png') }}"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-hot" href="#">HOT!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('assets/user/img/man/polo-shirt-4.png') }}"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a>
                                                        </h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-hot" href="#">HOT!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('assets/user/img/women/girl-1.png') }}"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">This is Title</a>
                                                        </h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                        </ul>
                                        <a class="aa-browse-btn" href="#">Browse all Product <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <!-- / popular product category -->

                                    <!-- start featured product category -->
                                    <div class="tab-pane fade" id="featured">
                                        <ul class="aa-product-catg aa-featured-slider">
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a>
                                                        </h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('assets/user/img/women/girl-2.png') }}"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('assets/user/img/man/t-shirt-1.png') }}"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                </figure>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('assets/user/img/women/girl-3.png') }}"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('assets/user/img/man/polo-shirt-1.png') }}"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a>
                                                        </h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('assets/user/img/women/girl-4.png') }}"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-hot" href="#">HOT!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('assets/user/img/man/polo-shirt-4.png') }}"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a>
                                                        </h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-hot" href="#">HOT!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('assets/user/img/women/girl-1.png') }}"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">This is Title</a>
                                                        </h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                        </ul>
                                        <a class="aa-browse-btn" href="#">Browse all Product <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <!-- / featured product category -->

                                    <!-- start latest product category -->
                                    <div class="tab-pane fade" id="latest">
                                        <ul class="aa-product-catg aa-latest-slider">
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('assets/user/img/man/polo-shirt-2.png') }}"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a>
                                                        </h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('assets/user/img/women/girl-2.png') }}"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('assets/user/img/man/t-shirt-1.png') }}"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                </figure>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('assets/user/img/women/girl-3.png') }}"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('assets/user/img/man/polo-shirt-1.png') }}"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a>
                                                        </h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('assets/user/img/women/girl-4.png') }}"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-hot" href="#">HOT!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('assets/user/img/man/polo-shirt-4.png') }}"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a>
                                                        </h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-hot" href="#">HOT!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('assets/user/img/women/girl-1.png') }}"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">This is Title</a>
                                                        </h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                        </ul>
                                        <a class="aa-browse-btn" href="#">Browse all Product <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <!-- / latest product category -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / popular section -->

        <!-- Support section -->
        <section id="aa-support">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-support-area">
                            <!-- single support -->
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="aa-support-single">
                                    <span class="fa fa-truck"></span>
                                    <h4>FREE SHIPPING</h4>
                                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                                </div>
                            </div>
                            <!-- single support -->
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="aa-support-single">
                                    <span class="fa fa-clock-o"></span>
                                    <h4>30 DAYS MONEY BACK</h4>
                                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                                </div>
                            </div>
                            <!-- single support -->
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="aa-support-single">
                                    <span class="fa fa-phone"></span>
                                    <h4>SUPPORT 24/7</h4>
                                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / Support section -->

        <!-- Client Brand -->
        <section id="aa-client-brand">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-client-brand-area">
                            <ul class="aa-client-brand-slider">
                                <li><a href="#"><img src="{{ asset('assets/user/img/client-brand-java.png') }}"
                                            alt="java img"></a></li>
                                <li><a href="#"><img src="{{ asset('assets/user/img/client-brand-jquery.png') }}"
                                            alt="jquery img"></a></li>
                                <li><a href="#"><img src="{{ asset('assets/user/img/client-brand-html5.png') }}"
                                            alt="html5 img"></a></li>
                                <li><a href="#"><img src="{{ asset('assets/user/img/client-brand-css3.png') }}"
                                            alt="css3 img"></a></li>
                                <li><a href="#"><img
                                            src="{{ asset('assets/user/img/client-brand-wordpress.png') }}"
                                            alt="wordPress img"></a></li>
                                <li><a href="#"><img src="{{ asset('assets/user/img/client-brand-joomla.png') }}"
                                            alt="joomla img"></a></li>
                                <li><a href="#"><img src="{{ asset('assets/user/img/client-brand-java.png') }}"
                                            alt="java img"></a></li>
                                <li><a href="#"><img src="{{ asset('assets/user/img/client-brand-jquery.png') }}"
                                            alt="jquery img"></a></li>
                                <li><a href="#"><img src="{{ asset('assets/user/img/client-brand-html5.png') }}"
                                            alt="html5 img"></a></li>
                                <li><a href="#"><img src="{{ asset('assets/user/img/client-brand-css3.png') }}"
                                            alt="css3 img"></a></li>
                                <li><a href="#"><img
                                            src="{{ asset('assets/user/img/client-brand-wordpress.png') }}"
                                            alt="wordPress img"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / Client Brand -->

        <!-- Subscribe section -->
        <section id="aa-subscribe">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-subscribe-area">
                            <h3>Subscribe our newsletter </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
                            <form action="" class="aa-subscribe-form">
                                <input type="email" name="" id="" placeholder="Enter your Email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / Subscribe section -->
      </body>
@endsection