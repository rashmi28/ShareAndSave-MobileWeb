<!DOCTYPE HTML>
<!--
	Striped 2.5 by HTML5 Up!
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php session_start()?>
<html>
	<head>
		<title>Striped by HTML5 UP</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700|Open+Sans+Condensed:300,700" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
	</head>

	<!--
		Note: Set the body element's class to "left-sidebar" to position the sidebar on the left.
		Set it to "right-sidebar" to, you guessed it, position it on the right.
	-->
	<body class="left-sidebar">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Content -->
					<div id="content">
						<div id="content-inner">
					<article class="is-post is-post-excerpt">
                                    <header>
                                        <h2><a href="#">Edit preferences</a></h2>
                                    </header>
                                    <p>
                                        <form class="register active" action="update_preferences.php" method="post">
											<div class="column">
												<input type="hidden" name="user_name" value=<?php echo $_SESSION['user'];?>>
												<div>
													<label>Address:</label>
													<input type="text" name="user_address"/>
												</div>
											
												<div>
													<label>Frequency:</label>
													<input type="text" name="user_frequency"/>
												</div>
												<div>
													<label>Distance:</label>
													<input type="user_distance" />
												</div>
											</div>
											<div class="bottom">
											
											<input type="submit" value="Update" />
												<div class="clear"></div>
											</div>
										</form>
                                    </p>
                                </article>

							<!-- Pager
								<div class="pager">-->
									<!--<a href="#" class="button previous">Previous Page</a>
									<div class="pages">
										<a href="#" class="active">1</a>
										<a href="#">2</a>
										<a href="#">3</a>
										<a href="#">4</a>
										<span>&hellip;</span>
										<a href="#">20</a>
									</div>
									<a href="#" class="button next">Next Page</a>
									-->
                            <!--</div>-->


                    </div>
                </div>

            <!-- Sidebar -->
					<div id="sidebar">
					
						<!-- Logo -->
							<div id="logo">
								<h1>Share and Save</h1>
							</div>
					
						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li ><a href="home.php">Dashboard</a></li>
									<li><a href="preference.php">Preferences</a></li>
									<li><a href="logout.php">Logout</a></li>
								</ul>
							</nav>

						<!-- Search -->
							<section class="is-search">
								<form method="post" action="#">
									<input type="text" class="text" name="search" placeholder="Search" />
								</form>
							</section>
					
						
							<div id="copyright">
								<p>
									&copy; 2014 Share and Save.<br />
									Images: <a href="http://n33.co">n33</a>, <a href="http://fotogrph.com">fotogrph</a><br />
									Design: <a href="http://html5up.net/">HTML5 UP</a>
								</p>
							</div>

					</div>

			</div>

	</body>
</html>