<!DOCTYPE html>
<html>
<?php include 'includes/head.php'?>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<div class="wrapper">

  <?php include 'includes/navbar.php'?>
  <?php include 'includes/sidebar.php';
    require 'invoiceKBGAS/config.php';

$sql = "SELECT * FROM propert_tbl";
    $result = $db->query($sql);
  ?>
  
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
     
        <div class="row">
        <div class="table-responsive">
             <table class="table table-bordered">
               <tr>
                 <th>#</th>
                 <!-- <th>Title</th> -->
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Type</th>
                  <th>Business</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Telephone</th>
                  <th>Mobile</th>
                  <!-- <th>Alternative Telephone</th> -->
                  <!-- <th>Work Telephone</th> -->
                  <th>Custom Reference</th>
                  <th>Invoice Paid By</th>
                  <!-- <th>Alternative Id</th> -->
                   <th>Prefered Bank</th>
                  <th>Property Note</th>
                   <th>Risk Note</th>
                   <th></th>
               </tr>
              
              <?php 
              $i=0;
                 if($result->rowCount() > 0){
                foreach ($result as $product){
                 $i++;

                ?>
                <tr>
                  <?php if($product['type']=="Landlord"):?>
                  <td class="alert-warning"><?= $i?></td>
                  <!-- <td><?= $product['title'] ?></td> -->
                   <td class="alert-warning"><?= $product['fname'] ?></td>
                   <td class="alert-warning"><?= $product['lname'] ?></td>
                   <td class="alert-warning"><?= $product['type'] ?></td>
                   <td class="alert-warning"><?= $product['business'] ?></td>
                   <td class="alert-warning"><?= $product['address'] ?></td>
                   <td class="alert-warning"><?= $product['email'] ?></td>
                   <td class="alert-warning"><?= $product['telephone'] ?></td>
                   <td class="alert-warning"><?= $product['mobile'] ?></td>
                   <!-- <td><?= $product['alt_telephone'] ?></td> -->
                   <!-- <td><?= $product['work_telephone'] ?></td> -->

                   <td class="alert-warning"><?= $product['UPRN'] ?></td>
                   <!-- <td><?= $product['alt_ID'] ?></td> -->
                   <td class="alert-warning"><?= $product['Invoice_Payable'] ?></td>
                   <td class="alert-warning"><?= $product['Preferred_Invoice_Bank'] ?></td>
                   <td class="alert-warning"><?= $product['PropertyNotes'] ?></td>
                   <td class="alert-warning"><?= $product['RiskNote'] ?></td>
                   <td class="alert-warning"><a href="ViewMoreRecords.php?id=<?= $product['id'] ?>"> <i class="fas fa-edit" style="color:red"></i></a></td>
                 <?php endif;?>

                 <?php if($product['type']=="Private"):?>
                  <td class="alert-success"><?= $i?></td>
                  <!-- <td><?= $product['title'] ?></td> -->
                   <td class="alert-success"><?= $product['fname'] ?></td>
                   <td class="alert-success"><?= $product['lname'] ?></td>
                   <td class="alert-success"><?= $product['type'] ?></td>
                   <td class="alert-success"><?= $product['business'] ?></td>
                   <td class="alert-success"><?= $product['address'] ?></td>
                   <td class="alert-success"><?= $product['email'] ?></td>
                   <td class="alert-success"><?= $product['telephone'] ?></td>
                   <td class="alert-success"><?= $product['mobile'] ?></td>
                   <!-- <td><?= $product['alt_telephone'] ?></td> -->
                   <!-- <td><?= $product['work_telephone'] ?></td> -->

                   <td class="alert-success"><?= $product['UPRN'] ?></td>
                   <!-- <td><?= $product['alt_ID'] ?></td> -->
                   <td class="alert-success"><?= $product['Invoice_Payable'] ?></td>
                   <td class="alert-success"><?= $product['Preferred_Invoice_Bank'] ?></td>
                   <td class="alert-success"><?= $product['PropertyNotes'] ?></td>
                   <td class="alert-success"><?= $product['RiskNote'] ?></td>
                   <td class="alert-success"><a href="ViewMoreRecords.php?id=<?= $product['id'] ?>"> <i class="fas fa-edit" style="color:red"></i></a></td>
                 <?php endif;?>
                 <?php if($product['type']=="Tenant"):?>
                  <td class="alert-primary"><?= $i?></td>
                  <!-- <td><?= $product['title'] ?></td> -->
                   <td class="alert-primary"><?= $product['fname'] ?></td>
                   <td class="alert-primary"><?= $product['lname'] ?></td>
                   <td class="alert-primary"><?= $product['type'] ?></td>
                   <td class="alert-primary"><?= $product['business'] ?></td>
                   <td class="alert-primary"><?= $product['address'] ?></td>
                   <td class="alert-primary"><?= $product['email'] ?></td>
                   <td class="alert-primary"><?= $product['telephone'] ?></td>
                   <td class="alert-primary"><?= $product['mobile'] ?></td>
                   <!-- <td><?= $product['alt_telephone'] ?></td> -->
                   <!-- <td><?= $product['work_telephone'] ?></td> -->

                   <td class="alert-primary"><?= $product['UPRN'] ?></td>
                   <!-- <td><?= $product['alt_ID'] ?></td> -->
                   <td class="alert-primary"><?= $product['Invoice_Payable'] ?></td>
                   <td class="alert-primary"><?= $product['Preferred_Invoice_Bank'] ?></td>
                   <td class="alert-primary"><?= $product['PropertyNotes'] ?></td>
                   <td class="alert-primary"><?= $product['RiskNote'] ?></td>
                   <td class="alert-primary"><a href="ViewMoreRecords.php?id=<?= $product['id'] ?>"> <i class="fas fa-edit" style="color:red"></i></a></td>
                 <?php endif;?>
                </tr>

                <?php
              }
              }?>
             </table>         
              </div>
                   
                  </div>
                </div>
                  </section>
    
                    </div>
              </div>
              <!-- /.card-body -->
 
    


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
