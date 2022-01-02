
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
   
    <!-- New plug -->
     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  -->
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <!-- <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
	<style>
   body
   {
    margin:0;
    padding:0;
    background-color:#f1f1f1;
   }
   .box
   {
    width:1270px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:25px;
   }
  </style>
	<script>
	
		
		
	</script>
	
</head>
<body>


    <div class="content">
			
			<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        


<div class="container box">
    <table id="order_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>#</th>
       <th></th>
      </tr>
     </thead>
    <?php
          require 'invoiceKBGAS/config.php';

          $sql = "SELECT * FROM propert_tbl WHERE type='Tenant'";
            $result = $db->query($sql);
               $i=0;
                 if($result->rowCount() > 0){
                foreach ($result as $product){
                 $i++;
          ?>
               <tr>
                <td><?php echo  $i?></td>
               <td><?= $product['address']." [". $product['fname']." ".$product['lname']."]" ?></td>
                
               </tr>


          <?php
                   }
                      }
                      ?>
    </table>
    
   </div>

 


                            </div>
                        </div>
                    </div>                    

                </div>
           
<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 
 $('.input-daterange').datepicker({
  todayBtn:'linked',
  format: "yyyy-mm-dd",
  autoclose: true
 });

 fetch_data('no');

 function fetch_data()
 {
  var dataTable = $('#order_data').DataTable({
   "processing" : true,
  });
 }

 $('#search').click(function(){
  var start_date = $('#start_date').val();
  var end_date = $('#end_date').val();
  if(start_date != '' && end_date !='')
  {
   $('#order_data').DataTable().destroy();
   fetch_data('yes', start_date, end_date);
  }
  else
  {
   alert("Both Date is Required");
  }
 }); 
 
});
</script>



                <!-- core dataTable -->


</script>


   
	
	
</body>
</html>
