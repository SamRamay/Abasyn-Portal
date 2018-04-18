<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dasboard</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">

  </head>
  <body>
    <div class="container-fluid display-table">
      <div class="row display-table-row">
        <!-- side menu -->
        <div class="col-md-2 display-table-cell valign-top" id="side-menu">
          <h1>Dashboard</h1>
          <ul>
            <li class="link active">
              <a href="index.php">
                <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="link">
              <a href="#collapse-pages" data-toggle="collapse" aria-controls="collapse-pages">
                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                <span>Pages</span>
                <span class="label label-success pull-right">20</span>
                <ul class="collapse collapseable" id="collapse-pages">
                  <li> <a href="new-page.php"> create new page</a> </li>
                  <!-- <li> <a href="page.php"> View page</a> </li> -->
                </ul>
              </a>
            </li>
            <li class="link">
              <a href="commenters.php">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <span>Commenters</span>
              </a>
            </li>
            <li class="link">
              <a href="commenters.php">
                <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                <span>Tags</span>
              </a>
            </li>
          </ul>

        </div>
        <!-- main content -->
        <div class="col-md-10 display-table-cell valign-top">
          <div class="row">
            <header id="nav-header" class="clearfix">
              <div class="col-md-5">
                <input type="text" id="header-search-field" name="search" placeholder="search for something...">
              </div>
              <div class="col-md-7">
                <ul class="pull-right">
                  <li id="welcome-message">Welcome Admin</li>
                  <li class="fixed-width">
                    <a href="#">
                      <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
                      <span class="label label-warning">3</span>
                    </a>
                  </li>
                  <li class="fixed-width">
                    <a href="#">
                      <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                      <span class="label label-message">3</span>
                    </a>
                  </li>
                  <li>
                    <a href="../index.php" class="logout">
                      <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                      log out
                    </a>
                  </li>
                </ul>
              </div>
            </header>

          </div>

          <!-- maincontent -->
          <div class="">

          </div>


        <div class="row">
          <footer id="admin-footer" class="clearfix">
            <div class="pull-left">
              <b>Copyright</b> &copy; 2018
            </div>
            <div class="pull-right">
              Admin system
            </div>
          </footer>

        </div>
      </div>
</div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
