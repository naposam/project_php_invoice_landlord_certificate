<?php
session_start();
require 'invoiceKBGAS/config.php';
if(isset($_POST['submit'])){
	$a=$_POST['email'];
	$b=$_POST['pass'];
 if($a != "" && $b != "") {
    try {
      $query = "select * from `login_tbl` where `email`=:username and `password`=:password";
      $stmt = $db->prepare($query);
      $stmt->bindParam('username', $a);
      $stmt->bindValue('password', $b);
      $stmt->execute();
      $count = $stmt->rowCount();
      $row   = $stmt->fetch(PDO::FETCH_ASSOC);
      if($count == 1 && !empty($row)){
       
        $_SESSION['sess_user_id']   = $row['uid'];
        $_SESSION['sess_user_name'] = $row['email'];
        
       header('location: index.php');
      }else{
      	 header('location: login.php');
      } 
    } catch (PDOException $e) {
      echo "Error : ".$e->getMessage();
    }
  } 
}



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body style="background-color: #4a148c">
<div class="container"style="background-image: linear-gradient(to right, blue,orange,blue,blue,red,indigo,violet);
background-repeat: no-repeat;background-size:cover;background-position: center; ">
	<div class="row" style="background:rgba(0,0,0,0.5);">

<div class="indigo text-darken-5 center white-text darken-5"><h2>LOGIN HERE</h2></div>
<div class="col s12 l6 offset-l2">
	
        <form action="" autocomplete="off" method="post">
            <div class="input-field">
                <i class="material-icons prefix white-text">email</i>
                <input type="email" id="email" name="email"  required class="validate white-text">
                <label for="email" class="white-text">Your Email</label>
            </div>
            <div class="div input-field">
                <i class="material-icons prefix white-text">lock</i>
                <input type="password" id="password" name="pass" class = "validate white-text" required="">
                <label for="password" class="white-text">Your password</label>
            </div>

            <div class="input-field center">
                <button class="btn waves-effect waves-light " type="submit" name="submit">Submit</button>
            </div>

		   <div class="divider"></div>
        </form>
    </div>
</div>

</div>
<div class="container">
	<div class="center">
	<a href="#" class="btn-floating pink pulse"></a>
	<a href="#" class="btn-floating black pulse"></a>
	<a href="#" class="btn-floating indigo pulse"></a>
	<a href="#" class="btn-floating green pulse"></a>
	<a href="#" class="btn-floating yellow pulse"></a>
	<a href="#" class="btn-floating red pulse"></a>
	<a href="#" class="btn-floating orange pulse"></a>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
      $(document).ready(function(){
        $('.sidenav').sidenav();
        $('.materialboxed').materialbox();
        $('.parallax').parallax();
        $('.tabs').tabs();
        $('.datepicker').datepicker({

        });
    })
</script>
</body>
</html>