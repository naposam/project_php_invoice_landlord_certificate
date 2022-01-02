<?php
include 'invoiceKBGAS/config.php';
if(isset($_POST['submit'])){
	$a=$_POST['title'];
	$b=$_POST['fname'];
	$c=$_POST['lname'];
	$d=$_POST['type'];
	$e=$_POST['business'];
	$f=$_POST['Address'];
	$g=$_POST['email'];
	$h=$_POST['telephone'];
	$i=$_POST['mobile'];
	$j=$_POST['alt_tel'];
	$k=$_POST['work_tel'];
	$l=$_POST['alt_id'];
	$m=$_POST['uprn'];
	$n=$_POST['Customer'];
	$o=$_POST['pb_invoice'];
	$p=$_POST['propertynote'];
	$q=$_POST['risknote'];
	$sql=$db->query("INSERT INTO propert_tbl(title,fname,lname,type,business,address,email,telephone,mobile,alt_telephone,
		work_telephone,UPRN,alt_ID,Invoice_Payable,Preferred_Invoice_Bank,PropertyNotes,RiskNote) 
		VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$m','$l','$n','$o','$p','$q')");

	 header("Location: addJob.php?status=created");
           

}

?>