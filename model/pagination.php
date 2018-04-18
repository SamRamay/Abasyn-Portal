<?php include_once 'db.php';

  $records_per_page = 6;
  $page = '';
  $output = '';

  if (isset($_POST["page"])) {
    # code...
    $page = $_POST["page"];
  }
  else {
    # code...
    $page = 1;
  }

  $cor_sql = "SELECT * FROM courses ORDER BY cor_id DESC";

  $cor_result = mysqli_query($con,$cor_sql);

  $total_records = mysqli_num_rows($cor_result);

  $total_pages = ceil($total_records/$records_per_page);

  for ($i=1; $i <= $total_pages ; $i++) {
    # code...
    $output .="<span class='pagination_link' style='cursor: pointer;line-height:4.0em; padding:6px; border: 1px solid #ccc;' id='".$i."'>Semester - ".$i."</span>";
  }

  $start_form  = ($page - 1) * $records_per_page;

  $courses_sql = "SELECT * FROM courses ORDER BY cor_id ASC LIMIT $start_form,$records_per_page";

  $courses_result = mysqli_query($con,$courses_sql);

  $output .= "

  <div class='table-responsive'>

    <table class='table table-striped container' style='box-shadow:5px 5px 5px 5px #888888; margin-bottom: 10px;'>
    <thead>
      <tr>
        <th>Course Code</th>
        <th>Course Name</th>
        <th>Credit Hours</th>
        <th>Pre Req.</th>
      </tr>
    </thead>

  ";

  while ($row = mysqli_fetch_array($courses_result)) {
    # code...
    $output .= '

      <tbody>
        <tr>
          <td>'.$row['course_code'].'</td>
          <td>'.$row['course_title'].'</td>
          <td>'.$row['credit_hr'].'</td>
          <td>'.$row['pre_req'].'</td>
        </tr>

    ';
  }

  $output .='</tobdy></table>';


  echo $output;


 ?>
