<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
// require ("../controllers/product_controller.php");
 require ("../controllers/cart_controller.php");
 session_start();

 

 $cid = $_SESSION['customer_id'];
 
 $count_cart = count_cart_ctrl($cid);
 $every_item = every_cart_item_ctrl($cid);
$total_price = total_price_ctrl($cid);
// print_r($every_item);

if ($_SERVER['REQUEST_METHOD'] == "POST"){
	$pid = $_POST['pid'];
	$txtbox = $_POST['cartitem'];

	$update_textbox = update_textbox_ctrl($pid, $cid, $txtbox);
	if ($update_textbox) {
	  header("Location: cart.php");
  }
  else{
	  return false;
  }

  }



?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>PLUG UPP | Cart Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Downy Shoes Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="../css/shop.css" type="text/css" media="screen" property="" />
	<link href="../css/style7.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Owl-carousel-CSS -->
	<link rel="stylesheet" type="text/css" href="../css/checkout.css">
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="../css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<!-- banner -->
	<div class="banner_top innerpage" id="home">
		<div class="wrapper_top_w3layouts">
			<div class="header_agileits">
				<div class="logo inner_page_log">
					<h1><a class="navbar-brand" href="../index.php"><span>Plug</span> <i>Upp</i></a></h1>
				</div>
				<div class="overlay overlay-contentpush">
					<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

					<nav>
                    <ul>
							<li><a href="../index.php" class="active">Home</a></li>
							<!-- <li><a href="view/about.php">About</a></li>
							<li><a href="view/404.php">Team</a></li>-->
							<li><a href="view/shop.php">Shop Now</a></li>
							<li><a href="view/contact.php">Contact</a></li>
							<li><a href="../login/register.php">Signup</a></li>
							<li><a href="../login/login.php">Login</a></li>
						</ul>
					</nav>
				</div>
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
				<!-- cart details -->
				<div class="top_nav_right">
					<div class="shoecart shoecart2 cart cart box_1">
					<form action="cart.php" method="post" class="last">
							<!-- <input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">-->

							<button class="top_shoe_cart" type="submit" name="submit" value="" ><i class="fa fa-cart-arrow-down" aria-hidden="true"> (<?php echo $count_cart[0]["SUM(qty)"]; ?>)</i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- //cart details -->
		<!-- search -->
		<div class="search_w3ls_agileinfo">
			<div class="cd-main-header">
				<ul class="cd-header-buttons">
					<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
				</ul>
			</div>
			<div id="cd-search" class="cd-search">
				<form action="cart.php" method="post">
				<button class="top_shoe_cart" type="submit" name="submit" value="" ><i class="fa fa-cart-arrow-down" aria-hidden="true"> (<?php echo $count_cart[0]["SUM(qty)"]; ?>)</i></button>			</div>
		</div>
		<!-- //search -->
		<div class="clearfix"></div>
		<!-- /banner_inner -->
		<div class="services-breadcrumb_w3ls_agileinfo">
			<div class="inner_breadcrumb_agileits_w3">

				<ul class="short">
					<li><a href="../index.php">Home</a><i>|</i></li>
					<li>Cart</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>

	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="privacy about">
				<h3>Ca<span>rt</span></h3>

				<div class="checkout-right">
					<h4>Your shopping cart contains: <span><?php echo $count_cart[0]["SUM(qty)"]; ?> Products</span></h4>
					<table class="timetable_sub">
						<thead>
							<tr>
							
								<th>Product Image</th>
								<th>Quantity</th>
								<th>Product Name</th>
								<th>Price</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>

						<?php 
						$cart_option = select_cart_ctrl();
						foreach ($cart_option as $cart_one){

						?>

								<tr class="rem1">
								
								<td class="invert-image"><img src="<?php echo $cart_one['product_image'];?> " alt=" " class="img-responsive"></td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
                                           
											<form method="POST">
											<input type="hidden" name="pid" value="<?php echo $cart_one['product_id'] ?>">
											<input type="number" name="cartitem" value="<?php echo $cart_one['qty']?>">								
											<button type="submit"><b>Update</b></button>
											</form>
                                          
										</div>
									</div>
								</td>
								<td class="invert"><?php echo $cart_one['product_title'];?></td>

								<td class="invert">GH¢ <?php echo $cart_one['product_price']*$cart_one['qty'];?></td>
								<td class="invert">

                                    <!-- Delete product -->
									
									<!-- <button type="submit"><b>Delete</b></button>  -->
									
									<form action="../actions/remove_from_cart.php" method="GET">
									<input type="hidden" name="id" value="<?php echo $cart_one['product_id'] ?>">
									<button type="submit"><b>Delete</b></button> 
									</form>
									
								</td>
							</tr>
							

						</tbody>
							<?php }?>
					</table>
				</div>
				<div class="checkout-left">
					<div class="col-md-4 checkout-left-basket">
						<a href="checkout.php"><h4>Continue to checkout</h4> </a>
                       
					</div>
					

					<div class="clearfix"> </div>


					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- //top products -->
		<div class="mid_slider_w3lsagile">
			<div class="col-md-3 mid_slider_text">
				<h5>Some More Shoes</h5>
			</div>
			<div class="col-md-9 mid_slider_info">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class=""></li>
						<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="2" class=""></li>
						<li data-target="#myCarousel" data-slide-to="3" class=""></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="../images/g1.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="../images/g2.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="../images/g3.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="../images/g4.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
							</div>
						</div>
						<div class="item active">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="../images/g5.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="../images/g6.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="../images/g2.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="../images/g1.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="../images/g1.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="../images/g2.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="../images/g3.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="../images/g4.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="../images/g1.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="../images/g2.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="../images/g3.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="../images/g4.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
							</div>
						</div>
					</div>
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
					<!-- The Modal -->

				</div>
			</div>

			<div class="clearfix"> </div>
		</div>
		<!-- /newsletter-->
		<!-- <div class="newsletter_w3layouts_agile">
			<div class="col-sm-6 newsleft">
				<h3>Sign up for Newsletter !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form action="#" method="post">
					<input type="email" placeholder="Enter your email..." name="email" required="">
					<input type="submit" value="Submit">
				</form>
			</div>

			<div class="clearfix"></div>
		</div> -->
		<!-- //newsletter-->
		<!-- footer -->
		<div class="footer_agileinfo_w3">
		<div class="footer_inner_info_w3ls_agileits">
			<div class="col-md-3 footer-left">
				<h2><a href="../index.php"><span>Plug</span>Upp Shoes </a></h2>
				<p>Dealers in quality, affordable and durable Converse shoes and brand Sneakers</p>
				<!-- <ul class="social-nav model-3d-0 footer-social social two">
					<li>
						<a href="#" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="twitter">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="pinterest">
							<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul> -->
			</div>
			<div class="col-md-9 footer-right">
				<div class="sign-grds">
					<div class="col-md-4 sign-gd">
						<h4>Our <span>Information</span> </h4>
						<ul>
							<li><a href="../index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="404.php">Services</a></li>
							<li><a href="404.php">Short Codes</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>

					<div class="col-md-5 sign-gd-two">
						<h4>Store <span>Information</span></h4>
						<div class="address">
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Phone Number</h6>
									<p>+233 58 567 5874</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Email Address</h6>
									<p>Email :<a href="#"> info@plugupp.com</a></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Location</h6>
									<p>1 University Avenue, Berekuso

									</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<!-- <div class="col-md-3 sign-gd flickr-post">
						<h4>Flickr <span>Posts</span></h4>
						<ul>
							<li><a href="single.php"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.php"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.php"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.php"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.php"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.php"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.php"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.php"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.php"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
						</ul>
					</div> -->
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>

			<p class="copy-right-w3ls-agileits">&copy 2018 Plug Upp Shoes. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	<!-- //footer -->
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- cart-js -->
	<script src="../js/minicart.js"></script>
	<script>
		shoe.render();

		shoe.cart.on('shoe_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<!-- /nav -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<script src="../js/classie.js"></script>
	<script src="../js/demo1.js"></script>
	<!-- //nav -->
	<!--search-bar-->
	<script src="../js/search.js"></script>
	<!--//search-bar-->
	<!--quantity-->
	<script>
		$('.value-plus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
		});
	</script>
	<!--quantity-->
	<script>
		$(document).ready(function (c) {
			$('.close1').on('click', function (c) {
				$('.rem1').fadeOut('slow', function (c) {
					$('.rem1').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close2').on('click', function (c) {
				$('.rem2').fadeOut('slow', function (c) {
					$('.rem2').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close3').on('click', function (c) {
				$('.rem3').fadeOut('slow', function (c) {
					$('.rem3').remove();
				});
			});
		});
	</script>

	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="../js/move-top.js"></script>
	<script type="text/javascript" src="../js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smoth-scrolling -->
	<script type="text/javascript" src="../js/bootstrap-3.1.1.min.js"></script>


</body>

</html>