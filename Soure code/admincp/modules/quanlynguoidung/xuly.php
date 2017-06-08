
<?php
     include('../config.php');
	 $id_user=$_GET['id_user'];
	 $newid=$_POST['newid'];
	 $hoten=$_POST['hoten'];
	  $email=$_POST['email'];
	 $password=$_POST['password'];
	 $quyen_truy_cap=$_POST['quyen_truy_cap'];	
	 $username=$_POST['username'];	
	 $sdt=$_POST['sdt'];
	 $avatar=$_FILES['avatar']['name']; 
	 $avatar_tmp=$_FILES['avatar']['tmp_name'];
     move_uploaded_file($avatar_tmp,'uploads/'.$avatar);
	  //them
	 if(isset($_POST['them'])){
		 
		 $sql="select * from admin where username='".$username."'";
		 $query=mysql_query($sql);
		 
   if(mysql_num_rows($query) != "" )
   { 
    header( "refresh:0.05;url=../../index.php?quanly=quanlynguoidung&ac=them" ); 
    echo "<script> alert('Username đã tồn tại') </script>";

   }  
   else
   {		 
		
		 $sql="insert into admin (hoten,quyen_truy_cap,password,username,avatar,id_user,sdt,email) values('$hoten',b'$quyen_truy_cap','$password','$username','$avatar','$newid','$sdt','$email')";
		 mysql_query($sql);
		 header('location:../../index.php?quanly=quanlynguoidung&ac=them');
   }
     //Sua
	 }elseif(isset($_POST['sua'])){
			 $sql="update admin set hoten='$hoten',email='$email',password='$password',username='$username',avatar='$avatar',quyen_truy_cap = b'$quyen_truy_cap',sdt='$sdt' where id_user='$id_user'";
			 mysql_query($sql);
		  header('location:../../index.php?quanly=quanlynguoidung&ac=sua&id_user='.$id_user);
   
		//xóa
	 }else{
		 $sql="delete from admin where id_user='$id_user'";
		 mysql_query($sql);
		  header('location:../../index.php?quanly=quanlynguoidung&ac=them');
	 }
?>
