<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TraderDashboard</title>
    <link rel = "icon" href = "./../../../dist/public/logo.png" sizes = "16x16 32x32" type = "image/png">
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
    
<body>
        <!-- Vertical navbar -->
        <div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center">
      <img loading="lazy" src="images/p-1.png" alt="..." width="80" height="80" class="m-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
        <h4 class="m-0">Lorem ipsum</h4>
      </div>
    </div>
  </div>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a href="./TraderDashboard.php" class="nav-link text-dark">
        <i class="fa-solid fa-house fa-lg m-3"></i> Dashboard
      </a>
    </li>
    <li class="nav-item">
      <a href="./TraderViewItems.php" class="nav-link text-dark">
      <i class="fa-solid fa-cart-shopping fa-lg m-3"></i>Manage Products
      </a>
    </li>
    <li class="nav-item">
      <a href="./TraderManageProfile.php" class="nav-link text-dark">
      <i class="fa-solid fa-user fa-lg m-3"></i>Manage Profile
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-dark">
        <i class="fa fa-line-chart m-3 fa-fw fa-lg m-3"></i>Sales Report
      </a>
    </li>
    <li class="nav-item">
      <a href="../../guest/PHP/HomePage.php" class="nav-link text-dark">
        <i class="fa-solid fa-globe fa-lg m-3"></i>Go to Website
      </a>
    </li>
    <li class="nav-item">
      <a href="./TraderLogout.php" class="nav-link text-dark">
        <i class="fa-solid fa-power-off m-3"></i></i>
                Log Out
            </a>
    </li>
  </ul>
</div>
<!-- End vertical navbar -->


<!-- Page content holder -->
<div class="page-content pt-5 px-5 " id="content">
  <!-- Toggle button -->
  <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 "><i class="fa fa-bars mr-2"></i></button>

  <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="mb-3 mt-3">Your Information</h2>
            </div>
        </div>

    </div>
    <div class="container mt-3">
        <form>
            <fieldset disabled>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-3">
                        <img src="../../../dist/public/3.jpg" class="rounded-circle pull-right" alt="profile pic" width="200" height="200">
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="disabledTextInput-fn" class="form-label">First Name</label>
                            <input type="text" id="disabledTextInput-fn" class="form-control" placeholder="First Name">
                            <label for="disabledTextInput-g" class="form-label mt-3" >Username</label>
                            <input type="text" id="disabledTextInput-g" class="form-control" placeholder="Username">
                            <label for="disabledTextInput-add" class="form-label mt-3" >Address</label>
                            <input type="text" id="disabledTextInput-add" class="form-control" placeholder="Address">
                            <label for="disabledTextInput-pn" class="form-label mt-3" >Phone Number</label>
                            <input type="text" id="disabledTextInput-pn" class="form-control" placeholder="Phone Number">
                            <label for="disabledTextInput-pn" class="form-label mt-3" >Date of Birth</label>
                            <input type="text" id="disabledTextInput-pn" class="form-control" placeholder="DOB">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="disabledTextInput-ln" class="form-label">Last Name</label>
                            <input type="text" id="disabledTextInput-ln" class="form-control" placeholder="Last Name">
                            <label for="disabledTextInput-email" class="form-label mt-3" >Email Address</label>
                            <input type="text" id="disabledTextInput-email" class="form-control" placeholder="Email Address">
                            <label for="disabledTextInput-pn" class="form-label mt-3">Gender</label>
                            <input type="text" id="disabledTextInput-pn" class="form-control" placeholder="Gender">
                            <label for="disabledTextInput-pn" class="form-label mt-3" >Shop Category</label>
                            <input type="text" id="disabledTextInput-pn" class="form-control" placeholder="Shop Category">
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
            </fieldset>
        </form>
    </div>

    <div class="container mt-5 mb-2">
        <div class="row ">
            <div class="col-sm-4"></div>
            <div class="col-sm-2">
                <a class="btn btn-primary d-block mx-auto" href="TraderProfileEdit.php" role="button">Edit Profile</a>
            </div>
            <div class="col-sm-2">
                <a class="btn btn-primary d-block mx-auto" href="TraderProfileEditPassword.php" role="button">Update Password</a>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>


</div>
<!-- End demo content -->

</body>
</html>