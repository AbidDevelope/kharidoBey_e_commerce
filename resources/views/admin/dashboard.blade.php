@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row">
            <div class="col-xxl-3 col-sm-6 col-12">
                <div class="stats-tile">
                    <div class="sale-icon-bdr">
                        <i class="bi bi-pie-chart"></i>
                    </div>
                    <div class="sale-details">
                        <h5>Products</h5>
                        <h3 class="text-blue">2,567</h3>
                        <p class="growth text-blue">Increased 21%</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6 col-12">
                <div class="stats-tile">
                    <div class="sale-icon-bdr">
                        <i class="bi bi-emoji-smile"></i>
                    </div>
                    <div class="sale-details">
                        <h5>Orders</h5>
                        <h3 class="text-blue">4,972</h3>
                        <p class="growth text-blue">Increased 12%</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6 col-12">
                <div class="stats-tile">
                    <div class="sale-icon-bdr">
                        <i class="bi bi-box-seam"></i>
                    </div>
                    <div class="sale-details">
                        <h5>Revenue</h5>
                        <h3 class="text-blue">$65,950</h3>
                        <p class="growth text-red">Decreased 7%</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6 col-12">
                <div class="stats-tile">
                    <div class="sale-icon-bdr green">
                        <i class="bi bi-handbag"></i>
                    </div>
                    <div class="sale-details">
                        <h5>Customers</h5>
                        <h3 class="text-green">3,287</h3>
                        <p class="growth text-blue">Increased 18%</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->

        <!-- Row start -->
        <div class="row">
            <div class="col-xxl-9 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Orders &amp; Revenue</div>
                    </div>
                    <div class="card-body">
                        <div id="ordersVisits"></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Visitors</div>
                    </div>
                    <div class="card-body">
                        <div id="visitors"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->

        <!-- Row start -->
        <div class="row">
            <div class="col-xxl-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">

                        <!-- Row start -->
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <div class="stats-tile2-container">
                                    <div class="stats-tile2">
                                        <div class="sale-icon">
                                            <i class="bi bi-pie-chart text-blue"></i>
                                        </div>
                                        <div class="sale-details">
                                            <h5>Current Customers</h5>
                                            <p class="growth">Active 74%</p>
                                        </div>
                                    </div>
                                    <div class="stats-tile2">
                                        <div class="sale-icon">
                                            <i class="bi bi-pie-chart text-green"></i>
                                        </div>
                                        <div class="sale-details">
                                            <h5>New Customers</h5>
                                            <p class="growth">Increased 21%</p>
                                        </div>
                                    </div>
                                    <div class="stats-tile2">
                                        <div class="sale-icon">
                                            <i class="bi bi-pie-chart text-red"></i>
                                        </div>
                                        <div class="sale-details">
                                            <h5>Targeted Customers</h5>
                                            <p class="growth ">Increased 38%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div id="customers"></div>
                            </div>
                        </div>
                        <!-- Row end -->

                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Logs</div>
                    </div>
                    <div class="card-body">
                        <div class="scroll300">
                            <div class="logs">
                                <div class="log-list">
                                    <div class="log-dot"></div>
                                    <div class="log-title">New item sold</div>
                                    <div class="log-time">10:10</div>
                                </div>
                                <div class="log-list">
                                    <div class="log-dot yellow"></div>
                                    <div class="log-title">Notification from bank</div>
                                    <div class="log-time">05:25</div>
                                </div>
                                <div class="log-list">
                                    <div class="log-dot"></div>
                                    <div class="log-title">Transaction success alert</div>
                                    <div class="log-time">09:45</div>
                                </div>
                                <div class="log-list">
                                    <div class="log-dot red"></div>
                                    <div class="log-title">Your item has been updated</div>
                                    <div class="log-time">06:50</div>
                                </div>
                                <div class="log-list">
                                    <div class="log-dot green"></div>
                                    <div class="log-title">New order</div>
                                    <div class="log-time">12:30</div>
                                </div>
                                <div class="log-list">
                                    <div class="log-dot yellow"></div>
                                    <div class="log-title">Item bought</div>
                                    <div class="log-time">04:22</div>
                                </div>
                                <div class="log-list">
                                    <div class="log-dot"></div>
                                    <div class="log-title">New sale: Messi Wills</div>
                                    <div class="log-time">10:10</div>
                                </div>
                                <div class="log-list">
                                    <div class="log-dot red"></div>
                                    <div class="log-title">Order received</div>
                                    <div class="log-time">12:55</div>
                                </div>
                                <div class="log-list">
                                    <div class="log-dot green"></div>
                                    <div class="log-title">Service information</div>
                                    <div class="log-time">09:12</div>
                                </div>
                                <div class="log-list">
                                    <div class="log-dot"></div>
                                    <div class="log-title">Message from Wilson</div>
                                    <div class="log-time">09:27</div>
                                </div>
                                <div class="log-list">
                                    <div class="log-dot red"></div>
                                    <div class="log-title">New item sale: Joy Root</div>
                                    <div class="log-time">02:39</div>
                                </div>
                                <div class="log-list">
                                    <div class="log-dot"></div>
                                    <div class="log-title">Product update</div>
                                    <div class="log-time">08:22</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Keywords</div>
                    </div>
                    <div class="card-body">
                        <div id="tagscloud">
                            <a href="analytics.html" class="tagc1">Analytics</a>
                            <a href="tasks-html" class="tagc2">Tasks</a>
                            <a href="index.html" class="tagc3">Sales</a>
                            <a href="#" class="tagc4">Bootstrap</a>
                            <a href="#" class="tagc1">Scss</a>
                            <a href="#" class="tagc2">Bootstrap</a>
                            <a href="index.html" class="tagc3">Admin</a>
                            <a href="index.html" class="tagc4">Dashboard</a>
                            <a href="#" class="tagc1">Creative</a>
                            <a href="#" class="tagc2">Rising Stars</a>
                            <a href="analytics.html" class="tagc3">BS Admin</a>
                            <a href="#" class="tagc4">Top Rated</a>
                            <a href="#" class="tagc1">Admin</a>
                            <a href="#" class="tagc2">Creative</a>
                            <a href="#" class="tagc3">Best Selling</a>
                            <a href="#" class="tagc4">Awesome</a>
                            <a href="#" class="tagc1">jQuery</a>
                            <a href="#" class="tagc2">Hot Under $19</a>
                            <a href="tasks.html" class="tagc3">High</a>
                            <a href="#" class="tagc4">Low Price</a>
                            <a href="#" class="tagc1">Top Selling</a>
                            <a href="index.html" class="tagc2">Best Admin</a>
                            <a href="#" class="tagc3">Popular</a>
                            <a href="#" class="tagc1">Best Sellers</a>
                            <a href="ecommerce.html" class="tagc2">eCommerce</a>
                            <a href="analytics.html" class="tagc3">Analytics</a>
                            <a href="#" class="tagc4">Rising Stars</a>
                            <a href="tasks.html" class="tagc1">Crm</a>
                            <a href="#" class="tagc2">Sass</a>
                            <a href="#" class="tagc3">Template Monster</a>
                            <a href="index.html" class="tagc4">Dashboard</a>
                            <a href="#" class="tagc1">Admin</a>
                            <a href="analytics.html" class="tagc2">Creative</a>
                            <a href="#" class="tagc3">Template Monster</a>
                            <a href="#" class="tagc4">Theme</a>
                            <a href="#" class="tagc1">Dashboard</a>
                            <a href="#" class="tagc2">Rising stars</a>
                            <a href="#" class="tagc3">Template</a>
                            <a href="ecommerce.html" class="tagc4">Top Rated</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->

        <!-- Row start -->
        <div class="row">
            <div class="col-xxl-8 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Earnings</div>
                    </div>
                    <div class="card-body">
                        <!-- Row start -->
                        <div class="row">
                            <div class="col-sm-7 col-12">
                                <div id="world-map-markers2" class="chart-height"></div>
                            </div>
                            <div class="col-sm-5 col-12">
                                <div class="global-sales">
                                    <h3><i class="bi bi-globe icon"></i>$2,75,000 <i
                                            class="bi bi-arrow-up-right text-green"></i>
                                    </h3>
                                    <p>This dashboard unquestionably the largest visitors in the world with TWO million
                                        monthly
                                        active users and ONE million daily active.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Row end -->
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Top Items Sold</div>
                    </div>
                    <div class="card-body">
                        <div class="scroll250">
                            <ul class="recent-orders">
                                <li>
                                    <div class="order-img">
                                        <img src="{{ asset('assets/admin/images/food/img1.jpg') }}"
                                            alt="Bootstrap Gallery">
                                        <span class="badge shade-green">700 Sold</span>
                                    </div>
                                    <div class="order-details">
                                        <h5 class="order-title">The Original Creamy Pasta</h5>
                                        <p class="order-desc">Wedding cake with Macarons.</p>
                                        <p class="order-revenue">Revenue: <span>$35,650.00</span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="order-img">
                                        <img src="{{ asset('assets/admin/images/food/img3.jpg') }}"
                                            alt="Bootstrap Gallery">
                                        <span class="badge shade-red">650 Sold</span>
                                    </div>
                                    <div class="order-details">
                                        <h5 class="order-title">Shredded Sprout Salad</h5>
                                        <p class="order-desc">A mix of jammy roasted cherry tomatoes</p>
                                        <p class="order-revenue">Revenue: <span>$32,109.00</span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="order-img">
                                        <img src="{{ asset('assets/admin/images/food/img4.jpg') }}"
                                            alt="Bootstrap Gallery">
                                        <span class="badge shade-green">500 Sold</span>
                                    </div>
                                    <div class="order-details">
                                        <h5 class="order-title">Double Stacker</h5>
                                        <p class="order-desc">Homemade cheese with green veggies and avocado.</p>
                                        <p class="order-revenue">Revenue: <span>$27,201.00</span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="order-img">
                                        <img src="{{ asset('assets/admin/images/food/img5.jpg') }}"
                                            alt="Bootstrap Gallery">
                                        <span class="badge shade-green">410 Sold</span>
                                    </div>
                                    <div class="order-details">
                                        <h5 class="order-title">Veggie Burger</h5>
                                        <p class="order-desc">A combination of corn, Cotija, and cilantro.</p>
                                        <p class="order-revenue">Revenue: <span>$22,352.00</span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="order-img">
                                        <img src="{{ asset('assets/admin/images/food/img6.jpg') }}"
                                            alt="Bootstrap Gallery">
                                        <span class="badge shade-red">370 Sold</span>
                                    </div>
                                    <div class="order-details">
                                        <h5 class="order-title">Teriyaki Burger</h5>
                                        <p class="order-desc">Juicy peaches, tomatoes, crisp corn, and fresh basil.</p>
                                        <p class="order-revenue">Revenue: <span>$18,485.00</span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="order-img">
                                        <img src="{{ asset('assets/admin/images/food/img2.jpg') }}"
                                            alt="Bootstrap Gallery">
                                        <span class="badge shade-green">220 Sold</span>
                                    </div>
                                    <div class="order-details">
                                        <h5 class="order-title">Smoque Bistro</h5>
                                        <p class="order-desc">Mix of gastropub style food,such as BBQ meat nachos.</p>
                                        <p class="order-revenue">Revenue: <span>$14,123.00</span></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->
    </div>

    <!-- **
       ************ Required JavaScript Files *************
      ** -->


    <!-- **
       ************ Vendor Js Files *************
      ** -->

    <!-- Overlay Scroll JS -->
    <script src="{{ asset('assets/admin/vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/overlay-scroll/custom-scrollbar.js') }}"></script>

    <!-- Apex Charts -->
    <script src="{{ asset('assets/admin/vendor/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/apex/custom/ecommerce/orders-visits.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/apex/custom/ecommerce/visitors.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/apex/custom/ecommerce/customers.js') }}"></script>

    <!-- jQcloud Keywords -->
    <script src="{{ asset('assets/admin/vendor/tagsCloud/tagsCloud.js') }}"></script>

    <!-- Vector Maps -->
    <script src="{{ asset('assets/admin/vendor/jvectormap/jquery-jvectormap-2.0.5.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/jvectormap/world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/jvectormap/gdp-data.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/jvectormap/custom/world-map-markers.js') }}"></script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
@endsection
