<!DOCTYPE html>
<!-- saved from url=(0027)/thanh-toan -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel </title>
    <!--<base href="/">--><base href=".">
	<link href="./thanh-toan_files/css" rel="stylesheet" type="text/css">
	<link href="./thanh-toan_files/css(1)" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="./thanh-toan_files/bootstrap.min.css">
	<link rel="stylesheet" href="./thanh-toan_files/font-awesome.min.css">
	<link rel="stylesheet" href="./thanh-toan_files/colorbox.css">
	<link rel="stylesheet" href="./thanh-toan_files/settings.css">
	<link rel="stylesheet" href="./thanh-toan_files/responsive.css">
	<link rel="stylesheet" title="style" href="./thanh-toan_files/style.css">
	<link rel="stylesheet" href="./thanh-toan_files/animate.css">
	<link rel="stylesheet" title="style" href="./thanh-toan_files/huong-style.css">
<script src="./thanh-toan_files/saved_resource"></script></head>
<body cz-shortcut-listen="true" style="">

	<div id="header">
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="/index" id="logo">
                        
                        Phone Store
                    </a>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="/#"><span class="beta-menu-toggle-text">Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="/index">Home</a></li>
						<li><a href="/#">Product</a>
							<ul class="sub-menu">
																<li><a href="/loai-san-pham.php/1">Iphone</a></li>
																<li><a href="/loai-san-pham.php/2">Samsung</a></li>
																<li><a href="/loai-san-pham.php/3">XIAOMI</a></li>
																<li><a href="/loai-san-pham.php/4">OPPO</a></li>
																<li><a href="/loai-san-pham.php/5">VIVO</a></li>
																<li><a href="/loai-san-pham.php/6">HUAWEI</a></li>
																<li><a href="/loai-san-pham.php/7">LENOVO</a></li>
															</ul>
						</li>
						
						<li><a href="/lien-he.php">Contact</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->
	<div class="rev-slider">
        <div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Checkout</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="/index">Home</a> / <span>Checkout</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">

			<!-- <form action="/dat-hang" method="post" class="beta-form-checkout"> -->
			<input type="hidden" name="_token" value="6frJpjZAxaOdnOQAaHojgvNvGyRzl4zMwdBYeFbr">
			<div class="row"></div>
				<div class="row">
					<div class="col-sm-6">
						<h4>Checkout</h4>
						<div class="space20">&nbsp;</div>

						<div class="form-block">
							<label for="name">Full Name*</label>
							<input type="text" id="name" name="name" placeholder="Họ tên" required="">
						</div>
						<div class="form-block">
							<label>Gender </label>
							<input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked" style="width: 10%"><span style="margin-right: 10%">Male</span>
							<input id="gender" type="radio" class="input-radio" name="gender" value="nữ" style="width: 10%"><span>Female</span>

						</div>

						<div class="form-block">
							<label for="email">Email*</label>
							<input type="email" id="email" name="email" required="" placeholder="expample@gmail.com">
						</div>

						<div class="form-block">
							<label for="adress"><address></address>*</label>
							<input type="text" id="address" name="address" placeholder="Street Address" required="">
						</div>


						<div class="form-block">
							<label for="phone">Phone*</label>
							<input type="text" id="phone" name="phone" required="">
						</div>

						<div class="form-block">
							<label for="notes">Note</label>
							<textarea id="notes" name="note"></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="your-order">
							<div class="your-order-head"><h5>Your Order</h5></div>
							<div class="your-order-body" style="padding: 0px 10px">
								<div class="your-order-item">
									<div>
                                																<!--  one item	 -->
                                <div class="media">
											<img width="25%" src=".<?= $_GET['image'] ?>" alt="" class="pull-left">
											<div class="media-body">
												<p class="font-large"><?= number_format($_GET['sale_price'], 3, ',', ',') ?></p>
											</div>
								</div>
									<!-- end one item -->
																
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="your-order-item">
									<div class="pull-left"><p class="your-order-f18">Total:</p></div>
									<div class="pull-right"><h5 class="color-black"><?= number_format($_GET['sale_price'], 3, ',', '.') ?></h5></div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="your-order-head"><h5>Payment</h5></div>

							<div class="your-order-body">
								<ul class="payment_methods methods">
									<li class="payment_method_bacs">
										<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked" data-order_button_text="">
										<label for="payment_method_bacs">Payment on delivery </label>
										<div class="payment_box payment_method_bacs" style="display: block;">
											The store will send the goods to your address, you see the goods and then pay the delivery staff
										</div>
									</li>

									<li class="payment_method_cheque">
										<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM" data-order_button_text="">
										<label for="payment_method_cheque">Transfer </label>
										<div class="payment_box payment_method_cheque" style="display: none;">
											Transfer money to the following account:
											<br>- Number Account: 123 456 789
											<br>- Account owner: Nguyễn A
											<br>- Name: Ngân hàng ACB, Chi nhánh TPHCM
										</div>
									</li>

								</ul>
							</div>

							<div class="text-center">
								<button type="submit" id="submit" class="beta-btn primary" href="#">DONE
									<i class="fa fa-chevron-right"></i>
								</button>
							</div>
						</div> <!-- .your-order -->
					</div>
				</div>
			<!-- </form> -->
		</div> <!-- #content -->
    </div> <!-- .container -->

    	


	<!-- include js files -->
	<script src="./thanh-toan_files/jquery.js"></script>
	<script src="./thanh-toan_files/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="./thanh-toan_files/bootstrap.min.js"></script>
	<script src="./thanh-toan_files/jquery.bxslider.min.js"></script>
	<script src="./thanh-toan_files/jquery.colorbox-min.js"></script>
	<script src="./thanh-toan_files/Animo.js"></script>
	<script src="./thanh-toan_files/dug.js"></script>
	<script src="./thanh-toan_files/scripts.min.js"></script>
	<script src="./thanh-toan_files/jquery.themepunch.tools.min.js"></script>
	<script src="./thanh-toan_files/jquery.themepunch.revolution.min.js"></script>
	<script src="./thanh-toan_files/waypoints.min.js"></script>
	<script src="./thanh-toan_files/wow.min.js"></script>
	<!--customjs-->
	<script src="./thanh-toan_files/custom2.js"></script>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
		$('#submit').on('click', function(){
			alert('Order successfully');
			
		});

	})
	</script>


</div><div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div></div></body></html>