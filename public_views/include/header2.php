<!DOCTYPE HTML>
<!-- BEGIN html -->
<html lang = "en">
<!-- BEGIN head -->


<head>
	<title><?php echo $page_title ?></title>

	<!-- Meta Tags -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<?php
	if($page_name == "article_post"){
		$info = getPostInfo($conn,'blog',$_GET['id']);
		$bd = previewBody($info['body'], 22);
		echo '<meta property="og:title" content="" />
		    <meta property="og:image" content=http://philanthropycircuit.com/" />
				<meta property="og:image:width" content="450"/>
		<meta property="og:image:height" content="298"/>
		<meta property="og:description" content="" />';

echo '<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@mckodev">
<meta name="twitter:title" content="'.$info['title'].'">
<meta name="twitter:description" content="'.$bd.'">
<meta name="twitter:image" content="http://philanthropycircuit.com/'.$info['image_1'].'">
<meta name="twitter:image:width" content="280">
<meta name="twitter:image:height" content="150">';
	}

	elseif($page_name == "insight_post"){
		$info = getPostInfo($conn,'insight',$_GET['id']);
		$bd = previewBody($info['body'], 22);
		echo '<meta property="og:title" content="'.$info['title'].'" />
		    <meta property="og:image" content=http://philanthropycircuit.com/'.$info['image_1'].'" />
				<meta property="og:image:width" content="450"/>
		<meta property="og:image:height" content="298"/>
		<meta property="og:description" content="'.$bd.'" />';

echo '<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@mckodev">
<meta name="twitter:title" content="'.$info['title'].'">
<meta name="twitter:description" content="'.$bd.'">
<meta name="twitter:image" content="http://philanthropycircuit.com/'.$info['image_1'].'">
<meta name="twitter:image:width" content="280">
<meta name="twitter:image:height" content="150">';
}else{



	echo '<meta property="og:title" content="'.$page_title.'" />
			<meta property="og:image" content=http://philanthropycircuit.com/" />
			<meta property="og:image:width" content="450"/>
	<meta property="og:image:height" content="298"/>
	<meta property="og:description" content="" />';

echo '<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@mckodev">
<meta name="twitter:title" content="'.$page_title.'">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="http://philanthropycircuit.com/">
<meta name="twitter:image:width" content="280">
<meta name="twitter:image:height" content="150">';
}
	?>


	<!-- Favicon -->
	<link rel="shortcut icon" href="images/favicon1.png" type="image/x-icon" />

	<!-- Stylesheets -->
	<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700+Open+Sans:400,700" />
	<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link type="text/css" rel="stylesheet" href="css/reset.min.css" />
	<link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/animate.css" />
	<link type="text/css" rel="stylesheet" href="css/main-stylesheet.min.css" />
	<link type="text/css" rel="stylesheet" href="css/ot-lightbox.min.css" />
	<link type="text/css" rel="stylesheet" href="css/shortcodes.min.css" />
	<link type="text/css" rel="stylesheet" href="css/responsive.min.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!--[if lte IE 8]>
	<link type="text/css" rel="stylesheet" href="css/ie-ancient.min.css" />
	<![endif]-->

	<style>
	/* Custom CSS colors and fonts */
	/* Main body font size, font, color / default: 16px, Arial, #5e5e5e */
	/*body {
	font-size: 16px;
	font-family: Arial, sans-serif;
	color: #5e5e5e;
	}*/
	</style>

	<!-- Demo Only -->
	<link type="text/css" rel="stylesheet" href="css/_ot-demo.min.css" />

	<!-- END head -->
</head>

<!-- BEGIN body -->
<!-- <body> -->
<body class="ot-menu-will-follow">

	<!-- BEGIN .boxed -->
	<div class="boxed">

		<!-- BEGIN .header -->
		<div class="header">

			<!-- BEGIN .wrapper -->
			<div class="wrapper">

				<nav class="header-top">

						<div class="header-content">

							<div class="header-content-logo">
								<a href="#"><img src="images/logo3.jpg" data-ot-retina="images/logo@2x.png" alt="" /></a>
							</div>

							<div class="header-content-o">
								<a href="#" target="_blank"><img src="images/o1.jpg" alt="" /></a>
							</div>

						</div>

						<div class="main-menu-placeholder wrapper">
							<nav id="main-menu">
								<ul>
									<li><a href="index">Homepage</a>
									</li>

									<li><a href="about">About</a></li>
									<li><a href="insight"><span>Insights</span></a>
										<ul class="sub-menu">
											<li><a href="#">Topic</a>
												<ul class="sub-menu">
													<li><a href="report">Reports</a></li></li>
													<li><a href="articles">Articles</a></li>
													<li><a href="#">Resources</a></li>
												</ul>
											</li>
											<li><a href="#">Region</a>
												<ul class="sub-menu">
													<li><a href="#">North Africa</a></li>
													<li><a href="#">South Africa</a></li>
													<li><a href="#">East Africa</a></li>
													<li><a href="#">West Africa</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="#"><span>Latest</span></a>
										<ul class="sub-menu ot-mega-menu">
											<li class="lets-do-4">

												<div class="widget-split item">

													<!-- BEGIN .widget -->
													<div class="widget">

														<div class="widget-split item">
															<div class="widget">
																<h3>Latest Insight</h3>
																<div class="widget-content ot-w-article-list">

																	<?php getInsightHeader($conn) ?>

																</div>
															</div>
														</div>


														<!-- END .widget -->
													</div>

												</div>

												<div class="widget-split item">
													<div class="widget">
														<h3>Latest Reports</h3>
														<div class="widget-content ot-w-article-list">

															<?php getReportHeader($conn) ?>

														</div>
													</div>
												</div>

												<div class="widget-split item">
													<div class="widget">
														<h3>Latest African News</h3>
														<div class="widget-content ot-w-article-list">
															<?php 	getNewsHeader($conn, 'Africa') ?>
															<!-- <div class="item">
																<div class="item-header">
																	<a href="#" class="img-read-later-button rm-btn-small">Read later</a>
																	<a href="#"><img src="images/photos/image-18.jpg" alt="" /></a>
																</div>
																<div class="item-content">
																	<h4><a href="#">Meet DC's Legends of Tomorrow</a></h4>
																	<span class="item-meta">
																		<span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
																	</span>
																</div>
															</div>

															<div class="item">
																<div class="item-header">
																	<a href="#" class="img-read-later-button rm-btn-small">Read later</a>
																	<a href="#"><img src="images/photos/image-19.jpg" alt="" /></a>
																</div>
																<div class="item-content">
																	<h4><a href="#">YOU DECIDE: The Best Movie of 2015!</a></h4>
																	<span class="item-meta">
																		<span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
																	</span>
																</div>
															</div> -->


														</div>
													</div>
												</div>

												<div class="widget-split item">
													<div class="widget">

														<div class="widget-split item">
															<div class="widget">
																<h3>Latest Global News</h3>
																<div class="widget-content ot-w-article-list">

																	<?php 	getNewsHeader($conn, 'Global') ?>

																</div>
															</div>
														</div>

													</div>
												</div>

											</li>
										</ul>
									</li>
									<li><a href="#"><span>News</span></a>
										<ul class="sub-menu">
											<li><a href="africa">Africa</a></li>
											<li><a href="global">Global</a></li>
										</ul>
									</li>
									<li><a href="#"><span>Opportunities</span></a>
										<ul class="sub-menu">
											<li><a href="grants">Grants</a></li>
											<li><a href="trainings">Trainings/Webinars</a></li>
										</ul>
									</li>
									<!-- <li><a href="team">Our Team</a></li> -->
									<!-- <li><a href="archive">Directory</a></li> -->
									<li><a href="contact">Contact us</a></li>
								</ul>
							</nav>
						</div>

						<!-- END .wrapper -->
					</div>

					<!-- END .header -->
				</div>
