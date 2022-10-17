<?php
require_once('classes/general/helper.php'); 
require_once('classes/actions/login.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <?php require_once 'partials/css-loader.php' ;?>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <h3><strong>Academy PHP Goals</strong></h3>
              </div>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" method="post"> 
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" placeholder="Username">
                  <?php $helper->showErrorMessage('loginFormErrors','email');?>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                  <?php $helper->showErrorMessage('loginFormErrors','password');?>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <?php require_once 'partials/js-loader.php' ;?>
</body>

</html>
