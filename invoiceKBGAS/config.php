<?php

try{
$db = new PDO('mysql:host=localhost;dbname=kbgasApp; charset=UTF8','root','');	
}catch(PDOException $e){
	die($e->getMessage());
}




?>