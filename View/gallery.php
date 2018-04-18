<?php
$page_Title= "Gallery";
require_once $_SERVER["DOCUMENT_ROOT"] . "/FYP-web/View/layouts/header.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/FYP-web/View/layouts/navigation.php";
include '../model/carousel.php';
?>

<style media="screen">
h2{
	font-family: 'Ubuntu-Medium';
	font-size:2.5em;
	line-height:1.2em;
	color:#4dc47d;
}
</style>
<!---->
<link rel="stylesheet" href="../css/gallery.css">
<link rel="stylesheet" href="../css/jquery.fancybox.min.css">

<div class="container">
	<h2>Our Gallery</h2>

<?php
get_gallery();


 ?>
</div>
<!--
<div class="gallery">
		 <div class="event-pics">
				<a class="fancybox" href="../images/mtbc1.jpg" data-fancybox-group="gallery" title="Visit of Department of Computing students at MTBC"><img src="../images/mtbc1.jpg" class="img-style row6" alt=""><span> </span></a>
				<a class="fancybox" href="../images/mtbc2.jpg" data-fancybox-group="gallery" title="Visit of Department of Computing students at MTBC"><img src="../images/mtbc2.jpg" class="img-style row6" alt=""><span> </span></a>
				<a class="fancybox" href="../images/mtbc3.jpg" data-fancybox-group="gallery" title="Visit of Department of Computing students at MTBC"><img src="../images/mtbc3.jpg" class="img-style row6" alt=""><span> </span></a>
				<div class="clearfix"></div>
				<a class="fancybox" href="../images/mtbc4.jpg" data-fancybox-group="gallery" title="Visit of Department of Computing students at MTBC"><img src="../images/mtbc4.jpg" class="img-style row6" alt=""><span> </span></a>
				<a class="fancybox" href="../images/mtbc5.jpg" data-fancybox-group="gallery" title="Visit of Department of Computing students at MTBC"><img src="../images/mtbc5.jpg" class="img-style row6" alt=""><span> </span></a>
				<a class="fancybox" href="../images/trip1.jpg" data-fancybox-group="gallery" title="Study trips of Life Sciences"><img src="../images/trip1.jpg" class="img-style row6" alt=""><span> </span></a>
				<div class="clearfix"></div>
				<a class="fancybox" href="../images/trip4.jpg" data-fancybox-group="gallery" title="Study trips of Life Sciences"><img src="../images/trip4.jpg" class="img-style row6" alt=""><span> </span></a>
				<a class="fancybox" href="../images/trip5.jpg" data-fancybox-group="gallery" title="Study trips of Life Sciences"><img src="../images/trip5.jpg" class="img-style row6" alt=""><span> </span></a>
				<a class="fancybox" href="../images/trip3.jpg" data-fancybox-group="gallery" title="Study trips of Life Sciences"><img src="../images/trip3.jpg" class="img-style row6" alt=""><span> </span></a>
				<div class="clearfix"></div>
		 </div>

</div>
<!---->

<!-- /main -->
<!-- </div> -->
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script src="../js/jquery.fancybox.min.js"></script>
<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/FYP-web/View/layouts/footer.php";
 ?>
