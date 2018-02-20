<!DOCTYPE HTML>
<html>
<head>
<title>Gallery</title>
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
<script type="text/javascript" src="../js/jquery.fancybox.js"></script>
	   <script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

			});
		</script>


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
				 <li><a href="blog.php">Blog</a></li>
				 <li class="active"><a href="gallery.php">Gallery</a></li>
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
<div class="gallery">
	 <div class="container">
		 <h2>Gallery</h2>
		 <div class="event-pics">
				<a class="fancybox" href="../images/1.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="../images/1.jpg" class="img-style row6" alt=""><span> </span></a>
				<a class="fancybox" href="../images/2.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="../images/2.jpg" class="img-style row6" alt=""><span> </span></a>
				<a class="fancybox" href="../images/3.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="../images/3.jpg" class="img-style row6" alt=""><span> </span></a>
				<a class="fancybox" href="../images/4.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="../images/4.jpg" class="img-style row6" alt=""><span> </span></a>
				<div class="clearfix"></div>
				<a class="fancybox" href="../images/5.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="../images/5.jpg" class="img-style row6" alt=""><span> </span></a>
				<a class="fancybox" href="../images/6.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="../images/6.jpg" class="img-style row6" alt=""><span> </span></a>
				<a class="fancybox" href="../images/7.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="../images/7.jpg" class="img-style row6" alt=""><span> </span></a>
				<a class="fancybox" href="../images/8.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="../images/8.jpg" class="img-style row6" alt=""><span> </span></a>
				<div class="clearfix"></div>
				<a class="fancybox" href="../images/9.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="../images/9.jpg" class="img-style row6" alt=""><span> </span></a>
				<a class="fancybox" href="../images/10.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="../images/10.jpg" class="img-style row6" alt=""><span> </span></a>
				<a class="fancybox" href="../images/11.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="../images/11.jpg" class="img-style row6" alt=""><span> </span></a>
				<a class="fancybox" href="../images/1.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="../images/1.jpg" class="img-style row6" alt=""><span> </span></a>
				<div class="clearfix"></div>
		 </div>
	 </div>
</div>
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