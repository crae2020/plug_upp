<?php
//Getting neccessary files
// require("../controllers/customer_controller.php");
require("../controllers/product_controller.php");
require("../settings/core.php");

//Enforcing admin only success

// if(!admin_user()){
// 	header("Location:../index.php");
// }

$pid = $_GET['pid'];
$product_detail = select_one_product_ctrl($pid);
// print_r($product_detail);
$pcat = $product_detail['product_cat'];
$pbrand = $product_detail['product_brand'];
$ptitle = $product_detail['product_title'];
$pprice = $product_detail['product_price'];
$pdescr = $product_detail['product_desc'];
$pimage = $product_detail['product_image'];
$pkey = $product_detail['product_keywords'];

// $pimage = $_FILES['pimage']["name"];
// $tmp = $_FILES['pimage']["tmp_name"];

    // echo $ptitle;
    // echo $pcat;
    // print_r($tmp);
    // echo $pimage;

    //  $folder_path = file_upload("images", "product", $tmp, $pimage);
    //     echo $folder_path;

    $check_update = update_all_products_ctrl($pid, $pcat, $pbrand, $ptitle, $pprice, $pdescr, $pimage, $pkey);
    if ($check_update){

    }
    else{
        return false;
    }

    // $pname_update = $_POST['update_product'];
    // echo($pname_update);
    // $check_update = update_all_products_ctrl($bid, $bname_update);
   /*  if ($check_update) {
        // header("Location: viewbrand.php");
    }
    else{
        return false;
    } */


?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Media :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>


	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />

	<!-- font-awesome icons CSS -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons CSS -->

	<!-- side nav css file -->
	<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css' />
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
				<div class="profile_details_left">
					<!--notifications of menu start -->
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
								<path d="m0,0l404,0l0,77l-404,0l0,-77z" />
							</svg>
						</label>
					</form>
				</div>
				<!--//end-search-box-->

				<div class="profile_details">
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">
									<span class="prfil-img"><img src="images/2.jpg" alt=""> </span>
									<div class="user-name">
										<?php
										/* $name = get_user_name_by_id_ctrl(get_session_user_id());
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
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
								<li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li>
								<li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li>
								<?php /* echo "<li> <a href='#' onclick='onsignout()' ><i class='fa fa-sign-out'></i> Logout</a> </li>"; */ ?>
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
				<div class="media">
					<h2 class="title1">Update  Shoe Details</h2>
					<div class="bs-example5 widget-shadow" data-example-id="default-media">
						<!-- Button trigger modal -->


						<!-- <form action="../view/single.php" method="GET">
						<input type="hidden" id= "pid" name="pid" value="<?php /* echo($pid) */?>">
						</form>	 -->
						
						

						<form action='../actions/updateproductproc.php'method="POST" enctype='multipart/form-data'>
						<input type="hidden" id= "pid" name="pid" value="<?php echo($pid)?>">
						
						<div>
						<label for="title" class="form-label">Shoe Category</label>
						<select name= "category" id= "category" class="form-select" aria-label="Default select example" id="status" value="<?php echo $pcat ?>">>
							<?php
								$cat_option = select_all_categories_ctrl();

								if ($cat_option) {
									foreach($cat_option as $cat_one){
										$cat_id = $cat_one['cat_id'];
										$cat_name = $cat_one['cat_name'];

										echo "<option value = $cat_id>$cat_name </option>";
									}
								}
								else{
									echo "<option value = 'not available'>Category not available</option>'";
								}
							?>
							</select>
							<br>
						</div>

					<div>
						<label for="title" class="form-label">Shoe Brand</label>
						<select name= "brand" id= "brand" class="form-select" aria-label="Default select example" id="status" value="<?php echo $pbrand ?>">
							<?php
								$brand_option = select_all_brands_ctrl();

								if ($brand_option) {
									foreach($brand_option as $brand_one){
										$brand_id = $brand_one['brand_id'];
										$brand_name = $brand_one['brand_name'];

										echo "<option value = $brand_id>$brand_name </option>";
									}
								}
								else{
									echo "<option value = 'not available'>Brand not available</option>'";
								}
							?>
							</select>
							<br>
						</div>

							<div class="mb-3">
								<label for="title" class="form-label">Shoe Name</label>
								<input type="text" value="<?php echo $ptitle ?>" name="ptitle" id="ptitle" class="form-control" id="title" aria-describedby="emailHelp" required>
							</div>
							<div class="mb-3">
								<label for="id" class="form-label">Shoe Price</label>
								<input type="number" value="<?php echo $pprice ?>" name="pprice" id="pprice" required class="form-control" id="id" aria-describedby="emailHelp">
							</div>
							<div class="mb-3">
								<label for="description" class="form-label">Shoe description</label>
								<textarea class="form-control" value="<?php echo $pdescr ?>" name="pdescr" id="pdescr" required rows="3"></textarea>
							</div>
							<div class="mb-3">
								<label for="price" class="form-label">Shoe Image</label>
								<input type="file" value="<?php echo $pimage ?>" class="form-control" name="pimage" id="pimage" aria-describedby="emailHelp">
							</div>
							<div class="mb-3">
								<label for="publish_date" class="form-label">Shoe Keywords</label>
								<input type="text" value="<?php echo $pkey ?>" name="pkey" id="pkey" required class="form-control" id="publish_date" aria-describedby="emailHelp">
							</div>
					
							<button type="submit" name= "submit" class="btn btn-primary">Update</button>

							<script src="../js/form_validation.js">
							</script>
						
						</form>
					</div>
					
					

					

					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!--footer-->
	<div class="footer">
		<p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
	</div>
	<!--//footer-->
	</div>

	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
		$('.sidebar-menu').SidebarNav()
	</script>
	<!-- //side nav js -->

	<!-- Classie -->
	<!-- for toggle left push menu script -->
	<script src="js/classie.js"></script>
	<script>
		var menuLeft = document.getElementById('cbp-spmenu-s1'),
			showLeftPush = document.getElementById('showLeftPush'),
			body = document.body;

		showLeftPush.onclick = function() {
			classie.toggle(this, 'active');
			classie.toggle(body, 'cbp-spmenu-push-toright');
			classie.toggle(menuLeft, 'cbp-spmenu-open');
			disableOther('showLeftPush');
		};

		function disableOther(button) {
			if (button !== 'showLeftPush') {
				classie.toggle(showLeftPush, 'disabled');
			}
		}
	</script>
	<!-- //Classie -->
	<!-- //for toggle left push menu script -->

	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>

	<script>
		var query = new URLSearchParams(window.location.search);
		if (query.has("id")) {
			const g = new XMLHttpRequest();
			g.open("POST", "/akenkan/actions/book_processor.php");
			g.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			g.onreadystatechange = function() {
				if (g.readyState == XMLHttpRequest.DONE) {
					var json = JSON.parse(g.response)["genre_name"];
					var select = document.getElementById("genre");
					if (select.value != json){
						select.value = json;
					}
				}
			}
			g.send("action=get_genre&id=" + query.get("id"));


			const xhttp = new XMLHttpRequest();
			xhttp.open("POST", "/akenkan/actions/book_processor.php");
			xhttp.onreadystatechange = function() {
				if (xhttp.readyState == XMLHttpRequest.DONE) {
					var json = JSON.parse(xhttp.response);

					document.getElementById("id").value = json["book_id"];
					document.getElementById("title").value = json["title"];
					document.getElementById("description").value = json["description"];
					document.getElementById("publish_date").value = json["publish_date"].split(" ")[0];
					document.getElementById("status").value = json["book_status"];
					document.getElementById("author").value = json["author_id"];
					document.getElementById("publisher").value = json["publisher_id"];
					document.getElementById("price").value = json["price"];




				}
			}
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send("action=get_book&id=" + query.get("id"));

		}
	</script>
</body>

</html>