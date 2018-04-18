<?php include_once '../model/carousel.php'; ?>

<section style="margin-bottom: 20px;">

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <?php echo make_slide_indicators(); ?>
		  </ol>
			<div class="carousel-inner">
		    <?php
				echo create_slides(); ?>
			</div>

			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
</div>
</section>
