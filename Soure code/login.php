<title>Login</title>
<?php
      include('modules/config.php');    
	  session_start();	  
	  if(isset($_POST['login'])){
		  $username=$_POST['username'];
		  $password=$_POST['password'];
		  $sql="select * from admin where username='$username'and password='$password' limit 1";
		  $query=mysql_query($sql);
		  $nums=mysql_num_rows($query);
		  if($nums>0){
			  $row=mysql_fetch_array($query);
			  
			  $_SESSION['dangnhap']=$username;
			 session_start();
			  header('location:index.php');
			  $_SESSION['quyen_truy_cap'] = $row[quyen_truy_cap];	
			  $_SESSION['hoten'] = $row[hoten];	
			  $_SESSION['id'] = $row[id_user];  	  
			  }else{
		      echo"<script> alert('Tài khoản không đúng!')</script>";
		      }		  
	  }
?>
<!--
<link rel="stylesheet" type="text/css" href="style/ss.css" />
<form action="" method="post">
<table width="200" border="0" align="center" cellpadding="15" cellspacing="0" >
  <tr>
    <th height="51" colspan="2"><div align="center">Login</div></th>
  </tr>
  <tr>
    <td>Username</td>
    <td><input name="username" type="text" size="20"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input name="password" type="password" size="20"></td>
  </tr>
  <tr>
    <td colspan="2" class="end">  
      <div align="center">
        <input type="submit" name="login" id="button" value="Login">
      </div>
    </td>
  </tr>
</table>
</form>-->
<!DOCTYPE html>
<html lang="vn">
<head>
<title>Coloring Login Form Responsive Widget Template :: w3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coloring Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="web/css/c.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="web/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Molengo&amp;subset=latin-ext" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>
<div data-vide-bg="web/video/color1">
	<div class="center-container">
		<!--header-->
		<div class="header-w3l">
			<h1>Đăng Nhập Hệ Thống</h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-content-agile">
			<div class="wthree-pro">
				<h2></h2>
			</div>
			<div class="sub-main-w3">	
				<form action="#" method="post">
					<input placeholder="Tên Đăng Nhập" name="username" type="text" required>
					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
					<input  placeholder="Mật Khẩu" name="password" type="password" required>
					<span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
					<div class="rem-w3">
						<span class="check-w3"><input type="checkbox" />Remember Me</span>
						<a href="#">Forgot Password?</a>
						<div class="clear"></div>
					</div>
					 <input type="submit" name="login" id="button" value="Login">
				</form>
			</div>
		</div>
		<!--//main-->
		<!--footer-->
		<div class="footer">
			<p>&copy; Copyright 2017.All rights reserved | Design by Trần Ngọc Nam - Lê Cao Diễm Quyên</p>
		</div>
		<!--//footer-->
	</div>
</div>
<!-- js -->
<script type="text/javascript" src="web/js/jquery-2.1.4.min.js"></script>
<script src="web/js/jquery.vide.min.js"></script>
<!-- //js -->
</body>
</html>
