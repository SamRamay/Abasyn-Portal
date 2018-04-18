<?php
include_once 'db.php';

function get_side_bar()
{
  # code...
  global $con;
  $cat_id=1;
  $menu = '';
  $sql='';

    # code...
    $sql = "SELECT * FROM category WHERE parent_id=$cat_id";

  $result = mysqli_query($con,$sql);

  while ($row = mysqli_fetch_assoc($result)) {
    # code...
      if ($row['parent_page']) {
        # code...

        $menu .= '<li><a href="index.php?page_name='.$row['parent_page'].'&cat_id='.$row['cat_id'].'">'.$row['cat_title'].'</a>';

      }
      else {
        # code...
        $menu .= '<li><a href="index.php">'.$row['cat_title'].'</a>';

      }

      $menu .='</li>';

  }
  return $menu;
}


 ?>
