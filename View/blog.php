<!DOCTYPE HTML>
<html>
<head>
<title>Blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Stylesheets Links -->
<link rel="stylesheet" href="../css/touchTouch.css" type="text/css" media="all" />
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="../css/style.css" rel='stylesheet' type='text/css' />

<!-- script Links -->
<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/responsiveslides.min.js"></script>

</head>
<body>
<!-- banner --> 
<div class="banner2">	  
	 <div class="header">
			 <div class="logo">
				 <a href="../index.html"><img src="../images/logo1.png" alt=""/></a>
			 </div>
			 <div class="top-menu">
				 <span class="menu"></span>
				 <ul class="navig">
					 <li><a href="../index.php">Home</a></li>
					 <li><a href="about.php">About</a></li>
					 <li class="active"><a href="blog.php">Blog</a></li>
					 <li><a href="gallery.php">Gallery</a></li>
					 <li><a href="contact.php">Contact</a></li>
					 <li><?php include('./login.php'); ?></li>

				 </ul>
			 </div>
			 <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$("ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->
			 <div class="clearfix"></div>
	 </div>	  
</div>
<!---->
<!-- blog-page -->
<div class="blog">
		<div class="container">
			<div class="blog-head">
				<h2>Blog</h2>
			</div>
			<div class="col-md-8 blog-left" >
				<div class="blog-info">
					<h3><a href="single.html">Fringilla condimentum</a></h3>
					<p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on march 2, 2015 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
					<div class="blog-info-text">
						<div class="blog-img">
							<a href="single.html"> <img src="images/img12.jpg" class="img-responsive zoom-img" alt=""/></a>
						</div>
						<p class="snglp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor If you are going to use a passage of Lorem Ipsum,
							you need to be sure there isn't anything embarrassing hidden in the middle of text. 
							There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration  
							in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
							you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
						<a href="single.html" class="btn btn-primary hvr-rectangle-in">Read More</a>
					</div>	
				</div>
				<div class="blog-info">
					<h3><a href="single.html">Fringilla condimentum</a></h3>
					<p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on march 2, 2015 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
					<div class="blog-info-text">
						<div class="blog-img">
							<a href="single.html"> <img src="images/img13.jpg" class="img-responsive zoom-img" alt=""/></a>
						</div>
						<p class="snglp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor If you are going to use a passage of Lorem Ipsum,
							you need to be sure there isn't anything embarrassing hidden in the middle of text. 
							There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration  
							in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
							you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
						<a href="single.html" class="btn btn-primary hvr-rectangle-in">Read More</a>
					</div>	
				</div>	
				<div class="blog-info">
					<h3><a href="single.html">Fringilla condimentum</a></h3>
					<p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on march 2, 2015 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
					<div class="blog-info-text">
						<div class="blog-img">
							<a href="single.html"> <img src="images/img14.jpg" class="img-responsive zoom-img" alt=""/></a>
						</div>
						<p class="snglp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor If you are going to use a passage of Lorem Ipsum,
							you need to be sure there isn't anything embarrassing hidden in the middle of text. 
							There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration  
							in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
							you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
						<a href="single.html" class="btn btn-primary hvr-rectangle-in">Read More</a>
					</div>	
				</div>	
				
			</div>	
			<div class="col-md-4 single-page-right">
				<div class="category blog-ctgry">
					<h4>Categories</h4>
					<div class="list-group">
						<a href="single.html" class="list-group-item">Cras justo odio</a>
						<a href="single.html" class="list-group-item">Dapibus ac facilisis in</a>
						<a href="single.html" class="list-group-item">Morbi leo risus</a>
						<a href="single.html" class="list-group-item">Porta ac consectetur ac</a>
						<a href="single.html" class="list-group-item">Vestibulum at eros</a>
						<a href="single.html" class="list-group-item">Cras justo odio</a>
						<a href="single.html" class="list-group-item">Cras justo odio</a>
						<a href="single.html" class="list-group-item">Cras justo odio</a>
					</div>
				</div>	
				<div class="recent-posts">
					<h4>Recent posts</h4>
					<div class="recent-posts-info">
						<div class="posts-left sngl-img">
							<a href="single.html"> <img src="images/img16.jpg" class="img-responsive zoom-img" alt=""/> </a>
						</div>
						<div class="posts-right">
							<label>MARCH 5, 2015</label>
							<h5><a href="single.html">Finibus Bonorum</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing incididunt.</p>
							<a href="single.html" class="btn btn-primary hvr-rectangle-in">Read More</a>
						</div>
						<div class="clearfix"> </div>
					</div>	
					<div class="recent-posts-info">
						<div class="posts-left sngl-img">
							<a href="single.html"> <img src="images/img17.jpg" class="img-responsive zoom-img" alt=""/></a>
						</div>
						<div class="posts-right">
							<label>MARCH 1, 2015</label>
							<h5><a href="single.html">Finibus Bonorum</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing incididunt.</p>
							<a href="single.html" class="btn btn-primary hvr-rectangle-in">Read More</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>				
			</div>
			<div class="clearfix"> </div>
			<nav>
				<ul class="pagination">
					<li>
						<a href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li>
						<a href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>	
	</div>	
	<!--//blog-->

<!---->
<div class="footer">
	 <div class="container">
		 <div class="ftr-sec">
			 <div class="col-md-4 ftr-grid">
				 <h3>Text Module</h3>
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut odio ut quam convallis ultricies. Morbi rutrum lectus tortor. Cras vitae semper mi, et feugiat dolor.</p>
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut odio ut quam convallis ultricies. Morbi rutrum lectus tortor. Cras vitae semper mi, et feugiat dolor.</p>
			 </div>
			 <div class="col-md-4 ftr-grid2">
				 <h3>Pages</h3>
				 <ul>
					 <li><a href="index.html"><span></span>Home</a></li>
					 <li><a href="about.html"><span></span>About</a></li>
					 <li><a href="program.html"><span></span>Programs</a></li>
					 <li><a href="blog.html"><span></span>Blog</a></li>	
					 <li><a href="gallery.html"><span></span>Gallery</a></li>
					 <li><a href="contact.html"><span></span>Contact</a></li>
				 </ul>
			 </div>
			 <div class="col-md-4 ftr-grid3">
				 <h3>Quick links</h3>
				 <ul>
					 <li><a href="about.html"><span></span>History</a></li>
					 <li><a href="about.html"><span></span>Departments</a></li>
					 <li><a href="gallery.html"><span></span>Services</a></li>
					 <li><a href="blog.html"><span></span>Guidancs</a></li>	
					 <li><a href="about.html"><span></span>Team</a></li>
					 <li><a href="contact.html"><span></span>Contact</a></li>
				 </ul>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="copywrite">
	 <div class="container">
		<p>Copyright © 2018 Abasyn University. All rights reserved</p>
	</div>
</div>
<!---->
</body>
</html>