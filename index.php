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
   <link rel="stylesheet" type="text/css" href="message/css/toastr.min.css">
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
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active">Main Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>0</h3>

                <p>INVOICE</p>
              </div>
              <div class="icon"> <i class="nav-icon fas fa-copy"></i>
              </div>
              <a href="invoice.php?add=1" class="small-box-footer"> Add Invoice <i class="fas fa-arrow-circle-right"></i></a>

            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>0<sup style="font-size: 20px">%</sup></h3>

                <p>LANDLORD CERTIFICATE</p>
              </div>
              <div class="icon">
               <i class="nav-icon fas fa-archive"></i>
              </div>
                            <a href="invoiceKBGAS/index.php" class="small-box-footer">Add Landlord Certificate <i class="fas fa-arrow-circle-right"></i></a>

            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner" style="">
                <h3>00</h3>

                <p> PROPERTIES</p>
              </div>
              <div class="icon">
               <i class="nav-icon fas fa-edit"></i>
              </div>
              <a href="invoice.php?add=1" class="small-box-footer"> Add Invoice <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>00</h3>

                <p>INVOICE</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-pound-sign"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  ISSUED INVOICE
                </h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">

                       <?php include 'invoice.php' ?>


                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>                         
                  </div>  
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->


            </section>
           </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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
<script src="message/js/toastr.min.js"></script>
 <script >
 <?php if (isset($_GET['status']) && $_GET['status'] == "created") : ?>
   toastr.success("Login Success");
  <?php endif;?>
  toastr.options={
    "preventDuplicates":true, 
  }
  // function success_toast(){
  //  toastr.success("Data save Succesfully");
  // }
 </script>
</body>
</html>
