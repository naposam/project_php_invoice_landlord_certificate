<?php
 include 'config.php';
 sleep(1);
 //first coode for table 1
 if(isset($_POST['id'])){
 	$value=$_POST['value'];
 	$column=$_POST['column'];
 	$id=$_POST['id'];

 	$sql ="UPDATE appliancedetails SET $column= :value WHERE id= :id limit 1";
 	$query = $db->prepare($sql);
 	$query->bindParam(':value',$value);
 	$query->bindParam(':id',$id);

 	if($query->execute()){
 		echo "Updated Successfully";

 	}else{
 		echo "Failed";
 	}


 }

//second table queries
 if(isset($_POST['id'])){
 	$value=$_POST['value'];
 	$column=$_POST['column'];
 	$id=$_POST['id'];

 	$sql_a ="UPDATE `flutests_tbl` SET $column= :value WHERE id= :id limit 1";
 	$query_a = $db->prepare($sql_a);
 	$query_a->bindParam(':value',$value);
 	$query_a->bindParam(':id',$id);

 	if($query_a->execute()){
 		echo "Updated Successfully";

 	}else{
 		echo "Failed";
 	}


 }


 ///third table
 
 if(isset($_POST['id'])){
 	$value=$_POST['value'];
 	$column=$_POST['column'];
 	$id=$_POST['id'];
 	$sql_b ="UPDATE `inspection_details_tbl` SET $column= :value WHERE id= :id limit 1";
 	$query_b = $db->prepare($sql_b);
 	$query_b->bindParam(':value',$value);
 	$query_b->bindParam(':id',$id);

 	if($query_b->execute()){
 		echo "Updated Successfully";

 	}else{
 		echo "Failed";
 	}



 }

if(isset($_POST['id'])){
 	$value=$_POST['value'];
 	$column=$_POST['column'];
 	$id=$_POST['id'];
 	$sql_c ="UPDATE `combusting_tbl` SET $column= :value WHERE id= :id limit 1";
 	$query_c = $db->prepare($sql_c);
 	$query_c->bindParam(':value',$value);
 	$query_c->bindParam(':id',$id);

 	if($query_c->execute()){
 		echo "Updated Successfully";

 	}else{
 		echo "Failed";
 	}


 }


 if(isset($_POST['id'])){
 	$value=$_POST['value'];
 	$column=$_POST['column'];
 	$id=$_POST['id'];
 	$sql_D ="UPDATE `faulty_tbl` SET $column= :value WHERE id= :id limit 1";
 	$query_D = $db->prepare($sql_D);
 	$query_D->bindParam(':value',$value);
 	$query_D->bindParam(':id',$id);

 	if($query_D->execute()){
 		echo "Updated Successfully";

 	}else{
 		echo "Failed";
 	}


 }



 if(isset($_POST['id'])){
 	$value=$_POST['value'];
 	$column=$_POST['column'];
 	$id=$_POST['id'];
 	$sql_D ="UPDATE `enginernotetbl` SET $column= :value WHERE id= :id limit 1";
 	$query_D = $db->prepare($sql_D);
 	$query_D->bindParam(':value',$value);
 	$query_D->bindParam(':id',$id);

 	if($query_D->execute()){
 		echo "Updated Successfully";

 	}else{
 		echo "Failed";
 	}


 }
?>