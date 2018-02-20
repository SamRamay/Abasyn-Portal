<!DOCTYPE HTML>
<html>
<head>
<title>Abasyn University</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Stylesheets Links -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- script Links -->
<script src="js/bootstrap.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/responsiveslides.min.js"></script>

</head>
<body>
<!-- banner -->
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>  
<div class="banner">	  
	 <div class="header">
			 <div class="logo">
				 <a href="index.html"><img src="images/logo1.png" alt=""/></a>
			 </div>
			 <div class="top-menu">
				 <span class="menu"></span>
				 <ul class="navig">
					 <li class="active"><a href="index.php">Home</a></li>
					 <li><a href="./View/about.php">About</a></li>
					 <li><a href="./View/blog.php">Blog</a></li>
					 <li><a href="./View/gallery.php">Gallery</a></li>
					 <li><a href="./View/contact.php">Contact</a></li>
					 <li><?php include('./view/login.php'); ?></li>

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
	 <div class="slider">
		 <div class="caption">
			 <div class="container">
				  <div class="callbacks_container">
					  <ul class="rslides" id="slider">
                        <li><h3>We are providing a good environment to the students</h3></li>
                        <li><h3>One of the best institutes ofering Bachelors and Masters</h3></li>	
                   		</ul>	
						<div class="clearfix"></div>
				  </div>
			  </div>
		  </div>
	  </div>
	  															<!--Blog Feed-->
	  <div class="banner-grids">
		  <div class="container">
			 <div class="col-md-4 banner-grid">
				 <h3>Blog Feed</h3>
				 <div class="banner-grid-sec">
					 <div class="grid_info">
						 <div class="blg-pic">
							 <img src="images/trip1.jpg" class="img-responsive" alt="">
						 </div>
						 <div class="blg-pic-info">
							 <h4><a href="#">Study Tour of Life Sciences</a></h4>
							 <p>Study trips of Life Sciences Students to NIH Laboratories Islamabad</p>
						 </div>
						 <div class="clearfix"></div>
					 </div>
					 <div class="grid_info">
						 <div class="blg-pic">
							 <img src="images/mtbc1.jpg" class="img-responsive" alt="">
						 </div>
						 <div class="blg-pic-info">
							 <h4><a href="#">Study tour of Computing Students</a></h4>
							 <p>Visit of Department of Computing students at MTBC, Bagh, Azad Kashmir</p>
						 </div>
						 <div class="clearfix"></div>
					 </div>
					 <div class="more">
						 <a href="blog.html">See more from the Blog ></a>
					 </div>
				 </div>
			 </div>
			 										<!--Quik Links-->
			 <div class="col-md-4 banner-grid">
				 <h3>Quick Links</h3>
				 <div class="banner-grid-sec">
					 <div class="news-grid">
						 <h4><a href="#">Admission Open for Spring 2018</a></h4>
						 <p>Admissions are open so what are you waiting for?</p>

						 <p></p>
					 </div>
					 <div class="news-grid">
						 <h4><a href="#">Learning Management System</a></h4>
						 <p>Moddle access for registered students</p>
					 </div>
					 <div class="news-grid">
						 <h4><a href="#">Faculty</a></h4>
						 <p>Our Faculty Details</p>
					 </div>
					 <div class="news-grid">
						 <h4><a href="#">Departments</a></h4>
						 <p>Departments and related faculty</p>
					 </div>
				 </div>
			 </div>
			 <div class="col-md-4 banner-grid">
				 <h3>News Letter</h3>
				 <div class="banner-grid-sec news_sec">
					 <div class="news-ltr">
						 <h4><a href="#">Pellentesque sed arcu lacinia</a></h4>
						 <p>Aliquam sem velit, rhoncus sed arcu eu viverra. Suspendisse lacus posuere ultricies turpis.</p>
					 </div>
					 <form>
						 <input type="text" placeholder="Email Address*" required="">
						 <input type="submit" value="SEND">
					 </form>
				 </div>
			 </div>
			 <div class="clearfix"></div>
		  </div>
	  </div>
</div>
										<!--Departments List-->
<div class="welcome">
	 <div class="container">
		 <div class="welcm_sec">
			 <div class="col-md-9 campus">
				 <div class="campus_head">
					 <h3>Departments</h3>
				 </div>
				 <div class="col-md-3 wel_grid">
					 <img src="images/dept of computing and technology.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Department of Computing and Technology</a></h5>
					 <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed distinctio laborum, neque maiores excepturi provident velit omnis totam! Odit provident itaque sed assumenda repellendus magnam tempore asperiores autem repudiandae harum!</p>
				 </div>
				 <div class="col-md-3 wel_grid">
					 <img src="images/Dept of Engineering.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Department of Engineering</a></h5>
					 <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam doloribus vitae ratione tempore, nesciunt sequi, aliquid tempora et ipsam at repellendus. Dicta quisquam velit obcaecati sunt possimus molestiae a pariatur?</p>
				 </div>
				 <div class="col-md-3 wel_grid">
					 <img src="images/dept of graduate studies.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Department of Graduate Studies</a></h5>
					 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, ipsam voluptatem? Ad voluptatibus nisi esse dolores nulla porro cumque repellendus consectetur qui facere laboriosam tempore, corporis laudantium reiciendis eaque aliquam!</p>
				 </div>
				 <div class="col-md-3 wel_grid">
					 <img src="images/dept of life sciences.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Department of Life Sciences</a></h5>
					 <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus, voluptate. Nobis aperiam excepturi in reprehenderit, consequuntur voluptates? Facilis expedita dignissimos iusto, reiciendis earum dolores ipsam sit aliquam atque dolore enim!</p>
				 </div>
				 	<div class="clearfix"></div>

				 <div class="col-md-3 wel_grid">
					 <img src="images/dept of management science.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Department of Management Sciences</a></h5>
					 <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda corporis vel quisquam, voluptas quas necessitatibus, deleniti totam eos impedit consectetur ipsa doloremque consequuntur quasi tempore maiores minima facere, corrupti saepe!</p>
				 </div>
				 <div class="col-md-3 wel_grid">
					 <img src="images/dept of pharmacy.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Department of Pharmacy</a></h5>
					 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis repellat accusantium necessitatibus esse sunt error, reprehenderit harum voluptatem quidem nulla odit, non tempore fuga? Ipsum consectetur nesciunt sapiente sint nihil?</p>
				 </div>
				
				 <div class="clearfix"></div>
				 <div class="more_info">
						 <a href="blog.html">More Info....</a>
				 </div>
			 </div>
			 <div class="col-md-3 testimonal">
					<h3>News</h3>
					<div class="testimnl-grid">
						 <a href="#"><p>Here will be some news updated by the HOD of any department</p></a>
						 <h5>Name of HOD</h5>
					</div>
					<div class="testimnl-grid">
						 <a href="#"><p>Here will be some news updated by the HOD of any department</p></a>
						 <h5>Name of HOD</h5>
					</div>
					<div class="testimnl-grid">
						 <a href="#"><p>Here will be some news updated by the HOD of any department</p></a>
						 <h5>Name of HOD</h5>
					</div>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="news">
	 <div class="container">
		 <h3>Recent News</h3>
		  <div class="event-grids">			
		     <div class="col-md-4 event-grid">
				 <div class="date">
				     <h4>26</h4>
					 <span>08/2012</span>
				 </div>				 
			     <div class="event-info">
					  <h5><a href="#">News about any event</a></h5>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam dicta perferendis, neque fuga voluptatum quos commodi eos nisi laudantium temporibus dolorem ipsum harum optio ullam repellat possimus quisquam iste magni.</p>					
				 </div>
				 <div class="clearfix"></div>				 			 
			 </div>
			 <div class="col-md-4 event-grid">
				 <div class="date">
				     <h4>24</h4>
					 <span>06/2012</span>
				 </div>				 
			     <div class="event-info">
					  <h5><a href="#">News about any event</a></h5>
						<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto sit excepturi, asperiores sint minima optio corrupti sunt possimus iusto distinctio eius exercitationem, commodi similique recusandae. Quas maiores fugit sapiente voluptates!</p>					
				 </div>
				 <div class="clearfix"></div>				 			 
			 </div>
			 <div class="col-md-4 event-grid">
				 <div class="date">
				     <h4>20</h4>
					 <span>04/2012</span>
				 </div>				 
			     <div class="event-info">
					  <h5><a href="#">News about 3rd event</a></h5>
						<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo similique placeat nobis dolorem minus, tenetur libero temporibus reprehenderit neque quod, officiis quos deleniti vero animi porro nihil, alias magnam ducimus?</p>					
				 </div>
				 <div class="clearfix"></div>				 			 
			 </div>
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