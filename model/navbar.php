<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "auic_web_portal";
//
// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//
// }
// catch(PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }

function connection()
{
  # code...
  $conn = mysqli_connect("localhost","root","","auic_web_portal");

  // Check connection
  if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    else {
      # code...
      return $conn;
    }
}


function show_menu()
{
  # code...
  $con = connection();
  $menus='';

  $menus .= generate_multilevel_menus($con);

  return $menus;

}


function generate_multilevel_menus($con,$parent_id= NULL)
{

  # code...
  $menu = '';
  $sql='';
  if ( is_null($parent_id)) {
    # code...
    $sql = "SELECT * FROM category WHERE parent_id IS NULL";
  }
  else {
    # code...
    $sql = "SELECT * FROM category WHERE parent_id=$parent_id";
  }

  $result = mysqli_query($con,$sql);

  while ($row = mysqli_fetch_assoc($result)) {
    # code...
      if ($row['page']) {
        # code...
        $menu .= '<li><a href="index.php?page_name=about&cat_id='.$row['cat_id'].'">'.$row['cat_title'].'</a>';

      }
      else {
        # code...
        $menu .= '<li><a href="index.php">'.$row['cat_title'].'</a>';

      }

      $menu .='<ul class="dropdown">'.generate_multilevel_menus($con,$row['cat_id']).'</ul>';

      $menu .='</li>';

  }

  return $menu;



}


 ?>
