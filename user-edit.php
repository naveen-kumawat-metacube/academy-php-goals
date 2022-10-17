<?php
require_once('classes/general/session.php');
require_once('classes/general/helper.php');
require_once('classes/actions/users.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">require_once('classes/general/session.php'); 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PHP Academy Goals</title>
  <?php require_once 'partials/css-loader.php' ;?>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php require_once 'partials/navbar.php' ;?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php require_once 'partials/sidebar.php' ;?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <?php echo $session->flash();?>
        <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Users</h4>
                  <p class="card-description">
                    Edit User : <?php echo $user['fname']." ".$user['lname'];?>
                  </p>
                  <form class="forms-sample" enctype='multipart/form-data' action="user-edit.php?id=<?php echo $user['id'];?>&action=edit-user" method="post">
                    <?php
                    if($user['image']){
                      ?>
                      <div class="form-group">
                        <label for="profileImage">Profile Image</label>
                        <br/>
                        <img src="<?php echo $user['image'];?>" width="200" />
                      </div>
                      <?php
                    }
                    ?>
                    <div class="form-group">
                      <label for="profileImage">Update Profile Image</label>
                      <input type="file" class="form-control" name="image" id="profileImage" placeholder="Profile Image">
                      <?php $helper->showErrorMessage('addUserFormErrors','image');?>
                    </div>
                    <div class="form-group">
                      <label for="fname">First Name</label>
                      <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : $user['fname'];?>">
                      <?php $helper->showErrorMessage('addUserFormErrors','fname');?>
                    </div>
                    <div class="form-group">
                      <label for="lname">Last Name</label>
                      <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" value="<?php echo isset($_POST['lname']) ? $_POST['lname'] : $user['lname'];?>">
                      <?php $helper->showErrorMessage('addUserFormErrors','lname');?>
                    </div>
                    <div class="form-group">
                      <label for="email1Address">Email Address</label>
                      <input type="email" class="form-control" name="email" id="email1Address" placeholder="Email Address" value="<?php echo isset($_POST['email']) ? $_POST['email'] : $user['email'];?>">
                      <?php $helper->showErrorMessage('addUserFormErrors','email');?>
                    </div>
                    <div class="form-group">
                      <label for="phoneNumber">Phone Number</label>
                      <input type="text" class="form-control" name="phone" id="phoneNumber" placeholder="Phone Number" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : $user['phone'];?>">
                      <?php $helper->showErrorMessage('addUserFormErrors','phone');?>
                    </div>
                    <div class="form-group">
                      <label for="userStatus">Status</label>
                      <select class="form-control" id="userStatus" name="status">
                        <option value="">Select Status</option>
                        <option value="pending" <?php echo ((isset($_POST['status']) && $_POST['status'] == "pending") || $user['status'] == 'pending') ? "selected" : "";?>>Pending</option>
                        <option value="active" <?php echo ((isset($_POST['status']) && $_POST['status'] == "active") || $user['status'] == 'active') ? "selected" : "";?>>Active</option>
                        <option value="inactive" <?php echo ((isset($_POST['status']) && $_POST['status'] == "inactive") || $user['status'] == 'inactive') ? "selected" : "";?>>Inactive</option>
                      </select>
                      <?php $helper->showErrorMessage('addUserFormErrors','status');?>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="poc-users.php" class="btn btn-dark">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php require_once 'partials/footer.php' ;?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <?php require_once 'partials/js-loader.php' ;?>
</body>
</html>