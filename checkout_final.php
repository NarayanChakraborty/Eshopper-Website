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
					<h2 class="heading">Confirmation</h2>
				</div>
				<div class="row">
				<div class="col-sm-5" style="">
					<div class="shopper-info">
						<p>Confirm Delivery Adddress</p>
						<div style="border: 1px solid #e3e3e3; padding:20px" >
							<p style="font-size:15px;">Name : &nbsp; Rathin Roy</p>
							<p style="font-size:15px;">Mobile : &nbsp; 01748558533</p>
							<p style="font-size:15px;">Email : &nbsp; rothinroy3@gmail.com</p>
							<p style="font-size:15px;">Postal Code : &nbsp; 3814</p>
							<p style="font-size:15px;">Full Address : &nbsp;NSTU,Sonapur,Noakhali</p>	
						</div>
						<a class="btn btn-primary fancybox" href="#inline1">Update</a>
						<div id="inline1"style="display:none;width:700px;margin:10px 30px">
                   		 <h3 style= "border-bottom: 2px solid #295498; color:#0C86AC;margin-bottom:10px;" >Post Details</h3>
                   		 <div class="shopper-info">
							<p>Confirm Delivery Adddress</p>
							<form>								
								<input type="text" placeholder="Email *">
								<input type="text" placeholder="Name">
								<input type="text" placeholder="Address *">
								<input type="text" placeholder="Mobile Phone *">
								<input type="text" placeholder="Zip / Postal Code *">
							</form>
							<a class="btn btn-primary" href="">Update</a>
			
						</div>
                		</div>
					</div>
				</div>


					<!--<div class="col-sm-5">
						<div class="shopper-info">
							<p>Confirm Delivery Adddress</p>
							<form>								
								<input type="text" placeholder="Email *">
								<input type="text" placeholder="Name">
								<input type="text" placeholder="Address *">
								<input type="text" placeholder="Mobile Phone *">
								<input type="text" placeholder="Zip / Postal Code *">
							</form>
							<a class="btn btn-primary" href="">Update</a>
			
						</div>
					</div>-->


					<div class="col-sm-7 clearfix">
						<div class="shopper-info">
							<p>For Gift(Optional)!</p>
							<div  style="border: 1px solid #e3e3e3;padding:20px">
								<form>
									<p style="font-size:15px;color: #000"><input type="checkbox">
									 	&nbsp;&nbsp;I Would like to wrapped my Product for Gift
										It will charged additional<span style="color: #FE980F;font-weight:700"> $10 </span>per Box.
									</p>
									<p style="font-size:15px;color: #000">If you would like to add a comment about your order, please write it in the field below.
									</p>
									<textarea rows="9" cols="" placeholder="Text Here.."></textarea>			
								</form>
							</div>
						</div>
					</div>					
				</div>
			</div>

			<div class="shopper-informations">
				<div class="step-one">
					<h2 class="heading">Please choose your payment method</h2>
				</div>
				<div class="row">
					<div class="col-sm-6">
							<div class="shopper-info payment1">
							<a href="cashondelivery.php"><img src="images/payment5.png" width="50"height="50">
								<span> Pay with Cash On Delivery.</span> Available in all over Bangladesh.
							</a>
						</div>
					</div>
					<div class="col-sm-1 ">
						<div class="shopper-info"style="margin-left:8px;">
							<p style="color: #fff;margin-top:23px;" class="or">OR</p>
						</div>
					</div>
					<div class="col-sm-5">	
						<div class="shopper-info payment2">
							<a href=""><img src="images/payment1.png" width="50"height="50">
								<span>Pay Online.</span> (Process will be more faster)
							</a>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<?php include("footer.php");?>