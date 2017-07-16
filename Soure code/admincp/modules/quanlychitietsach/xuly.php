

<?php
     include('../config.php');
	 $id=$_GET['id'];
	 $TenSach=$_POST['TenSach'];
	 $loaisach=$_POST['loaisach'];
	 $tacgia=$_POST['tacgia'];
	 $nhaxuatban=$_POST['nhaxuatban'];
	 $HinhAnh=$_FILES['HinhAnh']['name']; 
	 $HinhAnh_tmp=$_FILES['HinhAnh']['tmp_name'];
     move_uploaded_file($HinhAnh_tmp,'uploads/'.$HinhAnh);
	 $MoTa=$_POST['MoTa'];
	 $SoTrang=$_POST['SoTrang'];
	 $KichThuoc=$_POST['KichThuoc'];
	 $LoaiBia=$_POST['LoaiBia'];
	 $DonGia=$_POST['DonGia'];
	 $SoLuongTon=$_POST['SoLuongTon'];
	
	 if(isset($_POST['them'])){
		 //them
		 $sql="insert into sach (TenSach,MaLoaiSach,MaTacGia,MaNXB,HinhAnh,MoTa,SoTrang,KichThuoc,LoaiBia,DonGia,SoLuongTon)values('$TenSach','$loaisach',$'tacgia','$nhaxuatban','$HinhAnh','$MoTa','$SoTrang','$KichThuoc','$LoaiBia','$DonGia','$SoLuongTon')";
		 mysql_query($sql);
		 header('location:../../index.php?quanly=quanlychitietsach&ac=them');
	 }elseif(isset($_POST['sua'])){
		 //Sua
		 if($HinhAnh!=''){
			  $sql="update sach set TenSach='$TenSach',MaLoaiSach='$loaisach',MaTacGia='$tacgia',MaNXB='$nhaxuatban',HinhAnh='$HinhAnh',MoTa='$MoTa',KichThuoc='$KichThuoc',SoTrang='$SoTrang',LoaiBia='$LoaiBia',DonGia='$DonGia',SoLuongTon='$SoLuongTon'where MaSach='$id'";
		 }
		 else{
			 $sql="update sach set TenSach='$TenSach',SoTrang='$SoTrang',KichThuoc='$KichThuoc',LoaiBia='$LoaiBia',DonGia='$DonGia',SoLuongTon='$SoLuongTon',HinhAnh='$HinhAnh',MaLoaiSach='$loaisach',MaNXB='$nhaxuatban',MaTacGia='$tacgia' where MaSach='$id'";
		 }
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlychitietsach&ac=sua&id='.$id);
		//xóa
	 }else{
		 $sql="delete from Sach where MaSach='$id'";
		 mysql_query($sql);
		  header('location:../../index.php?quanly=quanlychitietsach&ac=them');
	 }
?>
