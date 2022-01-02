<?php
session_start();
require 'invoiceKBGAS/config.php';
session_destroy();
header('location: login.php'); 
?>

