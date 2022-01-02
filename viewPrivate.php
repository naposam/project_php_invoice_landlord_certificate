<?php

  session_start();
    if(!isset($_SESSION['sess_user_id'])) {
        header("location: login.php");
    }

?>
<!DOCTYPE html>
<html>
<?php include 'includes/head.php'?>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<div class="wrapper">

  <?php include 'includes/navbar.php'?>
  <?php include 'includes/sidebar.php'?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">PROPERTY</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active">view property</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section>
      
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Property View</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="#" class="dropdown-item">Action</a>
                      <a href="#" class="dropdown-item">Another action</a>
                      <a href="#" class="dropdown-item">Something else here</a>
                      <a class="dropdown-divider"></a>
                      <a href="#" class="dropdown-item">Separated link</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-10">
                    <div class="container">
                       <?php include 'PrivateView.php';?>

                    </div>
           
                  </div>
                   
                  
                  <!-- /.col -->
                  <div class="col-md-2">
                    <p class="text-center">
                      <strong>SELECT TO VIEW</strong>
                    </p>

                    <div class="progress-group">
                      <a href="viewLandlord.php"  class="form-control btn-warning" style="border-radius: 10px;color: white; text-align: center;">Landlord</a>
                     
                    </div>
                    <!-- /.progress-group -->

                    <div class="progress-group">
                      <a href="viewTenant.php"  class="form-control btn-primary" style="border-radius: 10px;color: white; text-align: center;">Tenant</a>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                     <a href="viewPrivate.php"  class="form-control btn-success" style="border-radius: 10px;color: white; text-align: center;">Privite</a>
                    </div>

                    <!-- /.progress-group -->
                   
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <?php 
                     require 'invoiceKBGAS/config.php';
                     $stmt = $db->query("SELECT * FROM `propert_tbl` where type='Tenant'" );
                      $row_count = $stmt->rowCount();
                        
                    ?>
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i><?php echo  $row_count;?> %</span>
                      <h5 class="description-header"></h5>
                      <span class="description-text">TENANT</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <?php 
                     require 'invoiceKBGAS/config.php';
                     $stmt = $db->query("SELECT * FROM `propert_tbl` where type='Landlord' " );
                      $row_count = $stmt->rowCount();
                        
                    ?>
                      <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i><?php echo  $row_count;?> %</span>
                      <h5 class="description-header"></h5>
                      <span class="description-text"> LANDLORD</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <?php 
                     require 'invoiceKBGAS/config.php';
                     $stmt = $db->query("SELECT * FROM `propert_tbl` where type='Private' ");
                      $row_count = $stmt->rowCount();
                        
                    ?>
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i><?php echo  $row_count;?>%</span>
                      <h5 class="description-header"></h5>
                      <span class="description-text">PRIVITE</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                 
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
 <?php include 'includes/footer.php'  ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php include 'includes/script.php' ?>
</body>
</html>
