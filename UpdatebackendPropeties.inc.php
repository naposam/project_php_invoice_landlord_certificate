<?php

include 'invoiceKBGAS/config.php';
if(isset($_POST['update'])){
   $id=$_POST['id'];
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
	$sql=$db->query("UPDATE propert_tbl SET title='$a',fname='$b',lname='$c',type='$d',business='$e',address='$f',email='$g',telephone='$h',mobile='$i',alt_telephone='$j',work_telephone='$k',UPRN='$m',alt_ID='$l',Invoice_Payable='$n',Preferred_Invoice_Bank='$o',PropertyNotes='$p',RiskNote='$q' WHERE id='$id'");

	 header("Location: viewMoreRecords.php?status=created");
           

}

?>