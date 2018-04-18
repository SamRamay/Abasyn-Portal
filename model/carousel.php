<?php
include 'db.php';

function get_carousel()
{
  # code...
  global $con;
  $carousel_sql = "SELECT * FROM corousal_banner ORDER BY b_id ASC";
  $carousel_result = mysqli_query($con,$carousel_sql);

  return $carousel_result;
}

function make_slide_indicators()
{
  # code...
  global $con;
  $output = '';
  $count = 0;

  $result = get_carousel($con);

  while ($row = mysqli_fetch_array($result)) {
    # code...
    if ($count == 0) {
      # code...
      $output .= '
        <li data-target="#myCarousel" data-slide-to="'.$count.'" class="active"></li>
      ';
    }
    else {
      # code...
      $output .='
      <li data-target="#myCarousel" data-slide-to="'.$count.'"></li>

      ';
    }
    $count = $count + 1;

  }
  return $output;


}



function create_slides()
{
  # code...
  global $con;

  $output='';
  $count=0;

  $result = get_carousel();
  while ($row = mysqli_fetch_array($result)) {
    if ($count==0) {
      # code...
      $output .='<div class="item active">';

    }
    else {
      # code...
      $output .= '<div class="item">';
    }

    $output .='
    <img src="../images/carousel/'.$row["b_image"].'" alt="'.$row["b_name"].'" />

      <div class="carousel-caption">
        <h3>'.$row["b_name"].'</h3>
      </div>
      </div>
    ';
    $count = $count + 1;
  }
  return $output;
}

function get_gallery()
{
  # code...
  $dir = glob('../images/gallery/{*.jpg,*.png,*.JPG}',GLOB_BRACE);

  foreach ($dir as $value) {
    # code...
    ?>
    <div class="thumbnails">
      <a href="<?php echo $value; ?>" data-fancybox="images" data-caption="<?php echo $value; ?>">
	       <div class="image"><img class="fade" src="<?php echo $value; ?>" alt="<?php echo $value; ?>">
         </div>
       </a>


    </div>

    <?php

  }
}





 ?>
