<?php include_once '../controller/sidebar.php'; ?>
<link rel="stylesheet" href="../css/dashboard.css">
<style media="screen">
.border{
  border-right: 1px #ccc solid;
  margin-left: 5px;
}
</style>
<div class="container-fluid display-table">
  <div class="row display-table-row">
    <!-- side menu -->
    <div class="col-md-2 display-table-cell valign-top border" id="side-menu">
      <h1>Navigation Links</h1>
      <ul>
        <?php show_sidebar(); ?>
        <!-- <li class="link active">
          <a href="index.php">
            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
            <span>Home</span>
          </a>
        </li>
        <li class="link">
          <a href="#collapse-pages" data-toggle="collapse" aria-controls="collapse-pages">
            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
            <span>About</span>
            <ul class="collapse collapseable" id="collapse-pages">
              <li> <a href="new-page.php"> History</a> </li>
                <li> <a href="page.php"> View page</a> </li> -->
            <!-- </ul>
          </a>
        </li>
        <li class="link">
          <a href="commenters.php">
            <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
            <span>Prgrames</span>
          </a>
        </li>
        <li class="link">
          <a href="commenters.php">
            <span class="glyphicon glyphicon-font" aria-hidden="true"></span>
            <span>Admission</span>
          </a>
        </li> -->
      </ul>

    </div>


<!-- <div class="row row-offcanvas row-offcanvas-left display-table">
        <div class="display-table-row">


        <div class="column col-sm-3 col-xs-0 sidebar-offcanvas display-table-cell" id="sidebar">
            <ul class="nav" id="menu">
                <li><a href="index.php"><i class="fa fa-home"></i> <span class="collapse in hidden-xs">Home</span></a></li>
                <li><a href="about.php"><i class="fa fa-institution"></i> <span class="collapse in hidden-xs">About</span></a></li>
                <li><a href="history.php"><i class="fa fa-history"></i> <span class="collapse in hidden-xs">History</span></a></li>
                <li><a href="vision.php"><i class="fa fa-info-circle"></i> <span class="collapse in hidden-xs">Vision & Mission</span></a></li>
                <li><a href="objectives.php"><i class="fa fa-newspaper-o"></i> <span class="collapse in hidden-xs">Objectives</span></a></li>
                <li><a href="messages.php"><i class="fa fa-flag"></i> <span class="collapse in hidden-xs">Messages</span></a></li>

                <li>
            </ul>
        </div>

        <div class="column col-sm-9 col-xs-11 display-table-cell" id="main" >
            <p><a href="#" data-toggle="offcanvas"><i class="fa fa-navicon fa-2x"></i></a>
            </p>
              <div class="container-fluid">


</div>
</div> -->

<!--
<script type="text/javascript">

$('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
    $('.collapse').toggleClass('in').toggleClass('hidden-xs').toggleClass('visible-xs');
});

</script> -->
