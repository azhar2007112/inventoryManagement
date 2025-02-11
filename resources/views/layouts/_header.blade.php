<header class="header">
  <div class="header-top">
      <div class="container">
          <div class="header-left">
              {{-- <div class="header-dropdown">
                  <a href="#">Usd</a>
                  <div class="header-menu">
                      <ul>
                          <li><a href="#">Eur</a></li>
                          <li><a href="#">Usd</a></li>
                      </ul>
                  </div><!-- End .header-menu -->
              </div><!-- End .header-dropdown -->

              <div class="header-dropdown">
                  <a href="#">Eng</a>
                  <div class="header-menu">
                      <ul>
                          <li><a href="#">English</a></li>
                          <li><a href="#">French</a></li>
                          <li><a href="#">Spanish</a></li>
                      </ul>
                  </div><!-- End .header-menu -->
              </div><!-- End .header-dropdown --> --}}
          </div><!-- End .header-left -->

          <div class="header-right">
              <ul class="top-menu">
                  <li>
                      <a href="#">Links</a>
                      <ul>
                          <li><a href="tel:#"><i class="icon-phone"></i>Call: 00011122234</a></li>
                          <li><a href="{{url('wishlist')}}"><i class="icon-heart-o"></i>My Wishlist <span>(3)</span></a></li>
                          <li><a href="{{url('about')}}">About Us</a></li>
                          <li><a href="{{url('contact')}}">Contact Us</a></li>
                          <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li>
                      </ul>
                  </li>
              </ul><!-- End .top-menu -->
          </div><!-- End .header-right -->
      </div><!-- End .container -->
  </div><!-- End .header-top -->

  <div class="header-middle sticky-header">
      <div class="container">
          <div class="header-left">
              <button class="mobile-menu-toggler">
                  <span class="sr-only">Toggle mobile menu</span>
                  <i class="icon-bars"></i>
              </button>

              <a href="{{url('')}}" class="logo">
                  <img src="{{url('assets/images/logo.png')}}" alt="" width="105" height="25">
              </a>

              <nav class="main-nav">
                  <ul class="menu sf-arrows">
                      <li class="megamenu-container active">
                          <a href="{{url('')}}">Home</a>

                   
                      </li>
                      <li>
                          <a href="javascript:;" class="sf-with-ul">Shop</a>

                          <div class="megamenu megamenu-md">
                              <div class="row no-gutters">
                                  <div class="col-md-12">
                                      <div class="menu-col">
                                          <div class="row">
@php
    $getCategoryHeader = App\Models\CategoryModel :: getRecordMenu()
@endphp
@foreach ($getCategoryHeader as $value_h_c)
    
   @if (!empty($value_h_c->getSubCategory->count()))
                  


                                              <div class="col-md-4">
                                                  <a href="{{url($value_h_c->slug)}}" class="menu-title">{{$value_h_c->name}}</a><!-- End .menu-title -->
                                                  <ul>
                                                    @foreach ($value_h_c->getSubCategory as $value_h_sub)
                                                        
                                                    <li><a href="{{url($value_h_c->slug.'/'.$value_h_sub->slug)}}">{{$value_h_sub->name}}</a></li>

                                                    @endforeach
                                                   

                                                    
                                                  </ul>

                                                  {{-- <div class="menu-title">Shop no sidebar</div><!-- End .menu-title -->
                                                  <ul>
                                                      <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                                                      <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                                                  </ul>--}}
                                              </div><!-- End .col-md-6 --> 
                                              @endif
                                              @endforeach
                                              {{-- <div class="col-md-4">
                                                  <div class="menu-title">Product Category</div><!-- End .menu-title -->
                                                  <ul>
                                                      <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                                                      <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                                                  </ul>
                                                  <div class="menu-title">Shop Pages</div><!-- End .menu-title -->
                                                  <ul>
                                                      <li><a href="cart.html">Cart</a></li>
                                                      <li><a href="checkout.html">Checkout</a></li>
                                                      <li><a href="wishlist.html">Wishlist</a></li>
                                                      <li><a href="dashboard.html">My Account</a></li>
                                                      <li><a href="#">Lookbook</a></li>
                                                  </ul>
                                              </div><!-- End .col-md-6 --> --}}
                                          </div><!-- End .row -->
                                      </div><!-- End .menu-col -->
                                  </div><!-- End .col-md-8 -->

                                  {{-- <div class="col-md-4">
                                      <div class="banner banner-overlay">
                                          <a href="category.html" class="banner banner-menu">
                                              <img src="assets/images/menu/banner-1.jpg" alt="Banner">

                                              <div class="banner-content banner-content-top">
                                                  <div class="banner-title text-white">Last <br>Chance<br><span><strong>Sale</strong></span></div><!-- End .banner-title -->
                                              </div><!-- End .banner-content -->
                                          </a>
                                      </div><!-- End .banner banner-overlay -->
                                  </div><!-- End .col-md-4 --> --}}
                                  
                              </div><!-- End .row -->
                          </div><!-- End .megamenu megamenu-md -->
                      </li>
                      <li>
                          <a href="product.html" class="sf-with-ul">Product</a>

                          <div class="megamenu megamenu-sm">
                              <div class="row no-gutters">
                                  <div class="col-md-6">
                                      <div class="menu-col">
                                          <div class="menu-title">Product Details</div><!-- End .menu-title -->
                                          <ul>
                                              <li><a href="product.html">Default</a></li>
                                              <li><a href="product-centered.html">Centered</a></li>
                                              <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                                              <li><a href="product-gallery.html">Gallery</a></li>
                                              <li><a href="product-sticky.html">Sticky Info</a></li>
                                              <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                                              <li><a href="product-fullwidth.html">Full Width</a></li>
                                              <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                                          </ul>
                                      </div><!-- End .menu-col -->
                                  </div><!-- End .col-md-6 -->

                                  <div class="col-md-6">
                                      <div class="banner banner-overlay">
                                          <a href="category.html">
                                              <img src="{{url('assets/images/menu/banner-2.jpg')}}" alt="Banner">

                                              <div class="banner-content banner-content-bottom">
                                                  <div class="banner-title text-white">New Trends<br><span><strong>spring 2019</strong></span></div><!-- End .banner-title -->
                                              </div><!-- End .banner-content -->
                                          </a>
                                      </div><!-- End .banner -->
                                  </div><!-- End .col-md-6 -->
                              </div><!-- End .row -->
                          </div><!-- End .megamenu megamenu-sm -->
                      </li>
                      {{-- <li>
                          <a href="#" class="sf-with-ul">Pages</a>

                          <ul>
                              <li>
                                  <a href="about.html" class="sf-with-ul">About</a>

                                  <ul>
                                      <li><a href="about.html">About 01</a></li>
                                      <li><a href="about-2.html">About 02</a></li>
                                  </ul>
                              </li>
                              <li>
                                  <a href="contact.html" class="sf-with-ul">Contact</a>

                                  <ul>
                                      <li><a href="contact.html">Contact 01</a></li>
                                      <li><a href="contact-2.html">Contact 02</a></li>
                                  </ul>
                              </li>
                              <li><a href="login.html">Login</a></li>
                              <li><a href="faq.html">FAQs</a></li>
                              <li><a href="404.html">Error 404</a></li>
                              <li><a href="coming-soon.html">Coming Soon</a></li>
                          </ul>
                      </li>
                      <li>
                          <a href="blog.html" class="sf-with-ul">Blog</a>

                          <ul>
                              <li><a href="blog.html">Classic</a></li>
                              <li><a href="blog-listing.html">Listing</a></li>
                              <li>
                                  <a href="#">Grid</a>
                                  <ul>
                                      <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                      <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                      <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                      <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                  </ul>
                              </li>
                              <li>
                                  <a href="#">Masonry</a>
                                  <ul>
                                      <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                      <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                      <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                      <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                  </ul>
                              </li>
                              <li>
                                  <a href="#">Mask</a>
                                  <ul>
                                      <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                      <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                  </ul>
                              </li>
                              <li>
                                  <a href="#">Single Post</a>
                                  <ul>
                                      <li><a href="single.html">Default with sidebar</a></li>
                                      <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                      <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                      <li>
                          <a href="elements-list.html" class="sf-with-ul">Elements</a>

                          <ul>
                              <li><a href="elements-products.html">Products</a></li>
                              <li><a href="elements-typography.html">Typography</a></li>
                              <li><a href="elements-titles.html">Titles</a></li>
                              <li><a href="elements-banners.html">Banners</a></li>
                              <li><a href="elements-product-category.html">Product Category</a></li>
                              <li><a href="elements-video-banners.html">Video Banners</a></li>
                              <li><a href="elements-buttons.html">Buttons</a></li>
                              <li><a href="elements-accordions.html">Accordions</a></li>
                              <li><a href="elements-tabs.html">Tabs</a></li>
                              <li><a href="elements-testimonials.html">Testimonials</a></li>
                              <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                              <li><a href="elements-portfolio.html">Portfolio</a></li>
                              <li><a href="elements-cta.html">Call to Action</a></li>
                              <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                          </ul>
                      </li> --}}
                  </ul><!-- End .menu -->
              </nav><!-- End .main-nav -->
          </div><!-- End .header-left -->

          <div class="header-right">
              <div class="header-search">
                  <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                  <form action="{{ route('product.search') }}" method="post">
                    @csrf
                      <div class="header-search-wrapper">
                          <label for="q" class="sr-only">Search</label>
                          <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." value="{{!empty(Request::get('q')) ? Request::get('q') : ''}}" required>
                      </div><!-- End .header-search-wrapper -->
                  </form>
              </div><!-- End .header-search -->

              <div class="dropdown cart-dropdown">
                  <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                      <i class="icon-shopping-cart"></i>
                      <span class="cart-count">{{Cart::getContent()->count()}}</span>
                  </a>

                  @if(!empty(Cart::getContent()->count()))
                  <div class="dropdown-menu dropdown-menu-right">
                      <div class="dropdown-cart-products">
                        @foreach (Cart::getContent() as $header_cart)

@php
$getCartProduct = App\Models\ProductModel::getSingle($header_cart->id)  ;

    
@endphp
@if(!empty($getCartProduct))
@php

    $getProductImage = $getCartProduct->getImageSingle($getCartProduct->id);
    
@endphp
                        <div class="product">
                            <div class="product-cart-details">
                                <h4 class="product-title">
                                    <a href="{{url($getCartProduct->slug)}}">{{ $header_cart->id }}
                                    {{$getCartProduct->title}}</a>
                                </h4>
                                <span class="cart-product-info">
                                    <span class="cart-product-qty">{{ $header_cart->quantity }}</span>
                                    x ${{ number_format($header_cart->price,2) }}
                                </span>
                            </div><!-- End .product-cart-details -->
                            <figure class="product-image-container">
                                <a href="{{url($getCartProduct->slug)}}" class="product-image">
                                    <img src="{{ $getProductImage->getLogo() }}" alt="product">
                                </a>
                            </figure>
                            <a href="{{url('cart/delete/'.$header_cart->id)}}" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                        </div><!-- End .product -->
                        @endif
                        @endforeach

                     
                      </div><!-- End .cart-product -->

                      <div class="dropdown-cart-total">
                          <span>Total</span>

                          <span class="cart-total-price">${{number_format(Cart::getSubTotal(),2)}}</span>
                      </div><!-- End .dropdown-cart-total -->

                      <div class="dropdown-cart-action">
                        <a href="cart" class="btn btn-primary">View Cart</a>


                          <a href="{{url('checkout')}}" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                      </div><!-- End .dropdown-cart-total -->
                  </div><!-- End .dropdown-menu -->
                  @endif
              </div><!-- End .cart-dropdown -->
          </div><!-- End .header-right -->
      </div><!-- End .container -->
  </div><!-- End .header-middle -->
</header><!-- End .header -->