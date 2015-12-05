<?php include("header.php");?>


	<section id="cart_items" style="padding-bottom:50px">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>

						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/two.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/three.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Cart Sub Total</td>
										<td>$59</td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td>Free</td>										
									</tr>
									<tr>
										<td style="color: #D62617;font-size:22px;">Total</td>
										<td><span>$61</span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>



			<div class="shopper-informations">
				<div class="step-one">
					<h2 class="heading">Step 1 (Signup/Already have an account??)</h2>
				</div>
				<div class="row">
					<div class="col-sm-5">
						<div class="shopper-info">
							<p>New User Signup!</p>
							<form>
								<!--<input type="text" placeholder="Display Name">-->
								<input type="text" placeholder="User Name *" required>
								<input type="text" placeholder="Email *" required>
								<input type="password" placeholder="Password *" required>
								<input type="password" placeholder="Confirm password *" required>
								<input type="submit" value="Submit" name="signup_submit" class="btn btn-primary">
							</form>
							<!--<a class="btn btn-primary" href="">Get Quotes</a>
							<a class="btn btn-primary" href="">Submit</a>-->
						</div>
					</div>
					<div class="col-sm-2 ">
						<div class="shopper-info"style="margin-left:50px;">
							<p style="color: #fff" class="or">OR</p>
						</div>
					</div>
					<div class="col-sm-5 clearfix">
						<div class="shopper-info">
							<p>Login to your account</p>
								<form>
									<input type="text" placeholder="Email *" required>
									<input type="password" placeholder="password *" required>
									<input type="submit" name="login_submit" value="Submit" class="btn btn-primary">
								</form>	
						</div>
					</div>					
				</div>
			</div>

			<div class="shopper-informations">
				<div class="step-one">
					<h2 class="heading">Step 2 (Enter Your Delivery Address..)</h2>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="shopper-info">
							<p>Delivery Address</p>
								<form method="post" action="checkout_final.php">
									<input type="text" placeholder="Name">
									<input type="text" placeholder="Address *">
									<input type="text" placeholder="Mobile Phone *">
									<input type="text" placeholder="Zip / Postal Code *">
									<select style="padding:10px">
										<option>-- State / City / Region --</option>
										<option>Dhaka</option>
										<option>Barisal</option>
										<option>Chittagong</option>
										<option>Comilla</option>
										<option>Sylhet</option>
										<option>Khulna</option>
										<option>Rajshahi</option>
										<option>Rangpur</option>
									</select>
									<br><br>
									<input type="submit" name="delivery_address_submit" value="Submit" class="btn btn-primary">
								</form>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<?php include("footer.php");?>