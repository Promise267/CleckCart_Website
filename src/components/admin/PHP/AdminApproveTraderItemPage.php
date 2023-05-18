<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AdminApproveTrader'sItems</title>
  <link rel="icon" href="./../../../dist/public/logo.png" sizes="16x16 32x32" type="image/png">
  <!--font awesome CSS-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!--bootstrap CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--font awesome CSS-->
  <link rel="stylesheet" href="../CSS/style.css">
  <!--bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!--Jquery-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <!--Custom-->
  <script src="../../service/sidebartoggle.js"></script>
</head>

<body>
<?php
    include('connect.php');
    if(isset($_GET['user'])){
      $user = $_GET['user'];
    }
  ?>
  <!-- Vertical navbar -->
  <div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center">
      <img loading="lazy" src="images/p-1.png" alt="..." width="80" height="80" class="m-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
      <h4 class="m-0"><?php echo($user)?></h4>
      </div>
    </div>
  </div>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <?php echo("<a href='./AdminDashboard.php?user=$user' class='nav-link text-dark'>
        <i class='fa-solid fa-house fa-lg m-3'></i> Dashboard
      </a>");?>
    </li>
    <li class="nav-item">
      <?php echo("<a href='./AdminViewTraderItemsPage.php?user=$user' class='nav-link text-dark'>
        <i class='fa-solid fa-cart-shopping fa-lg m-3'></i></i>Manage Products
      </a>");?>
    </li>
    <li class="nav-item">
      <?php
      echo("<a href='./AdminViewTraderPage.php?user=$user' class='nav-link text-dark'>
      <i class='fa-solid fa-user fa-lg m-3'></i>Manage Traders
      </a>");?>
    </li>
    <li class="nav-item">
      <?php echo("<a href='./AdminViewTraderShop Page.php?user=$user' class='nav-link text-dark'>
      <i class='fa-solid fa-shop fa-lg m-3'></i>Manage Shops
      </a>");?>
    </li>
    <li class="nav-item">
      <?php echo ("
        <a href='./AdminViewCustomerPage.php?user=$user' class='nav-link text-dark'>
        <i class='fa-solid fa-headset fa-lg m-3'></i>Manage Customers
        </a>
      ");?>
    </li>
    <li class="nav-item">
      <?php
        echo("<a href='#' class='nav-link text-dark'>
        <i class='fa fa-line-chart m-3 fa-fw fa-lg m-3'></i>Sales Report
      </a>")
      ?>
    </li>
    <li class="nav-item">
        <a href='../../guest/PHP/HomePage.php' class='nav-link text-dark'>
          <i class='fa-solid fa-globe fa-lg m-3'></i>Go to Website
        </a>
    </li>
    <li class="nav-item">
      <?php
        echo("
          <a href='./AdminApproveTrader.php?user=$user' class='nav-link text-dark'>
          <i class='fa-solid fa-users m-3'></i>Approve Traders
          </a>
        ");
      ?>
    </li>
    <li class="nav-item">
      <?php echo("
        <a href='./AdminApproveTraderItemPage.php?user=$user' class='nav-link text-dark'>
        <i class='fa-solid fa-square-check m-3'></i>Approve Products
        </a>
      ")?>
    </li>
    <li class="nav-item">
      <a href="./AdminLogout.php" class="nav-link text-dark">
        <i class="fa-solid fa-power-off m-3"></i></i>
                Log Out
            </a>
    </li>
  </ul>
  </div>
<!-- End vertical navbar -->




  <!-- Page content holder -->
  <div class="page-content p-5" id="content">
    <!-- Toggle button -->
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i></button>

    <!-- Demo content -->
    <!--Code -->

    <div class="container">
      <div class="row bg-success">
        <div class="col-12 p-5">
          <h1>Approve Products</h1>
        </div>
      </div>
      <div class="row table-responsive">
        <table class="table table-light table-striped text-center">
        <?php
            if(isset($_GET['error'])) {?>
                <div class='alert alert-danger text-center' role='alert'><?php echo($_GET['error']);?></div>
        <?php }?>
        <?php
            if(isset($_GET['success'])) {?>
                <div class='alert alert-success text-center' role='alert'><?php echo($_GET['success']);?></div>
        <?php }?>
          <thead class="table-success">
            <tr>
              <th>Select</th>
              <th>Shop Id</th>
              <th>Category Name</th>
              <th>Image</th>
              <th>Name</th>
              <th>Description</th>
              <th>Added Date</th>
              <th>Price</th>
              <th>Discount</th>
              <th>Stock</th>
              <th colspan=2>Actions</th>
              <th></th>
            </tr>
          </thead>
          <?php           
            $query = "SELECT * FROM APPLY_PRODUCT ORDER BY APPLY_PRODUCT_ID";
            $result = oci_parse($conn, $query);
            oci_execute($result);
                                
            
            while($row = oci_fetch_array($result, OCI_ASSOC)){
              $id=$row['APPLY_PRODUCT_ID'];
              
              echo("<tr><td><input type = checkbox></td>");
              echo("<td>$row[APPLY_PRODUCT_ID]</td>");
              echo("<td>$row[CATEGORY_NAME]</td>");
              echo("<td><img src = './../../../dist/public/TraderItemImages/$row[PRODUCT_IMAGE]' alt='$row[PRODUCT_IMAGE]' class = 'img-circle img-thumbnail' width='100px' height='100px'></td>");  
              echo("<td>$row[PRODUCT_NAME]</td>");
              echo("<td>$row[PRODUCT_DESCRIPTION]</td>");
              echo("<td>$row[PRODUCT_DATE]</td>");
              echo("<td>$row[PRODUCT_PRICE]</td>");
              echo("<td>$row[DISCOUNT]</td>");
              echo("<td>$row[PRODUCT_STOCK]</td>");
              echo("<td><a href='ApprovedProducts.php?user=$user&id=$id&action=approved'><i class='fa-sharp fa-solid fa-circle-check' style='color:green;'></i></a></td>");
              echo("<td><a href='RefusedProducts.php?user=$user&id=$id&action=refused'><i class='fa-solid fa-circle-xmark' style='color:red;'></i></a></td>");
              echo("<td></td>");
              echo("</tr>");
            }
          ?>
        </table>
      </div>
    </div>


  </div>
  <!-- End demo content -->
</body>

</html>