<?php
require_once('classes/general/session.php'); 
require_once('classes/general/helper.php'); 
require_once('classes/actions/users.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
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
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    Users <a href="user-add.php" class="btn btn-info">New User</a>
                  </h4>
                  <div class="table-responsive">
                    <table class="table table-bordered table-stripped">
                      <thead>
                        <tr>
                          <th>Image</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Status</th>
                          <th>Created</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        foreach($users as $user){
                          ?>
                            <tr>
                              <td><img src="<?php echo $user['image'];?>" /></td>
                              <td><?php echo ucwords($user['fname']." ".$user['lname']);?></td>
                              <td><a href="mailto:<?php echo $user['email'];?>"><?php echo $user['email'];?></a></td>
                              <td><a href="tel:<?php echo $user['phone'];?>"><?php echo $user['phone'];?></a></td>
                              <td><label class="badge badge-<?php echo $user['status'] ? 'success' : 'danger';?>"><?php echo $user['status'] ? 'Active' : 'Inactive';?></label></td>
                              <td><?php echo date("Y-m-d H:i:s", $user['created_at']);?></td>
                              <td>
                                <div class="btn btn-group">
                                  <a href="user-edit.php?id=<?php echo $user['id'];?>" class="btn btn-success">Edit</a>
                                  <a href="javascript:;" data-rel="<?php echo $user['id'];?>" class="btn btn-danger deleteUser">Delete</a>
                                </div>
                              </td>
                            </tr>
                          <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
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

  <script type="text/javascript">
    $(".deleteUser").click(function(e){
      e.preventDefault();
      var action = confirm("Are you sure to delete user?");
      if(action === true){
        $.ajax({
          method:"post",
          url:"poc-users.php?action=delete-user",
          data:{id:$(this).data('rel')},
          success:function(response){
            window.location.reload();
          }
        });
      }
    })
  </script>
</body>
</html>

