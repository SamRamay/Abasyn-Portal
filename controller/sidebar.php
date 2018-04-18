<?php
include_once '../model/sidebar.php';
function show_sidebar()
{
  # code...
  $con = connection();
  $menus='';

  $menus .= get_side_bar();
  return $menus;

}
 ?>
