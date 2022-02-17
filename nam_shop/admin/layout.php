<?php
require_once'../../global.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> E-Shopper</title>
    <link href="<?=$CONTENT_URL ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$CONTENT_URL ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=$CONTENT_URL ?>/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=$CONTENT_URL ?>/css/price-range.css" rel="stylesheet">
    <link href="<?=$CONTENT_URL ?>/css/animate.css" rel="stylesheet">
	<link href="<?=$CONTENT_URL ?>/css/main.css" rel="stylesheet">
	<link href="<?=$CONTENT_URL ?>/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?=$CONTENT_URL ?>/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=$CONTENT_URL ?>/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=$CONTENT_URL ?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=$CONTENT_URL ?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=$CONTENT_URL ?>/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	
		
		<div class="header-middle" ><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.html"><img src="<?=$CONTENT_URL ?>/images/home/logo.png" alt="" /></a>
						</div>
					
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Tài khoản</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Đăng Nhập</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
				
	</header><!--/header-->
	
	<section>
		<div class="container">
		
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar" >
						<h2 >Danh mục quản trị</h2>
						<?php require_once'menu.php'; ?> 
					</div>
				</div>
				<div class="col-sm-9">
					<div class="right-sidebar" >
					<?php require_once $VIEW_NAME ?>	
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
				
	<footer id="footer"><!--Footer-->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="mx-auto p-1 bg-danger text-white text-center">Copyright © 2022 E-SHOPPER Inc. All rights reserved.</p>
				</div>
			</div>
		</div>
	</footer><!--/Footer-->
	
    <script src="<?=$CONTENT_URL ?>/js/jquery.js"></script>
	<script src="<?=$CONTENT_URL ?>/js/bootstrap.min.js"></script>
	<script src="<?=$CONTENT_URL ?>/js/jquery.scrollUp.min.js"></script>
	<script src="<?=$CONTENT_URL ?>/js/price-range.js"></script>
    <script src="<?=$CONTENT_URL ?>/js/jquery.prettyPhoto.js"></script>
    <script src="<?=$CONTENT_URL ?>/js/main.js"></script>
</body>
</html>