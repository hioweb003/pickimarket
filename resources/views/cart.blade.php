@extends('layouts.forntend')
  @section('title')
  PickiMarket | Online Shopping for Computers, Laptops, Phones, Accessories &amp; More
  @endsection
  @section('fcontent')   
		<main class="main cart">
			<div class="page-header"
				style="background-image: url({{asset('images/page-header-back.jpg')}}); background-color: #3C63A4;">
				<h1 class="page-title">Shopping Cart</h1>
				<ul class="breadcrumb">
					<li><a href="{{url('/')}}"><i class="d-icon-home"></i></a></li>
					<li>Cart</li>
				</ul>
			</div>
			<!-- End PageHeader -->
			<div class="page-content pt-10 pb-10">
				<div class="container mt-4 mb-4">
					<div class="row gutter-lg">
						<div class="col-lg-8">
							<h3 class="title title-simple text-left">Shopping cart</h3>
							<table class="shop-table cart-table mt-2">
								<thead class="d-none">
									<tr>
										<th class="product-name"><span>Product</span></th>
										<th></th>
										<th class="product-price"><span>Price</span></th>
										<th class="product-quantity"><span>Amount</span></th>
										<th class="product-subtotal">Total</th>
										<th class="product-remove"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="product-thumbnail">
											<a href="product-simple.html">
												<figure>
													<img src="images/products/product11.jpg" width="100" height="100"
														alt="product">
												</figure>
											</a>
										</td>
										<td class="product-name">
											<a href="product-simple.html">Beige knitted elastic runner shoes</a>
										</td>
										<td class="product-price">
											<span class="amount">$84.00</span>
										</td>
										<td class="product-quantity">
											<div class="input-group">
												<button class="quantity-minus d-icon-minus"></button>
												<input class="quantity form-control" type="number" min="1"
													max="1000000">
												<button class="quantity-plus d-icon-plus"></button>
											</div>
										</td>
										<td class="product-subtotal">
											<span class="amount">$84.00</span>
										</td>
										<td class="product-remove">
											<div>
												<a href="#" class="remove" title="Remove this product"><i
														class="d-icon-times"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td class="product-thumbnail">
											<a href="product-simple.html">
												<figure>
													<img src="images/products/product12.jpg" width="100" height="100"
														alt="product">
												</figure>
											</a>
										</td>
										<td class="product-name">
											<a href="product-simple.html">Sed diam nonummy nibh</a>
										</td>
										<td class="product-price">
											<span class="amount">$84.00</span>
										</td>
										<td class="product-quantity">
											<div class="input-group">
												<button class="quantity-minus d-icon-minus"></button>
												<input class="quantity form-control" type="number" min="1"
													max="1000000">
												<button class="quantity-plus d-icon-plus"></button>
											</div>
										</td>
										<td class="product-subtotal">
											<span class="amount">$84.00</span>
										</td>
										<td class="product-remove">
											<div>
												<a href="#" class="remove" title="Remove this product"><i
														class="d-icon-times"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td class="product-thumbnail">
											<a href="product-simple.html">
												<figure>
													<img src="images/products/product13.jpg" width="100" height="100"
														alt="product">
												</figure>
											</a>
										</td>
										<td class="product-name">
											<a href="product-simple.html">Lorem ipsum dolor sit amet, consectetuer
												adipiscing elit,</a>
										</td>
										<td class="product-price">
											<span class="amount">$84.00</span>
										</td>
										<td class="product-quantity">
											<div class="input-group">
												<button class="quantity-minus d-icon-minus"></button>
												<input class="quantity form-control" type="number" min="1"
													max="1000000">
												<button class="quantity-plus d-icon-plus"></button>
											</div>
										</td>
										<td class="product-subtotal">
											<span class="amount">$84.00</span>
										</td>
										<td class="product-remove">
											<div>
												<a href="#" class="remove" title="Remove this product"><i
														class="d-icon-times"></i></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
							<div class="accordion mb-5">
								<div class="card">
									<div class="card-header">
										<a href="#collapse1-1" class="expand">Coupon code</a>
									</div>
									<div id="collapse1-1" class="collapsed">
										<div class="card-body input-wrapper input-wrapper-inline input-coupon">
											<input type="text" name="coupon_code" class="input-text form-control"
												id="coupon_code" value="" placeholder="Coupon code">
											<button type="submit" class="btn btn-link btn-slide-right btn-infinite"><i
													class="d-icon-arrow-right"></i></button>
										</div>
									</div>
								</div>
							</div>
							<div class="cart-actions mb-6">
								<a href="shop.html" class="btn btn-link btn-primary btn-reveal-right">Continue
									Shopping<i class="d-icon-arrow-right"></i></a>
								<button type="submit" class="btn btn-link btn-primary btn-icon-right">Update Cart<i
										class="d-icon-refresh"></i></button>
							</div>
						</div>
						<aside class="col-lg-4 sticky-sidebar-wrapper">
							<div class="sticky-sidebar" data-sticky-options="{'bottom': 20}">
								<div class="summary mb-4">
									<h3 class="title title-simple text-left">Estimate Shipping and Tax</h3>
									<table class="shipping">
										<tr class="shipping-row">
											<td>
												<div class="custom-radio">
													<input type="radio" id="free-shipping" name="shipping"
														class="custom-control-input">
													<label class="custom-control-label" for="free-shipping">Free
														Shipping</label>
												</div>
											</td>
											<td>$0.00</td>
										</tr>
										<tr class="shipping-row">
											<td>
												<div class="custom-radio">
													<input type="radio" id="standard_shipping" name="shipping"
														class="custom-control-input">
													<label class="custom-control-label"
														for="standard_shipping">Standard</label>
												</div>
											</td>
											<td>$10.00</td>
										</tr>
										<tr class="shipping-row">
											<td>
												<div class="custom-radio">
													<input type="radio" id="express_shipping" name="shipping"
														class="custom-control-input">
													<label class="custom-control-label"
														for="express_shipping">Express</label>
												</div>
											</td>
											<td>$15.00</td>
										</tr>
									</table>
									<div class="shipping-address">
										<label>Country *</label>
										<div class="select-box">
											<select name="country" class="form-control">
												<option value="default" selected="selected">Select Your Country</option>
												<option value="us">United States</option>
												<option value="uk">United Kingdom</option>
												<option value="fr">France</option>
												<option value="aus">Austria</option>
											</select>
										</div>
										<label>State/Province *</label>
										<div class="select-box">
											<select name="country" class="form-control">
												<option value="default" selected="selected">State/Province</option>
											</select>
										</div>
										<label>ZIP/Postal Code *</label>
										<input type="text" class="form-control" name="code"
											placeholder="Zip/Postal Code" />
									</div>
									<div class="cart-total">
										<a href="#" class="btn btn-link btn-primary btn-underline btn-calc">Calculate
											shopping</a>
										<table>
											<tr class="cart-subtotal">
												<th>Subtotal:</th>
												<td>$160.00</td>
											</tr>
											<tr class="order-total">
												<th>Total:</th>
												<td>$160.00</td>
											</tr>
										</table>
									</div>
								</div>
								<a href="checkout.html" class="btn btn-primary btn-checkout">Proceed to checkout</a>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</main>
@endsection
					