<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>QLS</title>

<link type="text/css" rel="stylesheet" href="style/css.css" />
</head>
<body>
<?php 
    session_start();
    if(isset($_SESSION['dangnhap']) && $_SESSION['quyen_truy_cap'] == 1){
		
?>

<div class="wrapper">
    <?php
	        include('modules/config.php');
			include('modules/header.php');
			include('modules/menu.php');
			include('modules/content.php');
			include('modules/footer.php');

 ?>   
</div>
<?php
	}elseif(isset($_SESSION['dangnhap']) && $_SESSION['quyen_truy_cap'] == 0){
		?>
		      <div class="wrapper">
    <?php
	        include('modules/config.php');
			include('modules/header.php');
			include('modules/menumember.php');
			include('modules/contentmember.php');
			include('modules/footer.php');

 ?>   
</div>
<?php
	}else{
		header('location:login.php');
		}
	?>
</body>

</html>










