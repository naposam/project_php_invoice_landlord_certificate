<?php include 'config.php';
///table 1
$sql="SELECT * FROM appliancedetails";
$query= $db->prepare($sql);
$query->execute();

//table 2
$sql_b="SELECT * FROM `flutests_tbl`";
$query_b= $db->prepare($sql_b);
$query_b->execute();

//table 3
$sql_c="SELECT * FROM `inspection_details_tbl`";
$query_c= $db->prepare($sql_c);
$query_c->execute();

$sql_d="SELECT * FROM `combusting_tbl`";
$query_d= $db->prepare($sql_d);
$query_d->execute();


$sql_fd="SELECT * FROM `faulty_tbl`";
$query_fd= $db->prepare($sql_fd);
$query_fd->execute();


?>
<!DOCTYPE html>
<html>
<head>
	<title>LANDLORD CERTIFICATE</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<style type="text/css">
	table{
		border-collapse: collapse;
	}
	td,th{padding: 5px;width: 200px;outline: none}
	div{outline: none;}
	/*th{background:#333;color: #fff;}*/
	tr:nth-child(){background:#ddd;}

	.activate{
       background:white;
       border-top:1px solid #333;
       border-left:1px solid #333;
       border-right:1px solid #ccc;
       border-bottom:1px solid #ccc;
       padding:2px;
	}
	.processing{
		background:url('loading.gif') no-repeat right;
		background-size: contain;
	}
	@media print {
  .glyphicon, .btn,a{
    display: none;
  }
}
</style>

</head>
<body>
<div class="container-fluid" style="background:#ccc; border-bottom: 2px solid black">
	<a href="../index.php" class="btn btn-danger">
       Back</a>
      
	<div class="row-fluid">
		<div class="col-md-2">
			<img src="img/log.png" width="200" height="50" >
		</div>
		<div class="col-md-6">
	
				<h3 class="text-center" style="font-size: 16px">Home Owner Gas Safety Record ­ CP12</h3>
<p style="font-size: 12px">This inspection is for gas safety purposes only to comply with the Gas Safety (Installation and Use) Regulations.
Flues have been inspected visually and checked for satisfactory evacuation for products of combustion. A
detailed internal inspection of the flue integrity, construction and lining has NOT been carried out. </p>
<p>
For Appliances not owned by a landlord, the recorded 'Appliance Safe' response is based on a visual check for
obvious defects only.
</p>
		</div>
		<div class="col-md-4">
			<p>KBgas & Plumbing<br> 
            37 Aryton Gould House Roman Road<br> 
            London E2 0SD<br> 
            Tel: 07852557827<br> 
            Web: www.kbgas.com<br> 
            Registration No.: 570146</p>
		</div>
	</div>
	
</div>
<br><br>
<div class="container-fluid">
	
	<table class="table table-bordered table-hover">
		<tr bgcolor="#E5E4E2">
		<th width="50%" class="text-center">Inspection/Installation Address</th>
		<th width="50%" class="text-center">Landlord/Agent Address</th>

		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
	</table>
	<br><br>
	<div class="table-responsive fixed-table-body">
	<table class="table table-bordered table-sm">
		<tr bgcolor="#E5E4E2">
			<th width="30%" class="text-center">Appliance Details</th>
			<th width="20%" class="text-center">Flu Tests</th>
			<th width="30%" class="text-center">Inspection Details</th>
		</tr>
		<tr>
			<td>
				<form method="post" id="insert_form">
					<span id="error"></span>
				<table class="table table-bordered table-sm" id="item_table">
					<tr bgcolor="#E5E4E2">

				<th>Location</th>
				<th>Description</th>
				<th>Type</th>
				<th>Flue Type</th>
				<th>Operation Pressure KW Input</th>
				<th>Safety Device Correct Operations</th>
				<th><button type="button" class="btn btn-primary btn-sm add"><span class="glyphicon glyphicon-plus"></span></button></th>
					</tr>
					<?php
                   while($row=$query->fetch()){
                   	$l=$row['loc'];
                   	$d=$row['description'];
                   	$t=$row['type'];
                   	$f=$row['flue_type'];
                   	$o=$row['opki'];
                   	$s=$row['sdco'];
                   $id=$row['id'];
					?>
					<tr>
						
			     <td><div contenteditable="true" onBlur="updateValue(this,'loc','<?php echo $id;?>')" onclick="activate(this)"><?php echo $l;?></div></td>
			      <td><div contenteditable="true" onBlur="updateValue(this,'description','<?php echo $id;?>')" onclick="activate(this)"><?php echo $d;?></div></td>
			       <td><div contenteditable="true" onBlur="updateValue(this,'type','<?php echo $id;?>')" onclick="activate(this)"><?php echo $t;?></div></td>
						
				<td><div contenteditable="true" onBlur="updateValue(this,'flue_type','<?php echo $id;?>')" onclick="activate(this)"><?php echo $f;?></div></td>
				 <td><div contenteditable="true" onBlur="updateValue(this,'opki','<?php echo $id;?>')" onclick="activate(this)"><?php echo $o;?></div></td>
						
				<td><div contenteditable="true" onBlur="updateValue(this,'sdco','<?php echo $id;?>')" onclick="activate(this)"><?php echo $s;?></div></td>
						
					<td><a href="delete.php?id=<?php echo $id;?>" style="color:red"><span class="glyphicon glyphicon-remove"></span></a></td>	
						
					
					</tr>
					<?php
				    }
				?>
				

				</table>
				<input type="submit" name="submit" class="btn btn-success btn-sm" value="save">
				</form>
			</td>
			<td>
				<form method="post" id="insert_flue">
					<span id="error"></span>
				<table class="table table-bordered table-sm" id="flue_table">
					<tr bgcolor="#E5E4E2">
          	   <th>Spillage Test</th>
				<th>Description</th>
				<th>Flue Test</th>
                <th><button type="button" class="btn btn-primary btn-sm btnAdd"><span class="glyphicon glyphicon-plus"></span></button></th>
                </tr>
                <?php
                   while($row=$query_b->fetch()){
                   	$st=$row['st'];
                   	$desp=$row['desp'];
                   	$ft=$row['ft'];
                    $id=$row['id'];
					?>
                <tr>
                <td><div contenteditable="true" onBlur="updateColumns(this,'st','<?php echo $id;?>')" onclick="loadActive(this)"><?php echo $st;?></div></td>
                <td><div contenteditable="true" onBlur="updateColumns(this,'desp','<?php echo $id;?>')" onclick="loadActive(this)"><?php echo $desp;?></div></td>
                <td><div contenteditable="true" onBlur="updateColumns(this,'ft','<?php echo $id;?>')" onclick="loadActive(this)"><?php echo $ft;?></div></td>
                <td><a href="delete.php?delete=<?php echo $id;?>" style="color:red"><span class="glyphicon glyphicon-remove"></span></a></td>	
                </tr>
                <?php
				    }
				?>
				</table>
				<input type="submit" name="submit" class="btn btn-success btn-sm" value="save">
				</form>
			</td>
			<td>
               <form method="post" id="insert_insp">
               	<span id="error"></span>
				<table class="table table-bordered table-sm" id="insp_table">
					<tr bgcolor="#E5E4E2">
						<th>Satisfactory Termination</th>
						<th>Flue Visual Condition</th>
						<th>Adequate Ventilation</th>
						<th>Landlord Application</th>
						<th>Inspected</th>
						<th>Serviced</th>
						<th>Safet To Use</th>
						<th><button type="button" class="btn btn-primary btn-sm addInsp"><span class="glyphicon glyphicon-plus"></span></button></th>
					</tr>
					<?php
                   while($row=$query_c->fetch()){
                   $satt=$row['satt'];
                   	$fvc=$row['fvc'];
                   	$adv=$row['adv'];
                   	$la=$row['la'];
                   	$Insp=$row['Insp'];
                   	$serv=$row['serv'];
                   	$stu=$row['stu'];
                   $id=$row['id'];
					?>
					<tr>
					<td><div contenteditable="true" onBlur="updateInsp(this,'satt','<?php echo $id;?>')" onclick="loadInsp(this)"><?php echo $satt;?></div></td>
					<td><div contenteditable="true" onBlur="updateInsp(this,'fvc','<?php echo $id;?>')" onclick="loadInsp(this)"><?php echo $fvc;?></div></td>
					<td><div contenteditable="true" onBlur="updateInsp(this,'adv','<?php echo $id;?>')" onclick="loadInsp(this)"><?php echo $adv;?></div></td>
					<td><div contenteditable="true" onBlur="updateInsp(this,'la','<?php echo $id;?>')" onclick="loadInsp(this)"><?php echo $la;?></div></td>
					<td><div contenteditable="true" onBlur="updateInsp(this,'Insp','<?php echo $id;?>')" onclick="loadInsp(this)"><?php echo $Insp;?></div></td>
					<td><div contenteditable="true" onBlur="updateInsp(this,'serv','<?php echo $id;?>')" onclick="loadInsp(this)"><?php echo $serv;?></div></td>
					<td><div contenteditable="true" onBlur="updateInsp(this,'stu','<?php echo $id;?>')" onclick="loadInsp(this)"><?php echo $stu;?></div></td>
					<td><a href="delete.php?deleteInsp=<?php echo $id;?>" style="color:red"><span class="glyphicon glyphicon-remove"></span></a></td>		
					</tr>
                     <?php
				    }
				?>
				</table>
				<input type="submit" name="submit" class="btn btn-success btn-sm" value="save">
				</form>
			</td>
		</tr>
		
	</table>
	<table class="table table-bordered">
		
		<tr bgcolor="#E5E4E2">
		<th class="text-center" colspan="2">Combusting Analysis</th>
		</tr>
		<tr bgcolor="#E5E4E2">
			<td class="text-center">High</td>
			<td class="text-center">Low</td>
		</tr>
		</table>
		</div>
	<form method="post" id="insert_rec">
			<span id="error"></span>
	<table class="table table-bordered" id="comb_table">
			<tr bgcolor="#E5E4E2">
				<th class="text-center">co:co2</th>
				<th class="text-center">co</th>
				<th class="text-center">co2</th>
				<th class="text-center">co:co2</th>
				<th class="text-center">co</th>
				<th class="text-center">co2</th>
				<th><button type="button" class="btn btn-primary btn-sm addComb"><span class="glyphicon glyphicon-plus"></span></button></th>
			</tr>
			<?php
                   while($row=$query_d->fetch()){
                   $cc=$row['item1'];
                   	$ca=$row['item2'];
                   	$cb=$row['item3'];
                   	$ccd=$row['item4'];
                   	$cd=$row['item5'];
                   	$ce=$row['item6'];
                   $id=$row['id'];
					?>
				<tr>
					<td><div contenteditable="true" onBlur="updateComb(this,'item1','<?php echo $id;?>')" onclick="loadComb(this)"><?php echo $cc;?></div></td>
					<td><div contenteditable="true" onBlur="updateComb(this,'item2','<?php echo $id;?>')" onclick="loadComb(this)"><?php echo $ca;?></div></td>
					<td><div contenteditable="true" onBlur="updateComb(this,'item3','<?php echo $id;?>')" onclick="loadComb(this)"><?php echo $cb;?></div></td>
					<td><div contenteditable="true" onBlur="updateComb(this,'item4','<?php echo $id;?>')" onclick="loadComb(this)"><?php echo $ccd;?></div></td>
					<td><div contenteditable="true" onBlur="updateComb(this,'item5','<?php echo $id;?>')" onclick="loadComb(this)"><?php echo $cd;?></div></td>
					<td><div contenteditable="true" onBlur="updateComb(this,'item6','<?php echo $id;?>')" onclick="loadComb(this)"><?php echo $ce;?></div></td>
					<td><a href="delete.php?deleteComb=<?php echo $id;?>" style="color:red"><span class="glyphicon glyphicon-remove"></span></a></td>		
					</tr>
                     <?php
				    }
				?>
		</table>
		
		<input type="submit" name="save" class="btn btn-success btn-sm" value="save">
	</form>	
	


<br>
          <!-- worked -->
      <form method="post" id="insert_table">
	     <table class="table table-bordered" id="last_table">
		
		<tr bgcolor="#E5E4E2">
		<th width="5%" class="text-center">#</th>
		<th width="30%" class="text-center">Faults</th>
		<th width="30%" class="text-center">Remedy</th>
		<th width="15%" class="text-center">Warning Notice Issued</th>
		<th width="15%" class="text-center">Waring Tag/sticker Fixed</th>
		<th><button type="button" class="btn btn-primary btn-sm addRow"><span class="glyphicon glyphicon-plus"></span></button></th>

		
		</tr>
		        <?php
		        $i=0;
                   while($row=$query_fd->fetch()){
                   	$i++;
                   	$fault=$row['fault'];
                   	$remedy=$row['remedy'];
                   	$issued=$row['issued'];
                   	$sticker=$row['sticker'];
                    $id=$row['id'];
					?>
					 <tr>
					 	<td><?php echo $i;?></td>
                <td><div contenteditable="true" onBlur="updateFault(this,'fault','<?php echo $id;?>')" onclick="loadfault(this)"><?php echo $fault;?></div></td>
                <td><div contenteditable="true" onBlur="updateFault(this,'remedy','<?php echo $id;?>')" onclick="loadfault(this)"><?php echo $remedy;?></div></td>
                <td><div contenteditable="true" onBlur="updateFault(this,'issued','<?php echo $id;?>')" onclick="loadfault(this)"><?php echo $issued;?></div></td>
                <td><div contenteditable="true" onBlur="updateFault(this,'sticker','<?php echo $id;?>')" onclick="loadfault(this)"><?php echo $sticker;?></div></td>
                <td><a href="delete.php?deleteData=<?php echo $id;?>" style="color:red"><span class="glyphicon glyphicon-remove"></span></a></td>	
                </tr>
                <?php
				    }
				?>

	</table>
	<input type="submit" name="submit" class="btn btn-success btn-sm" value="save">
		</form>
		<br>
	<table class="table table-bordered">
		<tr bgcolor="#E5E4E2">
			<th class="text-center" width="100%">Enginer Note</th>
		</tr>
	</table>

	<table class="table table-bordered">
		<tr bgcolor="#E5E4E2">
			<th class="text-center" width="50%" colspan="4">Gas Installation Pipeline</th>
			<th class="text-center" width="50%" >Heat/Smoke Dectors</th>
		</tr>
		<?php
      $sqlData="SELECT * FROM `enginernotetbl`";
      $query= $db->prepare($sqlData);
      $query->execute();
      $row=$query->fetch();




		?>
            <tr>
            	<td>Satisfactory Visual Inspection</td>
            	<td>
            	<div contenteditable="true" onBlur="updateFault(this,'svi','<?php echo $row["id"];?>')" onclick="loadfault(this)"><?php echo $row['svi'];?></div>	
            	</td>
            	<td>Emergency Control Accessible</td>
            	<td>
            		<div contenteditable="true" onBlur="updateFault(this,'eca','<?php echo $row["id"];?>')" onclick="loadfault(this)"><?php echo $row['eca'];?></div>
            	</td>
            	<td></td>
            </tr>
            <tr>
            <td>Satisfactory Gas Tightness</td>
            	<td>
            	<div contenteditable="true" onBlur="updateFault(this,'sgtt','<?php echo $row["id"];?>')" onclick="loadfault(this)"><?php echo $row['sgtt'];?></div></td>
            	<td>Equipment Bonding Satisfactory</td>
            	<td >
            		<div contenteditable="true" onBlur="updateNote(this,'ebs','<?php echo $row["id"];?>')" onclick="loadNote(this)"><?php echo $row['ebs'];?></div>
            		
            			
            		</td>
            	<td></td>	
            </tr>
            <tr>
            <td>Pipe work warning Issued</td>
            	<td >
            		<div contenteditable="true" onBlur="updateNote(this,'pwni','<?php echo $row["id"];?>')" onclick="loadNote(this)"><?php echo $row['pwni'];?></div>
            		</td>
            	<td></td>
            	<td></td>
            	<td></td>	
            </tr>
		
	</table>
	<?php 

             $month = date('m');
              $day = date('d');
              $year = date('Y');

           $today = $year . '-' . $month . '-' . $day;
           ?>
	<p class="text-center" style="background-color:darkorange;color:white">NEXT GAS SAFETY CHECK MUST BE CARRIED BY: <input type="date" value="<?php echo $today; ?>" id="date" name="date"  style="background-color:darkorange;color:white;outline: none;border:none;"> </p>
	<table  class="table table-bordered">
			<tr>
			<th class="text-center" >Received on of home Owner</th>
			<th class="text-center" >Enginers Signature</th>
		</tr>
		<tr>
			<td><div contenteditable="true">Name: </td>
			<td contenteditable="true">
			<p>I certify that i carried out the inspection on the applicants detailed above</p>
			<p>Name: </p>
			<p>Card ID: </p>
			
			<p>Inspection Date: <input type="date" value="<?php echo $today; ?>" id="date" name="date"></p>
			</td>
            

		</tr>

	</table>
		<div class="pull-right"><img src="logo.png" width="50" height="50"></div>
		<div class="pull-right"><button class="btn btn-success" onclick="window.print()"><span class="glyphicon glyphicon-print"></span></button></div>
</div>
</div>
<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
<script type="text/javascript">
//first table code for 
	function activate(element){
       $(element).attr('class','activate')
	}
	//update queries for first table
	function updateValue(element,column,id){
       var value = element.innerText
       $(element).attr('class','processing')
       $.ajax({
       	url: 'backend.php',
       	type:'post',
       	data:{
       	value: value,
       	column: column,
       	id: id	
       	},
       	success: function(php_result){
       		console.log(php_result);
       		$(element).removeAttr('class');
       	}
       })
	}


//Second table code for 
	function loadActive(element){
       $(element).attr('class','activate')
	}
	//update queries for first table
	function updateColumns(element,column,id){
       var value = element.innerText
       $(element).attr('class','processing')
       $.ajax({
       	url: 'backend.php',
       	type:'post',
       	data:{
       	value: value,
       	column: column,
       	id: id	
       	},
       	success: function(php_result){
       		console.log(php_result);
       		$(element).removeAttr('class');
       	}
       })
	}

	//third table
	function loadInsp(element){
       $(element).attr('class','activate')
	}
	//update queries for third table
	function updateInsp(element,column,id){
       var value = element.innerText
       $(element).attr('class','processing')
       $.ajax({
       	url: 'backend.php',
       	type:'post',
       	data:{
       	value: value,
       	column: column,
       	id: id	
       	},
       	success: function(php_result){
       		console.log(php_result);
       		$(element).removeAttr('class');
       	}
       })
	}
	//third table
	function loadInsp(element){
       $(element).attr('class','activate')
	}
	//update queries for third table
	function updateInsp(element,column,id){
       var value = element.innerText
       $(element).attr('class','processing')
       $.ajax({
       	url: 'backend.php',
       	type:'post',
       	data:{
       	value: value,
       	column: column,
       	id: id	
       	},
       	success: function(php_result){
       		console.log(php_result);
       		$(element).removeAttr('class');
       	}
       })
	}


     //fouth table
	function loadComb(element){
       $(element).attr('class','activate')
	}
	//update queries for fourth table
	function updateComb(element,column,id){
       var value = element.innerText
       $(element).attr('class','processing')
       $.ajax({
       	url: 'backend.php',
       	type:'post',
       	data:{
       	value: value,
       	column: column,
       	id: id	
       	},
       	success: function(php_result){
       		console.log(php_result);
       		$(element).removeAttr('class');
       	}
       })
	}


   //last
	function loadfault(element){
       $(element).attr('class','activate')
	}
	//update queries for last table
	function updateFault(element,column,id){
       var value = element.innerText
       $(element).attr('class','processing')
       $.ajax({
       	url: 'backend.php',
       	type:'post',
       	data:{
       	value: value,
       	column: column,
       	id: id	
       	},
       	success: function(php_result){
       		console.log(php_result);
       		$(element).removeAttr('class');
       	}
       })
	}

	//last
	function loadNote(element){
       $(element).attr('class','activate')
	}
	//update queries for last table
	function updateNote(element,column,id){
       var value = element.innerText
       $(element).attr('class','processing')
       $.ajax({
       	url: 'backend.php',
       	type:'post',
       	data:{
       	value: value,
       	column: column,
       	id: id	
       	},
       	success: function(php_result){
       		console.log(php_result);
       		$(element).removeAttr('class');
       	}
       })
	}





    //adding rows queries first table
    $(document).ready(function(){
    	$(document).on('click', '.add', function(){
    		var html ='';
    		html += '<tr>';
    		html += '<td><input type="text" name="location[]" class="form-control location"/></td>';
    		html += '<td><input type="text" name="description[]" class="form-control description"/></td>';
    		html += '<td><input type="text" name="typ[]" class="form-control typ"/></td>';
    		html += '<td><input type="text" name="flutyp[]" class="form-control flutyp"/></td>';
    		html += '<td><input type="text" name="opkw[]" class="form-control opkw"/></td>';
    		html += '<td><input type="text" name="sdco[]" class="form-control sdco"/></td>';
    		html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
           $('#item_table').append(html);

    	});
    	$(document).on('click','.remove', function(){
    		$(this).closest('tr').remove();
    	});

    	$('#insert_form').on('submit', function(event){
    		event.preventDefault();
    		var error ='';
    		$('.location').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter location at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});
    		$('.description').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter description at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});
    		$('.typ').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter type at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});

    		$('.flutyp').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter Flue type at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});

    		$('.opkw').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter Operation Pressure type at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});

    		$('.sdco').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter Safety Device correct operation type at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});

            var form_data = $(this).serialize();

            if(error == ''){
            	$.ajax({
            		url: "insert.php",
            		method: "POST",
            		data: form_data,
            		success: function(data)
            		{
            			if(data == 'ok')
            			{
            				//removing the rows from table
            				$('#item_table').find("tr:gt(0)").remove();

            				$('#error').html('<div class="alert alert-success">Data Saved</div>');
            			}
            		}

            	})

            }else{

                $('#error').html('<div class="alert alert-danger">'+error+'</div>');
            }

    	})
    });



    ///Second table
    $(document).ready(function(){
    	$(document).on('click', '.btnAdd', function(){
    		var html ='';
    		html += '<tr>';
    		html += '<td><input type="text" name="st[]" class="form-control st"/></td>';
    		html += '<td><input type="text" name="desp[]" class="form-control desp"/></td>';
    		html += '<td><input type="text" name="ft[]" class="form-control ft"/></td>';
    		html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
           $('#flue_table').append(html);

    	});
    	$(document).on('click','.remove', function(){
    		$(this).closest('tr').remove();
    	});

    	$('#insert_flue').on('submit', function(event){
    		event.preventDefault();
    		var error ='';
    		$('.st').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter Spillage Test at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});
    		$('.desp').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter description at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});
    		$('.ft').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter flue Test at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});

            var form_records = $(this).serialize();

            if(error == ''){
            	$.ajax({
            		url: "insert.php",
            		method: "POST",
            		data: form_records,
            		success: function(data)
            		{
            			if(data == 'ok')
            			{
            				//removing the rows from table
            				$('#flue_table').find("tr:gt(0)").remove();

            				$('#error').html('<div class="alert alert-success">Data Saved</div>');
            			}
            		}

            	})

            }else{

                $('#error').html('<div class="alert alert-danger">'+error+'</div>');
            }

    	})
    });



      //adding rows queries Third table
    $(document).ready(function(){
    	$(document).on('click', '.addInsp', function(){
    		var html ='';
    		html += '<tr>';
    		html += '<td><input type="text" name="satt[]" class="form-control satt"/></td>';
    		html += '<td><input type="text" name="fvc[]" class="form-control fvc"/></td>';
    		html += '<td><input type="text" name="adv[]" class="form-control adv"/></td>';
    		html += '<td><input type="text" name="la[]" class="form-control la"/></td>';
    		html += '<td><input type="text" name="Insp[]" class="form-control Insp"/></td>';
    		html += '<td><input type="text" name="serv[]" class="form-control serv"/></td>';
    		html += '<td><input type="text" name="stu[]" class="form-control stu"/></td>';
    		html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
           $('#insp_table').append(html);

    	});
    	$(document).on('click','.remove', function(){
    		$(this).closest('tr').remove();
    	});

    	$('#insert_insp').on('submit', function(event){
    		event.preventDefault();
    		var error ='';
    		$('.satt').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter Satisfactory Termination at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});
    		$('.fvc').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter flue visual condition at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});
    		$('.adv').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter adequate ventilation at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});

    		$('.la').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter lanlord application at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});

    		$('.Insp').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter Inspection Service  at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});

    		$('.serv').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter serviced at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});

    		$('.stu').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter Safety to use at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});

            var insp_data = $(this).serialize();

            if(error == ''){
            	$.ajax({
            		url: "insert.php",
            		method: "POST",
            		data: insp_data,
            		success: function(data)
            		{
            			console.log(data);
            			if(data == 'ok')
            			{
            				//removing the rows from table
            				$('#insp_table').find("tr:gt(0)").remove();

            				$('#error').html('<div class="alert alert-success">Data Saved</div>');
            			}
            		}

            	})

            }else{

                $('#error').html('<div class="alert alert-danger">'+error+'</div>');
            }

    	})
    });

     ///table fouth combusting
  $(document).ready(function(){
    	$(document).on('click', '.addComb', function(){
    		var html ='';
    		html += '<tr>';
    		html += '<td><input type="text" name="item1[]" class="form-control item1"/></td>';
    		html += '<td><input type="text" name="item2[]" class="form-control item2"/></td>';
    		html += '<td><input type="text" name="item3[]" class="form-control item3"/></td>';
    		html += '<td><input type="text" name="item4[]" class="form-control item4"/></td>';
    		html += '<td><input type="text" name="item5[]" class="form-control item5"/></td>';
    		html += '<td><input type="text" name="item6[]" class="form-control item6"/></td>';
    		html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
           $('#comb_table').append(html);

    	});
    	$(document).on('click','.remove', function(){
    		$(this).closest('tr').remove();
    	});

    	$('#insert_rec').on('submit', function(event){
    		event.preventDefault();
    		var error ='';
    		$('.item1').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter location at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});
    		$('.item2').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter description at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});
    		$('.item3').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter type at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});

    		$('.item4').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter Flue type at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});

    		$('.item5').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter Operation Pressure type at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});

    		$('.item6').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter Safety Device correct operation type at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});

            var result_data = $(this).serialize();

            if(error == ''){
            	$.ajax({
            		url: "insert.php",
            		method: "POST",
            		data: result_data,

            		success: function(data)
            		{
            			console.log(result_data);
            			if(data == 'ok')
            			{
            				//removing the rows from table
            				$('#comb_table').find("tr:gt(0)").remove();

            				$('#error').html('<div class="alert alert-success">Data Saved</div>');
            			}
            		}

            	})

            }else{

                $('#error').html('<div class="alert alert-danger">'+error+'</div>');
            }

    	})
    });


//last table



    $(document).ready(function(){
    	$(document).on('click', '.addRow', function(){
    		var html ='';
    		html += '<tr>';
    		html += '<td><input type="text"  class="form-control " readonly/></td>';
    		html += '<td><input type="text" name="fault[]" class="form-control fault"/></td>';
    		html += '<td><input type="text" name="remedy[]" class="form-control remedy"/></td>';
    		html += '<td><input type="text" name="issued[]" class="form-control issued"/></td>';
    		html += '<td><input type="text" name="sticker[]" class="form-control sticker"/></td>';
    		html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
           $('#last_table').append(html);

    	});
    	$(document).on('click','.remove', function(){
    		$(this).closest('tr').remove();
    	});

    	$('#insert_table').on('submit', function(event){
    		event.preventDefault();
    		var error ='';
    		$('.fault').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter Spillage Test at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});
    		$('.remedy').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter description at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});
    		$('.issued').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter flue Test at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});
    		$('.sticker').each(function(){
    			var count = 1;
    			if($(this).val()==''){
    				error += "<p>Enter flue Test at "+count+" Row</p>";
    				return false;
    			}
    			count = count + 1;
    		});


            var form_saved = $(this).serialize();

            if(error == ''){
            	$.ajax({
            		url: "insert.php",
            		method: "POST",
            		data: form_saved,
            		success: function(data)
            		{
            			//console.log(form_saved);
            			if(data == 'ok')
            			{
            				//removing the rows from table
            				$('#last_table').find("tr:gt(0)").remove();

            				$('#error').html('<div class="alert alert-success">Data Saved</div>');
            			}
            		}

            	})

            }else{

                $('#error').html('<div class="alert alert-danger">'+error+'</div>');
            }

    	})
    });









</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>