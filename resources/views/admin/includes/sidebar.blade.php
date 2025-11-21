  <aside class="left-sidebar sidebar-dark" id="left-sidebar">
      <div id="sidebar" class="sidebar sidebar-with-footer">
          <!-- Aplication Brand -->
          <div class="app-brand">
              <a href="/index.html">
                  <img src="{{ asset('assets/admin/images/logo/kharidoBey.png') }}" alt="Mono">
              </a>
          </div>
          <!-- begin sidebar scrollbar -->
          <div class="sidebar-left" data-simplebar style="height: 100%;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">

                  <li>
                      <a class="sidenav-item-link" href="{{ route('dashboard') }}">
                          <i class="mdi mdi-chart-line"></i>
                          <span class="nav-text">Dashboard</span>
                      </a>
                  </li>

                
                  <li class="has-sub">
                      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#category"
                          aria-expanded="false" aria-controls="category">
                          <i class="mdi mdi-image-filter-none"></i>
                          <span class="nav-text">Category</span> <b class="caret"></b>
                      </a>
                      <ul class="collapse" id="category" data-parent="#sidebar-menu">
                          <div class="sub-menu">

                              <li>
                                  <a class="sidenav-item-link" href="{{ route('categories') }}">
                                      <span class="nav-text">Categories</span>

                                  </a>
                              </li>
                              <li>
                                  <a class="sidenav-item-link" href="{{ route('categories.add') }}">
                                      <span class="nav-text">Add Categories</span>

                                  </a>
                              </li>

                          </div>
                      </ul>
                  </li>

                  <li class="has-sub">
                      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                          data-target="#subcategories" aria-expanded="false" aria-controls="subcategories">
                          <i class="mdi mdi-account"></i>
                          <span class="nav-text">Subcategory</span> <b class="caret"></b>
                      </a>
                      <ul class="collapse" id="subcategories" data-parent="#sidebar-menu">
                          <div class="sub-menu">

                              <li>
                                  <a class="sidenav-item-link" href="{{ route('sub_categories') }}">
                                      <span class="nav-text">Subcategories</span>

                                  </a>
                              </li>

                            </div>
                      </ul>
                  </li>





                  <li class="has-sub">
                      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                          data-target="#products" aria-expanded="false" aria-controls="products">
                          <i class="mdi mdi-file-multiple"></i>
                          <span class="nav-text">Products</span> <b class="caret"></b>
                      </a>
                      <ul class="collapse" id="products" data-parent="#sidebar-menu">
                          <div class="sub-menu">


                              <li>
                                  <a class="sidenav-item-link" href="{{ route('products') }}">
                                      <span class="nav-text">Products</span>

                                  </a>
                              </li>

                          </div>
                      </ul>
                  </li>

                  <li class="has-sub">
                      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                          data-target="#brand" aria-expanded="false" aria-controls="brand">
                          <i class="mdi mdi-file-multiple"></i>
                          <span class="nav-text">Brands</span> <b class="caret"></b>
                      </a>
                      <ul class="collapse" id="brand" data-parent="#sidebar-menu">
                          <div class="sub-menu">


                              <li>
                                  <a class="sidenav-item-link" href="{{ route('brands') }}">
                                      <span class="nav-text">Brands</span>

                                  </a>
                              </li>

                          </div>
                      </ul>
                  </li>





                  <li class="section-title">
                      Documentation
                  </li>





                  <li>
                      <a class="sidenav-item-link" href="getting-started.html">
                          <i class="mdi mdi-airplane"></i>
                          <span class="nav-text">Getting Started</span>
                      </a>
                  </li>





                  <li class="has-sub">
                      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                          data-target="#customization" aria-expanded="false" aria-controls="customization">
                          <i class="mdi mdi-square-edit-outline"></i>
                          <span class="nav-text">Customization</span> <b class="caret"></b>
                      </a>
                      <ul class="collapse" id="customization" data-parent="#sidebar-menu">
                          <div class="sub-menu">



                              <li>
                                  <a class="sidenav-item-link" href="navbar-customization.html">
                                      <span class="nav-text">Navbar</span>

                                  </a>
                              </li>






                              <li>
                                  <a class="sidenav-item-link" href="sidebar-customization.html">
                                      <span class="nav-text">Sidebar</span>

                                  </a>
                              </li>






                              <li>
                                  <a class="sidenav-item-link" href="styling.html">
                                      <span class="nav-text">Styling</span>

                                  </a>
                              </li>




                          </div>
                      </ul>
                  </li>



              </ul>

          </div>

          <div class="sidebar-footer">
              <div class="sidebar-footer-content">
                  <ul class="d-flex">
                      <li>
                          <a href="user-account-settings.html" data-toggle="tooltip" title="Profile settings"><i
                                  class="mdi mdi-settings"></i></a>
                      </li>
                      <li>
                          <a href="#" data-toggle="tooltip" title="No chat messages"><i
                                  class="mdi mdi-chat-processing"></i></a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </aside>