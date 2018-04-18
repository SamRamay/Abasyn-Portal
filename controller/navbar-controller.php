<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/FYP-web/View/layouts/header.php";
include '../model/navbar.php';
?>
<nav class="navbar navbar-default navbar-static-top">

		<div class="container-fluid">
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <?php
            $stmt = $conn->prepare("SELECT * FROM category");
            $stmt->execute();

            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
              # code...
              extract($row);
              ?>
              <li> <a href="#"> <?php echo $row['cat_title']; ?></a></li>
              <?php
            }
           ?>

           <li class="dropdown">
             <?php
               $stmt = $conn->prepare("SELECT * FROM category");
               $stmt->execute();

               $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

               while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
               {
                 # code...
                 extract($row);
                 ?>
                 <li> <a href="#"> <?php echo $row['cat_title']; ?><span class="caret"></span></a></a>
                   <ul class="dropdown-menu">
                     <?php
                       $stmt = $conn->prepare("SELECT * FROM category");
                       $stmt->execute();

                       $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

                       while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
                       {
                         # code...
                         extract($row);
                         ?>
                         <li> <a href="#"> <?php echo $row['cat_title']; ?></a></li>
                         <?php
                       }
                      ?>
                   </ul>
                 </li>

                 <?php
               }
              ?>

           </li>
        </ul>




      </div>
