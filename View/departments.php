<?php
$page_Title= "About";
require_once $_SERVER["DOCUMENT_ROOT"] . "/FYP-web/View/layouts/header.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/FYP-web/View/layouts/navigation.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/FYP-web/View/layouts/home-sidebar.php";
include("../controller/pages_data.php");

?>

<link rel="stylesheet" href="../css/layout.css">
<script src="../js/pagination.js" charset="utf-8"></script>

<div class="container main-container">

  <?php get_content($_GET['dept_name']); ?>

<div class="container">
  <div class="table-responsive" id="pagination_data">

    <?php include('../model/pagination.php'); ?>

  </div>
</div>
</div>
</div>
</div>
<!-- /main -->
</div>










<div>

  <?php
  require_once $_SERVER["DOCUMENT_ROOT"] . "/FYP-web/View/layouts/footer.php";

  ?>



</div>
