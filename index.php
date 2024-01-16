<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="assests/css/bootstrap.css">
    <link rel="stylesheet" href="assests/css/main.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css' />
  </head>

<body>


<?php

include("includes/header.php");
include("includes/sidebar.php");
include("includes/topbar.php");




?>


 <!-- main content start -->
 <main class="bg-secondary bg-opacity-25 min-vh-100">

<div class="container-fluid p-3 p-md-4">

  <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
    <div class="fs-4 text-secondary fw-bolder">Dashboard</div>
   
  </div>
  <hr>
  <div class="row g-4">

    <div class="col-lg-3 col-md-6">
      <a href="#" class="text-decoration-none">
        <div class="card bg-primary bg-gradient shadow-sm custom-card">
          <div class="card-body p-3 pb-2 px-3 d-flex flex-row justify-content-between align-items-center">
            <div>
              <h1><i class="fas fa-cart-shopping fa-2x text-white-50"></i></h1>
            </div>
            <div class="text-center">
              <h2 class="display-4 fw-bold text-white">1</h2>
              <h4 class="text-white-50">Orders</h4>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-lg-3 col-md-6">
      <a href="#" class="text-decoration-none">
        <div class="card bg-primary bg-success shadow-sm custom-card">
          <div class="card-body p-3 pb-2 px-3 d-flex flex-row justify-content-between align-items-center">
            <div>
              <h1><i class="fas fa-list fa-2x text-white-50"></i></h1>
            </div>
            <div class="text-center">
              <h2 class="display-4 fw-bold text-white">4</h2>
              <h4 class="text-white-50">Products</h4>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-lg-3 col-md-6">
      <a href="#" class="text-decoration-none">
        <div class="card bg-danger bg-gradient shadow-sm custom-card">
          <div class="card-body p-3 pb-2 px-3 d-flex flex-row justify-content-between align-items-center">
            <div>
              <h1><i class="fas fa-users fa-2x text-white-50"></i></h1>
            </div>
            <div class="text-center">
              <h2 class="display-4 fw-bold text-white">5</h2>
              <h4 class="text-white-50">Users</h4>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-lg-3 col-md-6">
      <a href="#" class="text-decoration-none">
        <div class="card bg-dark bg-gradient shadow-sm custom-card">
          <div class="card-body p-3 pb-2 px-3 d-flex flex-row justify-content-between align-items-center">
            <div>
              <h1><i class="fas fa-people-line fa-2x text-white-50"></i></h1>
            </div>
            <div class="text-center">
              <h2 class="display-4 fw-bold text-white">8</h2>
              <h4 class="text-white-50">Visitors</h4>
            </div>
          </div>
        </div>
      </a>
    </div>



  </div>
</div>
</main>
<!-- main content end -->



<?php

include("includes/footer.php");

?>


</body>
</html>
 