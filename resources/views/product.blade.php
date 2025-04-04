@extends('layouts.forntend')
  @section('title')
  PickiMarket | Online Shopping for Computers, Laptops, Phones, Accessories &amp; More
  @endsection
  @section('fcontent') 
		<main class="main single-product mt-4">
			<div class="page-content">
				<div class="container">
					<div class="product product-single row mb-4">
						<div class="col-md-6">
							<div class="product-gallery pg-vertical">
								<div class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1">
									<figure class="product-image">
										<img src="images/demos/demo29/product/product-1-580x652.jpg"
											data-zoom-image="images/demos/demo29/product/product-1-800x900.jpg"
											alt="Blue Pinafore Denim Dress" width="800" height="900">
									</figure>
									<figure class="product-image">
										<img src="images/demos/demo29/product/product-2-580x652.jpg"
											data-zoom-image="images/demos/demo29/product/product-2-800x900.jpg"
											alt="Blue Pinafore Denim Dress" width="800" height="900">
									</figure>
									<figure class="product-image">
										<img src="images/demos/demo29/product/product-3-580x652.jpg"
											data-zoom-image="images/demos/demo29/product/product-3-800x900.jpg"
											alt="Blue Pinafore Denim Dress" width="800" height="900">
									</figure>
									<figure class="product-image">
										<img src="images/demos/demo29/product/product-4-580x652.jpg"
											data-zoom-image="images/demos/demo29/product/product-4-800x900.jpg"
											alt="Blue Pinafore Denim Dress" width="800" height="900">
									</figure>
								</div>
								<div class="product-thumbs-wrap">
									<div class="product-thumbs">
										<div class="product-thumb active">
											<img src="images/demos/demo29/product/product-1-109x122.jpg"
												alt="product thumbnail" width="109" height="122">
										</div>
										<div class="product-thumb">
											<img src="images/demos/demo29/product/product-2-109x122.jpg"
												alt="product thumbnail" width="109" height="122">
										</div>
										<div class="product-thumb">
											<img src="images/demos/demo29/product/product-3-109x122.jpg"
												alt="product thumbnail" width="109" height="122">
										</div>
										<div class="product-thumb">
											<img src="images/demos/demo29/product/product-4-109x122.jpg"
												alt="product thumbnail" width="109" height="122">
										</div>
									</div>
									<button class="thumb-up disabled"><i class="fas fa-chevron-left"></i></button>
									<button class="thumb-down disabled"><i class="fas fa-chevron-right"></i></button>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="product-details">
								<div class="product-navigation">
									<ul class="breadcrumb breadcrumb-lg">
										<li><a href="demo29.html"><i class="d-icon-home"></i></a></li>
										<li><a href="#" class="active">Products</a></li>
										<li>Detail</li>
									</ul>

									<ul class="product-nav">
										<li class="product-nav-prev">
											<a href="#">
												<i class="d-icon-arrow-left"></i> Prev
												<span class="product-nav-popup">
													<img src="images/product/product-thumb-prev.jpg"
														alt="product thumbnail" width="110" height="123">
													<span class="product-name">Sed egtas Dnte Comfort</span>
												</span>
											</a>
										</li>
										<li class="product-nav-next">
											<a href="#">
												Next <i class="d-icon-arrow-right"></i>
												<span class="product-nav-popup">
													<img src="images/product/product-thumb-next.jpg"
														alt="product thumbnail" width="110" height="123">
													<span class="product-name">Sed egtas Dnte Comfort</span>
												</span>
											</a>
										</li>
									</ul>
								</div>

								<h1 class="product-name">FTPS Coffee Maker</h1>
								<div class="product-meta">
									SKU: <span class="product-sku">12345670</span>
									BRAND: <span class="product-brand">The Northland</span>
								</div>
								<div class="product-price">$139.00</div>
								<div class="ratings-container">
									<div class="ratings-full">
										<span class="ratings" style="width:80%"></span>
										<span class="tooltiptext tooltip-top"></span>
									</div>
									<a href="#product-tab-reviews" class="link-to-tab rating-reviews">( 6 reviews )</a>
								</div>
								<p class="product-short-desc">Sed egestas, ante et vulputate volutpat, eros pede semper
									est, vitae luctus metus libero eu augue. Morbi purus liberpuro ate vol faucibus
									adipiscing. Sed lectus te et vulputate aucibus adipiscing. Sed lectus. us
									adipiscing. Sed lectus.</p>
								<div class="product-form product-variations product-color">
									<label>Color:</label>
										<div class="select-box">
											<select name="color" class="form-control">
												<option value="" selected="selected">Choose an Option</option>
												<option value="white">White</option>
												<option value="black">Black</option>
												<option value="brown">Brown</option>
												<option value="red">Red</option>
												<option value="green">Green</option>
												<option value="yellow">Yellow</option>
											</select>
										</div>
									
								</div>
								<div class="product-form product-size">
									<label>Size:</label>
									<div class="product-form-group">
										<div class="product-variations">
											<a class="size" href="#">S</a>
											<a class="size" href="#">M</a>
											<a class="size" href="#">L</a>
											<a class="size" href="#">XL</a>
											<a class="size" href="#">2XL</a>
										</div>

										<a href="#" class="product-variation-clean">Clean All</a>
									</div>
								</div>
								<div class="product-variation-price">
									<span>$239.00</span>
								</div>

								<hr class="product-divider">

								<div class="product-form product-qty">
									<label>QTY:</label>
									<div class="product-form-group">
										<div class="input-group">
											<button class="quantity-minus d-icon-minus"></button>
											<input class="quantity form-control" type="number" min="1" max="1000000">
											<button class="quantity-plus d-icon-plus"></button>
										</div>
										<button class="btn-product btn-cart"><i class="d-icon-bag"></i>Add To
											Cart</button>
									</div>
								</div>

								<hr class="product-divider mb-3">

								<div class="product-footer">
									<div class="social-links mr-4">
										<a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
										<a href="#" class="social-link social-twitter fab fa-twitter"></a>
										<a href="#" class="social-link social-pinterest fab fa-pinterest-p"></a>
									</div>
									<span class="divider d-lg-show"></span>
									<div class="product-action">
										<a href="#" class="btn-product btn-wishlist mr-6"><i
												class="d-icon-heart"></i>Add to
											wishlist</a>
										<span class="divider d-lg-show"></span>
										<a href="#" class="btn-product btn-compare"><i
												class="d-icon-compare"></i>Compare</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tab tab-nav-simple product-tabs mb-4">
						<ul class="nav nav-tabs justify-content-center" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" href="#product-tab-description">Description</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#product-tab-additional">Additional</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#product-tab-shipping-returns">Shipping &amp; Returns</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#product-tab-reviews">Reviews (8)</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active in" id="product-tab-description">
								<div class="row mt-6">
									<div class="col-md-6 mb-8">
										<h5 class="description-title mb-4 font-weight-semi-bold ls-m">Features</h5>
										<p class="mb-2">
											Praesent id enim sit amet.Tdio vulputate eleifend in in tortor.
											ellus massa. siti iMassa ristique sit amet condim vel, facilisis
											quimequistiqutiqu amet condim Dilisis Facilisis quis sapien. Praesent id
											enim sit amet.
										</p>
										<ul class="mb-8">
											<li>Praesent id enim sit amet.Tdio vulputate</li>
											<li>Eleifend in in tortor. ellus massa.Dristique sitii</li>
											<li>Massa ristique sit amet condim vel</li>
											<li>Dilisis Facilisis quis sapien. Praesent id enim sit amet</li>
										</ul>
										<h5 class="description-title mb-3 font-weight-semi-bold ls-m">Specifications
										</h5>
										<table class="table">
											<tbody>
												<tr>
													<th class="font-weight-semi-bold text-dark pl-0">Material</th>
													<td class="pl-4">Praesent id enim sit amet.Tdio</td>
												</tr>
												<tr>
													<th class="font-weight-semi-bold text-dark pl-0">Claimed Size</th>
													<td class="pl-4">Praesent id enim sit</td>
												</tr>
												<tr>
													<th class="font-weight-semi-bold text-dark pl-0">Recommended Use
													</th>
													<td class="pl-4">Praesent id enim sit amet.Tdio vulputate eleifend
														in in tortor. ellus massa. siti</td>
												</tr>
												<tr>
													<th class="font-weight-semi-bold text-dark border-no pl-0">
														Manufacturer</th>
													<td class="border-no pl-4">Praesent id enim</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="col-md-6 pl-md-6 pt-4 pt-md-0">
										<h5 class="description-title font-weight-semi-bold ls-m mb-5">Video Description
										</h5>
										<figure class="p-relative d-inline-block mb-2">
											<img src="images/product/product.jpg" width="559" height="370"
												alt="Product" />
											<a class="btn-play btn-iframe" href="video/memory-of-a-woman.mp4">
												<i class="d-icon-play-solid"></i>
											</a>
										</figure>
										<div class="icon-box-wrap d-flex flex-wrap">
											<div class="icon-box icon-box-side icon-border pt-2 pb-2 mb-4 mr-10">
												<div class="icon-box-icon">
													<i class="d-icon-lock"></i>
												</div>
												<div class="icon-box-content">
													<h4 class="icon-box-title lh-1 pt-1 ls-s text-normal">2 year
														warranty</h4>
													<p>Guarantee with no doubt</p>
												</div>
											</div>
											<div class="divider d-xl-show mr-10"></div>
											<div class="icon-box icon-box-side icon-border pt-2 pb-2 mb-4">
												<div class="icon-box-icon">
													<i class="d-icon-truck"></i>
												</div>
												<div class="icon-box-content">
													<h4 class="icon-box-title lh-1 pt-1 ls-s text-normal">Free shipping
													</h4>
													<p>On orders over $50.00</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="product-tab-additional">
								<ul class="list-none">
									<li><label>Color:</label>
										<p>Black, Brown, Coffee</p>
									</li>
									<li><label>Style:</label>
										<p>Vintage</p>
									</li>
									<li><label>Material:</label>
										<p>PU, Faux Leather</p>
									</li>
									<li><label>Closure Type:</label>
										<p>Hasp</p>
									</li>
									<li><label>Bags Structure:</label>
										<p>Cell phone Pocket, Zipper Pouch</p>
									</li>
									<li><label>Size:</label>
										<p>L</p>
									</li>
									<li><label>Capacity:</label>
										<p>15.6 Inch Laptop</p>
									</li>
								</ul>
							</div>
							<div class="tab-pane " id="product-tab-shipping-returns">
								<h6 class="mb-2">Free Shipping</h6>
								<p class="mb-0">We deliver to over 100 countries around the world. For full details of
									the delivery options we offer, please view our <a href="#"
										class="text-primary">Delivery
										information</a><br />We hope you’ll love every
									purchase, but if you ever need to return an item you can do so within a month of
									receipt. For full details of how to make a return, please view our <br /><a href="#"
										class="text-primary">Returns information</a></p>
							</div>
							<div class="tab-pane " id="product-tab-reviews">
								<div class="d-flex align-items-center mb-5">
									<h4 class="mb-0 mr-2">Average Rating:</h4>
									<div class="ratings-container average-rating mb-0">
										<div class="ratings-full">
											<span class="ratings" style="width:80%"></span>
											<span class="tooltiptext tooltip-top">4.00</span>
										</div>
									</div>
								</div>

								<div class="comments mb-6">
									<ul>
										<li>
											<div class="comment">
												<figure class="comment-media">
													<a href="#">
														<img src="images/blog/comments/1.jpg" alt="avatar">
													</a>
												</figure>
												<div class="comment-body">
													<div class="comment-rating ratings-container mb-0">
														<div class="ratings-full">
															<span class="ratings" style="width:80%"></span>
															<span class="tooltiptext tooltip-top">4.00</span>
														</div>
													</div>
													<div class="comment-user">
														<h4><a href="#">Jimmy Pearson</a></h4>
														<span class="comment-date">November 9, 2018 at 2:19 pm</span>
													</div>

													<div class="comment-content">
														<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor
															libero sodales leo, eget blandit nunc tortor eu nibh. Nullam
															mollis. Ut justo. Suspendisse potenti.
															Sed egestas, ante et vulputate volutpat, eros pede semper
															est, vitae luctus metus libero eu augue. Morbi purus libero,
															faucibus adipiscing, commodo quis, avida id, est. Sed
															lectus. Praesent elementum hendrerit tortor. Sed semper
															lorem at felis. Vestibulum volutpat.</p>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="comment">
												<figure class="comment-media">
													<a href="#">
														<img src="images/blog/comments/3.jpg" alt="avatar">
													</a>
												</figure>

												<div class="comment-body">
													<div class="comment-rating ratings-container mb-0">
														<div class="ratings-full">
															<span class="ratings" style="width:80%"></span>
															<span class="tooltiptext tooltip-top">4.00</span>
														</div>
													</div>
													<div class="comment-user">
														<h4><a href="#">Johnathan Castillo</a></h4>
														<span class="comment-date">November 9, 2018 at 2:19 pm</span>
													</div>

													<div class="comment-content">
														<p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque
															euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus
															pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<!-- End Comments -->
								<div class="reply">
									<div class="title-wrapper text-left">
										<h3 class="title title-simple text-left text-normal">Add a Review</h3>
										<p>Your email address will not be published. Required fields are marked *</p>
									</div>
									<div class="rating-form">
										<label for="rating">Your rating: </label>
										<span class="rating-stars selected">
											<a class="star-1" href="#">1</a>
											<a class="star-2" href="#">2</a>
											<a class="star-3" href="#">3</a>
											<a class="star-4 active" href="#">4</a>
											<a class="star-5" href="#">5</a>
										</span>

										<select name="rating" id="rating" required="" style="display: none;">
											<option value="">Rate…</option>
											<option value="5">Perfect</option>
											<option value="4">Good</option>
											<option value="3">Average</option>
											<option value="2">Not that bad</option>
											<option value="1">Very poor</option>
										</select>
									</div>
									<form action="#">
										<textarea id="reply-message" cols="30" rows="4" class="form-control mb-4"
											placeholder="Comment *" required></textarea>
										<div class="row">
											<div class="col-md-6 mb-5">
												<input type="text" class="form-control" id="reply-name"
													name="reply-name" placeholder="Name *" required />
											</div>
											<div class="col-md-6 mb-5">
												<input type="email" class="form-control" id="reply-email"
													name="reply-email" placeholder="Email *" required />
											</div>
										</div>
										<div class="form-checkbox mb-4">
											<input type="checkbox" class="custom-checkbox" id="signin-remember"
												name="signin-remember" />
											<label class="form-control-label" for="signin-remember">
												Save my name, email, and website in this browser for the next time I
												comment.
											</label>
										</div>
										<button type="submit" class="btn btn-primary btn-md">Submit<i
												class="d-icon-arrow-right"></i></button>
									</form>
								</div>
								<!-- End Reply -->
							</div>
						</div>
					</div>
				</div>
				<section class="product-wrapper related-products pb-10">
					<div class="container">
						<div class="title-wrapper text-center">
							<h2 class="title">Related Products</h2>
						</div>
						<div class="owl-carousel owl-theme owl-nav-full row cols-2 cols-md-3 cols-lg-4 cols-xl-6 gutter-sm"
							data-owl-options="{
							'items': 5,
							'nav': false,
							'loop': false,
							'dots': false,
							'margin': 10,
							'responsive': {
								'0': {
									'items': 2
								},
								'768': {
									'items': 3
								},
								'992': {
									'items': 4
								}
							}
						}">
							<div class="product text-center">
								<figure class="product-media">
									<a href="demo29-product.html">
										<img src="images/demos/demo29/products/1.jpg" alt="product" width="168"
											height="190">
									</a>
									<div class="product-action-vertical">
										<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
											data-target="#addCartModal" title="Add to cart"><i
												class="d-icon-bag"></i></a>
										<a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
												class="d-icon-heart"></i></a>
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
										<a href="demo29-product.html">Mac Book Pro</a>
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
							<div class="product text-center">
								<figure class="product-media">
									<a href="demo29-product.html">
										<img src="images/demos/demo29/products/2.jpg" alt="product" width="168"
											height="190">
									</a>
									<div class="product-action-vertical">
										<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
											data-target="#addCartModal" title="Add to cart"><i
												class="d-icon-bag"></i></a>
										<a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
												class="d-icon-heart"></i></a>
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
										<a href="demo29-product.html">Bluetooth Speaker</a>
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
							<div class="product text-center">
								<figure class="product-media">
									<a href="demo29-product.html">
										<img src="images/demos/demo29/products/3.jpg" alt="product" width="168"
											height="190">
									</a>
									<div class="product-action-vertical">
										<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
											data-target="#addCartModal" title="Add to cart"><i
												class="d-icon-bag"></i></a>
										<a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
												class="d-icon-heart"></i></a>
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
							<div class="product text-center">
								<figure class="product-media">
									<a href="demo29-product.html">
										<img src="images/demos/demo29/products/4.jpg" alt="product" width="168"
											height="190">
									</a>
									<div class="product-action-vertical">
										<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
											data-target="#addCartModal" title="Add to cart"><i
												class="d-icon-bag"></i></a>
										<a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
												class="d-icon-heart"></i></a>
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
										<a href="demo29-product.html">SAMSUNG SmartPhone</a>
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
							<div class="product text-center">
								<figure class="product-media">
									<a href="demo29-product.html">
										<img src="images/demos/demo29/products/5.jpg" alt="product" width="168"
											height="190">
									</a>
									<div class="product-action-vertical">
										<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
											data-target="#addCartModal" title="Add to cart"><i
												class="d-icon-bag"></i></a>
										<a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
												class="d-icon-heart"></i></a>
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
										<a href="demo29-product.html">Bluetooth Speaker</a>
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
							<div class="product text-center">
								<figure class="product-media">
									<a href="demo29-product.html">
										<img src="images/demos/demo29/products/6.jpg" alt="product" width="168"
											height="190">
									</a>
									<div class="product-action-vertical">
										<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
											data-target="#addCartModal" title="Add to cart"><i
												class="d-icon-bag"></i></a>
										<a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
												class="d-icon-heart"></i></a>
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
					</div>
				</section>
			</div>
		</main>
		<!-- End Main -->
@endsection