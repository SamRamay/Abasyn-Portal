<?php
    include("db.php");
//About Abasyn page

    function get_data($category_id)
    {
      # code...
      global $con;


      $data_sql = "SELECT pages_data.pid,pages_data.p_name,pages_data.p_description,pages_data.p_desc2,category.cat_title FROM pages_data JOIN category ON pages_data.cat_id=category.cat_id WHERE pages_data.cat_id=$category_id";


      if ($data_query = mysqli_query($con,$data_sql)) {
        # code...
        $data_result = mysqli_fetch_assoc($data_query);
      }
      if (mysqli_num_rows($data_query)==0) {
        # code...
        echo "Sorry, no data";
      }
      else {
        # code...
        ?>

      <h1 style="font-family: 'Ubuntu-Medium';font-size:2.5em;line-height:1.2em;color:#4dc47d;"><?php echo $data_result['cat_title']; ?></h1>
      <p style="font-family: sans-serif;margin: 0 auto;padding: 10px;text-align: justify;"><?php echo $data_result['p_description']; ?></p>
      <p style="font-family: sans-serif;margin: 0 auto;padding: 10px;text-align: justify;"><?php echo $data_result['p_desc2']; ?></p>





        <?php
      }
}


function get_departments($category_id)
{
  # code...
  global $con;

  $sql_dept = "SELECT * FROM departments WHERE p_id=$category_id";

  $dept_result = mysqli_query($con,$sql_dept);
    # code...
    while ($row = mysqli_fetch_assoc($dept_result)) {
      # code...

    ?>

  <h3 style="font-family: 'Ubuntu-Medium';line-height:1.4em;color:#4dc47d;margin-top: 20px; font-size: 1.3em;"><?php echo $row['d_name']; ?></h3>
  <p style="font-family: 'Trebuchet MS', Helvetica, sans-serif;margin: 0 auto;padding: 10px;text-align: justify; font-size: 0.9em;"><?php echo $row['d_desc']; ?></p>
  <a href="../View/departments.php?dept_name=<?php echo$row['d_name']?>" style="font-size: 0.8em;"><span class="glyphicon glyphicon-tags" style="color:blue; margin-right: 5px;"> </span> show more</a>





    <?php
  }
}

  function prog_structure($page_name)
  {
    # code...
    global $con;


       $program_sql = "SELECT * FROM program_structure WHERE parent_page='$page_name'";


    $program_result = mysqli_query($con,$program_sql);

    while ($row = mysqli_fetch_array($program_result))
		{
      # code..
      ?>
      <tr>
        <td><?php echo $row['category'] ?></td>
        <td> <?php echo $row['credit_Hr.']; ?></td>
        <td><?php echo $row['description']; ?></td>
      </tr>

      <?php

    }

  }

 function general_desc($page_name)
 {
   # code...
   global $con;

   $general_sql="SELECT * FROM general_info WHERE page_name='$page_name'";

   $general_result = mysqli_query($con,$general_sql);

   while ($row = mysqli_fetch_assoc($general_result)) {
     # code...
     ?>
     <h1 style="font-family: 'Ubuntu-Medium';font-size:2.5em;line-height:2.0em;color:#4dc47d;"><?php echo $row["page_name"]; ?></h1>
     <p><?php echo $row['description']; ?></p>

     <ul class="container" style="margin-left: 3%; font-family: 'Trebuchet MS', Helvetica, sans-serif;">
       <li><?php echo $row['key1'] ?></li>
       <li><?php echo $row['key2'] ?></li>
       <li><?php echo $row['key3'] ?></li>
       <li><?php echo $row['key4'] ?></li>
       <li><?php echo $row['key5'] ?></li>
       <li><?php echo $row['key6'] ?></li>
     </ul>
      <?php
   }

 }


 function a_o_specs($page_name)
 {
   # code...
   global $con;

   $general_sql="SELECT * FROM area_of_specialization WHERE page_name='$page_name'";

   $general_result = mysqli_query($con,$general_sql);
?>
<h1 style="font-family: 'Ubuntu-Medium';font-size:1.6em;line-height:2.5em;color:#4dc47d;">Area of Specialization</h1>

<?php


   while ($row = mysqli_fetch_assoc($general_result)) {
     # code...
     ?>
     <p><?php echo $row['description']; ?></p>

     <ul class="container" style="margin-left: 3%; font-family: 'Trebuchet MS', Helvetica, sans-serif;">
       <li><?php echo $row['key1'] ?></li>
       <li><?php echo $row['key2'] ?></li>
       <li><?php echo $row['key3'] ?></li>
     </ul>
      <?php
   }

 }


 function list_of_courses($page_name)
 {
   # code...
   global $con;

   $general_sql="SELECT * FROM list_of_courses WHERE page_name='$page_name'";

   $general_result = mysqli_query($con,$general_sql);
 ?>
 <h1 style="font-family: 'Ubuntu-Medium';font-size:1.6em;line-height:2.5em;color:#4dc47d; text-transform: capitalize;">list of courses related to job placement</h1>

 <?php


   while ($row = mysqli_fetch_assoc($general_result)) {
     # code...
     ?>
     <p><?php echo $row['description']; ?></p>

     <ul class="container" style="margin-left: 3%; font-family: 'Trebuchet MS', Helvetica, sans-serif;">
       <li><?php echo $row['key1'] ?></li>
       <li><?php echo $row['key2'] ?></li>
       <li><?php echo $row['key3'] ?></li>
       <li><?php echo $row['key4'] ?></li>
     </ul>
      <?php
   }

 }


 // function page_desc($page_name)
 // {
 //   # code...
 //   global $con;
 //
 //   $desc_sql = "SELECT p_description,p_name FROM pages_data WHERE p_name='$page_name'";
 //
 //   $desc_result = mysqli_query($con,$desc_sql);
 //
 //   while ($row = mysqli_fetch_assoc($desc_result)) {
 //     # code...
     // ?>
 <!-- //     <h3 style="font-family: 'Ubuntu-Medium';line-height:1.2em;color:#4dc47d;margin-top: 20px; font-size: 2.5em;"><?php echo $row['p_name']; ?></h3> -->
     <?php
 //   }
 // }


?>
