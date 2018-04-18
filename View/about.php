
<?php
$page_Title= "About";
require_once $_SERVER["DOCUMENT_ROOT"] . "/FYP-web/View/layouts/header.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/FYP-web/View/layouts/navigation.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/FYP-web/View/layouts/home-sidebar.php";
include("../controller/pages_data.php");

?>
</style>


<!--main-->


<div class="container main-container">

<?php
  if (!isset($_GET['cat_id'])) {
    # code...
    header("location:index.php");
  }
  check_data($_GET['cat_id']);


 ?>

</div>
</div>
</div>
<!-- /main -->
</div>
<!--Footer-->
<div>

  <?php
  require_once $_SERVER["DOCUMENT_ROOT"] . "/FYP-web/View/layouts/footer.php";

  ?>

</div>
