<?php
$page_Title= "Abasyn | Home";
require_once $_SERVER["DOCUMENT_ROOT"] . "/FYP-web/View/layouts/header.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/FYP-web/View/layouts/navigation.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/FYP-web/View/layouts/corousal.php";

?>



	  															<!--Blog Feed-->
<section>
		  <div class="container">
			 <div class="col-md-4 banner-grid" style="box-shadow: 5px 10px 8px #888888;">
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
							 <img src="images/trip1.jpg" class="img-responsive" alt="">
						 </div>
						 <div class="blg-pic-info">
							 <h4><a href="#">Study Tour of Life Sciences</a></h4>
							 <p>Study trips of Life Sciences Students to NIH Laboratories Islamabad</p>
						 </div>
						 <div class="clearfix"></div>
					 </div>
					 <div class="grid_info" style="margin-top:5px;">
						 <div class="blg-pic">
							 <img src="images/mtbc1.jpg" class="img-responsive" alt="">
						 </div>
						 <div class="blg-pic-info">
							 <h4><a href="#">Study tour of Computing Students</a></h4>
							 <p>Visit of Department of Computing students at MTBC, Bagh</p>
						 </div>
						 <div class="clearfix"></div>
					 </div>
					 <div class="more">
						 <a href="blog.html">See more from the Blog ></a>
					 </div>
				 </div>
			 </div>

			 										<!--Quik Links-->
			 <div class="col-md-4 banner-grid" style="box-shadow: 5px 10px 8px #888888;">
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
					 <div class="news-grid">
						 <h4><?php include("./login.php"); ?></h4>
						 <p>Only for registered users (Students/Teachers/HOD/Admin)</p>
					 </div>
				 </div>
			 </div>

			 <div class="col-md-4 banner-grid" style="box-shadow: 5px 10px 8px #888888;">
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
</section>

										<!--Departments List-->
<div class="row">
<div class="welcome">
	 <div class="container">
		 <div class="welcm_sec">

			 <div class="col-md-9 campus">
				 <div class="campus_head">
					 <h3>Departments</h3>
				 </div>
				 <div class="col-md-4 wel_grid">
					 <img src="../images/dept of computing and technology.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Department of Computing and Technology</a></h5>
					 <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed distinctio laborum, neque maiores excepturi provident velit omnis totam! Odit provident itaque sed assumenda repellendus magnam tempore asperiores autem repudiandae harum!</p>
				 </div>
				 <div class="col-md-4 wel_grid">
					 <img src="../images/Dept of Engineering.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Department of Engineering</a></h5>
					 <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam doloribus vitae ratione tempore, nesciunt sequi, aliquid tempora et ipsam at repellendus. Dicta quisquam velit obcaecati sunt possimus molestiae a pariatur?</p>
				 </div>
				 <div class="col-md-4 wel_grid">
					 <img src="../images/dept of graduate studies.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Department of Graduate Studies</a></h5>
					 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, ipsam voluptatem? Ad voluptatibus nisi esse dolores nulla porro cumque repellendus consectetur qui facere laboriosam tempore, corporis laudantium reiciendis eaque aliquam!</p>
				 </div>

				 	<div class="clearfix"></div>

					<div class="col-md-4 wel_grid">
						<img src="../images/dept of life sciences.jpg" class="img-responsive" alt=""/>
						<h5><a href="#">Department of Life Sciences</a></h5>
						<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus, voluptate. Nobis aperiam excepturi in reprehenderit, consequuntur voluptates? Facilis expedita dignissimos iusto, reiciendis earum dolores ipsam sit aliquam atque dolore enim!</p>
					</div>
				 <div class="col-md-4 wel_grid">
					 <img src="../images/dept of management science.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Department of Management Sciences</a></h5>
					 <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda corporis vel quisquam, voluptas quas necessitatibus, deleniti totam eos impedit consectetur ipsa doloremque consequuntur quasi tempore maiores minima facere, corrupti saepe!</p>
				 </div>
				 <div class="col-md-4 wel_grid">
					 <img src="../images/dept of pharmacy.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Department of Pharmacy</a></h5>
					 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis repellat accusantium necessitatibus esse sunt error, reprehenderit harum voluptatem quidem nulla odit, non tempore fuga? Ipsum consectetur nesciunt sapiente sint nihil?</p>
				 </div>

				 <div class="clearfix"></div>
				 <div class="more_info">
						 <a href="blog.html">More Info....</a>
				 </div>
			 </div>

			 				<!--side news-->
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
</div>


<!--Events-->
<div class="news">
	 <div class="container">
		 <h3>Events</h3>
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
<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/FYP-web/View/layouts/footer.php";

?>
