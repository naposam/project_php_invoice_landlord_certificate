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
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active">Main Dashboard</li>
            </ol>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-md-2">
          <div style="height: 100px;background-color: rgba(0,0,0,0.4);">
            <a href="" class="btn-primary form-control">Save Job</a>
            <br>
            <a href="" class="btn-warning form-control">Cancle</a>
          </div>
        </div>
        
          <div class="col-md-10">
                 <!-- MAP & BOX PANE -->
            <div class="card">
               <?php if (isset($_GET['status']) && $_GET['status'] == "created") : ?>
        <div class="alert alert-success" role="alert">
            <strong style="text-align: center; text-transform: uppercase;">Successfully Created</strong>
        </div>
            <?php endif ?>
              <div class="card-header">
                <h3 class="card-title">US-Visitors Report</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                      <div class="container">
                      <div class=" row">
                              <div class="col-md-2">
                          <h6 >Occupier</h6>
                          <br>
                          <h6>Type</h6>
                          <br>
                          <h6>Business</h6>
                          <br>
                          <h6>Address</h6>
                          <br>
                          <h6>E-Mail</h6>
                          <br>
                          <h6>Telephone</h6>
                          <br>
                          <h6>Alt.Telephone</h6>
                          <br>
                          <h6>Alternative ID</h6>
                          <br>
                          <h6>Invoice Payable By</h6>
                          <br>
                          <br>
                          <h6>Property Notes</h6>
                          <br>
                          <br> 
                          <br>
                          <br>
                          <br>
                          <h6>Risk Notes</h6>

                        </div>
                        <?php include 'backEndAddJob.inc.php'; ?>
                      
                      <form class="col-md-8" method="POST" autocomplete="off">
                          <div class="row">
                         
                          <div class="col-md-2" style="margin-bottom: 9px">
                          <input type="text" name="title" placeholder="Title" class="form-control" onkeyup="letteronly(this)" required="">
                        </div>

                        <div class="col-md-5" style="margin-bottom: 9px">
                          <input type="text" name="fname" placeholder="first Name" class="form-control" onkeyup="letteronly(this)" required="">
                        </div>

                        <div class="col-md-5" style="margin-bottom: 9px">
                          <input type="text" name="lname" placeholder="Last Name" class="form-control" onkeyup="letteronly(this)" required="">
                        </div>

                        <div class="col-md-12" style="margin-bottom: 9px">
                         <select class="browser-default custom-select" name="type" required="" >
                          <option selected disabled="">Type</option>
                         <option value="1">Private</option>
                          <option value="2">Tenante</option>
                          <option value="3">Landlord</option>
                        </select> 
                                               </div>
                        <div class="col-md-12" style="margin-bottom: 9px">
                          <input type="text" name="business" placeholder="Business" class="form-control dropdown-toggle" onkeyup="letteronly(this)" required="">
                        </div>

                        <div class="col-md-12" style="margin-bottom: 9px">
                          <input type="text" name="Address" placeholder="Address" class="form-control dropdown-toggle" required="" >
                        </div>

                        <div class="col-md-12" style="margin-bottom: 9px">
                          <input type="email" name="email" placeholder="Email" class="form-control dropdown-toggle" required="" >
                        </div>

                        <div class="col-md-5" style="margin-bottom: 9px">
                          <input type="text" onkeyup="numberonly(this)" maxlength ="13" minlength="10" name="telephone" placeholder="Telephone" class="form-control " required="" autocomplete="off">
                        </div>

                        <div class="col-md-2" style="margin-bottom: 9px">
                          <label style="margin-top: 15%" >Mobile </label>
                        </div>

                        <div class="col-md-5" style="margin-bottom: 9px">
                          <input type="text" onkeyup="numberonly(this)" maxlength ="10" minlength="10" name="mobile" placeholder="Mobile" class="form-control " required="" >
                        </div>
                        <div class="col-md-5" style="margin-bottom: 9px">
                          <input type="text" name="alt_tel" onkeyup="numberonly(this)" maxlength ="13" minlength="10" placeholder="Alt.Tel" class="form-control ">
                        </div>
                        
                        <div class="col-md-2" style="margin-bottom: 9px">
                          <h6>Work Tel</h6>
                        </div>
                        <div class="col-md-5" style="margin-bottom: 9px">
                          <input type="text" name="work_tel" placeholder="Work Tel" onkeyup="numberonly(this)" maxlength ="13" minlength="10" class="form-control dropdown-toggle" >
                        </div>
                        <div class="col-md-7"  style="margin-bottom: 9px">
                          <input type="text" name="alt_id" class="form-control" placeholder="Alternative ID">
                        </div>
                        <div class="col-md-2"  style="margin-bottom: 9px">
                          <h6>custom Ref(UPRN)</h6>
                        </div>
                        <div class="col-md-3"  style="margin-bottom: 9px">
                          <input type="text" name="uprn" class="form-control">
                        </div>
                         <div class="col-md-7"  style="margin-bottom: 9px">
                          <input type="text" name="Customer" list="cityname" class="form-control">
                              <datalist id="cityname" >
                                <?php
                                 require 'invoiceKBGAS/config.php';
                                 $sql = "SELECT * FROM tbl_order";
                                $result = $db->query($sql);
                                 if($result->rowCount() > 0){
                                  foreach ($result as $product){
                                ?>
                                <option ><?= $product['order_receiver_name']; ?></option>
                                
                               <?php
                                 }
                               }
                               ?>
                              </datalist>
                                   </div>
                        <div class="col-md-2"  style="margin-bottom: 9px">
                          <h6>Preferred Invoice Bank</h6>
                        </div>
                        <div class="col-md-3"  style="margin-bottom: 9px">
                         <select class="browser-default custom-select" name="pb_invoice" required="" >
                              <option selected>KWABED UTILITY LTD</option>
                              
                        </select>
                        </div>
                        <div class="col-md-12"  style="margin-bottom: 9px" >
                          <div class="form-group green-border-focus">
                            <label for="exampleFormControlTextarea5">Characters remaining: 4000</label required="" >
                            <textarea class="form-control" id="exampleFormControlTextarea5" rows="3" name="propertynote" placeholder="Property Note "></textarea>
                          </div>
                        </div>
                        <div class="col-md-12"  style="margin-bottom: 9px">
                          <div class="form-group green-border-focus">
                            <label for="exampleFormControlTextarea5">Characters remaining: 4000</label required="" >
                            <textarea class="form-control" id="exampleFormControlTextarea5" rows="3" name="risknote"  placeholder="Risk Note"></textarea>
                          </div>
                        </div>
                        <div class="col-md-2 ">

                    <input type="submit" name="submit" value="Save Job " class="btn-success form-control" style="width: 150px; height: 60px">
                    
                  </div>
                      
                    </div>
                   
                  </div>
                    </div>
              </div>
              <!-- /.card-body -->
 
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">US-Visitors Report</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="row">
                  <div class="container">
                    <div class="row">
                  <div class="col-md-6">
                    
                   <h6> Start Date:</h6> <input type="date" name="sdate" class="form-control " >
                   </div>
                   <div class="col-md-6">
                     <h6>Start Time:</h6><input type="time" name="stime" class="form-control" >
                     </div>
                     <div class="col-md-6">
                      <h6> End Date:</h6> <input type="date" name="edate" class="form-control" >
                      </div>
                      <div class="col-md-6">
                       <h6> End Time:</h6> <input type="time" name="etime" class="form-control" >
                       </div>
                    
                   </div>
                  </div>
                  </form>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">US-Visitors Report</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                
              </div>
              <!-- /.card-body -->
            </div>
            </div>





          </div>

        
       
      </div>
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
