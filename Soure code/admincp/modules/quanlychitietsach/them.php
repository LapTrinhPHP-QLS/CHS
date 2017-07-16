<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
th{
	background:#666;	
	}
	table{ font-size:18px;


	
	
}
	
</style>
<form action="modules/quanlychitietsach/xuly.php" method="post" enctype="multipart/form-data" >
  <table width="100%" border="1">
  <tr>
    <th height="39" colspan="2" align="center">Thêm Sách</th>
  </tr>
  <tr>
    <td width="30%">&nbsp;<i class="fa fa-paw" style="font-size:24px"></i>&nbsp;&nbsp;Tên Sách</td>
    <td width="70%"><input type="text" name="TenSach" required="required" /></td>
    </tr>
  <tr>
    <td>&nbsp;<i class="fa fa-institution" style="font-size:24px"></i>&nbsp;&nbsp;Số Trang</td>
    <td><input type="text" name="SoTrang" required="required" /></td>
    </tr>
  <tr>
    <td>&nbsp;<i class="fa fa-tint" style="font-size:24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;Kích Thước</td>
    <td><input type="text" name="KichThuoc" required="required" /></td>
    </tr>
  
   <tr>
     <td height="37">&nbsp;<i class="fa fa-camera-retro" style="font-size:24px"></i>&nbsp;&nbsp;Loại Bìa</td>
     <td><input type="text" name="LoaiBia" required="required" /></td>
    </tr>
   <tr>
     <td>&nbsp;<i class="fa fa-history" style="font-size:24px"></i>&nbsp;&nbsp;Đơn Giá</td>
     <td><input type="text" name="DonGia" required="required" /></td>
    </tr>
   <tr>
     <td>&nbsp;<i class="fa fa-history" style="font-size:24px"></i>&nbsp;&nbsp;Số Lượng Tồn</td>
     <td><input type="text" name="SoLuongTon" required="required" /></td>
    </tr>
     <?php
  $sql="select * from LoaiSach";
  $run=mysql_query($sql);
    
  ?>
  
   <tr>
    <td>&nbsp;<i class="fa fa-star" style="font-size:24px"></i>&nbsp;&nbsp;Loại Sách </td>
    <td><select name="loaisach" required="required" >
      <option value="">-- --</option>
      <?php
    while($dong_loaisach=mysql_fetch_array($run)){
		?>
      <option value="<?php echo $dong_loaisach['MaLoaiSach']?>">
        <?php
    echo $dong_loaisach['TenLoaiSach']?>
        </option>
      <?php
	}
	?>
    </select></td>
     
    </tr>
   <?php
  $sql="select * from tacgia";
  $run=mysql_query($sql);
    
  ?>
  <tr>
    <td>&nbsp;<i class="fa fa-star" style="font-size:24px"></i>&nbsp;&nbsp;Tác Giả </td>
    <td><select name="tacgia" required="required"  >
      <option value="">-- --</option>
      <?php
    while($dong_tacgia=mysql_fetch_array($run)){
		?>
      <option value="<?php echo $dong_tacgia['MaTacGia']?>">
        <?php
    echo $dong_tacgia['TenTacGia']?>
        </option>
      <?php
	}
	?>
    </select></td>
    </tr>
    <?php
  $sql="select * from nhaxb";
  $run=mysql_query($sql);
    
  ?>
  <tr>
    <td>&nbsp;<i class="fa fa-star" style="font-size:24px"></i>&nbsp;&nbsp;Nhà Xuất Bản</td>
    <td><select name="nhaxuatban" required="required" >
      <option value="">-- --</option>
      <?php
    while($dong_nhaxuatban=mysql_fetch_array($run)){
		?>
      <option value="<?php echo $dong_nhaxuatban['MaNXB']?>">
        <?php
    echo $dong_nhaxuatban['TenNXB']?>
        </option>
      <?php
	}
	?>
    </select></td>
  </tr>
  <tr>
    <td>&nbsp;<i class="fa fa-camera-retro" style="font-size:24px"></i>&nbsp;&nbsp;Hình Ảnh</td>
    <td><input type="file" name="HinhAnh" required="required" /></td>
  </tr>
  <tr>
    <td>&nbsp;<i class="fa fa-commenting" style="font-size:24px"></i>&nbsp;&nbsp;Mô tả</td>
    <td><textarea name="MoTa" cols="45" rows="9"></textarea></td>
  </tr>
 
 
 
  <tr>
    <td colspan="2" align="center" class="th"><br />
      <button name="them" id="them" value="Thêm" style="background-color:#CCC; font-size:24px; font-family:'Times New Roman', Times, serif">Thêm</button></td>
  </tr>
  </table>
</form>
