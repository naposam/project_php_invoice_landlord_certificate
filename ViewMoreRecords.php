
<?php include('validation.php');?>
<?php 
require 'invoiceKBGAS/config.php';
//include ''; 

$id = $_GET['id'] ? intval($_GET['id']) : 0;

try {
    $sql = "SELECT * FROM propert_tbl WHERE id = :id LIMIT 1";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();    
} catch (Exception $e) {
    echo "Error " . $e->getMessage();
    exit();
}

if (!$stmt->rowCount()) {
    header("Location: index.php");
    exit();
}
$product = $stmt->fetch();

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
    <section>
      
        <div class="row">
          <div class="col-md-12 ">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Update Records</h5>
          <?php if (isset($_GET['status']) && $_GET['status'] == "created") : ?>
        <div class="alert alert-success" role="alert">
            <strong style="text-align: center; text-transform: uppercase;">Successfully Updated</strong>
        </div>
            <?php endif ?>
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

                        <form class="col-md-10" method="POST" action="UpdatebackendPropeties.inc.php">
                          <div class="row">
                          <form method="pos" >
                          <div class="col-md-2" style="margin-bottom: 9px">
                            <input type="hidden" name="id" value="<?= $product['id'] ?>">
                          <input type="text" name="title" placeholder="Title" class="form-control" onkeyup="letteronly(this)" required="" value="<?= $product['title'] ?>">
                        </div>

                        <div class="col-md-5" style="margin-bottom: 9px">
                          <input type="text" name="fname" placeholder="first Name" class="form-control" onkeyup="letteronly(this)" required="" value="<?= $product['fname'] ?>">
                        </div>

                        <div class="col-md-5" style="margin-bottom: 9px">
                          <input type="text" name="lname" placeholder="Last Name" class="form-control" onkeyup="letteronly(this)" required="" value="<?= $product['lname'] ?>">
                        </div>

                        <div class="col-md-12" style="margin-bottom: 9px">
                         <select class="browser-default custom-select" name="type" required="" >
                          
                          <option><?= $product['type'] ?></option>
                         <option >Private</option>
                          <option >Tenant</option>
                          <option >Landlord</option>
                        </select> 
                                               </div>
                        <div class="col-md-12" style="margin-bottom: 9px">
                          <input type="text" name="business" placeholder="Business" class="form-control dropdown-toggle" onkeyup="letteronly(this)" required="" value="<?= $product['business'] ?>">
                        </div>

                        <div class="col-md-12" style="margin-bottom: 9px">
                          <input type="text" name="Address" placeholder="Address" class="form-control dropdown-toggle" required="" value="<?= $product['address'] ?>">
                        </div>

                        <div class="col-md-12" style="margin-bottom: 9px">
                          <input type="email" name="email" placeholder="Email" class="form-control dropdown-toggle" required="" value="<?= $product['email'] ?>" >
                        </div>

                        <div class="col-md-5" style="margin-bottom: 9px">
                          <input type="text" onkeyup="numberonly(this)" maxlength ="13" minlength="10" name="telephone" placeholder="Telephone" class="form-control " required="" value="<?= $product['telephone'] ?>">
                        </div>

                        <div class="col-md-2" style="margin-bottom: 9px">
                          <label style="margin-top: 15%" >Mobile </label>
                        </div>

                        <div class="col-md-5" style="margin-bottom: 9px">
                          <input type="text" onkeyup="numberonly(this)" maxlength ="10" minlength="10" name="mobile" placeholder="Mobile" class="form-control " required="" value="<?= $product['mobile'] ?>">
                        </div>
                        <div class="col-md-5" style="margin-bottom: 9px">
                          <input type="text" name="alt_tel" onkeyup="numberonly(this)" maxlength ="13" minlength="10" placeholder="Alt.Tel" class="form-control " value="<?= $product['alt_telephone'] ?>">
                        </div>
                        
                        <div class="col-md-2" style="margin-bottom: 9px">
                          <h6>Work Tel</h6>
                        </div>
                        <div class="col-md-5" style="margin-bottom: 9px">
                          <input type="text" name="work_tel" placeholder="Work Tel" onkeyup="numberonly(this)" maxlength ="13" minlength="10" class="form-control dropdown-toggle" value="<?= $product['work_telephone'] ?>">
                        </div>
                        <div class="col-md-7"  style="margin-bottom: 9px">
                          <input type="text" name="alt_id" class="form-control" placeholder="Alternative ID" value="<?= $product['alt_ID'] ?>">
                        </div>
                        <div class="col-md-2"  style="margin-bottom: 9px">
                          <h6>custom Ref(UPRN)</h6>
                        </div>
                        <div class="col-md-3"  style="margin-bottom: 9px">
                          <input type="text" name="uprn" class="form-control" value="<?= $product['UPRN'] ?>">
                        </div>
                         <div class="col-md-7"  style="margin-bottom: 9px">
                            <select class="browser-default custom-select" name="Customer" required=""  >
                              <option ><?= $product['Invoice_Payable'] ?></option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                            </select>                        </div>
                        <div class="col-md-2"  style="margin-bottom: 9px">
                          <h6>Preferred Invoice Bank</h6>
                        </div>
                        <div class="col-md-3"  style="margin-bottom: 9px">
                         <select class="browser-default custom-select" name="pb_invoice" required="" >
                              <option ><?= $product['Preferred_Invoice_Bank'] ?></option>
                              <!-- <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option> -->
                        </select>
                        </div>
                        <div class="col-md-12"  style="margin-bottom: 9px" >
                          <div class="form-group green-border-focus">
                            <label for="exampleFormControlTextarea5">Characters remaining: 4000</label required="" >
                            <textarea class="form-control" id="exampleFormControlTextarea5" rows="3" name="propertynote" placeholder="Property Note "><?= $product['PropertyNotes'] ?></textarea>
                          </div>
                        </div>
                        <div class="col-md-12"  style="margin-bottom: 9px">
                          <div class="form-group green-border-focus">
                            <label for="exampleFormControlTextarea5">Characters remaining: 4000</label required="" >
                            <textarea class="form-control" id="exampleFormControlTextarea5" rows="3" name="risknote"  placeholder="Risk Note"><?= $product['RiskNote'] ?></textarea>
                          </div>
                        </div>
                        <div class="col-md-2 ">

                    <input type="submit" name="update" value="Update Records" class="btn-success form-control" style="width: 150px; height: 60px">
                    
                  </div>
                        
                    </div>
                    </form>
                  </div>
                    </div>
                  </div>
                    
                  
                  <!-- /.col -->
                  <div class="col-md-2 ">

                   
                    
                  </div>


                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
              <div class="card-footer">
           
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
