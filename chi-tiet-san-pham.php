<!DOCTYPE html>
<!-- saved from url=(0036)/chi-tiet-san-pham/7 -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel </title>
    <!--<base href="/">--><base href=".">
	<link href="./chi-tiet-san-pham_files/css" rel="stylesheet" type="text/css">
	<link href="./chi-tiet-san-pham_files/css(1)" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="./chi-tiet-san-pham_files/bootstrap.min.css">
	<link rel="stylesheet" href="./chi-tiet-san-pham_files/font-awesome.min.css">
	<link rel="stylesheet" href="./chi-tiet-san-pham_files/colorbox.css">
	<link rel="stylesheet" href="./chi-tiet-san-pham_files/settings.css">
	<link rel="stylesheet" href="./chi-tiet-san-pham_files/responsive.css">
	<link rel="stylesheet" title="style" href="./chi-tiet-san-pham_files/style.css">
	<link rel="stylesheet" href="./chi-tiet-san-pham_files/animate.css">
	<link rel="stylesheet" title="style" href="./chi-tiet-san-pham_files/huong-style.css">
<script src="./chi-tiet-san-pham_files/saved_resource"></script></head>
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
				<h6 class="inner-title">Product</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="/index">Home</a> / <span>Product</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<img src=".<?= $_GET['image']?>" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title"><?= $_GET['name']?></p>
								<p class="single-item-price">
																	<span class="flash-del"><?= $_GET['price']?></span>
									<span class="flash-sale"><?= $_GET['sale_price']?></span>
																</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p></p>
							</div>
							<div class="space20">&nbsp;</div>

							<p>Options:</p>
							<div class="single-item-options">
								<select class="wc-select" name="color">
									<option>Amount</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								<a class="add-to-cart" href="/#"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li class="active"><a href="/#tab-description">Description</a></li>
						</ul>

						<div class="panel" id="tab-description" style="display: block;">
						<p></p>
						</div>
						<div class="panel" id="tab-reviews" style="display: none;">
							<p>No Reviews</p>
						</div>
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Related Products</h4>

						<div class="row">
														<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="/chi-tiet-san-pham.php?image=/chi-tiet-san-pham_files/image-removebg-preview-47.png&name=Vivo%20Y22s%208GB/128GB&sale_price=5590000&price=5900000"><img src="./chi-tiet-san-pham_files/image-removebg-preview-47.png" alt="" height="200"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">Vivo Y22s 8GB/128GB</p>
										<p class="single-item-price">
																						<span class="flash-del">5,900,000</span>
												<span class="flash-sale">5,590,000</span>
																						</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="/chi-tiet-san-pham/5"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="/chi-tiet-san-pham/5">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
														<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="/chi-tiet-san-pham.php?name=vivo%20V21%205G&price=5000000&sale_price=5000000&image=/chi-tiet-san-pham_files/vivo-v21-5g.png"><img src="./chi-tiet-san-pham_files/vivo-v21-5g.png" alt="" height="200"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">vivo V21 5G</p>
										<p class="single-item-price">
																						<span class="flash-del">5,000,000</span>
												<span class="flash-sale">5,000,000</span>
																						</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="/chi-tiet-san-pham/6"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="/chi-tiet-san-pham/6">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
														<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="/chi-tiet-san-pham.php?name=VIVO%20Y21&price=1000100&sale_price=1000000&image=/chi-tiet-san-pham_files/vivo-y21.png"><img src="./chi-tiet-san-pham_files/vivo-y21.png" alt="" height="200"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">VIVO Y21</p>
										<p class="single-item-price">
																						<span class="flash-del">1,001,000</span>
												<span class="flash-sale">1,000,000</span>
																						</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="/chi-tiet-san-pham/7"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="/chi-tiet-san-pham/7">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
													</div>
						<div class="row">
							
						</div>
					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">Best Sellers</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
														<div class="media beta-sales-item">
									<a class="pull-left" href="/chi-tiet-san-pham/5"><img src="./chi-tiet-san-pham_files/image-removebg-preview-47.png" alt=""></a>
									<div class="media-body">
									Vivo Y22s 8GB/128GB
									</div>
								</div>
														<div class="media beta-sales-item">
									<a class="pull-left" href="/chi-tiet-san-pham/6"><img src="./chi-tiet-san-pham_files/vivo-v21-5g.png" alt=""></a>
									<div class="media-body">
									vivo V21 5G
									</div>
								</div>
														<div class="media beta-sales-item">
									<a class="pull-left" href="/chi-tiet-san-pham/7"><img src="./chi-tiet-san-pham_files/vivo-y21.png" alt=""></a>
									<div class="media-body">
									VIVO Y21
									</div>
								</div>
														</div>
						</div>
					</div> <!-- best sellers widget -->
					<div class="widget">
						<h3 class="widget-title">New Products</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
														<div class="media beta-sales-item">
									<a class="pull-left" href="/chi-tiet-san-pham/5"><img src="./chi-tiet-san-pham_files/image-removebg-preview-47.png" alt=""></a>
									<div class="media-body">
									Vivo Y22s 8GB/128GB
									</div>
								</div>
														<div class="media beta-sales-item">
									<a class="pull-left" href="/chi-tiet-san-pham/6"><img src="./chi-tiet-san-pham_files/vivo-v21-5g.png" alt=""></a>
									<div class="media-body">
									vivo V21 5G
									</div>
								</div>
														<div class="media beta-sales-item">
									<a class="pull-left" href="/chi-tiet-san-pham/7"><img src="./chi-tiet-san-pham_files/vivo-y21.png" alt=""></a>
									<div class="media-body">
									VIVO Y21
									</div>
								</div>
														</div>
						</div>
					</div> <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->
    </div> <!-- .container -->

    	


	<!-- include js files -->
	<script src="./chi-tiet-san-pham_files/jquery.js"></script>
	<script src="./chi-tiet-san-pham_files/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="./chi-tiet-san-pham_files/bootstrap.min.js"></script>
	<script src="./chi-tiet-san-pham_files/jquery.bxslider.min.js"></script>
	<script src="./chi-tiet-san-pham_files/jquery.colorbox-min.js"></script>
	<script src="./chi-tiet-san-pham_files/Animo.js"></script>
	<script src="./chi-tiet-san-pham_files/dug.js"></script>
	<script src="./chi-tiet-san-pham_files/scripts.min.js"></script>
	<script src="./chi-tiet-san-pham_files/jquery.themepunch.tools.min.js"></script>
	<script src="./chi-tiet-san-pham_files/jquery.themepunch.revolution.min.js"></script>
	<script src="./chi-tiet-san-pham_files/waypoints.min.js"></script>
	<script src="./chi-tiet-san-pham_files/wow.min.js"></script>
	<!--customjs-->
	<script src="./chi-tiet-san-pham_files/custom2.js"></script>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>


</div><div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div></div></body></html>