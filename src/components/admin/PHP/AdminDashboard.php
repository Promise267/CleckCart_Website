<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AdminDashboard</title>
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
  if (isset($_GET['user'])) {
    $user = $_GET['user'];
  }
  ?>
  <!-- Vertical navbar -->
  <div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
      <div class="media d-flex align-items-center mt-4 mb-4">
        <img src='./../../../dist/public/logo.jpg' alt='logo.jpg' class='rounded-circle img-responsive p-1 border border-grey' width='80' height='70'>
        <div class="media-body">
          <?php echo ("<h4 class='ms-3'>$user</h4>") ?>
        </div>
      </div>
    </div>

    <ul class="nav flex-column bg-white mb-0">
      <li class="nav-item">
        <?php echo ("<a href='./AdminDashboard.php?user=$user' class='nav-link text-dark'>
        <i class='fa-solid fa-house fa-lg m-3'></i> Dashboard
      </a>"); ?>
      </li>
      <li class="nav-item">
        <?php echo ("<a href='./AdminViewTraderItemsPage.php?user=$user' class='nav-link text-dark'>
        <i class='fa-solid fa-cart-shopping fa-lg m-3'></i></i>Manage Products
      </a>"); ?>
      </li>
      <li class="nav-item">
        <?php
        echo ("<a href='./AdminViewTraderPage.php?user=$user' class='nav-link text-dark'>
      <i class='fa-solid fa-user fa-lg m-3'></i>Manage Traders
      </a>"); ?>
      </li>
      <li class="nav-item">
        <?php echo ("<a href='./AdminViewTraderShop Page.php?user=$user' class='nav-link text-dark'>
      <i class='fa-solid fa-shop fa-lg m-3'></i>Manage Shops
      </a>"); ?>
      </li>
      <li class="nav-item">
        <?php echo ("
        <a href='./AdminViewCustomerPage.php?user=$user' class='nav-link text-dark'>
        <i class='fa-solid fa-headset fa-lg m-3'></i>Manage Customers
        </a>
      "); ?>
      </li>
      <li class="nav-item">
        <?php echo ("<a href='./AdminOrderPage.php?user=$user' class='nav-link text-dark'>") ?>
        <i class="fa-solid fa-cart-plus fa-lg m-3"></i>Manage Orders
        </a>
      </li>
      <li class="nav-item">
        <?php
        echo ("<a href='#' class='nav-link text-dark'>
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
        echo ("
          <a href='./AdminApproveTrader.php?user=$user' class='nav-link text-dark'>
          <i class='fa-solid fa-users fa-lg m-3'></i>Approve Traders
          </a>
        ");
        ?>
      </li>
      <li class="nav-item">
        <?php echo ("
        <a href='./AdminApproveTraderItemPage.php?user=$user' class='nav-link text-dark'>
        <i class='fa-solid fa-square-check fa-lg m-3'></i>Approve Products
        </a>
      ") ?>
      </li>
      <li class="nav-item">
        <a href="./AdminLogout.php" class="nav-link text-dark">
          <i class="fa-solid fa-power-off fa-lg m-3"></i></i>
          Log Out
        </a>
      </li>
    </ul>
  </div>
  <!-- End vertical navbar -->



  <!-- Page content holder -->
  <?php
  $TraderQuery = "SELECT COUNT(*) AS TRADER_NO FROM USER_TABLE WHERE ROLE='trader'";
  $RunTraderQuery = oci_parse($conn, $TraderQuery);
  oci_execute($RunTraderQuery);
  $NumberOfTraders = oci_fetch_assoc($RunTraderQuery)['TRADER_NO'];

  $CustomerQuery = "SELECT COUNT(*) AS CUSTOMER_NO FROM USER_TABLE WHERE ROLE='customer'";
  $RunCustomerQuery = oci_parse($conn, $CustomerQuery);
  oci_execute($RunCustomerQuery);
  $NumberOfCustomers = oci_fetch_assoc($RunCustomerQuery)['CUSTOMER_NO'];

  $ProductQuery = "SELECT COUNT(*) AS PRODUCT_NO FROM PRODUCT";
  $RunProductQuery = oci_parse($conn, $ProductQuery);
  oci_execute($RunProductQuery);
  $NumberOfProducts = oci_fetch_assoc($RunProductQuery)['PRODUCT_NO'];

  $PaymentQuery = "SELECT COUNT(*) AS PAYMENT_NO FROM PAYMENT";
  $RunPaymentQuery = oci_parse($conn, $PaymentQuery);
  oci_execute($RunPaymentQuery);
  $NumberOfPayments = oci_fetch_assoc($RunPaymentQuery)['PAYMENT_NO'];

  ?>

  <div class="page-content p-3" id="content">
    <!-- Toggle button -->
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i></button>

    <!-- Demo content -->
    <!--Code -->
    <div class="container p-3">

      <div class="container  pt-3 px-5 ">
        <h2 class="display-4"><b>Welcome! <?php echo $user ?></b></h2>
      </div>
      <div class="container p-5 px-5 text-center ">
        <h3 class="display-6">Current stats</h3>
      </div>
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-4 ">
          <div class="card text-center p-4 bg-success" style="width: 20rem;color:#f0f7f3;">
          <i class='fa-solid fa-user fa-lg m-3'></i>
            <div class="card-body">
              <h5 class="card-title">REGISTERED TRADERS</h5>
              <p class="card-text"><h2><?php echo ($NumberOfTraders); ?></h2></p>
            </div>
          </div>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-4 ">
          <div class="card text-center p-4 bg-success" style="width: 20rem;color:#f0f7f3;">
          <i class='fa-solid fa-user fa-lg m-3'></i>
            <div class="card-body">
              <h5 class="card-title">REGISTERED CUSTOMERS</h5>
              <p class="card-text"><h2><?php echo ($NumberOfCustomers); ?></h2></p>
            </div>
          </div>
        </div>
        <div class="col-sm-1"></div>
      </div>
      <div class="row pt-5">
        <div class="col-sm-1"></div>
        <div class="col-sm-4">
          <div class="card text-center p-4 bg-success" style="width: 20rem;color:#f0f7f3;">
          <i class='fa-solid fa-square-check fa-lg m-3'></i>
            <div class="card-body">
              <h5 class="card-title">APPROVED PRODUCTS</h5>
              <p class="card-text"><h2><?php echo ($NumberOfProducts); ?></h2></p>
            </div>
          </div>
        </div>
        <div class="col-sm-2"></div>
        
        <div class="col-sm-4">
          <div class="card text-center p-4 bg-success" style="width: 20rem;color:#f0f7f3;">
          <i class="fa-solid fa-cart-plus fa-lg m-3"></i>
            <div class="card-body">
              <h5 class="card-title">PAYMENTS</h5>
              <p class="card-text"><h2><?php echo ($NumberOfPayments); ?></h2></p>
            </div>
          </div>
        </div>
        <div class="col-sm-1"></div>
      </div>

    </div>
    


  </div>

</body>

</html>