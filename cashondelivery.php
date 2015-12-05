<?php include("header.php");?>
		

	<section id="cart_items" style="padding-bottom:50px">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shipping</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="shopper-informations">
				<div class="step-one">
					<h2 class="heading">Order Summation</h2>
				</div>
				<div class="row">
					<div class="col-sm-12 clearfix">
						<div class="shopper-info">
							<p>Cash on delivery (COD) payment</p>
							<div  style="border: 1px solid #e3e3e3;padding:20px">
								<form>
									<p style="font-size:15px;color: #585858">
									 	- You have chosen the cash on delivery method.<br>
										- The total amount of your order is : <span style="color: #FE980F;font-weight:700"> $71 </span>
									</p>
									<p style="font-size:17px;color: #585858;font-weight:700">Please confirm your order by clicking 'I confirm my order'.
									</p>			
								</form>
							</div>
						</div>
					</div>					
				</div>
			</div>
			 <div class="shopper-informations">
				<div class="row">
					<div class="col-sm-2">
						<div class="shopper-info cashondelivery_other">
							<a href="checkout_final.php"> Other Payment Method</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="shopper-info">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="shopper-info">
						</div>
					</div>
					<div class="col-sm-2">
						<div class="shopper-info cashondelivery_other">
							<a href="">&nbsp;&nbsp; I Confirm My Order</a>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<?php include("footer.php");?>