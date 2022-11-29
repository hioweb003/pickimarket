@extends('layouts.forntend')
  @section('title')
  PickiMarket | Online Shopping for Computers, Laptops, Phones, Accessories &amp; More
  @endsection
  @section('fcontent')   
		<main class="main checkout">
			<div class="page-header"
				style="background-image: url({{asset('images/page-header-back.jpg')}}); background-color: #3C63A4;">
				<h1 class="page-title">Checkout</h1>
				<ul class="breadcrumb">
					<li><a href="{{url('/')}}"><i class="d-icon-home"></i></a></li>
					<li>Checkout</li>
				</ul>
			</div>
			<!-- End PageHeader -->
			<div class="page-content pt-10 pb-4">
				<div class="container mt-4">
					<form action="#" class="form">
						<div class="row gutter-lg">
							<div class="col-lg-8 mb-6">
								<h3 class="title title-simple text-left">Billing Details</h3>
								<div class="row">
									<div class="col-xs-6">
										<label>First Name *</label>
										<input type="text" class="form-control" name="first-name" required="" />
									</div>
									<div class="col-xs-6">
										<label>Last Name *</label>
										<input type="text" class="form-control" name="last-name" required="" />
									</div>
								</div>
								<label>Company Name(Optional)</label>
								<input type="text" class="form-control" name="company-name" required="" />
								<label>Country *</label>
								<input type="text" class="form-control" name="country" required="" />
								<label>Street Address *</label>
								<input type="text" class="form-control" name="address1" required=""
									placeholder="House number and Street name" />
								<input type="text" class="form-control" name="address2" required=""
									placeholder="Appartments, suite, unit etc ..." />
								<div class="row">
									<div class="col-xs-6">
										<label>Town / City *</label>
										<input type="text" class="form-control" name="city" required="" />
									</div>
									<div class="col-xs-6">
										<label>State / County *</label>
										<input type="text" class="form-control" name="state" required="" />
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6">
										<label>Postcode / ZIP *</label>
										<input type="text" class="form-control" name="postcode" required="" />
									</div>
									<div class="col-xs-6">
										<label>Phone *</label>
										<input type="text" class="form-control" name="phone" required="" />
									</div>
								</div>
								<label>Email address *</label>
								<input type="text" class="form-control" name="email-address" required="" />
								<div class="form-checkbox mt-8">
									<input type="checkbox" class="custom-checkbox" id="create-account"
										name="create-account">
									<label class="form-control-label" for="create-account">Create an account?</label>
								</div>
								<div class="form-checkbox mb-8">
									<input type="checkbox" class="custom-checkbox" id="different-address"
										name="different-address">
									<label class="form-control-label" for="different-address">Ship to a different
										address?</label>
								</div>
								<label>Order Notes (optional)</label>
								<textarea class="form-control" cols="30" rows="6"
									placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
							</div>
							<aside class="col-lg-4 sticky-sidebar-wrapper">
								<div class="sticky-sidebar" data-sticky-options="{'bottom': 50}">
									<h3 class="title title-simple text-left">Your Order</h3>
									<div class="summary mb-4">
										<table class="order-table">
											<thead>
												<tr>
													<th>Product</th>
													<th>Total</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="product-name">Beige knitted elastic runner shoes</td>
													<td class="product-total">$84.00</td>
												</tr>
												<tr>
													<td class="product-name">Blue utility pinafore denim dress</td>
													<td class="product-total">$76.00</td>
												</tr>
												<tr class="cart-subtotal">
													<td>Subtotal:</td>
													<td>$160.00</td>
												</tr>
												<tr class="shipping">
													<td>Shipping:</td>
													<td>Free Shipping</td>
												</tr>
												<tr class="order-total">
													<td>Total:</td>
													<td>$160.00</td>
												</tr>
											</tbody>
										</table>
										<div class="payment accordion radio-type">
											<div class="card">
												<div class="card-header">
													<a href="#collapse1" class="collapse">Direct bank transfer</a>
												</div>
												<div id="collapse1" class="expanded">
													<div class="card-body">
														Make your payment directly into our bank account. Please use
														your Order ID as the payment reference. Your order will not be
														shipped until the funds have cleared in our account.
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-header">
													<a href="#collapse2" class="expand">Check payments</a>
												</div>
												<div id="collapse2" class="collapsed">
													<div class="card-body">
														Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio.
														Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-header">
													<a href="#collapse3" class="expand">Cash on delivery</a>
												</div>
												<div id="collapse3" class="collapsed">
													<div class="card-body">
														Quisque volutpat mattis eros. Lorem ipsum dolor sit amet,
														consectetuer adipiscing elit. Donec odio. Quisque volutpat
														mattis eros.
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-header">
													<a href="#collapse4" class="expand">PayPal</a>
												</div>
												<div id="collapse4" class="collapsed">
													<div class="card-body">
														Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra
														non, semper suscipit, posuere a, pede. Donec nec justo eget
														felis facilisis fermentum.
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-header">
													<a href="#collapse5" class="expand">Credit Card (Stripe)</a>
												</div>
												<div id="collapse5" class="collapsed">
													<div class="card-body">
														Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor
														sit amet, consectetuer adipiscing elit. Donec odio. Quisque
														volutpat mattis eros. Lorem ipsum dolor sit ame.
													</div>
												</div>
											</div>
										</div>
									</div>
									<button type="submit" class="btn btn-primary btn-order">Place Order</button>
								</div>
							</aside>
						</div>
					</form>
				</div>
			</div>
		</main>
		<!-- End Main -->
	@endsection