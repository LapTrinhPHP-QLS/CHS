
<?php
     include('../config.php');
	 $id=$_GET['id'];
	 $TenTacGia=$_POST['TenTacGia'];
	 $DiaChi=$_POST['DiaChi'];
	 $SDT=$_POST['SDT'];
	 
	if(isset($_POST['them'])){
		 //Thêm
		 $sql="insert into tacgia(TenTacGia,DiaChi,SDT) value('$TenTacGia','$DiaChi','$SDT')";
		 mysql_query($sql);
		 header('location:../../index.php?quanly=quanlytacgia&ac=them');
	}//sửa
	 elseif(isset($_POST['sua'])){
		$sql="update tacgia set TenTacGia='$TenTacGia', DiaChi='$DiaChi',SDT='$SDT' where MaTacGia='$id'";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlytacgia&ac=sua&id='.$id);
	 }//Xóa
	 else{
		 $sql="delete from tacgia where MaTacGia='$id'";
		 mysql_query($sql);
		  header('location:../../index.php?quanly=quanlytacgia&ac=them');
	 }
?>
