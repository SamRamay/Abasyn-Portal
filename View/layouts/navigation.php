<?php require_once '../model/navbar.php'; ?>
<link rel="stylesheet" href="../css/dropdown.css">
<style media="screen">

	.navbar-my{
		color: white;
		font-weight: bolder;
		float: none;
		background: #4dc47d;
		border: 0px;
		margin: 0px;
	}

.header{
	color: black;
}
.navbar-my a:hover {
    background-color: #ddd;
    color: black;
}
.search{
	float: right;
}
.navbar-default{
	min-height: 60px;
	margin: 0px;
}
.name-style{
	font-size: 18px;
	font-weight: bold;
	font-family: "Comic Sans MS", cursive, sans-serif;
}
.list-bold{
	font-weight: bold;
	font-size: 18px;
}
</style>

<nav class="navbar navbar-my navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#firstNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
			<div class="collapse navbar-collapse" id="firstNavbar">
			<a class="navbar-brand header" href="#"><i class="glyphicon glyphicon-calendar" style="width: 20px;"></i> Academics Calender</a>
			<a class="navbar-brand header" href="#"><i class="glyphicon glyphicon-phone" style="width: 20px;"></i> Contact Us</a>
			<a class="navbar-brand header" href="#"><i class="glyphicon glyphicon-home" style="width: 20px;"></i> Peshawar Campus</a>
			<a class="navbar-brand header" href="#"><i class="glyphicon glyphicon-envelope" style="width: 20px;"></i> Campus Mail</a>
			<a class="navbar-brand header" href="#"><i class="glyphicon glyphicon-picture" style="width: 20px;"></i> Gallery</a>


			<div class="col-sm-3 col-md-3">
        <form class="navbar-form" role="search">
	        <div class="input-group">
	            		<input type="text" class="form-control" style="width: 200px;" placeholder="Search" name="q">
	            <div class="input-group-btn">
	                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
	            </div>
	        </div>
				</div>
        </form>
    	</div>
    </div>
	</div>
</nav>



<nav class="top-nav" id="my-topnav">
	<ul class="main">
		<li> <a href="../View/index.php" class="uni-name name-style">Abasyn University Islamabad Campus</a> </li>

		<?= show_menu();  ?>

		<li><a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a></li>

	</ul>
 </nav>


 <script>
 function myFunction() {
     var x = document.getElementById("my-topnav");
     if (x.className === "top-nav") {
         x.className += " responsive";
     } else {
         x.className = "top-nav";
     }
 }
 </script>
