<?php
session_start();error_reporting(0);session_unset();
?>
<html>
	<head>
		<title>CSED Research</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
       <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
	<body>
		<div id="page-wrapper">
			<div id="header-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="2u">
                            <a href="http://thapar.edu" id="header1">
                                <embed src="logo.png">
                            </a>
                        </div>
                        <div class="10u">
							<header id="header">
                                <h1><a id = "logo" href=#>Computer Science and Engineering Department</a></h1>
								<nav id="nav">
									<a href="index1.html" class="current-page-item">Home</a>
									<a href="twocolumn1.html">People</a>
								</nav>
							</header>
						</div>
					</div>
				</div>
			</div>
			<div id="banner-wrapper">
				<div class="container">
					<div id="banner">
						<h2>Put something cool here!</h2>
						<span>And put something almost as cool here, but a bit longer ...</span>
					</div>

				</div>
			</div>
			<div id="main">
				<div class="container">
					<div class="row main-row">
						<div class="4u 12u(mobile)">

							<section>
								<h2>Welcome to Minimaxing!</h2>
								<p>This is <strong>Minimaxing</strong>, a fully responsive HTML5 site template designed by <a href="http://n33.co">n33</a> and released for free by <a href="http://html5up.net">HTML5 UP</a>. It features
								a simple, lightweight design, solid HTML5 and CSS3 code, and full responsive support for desktop, tablet, and mobile displays.</p>
								<footer class="controls">
									<a href="http://html5up.net" class="button">More cool designs ...</a>
								</footer>
							</section>

						</div>
						<div class="4u 12u(mobile)">

							<section>
								<h2>Who are you guys?</h2>
								<ul class="small-image-list">
									<li>
										<a href=#><img src="images/pic2.jpg" alt="" class="left" /></a>
										<h4>Jane Anderson</h4>
										<p>Varius nibh. Suspendisse vitae magna eget et amet mollis justo facilisis amet quis.</p>
									</li>
									<li>
										<a href="#"><img src="images/pic1.jpg" alt="" class="left" /></a>
										<h4>James Doe</h4>
										<p>Vitae magna eget odio amet mollis justo facilisis amet quis. Sed sagittis consequat.</p>
									</li>
								</ul>
							</section>

						</div>
						<div class="4u 12u(mobile)">
							<section class="jumbotron">
                                <center><h2>Log In</h2></center>
                                <form class="form-group" role="form" method="post" name="form1" action="sign_process.php">
                                    <div class="form-group">
                                        <label for="usr">username:</label>
                                        <input type="text" class="form-control" id="usr" name="uname"><br>
                                        <label for="pwd">password:</label>
                                        <input type="password" class="form-control" id="pwd" name="password">
                                        <br>
                                        <center>
                                        <button type='submit' class="btn btn-primary btn-lg" name="Submit">Log In</button>
                                        </center>
                                    </div>
                                </form>
								<!--<h2>How about some links?</h2>
								<div>
									<div class="row">
										<div class="6u 12u(mobile)">
											<ul class="link-list">
												<li><a href="#">Sed neque nisi consequat</a></li>
												<li><a href="#">Dapibus sed mattis blandit</a></li>
												<li><a href="#">Quis accumsan lorem</a></li>
												<li><a href="#">Suspendisse varius ipsum</a></li>
												<li><a href="#">Eget et amet consequat</a></li>
											</ul>
										</div>
										<div class="6u 12u(mobile)">
											<ul class="link-list">
												<li><a href="#">Quis accumsan lorem</a></li>
												<li><a href="#">Sed neque nisi consequat</a></li>
												<li><a href="#">Eget et amet consequat</a></li>
												<li><a href="#">Dapibus sed mattis blandit</a></li>
												<li><a href="#">Vitae magna sed dolore</a></li>
											</ul>
										</div>
									</div>
								</div>-->
							</section>

						</div>
					</div>
					<div class="row main-row">
						<div class="6u 12u(mobile)">

							<section>
								<h2>An assortment of pictures and text</h2>
								<p>Duis neque nisi, dapibus sed mattis quis, rutrum et accumsan.
								Suspendisse nibh. Suspendisse vitae magna eget odio amet mollis
								justo facilisis quis. Sed sagittis mauris amet tellus gravida
								lorem ipsum dolor sit amet consequat blandit lorem ipsum dolor
								sit amet consequat sed dolore.</p>
								<ul class="big-image-list">
									<li>
										<a href="#"><img src="images/pic3.jpg" alt="" class="left" /></a>
										<h3>Magna Gravida Dolore</h3>
										<p>Varius nibh. Suspendisse vitae magna eget et amet mollis justo
										facilisis amet quis consectetur in, sollicitudin vitae justo. Cras
										Maecenas eu arcu purus, phasellus fermentum elit.</p>
									</li>
									<li>
										<a href="#"><img src="images/pic4.jpg" alt="" class="left" /></a>
										<h3>Magna Gravida Dolore</h3>
										<p>Varius nibh. Suspendisse vitae magna eget et amet mollis justo
										facilisis amet quis consectetur in, sollicitudin vitae justo. Cras
										Maecenas eu arcu purus, phasellus fermentum elit.</p>
									</li>
									<li>
										<a href="#"><img src="images/pic5.jpg" alt="" class="left" /></a>
										<h3>Magna Gravida Dolore</h3>
										<p>Varius nibh. Suspendisse vitae magna eget et amet mollis justo
										facilisis amet quis consectetur in, sollicitudin vitae justo. Cras
										Maecenas eu arcu purus, phasellus fermentum elit.</p>
									</li>
								</ul>
							</section>

						</div>
						<div class="6u 12u(mobile)">

							<article class="blog-post">
								<h2>Just another blog post</h2>
								<a class="comments" href="#">33 comments</a>
								<a href="#"><img src="images/pic6.jpg" alt="" class="top blog-post-image" /></a>
								<h3>Magna Gravida Dolore</h3>
								<p>Aenean non massa sapien. In hac habitasse platea dictumst.
								Maecenas sodales purus et nulla sodales aliquam. Aenean ac
								porttitor metus. In hac habitasse platea dictumst. Phasellus
								blandit turpis in leo scelerisque mollis. Nulla venenatis
								ipsum nec est porta rhoncus. Mauris sodales sed pharetra
								nisi nec consectetur. Cras elit magna, hendrerit nec
								consectetur in, sollicitudin vitae justo. Cras amet aliquet
								Aliquam ligula turpis, feugiat id fermentum malesuada,
								rutrum eget turpis. Mauris sodales sed pharetra nisi nec
								consectetur. Cras elit magna, hendrerit nec consectetur
								in sollicitudin vitae.</p>
								<footer class="controls">
									<a href="#" class="button">Continue Reading</a>
								</footer>
							</article>

						</div>
					</div>
				</div>
			</div>
			<div id="footer-wrapper">
				<div class="container">
					<div class="row">
						<div class="8u 12u(mobile)">

							<section>
								<h2>How about a truckload of links?</h2>
								<div>
									<div class="row">
										<div class="3u 12u(mobile)">
											<ul class="link-list">
												<li><a href="#">Sed neque nisi consequat</a></li>
												<li><a href="#">Dapibus sed mattis blandit</a></li>
												<li><a href="#">Quis accumsan lorem</a></li>
												<li><a href="#">Suspendisse varius ipsum</a></li>
												<li><a href="#">Eget et amet consequat</a></li>
											</ul>
										</div>
										<div class="3u 12u(mobile)">
											<ul class="link-list">
												<li><a href="#">Quis accumsan lorem</a></li>
												<li><a href="#">Sed neque nisi consequat</a></li>
												<li><a href="#">Eget et amet consequat</a></li>
												<li><a href="#">Dapibus sed mattis blandit</a></li>
												<li><a href="#">Vitae magna sed dolore</a></li>
											</ul>
										</div>
										<div class="3u 12u(mobile)">
											<ul class="link-list">
												<li><a href="#">Sed neque nisi consequat</a></li>
												<li><a href="#">Dapibus sed mattis blandit</a></li>
												<li><a href="#">Quis accumsan lorem</a></li>
												<li><a href="#">Suspendisse varius ipsum</a></li>
												<li><a href="#">Eget et amet consequat</a></li>
											</ul>
										</div>
										<div class="3u 12u(mobile)">
											<ul class="link-list">
												<li><a href="#">Quis accumsan lorem</a></li>
												<li><a href="#">Sed neque nisi consequat</a></li>
												<li><a href="#">Eget et amet consequat</a></li>
												<li><a href="#">Dapibus sed mattis blandit</a></li>
												<li><a href="#">Vitae magna sed dolore</a></li>
											</ul>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="4u 12u(mobile)">
							<section>
								<h2>Something of interest</h2>
								<p>Duis neque nisi, dapibus sed mattis quis, rutrum accumsan sed.
								Suspendisse eu varius nibh. Suspendisse vitae magna eget odio amet
								mollis justo facilisis quis. Sed sagittis mauris amet tellus gravida
								lorem ipsum dolor sit amet consequat blandit.</p>
								<footer class="controls">
									<a href="#" class="button">Oh, please continue ....</a>
								</footer>
							</section>

						</div>
					</div>
					<div class="row">
						<div class="12u">

							<div id="copyright">
								&copy; CSED, Thapar University. All rights reserved. | Design: <a>Akshit Arora, Chahak Gupta and Abhinav Garg</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
	</body>
</html>
<?php
session_destroy();
?>