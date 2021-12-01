<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hexa Food Admin</title>

  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/logo.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="./../../index.php"><img src="../../images/logo.png" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="./../../index.php"><img src="../../images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
  
        <ul class="navbar-nav navbar-nav-right">

          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="../../images/faces/face5.jpg" alt="profile"/>
              <span class="nav-profile-name">Louis Barnett</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../index.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../category/category.php">
              <i class=" menu-icon"><img src="https://img.icons8.com/ios/16/000000/categorize.png"/></i>
              <span class="menu-title">Categories</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../products/product.php">
              <i class=" menu-icon"><img src="https://img.icons8.com/external-prettycons-lineal-prettycons/16/000000/external-products-user-interface-vol-3-prettycons-lineal-prettycons.png"/></i>

              <span class="menu-title">Products</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../users/user.php">
              <i class="menu-icon"><img src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/16/000000/external-users-cyber-security-kiranshastry-lineal-kiranshastry-1.png"/></i>
              <span class="menu-title">Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../billing/billing.php">
              <i class="menu-icon"><img src="https://img.icons8.com/ios/16/000000/cash-receipt.png"/></i>
              <span class="menu-title">Biilling</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <?php
        $servername = "localhost";
        $username = "sneoiuvk_laptrinhweb";
        $password = "147258369";
        $conn = new mysqli($servername, $username, $password);
        $conn->set_charset("utf8");
        // include('/config/connectdb.php');
        $sqlSelect = "SELECT * FROM laptrinhweb.user";
        $resultSelect = mysqli_query($conn, $sqlSelect);
        // $result = mysqli_fetch_row($resultSelect);
      ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Thêm Thông Tin User</h4>                
                  <!-- <div class="form-group">
                    <label for="exampleFormControlSelect1">User ID</label>
                    <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                    <option>--Chọn User ID--</option>
                    <?php
                      while ($result = mysqli_fetch_assoc($resultSelect)) {
                        echo '<option>' . $result['user_id'] . '</option>';
                      }
                    ?>
                    </select>
                  </div> -->
                  <form id="formUSER" action="./addUser.php" class="forms-sample" method="POST">
                    <div class="form-group">
                      <label for="userID">User ID</label>
                      <input type="text" class="form-control" id="userID" name="userID" placeholder="User ID">
                      <div class="message"></div>
                    </div>
                    <div class="form-group">
                      <label for="user">User</label>
                      <input type="text" class="form-control" id="user" name="user" placeholder="User">
                      <div class="message"></div>
                    </div>
                    <div class="form-group">
                      <label for="firstname">First name</label>
                      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name">
                      <div class="message"></div>
                    </div>
                    <div class="form-group">
                      <label for="process">Process</label>
                      <input type="text" class="form-control" id="process" name="process" placeholder="Process">
                      <div class="message"></div>
                    </div>
                    <div class="form-group">
                      <label for="total">Total Buy</label>
                      <input type="text" class="form-control" id="total" name="total" placeholder="Total Buy">
                      <div class="message"></div>
                    </div>
                    <div class="form-group">
                      <label for="date">Date Join</label>
                      <input type="text" class="form-control" id="date" name="date" placeholder="Date Join">
                      <div class="message"></div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>
                </div>        
              </div>            
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/data-table.js"></script>
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->
  ><script src="../../js/validator.js"></script>
  <script>
    Validator({
      form:"#formUSER",
      errorSelector:".message",
      rules:[
        Validator.isRequired("#user"),
        Validator.isRequired("#firstname"),
        Validator.isRequired("#process"),
        Validator.isRequired("#total"),
        Validator.isRequired("#date"),
      ]
    })
  </script>
</body>

</html>