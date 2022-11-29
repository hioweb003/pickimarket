@extends('layouts.forntend')
  @section('title')
  PickiMarket | Online Shopping for Computers, Laptops, Phones, Accessories &amp; More
  @endsection
  @section('fcontent')
		<main class="main shop">
			<div class="page-content mb-10">
				<div class="container">
					<ul class="breadcrumb breadcrumb-sm">
						<li><a href="{{url('/')}}"><i class="d-icon-home"></i></a></li>
						<li>Shop</li>
					</ul>
					<!-- End Breadcrumb -->
					<div class="row main-content-wrap gutter-lg">
						<aside class="col-lg-3 sidebar sidebar-fixed shop-sidebar sticky-sidebar-wrapper">
							<div class="sidebar-overlay">
								<a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
							</div>
							<div class="sidebar-content">
								<div class="sticky-sidebar">
									<div class="widget widget-collapsible">
										<h3 class="widget-title">All Categories</h3>
										<ul class="widget-body filter-items search-ul">
											<li><a href="#">Bags</a></li>
											<li><a href="#">Sport Shorts</a></li>
											<li class="with-ul show">
												<a href="#">Clothing</a>
												<ul style="display: block">
													<li><a href="#">Summer sale</a></li>
													<li><a href="#">Shirts</a></li>
													<li><a href="#">Trunks</a></li>
												</ul>
											</li>
											<li><a href="#">Shoes</a></li>
											<li class="with-ul">
												<a href="#">Sweaters</a>
												<ul>
													<li><a href="#">T-Shirts</a></li>
													<li><a href="#">Dress</a></li>
													<li><a href="#">Blouse</a></li>
												</ul>
											</li>
											<li class="with-ul">
												<a href="#">Fashion</a>
												<ul>
													<li><a href="#">Trousers</a></li>
													<li><a href="#">Jacket</a></li>
													<li><a href="#">Caps</a></li>
												</ul>
											</li>
											<li class="with-ul">
												<a href="#">Women</a>
												<ul>
													<li><a href="#">Summer sales</a></li>
													<li><a href="#">Shirts</a></li>
													<li><a href="#">Trunks</a></li>
												</ul>
											</li>
										</ul>
									</div>
									<div class="widget widget-collapsible">
										<h3 class="widget-title">Price</h3>
										<div class="widget-body">
											<form action="#">
												<div class="filter-price-slider"></div>

												<div class="filter-actions">
													<div class="filter-price-text mb-4">Price:
														<span class="filter-price-range"></span>
													</div>

													<button type="submit" class="btn btn-sm btn-dark">Filter</button>
												</div>
											</form><!-- End Filter Price Form -->
										</div>
									</div>
									<div class="widget widget-collapsible">
										<h3 class="widget-title">Size</h3>
										<ul class="widget-body filter-items">
											<li><a href="#">Small<span>(2)</span></a></li>
											<li><a href="#">Medium<span>(1)</span></a></li>
											<li><a href="#">Large<span>(9)</span></a></li>
											<li><a href="#">Extra Large<span>(1)</span></a></li>
										</ul>
									</div>
									<div class="widget widget-collapsible">
										<h3 class="widget-title">Color</h3>
										<ul class="widget-body filter-items">
											<li><a href="#">Black<span>(2)</span></a></li>
											<li><a href="#">Blue<span>(1)</span></a></li>
											<li><a href="#">Green<span>(9)</span></a></li>
										</ul>
									</div>
									<div class="widget widget-collapsible">
										<h3 class="widget-title">Brands</h3>
										<ul class="widget-body filter-items">
											<li><a href="#">Black<span>(2)</span></a></li>
											<li><a href="#">Blue<span>(1)</span></a></li>
											<li><a href="#">Green<span>(9)</span></a></li>
										</ul>
									</div>
									<div class="widget widget-products">
										<h4 class="widget-title mb-3 lh-1 border-no text-capitalize ">Our Featured</h4>
										<div class="widget-body">
											<div class="owl-carousel owl-nav-top" data-owl-options="{
												'items': 1,
												'nav': true,
												'dots': false,
												'margin': 20											
											}">
												<div class="products-col">
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.html">
																<img src="images/shop/product-widget1.jpg" alt="product"
																	width="100" height="114">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.html">Fashionable Orginal
																	Trucker</a>
															</h3>
															<div class="product-price">
																<span class="price">$78.64</span>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:40%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.html">
																<img src="images/shop/product-widget2.jpg" alt="product"
																	width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.html">Men Summer Sneaker</a>
															</h3>
															<div class="product-price">
																<span class="price">$79.45</span>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:60%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.html">
																<img src="images/shop/product-widget3.jpg" alt="product"
																	width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.html">Season Sports Cap</a>
															</h3>
															<div class="product-price">
																<span class="price">$64.27</span>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:20%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
												</div><!-- End Products Col -->
												<div class="products-col">
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.html">
																<img src="images/shop/product-widget1.jpg" alt="product"
																	width="100" height="114">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.html">Fashionable Orginal
																	Trucker</a>
															</h3>
															<div class="product-price">
																<span class="price">$78.64</span>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:40%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.html">
																<img src="images/shop/product-widget2.jpg" alt="product"
																	width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.html">Men Summer Sneaker</a>
															</h3>
															<div class="product-price">
																<span class="price">$79.45</span>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:60%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.html">
																<img src="images/shop/product-widget3.jpg" alt="product"
																	width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.html">Season Sports Cap</a>
															</h3>
															<div class="product-price">
																<span class="price">$64.27</span>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:20%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
												</div><!-- End Products Col -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</aside>
						<div class="col-lg-9 main-content">
							<div class="shop-banner-default banner"
								style="background-image: url('images/demos/demo29/shop-banner.jpg'); background-color: #f2f2f3;">
								<div class="banner-content">
									<h4 class="banner-subtitle mb-2 text-body text-uppercase ls-m font-weight-normal">
										Riode Shop</h4>
									<h1 class="banner-title font-weight-normal text-uppercase ls-normal mb-4"><strong
											class="ls-m">Banner</strong> With<br /> Sidebar</h1>
									<p class="font-primary lh-1 ls-m mb-0" style="font-size: 1.6rem;">Simple and Fresh
										ShopStyle</p>
								</div>
							</div>
							<nav class="toolbox sticky-toolbox sticky-content fix-top">
								<div class="toolbox-left">
									<a href="#"
										class="toolbox-item left-sidebar-toggle btn btn-sm btn-outline btn-primary d-lg-none">Filters<i
											class="d-icon-arrow-right"></i></a>
									<div class="toolbox-item toolbox-sort select-box">
										<label>Sort By :</label>
										<select name="orderby" class="form-control">
											<option value="default">Default</option>
											<option value="popularity" selected="selected">Most Popular</option>
											<option value="rating">Average rating</option>
											<option value="date">Latest</option>
											<option value="price-low">Sort forward price low</option>
											<option value="price-high">Sort forward price high</option>
											<option value="">Clear custom sort</option>
										</select>
									</div>
								</div>
								<div class="toolbox-right">
									<div class="toolbox-item toolbox-show select-box">
										<label>Show :</label>
										<select name="count" class="form-control">
											<option value="12">12</option>
											<option value="24">24</option>
											<option value="36">36</option>
										</select>
									</div>
									<div class="toolbox-item toolbox-layout">
										<a href="shop-list.html" class="d-icon-mode-list btn-layout"></a>
										<a href="shop.html" class="d-icon-mode-grid btn-layout active"></a>
									</div>
								</div>
							</nav>
							<div class="row cols-2 cols-sm-3 cols-md-4 product-wrapper">
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media">
											<a href="demo29-product.html">
												<img src="images/demos/demo29/shop/1.jpg" alt="product" width="280"
													height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
												<a href="#" class="btn-product-icon btn-compare"
													title="Add to compare"><i class="d-icon-compare"></i></a>
											</div>
											<div class="product-action">
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="shop.html">categories</a>
											</div>
											<h3 class="product-name">
												<a href="demo29-product.html">Sports Watch</a>
											</h3>
											<div class="product-price">
												<ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="product.html" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center product-variable">
										<figure class="product-media">
											<a href="demo29-product.html">
												<img src="images/demos/demo29/shop/2.jpg" alt="product" width="280"
													height="315">
											</a>
											<div class="product-action-vertical">
												<a href="demo29-product.html" class="btn-product-icon btn-cart"
													title="Select Options"><i class="d-icon-arrow-right"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
												<a href="#" class="btn-product-icon btn-compare"
													title="Add to compare"><i class="d-icon-compare"></i></a>
											</div>
											<div class="product-action">
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="shop.html">categories</a>
											</div>
											<h3 class="product-name">
												<a href="demo29-product.html">Apple Sports Watch</a>
											</h3>
											<div class="product-price">
												<ins class="new-price">$199.00-$210.00</ins>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="product.html" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media">
											<a href="demo29-product.html">
												<img src="images/demos/demo29/shop/3.jpg" alt="product" width="280"
													height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
												<a href="#" class="btn-product-icon btn-compare"
													title="Add to compare"><i class="d-icon-compare"></i></a>
											</div>
											<div class="product-action">
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="shop.html">categories</a>
											</div>
											<h3 class="product-name">
												<a href="demo29-product.html">Fashion Bluetooth Speaker</a>
											</h3>
											<div class="product-price">
												<ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="product.html" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media">
											<a href="demo29-product.html">
												<img src="images/demos/demo29/shop/4.jpg" alt="product" width="280"
													height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
												<a href="#" class="btn-product-icon btn-compare"
													title="Add to compare"><i class="d-icon-compare"></i></a>
											</div>
											<div class="product-action">
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="shop.html">categories</a>
											</div>
											<h3 class="product-name">
												<a href="demo29-product.html">Galaxy Tablet 7 inchi</a>
											</h3>
											<div class="product-price">
												<ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="product.html" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media">
											<a href="demo29-product.html">
												<img src="images/demos/demo29/shop/5.jpg" alt="product" width="280"
													height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
												<a href="#" class="btn-product-icon btn-compare"
													title="Add to compare"><i class="d-icon-compare"></i></a>
											</div>
											<div class="product-action">
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="shop.html">categories</a>
											</div>
											<h3 class="product-name">
												<a href="demo29-product.html">iPad</a>
											</h3>
											<div class="product-price">
												<ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="product.html" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media">
											<a href="demo29-product.html">
												<img src="images/demos/demo29/shop/6.jpg" alt="product" width="280"
													height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
												<a href="#" class="btn-product-icon btn-compare"
													title="Add to compare"><i class="d-icon-compare"></i></a>
											</div>
											<div class="product-action">
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="shop.html">categories</a>
											</div>
											<h3 class="product-name">
												<a href="demo29-product.html">Apple Sports Watch</a>
											</h3>
											<div class="product-price">
												<ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="product.html" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media">
											<a href="demo29-product.html">
												<img src="images/demos/demo29/shop/7.jpg" alt="product" width="280"
													height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
												<a href="#" class="btn-product-icon btn-compare"
													title="Add to compare"><i class="d-icon-compare"></i></a>
											</div>
											<div class="product-action">
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="shop.html">categories</a>
											</div>
											<h3 class="product-name">
												<a href="demo29-product.html">Huawei Smart Phone</a>
											</h3>
											<div class="product-price">
												<ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="product.html" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center product-variable">
										<figure class="product-media">
											<a href="demo29-product.html">
												<img src="images/demos/demo29/shop/8.jpg" alt="product" width="280"
													height="315">
											</a>
											<div class="product-action-vertical">
												<a href="demo29-product.html" class="btn-product-icon btn-cart"
													title="Select Options"><i class="d-icon-arrow-right"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
												<a href="#" class="btn-product-icon btn-compare"
													title="Add to compare"><i class="d-icon-compare"></i></a>
											</div>
											<div class="product-action">
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="shop.html">categories</a>
											</div>
											<h3 class="product-name">
												<a href="demo29-product.html">XBox Gaming Pad</a>
											</h3>
											<div class="product-price">
												<ins class="new-price">$199.00-$210.00</ins>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="product.html" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media">
											<a href="demo29-product.html">
												<img src="images/demos/demo29/shop/9.jpg" alt="product" width="280"
													height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
												<a href="#" class="btn-product-icon btn-compare"
													title="Add to compare"><i class="d-icon-compare"></i></a>
											</div>
											<div class="product-action">
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="shop.html">categories</a>
											</div>
											<h3 class="product-name">
												<a href="demo29-product.html">Electronic Roaster</a>
											</h3>
											<div class="product-price">
												<ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="product.html" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media">
											<a href="demo29-product.html">
												<img src="images/demos/demo29/shop/10.jpg" alt="product" width="280"
													height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
												<a href="#" class="btn-product-icon btn-compare"
													title="Add to compare"><i class="d-icon-compare"></i></a>
											</div>
											<div class="product-action">
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="shop.html">categories</a>
											</div>
											<h3 class="product-name">
												<a href="demo29-product.html">Electornic Mixer</a>
											</h3>
											<div class="product-price">
												<ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="product.html" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media">
											<a href="demo29-product.html">
												<img src="images/demos/demo29/shop/11.jpg" alt="product" width="280"
													height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
												<a href="#" class="btn-product-icon btn-compare"
													title="Add to compare"><i class="d-icon-compare"></i></a>
											</div>
											<div class="product-action">
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="shop.html">categories</a>
											</div>
											<h3 class="product-name">
												<a href="demo29-product.html">Electronic Pulverizer</a>
											</h3>
											<div class="product-price">
												<ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="product.html" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media">
											<a href="demo29-product.html">
												<img src="images/demos/demo29/shop/12.jpg" alt="product" width="280"
													height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
												<a href="#" class="btn-product-icon btn-compare"
													title="Add to compare"><i class="d-icon-compare"></i></a>
											</div>
											<div class="product-action">
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="shop.html">categories</a>
											</div>
											<h3 class="product-name">
												<a href="demo29-product.html">Electronic Pulverizer</a>
											</h3>
											<div class="product-price">
												<ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="product.html" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media">
											<a href="demo29-product.html">
												<img src="images/demos/demo29/shop/1.jpg" alt="product" width="280"
													height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
												<a href="#" class="btn-product-icon btn-compare"
													title="Add to compare"><i class="d-icon-compare"></i></a>
											</div>
											<div class="product-action">
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="shop.html">categories</a>
											</div>
											<h3 class="product-name">
												<a href="demo29-product.html">Sports Watch</a>
											</h3>
											<div class="product-price">
												<ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="product.html" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center product-variable">
										<figure class="product-media">
											<a href="demo29-product.html">
												<img src="images/demos/demo29/shop/2.jpg" alt="product" width="280"
													height="315">
											</a>
											<div class="product-action-vertical">
												<a href="demo29-product.html" class="btn-product-icon btn-cart"
													title="Select Options"><i class="d-icon-arrow-right"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
												<a href="#" class="btn-product-icon btn-compare"
													title="Add to compare"><i class="d-icon-compare"></i></a>
											</div>
											<div class="product-action">
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="shop.html">categories</a>
											</div>
											<h3 class="product-name">
												<a href="demo29-product.html">Apple Sports Watch</a>
											</h3>
											<div class="product-price">
												<ins class="new-price">$199.00-$210.00</ins>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="product.html" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media">
											<a href="demo29-product.html">
												<img src="images/demos/demo29/shop/3.jpg" alt="product" width="280"
													height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
												<a href="#" class="btn-product-icon btn-compare"
													title="Add to compare"><i class="d-icon-compare"></i></a>
											</div>
											<div class="product-action">
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="shop.html">categories</a>
											</div>
											<h3 class="product-name">
												<a href="demo29-product.html">Fashion Bluetooth Speaker</a>
											</h3>
											<div class="product-price">
												<ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="product.html" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media">
											<a href="demo29-product.html">
												<img src="images/demos/demo29/shop/4.jpg" alt="product" width="280"
													height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
												<a href="#" class="btn-product-icon btn-compare"
													title="Add to compare"><i class="d-icon-compare"></i></a>
											</div>
											<div class="product-action">
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="shop.html">categories</a>
											</div>
											<h3 class="product-name">
												<a href="demo29-product.html">Galaxy Tablet 7 inchi</a>
											</h3>
											<div class="product-price">
												<ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="product.html" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media">
											<a href="demo29-product.html">
												<img src="images/demos/demo29/shop/5.jpg" alt="product" width="280"
													height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
												<a href="#" class="btn-product-icon btn-compare"
													title="Add to compare"><i class="d-icon-compare"></i></a>
											</div>
											<div class="product-action">
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="shop.html">categories</a>
											</div>
											<h3 class="product-name">
												<a href="demo29-product.html">iPad</a>
											</h3>
											<div class="product-price">
												<ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="product.html" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media">
											<a href="demo29-product.html">
												<img src="images/demos/demo29/shop/6.jpg" alt="product" width="280"
													height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
												<a href="#" class="btn-product-icon btn-compare"
													title="Add to compare"><i class="d-icon-compare"></i></a>
											</div>
											<div class="product-action">
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="shop.html">categories</a>
											</div>
											<h3 class="product-name">
												<a href="demo29-product.html">Apple Sports Watch</a>
											</h3>
											<div class="product-price">
												<ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="product.html" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media">
											<a href="demo29-product.html">
												<img src="images/demos/demo29/shop/7.jpg" alt="product" width="280"
													height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
												<a href="#" class="btn-product-icon btn-compare"
													title="Add to compare"><i class="d-icon-compare"></i></a>
											</div>
											<div class="product-action">
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="shop.html">categories</a>
											</div>
											<h3 class="product-name">
												<a href="demo29-product.html">Huawei Smart Phone</a>
											</h3>
											<div class="product-price">
												<ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="product.html" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center product-variable">
										<figure class="product-media">
											<a href="demo29-product.html">
												<img src="images/demos/demo29/shop/8.jpg" alt="product" width="280"
													height="315">
											</a>
											<div class="product-action-vertical">
												<a href="demo29-product.html" class="btn-product-icon btn-cart"
													title="Select Options"><i class="d-icon-arrow-right"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
												<a href="#" class="btn-product-icon btn-compare"
													title="Add to compare"><i class="d-icon-compare"></i></a>
											</div>
											<div class="product-action">
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="shop.html">categories</a>
											</div>
											<h3 class="product-name">
												<a href="demo29-product.html">XBox Gaming Pad</a>
											</h3>
											<div class="product-price">
												<ins class="new-price">$199.00-$210.00</ins>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="product.html" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<nav class="toolbox toolbox-pagination">
								<p class="show-info">Showing <span>12 of 56</span> Products</p>
								<ul class="pagination">
									<li class="page-item disabled">
										<a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1"
											aria-disabled="true">
											<i class="d-icon-arrow-left"></i>Prev
										</a>
									</li>
									<li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
									</li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item page-item-dots"><a class="page-link" href="#">6</a></li>
									<li class="page-item">
										<a class="page-link page-link-next" href="#" aria-label="Next">
											Next<i class="d-icon-arrow-right"></i>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- End Main -->
	@endsection