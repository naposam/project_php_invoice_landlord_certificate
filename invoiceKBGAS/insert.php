<?php
include 'config.php';
//Appliance Details
if(isset($_POST["location"])){

	$order_id = uniqid();
	for($count =0; $count < count($_POST['location']); $count++){
		$query = "INSERT INTO `appliancedetails`(loc,description,type,flue_type,opki,sdco)
		VALUES(:loc, :description, :type, :flue_type, :opki, :sdco )";

		$statement = $db->prepare($query);
		$statement->execute(
         array(
             ':loc' => $_POST["location"][$count],
             ':description' => $_POST["description"][$count],
             ':type' => $_POST["typ"][$count],
             ':flue_type' => $_POST["flutyp"][$count],
             ':opki' => $_POST["opkw"][$count],
             ':sdco' => $_POST["sdco"][$count]
         )
		);
	}
	$result = $statement->fetchAll();
	if(isset($result)){
		echo 'Ok!';
	}
}



//Flu Tests
if(isset($_POST["st"])){

	
	for($count =0; $count < count($_POST['st']); $count++){
		$query = "INSERT INTO `flutests_tbl`(st,desp,ft)
		VALUES(:st, :desp, :ft)";

		$statement = $db->prepare($query);
		$statement->execute(
         array(
             ':st' => $_POST["st"][$count],
             ':desp' => $_POST["desp"][$count],
             ':ft' => $_POST["ft"][$count]
         )
		);
	}
	$result = $statement->fetchAll();
	if(isset($result)){
		echo 'Ok!';
	}
}




//Inspection Details table
if(isset($_POST["satt"])){
	//$order_id = uniqid();
	for($count =0; $count < count($_POST['satt']); $count++){
		$query = "INSERT INTO `inspection_details_tbl`(satt,fvc,adv,la,Insp,serv,stu)
		VALUES(:satt, :fvc, :adv, :la, :Insp, :serv, :stu)";

		$statement = $db->prepare($query);
		$statement->execute(
         array(
             ':satt' => $_POST["satt"][$count],
             ':fvc' => $_POST["fvc"][$count],
             ':adv' => $_POST["adv"][$count],
             ':la' => $_POST["la"][$count],
             ':Insp' => $_POST["Insp"][$count],
             ':serv' => $_POST["serv"][$count],
             ':stu' => $_POST["stu"][$count]
         )
		);
	}
	$result = $statement->fetchAll();
	if(isset($result)){
		echo 'Ok!';
	}
}

///fourth
if(isset($_POST["item1"])){

	for($count =0; $count < count($_POST['item1']); $count++){
		$query = "INSERT INTO `combusting_tbl`(item1,item2,item3,item4,item5,item6)
		VALUES(:item1, :item2, :item3, :item4,:item5,:item6)";

		$statement = $db->prepare($query);
		$statement->execute(
         array(
             ':item1' => $_POST["item1"][$count],
             ':item2' => $_POST["item2"][$count],
             ':item3' => $_POST["item3"][$count],
             ':item4' => $_POST["item4"][$count],
             ':item5' => $_POST["item5"][$count],
             ':item6' => $_POST["item6"][$count]
         )
		);
	}
	$result = $statement->fetchAll();
	if(isset($result)){
		echo 'Ok!';
	}
}



//last table
if(isset($_POST["fault"])){

	for($count =0; $count < count($_POST['fault']); $count++){
		$query = "INSERT INTO `faulty_tbl`(fault,remedy,issued, sticker)
		VALUES(:fault, :remedy, :issued, :sticker)";

		$statement = $db->prepare($query);
		$statement->execute(
         array(
             ':fault' => $_POST["fault"][$count],
             ':remedy' => $_POST["remedy"][$count],
             ':issued' => $_POST["issued"][$count],
             ':sticker' => $_POST["sticker"][$count]
         )
		);
	}
	$result = $statement->fetchAll();
	if(isset($result)){
		echo 'Ok!';
	}
}









?>