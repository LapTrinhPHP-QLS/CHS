
<?php
     include('../config.php');
	 $MaLoaiSach=$_GET['MaLoaiSach'];
	 $TenLoaiSach=$_POST['TenLoaiSach'];
	 
	if(isset($_POST['them'])){
		 //Thêm
		 $sql="insert into LoaiSach(TenLoaiSach) value('$TenLoaiSach')";
		 mysql_query($sql);
		 header('location:../../index.php?quanly=quanlyloaisach&ac=them');
	}//sửa
	 elseif(isset($_POST['sua'])){
		$sql="update LoaiSach set TenLoaiSach='$TenLoaiSach' where MaLoaiSach='$MaLoaiSach'";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlyloaisach&ac=sua&id='.$MaLoaiSach);
	 }//Xóa
	 else{
		 $sql="delete from LoaiSach where MaLoaiSach='$MaLoaiSach'";
		 mysql_query($sql);
		  header('location:../../index.php?quanly=quanlyloaisach&ac=them');
	 }
?>
