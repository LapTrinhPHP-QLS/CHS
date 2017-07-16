
<?php
     $sql="select * from Sach where MaSach='$_GET[id]'";
	 $run=mysql_query($sql);
	 $dong= mysql_fetch_array($run);
?>
<style>
th{
	background:#666	
	}
</style>
<form action="modules/quanlychitietsach/xuly.php?id=<?php echo $dong['MaSach']?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <th colspan="2"><div align="center">Sửa Chi Tiết Sách</div></th>
  </tr>
  <tr>
    <td>Tên Sách</td>
    <td><input type="text" name="TenSach" value="<?php echo $dong['TenSach']?>"></td>
  </tr>
  <tr>
    <td>Số Trang</td>
    <td><input type="text" name="SoTrang" value="<?php echo $dong['SoTrang']?>"></td>
  </tr>
  <tr>
    <td>Kích Thước</td>
    <td><input type="text" name="KichThuoc" value="<?php echo $dong['KichThuoc']?>"></td>
  </tr>
  <tr>
    <td>Loại Bìa</td>
    <td><input type="text" name="LoaiBia" value="<?php echo $dong['LoaiBia']?>"></td>
  </tr>
  <tr>
    <td>Giá</td>
    <td><input type="text" name="DonGia" value="<?php echo $dong['DonGia']?>"></td>
  </tr>
   <tr>
    <td>Số Lượng Tồn</td>
    <td><input type="text" name="SoLuongTon" value="<?php echo $dong['SoLuongTon']?>"></td>
  </tr>
   <tr>
     <td>Hình Ảnh</td>
     <td><input type="file" name="HinhAnh" value="<?php echo $dong['HinhAnh']?>" ></td>
   </tr>
   <tr>
    <td>Mô Tả Sách</td>
    <td><textarea name="MoTa" cols="40" rows="15"><?php echo $dong['MoTa']?></textarea></td>
  </tr>
  <?php
  $sql_loaisach="select * from LoaiSach";
  $run_loaisach=mysql_query($sql_loaisach);
    
  ?>
  <tr>
    <td>Loại sách</td>
    <td><select name="loaisach">
    <?php
    while($dong_loaisach=mysql_fetch_array($run_loaisach)){
		if($dong['MaLoaiSach']==$dong_loaisach['MaLoaiSach']){
		?>
    <option selected="selected" value="<?php echo $dong_loaisach['MaLoaiSach']?>"><?php
    echo $dong_loaisach['TenLoaiSach']?> </option>
    <?php
	}else{
	?>
    <option value="<?php echo $dong_loaisach['MaLoaiSach']?>"><?php
    echo $dong_loaisach['TenLoaiSach']?> </option>
    <?php
	}
	}
	?>
    </select></td>
  </tr>
   <?php
  $sql_tacgia="select * from tacgia";
  $run_tacgia=mysql_query($sql_tacgia);
  ?>
  <tr>
    <td>Tác Giả</td>
    <td><select name="tacgia">
    <?php
    while($dong_tacgia=mysql_fetch_array($run_tacgia)){
		if($dong['MaTacGia']==$dong_tacgia['MaTacGia']){
		?>
    <option selected="selected" value="<?php echo $dong_tacgia['MaTacGia']?>"><?php
    echo $dong_tacgia['TenTacGia']?> </option>
    <?php
	}else{
	?>
    <option value="<?php echo $dong_tacgia['MaTacGia']?>"><?php
    echo $dong_tacgia['TenTacGia']?> </option>
    <?php
	}
	}
	?>
    </select></td>
  </tr>
  
  <?php
  $sql_nhaxuatban="select * from nhaxb";
  $run_nhaxuatban=mysql_query($sql_nhaxuatban);
  ?>
  <tr>
    <td>Nhà Xuất Bản</td>
    <td><select name="nhaxuatban">
    <?php
    while($dong_nhaxuatban=mysql_fetch_array($run_nhaxuatban)){
		if($dong['MaNXB']==$dong_nhaxuatban['MaNXB']){
		?>
    <option selected="selected" value="<?php echo $dong_nhaxuatban['MaNXB']?>"><?php
    echo $dong_nhaxuatban['TenNXB']?> </option>
    <?php
	}else{
	?>
    <option value="<?php echo $dong_nhaxuatban['MaNXB']?>"><?php
    echo $dong_nhaxuatban['TenNXB']?> </option>
    <?php
	}
	}
	?>
    </select></td>
  </tr>
  <tr>
    <td colspan="2"> <div align="center">
      <button name="sua" value="Sửa" style="background-color:#CCC; font-size:24px; font-family:'Times New Roman', Times, serif">Sửa</button>
      </div>
      </td>
  </tr>
</table>
</form>
