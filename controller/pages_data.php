<?php
  include("../model/pages_data.php");

function check_data($cat_id)
{
  # code...
  if ($cat_id == 15) {
    # code...
    ?>
    <h1 style="font-family: 'Ubuntu-Medium';font-size:2.5em;line-height:1.2em;color:#4dc47d;">Departments</h1>
<?php
    get_departments($cat_id);
  }
  else {
    # code...
    get_data($cat_id);
  }
}





function get_content($page_name)
{
  # code...
  ?>

  <div class="container">

  <?php
  general_desc($page_name);

  check_program($page_name);

  a_o_specs($page_name);

  list_of_courses($page_name);

  ?>
  </div>
  <?php
}




function check_program($page_name)
{
  # code...
  ?>
  <h1 style="font-family: 'Ubuntu-Medium';font-size:1.6em;line-height:2.5em;color:#4dc47d;">Program Structure</h1>

<div class="table-responsive">

  <table class="table table-striped container" style="box-shadow:5px 5px 5px 5px #888888; margin-bottom: 10px;">
  <thead>
    <tr>
      <th>Category</th>
      <th>Credit hr</th>
      <th>Description</th>
    </tr>
  </thead>

  <tbody>
    <?php prog_structure($page_name) ?>
  </tobdy>
  </table>

  </div>
  <?php
}




       // echo "$data";
/*

    function get_about_desc()
    {
        $data = fetch_data('About Abasyn');

        echo "$data";

    }

    function get_vismis_desc()
    {
        $data = fetch_data('vision_mission');

        echo "$data";
    }

    function get_objectives_desc()
    {
        $data = fetch_data('objectives');

        echo "$data";
    }

    function get_messages_desc()
    {
        $data = fetch_data('messages');

        echo "$data";
    }

    function get_undergrad_desc()
    {
        $data = fetch_data('undergraduate');

        echo "$data";
    }

    function get_grad_desc()
    {
        $data = fetch_data('graduate');

        echo "$data";
    }

    function get_department_desc()
    {
        $data = fetch_data('department');

        echo "$data";
    }

    function get_rules_desc()
    {
        $data = fetch_data('Rules and Policies');

        echo "$data";
    }*/
?>
