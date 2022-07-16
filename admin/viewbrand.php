<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
//Getting neccessary files
    // require_once("../controllers/user_controller.php");
    require_once("../controllers/product_controller.php");
    require_once("../settings/core.php");

    //Enforcing admin only success
	// if(!admin_user()){
	// 	header("Location:../index.php");
	// }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Grids :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->

 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head>
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
                <nav class="navbar navbar-inverse">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a class="navbar-brand" href="../index.php"><span class="fa fa-area-chart"></span><img src="../images/plug_upp_w.svg" alt="logo" style="width: 60px;"><span class="dashboard_text"></span></a></h1>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="sidebar-menu">
                            <li class="header">MAIN NAVIGATION</li>
                            <li class="treeview">
                                <a href="dashboard.php">
                                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-laptop"></i>
                                    <span>Product</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="viewproduct.php"><i class="fa fa-angle-right"></i> View Products</a></li>
                                    <li><a href="addproduct.php"><i class="fa fa-angle-right"></i> Add Products</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-laptop"></i>
                                    <span>Brands</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="viewbrand.php"><i class="fa fa-angle-right"></i> View Brands</a></li>
                                    <li><a href="addbrand.php"><i class="fa fa-angle-right"></i> Add Brands</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-laptop"></i>
                                    <span>Categories</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="viewcat.php"><i class="fa fa-angle-right"></i> View Categories</a></li>
                                    <li><a href="addcat.php"><i class="fa fa-angle-right"></i> Add Categories</a></li>
                                </ul>
                            </li>

                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-edit"></i> <span>Purchase</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="orders.php"><i class="fa fa-angle-right"></i> Orders</a></li>
                                   <!--  <li><a href="validation.php"><i class="fa fa-angle-right"></i> Transactions</a></li>-->
                                </ul>
                                  </li>       
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </aside>
	</div>
		<!--left-fixed -navigation-->

		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">

				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">4</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 3 new messages</h3>
									</div>
								</li>
								<li><a href="#">
								   <div class="user_img"><img src="images/1.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet</p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>
								</a></li>
								<li class="odd"><a href="#">
									<div class="user_img"><img src="images/4.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								  <div class="clearfix"></div>
								</a></li>
								<li><a href="#">
								   <div class="user_img"><img src="images/3.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>
								</a></li>
								<li><a href="#">
								   <div class="user_img"><img src="images/2.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>
								</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all messages</a>
									</div>
								</li>
							</ul>
						</li>


					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">


				<!--search-box-->
				<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form>
				</div><!--//end-search-box-->

				<div class="profile_details">
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">
									<span class="prfil-img"><img src="images/2.jpg" alt=""> </span>
									<div class="user-name">
                                        <?php
                                       /*  $name = get_user_name_by_id_ctrl(get_session_user_id());
                                            echo "<p> $name</p>"; */
                                        ?>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>
								</div>
							</a>
							<ul class="dropdown-menu drp-mnu">
                                        <script src="../js/auth.js"></script>
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
								<li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li>
								<li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li>

                                <?php /* echo "<li> <a href='#' onclick='onsignout()' ><i class='fa fa-sign-out'></i> Logout</a> </li>"; */?>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<h2 class="title1">All Brands</h2>
				<div class="grids widget-shadow">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Brand ID</th>
      <th scope="col">Brand name</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
      <!-- <th scope="col">Status</th> -->
      <!-- <th scope="col"></th> -->
    </tr>
  </thead>

  <tbody>
	<tr>
	<script src="../js/upload_book.js"></script>
	<?php
		$brandlist = select_all_brands_ctrl();

		foreach ($brandlist as $brand) {
			$bid = $brand['brand_id'];

		 ?>
		<td><?php echo $bid ?></td>
		<td><?php echo $brand['brand_name']?></td>
		<td>
		<form action="updatebrand.php" method="GET">
		<input type="hidden" value="<?php echo $brand['brand_id'] ?>" name="bid">
			<button type="submit" name="submit" class="update_button">Update</button>
			</form> 
		</td>
		<td>
		<form action="../actions/delbrand.php" method="POST">
		<input type="hidden" value="<?php echo $brand["brand_id"] ?>" name="bid">
		<button type="submit" name="submit" class="delete_button">Delete</button>
		</form>
	</td>

		<!-- /* $books = select_all_book_ctr();

		foreach ($books as $item) {

			$id = $item["book_id"];
			$title = $item["title"];
			$author = get_author_name_by_id_ctrl($item["author_id"]);
			$price = $item["price"];
			$status = $item["book_status"];
			$image = $item["image_location"] ?? "images/1.jpg";

			echo "<tr>";
				echo "<td>

					<img src='$image' style='display:block'>
					$id
				</td>";
				echo "<td>$title</td>\n";
				echo "<td>$author</td>\n";
				echo "<td>$price</td>\n";
				echo "<td>\n
					<select class='form-select' aria-label='Default select example' id='status_$id' onchange='return onStatusChange(this.id,this.value)'>\n";
						$states = array("published","draft", "deleted");
						foreach ($states as $current) {
							if ($current == $status){
								echo "<option value='$current' selected>$current</option>\n";
							} else {
								echo "<option value='$current'>$current</option>\n";
							}
						}
				echo "<td><a href='media.php?id=$id' class='btn'>Edit</td>";
					echo "</select></td>";
				echo "</tr>";
		} */ -->
	

	</tr>
	<?php } ?>
  </tbody>
</table>

				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>		</div>
        <!--//footer-->
	</div>

	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->

	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;

			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->

	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->

	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>

</body>
</html>