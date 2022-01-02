<?php
include 'config.php';

if(isset($_GET['id'])){
	$id= $_GET['id'];

$count=$db->prepare("DELETE FROM `appliancedetails` WHERE id=:id");
$count->bindParam(":id",$id);
$count->execute();
header('location: index.php');
}



if(isset($_GET['delete'])){
	$id= $_GET['delete'];

$query=$db->prepare("DELETE FROM `flutests_tbl` WHERE id=:id");
$query->bindParam(":id",$id);
$query->execute();
header('location: index.php');
}


if(isset($_GET['deleteInsp'])){
	$id= $_GET['deleteInsp'];

$query=$db->prepare("DELETE FROM `inspection_details_tbl` WHERE id=:id");
$query->bindParam(":id",$id);
$query->execute();
header('location: index.php');
}


///deleteComb

if(isset($_GET['deleteComb'])){
	$id= $_GET['deleteComb'];

$query=$db->prepare("DELETE FROM `combusting_tbl` WHERE id=:id");
$query->bindParam(":id",$id);
$query->execute();
header('location: index.php');
}



if(isset($_GET['deleteData'])){
	$id= $_GET['deleteData'];

$query=$db->prepare("DELETE FROM `faulty_tbl` WHERE id=:id");
$query->bindParam(":id",$id);
$query->execute();
header('location: index.php');
}

?>









